<?php

namespace App\Controllers;

//use App\Models\FUNCTION_REUSE\check_session;

use App\Models\dropdown_reuse;
use GuzzleHttp\Client;

class overall_plan_doeb_Controller extends BaseController
{
	protected $programCode = "overall_plan_doeb";
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
			"menuName" => "โปรแกรมจัดทำข้อมูลภาพรวมแผนยุทธศาสตร์"
		];
	}

	public function index()
	{
		error_reporting(0);
		helper("form");

		// Get Data for view from API
		$client = new Client();
		$input = $this->request->getRawInput();
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/OverAllPlanDoeb', [
			"body" => json_encode($input)
		]);

		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);
		$this->pageData["lstData"] = $data['data'];

		$this->pageData["data_search1"] = $input['data_search1'];
		$this->pageData["data_search2"] = $input['data_search2'];
		$this->pageData["data_search3"] = $input['data_search3'];

		// Load view
		return view($this->routeGroup . "/" . $this->routeGroup . "_search", $this->pageData);
	}

	public function add()
	{
		error_reporting(0);
		helper("form");

		// Load dropdown default for view
		$this->pageData['dropdown_master_plan'] = $this->dropdown->dropdown_master_plan_for_overplan();
		$this->pageData['dropdown_master_unit'] = $this->dropdown->dropdown_master_unit();
		$this->pageData['dropdown_year_thai'] = $this->dropdown->dropdown_year_thai();
		$this->pageData['action_page'] = "store";

		// Set Data Default for view
		$year_default_thai = date('Y') + 543;
		$this->pageData["data"] = array(
			'Fiscalyear_start' => $year_default_thai,
			'Fiscalyear_finish' => $year_default_thai
		);

		// Load view
		return view($this->routeGroup . "/" . $this->routeGroup . "_add", $this->pageData);
	}

	public function store()
	{
		error_reporting(0);
		helper("form");

		// Receive Data From View
		$input = $this->request->getRawInput();

		// Check Button Insert
		if (!empty($input["btnSave"])) {
			$input['ActiveStatus'] = 'N';
		} else {
			$input['ActiveStatus'] = 'Y';
		}

		// Call API for Send Data to Backend
		$client = new Client();
		$res = $client->post(Env("app.RestBaseURL") . '/api/OverAllPlanDoeb', [
			"body" => json_encode($input)
		]);
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);

		// Check Data For Add Detail
		$data_check = $data['message'];
		if ($data_check == "DataInsertedNosuccessfully") {
			return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('ชื่อข้อมูลซ้ำกรุณาตรวจสอบ','' , '');");
		} else {
			$OverAllPlan_id = $data['data'];
			for ($i = 0; $i < count($input['Years']); $i++) {
				if ($input['Years'][$i] != '' && $input['Years'][$i] != null) {

					// Insert Data ภาพรวมเป้าหมาย ตัวชี้วัด และค่าเป้าหมายของแผน
					$postData_AnnualTargetValue = [
						"Years" => $input['Years'][$i],
						"AnnualTargetValue_NameFocus" => $input['AnnualTargetValue_NameFocus'][$i],
						"AnnualTargetValue_NamePoint" => $input['AnnualTargetValue_NamePoint'][$i],
						"AnnualTargetValue_Values" => $input['AnnualTargetValue_Values'][$i],
						"AnnualTargetValue_Unit" => $input['AnnualTargetValue_Unit'][$i],
						"OverAllPlan_id" => $OverAllPlan_id
					];

					$client->post(Env("app.RestBaseURL") . '/api/OverAllPlanAnnualTargetValueDoeb', [
						"body" => json_encode($postData_AnnualTargetValue)
					]);
				}
			}

			for ($i = 0; $i < count($input['RelatedStrategies_Name']); $i++) {
				if ($input['RelatedStrategies_Name'][$i] != '' && $input['RelatedStrategies_Name'][$i] != null) {

					// Insert Data ยุทธศาสตร์ที่เกี่ยวข้อง
					$postData_RelatedStrategies = [
						"RelatedStrategies_Name" => $input['RelatedStrategies_Name'][$i],
						"RelatedStrategies_Remarks" => $input['RelatedStrategies_Remarks'][$i],
						"OverAllPlan_id" => $OverAllPlan_id
					];

					$client->post(Env("app.RestBaseURL") . '/api/OverAllPlanRelatedStrategiesDoeb', [
						"body" => json_encode($postData_RelatedStrategies)
					]);
				}
			}

			for ($i = 0; $i < count($input['RelatedPolicies_Name']); $i++) {
				if ($input['RelatedPolicies_Name'][$i] != '' && $input['RelatedPolicies_Name'][$i] != null) {

					// Insert Data นโยบายที่เกี่ยวข้อง
					$postData_RelatedPolicies = [
						"RelatedPolicies_Name" => $input['RelatedPolicies_Name'][$i],
						"RelatedPolicies_Remarks" => $input['RelatedPolicies_Remarks'][$i],
						"OverAllPlan_id" => $OverAllPlan_id
					];

					$client->post(Env("app.RestBaseURL") . '/api/OverAllPlanRelatedPoliciesDoeb', [
						"body" => json_encode($postData_RelatedPolicies)
					]);
				}
			}

			return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('บันทึกเรียบร้อย','' , '');");
		}
	}

	public function edit($value)
	{
		error_reporting(0);
		helper("form");
		$this->pageData['action_page'] = "upd";

		// Load dropdown default for view
		$this->pageData['dropdown_master_plan'] = $this->dropdown->dropdown_master_plan_for_overplan();
		$this->pageData['dropdown_master_unit'] = $this->dropdown->dropdown_master_unit();
		$this->pageData['dropdown_year_thai'] = $this->dropdown->dropdown_year_thai();

		// Call API Data for view
		$client = new Client();
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/OverAllPlanDoeb/' . $value . '/edit');
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);
		$this->pageData["data"] = $data['data'];

		return view($this->routeGroup . "/" . $this->routeGroup . "_add", $this->pageData);
	}

	public function update()
	{
		error_reporting(0);
		helper("form");

		// Receive Data From View
		$input = $this->request->getRawInput();

		// Check Button Insert
		if (!empty($input["btnSave"])) {
			$input['ActiveStatus'] = 'N';
		} else {
			$input['ActiveStatus'] = 'Y';
		}

		// Call API for Send Data to Backend
		$client = new Client();
		$res = $client->put(Env("app.RestBaseURL") . '/api/OverAllPlanDoeb/' . $input['OverAllPlan_id'], [
			"body" => json_encode($input)
		]);
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);

		// Check Data For Add Detail
		$data_check = $data['message'];
		if ($data_check == "DataInsertedNosuccessfully") {
			return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('ชื่อข้อมูลซ้ำกรุณาตรวจสอบ','' , '');");
		} else {

			// Clear and Insert Data ภาพรวมเป้าหมาย ตัวชี้วัด และค่าเป้าหมายของแผน
			$client->delete(Env("app.RestBaseURL") . '/api/OverAllPlanAnnualTargetValueDoeb/' . $input['OverAllPlan_id'], [
				"body" => json_encode($input['OverAllPlan_id'])
			]);
			for ($i = 0; $i < count($input['Years']); $i++) {
				if ($input['Years'][$i] != '' && $input['Years'][$i] != null && $input['OverAllPlan_id'] != '' && $input['OverAllPlan_id'] != null) {
					$postData_AnnualTargetValue = [
						"Years" => $input['Years'][$i],
						"AnnualTargetValue_NameFocus" => $input['AnnualTargetValue_NameFocus'][$i],
						"AnnualTargetValue_NamePoint" => $input['AnnualTargetValue_NamePoint'][$i],
						"AnnualTargetValue_Values" => $input['AnnualTargetValue_Values'][$i],
						"AnnualTargetValue_Unit" => $input['AnnualTargetValue_Unit'][$i],
						"OverAllPlan_id" => $input['OverAllPlan_id']
					];

					$client->post(Env("app.RestBaseURL") . '/api/OverAllPlanAnnualTargetValueDoeb', [
						"body" => json_encode($postData_AnnualTargetValue)
					]);
				}
			}

			// Clear and Insert Data ภาพรวมเป้าหมาย ตัวชี้วัด และค่าเป้าหมายของแผน
			$client->delete(Env("app.RestBaseURL") . '/api/OverAllPlanRelatedStrategiesDoeb/' . $input['OverAllPlan_id'], [
				"body" => json_encode($input['OverAllPlan_id'])
			]);
			for ($i = 0; $i < count($input['RelatedStrategies_Name']); $i++) {
				if ($input['RelatedStrategies_Name'][$i] != '' && $input['RelatedStrategies_Name'][$i] != null && $input['OverAllPlan_id'] != '' && $input['OverAllPlan_id'] != null) {
					$postData_RelatedStrategies = [
						"RelatedStrategies_Name" => $input['RelatedStrategies_Name'][$i],
						"RelatedStrategies_Remarks" => $input['RelatedStrategies_Remarks'][$i],
						"OverAllPlan_id" => $input['OverAllPlan_id']
					];

					$client->post(Env("app.RestBaseURL") . '/api/OverAllPlanRelatedStrategiesDoeb', [
						"body" => json_encode($postData_RelatedStrategies)
					]);
				}
			}

			// Clear and Insert Data ภาพรวมเป้าหมาย ตัวชี้วัด และค่าเป้าหมายของแผน
			$client->delete(Env("app.RestBaseURL") . '/api/OverAllPlanRelatedPoliciesDoeb/' . $input['OverAllPlan_id'], [
				"body" => json_encode($input['OverAllPlan_id'])
			]);
			for ($i = 0; $i < count($input['RelatedPolicies_Name']); $i++) {
				if ($input['RelatedPolicies_Name'][$i] != '' && $input['RelatedPolicies_Name'][$i] != null && $input['OverAllPlan_id'] != '' && $input['OverAllPlan_id'] != null) {
					$postData_RelatedPolicies = [
						"RelatedPolicies_Name" => $input['RelatedPolicies_Name'][$i],
						"RelatedPolicies_Remarks" => $input['RelatedPolicies_Remarks'][$i],
						"OverAllPlan_id" => $input['OverAllPlan_id']
					];

					$client->post(Env("app.RestBaseURL") . '/api/OverAllPlanRelatedPoliciesDoeb', [
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

		// Call API for Send Data to Backend Delete
		$client = new Client();
		$client->delete(Env("app.RestBaseURL") . '/api/OverAllPlanDoeb/' . $id, [
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

		// Call Dropdown for view
		$this->pageData['dropdown_master_plan'] = $this->dropdown->dropdown_master_plan();
		$this->pageData['dropdown_master_unit'] = $this->dropdown->dropdown_master_unit();

		// Call API Data for view
		$client = new Client();
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/OverAllPlanDoeb/' . $value . '/edit');
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);
		$this->pageData["data"] = $data['data'];

		return view($this->routeGroup . "/" . $this->routeGroup . "_view", $this->pageData);
	}
}
