<?php
namespace App\Libraries;

class TestLibrarie{
    // how we can load the database in our custom library 
    public $db;
    public function __construct(){
        $this->db = \Config\Database::connect();   
    }
    public function getData(){
        return $this->db->query("SELECT * FROM articles")->getResultArray();
    }
}

?>