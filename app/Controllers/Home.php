<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {

        // echo view('layouts/header');
        echo view('homeview');
        // echo view('layouts/footer');
    }

    // public function about()
    // {
    //     $data = [
    //         'title' => 'About Us Nina',
    //         'main_title' => 'Welcome to My Website gfdg',
    //         'highlight' => 'Your tagline or introduction here',
    //         'desc' => 'This is a sdvsdv simple homepage layout with a header, body, and footer.Use this space to introduce your website or provide important information.'
    //     ];
    //     // echo view('layouts/header', $data);
    //     return view('about', $data);
    //     // echo view('layouts/footer');
    // }

    public function about(){
        return view('about');
    }
}
