<?php

namespace App\Controllers;

//use App\Models\FUNCTION_REUSE\check_session;
use App\Models\registration_form;
use App\Models\FUNCTION_REUSE\dropdown_reuse;
use Exception;


class registration_form_management_Controller extends BaseController
{
	protected $programCode = "registration_form_management";
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

		$this->model = new registration_form();
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


			$final_data[] = array(
				"registration_form_id" => $lstData['registration_form_id'],
				"code_ref" => $lstData['code_ref'],
				"name_th" => $lstData['name_th'],
				"name_en" => $lstData['name_en'],
				"detail" => $lstData['detail'],
				'type_code' => $lstData['type_code'],
				"start_registration_form" => $lstData['start_registration_form'],
				"start_registration_form_th" => $lstData['start_registration_form_th'],
				"finish_registration_form" => $lstData['finish_registration_form'],
				"finish_registration_form_th" => $lstData['finish_registration_form_th'],
				"status_registration_form" => $lstData['status_registration_form'],
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
		$rules = [
			"name_th" => "required",
			"name_en" => "required",
			"detail" => "required",
			"start_registration_form" => "required",
			"finish_registration_form" => "required",
			"status_registration_form" => "required",
			"remarks" => "required",
		];
		/*if (!$this->validate($rules)) {
			$this->pageData['action_page'] = "store";
			$this->pageData["data"] = null;
			session()->setFlashData("validation", "กรุณากรอกข้อมูลให้ครบถ้วน");
			return view($this->routeGroup . "/add", $this->pageData);
		} */
		try {
			//"create_by" => session()->get("UserID"),
			$code_ref = $this->model->get_code_ref();

			$postData = [
				"code_ref" => $code_ref,
				"name_th" => $input['name_th'],
				"name_en" => $input['name_en'],
				"detail" => $input['detail'],
				"type_code" => $input['type'],
				"start_registration_form" => $input['start_registration_form'],
				"finish_registration_form" => $input['finish_registration_form'],
				"remarks" => $input['remarks'],
				"create_by" => '1',
				"create_datetime" => Date("Y-m-d H:i:s"),
				"update_by" => '1',
				"update_datetime" => Date("Y-m-d H:i:s"),
			];

			if ($input['hidMainAction'] == "publish") {
				$postData['status_registration_form'] = 'PUBLISH';
			} else {
				$postData['status_registration_form'] = 'DRAFT';
			}
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

		$this->pageData['lstCoordinator'] = $this->dropdown->dropdown_staff_account();
		$this->pageData['lstNotifyPerson'] = $this->dropdown->dropdown_staff_account();

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
			"type_code" => $input['type'],
			"start_registration_form" => $input['start_registration_form'],
			"finish_registration_form" => $input['finish_registration_form'],
			"status_registration_form" => $input['status_registration_form'],
			"remarks" => $input['remarks'],
			"update_by" => '1',
			"update_datetime" => Date("Y-m-d H:i:s")
		];
		$this->model->update($input['registration_form_id'], $postData);

		return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('บันทึกเรียบร้อย','success' , '');");
	}

	public function delete($value)
	{
		// iclude helper form
		helper("form");
		$this->model->delete_registration_form_management($value);
		/*
		foreach ($input['groupuser_id'] as $groupuser_id) {
			$this->model->delete_groupuser($groupuser_id);
		}
		*/
		return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('ลบรายการเรียบร้อย','success' , '');");
	}
}
