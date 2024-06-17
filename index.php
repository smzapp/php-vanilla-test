<?php

/**
 * @author: Samuel Amador
 */
define('APP_NAME', 'ABUKAI TEST - By Samuel Amador');

define('BASE_URL', 'http://localhost/testabukai');

define('APP_DIR', __DIR__);


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