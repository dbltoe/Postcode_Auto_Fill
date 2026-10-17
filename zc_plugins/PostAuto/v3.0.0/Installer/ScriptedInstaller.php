<?php
use Zencart\PluginSupport\ScriptedInstaller as ScriptedInstallBase;

class ScriptedInstaller extends ScriptedInstallBase
{
    protected array $data_country = ['at', 'au', 'ch', 'de', 'es', 'fr', 'it', 'jp', 'us'];

    /**
     * Collation the Japanese table asks for; MySQL 8.0+ only (MariaDB and MySQL 5.7 lack it).
     */
    protected const JA_COLLATION = 'utf8mb4_ja_0900_as_cs_ks';

    /**
     * null until checked, then whether the database server knows JA_COLLATION.
     */
    protected ?bool $jaCollationSupported = null;

    protected function tableconstants()
    {
        // Create a table constant for each new table
        foreach ($this->data_country as $cod) {
            if (!defined('TABLE_ZONES_TO_POST_CODE_' . strtoupper($cod))) {
                define('TABLE_ZONES_TO_POST_CODE_' . strtoupper($cod), DB_PREFIX . 'zones_to_post_code_' . $cod);
            }
        }
        unset($cod);
    }

    /**
     * The data files name the core tables literally ("FROM zones WHERE", "FROM countries WHERE") inside
     * multi-megabyte string literals; splitting those literals with constants makes PHP need far more than
     * 128M just to compile the Japanese file. So the store's DB_PREFIX is applied here, once per statement,
     * and the Japanese collation is swapped for utf8mb4_bin on servers that do not have it.
     *
     * Declared with ": bool" so it is compatible with both the untyped (1.5.8/2.0) and typed (2.1+) parent.
     */
    protected function executeInstallerSql($sql): bool
    {
        if (DB_PREFIX !== '') {
            $sql = str_replace(
                ['FROM zones WHERE', 'FROM countries WHERE'],
                ['FROM ' . TABLE_ZONES . ' WHERE', 'FROM ' . TABLE_COUNTRIES . ' WHERE'],
                $sql
            );
        }
        if (strpos($sql, self::JA_COLLATION) !== false && !$this->jaCollationSupported()) {
            $sql = str_replace(self::JA_COLLATION, 'utf8mb4_bin', $sql);
        }
        return (bool)parent::executeInstallerSql($sql);
    }

    protected function jaCollationSupported(): bool
    {
        if ($this->jaCollationSupported === null) {
            $check = $this->dbConn->Execute("SHOW COLLATION LIKE '" . self::JA_COLLATION . "'");
            $this->jaCollationSupported = !$check->EOF;
        }
        return $this->jaCollationSupported;
    }

    protected function executeInstall()
    {
        zen_set_time_limit(300);

        global $sniffer;

        // This can be commented out after first installation or if you have never installed a non-encapsulated version of this plugin.
        $this->removeOldNonencapsulatedPostauto();

        $this->tableconstants(); // Create each constant of the database tables for the post codes data.

        foreach ($this->data_country as $v) {
            if ($sniffer->table_exists(constant('TABLE_ZONES_TO_POST_CODE_' . strtoupper($v))) !== true) {
                $result = include __DIR__ . '/sql/install/zones_to_post_code_' . $v . '.php';
            }
        }
        unset($v);

        return parent::executeInstall();
    }

