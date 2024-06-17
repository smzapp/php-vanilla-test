<?php 

session_start();

/**
 * @author Samuel Amador
 * Core is the central file
 */
class Core
{
    private $activeRoute;

    public function __construct($route)
    {
        $this->activeRoute = $route;
    }

    public function initialize()
    {
        try {
            $controller = $this->activeRoute[0];
            $method     = $this->activeRoute[1];

            $cntrl = new $controller;
            return $cntrl->$method();
        } catch(\Exception $e) {
            exit($e->getMessage());
        }
    }
}

$routes = require_once __DIR__ . '/app/routes/routes.php';

$core = new Core($routes);
$core->initialize();