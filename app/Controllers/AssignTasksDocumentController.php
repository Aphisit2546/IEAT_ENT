<?php

namespace App\Controllers;

use App\Models\ReceiveDocument;
use App\Models\FUNCTION_REUSE\dropdown_reuse;
use Exception;

class AssignTasksDocumentController extends BaseController
{
	protected $programCode = "ASSIGN_TASKS_DOCUMENT";
	protected $model;
	protected $dropdown;
	protected $pageData;
	protected $pageName;
	protected $routeGroup;
	public function __construct()
	{
		$this->model = new ReceiveDocument();
		$this->dropdown = new dropdown_reuse();
		$this->pageName = $this->getPageName($this->programCode);
		//$this->routeGroup = str_replace("-", "_", $this->programCode);
		$this->routeGroup = $this->programCode;

		$this->pageData = [
			"routeGroup" => $this->programCode,
			"menuName" => "มอบหมายงาน",
			"backMenu" => $this->getBackMenu($this->programCode)
		];
	}
	public function index()
	{
		// iclude helper form
		error_reporting(0);
		helper("form");

		$this->pageData['dropdown_industrial'] = $this->dropdown->dropdown_industrial_for_search();

		// iclude helper form
		helper("form");
		$httpRequest = service('request');

		if (strtoupper($httpRequest->getMethod()) == "POST") {

			$input = $this->request->getRawInput();

			$data_search1 = $input["data_search1"];
			$data_search2 = $input["data_search2"];
		} else {
			$data_search1 = "";
			$data_search2 = "";
		}

		$this->pageData["data_search1"] = $data_search1;
		$this->pageData["data_search2"] = $data_search2;

		$lstData = null;
		$lstData_before = $this->model->search_for_assign($data_search1, $data_search2);
		foreach ($lstData_before as $lstData_before) {

			$user_assign = $this->model->get_data_user_epp($lstData_before['user_assign']);
			$industrial_name_th = $this->model->search_industrial_for_add_document($lstData_before['industrial_id']);

			$lstData[] = array(
				"id" => $lstData_before['id'],
				"doc_no" => $lstData_before['doc_no'],
				"industrial_name_th" => $industrial_name_th,
				"ltd" => $lstData_before['ltd'],
				"level_type_document" => $lstData_before['level_type_document'],
				"td1" => $lstData_before['td1'],
				"td2" => $lstData_before['td2'],
				"date_receive_report" => $lstData_before['date_receive_report'],
				"status_data" => $lstData_before['status_data'],
				"user_assign" => $user_assign
			);
		}


		/*
		array_sort_by_multiple_keys($lstData, [
			"date_receive_report" => SORT_ASC,
			'ID' => SORT_DESC,
		]);
		*/
		$this->pageData["lstData"] = $lstData;
		return view($this->routeGroup . "/" . $this->routeGroup . "_search", $this->pageData);
	}

	public function edit($value)
	{
		// iclude helper form
		helper("form");

		$this->pageData["data"] = $this->model->getByID($value);
		if (empty($this->pageData["data"])) {
			session()->setFlashData("alertNoti", "alertPopup('ไม่พบข้อมูล','','error' , '');");
			return redirect()->to($this->routeGroup);
		}

		$this->pageData['action_page'] = "upd";
		$this->pageData['dropdown_industrial'] = $this->dropdown->dropdown_industrial();
		$this->pageData['dropdown_type_add_document'] = $this->dropdown->dropdown_type_add_document();
		$this->pageData['dropdown_type_env_ent'] = $this->dropdown->dropdown_type_env_ent();
		$this->pageData['dropdown_type_env_ieat'] = $this->dropdown->dropdown_type_env_ieat();
		$this->pageData['dropdown_type_send_report'] = $this->dropdown->dropdown_type_send_report();
		$this->pageData['dropdown_company_default'] = $this->dropdown->dropdown_company_for_select($this->pageData["data"]["industrial_id"]);
		$this->pageData['dropdown_officer_ieat'] = $this->dropdown->dropdown_officer_ieat();

		return view($this->routeGroup . "/" . $this->routeGroup . "_add", $this->pageData);
	}
	public function update()
	{
		// iclude helper form
		error_reporting(0);
		helper("form");

		$input = $this->request->getRawInput();

		$postData = [
			"status_data" => "3",
			"user_assign" => $input["user_assign"],
			"date_assign" => Date("Y-m-d H:i:s"),
			"update_datetime" => Date("Y-m-d H:i:s"),
			"update_by" => session()->get("UserID")
		];
		$this->model->update($input['rd_id'], $postData);

		return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('บันทึกเรียบร้อย','success' , '');");
	}
}
