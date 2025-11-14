<?php

namespace App\Controllers;

use App\Models\GroupUser;
use App\Models\FUNCTION_REUSE\dropdown_reuse;
use Exception;

class HistoryLoginController extends BaseController
{
	protected $programCode = "HISTORY_LOGIN";
	protected $model;
	protected $dropdown;
	protected $pageData;
	protected $pageName;
	protected $routeGroup;
	public function __construct()
	{
		$this->model = new GroupUser();
		$this->dropdown = new dropdown_reuse();
		$this->pageName = $this->getPageName($this->programCode);
		//$this->routeGroup = str_replace("-", "_", $this->programCode);
		$this->routeGroup = $this->programCode;

		$this->pageData = [
			"routeGroup" => $this->programCode,
			"menuName" => "ประวัติการเข้าใช้งานระบบ",
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

			$data_search1 = $input["data_search1"];
		} else {
			$data_search1 = "";
		}

		$this->pageData["data_search1"] = $data_search1;

		$lstData = $this->model->search_for_user($data_search1);
		array_sort_by_multiple_keys($lstData, [
			"groupname_th" => SORT_DESC
		]);

		$this->pageData["lstData"] = $lstData;
		return view($this->routeGroup . "/" . $this->routeGroup . "_search", $this->pageData);
	}
}
