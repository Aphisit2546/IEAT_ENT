<?php

namespace App\Controllers;

use App\Models\ReportList;
use App\Models\FUNCTION_REUSE\dropdown_reuse;

class ReportListController extends BaseController
{
	protected $programCode = "REPORT_LIST";
	protected $model;
	protected $dropdown;
	protected $pageData;
	protected $pageName;
	protected $routeGroup;
	public function __construct()
	{
		$this->model = new ReportList();
		$this->dropdown = new dropdown_reuse();
		$this->pageName = $this->getPageName($this->programCode);
		//$this->routeGroup = str_replace("-", "_", $this->programCode);
		$this->routeGroup = $this->programCode;

		$this->pageData = [
			"routeGroup" => $this->programCode,
			"menuName" => "รายงานประกอบการกำกับดูแล",
			"backMenu" => $this->getBackMenu($this->programCode)
		];
	}

	public function report_01()
	{
		// iclude helper form
		// iclude helper form
		error_reporting(0);
		//ini_set('memory_limit', '256M'); // This also needs to be increased in some cases. Can be changed to a higher value as per need)
		//ini_set('sqlsrv.ClientBufferMaxKBSize', '524288'); // Setting to 512M
		//ini_set('pdo_sqlsrv.client_buffer_max_kb_size', '524288');

		helper("form");

		$this->pageData['dropdown_industrial'] = $this->dropdown->dropdown_industrial();

		// iclude helper form
		helper("form");
		$httpRequest = service('request');

		if (strtoupper($httpRequest->getMethod()) == "POST") {

			$input = $this->request->getRawInput();

			$data_search1 = $input["data_search1"];
			//$data_search2 = $input["data_search2"];

			$lstData_before = $this->model->get_data_for_report_01($data_search1);
			foreach ($lstData_before as $lstData_before) {

				$check_data = $this->model->get_data_for_report_01_detail($lstData_before['id']);

				$lstData[] = array(
					"industrial_name" => $lstData_before['industrial_name_th'],
					"group_customer_id" => $lstData_before['group_customer_id'],
					"industrial_id" => $lstData_before['industrial_id'],
					"bu_id" => $lstData_before['id'],
					"cid" => $lstData_before['cid'],
					"fid14n" => $lstData_before['fid14n'],
					"businesstype" => $lstData_before['businesstype'],
					"factorytype" => $lstData_before['factorytype'],
					"business_no" => $lstData_before['business_no'],
					"companyname_th" => $lstData_before['companyname_th'],
					"landno" => $lstData_before['landno'],
					"name_report" => $check_data['name_report'],
					"name_report_ref" => $check_data['name_report_ref'],
					"type_document" => $check_data['type_document'],
					"date_edit_project" => $check_data['date_edit_project'],
					"update_datetime" => $check_data['update_datetime'],
				);
			}
		} else {
			$data_search1 = "";
			//$data_search2 = "";
			$lstData = null;
		}

		$this->pageData["data_search1"] = $data_search1;
		//$this->pageData["data_search2"] = $data_search2;
		$this->pageData["lstData"] = $lstData;

		return view($this->routeGroup . "/" . $this->routeGroup . "_01", $this->pageData);
	}

	public function report_02()
	{
		// iclude helper form
		error_reporting(0);
		//ini_set('memory_limit', '256M'); // This also needs to be increased in some cases. Can be changed to a higher value as per need)
		//ini_set('sqlsrv.ClientBufferMaxKBSize', '524288'); // Setting to 512M
		//ini_set('pdo_sqlsrv.client_buffer_max_kb_size', '524288');

		helper("form");

		// iclude helper form
		helper("form");
		$httpRequest = service('request');

		if (strtoupper($httpRequest->getMethod()) == "POST") {

			$input = $this->request->getRawInput();

			$data_search1 = $input["data_search1"];
			//$data_search2 = $input["data_search2"];

			$lstData = $this->model->search_for_report_02($data_search1);
		} else {
			$data_search1 = "";
			//$data_search2 = "";
			$lstData = null;
		}

		$this->pageData["data_search1"] = $data_search1;
		//$this->pageData["data_search2"] = $data_search2;

		$this->pageData["lstData"] = $lstData;
		return view($this->routeGroup . "/" . $this->routeGroup . "_02", $this->pageData);
	}

