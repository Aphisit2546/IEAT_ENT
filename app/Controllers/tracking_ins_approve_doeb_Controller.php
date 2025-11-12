<?php

namespace App\Controllers;

//use App\Models\FUNCTION_REUSE\check_session;

use App\Models\dropdown_reuse;
use GuzzleHttp\Client;

class tracking_ins_approve_doeb_Controller extends BaseController
{
	protected $programCode = "tracking_ins_approve_doeb";
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
			"menuName" => "ตรวจสอบและพิจารณาเผยแพร่ผลการติดตามประเมินผลประจำเดือน"
		];
	}
	public function index()
	{
		error_reporting(0);
		helper("form");

		$this->pageData['action_page'] = "upd";

		$client = new Client();
		$input = $this->request->getRawInput();

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

		$this->pageData["month_tracking"] = $month_before_search;
		$this->pageData["year_tracking"] = $year_before_search;

		// โครงการ
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/MonthlyPlanBudgetProjectTrackingDoeb', [
			"body" => json_encode($input)
		]);
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);
		$this->pageData["lstData01"] = $data['data'];

		// กิจกรรมกองภายใน
		$res2 = $client->request('GET', Env("app.RestBaseURL") . '/api/MonthlyPlanBudgetActivityTrackingDoeb', [
			"body" => json_encode($input)
		]);
		$data2 = $res2->getBody()->getContents('json');
		$data2 = json_decode($data2, true);
		$this->pageData["lstData02"] = $data2['data'];

		// พลังงานจังหวัด
		$res3 = $client->request('GET', Env("app.RestBaseURL") . '/api/MonthlyPlanBudgetActivityProvinceTrackingDoeb', [
			"body" => json_encode($input)
		]);
		$data3 = $res3->getBody()->getContents('json');
		$data3 = json_decode($data3, true);
		$this->pageData["lstData03"] = $data3['data'];

		// check ข้อมูลว่าบันทึกลงรายเดือนยัง
		$input_month['month_tracking'] = $month_before_search;
		$input_month['year_tracking'] = $year_before_search;
		$res_tracking = $client->request('GET', Env("app.RestBaseURL") . '/api/CheckTrackingMonthlyActivityDoeb', [
			"body" => json_encode($input_month)
		]);
		$data_tracking = $res_tracking->getBody()->getContents('json');
		$data_tracking = json_decode($data_tracking, true);
		$TrackingMonthlyActivity_id = $data_tracking['data']['TrackingMonthlyActivity_id'];
		// ถ้ามีการเพิ่มติดตามรายเดือนแล้ว
		if (!empty($TrackingMonthlyActivity_id)) {
			//
		} else {
			//
		}

		return view($this->routeGroup . "/" . $this->routeGroup . "_search", $this->pageData);
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

		$client = new Client();
		$res = $client->put(Env("app.RestBaseURL") . '/api/trackingMonthlyActivityDoeb/' . $input['TrackingMonthlyActivity_id'], [
			"body" => json_encode($input)
		]);
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);

		$client->delete(Env("app.RestBaseURL") . '/api/CreateBudgetControlDetailDoeb/' . $input['CreateBudgetControl_id'], [
			"body" => json_encode($input['CreateBudgetControl_id'])
		]);

		for ($i = 0; $i < count($input['DataBudgetControl_id']); $i++) {
			if ($input['DataBudgetControl_id'][$i] != '' && $input['DataBudgetControl_id'][$i] != null && $input['CreateBudgetControl_id'] != '' && $input['CreateBudgetControl_id'] != null) {
				$postData_CreateBudgetControlDetail = [
					"DataBudgetControl_id" => $input['DataBudgetControl_id'][$i],
					"CreateBudgetControl_id" => $input['CreateBudgetControl_id']
				];

				$client->post(Env("app.RestBaseURL") . '/api/CreateBudgetControlDetailDoeb', [
					"body" => json_encode($postData_CreateBudgetControlDetail)
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
		$this->pageData['dropdown_masterOverAllPlanForCreateBudgetControl'] = $this->dropdown->dropdown_masterOverAllBudgetOneYear();

		$client = new Client();
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/CreateBudgetControlViewDoeb/' . $value . '/edit');
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);
		$this->pageData["data"] = $data['data'];

		return view($this->routeGroup . "/" . $this->routeGroup . "_view", $this->pageData);
	}
}
