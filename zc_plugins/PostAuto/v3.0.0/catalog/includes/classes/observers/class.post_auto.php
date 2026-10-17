<?php
/**
 * Postcode Auto Fill - storefront observer.
 *
 * Works on Zen Cart 1.5.8 through 3.0.0: it relies only on base::attach() and on the
 * NOTIFY_HTML_HEAD_END notifier, which every release from 1.5.8 on fires at the end of
 * html_header.php.  (The InteractsWithPlugins trait used previously exists only from 2.1.0.)
 */

class zcObserverPostAuto extends base
{
    /**
     * Pages that carry an address form.  checkout_one is One-Page Checkout's page, for both
     * guest and account-holder checkout; its billing/shipping fields are suffixed -bill/-ship.
     */
    protected array $pages = [
        'login',
        'create_account',
        'address_book_process',
        'checkout_shipping_address',
        'checkout_payment_address',
        'checkout_one',
    ];

    /**
     * This plugin version's catalog directory, relative to the store root, e.g.
     * zc_plugins/PostAuto/v3.0.0/catalog/
     */
    protected string $catalogPath;

    public function __construct()
    {
        $version_dir = dirname(__DIR__, 4);
        $this->catalogPath = 'zc_plugins/' . basename(dirname($version_dir)) . '/' . basename($version_dir) . '/catalog/';

        // NOTIFY_ZEN_REDIRECT exists from Zen Cart 2.2.0; attaching to it on older releases is harmless.
        $this->attach($this, ['NOTIFY_HTML_HEAD_END', 'NOTIFY_ZEN_REDIRECT']);
    }

    /**
     * Catalog: Runs at the end of the active template's html_header.php (just before the </head> tag)
     */
    public function notify_html_head_end(&$class, $eventID, $current_page_base)
    {
        if (!in_array($current_page_base, $this->pages, true)) {
            return;
        }

        // Not named stylesheet_*.css: Zen Cart 3.0.0 links every plugin's stylesheet*.css on every page.
        // Style overrides belong in one of the template's own stylesheet*.css files, which core always loads.
        echo '<link rel="stylesheet" href="' . $this->pluginAsset('css', 'jquery.powertip.min.css') . '">' . "\n";

        $config = [
            'ajaxUrl' => 'ajax.php?act=AjaxPostcodeQuery&method=postcodequery',
            'securityToken' => $_SESSION['securityToken'] ?? '',
            'powertipUrl' => $this->scriptAsset('jquery.powertip.min.js', $current_page_base),
        ];
        echo '<script>window.postAutoConfig = ' . json_encode($config, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_UNESCAPED_SLASHES) . ';</script>' . "\n";
        echo '<script src="' . $this->scriptAsset('jquery.postcode_auto.js', $current_page_base) . '" defer></script>' . "\n";
    }

    /**
     * Zen Cart 2.2.0+: keep a redirect raised during this plugin's own AJAX request from
     * sending the browser an HTML page in place of the JSON it expects.  Every other ajax.php
     * request (One-Page Checkout's, payment modules') is left alone.
     */
    public function notify_zen_redirect(&$class, $eventID, $params, &$stopRedirect)
    {
        if (basename($_SERVER['SCRIPT_NAME'] ?? '') === 'ajax.php' && ($_GET['act'] ?? '') === 'AjaxPostcodeQuery') {
            $stopRedirect = true;
        }
    }

    protected function pluginAsset(string $subdir, string $filename): string
    {
        return $this->catalogPath . 'includes/templates/default/' . $subdir . '/' . $filename;
    }

    /**
     * The copy of $filename in the store's template (or template_default), or '' if there is none.
     * get_template_dir() looks in the active template before plugins on every release 1.5.8 - 3.0.0.
     */
    protected function templateAsset(string $subdir, string $filename, string $current_page_base): string
    {
        global $template;
        if (!is_object($template)) {
            return '';
        }
        $dir = rtrim($template->get_template_dir($filename, DIR_WS_TEMPLATE, $current_page_base, $subdir), '/') . '/';
        return file_exists($dir . $filename) ? $dir . $filename : '';
    }

    /**
     * A script is used from the store's template when it has one of the same name (an override);
     * otherwise from the plugin.
     */
    protected function scriptAsset(string $filename, string $current_page_base): string
    {
        $template_js = $this->templateAsset('jscript', $filename, $current_page_base);
        return ($template_js !== '') ? $template_js : $this->pluginAsset('jscript', $filename);
    }
}
