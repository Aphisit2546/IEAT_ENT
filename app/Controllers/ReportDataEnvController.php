<?php

namespace App\Controllers;

use App\Models\ReceiveDocument;
use App\Models\FUNCTION_REUSE\dropdown_reuse;
use Exception;

class ReportDataEnvController extends BaseController
{
	protected $programCode = "REPORT_DATA_ENV";
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
			"menuName" => "รายงานสรุปสถานะการดำเนินงานรับรายงานเข้าสู่ระบบ",
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

		$lstData = $this->model->search_for_report_env($data_search1, $data_search2);
		array_sort_by_multiple_keys($lstData, [
			"date_receive_report" => SORT_DESC
		]);
		/*
		array_sort_by_multiple_keys($lstData, [
			"date_receive_report" => SORT_ASC,
			'ID' => SORT_DESC,
		]);
		*/
		$this->pageData["lstData"] = $lstData;
		return view($this->routeGroup . "/" . $this->routeGroup . "_search", $this->pageData);
	}
}
