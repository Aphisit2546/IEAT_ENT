<?php

namespace App\Controllers;

//use App\Models\FUNCTION_REUSE\check_session;
use App\Models\dropdown_reuse;
use GuzzleHttp\Client;
use Exception;


class check_detail_plan_doeb_Controller extends BaseController
{
	protected $programCode = "check_detail_plan_doeb";
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
			"menuName" => "ตรวจทานรายละเอียดโครงการ",
		];
	}
	public function index()
	{
		error_reporting(0);
		helper("form");

		$client = new Client();
		$input = $this->request->getRawInput();

		//if ($input['search_value'] == 'search_value') {
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/OverAllPlanStrategyDoeb', [
			"body" => json_encode($input)
		]);

		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);
		$this->pageData["lstData"] = $data['data'];

		$this->pageData['dropdown_masterOverAllPlan'] = $this->dropdown->dropdown_masterOverAllPlanForOtherV2();
		$this->pageData['dropdown_AnnualTargetValue_Year'] = $this->dropdown->dropdown_AnnualTargetValue_Year_forfiveyear($input['data_search2']);
		//} else {
		//$this->pageData["lstData"] = null;
		//$this->pageData['dropdown_masterOverAllPlan'] = $this->dropdown->dropdown_masterOverAllPlanForOther();
		//$this->pageData['dropdown_AnnualTargetValue_Year'] = $this->dropdown->dropdown_AnnualTargetValue_Year();
		//}

		$this->pageData["data_search1"] = $input['data_search1'];
		$this->pageData["data_search2"] = $input['data_search2'];
		$this->pageData["data_search3"] = $input['data_search3'];
		$this->pageData["data_search4"] = $input['data_search4'];

		return view($this->routeGroup . "/" . $this->routeGroup . "_search", $this->pageData);
	}

	public function edit($dataAll)
	{
		// iclude helper form
		error_reporting(0);
		helper("form");

		$this->pageData['action_page'] = "upd";

		$client = new Client();

		$keys = explode(".", $dataAll);
		$AllPlanId = $keys[0];
		$TypeAllPlan = $keys[1];
		$GroupUserID = $keys[2];

		if ($TypeAllPlan == '1') {
			$value_all = $AllPlanId . "." . $GroupUserID;
			$res = $client->request('GET', Env("app.RestBaseURL") . '/api/OverAllPlanFiveYearDoeb/' . $value_all . '/edit');
			$data = $res->getBody()->getContents('json');
			$data = json_decode($data, true);
			$this->pageData["data"] = $data['data'];

			$OverAllPlan_id = $this->pageData["data"]["OverAllPlan_id"];
			$StrategyTarGetDetail_id = $this->pageData["data"]["StrategyTarGetDetail_id"];
			$OverAllPlan_id_ref = $this->pageData["data"]["OverAllPlan_id_ref"];

			$this->pageData['dropdown_master_plan_for_budgetplan'] = $this->dropdown->dropdown_master_plan_for_budgetplan();
			$this->pageData['dropdown_SourceBudget'] = $this->dropdown->dropdown_SourceBudget();
			$this->pageData['dropdown_masterOverAllPlan'] = $this->dropdown->dropdown_masterOverAllPlanOneYear();
			$this->pageData['dropdown_type_budget'] = $this->dropdown->dropdown_type_budget();
			$this->pageData['dropdown_StrategyIndicator'] = $this->dropdown->dropdown_StrategyIndicator_forfiveyear($StrategyTarGetDetail_id);

			if ($OverAllPlan_id_ref != '' && $OverAllPlan_id_ref != null) {
				$this->pageData['dropdown_AnnualTargetValue_Year'] = $this->dropdown->dropdown_AnnualTargetValue_Year_forfiveyear($OverAllPlan_id_ref);
				$this->pageData['dropdown_RelatedStrategies'] = $this->dropdown->dropdown_RelatedStrategies_forfiveyear($OverAllPlan_id_ref);
				$this->pageData['dropdown_StrategyRelate'] = $this->dropdown->dropdown_StrategyRelate_forfiveyear($OverAllPlan_id_ref);
				$this->pageData['dropdown_StrategyTarGet'] = $this->dropdown->dropdown_StrategyTarGet_forfiveyear($OverAllPlan_id_ref);
			} else {
				$this->pageData['dropdown_AnnualTargetValue_Year'] = $this->dropdown->dropdown_AnnualTargetValue_Year_forfiveyear($OverAllPlan_id);
				$this->pageData['dropdown_RelatedStrategies'] = $this->dropdown->dropdown_RelatedStrategies_forfiveyear($OverAllPlan_id);
				$this->pageData['dropdown_StrategyRelate'] = $this->dropdown->dropdown_StrategyRelate_forfiveyear($OverAllPlan_id);
				$this->pageData['dropdown_StrategyTarGet'] = $this->dropdown->dropdown_StrategyTarGet_forfiveyear($OverAllPlan_id);
			}


			return view($this->routeGroup . "/" . $this->routeGroup . "_add1", $this->pageData);
		}

		if ($TypeAllPlan == '2') {
			$value_all = $AllPlanId . "." . $GroupUserID;

			$res = $client->request('GET', Env("app.RestBaseURL") . '/api/OverAllPlanYearDoeb/' . $value_all . '/edit');
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

			$this->pageData['dropdown_master_plan_for_budgetplan'] = $this->dropdown->dropdown_master_plan_for_budgetplan();
			$this->pageData['dropdown_OverallFiveYearPlan'] = $this->dropdown->dropdown_OverallFiveYearPlan();
			$this->pageData['dropdown_SourceBudget'] = $this->dropdown->dropdown_SourceBudget();
			$this->pageData['dropdown_masterOverAllPlan'] = $this->dropdown->dropdown_masterOverAllPlanOneYear();
			$this->pageData['dropdown_type_document'] = $this->dropdown->dropdown_type_document();
			$this->pageData['dropdown_master_unit'] = $this->dropdown->dropdown_master_unit();
			$this->pageData['dropdown_type_budget'] = $this->dropdown->dropdown_type_budget();
			$this->pageData['dropdown_StrategyIndicator'] = $this->dropdown->dropdown_StrategyIndicator_forfiveyear($StrategyTarGetDetail_id);

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

			return view($this->routeGroup . "/" . $this->routeGroup . "_add2", $this->pageData);
		}
	}
	public function update()
	{
		error_reporting(0);
		helper("form");

		$input = $this->request->getRawInput();

		$TypeAllPlan = $input["TypeAllPlan"];
		$AllPlanId = $input["AllPlanId"];
		$client = new Client();

		if (!empty($input["btnSave"])) {

			$res = $client->put(Env("app.RestBaseURL") . '/api/OverAllPlanStrategyReturnDoeb/' . $AllPlanId, [
				"body" => json_encode($input)
			]);
			$data = $res->getBody()->getContents('json');
			$data = json_decode($data, true);
		} elseif (!empty($input["btnConfirm_hold"])) {

			$res = $client->put(Env("app.RestBaseURL") . '/api/OverAllPlanStrategyHoldingDoeb/' . $AllPlanId, [
				"body" => json_encode($input)
			]);
			$data = $res->getBody()->getContents('json');
			$data = json_decode($data, true);
		} else {

			if ($TypeAllPlan == '1') {
				$input['BudgetYearPlan'] = number_format(str_replace(',', '', $input['BudgetYearPlan']), 2, '.', '');
				//print_r($input);
				//exit;
				$res = $client->post(Env("app.RestBaseURL") . '/api/OverAllPlanStrategyDoeb', [
					"body" => json_encode($input)
				]);
				$data = $res->getBody()->getContents('json');
				$data = json_decode($data, true);
			}

			if ($TypeAllPlan == '2') {

				$input['BudgetYearPlan'] = number_format(str_replace(',', '', $input['BudgetYearPlan']), 2, '.', '');
				//print_r($input);
				//exit;
				$res = $client->post(Env("app.RestBaseURL") . '/api/OverAllPlanStrategyDoeb', [
					"body" => json_encode($input)
				]);
				$data = $res->getBody()->getContents('json');
				$data = json_decode($data, true);
				$OverAllPlanStrategy_id = $data['data'];

				$client->delete(Env("app.RestBaseURL") . '/api/OverAllPlanStrategyWorkMoneyPeriodDoeb/' . $OverAllPlanStrategy_id, [
					"body" => json_encode($OverAllPlanStrategy_id)
				]);
				for ($i = 0; $i < count($input['WorkMoneyPeriodNumber']); $i++) {
					if ($input['WorkMoneyPeriodNumber'][$i] != '' && $input['WorkMoneyPeriodNumber'][$i] != null && $OverAllPlanStrategy_id != '' && $OverAllPlanStrategy_id != null) {
						$postData_AnnualTargetValue = [
							"WorkMoneyPeriodNumber" => $input['WorkMoneyPeriodNumber'][$i],
							"MoneyPeriod" => $input['MoneyPeriod'][$i],
							"Disbursement" => $input['Disbursement'][$i],
							"TotalDisbursement" => $input['TotalDisbursement'][$i],
							"TimeDisbursement" => $input['TimeDisbursement'][$i],
							"DateWorkMoneyPeriod" => $input['DateWorkMoneyPeriod'][$i],
							"ProgressWorkMoneyPeriod" => $input['ProgressWorkMoneyPeriod'][$i],
							"OverAllPlanStrategy_id" => $OverAllPlanStrategy_id,
							"GroupUserID" => $input["GroupUserID"]
						];

						$client->post(Env("app.RestBaseURL") . '/api/OverAllPlanStrategyWorkMoneyPeriodDoeb', [
							"body" => json_encode($postData_AnnualTargetValue)
						]);
					}
				}

				$client->delete(Env("app.RestBaseURL") . '/api/OverAllPlanStrategyDeliverDoeb/' . $OverAllPlanStrategy_id, [
					"body" => json_encode($OverAllPlanStrategy_id)
				]);
				for ($i = 0; $i < count($input['WorkingPeriodNumber']); $i++) {
					if ($input['WorkingPeriodNumber'][$i] != '' && $input['WorkingPeriodNumber'][$i] != null && $OverAllPlanStrategy_id != '' && $OverAllPlanStrategy_id != null) {
						$postData_Deliver = [
							"WorkingPeriodNumber" => $input['WorkingPeriodNumber'][$i],
							"DetailDeliver" => $input['DetailDeliver'][$i],
							"WeightValue" => $input['WeightValue'][$i],
							"OverAllPlanStrategy_id" => $OverAllPlanStrategy_id,
							"GroupUserID" => $input["GroupUserID"]
						];

						$client->post(Env("app.RestBaseURL") . '/api/OverAllPlanStrategyDeliverDoeb', [
							"body" => json_encode($postData_Deliver)
						]);
					}
				}

				$client->delete(Env("app.RestBaseURL") . '/api/OverAllPlanStrategyDocumentDoeb/' . $OverAllPlanStrategy_id, [
					"body" => json_encode($OverAllPlanStrategy_id)
				]);
				for ($i = 0; $i < count($input['DetailDocument']); $i++) {
					if ($input['DetailDocument'][$i] != '' && $input['DetailDocument'][$i] != null && $OverAllPlanStrategy_id != '' && $OverAllPlanStrategy_id != null) {
						$postData_Document = [
							"DetailDocument" => $input['DetailDocument'][$i],
							"TypeDocument" => $input['TypeDocument'][$i],
							"FileDocument" => $input['FileDocument'][$i],
							"OverAllPlanStrategy_id" => $OverAllPlanStrategy_id,
							"GroupUserID" => $input["GroupUserID"]
						];

						$client->post(Env("app.RestBaseURL") . '/api/OverAllPlanStrategyDocumentDoeb', [
							"body" => json_encode($postData_Document)
						]);
					}
				}

				$client->delete(Env("app.RestBaseURL") . '/api/OverAllPlanStrategyTargetKPIDoeb/' . $OverAllPlanStrategy_id, [
					"body" => json_encode($OverAllPlanStrategy_id)
				]);
				for ($i = 0; $i < count($input['ActivityTargetKPI']); $i++) {
					if ($input['ActivityTargetKPI'][$i] != '' && $input['ActivityTargetKPI'][$i] != null && $OverAllPlanStrategy_id != '' && $OverAllPlanStrategy_id != null) {
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
							"OverAllPlanStrategy_id" => $OverAllPlanStrategy_id,
							"GroupUserID" => $input["GroupUserID"]
						];

						$client->post(Env("app.RestBaseURL") . '/api/OverAllPlanStrategyTargetKPIDoeb', [
							"body" => json_encode($postData_TargetKPI)
						]);
					}
				}
			}
		}

		return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('บันทึกเรียบร้อย','' , '');");
	}

	public function view($dataAll)
	{
		// iclude helper form
		error_reporting(0);
		helper("form");

		$this->pageData['action_page'] = "upd";

		$keys = explode(".", $dataAll);
		$AllPlanId = $keys[0];
		$TypeAllPlan = $keys[1];
		$GroupUserID = $keys[2];
		$value_all = $AllPlanId . "" . $TypeAllPlan;

		$client = new Client();
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/OverAllPlanStrategyDoeb/' . $value_all . '/edit');
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);

		$this->pageData["data"] = $data['data'];

		$this->pageData["OverAllPlanStrategyWorkMoneyPeriod"] = $data['data']['OverAllPlanStrategyWorkMoneyPeriod'];
		$this->pageData["OverAllPlanStrategyDeliver"] = $data['data']['OverAllPlanStrategyDeliver'];
		$this->pageData["OverAllPlanStrategyDocument"] = $data['data']['OverAllPlanStrategyDocument'];
		$this->pageData["OverAllPlanStrategyTargetKPI"] = $data['data']['OverAllPlanStrategyTargetKPI'];

		$OverAllPlan_id = $this->pageData["data"]["OverAllPlan_id"];
		$StrategyTarGetDetail_id = $this->pageData["data"]["StrategyTarGetDetail_id"];
		$OverAllPlan_id_ref = $this->pageData["data"]["OverAllPlan_id_ref"];

		$this->pageData['dropdown_master_plan_for_budgetplan'] = $this->dropdown->dropdown_master_plan_for_budgetplan();
		$this->pageData['dropdown_OverallFiveYearPlan'] = $this->dropdown->dropdown_OverallFiveYearPlan();
		$this->pageData['dropdown_SourceBudget'] = $this->dropdown->dropdown_SourceBudget();
		$this->pageData['dropdown_masterOverAllPlan'] = $this->dropdown->dropdown_masterOverAllPlanOneYear();
		$this->pageData['dropdown_type_document'] = $this->dropdown->dropdown_type_document();
		$this->pageData['dropdown_master_unit'] = $this->dropdown->dropdown_master_unit();
		$this->pageData['dropdown_type_budget'] = $this->dropdown->dropdown_type_budget();
		$this->pageData['dropdown_StrategyIndicator'] = $this->dropdown->dropdown_StrategyIndicator_forfiveyear($StrategyTarGetDetail_id);

		if ($OverAllPlan_id_ref != '' && $OverAllPlan_id_ref != null) {
			$this->pageData['dropdown_StrategyRelate'] = $this->dropdown->dropdown_StrategyRelate_forfiveyear($OverAllPlan_id_ref);
			$this->pageData['dropdown_AnnualTargetValue_Year'] = $this->dropdown->dropdown_AnnualTargetValue_Year_forfiveyear($OverAllPlan_id_ref);
			$this->pageData['dropdown_RelatedStrategies'] = $this->dropdown->dropdown_RelatedStrategies_forfiveyear($OverAllPlan_id_ref);
			$this->pageData['dropdown_StrategyTarGet'] = $this->dropdown->dropdown_StrategyTarGet_forfiveyear($OverAllPlan_id_ref);
		} else {
			$this->pageData['dropdown_StrategyRelate'] = $this->dropdown->dropdown_StrategyRelate_forfiveyear($OverAllPlan_id);
			$this->pageData['dropdown_AnnualTargetValue_Year'] = $this->dropdown->dropdown_AnnualTargetValue_Year_forfiveyear($OverAllPlan_id);
			$this->pageData['dropdown_RelatedStrategies'] = $this->dropdown->dropdown_RelatedStrategies_forfiveyear($OverAllPlan_id);
			$this->pageData['dropdown_StrategyTarGet'] = $this->dropdown->dropdown_StrategyTarGet_forfiveyear($OverAllPlan_id);
		}

		if ($TypeAllPlan == '1') {
			return view($this->routeGroup . "/" . $this->routeGroup . "_view1", $this->pageData);
		}
		if ($TypeAllPlan == '2') {
			return view($this->routeGroup . "/" . $this->routeGroup . "_view2", $this->pageData);
		}
	}
}
