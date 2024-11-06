<?php

namespace App\Controllers;

class Blog extends BaseController
{
    public function index()
    {
        $data = [
            "title" => "My Blog",
            "content" => "This is my blog",
            "sub" => ["JS", "PHP", "HTML", "CSS"]
        ];
        // echo view("header");
        echo view("myview", $data);
        // echo view("footer");
    }

}
