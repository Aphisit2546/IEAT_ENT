<?php

namespace App\Controllers;

//use App\Models\FUNCTION_REUSE\check_session;

use App\Models\dropdown_reuse;
use GuzzleHttp\Client;

class inspec_BudgetControl_doeb_Controller extends BaseController
{
	protected $programCode = "inspec_BudgetControl_doeb";
	//protected $check_session;
	protected $model;
	protected $dropdown;
	protected $pageData;
	protected $pageName;
	protected $routeGroup;
	protected $function;
	public function __construct()
	{
		$this->dropdown = new dropdown_reuse();
		$this->routeGroup = $this->programCode;
		$this->pageData = [
			"routeGroup" => $this->programCode,
			"menuName" => "ตรวจสอบและพิจารณาแผนงบประมาณ"
		];
	}

	public function index()
	{
		error_reporting(0);
		helper("form");

		$client = new Client();
		$input = $this->request->getRawInput();
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/InspecBudgetControlDoeb', [
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

	public function edit($value)
	{
		// iclude helper form
		error_reporting(0);
		helper("form");

		$keys = explode(".", $value);
		$OverAllBudget_id = $keys[0];
		$CreateBudgetControl_id = $keys[1];

		$this->pageData['action_page'] = "upd";
		$this->pageData['dropdown_masterOverAllPlanForCreatePlan'] = $this->dropdown->dropdown_masterOverAllPlanForCreatePlan();

		$client = new Client();
		/*
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/CreateBudgetControlViewDoeb/' . $CreateBudgetControl_id . '/edit');
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);
		*/
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/DraftBudgetControlDoebALL/' . $OverAllBudget_id . '/edit');
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);
		$this->pageData["data_main"] = $data['data'];

		$this->pageData["CreateBudgetControl_id"] = $CreateBudgetControl_id;
		$this->pageData["OverAllBudget_id"] = $OverAllBudget_id;

		return view($this->routeGroup . "/" . $this->routeGroup . "_add", $this->pageData);
	}

	public function update()
	{
		error_reporting(0);
		helper("form");

		$input = $this->request->getRawInput();
		if (!empty($input["btnSave"])) {
			$input['ActiveStatus'] = 'N';
		} else if (!empty($input["btnConfirm"])) {
			$input['ActiveStatus'] = 'Y';
			$input['ActiveStatusFirstALL'] = 'Y';
		} else {
			$input['ActiveStatus'] = 'Y';
			$input['ActiveStatusFirstALL'] = 'N';
		}

		$client = new Client();
		$res = $client->put(Env("app.RestBaseURL") . '/api/InspecBudgetControlDoeb/' . $input['CreateBudgetControl_id'], [
			"body" => json_encode($input)
		]);
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);

		return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('บันทึกเรียบร้อย','' , '');");
	}

	public function view($value)
	{
		// iclude helper form
		error_reporting(0);
		helper("form");

		$keys = explode(".", $value);
		$OverAllBudget_id = $keys[0];
		$CreateBudgetControl_id = $keys[1];

		$this->pageData['action_page'] = "upd";
		$this->pageData['dropdown_masterOverAllPlanOneYear'] = $this->dropdown->dropdown_masterOverAllBudgetOneYear();
		$this->pageData['dropdown_StructureBudgetMain'] = $this->dropdown->dropdown_StructureBudgetMain();
		$this->pageData['dropdown_StructureBudgetMainLv2'] = $this->dropdown->dropdown_StructureBudgetMainLv2();
		$this->pageData['dropdown_StructureBudgetMainLv3'] = $this->dropdown->dropdown_StructureBudgetMainLv3();
		$this->pageData['dropdown_type_budget'] = $this->dropdown->dropdown_type_budget();
		$this->pageData['dropdown_master_unit'] = $this->dropdown->dropdown_master_unit();
		$this->pageData['dropdown_CostReference'] = $this->dropdown->dropdown_CostReference();

		$client = new Client();

		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/DraftBudgetControlDoebALL/' . $OverAllBudget_id . '/edit');
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);
		$this->pageData["data_main"] = $data['data'];
		$this->pageData["CreateBudgetControl_id"] = $CreateBudgetControl_id;
		$this->pageData["OverAllBudget_id"] = $OverAllBudget_id;

		return view($this->routeGroup . "/" . $this->routeGroup . "_view", $this->pageData);
	}
}
