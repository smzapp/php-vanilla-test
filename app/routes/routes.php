<?php 
namespace app\routes;

use app\controllers\CustomerController;
use app\library\Request;

/**
 * @author Samuel Amador
 * Return active controller & method
 */
$group = Request::group([

    "GET" => [
        '/' => ['view', dir_views('main')],
        '/customers' => [CustomerController::class, 'add'],
        '/customers/item' => [CustomerController::class, 'item'],
        '/calculator' => ['view', dir_views('calculator')],
    ],

    "POST" => [
        '/customers' => [CustomerController::class, 'store'],
    ],

    "UPDATE" => [
        '/customers/update' => [CustomerController::class, 'update'],
    ]
]);


return $group;