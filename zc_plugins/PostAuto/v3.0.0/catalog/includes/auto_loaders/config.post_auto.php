<?php

if (!defined('IS_ADMIN_FLAG')) {
 die('Illegal Access');
}
$autoLoadConfig[139][] = [
    'autoType'=>'class',

    // the filename, relative to the `classes` folder:
    'loadFile'=>'observers/class.post_auto.php',
    'classPath'=>DIR_WS_CLASSES
];
$autoLoadConfig[139][] = [
    'autoType'=>'classInstantiate',

    // the name of the class as declared inside the observer class file
    'className'=>'zcObserverPostAuto',

    // the name of the global object into which the class is instantiated
    'objectName'=>'zcObserverPostAuto'
];
// Zen Cart 1.5.x only (the script returns at once on 2.0.0+): answers the plugin's ajax.php
// request, which 1.5.8's ajax.php cannot route to a plugin.  Runs after every core init step.
$autoLoadConfig[200][] = [
    'autoType'=>'init_script',
    'loadFile'=>'init_post_auto_ajax.php'
];
