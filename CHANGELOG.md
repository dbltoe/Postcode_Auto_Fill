# Changelog

## v3.0.0 (2026-10-17)

Renamed Postcode Auto Fill. Built on piloujp's Postal Code Automatic v2.1.0 (unreleased) and v2.0.8. The plugin folder is still `zc_plugins/PostAuto`, so Plugin Manager offers an upgrade from v2.0.x.

### Compatibility

- Zen Cart 1.5.8 through 3.0.0 (was 2.1.0 and later), PHP 7.4 through 8.5.
- The storefront observer no longer uses the `InteractsWithPlugins` trait, which exists only from Zen Cart 2.1.0.
- Zen Cart 1.5.8's `ajax.php` never looks in `zc_plugins`; on that release the plugin answers its own lookup (`catalog/includes/init_includes/init_post_auto_ajax.php`). It does nothing on 2.0.0 and later.
- The installer's `executeUpgrade()` accepts both the 1.5.8/2.0 call (no argument) and the 2.1+ call (old version).
- One-Page Checkout: the billing and shipping address forms (`-bill` / `-ship` fields) are filled too, for guests and account holders, and OPC sees each change.
- Also runs on the Create Account and Checkout Payment Address pages.

### Fixes

- The installer folder is `Installer/`, the name Zen Cart looks for. A lowercase `installer/` is never found on case-sensitive (Linux) hosts, so no postal tables were created there.
- The Japanese table used the MySQL 8-only collation `utf8mb4_ja_0900_as_cs_ks`, so install failed on MariaDB and MySQL 5.7. Those servers now get `utf8mb4_bin`.
- Installs on stores with a table prefix: the data files' `zones` and `countries` lookups now get `DB_PREFIX`.
- Upgrades chose their data updates from the new version instead of the old one, so they ran every time (or never on 1.5.8/2.0).
- The Japanese data updates stopped half way, after their deletions, on any store without Japanese zones (`Column 'zone_id' cannot be null`).
- The postal lookup now uses the store's own database connection: it honors the configured port, socket and character set (Japanese text could arrive garbled before) and no longer needs the `pdo_mysql` extension.
- Picking a city in English (romaji) now narrows the Japanese street list; it matched against the Japanese city name before and found nothing.
- The lookup always answers with a list, empty when nothing matches, and never with database error text.
- A stray space before `<?php` in the observer was sent ahead of every page.
- Redirects are blocked only for the plugin's own lookup request, not for every `ajax.php` call (including One-Page Checkout's and payment modules').
- Zen Cart 3.0.0 links every plugin `stylesheet*.css` on every page; the PowerTip stylesheet is now `jquery.powertip.min.css` and loads only on address pages.

### Changes

- The browser script is a static file (`jquery.postcode_auto.js`), loaded deferred, so jQuery may load in the head or the footer.
- Choice lists are built as page elements rather than HTML strings, so names with quotes or apostrophes work.
- Full-width digits, spaces and dashes in a postal code are ignored.
- Choosing the country after typing the postal code looks the code up again.
