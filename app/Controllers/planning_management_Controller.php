<?php

namespace App\Controllers;

//use App\Models\FUNCTION_REUSE\check_session;
use App\Models\planning_management;
use App\Models\FUNCTION_REUSE\dropdown_reuse;
use App\Models\FUNCTION_REUSE\function_reuse;
use Exception;


class planning_management_Controller extends BaseController
{
	protected $programCode = "planning_management";
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

		$this->model = new planning_management();
		$this->dropdown = new dropdown_reuse();
		$this->function = new function_reuse();
		$this->pageName = $this->getPageName($this->programCode);
		$this->routeGroup = $this->programCode;

		$this->pageData = [
			"routeGroup" => $this->programCode,
			"menuName" => "จัดการข้อมูลหัวข้อแผน",
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

			$status_plan = $this->function->status_plan($lstData['status_plan']);
			$final_data[] = array(
				"planning_management_id" => $lstData['planning_management_id'],
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
		$this->model->update($input['planning_management_id'], $postData);

		return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('บันทึกเรียบร้อย','success' , '');");
	}

	public function delete($value)
	{
		// iclude helper form
		helper("form");
		$this->model->delete_planning_management($value);
		/*
		foreach ($input['groupuser_id'] as $groupuser_id) {
			$this->model->delete_groupuser($groupuser_id);
		}
		*/
		return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('ลบรายการเรียบร้อย','success' , '');");
	}
}
