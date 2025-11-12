<?php

namespace App\Controllers;

//use App\Models\FUNCTION_REUSE\check_session;

use App\Models\dropdown_reuse;
use GuzzleHttp\Client;

class monthly_plan_budget_project_doeb_Controller extends BaseController
{
	protected $programCode = "monthly_plan_budget_project_doeb";
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
			"menuName" => "จัดทำ/ปรับปรุงแผนการใช้งบประมาณส่วนงานโครงการ"
		];
	}
	public function index()
	{
		error_reporting(0);
		helper("form");

		$client = new Client();
		$input = $this->request->getRawInput();
		$input['GroupUserID'] = session('GroupUserID');
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/MonthlyPlanBudgetProject', [
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

		return view($this->routeGroup . "/" . $this->routeGroup . "_add", $this->pageData);
	}

	public function edit($value)
	{
		// iclude helper form
		error_reporting(0);
		helper("form");
		$this->pageData['action_page'] = "upd";

		$client = new Client();
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/MonthlyPlanBudgetProject/' . $value . '/edit');
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);
		$this->pageData["data"] = $data['data'];

		$res2 = $client->request('GET', Env("app.RestBaseURL") . '/api/OverAllPlanStrategyWorkMoneyPeriodNewDoeb/' . $data['data']['OverAllPlanStrategy_id'] . '/edit');
		$data2 = $res2->getBody()->getContents('json');
		$data2 = json_decode($data2, true);
		$this->pageData["data_new"] = $data2['data'];

		//print_r($data2['data']);
		//exit;

		return view($this->routeGroup . "/" . $this->routeGroup . "_add", $this->pageData);
	}

	public function edit2($value)
	{
		// iclude helper form
		error_reporting(0);
		helper("form");
		$this->pageData['action_page'] = "upd2";

		$client = new Client();
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/MonthlyPlanBudgetProjectForEditPlan/' . $value . '/edit');
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);
		$this->pageData["data"] = $data['data'];

		$res2 = $client->request('GET', Env("app.RestBaseURL") . '/api/OverAllPlanStrategyWorkMoneyPeriodNewDoeb/' . $data['data']['OverAllPlanStrategy_id'] . '/edit');
		$data2 = $res2->getBody()->getContents('json');
		$data2 = json_decode($data2, true);
		$this->pageData["data_new"] = $data2['data'];

		//print_r($data2['data']);
		//exit;

		return view($this->routeGroup . "/" . $this->routeGroup . "_add2", $this->pageData);
	}

	public function update()
	{
		error_reporting(0);
		helper("form");
		$client = new Client();

		$input = $this->request->getRawInput();
		$input['GroupUserID'] = session('GroupUserID');

		if (!empty($input["btnSave_Confirm"])) {
			$input['ActiveStatus'] = 'Y';
			$input['ActiveStatusPlanMonth'] = 'Y';
		} else {
			$input['ActiveStatus'] = 'N';
			$input['ActiveStatusPlanMonth'] = 'N';
		}

		//print_r($input);
		//exit;

		$res2 = $client->delete(Env("app.RestBaseURL") . '/api/OverAllPlanStrategyWorkMoneyPeriodNewDoeb/' . $input['OverAllPlanStrategy_id'], [
			"body" => json_encode($input['OverAllPlanStrategy_id'])
		]);
		$data2 = $res2->getBody()->getContents('json');
		$data2 = json_decode($data2, true);
		$input['ActiveStatusPlanMonthVersion'] = $data2['data'];

		$res = $client->put(Env("app.RestBaseURL") . '/api/MonthlyPlanBudgetProject/' . $input['OverAllPlanStrategy_id'], [
			"body" => json_encode($input)
		]);
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);

		for ($i = 0; $i < count($input['WorkMoneyPeriodNumber']); $i++) {
			if ($input['WorkMoneyPeriodNumber'][$i] != '' && $input['WorkMoneyPeriodNumber'][$i] != null && $input['OverAllPlanStrategy_id'] != '' && $input['OverAllPlanStrategy_id'] != null) {
				$postData_AnnualTargetValue = [
					"WorkMoneyPeriodNumber" => $input['WorkMoneyPeriodNumber'][$i],
					"MoneyPeriod" => $input['MoneyPeriod'][$i],
					"Disbursement" => $input['Disbursement'][$i],
					"TotalDisbursement" => $input['TotalDisbursement'][$i],
					"TimeDisbursement" => $input['TimeDisbursement'][$i],
					"DateWorkMoneyPeriod" => $input['DateWorkMoneyPeriod'][$i],
					"ProgressWorkMoneyPeriod" => $input['ProgressWorkMoneyPeriod'][$i],
					"OverAllPlanStrategy_id" => $input['OverAllPlanStrategy_id'],

					"GroupUserID" => $input['GroupUserID'],
					"StatusData" => 'Y',
					"VersionStatus" => $data2['data'],
				];

				$client->post(Env("app.RestBaseURL") . '/api/OverAllPlanStrategyWorkMoneyPeriodNewDoeb', [
					"body" => json_encode($postData_AnnualTargetValue)
				]);
			}
		}

		return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('บันทึกเรียบร้อย','' , '');");
	}

	public function update2()
	{
		error_reporting(0);
		helper("form");
		$client = new Client();

		$input = $this->request->getRawInput();
		$input['GroupUserID'] = session('GroupUserID');

		if (!empty($input["btnSave_Confirm"])) {
			$input['ActiveStatusPlanMonthChange'] = 'Y';
		}

		//print_r($input);
		//exit;

		$res2 = $client->delete(Env("app.RestBaseURL") . '/api/OverAllPlanStrategyWorkMoneyPeriodNewDoeb/' . $input['OverAllPlanStrategy_id'], [
			"body" => json_encode($input['OverAllPlanStrategy_id'])
		]);
		$data2 = $res2->getBody()->getContents('json');
		$data2 = json_decode($data2, true);
		$input['ActiveStatusPlanMonthVersion'] = $data2['data'];

		$res = $client->put(Env("app.RestBaseURL") . '/api/MonthlyPlanBudgetProject/' . $input['OverAllPlanStrategy_id'], [
			"body" => json_encode($input)
		]);
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);

		for ($i = 0; $i < count($input['WorkMoneyPeriodNumber']); $i++) {
			if ($input['WorkMoneyPeriodNumber'][$i] != '' && $input['WorkMoneyPeriodNumber'][$i] != null && $input['OverAllPlanStrategy_id'] != '' && $input['OverAllPlanStrategy_id'] != null) {
				$postData_AnnualTargetValue = [
					"WorkMoneyPeriodNumber" => $input['WorkMoneyPeriodNumber'][$i],
					"MoneyPeriod" => $input['MoneyPeriod'][$i],
					"Disbursement" => $input['Disbursement'][$i],
					"TotalDisbursement" => $input['TotalDisbursement'][$i],
					"TimeDisbursement" => $input['TimeDisbursement'][$i],
					"DateWorkMoneyPeriod" => $input['DateWorkMoneyPeriod'][$i],
					"ProgressWorkMoneyPeriod" => $input['ProgressWorkMoneyPeriod'][$i],
					"OverAllPlanStrategy_id" => $input['OverAllPlanStrategy_id'],

					"GroupUserID" => $input['GroupUserID'],
					"StatusData" => 'Y',
					"VersionStatus" => $data2['data'],
				];

				$client->post(Env("app.RestBaseURL") . '/api/OverAllPlanStrategyWorkMoneyPeriodNewDoeb', [
					"body" => json_encode($postData_AnnualTargetValue)
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

		$client = new Client();
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/MonthlyPlanBudgetProject/' . $value . '/edit');
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);
		$this->pageData["data"] = $data['data'];

		$res2 = $client->request('GET', Env("app.RestBaseURL") . '/api/OverAllPlanStrategyWorkMoneyPeriodNewDoeb/' . $data['data']['OverAllPlanStrategy_id'] . '/edit');
		$data2 = $res2->getBody()->getContents('json');
		$data2 = json_decode($data2, true);
		$this->pageData["data_new"] = $data2['data'];

		return view($this->routeGroup . "/" . $this->routeGroup . "_view", $this->pageData);
	}

	public function view2($value)
	{
		// iclude helper form
		error_reporting(0);
		helper("form");
		$this->pageData['action_page'] = "upd";

		$client = new Client();
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/MonthlyPlanBudgetProjectForEditPlan/' . $value . '/edit');
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);
		$this->pageData["data"] = $data['data'];

		$res2 = $client->request('GET', Env("app.RestBaseURL") . '/api/OverAllPlanStrategyWorkMoneyPeriodNewDoeb/' . $data['data']['OverAllPlanStrategy_id'] . '/edit');
		$data2 = $res2->getBody()->getContents('json');
		$data2 = json_decode($data2, true);
		$this->pageData["data_new"] = $data2['data'];

		return view($this->routeGroup . "/" . $this->routeGroup . "_view2", $this->pageData);
	}
}
