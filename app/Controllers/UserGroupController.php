<?php

namespace App\Controllers;

use App\Models\UserGroupModel;

class UserGroupController extends BaseController
{
    public function index()
    {
        // iclude helper form
        helper("form");

        $model = new UserGroupModel();

        $lstData = $model->findAll();
        $data = [
            "menuName" => "User Group",
            "lstData" => $lstData
        ];

        return view('UserGroup/userGroupsearch', $data);
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
