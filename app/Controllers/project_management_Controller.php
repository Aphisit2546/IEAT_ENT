<?php

namespace App\Controllers;

//use App\Models\FUNCTION_REUSE\check_session;
use App\Models\project_management;
use App\Models\FUNCTION_REUSE\dropdown_reuse;
use Exception;


class project_management_Controller extends BaseController
{
	protected $programCode = "project_management";
	//protected $check_session;
	protected $model;
	protected $dropdown;
	protected $pageData;
	protected $pageName;
	protected $routeGroup;
	public function __construct()
	{

		//$this->check_session = new check_session();
		//$this->check_session->check_session_user();

		$this->model = new project_management();
		$this->dropdown = new dropdown_reuse();
		$this->pageName = $this->getPageName($this->programCode);
		$this->routeGroup = $this->programCode;

		$this->pageData = [
			"routeGroup" => $this->programCode,
			"menuName" => "สร้างกลุ่มผู้ใช้งานย่อย",
			"backMenu" => $this->getBackMenu($this->programCode)
		];
	}
	public function index()
	{
		error_reporting(0);
		error_reporting(0);
		helper("form");

		$input = $this->request->getRawInput();

		if ($input["search_value"] == "search_value") {

			$data_search1 = $input["data_search1"];
			$data_search2 = $input["data_search2"];
			$data_search3 = $input["data_search3"];
		} else {
			$data_search1 = "";
			$data_search2 = "";
			$data_search3 = "";
		}

		$this->pageData["data_search1"] = $data_search1; //ชื่อแผน
		$this->pageData["data_search2"] = $data_search2; //รหัสอ้างอิง
		$this->pageData["data_search3"] = $data_search3; //สถานะ

		$this->pageData['action_page'] = "del";

		$lstData = $this->model->search_data($data_search1, $data_search2, $data_search3);
		foreach ($lstData as $lstData) {

			switch ($lstData['status_plan']) {
				case 'Y':
					$status_plan = "<font color='green'><b>ใช้งาน</b></font>";
					break;
				case 'N':
					$status_plan = "<font color='red'><b>ไม่ใช้งาน</b></font>";
					break;
				default:
					$status_plan = "-";
					break;
			}

			$final_data[] = array(
				"project_management_id" => $lstData['project_management_id'],
				"code_ref" => $lstData['code_ref'],
				"name_th" => $lstData['name_th'],
				"name_en" => $lstData['name_en'],
				"detail" => $lstData['detail'],
				"start_plan" => $lstData['start_plan'],
				"finish_plan" => $lstData['finish_plan'],
				"status_plan" => $status_plan,
				"remarks" => $lstData['remarks'],
				"create_by" => $lstData['create_by'],
				"create_datetime" => $lstData['create_datetime'],
				"update_by" => $lstData['update_by'],
				"update_datetime" => $lstData['update_datetime']
			);
		}

		$this->pageData["lstData"] = $final_data;

		return view($this->routeGroup . "/search", $this->pageData);
	}

