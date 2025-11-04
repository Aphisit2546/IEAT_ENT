<?php

namespace App\Controllers;

use App\Models\ConfAmphurModel;
use App\Models\ConfDistrictModel;
use App\Models\ConfProvinceModel;


use Exception;

/* =======================================================
MAS-UC01-007 : ฐานข้อมูลสารเคมีอันตรายตามประกาศ กระทรวงอุตสาหกรรม
======================================================= */

class CommonAjaxDropdown_Controller extends BaseController
{
	protected $programCode = "DIALOG";
	protected $model;
	protected $pageData;
	protected $pageName;
	protected $routeGroup;

	public function __construct()
	{
		// $this->pageName = $this->getPageName($this->programCode);
		// $this->routeGroup = str_replace("-", "_", $this->programCode);

		$this->pageData = [
			"routeGroup" => "",
			"menuName" => "ค้นหาสารเคมีอันตราย",
			"backMenu" => ""
		];
		// session()->setFlashdata("curGroupMenu", $this->routeGroup);
	}
	public function getDDL_Province()
	{
		$lstData = (new ConfProvinceModel)->select("ProvinceID,ProvinceCode,ProvinceNameTH")->findAll();
		array_sort_by_multiple_keys($lstData, [
			"ProvinceNameTH" => SORT_ASC,
		]);
		return $this->response->setJson($lstData);
	}
	public function getDDL_Amphur($val)
	{
		$lstData = (new ConfAmphurModel())->select("AmphurID,AmphurCode,AmphurNameTH")->where(["ProvinceID" => $val])->findAll();
		array_sort_by_multiple_keys($lstData, [
			"AmphurNameTH" => SORT_ASC,
		]);
		return $this->response->setJson($lstData);
	}
	public function getDDL_Tambon($val)
	{
		$lstData = (new ConfDistrictModel())->select("TambonID,TambonNameTH,TambonNameEN,ZipCode,AmphurID")->where(["AmphurID" => $val])->findAll();
		array_sort_by_multiple_keys($lstData, [
			"TambonNameTH" => SORT_ASC,
		]);
		return $this->response->setJson($lstData);
	}
}
