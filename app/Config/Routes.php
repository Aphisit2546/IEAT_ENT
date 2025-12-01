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

$routes->group("center_ieat_ent", function ($routes) {
    $routes->match(["get", "post"], "/", "center_ieat_ent_Controller::index");
    $routes->get("add/(:any)", "center_ieat_ent_Controller::add/$1");
    $routes->post("store", "center_ieat_ent_Controller::store");
    $routes->get("edt/(:num)", "center_ieat_ent_Controller::edit/$1");
    $routes->post("upd", "center_ieat_ent_Controller::update");
    $routes->get("del/(:num)", "center_ieat_ent_Controller::delete/$1");
    $routes->get("view/(:num)", "center_ieat_ent_Controller::view/$1");
});

$routes->group("ieat_ent_011", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_ent_011_Controller::index");
    $routes->get("add/(:any)", "ieat_ent_011_Controller::add/$1");
    $routes->post("store", "ieat_ent_011_Controller::store");
    $routes->get("edt/(:num)", "ieat_ent_011_Controller::edit/$1");
    $routes->post("upd", "ieat_ent_011_Controller::update");
    $routes->get("del/(:num)", "ieat_ent_011_Controller::delete/$1");
    $routes->get("view/(:num)", "ieat_ent_011_Controller::view/$1");
});

$routes->group("ieat_ent_011_1", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_ent_011_1_Controller::index");
    $routes->get("add/(:any)", "ieat_ent_011_1_Controller::add/$1");
    $routes->post("store", "ieat_ent_011_1_Controller::store");
    $routes->get("edt/(:num)", "ieat_ent_011_1_Controller::edit/$1");
    $routes->post("upd", "ieat_ent_011_1_Controller::update");
    $routes->get("del/(:num)", "ieat_ent_011_1_Controller::delete/$1");
    $routes->get("view/(:num)", "ieat_ent_011_1_Controller::view/$1");
});

$routes->group("ieat_ent_013", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_ent_013_Controller::index");
    $routes->get("add/(:any)", "ieat_ent_013_Controller::add/$1");
    $routes->post("store", "ieat_ent_013_Controller::store");
    $routes->get("edt/(:num)", "ieat_ent_013_Controller::edit/$1");
    $routes->post("upd", "ieat_ent_013_Controller::update");
    $routes->get("del/(:num)", "ieat_ent_013_Controller::delete/$1");
    $routes->get("view/(:num)", "ieat_ent_013_Controller::view/$1");
});

$routes->group("ieat_ent_013_1", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_ent_013_1_Controller::index");
    $routes->get("add/(:any)", "ieat_ent_013_1_Controller::add/$1");
    $routes->post("store", "ieat_ent_013_1_Controller::store");
    $routes->get("edt/(:num)", "ieat_ent_013_1_Controller::edit/$1");
    $routes->post("upd", "ieat_ent_013_1_Controller::update");
    $routes->get("del/(:num)", "ieat_ent_013_1_Controller::delete/$1");
    $routes->get("view/(:num)", "ieat_ent_013_1_Controller::view/$1");
});

$routes->group("ieat_ent_013_2", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_ent_013_2_Controller::index");
    $routes->get("add/(:any)", "ieat_ent_013_2_Controller::add/$1");
    $routes->post("store", "ieat_ent_013_2_Controller::store");
    $routes->get("edt/(:num)", "ieat_ent_013_2_Controller::edit/$1");
    $routes->post("upd", "ieat_ent_013_2_Controller::update");
    $routes->get("del/(:num)", "ieat_ent_013_2_Controller::delete/$1");
    $routes->get("view/(:num)", "ieat_ent_013_2_Controller::view/$1");
});

$routes->group("ieat_ent_013_3", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_ent_013_3_Controller::index");
    $routes->get("add/(:any)", "ieat_ent_013_3_Controller::add/$1");
    $routes->post("store", "ieat_ent_013_3_Controller::store");
    $routes->get("edt/(:num)", "ieat_ent_013_3_Controller::edit/$1");
    $routes->post("upd", "ieat_ent_013_3_Controller::update");
    $routes->get("del/(:num)", "ieat_ent_013_3_Controller::delete/$1");
    $routes->get("view/(:num)", "ieat_ent_013_3_Controller::view/$1");
});

$routes->group("ieat_ent_013_4", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_ent_013_4_Controller::index");
    $routes->get("add/(:any)", "ieat_ent_013_4_Controller::add/$1");
    $routes->post("store", "ieat_ent_013_4_Controller::store");
    $routes->get("edt/(:num)", "ieat_ent_013_4_Controller::edit/$1");
    $routes->post("upd", "ieat_ent_013_4_Controller::update");
    $routes->get("del/(:num)", "ieat_ent_013_4_Controller::delete/$1");
    $routes->get("view/(:num)", "ieat_ent_013_4_Controller::view/$1");
});

$routes->group("ieat_ent_013_9", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_ent_013_9_Controller::index");
    $routes->get("add/(:any)", "ieat_ent_013_9_Controller::add/$1");
    $routes->post("store", "ieat_ent_013_9_Controller::store");
    $routes->get("edt/(:num)", "ieat_ent_013_9_Controller::edit/$1");
    $routes->post("upd", "ieat_ent_013_9_Controller::update");
    $routes->get("del/(:num)", "ieat_ent_013_9_Controller::delete/$1");
    $routes->get("view/(:num)", "ieat_ent_013_9_Controller::view/$1");
});

$routes->group("ieat_ent_013_10", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_ent_013_10_Controller::index");
    $routes->get("add/(:any)", "ieat_ent_013_10_Controller::add/$1");
    $routes->post("store", "ieat_ent_013_10_Controller::store");
    $routes->get("edt/(:num)", "ieat_ent_013_10_Controller::edit/$1");
    $routes->post("upd", "ieat_ent_013_10_Controller::update");
    $routes->get("del/(:num)", "ieat_ent_013_10_Controller::delete/$1");
    $routes->get("view/(:num)", "ieat_ent_013_10_Controller::view/$1");
});

$routes->group("ieat_ent_013_p1", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_ent_013_p1_Controller::index");
    $routes->get("add/(:any)", "ieat_ent_013_p1_Controller::add/$1");
    $routes->post("store", "ieat_ent_013_p1_Controller::store");
    $routes->get("edt/(:num)", "ieat_ent_013_p1_Controller::edit/$1");
    $routes->post("upd", "ieat_ent_013_p1_Controller::update");
    $routes->get("del/(:num)", "ieat_ent_013_p1_Controller::delete/$1");
    $routes->get("view/(:num)", "ieat_ent_013_p1_Controller::view/$1");
});

$routes->group("ieat_ent_013_p2", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_ent_013_p2_Controller::index");
    $routes->get("add/(:any)", "ieat_ent_013_p2_Controller::add/$1");
    $routes->post("store", "ieat_ent_013_p2_Controller::store");
    $routes->get("edt/(:num)", "ieat_ent_013_p2_Controller::edit/$1");
    $routes->post("upd", "ieat_ent_013_p2_Controller::update");
    $routes->get("del/(:num)", "ieat_ent_013_p2_Controller::delete/$1");
    $routes->get("view/(:num)", "ieat_ent_013_p2_Controller::view/$1");
});

//////////////////////////////////////////////////////////////////////////////////////////////////////////////

$routes->group("ieat_ent_021", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_ent_021_Controller::index");
    $routes->get("add/(:any)", "ieat_ent_021_Controller::add/$1");
    $routes->post("store", "ieat_ent_021_Controller::store");
    $routes->get("edt/(:num)", "ieat_ent_021_Controller::edit/$1");
    $routes->post("upd", "ieat_ent_021_Controller::update");
    $routes->get("del/(:num)", "ieat_ent_021_Controller::delete/$1");
    $routes->get("view/(:num)", "ieat_ent_021_Controller::view/$1");
});

$routes->group("ieat_ent_022", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_ent_022_Controller::index");
    $routes->get("add/(:any)", "ieat_ent_022_Controller::add/$1");
    $routes->post("store", "ieat_ent_022_Controller::store");
    $routes->get("edt/(:num)", "ieat_ent_022_Controller::edit/$1");
    $routes->post("upd", "ieat_ent_022_Controller::update");
    $routes->get("del/(:num)", "ieat_ent_022_Controller::delete/$1");
    $routes->get("view/(:num)", "ieat_ent_022_Controller::view/$1");
});

$routes->group("ieat_ent_023", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_ent_023_Controller::index");
    $routes->get("add/(:any)", "ieat_ent_023_Controller::add/$1");
    $routes->post("store", "ieat_ent_023_Controller::store");
    $routes->get("edt/(:num)", "ieat_ent_023_Controller::edit/$1");
    $routes->post("upd", "ieat_ent_023_Controller::update");
    $routes->get("del/(:num)", "ieat_ent_023_Controller::delete/$1");
    $routes->get("view/(:num)", "ieat_ent_023_Controller::view/$1");
});

