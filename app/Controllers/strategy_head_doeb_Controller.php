<?php

namespace App\Controllers;

//use App\Models\FUNCTION_REUSE\check_session;
use App\Models\strategy_head_doeb;
use App\Models\FUNCTION_REUSE\dropdown_reuse;
use App\Models\FUNCTION_REUSE\function_reuse;
use Exception;


class strategy_head_doeb_Controller extends BaseController
{
	protected $programCode = "strategy_head_doeb";
	//protected $check_session;
	protected $model;
	protected $dropdown;
	protected $pageData;
	protected $pageName;
	protected $routeGroup;
	protected $function;
	public function __construct()
	{

		//$this->check_session = new check_session();
		//$this->check_session->check_session_user();

		$this->model = new strategy_head_doeb();
		$this->dropdown = new dropdown_reuse();
		$this->function = new function_reuse();
		$this->pageName = $this->getPageName($this->programCode);
		$this->routeGroup = $this->programCode;

		$this->pageData = [
			"routeGroup" => $this->programCode,
			"menuName" => "จัดการข้อมูลหัวข้อยุทธศาสตร์",
			"backMenu" => $this->getBackMenu($this->programCode)
		];
	}
	public function index()
	{
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

			$status_strategy = $this->function->status_strategy($lstData['status_strategy']);
			$plan_doeb_name = $this->model->get_plan_doeb_name($lstData['plan_doeb_id']);

			$final_data[] = array(
				"strategy_head_doeb_id" => $lstData['strategy_head_doeb_id'],
				"code_ref" => $lstData['code_ref'],
				"plan_doeb_name" => $plan_doeb_name,
				"plan_doeb_id" => $lstData['plan_doeb_id'],
				"start_strategy" => $lstData['start_strategy'],
				"finish_strategy" => $lstData['finish_strategy'],
				"status_strategy" => $status_strategy,
				"create_by" => $lstData['create_by'],
				"create_datetime" => $lstData['create_datetime'],
				"update_by" => $lstData['update_by'],
				"update_datetime" => $lstData['update_datetime']
			);
		}

		$this->pageData["lstData"] = $final_data;

		return view($this->routeGroup . "/" . $this->routeGroup . "_search", $this->pageData);
	}

	public function add()
	{
		error_reporting(0);
		helper("form");

		$this->pageData['dropdown_plan_doeb'] = $this->dropdown->dropdown_plan_doeb();

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
			//"create_by" => session()->get("UserID"),
			$code_ref = $this->model->get_code_ref();

			if ($input['btnSave'] != '' && $input['btnSave'] != '') {
				$status_strategy = "H";
			}
			if ($input['btnApprove'] != '' && $input['btnApprove'] != '') {
				$status_strategy = "Y";
			}

			$postData = [
				"code_ref" => $code_ref,
				"plan_doeb_id" => $input['plan_doeb_id'],
				"start_strategy" => $input['start_strategy'],
				"finish_strategy" => $input['finish_strategy'],
				"status_strategy" => $status_strategy,
				"remarks" => $input['remarks'],
				"create_by" => '1',
				"create_datetime" => Date("Y-m-d H:i:s"),
				"update_by" => '1',
				"update_datetime" => Date("Y-m-d H:i:s"),
			];
			$this->model->insert($postData);
			$strategy_head_doeb_id = $this->model->getInsertID();

			$count_strategy_head_detail_name = count($input['strategy_head_detail_name']);
			for ($a = 0; $a < $count_strategy_head_detail_name; $a++) {
				$postData_detail = [
					"strategy_head_doeb_id" => $strategy_head_doeb_id,
					"strategy_head_detail_name" => $input['strategy_head_detail_name'][$a],
					"remarks" => $input['remarks'][$a],
					"create_by" => '1',
					"create_datetime" => Date("Y-m-d H:i:s"),
					"update_by" => '1',
					"update_datetime" => Date("Y-m-d H:i:s")
				];
				if ($input['strategy_head_detail_name'][$a] != '' && $input['strategy_head_detail_name'][$a] != null) {
					$this->model->insert_strategy_head_detail($postData_detail);
				}
			}
		} catch (Exception $e) {

			$this->pageData['action_page'] = "store";
			$this->pageData["data"] = null;

			session()->setFlashData("validation", $e->getMessage());
			return view($this->routeGroup . "/" . $this->routeGroup . "_add", $this->pageData);
		}

		return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('บันทึกเรียบร้อย','success' , '');");
	}

	public function edit($value)
	{
		// iclude helper form
		error_reporting(0);
		helper("form");

		$this->pageData['dropdown_plan_doeb'] = $this->dropdown->dropdown_plan_doeb();

		$this->pageData['action_page'] = "upd";
		$this->pageData["data"] = $this->model->getByID($value);
		$this->pageData["data_strategy_head_detail_doeb"] = $this->model->getByID_detail($value);
		$this->pageData["count_data_grid"] = count($this->pageData["data_strategy_head_detail_doeb"]);

		if (empty($this->pageData["data"])) {
			session()->setFlashData("alertNoti", "alertPopup('ไม่พบข้อมูล','','error' , '');");
			return redirect()->to($this->routeGroup);
		}

		$this->pageData['dropdown_menu_level'] = $this->dropdown->dropdown_menu_level();

		return view($this->routeGroup . "/" . $this->routeGroup . "_add", $this->pageData);
	}
	public function update()
	{
		error_reporting(0);
		helper("form");

		$input = $this->request->getRawInput();

		if ($input['btnSave'] != '' && $input['btnSave'] != '') {
			$status_strategy = "H";
		}
		if ($input['btnApprove'] != '' && $input['btnApprove'] != '') {
			$status_strategy = "Y";
		}

		$postData = [
			"plan_doeb_id" => $input['plan_doeb_id'],
			"start_strategy" => $input['start_strategy'],
			"finish_strategy" => $input['finish_strategy'],
			"status_strategy" => $status_strategy,
			"update_by" => '1',
			"update_datetime" => Date("Y-m-d H:i:s")
		];
		$this->model->update($input['strategy_head_doeb_id'], $postData);

		$this->model->clear_strategy_head_detail($input['strategy_head_doeb_id']);
		$count_strategy_head_detail_name = count($input['strategy_head_detail_name']);

		for ($a = 0; $a < $count_strategy_head_detail_name; $a++) {
			$postData_detail = [
				"strategy_head_doeb_id" => $input['strategy_head_doeb_id'],
				"strategy_head_detail_name" => $input['strategy_head_detail_name'][$a],
				"remarks" => $input['remarks'][$a],
				"create_by" => '1',
				"create_datetime" => Date("Y-m-d H:i:s"),
				"update_by" => '1',
				"update_datetime" => Date("Y-m-d H:i:s"),
			];
			if ($input['strategy_head_detail_name'][$a] != '' && $input['strategy_head_detail_name'][$a] != null) {
				$this->model->insert_strategy_head_detail($postData_detail);
			}
		}
		return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('บันทึกเรียบร้อย','success' , '');");
	}

	public function delete($value)
	{
		// iclude helper form
		helper("form");
		$this->model->delete_strategy_head_doeb($value);
		/*
		foreach ($input['groupuser_id'] as $groupuser_id) {
			$this->model->delete_groupuser($groupuser_id);
		}
		*/
		return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('ลบรายการเรียบร้อย','success' , '');");
	}
}
