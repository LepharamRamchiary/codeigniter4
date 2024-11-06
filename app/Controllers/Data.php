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
        echo view('data', $records);
    }
}
