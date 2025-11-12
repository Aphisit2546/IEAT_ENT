<?php

namespace App\Controllers;

// use Config\Site;

class ExternalController extends BaseController
{
    public $pageName = "หน้าหลัก";
    public function index()
    {
        $data = [
            "menuName" => "หน้าแรก"
        ];
        return view('PublicPage/ExternalHome', $data);
    }
}