	public function report_03()
	{
		// iclude helper form
		error_reporting(0);
		/*
		ini_set('memory_limit', '256M'); // This also needs to be increased in some cases. Can be changed to a higher value as per need)
		ini_set('sqlsrv.ClientBufferMaxKBSize', '524288'); // Setting to 512M
		ini_set('pdo_sqlsrv.client_buffer_max_kb_size', '524288');
		*/
		helper("form");

		$this->pageData['dropdown_industrial'] = $this->dropdown->dropdown_industrial();

		// iclude helper form
		helper("form");
		$httpRequest = service('request');

		if (strtoupper($httpRequest->getMethod()) == "POST") {

			$input = $this->request->getRawInput();

			$data_search1 = $input["data_search1"];
			//$data_search2 = $input["data_search2"];

			$lstData_before = $this->model->get_data_for_report_03($data_search1);
			foreach ($lstData_before as $lstData_before) {

				$check_data = $this->model->get_data_for_report_03_detail($lstData_before['id']);

				$lstData[] = array(
					"industrial_name" => $lstData_before['industrial_name_th'],
					"group_customer_id" => $lstData_before['group_customer_id'],
					"industrial_id" => $lstData_before['industrial_id'],
					"bu_id" => $lstData_before['id'],
					"cid" => $lstData_before['cid'],
					"fid14n" => $lstData_before['fid14n'],
					"businesstype" => $lstData_before['businesstype'],
					"factorytype" => $lstData_before['factorytype'],
					"business_no" => $lstData_before['business_no'],
					"companyname_th" => $lstData_before['companyname_th'],
					"landno" => $lstData_before['landno'],
					"name_report" => $check_data['name_report'],
					"name_report_ref" => $check_data['name_report_ref'],
					"type_document" => $check_data['type_document'],
					"date_edit_project" => $check_data['date_edit_project'],
					"update_datetime" => $check_data['update_datetime'],
				);
			}
		} else {
			$data_search1 = "";
			//$data_search2 = "";
			$lstData = null;
		}

		$this->pageData["data_search1"] = $data_search1;
		//$this->pageData["data_search2"] = $data_search2;
		$this->pageData["lstData"] = $lstData;

		return view($this->routeGroup . "/" . $this->routeGroup . "_03", $this->pageData);
	}

	public function report_04()
	{
		// iclude helper form
		error_reporting(0);
		//ini_set('memory_limit', '256M'); // This also needs to be increased in some cases. Can be changed to a higher value as per need)
		//ini_set('sqlsrv.ClientBufferMaxKBSize', '524288'); // Setting to 512M
		//ini_set('pdo_sqlsrv.client_buffer_max_kb_size', '524288');

		helper("form");

		$this->pageData['dropdown_industrial'] = $this->dropdown->dropdown_industrial();

		// iclude helper form
		helper("form");
		$httpRequest = service('request');

		if (strtoupper($httpRequest->getMethod()) == "POST") {

			$input = $this->request->getRawInput();

			$data_search1 = $input["data_search1"];
			//$data_search2 = $input["data_search2"];

			$lstData_before = $this->model->get_data_for_report_04($data_search1);
			foreach ($lstData_before as $lstData_before) {

				$check_data = $this->model->get_data_for_report_04_detail($lstData_before['id']);

				$lstData[] = array(
					"industrial_name" => $lstData_before['industrial_name'],
					"group_customer_id" => $lstData_before['group_customer_id'],
					"industrial_id" => $lstData_before['industrial_id'],
					"bu_id" => $lstData_before['id'],
					"cid" => $lstData_before['cid'],
					"fid14n" => $lstData_before['fid14n'],
					"businesstype" => $lstData_before['businesstype'],
					"factorytype" => $lstData_before['factorytype'],
					"business_no" => $lstData_before['business_no'],
					"companyname_th" => $lstData_before['companyname_th'],
					"landno" => $lstData_before['landno'],
					"name_report" => $check_data['name_report'],
					"name_report_ref" => $check_data['name_report_ref'],
					"type_document" => $check_data['type_document'],
					"date_edit_project" => $check_data['date_edit_project'],
					"update_datetime" => $check_data['update_datetime'],
				);
			}
		} else {
			$data_search1 = "";
			//$data_search2 = "";
			$lstData = null;
		}

		$this->pageData["data_search1"] = $data_search1;
		//$this->pageData["data_search2"] = $data_search2;
		$this->pageData["lstData"] = $lstData;
		return view($this->routeGroup . "/" . $this->routeGroup . "_04", $this->pageData);
	}

