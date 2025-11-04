<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('HomeController');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'LoginController::index');
//$routes->get('home', 'HomeController::index', ['filter' => 'Auth']);
$routes->get('home', 'HomeController::index');
$routes->match(["get", "post"], 'activeuser', 'UserController::changeUserName_PasswordFirst', ['filter' => 'Auth']);
$routes->get('login', 'LoginController::index');
$routes->get('logout', 'LoginController::logout');
$routes->post('login/auth', 'LoginController::auth');
$routes->post('login/authholding', 'LoginController::authholding');
$routes->get('Captcha', 'LoginController::genCaptcha');
$routes->get('submenu/(:any)', 'SubMenuController::index/$1');

$routes->get('home1', 'HomeController::home1');
$routes->get('home2', 'HomeController::home2');

$routes->get('home3_2', 'HomeController::home3_2');
$routes->get('home3_3', 'HomeController::home3_3');
$routes->get('home3_4', 'HomeController::home3_4');
$routes->get('home3_5', 'HomeController::home3_5');

$routes->get('home4', 'HomeController::home4');
$routes->get('home5', 'HomeController::home5');

// Dev for testsystem
$routes->get('testmail', 'TestMailController::index');
$routes->get('checkmail/(:any)', 'TestMailController::check/$1');

$routes->group('public', function ($routes) {
    $routes->get('', 'ExternalController::index');

    $routes->group('register', function ($routes) {
        $routes->get('', 'ExternalRegisterController::index');
        $routes->post("save", "ExternalRegisterController::save");
        $routes->get('success', 'ExternalRegisterController::success');
        // $routes->match(["get", "post"], 'activate/(:key)', 'ExternalRegisterController::activate/$1');
        $routes->match(["get", "post"], "activate/(:any)", "ExternalRegisterController::activate/$1");
    });
    $routes->group('services', function ($routes) {
        $routes->get('', 'ExternalServiceController::index');
    });
});

$routes->group('dashboard', function ($routes) {
    $routes->get('', 'Dashboard::index');
    $routes->get("loadData", "DashboardController::loadData");
});

$routes->group('user', function ($routes) {
    $routes->get("", "UserController::index");
    $routes->match(["get", "post"], 'profile', 'UserController::profile');
    $routes->match(["get", "post"], 'changepass', 'UserController::changepassword');
});

$routes->match(["get", "post"], 'forgot-password', 'UserController::forgotpassword');

$routes->group('usergrp', function ($routes) {
    $routes->get("", "UserGroupController::index");
});
$routes->group('resetpass', function ($routes) {
    $routes->get('', 'ResetPasswordController::index');
    $routes->post('reset', 'ResetPasswordController::reset');
});

$routes->group('api', function ($routes) {
    $routes->post("verifypassword", "UserController::verifyPassword");
    $routes->get("verifypassword", "UserController::verifyPassword");

    $routes->group("robotDataHold", function ($routes) {
        $routes->post("I05", "ApiEppRobotController::dataI05");
        $routes->post("I06", "ApiEppRobotController::dataI06");
        $routes->post("NontaxRenew", "ApiEppRobotController::dataNontaxRenew");
        $routes->post("NontaxVacate", "ApiEppRobotController::dataNontaxVacate");
        $routes->post("NontaxChangeCopName", "ApiEppRobotController::dataNontaxChangeCopName");
        $routes->post("NontaxChangeCopAddress", "ApiEppRobotController::dataNontaxChangeCopAddress");
        $routes->post("NontaxChangeForeignerPosition", "ApiEppRobotController::dataNontaxChangeForeignerPosition");
        $routes->get("", function () {
            $res = array(
                "status" => true,
                "message" => "Successfully!",
                "returnData" => "Hello"
            );
            return json_encode($res);
        });
    });
});

$routes->group("ajaxDDL", ['filter' => 'Auth'], function ($routes) {
    $routes->get("lstProvince", "CommonAjaxDropdown_Controller::getDDL_Province");
    $routes->get("lstAmphur/(:num)", "CommonAjaxDropdown_Controller::getDDL_Amphur/$1");
    $routes->get("lstTambon/(:num)", "CommonAjaxDropdown_Controller::getDDL_Tambon/$1");
});

//////////////////////////////////////////////////////////////////////////////////////////////////////////////

/* =======================================================
ประเภทแผน
======================================================= */

$routes->group("plan_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "plan_doeb_Controller::index");
    $routes->get("add", "plan_doeb_Controller::add");
    $routes->post("store", "plan_doeb_Controller::store");
    $routes->get("edt/(:num)", "plan_doeb_Controller::edit/$1");
    $routes->post("upd", "plan_doeb_Controller::update");
    $routes->get("del/(:num)", "plan_doeb_Controller::delete/$1");
});

/* =======================================================
ประเภทงบประมาณ
======================================================= */

$routes->group("TypeBudget_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "TypeBudget_doeb_Controller::index");
    $routes->get("add", "TypeBudget_doeb_Controller::add");
    $routes->post("store", "TypeBudget_doeb_Controller::store");
    $routes->get("edt/(:num)", "TypeBudget_doeb_Controller::edit/$1");
    $routes->post("upd", "TypeBudget_doeb_Controller::update");
    $routes->get("del/(:num)", "TypeBudget_doeb_Controller::delete/$1");
});

/* =======================================================
หน่วยนับ
======================================================= */

$routes->group("unit_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "unit_doeb_Controller::index");
    $routes->get("add", "unit_doeb_Controller::add");
    $routes->post("store", "unit_doeb_Controller::store");
    $routes->get("edt/(:num)", "unit_doeb_Controller::edit/$1");
    $routes->post("upd", "unit_doeb_Controller::update");
    $routes->get("del/(:num)", "unit_doeb_Controller::delete/$1");
});

/* =======================================================
ประเภทแหล่งเงินงบประมาณ
======================================================= */

$routes->group("source_budget_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "source_budget_doeb_Controller::index");
    $routes->get("add", "source_budget_doeb_Controller::add");
    $routes->post("store", "source_budget_doeb_Controller::store");
    $routes->get("edt/(:num)", "source_budget_doeb_Controller::edit/$1");
    $routes->post("upd", "source_budget_doeb_Controller::update");
    $routes->get("del/(:num)", "source_budget_doeb_Controller::delete/$1");
});

/* =======================================================
โครงสร้างงบประมาณรายจ่าย
======================================================= */

$routes->group("structure_budget_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "structure_budget_doeb_Controller::index");
    $routes->get("add", "structure_budget_doeb_Controller::add");
    $routes->post("store", "structure_budget_doeb_Controller::store");
    $routes->get("edt/(:num)", "structure_budget_doeb_Controller::edit/$1");
    $routes->post("upd", "structure_budget_doeb_Controller::update");
    $routes->get("del/(:num)", "structure_budget_doeb_Controller::delete/$1");
    $routes->get("view/(:num)", "structure_budget_doeb_Controller::view/$1");
});

/* =======================================================
โปรแกรมจัดทำข้อมูลภาพรวมแผนยุทธศาสตร์
======================================================= */

$routes->group("overall_plan_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "overall_plan_doeb_Controller::index");
    $routes->get("add", "overall_plan_doeb_Controller::add");
    $routes->post("store", "overall_plan_doeb_Controller::store");
    $routes->get("edt/(:num)", "overall_plan_doeb_Controller::edit/$1");
    $routes->post("upd", "overall_plan_doeb_Controller::update");
    $routes->get("del/(:num)", "overall_plan_doeb_Controller::delete/$1");
    $routes->get("view/(:num)", "overall_plan_doeb_Controller::view/$1");
});


/* =======================================================
สร้างรายการแผนย่อย เป้าหมาย และตัวชี้วัดตามยุทธศาสตร์
======================================================= */

$routes->group("focus_indicators_plan_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "focus_indicators_plan_doeb_Controller::index");
    $routes->get("add", "focus_indicators_plan_doeb_Controller::add");
    $routes->post("store", "focus_indicators_plan_doeb_Controller::store");
    $routes->get("edt/(:num)", "focus_indicators_plan_doeb_Controller::edit/$1");
    $routes->post("upd", "focus_indicators_plan_doeb_Controller::update");
    $routes->get("del/(:num)", "focus_indicators_plan_doeb_Controller::delete/$1");
    $routes->get("view/(:num)", "focus_indicators_plan_doeb_Controller::view/$1");
});

