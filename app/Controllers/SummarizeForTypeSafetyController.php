<?php

namespace App\Controllers;

use App\Models\SummarizeForTypeSafety;
use App\Models\FUNCTION_REUSE\dropdown_reuse;
use Exception;

class SummarizeForTypeSafetyController extends BaseController
{
	protected $programCode = "SUMMARIZE_FOR_TYPE_SAFETY";
	protected $model;
	protected $dropdown;
	protected $pageData;
	protected $pageName;
	protected $routeGroup;
	public function __construct()
	{
		$this->model = new SummarizeForTypeSafety();
		$this->dropdown = new dropdown_reuse();
		$this->pageName = $this->getPageName($this->programCode);
		//$this->routeGroup = str_replace("-", "_", $this->programCode);
		$this->routeGroup = $this->programCode;

		$this->pageData = [
			"routeGroup" => $this->programCode,
			"menuName" => "รายงานสรุปผลการตรวจสอบรายงานประเมินความเสี่ยงจาก กรอ.",
			"backMenu" => $this->getBackMenu($this->programCode)
		];
	}
	public function index()
	{
		// iclude helper form
		error_reporting(0);
		helper("form");

		$this->pageData['dropdown_industrial'] = $this->dropdown->dropdown_industrial();
		$this->pageData['dropdown_check_risk_factorytype'] = $this->dropdown->dropdown_check_risk_factorytype();

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

		$lstData_before = $this->model->search_default($data_search1);
		foreach ($lstData_before as $lstData_before) {

			$count_record_summarize = $this->model->get_count_record_summarize($lstData_before['bu_id']);

			$lstData[] = array(
				"industrial_name" => $lstData_before['industrial_name'],
				"group_customer_id" => $lstData_before['group_customer_id'],
				"industrial_id" => $lstData_before['industrial_id'],
				"bu_id" => $lstData_before['bu_id'],
				"cid" => $lstData_before['cid'],
				"fid14n" => $lstData_before['fid14n'],
				"factorytype" => $lstData_before['factorytype'],
				"business_no" => $lstData_before['business_no'],
				"companyname_th" => $lstData_before['companyname_th'],
				"landno" => $lstData_before['landno'],
				"risk_factory" => $lstData_before['risk_factory'],
				"check_risk_factory" => $lstData_before['check_risk_factory'],
				"remarks_risk" => $lstData_before['remarks_risk'],
				"count_record_summarize" => $count_record_summarize
			);
		}

		$this->pageData["lstData"] = $lstData;
		return view($this->routeGroup . "/" . $this->routeGroup . "_search", $this->pageData);
	}

	public function edit($bu_id)
	{
		// iclude helper form
		helper("form");
		error_reporting(0);

		$show_detail_company = $this->model->get_for_show_detail_company($bu_id);
		$lstData_before = $this->model->search_data_list($bu_id);
		foreach ($lstData_before as $lstData_before) {

			$lstData[] = array(
				"id" => $lstData_before['id'],
				"bu_id" => $lstData_before['bu_id'],
				"doc_no" => $lstData_before['doc_no'],
				"date_summarize" => $lstData_before['date_summarize'],
				"result_summarize" => $lstData_before['result_summarize'],
				"date_send_summarize" => $lstData_before['date_send_summarize'],
				"date_expire_summarize" => $lstData_before['date_expire_summarize'],
				"status_data" => $lstData_before['status_data']
			);
		}

		$this->pageData["bu_id"] = $bu_id;
		$this->pageData["lstData"] = $lstData;
		$this->pageData["show_detail_company"] = $show_detail_company;

		return view($this->routeGroup . "/" . $this->routeGroup . "_list_data", $this->pageData);
	}

	public function add($bu_id)
	{
		// iclude helper form
		helper("form");
		error_reporting(0);

		$show_detail_company = $this->model->get_for_show_detail_company($bu_id);

		$this->pageData["bu_id"] = $show_detail_company['bu_id'];
		$this->pageData["group_customer_id"] = $show_detail_company['group_customer_id'];
		$this->pageData["show_detail_company"] = $show_detail_company;
		$this->pageData['action_page'] = "act";

		return view($this->routeGroup . "/" . $this->routeGroup . "_add", $this->pageData);
	}

