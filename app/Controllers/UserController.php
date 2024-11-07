<?php

namespace App\Controllers;

class UserController extends BaseController
{
    public function index()
    {
        $db1 = \Config\Database::connect();
        $db2 = \Config\Database::connect("secondDB");
    //     echo "<pre>";
    //     print_r($db);
    // }
    $q = $db1->query("select * from articles");
    $result = $q->getResult();
    echo "<pre>";
    print_r($result);

    $q = $db2->query("select * from backend_user");
    $result = $q->getResult();
    echo "<pre>";
    print_r($result);
    }
}
