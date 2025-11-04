<?php

namespace App\Controllers;

//use App\Models\FUNCTION_REUSE\check_session;
use App\Models\dropdown_reuse;
use GuzzleHttp\Client;

class overall_fiveyear_plan_doeb_Controller extends BaseController
{
	protected $programCode = "overall_fiveyear_plan_doeb";
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
			"menuName" => "โปรแกรมจัดทำข้อมูลภาพรวมแผนยุทธศาสตร์",
		];
	}
	public function index()
	{
		error_reporting(0);
		helper("form");

		$client = new Client();
		$input = $this->request->getRawInput();
		$input['GroupUserID'] = session('GroupUserID');

		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/OverAllPlanFiveYearDoeb', [
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
		$this->pageData['dropdown_SourceBudget'] = $this->dropdown->dropdown_SourceBudget();
		$this->pageData['dropdown_masterOverAllPlan'] = $this->dropdown->dropdown_masterOverAllPlanFiveYear();
		$this->pageData['dropdown_AnnualTargetValue_Year'] = $this->dropdown->dropdown_AnnualTargetValue_Year();
		$this->pageData['dropdown_RelatedStrategies'] = $this->dropdown->dropdown_RelatedStrategies();
		$this->pageData['dropdown_StrategyRelate'] = $this->dropdown->dropdown_StrategyRelate_default();
		$this->pageData['dropdown_StrategyTarGet'] = $this->dropdown->dropdown_StrategyTarGet_default();
		$this->pageData['dropdown_StrategyIndicator'] = $this->dropdown->dropdown_StrategyIndicator_default();
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

		if (!empty($input["btnSave"])) {
			$input['ActiveStatus'] = 'N';
		} else {
			$input['ActiveStatus'] = 'Y';
		}
		$input['GroupUserID'] = session('GroupUserID');
		$input['BudgetFiveYearPlan'] = number_format(str_replace(',', '', $input['BudgetFiveYearPlan']), 2, '.', '');

		$client = new Client();
		$res = $client->post(Env("app.RestBaseURL") . '/api/OverAllPlanFiveYearDoeb', [
			"body" => json_encode($input)
		]);
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);

		return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('บันทึกเรียบร้อย','' , '');");
	}

	public function edit($value)
	{
		// iclude helper form
		error_reporting(0);
		helper("form");
		$this->pageData['action_page'] = "upd";

		$value_all = $value . "." . session('GroupUserID');

		$client = new Client();
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/OverAllPlanFiveYearDoeb/' . $value_all . '/edit');
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);
		$this->pageData["data"] = $data['data'];

		$OverAllPlan_id = $this->pageData["data"]["OverAllPlan_id"];
		$StrategyTarGetDetail_id = $this->pageData["data"]["StrategyTarGetDetail_id"];
		$this->pageData['dropdown_SourceBudget'] = $this->dropdown->dropdown_SourceBudget();
		$this->pageData['dropdown_masterOverAllPlan'] = $this->dropdown->dropdown_masterOverAllPlanFiveYear();
		$this->pageData['dropdown_AnnualTargetValue_Year'] = $this->dropdown->dropdown_AnnualTargetValue_Year_forfiveyear($OverAllPlan_id);
		$this->pageData['dropdown_RelatedStrategies'] = $this->dropdown->dropdown_RelatedStrategies_forfiveyear($OverAllPlan_id);
		$this->pageData['dropdown_StrategyRelate'] = $this->dropdown->dropdown_StrategyRelate_forfiveyear($OverAllPlan_id);
		$this->pageData['dropdown_StrategyTarGet'] = $this->dropdown->dropdown_StrategyTarGet_forfiveyear($OverAllPlan_id);
		$this->pageData['dropdown_StrategyIndicator'] = $this->dropdown->dropdown_StrategyIndicator_forfiveyear($StrategyTarGetDetail_id);
		$this->pageData['dropdown_type_budget'] = $this->dropdown->dropdown_type_budget();
		$this->pageData['dropdown_master_plan_for_budgetplan'] = $this->dropdown->dropdown_master_plan_for_budgetplan();

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
		$input['GroupUserID'] = session('GroupUserID');
		$input['BudgetFiveYearPlan'] = number_format(str_replace(',', '', $input['BudgetFiveYearPlan']), 2, '.', '');

		$client = new Client();
		$res = $client->put(Env("app.RestBaseURL") . '/api/OverAllPlanFiveYearDoeb/' . $input['OverAllPlanFiveYear_id'], [
			"body" => json_encode($input)
		]);
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);

		return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('บันทึกเรียบร้อย','' , '');");
	}

	public function delete($id)
	{
		// iclude helper form
		helper("form");
		$value_all = $id . "." . session('GroupUserID');
		$client = new Client();
		$client->delete(Env("app.RestBaseURL") . '/api/OverAllPlanFiveYearDoeb/' . $value_all, [
			"body" => json_encode($value_all)
		]);
		return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('ลบรายการเรียบร้อย','' , '');");
	}

	public function view($value)
	{
		// iclude helper form
		// iclude helper form
		error_reporting(0);
		helper("form");
		$this->pageData['action_page'] = "upd";

		$client = new Client();
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/OverAllPlanFiveYearDoeb/' . $value . '/edit');
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);
		$this->pageData["data"] = $data['data'];

		$OverAllPlan_id = $this->pageData["data"]["OverAllPlan_id"];
		$StrategyTarGetDetail_id = $this->pageData["data"]["StrategyTarGetDetail_id"];
		$this->pageData['dropdown_SourceBudget'] = $this->dropdown->dropdown_SourceBudget();
		$this->pageData['dropdown_masterOverAllPlan'] = $this->dropdown->dropdown_masterOverAllPlanFiveYear();
		$this->pageData['dropdown_AnnualTargetValue_Year'] = $this->dropdown->dropdown_AnnualTargetValue_Year_forfiveyear($OverAllPlan_id);
		$this->pageData['dropdown_RelatedStrategies'] = $this->dropdown->dropdown_RelatedStrategies_forfiveyear($OverAllPlan_id);
		$this->pageData['dropdown_StrategyRelate'] = $this->dropdown->dropdown_StrategyRelate_forfiveyear($OverAllPlan_id);
		$this->pageData['dropdown_StrategyTarGet'] = $this->dropdown->dropdown_StrategyTarGet_forfiveyear($OverAllPlan_id);
		$this->pageData['dropdown_StrategyIndicator'] = $this->dropdown->dropdown_StrategyIndicator_forfiveyear($StrategyTarGetDetail_id);
		$this->pageData['dropdown_type_budget'] = $this->dropdown->dropdown_type_budget();
		$this->pageData['dropdown_master_plan_for_budgetplan'] = $this->dropdown->dropdown_master_plan_for_budgetplan();

		return view($this->routeGroup . "/" . $this->routeGroup . "_view", $this->pageData);
	}
}
