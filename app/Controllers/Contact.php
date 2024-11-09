<?php

namespace App\Controllers;
use \App\Models\ContactModel;
use CodeIgniter\CodeIgniter;

class Contact extends BaseController
{
    public $contactModel;
    public function __construct()
    {
        helper(['form', 'from']);
        $this->contactModel = new ContactModel();
    }

    public function index()
    {
        $data = [];
        $data['validation'] = null;

        // $session = session();
        $session = \Config\Services::session();


        $rules = [
            'fullname' => 'required|min_length[3]|max_length[40]',
            'username' => 'required|min_length[5]|max_length[10]|alpha_numeric',
            'email' => 'required|valid_email',
            'password' => 'required|alpha_numeric|min_length[6]|max_length[20]',

        ];

        if ($this->request->getMethod() == 'POST') {
            if ($this->validate($rules)) {
                $cdata = [
                    'fullname' => $this->request->getVar('fullname', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                    'username' => $this->request->getVar('username', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                    'email' => $this->request->getVar('email', FILTER_SANITIZE_EMAIL),
                    'password' => $this->request->getVar('password', FILTER_SANITIZE_FULL_SPECIAL_CHARS),

                ];

                // now we make a model
                $status=$this->contactModel->saveData($cdata);

                if ($status) {
                    $session->setTempdata('success', 'Data saved successfully!',3);
                    return redirect()->to('/contact');  
                } else {
                    $session->setTempdata('error', 'Failed to save data.',3);
                    return redirect()->to('/contact');  
                }
            } else {
                $data['validation'] = $this->validator;
            }
        }
        return view('datasaveindatabase', $data);
    }
}
