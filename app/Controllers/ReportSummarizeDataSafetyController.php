<?php

namespace App\Controllers;

use App\Models\ReportSummarizeDataSafety;
use App\Models\FUNCTION_REUSE\dropdown_reuse;
use Exception;

class ReportSummarizeDataSafetyController extends BaseController
{
	protected $programCode = "REPORT_SUMMARIZE_DATA_SAFETY";
	protected $model;
	protected $dropdown;
	protected $pageData;
	protected $pageName;
	protected $routeGroup;
	public function __construct()
	{
		$this->model = new ReportSummarizeDataSafety();
		$this->dropdown = new dropdown_reuse();
		$this->pageName = $this->getPageName($this->programCode);
		//$this->routeGroup = str_replace("-", "_", $this->programCode);
		$this->routeGroup = $this->programCode;

		$this->pageData = [
			"routeGroup" => $this->programCode,
			"menuName" => "รายงานสรุปสถานะการยกเลิกใช้งานอุปกรณ์ในขั้นตอนการผลิตที่เฝ้าระวัง",
			"backMenu" => $this->getBackMenu($this->programCode)
		];
	}
	public function index()
	{
		// iclude helper form
		error_reporting(0);
		helper("form");

		$this->pageData['dropdown_industrial'] = $this->dropdown->dropdown_industrial();

		// iclude helper form
		helper("form");
		$httpRequest = service('request');

		if (strtoupper($httpRequest->getMethod()) == "POST") {

			$input = $this->request->getRawInput();

			$data_search1 = $input["data_search1"];
			$data_search2 = $input["data_search2"];

			$lstData_before = $this->model->search_default($data_search1, $data_search2);
			foreach ($lstData_before as $lstData_before) {

				$count_record_boiler = $this->model->get_count_record_boiler($lstData_before['id']);
				$lstData[] = array(
					"bu_id" => $lstData_before['id'],
					"cid" => $lstData_before['cid'],
					"companyname_th" => $lstData_before['companyname_th'],
					"business_no" => $lstData_before['business_no'],
					"cid" => $lstData_before['cid'],
					"fid14n" => $lstData_before['fid14n'],
					"factorytype" => $lstData_before['factorytype'],
					"business_no" => $lstData_before['business_no'],
					"companyname_th" => $lstData_before['companyname_th'],
					"landno" => $lstData_before['landno'],
					"group_customer_id" => $lstData_before['group_customer_id'],
					"count_record_boiler" => $count_record_boiler,
				);
			}
		} else {
			$data_search1 = "";
			$data_search2 = "";
			$lstData = null;
		}

		$this->pageData["data_search1"] = $data_search1;
		$this->pageData["data_search2"] = $data_search2;


		$this->pageData["lstData"] = $lstData;
		return view($this->routeGroup . "/" . $this->routeGroup . "_search", $this->pageData);
	}

