<?php

namespace App\Controllers;

use App\Models\UserModel;

class RegisterController extends BaseController
{
    public function index()
    {
        helper("form");

        $data["pageTitle"] = "Register";
        return view('register', $data);
    }
    public function save()
    {
        helper("form");
        $rules = [
            "firstName" => "required|min_length[1]|max_length[20]",
            "lastName" => "required|min_length[1]|max_length[20]",
            "email" => "required|min_length[6]|max_length[200]|valid_email",
            "password" => "required|min_length[3]|max_length[20]",
            "confirmpassword" => "matches[password]",
        ];

        if ($this->validate($rules)) {
            $model = new UserModel();
            $data = [
                "UserName" => "abde",
                "FirstName" => $this->request->getVar("firstName"),
                "LastName" => $this->request->getVar("lastName"),
                "Email" => $this->request->getVar("email"),
                "UserStatus" => "amd",
                "Password" => password_hash($this->request->getVar("Password"), PASSWORD_DEFAULT),
            ];
            $model->save($data);

            return redirect()->to("login");
        } else {
            $data["validation"] = $this->validator;
            echo view("register", $data);
        }
    }
}