$routes->group("ieat_ent_024", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_ent_024_Controller::index");
    $routes->get("add/(:any)", "ieat_ent_024_Controller::add/$1");
    $routes->post("store", "ieat_ent_024_Controller::store");
    $routes->get("edt/(:num)", "ieat_ent_024_Controller::edit/$1");
    $routes->post("upd", "ieat_ent_024_Controller::update");
    $routes->get("del/(:num)", "ieat_ent_024_Controller::delete/$1");
    $routes->get("view/(:num)", "ieat_ent_024_Controller::view/$1");
});

$routes->group("ieat_ent_025", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_ent_025_Controller::index");
    $routes->get("add/(:any)", "ieat_ent_025_Controller::add/$1");
    $routes->post("store", "ieat_ent_025_Controller::store");
    $routes->get("edt/(:num)", "ieat_ent_025_Controller::edit/$1");
    $routes->post("upd", "ieat_ent_025_Controller::update");
    $routes->get("del/(:num)", "ieat_ent_025_Controller::delete/$1");
    $routes->get("view/(:num)", "ieat_ent_025_Controller::view/$1");
});

$routes->group("ieat_ent_026", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_ent_026_Controller::index");
    $routes->get("add/(:any)", "ieat_ent_026_Controller::add/$1");
    $routes->post("store", "ieat_ent_026_Controller::store");
    $routes->get("edt/(:num)", "ieat_ent_026_Controller::edit/$1");
    $routes->post("upd", "ieat_ent_026_Controller::update");
    $routes->get("del/(:num)", "ieat_ent_026_Controller::delete/$1");
    $routes->get("view/(:num)", "ieat_ent_026_Controller::view/$1");
});

$routes->group("ieat_ent_027", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_ent_027_Controller::index");
    $routes->get("add/(:any)", "ieat_ent_027_Controller::add/$1");
    $routes->post("store", "ieat_ent_027_Controller::store");
    $routes->get("edt/(:num)", "ieat_ent_027_Controller::edit/$1");
    $routes->post("upd", "ieat_ent_027_Controller::update");
    $routes->get("del/(:num)", "ieat_ent_027_Controller::delete/$1");
    $routes->get("view/(:num)", "ieat_ent_027_Controller::view/$1");
});

$routes->group("ieat_ent_028", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_ent_028_Controller::index");
    $routes->get("add/(:any)", "ieat_ent_028_Controller::add/$1");
    $routes->post("store", "ieat_ent_028_Controller::store");
    $routes->get("edt/(:num)", "ieat_ent_028_Controller::edit/$1");
    $routes->post("upd", "ieat_ent_028_Controller::update");
    $routes->get("del/(:num)", "ieat_ent_028_Controller::delete/$1");
    $routes->get("view/(:num)", "ieat_ent_028_Controller::view/$1");
});

$routes->group("ieat_ent_029", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_ent_029_Controller::index");
    $routes->get("add/(:any)", "ieat_ent_029_Controller::add/$1");
    $routes->post("store", "ieat_ent_029_Controller::store");
    $routes->get("edt/(:num)", "ieat_ent_029_Controller::edit/$1");
    $routes->post("upd", "ieat_ent_029_Controller::update");
    $routes->get("del/(:num)", "ieat_ent_029_Controller::delete/$1");
    $routes->get("view/(:num)", "ieat_ent_029_Controller::view/$1");
});

$routes->group("ieat_ent_0210", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_ent_0210_Controller::index");
    $routes->get("add/(:any)", "ieat_ent_0210_Controller::add/$1");
    $routes->post("store", "ieat_ent_0210_Controller::store");
    $routes->get("edt/(:num)", "ieat_ent_0210_Controller::edit/$1");
    $routes->post("upd", "ieat_ent_0210_Controller::update");
    $routes->get("del/(:num)", "ieat_ent_0210_Controller::delete/$1");
    $routes->get("view/(:num)", "ieat_ent_0210_Controller::view/$1");
});

$routes->group("ieat_ent_0211", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_ent_0211_Controller::index");
    $routes->get("add/(:any)", "ieat_ent_0211_Controller::add/$1");
    $routes->post("store", "ieat_ent_0211_Controller::store");
    $routes->get("edt/(:num)", "ieat_ent_0211_Controller::edit/$1");
    $routes->post("upd", "ieat_ent_0211_Controller::update");
    $routes->get("del/(:num)", "ieat_ent_0211_Controller::delete/$1");
    $routes->get("view/(:num)", "ieat_ent_0211_Controller::view/$1");
});

$routes->group("ieat_ent_0212", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_ent_0212_Controller::index");
    $routes->get("add/(:any)", "ieat_ent_0212_Controller::add/$1");
    $routes->post("store", "ieat_ent_0212_Controller::store");
    $routes->get("edt/(:num)", "ieat_ent_0212_Controller::edit/$1");
    $routes->post("upd", "ieat_ent_0212_Controller::update");
    $routes->get("del/(:num)", "ieat_ent_0212_Controller::delete/$1");
    $routes->get("view/(:num)", "ieat_ent_0212_Controller::view/$1");
});

$routes->group("ieat_ent_0213", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_ent_0213_Controller::index");
    $routes->get("add/(:any)", "ieat_ent_0213_Controller::add/$1");
    $routes->post("store", "ieat_ent_0213_Controller::store");
    $routes->get("edt/(:num)", "ieat_ent_0213_Controller::edit/$1");
    $routes->post("upd", "ieat_ent_0213_Controller::update");
    $routes->get("del/(:num)", "ieat_ent_0213_Controller::delete/$1");
    $routes->get("view/(:num)", "ieat_ent_0213_Controller::view/$1");
});

$routes->group("ieat_ent_0214", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_ent_0214_Controller::index");
    $routes->get("add/(:any)", "ieat_ent_0214_Controller::add/$1");
    $routes->post("store", "ieat_ent_0214_Controller::store");
    $routes->get("edt/(:num)", "ieat_ent_0214_Controller::edit/$1");
    $routes->post("upd", "ieat_ent_0214_Controller::update");
    $routes->get("del/(:num)", "ieat_ent_0214_Controller::delete/$1");
    $routes->get("view/(:num)", "ieat_ent_0214_Controller::view/$1");
});

//////////////////////////////////////////////////////////////////////////////////////////////////////////////

$routes->group("ieat_ent_031", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_ent_031_Controller::index");
    $routes->get("add/(:any)", "ieat_ent_031_Controller::add/$1");
    $routes->post("store", "ieat_ent_031_Controller::store");
    $routes->get("edt/(:num)", "ieat_ent_031_Controller::edit/$1");
    $routes->post("upd", "ieat_ent_031_Controller::update");
    $routes->get("del/(:num)", "ieat_ent_031_Controller::delete/$1");
    $routes->get("view/(:num)", "ieat_ent_031_Controller::view/$1");
});

$routes->group("ieat_ent_032", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_ent_032_Controller::index");
    $routes->get("add/(:any)", "ieat_ent_032_Controller::add/$1");
    $routes->post("store", "ieat_ent_032_Controller::store");
    $routes->get("edt/(:num)", "ieat_ent_032_Controller::edit/$1");
    $routes->post("upd", "ieat_ent_032_Controller::update");
    $routes->get("del/(:num)", "ieat_ent_032_Controller::delete/$1");
    $routes->get("view/(:num)", "ieat_ent_032_Controller::view/$1");
});

$routes->group("ieat_ent_033", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_ent_033_Controller::index");
    $routes->get("add/(:any)", "ieat_ent_033_Controller::add/$1");
    $routes->post("store", "ieat_ent_033_Controller::store");
    $routes->get("edt/(:num)", "ieat_ent_033_Controller::edit/$1");
    $routes->post("upd", "ieat_ent_033_Controller::update");
    $routes->get("del/(:num)", "ieat_ent_033_Controller::delete/$1");
    $routes->get("view/(:num)", "ieat_ent_033_Controller::view/$1");
});

$routes->group("ieat_ent_034", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_ent_034_Controller::index");
    $routes->get("add/(:any)", "ieat_ent_034_Controller::add/$1");
    $routes->post("store", "ieat_ent_034_Controller::store");
    $routes->get("edt/(:num)", "ieat_ent_034_Controller::edit/$1");
    $routes->post("upd", "ieat_ent_034_Controller::update");
    $routes->get("del/(:num)", "ieat_ent_034_Controller::delete/$1");
    $routes->get("view/(:num)", "ieat_ent_034_Controller::view/$1");
});

$routes->group("ieat_ent_035", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_ent_035_Controller::index");
    $routes->get("add/(:any)", "ieat_ent_035_Controller::add/$1");
    $routes->post("store", "ieat_ent_035_Controller::store");
    $routes->get("edt/(:num)", "ieat_ent_035_Controller::edit/$1");
    $routes->post("upd", "ieat_ent_035_Controller::update");
    $routes->get("del/(:num)", "ieat_ent_035_Controller::delete/$1");
    $routes->get("view/(:num)", "ieat_ent_035_Controller::view/$1");
});

$routes->group("ieat_ent_036", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_ent_036_Controller::index");
    $routes->get("add/(:any)", "ieat_ent_036_Controller::add/$1");
    $routes->post("store", "ieat_ent_036_Controller::store");
    $routes->get("edt/(:num)", "ieat_ent_036_Controller::edit/$1");
    $routes->post("upd", "ieat_ent_036_Controller::update");
    $routes->get("del/(:num)", "ieat_ent_036_Controller::delete/$1");
    $routes->get("view/(:num)", "ieat_ent_036_Controller::view/$1");
});

