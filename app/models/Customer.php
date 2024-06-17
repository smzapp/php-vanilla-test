<?php
namespace app\models;

use app\models\BaseModel;
use PDO;

class Customer extends BaseModel {
    
    protected $table = 'customers';

    public function findByEmail($email)
    { 
        $sql = "SELECT customers.*, images.* 
        FROM $this->table AS customers 
        LEFT JOIN images ON images.customer_id = customers.id 
        WHERE customers.email = :email";

        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(':email', $email, PDO::PARAM_STR);

        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}