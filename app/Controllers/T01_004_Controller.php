<?php

namespace App\Controllers;

use App\Models\FUNCTION_REUSE\check_session;
use App\Models\T01_004;
use App\Models\FUNCTION_REUSE\dropdown_reuse;
use Exception;


class T01_004_Controller extends BaseController
{
	protected $programCode = "T01_004";
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

		$this->model = new T01_004();
		$this->dropdown = new dropdown_reuse();
		$this->pageName = $this->getPageName($this->programCode);
		//$this->routeGroup = str_replace("-", "_", $this->programCode);
		$this->routeGroup = $this->programCode;

		$this->pageData = [
			"routeGroup" => $this->programCode,
			"menuName" => "กำหนดสิทธิ์กลุ่มผู้ใช้งาน",
			"backMenu" => $this->getBackMenu($this->programCode)
		];
	}
	public function index()
	{
		error_reporting(0);
		helper("form");
		$this->pageData['action_page'] = "del";

		$lstData = $this->model->search();
		foreach ($lstData as $lstData) {

			$final_data[] = array(
				'groupuser_id' => $lstData['groupuser_id'],
				'groupcode' => $lstData['groupcode'],
				'groupname' => $lstData['groupname'],
				'groupdescription' => $lstData['groupdescription'],
				'flag_status' => $lstData['flag_status'],
				'comment' => $lstData['comment']
			);
		}
		$this->pageData["lstData"] = $final_data;

		return view($this->routeGroup . "/" . $this->routeGroup . "_search", $this->pageData);
	}

	public function edit($groupuser_id)
	{
		// iclude helper form
		error_reporting(0);
		helper("form");

		$this->pageData['groupuser_id'] = $groupuser_id;
		$this->pageData["list_program"] = $this->model->get_data_list_program();
		$data_groupuseraccressprogram = $this->model->get_data_checked_program($groupuser_id);
		$this->pageData["data_groupuser"] = $this->model->get_data_groupuser_for_groupuser_accress_program($groupuser_id);

		if (empty($data_groupuseraccressprogram)) {
			$program_id_checked[] = "";
		} else {
			foreach ($data_groupuseraccressprogram as $value_checked) {
				$program_id_checked[] = $value_checked['program_id'];
			}
		}
		$this->pageData["program_id_checked"] = $program_id_checked;

		$this->pageData['action_page'] = "upd";
		$this->pageData["list_program"] = $this->model->get_data_list_program();
		if (empty($this->pageData["list_program"])) {
			session()->setFlashData("alertNoti", "alertPopup('ไม่พบข้อมูล','','error' , '');");
			return redirect()->to($this->routeGroup);
		}

		return view($this->routeGroup . "/" . $this->routeGroup . "_add", $this->pageData);
	}
	public function update()
	{
		error_reporting(0);
		helper("form");
		$input = $this->request->getRawInput();

		$this->model->delete_data($input['groupuser_id']);

		foreach ($input['promoteprogram_id'] as $promoteprogram_id):
			$postData = array(
				"program_id" => $promoteprogram_id,
				"groupuser_id" => $input['groupuser_id'],
				"create_by" => session()->get("UserID"),
				"create_datetime" => strval(STRTOTIME(Date("Y-m-d H:i:s"))),
				"update_by" => session()->get("UserID"),
				"update_datetime" => strval(STRTOTIME(Date("Y-m-d H:i:s"))),
				"group_customer_id" => session()->get("group_customer_id")
			);
			//print_r($postData);
			$this->model->insert($postData);
		endforeach;
		//exit;
		return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('บันทึกเรียบร้อย','success' , '');");
	}
}