	public function report_05()
	{
		// iclude helper form
		error_reporting(0);
		//ini_set('memory_limit', '256M'); // This also needs to be increased in some cases. Can be changed to a higher value as per need)
		//ini_set('sqlsrv.ClientBufferMaxKBSize', '524288'); // Setting to 512M
		//ini_set('pdo_sqlsrv.client_buffer_max_kb_size', '524288');

		helper("form");

		$this->pageData['dropdown_industrial'] = $this->dropdown->dropdown_industrial();

		// iclude helper form
		helper("form");
		$httpRequest = service('request');

		if (strtoupper($httpRequest->getMethod()) == "POST") {

			$input = $this->request->getRawInput();

			$data_search1 = $input["data_search1"];
			$data_search2 = $input["data_search2"];

			$lstData_before = $this->model->get_data_for_report_05($data_search1);
			foreach ($lstData_before as $lstData_before) {

				$check_data = $this->model->get_data_for_report_05_detail($lstData_before['industrial_id']);

				$lstData[] = array(
					"industrial_name" => $lstData_before['industrial_name_th'],
					"group_customer_id" => $lstData_before['group_customer_id'],
					"industrial_id" => $lstData_before['industrial_id'],
					"count_report" => $check_data['count_report'],
					"name_report" => $check_data['name_report'],
					"count_report_mr" => $check_data['count_report_mr'],
					"name_report_mr" => $check_data['name_report_mr'],
					"last_send_report" => $check_data['last_send_report'],
					"last_update_time" => $check_data['last_update_time'],
					"type_document_all" => $check_data['type_document_all'],
				);
			}
		} else {
			$data_search1 = "";
			$data_search2 = "";
			$lstData = null;
		}

		$this->pageData["data_search1"] = $data_search1;
		$this->pageData["data_search2"] = $data_search2;
		$this->pageData["lstData"] = $lstData;
		return view($this->routeGroup . "/" . $this->routeGroup . "_05", $this->pageData);
	}

	public function report_06()
	{
		// iclude helper form
		error_reporting(0);
		//ini_set('memory_limit', '256M'); // This also needs to be increased in some cases. Can be changed to a higher value as per need)
		//ini_set('sqlsrv.ClientBufferMaxKBSize', '524288'); // Setting to 512M
		//ini_set('pdo_sqlsrv.client_buffer_max_kb_size', '524288');

		helper("form");

		$this->pageData['dropdown_industrial'] = $this->dropdown->dropdown_industrial();

		// iclude helper form
		helper("form");
		$httpRequest = service('request');

		if (strtoupper($httpRequest->getMethod()) == "POST") {

			$input = $this->request->getRawInput();

			$data_search1 = $input["data_search1"];
			$data_search2 = $input["data_search2"];

			$lstData_before = $this->model->get_data_for_report_06($data_search1, $data_search2);
			foreach ($lstData_before as $lstData_before) {

				$check_data = $this->model->get_data_for_report_06_detail($lstData_before['group_customer_id_document']);

				$lstData[] = array(
					"industrial_name" => $lstData_before['industrial_name'],
					"group_customer_id" => $lstData_before['group_customer_id'],
					"industrial_id" => $lstData_before['industrial_id'],
					"bu_id" => $lstData_before['id'],
					"cid" => $lstData_before['cid'],
					"fid14n" => $lstData_before['fid14n'],
					"businesstype" => $lstData_before['businesstype'],
					"factorytype" => $lstData_before['factorytype'],
					"business_no" => $lstData_before['business_no'],
					"companyname_th" => $lstData_before['companyname_th'],
					"landno" => $lstData_before['landno'],

					"count_report" => $check_data['count_report'],
					"name_report" => $check_data['name_report'],
					"count_report_mr" => $check_data['count_report_mr'],
					"name_report_mr" => $check_data['name_report_mr'],
					"last_send_report" => $check_data['last_send_report'],
					"last_update_time" => $check_data['last_update_time'],
					"type_document_all" => $check_data['type_document_all'],
				);
			}
		} else {
			$data_search1 = "";
			$data_search2 = "";
			$lstData = null;
		}

		$this->pageData["data_search1"] = $data_search1;
		$this->pageData["data_search2"] = $data_search2;
		$this->pageData["lstData"] = $lstData;
		return view($this->routeGroup . "/" . $this->routeGroup . "_06", $this->pageData);
	}

