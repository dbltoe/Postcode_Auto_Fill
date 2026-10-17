<?php
/**
 * @copyright Copyright 2003-2025 Zen Cart Development Team
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: pilou2 2025 April 17 Modified in Postcode Auto Fill v3.0.0 $
 *
 * Uses the store's own database connection ($db), so it honors the configured port, socket and
 * DB_CHARSET, and needs no pdo_mysql extension.  Works on Zen Cart 1.5.8 through 3.0.0.
 */

class zcAjaxPostcodeQuery extends base
{
    /**
     * Zen Cart 2.2.0+ ajax.php refuses any other method name for this class.
     */
    public const ALLOWED_METHODS = ['postcodequery'];

    /**
     * Returns the address parts matching the posted country and postal code (and city, where the
     * country's data has several cities or streets per code).  Always an array, empty when nothing matches.
     *
     * Each entry: zone_id (int, 0 when the store has no matching zone), zone_name, city, street_name.
     */
    public function postcodequery(): array
    {
        global $db, $sniffer;

        $country_id = (int)($_POST['country'] ?? 0);
        $postcode = preg_replace('/[^0-9A-Za-z]/', '', (string)($_POST['postcode'] ?? ''));
        $city = trim((string)($_POST['city'] ?? ''));
        if ($country_id <= 0 || strlen($postcode) < 4 || strlen($postcode) > 32) {
            return [];
        }

        $country = $db->Execute("SELECT countries_iso_code_3 FROM " . TABLE_COUNTRIES . " WHERE countries_id = " . $country_id . " LIMIT 1");
        if ($country->EOF) {
            return [];
        }

        // Per country: the data table, its columns, whether it holds several countries ($by_country)
        // and whether it has street names, which is when a city can narrow the result ($by_city).
        $columns = 'zone_id, zone_name, zone_city_name';
        $city_column = 'zone_city_name';
        $by_country = false;
        $by_city = false;
        switch ($country->fields['countries_iso_code_3']) {
            case 'JPN':
                $table = TABLE_ZONES_TO_POST_CODE_JP;
                if (($_SESSION['language'] ?? '') === 'japanese') {
                    $columns = 'zone_id, zone_name, zone_city_name, zone_street_name';
                } else {
                    $columns = 'zone_id, zone_name_romaji AS zone_name, zone_city_name_romaji AS zone_city_name, zone_street_name_romaji AS zone_street_name';
                    $city_column = 'zone_city_name_romaji';
                }
                $by_city = true;
                break;
            case 'FRA':
            case 'GUF':
            case 'PYF':
            case 'ATF':
            case 'GLP':
            case 'MTQ':
            case 'MYT':
            case 'MCO':
            case 'REU':
            case 'WLF':
            case 'SPM':
                $table = TABLE_ZONES_TO_POST_CODE_FR;
                $columns = 'zone_id, zone_name, zone_city_name, zone_street_name';
                $by_country = true;
                $by_city = true;
                break;
            case 'PLW':
            case 'USA':
                $table = TABLE_ZONES_TO_POST_CODE_US;
                $by_country = true;
                break;
            case 'ESP':
                $table = TABLE_ZONES_TO_POST_CODE_ES;
                break;
            case 'DEU':
                $table = TABLE_ZONES_TO_POST_CODE_DE;
                break;
            case 'ITA':
                $table = TABLE_ZONES_TO_POST_CODE_IT;
                break;
            case 'LIE':
            case 'CHE':
                $table = TABLE_ZONES_TO_POST_CODE_CH;
                $by_country = true;
                break;
            case 'AUS':
                $table = TABLE_ZONES_TO_POST_CODE_AU;
                break;
            case 'AUT':
                $table = TABLE_ZONES_TO_POST_CODE_AT;
                break;
            default:
                return [];
        }

        // A country whose data was not installed (or was dropped) answers "no match", not a database error page.
        if (!is_object($sniffer) || !$sniffer->table_exists($table)) {
            return [];
        }

        $sql = "SELECT " . $columns . " FROM " . $table . " WHERE post_code = :postcode";
        if ($by_country) {
            $sql .= " AND zone_country_id = " . $country_id;
        }
        $sql = $db->bindVars($sql, ':postcode', $postcode, 'string');
        // Bound last, so nothing typed into the city can be taken for another placeholder.
        if ($by_city && $city !== '') {
            $sql .= " AND " . $city_column . " = :city";
            $sql = $db->bindVars($sql, ':city', $city, 'string');
        }

        $zone = [];
        $result = $db->Execute($sql);
        while (!$result->EOF) {
            $zone[] = [
                'zone_id' => (int)$result->fields['zone_id'],
                'zone_name' => trim((string)$result->fields['zone_name']),
                'city' => trim((string)$result->fields['zone_city_name']),
                'street_name' => trim((string)($result->fields['zone_street_name'] ?? '')),
            ];
            $result->MoveNext();
        }
        return $zone;
    }
}