$routes->group("focus_indicators_plan_doeb2", function ($routes) {
    $routes->match(["get", "post"], "/", "focus_indicators_plan_doeb2_Controller::index");
    $routes->get("add", "focus_indicators_plan_doeb2_Controller::add");
    $routes->post("store", "focus_indicators_plan_doeb2_Controller::store");
    $routes->get("edt/(:num)", "focus_indicators_plan_doeb2_Controller::edit/$1");
    $routes->post("upd", "focus_indicators_plan_doeb2_Controller::update");
    $routes->get("del/(:num)", "focus_indicators_plan_doeb2_Controller::delete/$1");
    $routes->get("view/(:num)", "focus_indicators_plan_doeb2_Controller::view/$1");
});

$routes->group("focus_indicators_plan_doeb3", function ($routes) {
    $routes->match(["get", "post"], "/", "focus_indicators_plan_doeb3_Controller::index");
    $routes->get("add", "focus_indicators_plan_doeb3_Controller::add");
    $routes->post("store", "focus_indicators_plan_doeb3_Controller::store");
    $routes->get("edt/(:num)", "focus_indicators_plan_doeb3_Controller::edit/$1");
    $routes->post("upd", "focus_indicators_plan_doeb3_Controller::update");
    $routes->get("del/(:num)", "focus_indicators_plan_doeb3_Controller::delete/$1");
    $routes->get("view/(:num)", "focus_indicators_plan_doeb3_Controller::view/$1");
});

/* =======================================================
จัดทำข้อมูลค่าเป้าหมายและงบประมาณ
======================================================= */

$routes->group("mark_focus_budget_plan_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "mark_focus_budget_plan_doeb_Controller::index");
    $routes->get("add", "mark_focus_budget_plan_doeb_Controller::add");
    $routes->post("store", "mark_focus_budget_plan_doeb_Controller::store");
    $routes->get("edt/(:num)", "mark_focus_budget_plan_doeb_Controller::edit/$1");
    $routes->post("upd", "mark_focus_budget_plan_doeb_Controller::update");
    $routes->get("del/(:num)", "mark_focus_budget_plan_doeb_Controller::delete/$1");
    $routes->get("view/(:num)", "mark_focus_budget_plan_doeb_Controller::view/$1");
});

/* =======================================================
แผนรายจ่ายของโครงการ
======================================================= */

$routes->group("expenses_plan_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "expenses_plan_doeb_Controller::index");
    $routes->get("add", "expenses_plan_doeb_Controller::add");
    $routes->post("store", "expenses_plan_doeb_Controller::store");
    $routes->get("edt/(:num)", "expenses_plan_doeb_Controller::edit/$1");
    $routes->post("upd", "expenses_plan_doeb_Controller::update");
    $routes->get("del/(:num)", "expenses_plan_doeb_Controller::delete/$1");
});

/* =======================================================
ตรวจทานรายละเอียดโครงการ
======================================================= */

$routes->group("check_detail_plan_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "check_detail_plan_doeb_Controller::index");
    $routes->get("add", "check_detail_plan_doeb_Controller::add");
    $routes->post("store", "check_detail_plan_doeb_Controller::store");
    $routes->get("edt/(:any)", "check_detail_plan_doeb_Controller::edit/$1");
    $routes->post("upd", "check_detail_plan_doeb_Controller::update");
    $routes->get("del/(:any)", "check_detail_plan_doeb_Controller::delete/$1");
    $routes->get("view/(:any)", "check_detail_plan_doeb_Controller::view/$1");
});

/* =======================================================
จัดทำ / ปรับปรุงรายละเอียดแผนงาน
======================================================= */

$routes->group("create_plan_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "create_plan_doeb_Controller::index");
    $routes->get("add", "create_plan_doeb_Controller::add");
    $routes->post("store", "create_plan_doeb_Controller::store");
    $routes->get("edt/(:num)", "create_plan_doeb_Controller::edit/$1");
    $routes->post("upd", "create_plan_doeb_Controller::update");
    $routes->get("del/(:num)", "create_plan_doeb_Controller::delete/$1");
    $routes->get("view/(:num)", "create_plan_doeb_Controller::view/$1");
});

/* =======================================================
ตรวจสอบแผนงาน
======================================================= */

$routes->group("inspec_plan_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "inspec_plan_doeb_Controller::index");
    $routes->get("add", "inspec_plan_doeb_Controller::add");
    $routes->post("store", "inspec_plan_doeb_Controller::store");
    $routes->get("edt/(:num)", "inspec_plan_doeb_Controller::edit/$1");
    $routes->post("upd", "inspec_plan_doeb_Controller::update");
    $routes->get("del/(:num)", "inspec_plan_doeb_Controller::delete/$1");
    $routes->get("view/(:num)", "inspec_plan_doeb_Controller::view/$1");
});

/* =======================================================
พิจารณาแผนงาน
======================================================= */

$routes->group("approve_plan_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "approve_plan_doeb_Controller::index");
    $routes->get("add", "approve_plan_doeb_Controller::add");
    $routes->post("store", "approve_plan_doeb_Controller::store");
    $routes->get("edt/(:num)", "approve_plan_doeb_Controller::edit/$1");
    $routes->post("upd", "approve_plan_doeb_Controller::update");
    $routes->get("del/(:num)", "approve_plan_doeb_Controller::delete/$1");
    $routes->get("view/(:num)", "approve_plan_doeb_Controller::view/$1");
});

/* =======================================================
ข้อมูลภาพรวมโครงการ (ประกอบแผนปฏิบัติการ 5 ปี)
======================================================= */

$routes->group("overall_fiveyear_plan_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "overall_fiveyear_plan_doeb_Controller::index");
    $routes->get("add", "overall_fiveyear_plan_doeb_Controller::add");
    $routes->post("store", "overall_fiveyear_plan_doeb_Controller::store");
    $routes->get("edt/(:any)", "overall_fiveyear_plan_doeb_Controller::edit/$1");
    $routes->post("upd", "overall_fiveyear_plan_doeb_Controller::update");
    $routes->get("del/(:any)", "overall_fiveyear_plan_doeb_Controller::delete/$1");
    $routes->get("view/(:any)", "overall_fiveyear_plan_doeb_Controller::view/$1");
});

/* =======================================================
จัดทำแผนงานโครงการ (แผนปฏิบัติราชการรายปี)
======================================================= */

$routes->group("overall_year_plan_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "overall_year_plan_doeb_Controller::index");
    $routes->get("add", "overall_year_plan_doeb_Controller::add");
    $routes->post("store", "overall_year_plan_doeb_Controller::store");
    $routes->get("edt/(:any)", "overall_year_plan_doeb_Controller::edit/$1");
    $routes->post("upd", "overall_year_plan_doeb_Controller::update");
    $routes->get("del/(:any)", "overall_year_plan_doeb_Controller::delete/$1");
    $routes->get("view/(:any)", "overall_year_plan_doeb_Controller::view/$1");
});

/* =======================================================
จัดทำแผนงานโครงการตาม พรบ. งบประมาณ
======================================================= */

$routes->group("overall_fiscal_year_plan_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "overall_fiscal_year_plan_doeb_Controller::index");
    $routes->get("add", "overall_fiscal_year_plan_doeb_Controller::add");
    $routes->post("store", "overall_fiscal_year_plan_doeb_Controller::store");
    $routes->get("edt/(:num)", "overall_fiscal_year_plan_doeb_Controller::edit/$1");
    $routes->post("upd", "overall_fiscal_year_plan_doeb_Controller::update");
    $routes->get("del/(:num)", "overall_fiscal_year_plan_doeb_Controller::delete/$1");
    $routes->get("view/(:num)", "overall_fiscal_year_plan_doeb_Controller::view/$1");
});


/* =======================================================
strategy_head_doeb : จัดการข้อมูลหัวข้อยุทธศาสตร์
======================================================= */