//////////////////////////////////////////////////////////////////////////////////////////////////////////////

$routes->group("center_ieat_ent", function ($routes) {
    $routes->match(["get", "post"], "/", "center_ieat_ent_Controller::index");
    $routes->get("page_office", "center_ieat_ent_Controller::page_office");
});

$routes->group("ieat_office_011", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_office_011_Controller::index");
    $routes->get("p1", "ieat_office_011_Controller::p1");
    $routes->get("p2", "ieat_office_011_Controller::p2");
    $routes->get("p3", "ieat_office_011_Controller::p3");
    $routes->get("otp", "ieat_office_011_Controller::otp");
    $routes->get("final", "ieat_office_011_Controller::final");
});

$routes->group("ieat_office_011_1", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_office_011_1_Controller::index");
    $routes->get("p1", "ieat_office_011_1_Controller::p1");
    $routes->get("p2", "ieat_office_011_1_Controller::p2");
    $routes->get("p3", "ieat_office_011_1_Controller::p3");
    $routes->get("otp", "ieat_office_011_1_Controller::otp");
    $routes->get("final", "ieat_office_011_1_Controller::final");
});

$routes->group("ieat_office_013", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_office_013_Controller::index");
    $routes->get("p1", "ieat_office_013_Controller::p1");
    $routes->get("p2", "ieat_office_013_Controller::p2");
    $routes->get("p3", "ieat_office_013_Controller::p3");
    $routes->get("otp", "ieat_office_013_Controller::otp");
    $routes->get("final", "ieat_office_013_Controller::final");
});

$routes->group("ieat_office_013_1", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_office_013_1_Controller::index");
    $routes->get("p1", "ieat_office_013_1_Controller::p1");
    $routes->get("p2", "ieat_office_013_1_Controller::p2");
    $routes->get("p3", "ieat_office_013_1_Controller::p3");
    $routes->get("otp", "ieat_office_013_1_Controller::otp");
    $routes->get("final", "ieat_office_013_1_Controller::final");
});

$routes->group("ieat_office_013_2", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_office_013_2_Controller::index");
    $routes->get("p1", "ieat_office_013_2_Controller::p1");
    $routes->get("p2", "ieat_office_013_2_Controller::p2");
    $routes->get("p3", "ieat_office_013_2_Controller::p3");
    $routes->get("otp", "ieat_office_013_2_Controller::otp");
    $routes->get("final", "ieat_office_013_2_Controller::final");
});

$routes->group("ieat_office_013_3", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_office_013_3_Controller::index");
    $routes->get("p1", "ieat_office_013_3_Controller::p1");
    $routes->get("p2", "ieat_office_013_3_Controller::p2");
    $routes->get("p3", "ieat_office_013_3_Controller::p3");
    $routes->get("otp", "ieat_office_013_3_Controller::otp");
    $routes->get("final", "ieat_office_013_3_Controller::final");
});

$routes->group("ieat_office_013_4", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_office_013_4_Controller::index");
    $routes->get("p1", "ieat_office_013_4_Controller::p1");
    $routes->get("p2", "ieat_office_013_4_Controller::p2");
    $routes->get("p3", "ieat_office_013_4_Controller::p3");
    $routes->get("otp", "ieat_office_013_4_Controller::otp");
    $routes->get("final", "ieat_office_013_4_Controller::final");
});

$routes->group("ieat_office_013_9", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_office_013_9_Controller::index");
    $routes->get("p1", "ieat_office_013_9_Controller::p1");
    $routes->get("p2", "ieat_office_013_9_Controller::p2");
    $routes->get("p3", "ieat_office_013_9_Controller::p3");
    $routes->get("otp", "ieat_office_013_9_Controller::otp");
    $routes->get("final", "ieat_office_013_9_Controller::final");
});

$routes->group("ieat_office_013_10", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_office_013_10_Controller::index");
    $routes->get("p1", "ieat_office_013_10_Controller::p1");
    $routes->get("p2", "ieat_office_013_10_Controller::p2");
    $routes->get("p3", "ieat_office_013_10_Controller::p3");
    $routes->get("otp", "ieat_office_013_10_Controller::otp");
    $routes->get("final", "ieat_office_013_10_Controller::final");
});

$routes->group("ieat_office_013_p1", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_office_013_p1_Controller::index");
    $routes->get("p1", "ieat_office_013_p1_Controller::p1");
    $routes->get("p2", "ieat_office_013_p1_Controller::p2");
    $routes->get("p3", "ieat_office_013_p1_Controller::p3");
    $routes->get("otp", "ieat_office_013_p1_Controller::otp");
    $routes->get("final", "ieat_office_013_p1_Controller::final");
});

$routes->group("ieat_office_013_p2", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_office_013_p2_Controller::index");
    $routes->get("p1", "ieat_office_013_p2_Controller::p1");
    $routes->get("p2", "ieat_office_013_p2_Controller::p2");
    $routes->get("p3", "ieat_office_013_p2_Controller::p3");
    $routes->get("otp", "ieat_office_013_p2_Controller::otp");
    $routes->get("final", "ieat_office_013_p2_Controller::final");
});

$routes->group("ieat_office_021", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_office_021_Controller::index");
    $routes->get("p1", "ieat_office_021_Controller::p1");
    $routes->get("p15", "ieat_office_021_Controller::p15");
    $routes->get("p2", "ieat_office_021_Controller::p2");
    $routes->get("p3", "ieat_office_021_Controller::p3");
    $routes->get("otp", "ieat_office_021_Controller::otp");
    $routes->get("final", "ieat_office_021_Controller::final");
});

$routes->group("ieat_office_022", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_office_022_Controller::index");
    $routes->get("p1", "ieat_office_022_Controller::p1");
    $routes->get("p15", "ieat_office_022_Controller::p15");
    $routes->get("p2", "ieat_office_022_Controller::p2");
    $routes->get("p3", "ieat_office_022_Controller::p3");
    $routes->get("otp", "ieat_office_022_Controller::otp");
    $routes->get("final", "ieat_office_022_Controller::final");
});

$routes->group("ieat_office_023", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_office_023_Controller::index");
    $routes->get("p1", "ieat_office_023_Controller::p1");
    $routes->get("p15", "ieat_office_023_Controller::p15");
    $routes->get("p2", "ieat_office_023_Controller::p2");
    $routes->get("p3", "ieat_office_023_Controller::p3");
    $routes->get("otp", "ieat_office_023_Controller::otp");
    $routes->get("final", "ieat_office_023_Controller::final");
});

$routes->group("ieat_office_024", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_office_024_Controller::index");
    $routes->get("p1", "ieat_office_024_Controller::p1");
    $routes->get("p15", "ieat_office_024_Controller::p15");
    $routes->get("p2", "ieat_office_024_Controller::p2");
    $routes->get("p3", "ieat_office_024_Controller::p3");
    $routes->get("otp", "ieat_office_024_Controller::otp");
    $routes->get("final", "ieat_office_024_Controller::final");
});

$routes->group("ieat_office_025", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_office_025_Controller::index");
    $routes->get("p1", "ieat_office_025_Controller::p1");
    $routes->get("p15", "ieat_office_025_Controller::p15");
    $routes->get("p2", "ieat_office_025_Controller::p2");
    $routes->get("p3", "ieat_office_025_Controller::p3");
    $routes->get("otp", "ieat_office_025_Controller::otp");
    $routes->get("final", "ieat_office_025_Controller::final");
});

$routes->group("ieat_office_026", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_office_026_Controller::index");
    $routes->get("p1", "ieat_office_026_Controller::p1");
    $routes->get("p15", "ieat_office_026_Controller::p15");
    $routes->get("p2", "ieat_office_026_Controller::p2");
    $routes->get("p3", "ieat_office_026_Controller::p3");
    $routes->get("otp", "ieat_office_026_Controller::otp");
    $routes->get("final", "ieat_office_026_Controller::final");
});

$routes->group("ieat_office_027", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_office_027_Controller::index");
    $routes->get("p1", "ieat_office_027_Controller::p1");
    $routes->get("p15", "ieat_office_027_Controller::p15");
    $routes->get("p2", "ieat_office_027_Controller::p2");
    $routes->get("p3", "ieat_office_027_Controller::p3");
    $routes->get("otp", "ieat_office_027_Controller::otp");
    $routes->get("final", "ieat_office_027_Controller::final");
});

$routes->group("ieat_office_028", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_office_028_Controller::index");
    $routes->get("p1", "ieat_office_028_Controller::p1");
    $routes->get("p15", "ieat_office_028_Controller::p15");
    $routes->get("p2", "ieat_office_028_Controller::p2");
    $routes->get("p3", "ieat_office_028_Controller::p3");
    $routes->get("otp", "ieat_office_028_Controller::otp");
    $routes->get("final", "ieat_office_028_Controller::final");
});

$routes->group("ieat_office_029", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_office_029_Controller::index");
    $routes->get("p1", "ieat_office_029_Controller::p1");
    $routes->get("p15", "ieat_office_029_Controller::p15");
    $routes->get("p2", "ieat_office_029_Controller::p2");
    $routes->get("p3", "ieat_office_029_Controller::p3");
    $routes->get("otp", "ieat_office_029_Controller::otp");
    $routes->get("final", "ieat_office_029_Controller::final");
});

