<?php

namespace App\Controllers;

use App\Models\FUNCTION_REUSE\dropdown_reuse;
use Exception;
use GuzzleHttp\Client;

class Ajax_reload extends BaseController
{
	//private $db;
	protected $routeGroup;
	protected $dropdown;
	public function __construct()
	{
		//$this->db = db_connect("default");
		//$this->db3 = db_connect("dbIeat");
		//$this->dropdown = new dropdown_reuse();
	}

	public function StrategyRelateDetail_list($OverAllPlan_id)
	{
		$client = new Client();
		//echo $OverAllPlan_id;
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/FocusIndicatorsPlanDetailDoeb/' . $OverAllPlan_id . '/edit');
		$data_next = $res->getBody()->getContents('json');
		$data_next = json_decode($data_next, true);
		$return_data = $data_next['data'];
		//print_r($return_data);
		$return_data2 = $this->response->setJson($return_data);
		//print_r($return_data2);
		return $return_data2;
	}

	public function StrategyRelateDetail_listApprove($OverAllPlan_id)
	{
		$client = new Client();
		//echo $OverAllPlan_id;
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/FocusIndicatorsPlanDetailDoeb/' . $OverAllPlan_id . '/show');
		$data_next = $res->getBody()->getContents('json');
		$data_next = json_decode($data_next, true);
		$return_data = $data_next['data'];
		//print_r($return_data);
		$return_data2 = $this->response->setJson($return_data);
		//print_r($return_data2);
		return $return_data2;
	}

	public function StrategyTarGetDetail_list($StrategyRelateDetail_id)
	{
		$client = new Client();
		//echo $OverAllPlan_id;
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/FocusIndicatorsPlanDetailDoeb2/' . $StrategyRelateDetail_id . '/edit');
		$data_next = $res->getBody()->getContents('json');
		$data_next = json_decode($data_next, true);
		$return_data = $data_next['data'];
		//print_r($return_data);
		$return_data2 = $this->response->setJson($return_data);
		//print_r($return_data2);
		return $return_data2;
	}

	public function OverAllPlanAnnualTargetValueDoeb_year($OverAllPlan_id)
	{
		$client = new Client();
		//echo $OverAllPlan_id;
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/OverAllPlanAnnualTargetValueDoeb/' . $OverAllPlan_id);
		$data_next = $res->getBody()->getContents('json');
		$data_next = json_decode($data_next, true);
		$return_data = $data_next['data'];
		//print_r($return_data);
		$return_data2 = $this->response->setJson($return_data);
		//print_r($return_data2);
		return $return_data2;
	}

	public function RelatedPolicies_list($OverAllPlan_id)
	{
		$client = new Client();
		//echo $OverAllPlan_id;
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/OverAllPlanRelatedPoliciesDoeb/' . $OverAllPlan_id);
		$data_next = $res->getBody()->getContents('json');
		$data_next = json_decode($data_next, true);
		$return_data = $data_next['data'];
		//print_r($return_data);
		$return_data2 = $this->response->setJson($return_data);
		//print_r($return_data2);
		return $return_data2;
	}

	public function RelatedStrategies_list($OverAllPlan_id)
	{
		$client = new Client();
		//echo $OverAllPlan_id;
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/OverAllPlanRelatedStrategiesDoeb/' . $OverAllPlan_id);
		$data_next = $res->getBody()->getContents('json');
		$data_next = json_decode($data_next, true);
		$return_data = $data_next['data'];
		//print_r($return_data);
		$return_data2 = $this->response->setJson($return_data);
		//print_r($return_data2);
		return $return_data2;
	}

	public function StrategyRelateDetail_listForPlanFiveYear($OverAllPlan_id)
	{
		$client = new Client();
		//echo $OverAllPlan_id;
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/StrategyRelateDetailListForPlanFiveYear/' . $OverAllPlan_id);
		$data_next = $res->getBody()->getContents('json');
		$data_next = json_decode($data_next, true);
		$return_data = $data_next['data'];
		//print_r($return_data);
		$return_data2 = $this->response->setJson($return_data);
		//print_r($return_data2);
		return $return_data2;
	}

	public function StrategyTarGetDetail_listForPlanFiveYear($OverAllPlan_id)
	{
		$client = new Client();
		//echo $OverAllPlan_id;
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/StrategyTarGetDetailListForPlanFiveYear/' . $OverAllPlan_id);
		$data_next = $res->getBody()->getContents('json');
		$data_next = json_decode($data_next, true);
		$return_data = $data_next['data'];
		//print_r($return_data);
		$return_data2 = $this->response->setJson($return_data);
		//print_r($return_data2);
		return $return_data2;
	}

	public function StrategyIndicatorDetail_list($StrategyTarGetDetail_id)
	{
		$client = new Client();
		//echo $OverAllPlan_id;
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/StrategyIndicatorDetailList/' . $StrategyTarGetDetail_id);
		$data_next = $res->getBody()->getContents('json');
		$data_next = json_decode($data_next, true);
		$return_data = $data_next['data'];
		//print_r($return_data);
		$return_data2 = $this->response->setJson($return_data);
		//print_r($return_data2);
		return $return_data2;
	}

	public function StrategyTarGetDetail_listForKark($StrategyRelateDetail_id)
	{
		$client = new Client();
		//echo $OverAllPlan_id;
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/StrategyTarGetDetailListForMark/' . $StrategyRelateDetail_id);
		$data_next = $res->getBody()->getContents('json');
		$data_next = json_decode($data_next, true);
		$return_data = $data_next['data'];
		//print_r($return_data);
		$return_data2 = $this->response->setJson($return_data);
		//print_r($return_data2);
		return $return_data2;
	}

	public function StructureBudgetDropdownLv2Doeb($BudgetStructureDetail_id)
	{
		$client = new Client();
		//echo $OverAllPlan_id;
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/StructureBudgetDropdownLv2Doeb/' . $BudgetStructureDetail_id . '/edit');
		$data_next = $res->getBody()->getContents('json');
		$data_next = json_decode($data_next, true);
		$return_data = $data_next['data'];
		//print_r($return_data);
		$return_data2 = $this->response->setJson($return_data);
		//exit;
		return $return_data2;
	}

	public function StructureBudgetDropdownLv3Doeb($BudgetStructureDetail_id)
	{
		$client = new Client();
		//echo $OverAllPlan_id;
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/StructureBudgetDropdownLv3Doeb/' . $BudgetStructureDetail_id . '/edit');
		$data_next = $res->getBody()->getContents('json');
		$data_next = json_decode($data_next, true);
		$return_data = $data_next['data'];
		//print_r($return_data);
		$return_data2 = $this->response->setJson($return_data);
		//exit;
		return $return_data2;
	}
}
