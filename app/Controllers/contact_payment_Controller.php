<?php

namespace App\Controllers;

use App\Models\FUNCTION_REUSE\check_session;
use App\Models\contact_payment;
use App\Models\FUNCTION_REUSE\dropdown_reuse;
use Exception;


class contact_payment_Controller extends BaseController
{
	protected $programCode = "contact_payment";
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

		$this->model = new contact_payment();
		$this->dropdown = new dropdown_reuse();
		$this->pageName = $this->getPageName($this->programCode);
		//$this->routeGroup = str_replace("-", "_", $this->programCode);
		$this->routeGroup = $this->programCode;

		$this->pageData = [
			"routeGroup" => $this->programCode,
			"menuName" => "จัดการข้อมูลที่อยู่สำหรับออกใบกำกับภาษี",
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

			$final_data[] = array(
				'contact_payment_id' => $lstData['contact_payment_id'],
				'branch_no' => $lstData['branch_no'],
				'branch_name' => $lstData['branch_name'],
				'moo' => $lstData['moo'],
				'soi' => $lstData['soi'],
				'street' => $lstData['street'],
				'district_id' => $lstData['district_id'],
				'amphur_id' => $lstData['amphur_id'],
				'province_id' => $lstData['province_id'],
				'postal_code' => $lstData['postal_code'],
				'phone_no' => $lstData['phone_no'],
				'fax_no' => $lstData['fax_no'],
				'email' => $lstData['email'],
				'email2' => $lstData['email2'],
				'group_customer_id' => $lstData['group_customer_id'],
				'create_by' => $lstData['create_by'],
				'create_datetime' => $lstData['create_datetime'],
				'update_by' => $lstData['update_by'],
				'update_datetime' => $lstData['update_datetime'],
				'address_no' => $lstData['address_no'],
				'companyname_payment' => $lstData['companyname_payment'],
				'taxid_payment' => $lstData['taxid_payment']
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
		$province_id = null;
		$amphur_id = null;
		$this->pageData['dropdown_province'] = $this->dropdown->dropdown_province();
		$this->pageData['dropdown_amphur'] = $this->dropdown->dropdown_amphur($province_id);
		$this->pageData['dropdown_tambon'] = $this->dropdown->dropdown_tambon($amphur_id);

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
				'branch_no' => $input['branch_no'],
				'branch_name' => $input['branch_name'],
				'moo' => $input['moo'],
				'soi' => $input['soi'],
				'street' => $input['street'],
				'district_id' => $input['district_id'],
				'amphur_id' => $input['amphur_id'],
				'province_id' => $input['province_id'],
				'postal_code' => $input['postal_code'],
				'phone_no' => $input['phone_no'],
				'fax_no' => $input['fax_no'],
				'email' => $input['email'],
				'email2' => $input['email2'],
				'address_no' => $input['address_no'],
				'companyname_payment' => $input['companyname_payment'],
				'taxid_payment' => $input['taxid_payment'],
				'group_customer_id' => session()->get("group_customer_id"),
				"create_datetime" => strval(STRTOTIME(Date("Y-m-d H:i:s"))),
				"create_by" => session()->get("UserID"),
				"update_datetime" => strval(STRTOTIME(Date("Y-m-d H:i:s"))),
				"update_by" => session()->get("UserID")
			];
			$this->model->insert($postData);
			return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('บันทึกเรียบร้อย','success' , '');");
		} catch (Exception $e) {

			$province_id = null;
			$amphur_id = null;
			$this->pageData['action_page'] = "store";
			$this->pageData["data"] = null;
			$this->pageData['dropdown_province'] = $this->dropdown->dropdown_province();
			$this->pageData['dropdown_amphur'] = $this->dropdown->dropdown_amphur($province_id);
			$this->pageData['dropdown_tambon'] = $this->dropdown->dropdown_tambon($amphur_id);

			session()->setFlashData("validation", $e->getMessage());
			return view($this->routeGroup . "/" . $this->routeGroup . "_add", $this->pageData);
		}
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

		$this->pageData['dropdown_province'] = $this->dropdown->dropdown_province();
		$this->pageData['dropdown_amphur'] = $this->dropdown->dropdown_amphur($this->pageData["data"]["province_id"]);
		$this->pageData['dropdown_tambon'] = $this->dropdown->dropdown_tambon($this->pageData["data"]["amphur_id"]);

		return view($this->routeGroup . "/" . $this->routeGroup . "_add", $this->pageData);
	}
	public function update()
	{
		error_reporting(0);
		helper("form");

		$input = $this->request->getRawInput();
		try {
			$postData = [
				'branch_no' => $input['branch_no'],
				'branch_name' => $input['branch_name'],
				'moo' => $input['moo'],
				'soi' => $input['soi'],
				'street' => $input['street'],
				'district_id' => $input['district_id'],
				'amphur_id' => $input['amphur_id'],
				'province_id' => $input['province_id'],
				'postal_code' => $input['postal_code'],
				'phone_no' => $input['phone_no'],
				'fax_no' => $input['fax_no'],
				'email' => $input['email'],
				'email2' => $input['email2'],
				'address_no' => $input['address_no'],
				'companyname_payment' => $input['companyname_payment'],
				'taxid_payment' => $input['taxid_payment'],
				'group_customer_id' => session()->get("group_customer_id"),
				"update_datetime" => strval(STRTOTIME(Date("Y-m-d H:i:s"))),
				"update_by" => session()->get("UserID")
			];
			$this->model->update($input['contact_payment_id'], $postData);
			return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('บันทึกเรียบร้อย','success' , '');");
		} catch (Exception $e) {

			$this->pageData['action_page'] = "upd";
			$this->pageData["data"] = $this->model->get_data_general_info($input['contact_payment_id']);
			if (empty($this->pageData["data"])) {
				session()->setFlashData("alertNoti", "alertPopup('ไม่สามารถบันทึกข้อมูลได้ กรุณาตรวจสอบ','','error' , '');");
				return redirect()->to($this->routeGroup);
			}

			$this->pageData['dropdown_province'] = $this->dropdown->dropdown_province();
			$this->pageData['dropdown_amphur'] = $this->dropdown->dropdown_amphur($this->pageData["data"]["province_id"]);
			$this->pageData['dropdown_tambon'] = $this->dropdown->dropdown_tambon($this->pageData["data"]["amphur_id"]);
		}
	}

	public function delete()
	{
		// iclude helper form
		helper("form");
		$input = $this->request->getRawInput();
		foreach ($input['contact_payment_id'] as $contact_payment_id) {
			$this->model->delete_data($contact_payment_id);
		}
		return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('ลบรายการเรียบร้อย','success' , '');");
	}
}