$routes->group("strategy_head_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "strategy_head_doeb_Controller::index");
    $routes->get("add", "strategy_head_doeb_Controller::add");
    $routes->post("store", "strategy_head_doeb_Controller::store");
    $routes->get("edt/(:num)", "strategy_head_doeb_Controller::edit/$1");
    $routes->post("upd", "strategy_head_doeb_Controller::update");
    $routes->get("del/(:num)", "strategy_head_doeb_Controller::delete/$1");
});

/* =======================================================
strategy_head_detail_doeb : จัดการข้อมูลกลยุทธ์
======================================================= */

$routes->group("strategy_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "strategy_doeb_Controller::index");
    $routes->get("add", "strategy_doeb_Controller::add");
    $routes->post("store", "strategy_doeb_Controller::store");
    $routes->get("edt/(:num)", "strategy_doeb_Controller::edit/$1");
    $routes->post("upd", "strategy_doeb_Controller::update");
    $routes->get("del/(:num)", "strategy_doeb_Controller::delete/$1");
});

/* =======================================================
plan_detail_doeb : • จัดการข้อมูลรายละเอียดแผนบริหารจัดการองค์กร
======================================================= */

$routes->group("plan_detail_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "plan_detail_doeb_Controller::index");
    $routes->get("add", "plan_detail_doeb_Controller::add");
    $routes->post("store", "plan_detail_doeb_Controller::store");
    $routes->get("edt/(:num)", "plan_detail_doeb_Controller::edit/$1");
    $routes->post("upd", "plan_detail_doeb_Controller::update");
    $routes->get("del/(:num)", "plan_detail_doeb_Controller::delete/$1");
});

/* =======================================================
BUDGET : จัดการข้อมูลงบประมาณ
======================================================= */

$routes->group("budget_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "budget_doeb_Controller::index");
    $routes->get("add", "budget_doeb_Controller::add");
    $routes->post("store", "budget_doeb_Controller::store");
    $routes->get("edt/(:num)", "budget_doeb_Controller::edit/$1");
    $routes->post("upd", "budget_doeb_Controller::update");
    $routes->get("del/(:num)", "budget_doeb_Controller::delete/$1");
});

/* =======================================================
calendar_doeb : ประเภทปฏิทินสำหรับองค์กร
======================================================= */

$routes->group("calendar_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "calendar_doeb_Controller::index");
    $routes->get("add", "calendar_doeb_Controller::add");
    $routes->post("store", "calendar_doeb_Controller::store");
    $routes->get("edt/(:num)", "calendar_doeb_Controller::edit/$1");
    $routes->post("upd", "calendar_doeb_Controller::update");
    $routes->get("del/(:num)", "calendar_doeb_Controller::delete/$1");
});

/* =======================================================
จัดทำร่างคำของงบประมาณ(งบดำเนินการ)
======================================================= */

$routes->group("draft_budget_control_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "draft_budget_control_doeb_Controller::index");
    $routes->get("add/(:any)", "draft_budget_control_doeb_Controller::add/$1");
    $routes->get("addsub/(:any)", "draft_budget_control_doeb_Controller::addsub/$1");
    $routes->post("store", "draft_budget_control_doeb_Controller::store");
    $routes->get("edt/(:any)", "draft_budget_control_doeb_Controller::edit/$1");
    $routes->post("upd", "draft_budget_control_doeb_Controller::update");
    $routes->get("del/(:num)", "draft_budget_control_doeb_Controller::delete/$1");
    $routes->get("view/(:num)", "draft_budget_control_doeb_Controller::view/$1");
    $routes->post("storesub", "draft_budget_control_doeb_Controller::storesub");
    $routes->get("edtsub/(:any)", "draft_budget_control_doeb_Controller::edtsub/$1");
    $routes->post("edtupdatesub", "draft_budget_control_doeb_Controller::edtupdatesub");

    $routes->get("addsub2/(:any)", "draft_budget_control_doeb_Controller::addsub2/$1");
    $routes->post("storesub2", "draft_budget_control_doeb_Controller::storesub2");
    $routes->get("edtsub2/(:any)", "draft_budget_control_doeb_Controller::edtsub2/$1");
    $routes->post("edtupdatesub2", "draft_budget_control_doeb_Controller::edtupdatesub2");
});

/* =======================================================
ตรวจสอบรายละเอียดคำของบประมาณ
======================================================= */

$routes->group("data_budget_control_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "data_budget_control_doeb_Controller::index");
    $routes->get("add", "data_budget_control_doeb_Controller::add");
    $routes->post("store", "data_budget_control_doeb_Controller::store");
    $routes->get("edt/(:num)", "data_budget_control_doeb_Controller::edit/$1");
    $routes->post("upd", "data_budget_control_doeb_Controller::update");
    $routes->get("del/(:num)", "data_budget_control_doeb_Controller::delete/$1");
    $routes->get("view/(:num)", "data_budget_control_doeb_Controller::view/$1");
});

/* =======================================================
จัดทำ / ปรับปรุงรายละเอียดแผนงานงบประมาณ
======================================================= */

$routes->group("create_budget_control_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "create_budget_control_doeb_Controller::index");
    $routes->get("add/(:any)", "create_budget_control_doeb_Controller::add/$1");
    $routes->post("store", "create_budget_control_doeb_Controller::store");
    $routes->get("edt/(:any)", "create_budget_control_doeb_Controller::edit/$1");
    $routes->post("upd", "create_budget_control_doeb_Controller::update");
    $routes->get("del/(:any)", "create_budget_control_doeb_Controller::delete/$1");
    $routes->get("view/(:any)", "create_budget_control_doeb_Controller::view/$1");
});

/* =======================================================
ตรวจสอบแผนงานงบประมาณ
======================================================= */

$routes->group("inspec_BudgetControl_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "inspec_BudgetControl_doeb_Controller::index");
    $routes->get("add", "inspec_BudgetControl_doeb_Controller::add");
    $routes->post("store", "inspec_BudgetControl_doeb_Controller::store");
    $routes->get("edt/(:any)", "inspec_BudgetControl_doeb_Controller::edit/$1");
    $routes->post("upd", "inspec_BudgetControl_doeb_Controller::update");
    $routes->get("del/(:any)", "inspec_BudgetControl_doeb_Controller::delete/$1");
    $routes->get("view/(:any)", "inspec_BudgetControl_doeb_Controller::view/$1");
});

/* =======================================================
พิจารณาแผนงานงบประมาณ
======================================================= */

$routes->group("approve_budget_control_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "approve_budget_control_doeb_Controller::index");
    $routes->get("add", "approve_budget_control_doeb_Controller::add");
    $routes->post("store", "approve_budget_control_doeb_Controller::store");
    $routes->get("edt/(:num)", "approve_budget_control_doeb_Controller::edit/$1");
    $routes->post("upd", "approve_budget_control_doeb_Controller::update");
    $routes->get("del/(:num)", "approve_budget_control_doeb_Controller::delete/$1");
    $routes->get("view/(:num)", "approve_budget_control_doeb_Controller::view/$1");
});

$routes->group("create_budget_control_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "create_budget_control_doeb_Controller::index");
    $routes->get("add/(:any)", "create_budget_control_doeb_Controller::add/$1");
    $routes->post("store", "create_budget_control_doeb_Controller::store");
    $routes->get("edt/(:num)", "create_budget_control_doeb_Controller::edit/$1");
    $routes->post("upd", "create_budget_control_doeb_Controller::update");
    $routes->get("del/(:num)", "create_budget_control_doeb_Controller::delete/$1");
    $routes->get("view/(:num)", "create_budget_control_doeb_Controller::view/$1");
});

/* =======================================================
โปรแกรมจัดทำข้อมูลภาพรวมแผนงบประมาณ
======================================================= */