	public function report_07()
	{
		// iclude helper form
		error_reporting(0);

		//ini_set('memory_limit', '512M'); // This also needs to be increased in some cases. Can be changed to a higher value as per need)
		//ini_set('sqlsrv.ClientBufferMaxKBSize', '524288'); // Setting to 512M
		//ini_set('pdo_sqlsrv.client_buffer_max_kb_size', '524288');

		helper("form");

		$this->pageData['dropdown_industrial'] = $this->dropdown->dropdown_industrial();

		// iclude helper form
		helper("form");
		$httpRequest = service('request');

		if (strtoupper($httpRequest->getMethod()) == "POST") {

			$input = $this->request->getRawInput();

			$data_search1 = $input["data_search1"];
			$data_search2 = $input["data_search2"];

			$lstData_before = $this->model->get_data_for_report_07($data_search1, $data_search2);
			//print_r($lstData_before);
			//exit;
			foreach ($lstData_before as $lstData_before) {

				$check_type_safety = $this->model->get_check_record_type_fire($lstData_before['bu_id']);
				$check_type_fire = $this->model->get_check_record_type_safety($lstData_before['bu_id']);
				$date_send_summarize = $this->model->get_max_send_date_type_safety($lstData_before['bu_id']);
				$chcek_psm = $this->model->get_check_psm($lstData_before['group_customer_id']);

				if ($check_type_safety == 'Y' || $check_type_fire == 'Y' || $chcek_psm == 'Y') {
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

						"check_type_safety" => $check_type_safety,
						"check_type_fire" => $check_type_fire,
						"date_send_summarize" => $date_send_summarize,
						"chcek_psm" => $chcek_psm
					);
				}
			}
		} else {
			$data_search1 = "";
			$data_search2 = "";
			$lstData = null;
		}

		$this->pageData["data_search1"] = $data_search1;
		$this->pageData["data_search2"] = $data_search2;
		$this->pageData["lstData"] = $lstData;