    // Zen Cart 1.5.8 and 2.0.x call executeUpgrade() with no argument; 2.1.0 and later pass the
    // previously-installed version (e.g. 'v2.0.8').  The default keeps this signature compatible
    // with both.  No release before v3.0.0 ran on 1.5.8 or 2.0.x, so there an unknown old version
    // is a v3 one and the older data updates below are skipped.
    //
    protected function executeUpgrade($oldVersion = '')
    {
        zen_set_time_limit(300);

        global $sniffer;

        $this->tableconstants();

        $oldVersion = ltrim((string)$oldVersion, 'vV');
        if ($oldVersion === '') {
            $oldVersion = '3.0.0';
        }

        if ($sniffer->table_exists(constant('TABLE_ZONES_TO_POST_CODE_JP')) === true) {
            if (version_compare($oldVersion, '2.0.1', '<')) {
                include __DIR__ . '/sql/upgrade/zones_to_post_code_jp_update2025-03.php';
            }
            if (version_compare($oldVersion, '2.1.0', '<')) {
                include __DIR__ . '/sql/upgrade/zones_to_post_code_jp_update2026-09.php';
            }
        }

        // Comment out following lines if you don't want missing tables to be reinstalled.
        foreach ($this->data_country as $v) {
            if ($sniffer->table_exists(constant('TABLE_ZONES_TO_POST_CODE_' . strtoupper($v))) !== true) {
                $result = include __DIR__ . '/sql/install/zones_to_post_code_' . $v . '.php';
            }
        }
        unset($v);
        // --------------------------------------------------------------------------------

        return parent::executeUpgrade($oldVersion);
    }

    protected function executeUninstall()
    {
        $this->tableconstants();
        // To keep postal codes database for a country from being deleted when uninstalling, comment the corresponding line
        $this->executeInstallerSql("DROP TABLE IF EXISTS " . TABLE_ZONES_TO_POST_CODE_AT);
        $this->executeInstallerSql("DROP TABLE IF EXISTS " . TABLE_ZONES_TO_POST_CODE_AU);
        $this->executeInstallerSql("DROP TABLE IF EXISTS " . TABLE_ZONES_TO_POST_CODE_CH);
        $this->executeInstallerSql("DROP TABLE IF EXISTS " . TABLE_ZONES_TO_POST_CODE_DE);
        $this->executeInstallerSql("DROP TABLE IF EXISTS " . TABLE_ZONES_TO_POST_CODE_ES);
        $this->executeInstallerSql("DROP TABLE IF EXISTS " . TABLE_ZONES_TO_POST_CODE_FR);
        $this->executeInstallerSql("DROP TABLE IF EXISTS " . TABLE_ZONES_TO_POST_CODE_IT);
        $this->executeInstallerSql("DROP TABLE IF EXISTS " . TABLE_ZONES_TO_POST_CODE_JP);
        $this->executeInstallerSql("DROP TABLE IF EXISTS " . TABLE_ZONES_TO_POST_CODE_US);

        return parent::executeUninstall();
    }

    protected function removeOldNonencapsulatedPostauto(): void
    {
        $filesToDelete = [
            DIR_FS_CATALOG . 'includes/classes/ajax/zcAjaxPostcodeQuery.php',
            DIR_FS_CATALOG . 'includes/modules/pages/address_book_process/jscript_postcode.js',
            DIR_FS_CATALOG . 'includes/modules/pages/checkout_shipping_address/jscript_postcode.js',
            DIR_FS_CATALOG . 'includes/modules/pages/login/jscript_postcode.js',
            DIR_FS_CATALOG . 'includes/templates/responsive_classic/css/stylesheet_jquery.powertip.min.css',
            DIR_FS_CATALOG . 'includes/templates/responsive_classic/jscript/jquery.powertip.min.js',
        ];
        $isOld = false;

        // Zen Cart 1.5.8 and 2.0.x load only the admin's own language from Installer/languages (no English fallback).
        $error_message = defined('ERROR_UNABLE_TO_DELETE_FILE') ? ERROR_UNABLE_TO_DELETE_FILE : 'Failed to delete old file: %s - Please remove manually.';

        foreach ($filesToDelete as $nextFile) {
            if (file_exists($nextFile)) {
                $result = unlink($nextFile);
                if (!$result && file_exists($nextFile)) {
                    $this->errorContainer->addError(
                        0,
                        sprintf($error_message, $nextFile),
                        false,
                        // this str_replace has to do DIR_FS_ADMIN before CATALOG because catalog is contained within admin, so results are wrong.
                        // also, '[admin_directory]' is used to obfuscate the admin dir name, in case the user copy/pastes output to a public forum for help.
                        sprintf($error_message, str_replace([DIR_FS_ADMIN, DIR_FS_CATALOG], ['[admin_directory]/', ''], $nextFile))
                    );
                } else {
                    $isOld = true;
                }

            }
        }
        if ($isOld !== true) {
            $this->executeUninstall();
        }
    }
}
