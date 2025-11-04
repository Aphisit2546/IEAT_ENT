<?php

namespace App\Controllers;

use App\Models\UserModel;

class ResetPasswordController extends BaseController
{
    public function index()
    {
        // iclude helper form
        helper("form");

        $model = new UserModel();

        $lstData = $model->findAll();
        $data = [
            "menuName" => "Reset Password",
            "lstData" => $lstData
        ];

        return view('ResetPassword/resetpasswordsearch', $data);
    }
    public function auth()
    {
        // iclude helper form
        helper("form");
        // $data["pageTitle"] = "Login";

        // $encrypter = \Config\Services::encrypter();
        // $var = $encrypter->encrypt("phai");
        // echo $var;
        // echo "<br/>" . $encrypter->decrypt($var);

        // $encrypter = \Config\Services::decrypter();


        return redirect()->to("home");
    }
    public function logout()
    {
        // iclude helper form
        helper("form");
        // $data["pageTitle"] = "Login";

        // $encrypter = \Config\Services::encrypter();
        // $var = $encrypter->encrypt("phai");
        // echo $var;
        // echo "<br/>" . $encrypter->decrypt($var);

        // $encrypter = \Config\Services::decrypter();

        $session = session();
        $session->destroy();
        return redirect()->to("login");
    }
}