$routes->group("Allocate_Budget_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "Allocate_Budget_doeb_Controller::index");
    $routes->get("add/(:any)", "create_budget_control_doeb_Controller::add/$1");
    $routes->post("store", "Allocate_Budget_doeb_Controller::store");
    $routes->get("edt/(:any)", "Allocate_Budget_doeb_Controller::edit/$1");
    $routes->get("edt_2/(:any)", "Allocate_Budget_doeb_Controller::edit_2/$1");
    $routes->get("edt_3/(:any)", "Allocate_Budget_doeb_Controller::edit_3/$1");
    $routes->post("upd", "Allocate_Budget_doeb_Controller::update");
    $routes->post("upd2", "Allocate_Budget_doeb_Controller::update2");
    $routes->get("del/(:num)", "Allocate_Budget_doeb_Controller::delete/$1");
    $routes->get("view/(:num)", "Allocate_Budget_doeb_Controller::view/$1");
});

$routes->group("Allocate_BudgetP_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "Allocate_BudgetP_doeb_Controller::index");
    $routes->get("add/(:any)", "create_budget_control_doeb_Controller::add/$1");
    $routes->post("store", "Allocate_BudgetP_doeb_Controller::store");
    $routes->get("edt/(:any)", "Allocate_BudgetP_doeb_Controller::edit/$1");
    $routes->get("edt_2/(:any)", "Allocate_BudgetP_doeb_Controller::edit_2/$1");
    $routes->post("upd", "Allocate_BudgetP_doeb_Controller::update");
    $routes->get("del/(:num)", "Allocate_BudgetP_doeb_Controller::delete/$1");
    $routes->get("view/(:num)", "Allocate_BudgetP_doeb_Controller::view/$1");
});

$routes->group("Report_01_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "Report_01_doeb_Controller::index");
    $routes->get("add/(:num)", "Report_01_doeb_Controller::add/$1");
    $routes->post("store", "Report_01_doeb_Controller::store");
    $routes->get("edt/(:num)", "Report_01_doeb_Controller::edit/$1");
    $routes->post("upd", "Report_01_doeb_Controller::update");
    $routes->get("del/(:num)", "Report_01_doeb_Controller::delete/$1");
    $routes->get("view/(:num)", "Report_01_doeb_Controller::view/$1");
});

$routes->group("Report_01_activity_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "Report_01_activity_doeb_Controller::index");
    $routes->get("add/(:num)", "Report_01_activity_doeb_Controller::add/$1");
    $routes->post("store", "Report_01_activity_doeb_Controller::store");
    $routes->get("edt/(:num)", "Report_01_activity_doeb_Controller::edit/$1");
    $routes->post("upd", "Report_01_activity_doeb_Controller::update");
    $routes->get("del/(:num)", "Report_01_activity_doeb_Controller::delete/$1");
    $routes->get("view/(:num)", "Report_01_activity_doeb_Controller::view/$1");
});

$routes->group("Report_01_activity_province_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "Report_01_activity_province_doeb_Controller::index");
    $routes->get("add/(:num)", "Report_01_activity_province_doeb_Controller::add/$1");
    $routes->post("store", "Report_01_activity_province_doeb_Controller::store");
    $routes->get("edt/(:num)", "Report_01_activity_province_doeb_Controller::edit/$1");
    $routes->post("upd", "Report_01_activity_province_doeb_Controller::update");
    $routes->get("del/(:num)", "Report_01_activity_province_doeb_Controller::delete/$1");
    $routes->get("view/(:num)", "Report_01_activity_province_doeb_Controller::view/$1");
});

$routes->group("Report_02_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "Report_02_doeb_Controller::index");
    $routes->get("add", "Report_02_doeb_Controller::add");
    $routes->post("store", "Report_02_doeb_Controller::store");
    $routes->get("edt/(:num)", "Report_02_doeb_Controller::edit/$1");
    $routes->post("upd", "Report_02_doeb_Controller::update");
    $routes->get("del/(:num)", "Report_02_doeb_Controller::delete/$1");
    $routes->get("view/(:num)", "Report_02_doeb_Controller::view/$1");
});

$routes->group("Report_03_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "Report_03_doeb_Controller::index");
    $routes->get("add", "Report_03_doeb_Controller::add");
    $routes->post("store", "Report_03_doeb_Controller::store");
    $routes->get("edt/(:any)", "Report_03_doeb_Controller::edit/$1");
    $routes->post("upd", "Report_03_doeb_Controller::update");
    $routes->get("del/(:any)", "Report_03_doeb_Controller::delete/$1");
    $routes->get("view/(:any)", "Report_03_doeb_Controller::view/$1");
});

$routes->group("Report_04_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "Report_04_doeb_Controller::index");
    $routes->get("add", "Report_04_doeb_Controller::add");
    $routes->post("store", "Report_04_doeb_Controller::store");
    $routes->get("edt/(:num)", "Report_04_doeb_Controller::edit/$1");
    $routes->post("upd", "Report_04_doeb_Controller::update");
    $routes->get("del/(:num)", "Report_04_doeb_Controller::delete/$1");
    $routes->get("view/(:num)", "Report_04_doeb_Controller::view/$1");
});

$routes->group("Report_05_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "Report_05_doeb_Controller::index");
    $routes->get("add", "Report_05_doeb_Controller::add");
    $routes->post("store", "Report_05_doeb_Controller::store");
    $routes->get("edt/(:num)", "Report_05_doeb_Controller::edit/$1");
    $routes->post("upd", "Report_05_doeb_Controller::update");
    $routes->get("del/(:num)", "Report_05_doeb_Controller::delete/$1");
    $routes->get("view/(:num)", "Report_05_doeb_Controller::view/$1");
});

$routes->group("Report_06_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "Report_06_doeb_Controller::index");
    $routes->get("add", "Report_06_doeb_Controller::add");
    $routes->post("store", "Report_06_doeb_Controller::store");
    $routes->get("edt/(:num)", "Report_06_doeb_Controller::edit/$1");
    $routes->post("upd", "Report_06_doeb_Controller::update");
    $routes->get("del/(:num)", "Report_06_doeb_Controller::delete/$1");
    $routes->get("view/(:num)", "Report_06_doeb_Controller::view/$1");
});

$routes->group("Report_07_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "Report_07_doeb_Controller::index");
    $routes->get("add", "Report_07_doeb_Controller::add");
    $routes->post("store", "Report_07_doeb_Controller::store");
    $routes->get("edt/(:num)", "Report_07_doeb_Controller::edit/$1");
    $routes->post("upd", "Report_07_doeb_Controller::update");
    $routes->get("del/(:num)", "Report_07_doeb_Controller::delete/$1");
    $routes->get("view/(:num)", "Report_07_doeb_Controller::view/$1");
});

$routes->group("Report_08_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "Report_08_doeb_Controller::index");
    $routes->get("add", "Report_08_doeb_Controller::add");
    $routes->post("store", "Report_08_doeb_Controller::store");
    $routes->get("edt/(:any)", "Report_08_doeb_Controller::edit/$1");
    $routes->post("upd", "Report_08_doeb_Controller::update");
    $routes->get("del/(:any)", "Report_08_doeb_Controller::delete/$1");
    $routes->get("view/(:any)", "Report_08_doeb_Controller::view/$1");
});

$routes->group("monthly_plan_budget_project_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "monthly_plan_budget_project_doeb_Controller::index");
    $routes->get("add", "monthly_plan_budget_project_doeb_Controller::add");
    $routes->post("store", "monthly_plan_budget_project_doeb_Controller::store");
    $routes->get("edt/(:any)", "monthly_plan_budget_project_doeb_Controller::edit/$1");
    $routes->get("edt2/(:any)", "monthly_plan_budget_project_doeb_Controller::edit2/$1");
    $routes->post("upd", "monthly_plan_budget_project_doeb_Controller::update");
    $routes->post("upd2", "monthly_plan_budget_project_doeb_Controller::update2");
    $routes->get("del/(:num)", "monthly_plan_budget_project_doeb_Controller::delete/$1");
    $routes->get("view/(:any)", "monthly_plan_budget_project_doeb_Controller::view/$1");
    $routes->get("view2/(:any)", "monthly_plan_budget_project_doeb_Controller::view2/$1");
});

