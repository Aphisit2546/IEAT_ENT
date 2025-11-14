<?php

namespace App\Controllers;

//use App\Models\FUNCTION_REUSE\check_session;
use App\Models\dropdown_reuse;
use GuzzleHttp\Client;
use Exception;

class focus_indicators_plan_doeb_Controller extends BaseController
{
	protected $programCode = "focus_indicators_plan_doeb";
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
			"menuName" => "สร้างรายการแผนย่อย"
		];
	}
	public function index()
	{
		error_reporting(0);
		helper("form");

		$client = new Client();
		$input = $this->request->getRawInput();
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/FocusIndicatorsPlanDoeb', [
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

		$this->pageData['dropdown_masterOverAllPlan'] = $this->dropdown->dropdown_masterOverAllPlan();
		$this->pageData['action_page'] = "store";
		$this->pageData["data"] = null;

		return view($this->routeGroup . "/" . $this->routeGroup . "_add", $this->pageData);
	}

	public function store()
	{
		error_reporting(0);
		helper("form");
		$input = $this->request->getRawInput();

		try {
			$input = $this->request->getRawInput();
			$input['ActiveStatus'] = 'N';
			// STEP1
			$client = new Client();
			$res = $client->post(Env("app.RestBaseURL") . '/api/FocusIndicatorsPlanDoeb', [
				"body" => json_encode($input)
			]);
			$data = $res->getBody()->getContents('json');
			$data = json_decode($data, true);
			$StrategyRelate_id = $data['data'];

			// STEP2
			$res_2 = $client->request('GET', Env("app.RestBaseURL") . '/api/FocusIndicatorsPlanDoeb/' . $StrategyRelate_id . '/edit');
			$data_next = $res_2->getBody()->getContents('json');
			$data_next = json_decode($data_next, true);
			$this->pageData["data"] = $data_next['data'];

			$this->pageData['action_page'] = "upd";
			$this->pageData['dropdown_masterOverAllPlan'] = $this->dropdown->dropdown_masterOverAllPlan();

			return view($this->routeGroup . "/" . $this->routeGroup . "_add", $this->pageData);
		} catch (Exception $e) {

			$this->pageData['action_page'] = "store";
			$this->pageData['dropdown_masterOverAllPlan'] = $this->dropdown->dropdown_masterOverAllPlan();
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
		$this->pageData['action_page'] = "upd";
		$this->pageData['dropdown_masterOverAllPlan'] = $this->dropdown->dropdown_masterOverAllPlan();

		$client = new Client();
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/FocusIndicatorsPlanDoeb/' . $value . '/edit');
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
		$res = $client->put(Env("app.RestBaseURL") . '/api/FocusIndicatorsPlanDoeb/' . $input['StrategyRelate_id'], [
			"body" => json_encode($input)
		]);
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);

		$client->delete(Env("app.RestBaseURL") . '/api/FocusIndicatorsPlanDetailDoeb/' . $input['StrategyRelate_id'], [
			"body" => json_encode($input['StrategyRelate_id'])
		]);
		for ($i = 0; $i < count($input['Name']); $i++) {

			if ($input['Name'][$i] != '' && $input['Name'][$i] != null && $input['StrategyRelate_id'] != '' && $input['StrategyRelate_id'] != null) {
				$postData_detail = [
					"ItemL1" => $input['ItemL1'][$i],
					"ItemL2" => $input['ItemL2'][$i],
					"ItemL3" => $input['ItemL3'][$i],
					"ItemL4" => $input['ItemL4'][$i],
					"Name" => $input['Name'][$i],
					"Description" => $input['Description'][$i],
					"StrategyRelate_id" => $input['StrategyRelate_id']
				];

				$client->post(Env("app.RestBaseURL") . '/api/FocusIndicatorsPlanDetailDoeb', [
					"body" => json_encode($postData_detail)
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
		$client->delete(Env("app.RestBaseURL") . '/api/FocusIndicatorsPlanDoeb/' . $id, [
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
		$this->pageData['dropdown_masterOverAllPlan'] = $this->dropdown->dropdown_masterOverAllPlan();

		$client = new Client();
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/FocusIndicatorsPlanDoeb/' . $value . '/edit');
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);
		$this->pageData["data"] = $data['data'];

		return view($this->routeGroup . "/" . $this->routeGroup . "_view", $this->pageData);
	}
}
