<?php

namespace App\Controllers;

use App\Models\FUNCTION_REUSE\check_session;
use App\Models\T01_005;
use App\Models\FUNCTION_REUSE\dropdown_reuse;
use Exception;


class T01_005_Controller extends BaseController
{
	protected $programCode = "T01_005";
	protected $check_session;
	protected $model;
	protected $dropdown;
	protected $pageData;
	protected $pageName;
	protected $routeGroup;
	public function __construct()
	{
		$this->check_session = new check_session();
		$this->check_session->check_session_user();

		$this->model = new T01_005();
		$this->dropdown = new dropdown_reuse();
		$this->pageName = $this->getPageName($this->programCode);
		//$this->routeGroup = str_replace("-", "_", $this->programCode);
		$this->routeGroup = $this->programCode;

		$this->pageData = [
			"routeGroup" => $this->programCode,
			"menuName" => "จัดการโปรแกรมในระบบ",
			"backMenu" => $this->getBackMenu($this->programCode)
		];
	}
	public function index()
	{
		// iclude helper form
		error_reporting(0);
		helper("form");
		$this->pageData['action_page'] = "del";

		$lstData = $this->model->search();
		foreach ($lstData as $lstData) {

			$final_data[] = array(
				'promoteprogram_id' => $lstData['promoteprogram_id'],
				'program_no' => $lstData['program_no'],
				'program_code' => $lstData['program_code'],
				'program_name' => $lstData['program_name'],
				'url_link' => $lstData['url_link'],
				'comment' => $lstData['comment'],
				'menulevel' => $lstData['menulevel'],
				'flag_check' => $lstData['flag_check']
			);
		}

		$this->pageData["lstData"] = $final_data;

		return view($this->routeGroup . "/" . $this->routeGroup . "_search", $this->pageData);
	}

	public function add()
	{
		error_reporting(0);
		helper("form");
		$this->pageData['action_page'] = "store";
		$this->pageData["data"] = null;
		$this->pageData['dropdown_menu_level'] = $this->dropdown->dropdown_menu_level();

		return view($this->routeGroup . "/" . $this->routeGroup . "_add", $this->pageData);
	}

	public function store()
	{
		// iclude helper form
		error_reporting(0);
		helper("form");
		$input = $this->request->getRawInput();

		try {

			$postData = [
				"program_no" => $input["program_no"],
				"program_code" => $input["program_code"],
				"program_name" => $input["program_name"],
				"url_link" => $input["url_link"],
				"menulevel" => $input["menulevel"],
				"comment" => $input["comment"],
				"create_datetime" => strval(STRTOTIME(Date("Y-m-d H:i:s"))),
				"create_by" => session()->get("UserID")
			];
			$this->model->insert($postData);
		} catch (Exception $e) {

			$this->pageData['action_page'] = "store";
			$this->pageData["data"] = null;
			$this->pageData['dropdown_menu_level'] = $this->dropdown->dropdown_menu_level();

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
		// iclude helper form
		/*
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
		*/
		error_reporting(0);
		helper("form");

		$input = $this->request->getRawInput();
		$postData = [
			"program_no" => $input["program_no"],
			"program_code" => $input["program_code"],
			"program_name" => $input["program_name"],
			"url_link" => $input["url_link"],
			"menulevel" => $input["menulevel"],
			"comment" => $input["comment"],
			"update_datetime" => strval(STRTOTIME(Date("Y-m-d H:i:s"))),
			"update_by" => session()->get("UserID")
		];
		$this->model->update($input['promoteprogram_id'], $postData);

		return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('บันทึกเรียบร้อย','success' , '');");
	}

	public function delete()
	{
		// iclude helper form
		helper("form");
		$input = $this->request->getRawInput();
		foreach ($input['promoteprogram_id'] as $promoteprogram_id) {
			$this->model->delete($promoteprogram_id);
		}
		return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('ลบรายการเรียบร้อย','success' , '');");
	}
}
