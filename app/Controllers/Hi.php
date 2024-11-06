<?php

namespace App\Controllers;
// use CodeIgniter\Exceptions\PageNotFoundException;

class Hi extends BaseController
{
    public function index()
    {
        echo "Hello World!";
    }

    public function test($name)
    {
        echo "Hello " . $name;
    }

    public function address($city, $dist)
    {
        echo "I am from " . " " . $city . ", " . $dist;
    }

    // remaping
    // public function _remap(){
    //     echo "This is Remap";
    // }

    public function _remap($method, $paraml = null, $paraml2 = null){
        // if($method == "test"){
        //     return $this->test($paraml);
        // }else if($method == "address"){
        //     return $this->address($paraml, $paraml2);
        // } else{
        //     $this->index();
        // }

        if(method_exists($this, $method)){
            return $this->$method($paraml, $paraml2);
        }
        else
        {
            return $this->index();
        }

        // Exception
        // throw PageNotFoundException::forPageNotFound();
    }
}
