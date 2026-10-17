# Postcode Auto Fill for Zen Cart

Type a postal/zip code and the state, city and (where the data has it) street address fill themselves in. If a code covers several cities or streets, hovering the field shows the choices, and clicking one fills it in.

It works on the Create Account and Login forms, the address book, the checkout address pages, and One-Page Checkout's checkout page (billing and shipping, guests and account holders alike). No template file is changed.

An encapsulated plugin (`zc_plugins/PostAuto/`) for **Zen Cart 1.5.8 through 3.0.0** on **PHP 7.4 through 8.5**.

Postal data ships for the United States (and Palau), Spain, France and its territories, Germany, Italy, Switzerland and Liechtenstein, Austria, Australia and Japan (Japanese or romaji, following the shopper's language).

## Quick start

1. Upload `zc_plugins/PostAuto` into the store's `zc_plugins` folder.
2. **Modules > Plugin Manager**: install Postcode Auto Fill. It loads about 300,000 postal codes, so give it a minute.

Coming from Postal Code Automatic v2.0.x? It's the same plugin folder (`PostAuto`): upload `v3.0.0` beside your old version folder and click **Upgrade**. Your postal code tables are kept.

The full guide is `readme.html` (also inside the plugin and linked from Plugin Manager), including how to add another country.

## Compatibility

| | Tested |
|---|---|
| Zen Cart | 1.5.8a, 2.0.1, 2.1.0, 2.2.2, 2.3 (branch), 3.0.0-dev |
| PHP | 7.4, 8.0, 8.1, 8.2, 8.3, 8.4, 8.5 (each Zen Cart version on every PHP it supports) |
| Database | MariaDB 11.4, no table prefix (prefix handling checked by a test harness). On a server without MySQL 8's Japanese collation the Japanese table uses a binary one. |
| One-Page Checkout | v2.7.0 on Zen Cart 3.0.0: guest checkout with separate billing and shipping addresses, saved through OPC |
| Templates | responsive_classic and a Bootstrap 5 template; jQuery may load in the head or the footer |

## What's new in v3.0.0

Postcode Auto Fill is the continuation of piloujp's [Postal Code Automatic](https://github.com/piloujp/Postcode_auto) (v2.0.8 and the unreleased v2.1.0), made to run on every current Zen Cart:

- Runs on Zen Cart 1.5.8, 2.0.x and 2.1.x as well as 2.2 and later.
- Installs on Linux hosts: the installer folder is now `Installer/`, the name Zen Cart looks for.
- Installs on MariaDB and MySQL 5.7, and on stores with a table prefix.
- Upgrades from v2.0.x finish on stores with no Japanese zones (the update script used to stop half way).
- Works on One-Page Checkout's checkout page, for guests too.

See [CHANGELOG.md](CHANGELOG.md) for the full list.

## License

GNU General Public License, version 3. See [LICENSE](LICENSE). Postal Code Automatic is by piloujp; v3 changes by My Zen Cart Host (dbltoe). PowerTip is by Steven Benner, MIT license: see [LICENSE-Powertip.txt](LICENSE-Powertip.txt).
