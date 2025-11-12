<?php

namespace App\Controllers;

//use App\Models\FUNCTION_REUSE\check_session;
use App\Models\dropdown_reuse;
use GuzzleHttp\Client;
use Exception;


class mark_focus_budget_plan_doeb_Controller extends BaseController
{
	protected $programCode = "mark_focus_budget_plan_doeb";
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
			"menuName" => "จัดทำข้อมูลค่าเป้าหมายและงบประมาณ"
		];
	}
	public function index()
	{
		error_reporting(0);
		helper("form");

		$client = new Client();
		$input = $this->request->getRawInput();
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/MarkFocusBudgetPlanDoeb', [
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

		$this->pageData['dropdown_masterOverAllPlanForOther'] = $this->dropdown->dropdown_masterOverAllPlanForOther();
		$this->pageData['dropdown_StrategyRelate_default'] = $this->dropdown->dropdown_StrategyRelate_default();
		$this->pageData['dropdown_StrategyTarGet_default'] = $this->dropdown->dropdown_StrategyTarGet_default();
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
			$res = $client->post(Env("app.RestBaseURL") . '/api/MarkFocusBudgetPlanDoeb', [
				"body" => json_encode($input)
			]);
			$data = $res->getBody()->getContents('json');
			$data = json_decode($data, true);
			$MarkFocusBudgetPlan_id = $data['data'];

			echo "<script type='text/javascript'>window.location='" . base_url() . "mark_focus_budget_plan_doeb/edt/$MarkFocusBudgetPlan_id';</script>";
			exit();
		} catch (Exception $e) {

			$this->pageData['action_page'] = "store";
			$this->pageData['dropdown_masterOverAllPlanForOther'] = $this->dropdown->dropdown_masterOverAllPlanForOther();
			$this->pageData['dropdown_StrategyRelate_default'] = $this->dropdown->dropdown_StrategyRelate_default();
			$this->pageData['dropdown_StrategyTarGet_default'] = $this->dropdown->dropdown_StrategyTarGet_default();
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
		$this->pageData['dropdown_masterOverAllPlanForOther'] = $this->dropdown->dropdown_masterOverAllPlanForOther();
		$this->pageData['dropdown_StrategyRelate_default'] = $this->dropdown->dropdown_StrategyRelate_default();
		$this->pageData['dropdown_StrategyTarGet_default'] = $this->dropdown->dropdown_StrategyTarGet_default();

		$client = new Client();
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/MarkFocusBudgetPlanDoeb/' . $value . '/edit');
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
		$res = $client->put(Env("app.RestBaseURL") . '/api/MarkFocusBudgetPlanDoeb/' . $input['MarkFocusBudgetPlan_id'], [
			"body" => json_encode($input)
		]);
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);

		$client->delete(Env("app.RestBaseURL") . '/api/MarkFocusBudgetPlanDetailDoeb/' . $input['MarkFocusBudgetPlan_id'], [
			"body" => json_encode($input['MarkFocusBudgetPlan_id'])
		]);
		for ($i = 0; $i < count($input['StrategyIndicatorDetail_id']); $i++) {

			if ($input['StrategyIndicatorDetail_id'][$i] != '' && $input['StrategyIndicatorDetail_id'][$i] != null && $input['MarkFocusBudgetPlan_id'] != '' && $input['MarkFocusBudgetPlan_id'] != null) {
				$postData_detail = [
					"StrategyIndicatorDetail_id" => $input['StrategyIndicatorDetail_id'][$i],
					"Year0" => $input['Year0'][$i],
					"Year1" => $input['Year1'][$i],
					"Year2" => $input['Year2'][$i],
					"Year3" => $input['Year3'][$i],
					"Year4" => $input['Year4'][$i],
					"Year5" => $input['Year5'][$i],
					"Year6" => $input['Year6'][$i],
					"Year7" => $input['Year7'][$i],
					"Year8" => $input['Year8'][$i],
					"Year9" => $input['Year9'][$i],
					"Year10" => $input['Year10'][$i],
					"Year11" => $input['Year11'][$i],
					"Year12" => $input['Year12'][$i],
					"Year13" => $input['Year13'][$i],
					"Year14" => $input['Year14'][$i],
					"Year15" => $input['Year15'][$i],
					"Year16" => $input['Year16'][$i],
					"Year17" => $input['Year17'][$i],
					"Year18" => $input['Year18'][$i],
					"Year19" => $input['Year19'][$i],
					"Year20" => $input['Year20'][$i],
					"MarkFocusBudgetPlan_id" => $input['MarkFocusBudgetPlan_id']
				];

				$client->post(Env("app.RestBaseURL") . '/api/MarkFocusBudgetPlanDetailDoeb', [
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
		$client->delete(Env("app.RestBaseURL") . '/api/MarkFocusBudgetPlanDoeb/' . $id, [
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
		$this->pageData['dropdown_masterOverAllPlanForOther'] = $this->dropdown->dropdown_masterOverAllPlanForOther();
		$this->pageData['dropdown_StrategyRelate_default'] = $this->dropdown->dropdown_StrategyRelate_default();
		$this->pageData['dropdown_StrategyTarGet_default'] = $this->dropdown->dropdown_StrategyTarGet_default();

		$client = new Client();
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/MarkFocusBudgetPlanDoeb/' . $value . '/edit');
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);
		$this->pageData["data"] = $data['data'];


		return view($this->routeGroup . "/" . $this->routeGroup . "_view", $this->pageData);
	}
}
