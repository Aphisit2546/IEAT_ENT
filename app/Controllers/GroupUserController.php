<?php

namespace App\Controllers;

use App\Models\GroupUser;
use App\Models\FUNCTION_REUSE\dropdown_reuse;
use Exception;
use nusoap_client;

class GroupUserController extends BaseController
{
	protected $programCode = "GROUP_USER";
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
			"menuName" => "จัดการกลุ่มผู้ใช้งาน",
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

		$lstData = $this->model->search($data_search1);
		array_sort_by_multiple_keys($lstData, [
			"groupname_th" => SORT_DESC
		]);

		$this->pageData["lstData"] = $lstData;
		return view($this->routeGroup . "/" . $this->routeGroup . "_search", $this->pageData);
	}

	public function add()
	{
		// iclude helper form
		//error_reporting(0);
		helper("form");

		$this->pageData['action_page'] = "store";
		$this->pageData["data"] = null;

		return view($this->routeGroup . "/" . $this->routeGroup . "_add", $this->pageData);
	}

	public function store()
	{
		helper("form");
		$input = $this->request->getRawInput();

		$postData = [
			"groupcode" => $input["groupcode"],
			"groupname_th" => $input["groupname_th"],
			"groupname_en" => $input["groupname_en"],
			"groupdescription" => $input["groupdescription"],
			"flag_status" => '1',
			"group_customer_id" => '1',
			"industrial_id" => '33',
			"create_datetime" => Date("Y-m-d H:i:s"),
			"create_by" => session()->get("UserID"),
			"update_datetime" => Date("Y-m-d H:i:s"),
			"update_by" => session()->get("UserID")
		];
		$this->model->insert($postData);

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

		return view($this->routeGroup . "/" . $this->routeGroup . "_add", $this->pageData);
	}
	public function update()
	{
		helper("form");

		$input = $this->request->getRawInput();

		$postData = [
			"groupcode" => $input["groupcode"],
			"groupname_th" => $input["groupname_th"],
			"groupname_en" => $input["groupname_en"],
			"groupdescription" => $input["groupdescription"],
			"flag_status" => '1',
			"group_customer_id" => '1',
			"industrial_id" => '33',
			"update_datetime" => Date("Y-m-d H:i:s"),
			"update_by" => session()->get("UserID")
		];
		$this->model->update($input['groupuser_id'], $postData);

		return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('บันทึกเรียบร้อย','success' , '');");
	}

	public function delete($groupuser_id)
	{
		helper("form");
		$postData = [
			"flag_status" => '2',
			"update_datetime" => Date("Y-m-d H:i:s"),
			"update_by" => session()->get("UserID")
		];
		$this->model->update($groupuser_id, $postData);
		return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('ลบรายการเรียบร้อย','success' , '');");
	}

	public function test_service($industrial_id)
	{
		try {
			$client = new nusoap_client("https://epp-ieat.ieat.go.th/c/service_ieat.php?wsdl", true);
			$client->soap_defencoding = 'UTF-8';
			$client->decode_utf8 = false;

			$err = $client->getError();
			if ($err) {
				throw new Exception($err);
			}

			$params = array(
				'industrial_id' => $industrial_id
			);
			$data = $client->call("list_company", $params);
			print_r($data);
			/*
			foreach($data as $data){
				echo"<br />companyname_th=".iconv('TIS-620', 'UTF-8//ignore', $data['companyname_th']);
			}
			*/

			echo "<hr />";
			echo $password_md5 = md5('!QAZ2wsx');
			$params2 = array(
				'username' => 'admin_epp_no2',
				'password' => $password_md5
			);
			$data2 = $client->call("auth_up_ieat", $params2);
			print_r($data2);
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}
}
