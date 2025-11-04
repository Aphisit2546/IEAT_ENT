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
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> -->
    <link href='https://fonts.googleapis.com/css?family=Kanit:100,300,200' rel='stylesheet' type='text/css'>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">

    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- Template Stylesheet -->
    <link href="dist/css/style.css" rel="stylesheet">

    <!-- animate style -->
    <link rel="stylesheet" href="dist/css/animate.min.css">

    <style>
        body {
            font-family: 'Kanit', sans-serif !important;
        }

        .content-wrapper {
            background: url("dist/img/DOEB_BG_02.png") no-repeat center center fixed;
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

<body style="font-family: Kanit;">
    <div class="wrapper">
        <!-- /.navbar -->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper ">
            <!-- Main content -->
            <div class="content">
                <div class="container pt-5 pb-2">
                    <div class="card card-blue" style="min-height: 900px;">
                        <div class="card-body">
                            <?= $this->renderSection("content") ?>
                        </div>
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
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
        $(window).on("load", function() {});
    </script>


    <?= $this->renderSection("javascripts") ?>


</body>

</html>