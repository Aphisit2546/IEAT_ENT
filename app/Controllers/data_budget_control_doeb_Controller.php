<?php

namespace App\Controllers;

//use App\Models\FUNCTION_REUSE\check_session;
use App\Models\dropdown_reuse;
use GuzzleHttp\Client;
use Exception;


class data_budget_control_doeb_Controller extends BaseController
{
	protected $programCode = "data_budget_control_doeb";
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
			"menuName" => "ตรวจสอบรายละเอียดคำของบประมาณ",
		];
	}
	public function index()
	{
		error_reporting(0);
		helper("form");

		$client = new Client();
		$input = $this->request->getRawInput();

		//if ($input['search_value'] == 'search_value') {
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/DataBudgetControlDoeb', [
			"body" => json_encode($input)
		]);

		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);
		$this->pageData["lstData"] = $data['data'];
		$this->pageData['dropdown_masterOverAllPlan'] = $this->dropdown->dropdown_masterOverAllBudgetOneYearV2();
		$this->pageData['dropdown_AnnualTargetValue_Year'] = $this->dropdown->dropdown_AnnualTargetValue_Year_forfiveyear($input['data_search2']);
		//} else {
		//$this->pageData["lstData"] = null;
		//$this->pageData['dropdown_masterOverAllPlan'] = $this->dropdown->dropdown_masterOverAllBudgetOneYear();
		//$this->pageData['dropdown_AnnualTargetValue_Year'] = $this->dropdown->dropdown_AnnualTargetValue_Year();
		//}

		$this->pageData["data_search1"] = $input['data_search1'];
		$this->pageData["data_search2"] = $input['data_search2'];
		$this->pageData["data_search3"] = $input['data_search3'];
		$this->pageData["data_search4"] = $input['data_search4'];

		return view($this->routeGroup . "/" . $this->routeGroup . "_search", $this->pageData);
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

		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/DraftBudgetControlDoeb/' . $value . '/edit');
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);
		$this->pageData["data_main"] = $data['data'];

		$res2 = $client->request('GET', Env("app.RestBaseURL") . '/api/DraftBudgetControlDoeb/' . $value . '/edit');
		$data2 = $res2->getBody()->getContents('json');
		$data2 = json_decode($data2, true);
		$this->pageData["data2"] = $data2['data'];

		$res3 = $client->request('GET', Env("app.RestBaseURL") . '/api/DraftBudgetControlDetailDoeb/' . $value . '/edit');
		$data3 = $res3->getBody()->getContents('json');
		$data3 = json_decode($data3, true);
		$this->pageData["DraftBudgetDetail"] = $data3['data'];

		$this->pageData["DraftBudgetControl_id"] = $value;

		return view($this->routeGroup . "/" . $this->routeGroup . "_add", $this->pageData);
	}

	public function update()
	{
		error_reporting(0);
		helper("form");

		$input = $this->request->getRawInput();

		$DraftBudgetControl_id = $input["DraftBudgetControl_id"];
		$client = new Client();

		if (!empty($input["btnSave"])) {

			$res = $client->put(Env("app.RestBaseURL") . '/api/DataBudgetControlReturnDoeb/' . $DraftBudgetControl_id, [
				"body" => json_encode($input)
			]);
			$data = $res->getBody()->getContents('json');
			$data = json_decode($data, true);
		} elseif (!empty($input["btnConfirm_hold"])) {

			$res = $client->put(Env("app.RestBaseURL") . '/api/DataBudgetControlHoldingDoeb/' . $DraftBudgetControl_id, [
				"body" => json_encode($input)
			]);
			$data = $res->getBody()->getContents('json');
			$data = json_decode($data, true);
		} else {

			$res = $client->put(Env("app.RestBaseURL") . '/api/DataBudgetControlInspecDoeb/' . $DraftBudgetControl_id, [
				"body" => json_encode($input)
			]);
			$data = $res->getBody()->getContents('json');
			$data = json_decode($data, true);

			/*
			// STEP1
			$client = new Client();
			$res = $client->post(Env("app.RestBaseURL") . '/api/DataBudgetControlDoeb', [
				"body" => json_encode($input)
			]);
			$data = $res->getBody()->getContents('json');
			$data = json_decode($data, true);
			$DataBudgetControl_id = $data['data'];

			// STEP2
			$res = $client->request('GET', Env("app.RestBaseURL") . '/api/DraftBudgetControlDetailDoeb/' . $DraftBudgetControl_id . '/edit');
			$data = $res->getBody()->getContents('json');
			$data = json_decode($data, true);
			foreach ($data['data'] as $result_step2) {
				if ($result_step2['ItemL1'] != '' && $result_step2['ItemL1'] != null) {
					$postData_step2 = [
						"ItemL1" => $result_step2['ItemL1'],
						"ItemL2" => $result_step2['ItemL2'],
						"ItemL3" => $result_step2['ItemL3'],
						"Description" => $result_step2['Description'],
						"TypeBudget" => $result_step2['TypeBudget'],
						"DraftBudgetControlDetail_id" => $result_step2['DraftBudgetControlDetail_id'],
						"DataBudgetControl_id" => $DataBudgetControl_id
					];

					$res = $client->post(Env("app.RestBaseURL") . '/api/DataBudgetControlDetailDoeb', [
						"body" => json_encode($postData_step2)
					]);
					$data = $res->getBody()->getContents('json');
					$data = json_decode($data, true);
					$DataBudgetControlDetail_id = $data['data'];

					// STEP3
					$res = $client->request('GET', Env("app.RestBaseURL") . '/api/DraftBudgetControlDetailSubDoeb/' . $result_step2['DraftBudgetControlDetail_id'] . '/edit');
					$data = $res->getBody()->getContents('json');
					$data = json_decode($data, true);
					foreach ($data['data'] as $result_step3) {

						$postData_step3 = [
							"DraftBudgetControlDetailSub_id" => $result_step3['DraftBudgetControlDetailSub_id'],
							"NameDetail" => $result_step3['NameDetail'],
							"UnitManagement_id" => $result_step3['UnitManagement_id'],
							"quantity" => $result_step3['quantity'],
							"price" => $result_step3['price'],
							"price_all" => $result_step3['price_all'],
							"DataBudgetControlDetail_id" => $DataBudgetControlDetail_id,
							"DataBudgetControl_id" => $DataBudgetControl_id
						];

						$client->post(Env("app.RestBaseURL") . '/api/DataBudgetControlDetailSubDoeb', [
							"body" => json_encode($postData_step3)
						]);
					}
				}	
			}
			*/
		}

		return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('บันทึกเรียบร้อย','' , '');");
	}

	public function view($value)
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

		$client = new Client();

		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/DraftBudgetControlDoeb/' . $value . '/edit');
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);
		$this->pageData["data_main"] = $data['data'];

		$res2 = $client->request('GET', Env("app.RestBaseURL") . '/api/DraftBudgetControlDoeb/' . $value . '/edit');
		$data2 = $res2->getBody()->getContents('json');
		$data2 = json_decode($data2, true);
		$this->pageData["data2"] = $data2['data'];

		$res3 = $client->request('GET', Env("app.RestBaseURL") . '/api/DraftBudgetControlDetailDoeb/' . $value . '/edit');
		$data3 = $res3->getBody()->getContents('json');
		$data3 = json_decode($data3, true);
		$this->pageData["DraftBudgetDetail"] = $data3['data'];

		$this->pageData["DraftBudgetControl_id"] = $value;

		// แผนปฏิบัติงาน
		$input_monthly_plan['GroupUserID'] = $data['data']['GroupUserID'];
		$input_monthly_plan['MonthlyPlanActivity_Id'] = $data['data']['MonthlyPlanActivity_Id'];
		$value_monthly = $input_monthly_plan['MonthlyPlanActivity_Id'] . "." . $input_monthly_plan['GroupUserID'];

		$res_monthly_plan = $client->request('GET', Env("app.RestBaseURL") . '/api/MappingCodeMonthlyActivityDoeb', [
			"body" => json_encode($input_monthly_plan)
		]);

		$data_monthly_plan = $res_monthly_plan->getBody()->getContents('json');
		$data_monthly_plan = json_decode($data_monthly_plan, true);
		$this->pageData["lstData_mapping"] = $data_monthly_plan['data'];

		$res_monthly_plan_data = $client->request('GET', Env("app.RestBaseURL") . '/api/MonthlyPlanActivityApproveDoeb/' . $value_monthly . '/edit');
		$data_monthly_plan_data = $res_monthly_plan_data->getBody()->getContents('json');
		$data_monthly_plan_data = json_decode($data_monthly_plan_data, true);

		$this->pageData["data_monthly_plan"] = $data_monthly_plan_data['data'];

		$this->pageData['dropdown_year_thai'] = $this->dropdown->dropdown_year_thai();
		$this->pageData['monththaishow'] = $this->dropdown->monththaishow();


		return view($this->routeGroup . "/" . $this->routeGroup . "_view", $this->pageData);
	}
}