$routes->group("monthly_plan_budget_other_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "monthly_plan_budget_other_doeb_Controller::index");
    $routes->get("add", "monthly_plan_budget_other_doeb_Controller::add");
    $routes->post("store", "monthly_plan_budget_other_doeb_Controller::store");
    $routes->get("edt/(:num)", "monthly_plan_budget_other_doeb_Controller::edit/$1");
    $routes->get("edt2/(:any)", "monthly_plan_budget_other_doeb_Controller::edit2/$1");
    $routes->post("upd", "monthly_plan_budget_other_doeb_Controller::update");
    $routes->get("del/(:num)", "monthly_plan_budget_other_doeb_Controller::delete/$1");
    $routes->get("view/(:num)", "monthly_plan_budget_other_doeb_Controller::view/$1");
});

$routes->group("overall_budget_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "overall_budget_doeb_Controller::index");
    $routes->get("add", "overall_budget_doeb_Controller::add");
    $routes->post("store", "overall_budget_doeb_Controller::store");
    $routes->get("edt/(:num)", "overall_budget_doeb_Controller::edit/$1");
    $routes->post("upd", "overall_budget_doeb_Controller::update");
    $routes->get("del/(:num)", "overall_budget_doeb_Controller::delete/$1");
    $routes->get("view/(:num)", "overall_budget_doeb_Controller::view/$1");
});

$routes->group("tracking_01_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "tracking_01_doeb_Controller::index");
    $routes->get("add/(:any)", "tracking_01_doeb_Controller::add/$1");
    $routes->post("store", "tracking_01_doeb_Controller::store");
    $routes->get("edt/(:any)", "tracking_01_doeb_Controller::edit/$1");
    $routes->post("upd", "tracking_01_doeb_Controller::update");
    $routes->get("del/(:num)", "tracking_01_doeb_Controller::delete/$1");
    $routes->get("view/(:num)", "tracking_01_doeb_Controller::view/$1");
    $routes->get("showall/", "tracking_01_doeb_Controller::showall");
});

$routes->group("tracking_02_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "tracking_02_doeb_Controller::index");
    $routes->get("add/(:any)", "tracking_02_doeb_Controller::add/$1");
    $routes->post("store", "tracking_02_doeb_Controller::store");
    $routes->get("edt/(:num)", "tracking_02_doeb_Controller::edit/$1");
    $routes->post("upd", "tracking_02_doeb_Controller::update");
    $routes->get("del/(:num)", "tracking_02_doeb_Controller::delete/$1");
    $routes->get("view/(:num)", "tracking_02_doeb_Controller::view/$1");
});

$routes->group("tracking_03_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "tracking_03_doeb_Controller::index");
    $routes->get("add/(:any)", "tracking_03_doeb_Controller::add/$1");
    $routes->post("store", "tracking_03_doeb_Controller::store");
    $routes->get("edt/(:num)", "tracking_03_doeb_Controller::edit/$1");
    $routes->post("upd", "tracking_03_doeb_Controller::update");
    $routes->get("del/(:num)", "tracking_03_doeb_Controller::delete/$1");
    $routes->get("view/(:num)", "tracking_03_doeb_Controller::view/$1");
});

$routes->group("tracking_ins_approve_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "tracking_ins_approve_doeb_Controller::index");
    $routes->get("add", "tracking_ins_approve_doeb_Controller::add");
    $routes->post("store", "tracking_ins_approve_doeb_Controller::store");
    $routes->get("edt/(:num)", "tracking_ins_approve_doeb_Controller::edit/$1");
    $routes->post("upd", "tracking_ins_approve_doeb_Controller::update");
    $routes->get("del/(:num)", "tracking_ins_approve_doeb_Controller::delete/$1");
    $routes->get("view/(:num)", "tracking_ins_approve_doeb_Controller::view/$1");
});

$routes->group("report_show_gis_01_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "report_show_gis_01_doeb_Controller::index");
    $routes->get("add", "report_show_gis_01_doeb_Controller::add");
    $routes->post("store", "report_show_gis_01_doeb_Controller::store");
    $routes->get("edt/(:num)", "report_show_gis_01_doeb_Controller::edit/$1");
    $routes->post("upd", "report_show_gis_01_doeb_Controller::update");
    $routes->get("del/(:num)", "report_show_gis_01_doeb_Controller::delete/$1");
    $routes->get("view/(:num)", "report_show_gis_01_doeb_Controller::view/$1");
});

$routes->group("report_show_gis_02_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "report_show_gis_02_doeb_Controller::index");
    $routes->get("add", "report_show_gis_02_doeb_Controller::add");
    $routes->post("store", "report_show_gis_02_doeb_Controller::store");
    $routes->get("edt/(:num)", "report_show_gis_02_doeb_Controller::edit/$1");
    $routes->post("upd", "report_show_gis_02_doeb_Controller::update");
    $routes->get("del/(:num)", "report_show_gis_02_doeb_Controller::delete/$1");
    $routes->get("view/(:num)", "report_show_gis_02_doeb_Controller::view/$1");
});

$routes->group("report_show_gis_03_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "report_show_gis_03_doeb_Controller::index");
    $routes->get("add", "report_show_gis_03_doeb_Controller::add");
    $routes->post("store", "report_show_gis_03_doeb_Controller::store");
    $routes->get("edt/(:num)", "report_show_gis_03_doeb_Controller::edit/$1");
    $routes->post("upd", "report_show_gis_03_doeb_Controller::update");
    $routes->get("del/(:num)", "report_show_gis_03_doeb_Controller::delete/$1");
    $routes->get("view/(:num)", "report_show_gis_03_doeb_Controller::view/$1");
});

$routes->group("report_show_manage_01_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "report_show_manage_01_doeb_Controller::index");
    $routes->get("add", "report_show_manage_01_doeb_Controller::add");
    $routes->post("store", "report_show_manage_01_doeb_Controller::store");
    $routes->get("edt/(:num)", "report_show_manage_01_doeb_Controller::edit/$1");
    $routes->post("upd", "report_show_manage_01_doeb_Controller::update");
    $routes->get("del/(:num)", "report_show_manage_01_doeb_Controller::delete/$1");
    $routes->get("view/(:num)", "report_show_manage_01_doeb_Controller::view/$1");
});

$routes->group("report_show_manage_02_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "report_show_manage_02_doeb_Controller::index");
    $routes->get("add", "report_show_manage_02_doeb_Controller::add");
    $routes->post("store", "report_show_manage_02_doeb_Controller::store");
    $routes->get("edt/(:num)", "report_show_manage_02_doeb_Controller::edit/$1");
    $routes->post("upd", "report_show_manage_02_doeb_Controller::update");
    $routes->get("del/(:num)", "report_show_manage_02_doeb_Controller::delete/$1");
    $routes->get("view/(:num)", "report_show_manage_02_doeb_Controller::view/$1");
});

$routes->group("report_show_manage_03_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "report_show_manage_03_doeb_Controller::index");
    $routes->get("add", "report_show_manage_03_doeb_Controller::add");
    $routes->post("store", "report_show_manage_03_doeb_Controller::store");
    $routes->get("edt/(:num)", "report_show_manage_03_doeb_Controller::edit/$1");
    $routes->post("upd", "report_show_manage_03_doeb_Controller::update");
    $routes->get("del/(:num)", "report_show_manage_03_doeb_Controller::delete/$1");
    $routes->get("view/(:num)", "report_show_manage_03_doeb_Controller::view/$1");
});

$routes->group("report_show_01_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "report_show_01_doeb_Controller::index");
    $routes->get("add", "report_show_01_doeb_Controller::add");
    $routes->post("store", "report_show_01_doeb_Controller::store");
    $routes->get("edt/(:num)", "report_show_01_doeb_Controller::edit/$1");
    $routes->post("upd", "report_show_01_doeb_Controller::update");
    $routes->get("del/(:num)", "report_show_01_doeb_Controller::delete/$1");
    $routes->get("view/(:num)", "report_show_01_doeb_Controller::view/$1");
});

