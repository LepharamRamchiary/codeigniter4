<?php

namespace App\Controllers;

class PhpInfo extends BaseController
{
    public function index()
    {
        echo view('phpinfo');
    }
}
