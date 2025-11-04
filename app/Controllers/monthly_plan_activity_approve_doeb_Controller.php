<?php

namespace App\Controllers;

//use App\Models\FUNCTION_REUSE\check_session;
use App\Models\dropdown_reuse;
use GuzzleHttp\Client;
use Exception;

class monthly_plan_activity_approve_doeb_Controller extends BaseController
{
	protected $programCode = "monthly_plan_activity_approve_doeb";
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
			"menuName" => "ตรวจสอบและพิจารณาแผนปฏิบัติงานรายเดือนประกอบการยื่นคำของบประมาณ",
		];
	}
	public function index()
	{
		error_reporting(0);
		helper("form");

		$client = new Client();
		$input = $this->request->getRawInput();
		$input['GroupUserID'] = session('GroupUserID');
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/MonthlyPlanActivityApproveDoeb', [
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

		$keys = explode(".", $value);
		$MonthlyPlanActivity_Id = $keys[0];
		$GroupUserID = $keys[1];

		$client = new Client();

		$input['MonthlyPlanActivity_Id'] = $MonthlyPlanActivity_Id;
		$input['GroupUserID'] = $GroupUserID;

		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/MappingCodeMonthlyActivityDoeb', [
			"body" => json_encode($input)
		]);

		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);
		$this->pageData["lstData_mapping"] = $data['data'];

		$this->pageData['action_page'] = "upd";

		$client = new Client();
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/MonthlyPlanActivityApproveDoeb/' . $value . '/edit');
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);

		$this->pageData["data"] = $data['data'];

		$this->pageData['dropdown_year_thai'] = $this->dropdown->dropdown_year_thai();
		$this->pageData['monththaishow'] = $this->dropdown->monththaishow();

		return view($this->routeGroup . "/" . $this->routeGroup . "_add", $this->pageData);
	}

	public function update()
	{
		//error_reporting(0);
		helper("form");

		$client = new Client();

		$input = $this->request->getRawInput();
		if (!empty($input["btnReject"])) {
			$input['ActiveStatus'] = 'N';
		} elseif (!empty($input["btnSave"])) {
			$input['ActiveStatus'] = 'Y';
			$input['HoldStatusApprove'] = 'N';
		} else {
			$input['ActiveStatus'] = 'Y';
			$input['HoldStatusApprove'] = 'Y';
		}

		$MonthlyPlanActivity_Id = $input['MonthlyPlanActivity_Id'];

		$client->put(Env("app.RestBaseURL") . '/api/MonthlyPlanActivityApproveDoeb/' . $MonthlyPlanActivity_Id, [
			"body" => json_encode($input)
		]);

		return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('บันทึกเรียบร้อย','' , '');");
	}

	public function delete($id)
	{
		// iclude helper form
		helper("form");
		$client = new Client();
		$client->delete(Env("app.RestBaseURL") . '/api/MonthlyPlanActivityApproveDoeb/' . $id, [
			"body" => json_encode($id)
		]);
		return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('ลบรายการเรียบร้อย','' , '');");
	}

	public function view($value)
	{
		// iclude helper form
		error_reporting(0);
		helper("form");

		$keys = explode(".", $value);
		$MonthlyPlanActivity_Id = $keys[0];
		$GroupUserID = $keys[1];

		$client = new Client();

		$input['MonthlyPlanActivity_Id'] = $MonthlyPlanActivity_Id;
		$input['GroupUserID'] = $GroupUserID;

		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/MappingCodeMonthlyActivityDoeb', [
			"body" => json_encode($input)
		]);

		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);
		$this->pageData["lstData_mapping"] = $data['data'];

		$this->pageData['action_page'] = "upd";

		$client = new Client();
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/MonthlyPlanActivityApproveDoeb/' . $value . '/edit');
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);

		$this->pageData["data"] = $data['data'];

		$this->pageData['dropdown_year_thai'] = $this->dropdown->dropdown_year_thai();
		$this->pageData['monththaishow'] = $this->dropdown->monththaishow();

		return view($this->routeGroup . "/" . $this->routeGroup . "_view", $this->pageData);
	}
}
