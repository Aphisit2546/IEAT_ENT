<?php

namespace App\Controllers;

//use App\Models\FUNCTION_REUSE\check_session;

use App\Models\dropdown_reuse;
use GuzzleHttp\Client;

class monthly_plan_budget_other_doeb_Controller extends BaseController
{
	protected $programCode = "monthly_plan_budget_other_doeb";
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
			"menuName" => "จัดทำ/ปรับปรุงแผนการใช้งบประมาณ (ทั่วไป)"
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

	public function edit($value)
	{
		// iclude helper form
		error_reporting(0);
		helper("form");

		$this->pageData['action_page'] = "upd";

		$client = new Client();
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/MonthlyPlanBudgetOther/' . $value . '/edit');
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);

		//print_r($data['data']);
		//exit;
		$this->pageData["data"] = $data['data'];

		return view($this->routeGroup . "/" . $this->routeGroup . "_add", $this->pageData);
	}

	public function edit2($value)
	{
		// iclude helper form
		error_reporting(0);
		helper("form");

		$this->pageData['action_page'] = "upd";

		$client = new Client();
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/MonthlyPlanBudgetOther/' . $value . '/edit');
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);

		//print_r($data['data']);
		//exit;
		$this->pageData["data"] = $data['data'];

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

		$res2 = $client->delete(Env("app.RestBaseURL") . '/api/MonthlyPlanBudgetOther/' . $input['DraftBudgetControlDetail_id'], [
			"body" => json_encode($input['DraftBudgetControlDetail_id'])
		]);
		$data2 = $res2->getBody()->getContents('json');
		$data2 = json_decode($data2, true);
		$input['ActiveStatusPlanMonthVersion'] = $data2['data'];

		$res = $client->put(Env("app.RestBaseURL") . '/api/MonthlyPlanBudgetOther/' . $input['DraftBudgetControlDetail_id'], [
			"body" => json_encode($input)
		]);
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);

		$seq_data = 0;
		foreach ($input['DraftBudgetControlDetailSub_id'] as $DraftBudgetControlDetailSub_id) {
			if ($DraftBudgetControlDetailSub_id != '' && $DraftBudgetControlDetailSub_id != null && $input['DraftBudgetControlDetail_id'] != '' && $input['DraftBudgetControlDetail_id'] != null) {

				$postData_BudgetControlDetail = [
					"DraftBudgetControlDetail_id" => $input['DraftBudgetControlDetail_id'],
					"DraftBudgetControlDetailSub_id" => $DraftBudgetControlDetailSub_id,
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

					"GroupUserID" => $input['GroupUserID'],
					"StatusData" => 'Y',
					"VersionStatus" => $data2['data'],
				];

				$client->post(Env("app.RestBaseURL") . '/api/MonthlyPlanBudgetOther', [
					"body" => json_encode($postData_BudgetControlDetail)
				]);
			}
			$seq_data++;
		}

		return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('บันทึกเรียบร้อย','' , '');");
	}

	public function view($value)
	{
		// iclude helper form
		error_reporting(0);
		helper("form");

		$this->pageData['action_page'] = "upd";

		$client = new Client();
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/MonthlyPlanBudgetOther/' . $value . '/edit');
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);

		//print_r($data['data']);
		//exit;
		$this->pageData["data"] = $data['data'];

		return view($this->routeGroup . "/" . $this->routeGroup . "_view", $this->pageData);
	}
}