$routes->group("ieat_office_0210", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_office_0210_Controller::index");
    $routes->get("p1", "ieat_office_0210_Controller::p1");
    $routes->get("p15", "ieat_office_0210_Controller::p15");
    $routes->get("p2", "ieat_office_0210_Controller::p2");
    $routes->get("p3", "ieat_office_0210_Controller::p3");
    $routes->get("otp", "ieat_office_0210_Controller::otp");
    $routes->get("final", "ieat_office_0210_Controller::final");
});

$routes->group("ieat_office_0211", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_office_0211_Controller::index");
    $routes->get("p1", "ieat_office_0211_Controller::p1");
    $routes->get("p15", "ieat_office_0211_Controller::p15");
    $routes->get("p2", "ieat_office_0211_Controller::p2");
    $routes->get("p3", "ieat_office_0211_Controller::p3");
    $routes->get("otp", "ieat_office_0211_Controller::otp");
    $routes->get("final", "ieat_office_0211_Controller::final");
});

$routes->group("ieat_office_0212", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_office_0212_Controller::index");
    $routes->get("p1", "ieat_office_0212_Controller::p1");
    $routes->get("p15", "ieat_office_0212_Controller::p15");
    $routes->get("p2", "ieat_office_0212_Controller::p2");
    $routes->get("p3", "ieat_office_0212_Controller::p3");
    $routes->get("otp", "ieat_office_0212_Controller::otp");
    $routes->get("final", "ieat_office_0212_Controller::final");
});

$routes->group("ieat_office_0213", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_office_0213_Controller::index");
    $routes->get("p1", "ieat_office_0213_Controller::p1");
    $routes->get("p15", "ieat_office_0213_Controller::p15");
    $routes->get("p2", "ieat_office_0213_Controller::p2");
    $routes->get("p3", "ieat_office_0213_Controller::p3");
    $routes->get("otp", "ieat_office_0213_Controller::otp");
    $routes->get("final", "ieat_office_0213_Controller::final");
});

$routes->group("ieat_office_0214", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_office_0214_Controller::index");
    $routes->get("p1", "ieat_office_0214_Controller::p1");
    $routes->get("p15", "ieat_office_0214_Controller::p15");
    $routes->get("p2", "ieat_office_0214_Controller::p2");
    $routes->get("p3", "ieat_office_0214_Controller::p3");
    $routes->get("otp", "ieat_office_0214_Controller::otp");
    $routes->get("final", "ieat_office_0214_Controller::final");
});

$routes->group("ieat_office_031", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_office_031_Controller::index");
    $routes->get("p1", "ieat_office_031_Controller::p1");
    $routes->get("p2", "ieat_office_031_Controller::p2");
    $routes->get("p3", "ieat_office_031_Controller::p3");
    $routes->get("otp", "ieat_office_031_Controller::otp");
    $routes->get("final", "ieat_office_031_Controller::final");
});

$routes->group("ieat_office_032", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_office_032_Controller::index");
    $routes->get("p1", "ieat_office_032_Controller::p1");
    $routes->get("p2", "ieat_office_032_Controller::p2");
    $routes->get("p3", "ieat_office_032_Controller::p3");
    $routes->get("otp", "ieat_office_032_Controller::otp");
    $routes->get("final", "ieat_office_032_Controller::final");
});

$routes->group("ieat_office_034", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_office_034_Controller::index");
    $routes->get("p1", "ieat_office_034_Controller::p1");
    $routes->get("p2", "ieat_office_034_Controller::p2");
    $routes->get("p3", "ieat_office_034_Controller::p3");
    $routes->get("otp", "ieat_office_034_Controller::otp");
    $routes->get("final", "ieat_office_034_Controller::final");
});

$routes->group("ieat_office_035", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_office_035_Controller::index");
    $routes->get("p1", "ieat_office_035_Controller::p1");
    $routes->get("p2", "ieat_office_035_Controller::p2");
    $routes->get("p3", "ieat_office_035_Controller::p3");
    $routes->get("otp", "ieat_office_035_Controller::otp");
    $routes->get("final", "ieat_office_035_Controller::final");
});

$routes->group("ieat_office_036", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_office_036_Controller::index");
    $routes->get("p1", "ieat_office_036_Controller::p1");
    $routes->get("p2", "ieat_office_036_Controller::p2");
    $routes->get("p3", "ieat_office_036_Controller::p3");
    $routes->get("otp", "ieat_office_036_Controller::otp");
    $routes->get("final", "ieat_office_036_Controller::final");
});

//////////////////////////////////////////////////////////////////////////////////////////////////////////////

$routes->group("ieat_ent_041", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_ent_041_Controller::index");
    $routes->get("add/(:any)", "ieat_ent_041_Controller::add/$1");
    $routes->post("store", "ieat_ent_041_Controller::store");
    $routes->get("edt/(:num)", "ieat_ent_041_Controller::edit/$1");
    $routes->post("upd", "ieat_ent_041_Controller::update");
    $routes->get("del/(:num)", "ieat_ent_041_Controller::delete/$1");
    $routes->get("view/(:num)", "ieat_ent_041_Controller::view/$1");
});

$routes->group("ieat_office_041", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_office_041_Controller::index");
    $routes->get("p1", "ieat_office_041_Controller::p1");
    $routes->get("p2", "ieat_office_041_Controller::p2");
    $routes->get("p3", "ieat_office_041_Controller::p3");
    $routes->get("otp", "ieat_office_041_Controller::otp");
    $routes->get("final", "ieat_office_041_Controller::final");
});

$routes->group("ieat_ent_042", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_ent_042_Controller::index");
    $routes->get("add/(:any)", "ieat_ent_042_Controller::add/$1");
    $routes->post("store", "ieat_ent_042_Controller::store");
    $routes->get("edt/(:num)", "ieat_ent_042_Controller::edit/$1");
    $routes->post("upd", "ieat_ent_042_Controller::update");
    $routes->get("del/(:num)", "ieat_ent_042_Controller::delete/$1");
    $routes->get("view/(:num)", "ieat_ent_042_Controller::view/$1");
});

$routes->group("ieat_office_042", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_office_042_Controller::index");
    $routes->get("p1", "ieat_office_042_Controller::p1");
    $routes->get("p2", "ieat_office_042_Controller::p2");
    $routes->get("p3", "ieat_office_042_Controller::p3");
    $routes->get("otp", "ieat_office_042_Controller::otp");
    $routes->get("final", "ieat_office_042_Controller::final");
});

$routes->group("ieat_ent_043", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_ent_043_Controller::index");
    $routes->get("add/(:any)", "ieat_ent_043_Controller::add/$1");
    $routes->post("store", "ieat_ent_043_Controller::store");
    $routes->get("edt/(:num)", "ieat_ent_043_Controller::edit/$1");
    $routes->post("upd", "ieat_ent_043_Controller::update");
    $routes->get("del/(:num)", "ieat_ent_043_Controller::delete/$1");
    $routes->get("view/(:num)", "ieat_ent_043_Controller::view/$1");
});

$routes->group("ieat_office_043", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_office_043_Controller::index");
    $routes->get("p1", "ieat_office_043_Controller::p1");
    $routes->get("p2", "ieat_office_043_Controller::p2");
    $routes->get("p3", "ieat_office_043_Controller::p3");
    $routes->get("otp", "ieat_office_043_Controller::otp");
    $routes->get("final", "ieat_office_043_Controller::final");
});

$routes->group("ieat_ent_044", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_ent_044_Controller::index");
    $routes->get("add/(:any)", "ieat_ent_044_Controller::add/$1");
    $routes->post("store", "ieat_ent_044_Controller::store");
    $routes->get("edt/(:num)", "ieat_ent_044_Controller::edit/$1");
    $routes->post("upd", "ieat_ent_044_Controller::update");
    $routes->get("del/(:num)", "ieat_ent_044_Controller::delete/$1");
    $routes->get("view/(:num)", "ieat_ent_044_Controller::view/$1");
});

$routes->group("ieat_office_044", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_office_044_Controller::index");
    $routes->get("p1", "ieat_office_044_Controller::p1");
    $routes->get("p2", "ieat_office_044_Controller::p2");
    $routes->get("p3", "ieat_office_044_Controller::p3");
    $routes->get("otp", "ieat_office_044_Controller::otp");
    $routes->get("final", "ieat_office_044_Controller::final");
});

$routes->group("ieat_ent_045", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_ent_045_Controller::index");
    $routes->get("add/(:any)", "ieat_ent_045_Controller::add/$1");
    $routes->post("store", "ieat_ent_045_Controller::store");
    $routes->get("edt/(:num)", "ieat_ent_045_Controller::edit/$1");
    $routes->post("upd", "ieat_ent_045_Controller::update");
    $routes->get("del/(:num)", "ieat_ent_045_Controller::delete/$1");
    $routes->get("view/(:num)", "ieat_ent_045_Controller::view/$1");
});

