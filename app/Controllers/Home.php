<?php

namespace App\Controllers;

use \SoapFault;

class Home extends BaseController
{
    public function index(): string
    {


        $client = new \SoapClient(env("app.SoapBaseURL") . "/soap/wsdl");

        try {
            //  echo $client->create("users", json_encode(["name" => "John 06Doe", "email" => "john@ex5656aeemp06ele.com"])) . "\n";
            // echo $client->read("users", 1) . "\n";
            //echo $client->update("users", 1, json_encode(["name" => "Jane Doe"])) . "\n";
            //echo $client->delete("users", 1) . "\n";
            echo $client->listAll("users") . "\n";
        } catch (SoapFault $fault) {
            echo "Error: " . $fault->getMessage();
        }

        exit(0);

        return view('welcome_message');
    }
}
