<?php

namespace App\Controllers;

class Sample extends BaseController
{
    public function create($name,$name1)
    {
        echo "this is a create method: " . $name . $name1;
    }
}