$routes->group("ieat_office_045", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_office_045_Controller::index");
    $routes->get("p1", "ieat_office_045_Controller::p1");
    $routes->get("p2", "ieat_office_045_Controller::p2");
    $routes->get("p3", "ieat_office_045_Controller::p3");
    $routes->get("otp", "ieat_office_045_Controller::otp");
    $routes->get("final", "ieat_office_045_Controller::final");
});

$routes->group("ieat_ent_taxincentive", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_ent_taxincentive_Controller::index");
    $routes->get("add/(:any)", "ieat_ent_taxincentive_Controller::add/$1");
    $routes->post("store", "ieat_ent_taxincentive_Controller::store");
    $routes->get("edt/(:num)", "ieat_ent_taxincentive_Controller::edit/$1");
    $routes->post("upd", "ieat_ent_taxincentive_Controller::update");
    $routes->get("del/(:num)", "ieat_ent_taxincentive_Controller::delete/$1");
    $routes->get("view/(:num)", "ieat_ent_taxincentive_Controller::view/$1");
});

$routes->group("ieat_office_taxincentive", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_office_taxincentive_Controller::index");
    $routes->get("p1", "ieat_office_taxincentive_Controller::p1");
    $routes->get("p2", "ieat_office_taxincentive_Controller::p2");
    $routes->get("p3", "ieat_office_taxincentive_Controller::p3");
    $routes->get("otp", "ieat_office_taxincentive_Controller::otp");
    $routes->get("final", "ieat_office_taxincentive_Controller::final");
});

$routes->group("ieat_ent_canceltaxincentive", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_ent_canceltaxincentive_Controller::index");
    $routes->get("add/(:any)", "ieat_ent_canceltaxincentive_Controller::add/$1");
    $routes->post("store", "ieat_ent_canceltaxincentive_Controller::store");
    $routes->get("edt/(:num)", "ieat_ent_canceltaxincentive_Controller::edit/$1");
    $routes->post("upd", "ieat_ent_canceltaxincentive_Controller::update");
    $routes->get("del/(:num)", "ieat_ent_canceltaxincentive_Controller::delete/$1");
    $routes->get("view/(:num)", "ieat_ent_canceltaxincentive_Controller::view/$1");
});

$routes->group("ieat_office_canceltaxincentive", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_office_canceltaxincentive_Controller::index");
    $routes->get("p1", "ieat_office_canceltaxincentive_Controller::p1");
    $routes->get("p2", "ieat_office_canceltaxincentive_Controller::p2");
    $routes->get("p3", "ieat_office_canceltaxincentive_Controller::p3");
    $routes->get("otp", "ieat_office_canceltaxincentive_Controller::otp");
    $routes->get("final", "ieat_office_canceltaxincentive_Controller::final");
});

$routes->group("ieat_ent_04021", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_ent_04021_Controller::index");
    $routes->get("add/(:any)", "ieat_ent_04021_Controller::add/$1");
    $routes->post("store", "ieat_ent_04021_Controller::store");
    $routes->get("edt/(:num)", "ieat_ent_04021_Controller::edit/$1");
    $routes->post("upd", "ieat_ent_04021_Controller::update");
    $routes->get("del/(:num)", "ieat_ent_04021_Controller::delete/$1");
    $routes->get("view/(:num)", "ieat_ent_04021_Controller::view/$1");
});

$routes->group("ieat_office_04021", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_office_04021_Controller::index");
    $routes->get("p1", "ieat_office_04021_Controller::p1");
    $routes->get("p2", "ieat_office_04021_Controller::p2");
    $routes->get("p3", "ieat_office_04021_Controller::p3");
    $routes->get("otp", "ieat_office_04021_Controller::otp");
    $routes->get("final", "ieat_office_04021_Controller::final");
});

$routes->group("ieat_ent_04051", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_ent_04051_Controller::index");
    $routes->get("add/(:any)", "ieat_ent_04051_Controller::add/$1");
    $routes->post("store", "ieat_ent_04051_Controller::store");
    $routes->get("edt/(:num)", "ieat_ent_04051_Controller::edit/$1");
    $routes->post("upd", "ieat_ent_04051_Controller::update");
    $routes->get("del/(:num)", "ieat_ent_04051_Controller::delete/$1");
    $routes->get("view/(:num)", "ieat_ent_04051_Controller::view/$1");
});

$routes->group("ieat_office_04051", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_office_04051_Controller::index");
    $routes->get("p1", "ieat_office_04051_Controller::p1");
    $routes->get("p2", "ieat_office_04051_Controller::p2");
    $routes->get("p3", "ieat_office_04051_Controller::p3");
    $routes->get("otp", "ieat_office_04051_Controller::otp");
    $routes->get("final", "ieat_office_04051_Controller::final");
});

$routes->group("ieat_ent_046", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_ent_046_Controller::index");
    $routes->get("add/(:any)", "ieat_ent_046_Controller::add/$1");
    $routes->post("store", "ieat_ent_046_Controller::store");
    $routes->get("edt/(:num)", "ieat_ent_046_Controller::edit/$1");
    $routes->post("upd", "ieat_ent_046_Controller::update");
    $routes->get("del/(:num)", "ieat_ent_046_Controller::delete/$1");
    $routes->get("view/(:num)", "ieat_ent_046_Controller::view/$1");
});

$routes->group("ieat_ent_t01_009", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_ent_t01_009_Controller::index");
    $routes->get("add/(:any)", "ieat_ent_t01_009_Controller::add/$1");
    $routes->post("store", "ieat_ent_t01_009_Controller::store");
    $routes->get("edt/(:num)", "ieat_ent_t01_009_Controller::edit/$1");
    $routes->post("upd", "ieat_ent_t01_009_Controller::update");
    $routes->get("del/(:num)", "ieat_ent_t01_009_Controller::delete/$1");
    $routes->get("view/(:num)", "ieat_ent_t01_009_Controller::view/$1");
});

$routes->group("ieat_ent_r01_003", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_ent_r01_003_Controller::index");
    $routes->get("add/(:any)", "ieat_ent_r01_003_Controller::add/$1");
    $routes->post("store", "ieat_ent_r01_003_Controller::store");
    $routes->get("edt/(:num)", "ieat_ent_r01_003_Controller::edit/$1");
    $routes->post("upd", "ieat_ent_r01_003_Controller::update");
    $routes->get("del/(:num)", "ieat_ent_r01_003_Controller::delete/$1");
    $routes->get("view/(:num)", "ieat_ent_r01_003_Controller::view/$1");
});

$routes->group("ieat_office_r01_003", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_office_r01_003_Controller::index");
    $routes->get("p1", "ieat_office_r01_003_Controller::p1");
    $routes->get("p2", "ieat_office_r01_003_Controller::p2");
    $routes->get("p3", "ieat_office_r01_003_Controller::p3");
    $routes->get("otp", "ieat_office_r01_003_Controller::otp");
    $routes->get("final", "ieat_office_r01_003_Controller::final");
});

$routes->group("ieat_ent_r01_005", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_ent_r01_005_Controller::index");
    $routes->get("add/(:any)", "ieat_ent_r01_005_Controller::add/$1");
    $routes->post("store", "ieat_ent_r01_005_Controller::store");
    $routes->get("edt/(:num)", "ieat_ent_r01_005_Controller::edit/$1");
    $routes->post("upd", "ieat_ent_r01_005_Controller::update");
    $routes->get("del/(:num)", "ieat_ent_r01_005_Controller::delete/$1");
    $routes->get("view/(:num)", "ieat_ent_r01_005_Controller::view/$1");
});

$routes->group("ieat_office_r01_005", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_office_r01_005_Controller::index");
    $routes->get("p1", "ieat_office_r01_005_Controller::p1");
    $routes->get("p2", "ieat_office_r01_005_Controller::p2");
    $routes->get("p3", "ieat_office_r01_005_Controller::p3");
    $routes->get("otp", "ieat_office_r01_005_Controller::otp");
    $routes->get("final", "ieat_office_r01_005_Controller::final");
});

$routes->group("ieat_ent_r01_005_1", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_ent_r01_005_1_Controller::index");
    $routes->get("add/(:any)", "ieat_ent_r01_005_1_Controller::add/$1");
    $routes->post("store", "ieat_ent_r01_005_1_Controller::store");
    $routes->get("edt/(:num)", "ieat_ent_r01_005_1_Controller::edit/$1");
    $routes->post("upd", "ieat_ent_r01_005_1_Controller::update");
    $routes->get("del/(:num)", "ieat_ent_r01_005_1_Controller::delete/$1");
    $routes->get("view/(:num)", "ieat_ent_r01_005_1_Controller::view/$1");
});

$routes->group("ieat_office_r01_005_1", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_office_r01_005_1_Controller::index");
    $routes->get("p1", "ieat_office_r01_005_1_Controller::p1");
    $routes->get("p2", "ieat_office_r01_005_1_Controller::p2");
    $routes->get("p3", "ieat_office_r01_005_1_Controller::p3");
    $routes->get("otp", "ieat_office_r01_005_1_Controller::otp");
    $routes->get("final", "ieat_office_r01_005_1_Controller::final");
});

