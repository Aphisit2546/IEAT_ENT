<?php

namespace App\Controllers;

use App\Models\ReceiveDocument;
use App\Models\FUNCTION_REUSE\dropdown_reuse;
use Exception;

class ImportDataEnvController extends BaseController
{
	protected $programCode = "IMPORT_DATA_ENV";
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
			"menuName" => "นำเข้าข้อมูล",
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

		$lstData = $this->model->search_for_receive_assign($data_search1, $data_search2);
		foreach ($lstData as $lstData) {

			$industrial_name_th = $this->model->search_industrial_for_add_document($lstData['industrial_id']);
			$final_data[] = array(
				'doc_no' => $lstData['doc_no'],
				'industrial_name_th' => $industrial_name_th,
				'ltd' => $lstData['ltd'],
				'level_type_document' => $lstData['level_type_document'],
				'td1' => $lstData['td1'],
				'td2' => $lstData['td2'],
				'date_receive_report' => $lstData['date_receive_report'],
				'status_data' => $lstData['status_data'],
				'id' => $lstData['id']
			);
		}
		/*
		array_sort_by_multiple_keys($lstData, [
			"date_receive_report" => SORT_DESC
		]);
		
		array_sort_by_multiple_keys($lstData, [
			"date_receive_report" => SORT_ASC,
			'ID' => SORT_DESC,
		]);
		*/
		$this->pageData["lstData"] = $final_data;
		return view($this->routeGroup . "/" . $this->routeGroup . "_search", $this->pageData);
	}

	public function edit($value)
	{
		// iclude helper form
		error_reporting(0);
		helper("form");

		$this->pageData["data"] = $this->model->getByID($value);
		$this->pageData["data_detail"] = $this->model->getByID_detail($value);
		if (empty($this->pageData["data"])) {
			session()->setFlashData("alertNoti", "alertPopup('ไม่พบข้อมูล','','error' , '');");
			return redirect()->to($this->routeGroup);
		}

		if ($this->pageData["data"]['status_data'] == '3') {
			$postData = [
				"status_data" => "4",
				"user_receive" => session()->get("UserID"),
				"user_receive_start_datetime" => Date("Y-m-d H:i:s"),
				"update_datetime" => Date("Y-m-d H:i:s"),
				"update_by" => session()->get("UserID")
			];
			$this->model->update($value, $postData);
		}

		$this->pageData['count_data_grid_01'] = count($this->pageData["data_detail"]);
		$this->pageData['action_page'] = "upd";
		$this->pageData['dropdown_industrial'] = $this->dropdown->dropdown_industrial();
		$this->pageData['dropdown_type_add_document'] = $this->dropdown->dropdown_type_add_document();
		$this->pageData['dropdown_type_env_ent'] = $this->dropdown->dropdown_type_env_ent();
		$this->pageData['dropdown_type_env_ieat'] = $this->dropdown->dropdown_type_env_ieat();
		$this->pageData['dropdown_type_send_report'] = $this->dropdown->dropdown_type_send_report();
		$this->pageData['dropdown_company_default'] = $this->dropdown->dropdown_company_for_select($this->pageData["data"]["industrial_id"]);

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
			$status_data = '5';
			$user_receive_finish_datetime = Date("Y-m-d H:i:s");
		} else {
			$status_data = '4';
			$user_receive_finish_datetime = null;
		}

		$postData = [
			"status_data" => $status_data,
			"user_receive_finish_datetime" => $user_receive_finish_datetime,
			"name_create_project" => $input['name_create_project'],
			"doc_number_project" => $input['doc_number_project'],
			"doc_number_project_ref" => $input['doc_number_project_ref'],
			"date_approve_project" => $input['date_approve_project'],
			"book_number_approve" => $input['book_number_approve'],
			"date_edit_project" => $input['date_edit_project'],
			"update_datetime" => Date("Y-m-d H:i:s"),
			"update_by" => session()->get("UserID")
		];
		$this->model->update($input['rd_id'], $postData);

		$this->model->clear_detail_env($input['rd_id']);
		for ($i = 0; $i < count($input['detail_001']); $i++) {

			if ($input['detail_001'][$i] != '' && $input['detail_001'][$i] != null) {
				$postData_detail = [
					"receive_document_id" => $input['rd_id'],
					"detail_001" => $input['detail_001'][$i],
					"detail_002" => $input['detail_002'][$i],
					"detail_003" => $input['detail_003'][$i],
					"detail_004" => $input['detail_004_old'][$i],
					"detail_005" => $input['detail_005'][$i],
					"create_datetime" => Date("Y-m-d H:i:s"),
					"create_by" => session()->get("UserID"),
					"update_datetime" => Date("Y-m-d H:i:s"),
					"update_by" => session()->get("UserID")
				];

				$last_id_detail = $this->model->update_detail_env($postData_detail);
			}

			//*** check browser file
			if ($input['detail_004_old'][$i] != $input['detail_004']['name'][$i]) {
				if ($input['detail_004']['name'][$i] != '') {
					$check_old_file = $this->model->check_update_file_detail_env($last_id_detail, $input['detail_004']['name'][$i]);

					if (empty($check_old_file)) {
						$today = DATE("Y-m-d H:i:s");
						$filetmp_path = $input['detail_004']['tmp_name'][$i];
						$filename = $input['detail_004']['name'][$i];
						$gettypefile = explode(".", $filename);
						$typefile = $gettypefile[count($gettypefile) - 1];

						$filenameuse = md5($input['detail_004']['name'][$i] . "" . $today) . "." . $typefile;
						copy($filetmp_path, "uploads/import_data_env/" . $filenameuse);

						$this->model->update_file_detail_env($last_id_detail, $filenameuse);
					}
				}
			}
		}

		return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('บันทึกเรียบร้อย','success' , '');");
	}

	public function delete($value)
	{
		// iclude helper form
		helper("form");

		//$this->model->delete($value);
		return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('ลบรายการเรียบร้อย','success' , '');");
	}
}
