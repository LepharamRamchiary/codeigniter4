<?php

namespace App\Controllers;

class Test extends BaseController
{

    public $parser;
    public function __construct()
    {
        $this->parser= \Config\Services::parser();
    }

    public function index(): string
    {
        return view('welcome_message');
    }

    public function viewFilter(){
        $data = [
            'title' => 'My Title',
            'Name' => 'Lepharam Ramchiary',
            'Mobile_No' => '9101318307',
            'Card_No' => '1234567898765432'
        ];

        return $this->parser->setData($data)->render('filterview');
    }
}