$routes->group("ieat_ent_r01_003_out", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_ent_r01_003_out_Controller::index");
    $routes->get("add/(:any)", "ieat_ent_r01_003_out_Controller::add/$1");
    $routes->post("store", "ieat_ent_r01_003_out_Controller::store");
    $routes->get("edt/(:num)", "ieat_ent_r01_003_out_Controller::edit/$1");
    $routes->post("upd", "ieat_ent_r01_003_out_Controller::update");
    $routes->get("del/(:num)", "ieat_ent_r01_003_out_Controller::delete/$1");
    $routes->get("view/(:num)", "ieat_ent_r01_003_out_Controller::view/$1");
});

$routes->group("ieat_office_r01_003_out", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_office_r01_003_out_Controller::index");
    $routes->get("p1", "ieat_office_r01_003_out_Controller::p1");
    $routes->get("p2", "ieat_office_r01_003_out_Controller::p2");
    $routes->get("p3", "ieat_office_r01_003_out_Controller::p3");
    $routes->get("otp", "ieat_office_r01_003_out_Controller::otp");
    $routes->get("final", "ieat_office_r01_003_out_Controller::final");
});

$routes->group("ieat_ent_r01_005_out", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_ent_r01_005_out_Controller::index");
    $routes->get("add/(:any)", "ieat_ent_r01_005_out_Controller::add/$1");
    $routes->post("store", "ieat_ent_r01_005_out_Controller::store");
    $routes->get("edt/(:num)", "ieat_ent_r01_005_out_Controller::edit/$1");
    $routes->post("upd", "ieat_ent_r01_005_out_Controller::update");
    $routes->get("del/(:num)", "ieat_ent_r01_005_out_Controller::delete/$1");
    $routes->get("view/(:num)", "ieat_ent_r01_005_out_Controller::view/$1");
});

$routes->group("ieat_office_r01_005_out", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_office_r01_005_out_Controller::index");
    $routes->get("p1", "ieat_office_r01_005_out_Controller::p1");
    $routes->get("p2", "ieat_office_r01_005_out_Controller::p2");
    $routes->get("p3", "ieat_office_r01_005_out_Controller::p3");
    $routes->get("otp", "ieat_office_r01_005_out_Controller::otp");
    $routes->get("final", "ieat_office_r01_005_out_Controller::final");
});


$routes->group("ieat_ent_r01_005_1_out", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_ent_r01_005_1_out_Controller::index");
    $routes->get("add/(:any)", "ieat_ent_r01_005_1_out_Controller::add/$1");
    $routes->post("store", "ieat_ent_r01_005_1_out_Controller::store");
    $routes->get("edt/(:num)", "ieat_ent_r01_005_1_out_Controller::edit/$1");
    $routes->post("upd", "ieat_ent_r01_005_1_out_Controller::update");
    $routes->get("del/(:num)", "ieat_ent_r01_005_1_out_Controller::delete/$1");
    $routes->get("view/(:num)", "ieat_ent_r01_005_1_out_Controller::view/$1");
});

$routes->group("ieat_office_r01_005_1_out", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_office_r01_005_1_out_Controller::index");
    $routes->get("p1", "ieat_office_r01_005_1_out_Controller::p1");
    $routes->get("p2", "ieat_office_r01_005_1_out_Controller::p2");
    $routes->get("p3", "ieat_office_r01_005_1_out_Controller::p3");
    $routes->get("otp", "ieat_office_r01_005_1_out_Controller::otp");
    $routes->get("final", "ieat_office_r01_005_1_out_Controller::final");
});

//////////////////////////////////////////////////////////////////////////////////////////////////////////////

$routes->group("ieat_ent_05_0001", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_ent_05_0001_Controller::index");
    $routes->get("add/(:any)", "ieat_ent_05_0001_Controller::add/$1");
    $routes->post("store", "ieat_ent_05_0001_Controller::store");
    $routes->get("edt/(:num)", "ieat_ent_05_0001_Controller::edit/$1");
    $routes->post("upd", "ieat_ent_05_0001_Controller::update");
    $routes->get("del/(:num)", "ieat_ent_05_0001_Controller::delete/$1");
    $routes->get("view/(:num)", "ieat_ent_05_0001_Controller::view/$1");
});

$routes->group("ieat_office_05_0001", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_office_05_0001_Controller::index");
    $routes->get("p1", "ieat_office_05_0001_Controller::p1");
    $routes->get("p2", "ieat_office_05_0001_Controller::p2");
    $routes->get("p3", "ieat_office_05_0001_Controller::p3");
    $routes->get("otp", "ieat_office_05_0001_Controller::otp");
    $routes->get("final", "ieat_office_05_0001_Controller::final");
});

$routes->group("ieat_ent_05_005", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_ent_05_005_Controller::index");
    $routes->get("add/(:any)", "ieat_ent_05_005_Controller::add/$1");
    $routes->post("store", "ieat_ent_05_005_Controller::store");
    $routes->get("edt/(:num)", "ieat_ent_05_005_Controller::edit/$1");
    $routes->post("upd", "ieat_ent_05_005_Controller::update");
    $routes->get("del/(:num)", "ieat_ent_05_005_Controller::delete/$1");
    $routes->get("view/(:num)", "ieat_ent_05_005_Controller::view/$1");
});

$routes->group("ieat_office_05_005", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_office_05_005_Controller::index");
    $routes->get("p1", "ieat_office_05_005_Controller::p1");
    $routes->get("p2", "ieat_office_05_005_Controller::p2");
    $routes->get("p3", "ieat_office_05_005_Controller::p3");
    $routes->get("otp", "ieat_office_05_005_Controller::otp");
    $routes->get("final", "ieat_office_05_005_Controller::final");
});

$routes->group("ieat_ent_05_005_1", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_ent_05_005_1_Controller::index");
    $routes->get("add/(:any)", "ieat_ent_05_005_1_Controller::add/$1");
    $routes->post("store", "ieat_ent_05_005_1_Controller::store");
    $routes->get("edt/(:num)", "ieat_ent_05_005_1_Controller::edit/$1");
    $routes->post("upd", "ieat_ent_05_005_1_Controller::update");
    $routes->get("del/(:num)", "ieat_ent_05_005_1_Controller::delete/$1");
    $routes->get("view/(:num)", "ieat_ent_05_005_1_Controller::view/$1");
});

$routes->group("ieat_office_05_005_1", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_office_05_005_1_Controller::index");
    $routes->get("p1", "ieat_office_05_005_1_Controller::p1");
    $routes->get("p2", "ieat_office_05_005_1_Controller::p2");
    $routes->get("p3", "ieat_office_05_005_1_Controller::p3");
    $routes->get("otp", "ieat_office_05_005_1_Controller::otp");
    $routes->get("final", "ieat_office_05_005_1_Controller::final");
});

$routes->group("ieat_ent_05_006", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_ent_05_006_Controller::index");
    $routes->get("add/(:any)", "ieat_ent_05_006_Controller::add/$1");
    $routes->post("store", "ieat_ent_05_006_Controller::store");
    $routes->get("edt/(:num)", "ieat_ent_05_006_Controller::edit/$1");
    $routes->post("upd", "ieat_ent_05_006_Controller::update");
    $routes->get("del/(:num)", "ieat_ent_05_006_Controller::delete/$1");
    $routes->get("view/(:num)", "ieat_ent_05_006_Controller::view/$1");
});

$routes->group("ieat_office_05_006", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_office_05_006_Controller::index");
    $routes->get("p1", "ieat_office_05_006_Controller::p1");
    $routes->get("p2", "ieat_office_05_006_Controller::p2");
    $routes->get("p3", "ieat_office_05_006_Controller::p3");
    $routes->get("otp", "ieat_office_05_006_Controller::otp");
    $routes->get("final", "ieat_office_05_006_Controller::final");
});

$routes->group("ieat_ent_05_007", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_ent_05_007_Controller::index");
    $routes->get("add/(:any)", "ieat_ent_05_007_Controller::add/$1");
    $routes->post("store", "ieat_ent_05_007_Controller::store");
    $routes->get("edt/(:num)", "ieat_ent_05_007_Controller::edit/$1");
    $routes->post("upd", "ieat_ent_05_007_Controller::update");
    $routes->get("del/(:num)", "ieat_ent_05_007_Controller::delete/$1");
    $routes->get("view/(:num)", "ieat_ent_05_007_Controller::view/$1");
});

$routes->group("ieat_office_05_007", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_office_05_007_Controller::index");
    $routes->get("p1", "ieat_office_05_007_Controller::p1");
    $routes->get("p2", "ieat_office_05_007_Controller::p2");
    $routes->get("p3", "ieat_office_05_007_Controller::p3");
    $routes->get("otp", "ieat_office_05_007_Controller::otp");
    $routes->get("final", "ieat_office_05_007_Controller::final");
});

$routes->group("ieat_ent_05_001_p3", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_ent_05_001_p3_Controller::index");
    $routes->get("add/(:any)", "ieat_ent_05_001_p3_Controller::add/$1");
    $routes->post("store", "ieat_ent_05_001_p3_Controller::store");
    $routes->get("edt/(:num)", "ieat_ent_05_001_p3_Controller::edit/$1");
    $routes->post("upd", "ieat_ent_05_001_p3_Controller::update");
    $routes->get("del/(:num)", "ieat_ent_05_001_p3_Controller::delete/$1");
    $routes->get("view/(:num)", "ieat_ent_05_001_p3_Controller::view/$1");
});

