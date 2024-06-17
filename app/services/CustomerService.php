<?php 
namespace app\services;

use app\models\Customer;
use app\services\UploadService;

class CustomerService {

    public function storeCustomers()
    {
        $customer = new Customer([
            'firstname' => post('firstname'),
            'lastname'  => post('lastname'),
            'email'     => post('email'),
            'city'      => post('city'),
            'country'   => post('country'),
        ]);
        // $id = $customer->save();

        $upload = UploadService::move('picture');
    }
}