		return view($this->routeGroup . "/" . $this->routeGroup . "_07", $this->pageData);
	}

	public function report_08()
	{
		// iclude helper form
		error_reporting(0);
		//ini_set('memory_limit', '256M'); // This also needs to be increased in some cases. Can be changed to a higher value as per need)
		//ini_set('sqlsrv.ClientBufferMaxKBSize', '524288'); // Setting to 512M
		//ini_set('pdo_sqlsrv.client_buffer_max_kb_size', '524288');

		helper("form");

		$this->pageData['dropdown_industrial'] = $this->dropdown->dropdown_industrial();

		// iclude helper form
		helper("form");
		$httpRequest = service('request');

		if (strtoupper($httpRequest->getMethod()) == "POST") {

			$input = $this->request->getRawInput();

			$data_search1 = $input["data_search1"];
			$data_search2 = $input["data_search2"];
			$data_search3 = $input["data_search3"];

			$lstData_before = $this->model->get_data_for_report_08($data_search1, $data_search2);
			foreach ($lstData_before as $lstData_before) {

				//$check_data_boiler = $this->model->get_data_boiler_for_env_ieat_detail($lstData_before['bu_id']);

				$lstData[] = array(
					"industrial_name" => $lstData_before['industrial_name'],
					"group_customer_id" => $lstData_before['group_customer_id'],
					"industrial_id" => $lstData_before['industrial_id'],
					"bu_id" => $lstData_before['id'],
					"cid" => $lstData_before['cid'],
					"fid14n" => $lstData_before['fid14n'],
					"businesstype" => $lstData_before['businesstype'],
					"factorytype" => $lstData_before['factorytype'],
					"business_no" => $lstData_before['business_no'],
					"companyname_th" => $lstData_before['companyname_th'],
					"landno" => $lstData_before['landno'],

					"date_summarize" => $lstData_before['date_summarize'],
					"date_send_summarize" => $lstData_before['date_send_summarize'],
					"result_summarize" => $lstData_before['result_summarize'],
					"date_expire_summarize" => $lstData_before['date_expire_summarize'],
					"doc_no" => $lstData_before['doc_no'],
					"update_datetime" => $lstData_before['update_datetime']
				);
			}
		} else {
			$data_search1 = "";
			$data_search2 = "";
			$data_search3 = "";
			$lstData = null;
		}

		$this->pageData["data_search1"] = $data_search1;
		$this->pageData["data_search2"] = $data_search2;
		$this->pageData["data_search3"] = $data_search3;
		$this->pageData["lstData"] = $lstData;
		return view($this->routeGroup . "/" . $this->routeGroup . "_08", $this->pageData);
	}

	public function report_09()
	{
		// iclude helper form
		error_reporting(0);
		//ini_set('memory_limit', '256M'); // This also needs to be increased in some cases. Can be changed to a higher value as per need)
		//ini_set('sqlsrv.ClientBufferMaxKBSize', '524288'); // Setting to 512M
		//ini_set('pdo_sqlsrv.client_buffer_max_kb_size', '524288');

		helper("form");

		$this->pageData['dropdown_industrial'] = $this->dropdown->dropdown_industrial();

		// iclude helper form
		helper("form");
		$httpRequest = service('request');

		if (strtoupper($httpRequest->getMethod()) == "POST") {

			$input = $this->request->getRawInput();

			$data_search1 = $input["data_search1"];
			$data_search2 = $input["data_search2"];

			$lstData_before = $this->model->get_data_for_report_09($data_search1, $data_search2);
			foreach ($lstData_before as $lstData_before) {

				$check_data_boiler = $this->model->get_data_boiler_for_env_ieat_detail($lstData_before['bu_id']);

				$lstData[] = array(
					"industrial_name" => $lstData_before['industrial_name'],
					"group_customer_id" => $lstData_before['group_customer_id'],
					"industrial_id" => $lstData_before['industrial_id'],
					"bu_id" => $lstData_before['bu_id'],
					"cid" => $lstData_before['cid'],
					"fid14n" => $lstData_before['fid14n'],
					"businesstype" => $lstData_before['businesstype'],
					"factorytype" => $lstData_before['factorytype'],
					"business_no" => $lstData_before['business_no'],
					"companyname_th" => $lstData_before['companyname_th'],
					"landno" => $lstData_before['landno'],

					"count_boiler" => $check_data_boiler['count_boiler'],
					"code_boiler" => $check_data_boiler['code_boiler'],
					"doc_no_boiler" => $check_data_boiler['doc_no_boiler'],
					"last_update_boiler" => $check_data_boiler['last_update_boiler']
				);
			}
		} else {
			$data_search1 = "";
			$data_search2 = "";
			$lstData = null;
		}

		$this->pageData["data_search1"] = $data_search1;
		$this->pageData["data_search2"] = $data_search2;
		$this->pageData["lstData"] = $lstData;
		return view($this->routeGroup . "/" . $this->routeGroup . "_09", $this->pageData);
	}

	public function report_10()
	{
		// iclude helper form
		error_reporting(0);
		//ini_set('memory_limit', '256M'); // This also needs to be increased in some cases. Can be changed to a higher value as per need)
		//ini_set('sqlsrv.ClientBufferMaxKBSize', '524288'); // Setting to 512M
		//ini_set('pdo_sqlsrv.client_buffer_max_kb_size', '524288');

		// iclude helper form
		helper("form");
		$httpRequest = service('request');

		if (strtoupper($httpRequest->getMethod()) == "POST") {

			$input = $this->request->getRawInput();
			$data_search1 = $input["data_search1"];
			switch ($data_search1) {
				case '1':
					$lstData_before = $this->model->search_for_report_10_01();
					foreach ($lstData_before as $lstData_before) {

						$data_gis = $this->model->get_customer_for_map_v2($lstData_before['group_customer_id_document']);

						$lstData[] = array(
							"id" => $data_gis['id'],
							"companyname_th" => $data_gis['companyname_th'],
							"lattitude_factory" => $data_gis['lattitude_factory'],
							"longtitude_factory" => $data_gis['longtitude_factory']
						);
					}
					break;
				case '2':
					$lstData_before = $this->model->search_for_report_10_02();
					foreach ($lstData_before as $lstData_before) {

						$data_gis = $this->model->get_customer_for_map_v2($lstData_before['group_customer_id_document']);

						$lstData[] = array(
							"id" => $data_gis['id'],
							"companyname_th" => $data_gis['companyname_th'],
							"lattitude_factory" => $data_gis['lattitude_factory'],
							"longtitude_factory" => $data_gis['longtitude_factory']
						);
					}
					break;
				case '3':
					$lstData_before = $this->model->search_for_report_10_03();
					foreach ($lstData_before as $lstData_before) {

						$data_gis = $this->model->get_customer_for_map_v2($lstData_before['group_customer_id_document']);

						$lstData[] = array(
							"id" => $data_gis['id'],
							"companyname_th" => $data_gis['companyname_th'],
							"lattitude_factory" => $data_gis['lattitude_factory'],
							"longtitude_factory" => $data_gis['longtitude_factory']
						);
					}
					break;
				case '-':
					$lstData_before1 = $this->model->search_for_report_10_01();
					foreach ($lstData_before1 as $lstData_before1) {

						$data_gis = $this->model->get_customer_for_map_v2($lstData_before1['group_customer_id_document']);

						$lstData_bf[] = array(
							"id" => $data_gis['id'],
							"companyname_th" => $data_gis['companyname_th'],
							"lattitude_factory" => $data_gis['lattitude_factory'],
							"longtitude_factory" => $data_gis['longtitude_factory']
						);
					}

					$lstData_before2 = $this->model->search_for_report_10_02();
					foreach ($lstData_before2 as $lstData_before2) {

						$data_gis2 = $this->model->get_customer_for_map_v2($lstData_before2['group_customer_id_document']);

						$lstData_bf[] = array(
							"id" => $data_gis2['id'],
							"companyname_th" => $data_gis2['companyname_th'],
							"lattitude_factory" => $data_gis2['lattitude_factory'],
							"longtitude_factory" => $data_gis2['longtitude_factory']
						);
					}

					$lstData_before3 = $this->model->search_for_report_10_03();
					foreach ($lstData_before3 as $lstData_before3) {

						$data_gis3 = $this->model->get_customer_for_map_v2($lstData_before3['group_customer_id_document']);

						$lstData_bf[] = array(
							"id" => $data_gis3['id'],
							"companyname_th" => $data_gis3['companyname_th'],
							"lattitude_factory" => $data_gis3['lattitude_factory'],
							"longtitude_factory" => $data_gis3['longtitude_factory']
						);
					}

					$lstData = array_unique($lstData_bf, SORT_REGULAR);

					break;
			}

			$this->pageData['default_zoom'] = 6;
			$this->pageData['default_center_map_lat'] = 13.847860;
			$this->pageData['default_center_map_long'] = 100.604274;
		} else {
			$data_search1 = "";
			$lstData = null;
			$this->pageData['default_zoom'] = 4;
			$this->pageData['default_center_map_lat'] = 13.847860;
			$this->pageData['default_center_map_long'] = 100.604274;
		}

		$this->pageData["data_search1"] = $data_search1;
		$this->pageData['dropdown_type_report_detail_search'] = $this->dropdown->dropdown_type_report_detail_search_01();

		$this->pageData["lstData"] = $lstData;
		return view($this->routeGroup . "/" . $this->routeGroup . "_10", $this->pageData);
	}

	public function report_11()
	{
		// iclude helper form
		error_reporting(0);
		ini_set('memory_limit', '256M'); // This also needs to be increased in some cases. Can be changed to a higher value as per need)
		ini_set('sqlsrv.ClientBufferMaxKBSize', '524288'); // Setting to 512M
		ini_set('pdo_sqlsrv.client_buffer_max_kb_size', '524288');

		// iclude helper form
		helper("form");
		$httpRequest = service('request');

		if (strtoupper($httpRequest->getMethod()) == "POST") {

			$input = $this->request->getRawInput();
			$data_search1 = $input["data_search1"];
			switch ($data_search1) {
				case '1':
					$lstData = $this->model->search_for_report_11_01();
					break;
				case '2':
					$lstData_before = $this->model->search_for_report_11_02();
					foreach ($lstData_before as $lstData_before) {

						$data_gis = $this->model->get_customer_for_map($lstData_before['bu_id']);

						$lstData[] = array(
							"id" => $data_gis['id'],
							"companyname_th" => $data_gis['companyname_th'],
							"lattitude_factory" => $data_gis['lattitude_factory'],
							"longtitude_factory" => $data_gis['longtitude_factory']
						);
					}
					break;
				case '3':
					$lstData_before = $this->model->search_for_report_11_03();
					foreach ($lstData_before as $lstData_before) {

						$data_gis = $this->model->get_customer_for_map($lstData_before['bu_id']);

						$lstData[] = array(
							"id" => $data_gis['id'],
							"companyname_th" => $data_gis['companyname_th'],
							"lattitude_factory" => $data_gis['lattitude_factory'],
							"longtitude_factory" => $data_gis['longtitude_factory']
						);
					}
					break;
				case '-':
					$lstData_before1 = $this->model->search_for_report_11_01();
					foreach ($lstData_before1 as $lstData_before1) {

						$lstData_bf[] = array(
							"id" => $lstData_before1['id'],
							"companyname_th" => $lstData_before1['companyname_th'],
							"lattitude_factory" => $lstData_before1['lattitude_factory'],
							"longtitude_factory" => $lstData_before1['longtitude_factory']
						);
					}

					$lstData_before2 = $this->model->search_for_report_11_02();
					foreach ($lstData_before2 as $lstData_before2) {

						$data_gis2 = $this->model->get_customer_for_map($lstData_before2['bu_id']);

						$lstData_bf[] = array(
							"id" => $data_gis2['id'],
							"companyname_th" => $data_gis2['companyname_th'],
							"lattitude_factory" => $data_gis2['lattitude_factory'],
							"longtitude_factory" => $data_gis2['longtitude_factory']
						);
					}

					$lstData_before3 = $this->model->search_for_report_11_03();
					foreach ($lstData_before3 as $lstData_before3) {

						$data_gis3 = $this->model->get_customer_for_map($lstData_before3['bu_id']);

						$lstData_bf[] = array(
							"id" => $data_gis3['id'],
							"companyname_th" => $data_gis3['companyname_th'],
							"lattitude_factory" => $data_gis3['lattitude_factory'],
							"longtitude_factory" => $data_gis3['longtitude_factory']
						);
					}

					$lstData = array_unique($lstData_bf, SORT_REGULAR);

					break;
			}

			$this->pageData['default_zoom'] = 6;
			$this->pageData['default_center_map_lat'] = 13.847860;
			$this->pageData['default_center_map_long'] = 100.604274;
		} else {
			$data_search1 = "";
			$lstData = null;
			$this->pageData['default_zoom'] = 4;
			$this->pageData['default_center_map_lat'] = 13.847860;
			$this->pageData['default_center_map_long'] = 100.604274;
		}

		$this->pageData["data_search1"] = $data_search1;
		$this->pageData['dropdown_type_report_detail_search'] = $this->dropdown->dropdown_type_report_detail_search_02();

		$this->pageData["lstData"] = $lstData;
		return view($this->routeGroup . "/" . $this->routeGroup . "_11", $this->pageData);
	}

	public function get_customer_for_map($user_id)
	{
		$result_data = $this->model->get_customer_for_map($user_id);
		$this->pageData["result_data"] = $result_data;
		return view($this->routeGroup . "/" . $this->routeGroup . "_for_map", $this->pageData);
	}
}