$routes->group("ieat_office_05_001_p3", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_office_05_001_p3_Controller::index");
    $routes->get("p1", "ieat_office_05_001_p3_Controller::p1");
    $routes->get("p2", "ieat_office_05_001_p3_Controller::p2");
    $routes->get("p3", "ieat_office_05_001_p3_Controller::p3");
    $routes->get("otp", "ieat_office_05_001_p3_Controller::otp");
    $routes->get("final", "ieat_office_05_001_p3_Controller::final");
});

$routes->group("ieat_ent_05_0001", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_ent_05_0001_Controller::index");
    $routes->get("add/(:any)", "ieat_ent_05_0001_Controller::add/$1");
    $routes->post("store", "ieat_ent_05_0001_Controller::store");
    $routes->get("edt/(:num)", "ieat_ent_05_0001_Controller::edit/$1");
    $routes->post("upd", "ieat_ent_05_0001_Controller::update");
    $routes->get("del/(:num)", "ieat_ent_05_0001_Controller::delete/$1");
    $routes->get("view/(:num)", "ieat_ent_05_0001_Controller::view/$1");
});

$routes->group("ieat_office_05_0001", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_office_05_0001_Controller::index");
    $routes->get("p1", "ieat_office_05_0001_Controller::p1");
    $routes->get("p2", "ieat_office_05_0001_Controller::p2");
    $routes->get("p3", "ieat_office_05_0001_Controller::p3");
    $routes->get("otp", "ieat_office_05_0001_Controller::otp");
    $routes->get("final", "ieat_office_05_0001_Controller::final");
});

$routes->group("ieat_ent_051", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_ent_051_Controller::index");
    $routes->get("add/(:any)", "ieat_ent_051_Controller::add/$1");
    $routes->post("store", "ieat_ent_051_Controller::store");
    $routes->get("edt/(:num)", "ieat_ent_051_Controller::edit/$1");
    $routes->post("upd", "ieat_ent_051_Controller::update");
    $routes->get("del/(:num)", "ieat_ent_051_Controller::delete/$1");
    $routes->get("view/(:num)", "ieat_ent_051_Controller::view/$1");
});

$routes->group("ieat_office_051", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_office_051_Controller::index");
    $routes->get("p1", "ieat_office_051_Controller::p1");
    $routes->get("p2", "ieat_office_051_Controller::p2");
    $routes->get("p3", "ieat_office_051_Controller::p3");
    $routes->get("otp", "ieat_office_051_Controller::otp");
    $routes->get("final", "ieat_office_051_Controller::final");
});

$routes->group("ieat_ent_051_p2", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_ent_051_p2_Controller::index");
    $routes->get("add/(:any)", "ieat_ent_051_p2_Controller::add/$1");
    $routes->post("store", "ieat_ent_051_p2_Controller::store");
    $routes->get("edt/(:num)", "ieat_ent_051_p2_Controller::edit/$1");
    $routes->post("upd", "ieat_ent_051_p2_Controller::update");
    $routes->get("del/(:num)", "ieat_ent_051_p2_Controller::delete/$1");
    $routes->get("view/(:num)", "ieat_ent_051_p2_Controller::view/$1");
});

$routes->group("ieat_office_051_p2", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_office_051_p2_Controller::index");
    $routes->get("p1", "ieat_office_051_p2_Controller::p1");
    $routes->get("p2", "ieat_office_051_p2_Controller::p2");
    $routes->get("p3", "ieat_office_051_p2_Controller::p3");
    $routes->get("otp", "ieat_office_051_p2_Controller::otp");
    $routes->get("final", "ieat_office_051_p2_Controller::final");
});

$routes->group("ieat_office_053", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_office_053_Controller::index");
    $routes->get("p1", "ieat_office_053_Controller::p1");
    $routes->get("p2", "ieat_office_053_Controller::p2");
    $routes->get("p3", "ieat_office_053_Controller::p3");
    $routes->get("otp", "ieat_office_053_Controller::otp");
    $routes->get("final", "ieat_office_053_Controller::final");
});

$routes->group("ieat_ent_053_1", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_ent_053_1_Controller::index");
    $routes->get("add/(:any)", "ieat_ent_053_1_Controller::add/$1");
    $routes->post("store", "ieat_ent_053_1_Controller::store");
    $routes->get("edt/(:num)", "ieat_ent_053_1_Controller::edit/$1");
    $routes->post("upd", "ieat_ent_053_1_Controller::update");
    $routes->get("del/(:num)", "ieat_ent_053_1_Controller::delete/$1");
    $routes->get("view/(:num)", "ieat_ent_053_1_Controller::view/$1");
});

$routes->group("ieat_office_053_1", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_office_053_1_Controller::index");
    $routes->get("p1", "ieat_office_053_1_Controller::p1");
    $routes->get("p2", "ieat_office_053_1_Controller::p2");
    $routes->get("p3", "ieat_office_053_1_Controller::p3");
    $routes->get("otp", "ieat_office_053_1_Controller::otp");
    $routes->get("final", "ieat_office_053_1_Controller::final");
});

$routes->group("ieat_ent_053_2", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_ent_053_2_Controller::index");
    $routes->get("add/(:any)", "ieat_ent_053_2_Controller::add/$1");
    $routes->post("store", "ieat_ent_053_2_Controller::store");
    $routes->get("edt/(:num)", "ieat_ent_053_2_Controller::edit/$1");
    $routes->post("upd", "ieat_ent_053_2_Controller::update");
    $routes->get("del/(:num)", "ieat_ent_053_2_Controller::delete/$1");
    $routes->get("view/(:num)", "ieat_ent_053_2_Controller::view/$1");
});

$routes->group("ieat_office_053_2", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_office_053_2_Controller::index");
    $routes->get("p1", "ieat_office_053_2_Controller::p1");
    $routes->get("p2", "ieat_office_053_2_Controller::p2");
    $routes->get("p3", "ieat_office_053_2_Controller::p3");
    $routes->get("otp", "ieat_office_053_2_Controller::otp");
    $routes->get("final", "ieat_office_053_2_Controller::final");
});

$routes->group("ieat_ent_053_3", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_ent_053_3_Controller::index");
    $routes->get("add/(:any)", "ieat_ent_053_3_Controller::add/$1");
    $routes->post("store", "ieat_ent_053_3_Controller::store");
    $routes->get("edt/(:num)", "ieat_ent_053_3_Controller::edit/$1");
    $routes->post("upd", "ieat_ent_053_3_Controller::update");
    $routes->get("del/(:num)", "ieat_ent_053_3_Controller::delete/$1");
    $routes->get("view/(:num)", "ieat_ent_053_3_Controller::view/$1");
});

$routes->group("ieat_office_053_3", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_office_053_3_Controller::index");
    $routes->get("p1", "ieat_office_053_3_Controller::p1");
    $routes->get("p2", "ieat_office_053_3_Controller::p2");
    $routes->get("p3", "ieat_office_053_3_Controller::p3");
    $routes->get("otp", "ieat_office_053_3_Controller::otp");
    $routes->get("final", "ieat_office_053_3_Controller::final");
});

$routes->group("ieat_ent_053_4", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_ent_053_4_Controller::index");
    $routes->get("add/(:any)", "ieat_ent_053_4_Controller::add/$1");
    $routes->post("store", "ieat_ent_053_4_Controller::store");
    $routes->get("edt/(:num)", "ieat_ent_053_4_Controller::edit/$1");
    $routes->post("upd", "ieat_ent_053_4_Controller::update");
    $routes->get("del/(:num)", "ieat_ent_053_4_Controller::delete/$1");
    $routes->get("view/(:num)", "ieat_ent_053_4_Controller::view/$1");
});

$routes->group("ieat_office_053_4", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_office_053_4_Controller::index");
    $routes->get("p1", "ieat_office_053_4_Controller::p1");
    $routes->get("p2", "ieat_office_053_4_Controller::p2");
    $routes->get("p3", "ieat_office_053_4_Controller::p3");
    $routes->get("otp", "ieat_office_053_4_Controller::otp");
    $routes->get("final", "ieat_office_053_4_Controller::final");
});

$routes->group("ieat_ent_053_5", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_ent_053_5_Controller::index");
    $routes->get("add/(:any)", "ieat_ent_053_5_Controller::add/$1");
    $routes->post("store", "ieat_ent_053_5_Controller::store");
    $routes->get("edt/(:num)", "ieat_ent_053_5_Controller::edit/$1");
    $routes->post("upd", "ieat_ent_053_5_Controller::update");
    $routes->get("del/(:num)", "ieat_ent_053_5_Controller::delete/$1");
    $routes->get("view/(:num)", "ieat_ent_053_5_Controller::view/$1");
});

$routes->group("ieat_office_053_5", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_office_053_5_Controller::index");
    $routes->get("p1", "ieat_office_053_5_Controller::p1");
    $routes->get("p2", "ieat_office_053_5_Controller::p2");
    $routes->get("p3", "ieat_office_053_5_Controller::p3");
    $routes->get("otp", "ieat_office_053_5_Controller::otp");
    $routes->get("final", "ieat_office_053_5_Controller::final");
});