$routes->group("report_show_02_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "report_show_02_doeb_Controller::index");
    $routes->get("add", "report_show_02_doeb_Controller::add");
    $routes->post("store", "report_show_02_doeb_Controller::store");
    $routes->get("edt/(:num)", "report_show_02_doeb_Controller::edit/$1");
    $routes->post("upd", "report_show_02_doeb_Controller::update");
    $routes->get("del/(:num)", "report_show_02_doeb_Controller::delete/$1");
    $routes->get("view/(:num)", "report_show_02_doeb_Controller::view/$1");
});

$routes->group("report_show_03_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "report_show_03_doeb_Controller::index");
    $routes->get("add", "report_show_03_doeb_Controller::add");
    $routes->post("store", "report_show_03_doeb_Controller::store");
    $routes->get("edt/(:num)", "report_show_03_doeb_Controller::edit/$1");
    $routes->post("upd", "report_show_03_doeb_Controller::update");
    $routes->get("del/(:num)", "report_show_03_doeb_Controller::delete/$1");
    $routes->get("view/(:num)", "report_show_03_doeb_Controller::view/$1");
});

$routes->group("report_show_04_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "report_show_04_doeb_Controller::index");
    $routes->get("add", "report_show_04_doeb_Controller::add");
    $routes->post("store", "report_show_04_doeb_Controller::store");
    $routes->get("edt/(:num)", "report_show_04_doeb_Controller::edit/$1");
    $routes->post("upd", "report_show_04_doeb_Controller::update");
    $routes->get("del/(:num)", "report_show_04_doeb_Controller::delete/$1");
    $routes->get("view/(:num)", "report_show_04_doeb_Controller::view/$1");
});

$routes->group("report_show_05_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "report_show_05_doeb_Controller::index");
    $routes->get("add", "report_show_05_doeb_Controller::add");
    $routes->post("store", "report_show_05_doeb_Controller::store");
    $routes->get("edt/(:num)", "report_show_05_doeb_Controller::edit/$1");
    $routes->post("upd", "report_show_05_doeb_Controller::update");
    $routes->get("del/(:num)", "report_show_05_doeb_Controller::delete/$1");
    $routes->get("view/(:num)", "report_show_05_doeb_Controller::view/$1");
});

$routes->group("report_show_06_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "report_show_06_doeb_Controller::index");
    $routes->get("add", "report_show_06_doeb_Controller::add");
    $routes->post("store", "report_show_06_doeb_Controller::store");
    $routes->get("edt/(:num)", "report_show_06_doeb_Controller::edit/$1");
    $routes->post("upd", "report_show_06_doeb_Controller::update");
    $routes->get("del/(:num)", "report_show_06_doeb_Controller::delete/$1");
    $routes->get("view/(:num)", "report_show_06_doeb_Controller::view/$1");
});

$routes->group("report_show_07_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "report_show_07_doeb_Controller::index");
    $routes->get("add", "report_show_07_doeb_Controller::add");
    $routes->post("store", "report_show_07_doeb_Controller::store");
    $routes->get("edt/(:num)", "report_show_07_doeb_Controller::edit/$1");
    $routes->post("upd", "report_show_07_doeb_Controller::update");
    $routes->get("del/(:num)", "report_show_07_doeb_Controller::delete/$1");
    $routes->get("view/(:num)", "report_show_07_doeb_Controller::view/$1");
});

$routes->group("report_show_08_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "report_show_08_doeb_Controller::index");
    $routes->get("add", "report_show_08_doeb_Controller::add");
    $routes->post("store", "report_show_08_doeb_Controller::store");
    $routes->get("edt/(:num)", "report_show_08_doeb_Controller::edit/$1");
    $routes->post("upd", "report_show_08_doeb_Controller::update");
    $routes->get("del/(:num)", "report_show_08_doeb_Controller::delete/$1");
    $routes->get("view/(:num)", "report_show_08_doeb_Controller::view/$1");
});

$routes->group("report_show_09_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "report_show_09_doeb_Controller::index");
    $routes->get("add", "report_show_09_doeb_Controller::add");
    $routes->post("store", "report_show_09_doeb_Controller::store");
    $routes->get("edt/(:num)", "report_show_09_doeb_Controller::edit/$1");
    $routes->post("upd", "report_show_09_doeb_Controller::update");
    $routes->get("del/(:num)", "report_show_09_doeb_Controller::delete/$1");
    $routes->get("view/(:num)", "report_show_09_doeb_Controller::view/$1");
});

$routes->group("report_show_10_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "report_show_10_doeb_Controller::index");
    $routes->get("add", "report_show_10_doeb_Controller::add");
    $routes->post("store", "report_show_10_doeb_Controller::store");
    $routes->get("edt/(:num)", "report_show_10_doeb_Controller::edit/$1");
    $routes->post("upd", "report_show_10_doeb_Controller::update");
    $routes->get("del/(:num)", "report_show_10_doeb_Controller::delete/$1");
    $routes->get("view/(:num)", "report_show_10_doeb_Controller::view/$1");
});


$routes->group("report_show_01_v2_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "report_show_01_v2_doeb_Controller::index");
    $routes->get("add", "report_show_01_v2_doeb_Controller::add");
    $routes->post("store", "report_show_01_v2_doeb_Controller::store");
    $routes->get("edt/(:num)", "report_show_01_v2_doeb_Controller::edit/$1");
    $routes->post("upd", "report_show_01_v2_doeb_Controller::update");
    $routes->get("del/(:num)", "report_show_01_v2_doeb_Controller::delete/$1");
    $routes->get("view/(:num)", "report_show_01_v2_doeb_Controller::view/$1");
});

$routes->group("report_show_02_v2_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "report_show_02_v2_doeb_Controller::index");
    $routes->get("add", "report_show_02_v2_doeb_Controller::add");
    $routes->post("store", "report_show_02_v2_doeb_Controller::store");
    $routes->get("edt/(:num)", "report_show_02_v2_doeb_Controller::edit/$1");
    $routes->post("upd", "report_show_02_v2_doeb_Controller::update");
    $routes->get("del/(:num)", "report_show_02_v2_doeb_Controller::delete/$1");
    $routes->get("view/(:num)", "report_show_02_v2_doeb_Controller::view/$1");
});

$routes->group("report_show_03_v2_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "report_show_03_v2_doeb_Controller::index");
    $routes->get("add", "report_show_03_v2_doeb_Controller::add");
    $routes->post("store", "report_show_03_v2_doeb_Controller::store");
    $routes->get("edt/(:num)", "report_show_03_v2_doeb_Controller::edit/$1");
    $routes->post("upd", "report_show_03_v2_doeb_Controller::update");
    $routes->get("del/(:num)", "report_show_03_v2_doeb_Controller::delete/$1");
    $routes->get("view/(:num)", "report_show_03_v2_doeb_Controller::view/$1");
});

$routes->group("report_show_04_v2_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "report_show_04_v2_doeb_Controller::index");
    $routes->get("add", "report_show_04_v2_doeb_Controller::add");
    $routes->post("store", "report_show_04_v2_doeb_Controller::store");
    $routes->get("edt/(:num)", "report_show_04_v2_doeb_Controller::edit/$1");
    $routes->post("upd", "report_show_04_v2_doeb_Controller::update");
    $routes->get("del/(:num)", "report_show_04_v2_doeb_Controller::delete/$1");
    $routes->get("view/(:num)", "report_show_04_v2_doeb_Controller::view/$1");
});

$routes->group("report_show_05_v2_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "report_show_05_v2_doeb_Controller::index");
    $routes->get("add", "report_show_05_v2_doeb_Controller::add");
    $routes->post("store", "report_show_05_v2_doeb_Controller::store");
    $routes->get("edt/(:num)", "report_show_05_v2_doeb_Controller::edit/$1");
    $routes->post("upd", "report_show_05_v2_doeb_Controller::update");
    $routes->get("del/(:num)", "report_show_05_v2_doeb_Controller::delete/$1");
    $routes->get("view/(:num)", "report_show_05_v2_doeb_Controller::view/$1");
});