	public function add()
	{
		error_reporting(0);
		helper("form");


		$arrplan = array(
			[
				"plan_id" => "1",
				"name_th" => "แผนที่ 1"
			],
			[
				"plan_id" => "2",
				"name_th" => "แผนที่ 2"
			],
			[
				"plan_id" => "3",
				"name_th" => "แผนที่ 3"

			]
		);

		$this->pageData['plan'] = $arrplan;

		$arryear = array(
			[
				"year" => "2564"
			],
			["year" => "2565"],
			["year" => "2566"],
			["year" => "2567"],
			["year" => "2568"],
			["year" => "2569"],
			["year" => "2570"],
			["year" => "2571"],
			["year" => "2572"],
			["year" => "2573"],
			["year" => "2574"],
			["year" => "2575"],
			["year" => "2576"],
			["year" => "2577"],
			["year" => "2578"],
			["year" => "2579"],
			["year" => "2580"],
			["year" => "2581"],
			["year" => "2582"],
			["year" => "2583"],
			["year" => "2584"],
			["year" => "2585"],
			["year" => "2586"],
			["year" => "2587"],
			["year" => "2588"],
			["year" => "2589"],
			["year" => "2590"],
			["year" => "2591"],
			["year" => "2592"],
			["year" => "2593"],
			["year" => "2594"],
			["year" => "2595"],
			["year" => "2596"],
			["year" => "2597"],
			["year" => "2598"],
			["year" => "2599"],
			["year" => "2600"],
			["year" => "2601"],
			["year" => "2602"],
			["year" => "2603"],
			["year" => "2604"],
			["year" => "2605"],
			["year" => "2606"],
			["year" => "2607"],
			["year" => "2608"],
			["year" => "2609"],
			["year" => "2610"],
			["year" => "2611"],
			["year" => "2612"],
			["year" => "2613"],
			[
				"year" => "2614"

			]
		);

		$this->pageData['year'] = $arryear;


		$arrstrategy = array(
			[
				"strategy_id" => "1",
				"name_th" => "ยุทธศาสตร์ 1"
			],
			[
				"strategy_id" => "2",
				"name_th" => "ยุทธศาสตร์ 2"
			],
			[
				"strategy_id" => "3",
				"name_th" => "ยุทธศาสตร์ 3"

			]
		);

		$this->pageData['strategy'] = $arrstrategy;


		$arrstrategy_related = array(
			[
				"strategy_related_id" => "1",
				"name_th" => "กลยุทธ์ 1"
			],
			[
				"strategy_related_id" => "2",
				"name_th" => "กลยุทธ์ 2"
			],
			[
				"strategy_related_id" => "3",
				"name_th" => "กลยุทธ์ 3"

			]
		);

		$this->pageData['strategy_related'] = $arrstrategy_related;


		$arrgoal = array(
			[
				"goal_id" => "1",
				"name_th" => "เป้าหมาย 1"
			],
			[
				"goal_id" => "2",
				"name_th" => "เป้าหมาย 2"
			],
			[
				"goal_id" => "3",
				"name_th" => "เป้าหมาย 3"

			]
		);

		$this->pageData['goal'] = $arrgoal;

		$arrindicator = array(
			[
				"indicator_id" => "1",
				"name_th" => "ตัวชี้วัด 1"
			],
			[
				"indicator_id" => "2",
				"name_th" => "ตัวชี้วัด 2"
			],
			[
				"indicator_id" => "3",
				"name_th" => "ตัวชี้วัด 3"

			]
		);

		$this->pageData['indicator'] = $arrindicator;

		$this->pageData['action_page'] = "store";
		$this->pageData["data"] = null;

		return view($this->routeGroup . "/add", $this->pageData);
	}

	public function store()
	{
		error_reporting(0);
		helper("form");
		$input = $this->request->getRawInput();

		try {
			//"create_by" => session()->get("UserID"),
			$code_ref = $this->model->get_code_ref();

			$postData = [
				"code_ref" => $code_ref,
				"name_th" => $input['name_th'],
				"name_en" => $input['name_en'],
				"detail" => $input['detail'],
				"start_plan" => $input['start_plan'],
				"finish_plan" => $input['finish_plan'],
				"status_plan" => $input['status_plan'],
				"remarks" => $input['remarks'],
				"create_by" => '1',
				"create_datetime" => Date("Y-m-d H:i:s"),
				"update_by" => '1',
				"update_datetime" => Date("Y-m-d H:i:s"),
			];
			$this->model->insert($postData);
		} catch (Exception $e) {

			$this->pageData['action_page'] = "store";
			$this->pageData["data"] = null;

			session()->setFlashData("validation", $e->getMessage());
			return view($this->routeGroup . "/add", $this->pageData);
		}

		return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('บันทึกเรียบร้อย','success' , '');");
	}

