<?php

namespace App\Controllers;

use App\Models\dropdown_reuse;
use GuzzleHttp\Client;
use Exception;

class overall_year_plan_doeb_Controller extends BaseController
{
	protected $programCode = "overall_year_plan_doeb";
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
			"menuName" => "จัดทำแผนงานโครงการ (แผนปฏิบัติราชการรายปี)",
		];
	}

	public function index()
	{
		error_reporting(0);
		helper("form");

		// Get Data for view จาก API
		$client = new Client();
		$input = $this->request->getRawInput();
		$input['GroupUserID'] = session('GroupUserID');
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/OverAllPlanYearDoeb', [
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

		// Load dropdown default for view
		$this->pageData['dropdown_master_plan_for_budgetplan'] = $this->dropdown->dropdown_master_plan_for_budgetplan();
		$this->pageData['dropdown_OverallFiveYearPlan'] = $this->dropdown->dropdown_OverallFiveYearPlan();
		$this->pageData['dropdown_SourceBudget'] = $this->dropdown->dropdown_SourceBudget();
		$this->pageData['dropdown_masterOverAllPlan'] = $this->dropdown->dropdown_masterOverAllPlanOneYearV2();
		$this->pageData['dropdown_AnnualTargetValue_Year'] = $this->dropdown->dropdown_AnnualTargetValue_Year();
		$this->pageData['dropdown_RelatedStrategies'] = $this->dropdown->dropdown_RelatedStrategies();
		$this->pageData['dropdown_StrategyTarGet'] = $this->dropdown->dropdown_StrategyTarGet_default();
		$this->pageData['dropdown_StrategyIndicator'] = $this->dropdown->dropdown_StrategyIndicator_default();
		$this->pageData['dropdown_StrategyRelate'] = $this->dropdown->dropdown_StrategyRelate_default();
		$this->pageData['dropdown_type_budget'] = $this->dropdown->dropdown_type_budget();

		$this->pageData['action_page'] = "store";
		$this->pageData["data"] = null;

		return view($this->routeGroup . "/" . $this->routeGroup . "_add", $this->pageData);
	}

	public function store()
	{
		error_reporting(0);
		helper("form");
		$input = $this->request->getRawInput();
		$client = new Client();

		try {
			// check เลือกประเภทการอ้างอิงข้อมูลโครงการ
			if ($input['TypeSelect'] == '2') { // สร้างโครงการใหม่

				$input['GroupUserID'] = session('GroupUserID');
				if (!empty($input['BudgetYearPlan'])) {
					$input['BudgetYearPlan'] = number_format(str_replace(',', '', $input['BudgetYearPlan']), 2, '.', '');
				} else {
					$input['BudgetYearPlan'] = "";
				}

				// ดึงข้อมูลจาก API
				$res = $client->post(Env("app.RestBaseURL") . '/api/OverAllPlanYearDoeb', [
					"body" => json_encode($input)
				]);
				$data = $res->getBody()->getContents('json');
				$data = json_decode($data, true);
				$OverAllPlanYear_id = $data['data'];
			}

			if ($input['TypeSelect'] == '1') { // อ้างอิงข้อมูลโครงการที่มีอยู่

				$value_all = $input['OverAllPlanFiveYear_id'] . "." . session('GroupUserID');

				// ดึงข้อมูลจาก API
				$res_ref = $client->request('GET', Env("app.RestBaseURL") . '/api/OverAllPlanFiveYearDoeb/' . $value_all);
				$data_ref = $res_ref->getBody()->getContents('json');
				$data_ref = json_decode($data_ref, true);
				$input_ref = $data_ref['data'];

				// Ref Project 5 ปี
				$input2['OverAllPlanFiveYear_id'] = $input['OverAllPlanFiveYear_id'];
				$input2['OverAllPlan_id_ref'] = $input_ref['OverAllPlan_id'];
				$input2['AnnualTargetValue_Year_ref'] = $input_ref['AnnualTargetValue_Year'];

				$input2['TypeSelect'] = $input['TypeSelect'];
				$input2['ProjectNameTH'] = $input_ref['ProjectNameTH'];
				$input2['ProjectNameEN'] = $input_ref['ProjectNameEN'];
				$input2['RelatedStrategies_id'] = $input_ref['RelatedStrategies_id'];
				$input2['StrategyTarGetDetail_id'] = $input_ref['StrategyTarGetDetail_id'];
				$input2['StrategyIndicatorDetail_id'] = $input_ref['StrategyIndicatorDetail_id'];
				$input2['TypeProjectYearPlan'] = $input_ref['TypeProjectFiveYearPlan'];
				$input2['StartYearPlan'] = $input_ref['StartFiveYearPlan'];
				$input2['FinishYearPlan'] = $input_ref['FinishFiveYearPlan'];
				$input2['BudgetYearPlan'] = $input_ref['BudgetFiveYearPlan'];
				$input2['BudgetSourceType_id'] = $input_ref['BudgetSourceType_id'];
				$input2['ProjectSourceYearPlan'] = $input_ref['ProjectSourceFiveYearPlan'];
				$input2['ObjectiveYearPlan'] = $input_ref['ObjectiveFiveYearPlan'];
				$input2['DetailYearPlan'] = $input_ref['DetailFiveYearPlan'];
				$input2['StatusYearPlan'] = $input_ref['StatusFiveYearPlan'];
				$input2['RemarksYearPlan'] = $input_ref['RemarksFiveYearPlan'];

				$input2['StrategyRelateDetail_id'] = $input_ref['StrategyRelateDetail_id'];
				$input2['TypeBudget_id'] = $input_ref['TypeBudget_id'];

				$input2['GroupUserID'] = $input_ref['GroupUserID'];

				$res = $client->post(Env("app.RestBaseURL") . '/api/OverAllPlanYearDoeb', [
					"body" => json_encode($input2)
				]);
				$data = $res->getBody()->getContents('json');
				$data = json_decode($data, true);
				$OverAllPlanYear_id = $data['data'];
			}

			echo "<script type='text/javascript'>window.location='" . base_url() . "overall_year_plan_doeb/edt/$OverAllPlanYear_id';</script>";
			exit();
		} catch (Exception $e) {

			$this->pageData['action_page'] = "store";
			$this->pageData["data"] = null;

			session()->setFlashData("validation", $e->getMessage());
			return view($this->routeGroup . "/" . $this->routeGroup . "_add", $this->pageData);
		}
	}

	// เลือกข้อมูลมาปรับปรุงแก้ไข
	public function edit($value)
	{
		// iclude helper form
		error_reporting(0);
		helper("form");

		$this->pageData['action_page'] = "upd";

		// ดึงข้อมูลจาก API
		$value_all = $value . "." . session('GroupUserID');
		$client = new Client();
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/OverAllPlanYearDoeb/' . $value_all . '/edit');
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);

		$this->pageData["data"] = $data['data'];

		$this->pageData["OverAllPlanYearWorkMoneyPeriod"] = $data['data']['OverAllPlanYearWorkMoneyPeriod'];
		$this->pageData["OverAllPlanYearDeliver"] = $data['data']['OverAllPlanYearDeliver'];
		$this->pageData["OverAllPlanYearDocument"] = $data['data']['OverAllPlanYearDocument'];
		$this->pageData["OverAllPlanYearTargetKPI"] = $data['data']['OverAllPlanYearTargetKPI'];

		$OverAllPlan_id = $this->pageData["data"]["OverAllPlan_id"];
		$OverAllPlan_id_ref = $this->pageData["data"]["OverAllPlan_id_ref"];
		$StrategyTarGetDetail_id = $this->pageData["data"]["StrategyTarGetDetail_id"];
		$this->pageData['dropdown_OverallFiveYearPlan'] = $this->dropdown->dropdown_OverallFiveYearPlan();
		$this->pageData['dropdown_SourceBudget'] = $this->dropdown->dropdown_SourceBudget();

		if ($data['data']['TypeSelect'] == '1') {
			$this->pageData['dropdown_masterOverAllPlan_ref'] = $this->dropdown->dropdown_masterOverAllPlanFiveYear();
			$this->pageData['dropdown_masterOverAllPlan'] = $this->dropdown->dropdown_masterOverAllPlanOneYearV2();
			$this->pageData['dropdown_AnnualTargetValue_Year'] = $this->dropdown->dropdown_AnnualTargetValue_Year_forfiveyear($OverAllPlan_id_ref);
			$this->pageData['dropdown_RelatedStrategies'] = $this->dropdown->dropdown_RelatedStrategies_forfiveyear($OverAllPlan_id_ref);
			$this->pageData['dropdown_StrategyTarGet'] = $this->dropdown->dropdown_StrategyTarGet_forfiveyear($OverAllPlan_id_ref);
			$this->pageData['dropdown_StrategyRelate'] = $this->dropdown->dropdown_StrategyRelate_forfiveyear($OverAllPlan_id_ref);
		} else {
			$this->pageData['dropdown_masterOverAllPlan'] = $this->dropdown->dropdown_masterOverAllPlanOneYearV2();
			$this->pageData['dropdown_AnnualTargetValue_Year'] = $this->dropdown->dropdown_AnnualTargetValue_Year_forfiveyear($OverAllPlan_id);
			$this->pageData['dropdown_RelatedStrategies'] = $this->dropdown->dropdown_RelatedStrategies_forfiveyear($OverAllPlan_id);
			$this->pageData['dropdown_StrategyTarGet'] = $this->dropdown->dropdown_StrategyTarGet_forfiveyear($OverAllPlan_id);
			$this->pageData['dropdown_StrategyRelate'] = $this->dropdown->dropdown_StrategyRelate_forfiveyear($OverAllPlan_id);
		}

		$this->pageData['dropdown_master_plan_for_budgetplan'] = $this->dropdown->dropdown_master_plan_for_budgetplan();
		$this->pageData['dropdown_StrategyIndicator'] = $this->dropdown->dropdown_StrategyIndicator_forfiveyear($StrategyTarGetDetail_id);
		$this->pageData['dropdown_type_document'] = $this->dropdown->dropdown_type_document();
		$this->pageData['dropdown_master_unit'] = $this->dropdown->dropdown_master_unit();

		$this->pageData['dropdown_type_budget'] = $this->dropdown->dropdown_type_budget();

		return view($this->routeGroup . "/" . $this->routeGroup . "_add", $this->pageData);
	}

	// อัพเดทข้อมูล
	public function update()
	{
		error_reporting(0);
		helper("form");

		// Receive Data From View
		$input = $this->request->getRawInput();
		if (!empty($input["btnSave"])) {
			$input['ActiveStatus'] = 'N';
		} else {
			$input['ActiveStatus'] = 'Y';
		}

		$input['GroupUserID'] = session('GroupUserID');

		// Check การกรอกงบประมาณดำเนินโครงการ
		if (!empty($input['BudgetYearPlan'])) {
			$input['BudgetYearPlan'] = number_format(str_replace(',', '', $input['BudgetYearPlan']), 2, '.', '');
		} else {
			$input['BudgetYearPlan'] = "";
		}

		// ส่งข้อมูลไปยัง API
		$client = new Client();
		$res = $client->put(Env("app.RestBaseURL") . '/api/OverAllPlanYearDoeb/' . $input['OverAllPlanYear_id'], [
			"body" => json_encode($input)
		]);
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);

		// Clear and Add Data รายละเอียดงวดงานและงวดเงิน
		$client->delete(Env("app.RestBaseURL") . '/api/OverAllPlanYearWorkMoneyPeriodDoeb/' . $input['OverAllPlanYear_id'], [
			"body" => json_encode($input['OverAllPlanYear_id'])
		]);
		for ($i = 0; $i < count($input['WorkMoneyPeriodNumber']); $i++) {
			if ($input['WorkMoneyPeriodNumber'][$i] != '' && $input['WorkMoneyPeriodNumber'][$i] != null && $input['OverAllPlanYear_id'] != '' && $input['OverAllPlanYear_id'] != null) {
				$postData_AnnualTargetValue = [
					"WorkMoneyPeriodNumber" => $input['WorkMoneyPeriodNumber'][$i],
					"MoneyPeriod" => $input['MoneyPeriod'][$i],
					"Disbursement" => $input['Disbursement'][$i],
					"TotalDisbursement" => $input['TotalDisbursement'][$i],
					"TimeDisbursement" => $input['TimeDisbursement'][$i],
					"DateWorkMoneyPeriod" => $input['DateWorkMoneyPeriod'][$i],
					"ProgressWorkMoneyPeriod" => $input['ProgressWorkMoneyPeriod'][$i],
					"OverAllPlanYear_id" => $input['OverAllPlanYear_id'],
					"GroupUserID" => $input['GroupUserID']
				];

				$client->post(Env("app.RestBaseURL") . '/api/OverAllPlanYearWorkMoneyPeriodDoeb', [
					"body" => json_encode($postData_AnnualTargetValue)
				]);
			}
		}

		// Clear and Add Data สิ่งที่ต้องส่งมอบ
		$client->delete(Env("app.RestBaseURL") . '/api/OverAllPlanYearDeliverDoeb/' . $input['OverAllPlanYear_id'], [
			"body" => json_encode($input['OverAllPlanYear_id'])
		]);
		for ($i = 0; $i < count($input['WorkingPeriodNumber']); $i++) {
			if ($input['WorkingPeriodNumber'][$i] != '' && $input['WorkingPeriodNumber'][$i] != null && $input['OverAllPlanYear_id'] != '' && $input['OverAllPlanYear_id'] != null) {
				$postData_Deliver = [
					"WorkingPeriodNumber" => $input['WorkingPeriodNumber'][$i],
					"DetailDeliver" => $input['DetailDeliver'][$i],
					"WeightValue" => $input['WeightValue'][$i],
					"OverAllPlanYear_id" => $input['OverAllPlanYear_id'],
					"GroupUserID" => $input['GroupUserID']
				];

				$client->post(Env("app.RestBaseURL") . '/api/OverAllPlanYearDeliverDoeb', [
					"body" => json_encode($postData_Deliver)
				]);
			}
		}

		// Clear and Add Data เอกสารรายละเอียดข้อมูลขอบเขตงานและการเบิกเงิน
		$client->delete(Env("app.RestBaseURL") . '/api/OverAllPlanYearDocumentDoeb/' . $input['OverAllPlanYear_id'], [
			"body" => json_encode($input['OverAllPlanYear_id'])
		]);
		for ($i = 0; $i < count($input['DetailDocument']); $i++) {
			if ($input['DetailDocument'][$i] != '' && $input['DetailDocument'][$i] != null && $input['OverAllPlanYear_id'] != '' && $input['OverAllPlanYear_id'] != null) {
				$postData_Document = [
					"DetailDocument" => $input['DetailDocument'][$i],
					"TypeDocument" => $input['TypeDocument'][$i],
					"FileDocument" => $input['FileDocument'][$i],
					"OverAllPlanYear_id" => $input['OverAllPlanYear_id'],
					"GroupUserID" => $input['GroupUserID']
				];

				$client->post(Env("app.RestBaseURL") . '/api/OverAllPlanYearDocumentDoeb', [
					"body" => json_encode($postData_Document)
				]);
			}
		}

		// Clear and Add Data การติดตามกิจกรรมค่าเป้าหมาย (KPI) (ถ้ามี)
		$client->delete(Env("app.RestBaseURL") . '/api/OverAllPlanYearTargetKPIDoeb/' . $input['OverAllPlanYear_id'], [
			"body" => json_encode($input['OverAllPlanYear_id'])
		]);
		for ($i = 0; $i < count($input['ActivityTargetKPI']); $i++) {
			if ($input['ActivityTargetKPI'][$i] != '' && $input['ActivityTargetKPI'][$i] != null && $input['OverAllPlanYear_id'] != '' && $input['OverAllPlanYear_id'] != null) {
				$postData_TargetKPI = [
					"ActivityTargetKPI" => $input['ActivityTargetKPI'][$i],
					"QuantityTargetKPI" => $input['QuantityTargetKPI'][$i],
					"UnitTargetKPI" => $input['UnitTargetKPI'][$i],
					"DetailTargetKPI" => $input['DetailTargetKPI'][$i],
					"Month1TargetKPI" => $input['Month1TargetKPI'][$i],
					"Month2TargetKPI" => $input['Month2TargetKPI'][$i],
					"Month3TargetKPI" => $input['Month3TargetKPI'][$i],
					"Month4TargetKPI" => $input['Month4TargetKPI'][$i],
					"Month5TargetKPI" => $input['Month5TargetKPI'][$i],
					"Month6TargetKPI" => $input['Month6TargetKPI'][$i],
					"Month7TargetKPI" => $input['Month7TargetKPI'][$i],
					"Month8TargetKPI" => $input['Month8TargetKPI'][$i],
					"Month9TargetKPI" => $input['Month9TargetKPI'][$i],
					"Month10TargetKPI" => $input['Month10TargetKPI'][$i],
					"Month11TargetKPI" => $input['Month11TargetKPI'][$i],
					"Month12TargetKPI" => $input['Month12TargetKPI'][$i],
					"CalTargetKPI" => $input['CalTargetKPI'][$i],
					"OverAllPlanYear_id" => $input['OverAllPlanYear_id'],
					"GroupUserID" => $input['GroupUserID']
				];

				$client->post(Env("app.RestBaseURL") . '/api/OverAllPlanYearTargetKPIDoeb', [
					"body" => json_encode($postData_TargetKPI)
				]);
			}
		}

		return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('บันทึกเรียบร้อย','' , '');");
	}

	// ลบข้อมูล
	public function delete($id)
	{
		// iclude helper form
		helper("form");

		// ส่งข้อมูลไปยัง API
		$client = new Client();
		$client->delete(Env("app.RestBaseURL") . '/api/OverAllPlanYearDoeb/' . $id, [
			"body" => json_encode($id)
		]);
		return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('ลบรายการเรียบร้อย','' , '');");
	}

	// ดูรายละเอียดข้อมูล
	public function view($value)
	{
		// iclude helper form
		error_reporting(0);
		helper("form");

		$this->pageData['action_page'] = "upd";

		// เรียกข้อมูลจาก API
		$client = new Client();
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/OverAllPlanYearDoeb/' . $value . '/edit');
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);

		$this->pageData["data"] = $data['data'];

		$this->pageData["OverAllPlanYearWorkMoneyPeriod"] = $data['data']['OverAllPlanYearWorkMoneyPeriod'];
		$this->pageData["OverAllPlanYearDeliver"] = $data['data']['OverAllPlanYearDeliver'];
		$this->pageData["OverAllPlanYearDocument"] = $data['data']['OverAllPlanYearDocument'];
		$this->pageData["OverAllPlanYearTargetKPI"] = $data['data']['OverAllPlanYearTargetKPI'];

		$OverAllPlan_id = $this->pageData["data"]["OverAllPlan_id"];
		$StrategyTarGetDetail_id = $this->pageData["data"]["StrategyTarGetDetail_id"];
		$OverAllPlan_id_ref = $this->pageData["data"]["OverAllPlan_id_ref"];

		// Set Dropdown For view
		$this->pageData['dropdown_master_plan_for_budgetplan'] = $this->dropdown->dropdown_master_plan_for_budgetplan();
		$this->pageData['dropdown_OverallFiveYearPlan'] = $this->dropdown->dropdown_OverallFiveYearPlan();
		$this->pageData['dropdown_SourceBudget'] = $this->dropdown->dropdown_SourceBudget();
		$this->pageData['dropdown_masterOverAllPlan_ref'] = $this->dropdown->dropdown_masterOverAllPlanFiveYear();
		$this->pageData['dropdown_AnnualTargetValue_Year_ref'] = $this->dropdown->dropdown_AnnualTargetValue_Year_forfiveyear($OverAllPlan_id_ref);

		$this->pageData['dropdown_masterOverAllPlan'] = $this->dropdown->dropdown_masterOverAllPlanOneYearV2();

		if ($OverAllPlan_id_ref != '' && $OverAllPlan_id_ref != null) {
			$this->pageData['dropdown_AnnualTargetValue_Year'] = $this->dropdown->dropdown_AnnualTargetValue_Year_forfiveyear($OverAllPlan_id_ref);
			$this->pageData['dropdown_RelatedStrategies'] = $this->dropdown->dropdown_RelatedStrategies_forfiveyear($OverAllPlan_id_ref);
			$this->pageData['dropdown_StrategyTarGet'] = $this->dropdown->dropdown_StrategyTarGet_forfiveyear($OverAllPlan_id_ref);
			$this->pageData['dropdown_StrategyRelate'] = $this->dropdown->dropdown_StrategyRelate_forfiveyear($OverAllPlan_id_ref);
		} else {
			$this->pageData['dropdown_AnnualTargetValue_Year'] = $this->dropdown->dropdown_AnnualTargetValue_Year_forfiveyear($OverAllPlan_id);
			$this->pageData['dropdown_RelatedStrategies'] = $this->dropdown->dropdown_RelatedStrategies_forfiveyear($OverAllPlan_id);
			$this->pageData['dropdown_StrategyTarGet'] = $this->dropdown->dropdown_StrategyTarGet_forfiveyear($OverAllPlan_id);
			$this->pageData['dropdown_StrategyRelate'] = $this->dropdown->dropdown_StrategyRelate_forfiveyear($OverAllPlan_id);
		}

		$this->pageData['dropdown_StrategyIndicator'] = $this->dropdown->dropdown_StrategyIndicator_forfiveyear($StrategyTarGetDetail_id);
		$this->pageData['dropdown_type_document'] = $this->dropdown->dropdown_type_document();
		$this->pageData['dropdown_master_unit'] = $this->dropdown->dropdown_master_unit();

		$this->pageData['dropdown_type_budget'] = $this->dropdown->dropdown_type_budget();

		return view($this->routeGroup . "/" . $this->routeGroup . "_view", $this->pageData);
	}
}
