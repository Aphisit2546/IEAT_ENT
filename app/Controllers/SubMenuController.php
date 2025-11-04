<?php

namespace App\Controllers;


class SubMenuController extends BaseController
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

    public function index($val)
    {
        // iclude helper form
        helper("form");
        $MainMenuID = $val;

        $this->pageData['id_menu'] = $MainMenuID;
        $this->pageData['listSubMenu'] = $list_sub_menu_use;
        $this->pageData['menuName'] = $this->pageData['head_program_name'];

        return view('submenu', $this->pageData);
    }
}
