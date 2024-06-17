<?php 
namespace app\routes;

use app\controllers\CustomerController;
use app\library\Request;

/**
 * @author Samuel Amador
 * Return active controller & method
 */
return Request::group([

    "GET" => [
        '/customers' => [CustomerController::class, 'add'],
        '/customers/list' => [CustomerController::class, 'index'],
        '/customers/edit' => [CustomerController::class, 'edit'],
    ],

    "POST" => [
        '/customers' => [CustomerController::class, 'store'],
    ],

    "UPDATE" => [
        '/customers/update' => [CustomerController::class, 'update'],
    ]
]);