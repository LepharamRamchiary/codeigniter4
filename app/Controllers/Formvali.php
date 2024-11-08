<?php

namespace App\Controllers;

class Formvali extends BaseController
{
    public function __construct()
    {
        helper(['form']);
    }

    public function index()
    {
        $data = [];
        
        // Validation rules
        $rules = [
            'username' => 'required',
            'email' => 'required|valid_email',
            'phone' => 'required|numeric',
        ];

        if ($this->request->getMethod() == 'POST') {
            if ($this->validate($rules)) {
                // If validation passes, handle form submission (e.g., save data)
                echo "Ready to save";
            } else {
                // If validation fails, pass errors to view
                $data['validation'] = $this->validator;
            }
        }

        return view('myfrom', $data);
    }
}
