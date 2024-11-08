<?php

namespace App\Controllers;
use \App\Models\UsersModel;

class GetData extends BaseController
{
    public function index()
    {
        $userModel = new UsersModel();
        $data['result'] = $userModel->getData();
        // echo "<pre>";
        // print_r($data['result']);

        return view('getdata', $data);
    }

    public function blogList(){
        $userModel = new UsersModel();
        $data['result'] = $userModel->getBlogList();
        return view('bloglist', $data);
    }
}
