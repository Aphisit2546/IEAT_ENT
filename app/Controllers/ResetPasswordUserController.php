<?php

namespace App\Controllers;

use App\Models\GroupUser;
use App\Models\FUNCTION_REUSE\dropdown_reuse;
use Exception;

class ResetPasswordUserController extends BaseController
{
	protected $programCode = "RESET_PASSWORD_USER";
	protected $model;
	protected $dropdown;
	protected $pageData;
	protected $pageName;
	protected $routeGroup;
	public function __construct()
	{
		$this->model = new GroupUser();
		$this->dropdown = new dropdown_reuse();
		$this->pageName = $this->getPageName($this->programCode);
		//$this->routeGroup = str_replace("-", "_", $this->programCode);
		$this->routeGroup = $this->programCode;

		$this->pageData = [
			"routeGroup" => $this->programCode,
			"menuName" => "รีเซ็ตรหัสผ่าน",
			"backMenu" => $this->getBackMenu($this->programCode)
		];
	}
	public function index()
	{
		// iclude helper form
		helper("form");

		// iclude helper form
		helper("form");
		$httpRequest = service('request');

		if (strtoupper($httpRequest->getMethod()) == "POST") {

			$input = $this->request->getRawInput();

			$data_search1 = $input["data_search1"];
		} else {
			$data_search1 = "";
		}

		$this->pageData["data_search1"] = $data_search1;

		$lstData = $this->model->search_for_user($data_search1);
		array_sort_by_multiple_keys($lstData, [
			"groupname_th" => SORT_DESC
		]);

		$this->pageData["lstData"] = $lstData;
		return view($this->routeGroup . "/" . $this->routeGroup . "_search", $this->pageData);
	}

	public function add()
	{
		// iclude helper form
		//error_reporting(0);
		helper("form");

		$this->pageData['action_page'] = "store";
		$this->pageData['dropdown_groupuser'] = $this->dropdown->dropdown_groupuser();
		$this->pageData['dropdown_title_default'] = $this->dropdown->dropdown_title_default();
		$this->pageData["data"] = null;

		return view($this->routeGroup . "/" . $this->routeGroup . "_add", $this->pageData);
	}

	public function store()
	{
		// iclude helper form
		/*
		helper("form");


		$input = $this->request->getRawInput();

		if ($input['btnSave'] != '' && $input['btnSave'] != null) {
			$status_data = '1';
			$doc_no = "-";
		} else if ($input['btnSave_next'] != '' && $input['btnSave_next'] != null) {
			$status_data = '2';
			$doc_no = "RD" . Date("Y") . "" . Date("m") . "" . Date("d") . "" . Date("H") . "" . Date("i") . "" . Date("s");
		} else {
			$status_data = '1';
			$doc_no = "-";
		}

		try {

			$postData = [
				"industrial_id" => $input["industrial_id"],
				"level_type_document" => $input["level_type_document"],
				"type_document1" => $input["type_document1"],
				"type_document2" => $input["type_document2"],
				"group_customer_id_document" => $input["group_customer_id_document"],
				"date_receive_report" => $input["date_receive_report"],
				"date_edit_report" => $input["date_edit_report"],
				"type_send_report" => $input["type_send_report"],
				"other_send_report" => $input["other_send_report"],
				"remarks" => $input["remarks"],
				"status_data" => $status_data,
				"doc_no" => $doc_no,
				"create_datetime" => Date("Y-m-d H:i:s"),
				"create_by" => session()->get("UserID"),
				"update_datetime" => Date("Y-m-d H:i:s"),
				"update_by" => session()->get("UserID")
			];
			//print_r($postData);
			$this->model->insert($postData);
		} catch (Exception $e) {

			$this->pageData['action_page'] = "store";
			$this->pageData['dropdown_industrial'] = $this->dropdown->dropdown_industrial();
			$this->pageData['dropdown_type_add_document'] = $this->dropdown->dropdown_type_add_document();
			$this->pageData['dropdown_type_env_ent'] = $this->dropdown->dropdown_type_env_ent();
			$this->pageData['dropdown_type_env_ieat'] = $this->dropdown->dropdown_type_env_ieat();
			$this->pageData['dropdown_type_send_report'] = $this->dropdown->dropdown_type_send_report();
			$this->pageData['dropdown_company_default'] = $this->dropdown->dropdown_company_default();
			$this->pageData["data"] = null;

			session()->setFlashData("validation", $e->getMessage());
			return view($this->routeGroup . "/" . $this->routeGroup . "_add", $this->pageData);
		}

		return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('บันทึกเรียบร้อย','success' , '');");
		*/
	}

	public function edit($value)
	{
		// iclude helper form
		error_reporting(0);
		helper("form");

		$this->pageData['action_page'] = "upd";
		/*
		$this->pageData["data"] = $this->model->getByID($value);
		if (empty($this->pageData["data"])) {
			session()->setFlashData("alertNoti", "alertPopup('ไม่พบข้อมูล','','error' , '');");
			return redirect()->to($this->routeGroup);
		}
		*/

		return view($this->routeGroup . "/" . $this->routeGroup . "_add", $this->pageData);
	}
	public function update()
	{
		// iclude helper form
		/*
		helper("form");

		$input = $this->request->getRawInput();

		if ($input['btnSave'] != '' && $input['btnSave'] != null) {
			$status_data = '1';
			$doc_no = "-";
		} else if ($input['btnSave_next'] != '' && $input['btnSave_next'] != null) {
			$status_data = '2';
			$doc_no = "RD" . Date("Y") . "" . Date("m") . "" . Date("d") . "" . Date("H") . "" . Date("i") . "" . Date("s");
		} else {
			$status_data = '1';
			$doc_no = "-";
		}

		$postData = [
			"industrial_id" => $input["industrial_id"],
			"level_type_document" => $input["level_type_document"],
			"type_document1" => $input["type_document1"],
			"type_document2" => $input["type_document2"],
			"group_customer_id_document" => $input["group_customer_id_document"],
			"date_receive_report" => $input["date_receive_report"],
			"date_edit_report" => $input["date_edit_report"],
			"type_send_report" => $input["type_send_report"],
			"other_send_report" => $input["other_send_report"],
			"remarks" => $input["remarks"],
			"status_data" => $status_data,
			"doc_no" => $doc_no,
			"update_datetime" => Date("Y-m-d H:i:s"),
			"update_by" => session()->get("UserID")
		];
		$this->model->update($input['rd_id'], $postData);

		return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('บันทึกเรียบร้อย','success' , '');");
		*/
	}

	public function delete($value)
	{
		// iclude helper form
		/*
		helper("form");

		$this->model->delete($value);
		return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('ลบรายการเรียบร้อย','success' , '');");
		*/
	}
}
