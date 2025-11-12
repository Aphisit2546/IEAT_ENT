<?php

namespace App\Controllers;

//use App\Models\FUNCTION_REUSE\check_session;

use App\Models\dropdown_reuse;
use GuzzleHttp\Client;

class Report_01_activity_doeb_Controller extends BaseController
{
	protected $programCode = "Report_01_activity_doeb";
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
			"menuName" => "รายงานความก้าวหน้างานกิจกรรมตามแผนงบประมาณประจำปี"
		];
	}
	public function index()
	{
		error_reporting(0);
		helper("form");

		$client = new Client();
		$input = $this->request->getRawInput();
		$input['GroupUserID'] = session('GroupUserID');
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/MonthlyPlanBudgetOther', [
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
		$this->pageData["DraftBudgetControlDetail_id"] = $value;

		$client = new Client();
		$res_default = $client->request('GET', Env("app.RestBaseURL") . '/api/MonthlyActivityListDoeb/' . $value . '/edit');
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
		$input['GroupTypeID'] = session('GroupTypeID');
		$input['MonthReport'] = $month_use;
		$input['YearReport'] = $Monthly_report[1];
		$input['DateReport'] = date("Y-m-d");
		$input['ActiveStatus'] = "N";

		$res = $client->post(Env("app.RestBaseURL") . '/api/MonthlyActivityDoeb', [
			"body" => json_encode($input)
		]);
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);
		$MonthlyActivity_id = $data['data'];

		$res_default = $client->request('GET', Env("app.RestBaseURL") . '/api/MonthlyPlanBudgetOther/' . $input['DraftBudgetControlDetail_id'] . '/edit');
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

		foreach ($data_default['data']['DraftBudgetControlDetailSub'] as $DraftBudgetControlDetailSub) {

			$postData_detail1 = [
				"DraftBudgetControlDetailSub_id" => $DraftBudgetControlDetailSub['DraftBudgetControlDetailSub_id'],
				"DraftBudgetControlDetail_id" => $DraftBudgetControlDetailSub['DraftBudgetControlDetail_id'],

				"MonthlyActivity_id" => $MonthlyActivity_id,
				"ActiveStatus" => $input['ActiveStatus'],
				"MonthReport" => $input['MonthReport'],
				"YearReport" => $input['YearReport'],
				"GroupUserID" => session('GroupUserID'),
				"GroupTypeID" => session('GroupTypeID'),
			];

			$client->post(Env("app.RestBaseURL") . '/api/MonthlyActivityBudgetDoeb', [
				"body" => json_encode($postData_detail1)
			]);
		}

		echo "<script type='text/javascript'>window.location='" . base_url() . "Report_01_activity_doeb/edt/$MonthlyActivity_id';</script>";
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
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/MonthlyActivityDoeb/' . $value . '/edit');
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
		//print_r($input);
		//exit;
		if (!empty($input["btnSave"])) {
			$input['ActiveStatus'] = 'N';
		} else {
			$input['ActiveStatus'] = 'Y';
		}

		// main
		$client = new Client();
		$res = $client->put(Env("app.RestBaseURL") . '/api/MonthlyActivityDoeb/' . $input['MonthlyActivity_id'], [
			"body" => json_encode($input)
		]);
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);

		$seq_data = 0;
		foreach ($input['MonthlyActivity_Budget_id'] as $MonthlyActivity_Budget_id) {
			if ($MonthlyActivity_Budget_id != '' && $MonthlyActivity_Budget_id != null) {

				$postData_BudgetControlDetail = [
					"month01" => str_replace(',', '', $input['month01'][$seq_data]),
					"month02" => str_replace(',', '', $input['month02'][$seq_data]),
					"month03" => str_replace(',', '', $input['month03'][$seq_data]),
					"month04" => str_replace(',', '', $input['month04'][$seq_data]),
					"month05" => str_replace(',', '', $input['month05'][$seq_data]),
					"month06" => str_replace(',', '', $input['month06'][$seq_data]),
					"month07" => str_replace(',', '', $input['month07'][$seq_data]),
					"month08" => str_replace(',', '', $input['month08'][$seq_data]),
					"month09" => str_replace(',', '', $input['month09'][$seq_data]),
					"month10" => str_replace(',', '', $input['month10'][$seq_data]),
					"month11" => str_replace(',', '', $input['month11'][$seq_data]),
					"month12" => str_replace(',', '', $input['month12'][$seq_data]),
					"ActiveStatus" => $input['ActiveStatus'],
				];

				$client->put(Env("app.RestBaseURL") . '/api/MonthlyActivityBudgetDoeb/' . $MonthlyActivity_Budget_id, [
					"body" => json_encode($postData_BudgetControlDetail)
				]);
			}
			$seq_data++;
		}

		$DraftBudgetControlDetail_id = $input['DraftBudgetControlDetail_id'];
		echo "<script type='text/javascript'>window.location='" . base_url() . "Report_01_activity_doeb/add/$DraftBudgetControlDetail_id';</script>";
		exit();
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
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/MonthlyActivityDoeb/' . $value . '/edit');
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);

		$this->pageData["data"] = $data['data'];

		return view($this->routeGroup . "/" . $this->routeGroup . "_view", $this->pageData);
	}
}
