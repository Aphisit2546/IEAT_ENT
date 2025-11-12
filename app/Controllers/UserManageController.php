<?php

namespace App\Controllers;

use App\Models\UserManage;
use App\Models\FUNCTION_REUSE\dropdown_reuse;
use Exception;

class UserManageController extends BaseController
{
	protected $programCode = "USER_MANAGE";
	protected $model;
	protected $dropdown;
	protected $pageData;
	protected $pageName;
	protected $routeGroup;
	public function __construct()
	{
		$this->model = new UserManage();
		$this->dropdown = new dropdown_reuse();
		$this->pageName = $this->getPageName($this->programCode);
		//$this->routeGroup = str_replace("-", "_", $this->programCode);
		$this->routeGroup = $this->programCode;

		$this->pageData = [
			"routeGroup" => $this->programCode,
			"menuName" => "จัดการข้อมูลผู้ใช้งาน",
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

			$data_search = $input["data_search"];
		} else {
			$data_search = "";
		}

		$this->pageData["data_search"] = $data_search;

		$lstData_before = $this->model->search_for_user($data_search);
		foreach ($lstData_before as $lstData_before) {

			$groupname_now = $this->model->check_groupname_now($lstData_before['user_id']);

			$lstData[] = array(
				"name" => $lstData_before['name'],
				"surname" => $lstData_before['surname'],
				"username" => $lstData_before['username'],
				"groupname" => $lstData_before['groupname'],
				"user_id" => $lstData_before['user_id'],
				"groupname_now" => $groupname_now['groupname_th']
			);
		}

		$this->pageData["lstData"] = $lstData;

		return view($this->routeGroup . "/" . $this->routeGroup . "_search", $this->pageData);
	}

	public function edit($user_id)
	{
		// iclude helper form
		error_reporting(0);
		helper("form");

		$lstData = $this->model->get_data_name_for_usermanage($user_id);
		$groupname_now = $this->model->check_groupname_now($user_id);
		$this->pageData["lstData"] = $lstData;
		$this->pageData['groupname_now'] = $groupname_now['groupuser_id'];

		$this->pageData['action_page'] = "upd";
		$this->pageData['dropdown_groupuser'] = $this->dropdown->dropdown_groupuser();
		$this->pageData['dropdown_title_default'] = $this->dropdown->dropdown_title_default();
		$this->pageData['user_id'] = $user_id;

		return view($this->routeGroup . "/" . $this->routeGroup . "_add", $this->pageData);
	}

	public function update()
	{
		// iclude helper form
		helper("form");

		$input = $this->request->getRawInput();

		$this->model->clear_user_for_usermanage($input['user_id']);
		$postData = [
			"group_customer_id" => '1',
			"groupuser_id" => $input["groupuser_id"],
			"user_id" => $input["user_id"],
			"create_datetime" => Date("Y-m-d H:i:s"),
			"create_by" => session()->get("UserID"),
			"update_datetime" => Date("Y-m-d H:i:s"),
			"update_by" => session()->get("UserID")
		];
		$this->model->insert($postData);

		return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('บันทึกเรียบร้อย','success' , '');");
	}
}
