<?php

namespace App\Controllers;

//use App\Models\FUNCTION_REUSE\check_session;

use App\Models\dropdown_reuse;
use GuzzleHttp\Client;

class report_show_02_doeb_Controller extends BaseController
{
	protected $programCode = "report_show_02_doeb";
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
			"menuName" => "รายงานค่าเป้าหมายและตัวชี้วัดของแผนปฏิบัติราชการ"
		];
	}

	public function index()
	{
		error_reporting(0);
		helper("form");

		$this->pageData['dropdown_master_plan'] = $this->dropdown->dropdown_master_plan_for_report();

		$client = new Client();
		$input = $this->request->getRawInput();
		$res = $client->request('GET', Env("app.RestBaseURL") . '/api/ReportShow02Doeb', [
			"body" => json_encode($input)
		]);

		$data = $res->getBody()->getContents('json');
		$data = json_decode($data, true);
		$this->pageData["lstData"] = $data['data'];

		$this->pageData["data_search1"] = $input['data_search1'];
		$this->pageData["data_search2"] = $input['data_search2'];
		$this->pageData["filename"] = "รายงานค่าเป้าหมายและตัวชี้วัดของแผนปฏิบัติราชการ" . date('d-m-Y_H-i-s');

		if ($input['search_excel'] != '' && $input['search_excel'] != null) {
			//export excel
			$this->pageData["export_excel"] = "Y";
		}

		if ($input['search_pdf'] != '' && $input['search_pdf'] != null) {
			//export pdf
			$this->pageData["export_pdf"] = "Y";
		}

		if ($input['search_doc'] != '' && $input['search_doc'] != null) {
			//export doc
			$this->pageData["export_word"] = "Y";
		}

		if ($input['search_csv'] != '' && $input['search_csv'] != null) {
			//export csv
			$this->pageData["export_csv"] = "Y";
		}

		if ($input['search_json'] != '' && $input['search_json'] != null) {
			//export json
			$this->pageData["export_json"] = "Y";

			//แปลงเป็น array แล้วแปลงกลับเพื่อจัดรูปแบบสวย ๆ
			$jsonPretty = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

			// ตั้ง header สำหรับดาวน์โหลดไฟล์ JSON
			$filename = "รายงานค่าเป้าหมายและตัวชี้วัดของแผนปฏิบัติราชการ" . date('d-m-Y_H-i-s');
			return $this->response
				->setHeader('Content-Type', 'application/json; charset=utf-8')
				->setHeader('Content-Disposition', 'attachment; filename="' . $filename . '.json"')
				->setBody($jsonPretty);
		}

		return view($this->routeGroup . "/" . $this->routeGroup . "_search", $this->pageData);
	}
}
