<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= isset($_ENV["app.SiteName"]) ? $_ENV["app.SiteName"] :  ""  ?></title>
    <base href="/">
    <meta name="{csrf_header}" content="{csrf_hash}">
    <!-- Google Font: Source Sans Pro -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> -->
    <link href='https://fonts.googleapis.com/css?family=Kanit:100,100,200' rel='stylesheet' type='text/css'>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- animate style -->
    <link rel="stylesheet" href="dist/css/animate.min.css">

    <style>
        body {
            /*background: url("dist/img/DOEB_BG_02.png") no-repeat;*/
            background-image: linear-gradient(#f8f3faff, #f8f3faff);
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            background-position: top;
            font-family: 'Kanit', sans-serif !important;
            font-weight: bold;
            font-size: medium;
        }

        .div_header {
            border: 1px solid #6007b3ff;
            /* Sets width, style, and color in shorthand */
            border-color: #6007b3ff;
            /* Overrides the color set in shorthand */
            border-radius: 15px 15px 15px 15px;
        }

        .font_header {
            font-family: 'Kanit', sans-serif !important;
            color: #000000ff;
            font-size: 21px;
            font-weight: bolder;
        }

        .font_header_detail {
            font-family: 'Kanit', sans-serif !important;
            color: #000000ff;
            font-size: 18px;
        }

        .font_header_detail_red {
            font-family: 'Kanit', sans-serif !important;
            color: #ff0000ff;
            font-size: 18px;
        }
    </style>
    <style type="text/css">
        [type=radio] {
            width: 2rem;
            height: 2rem;
            color: dodgerblue;
            vertical-align: middle;
            -webkit-appearance: none;
            background: none;
            border: 0;
            outline: 0;
            flex-grow: 0;
            border-radius: 50%;
            background-color: #FFFFFF;
            transition: background 300ms;
            cursor: pointer;
        }


        /* Pseudo element for check styling */

        [type=radio]::before {
            content: "";
            color: transparent;
            display: block;
            width: inherit;
            height: inherit;
            border-radius: inherit;
            border: 0;
            background-color: transparent;
            background-size: contain;
            box-shadow: inset 0 0 0 1px #CCD3D8;
        }


        /* Checked */

        [type=radio]:checked {
            background-color: currentcolor;
        }

        [type=radio]:checked::before {
            box-shadow: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'%3E %3Cpath d='M15.88 8.29L10 14.17l-1.88-1.88a.996.996 0 1 0-1.41 1.41l2.59 2.59c.39.39 1.02.39 1.41 0L17.3 9.7a.996.996 0 0 0 0-1.41c-.39-.39-1.03-.39-1.42 0z' fill='%23fff'/%3E %3C/svg%3E");
        }


        /* Disabled */

        [type=radio]:disabled {
            background-color: #CCD3D8;
            opacity: 0.84;
            cursor: not-allowed;
        }


        /* IE */

        [type=radio]::-ms-check {
            content: "";
            color: transparent;
            display: block;
            width: inherit;
            height: inherit;
            border-radius: inherit;
            border: 0;
            background-color: transparent;
            background-size: contain;
            box-shadow: inset 0 0 0 1px #CCD3D8;
        }

        [type=radio]:checked::-ms-check {
            box-shadow: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'%3E %3Cpath d='M15.88 8.29L10 14.17l-1.88-1.88a.996.996 0 1 0-1.41 1.41l2.59 2.59c.39.39 1.02.39 1.41 0L17.3 9.7a.996.996 0 0 0 0-1.41c-.39-.39-1.03-.39-1.42 0z' fill='%23fff'/%3E %3C/svg%3E");
        }
    </style>
    <style type="text/css">
        [type=checkbox] {
            width: 2rem;
            height: 2rem;
            color: dodgerblue;
            vertical-align: middle;
            -webkit-appearance: none;
            background: none;
            border: 0;
            outline: 0;
            flex-grow: 0;
            border-radius: 10%;
            background-color: #FFFFFF;
            transition: background 300ms;
            cursor: pointer;
        }


        /* Pseudo element for check styling */

        [type=checkbox]::before {
            content: "";
            color: transparent;
            display: block;
            width: inherit;
            height: inherit;
            border-radius: inherit;
            border: 0;
            background-color: transparent;
            background-size: contain;
            box-shadow: inset 0 0 0 1px #CCD3D8;
        }


        /* Checked */

        [type=checkbox]:checked {
            background-color: currentcolor;
        }

        [type=checkbox]:checked::before {
            box-shadow: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'%3E %3Cpath d='M15.88 8.29L10 14.17l-1.88-1.88a.996.996 0 1 0-1.41 1.41l2.59 2.59c.39.39 1.02.39 1.41 0L17.3 9.7a.996.996 0 0 0 0-1.41c-.39-.39-1.03-.39-1.42 0z' fill='%23fff'/%3E %3C/svg%3E");
        }


        /* Disabled */

        [type=checkbox]:disabled {
            background-color: #CCD3D8;
            opacity: 0.84;
            cursor: not-allowed;
        }

        /* IE */

        [type=checkbox]::-ms-check {
            content: "";
            color: transparent;
            display: block;
            width: inherit;
            height: inherit;
            border-radius: inherit;
            border: 0;
            background-color: transparent;
            background-size: contain;
            box-shadow: inset 0 0 0 1px #CCD3D8;
        }

        [type=checkbox]:checked::-ms-check {
            box-shadow: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'%3E %3Cpath d='M15.88 8.29L10 14.17l-1.88-1.88a.996.996 0 1 0-1.41 1.41l2.59 2.59c.39.39 1.02.39 1.41 0L17.3 9.7a.996.996 0 0 0 0-1.41c-.39-.39-1.03-.39-1.42 0z' fill='%23fff'/%3E %3C/svg%3E");
        }
    </style>
</head>

<body class="" style="font-family: Kanit;">
    <div class="container-fluid py-1 content_all">
        <!-- /.login-logo -->
        <?= $this->renderSection("content") ?>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>

    <script>
        $(document).ready(function() {

            loadCaptcha();
            $("#btnEye").click(function(e, ev) {
                e.preventDefault();
                var x = $("[name=password]");
                if (x.attr("type") === "password") {
                    x.attr("type", "text");
                    $("#iconEye").removeClass("far fa-eye-slash").addClass("far fa-eye");
                } else {
                    x.attr("type", "password");
                    $("#iconEye").removeClass("far fa-eye").addClass("far fa-eye-slash");
                }
            })

            $("#reLoadCaptcha").click(function(e, ev) {
                e.preventDefault();
                loadCaptcha();
            })

        });

        var loadCaptcha = function() {
            var jqxhr = $.get("Captcha")
                .done(function(response, jqxhr) {
                    if (!(response == null || response == false)) {
                        var objData = response;
                        $("#imgCaptcha").prop("src", objData)
                        console.log(objData);
                    } else {

                    }
                });

            jqxhr.fail(function(response) {
                    // alert( "error" );
                    console.log(response);
                })
                .always(function() {});


        }
    </script>


    <div class="modal fade" id="statusModal" tabindex="-1" aria-labelledby="statusModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <p id="modalMessage"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // ตรวจสอบ Flashdata และแสดง Modal
        document.addEventListener('DOMContentLoaded', function() {
            const status = "<?= session()->getFlashdata('status'); ?>";
            const message = "<?= session()->getFlashdata('message'); ?>";

            if (status && message) {
                const modalTitle = document.getElementById('statusModalLabel');
                const modalBody = document.getElementById('modalMessage');

                modalBody.innerText = message;

                // เปลี่ยนสี Modal Header ตามสถานะ
                /*
                if (status === 'success') {
                    modalTitle.innerText = "สำเร็จ";
                    // เพิ่มคลาสสำหรับ Bootstrap เช่น bg-success
                } else if (status === 'error') {
                    modalTitle.innerText = "ผิดพลาด";
                    // เพิ่มคลาสสำหรับ Bootstrap เช่น bg-danger
                }
                */
                // แสดง Modal
                const myModal = new bootstrap.Modal(document.getElementById('statusModal'));
                myModal.show();
            }
        });
    </script>

</body>

</html>