<?php

namespace App\Controllers;

//use App\Models\FUNCTION_REUSE\check_session;
use App\Models\plan_doeb;
use App\Models\FUNCTION_REUSE\dropdown_reuse;
use App\Models\FUNCTION_REUSE\function_reuse;
use Exception;

use GuzzleHttp\Client;

class plan_doeb_Controller extends BaseController
{
	protected $programCode = "plan_doeb";
	//protected $check_session;
	protected $model;
	protected $dropdown;
	protected $pageData;
	protected $pageName;
	protected $routeGroup;
	protected $function;
	public function __construct()
	{

		//$this->check_session = new check_session();
		//$this->check_session->check_session_user();

		//$this->model = new plan_doeb();
		//$this->dropdown = new dropdown_reuse();
		//$this->function = new function_reuse();
		/*
		$this->pageName = $this->getPageName($this->programCode);
		*/
		$this->routeGroup = $this->programCode;

		$this->pageData = [
			"routeGroup" => $this->programCode,
			"menuName" => "ประเภทแผน",
			//"backMenu" => $this->getBackMenu($this->programCode)
		];
	}

	public function index()
	{
		error_reporting(0);
		helper("form");

		$client = new Client();
		$input = $this->request->getRawInput();
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/PlanDoeb', [
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
		$data = null;
		$client = new Client();
		$res = $client->post(Env("app.RestBaseURL") . '/api/PlanDoeb', [
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
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/PlanDoeb/' . $value . '/edit');
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
		$res = $client->put(Env("app.RestBaseURL") . '/api/PlanDoeb/' . $input['PlanType_id'], [
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
		$client->delete(Env("app.RestBaseURL") . '/api/PlanDoeb/' . $id, [
			"body" => json_encode($id)
		]);
		return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('ลบรายการเรียบร้อย','' , '');");
	}
}
