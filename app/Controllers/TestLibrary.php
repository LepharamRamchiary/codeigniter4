<?php

namespace App\Controllers;
use App\Libraries\TestLibrarie;

class TestLibrary extends BaseController
{
    public $tl;
    public function __construct(){
        $this->tl = new TestLibrarie();
    }
    public function index()
    {
        $data['result'] = $this->tl->getData();
        // echo "<pre>";
        // print_r($data['result']);
        // die();

        return view('test_library', $data);
    }

    
}
