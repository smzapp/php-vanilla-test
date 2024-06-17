<?php
namespace app\models;

use app\library\Database;


class BaseModel {

    private $dataArray;
    private $childClass;
    private $tableName;
    public $conn;

    public function __construct($data = []) 
    {
        if (is_array($data) && count($data)) {
            $this->dataArray = $data;
        }
        $db = new Database();
        $this->conn = $db->getConnection();
    }


    public function initChildClass()
    {
        $this->child = get_called_class(); 
        $child = new $this->child;
        $this->tableName = $child->table;
    }

    public function save()
    {  
        $this->initChildClass();

        $fields = implode(', ', array_keys($this->dataArray));
        $placeholders = ':' . implode(', :', array_keys($this->dataArray));
        $sql = "INSERT INTO $this->tableName ($fields) VALUES ($placeholders)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($this->dataArray);

        return $this->conn->lastInsertId();
    }

}