<?php

namespace App\Controllers;

//use App\Models\FUNCTION_REUSE\check_session;

use App\Models\dropdown_reuse;
use GuzzleHttp\Client;
use Shuchkin\SimpleXLSXGen;

class Allocate_Budget_doeb_Controller extends BaseController
{
	protected $programCode = "Allocate_Budget_doeb";
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
			"menuName" => "จัดสรรงบประมาณ"
		];
	}
	public function index()
	{
		error_reporting(0);
		helper("form");

		$client = new Client();
		$input = $this->request->getRawInput();
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/CreateBudgetControlDoeb', [
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
		$this->pageData['action_page'] = "upd";
		$this->pageData['dropdown_masterOverAllPlanOneYear'] = $this->dropdown->dropdown_masterOverAllBudgetOneYear();
		$this->pageData['dropdown_StructureBudgetMain'] = $this->dropdown->dropdown_StructureBudgetMain();
		$this->pageData['dropdown_StructureBudgetMainLv2'] = $this->dropdown->dropdown_StructureBudgetMainLv2();
		$this->pageData['dropdown_StructureBudgetMainLv3'] = $this->dropdown->dropdown_StructureBudgetMainLv3();
		$this->pageData['dropdown_type_budget'] = $this->dropdown->dropdown_type_budget();
		$this->pageData['dropdown_master_unit'] = $this->dropdown->dropdown_master_unit();
		$this->pageData['dropdown_CostReference'] = $this->dropdown->dropdown_CostReference();

		$client = new Client();

		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/DraftBudgetControlDoebALL2/' . $value . '/edit');
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);
		$this->pageData["data_main"] = $data['data'];
		$this->pageData["CreateBudgetControl_id"] = $value;

		return view($this->routeGroup . "/" . $this->routeGroup . "_add", $this->pageData);
	}

	public function edit($value)
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

		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/DraftBudgetControlDoebALL2/' . $value . '/edit');
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);
		$this->pageData["data_main"] = $data['data'];

		//print_r($data['data']['return_data_01']);
		//exit;
		$this->pageData["OverAllBudget_id"] = $value;

		return view($this->routeGroup . "/" . $this->routeGroup . "_add", $this->pageData);
	}

	public function edit_2($value)
	{
		$input = $this->request->getRawInput();

		$input['ActiveStatusChangeALL'] = 'Y';
		$input['GroupUserID'] = session('GroupUserID');
		$input['OverAllBudget_id'] = $value;

		$client = new Client();
		// จัดสรรงบประมาณ
		$res = $client->put(Env("app.RestBaseURL") . '/api/CreateBudgetControlChangeDoeb/' . $input['OverAllBudget_id'], [
			"body" => json_encode($input)
		]);
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);

		return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('บันทึกเรียบร้อย','' , '');");
	}

	public function edit_3($value)
	{
		// iclude helper form
		error_reporting(0);
		helper("form");

		$keys = explode(".", $value);
		$OverAllBudget_id = $keys[0];
		$ChangeBudgetPlanID = $keys[1];

		$this->pageData['action_page'] = "upd2";
		$this->pageData['dropdown_masterOverAllPlanOneYear'] = $this->dropdown->dropdown_masterOverAllBudgetOneYear();
		$this->pageData['dropdown_StructureBudgetMain'] = $this->dropdown->dropdown_StructureBudgetMain();
		$this->pageData['dropdown_StructureBudgetMainLv2'] = $this->dropdown->dropdown_StructureBudgetMainLv2();
		$this->pageData['dropdown_StructureBudgetMainLv3'] = $this->dropdown->dropdown_StructureBudgetMainLv3();
		$this->pageData['dropdown_type_budget'] = $this->dropdown->dropdown_type_budget();
		$this->pageData['dropdown_master_unit'] = $this->dropdown->dropdown_master_unit();
		$this->pageData['dropdown_CostReference'] = $this->dropdown->dropdown_CostReference();

		$client = new Client();

		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/DraftBudgetControlDoebALL3/' . $OverAllBudget_id . '/edit');
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);
		$this->pageData["data_main"] = $data['data'];

		//print_r($data['data']['return_data_01']);
		//exit;
		$this->pageData["OverAllBudget_id"] = $OverAllBudget_id;
		$this->pageData["ChangeBudgetPlanID"] = $ChangeBudgetPlanID;

		return view($this->routeGroup . "/" . $this->routeGroup . "_add_2", $this->pageData);
	}

	public function update()
	{
		error_reporting(0);
		helper("form");

		$input = $this->request->getRawInput();
		if (!empty($input["btnConfirm"])) {
			$input['ActiveStatusFinalALL'] = 'Y';
		} else {
			$input['ActiveStatusFinalALL'] = 'N';
		}

		$client = new Client();
		// จัดสรรงบประมาณ
		$res = $client->put(Env("app.RestBaseURL") . '/api/CreateBudgetControlDetailTypeALLDoeb/' . $input['OverAllBudget_id'], [
			"body" => json_encode($input)
		]);
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);

		// พ.ร.บ.
		$client->delete(Env("app.RestBaseURL") . '/api/MappingBudgetActivityItemAllDoeb/' . $input['OverAllBudget_id'], [
			"body" => json_encode($input['OverAllBudget_id'])
		]);
		foreach ($input["count_data_ft"] as $count_data_ft) {
			$Budget01 = $input["Budget01_" . $count_data_ft];
			$ItemL3Project = $input["ItemL3_" . $count_data_ft];

			$input_detail_ft = array(
				'Budget01' => $Budget01,
				'ItemL3Project' => $ItemL3Project,
				'OverAllBudget_id' => $input['OverAllBudget_id'],
				'GroupUserID' => session('GroupUserID'),
			);
			$res = $client->post(Env("app.RestBaseURL") . '/api/MappingBudgetActivityItemAllDoeb', [
				"body" => json_encode($input_detail_ft)
			]);
			$data = $res->getBody()->getContents('json');
			$data = json_decode($data, true);
		}

		// โครงการ
		foreach ($input["count_data_01"] as $count_data_01) {
			$Budget01Type1 = $input["Budget01_Type1_" . $count_data_01];
			$Budget02Type1 = $input["Budget02_Type1_" . $count_data_01];
			$BudgetNegativeType1 = $input["BudgetNegative_Type1_" . $count_data_01];
			$BudgetPercentageType1 = $input["BudgetPercentage_Type1_" . $count_data_01];
			$CreatePlanDetail_idType1 = $input["CreatePlanDetail_id_Type1_" . $count_data_01];

			$input_detail_01 = array(
				'Budget01' => $Budget01Type1,
				'Budget02' => $Budget02Type1,
				'BudgetNegative' => $BudgetNegativeType1,
				'BudgetPercentage' => $BudgetPercentageType1,
				'CreatePlanDetail_id' => $CreatePlanDetail_idType1,
			);

			$res = $client->put(Env("app.RestBaseURL") . '/api/CreateBudgetControlDetailType1Doeb/' . $CreatePlanDetail_idType1, [
				"body" => json_encode($input_detail_01)
			]);
			$data = $res->getBody()->getContents('json');
			$data = json_decode($data, true);
		}

		// กิจกรรมภายในหน่วยงาน
		foreach ($input["count_data_03"] as $count_data_03) {
			$Budget01Type3 = $input["Budget01_Type3_" . $count_data_03];
			$Budget02Type3 = $input["Budget02_Type3_" . $count_data_03];
			$BudgetNegativeType3 = $input["BudgetNegative_Type3_" . $count_data_03];
			$BudgetPercentageType3 = $input["BudgetPercentage_Type3_" . $count_data_03];
			$DraftBudgetControlDetail_id_Type3 = $input["DraftBudgetControlDetail_id_Type3_" . $count_data_03];

			$input_detail_03 = array(
				'Budget01' => $Budget01Type3,
				'Budget02' => $Budget02Type3,
				'BudgetNegative' => $BudgetNegativeType3,
				'BudgetPercentage' => $BudgetPercentageType3,
				'DraftBudgetControlDetail_id' => $DraftBudgetControlDetail_id_Type3,
			);

			//print_r($input_detail_03);
			//echo "<hr />";

			$res = $client->put(Env("app.RestBaseURL") . '/api/CreateBudgetControlDetailType2Doeb/' . $DraftBudgetControlDetail_id_Type3, [
				"body" => json_encode($input_detail_03)
			]);
			$data = $res->getBody()->getContents('json');
			$data = json_decode($data, true);
		}

		if (!empty($input["search_excel"])) {

			$this->pageData["filename"] = "จัดสรรงบประมาณ" . date('d-m-Y_H-i-s');
			$this->pageData["export_excel"] = "Y";

			$res = $client->request('GET', Env("app.RestBaseURL") . '/api/DraftBudgetControlDoebALL2/' . $input['OverAllBudget_id'] . '/edit');
			$data = $res->getBody()->getContents('json');
			$data = json_decode($data, true);
			$this->pageData["data_main"] = $data['data'];

			//print_r($data['data']['return_data_01']);
			//exit;
			$this->pageData["OverAllBudget_id"] = $input['OverAllBudget_id'];

			return view($this->routeGroup . "/" . $this->routeGroup . "_add", $this->pageData);
		} else {
			return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('บันทึกเรียบร้อย','' , '');");
		}
	}

	public function update2()
	{
		error_reporting(0);
		helper("form");

		$input = $this->request->getRawInput();
		if (!empty($input["btnConfirm"])) {
			$input['ActiveStatusFinalALL'] = 'Y';
		} else {
			$input['ActiveStatusFinalALL'] = 'N';
		}
		$input['GroupUserID'] = session('GroupUserID');

		$client = new Client();

		// อัพเดท Main
		$res = $client->put(Env("app.RestBaseURL") . '/api/ChangeBudgetPlanDoeb/' . $input['ChangeBudgetPlanID'], [
			"body" => json_encode($input)
		]);

		// clear ของเดิม
		$client->delete(Env("app.RestBaseURL") . '/api/ChangeBudgetPlanDoeb/' . $input['ChangeBudgetPlanID'], [
			"body" => json_encode($input['ChangeBudgetPlanID'])
		]);

		// นำเข้าโครงการ
		foreach ($input["count_data_01"] as $count_data_01) {
			$BudgetChange01Type1 = $input["BudgetChange01_Type1_" . $count_data_01];
			$BudgetChange02Type1 = $input["BudgetChange02_Type1_" . $count_data_01];
			$BudgetChange03Type1 = $input["BudgetChange03_Type1_" . $count_data_01];
			$BudgetChange04Type1 = $input["BudgetChange04_Type1_" . $count_data_01];
			$ItemL3_Type1 = $input["ItemL3_Type1_" . $count_data_01];

			$Budget02Type1 = $input["Budget02_Type1_" . $count_data_01];
			$CreatePlanDetail_idType1 = $input["CreatePlanDetail_id_Type1_" . $count_data_01];

			$input_detail_01 = array(
				'ChangeBudgetPlanID' => $input['ChangeBudgetPlanID'],
				'OverAllBudget_id' => $input['OverAllBudget_id'],
				'BudgetChange01' => str_replace(',', '', $BudgetChange01Type1),
				'BudgetChange02' => str_replace(',', '', $BudgetChange02Type1),
				'BudgetChange03' => str_replace(',', '', $BudgetChange03Type1),
				'BudgetChange04' => str_replace(',', '', $BudgetChange04Type1),

				'BudgetChange05' => str_replace(',', '', $Budget02Type1),
				'CreatePlanDetail_id' => $CreatePlanDetail_idType1,
				'TypeData' => 'CreatePlanDetail_id',
				'DataId' => $CreatePlanDetail_idType1,
				'ItemL3Project' => $ItemL3_Type1,
				'GroupUserID' => session('GroupUserID'),
			);
			//print_r($input_detail_01);
			/*
			$res = $client->put(Env("app.RestBaseURL") . '/api/CreateBudgetControlChangeDoeb/' . $CreatePlanDetail_idType1, [
				"body" => json_encode($input_detail_01)
			]);
			$data = $res->getBody()->getContents('json');
			$data = json_decode($data, true);
			*/
			$res = $client->post(Env("app.RestBaseURL") . '/api/ChangeBudgetPlanDoeb', [
				"body" => json_encode($input_detail_01)
			]);
			$data = $res->getBody()->getContents('json');
			$data = json_decode($data, true);
		}

		// นำเข้ากิจกรรมภายในหน่วยงาน
		foreach ($input["count_data_03"] as $count_data_03) {
			$BudgetChange01Type3 = $input["BudgetChange01_Type3_" . $count_data_03];
			$BudgetChange02Type3 = $input["BudgetChange02_Type3_" . $count_data_03];
			$BudgetChange03Type3 = $input["BudgetChange03_Type3_" . $count_data_03];
			$BudgetChange04Type3 = $input["BudgetChange04_Type3_" . $count_data_03];
			$ItemL3_Type3 = $input["ItemL3_Type3_" . $count_data_03];

			$Budget02Type3 = $input["Budget02_Type3_" . $count_data_03];
			$DraftBudgetControlDetail_id_Type3 = $input["DraftBudgetControlDetail_id_Type3_" . $count_data_03];

			$input_detail_03 = array(
				'ChangeBudgetPlanID' => $input['ChangeBudgetPlanID'],
				'OverAllBudget_id' => $input['OverAllBudget_id'],
				'BudgetChange01' => str_replace(',', '', $BudgetChange01Type3),
				'BudgetChange02' => str_replace(',', '', $BudgetChange02Type3),
				'BudgetChange03' => str_replace(',', '', $BudgetChange03Type3),
				'BudgetChange04' => str_replace(',', '', $BudgetChange04Type3),

				'BudgetChange05' => str_replace(',', '', $Budget02Type3),
				'DraftBudgetControlDetail_id' => $DraftBudgetControlDetail_id_Type3,
				'TypeData' => 'DraftBudgetControlDetail_id',
				'DataId' => $DraftBudgetControlDetail_id_Type3,
				'ItemL3Project' => $ItemL3_Type3,
				'GroupUserID' => session('GroupUserID'),
			);

			//print_r($input_detail_03);
			//echo "<hr />";
			/*
			$res = $client->put(Env("app.RestBaseURL") . '/api/CreateBudgetControlChangeDoeb/' . $DraftBudgetControlDetail_id_Type3, [
				"body" => json_encode($input_detail_03)
			]);
			$data = $res->getBody()->getContents('json');
			$data = json_decode($data, true);
			*/
			$res = $client->post(Env("app.RestBaseURL") . '/api/ChangeBudgetPlanDoeb', [
				"body" => json_encode($input_detail_03)
			]);
			$data = $res->getBody()->getContents('json');
			$data = json_decode($data, true);
		}


		return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('บันทึกเรียบร้อย','' , '');");
	}

	public function delete($id)
	{
		// iclude helper form
		helper("form");
		$client = new Client();
		$client->delete(Env("app.RestBaseURL") . '/api/CreateBudgetControlDoeb/' . $id, [
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

		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/DraftBudgetControlDoebALL2/' . $value . '/edit');
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);
		$this->pageData["data_main"] = $data['data'];

		$this->pageData["OverAllBudget_id"] = $value;

		return view($this->routeGroup . "/" . $this->routeGroup . "_view", $this->pageData);
	}
}
