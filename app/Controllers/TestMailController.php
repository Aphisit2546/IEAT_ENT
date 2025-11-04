<?php

namespace App\Controllers;

// use Config\Site;

class TestMailController extends BaseController
{
    public $pageName = "หน้าหลัก";
    public function index()
    {

        $to = "dummykung@hotmail.co.th";
        $subject = "test send mail";
        $message = "Dear . test mail";

        $email = \Config\Services::email();
        $email->setTo($to);
        $email->setSubject($subject);
        $email->setMessage($message);

        while (@fopen("https://www.google.com", "r")) {
            if ($email->send()) {
                echo "Send mail Completed!!";
            } else {
                print_r($email->printDebugger());
                echo "Send mail Error!!";
            }
            return true;
        }
    }
    public function check($var)
    {

        $to = "dummykung@hotmail.co.th";
        $subject = "test send mail";
        $message = "Dear . test mail";

        $email = \Config\Services::email();
        $email->setTo($var);
        // $email->setSubject($subject);
        // $email->setMessage($message);

        while (@fopen("https://www.google.com", "r")) {
            if ($email->check($var)) {
                // print_r($email->printDebugger());
                echo "<pre>";
                var_dump($email);
                echo "</pre>";
                echo "Send mail Completed!!";
            } else {
                print_r($email->printDebugger());
                echo "Send mail Error!!";
            }
            return true;
        }
    }
}
