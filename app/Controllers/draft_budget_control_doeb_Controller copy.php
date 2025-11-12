<?php

namespace App\Controllers;

//use App\Models\FUNCTION_REUSE\check_session;
use App\Models\dropdown_reuse;
use GuzzleHttp\Client;
use Exception;

class draft_budget_control_doeb_Controller extends BaseController
{
	protected $programCode = "draft_budget_control_doeb";
	//protected $check_session;
	protected $model;
	protected $dropdown;
	protected $pageData;
	protected $pageName;
	protected $routeGroup;
	protected $function;
	public function __construct()
	{
		$this->dropdown = new dropdown_reuse();
		$this->routeGroup = $this->programCode;
		$this->pageData = [
			"routeGroup" => $this->programCode,
			"menuName" => "จัดทำร่างคำของงบประมาณ (งบดำเนินการ)"
		];
	}
	public function index()
	{
		error_reporting(0);
		helper("form");

		$client = new Client();
		$input = $this->request->getRawInput();
		$input['GroupUserID'] = session('GroupUserID');
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/DraftBudgetControlDoeb', [
			"body" => json_encode($input)
		]);

		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);
		$this->pageData["lstData"] = $data['data'];

		$this->pageData["data_search1"] = $input['data_search1'];
		$this->pageData["data_search2"] = $input['data_search2'];
		$this->pageData["data_search3"] = $input['data_search3'];

		return view($this->routeGroup . "/" . $this->routeGroup . "_search", $this->pageData);
	}

	public function add($value)
	{
		error_reporting(0);
		helper("form");

		$this->pageData['dropdown_masterOverAllPlanOneYear'] = $this->dropdown->dropdown_masterOverAllBudgetOneYear();
		$this->pageData['dropdown_StructureBudgetMain'] = $this->dropdown->dropdown_StructureBudgetMain();
		$this->pageData['dropdown_StructureBudgetMainLv2'] = $this->dropdown->dropdown_StructureBudgetMainLv2();
		$this->pageData['dropdown_StructureBudgetMainLv3'] = $this->dropdown->dropdown_StructureBudgetMainLv3();
		$this->pageData['action_page'] = "store";
		$this->pageData["data"] = null;

		//return view($this->routeGroup . "/" . $this->routeGroup . "_add", $this->pageData);

		$input = $this->request->getRawInput();
		$input['OverAllBudget_id'] = $value;
		$input['ActiveStatus'] = 'N';
		$input['GroupUserID'] = session('GroupUserID');
		$input['GroupTypeID'] = session('GroupTypeID');
		//print_r($input);
		//exit;
		// STEP1
		$client = new Client();
		$res = $client->post(Env("app.RestBaseURL") . '/api/DraftBudgetControlDoeb', [
			"body" => json_encode($input)
		]);
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);
		$DraftBudgetControl_id = $data['data'];

		echo "<script type='text/javascript'>window.location='" . base_url() . "draft_budget_control_doeb/edt/$DraftBudgetControl_id.0';</script>";
		exit();
	}

	public function store()
	{
		error_reporting(0);
		helper("form");
		$input = $this->request->getRawInput();

		try {
			$input = $this->request->getRawInput();
			$input['ActiveStatus'] = 'N';
			// STEP1
			$client = new Client();
			$res = $client->post(Env("app.RestBaseURL") . '/api/DraftBudgetControlDoeb', [
				"body" => json_encode($input)
			]);
			$data = $res->getBody()->getContents('json');
			$data = json_decode($data, true);
			$DraftBudgetControl_id = $data['data'];

			echo "<script type='text/javascript'>window.location='" . base_url() . "draft_budget_control_doeb/edt/$DraftBudgetControl_id.0';</script>";
			exit();
		} catch (Exception $e) {

			$this->pageData['action_page'] = "store";
			$this->pageData['dropdown_masterOverAllPlanOneYear'] = $this->dropdown->dropdown_masterOverAllBudgetOneYear();
			$this->pageData["data"] = null;

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
		$this->pageData['dropdown_masterOverAllPlanOneYear'] = $this->dropdown->dropdown_masterOverAllBudgetOneYear();

		$split = explode(".", $value);
		$this->pageData['DraftBudgetControl_id'] = $split[0];
		$this->pageData['DraftBudgetControlDetail_id'] = $split[1];
		$this->pageData['CostReference'] = $split[2];

		$client = new Client();
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/DraftBudgetControlDoeb/' . $split[0] . '/edit');
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);
		$this->pageData["data"] = $data['data'];

		return view($this->routeGroup . "/" . $this->routeGroup . "_add", $this->pageData);
	}

	public function addsub($value)
	{
		// iclude helper form
		error_reporting(0);
		helper("form");
		$this->pageData['action_page'] = "upd";
		$this->pageData['dropdown_masterOverAllPlanOneYear'] = $this->dropdown->dropdown_masterOverAllBudgetOneYear();
		$this->pageData['dropdown_StructureBudgetMain'] = $this->dropdown->dropdown_StructureBudgetMain();
		$this->pageData['dropdown_StructureBudgetMainLv2'] = $this->dropdown->dropdown_StructureBudgetMainLv2();
		$this->pageData['dropdown_StructureBudgetMainLv3'] = $this->dropdown->dropdown_StructureBudgetMainLv3();
		$this->pageData['dropdown_type_budget'] = $this->dropdown->dropdown_type_budget();
		$this->pageData['dropdown_CostReference'] = $this->dropdown->dropdown_CostReference();

		$client = new Client();
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/DraftBudgetControlDetailDoeb/' . $value . '/edit');
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);

		foreach ($data['data'] as $result_data_for_dropdown) {

			$DraftBudgetControlDetail_id_for_dropdown = $result_data_for_dropdown['DraftBudgetControlDetail_id'];
			if ($result_data_for_dropdown['ItemL1'] != '0' && $result_data_for_dropdown['ItemL1'] != ''):
				$this->pageData['dropdown_StructureBudgetMainLv2' . $DraftBudgetControlDetail_id_for_dropdown] = $this->dropdown->dropdown_StructureBudgetMainLv2_foropen($result_data_for_dropdown['ItemL1']);
			endif;
			if ($result_data_for_dropdown['ItemL1'] != '0' && $result_data_for_dropdown['ItemL1'] != '' && $result_data_for_dropdown['ItemL2'] != '0' && $result_data_for_dropdown['ItemL2'] != ''):
				$DraftBudgetControlDetail_id_all = $result_data_for_dropdown['ItemL1'] . "N" . $result_data_for_dropdown['ItemL2'];
				$this->pageData['dropdown_StructureBudgetMainLv3' . $DraftBudgetControlDetail_id_for_dropdown] = $this->dropdown->dropdown_StructureBudgetMainLv3_foropen($DraftBudgetControlDetail_id_all);
			endif;
		}

		//print_r($this->pageData['dropdown_StructureBudgetMainLv24']);
		$this->pageData["DraftBudgetDetail"] = $data['data'];
		$this->pageData["DraftBudgetControl_id"] = $value;

		$res2 = $client->request('GET', Env("app.RestBaseURL") . '/api/DraftBudgetControlDoeb/' . $value . '/edit');
		$data2 = $res2->getBody()->getContents('json');
		$data2 = json_decode($data2, true);

		foreach ($data2['data']["CreatePlanDetail"] as $result_data_for_dropdown_project) {

			$CreatePlanDetail_id_for_dropdown = $result_data_for_dropdown_project['CreatePlanDetail_id'];
			if ($result_data_for_dropdown_project['ItemL1'] != '0' && $result_data_for_dropdown_project['ItemL1Project'] != ''):
				$this->pageData['dropdown_StructureBudgetMainLv2Project' . $CreatePlanDetail_id_for_dropdown] = $this->dropdown->dropdown_StructureBudgetMainLv2_foropen($result_data_for_dropdown_project['ItemL1Project']);
			endif;
			if ($result_data_for_dropdown_project['ItemL1'] != '0' && $result_data_for_dropdown_project['ItemL1Project'] != '' && $result_data_for_dropdown_project['ItemL2Project'] != '0' && $result_data_for_dropdown_project['ItemL2Project'] != ''):
				$CreatePlanDetail_id_all = $result_data_for_dropdown_project['ItemL1Project'] . "N" . $result_data_for_dropdown_project['ItemL2Project'];
				$this->pageData['dropdown_StructureBudgetMainLv3Project' . $CreatePlanDetail_id_for_dropdown] = $this->dropdown->dropdown_StructureBudgetMainLv3_foropen($CreatePlanDetail_id_all);
			endif;
		}

		$this->pageData["data2"] = $data2['data'];

		return view($this->routeGroup . "/" . $this->routeGroup . "_add_detail", $this->pageData);
	}

	public function storesub()
	{
		error_reporting(0);
		helper("form");
		$input = $this->request->getRawInput();
		$client = new Client();
		if (!empty($input["add_data"])) {

			foreach ($input["CreatePlanDetail_id"] as $CreatePlanDetail_id) {
				$ItemL1Project = $input["ItemL1Project_" . $CreatePlanDetail_id];
				$ItemL2Project = $input["ItemL2Project_" . $CreatePlanDetail_id];
				$ItemL3Project = $input["ItemL3Project_" . $CreatePlanDetail_id];
				$DescriptionProject = $input["DescriptionProject_" . $CreatePlanDetail_id];
				//echo $ItemL1 . "-" . $ItemL2 . "-" . $ItemL3 . "-" . $ItemL3 . "-" . $Description;
				$input_detail_project = array(
					'ItemL1Project' => $ItemL1Project,
					'ItemL2Project' => $ItemL2Project,
					'ItemL3Project' => $ItemL3Project,
					'DescriptionProject' => $DescriptionProject
				);

				$res_project = $client->put(Env("app.RestBaseURL") . '/api/CreatePlanDetailBudgetDoeb/' . $CreatePlanDetail_id, [
					"body" => json_encode($input_detail_project)
				]);
				$data_project = $res_project->getBody()->getContents('json');
				$data_project = json_decode($data_project, true);
			}

			$DraftBudgetControl_id = $input['DraftBudgetControl_id'];
			// Step update detail data
			foreach ($input["DraftBudgetControlDetail_id"] as $DraftBudgetControlDetail_id) {
				$NameActivity = $input["NameActivity_" . $DraftBudgetControlDetail_id];
				$ItemL1 = $input["ItemL1_" . $DraftBudgetControlDetail_id];
				$ItemL2 = $input["ItemL2_" . $DraftBudgetControlDetail_id];
				$ItemL3 = $input["ItemL3_" . $DraftBudgetControlDetail_id];
				$Description = $input["Description_" . $DraftBudgetControlDetail_id];
				$TypeBudget = $input["TypeBudget_" . $DraftBudgetControlDetail_id];
				$CostReference = $input["CostReference_" . $DraftBudgetControlDetail_id];
				//echo $ItemL1 . "-" . $ItemL2 . "-" . $ItemL3 . "-" . $ItemL3 . "-" . $Description;
				$input_detail = array(
					'NameActivity' => $NameActivity,
					'ItemL1' => $ItemL1,
					'ItemL2' => $ItemL2,
					'ItemL3' => $ItemL3,
					'Description' => $Description,
					'TypeBudget' => $TypeBudget,
					'CostReference' => $CostReference,
					'GroupUserID' => session('GroupUserID'),
					'GroupTypeID' => session('GroupTypeID'),
				);

				$res = $client->put(Env("app.RestBaseURL") . '/api/DraftBudgetControlDetailDoeb/' . $DraftBudgetControlDetail_id, [
					"body" => json_encode($input_detail)
				]);
				$data = $res->getBody()->getContents('json');
				$data = json_decode($data, true);
			}

			// Step add row data
			$input_add = array(
				'DraftBudgetControl_id' => $DraftBudgetControl_id,
				'GroupUserID' => session('GroupUserID'),
				'GroupTypeID' => session('GroupTypeID'),
			);
			$res = $client->post(Env("app.RestBaseURL") . '/api/DraftBudgetControlDetailDoeb', [
				"body" => json_encode($input_add)
			]);
			$data = $res->getBody()->getContents('json');
			$data = json_decode($data, true);

			echo "<script type='text/javascript'>window.location='" . base_url() . "draft_budget_control_doeb/addsub/$DraftBudgetControl_id';</script>";
			exit();
		}

		if (!empty($input["del_data"])) {

			foreach ($input["CreatePlanDetail_id"] as $CreatePlanDetail_id) {
				$ItemL1Project = $input["ItemL1Project_" . $CreatePlanDetail_id];
				$ItemL2Project = $input["ItemL2Project_" . $CreatePlanDetail_id];
				$ItemL3Project = $input["ItemL3Project_" . $CreatePlanDetail_id];
				$DescriptionProject = $input["DescriptionProject_" . $CreatePlanDetail_id];
				//echo $ItemL1 . "-" . $ItemL2 . "-" . $ItemL3 . "-" . $ItemL3 . "-" . $Description;
				$input_detail_project = array(
					'ItemL1Project' => $ItemL1Project,
					'ItemL2Project' => $ItemL2Project,
					'ItemL3Project' => $ItemL3Project,
					'DescriptionProject' => $DescriptionProject
				);

				$res_project = $client->put(Env("app.RestBaseURL") . '/api/CreatePlanDetailBudgetDoeb/' . $CreatePlanDetail_id, [
					"body" => json_encode($input_detail_project)
				]);
				$data_project = $res_project->getBody()->getContents('json');
				$data_project = json_decode($data_project, true);
			}

			$DraftBudgetControl_id = $input['DraftBudgetControl_id'];
			// Step update detail data
			foreach ($input["DraftBudgetControlDetail_id"] as $DraftBudgetControlDetail_id) {
				$NameActivity = $input["NameActivity_" . $DraftBudgetControlDetail_id];
				$ItemL1 = $input["ItemL1_" . $DraftBudgetControlDetail_id];
				$ItemL2 = $input["ItemL2_" . $DraftBudgetControlDetail_id];
				$ItemL3 = $input["ItemL3_" . $DraftBudgetControlDetail_id];
				$Description = $input["Description_" . $DraftBudgetControlDetail_id];
				$TypeBudget = $input["TypeBudget_" . $DraftBudgetControlDetail_id];
				$CostReference = $input["CostReference_" . $DraftBudgetControlDetail_id];
				//echo $ItemL1 . "-" . $ItemL2 . "-" . $ItemL3 . "-" . $ItemL3 . "-" . $Description;
				$input_detail = array(
					'NameActivity' => $NameActivity,
					'ItemL1' => $ItemL1,
					'ItemL2' => $ItemL2,
					'ItemL3' => $ItemL3,
					'Description' => $Description,
					'TypeBudget' => $TypeBudget,
					'CostReference' => $CostReference,
					'GroupUserID' => session('GroupUserID'),
					'GroupTypeID' => session('GroupTypeID'),
				);

				$res = $client->put(Env("app.RestBaseURL") . '/api/DraftBudgetControlDetailDoeb/' . $DraftBudgetControlDetail_id, [
					"body" => json_encode($input_detail)
				]);
				$data = $res->getBody()->getContents('json');
				$data = json_decode($data, true);
			}

			// Step update detail data
			foreach ($input["DraftBudgetControlDetail_id_del"] as $DraftBudgetControlDetail_id) {

				$client->delete(Env("app.RestBaseURL") . '/api/DraftBudgetControlDetailDoeb/' . $DraftBudgetControlDetail_id, [
					"body" => json_encode($DraftBudgetControlDetail_id)
				]);
			}

			echo "<script type='text/javascript'>window.location='" . base_url() . "draft_budget_control_doeb/addsub/$DraftBudgetControl_id';</script>";
			exit();
		}

		if (!empty($input["btnSave"])) {

			foreach ($input["CreatePlanDetail_id"] as $CreatePlanDetail_id) {
				$ItemL1Project = $input["ItemL1Project_" . $CreatePlanDetail_id];
				$ItemL2Project = $input["ItemL2Project_" . $CreatePlanDetail_id];
				$ItemL3Project = $input["ItemL3Project_" . $CreatePlanDetail_id];
				$DescriptionProject = $input["DescriptionProject_" . $CreatePlanDetail_id];
				//echo $ItemL1 . "-" . $ItemL2 . "-" . $ItemL3 . "-" . $ItemL3 . "-" . $Description;
				$input_detail_project = array(
					'ItemL1Project' => $ItemL1Project,
					'ItemL2Project' => $ItemL2Project,
					'ItemL3Project' => $ItemL3Project,
					'DescriptionProject' => $DescriptionProject
				);

				$res_project = $client->put(Env("app.RestBaseURL") . '/api/CreatePlanDetailBudgetDoeb/' . $CreatePlanDetail_id, [
					"body" => json_encode($input_detail_project)
				]);
				$data_project = $res_project->getBody()->getContents('json');
				$data_project = json_decode($data_project, true);
			}

			$DraftBudgetControl_id = $input['DraftBudgetControl_id'];
			// Step update detail data
			foreach ($input["DraftBudgetControlDetail_id"] as $DraftBudgetControlDetail_id) {
				$NameActivity = $input["NameActivity_" . $DraftBudgetControlDetail_id];
				$ItemL1 = $input["ItemL1_" . $DraftBudgetControlDetail_id];
				$ItemL2 = $input["ItemL2_" . $DraftBudgetControlDetail_id];
				$ItemL3 = $input["ItemL3_" . $DraftBudgetControlDetail_id];
				$Description = $input["Description_" . $DraftBudgetControlDetail_id];
				$TypeBudget = $input["TypeBudget_" . $DraftBudgetControlDetail_id];
				$CostReference = $input["CostReference_" . $DraftBudgetControlDetail_id];
				//echo $ItemL1 . "-" . $ItemL2 . "-" . $ItemL3 . "-" . $ItemL3 . "-" . $Description;
				$input_detail = array(
					'NameActivity' => $NameActivity,
					'ItemL1' => $ItemL1,
					'ItemL2' => $ItemL2,
					'ItemL3' => $ItemL3,
					'Description' => $Description,
					'TypeBudget' => $TypeBudget,
					'CostReference' => $CostReference,
					'GroupUserID' => session('GroupUserID'),
					'GroupTypeID' => session('GroupTypeID'),
				);

				$res = $client->put(Env("app.RestBaseURL") . '/api/DraftBudgetControlDetailDoeb/' . $DraftBudgetControlDetail_id, [
					"body" => json_encode($input_detail)
				]);
				$data = $res->getBody()->getContents('json');
				$data = json_decode($data, true);
			}

			$input['ActiveStatus'] = 'N';
			$res = $client->put(Env("app.RestBaseURL") . '/api/DraftBudgetControlDoeb/' . $input['DraftBudgetControl_id'], [
				"body" => json_encode($input)
			]);
			$data = $res->getBody()->getContents('json');
			$data = json_decode($data, true);

			echo "<script type='text/javascript'>parent.window.location='" . base_url() . "draft_budget_control_doeb';</script>";
			exit();
		}

		if (!empty($input["btnConfirm"])) {

			foreach ($input["CreatePlanDetail_id"] as $CreatePlanDetail_id) {
				$ItemL1Project = $input["ItemL1Project_" . $CreatePlanDetail_id];
				$ItemL2Project = $input["ItemL2Project_" . $CreatePlanDetail_id];
				$ItemL3Project = $input["ItemL3Project_" . $CreatePlanDetail_id];
				$DescriptionProject = $input["DescriptionProject_" . $CreatePlanDetail_id];
				//echo $ItemL1 . "-" . $ItemL2 . "-" . $ItemL3 . "-" . $ItemL3 . "-" . $Description;
				$input_detail_project = array(
					'ItemL1Project' => $ItemL1Project,
					'ItemL2Project' => $ItemL2Project,
					'ItemL3Project' => $ItemL3Project,
					'DescriptionProject' => $DescriptionProject
				);

				$res_project = $client->put(Env("app.RestBaseURL") . '/api/CreatePlanDetailBudgetDoeb/' . $CreatePlanDetail_id, [
					"body" => json_encode($input_detail_project)
				]);
				$data_project = $res_project->getBody()->getContents('json');
				$data_project = json_decode($data_project, true);
			}

			$DraftBudgetControl_id = $input['DraftBudgetControl_id'];
			// Step update detail data
			foreach ($input["DraftBudgetControlDetail_id"] as $DraftBudgetControlDetail_id) {

				$NameActivity = $input["NameActivity_" . $DraftBudgetControlDetail_id];
				$ItemL1 = $input["ItemL1_" . $DraftBudgetControlDetail_id];
				$ItemL2 = $input["ItemL2_" . $DraftBudgetControlDetail_id];
				$ItemL3 = $input["ItemL3_" . $DraftBudgetControlDetail_id];
				$Description = $input["Description_" . $DraftBudgetControlDetail_id];
				$TypeBudget = $input["TypeBudget_" . $DraftBudgetControlDetail_id];
				$CostReference = $input["CostReference_" . $DraftBudgetControlDetail_id];
				//echo $ItemL1 . "-" . $ItemL2 . "-" . $ItemL3 . "-" . $ItemL3 . "-" . $Description;
				$input_detail = array(
					'NameActivity' => $NameActivity,
					'ItemL1' => $ItemL1,
					'ItemL2' => $ItemL2,
					'ItemL3' => $ItemL3,
					'Description' => $Description,
					'TypeBudget' => $TypeBudget,
					'CostReference' => $CostReference,
					'GroupUserID' => session('GroupUserID'),
					'GroupTypeID' => session('GroupTypeID'),
				);

				$res = $client->put(Env("app.RestBaseURL") . '/api/DraftBudgetControlDetailDoeb/' . $DraftBudgetControlDetail_id, [
					"body" => json_encode($input_detail)
				]);
				$data = $res->getBody()->getContents('json');
				$data = json_decode($data, true);
			}

			$input['ActiveStatus'] = 'Y';
			$res = $client->put(Env("app.RestBaseURL") . '/api/DraftBudgetControlDoeb/' . $input['DraftBudgetControl_id'], [
				"body" => json_encode($input)
			]);
			$data = $res->getBody()->getContents('json');
			$data = json_decode($data, true);

			echo "<script type='text/javascript'>parent.window.location='" . base_url() . "draft_budget_control_doeb';</script>";
			exit();
		}

		// Cikck Sub ให้บันทึกหน้าหลักก่อนแล้วไปหน้าถัดไป ส่วน Project
		for ($sss = 1; $sss <= $input['count_record_project']; $sss++) {

			if (!empty($input["FlagHideForProject_" . $sss])) {

				foreach ($input["CreatePlanDetail_id"] as $CreatePlanDetail_id) {
					$ItemL1Project = $input["ItemL1Project_" . $CreatePlanDetail_id];
					$ItemL2Project = $input["ItemL2Project_" . $CreatePlanDetail_id];
					$ItemL3Project = $input["ItemL3Project_" . $CreatePlanDetail_id];
					$DescriptionProject = $input["DescriptionProject_" . $CreatePlanDetail_id];
					//echo $ItemL1 . "-" . $ItemL2 . "-" . $ItemL3 . "-" . $ItemL3 . "-" . $Description;
					$input_detail_project = array(
						'ItemL1Project' => $ItemL1Project,
						'ItemL2Project' => $ItemL2Project,
						'ItemL3Project' => $ItemL3Project,
						'DescriptionProject' => $DescriptionProject
					);

					$res_project = $client->put(Env("app.RestBaseURL") . '/api/CreatePlanDetailBudgetDoeb/' . $CreatePlanDetail_id, [
						"body" => json_encode($input_detail_project)
					]);
					$data_project = $res_project->getBody()->getContents('json');
					$data_project = json_decode($data_project, true);
				}

				$value_hide = $input["CreatePlanDetailHide_" . $sss];
				$client->delete(Env("app.RestBaseURL") . '/api/CreatePlanDetailBudgetDoeb/' . $value_hide, [
					"body" => json_encode($value_hide)
				]);

				$DraftBudgetControl_id = $input['DraftBudgetControl_id'];
				// Step update detail data
				foreach ($input["DraftBudgetControlDetail_id"] as $DraftBudgetControlDetail_id) {
					$NameActivity = $input["NameActivity_" . $DraftBudgetControlDetail_id];
					$ItemL1 = $input["ItemL1_" . $DraftBudgetControlDetail_id];
					$ItemL2 = $input["ItemL2_" . $DraftBudgetControlDetail_id];
					$ItemL3 = $input["ItemL3_" . $DraftBudgetControlDetail_id];
					$Description = $input["Description_" . $DraftBudgetControlDetail_id];
					$TypeBudget = $input["TypeBudget_" . $DraftBudgetControlDetail_id];
					$CostReference = $input["CostReference_" . $DraftBudgetControlDetail_id];
					//echo $ItemL1 . "-" . $ItemL2 . "-" . $ItemL3 . "-" . $ItemL3 . "-" . $Description;
					$input_detail = array(
						'NameActivity' => $NameActivity,
						'ItemL1' => $ItemL1,
						'ItemL2' => $ItemL2,
						'ItemL3' => $ItemL3,
						'Description' => $Description,
						'TypeBudget' => $TypeBudget,
						'CostReference' => $CostReference,
						'GroupUserID' => session('GroupUserID'),
						'GroupTypeID' => session('GroupTypeID'),
					);

					$res = $client->put(Env("app.RestBaseURL") . '/api/DraftBudgetControlDetailDoeb/' . $DraftBudgetControlDetail_id, [
						"body" => json_encode($input_detail)
					]);
					$data = $res->getBody()->getContents('json');
					$data = json_decode($data, true);
				}

				echo "<script type='text/javascript'>window.location='" . base_url() . "draft_budget_control_doeb/addsub/$DraftBudgetControl_id';</script>";
				exit();
			}
		}

		// Cikck Sub ให้บันทึกหน้าหลักก่อนแล้วไปหน้าถัดไป
		for ($iii = 1; $iii <= $input['count_record']; $iii++) {

			if (!empty($input["AddDataDetail_" . $iii])) {

				foreach ($input["CreatePlanDetail_id"] as $CreatePlanDetail_id) {
					$ItemL1Project = $input["ItemL1Project_" . $CreatePlanDetail_id];
					$ItemL2Project = $input["ItemL2Project_" . $CreatePlanDetail_id];
					$ItemL3Project = $input["ItemL3Project_" . $CreatePlanDetail_id];
					$DescriptionProject = $input["DescriptionProject_" . $CreatePlanDetail_id];
					//echo $ItemL1 . "-" . $ItemL2 . "-" . $ItemL3 . "-" . $ItemL3 . "-" . $Description;
					$input_detail_project = array(
						'ItemL1Project' => $ItemL1Project,
						'ItemL2Project' => $ItemL2Project,
						'ItemL3Project' => $ItemL3Project,
						'DescriptionProject' => $DescriptionProject
					);

					$res_project = $client->put(Env("app.RestBaseURL") . '/api/CreatePlanDetailBudgetDoeb/' . $CreatePlanDetail_id, [
						"body" => json_encode($input_detail_project)
					]);
					$data_project = $res_project->getBody()->getContents('json');
					$data_project = json_decode($data_project, true);
				}

				$DraftBudgetControl_id = $input['DraftBudgetControl_id'];
				// Step update detail data
				foreach ($input["DraftBudgetControlDetail_id"] as $DraftBudgetControlDetail_id) {
					$NameActivity = $input["NameActivity_" . $DraftBudgetControlDetail_id];
					$ItemL1 = $input["ItemL1_" . $DraftBudgetControlDetail_id];
					$ItemL2 = $input["ItemL2_" . $DraftBudgetControlDetail_id];
					$ItemL3 = $input["ItemL3_" . $DraftBudgetControlDetail_id];
					$Description = $input["Description_" . $DraftBudgetControlDetail_id];
					$TypeBudget = $input["TypeBudget_" . $DraftBudgetControlDetail_id];
					$CostReference = $input["CostReference_" . $DraftBudgetControlDetail_id];
					//echo $ItemL1 . "-" . $ItemL2 . "-" . $ItemL3 . "-" . $ItemL3 . "-" . $Description;
					$input_detail = array(
						'NameActivity' => $NameActivity,
						'ItemL1' => $ItemL1,
						'ItemL2' => $ItemL2,
						'ItemL3' => $ItemL3,
						'Description' => $Description,
						'TypeBudget' => $TypeBudget,
						'CostReference' => $CostReference,
						'GroupUserID' => session('GroupUserID'),
						'GroupTypeID' => session('GroupTypeID'),
					);

					$res = $client->put(Env("app.RestBaseURL") . '/api/DraftBudgetControlDetailDoeb/' . $DraftBudgetControlDetail_id, [
						"body" => json_encode($input_detail)
					]);
					$data = $res->getBody()->getContents('json');
					$data = json_decode($data, true);
				}

				$input['ActiveStatus'] = 'N';
				$res = $client->put(Env("app.RestBaseURL") . '/api/DraftBudgetControlDoeb/' . $input['DraftBudgetControl_id'], [
					"body" => json_encode($input)
				]);
				$data = $res->getBody()->getContents('json');
				$data = json_decode($data, true);

				$value_next = $input["IDALL_" . $iii];

				echo "<script type='text/javascript'>parent.window.location='" . base_url() . "draft_budget_control_doeb/edt/$value_next';</script>";
				exit();
			}
		}
	}

	public function edtsub($value)
	{
		// iclude helper form
		error_reporting(0);
		helper("form");
		$this->pageData['action_page'] = "updsub";
		$this->pageData['dropdown_master_unit'] = $this->dropdown->dropdown_master_unit();

		$split = explode(".", $value);
		$this->pageData['DraftBudgetControl_id'] = $split[0];
		$this->pageData['DraftBudgetControlDetail_id'] = $split[1];
		$this->pageData['CostReference'] = $split[2];

		$client = new Client();
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/DraftBudgetControlDetailSubDoeb/' . $split[1] . '/edit');
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);

		$this->pageData["DraftBudgetDetailSub"] = $data['data'];
		return view($this->routeGroup . "/" . $this->routeGroup . "_add_detailsub", $this->pageData);
	}

	public function edtupdatesub()
	{
		error_reporting(0);
		helper("form");
		$input = $this->request->getRawInput();
		$client = new Client();
		if (!empty($input["btnSaveSub"])) {

			$DraftBudgetControl_id = $input['DraftBudgetControl_id'];
			$DraftBudgetControlDetail_id = $input['DraftBudgetControlDetail_id'];
			// Step update detail data
			$client = new Client();
			$client->delete(Env("app.RestBaseURL") . '/api/DraftBudgetControlDetailSubDoeb/' . $input['DraftBudgetControlDetail_id'], [
				"body" => json_encode($input['DraftBudgetControlDetail_id'])
			]);
			for ($i = 0; $i < count($input['NameDetail']); $i++) {

				if ($input['NameDetail'][$i] != '' && $input['NameDetail'][$i] != null && $input['DraftBudgetControlDetail_id'] != '' && $input['DraftBudgetControlDetail_id'] != null) {
					$postData_detail = [
						"NameDetail" => $input['NameDetail'][$i],
						"UnitManagement_id" => $input['UnitManagement_id'][$i],
						"quantity" => $input['quantity'][$i],
						"price" => $input['price'][$i],
						"price_all" => $input['price_all'][$i],
						"Description" => $input['Description'][$i],
						"DraftBudgetControlDetail_id" => $input['DraftBudgetControlDetail_id'],
						"DraftBudgetControl_id" => $input['DraftBudgetControl_id'],
						'GroupUserID' => session('GroupUserID'),
						'GroupTypeID' => session('GroupTypeID'),
					];

					$client->post(Env("app.RestBaseURL") . '/api/DraftBudgetControlDetailSubDoeb', [
						"body" => json_encode($postData_detail)
					]);
				}
			}

			echo "<script type='text/javascript'>window.location='" . base_url() . "draft_budget_control_doeb/addsub/$DraftBudgetControl_id';</script>";
			exit();
		}

		if (!empty($input["btnBackSub"])) {
			$DraftBudgetControl_id = $input['DraftBudgetControl_id'];
			echo "<script type='text/javascript'>window.location='" . base_url() . "draft_budget_control_doeb/addsub/$DraftBudgetControl_id';</script>";
			exit();
		}

		if (!empty($input["del_data"])) {

			$DraftBudgetControl_id = $input['DraftBudgetControl_id'];

			// Step update detail data
			foreach ($input["DraftBudgetControlDetail_id_del"] as $DraftBudgetControlDetail_id) {

				$client->delete(Env("app.RestBaseURL") . '/api/DraftBudgetControlDetailDoeb/' . $DraftBudgetControlDetail_id, [
					"body" => json_encode($DraftBudgetControlDetail_id)
				]);
			}

			echo "<script type='text/javascript'>window.location='" . base_url() . "draft_budget_control_doeb/addsub/$DraftBudgetControl_id';</script>";
			exit();
		}
	}

	public function update()
	{
		error_reporting(0);
		helper("form");

		$input = $this->request->getRawInput();
		if (!empty($input["btnSave"])) {
			$input['ActiveStatus'] = 'N';
		} else {
			$input['ActiveStatus'] = 'Y';
		}

		$client = new Client();
		$res = $client->put(Env("app.RestBaseURL") . '/api/DraftBudgetControlDoeb/' . $input['DraftBudgetControl_id'], [
			"body" => json_encode($input)
		]);
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);

		if (!empty($input["btnSave"])) {

			// Step update detail data
			foreach ($input["DraftBudgetControlDetail_id"] as $DraftBudgetControlDetail_id) {

				$NameActivity = $input["NameActivity_" . $DraftBudgetControlDetail_id];
				$ItemL1 = $input["ItemL1_" . $DraftBudgetControlDetail_id];
				$ItemL2 = $input["ItemL2_" . $DraftBudgetControlDetail_id];
				$ItemL3 = $input["ItemL3_" . $DraftBudgetControlDetail_id];
				$Description = $input["Description_" . $DraftBudgetControlDetail_id];
				$TypeBudget = $input["TypeBudget_" . $DraftBudgetControlDetail_id];
				$CostReference = $input["CostReference_" . $DraftBudgetControlDetail_id];
				//echo $ItemL1 . "-" . $ItemL2 . "-" . $ItemL3 . "-" . $ItemL3 . "-" . $Description;
				$input_detail = array(
					'NameActivity' => $NameActivity,
					'ItemL1' => $ItemL1,
					'ItemL2' => $ItemL2,
					'ItemL3' => $ItemL3,
					'Description' => $Description,
					'TypeBudget' => $TypeBudget,
					'CostReference' => $CostReference,
					'GroupUserID' => session('GroupUserID'),
					'GroupTypeID' => session('GroupTypeID'),
				);

				$res = $client->put(Env("app.RestBaseURL") . '/api/DraftBudgetControlDetailDoeb/' . $DraftBudgetControlDetail_id, [
					"body" => json_encode($input_detail)
				]);
				$data = $res->getBody()->getContents('json');
				$data = json_decode($data, true);
			}

			return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('บันทึกเรียบร้อย','' , '');");
		}
	}

	public function delete($id)
	{
		// iclude helper form
		helper("form");
		$client = new Client();
		$client->delete(Env("app.RestBaseURL") . '/api/DraftBudgetControlDoeb/' . $id, [
			"body" => json_encode($id)
		]);
		return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('ลบรายการเรียบร้อย','' , '');");
	}

	public function view($value)
	{
		// iclude helper form
		error_reporting(0);
		helper("form");
		$this->pageData['action_page'] = "upd";
		$this->pageData['dropdown_masterOverAllPlanOneYear'] = $this->dropdown->dropdown_masterOverAllBudgetOneYear();
		$this->pageData['dropdown_StructureBudgetMain'] = $this->dropdown->dropdown_StructureBudgetMain();
		$this->pageData['dropdown_StructureBudgetMainLv2'] = $this->dropdown->dropdown_StructureBudgetMainLv2();
		$this->pageData['dropdown_StructureBudgetMainLv3'] = $this->dropdown->dropdown_StructureBudgetMainLv3();
		$this->pageData['dropdown_type_budget'] = $this->dropdown->dropdown_type_budget();
		$this->pageData['dropdown_master_unit'] = $this->dropdown->dropdown_master_unit();
		$this->pageData['dropdown_CostReference'] = $this->dropdown->dropdown_CostReference();

		$client = new Client();

		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/DraftBudgetControlDoeb/' . $value . '/edit');
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);
		$this->pageData["data_main"] = $data['data'];

		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/DraftBudgetControlDetailDoeb/' . $value . '/edit');
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);

		foreach ($data['data'] as $result_data_for_dropdown) {

			$DraftBudgetControlDetail_id_for_dropdown = $result_data_for_dropdown['DraftBudgetControlDetail_id'];
			if ($result_data_for_dropdown['ItemL1'] != '0' && $result_data_for_dropdown['ItemL1'] != ''):
				$this->pageData['dropdown_StructureBudgetMainLv2' . $DraftBudgetControlDetail_id_for_dropdown] = $this->dropdown->dropdown_StructureBudgetMainLv2_foropen($result_data_for_dropdown['ItemL1']);
			endif;
			if ($result_data_for_dropdown['ItemL1'] != '0' && $result_data_for_dropdown['ItemL1'] != '' && $result_data_for_dropdown['ItemL2'] != '0' && $result_data_for_dropdown['ItemL2'] != ''):
				$DraftBudgetControlDetail_id_all = $result_data_for_dropdown['ItemL1'] . "N" . $result_data_for_dropdown['ItemL2'];
				$this->pageData['dropdown_StructureBudgetMainLv3' . $DraftBudgetControlDetail_id_for_dropdown] = $this->dropdown->dropdown_StructureBudgetMainLv3_foropen($DraftBudgetControlDetail_id_all);
			endif;
		}

		$res2 = $client->request('GET', Env("app.RestBaseURL") . '/api/DraftBudgetControlDoeb/' . $value . '/edit');
		$data2 = $res2->getBody()->getContents('json');
		$data2 = json_decode($data2, true);

		foreach ($data2['data']["CreatePlanDetail"] as $result_data_for_dropdown_project) {

			$CreatePlanDetail_id_for_dropdown = $result_data_for_dropdown_project['CreatePlanDetail_id'];
			if ($result_data_for_dropdown_project['ItemL1'] != '0' && $result_data_for_dropdown_project['ItemL1Project'] != ''):
				$this->pageData['dropdown_StructureBudgetMainLv2Project' . $CreatePlanDetail_id_for_dropdown] = $this->dropdown->dropdown_StructureBudgetMainLv2_foropen($result_data_for_dropdown_project['ItemL1Project']);
			endif;
			if ($result_data_for_dropdown_project['ItemL1'] != '0' && $result_data_for_dropdown_project['ItemL1Project'] != '' && $result_data_for_dropdown_project['ItemL2Project'] != '0' && $result_data_for_dropdown_project['ItemL2Project'] != ''):
				$CreatePlanDetail_id_all = $result_data_for_dropdown_project['ItemL1Project'] . "N" . $result_data_for_dropdown_project['ItemL2Project'];
				$this->pageData['dropdown_StructureBudgetMainLv3Project' . $CreatePlanDetail_id_for_dropdown] = $this->dropdown->dropdown_StructureBudgetMainLv3_foropen($CreatePlanDetail_id_all);
			endif;
		}

		$this->pageData["data2"] = $data2['data'];

		//print_r($this->pageData['dropdown_StructureBudgetMainLv24']);
		$this->pageData["DraftBudgetDetail"] = $data['data'];
		$this->pageData["DraftBudgetControl_id"] = $value;
		return view($this->routeGroup . "/" . $this->routeGroup . "_view", $this->pageData);
	}
}
