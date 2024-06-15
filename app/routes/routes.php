<?php 
namespace app\routes;

use app\controllers\CustomerController;
use app\library\Request;

/**
 * Return active controller & method
 */
return Request::group([

    'GET' => [
        '/customers' => [CustomerController::class, 'index'],
        '/customers-info' => [CustomerController::class, 'info'],
    ],

    'POST' => [
        '/customers' => [CustomerController::class, 'store'],
    ]
]);