	public function edit($bu_id)
	{
		// iclude helper form
		helper("form");
		error_reporting(0);

		$show_detail_company = $this->model->get_for_show_company_in_list_detail($bu_id);

		$lstData_before = $this->model->search_data_list($bu_id);
		foreach ($lstData_before as $lstData_before) {

			$lstData[] = array(
				"id" => $lstData_before['id'],
				"bu_id" => $lstData_before['bu_id'],
				"group_customer_id" => $lstData_before['group_customer_id'],
				"doc_no" => $lstData_before['doc_no'],
				"date_for_boiler" => $lstData_before['date_for_boiler'],
				"doc_boiler_safety" => $lstData_before['doc_boiler_safety'],
				"remarks_for_boiler" => $lstData_before['remarks_for_boiler'],
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

		$show_detail_company = $this->model->get_for_show_company_in_list_detail($bu_id);

		$this->pageData["bu_id"] = $show_detail_company['bu_id'];
		$this->pageData["group_customer_id"] = $show_detail_company['group_customer_id'];
		$this->pageData["show_detail_company"] = $show_detail_company;
		$this->pageData['action_page'] = "upd";

		return view($this->routeGroup . "/" . $this->routeGroup . "_add", $this->pageData);
	}

	public function edit_detail($id)
	{
		// iclude helper form
		helper("form");
		$this->pageData['action_page'] = "upd";

		$this->pageData["data"] = $this->model->get_detail_report_boiler_summarize($id);
		$this->pageData["data_detail"] = $this->model->search_data_list_detail($this->pageData["data"]["id"]);

		$this->pageData['bu_id'] = $this->pageData["data"]["bu_id"];
		$this->pageData['count_data_grid_01'] = count($this->pageData["data_detail"]);

		$show_detail_company = $this->model->get_for_show_company_in_list_detail($this->pageData["data"]["bu_id"]);
		$this->pageData["show_detail_company"] = $show_detail_company;
		$this->pageData['group_customer_id'] = $show_detail_company["group_customer_id"];
		//print_r($this->pageData["data_ent"]);

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
		} else {
			$status_data = '1';
		}

		$postData = [
			"status_data" => $status_data,
			"bu_id" => $input['bu_id'],
			"group_customer_id" => $input['group_customer_id'],
			"doc_no" => $input['doc_no'],
			"date_for_boiler" => $input['date_for_boiler'],
			"remarks_for_boiler" => $input['remarks_for_boiler'],
			"create_by" => session()->get("UserID"),
			"create_datetime" => Date("Y-m-d H:i:s"),
			"update_by" => session()->get("UserID"),
			"update_datetime" => Date("Y-m-d H:i:s")
		];

		if ($input['rd_boiler_id'] != '' && $input['rd_boiler_id'] != null) {
			$this->model->update($input['rd_boiler_id'], $postData);
			$last_id = $input['rd_boiler_id'];
		} else {
			$this->model->insert($postData);
			$last_id = $this->model->insertID();
		}

		if ($input['doc_boiler_safety']['name'] != "") {
			$today = DATE("Y-m-d H:i:s");
			$filetmp_path = $input['doc_boiler_safety']['tmp_name'];
			$filename = $input['doc_boiler_safety']['name'];
			$gettypefile = explode(".", $filename);
			$typefile = $gettypefile[count($gettypefile) - 1];

			$filenameuse = md5($input['doc_boiler_safety']['name'] . "" . $today) . "." . $typefile;
			copy($filetmp_path, "uploads/boiler_safety/" . $filenameuse);

			$this->model->update_file_boiler_safety($last_id, $filenameuse);
		}

		$this->model->clear_detail_boiler_safety($last_id);
		for ($i = 0; $i < count($input['detail_001']); $i++) {

			if ($input['detail_001'][$i] != '' && $input['detail_001'][$i] != null) {
				$postData_detail = [
					"master_id" => $last_id,
					"bu_id" => $input['bu_id'],
					"detail_001" => $input['detail_001'][$i],
					"detail_002" => $input['detail_002'][$i],
					"detail_003" => $input['detail_003'][$i],
					"detail_004" => $input['detail_004'][$i],
					"detail_005" => $input['detail_005'][$i],
					"detail_006" => $input['detail_006'][$i],
					"detail_007" => $input['detail_007'][$i],
					"detail_008" => $input['detail_008'][$i],
					"detail_009" => $input['detail_009'][$i],
					"detail_010" => $input['detail_010'][$i],
					"detail_011" => $input['detail_011'][$i],
					"detail_012" => $input['detail_012'][$i],
					"detail_013" => $input['detail_013'][$i],
					"detail_014" => $input['detail_014'][$i],
					"detail_015" => $input['detail_015'][$i],
					"detail_016" => $input['detail_016'][$i],
					"detail_017" => $input['detail_017'][$i],
					"create_datetime" => Date("Y-m-d H:i:s"),
					"create_by" => session()->get("UserID"),
					"update_datetime" => Date("Y-m-d H:i:s"),
					"update_by" => session()->get("UserID")
				];
				//print_r($postData_detail);
				$this->model->update_detail_boiler_safety($postData_detail);
			}
		}

		return redirect()->to($this->routeGroup . "/edt/" . $input['bu_id'])->with("alertNoti", "alertPopup('บันทึกเรียบร้อย','success' , '" . $this->routeGroup . "/edt/" . $input['bu_id'] . "');");
	}

	public function delete($value)
	{
		// iclude helper form
		helper("form");
		$data_result = $this->model->get_detail_report_boiler_summarize($value);

		$this->model->delete($value);
		return redirect()->to($this->routeGroup . "/edt/" . $data_result['bu_id'])->with("alertNoti", "alertPopup('ลบรายการเรียบร้อย','success' , '" . $this->routeGroup . "/edt/" . $data_result['bu_id'] . "');");
	}
}
