<?php

namespace App\Controllers;

//use App\Models\FUNCTION_REUSE\check_session;
use App\Models\dropdown_reuse;
use GuzzleHttp\Client;
use Exception;

class overall_fiscal_year_plan_doeb_Controller extends BaseController
{
	protected $programCode = "overall_fiscal_year_plan_doeb";
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
			"menuName" => "จัดทำแผนงานโครงการ ตาม พรบ.งบประมาณ",
		];
	}
	public function index()
	{
		error_reporting(0);
		helper("form");

		$client = new Client();
		$input = $this->request->getRawInput();
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/OverAllPlanFiscalYearDoeb', [
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

		$this->pageData['dropdown_OverallPlanYear'] = $this->dropdown->dropdown_OverallPlanYear();
		$this->pageData['dropdown_SourceBudget'] = $this->dropdown->dropdown_SourceBudget();
		$this->pageData['dropdown_masterOverAllPlan'] = $this->dropdown->dropdown_masterOverAllPlanForOther();
		$this->pageData['dropdown_AnnualTargetValue_Year'] = $this->dropdown->dropdown_AnnualTargetValue_Year();
		$this->pageData['dropdown_RelatedStrategies'] = $this->dropdown->dropdown_RelatedStrategies();
		$this->pageData['dropdown_StrategyTarGet'] = $this->dropdown->dropdown_StrategyTarGet_default();
		$this->pageData['dropdown_StrategyIndicator'] = $this->dropdown->dropdown_StrategyIndicator_default();

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

			if ($input['TypeSelect'] == '2') {

				$input['BudgetYearPlan'] = number_format(str_replace(',', '', $input['BudgetYearPlan']), 2, '.', '');

				$res = $client->post(Env("app.RestBaseURL") . '/api/OverAllPlanFiscalYearDoeb', [
					"body" => json_encode($input)
				]);
				$data = $res->getBody()->getContents('json');
				$data = json_decode($data, true);
				$OverAllPlanFiscalYear_id = $data['data'];
			}

			if ($input['TypeSelect'] == '1') {

				$res_ref = $client->request('GET', Env("app.RestBaseURL") . '/api/OverAllPlanYearDoeb/' . $input['OverAllPlanYear_id']);
				$data_ref = $res_ref->getBody()->getContents('json');
				$data_ref = json_decode($data_ref, true);
				$input_ref = $data_ref['data'];

				$input2['TypeSelect'] = $input['TypeSelect'];
				$input2['ProjectNameTH'] = $input_ref['ProjectNameTH'];
				$input2['ProjectNameEN'] = $input_ref['ProjectNameEN'];
				$input2['OverAllPlan_id'] = $input_ref['OverAllPlan_id'];
				$input2['AnnualTargetValue_Year'] = $input_ref['AnnualTargetValue_Year'];
				$input2['RelatedStrategies_id'] = $input_ref['RelatedStrategies_id'];
				$input2['StrategyTarGetDetail_id'] = $input_ref['StrategyTarGetDetail_id'];
				$input2['StrategyIndicatorDetail_id'] = $input_ref['StrategyIndicatorDetail_id'];
				$input2['TypeProjectYearPlan'] = $input_ref['TypeProjectYearPlan'];
				$input2['StartYearPlan'] = $input_ref['StartYearPlan'];
				$input2['FinishYearPlan'] = $input_ref['FinishYearPlan'];
				$input2['BudgetYearPlan'] = $input_ref['BudgetYearPlan'];
				$input2['BudgetSourceType_id'] = $input_ref['BudgetSourceType_id'];
				$input2['ProjectSourceYearPlan'] = $input_ref['ProjectSourceYearPlan'];
				$input2['ObjectiveYearPlan'] = $input_ref['ObjectiveYearPlan'];
				$input2['DetailYearPlan'] = $input_ref['DetailYearPlan'];
				$input2['StatusYearPlan'] = $input_ref['StatusYearPlan'];
				$input2['RemarksYearPlan'] = $input_ref['RemarksYearPlan'];

				$res = $client->post(Env("app.RestBaseURL") . '/api/OverAllPlanFiscalYearDoeb', [
					"body" => json_encode($input2)
				]);
				$data = $res->getBody()->getContents('json');
				$data = json_decode($data, true);
				$OverAllPlanFiscalYear_id = $data['data'];
			}

			echo "<script type='text/javascript'>window.location='" . base_url() . "overall_fiscal_year_plan_doeb/edt/$OverAllPlanFiscalYear_id';</script>";
			exit();
		} catch (Exception $e) {

			$this->pageData['action_page'] = "store";
			$this->pageData["data"] = null;

			session()->setFlashData("validation", $e->getMessage());
			return view($this->routeGroup . "/" . $this->routeGroup . "_add", $this->pageData);
		}
	}

	public function edit($value)
	{
		// iclude helper form
		error_reporting(0);
		helper("form");

		$this->pageData['action_page'] = "upd";

		$client = new Client();
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/OverAllPlanFiscalYearDoeb/' . $value . '/edit');
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);

		$this->pageData["data"] = $data['data'];

		$this->pageData["OverAllPlanYearWorkMoneyPeriod"] = $data['data']['OverAllPlanFiscalYearWorkMoneyPeriod'];
		$this->pageData["OverAllPlanYearDeliver"] = $data['data']['OverAllPlanFiscalYearDeliver'];
		$this->pageData["OverAllPlanYearDocument"] = $data['data']['OverAllPlanFiscalYearDocument'];
		$this->pageData["OverAllPlanYearTargetKPI"] = $data['data']['OverAllPlanFiscalYearTargetKPI'];

		$OverAllPlan_id = $this->pageData["data"]["OverAllPlan_id"];
		$StrategyTarGetDetail_id = $this->pageData["data"]["StrategyTarGetDetail_id"];
		$this->pageData['dropdown_OverallPlanYear'] = $this->dropdown->dropdown_OverallPlanYear();
		$this->pageData['dropdown_SourceBudget'] = $this->dropdown->dropdown_SourceBudget();
		$this->pageData['dropdown_masterOverAllPlan'] = $this->dropdown->dropdown_masterOverAllPlanForOther();
		$this->pageData['dropdown_AnnualTargetValue_Year'] = $this->dropdown->dropdown_AnnualTargetValue_Year_forfiveyear($OverAllPlan_id);
		$this->pageData['dropdown_RelatedStrategies'] = $this->dropdown->dropdown_RelatedStrategies_forfiveyear($OverAllPlan_id);
		$this->pageData['dropdown_StrategyTarGet'] = $this->dropdown->dropdown_StrategyTarGet_forfiveyear($OverAllPlan_id);
		$this->pageData['dropdown_StrategyIndicator'] = $this->dropdown->dropdown_StrategyIndicator_forfiveyear($StrategyTarGetDetail_id);
		$this->pageData['dropdown_type_document'] = $this->dropdown->dropdown_type_document();
		$this->pageData['dropdown_master_unit'] = $this->dropdown->dropdown_master_unit();

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

		$input['BudgetYearPlan'] = number_format(str_replace(',', '', $input['BudgetYearPlan']), 2, '.', '');

		$client = new Client();
		$res = $client->put(Env("app.RestBaseURL") . '/api/OverAllPlanFiscalYearDoeb/' . $input['OverAllPlanFiscalYear_id'], [
			"body" => json_encode($input)
		]);
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);

		$client->delete(Env("app.RestBaseURL") . '/api/OverAllPlanFiscalYearWorkMoneyPeriodDoeb/' . $input['OverAllPlanFiscalYear_id'], [
			"body" => json_encode($input['OverAllPlanFiscalYear_id'])
		]);
		for ($i = 0; $i < count($input['WorkMoneyPeriodNumber']); $i++) {
			if ($input['WorkMoneyPeriodNumber'][$i] != '' && $input['WorkMoneyPeriodNumber'][$i] != null && $input['OverAllPlanFiscalYear_id'] != '' && $input['OverAllPlanFiscalYear_id'] != null) {
				$postData_AnnualTargetValue = [
					"WorkMoneyPeriodNumber" => $input['WorkMoneyPeriodNumber'][$i],
					"MoneyPeriod" => $input['MoneyPeriod'][$i],
					"Disbursement" => $input['Disbursement'][$i],
					"TotalDisbursement" => $input['TotalDisbursement'][$i],
					"TimeDisbursement" => $input['TimeDisbursement'][$i],
					"DateWorkMoneyPeriod" => $input['DateWorkMoneyPeriod'][$i],
					"ProgressWorkMoneyPeriod" => $input['ProgressWorkMoneyPeriod'][$i],
					"OverAllPlanFiscalYear_id" => $input['OverAllPlanFiscalYear_id']
				];

				$client->post(Env("app.RestBaseURL") . '/api/OverAllPlanFiscalYearWorkMoneyPeriodDoeb', [
					"body" => json_encode($postData_AnnualTargetValue)
				]);
			}
		}

		$client->delete(Env("app.RestBaseURL") . '/api/OverAllPlanFiscalYearDeliverDoeb/' . $input['OverAllPlanFiscalYear_id'], [
			"body" => json_encode($input['OverAllPlanFiscalYear_id'])
		]);
		for ($i = 0; $i < count($input['WorkingPeriodNumber']); $i++) {
			if ($input['WorkingPeriodNumber'][$i] != '' && $input['WorkingPeriodNumber'][$i] != null && $input['OverAllPlanFiscalYear_id'] != '' && $input['OverAllPlanFiscalYear_id'] != null) {
				$postData_Deliver = [
					"WorkingPeriodNumber" => $input['WorkingPeriodNumber'][$i],
					"DetailDeliver" => $input['DetailDeliver'][$i],
					"WeightValue" => $input['WeightValue'][$i],
					"OverAllPlanFiscalYear_id" => $input['OverAllPlanFiscalYear_id']
				];

				$client->post(Env("app.RestBaseURL") . '/api/OverAllPlanFiscalYearDeliverDoeb', [
					"body" => json_encode($postData_Deliver)
				]);
			}
		}

		$client->delete(Env("app.RestBaseURL") . '/api/OverAllPlanFiscalYearDocumentDoeb/' . $input['OverAllPlanFiscalYear_id'], [
			"body" => json_encode($input['OverAllPlanFiscalYear_id'])
		]);
		for ($i = 0; $i < count($input['DetailDocument']); $i++) {
			if ($input['DetailDocument'][$i] != '' && $input['DetailDocument'][$i] != null && $input['OverAllPlanFiscalYear_id'] != '' && $input['OverAllPlanFiscalYear_id'] != null) {
				$postData_Document = [
					"DetailDocument" => $input['DetailDocument'][$i],
					"TypeDocument" => $input['TypeDocument'][$i],
					"FileDocument" => $input['FileDocument'][$i],
					"OverAllPlanFiscalYear_id" => $input['OverAllPlanFiscalYear_id']
				];

				$client->post(Env("app.RestBaseURL") . '/api/OverAllPlanFiscalYearDocumentDoeb', [
					"body" => json_encode($postData_Document)
				]);
			}
		}

		$client->delete(Env("app.RestBaseURL") . '/api/OverAllPlanFiscalYearTargetKPIDoeb/' . $input['OverAllPlanFiscalYear_id'], [
			"body" => json_encode($input['OverAllPlanFiscalYear_id'])
		]);
		for ($i = 0; $i < count($input['ActivityTargetKPI']); $i++) {
			if ($input['ActivityTargetKPI'][$i] != '' && $input['ActivityTargetKPI'][$i] != null && $input['OverAllPlanFiscalYear_id'] != '' && $input['OverAllPlanFiscalYear_id'] != null) {
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
					"OverAllPlanFiscalYear_id" => $input['OverAllPlanFiscalYear_id']
				];

				$client->post(Env("app.RestBaseURL") . '/api/OverAllPlanFiscalYearTargetKPIDoeb', [
					"body" => json_encode($postData_TargetKPI)
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
		$client->delete(Env("app.RestBaseURL") . '/api/OverAllPlanFiscalYearDoeb/' . $id, [
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
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/OverAllPlanFiscalYearDoeb/' . $value . '/edit');
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);

		$this->pageData["data"] = $data['data'];

		$this->pageData["OverAllPlanYearWorkMoneyPeriod"] = $data['data']['OverAllPlanFiscalYearWorkMoneyPeriod'];
		$this->pageData["OverAllPlanYearDeliver"] = $data['data']['OverAllPlanFiscalYearDeliver'];
		$this->pageData["OverAllPlanYearDocument"] = $data['data']['OverAllPlanFiscalYearDocument'];
		$this->pageData["OverAllPlanYearTargetKPI"] = $data['data']['OverAllPlanFiscalYearTargetKPI'];

		$OverAllPlan_id = $this->pageData["data"]["OverAllPlan_id"];
		$StrategyTarGetDetail_id = $this->pageData["data"]["StrategyTarGetDetail_id"];
		$this->pageData['dropdown_OverallPlanYear'] = $this->dropdown->dropdown_OverallPlanYear();
		$this->pageData['dropdown_SourceBudget'] = $this->dropdown->dropdown_SourceBudget();
		$this->pageData['dropdown_masterOverAllPlan'] = $this->dropdown->dropdown_masterOverAllPlanForOther();
		$this->pageData['dropdown_AnnualTargetValue_Year'] = $this->dropdown->dropdown_AnnualTargetValue_Year_forfiveyear($OverAllPlan_id);
		$this->pageData['dropdown_RelatedStrategies'] = $this->dropdown->dropdown_RelatedStrategies_forfiveyear($OverAllPlan_id);
		$this->pageData['dropdown_StrategyTarGet'] = $this->dropdown->dropdown_StrategyTarGet_forfiveyear($OverAllPlan_id);
		$this->pageData['dropdown_StrategyIndicator'] = $this->dropdown->dropdown_StrategyIndicator_forfiveyear($StrategyTarGetDetail_id);
		$this->pageData['dropdown_type_document'] = $this->dropdown->dropdown_type_document();
		$this->pageData['dropdown_master_unit'] = $this->dropdown->dropdown_master_unit();

		return view($this->routeGroup . "/" . $this->routeGroup . "_view", $this->pageData);
	}
}
