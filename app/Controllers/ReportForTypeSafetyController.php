<?php

namespace App\Controllers;

use App\Models\ReportForTypeSafety;
use App\Models\FUNCTION_REUSE\dropdown_reuse;
use Exception;

class ReportForTypeSafetyController extends BaseController
{
	protected $programCode = "REPORT_FOR_TYPE_SAFETY";
	protected $model;
	protected $dropdown;
	protected $pageData;
	protected $pageName;
	protected $routeGroup;
	public function __construct()
	{
		$this->model = new ReportForTypeSafety();
		$this->dropdown = new dropdown_reuse();
		$this->pageName = $this->getPageName($this->programCode);
		//$this->routeGroup = str_replace("-", "_", $this->programCode);
		$this->routeGroup = $this->programCode;

		$this->pageData = [
			"routeGroup" => $this->programCode,
			"menuName" => "จัดทำบัญชีโรงงานตามประกาศ อก. เรื่องมาตรการคุ้มครองความปลอดภัยในการดำเนินงาน",
			"backMenu" => $this->getBackMenu($this->programCode)
		];
	}

	public function index()
	{
		// iclude helper form
		error_reporting(0);
		ini_set('memory_limit', '512M'); // This also needs to be increased in some cases. Can be changed to a higher value as per need)
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

			$check_risk_factory = $this->model->check_risk_factory($lstData_before['group_customer_id']);
			if ($check_risk_factory != '' && $check_risk_factory != null) :
				$risk_factory = "Y";
			else :
				$risk_factory = "N";
			endif;

			$lstData[] = array(
				"bu_id" => $lstData_before['id'],
				"group_customer_id" => $lstData_before['group_customer_id'],
				"industrial_id" => $lstData_before['industrial_id'],
				"cid" => $lstData_before['cid'],
				"fid14n" => $lstData_before['fid14n'],
				"factorytype" => $lstData_before['factorytype'],
				"business_no" => $lstData_before['business_no'],
				"companyname_th" => $lstData_before['companyname_th'],
				"landno" => $lstData_before['landno'],
				"risk_factory" => $risk_factory
			);
		}

		$this->pageData["lstData"] = $lstData;
		return view($this->routeGroup . "/" . $this->routeGroup . "_search", $this->pageData);
	}

	public function store()
	{
		// iclude helper form
		helper("form");

		$input = $this->request->getRawInput();

		$this->model->delete_for_report_safety($input['industrial_id_clear']);
		for ($i = 1; $i <= $input['row_array']; $i++) {

			$postData = [
				"bu_id" => $input['bu_id' . $i . ''],
				"group_customer_id" => $input['group_customer_id' . $i . ''],
				"industrial_id" => $input['industrial_id' . $i . ''],
				"fid14n" => $input['fid14n' . $i . ''],
				"risk_factory" => $input['risk_factory' . $i . ''],
				"check_risk_factory" => $input['check_risk_factory' . $i . ''],
				"remarks_risk" => $input['remarks_risk' . $i . ''],
				"create_datetime" => Date("Y-m-d H:i:s"),
				"create_by" => session()->get("UserID"),
				"update_datetime" => Date("Y-m-d H:i:s"),
				"update_by" => session()->get("UserID")
			];
			//print_r($postData);
			$this->model->insert($postData);
		}

		return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('บันทึกข้อมูลเรียบร้อย','success' , '');");
	}
}
