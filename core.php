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
            $index  = $this->activeRoute[0]; // controller
            $value  = $this->activeRoute[1]; // method

            switch ($index) {
                case 'view':
                    require_once $value;
                    break;
                
                default:
                    $cntrl  = new $index;
                    $cntrl->$value();
                    break;
            }
        } catch(\Exception $e) {
            exit($e->getMessage());
        }
    }
}

$routes = require_once __DIR__ . '/app/routes/routes.php';

$core = new Core($routes);
$core->initialize();