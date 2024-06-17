<?php
namespace app\library;

class Request 
{
    /**
     * Group All Requests and return the active route
     */
    public static function group($routes)
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $path   = get_request_path();

        $path = strtok($path, '?');
        
        if (isset($routes[$method])) {
            foreach ($routes[$method] as $route => $handler) {
                if ($route === $path) {
                    return $handler;
                }
            }
        }

        exit('Unable to find request.');
    }    
}