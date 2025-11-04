<?php

namespace App\Controllers;


use Exception;

use Mpdf\Mpdf;
use Mpdf\QrCode\QrCode;
use Mpdf\QrCode\Output;
use Picqer\Barcode\BarcodeGeneratorHTML;


use CI4FormBuilder\Form;
use CI4FormBuilder\Input;
use CI4FormBuilder\Label;
use CI4FormBuilder\Password;
use CI4FormBuilder\Submit;
use CI4FormBuilder\Template;

// use Config\Site;

class HomeController extends BaseController
{
    protected $programCode = "";
    protected $model;
    protected $pageData;
    protected $pageName;
    protected $routeGroup;
    public function __construct()
    {
       
        $this->pageData = [
            "routeGroup" => $this->routeGroup,
            "menuName" => $this->pageName,
        ];
    }

    public function index()
    {
        error_reporting(0);

        /*
        try {
            // iclude helper form
            helper("form");

            $lstProgram = (new UserAccessRolesModel)->getAccessRoleMainMenuByUserID(session()->get("groupuser_id"));
            $this->pageData["lstMenu"] = $lstProgram;
        } catch (Exception $e) {
            session()->setFlashData("validation", $this->validator->listErrors());
            return view('PublicPage/ExternalRegister', $this->pageData);
        }
		*/

        return view('backend/dashboard', $this->pageData);
    }

    public function home1()
    {
        error_reporting(0);

        return view('home1', $this->pageData);
    }

    public function home2()
    {
        error_reporting(0);
        return view('home2', $this->pageData);
    }


    public function home3_2()
    {
        error_reporting(0);
        return view('home3_2', $this->pageData);
    }
    public function home3_3()
    {
        error_reporting(0);
        return view('home3_3', $this->pageData);
    }
    public function home3_4()
    {
        error_reporting(0);
        return view('home3_4', $this->pageData);
    }
    public function home3_5()
    {
        error_reporting(0);
        return view('home3_5', $this->pageData);
    }

    public function home4()
    {
        error_reporting(0);
        return view('home4', $this->pageData);
    }

    public function home5()
    {
        error_reporting(0);
        return view('home5', $this->pageData);
    }
}
