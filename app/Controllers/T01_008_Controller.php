<?php

namespace App\Controllers;

use App\Models\FUNCTION_REUSE\check_session;
use App\Models\T01_008;
use App\Models\FUNCTION_REUSE\dropdown_reuse;
use Exception;


class T01_008_Controller extends BaseController
{
	protected $programCode = "T01_008";
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

		$this->model = new T01_008();
		$this->dropdown = new dropdown_reuse();
		$this->pageName = $this->getPageName($this->programCode);
		//$this->routeGroup = str_replace("-", "_", $this->programCode);
		$this->routeGroup = $this->programCode;

		$this->pageData = [
			"routeGroup" => $this->programCode,
			"menuName" => "จัดการข้อมูลผู้ติดต่อ",
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

			$title_fullname_th = $this->model->full_title($lstData['d001']);
			$name = $title_fullname_th . " " . $lstData['d002'] . "&nbsp;&nbsp;" . $lstData['d003'];

			$final_data[] = array(
				'main_id' => $lstData['main_id'],
				'name' => $name,
				'd001' => $lstData['d001'],
				'd002' => $lstData['d002'],
				'd003' => $lstData['d003'],
				'd004' => $lstData['d004'],
				'd005' => $lstData['d005'],
				'd006' => $lstData['d006'],
				'd007' => $lstData['d007'],
				'd008' => $lstData['d008'],
				'd009' => $lstData['d009'],
				'd010' => $lstData['d010'],
				'd011' => $lstData['d011'],
				'd012' => $lstData['d012'],
				'd013' => $lstData['d013'],
				'd014' => $lstData['d014'],
				'd015' => $lstData['d015'],
				'd016' => $lstData['d016'],
				'd017' => $lstData['d017']
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
		$this->pageData['dropdown_title'] = $this->dropdown->dropdown_title();

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
				'd001' => $input['d001'],
				'd002' => $input['d002'],
				'd003' => $input['d003'],
				'd004' => $input['d004'],
				'd005' => $input['d005'],
				'd006' => $input['d006'],
				'd007' => $input['d007'],
				'd008' => $input['d008'],
				'd009' => $input['d009'],
				'd010' => $input['d010'],
				'd011' => $input['d011'],
				'd012' => $input['d012'],
				'd013' => $input['d013'],
				'd014' => $input['d014'],
				'd015' => $input['d015'],
				'd016' => $input['d016'],
				'd017' => $input['d017'],
				'group_customer_id' => session()->get("group_customer_id"),
				"create_datetime" => strval(STRTOTIME(Date("Y-m-d H:i:s"))),
				"create_by" => session()->get("UserID")
			];
			$this->model->insert($postData);
		} catch (Exception $e) {

			$this->pageData['action_page'] = "store";
			$this->pageData["data"] = null;
			$this->pageData['dropdown_title'] = $this->dropdown->dropdown_title();

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
		$this->pageData["data"] = $this->model->get_data_general_info($value);
		if (empty($this->pageData["data"])) {
			session()->setFlashData("alertNoti", "alertPopup('ไม่พบข้อมูล','','error' , '');");
			return redirect()->to($this->routeGroup);
		}

		$this->pageData['dropdown_title'] = $this->dropdown->dropdown_title();

		return view($this->routeGroup . "/" . $this->routeGroup . "_add", $this->pageData);
	}
	public function update()
	{
		error_reporting(0);
		helper("form");

		$input = $this->request->getRawInput();
		$postData = [
			'd001' => $input['d001'],
			'd002' => $input['d002'],
			'd003' => $input['d003'],
			'd004' => $input['d004'],
			'd005' => $input['d005'],
			'd006' => $input['d006'],
			'd007' => $input['d007'],
			'd008' => $input['d008'],
			'd009' => $input['d009'],
			'd010' => $input['d010'],
			'd011' => $input['d011'],
			'd012' => $input['d012'],
			'd013' => $input['d013'],
			'd014' => $input['d014'],
			'd015' => $input['d015'],
			'd016' => $input['d016'],
			'd017' => $input['d017'],
			'group_customer_id' => session()->get("group_customer_id"),
			"update_datetime" => strval(STRTOTIME(Date("Y-m-d H:i:s"))),
			"update_by" => session()->get("UserID")
		];
		$this->model->update($input['main_id'], $postData);

		return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('บันทึกเรียบร้อย','success' , '');");
	}

	public function delete()
	{
		// iclude helper form
		helper("form");
		$input = $this->request->getRawInput();
		foreach ($input['main_id'] as $main_id) {
			$this->model->delete_data($main_id);
		}
		return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('ลบรายการเรียบร้อย','success' , '');");
	}
}
