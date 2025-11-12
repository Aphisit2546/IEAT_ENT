<?php

namespace App\Controllers;

//use App\Models\FUNCTION_REUSE\check_session;
use App\Models\FUNCTION_REUSE\dropdown_reuse;
use App\Models\FUNCTION_REUSE\function_reuse;
use Exception;

use GuzzleHttp\Client;

class source_budget_doeb_Controller extends BaseController
{
	protected $programCode = "source_budget_doeb";
	//protected $check_session;
	protected $model;
	protected $dropdown;
	protected $pageData;
	protected $pageName;
	protected $routeGroup;
	protected $function;
	public function __construct()
	{
		$this->routeGroup = $this->programCode;
		$this->pageData = [
			"routeGroup" => $this->programCode,
			"menuName" => "ประเภทแหล่งเงินงบประมาณ"
		];
	}
	public function index()
	{
		error_reporting(0);
		helper("form");

		$client = new Client();
		$input = $this->request->getRawInput();
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/SourceBudgetDoeb', [
			"body" => json_encode($input)
		]);

		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);
		$this->pageData["lstData"] = $data['data'];

		$this->pageData["data_search1"] = $input['data_search1'];
		$this->pageData["data_search2"] = $input['data_search2'];
		$this->pageData["data_search3"] = $input['data_search3'];

		return view($this->routeGroup . "/" . $this->routeGroup . "_search", $this->pageData);
	}

	public function add()
	{
		error_reporting(0);
		helper("form");
		$this->pageData['action_page'] = "store";
		$this->pageData["data"] = null;

		return view($this->routeGroup . "/" . $this->routeGroup . "_add", $this->pageData);
	}

	public function store()
	{
		error_reporting(0);
		helper("form");
		$input = $this->request->getRawInput();
		/*
		$input = array_merge($input, [
			'name'  =>  $this->request->getVar('txttext') ?? ''
		]);
		*/
		$client = new Client();
		$res = $client->post(Env("app.RestBaseURL") . '/api/SourceBudgetDoeb', [
			"body" => json_encode($input)
		]);

		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);

		$data_check = $data['message'];
		if ($data_check == "DataInsertedNosuccessfully") {
			return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('ชื่อข้อมูลซ้ำกรุณาตรวจสอบ','' , '');");
		} else {
			return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('บันทึกเรียบร้อย','' , '');");
		}
	}

	public function edit($value)
	{
		// iclude helper form
		error_reporting(0);
		helper("form");
		$this->pageData['action_page'] = "upd";

		$client = new Client();
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/SourceBudgetDoeb/' . $value . '/edit');
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);
		$this->pageData["data"] = $data['data'];

		return view($this->routeGroup . "/" . $this->routeGroup . "_add", $this->pageData);
	}
	public function update()
	{
		error_reporting(0);
		helper("form");

		$input = $this->request->getRawInput();
		$client = new Client();
		$res = $client->put(Env("app.RestBaseURL") . '/api/SourceBudgetDoeb/' . $input['BudgetSourceType_id'], [
			"body" => json_encode($input)
		]);

		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);

		$data_check = $data['message'];
		if ($data_check == "DataInsertedNosuccessfully") {
			return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('ชื่อข้อมูลซ้ำกรุณาตรวจสอบ','' , '');");
		} else {
			return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('บันทึกเรียบร้อย','' , '');");
		}
	}

	public function delete($id)
	{
		// iclude helper form
		helper("form");
		$client = new Client();
		$client->delete(Env("app.RestBaseURL") . '/api/SourceBudgetDoeb/' . $id, [
			"body" => json_encode($id)
		]);
		return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('ลบรายการเรียบร้อย','' , '');");
	}
}
