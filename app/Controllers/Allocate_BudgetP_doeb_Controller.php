<?php

namespace App\Controllers;

//use App\Models\FUNCTION_REUSE\check_session;

use App\Models\dropdown_reuse;
use GuzzleHttp\Client;
use Shuchkin\SimpleXLSXGen;

class Allocate_BudgetP_doeb_Controller extends BaseController
{
	protected $programCode = "Allocate_BudgetP_doeb";
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
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/CreateBudgetControlPDoeb', [
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

		return view($this->routeGroup . "/" . $this->routeGroup . "_add_2", $this->pageData);
	}

	public function update()
	{
		error_reporting(0);
		helper("form");

		$input = $this->request->getRawInput();
		if (!empty($input["btnSave"])) {
			$input['ActiveStatusFinalALL'] = 'N';
		} else {
			$input['ActiveStatusFinalALL'] = 'Y';
		}

		$client = new Client();
		// จัดสรรงบประมาณ
		$res = $client->put(Env("app.RestBaseURL") . '/api/CreateBudgetControlDetailTypeALLDoeb/' . $input['OverAllBudget_id'], [
			"body" => json_encode($input)
		]);
		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);

		// โครงการงบลงทุน
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

		// โครงการงบดำเนินการ
		foreach ($input["count_data_02"] as $count_data_02) {
			$Budget01Type2 = $input["Budget01_Type2_" . $count_data_02];
			$Budget02Type2 = $input["Budget02_Type2_" . $count_data_02];
			$BudgetNegativeType2 = $input["BudgetNegative_Type2_" . $count_data_02];
			$BudgetPercentageType2 = $input["BudgetPercentage_Type2_" . $count_data_02];
			$CreatePlanDetail_idType2 = $input["CreatePlanDetail_id_Type2_" . $count_data_02];

			$input_detail_02 = array(
				'Budget01' => $Budget01Type2,
				'Budget02' => $Budget02Type2,
				'BudgetNegative' => $BudgetNegativeType2,
				'BudgetPercentage' => $BudgetPercentageType2,
				'CreatePlanDetail_id' => $CreatePlanDetail_idType2,
			);

			$res = $client->put(Env("app.RestBaseURL") . '/api/CreateBudgetControlDetailType1Doeb/' . $CreatePlanDetail_idType2, [
				"body" => json_encode($input_detail_02)
			]);
			$data = $res->getBody()->getContents('json');
			$data = json_decode($data, true);
		}

		// โครงการอื่น ๆ ส่วนกิจกรรมภายในหน่วยงาน
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

		// โครงการอื่น ๆ ส่วนสำนักงานพลังงานจังหวัด
		foreach ($input["count_data_04"] as $count_data_04) {
			$Budget01Type4 = $input["Budget01_Type4_" . $count_data_04];
			$Budget02Type4 = $input["Budget02_Type4_" . $count_data_04];
			$BudgetNegativeType4 = $input["BudgetNegative_Type4_" . $count_data_04];
			$BudgetPercentageType4 = $input["BudgetPercentage_Type4_" . $count_data_04];
			$DraftBudgetControlDetail_id_Type4 = $input["DraftBudgetControlDetail_id_Type4_" . $count_data_04];

			$input_detail_04 = array(
				'Budget01' => $Budget01Type4,
				'Budget02' => $Budget02Type4,
				'BudgetNegative' => $BudgetNegativeType4,
				'BudgetPercentage' => $BudgetPercentageType4,
				'DraftBudgetControlDetail_id' => $DraftBudgetControlDetail_id_Type4,
			);

			$res = $client->put(Env("app.RestBaseURL") . '/api/CreateBudgetControlDetailType2Doeb/' . $DraftBudgetControlDetail_id_Type4, [
				"body" => json_encode($input_detail_04)
			]);
			$data = $res->getBody()->getContents('json');
			$data = json_decode($data, true);
		}

		if (!empty($input["btnExcel"])) {

			$res_export = $client->request('GET', Env("app.RestBaseURL") . '/api/DraftBudgetControlDoebALL2/' . $input['OverAllBudget_id'] . '/edit');
			$data_export = $res_export->getBody()->getContents('json');
			$data_export = json_decode($data_export, true);
			//export excel
			$filename = "จัดสรรงบประมาณ" . date('d-m-Y_H-i-s');
			$data_export2 = $data_export['data'];
			SimpleXLSXGen::fromArray($data_export2)->downloadAs($filename . '.xlsx');
			exit;
		} else {
			return redirect()->to($this->routeGroup)->with("alertNoti", "alertPopup('บันทึกเรียบร้อย','' , '');");
		}
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