	public function store()
	{
		// iclude helper form
		error_reporting(0);
		helper("form");

		foreach ($_POST as $rules => $value) {
			$input[$rules] = $value;
		}
		foreach ($_FILES as $rules => $value) {
			$input[$rules] = $value;
		}

		if ($input['btnSave_next'] != '' && $input['btnSave_next'] != null) {
			$status_data = '2';
			$wording = "เผยแพร่เรียบร้อย";
		} else {
			$status_data = '1';
			$wording = "บันทึกเรียบร้อย";
		}

		$postData = [
			"bu_id" => $input['bu_id'],
			"group_customer_id" => $input['group_customer_id'],
			"doc_no" => $input['doc_no'],
			"date_summarize" => $input['date_summarize'],
			"result_summarize" => $input['result_summarize'],
			"condition_summarize" => $input['condition_summarize'],
			"duedate_summarize" => $input['duedate_summarize'],
			"remarks_summarize" => $input['remarks_summarize'],
			"date_send_summarize" => $input['date_send_summarize'],
			"date_expire_summarize" => $input['date_expire_summarize'],
			"status_data" => $status_data,

			"create_by" => session()->get("UserID"),
			"create_datetime" => Date("Y-m-d H:i:s"),
			"update_by" => session()->get("UserID"),
			"update_datetime" => Date("Y-m-d H:i:s")

		];
		$this->model->insert($postData);
		$last_id = $this->model->insertID();

		if ($input['document_summarize']['name'] != "") {
			$today = DATE("Y-m-d H:i:s");
			$filetmp_path = $input['document_summarize']['tmp_name'];
			$filename = $input['document_summarize']['name'];
			$gettypefile = explode(".", $filename);
			$typefile = $gettypefile[count($gettypefile) - 1];

			$filenameuse = md5($input['document_summarize']['name'] . "" . $today) . "." . $typefile;
			copy($filetmp_path, "uploads/summarize_for_type_safety/" . $filenameuse);

			$this->model->update_file_summarize_for_type_safety($last_id, $filenameuse);
		}

		return redirect()->to($this->routeGroup . "/edt/" . $input['bu_id'])->with("alertNoti", "alertPopup('" . $wording . "','success' , '" . $this->routeGroup . "/edt/" . $input['bu_id'] . "');");
	}

	public function edit_detail($summarize_id)
	{
		// iclude helper form
		error_reporting(0);
		helper("form");

		$show_detail_summarize = $this->model->get_detail_summarize($summarize_id);
		$show_detail_company = $this->model->get_for_show_detail_company($show_detail_summarize['bu_id']);

		$this->pageData['action_page'] = "upd";
		$this->pageData["bu_id"] = $show_detail_company['bu_id'];
		$this->pageData["group_customer_id"] = $show_detail_company['group_customer_id'];
		$this->pageData["data"] = $show_detail_summarize;
		$this->pageData["show_detail_company"] = $show_detail_company;

		return view($this->routeGroup . "/" . $this->routeGroup . "_add", $this->pageData);
	}

	public function update()
	{
		// iclude helper form
		error_reporting(0);
		helper("form");

		foreach ($_POST as $rules => $value) {
			$input[$rules] = $value;
		}
		foreach ($_FILES as $rules => $value) {
			$input[$rules] = $value;
		}

		if ($input['btnSave_next'] != '' && $input['btnSave_next'] != null) {
			$status_data = '2';
			$wording = "เผยแพร่เรียบร้อย";
		} else {
			$status_data = '1';
			$wording = "บันทึกเรียบร้อย";
		}

		$postData = [
			"bu_id" => $input['bu_id'],
			"group_customer_id" => $input['group_customer_id'],
			"doc_no" => $input['doc_no'],
			"date_summarize" => $input['date_summarize'],
			"result_summarize" => $input['result_summarize'],
			"condition_summarize" => $input['condition_summarize'],
			"duedate_summarize" => $input['duedate_summarize'],
			"remarks_summarize" => $input['remarks_summarize'],
			"date_send_summarize" => $input['date_send_summarize'],
			"date_expire_summarize" => $input['date_expire_summarize'],
			"status_data" => $status_data,

			"create_by" => session()->get("UserID"),
			"create_datetime" => Date("Y-m-d H:i:s"),
			"update_by" => session()->get("UserID"),
			"update_datetime" => Date("Y-m-d H:i:s")

		];

		$this->model->update($input['summarize_id'], $postData);

		if ($input['document_summarize']['name'] != "") {
			$today = DATE("Y-m-d H:i:s");
			$filetmp_path = $input['document_summarize']['tmp_name'];
			$filename = $input['document_summarize']['name'];
			$gettypefile = explode(".", $filename);
			$typefile = $gettypefile[count($gettypefile) - 1];

			$filenameuse = md5($input['document_summarize']['name'] . "" . $today) . "." . $typefile;
			copy($filetmp_path, "uploads/summarize_for_type_safety/" . $filenameuse);

			$this->model->update_file_summarize_for_type_safety($input['summarize_id'], $filenameuse);
		}

		return redirect()->to($this->routeGroup . "/edt/" . $input['bu_id'])->with("alertNoti", "alertPopup('" . $wording . "','success' , '" . $this->routeGroup . "/edt/" . $input['bu_id'] . "');");
	}

	public function delete($value)
	{
		// iclude helper form
		helper("form");
		$show_detail_summarize = $this->model->get_detail_summarize($value);

		$this->model->delete($value);
		return redirect()->to($this->routeGroup . "/edt/" . $show_detail_summarize['bu_id'])->with("alertNoti", "alertPopup('ลบรายการเรียบร้อย','success' , '" . $this->routeGroup . "/edt/" . $show_detail_summarize['bu_id'] . "');");
	}
}
