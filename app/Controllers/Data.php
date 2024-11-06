<?php

namespace App\Controllers;

use CodeIgniter\View\Table;

class Data extends BaseController
{
    public function index()
    {
        $table = new Table();
        $data = [
            ['Name', 'city', 'dist'],
            ['John', 'Gogamukh', 'Dhemaji'],
            ['Don', 'Majorbari', 'Dhemaji'],
            ['Don1', 'Majorbari', 'Dhemaji'],
            ['Don2', 'Majorbari', 'Dhemaji'],
        ];

        // $table->setHeading(['Name', 'City', 'Dist']);
        // $table->addRow(['Row1', 'Goga1', 'Dhemaji']);
        // $table->addRow(['Row2', 'Goga2', 'Dhemaji']);
        // $table->addRow(['Row2', 'Goga2', 'Dhemaji']);
        $template = [
            'table_open' => '<table border="1" cellpadding="10" cellspacing="0">',
        ];
        
        $table->setTemplate($template);

        $records['users'] = $table->generate($data);
        // echo view('data', $records);


        // $parser = \Config\Services::parser();

        $data2 = [
            'title' => 'My Title',
            'desc' => 'My Description',
            'records' => 'My Records',
        ];

        // echo view('data', $data2);

        // render method 
        // this type is call simple substitutions
        // return $parser->setData($data2)->render('data');
        // echo $parser->setData($data2)->render('data');

        // Loop Substitutions and Nested Substitutions
        $parser = \Config\Services::parser();
        $data3 = [
            'blog_title'   => 'My Blog Title',
            'blog_heading' => 'My Blog Heading',
            'blog_entries' => [
                ['title' => 'Title 1', 'body' => 'Body 1'],
                ['title' => 'Title 2', 'body' => 'Body 2'],
                ['title' => 'Title 3', 'body' => 'Body 3'],
                ['title' => 'Title 4', 'body' => 'Body 4'],
                ['title' => 'Title 5', 'body' => 'Body 5'],
            ],
            'status'=> false
        ];

        return $parser->setData($data3)->render('data');
    }
}
