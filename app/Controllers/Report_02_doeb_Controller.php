<?php

namespace App\Controllers;

//use App\Models\FUNCTION_REUSE\check_session;

use App\Models\dropdown_reuse;
use GuzzleHttp\Client;

class Report_02_doeb_Controller extends BaseController
{
	protected $programCode = "Report_02_doeb";
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
			"menuName" => "ผลการปฏิบัติงานกองความปลอดภัยธุรกิจก๊าซธรรมชาติ"
		];
	}
	public function index()
	{
		error_reporting(0);
		helper("form");
		/*
		$client = new Client();
		$input = $this->request->getRawInput();
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/CreateBudgetControlDoeb', [
			"body" => json_encode($input)
		]);

		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);
		$this->pageData["lstData"] = $data['data'];

		$this->pageData["data_search1"] = $input['data_search1'];
		$this->pageData["data_search2"] = $input['data_search2'];
		$this->pageData["data_search3"] = $input['data_search3'];
		*/

		return view($this->routeGroup . "/" . $this->routeGroup . "_search", $this->pageData);
	}

	public function add()
	{
		error_reporting(0);
		helper("form");
		/*
		$this->pageData['dropdown_masterOverAllPlanOneYear'] = $this->dropdown->dropdown_masterOverAllBudgetOneYear();
		$this->pageData['dropdown_StructureBudgetMain'] = $this->dropdown->dropdown_StructureBudgetMain();
		$this->pageData['dropdown_StructureBudgetMainLv2'] = $this->dropdown->dropdown_StructureBudgetMainLv2();
		$this->pageData['dropdown_StructureBudgetMainLv3'] = $this->dropdown->dropdown_StructureBudgetMainLv3();
		$this->pageData['action_page'] = "store";
		$this->pageData["data"] = null;

		//return view($this->routeGroup . "/" . $this->routeGroup . "_add", $this->pageData);

		$input = $this->request->getRawInput();
		$input['OverAllBudget_id'] = $value;
		$input['ActiveStatus'] = 'N';
		// STEP1
		$client = new Client();
		$res = $client->post(Env("app.RestBaseURL") . '/api/CreateBudgetControlDoeb', [
			"body" => json_encode($input)
		]);
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);
		$CreateBudgetControl_id = $data['data'];

		echo "<script type='text/javascript'>window.location='" . base_url() . "create_budget_control_doeb/edt/$CreateBudgetControl_id';</script>";
		exit();
		*/
		return view($this->routeGroup . "/" . $this->routeGroup . "_add", $this->pageData);
	}

	public function edit($value)
	{
		// iclude helper form
		error_reporting(0);
		helper("form");
		$this->pageData['action_page'] = "upd";
		$this->pageData['dropdown_masterOverAllPlanOneYear'] = $this->dropdown->dropdown_masterOverAllBudgetOneYear();
		$this->pageData['dropdown_StructureBudgetMain'] = $this->dropdown->dropdown_StructureBudgetMain();
		$this->pageData['dropdown_StructureBudgetMainLv2'] = $this->dropdown->dropdown_StructureBudgetMainLv2();
		$this->pageData['dropdown_StructureBudgetMainLv3'] = $this->dropdown->dropdown_StructureBudgetMainLv3();
		$this->pageData['dropdown_type_budget'] = $this->dropdown->dropdown_type_budget();
		$this->pageData['dropdown_master_unit'] = $this->dropdown->dropdown_master_unit();
		$this->pageData['dropdown_CostReference'] = $this->dropdown->dropdown_CostReference();

		$client = new Client();

		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/DraftBudgetControlDoebALL/' . $value . '/edit');
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);
		$this->pageData["data_main"] = $data['data'];

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
		$res = $client->put(Env("app.RestBaseURL") . '/api/CreateBudgetControlDoeb/' . $input['CreateBudgetControl_id'], [
			"body" => json_encode($input)
		]);
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);

		$client->delete(Env("app.RestBaseURL") . '/api/CreateBudgetControlDetailDoeb/' . $input['CreateBudgetControl_id'], [
			"body" => json_encode($input['CreateBudgetControl_id'])
		]);

		for ($i = 0; $i < count($input['DataBudgetControl_id']); $i++) {
			if ($input['DataBudgetControl_id'][$i] != '' && $input['DataBudgetControl_id'][$i] != null && $input['CreateBudgetControl_id'] != '' && $input['CreateBudgetControl_id'] != null) {
				$postData_CreateBudgetControlDetail = [
					"DataBudgetControl_id" => $input['DataBudgetControl_id'][$i],
					"CreateBudgetControl_id" => $input['CreateBudgetControl_id']
				];

				$client->post(Env("app.RestBaseURL") . '/api/CreateBudgetControlDetailDoeb', [
					"body" => json_encode($postData_CreateBudgetControlDetail)
				]);
			}
		}

		return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('บันทึกเรียบร้อย','' , '');");
	}

	public function delete($id)
	{
		// iclude helper form
		helper("form");
		$client = new Client();
		$client->delete(Env("app.RestBaseURL") . '/api/CreateBudgetControlDoeb/' . $id, [
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
		$this->pageData['dropdown_masterOverAllPlanForCreateBudgetControl'] = $this->dropdown->dropdown_masterOverAllBudgetOneYear();

		$client = new Client();
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/CreateBudgetControlViewDoeb/' . $value . '/edit');
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);
		$this->pageData["data"] = $data['data'];

		return view($this->routeGroup . "/" . $this->routeGroup . "_view", $this->pageData);
	}
}
