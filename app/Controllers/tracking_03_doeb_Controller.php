<?php

namespace App\Controllers;

//use App\Models\FUNCTION_REUSE\check_session;

use App\Models\dropdown_reuse;
use GuzzleHttp\Client;

class tracking_03_doeb_Controller extends BaseController
{
	protected $programCode = "tracking_03_doeb";
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
			"menuName" => "ติดตามงานพลังงานจังหวัด"
		];
	}
	public function index()
	{
		error_reporting(0);
		helper("form");

		$client = new Client();
		$input = $this->request->getRawInput();
		$input['GroupUserID'] = session('GroupUserID');
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/MonthlyPlanBudgetActivityProvinceTrackingDoeb', [
			"body" => json_encode($input)
		]);

		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);
		$this->pageData["lstData"] = $data['data'];

		if (date('m') == '01') {
			$month_before_search = "12";
			$year_before_search = date('Y') + 542;
		} else {
			$month_before = date('m') - 1;
			$check_month_before = strlen($month_before);
			if ($check_month_before == '1') {
				$month_before_search = "0" . $month_before;
			} else {
				$month_before_search = $month_before;
			}
			$year_before_search = date('Y') + 543;
		}

		$this->pageData["month_before_search"] = $this->dropdown->convert_date_to_wording_thai($month_before_search);
		$this->pageData["year_before_search"] = $year_before_search;

		$this->pageData["data_search1"] = $input['data_search1'];
		$this->pageData["data_search2"] = $input['data_search2'];
		$this->pageData["data_search3"] = $input['data_search3'];

		return view($this->routeGroup . "/" . $this->routeGroup . "_search", $this->pageData);
	}

	public function add($value)
	{
		error_reporting(0);
		helper("form");
		$client = new Client();
		$res = $client->put(Env("app.RestBaseURL") . '/api/MonthlyPlanBudgetActivityTrackingApproveDoeb/' . $value, [
			"body" => json_encode($value)
		]);
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);

		return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('บันทึกเรียบร้อย','' , '');");
	}

	public function edit($value)
	{
		error_reporting(0);
		helper("form");
		$client = new Client();
		$res = $client->put(Env("app.RestBaseURL") . '/api/MonthlyPlanBudgetActivityTrackingReturnDoeb/' . $value, [
			"body" => json_encode($value)
		]);
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);

		return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('บันทึกเรียบร้อย','' , '');");
	}
}
