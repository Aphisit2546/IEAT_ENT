<?php

namespace App\Controllers;

//use App\Models\FUNCTION_REUSE\check_session;

use App\Models\dropdown_reuse;
use GuzzleHttp\Client;

class Report_01_doeb_Controller extends BaseController
{
	protected $programCode = "Report_01_doeb";
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
			"menuName" => "รายงานความก้าวหน้างานโครงการตามแผนงบประมาณประจำปี"
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

	public function add($value)
	{
		// iclude helper form
		error_reporting(0);
		helper("form");

		$this->pageData['action_page'] = "store";

		$this->pageData['dropdown_year_report'] = $this->dropdown->dropdown_year_report();
		$this->pageData["OverAllPlanStrategy_id"] = $value;

		$client = new Client();
		$res_default = $client->request('GET', Env("app.RestBaseURL") . '/api/MonthlyProjectListDoeb/' . $value . '/edit');
		$data_default = $res_default->getBody()->getContents('json');
		$data_default = json_decode($data_default, true);

		$this->pageData["lstData"] = $data_default['data'];

		return view($this->routeGroup . "/" . $this->routeGroup . "_list_add", $this->pageData);
	}

	public function store()
	{
		error_reporting(0);
		helper("form");
		$input = $this->request->getRawInput();
		$client = new Client();

		$Monthly_report = explode("-", $input['Monthly_report']);
		$check_month = strlen($Monthly_report[0]);
		if ($check_month == '1') {
			$month_use = "0" . $Monthly_report[0];
		} else {
			$month_use = $Monthly_report[0];
		}

		$input['GroupUserID'] = session('GroupUserID');
		$input['MonthReport'] = $month_use;
		$input['YearReport'] = $Monthly_report[1];
		$input['DateReport'] = date("Y-m-d");
		$input['ActiveStatus'] = "N";

		$res = $client->post(Env("app.RestBaseURL") . '/api/MonthlyProjectDoeb', [
			"body" => json_encode($input)
		]);
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);
		$MonthlyProject_id = $data['data'];

		$res_default = $client->request('GET', Env("app.RestBaseURL") . '/api/MonthlyProjectDefaultDoeb/' . $input['OverAllPlanStrategy_id'] . '/edit');
		$data_default = $res_default->getBody()->getContents('json');
		$data_default = json_decode($data_default, true);

		//ค้นหาเดือนก่อนหน้า
		if ($month_use == '01') {
			$month_before_search = "12";
			$year_before_search = $Monthly_report[1] - 1;
		} else {
			$month_before = $Monthly_report[0] - 1;
			$check_month_before = strlen($month_before);
			if ($check_month_before == '1') {
				$month_before_search = "0" . $month_before;
			} else {
				$month_before_search = $month_before;
			}
			$year_before_search = $Monthly_report[1];
		}

		foreach ($data_default['data']['OverAllPlanStrategyWorkMoneyPeriod'] as $OverAllPlanStrategyWorkMoneyPeriod) {

			$AccumulateWork = "";
			$AccumulateDisbursement = "";
			$value_all_01 = $OverAllPlanStrategyWorkMoneyPeriod['WorkMoneyPeriod_id'] . "." . $month_before_search . "." . $year_before_search . "." . session('GroupUserID');
			$res_default_01 = $client->request('GET', Env("app.RestBaseURL") . '/api/MonthlyProjectDefaultWorkMoneyPeriodDoeb/' . $value_all_01 . '/edit');
			$data_default_01 = $res_default_01->getBody()->getContents('json');
			$data_default_01 = json_decode($data_default_01, true);
			$AccumulateWork = $data_default_01['data']['TotalAccumulateWork'];
			$AccumulateDisbursement = $data_default_01['data']['TotalAccumulateDisbursement'];

			$postData_detail1 = [
				"WorkMoneyPeriod_id" => $OverAllPlanStrategyWorkMoneyPeriod['WorkMoneyPeriod_id'],

				"AccumulateWork" => $AccumulateWork,
				"AccumulateDisbursement" => $AccumulateDisbursement,
				"OverAllPlanStrategy_id" => $input['OverAllPlanStrategy_id'],
				"ActiveStatus" => $input['ActiveStatus'],
				"MonthReport" => $input['MonthReport'],
				"YearReport" => $input['YearReport'],
				"MonthlyProject_id" => $MonthlyProject_id,
				"GroupUserID" => session('GroupUserID'),
			];
			//print_r($postData_detail1);

			$client->post(Env("app.RestBaseURL") . '/api/MonthlyProjectWorkMoneyPeriodDoeb', [
				"body" => json_encode($postData_detail1)
			]);
		}

		foreach ($data_default['data']['OverAllPlanStrategyDeliver'] as $OverAllPlanStrategyDeliver) {
			/*
			$value_all_02 = $OverAllPlanStrategyDeliver['Deliver_id'] . "." . $month_before_search . "." . $year_before_search;
			$res_default_02 = $client->request('GET', Env("app.RestBaseURL") . '/api/MonthlyProjectDefaultDeliverDoeb/' . $value_all_02 . '/edit');
			$data_default_02 = $res_default_02->getBody()->getContents('json');
			$data_default_02 = json_decode($data_default_02, true);
			*/
			$postData_detail2 = [
				"Deliver_id" => $OverAllPlanStrategyDeliver['Deliver_id'],

				"OverAllPlanStrategy_id" => $input['OverAllPlanStrategy_id'],
				"ActiveStatus" => $input['ActiveStatus'],
				"MonthReport" => $input['MonthReport'],
				"YearReport" => $input['YearReport'],
				"MonthlyProject_id" => $MonthlyProject_id,
				"GroupUserID" => session('GroupUserID'),
			];

			$client->post(Env("app.RestBaseURL") . '/api/MonthlyProjectDeliverDoeb', [
				"body" => json_encode($postData_detail2)
			]);
		}

