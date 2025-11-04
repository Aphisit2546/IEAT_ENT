<?php

namespace App\Controllers;

//use App\Models\FUNCTION_REUSE\check_session;

use App\Models\dropdown_reuse;
use GuzzleHttp\Client;

class overall_budget_doeb_Controller extends BaseController
{
	protected $programCode = "overall_budget_doeb";
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
			"menuName" => "โปรแกรมจัดทำข้อมูลภาพรวมแผนงบประมาณ"
		];
	}
	public function index()
	{
		error_reporting(0);
		helper("form");

		$client = new Client();
		$input = $this->request->getRawInput();
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/OverAllBudgetDoeb', [
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

		$this->pageData['dropdown_master_plan_for_budgetplan'] = $this->dropdown->dropdown_master_plan_for_budgetplan();
		$this->pageData['dropdown_master_unit'] = $this->dropdown->dropdown_master_unit();
		$this->pageData['dropdown_year_thai'] = $this->dropdown->dropdown_year_thai();
		$this->pageData['action_page'] = "store";

		$year_default_thai = date('Y') + 543;
		$this->pageData["data"] = array(
			'Fiscalyear' => $year_default_thai
		);

		return view($this->routeGroup . "/" . $this->routeGroup . "_add", $this->pageData);
	}

	public function store()
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
		$res = $client->post(Env("app.RestBaseURL") . '/api/OverAllBudgetDoeb', [
			"body" => json_encode($input)
		]);
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);

		$data_check = $data['message'];
		if ($data_check == "DataInsertedNosuccessfully") {
			return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('ชื่อข้อมูลซ้ำกรุณาตรวจสอบ','' , '');");
		} else {
			$OverAllBudget_id = $data['data'];
			for ($i = 0; $i < count($input['Years']); $i++) {
				if ($input['Years'][$i] != '' && $input['Years'][$i] != null) {
					$postData_AnnualTargetValue = [
						"Years" => $input['Years'][$i],
						"AnnualTargetValue_NameFocus" => $input['AnnualTargetValue_NameFocus'][$i],
						"AnnualTargetValue_NamePoint" => $input['AnnualTargetValue_NamePoint'][$i],
						"AnnualTargetValue_Values" => $input['AnnualTargetValue_Values'][$i],
						"AnnualTargetValue_Unit" => $input['AnnualTargetValue_Unit'][$i],
						"OverAllBudget_id" => $OverAllBudget_id
					];

					$client->post(Env("app.RestBaseURL") . '/api/OverAllBudgetAnnualTargetValueDoeb', [
						"body" => json_encode($postData_AnnualTargetValue)
					]);
				}
			}

			for ($i = 0; $i < count($input['RelatedStrategies_Name']); $i++) {
				if ($input['RelatedStrategies_Name'][$i] != '' && $input['RelatedStrategies_Name'][$i] != null) {
					$postData_RelatedStrategies = [
						"RelatedStrategies_Name" => $input['RelatedStrategies_Name'][$i],
						"RelatedStrategies_Remarks" => $input['RelatedStrategies_Remarks'][$i],
						"OverAllBudget_id" => $OverAllBudget_id
					];

					$client->post(Env("app.RestBaseURL") . '/api/OverAllBudgetRelatedStrategiesDoeb', [
						"body" => json_encode($postData_RelatedStrategies)
					]);
				}
			}

			for ($i = 0; $i < count($input['RelatedPolicies_Name']); $i++) {
				if ($input['RelatedPolicies_Name'][$i] != '' && $input['RelatedPolicies_Name'][$i] != null) {
					$postData_RelatedPolicies = [
						"RelatedPolicies_Name" => $input['RelatedPolicies_Name'][$i],
						"RelatedPolicies_Remarks" => $input['RelatedPolicies_Remarks'][$i],
						"OverAllBudget_id" => $OverAllBudget_id
					];

					$client->post(Env("app.RestBaseURL") . '/api/OverAllBudgetRelatedPoliciesDoeb', [
						"body" => json_encode($postData_RelatedPolicies)
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

		$this->pageData['dropdown_master_plan_for_budgetplan'] = $this->dropdown->dropdown_master_plan_for_budgetplan();
		$this->pageData['dropdown_master_unit'] = $this->dropdown->dropdown_master_unit();
		$this->pageData['dropdown_year_thai'] = $this->dropdown->dropdown_year_thai();

		$client = new Client();
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/OverAllBudgetDoeb/' . $value . '/edit');
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
		$res = $client->put(Env("app.RestBaseURL") . '/api/OverAllBudgetDoeb/' . $input['OverAllBudget_id'], [
			"body" => json_encode($input)
		]);
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);

		$data_check = $data['message'];
		if ($data_check == "DataInsertedNosuccessfully") {
			return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('ชื่อข้อมูลซ้ำกรุณาตรวจสอบ','' , '');");
		} else {

			$client->delete(Env("app.RestBaseURL") . '/api/OverAllBudgetAnnualTargetValueDoeb/' . $input['OverAllBudget_id'], [
				"body" => json_encode($input['OverAllBudget_id'])
			]);
			for ($i = 0; $i < count($input['Years']); $i++) {
				if ($input['Years'][$i] != '' && $input['Years'][$i] != null && $input['OverAllBudget_id'] != '' && $input['OverAllBudget_id'] != null) {
					$postData_AnnualTargetValue = [
						"Years" => $input['Years'][$i],
						"AnnualTargetValue_NameFocus" => $input['AnnualTargetValue_NameFocus'][$i],
						"AnnualTargetValue_NamePoint" => $input['AnnualTargetValue_NamePoint'][$i],
						"AnnualTargetValue_Values" => $input['AnnualTargetValue_Values'][$i],
						"AnnualTargetValue_Unit" => $input['AnnualTargetValue_Unit'][$i],
						"OverAllBudget_id" => $input['OverAllBudget_id']
					];

					$client->post(Env("app.RestBaseURL") . '/api/OverAllBudgetAnnualTargetValueDoeb', [
						"body" => json_encode($postData_AnnualTargetValue)
					]);
				}
			}

			$client->delete(Env("app.RestBaseURL") . '/api/OverAllBudgetRelatedStrategiesDoeb/' . $input['OverAllBudget_id'], [
				"body" => json_encode($input['OverAllBudget_id'])
			]);
			for ($i = 0; $i < count($input['RelatedStrategies_Name']); $i++) {
				if ($input['RelatedStrategies_Name'][$i] != '' && $input['RelatedStrategies_Name'][$i] != null && $input['OverAllBudget_id'] != '' && $input['OverAllBudget_id'] != null) {
					$postData_RelatedStrategies = [
						"RelatedStrategies_Name" => $input['RelatedStrategies_Name'][$i],
						"RelatedStrategies_Remarks" => $input['RelatedStrategies_Remarks'][$i],
						"OverAllBudget_id" => $input['OverAllBudget_id']
					];

					$client->post(Env("app.RestBaseURL") . '/api/OverAllBudgetRelatedStrategiesDoeb', [
						"body" => json_encode($postData_RelatedStrategies)
					]);
				}
			}

			$client->delete(Env("app.RestBaseURL") . '/api/OverAllBudgetRelatedPoliciesDoeb/' . $input['OverAllBudget_id'], [
				"body" => json_encode($input['OverAllBudget_id'])
			]);
			for ($i = 0; $i < count($input['RelatedPolicies_Name']); $i++) {
				if ($input['RelatedPolicies_Name'][$i] != '' && $input['RelatedPolicies_Name'][$i] != null && $input['OverAllBudget_id'] != '' && $input['OverAllBudget_id'] != null) {
					$postData_RelatedPolicies = [
						"RelatedPolicies_Name" => $input['RelatedPolicies_Name'][$i],
						"RelatedPolicies_Remarks" => $input['RelatedPolicies_Remarks'][$i],
						"OverAllBudget_id" => $input['OverAllBudget_id']
					];

					$client->post(Env("app.RestBaseURL") . '/api/OverAllBudgetRelatedPoliciesDoeb', [
						"body" => json_encode($postData_RelatedPolicies)
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
		$client->delete(Env("app.RestBaseURL") . '/api/OverAllBudgetDoeb/' . $id, [
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

		$this->pageData['dropdown_master_plan_for_budgetplan'] = $this->dropdown->dropdown_master_plan_for_budgetplan();
		$this->pageData['dropdown_master_unit'] = $this->dropdown->dropdown_master_unit();

		$client = new Client();
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/OverAllBudgetDoeb/' . $value . '/edit');
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);
		$this->pageData["data"] = $data['data'];

		return view($this->routeGroup . "/" . $this->routeGroup . "_view", $this->pageData);
	}
}
