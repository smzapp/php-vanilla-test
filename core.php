<?php 

/**
 * Core is the central file
 */
class Core
{
    public function __construct($route)
    {
        var_dump($route);
    }
}

$routes = require_once __DIR__ . '/app/routes/routes.php';

new Core($routes);