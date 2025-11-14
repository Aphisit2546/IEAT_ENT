<?php

namespace App\Controllers;

//use App\Models\FUNCTION_REUSE\check_session;
use App\Models\plan_detail_doeb;
use App\Models\FUNCTION_REUSE\dropdown_reuse;
use App\Models\FUNCTION_REUSE\function_reuse;
use Exception;


class plan_detail_doeb_Controller extends BaseController
{
	protected $programCode = "plan_detail_doeb";
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

		$this->model = new plan_detail_doeb();
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

			$status = $this->function->status_strategy($lstData['status']);

			$final_data[] = array(
				"plan_detail_doeb_id" => $lstData['plan_detail_doeb_id'],
				"code_ref" => $lstData['code_ref'],
				"plan_name_doeb" => $lstData['plan_name_doeb'],
				"origin_project" => $lstData['origin_project'],
				"vision" => $lstData['vision'],
				"mission" => $lstData['mission'],
				"object" => $lstData['object'],
				"remarks" => $lstData['remarks'],
				"status" => $status,
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

			if ($input['btnSave'] != '' && $input['btnSave'] != '') {
				$status = "H";
			}
			if ($input['btnApprove'] != '' && $input['btnApprove'] != '') {
				$status = "Y";
			}

			$postData = [
				"plan_doeb_id" => $input['plan_doeb_id'],
				"origin_project" => $input['origin_project'],
				"vision" => $input['vision'],
				"mission" => $input['mission'],
				"object" => $input['object'],
				"remarks" => $input['remarks'],
				"status" => $status,
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
			$status = "H";
		}
		if ($input['btnApprove'] != '' && $input['btnApprove'] != '') {
			$status = "Y";
		}

		$postData = [
			"plan_doeb_id" => $input['plan_doeb_id'],
			"origin_project" => $input['origin_project'],
			"vision" => $input['vision'],
			"mission" => $input['mission'],
			"object" => $input['object'],
			"remarks" => $input['remarks'],
			"status" => $status,
			"update_by" => '1',
			"update_datetime" => Date("Y-m-d H:i:s")
		];
		$this->model->update($input['plan_detail_doeb_id'], $postData);

		return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('บันทึกเรียบร้อย','success' , '');");
	}

	public function delete($value)
	{
		// iclude helper form
		helper("form");
		$this->model->delete_plan_detail_doeb($value);
		return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('ลบรายการเรียบร้อย','success' , '');");
	}
}
