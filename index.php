<?php

/**
 * @author: Samuel Amador
 */
define('APP_NAME', 'ABUKAI TEST');

define('BASE_URL', 'http://localhost/testabukai');


/**
 * Enable autoloader for our MVC app
 */
require_once 'autoload.php';

/**
 * Require all helpers
 */
$directory = __DIR__ . '/app/helpers/';

$files = glob($directory . '*.php');

foreach ($files as $file) {
    require_once $file;
}


/**
 * We execute core which is the central unit of the app
 */
require_once 'core.php';