	public function edit($value)
	{
		// iclude helper form
		error_reporting(0);
		helper("form");



		$arrplan = array(
			[
				"plan_id" => "1",
				"name_th" => "แผนที่ 1"
			],
			[
				"plan_id" => "2",
				"name_th" => "แผนที่ 2"
			],
			[
				"plan_id" => "3",
				"name_th" => "แผนที่ 3"

			]
		);

		$this->pageData['plan'] = $arrplan;

		$arryear = array(
			[
				"year" => "2564"
			],
			["year" => "2565"],
			["year" => "2566"],
			["year" => "2567"],
			["year" => "2568"],
			["year" => "2569"],
			["year" => "2570"],
			["year" => "2571"],
			["year" => "2572"],
			["year" => "2573"],
			["year" => "2574"],
			["year" => "2575"],
			["year" => "2576"],
			["year" => "2577"],
			["year" => "2578"],
			["year" => "2579"],
			["year" => "2580"],
			["year" => "2581"],
			["year" => "2582"],
			["year" => "2583"],
			["year" => "2584"],
			["year" => "2585"],
			["year" => "2586"],
			["year" => "2587"],
			["year" => "2588"],
			["year" => "2589"],
			["year" => "2590"],
			["year" => "2591"],
			["year" => "2592"],
			["year" => "2593"],
			["year" => "2594"],
			["year" => "2595"],
			["year" => "2596"],
			["year" => "2597"],
			["year" => "2598"],
			["year" => "2599"],
			["year" => "2600"],
			["year" => "2601"],
			["year" => "2602"],
			["year" => "2603"],
			["year" => "2604"],
			["year" => "2605"],
			["year" => "2606"],
			["year" => "2607"],
			["year" => "2608"],
			["year" => "2609"],
			["year" => "2610"],
			["year" => "2611"],
			["year" => "2612"],
			["year" => "2613"],
			[
				"year" => "2614"

			]
		);

		$this->pageData['year'] = $arryear;


		$arrstrategy = array(
			[
				"strategy_id" => "1",
				"name_th" => "ยุทธศาสตร์ 1"
			],
			[
				"strategy_id" => "2",
				"name_th" => "ยุทธศาสตร์ 2"
			],
			[
				"strategy_id" => "3",
				"name_th" => "ยุทธศาสตร์ 3"

			]
		);

		$this->pageData['strategy'] = $arrstrategy;


		$arrstrategy_related = array(
			[
				"strategy_related_id" => "1",
				"name_th" => "กลยุทธ์ 1"
			],
			[
				"strategy_related_id" => "2",
				"name_th" => "กลยุทธ์ 2"
			],
			[
				"strategy_related_id" => "3",
				"name_th" => "กลยุทธ์ 3"

			]
		);

		$this->pageData['strategy_related'] = $arrstrategy_related;


		$arrgoal = array(
			[
				"goal_id" => "1",
				"name_th" => "เป้าหมาย 1"
			],
			[
				"goal_id" => "2",
				"name_th" => "เป้าหมาย 2"
			],
			[
				"goal_id" => "3",
				"name_th" => "เป้าหมาย 3"

			]
		);

		$this->pageData['goal'] = $arrgoal;

		$arrindicator = array(
			[
				"indicator_id" => "1",
				"name_th" => "ตัวชี้วัด 1"
			],
			[
				"indicator_id" => "2",
				"name_th" => "ตัวชี้วัด 2"
			],
			[
				"indicator_id" => "3",
				"name_th" => "ตัวชี้วัด 3"

			]
		);

		$this->pageData['indicator'] = $arrindicator;

		$this->pageData['action_page'] = "upd";
		$this->pageData["data"] = $this->model->getByID($value);
		if (empty($this->pageData["data"])) {
			session()->setFlashData("alertNoti", "alertPopup('ไม่พบข้อมูล','','error' , '');");
			return redirect()->to($this->routeGroup);
		}

		$this->pageData['dropdown_menu_level'] = $this->dropdown->dropdown_menu_level();

		return view($this->routeGroup . "/add", $this->pageData);
	}
	public function update()
	{
		error_reporting(0);
		helper("form");

		$input = $this->request->getRawInput();
		$postData = [
			"name_th" => $input['name_th'],
			"name_en" => $input['name_en'],
			"detail" => $input['detail'],
			"start_plan" => $input['start_plan'],
			"finish_plan" => $input['finish_plan'],
			"status_plan" => $input['status_plan'],
			"remarks" => $input['remarks'],
			"update_by" => '1',
			"update_datetime" => Date("Y-m-d H:i:s")
		];
		$this->model->update($input['project_management_id'], $postData);

		return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('บันทึกเรียบร้อย','success' , '');");
	}

	public function delete($value)
	{
		// iclude helper form
		helper("form");
		$this->model->delete_project_management($value);
		/*
		foreach ($input['groupuser_id'] as $groupuser_id) {
			$this->model->delete_groupuser($groupuser_id);
		}
		*/
		return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('ลบรายการเรียบร้อย','success' , '');");
	}
}
