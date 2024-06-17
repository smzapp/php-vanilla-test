<?php 
namespace app\services;

use app\models\Customer;
use app\models\Image;
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
        $id = $customer->save();

        // should create event here
        $upload = UploadService::move('picture');
        
        if(is_array($upload) && count($upload)) {
            $image = new Image([
                'filename' => $upload['filename'],
                'tmpname'  => $upload['tmpname'],
                'path'     => $upload['path'],
                'customer_id' => $id
            ]);
            $image->save();
        }
    }

}