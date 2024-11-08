<?php

namespace App\Controllers;

class TestMail extends BaseController
{
    public function index()
    {
        $to = 'lepharamchiary@gmail.com';
        $subject = 'Test Mail';
        $message = 'This is a test mail';

        $email = \Config\Services::email();
        $email->setTo($to);
        $email->setFrom('lepharamchiary123@gmail.com', 'Info');
        $email->setSubject($subject);
        $email->setMessage($message);
        $filepath = 'public/assets/images/logo1.png';
        $email->attach($filepath);

        if ($email->send()) {
            echo 'mail sent';
        } else {
            $error = $email->printDebugger(['headers']);
            print_r($error);
        }
    }
}
