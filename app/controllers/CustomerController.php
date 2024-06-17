<?php
namespace app\controllers;

use app\controllers\BaseController;
use app\library\Response;
use app\services\CustomerService;

class CustomerController extends BaseController
{
    private $service;

    public function __construct()
    {
        $this->service = new CustomerService();
    }

    public function item()
    {
        $result = $this->service->findByEmail();

        return Response::view('/customers/item', [
            'data' => $result
        ]);
    }

    public function add()
    {
        return Response::view('/customers/add');
    }

    public function store()
    {
        try {
            $path = $this->service->storeCustomers();

            return Response::with('/customers', [
                'message' => 'Successfully added data',
                'image_path' => $path
            ]);

        } catch(\Exception $e) {

            return Response::with('/customers');
        }
    }

    public function edit()
    {
        return Response::view('/customers/edit');
    }
    
}