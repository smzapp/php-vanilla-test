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


return $group;