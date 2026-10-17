<?php

$plugin_folder = basename(dirname(__DIR__));
$version_folder = basename(__DIR__);

$plugin_readme = (defined('DIR_WS_CATALOG') ? DIR_WS_CATALOG : '/') . 'zc_plugins/' . $plugin_folder . '/' . $version_folder . '/readme.html';
$plugin_github = 'https://github.com/dbltoe/Postcode_Auto_Fill';
$plugin_forum = 'https://www.zen-cart.com/threads/205577';

$button_readme = '<a class="btn btn-primary btn-sm" href="' . $plugin_readme . '" target="_blank"><i class="fa fa-book"></i> Readme</a>';
$button_github = '<a class="btn btn-info btn-sm" href="' . $plugin_github . '" target="_blank"><i class="fa-solid fa-code-branch"></i> GitHub</a>';
$button_forum  = '<a class="btn btn-success btn-sm" href="' . $plugin_forum . '" target="_blank"><i class="fa fa-comments"></i> Forum</a>';

$buttons = '<div class="buttons my-2">' . $button_readme . ' ' . $button_github . ' ' . $button_forum . '</div>';

return [
    'pluginVersion' => 'v3.0.0',
    'pluginName' => 'Postcode Auto Fill',
    'pluginDescription' => 'Fills in the state, city and (where the data has it) street address as soon as a postal/zip code is typed, on the account, address book and checkout forms, One-Page Checkout included.' . $buttons,
    'pluginAuthor' => 'piloujp; v3 by My Zen Cart Host (dbltoe)',
    'pluginId' => 0, // not yet in the Zen Cart Plugins Library (2370 is piloujp's Postal Code Automatic listing)
    'zcVersions' => ['v1.5.8', 'v1.5.8a', 'v2.0.0', 'v2.0.1', 'v2.1.0', 'v2.2.0', 'v2.2.1', 'v2.2.2', 'v2.3.0', 'v3.0.0'],
    'changelog' => 'https://github.com/dbltoe/Postcode_Auto_Fill/releases/tag/v3.0.0', // online URL (eg github release tag page, or changelog file there) or local filename only, ie: changelog.txt (in same dir as this manifest file)
    'github_repo' => $plugin_github, // url
    'pluginGroups' => [],
];
