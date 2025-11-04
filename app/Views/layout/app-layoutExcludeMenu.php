<?php

use \Config\Services;
use CodeIgniter\I18n\Time;
//  $encrypter = \Config\Services::encrypter();

// if (!session()->get("LoginStatus")) {
//     $url = "/login";
//     header("location: /login");
//     exit;
// }

// function fncEncrypt($sValue)
// {
//     $encrypter = \Config\Services::encrypter();
//     $var = $encrypter->encrypt($sValue);
//     return  $var;
// }
?>

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= isset($_ENV["app.SiteName"]) ? $_ENV["app.SiteName"] :  ""  ?></title>
    <base href="/">
    <meta name="{csrf_header}" content="{csrf_hash}">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">

    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- Template Stylesheet -->
    <link href="dist/css/style.css" rel="stylesheet">

    <style>
        .content-wrapper {
            background: url("dist/img/bkg_1.jpg") no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
    </style>

</head>

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<script src="plugins/sweetalert/sweetalert.min.js"></script>

<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/moment/moment-with-locales.min.js"></script>
<script src="plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<script src="plugins/jquery.blockUI.js"></script>

<body class="sidebar-mini layout-fixed layout-navbar-fixed accent-info">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-info navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <!-- <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li> -->
                <!-- <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li> -->
            </ul>

            <!-- Right navbar links -->
            <div class="navbar-custom-menu ml-auto">
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                            <img src="dist/img/avatarProfile.png" class="user-image" alt="User Image">
                            <span class="d-none d-sm-inline-flex"><?= session()->get("FullNameTH")  ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="dist/img/avatarProfile.png" class="img-circle" alt="User Image">
                                <p>
                                    <?= session()->get("FullNameTH")  ?>
                                    <small>Username : <?= session()->get("UserName")  ?></small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <!-- <li class="user-body">
                                <div class="row">
                                    <div class="col-sm-6 text-left">
                                        <a href="" class="btn btn-info">เปลี่ยนรหัสผ่าน</a>
                                    </div>
                                    <div class="col-sm-6 text-right">
                                        <a href="user/profile" class="btn btn-primary">ข้อมูลส่วนตัว</a>
                                    </div>
                                </div>
                            </li> -->
                            <!-- Menu Footer-->
                            <!-- <li class="user-footer">
                                <div class="float-left">
                                    <a href="user/changepass" class="btn btn-default btn-flat">เปลี่ยนรหัสผ่าน</a>
                                </div>
                                <div class="float-right">
                                    <a href="user/profile" class="btn btn-default btn-flat">ข้อมูลส่วนตัว</a>
                                </div>
                            </li> -->
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a id="btnLogout" href="logout" class="btn btn-danger text-white" tooltip="Log Out"><i class="nav-icon fas fa-sign-out-alt"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar elevation-4 sidebar-dark-info">
            <!-- Brand Logo -->
            <a href="activeuser" class="brand-link navbar-info">
                <img src="dist/img/logo_ieat_header-01.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3 bg-white" style="opacity: .8">
                <span class="brand-text font-weight-light"><?= isset($_ENV["app.SiteName"]) ? $_ENV["app.SiteName"] :  ""  ?></span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar " data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid" style="min-height: 900px;">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"><?= isset($menuName) ? $menuName : "Page" ?></h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="activeuser">Home</a></li>
                                <li class="breadcrumb-item active"><?= isset($menuName) ? $menuName : "Page" ?></li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">


                    <?= $this->renderSection("content") ?>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?= $this->include('includes/footer') ?>
    </div>
    <!-- ./wrapper -->

    <script>
        var alertPopup = function(titleText, message, iconClass = "success") {
            swal(message, {
                closeOnClickOutside: false,
                title: titleText,
                text: message,
                //icon: iconClass,
            });

        }
        var confirmPopup = function(txtTitle, txtOK = "OK", txtCancel = "Cancel", fncOK = null, fncCancel = null) {
            swal({
                    title: txtTitle,
                    type: "warning",
                    // closeOnClickOutside: false,
                    buttons: {
                        cancel: {
                            text: txtCancel,
                            value: false,
                            visible: true,
                            className: "",
                            closeModal: true,
                        },
                        confirm: {
                            text: txtOK,
                            value: true,
                            visible: true,
                            className: "btn-primary",
                            closeModal: true
                        }
                    },
                })
                .then((value) => {
                    if (value) {
                        fncOK();
                    } else {
                        fncCancel();
                    }
                });
        }

        function BlockUI() {
            $.blockUI({
                message: '<div class="loader"></div><span style="font-size:20px;">Loading...</span>',
                css: {
                    border: 'none',
                    padding: '10px',
                    backgroundColor: 'none',
                    //'-webkit-border-radius': '10px',
                    //'-moz-border-radius': '10px',
                    //opacity: .5,
                    //color: '#FFF',
                    fontFamily: 'THSarabunNew'
                },
                baseZ: 5000
            });

        } //Void
        function UnblockUI() {
            $.unblockUI();
        } //Void
        $(document).ready(function() {
            $("form").on("submit", function() {
                BlockUI();
            });

            <?php if (!empty(session()->getFlashData("alertNoti"))) {
                echo session()->getFlashData("alertNoti");
            } ?>
        });
        $(window).on("load", function() {
            console.log("window load page app-layout");
        });
    </script>


    <?= $this->renderSection("javascripts") ?>


</body>

</html>