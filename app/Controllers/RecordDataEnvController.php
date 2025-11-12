<?php

namespace App\Controllers;

use App\Models\ReceiveDocument;
use App\Models\FUNCTION_REUSE\dropdown_reuse;
use Exception;

class RecordDataEnvController extends BaseController
{
	protected $programCode = "RECORD_DATA_ENV";
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
			"menuName" => "บันทึกผลมติเห็นชอบรายงาน (IEE)",
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

		$lstData = $this->model->search_for_record_env($data_search1, $data_search2);

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
		$this->pageData['dropdown_conclusion'] = $this->dropdown->dropdown_conclusion();

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
			$status_data_iee = '2';
			$conclusion_finish_datetime = Date("Y-m-d H:i:s");
		} else {
			$status_data_iee = '1';
			$conclusion_finish_datetime = null;
		}

		$postData = [
			"conclusion_data" => $input['conclusion_data'],
			"conclusion_date" => $input['conclusion_date'],
			"remarks_conclusion" => $input['remarks_conclusion'],
			"user_receive_conclusion" => session()->get("UserID"),
			"conclusion_finish_datetime" => $conclusion_finish_datetime,
			"status_data_iee" => $status_data_iee,
			"update_datetime" => Date("Y-m-d H:i:s"),
			"update_by" => session()->get("UserID")
		];
		$this->model->update($input['rd_id'], $postData);

		if ($input['conclusion_files']['name'] != "") {
			$today = DATE("Y-m-d H:i:s");
			$filetmp_path = $input['conclusion_files']['tmp_name'];
			$filename = $input['conclusion_files']['name'];
			$gettypefile = explode(".", $filename);
			$typefile = $gettypefile[count($gettypefile) - 1];

			$filenameuse = md5($input['conclusion_files']['name'] . "" . $today) . "." . $typefile;
			copy($filetmp_path, "uploads/file_iee/" . $filenameuse);

			$this->model->update_file_detail_env_iee($input['rd_id'], $filenameuse);
		}

		return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('บันทึกเรียบร้อย','success' , '');");
	}
}
