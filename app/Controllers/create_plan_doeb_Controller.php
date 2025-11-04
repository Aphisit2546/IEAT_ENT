<?php

namespace App\Controllers;

//use App\Models\FUNCTION_REUSE\check_session;

use App\Models\dropdown_reuse;
use GuzzleHttp\Client;

class create_plan_doeb_Controller extends BaseController
{
	protected $programCode = "create_plan_doeb";
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
			"menuName" => "จัดทำ / ปรับปรุงรายละเอียดแผนงาน"
		];
	}
	public function index()
	{
		error_reporting(0);
		helper("form");

		$client = new Client();
		$input = $this->request->getRawInput();
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/CreatePlanDoeb', [
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

		$this->pageData['dropdown_masterOverAllPlanForCreatePlan'] = $this->dropdown->dropdown_masterOverAllPlanForCreatePlanV2();
		$this->pageData['action_page'] = "store";
		$this->pageData["data"] = null;

		return view($this->routeGroup . "/" . $this->routeGroup . "_add", $this->pageData);
	}

	public function store()
	{
		$client = new Client();
		$input = $this->request->getRawInput();
		//print_r($input);
		//exit;
		$res = $client->post(Env("app.RestBaseURL") . '/api/CreatePlanDoeb', [
			"body" => json_encode($input)
		]);
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);
		$CreatePlan_id = $data['data'];

		echo "<script type='text/javascript'>window.location='" . base_url() . "create_plan_doeb/edt/$CreatePlan_id';</script>";
		exit();
	}

	public function edit($value)
	{
		// iclude helper form
		error_reporting(0);
		helper("form");
		$this->pageData['action_page'] = "upd";
		$this->pageData['dropdown_masterOverAllPlanForCreatePlan'] = $this->dropdown->dropdown_masterOverAllPlanForCreatePlan();

		$client = new Client();
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/CreatePlanDoeb/' . $value . '/edit');
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

		$client = new Client();
		$res = $client->put(Env("app.RestBaseURL") . '/api/CreatePlanDoeb/' . $input['CreatePlan_id'], [
			"body" => json_encode($input)
		]);
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);

		$client->delete(Env("app.RestBaseURL") . '/api/CreatePlanDetailDoeb/' . $input['CreatePlan_id'], [
			"body" => json_encode($input['CreatePlan_id'])
		]);
		for ($i = 0; $i < count($input['OverAllPlanStrategy_id']); $i++) {
			if ($input['OverAllPlanStrategy_id'][$i] != '' && $input['OverAllPlanStrategy_id'][$i] != null && $input['CreatePlan_id'] != '' && $input['CreatePlan_id'] != null) {
				$postData_CreatePlanDetail = [
					"OverAllPlanStrategy_id" => $input['OverAllPlanStrategy_id'][$i],
					"CreatePlan_id" => $input['CreatePlan_id']
				];

				$client->post(Env("app.RestBaseURL") . '/api/CreatePlanDetailDoeb', [
					"body" => json_encode($postData_CreatePlanDetail)
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
		$client->delete(Env("app.RestBaseURL") . '/api/CreatePlanDoeb/' . $id, [
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
		$this->pageData['dropdown_masterOverAllPlanForCreatePlan'] = $this->dropdown->dropdown_masterOverAllPlanForCreatePlan();

		$client = new Client();
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/CreatePlanViewDoeb/' . $value . '/edit');
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);
		$this->pageData["data"] = $data['data'];

		return view($this->routeGroup . "/" . $this->routeGroup . "_view", $this->pageData);
	}
}
