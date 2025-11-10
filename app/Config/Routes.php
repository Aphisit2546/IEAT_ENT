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

$routes->group("ieat_ent_013_10", function ($routes) {
    $routes->match(["get", "post"], "/", "ieat_ent_013_10_Controller::index");
    $routes->get("add/(:any)", "ieat_ent_013_10_Controller::add/$1");
    $routes->post("store", "ieat_ent_013_10_Controller::store");
    $routes->get("edt/(:num)", "ieat_ent_013_10_Controller::edit/$1");
    $routes->post("upd", "ieat_ent_013_10_Controller::update");
    $routes->get("del/(:num)", "ieat_ent_013_10_Controller::delete/$1");
    $routes->get("view/(:num)", "ieat_ent_013_10_Controller::view/$1");
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
