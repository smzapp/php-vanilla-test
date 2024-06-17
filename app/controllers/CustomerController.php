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

    public function index()
    {
        return Response::view('/customers/list');
    }

    public function add()
    {
        return Response::view('/customers/add');
    }

    public function store()
    {
        try {
            $this->service->storeCustomers();

            return Response::redirect('/customers');

        } catch(\Exception $e) {

            return Response::withSession('/customers');
        }
    }

    public function edit()
    {
        return Response::view('/customers/edit');
    }
    
}