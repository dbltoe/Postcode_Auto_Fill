<?php
/**
 * Postcode Auto Fill - AJAX responder for Zen Cart 1.5.x.
 *
 * Zen Cart 1.5.8's ajax.php looks for its handler class only in includes/classes/ajax/ and never in
 * zc_plugins/, so the postal-code lookup would always answer "400 Bad Request" there.  On that
 * release this script, run at the end of application_top, answers the plugin's own request the way
 * ajax.php would and stops.  On Zen Cart 2.0.0 and later ajax.php finds the plugin's class itself,
 * so this does nothing.
 */
if (!defined('IS_ADMIN_FLAG')) {
    die('Illegal Access');
}

if ((int)PROJECT_VERSION_MAJOR >= 2
    || basename($_SERVER['SCRIPT_NAME'] ?? '') !== 'ajax.php'
    || ($_GET['act'] ?? '') !== 'AjaxPostcodeQuery'
    || file_exists(DIR_FS_CATALOG . DIR_WS_CLASSES . 'ajax/zcAjaxPostcodeQuery.php')
) {
    return;
}

// Same refusals as ajax.php: no answers for spiders or for any other method.
if ((isset($spider_flag) && $spider_flag === true) || ($_GET['method'] ?? '') !== 'postcodequery') {
    http_response_code(400);
    require DIR_WS_INCLUDES . 'application_bottom.php';
    exit();
}

if (!class_exists('zcAjaxPostcodeQuery', false)) {
    require dirname(__DIR__) . '/classes/ajax/zcAjaxPostcodeQuery.php';
}
$postAutoAjax = new zcAjaxPostcodeQuery();
echo json_encode($postAutoAjax->postcodequery());
require DIR_WS_INCLUDES . 'application_bottom.php';
exit();