$routes->group("report_show_06_v2_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "report_show_06_v2_doeb_Controller::index");
    $routes->get("add", "report_show_06_v2_doeb_Controller::add");
    $routes->post("store", "report_show_06_v2_doeb_Controller::store");
    $routes->get("edt/(:num)", "report_show_06_v2_doeb_Controller::edit/$1");
    $routes->post("upd", "report_show_06_v2_doeb_Controller::update");
    $routes->get("del/(:num)", "report_show_06_v2_doeb_Controller::delete/$1");
    $routes->get("view/(:num)", "report_show_06_v2_doeb_Controller::view/$1");
});

$routes->group("report_show_07_v2_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "report_show_07_v2_doeb_Controller::index");
    $routes->get("add", "report_show_07_v2_doeb_Controller::add");
    $routes->post("store", "report_show_07_v2_doeb_Controller::store");
    $routes->get("edt/(:num)", "report_show_07_v2_doeb_Controller::edit/$1");
    $routes->post("upd", "report_show_07_v2_doeb_Controller::update");
    $routes->get("del/(:num)", "report_show_07_v2_doeb_Controller::delete/$1");
    $routes->get("view/(:num)", "report_show_07_v2_doeb_Controller::view/$1");
});

$routes->group("report_show_08_v2_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "report_show_08_v2_doeb_Controller::index");
    $routes->get("add", "report_show_08_v2_doeb_Controller::add");
    $routes->post("store", "report_show_08_v2_doeb_Controller::store");
    $routes->get("edt/(:num)", "report_show_08_v2_doeb_Controller::edit/$1");
    $routes->post("upd", "report_show_08_v2_doeb_Controller::update");
    $routes->get("del/(:num)", "report_show_08_v2_doeb_Controller::delete/$1");
    $routes->get("view/(:num)", "report_show_08_v2_doeb_Controller::view/$1");
});

$routes->group("report_show_09_v2_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "report_show_09_v2_doeb_Controller::index");
    $routes->get("add", "report_show_09_v2_doeb_Controller::add");
    $routes->post("store", "report_show_09_v2_doeb_Controller::store");
    $routes->get("edt/(:num)", "report_show_09_v2_doeb_Controller::edit/$1");
    $routes->post("upd", "report_show_09_v2_doeb_Controller::update");
    $routes->get("del/(:num)", "report_show_09_v2_doeb_Controller::delete/$1");
    $routes->get("view/(:num)", "report_show_09_v2_doeb_Controller::view/$1");
});

$routes->group("report_show_10_v2_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "report_show_10_v2_doeb_Controller::index");
    $routes->get("add", "report_show_10_v2_doeb_Controller::add");
    $routes->post("store", "report_show_10_v2_doeb_Controller::store");
    $routes->get("edt/(:num)", "report_show_10_v2_doeb_Controller::edit/$1");
    $routes->post("upd", "report_show_10_v2_doeb_Controller::update");
    $routes->get("del/(:num)", "report_show_10_v2_doeb_Controller::delete/$1");
    $routes->get("view/(:num)", "report_show_10_v2_doeb_Controller::view/$1");
});

$routes->group("transfer_budget_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "transfer_budget_doeb_Controller::index");
    $routes->get("add", "transfer_budget_doeb_Controller::add");
    $routes->post("store", "transfer_budget_doeb_Controller::store");
    $routes->get("edt/(:num)", "transfer_budget_doeb_Controller::edit/$1");
    $routes->post("upd", "transfer_budget_doeb_Controller::update");
    $routes->get("del/(:num)", "transfer_budget_doeb_Controller::delete/$1");
    $routes->get("view/(:num)", "transfer_budget_doeb_Controller::view/$1");
});

$routes->group("monthly_plan_activity_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "monthly_plan_activity_doeb_Controller::index");
    $routes->get("add", "monthly_plan_activity_doeb_Controller::add");
    $routes->post("store", "monthly_plan_activity_doeb_Controller::store");
    $routes->get("edt/(:any)", "monthly_plan_activity_doeb_Controller::edit/$1");
    $routes->post("upd", "monthly_plan_activity_doeb_Controller::update");
    $routes->get("del/(:any)", "monthly_plan_activity_doeb_Controller::delete/$1");
    $routes->get("view/(:any)", "monthly_plan_activity_doeb_Controller::view/$1");
});

$routes->group("monthly_plan_activity_approve_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "monthly_plan_activity_approve_doeb_Controller::index");
    $routes->get("add", "monthly_plan_activity_approve_doeb_Controller::add");
    $routes->post("store", "monthly_plan_activity_approve_doeb_Controller::store");
    $routes->get("edt/(:any)", "monthly_plan_activity_approve_doeb_Controller::edit/$1");
    $routes->post("upd", "monthly_plan_activity_approve_doeb_Controller::update");
    $routes->get("del/(:any)", "monthly_plan_activity_approve_doeb_Controller::delete/$1");
    $routes->get("view/(:any)", "monthly_plan_activity_approve_doeb_Controller::view/$1");
});

$routes->group("groupuser_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "groupuser_doeb_Controller::index");
    $routes->get("add", "groupuser_doeb_Controller::add");
    $routes->post("store", "groupuser_doeb_Controller::store");
    $routes->get("edt/(:any)", "groupuser_doeb_Controller::edit/$1");
    $routes->post("upd", "groupuser_doeb_Controller::update");
    $routes->get("del/(:any)", "groupuser_doeb_Controller::delete/$1");
    $routes->get("view/(:any)", "groupuser_doeb_Controller::view/$1");
});

$routes->group("groupuseraccressprogram_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "groupuseraccressprogram_doeb_Controller::index");
    $routes->get("add", "groupuseraccressprogram_doeb_Controller::add");
    $routes->post("store", "groupuseraccressprogram_doeb_Controller::store");
    $routes->get("edt/(:any)", "groupuseraccressprogram_doeb_Controller::edit/$1");
    $routes->post("upd", "groupuseraccressprogram_doeb_Controller::update");
    $routes->get("del/(:any)", "groupuseraccressprogram_doeb_Controller::delete/$1");
    $routes->get("view/(:any)", "groupuseraccressprogram_doeb_Controller::view/$1");
});

$routes->group("useraccressgroup_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "useraccressgroup_doeb_Controller::index");
    $routes->get("add", "useraccressgroup_doeb_Controller::add");
    $routes->post("store", "useraccressgroup_doeb_Controller::store");
    $routes->get("edt/(:any)", "useraccressgroup_doeb_Controller::edit/$1");
    $routes->post("upd", "useraccressgroup_doeb_Controller::update");
    $routes->get("del/(:any)", "useraccressgroup_doeb_Controller::delete/$1");
    $routes->get("view/(:any)", "useraccressgroup_doeb_Controller::view/$1");
});

$routes->group("listuseraccressprogram_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "listuseraccressprogram_doeb_Controller::index");
    $routes->get("add", "listuseraccressprogram_doeb_Controller::add");
    $routes->post("store", "listuseraccressprogram_doeb_Controller::store");
    $routes->get("edt/(:any)", "listuseraccressprogram_doeb_Controller::edit/$1");
    $routes->post("upd", "listuseraccressprogram_doeb_Controller::update");
    $routes->get("del/(:any)", "listuseraccressprogram_doeb_Controller::delete/$1");
    $routes->get("view/(:any)", "listuseraccressprogram_doeb_Controller::view/$1");
});

$routes->group("listusesystem_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "listusesystem_doeb_Controller::index");
    $routes->get("add", "listusesystem_doeb_Controller::add");
    $routes->post("store", "listusesystem_doeb_Controller::store");
    $routes->get("edt/(:any)", "listusesystem_doeb_Controller::edit/$1");
    $routes->post("upd", "listusesystem_doeb_Controller::update");
    $routes->get("del/(:any)", "listusesystem_doeb_Controller::delete/$1");
    $routes->get("view/(:any)", "listusesystem_doeb_Controller::view/$1");
});