		foreach ($data_default['data']['OverAllPlanStrategyTargetKPI'] as $OverAllPlanStrategyTargetKPI) {

			$AccumulateKPI = "";
			$value_all_03 = $OverAllPlanStrategyTargetKPI['TargetKPI_id'] . "." . $month_before_search . "." . $year_before_search . "." . session('GroupUserID');
			$res_default_03 = $client->request('GET', Env("app.RestBaseURL") . '/api/MonthlyProjectDefaultTargetKPIDoeb/' . $value_all_03 . '/edit');
			$data_default_03 = $res_default_03->getBody()->getContents('json');
			$data_default_03 = json_decode($data_default_03, true);
			$AccumulateKPI = $data_default_03['data'];

			$postData_detail3 = [
				"TargetKPI_id" => $OverAllPlanStrategyTargetKPI['TargetKPI_id'],

				"AccumulateKPI" => $AccumulateKPI,
				"OverAllPlanStrategy_id" => $input['OverAllPlanStrategy_id'],
				"ActiveStatus" => $input['ActiveStatus'],
				"MonthReport" => $input['MonthReport'],
				"YearReport" => $input['YearReport'],
				"MonthlyProject_id" => $MonthlyProject_id,
				"GroupUserID" => session('GroupUserID'),
			];
			//print_r($postData_detail3);

			$client->post(Env("app.RestBaseURL") . '/api/MonthlyProjectTargetKPIDoeb', [
				"body" => json_encode($postData_detail3)
			]);
		}

		echo "<script type='text/javascript'>window.location='" . base_url() . "Report_01_doeb/edt/$MonthlyProject_id';</script>";
		exit();
	}

	public function edit($value)
	{
		// iclude helper form
		error_reporting(0);
		helper("form");

		$this->pageData['action_page'] = "upd";

		$this->pageData['dropdown_year_report'] = $this->dropdown->dropdown_year_report();

		$client = new Client();
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/MonthlyProjectDoeb/' . $value . '/edit');
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

		// main
		$client = new Client();
		$res = $client->put(Env("app.RestBaseURL") . '/api/MonthlyProjectDoeb/' . $input['MonthlyProject_id'], [
			"body" => json_encode($input)
		]);
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);

		$seq_01 = 0;
		foreach ($input['WorkMoneyPeriodMonthly_id'] as $WorkMoneyPeriodMonthly_id) {

			$postData_detail1 = [
				"AccumulateWork" => $input['AccumulateWork'][$seq_01],
				"WorkNow" => $input['WorkNow'][$seq_01],
				"TotalAccumulateWork" => $input['TotalAccumulateWork'][$seq_01],
				"AccumulateDisbursement" => $input['AccumulateDisbursement'][$seq_01],
				"DisbursementNow" => $input['DisbursementNow'][$seq_01],
				"TotalAccumulateDisbursement" => $input['TotalAccumulateDisbursement'][$seq_01],
				"ActiveStatus" => $input['ActiveStatus'],
			];

			$client->put(Env("app.RestBaseURL") . '/api/MonthlyProjectWorkMoneyPeriodDoeb/' . $WorkMoneyPeriodMonthly_id, [
				"body" => json_encode($postData_detail1)
			]);

			$seq_01++;
		}

		$seq_02 = 0;
		foreach ($input['DeliverMonthly_id'] as $DeliverMonthly_id) {

			$postData_detail2 = [
				"ReceiveDeliverDate" => $input['ReceiveDeliverDate'][$seq_02],
				"RemarksDeliver" => $input['RemarksDeliver'][$seq_02],
				"ActiveStatus" => $input['ActiveStatus'],
			];

			$client->put(Env("app.RestBaseURL") . '/api/MonthlyProjectDeliverDoeb/' . $DeliverMonthly_id, [
				"body" => json_encode($postData_detail2)
			]);

			$seq_02++;
		}

		$seq_03 = 0;
		foreach ($input['TargetKPIMonthly_id'] as $TargetKPIMonthly_id) {

			$postData_detail3 = [
				"AccumulateKPI" => $input['AccumulateKPI'][$seq_03],
				"KPINow" => $input['KPINow'][$seq_03],
				"TotalKPI" => $input['TotalKPI'][$seq_03],
				"FinishDateKPI" => $input['FinishDateKPI'][$seq_03],
				"RemarksKPI" => $input['RemarksKPI'][$seq_03],
				"ActiveStatus" => $input['ActiveStatus'],
			];

			$client->put(Env("app.RestBaseURL") . '/api/MonthlyProjectTargetKPIDoeb/' . $TargetKPIMonthly_id, [
				"body" => json_encode($postData_detail3)
			]);

			$seq_03++;
		}

		$OverAllPlanStrategy_id = $input['OverAllPlanStrategy_id'];
		echo "<script type='text/javascript'>window.location='" . base_url() . "Report_01_doeb/add/$OverAllPlanStrategy_id';</script>";
		exit();
		//return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('บันทึกเรียบร้อย','' , '');");
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

		$this->pageData['dropdown_year_report'] = $this->dropdown->dropdown_year_report();

		$client = new Client();
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/MonthlyProjectDoeb/' . $value . '/edit');
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);

		$this->pageData["data"] = $data['data'];

		return view($this->routeGroup . "/" . $this->routeGroup . "_view", $this->pageData);
	}
}
