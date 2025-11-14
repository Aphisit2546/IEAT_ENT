<?php

namespace App\Controllers;

use GuzzleHttp\Client;

class structure_budget_doeb_Controller extends BaseController
{
	protected $programCode = "structure_budget_doeb";
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
			"menuName" => "โครงสร้างงบประมาณรายจ่าย"
		];
	}
	public function index()
	{
		error_reporting(0);
		helper("form");

		$client = new Client();
		$input = $this->request->getRawInput();
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/StructureBudgetDoeb', [
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

		if (!empty($input["btnSave"])) {
			$input['ActiveStatus_use'] = 'N';
		} else {
			$input['ActiveStatus_use'] = 'Y';
		}

		$client = new Client();
		$res = $client->post(Env("app.RestBaseURL") . '/api/StructureBudgetDoeb', [
			"body" => json_encode($input)
		]);
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);

		$data_check = $data['message'];
		if ($data_check == "DataInsertedNosuccessfully") {
			return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('ชื่อข้อมูลซ้ำกรุณาตรวจสอบ','' , '');");
		} else {

			$BudgetStructure_id = $data['data'];

			for ($i = 0; $i < count($input['Name']); $i++) {

				if ($input['Name'][$i] != '' && $input['Name'][$i] != null) {
					$postData_detail = [
						"ItemL1" => $input['ItemL1'][$i],
						"ItemL2" => $input['ItemL2'][$i],
						"ItemL3" => $input['ItemL3'][$i],
						"ItemL4" => $input['ItemL4'][$i],
						"Name" => $input['Name'][$i],
						"Description" => $input['Description'][$i],
						"BudgetStructure_id" => $BudgetStructure_id
					];

					$client->post(Env("app.RestBaseURL") . '/api/StructureBudgetDetailDoeb', [
						"body" => json_encode($postData_detail)
					]);
				}
			}

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
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/StructureBudgetDoeb/' . $value . '/edit');
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
		if (!empty($input["btnSave"])) {
			$input['ActiveStatus'] = 'N';
		} else {
			$input['ActiveStatus'] = 'Y';
		}

		$client = new Client();
		$res = $client->put(Env("app.RestBaseURL") . '/api/StructureBudgetDoeb/' . $input['BudgetStructure_id'], [
			"body" => json_encode($input)
		]);
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);

		$data_check = $data['message'];
		if ($data_check == "DataInsertedNosuccessfully") {
			return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('ชื่อข้อมูลซ้ำกรุณาตรวจสอบ','' , '');");
		} else {
			$client->delete(Env("app.RestBaseURL") . '/api/StructureBudgetDetailDoeb/' . $input['BudgetStructure_id'], [
				"body" => json_encode($input['BudgetStructure_id'])
			]);
			for ($i = 0; $i < count($input['Name']); $i++) {

				if ($input['Name'][$i] != '' && $input['Name'][$i] != null && $input['BudgetStructure_id'] != '' && $input['BudgetStructure_id'] != null) {
					$postData_detail = [
						"ItemL1" => $input['ItemL1'][$i],
						"ItemL2" => $input['ItemL2'][$i],
						"ItemL3" => $input['ItemL3'][$i],
						"ItemL4" => $input['ItemL4'][$i],
						"Name" => $input['Name'][$i],
						"Description" => $input['Description'][$i],
						"BudgetStructure_id" => $input['BudgetStructure_id']
					];

					$client->post(Env("app.RestBaseURL") . '/api/StructureBudgetDetailDoeb', [
						"body" => json_encode($postData_detail)
					]);
				}
			}

			return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('บันทึกเรียบร้อย','' , '');");
		}
	}

	public function delete($id)
	{
		// iclude helper form
		helper("form");
		$client = new Client();
		$client->delete(Env("app.RestBaseURL") . '/api/StructureBudgetDoeb/' . $id, [
			"body" => json_encode($id)
		]);
		return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('ลบรายการเรียบร้อย','' , '');");
	}

	public function view($value)
	{
		// iclude helper form
		error_reporting(0);
		helper("form");
		$this->pageData['action_page'] = "upd";

		$client = new Client();
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/StructureBudgetDoeb/' . $value . '/edit');
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);
		$this->pageData["data"] = $data['data'];

		return view($this->routeGroup . "/" . $this->routeGroup . "_view", $this->pageData);
	}
}