/* =======================================================
Ajax List
======================================================= */
$routes->group("Ajax", function ($routes) {
    $routes->get('amphur_list/(:num)', 'Ajax_reload::amphur_list/$1');
    $routes->get('StrategyRelateDetail_list/(:num)', 'Ajax_reload::StrategyRelateDetail_list/$1');
    $routes->get('StrategyRelateDetail_listApprove/(:num)', 'Ajax_reload::StrategyRelateDetail_listApprove/$1');
    $routes->get('StrategyTarGetDetail_list/(:num)', 'Ajax_reload::StrategyTarGetDetail_list/$1');
    $routes->get('OverAllPlanAnnualTargetValueDoeb_year/(:num)', 'Ajax_reload::OverAllPlanAnnualTargetValueDoeb_year/$1');
    $routes->get('RelatedPolicies_list/(:num)', 'Ajax_reload::RelatedPolicies_list/$1');
    $routes->get('RelatedStrategies_list/(:num)', 'Ajax_reload::RelatedStrategies_list/$1');
    $routes->get('StrategyRelateDetail_listForPlanFiveYear/(:num)', 'Ajax_reload::StrategyRelateDetail_listForPlanFiveYear/$1');
    $routes->get('StrategyTarGetDetail_listForPlanFiveYear/(:num)', 'Ajax_reload::StrategyTarGetDetail_listForPlanFiveYear/$1');
    $routes->get('StrategyIndicatorDetail_list/(:num)', 'Ajax_reload::StrategyIndicatorDetail_list/$1');
    $routes->get('StrategyTarGetDetail_listForKark/(:num)', 'Ajax_reload::StrategyTarGetDetail_listForKark/$1');
    $routes->get('StructureBudgetDropdownLv2Doeb/(:num)', 'Ajax_reload::StructureBudgetDropdownLv2Doeb/$1');
    $routes->get('StructureBudgetDropdownLv3Doeb/(:any)', 'Ajax_reload::StructureBudgetDropdownLv3Doeb/$1');
});


$routes->group('calendar_activity', static function ($routes) {
    $routeController = 'calendar_activity_Controller';
    $routes->get('', "$routeController::index");
    $routes->get('getCalendarEvents', "$routeController::getCalendarEvents");
});

$routes->group('calendar_management', static function ($routes) {
    $routeController = 'calendar_Management_Controller';
    $routes->match(["get", "post"], "/", "$routeController::index");
    $routes->get('add', "$routeController::add");
    $routes->post('store', "$routeController::store");
    $routes->get('edit/(:num)', "$routeController::edit/$1");
    $routes->post('upd', "$routeController::update");
    $routes->get('delete/(:num)', "$routeController::delete/$1");
});



$routes->group('registration_tracking', static function ($routes) {
    $routeController = 'registration_tracking_Controller';
    $routes->get('', "$routeController::index");
    $routes->get('detail/(:num)', "$routeController::detail/$1");
});

$routes->group('registration_form_management', static function ($routes) {
    $routeController = 'registration_form_management_Controller';
    $routes->match(["get", "post"], "/", "$routeController::index");
    $routes->get('add', "$routeController::add");
    $routes->post('store', "$routeController::store");
    $routes->get('edit/(:num)', "$routeController::edit/$1");
    $routes->post('upd', "$routeController::update");
    $routes->get('delete/(:num)', "$routeController::delete/$1");
});


$routes->group('qrcode', static function ($routes) {
    $routeController = 'QrCodeController';
    $routes->match(["get", "post"], "/", "$routeController::index");
    $routes->get('add', "$routeController::add");
    $routes->post('store', "$routeController::store");
    $routes->get('view/(:num)', "$routeController::edit/$1");
    $routes->get('edit/(:num)', "$routeController::edit/$1");
    $routes->post('update', "$routeController::update");
    $routes->get('del/(:num)', "$routeController::delete/$1");
    $routes->post('validateLink', "$routeController::validateLink");
    $routes->post('generateQrCode', "$routeController::generateQrCode");
    $routes->post('downloadQrCode', "$routeController::downloadQrCode");
});

$routes->group("monthly_plan_budget_project_approve_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "monthly_plan_budget_project_approve_doeb_Controller::index");
    $routes->get("add", "monthly_plan_budget_project_approve_doeb_Controller::add");
    $routes->post("store", "monthly_plan_budget_project_approve_doeb_Controller::store");
    $routes->get("edt/(:any)", "monthly_plan_budget_project_approve_doeb_Controller::edit/$1");
    $routes->post("upd", "monthly_plan_budget_project_approve_doeb_Controller::update");
    $routes->get("del/(:any)", "monthly_plan_budget_project_approve_doeb_Controller::delete/$1");
    $routes->get("view/(:num)", "monthly_plan_budget_project_approve_doeb_Controller::view/$1");
});

$routes->group("monthly_plan_budget_other_approve_doeb", function ($routes) {
    $routes->match(["get", "post"], "/", "monthly_plan_budget_other_approve_doeb_Controller::index");
    $routes->get("add", "monthly_plan_budget_other_approve_doeb_Controller::add");
    $routes->post("store", "monthly_plan_budget_other_approve_doeb_Controller::store");
    $routes->get("edt/(:num)", "monthly_plan_budget_other_approve_doeb_Controller::edit/$1");
    $routes->post("upd", "monthly_plan_budget_other_approve_doeb_Controller::update");
    $routes->get("del/(:num)", "monthly_plan_budget_other_approve_doeb_Controller::delete/$1");
    $routes->get("view/(:num)", "monthly_plan_budget_other_approve_doeb_Controller::view/$1");
});


$routes->group('viewqrcode', static function ($routes) {
    $routeController = 'QrCodeViewController';
    $routes->get('', "$routeController::index");
});



/* =======================================================
project_management : จัดทำข้อมูลภาพรวมโครงการ
======================================================= */

$routes->group("project_management", function ($routes) {
    $controller = "project_management_Controller";
    $routes->match(["get", "post"], "/", "$controller::index");
    $routes->get("add", "$controller::add");
    $routes->post("store", "$controller::store");
    $routes->get("edt/(:num)", "$controller::edit/$1");
    $routes->post("upd", "$controller::update");
    $routes->get("del/(:num)", "$controller::delete/$1");
});



/* =======================================================
ิ budget_management : จัดทำคำของบประมาณ
======================================================= */
$routes->group("budget_management", function ($routes) {
    $controller = "budget_management_Controller";
    $routes->match(["get", "post"], "/", "$controller::index");
    $routes->get("add", "$controller::add");
    $routes->post("store", "$controller::store");
    $routes->get("edt/(:num)", "$controller::edit/$1");
    $routes->post("upd", "$controller::update");
    $routes->get("del/(:num)", "$controller::delete/$1");
});


/* =======================================================
planning_management : จัดทำ/ปรับปรุงแผนโครงการ
======================================================= */

$routes->group("planning_management", function ($routes) {
    $controller = "planning_management_Controller";
    $routes->match(["get", "post"], "/", "$controller::index");
    $routes->get("add", "$controller::add");
    $routes->post("store", "$controller::store");
    $routes->get("edt/(:num)", "$controller::edit/$1");
    $routes->post("upd", "$controller::update");
    $routes->get("del/(:num)", "$controller::delete/$1");
});

/* =======================================================
monthly_progress : บันทึกความก้าวหน้ารายเดือน
======================================================= */

$routes->group("monthly_progress", function ($routes) {
    $controller = "monthly_progress_Controller";
    $routes->match(["get", "post"], "/", "$controller::index");
    $routes->get("add", "$controller::add");
    $routes->post("store", "$controller::store");
    $routes->get("edt/(:num)", "$controller::edit/$1");
    $routes->post("upd", "$controller::update");
    $routes->get("del/(:num)", "$controller::delete/$1");
});


/* =======================================================
จัดทำระเบียบวาระการประชุม
======================================================= */

$routes->group("MeetingAgendaDoeb", function ($routes) {
    $routes->match(["get", "post"], "/", "MeetingAgendaDoebController::index");
    $routes->get("add", "MeetingAgendaDoebController::add");
    $routes->post("store", "MeetingAgendaDoebController::store");
    $routes->get("edt/(:num)", "MeetingAgendaDoebController::edit/$1");
    $routes->post("upd", "MeetingAgendaDoebController::update");
    $routes->get("del/(:num)", "MeetingAgendaDoebController::delete/$1");
    $routes->get("view/(:num)", "MeetingAgendaDoebController::view/$1");
});
