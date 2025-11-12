<?php

namespace App\Controllers;

//use App\Models\FUNCTION_REUSE\check_session;
use App\Models\monthly_progress;
use App\Models\FUNCTION_REUSE\dropdown_reuse;
use Exception;


class calendar_activity_Controller extends BaseController
{
	protected $programCode = "calendar_activity";
	//protected $check_session;
	protected $model;
	protected $dropdown;
	protected $pageData;
	protected $pageName;
	protected $routeGroup;
	public function __construct()
	{

		//$this->check_session = new check_session();
		//$this->check_session->check_session_user();

		$this->model = new monthly_progress();
		$this->dropdown = new dropdown_reuse();
		$this->pageName = $this->getPageName($this->programCode);
		$this->routeGroup = $this->programCode;

		$this->pageData = [
			"routeGroup" => $this->programCode,
			"menuName" => "สร้างกลุ่มผู้ใช้งานย่อย",
			"backMenu" => $this->getBackMenu($this->programCode)
		];
	}
	public function index()
	{
	
		error_reporting(0);
		helper("form");

		$input = $this->request->getRawInput();

		

		return view($this->routeGroup . "/calendar", $this->pageData);
	}

	public function getCalendarEvents()
	{
		$status_public = "ประกาศกิจกรรม";
		$status_close = "ปิดกิจกรรม";
		$status_cancel = "ยกเลิกกิจกรรม";

		$color_public = "green";
		$color_close = "blue";
		$color_cancel = "red";

		$events =[ 
			array('title' => 'Event 1', 
			'start' => '2025-03-01 08:30:00', 
			'end' => '2025-03-01 17:30:00', 
			'allDay' => false,
			'cordinator' => 'Cordinator 1',
			'activity_name' => 'Activity 1',
			'activity_detail' => 'Activity 1 Detail',
			'activity_status' => $status_public,
			'activity_type' => 'Activity 1 Type',
			'activity_start' => '2025-03-01 08:30:00',
			'activity_end' => '2025-03-01 17:30:00',
			'activity_location' => 'Activity 1 Location',
			'activity_remark' => 'ประกาศกิจกรรม',
			'color' => $color_public),
			array('title' => 'Event 2',
			'start' => '2025-03-02 08:30:00',
			'end' => '2025-03-02 17:30:00',
			'allDay' => false,
			'cordinator' => 'Cordinator 2',
			'activity_name' => 'Activity 2',
			'activity_detail' => 'Activity 2 Detail',
			'activity_status' => $status_public,
			'activity_type' => 'Activity 2 Type',
			'activity_start' => '2025-03-02 08:30:00',
			'activity_end' => '2025-03-02 17:30:00',
			'activity_location' => 'Activity 2 Location',
			'activity_remark' => 'ประกาศกิจกรรม',
			'color' => $color_public),
			array('title' => 'Event 3',
			'start' => '2025-03-03 08:30:00',
			'end' => '2025-03-03 17:30:00',
			'allDay' => false,
			'cordinator' => 'Cordinator 3',
			'activity_name' => 'Activity 3',
			'activity_detail' => 'Activity 3 Detail',
			'activity_status' => $status_close,
			'activity_type' => 'Activity 3 Type',
			'activity_start' => '2025-03-03 08:30:00',
			'activity_end' => '2025-03-03 17:30:00',
			'activity_location' => 'Activity 3 Location',
			'activity_remark' => 'ปิดกิจกรรม',
			'color' => $color_close),
			array('title' => 'Event 4',
			'start' => '2025-03-04 08:30:00',
			'end' => '2025-03-04 17:30:00',
			'allDay' => false,
			'cordinator' => 'Cordinator 4',
			'activity_name' => 'Activity 4',
			'activity_detail' => 'Activity 4 Detail',
			'activity_status' => $status_cancel,
			'activity_type' => 'Activity 4 Type',
			'activity_start' => '2025-03-04 08:30:00',
			'activity_end' => '2025-03-04 17:30:00',
			'activity_location' => 'Activity 4 Location',
			'activity_remark' => 'ยกเลิกกิจกรรม',
			'color' => $color_cancel),
		];
		return json_encode($events);
		
	}

	
}