$routes->group("ieat_ent_053_6", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_ent_053_6_Controller::index");
    $routes->get("add/(:any)", "ieat_ent_053_6_Controller::add/$1");
    $routes->post("store", "ieat_ent_053_6_Controller::store");
    $routes->get("edt/(:num)", "ieat_ent_053_6_Controller::edit/$1");
    $routes->post("upd", "ieat_ent_053_6_Controller::update");
    $routes->get("del/(:num)", "ieat_ent_053_6_Controller::delete/$1");
    $routes->get("view/(:num)", "ieat_ent_053_6_Controller::view/$1");
});

$routes->group("ieat_office_053_6", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_office_053_6_Controller::index");
    $routes->get("p1", "ieat_office_053_6_Controller::p1");
    $routes->get("p2", "ieat_office_053_6_Controller::p2");
    $routes->get("p3", "ieat_office_053_6_Controller::p3");
    $routes->get("otp", "ieat_office_053_6_Controller::otp");
    $routes->get("final", "ieat_office_053_6_Controller::final");
});

$routes->group("ieat_ent_053_7", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_ent_053_7_Controller::index");
    $routes->get("add/(:any)", "ieat_ent_053_7_Controller::add/$1");
    $routes->post("store", "ieat_ent_053_7_Controller::store");
    $routes->get("edt/(:num)", "ieat_ent_053_7_Controller::edit/$1");
    $routes->post("upd", "ieat_ent_053_7_Controller::update");
    $routes->get("del/(:num)", "ieat_ent_053_7_Controller::delete/$1");
    $routes->get("view/(:num)", "ieat_ent_053_7_Controller::view/$1");
});

$routes->group("ieat_office_053_7", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_office_053_7_Controller::index");
    $routes->get("p1", "ieat_office_053_7_Controller::p1");
    $routes->get("p2", "ieat_office_053_7_Controller::p2");
    $routes->get("p3", "ieat_office_053_7_Controller::p3");
    $routes->get("otp", "ieat_office_053_7_Controller::otp");
    $routes->get("final", "ieat_office_053_7_Controller::final");
});

$routes->group("ieat_ent_053_9", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_ent_053_9_Controller::index");
    $routes->get("add/(:any)", "ieat_ent_053_9_Controller::add/$1");
    $routes->post("store", "ieat_ent_053_9_Controller::store");
    $routes->get("edt/(:num)", "ieat_ent_053_9_Controller::edit/$1");
    $routes->post("upd", "ieat_ent_053_9_Controller::update");
    $routes->get("del/(:num)", "ieat_ent_053_9_Controller::delete/$1");
    $routes->get("view/(:num)", "ieat_ent_053_9_Controller::view/$1");
});

$routes->group("ieat_office_053_9", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_office_053_9_Controller::index");
    $routes->get("p1", "ieat_office_053_9_Controller::p1");
    $routes->get("p2", "ieat_office_053_9_Controller::p2");
    $routes->get("p3", "ieat_office_053_9_Controller::p3");
    $routes->get("otp", "ieat_office_053_9_Controller::otp");
    $routes->get("final", "ieat_office_053_9_Controller::final");
});

$routes->group("ieat_ent_05_changename", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_ent_05_changename_Controller::index");
    $routes->get("add/(:any)", "ieat_ent_05_changename_Controller::add/$1");
    $routes->post("store", "ieat_ent_05_changename_Controller::store");
    $routes->get("edt/(:num)", "ieat_ent_05_changename_Controller::edit/$1");
    $routes->post("upd", "ieat_ent_05_changename_Controller::update");
    $routes->get("del/(:num)", "ieat_ent_05_changename_Controller::delete/$1");
    $routes->get("view/(:num)", "ieat_ent_05_changename_Controller::view/$1");
});

$routes->group("ieat_office_05_changename", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_office_05_changename_Controller::index");
    $routes->get("p1", "ieat_office_05_changename_Controller::p1");
    $routes->get("p2", "ieat_office_05_changename_Controller::p2");
    $routes->get("p3", "ieat_office_05_changename_Controller::p3");
    $routes->get("otp", "ieat_office_05_changename_Controller::otp");
    $routes->get("final", "ieat_office_05_changename_Controller::final");
});

$routes->group("ieat_ent_05_cancel_nontax", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_ent_05_cancel_nontax_Controller::index");
    $routes->get("add/(:any)", "ieat_ent_05_cancel_nontax_Controller::add/$1");
    $routes->post("store", "ieat_ent_05_cancel_nontax_Controller::store");
    $routes->get("edt/(:num)", "ieat_ent_05_cancel_nontax_Controller::edit/$1");
    $routes->post("upd", "ieat_ent_05_cancel_nontax_Controller::update");
    $routes->get("del/(:num)", "ieat_ent_05_cancel_nontax_Controller::delete/$1");
    $routes->get("view/(:num)", "ieat_ent_05_cancel_nontax_Controller::view/$1");
});

$routes->group("ieat_office_05_cancel_nontax", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_office_05_cancel_nontax_Controller::index");
    $routes->get("p1", "ieat_office_05_cancel_nontax_Controller::p1");
    $routes->get("p2", "ieat_office_05_cancel_nontax_Controller::p2");
    $routes->get("p3", "ieat_office_05_cancel_nontax_Controller::p3");
    $routes->get("otp", "ieat_office_05_cancel_nontax_Controller::otp");
    $routes->get("final", "ieat_office_05_cancel_nontax_Controller::final");
});

//////////////////////////////////////////////////////////////////////////////////////////

$routes->group("ieat_ent_077", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_ent_077_Controller::index");
    $routes->get("add/(:any)", "ieat_ent_077_Controller::add/$1");
    $routes->post("store", "ieat_ent_077_Controller::store");
    $routes->get("edt/(:num)", "ieat_ent_077_Controller::edit/$1");
    $routes->post("upd", "ieat_ent_077_Controller::update");
    $routes->get("del/(:num)", "ieat_ent_077_Controller::delete/$1");
    $routes->get("view/(:num)", "ieat_ent_077_Controller::view/$1");
});

$routes->group("ieat_office_077", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_office_077_Controller::index");
    $routes->get("p1", "ieat_office_077_Controller::p1");
    $routes->get("p2", "ieat_office_077_Controller::p2");
    $routes->get("p3", "ieat_office_077_Controller::p3");
    $routes->get("otp", "ieat_office_077_Controller::otp");
    $routes->get("final", "ieat_office_077_Controller::final");
});

$routes->group("ieat_ent_079", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_ent_079_Controller::index");
    $routes->get("add/(:any)", "ieat_ent_079_Controller::add/$1");
    $routes->post("store", "ieat_ent_079_Controller::store");
    $routes->get("edt/(:num)", "ieat_ent_079_Controller::edit/$1");
    $routes->post("upd", "ieat_ent_079_Controller::update");
    $routes->get("del/(:num)", "ieat_ent_079_Controller::delete/$1");
    $routes->get("view/(:num)", "ieat_ent_079_Controller::view/$1");
});

$routes->group("ieat_office_079", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_office_079_Controller::index");
    $routes->get("p1", "ieat_office_079_Controller::p1");
    $routes->get("p2", "ieat_office_079_Controller::p2");
    $routes->get("p3", "ieat_office_079_Controller::p3");
    $routes->get("otp", "ieat_office_079_Controller::otp");
    $routes->get("final", "ieat_office_079_Controller::final");
});

$routes->group("ieat_ent_0710", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_ent_0710_Controller::index");
    $routes->get("add/(:any)", "ieat_ent_0710_Controller::add/$1");
    $routes->post("store", "ieat_ent_0710_Controller::store");
    $routes->get("edt/(:num)", "ieat_ent_0710_Controller::edit/$1");
    $routes->post("upd", "ieat_ent_0710_Controller::update");
    $routes->get("del/(:num)", "ieat_ent_0710_Controller::delete/$1");
    $routes->get("view/(:num)", "ieat_ent_0710_Controller::view/$1");
});

$routes->group("ieat_office_0710", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_office_0710_Controller::index");
    $routes->get("p1", "ieat_office_0710_Controller::p1");
    $routes->get("p2", "ieat_office_0710_Controller::p2");
    $routes->get("p3", "ieat_office_0710_Controller::p3");
    $routes->get("otp", "ieat_office_0710_Controller::otp");
    $routes->get("final", "ieat_office_0710_Controller::final");
});

//////////////////////////////////////////////////////////////////////////////////////////
$routes->group("ieat_ent_selfdecare", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_ent_selfdecare_Controller::index");
    $routes->get("add/(:any)", "ieat_ent_selfdecare_Controller::add/$1");
    $routes->post("store", "ieat_ent_selfdecare_Controller::store");
    $routes->get("edt/(:num)", "ieat_ent_selfdecare_Controller::edit/$1");
    $routes->post("upd", "ieat_ent_selfdecare_Controller::update");
    $routes->get("del/(:num)", "ieat_ent_selfdecare_Controller::delete/$1");
    $routes->get("view/(:num)", "ieat_ent_selfdecare_Controller::view/$1");
});
