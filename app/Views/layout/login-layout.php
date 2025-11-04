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
            background-image: linear-gradient(#fafafaff, #fafafaff);
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            background-position: top;
            font-family: 'Kanit', sans-serif !important;
        }
    </style>
</head>

<body class="" style="font-family: Kanit;">
    <!-- /.login-logo -->
    <?= $this->renderSection("content") ?>
    <!-- /.card -->

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