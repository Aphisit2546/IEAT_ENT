<?php

namespace App\Controllers;

//use App\Models\FUNCTION_REUSE\check_session;

use App\Models\dropdown_reuse;
use GuzzleHttp\Client;

class monthly_plan_budget_project_approve_doeb_Controller extends BaseController
{
	protected $programCode = "monthly_plan_budget_project_approve_doeb";
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
			"menuName" => "ตรวจสอบแผนการใช้งบประมาณ(โครงการ)"
		];
	}
	public function index()
	{
		error_reporting(0);
		helper("form");

		$client = new Client();
		$input = $this->request->getRawInput();

		//if ($input['search_value'] == 'search_value') {
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/DataBudgetControlForMonthlyProjectApproveDoeb', [
			"body" => json_encode($input)
		]);

		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);
		$this->pageData["lstData"] = $data['data'];
		$this->pageData['dropdown_masterOverAllPlan'] = $this->dropdown->dropdown_masterOverAllBudgetOneYearV2();
		$this->pageData['dropdown_AnnualTargetValue_Year'] = $this->dropdown->dropdown_AnnualTargetValue_Year_forfiveyear($input['data_search2']);
		//} else {
		//$this->pageData["lstData"] = null;
		//$this->pageData['dropdown_masterOverAllPlan'] = $this->dropdown->dropdown_masterOverAllBudgetOneYear();
		//$this->pageData['dropdown_AnnualTargetValue_Year'] = $this->dropdown->dropdown_AnnualTargetValue_Year();
		//}

		$this->pageData["data_search1"] = $input['data_search1'];
		$this->pageData["data_search2"] = $input['data_search2'];
		$this->pageData["data_search3"] = $input['data_search3'];
		$this->pageData["data_search4"] = $input['data_search4'];

		return view($this->routeGroup . "/" . $this->routeGroup . "_search", $this->pageData);
	}

	public function edit($id)
	{
		error_reporting(0);
		helper("form");
		$client = new Client();

		$input = $this->request->getRawInput();
		$input['GroupUserID'] = session('GroupUserID');
		$input['FlagApprove'] = "Y";

		$res = $client->put(Env("app.RestBaseURL") . '/api/MonthlyPlanBudgetProjectForApproveDoeb/' . $id, [
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
		$client = new Client();

		$input = $this->request->getRawInput();
		$input['GroupUserID'] = session('GroupUserID');
		$input['FlagApprove'] = "N";

		$res = $client->put(Env("app.RestBaseURL") . '/api/MonthlyPlanBudgetProjectForApproveDoeb/' . $id, [
			"body" => json_encode($input)
		]);
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);

		return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('ลบรายการเรียบร้อย','' , '');");
	}

	public function view($value)
	{
		// iclude helper form
		error_reporting(0);
		helper("form");

		$client = new Client();
		$input = $this->request->getRawInput();
		$input['DraftBudgetControl_id'] = $value;
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/MonthlyPlanBudgetProjectForApproveDoeb', [
			"body" => json_encode($input)
		]);

		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);
		$this->pageData["lstData"] = $data['data'];

		$this->pageData["data_search1"] = $input['data_search1'];
		$this->pageData["data_search2"] = $input['data_search2'];
		$this->pageData["data_search3"] = $input['data_search3'];


		return view($this->routeGroup . "/" . $this->routeGroup . "_view", $this->pageData);
	}
}
