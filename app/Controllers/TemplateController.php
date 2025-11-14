<?php

namespace App\Controllers;

use App\Models\DummyModel;

class TemplateController extends BaseController
{
    protected $programCode = "DMX-XXX";
    protected $model;

    public function __construct()
    {
        // $this->model = new DummyModel(); // I am guessing this is in your App\Controllers Folder.
    }

    public function index()
    {
        // iclude helper form
        helper("form");
        $lstData = $this->model->findAll();

        $data = [
            "menuName" => $this->getPageName($this->programCode),
            "lstData" => $lstData
        ];
        return view('page_search', $data);
    }
    public function add()
    {
        // iclude helper form
        helper("form");

        $data = [
            "menuName" => $this->getPageName($this->programCode),
        ];
        return view('page_add');
    }
    public function store()
    {
        // iclude helper form
        helper("form");

        $passData = $this->request->getJson();
        $this->model->save($passData);
        $data = [
            "menuName" => $this->getPageName($this->programCode),
        ];
        return view('page_add');
    }
    public function edit()
    {
        // iclude helper form
        helper("form");

        $passData = $this->request->getJson();
        $this->model->find($passData["id"]);
        $data = [
            "menuName" => $this->getPageName($this->programCode),
        ];
        return view('page_edit');
    }
    public function update()
    {
        // iclude helper form
        helper("form");

        $passData = $this->request->getJson();
        $this->model->update($passData["id"], $passData);
        $data = [
            "menuName" => $this->getPageName($this->programCode),
        ];
        return view('page_add');
    }
    public function delete()
    {
        // iclude helper form
        helper("form");

        $passData = $this->request->getJson();
        $this->model->update($passData["id"], $passData);
        $data = [
            "menuName" => $this->getPageName($this->programCode),
        ];
        return view('page_search');
    }
}
