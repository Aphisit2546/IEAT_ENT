<?php

namespace App\Controllers;

use App\Models\PublishForTypeFire;
use App\Models\FUNCTION_REUSE\dropdown_reuse;
use Exception;

class PublishForTypeFireController extends BaseController
{
	protected $programCode = "PUBLISH_FOR_TYPE_FIRE";
	protected $model;
	protected $dropdown;
	protected $pageData;
	protected $pageName;
	protected $routeGroup;
	public function __construct()
	{
		$this->model = new PublishForTypeFire();
		$this->dropdown = new dropdown_reuse();
		$this->pageName = $this->getPageName($this->programCode);
		//$this->routeGroup = str_replace("-", "_", $this->programCode);
		$this->routeGroup = $this->programCode;

		$this->pageData = [
			"routeGroup" => $this->programCode,
			"menuName" => "เผยแพร่บัญชีโรงงานที่มีความเสี่ยงอัคคีภัย",
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

		$lstData_before = $this->model->search_default();
		foreach ($lstData_before as $lstData_before) {

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
				"remarks_risk" => $lstData_before['remarks_risk']
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

		$last_version = $this->model->get_last_version();
		$year_report = date('Y');

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
				"update_by" => session()->get("UserID"),
				"version_report" => $last_version,
				"year_report" => $year_report,
				"flag_report" => "Y"
			];
			print_r($postData);
			$this->model->insert($postData);
		}

		return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('เผยแพร่ข้อมูลเรียบร้อย','success' , '');");
	}
}
