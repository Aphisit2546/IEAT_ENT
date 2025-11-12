<?php

namespace App\Controllers;

//use App\Models\FUNCTION_REUSE\check_session;
use App\Models\dropdown_reuse;
use GuzzleHttp\Client;
use Exception;

class monthly_plan_activity_doeb_Controller extends BaseController
{
	protected $programCode = "monthly_plan_activity_doeb";
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
			"menuName" => "จัดทำแผนปฏิบัติงานรายเดือนประกอบการยื่นคำของบประมาณ",
		];
	}
	public function index()
	{
		error_reporting(0);
		helper("form");

		$client = new Client();
		$input = $this->request->getRawInput();
		$input['GroupUserID'] = session('GroupUserID');
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/MonthlyPlanActivityDoeb', [
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

		$client = new Client();
		$input = $this->request->getRawInput();
		$input['GroupUserID'] = session('GroupUserID');
		$input['GroupTypeID'] = session('GroupTypeID');
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/MappingCodeMonthlyActivityDoeb', [
			"body" => json_encode($input)
		]);

		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);
		$this->pageData["lstData_mapping"] = $data['data'];

		$this->pageData['dropdown_year_thai'] = $this->dropdown->dropdown_year_thai();
		$this->pageData['monththaishow'] = $this->dropdown->monththaishortshow();

		if (date('m') < 10) {
			$year_default_thai = date('Y') + 543;
		} else {
			$year_default_thai = date('Y') + 544;
		}

		$this->pageData["data"] = array(
			'monthly_start' => $year_default_thai,
			'monthly_finish' => $year_default_thai
		);

		$this->pageData['action_page'] = "store";

		return view($this->routeGroup . "/" . $this->routeGroup . "_add", $this->pageData);
	}

	public function store()
	{
		error_reporting(0);
		helper("form");

		$client = new Client();

		$monththaishow = $this->dropdown->monththaishow();
		$monththaiNumshow = $this->dropdown->monththaiNumshow();

		$input_default = null;
		$input_default['GroupUserID'] = session('GroupUserID');
		$input_default['GroupTypeID'] = session('GroupTypeID');
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/MappingCodeMonthlyActivityDoeb', [
			"body" => json_encode($input_default)
		]);
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);
		$lstData_mapping = $data['data'];

		$input = $this->request->getRawInput();

		if (!empty($input["btnSave"])) {
			$input_main['ActiveStatus'] = 'N';
		} else {
			$input_main['ActiveStatus'] = 'Y';
		}

		$input_main['GroupUserID'] = session('GroupUserID');
		$input_main['FiscalYear'] = $input['FiscalYear'];

		$res_main = $client->post(Env("app.RestBaseURL") . '/api/MonthlyPlanActivityDoeb', [
			"body" => json_encode($input_main)
		]);
		$data_main = $res_main->getBody()->getContents('json');
		$data_main = json_decode($data_main, true);
		$MonthlyPlanActivity_Id = $data_main['data'];

		try {
			$seq_var = 0;
			$seq_row = 1;
			foreach ($monththaishow as $monththaishow):
				foreach ($lstData_mapping as $lstData_mapping_result):

					$data_variable = $lstData_mapping_result['variable_name'];
					$data_value = $input[$seq_row . "_" . $lstData_mapping_result['variable_name']];

					if ($monththaiNumshow[$seq_var] >= '10') {
						$YearPlan = $input['FiscalYear'] - 1;
					} else {
						$YearPlan = $input['FiscalYear'];
					}

					$input_detail = array(
						'MonthPlan' => $monththaiNumshow[$seq_var],
						'YearPlan' => $YearPlan,
						'data_variable' => $data_variable,
						'data_value' => $data_value,
						'GroupUserID' => session('GroupUserID'),
						'MonthlyPlanActivity_Id' => $MonthlyPlanActivity_Id,
					);
					//print_r($input_detail);
					//echo "<hr />";

					$client->post(Env("app.RestBaseURL") . '/api/MonthlyPlanActivityDetailDoeb', [
						"body" => json_encode($input_detail)
					]);

				endforeach;
				$seq_row++;
				$seq_var++;
			endforeach;
			return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('บันทึกเรียบร้อย','' , '');");
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

		$client = new Client();

		$input['GroupUserID'] = session('GroupUserID');
		$input['GroupTypeID'] = session('GroupTypeID');
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/MappingCodeMonthlyActivityDoeb', [
			"body" => json_encode($input)
		]);

		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);
		$this->pageData["lstData_mapping"] = $data['data'];

		$this->pageData['action_page'] = "upd";

		$client = new Client();
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/MonthlyPlanActivityDoeb/' . $value . '/edit');
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);

		$this->pageData["data"] = $data['data'];

		$this->pageData['dropdown_year_thai'] = $this->dropdown->dropdown_year_thai();
		$this->pageData['monththaishow'] = $this->dropdown->monththaishortshow();

		return view($this->routeGroup . "/" . $this->routeGroup . "_add", $this->pageData);
	}

	public function update()
	{
		error_reporting(0);
		helper("form");

		$client = new Client();

		$monththaishow = $this->dropdown->monththaishow();
		$monththaiNumshow = $this->dropdown->monththaiNumshow();

		$input_default = null;
		$input_default['GroupUserID'] = session('GroupUserID');
		$input_default['GroupTypeID'] = session('GroupTypeID');
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/MappingCodeMonthlyActivityDoeb', [
			"body" => json_encode($input_default)
		]);
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);
		$lstData_mapping = $data['data'];

		$input = $this->request->getRawInput();
		if (!empty($input["btnSave"])) {
			$input_main['ActiveStatus'] = 'N';
		} else {
			$input_main['ActiveStatus'] = 'Y';
		}

		$MonthlyPlanActivity_Id = $input['MonthlyPlanActivity_Id'];
		$input_main['GroupUserID'] = session('GroupUserID');
		$input_main['FiscalYear'] = $input['FiscalYear'];
		$input_main['Remarks'] = $input['Remarks'];

		$client->put(Env("app.RestBaseURL") . '/api/MonthlyPlanActivityDoeb/' . $MonthlyPlanActivity_Id, [
			"body" => json_encode($input_main)
		]);

		try {
			/*
			$seq_row_detail = 1;
			$seq_var = 0;
			$seq_row = 1;
			foreach ($monththaishow as $monththaishow):
				foreach ($lstData_mapping as $lstData_mapping_result):

					$data_variable = $lstData_mapping_result['variable_name'];
					$data_value = $input[$seq_row . "_" . $lstData_mapping_result['variable_name']];
					$MonthlyPlanActivityDetail_Id = $input[$seq_row . "_MonthlyPlanActivityDetail_Id"];

					if ($monththaiNumshow[$seq_var] >= '10') {
						$YearPlan = $input['FiscalYear'] - 1;
					} else {
						$YearPlan = $input['FiscalYear'];
					}

					$input_detail = array(
						'MonthPlan' => $monththaiNumshow[$seq_var],
						'YearPlan' => $YearPlan,
						'data_variable' => $data_variable,
						'data_value' => $data_value,
						'GroupUserID' => session('GroupUserID'),
						'MonthlyPlanActivity_Id' => $MonthlyPlanActivity_Id,
						'MonthlyPlanActivityDetail_Id' => $MonthlyPlanActivityDetail_Id,
					);
					print_r($input_detail);
					echo "<hr />";
					
					$client->put(Env("app.RestBaseURL") . '/api/MonthlyPlanActivityDetailDoeb/' . $MonthlyPlanActivityDetail_Id, [
						"body" => json_encode($input_detail)
					]);
					
					$seq_row_detail++;
				endforeach;
				$seq_row++;
				$seq_var++;
			endforeach;
			exit;
			*/

			$seq_var_id = 1;
			foreach ($lstData_mapping as $lstData_mapping_result):
				$seq_var = 0;
				for ($seq_row = 1; $seq_row <= 12; $seq_row++):

					$data_variable = $lstData_mapping_result['variable_name'];
					$data_value = $input[$seq_row . "_" . $lstData_mapping_result['variable_name']];
					$MonthlyPlanActivityDetail_Id = $input[$seq_var_id . "_MonthlyPlanActivityDetail_Id"];
					if ($monththaiNumshow[$seq_var] >= '10') {
						$YearPlan = $input['FiscalYear'] - 1;
					} else {
						$YearPlan = $input['FiscalYear'];
					}

					$input_detail = array(
						'MonthPlan' => $monththaiNumshow[$seq_var],
						'YearPlan' => $YearPlan,
						'data_variable' => $data_variable,
						'data_value' => $data_value,
						'GroupUserID' => session('GroupUserID'),
						'MonthlyPlanActivity_Id' => $MonthlyPlanActivity_Id,
						'MonthlyPlanActivityDetail_Id' => $MonthlyPlanActivityDetail_Id,
					);
					//print_r($input_detail);
					//echo "<hr />";


					$client->put(Env("app.RestBaseURL") . '/api/MonthlyPlanActivityDetailDoeb/' . $MonthlyPlanActivityDetail_Id, [
						"body" => json_encode($input_detail)
					]);

					$seq_var_id++;
					$seq_var++;
				endfor;

			endforeach;

			//exit;
			return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('บันทึกเรียบร้อย','' , '');");
		} catch (Exception $e) {

			$this->pageData['action_page'] = "store";
			$this->pageData["data"] = null;

			session()->setFlashData("validation", $e->getMessage());
			return view($this->routeGroup . "/" . $this->routeGroup . "_add", $this->pageData);
		}
	}

	public function delete($id)
	{
		// iclude helper form
		helper("form");
		$client = new Client();
		$client->delete(Env("app.RestBaseURL") . '/api/MonthlyPlanActivityDoeb/' . $id, [
			"body" => json_encode($id)
		]);
		return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('ลบรายการเรียบร้อย','' , '');");
	}

	public function view($value)
	{
		// iclude helper form
		error_reporting(0);
		helper("form");

		$client = new Client();

		$input['GroupUserID'] = session('GroupUserID');
		$input['GroupTypeID'] = session('GroupTypeID');
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/MappingCodeMonthlyActivityDoeb', [
			"body" => json_encode($input)
		]);

		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);
		$this->pageData["lstData_mapping"] = $data['data'];

		$this->pageData['action_page'] = "upd";

		$client = new Client();
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/MonthlyPlanActivityDoeb/' . $value . '/edit');
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);

		$this->pageData["data"] = $data['data'];

		$this->pageData['dropdown_year_thai'] = $this->dropdown->dropdown_year_thai();
		$this->pageData['monththaishow'] = $this->dropdown->monththaishortshow();

		return view($this->routeGroup . "/" . $this->routeGroup . "_view", $this->pageData);
	}
}
