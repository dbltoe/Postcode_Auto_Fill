/**
 * Postcode Auto Fill - fills state, city and street address (where the data has it) once a
 * postal code is typed.
 *
 * Works with Zen Cart's own address forms (#postcode, #city, #state, #stateZone, #street-address,
 * #country) and with One-Page Checkout's billing and shipping blocks, guest or account holder, whose
 * fields carry a -bill or -ship suffix (#postcode-bill, #city-ship, ...).  Handlers are delegated, so
 * address forms that OPC redraws keep working.
 *
 * Settings come from window.postAutoConfig, written by the plugin's observer.  jQuery may be loaded
 * anywhere on the page (head or footer); this file is deferred and starts on DOMContentLoaded.
 */
(function () {
    'use strict';

    var SUFFIXES = ['', '-bill', '-ship'];
    var DELAY = 300;

    function start() {
        var $ = window.jQuery;
        var cfg = window.postAutoConfig;
        if (!$ || !cfg) {
            return;
        }

        var filling = false,    // true while this script sets a field, so its own handlers ignore the change
            lastSent = {},      // per form and kind: the request last sent, to skip repeats and stale answers
            hasStreets = {},    // per form: whether the last postal-code answer carried street names
            timers = {},
            powertip = null;

        function field(name, suffix) {
            return $('#' + name + suffix);
        }

        function selectorFor(name) {
            return $.map(SUFFIXES, function (suffix) {
                return '#' + name + suffix;
            }).join(', ');
        }

        // Full-width digits (Japanese input) become ASCII; spaces, dashes and the long vowel mark go.
        function cleanPostcode(value) {
            return String(value || '')
                .replace(/[０-９]/g, function (c) {
                    return String.fromCharCode(c.charCodeAt(0) - 0xFEE0);
                })
                .replace(/[\s\-‐-―ー－|]/g, '');
        }

        function loadPowertip() {
            if (!powertip) {
                powertip = ($.fn.powerTip || !cfg.powertipUrl)
                    ? $.Deferred().resolve().promise()
                    : $.ajax({url: cfg.powertipUrl, dataType: 'script', cache: true}).then(null, function () {
                        // No choice lists without PowerTip, but the fields are still filled.
                        return $.Deferred().resolve().promise();
                    });
            }
            return powertip;
        }

        function setValue($el, value) {
            if (!$el.length || value === null || value === undefined || $el.val() === String(value)) {
                return;
            }
            filling = true;
            $el.val(String(value)).trigger('change');   // lets One-Page Checkout see the change
            filling = false;
        }

        function setState(suffix, row) {
            var $zone = field('stateZone', suffix);
            if (row.zone_id > 0 && $zone.length && $zone.find('option[value="' + row.zone_id + '"]').length) {
                setValue($zone, row.zone_id);
            } else {
                setValue(field('state', suffix), row.zone_name);
            }
        }

        function distinct(rows, key) {
            var seen = {}, list = [];
            $.each(rows, function (i, row) {
                var value = row[key];
                if (value !== '' && !Object.prototype.hasOwnProperty.call(seen, value)) {
                    seen[value] = true;
                    list.push(value);
                }
            });
            return list;
        }

        // A hover list of choices beside $target; none when there is nothing to choose between.
        function offerChoices($target, values, pick) {
            if (!$target.length || !$.fn.powerTip) {
                return;
            }
            $target.powerTip('destroy');
            if (values.length < 2) {
                return;
            }
            var $list = $('<div class="postauto-choices"></div>');
            $.each(values, function (i, value) {
                $('<p></p>').text(value).on('click', function () {
                    pick(value);
                    $.powerTip.hide();
                }).appendTo($list);
            });
            $target.data('powertipjq', $list).powerTip({placement: 'e', mouseOnToPopup: true});
        }

        function query(suffix, kind, withCity) {
            var postcode = cleanPostcode(field('postcode', suffix).val()),
                country = String(field('country', suffix).val() || ''),
                data,
                key;
            if (postcode.length < 4 || !/^\d+$/.test(country)) {
                return null;
            }
            data = {country: country, postcode: postcode, securityToken: cfg.securityToken};
            if (withCity) {
                data.city = String(field('city', suffix).val() || '').trim();
            }
            key = JSON.stringify(data);
            if (lastSent[suffix + kind] === key) {
                return null;
            }
            lastSent[suffix + kind] = key;
            return $.ajax({
                url: cfg.ajaxUrl,
                type: 'POST',
                data: data,
                dataType: 'json',
                cache: false,
                timeout: 8000,
                headers: {'X-CSRF-Token': cfg.securityToken}
            }).then(function (rows) {
                // An answer to a request since superseded is dropped.
                return (lastSent[suffix + kind] === key && Array.isArray(rows)) ? rows : [];
            }, function () {
                lastSent[suffix + kind] = '';
                return $.Deferred().resolve([]).promise();
            });
        }

        function byPostcode(suffix) {
            var request = query(suffix, 'postcode', false);
            if (!request) {
                return;
            }
            $.when(request, loadPowertip()).done(function (rows) {
                if (!rows.length) {
                    return;
                }
                var first = rows[0];
                hasStreets[suffix] = distinct(rows, 'street_name').length > 0;
                lastSent[suffix + 'city'] = '';
                setState(suffix, first);
                setValue(field('city', suffix), first.city);
                if (first.street_name !== '') {
                    setValue(field('street-address', suffix), first.street_name);
                }
                offerChoices(field('city', suffix), distinct(rows, 'city'), function (city) {
                    setValue(field('city', suffix), city);
                    byCity(suffix);
                });
                offerChoices(field('street-address', suffix), distinct(rows, 'street_name'), function (street) {
                    setValue(field('street-address', suffix), street);
                });
            });
        }

        function byCity(suffix) {
            if (!hasStreets[suffix] || String(field('city', suffix).val() || '').trim().length < 2) {
                return;
            }
            var request = query(suffix, 'city', true);
            if (!request) {
                return;
            }
            $.when(request, loadPowertip()).done(function (rows) {
                if (!rows.length) {
                    return;
                }
                var $street = field('street-address', suffix);
                setState(suffix, rows[0]);
                if ($street.val() === '' || rows[0].street_name !== '') {
                    setValue($street, rows[0].street_name);
                }
                offerChoices($street, distinct(rows, 'street_name'), function (street) {
                    setValue($street, street);
                });
            });
        }

        function schedule(suffix, kind, run) {
            clearTimeout(timers[suffix + kind]);
            timers[suffix + kind] = setTimeout(function () {
                run(suffix);
            }, DELAY);
        }

        $(document).on('input change', selectorFor('postcode'), function () {
            if (!filling) {
                schedule(this.id.substring('postcode'.length), 'postcode', byPostcode);
            }
        });
        // A country chosen after the postal code: look it up again (after core/OPC have redrawn the state list).
        $(document).on('change', selectorFor('country'), function () {
            if (!filling) {
                schedule(this.id.substring('country'.length), 'postcode', byPostcode);
            }
        });
        $(document).on('input change', selectorFor('city'), function () {
            if (!filling) {
                schedule(this.id.substring('city'.length), 'city', byCity);
            }
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', start);
    } else {
        start();
    }
}());
