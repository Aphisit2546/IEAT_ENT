<?php

namespace App\Controllers;

use App\Models\FUNCTION_REUSE\check_session;
use App\Models\T01_003;
use App\Models\FUNCTION_REUSE\dropdown_reuse;
use Exception;


class T01_003_Controller extends BaseController
{
	protected $programCode = "T01_003";
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

		$this->model = new T01_003();
		$this->dropdown = new dropdown_reuse();
		$this->pageName = $this->getPageName($this->programCode);
		//$this->routeGroup = str_replace("-", "_", $this->programCode);
		$this->routeGroup = $this->programCode;

		$this->pageData = [
			"routeGroup" => $this->programCode,
			"menuName" => "กลุ่มผู้ใช้งาน",
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
				'groupdescription' => $lstData['groupdescription']
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

		return view($this->routeGroup . "/" . $this->routeGroup . "_add", $this->pageData);
	}

	public function store()
	{
		error_reporting(0);
		helper("form");
		$input = $this->request->getRawInput();

		try {

			$postData = [
				"groupcode" => $input["groupcode"],
				"groupname" => $input["groupname"],
				"groupdescription" => $input["groupdescription"],
				"comment" => $input["comment"],
				"create_datetime" => strval(STRTOTIME(Date("Y-m-d H:i:s"))),
				"create_by" => session()->get("UserID")
			];
			$this->model->insert($postData);
		} catch (Exception $e) {

			$this->pageData['action_page'] = "store";
			$this->pageData["data"] = null;

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
		error_reporting(0);
		helper("form");

		$input = $this->request->getRawInput();
		$postData = [
			"groupcode" => $input["groupcode"],
			"groupname" => $input["groupname"],
			"groupdescription" => $input["groupdescription"],
			"comment" => $input["comment"],
			"update_datetime" => strval(STRTOTIME(Date("Y-m-d H:i:s"))),
			"update_by" => session()->get("UserID")
		];
		$this->model->update($input['groupuser_id'], $postData);

		return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('บันทึกเรียบร้อย','success' , '');");
	}

	public function delete()
	{
		// iclude helper form
		helper("form");
		$input = $this->request->getRawInput();
		foreach ($input['groupuser_id'] as $groupuser_id) {
			$this->model->delete($groupuser_id);
		}
		return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('ลบรายการเรียบร้อย','success' , '');");
	}
}
