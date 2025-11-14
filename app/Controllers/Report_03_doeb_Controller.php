<?php

namespace App\Controllers;

//use App\Models\FUNCTION_REUSE\check_session;

use App\Models\dropdown_reuse;
use GuzzleHttp\Client;

class Report_03_doeb_Controller extends BaseController
{
	protected $programCode = "Report_03_doeb";
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
			"menuName" => "ผลการปฏิบัติงานกองความปลอดภัยธุรกิจก๊าซปิโตรเลียมเหลว"
		];
	}
	public function index()
	{
		error_reporting(0);
		helper("form");

		$client = new Client();
		$input = $this->request->getRawInput();
		$input['GroupUserID'] = session('GroupUserID');
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/MonthlyResultActivityDoeb', [
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
		$this->pageData['action_page'] = "store";

		$this->pageData['dropdown_year_report'] = $this->dropdown->dropdown_year_report();

		$client = new Client();
		$input = $this->request->getRawInput();
		$input['GroupUserID'] = session('GroupUserID');
		$input['GroupTypeID'] = session('GroupTypeID');
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/MappingCodeMonthlyActivityResultDoeb', [
			"body" => json_encode($input)
		]);

		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);
		$this->pageData["lstData_mapping"] = $data['data'];
		//print_r($data['data']);

		return view($this->routeGroup . "/" . $this->routeGroup . "_add", $this->pageData);
	}

	public function store()
	{
		error_reporting(0);
		helper("form");

		$client = new Client();

		$input_default = null;
		$input_default['GroupUserID'] = session('GroupUserID');
		$input_default['GroupTypeID'] = session('GroupTypeID');
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/MappingCodeMonthlyActivityResultDoeb', [
			"body" => json_encode($input_default)
		]);
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);
		$lstData_mapping = $data['data'];

		$input = $this->request->getRawInput();

		$Monthly_report = explode("-", $input['Monthly_report']);
		$check_month = strlen($Monthly_report[0]);
		if ($check_month == '1') {
			$month_use = "0" . $Monthly_report[0];
		} else {
			$month_use = $Monthly_report[0];
		}

		if (!empty($input["btnSave"])) {
			$input_main['ActiveStatus'] = 'N';
		} else {
			$input_main['ActiveStatus'] = 'Y';
		}

		$input_main['GroupUserID'] = session('GroupUserID');
		$input_main['MonthResult'] = $month_use;
		$input_main['YearResult'] = $Monthly_report[1];
		$input_main['Monthly_report'] = $input['Monthly_report'];
		$input_main['Remarks'] = $input['Remarks'];

		$res_main = $client->post(Env("app.RestBaseURL") . '/api/MonthlyResultActivityDoeb', [
			"body" => json_encode($input_main)
		]);
		$data_main = $res_main->getBody()->getContents('json');
		$data_main = json_decode($data_main, true);
		$MonthlyResultActivity_Id = $data_main['data'];

		$seq_row = 1;
		foreach ($lstData_mapping as $lstData_mapping_result):

			$data_variable = $lstData_mapping_result['variable_name'];
			$data_value = $input[$seq_row . "_" . $lstData_mapping_result['variable_name']];

			$input_detail = array(
				'MonthResult' => $month_use,
				'YearResult' => $Monthly_report[1],
				'data_variable' => $data_variable,
				'data_value' => $data_value,
				'GroupUserID' => session('GroupUserID'),
				'MonthlyResultActivity_Id' => $MonthlyResultActivity_Id,
			);
			//print_r($input_detail);
			//echo "<hr />";

			$client->post(Env("app.RestBaseURL") . '/api/MonthlyResultActivityDetailDoeb', [
				"body" => json_encode($input_detail)
			]);

			$seq_row++;
		endforeach;
		//exit;
		return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('บันทึกเรียบร้อย','' , '');");
	}

	public function edit($value)
	{
		// iclude helper form
		error_reporting(0);
		helper("form");

		$client = new Client();

		$input['GroupUserID'] = session('GroupUserID');
		$input['GroupTypeID'] = session('GroupTypeID');
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/MappingCodeMonthlyActivityResultDoeb', [
			"body" => json_encode($input)
		]);

		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);
		$this->pageData["lstData_mapping"] = $data['data'];

		$this->pageData['action_page'] = "upd";

		$client = new Client();
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/MonthlyResultActivityDoeb/' . $value . '/edit');
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);
		$this->pageData["data"] = $data['data'];

		$this->pageData['dropdown_year_report'] = $this->dropdown->dropdown_year_report();

		return view($this->routeGroup . "/" . $this->routeGroup . "_add", $this->pageData);
	}

	public function update()
	{
		error_reporting(0);
		helper("form");

		$client = new Client();

		$input_default = null;
		$input_default['GroupUserID'] = session('GroupUserID');
		$input_default['GroupTypeID'] = session('GroupTypeID');
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/MappingCodeMonthlyActivityResultDoeb', [
			"body" => json_encode($input_default)
		]);
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);
		$lstData_mapping = $data['data'];

		$input = $this->request->getRawInput();
		$Monthly_report = explode("-", $input['Monthly_report']);
		$check_month = strlen($Monthly_report[0]);
		if ($check_month == '1') {
			$month_use = "0" . $Monthly_report[0];
		} else {
			$month_use = $Monthly_report[0];
		}

		if (!empty($input["btnSave"])) {
			$input_main['ActiveStatus'] = 'N';
		} else {
			$input_main['ActiveStatus'] = 'Y';
		}

		$input_main['GroupUserID'] = session('GroupUserID');
		$input_main['MonthResult'] = $month_use;
		$input_main['YearResult'] = $Monthly_report[1];
		$input_main['Monthly_report'] = $input['Monthly_report'];
		$input_main['Remarks'] = $input['Remarks'];
		$MonthlyResultActivity_Id = $input['MonthlyResultActivity_Id'];

		$client->put(Env("app.RestBaseURL") . '/api/MonthlyResultActivityDoeb/' . $MonthlyResultActivity_Id, [
			"body" => json_encode($input_main)
		]);

		$seq_row = 1;
		foreach ($lstData_mapping as $lstData_mapping_result):

			$data_variable = $lstData_mapping_result['variable_name'];
			$data_value = $input[$seq_row . "_" . $lstData_mapping_result['variable_name']];
			$MonthlyResultActivityDetail_Id = $input[$seq_row . "_MonthlyResultActivityDetail_Id"];

			$input_detail = array(
				'MonthResult' => $month_use,
				'YearResult' => $Monthly_report[1],
				'data_variable' => $data_variable,
				'data_value' => $data_value,
				'GroupUserID' => session('GroupUserID'),
				'MonthlyResultActivity_Id' => $MonthlyResultActivity_Id,
			);
			//print_r($input_detail);
			//echo "<hr />";

			$client->put(Env("app.RestBaseURL") . '/api/MonthlyResultActivityDetailDoeb/' . $MonthlyResultActivityDetail_Id, [
				"body" => json_encode($input_detail)
			]);

			$seq_row++;
		endforeach;

		return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('บันทึกเรียบร้อย','' , '');");
	}

	public function delete($id)
	{
		// iclude helper form
		helper("form");
		$client = new Client();
		$client->delete(Env("app.RestBaseURL") . '/api/MonthlyResultActivityDoeb/' . $id, [
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
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/MappingCodeMonthlyActivityResultDoeb', [
			"body" => json_encode($input)
		]);

		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);
		$this->pageData["lstData_mapping"] = $data['data'];

		$this->pageData['action_page'] = "upd";

		$client = new Client();
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/MonthlyResultActivityDoeb/' . $value . '/edit');
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);
		$this->pageData["data"] = $data['data'];

		$this->pageData['dropdown_year_report'] = $this->dropdown->dropdown_year_report();

		return view($this->routeGroup . "/" . $this->routeGroup . "_view", $this->pageData);
	}
}
