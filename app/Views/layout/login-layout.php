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
        .btn-confirm {
            background-color: #17a2b8;  
            color: #ffffff;
            padding: 10px 20px;
            font-size: 14px;
            font-weight: 600;
            border: none;
            border-radius: 6px;
            transition: 0.2s;
        }

        .btn-confirm:hover {
            background-color: #138496; 
        }

        .btn-confirm:active {
            background-color: #117a8b;
        }

        .btn-checkreport {
            width: 100%;
            background-color: #0d6efd;   
            color: #ffffff;
            padding: 10px 16px;
            font-size: 14px;
            font-weight: 600;
            border: none;
            border-radius: 6px;
            transition: 0.2s;
        }

        .btn-checkreport:hover {
            background-color: #0b5ed7; 
        }

        .btn-checkreport:active {
            background-color: #0a58ca;
        }

        .btn-information {
            background-color: #0d6efd;   
            color: #ffffff;             
            padding: 10px 20px;
            border-radius: 6px;
            font-weight: 600;
            text-align: center;
            cursor: pointer;
            border: 1px solid #0b5ed7; 
            transition: 0.2s;
        }

        .btn-Searchrequestnumber {
            background-color: #838383ff;  
            color: #ffffff;
            padding: 4px 20px;
            border-radius: 6px;
            font-weight: 600;
            text-align: center;
            cursor: pointer;
            border: 1px solid #5a5a5aff;
            transition: 0.2s;
        }
    </style>

    <style>
        .ieat-action-bar {
            margin-top: 24px;
            padding: 16px 20px;
            border-top: 1px solid #e5e7eb;
            background: #f9fafb;
        }

        .ieat-action-group {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
        }

        .ieat-btn {
            flex: 1;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 10px 16px;
            border-radius: 999px;
            font-size: 14px;
            font-weight: 600;
            border: 1px solid transparent;
            cursor: pointer;
            transition: all 0.25s ease-in-out;
            white-space: nowrap;

            /* เรืองแสง */
            box-shadow: 0 0 0px rgba(0,0,0,0.0);
        }

        .ieat-btn:hover {
            transform: translateY(-2px);
        }

        .ieat-btn i {
            font-size: 14px;
        }

        /* ปุ่มยกเลิก */
        .ieat-btn--cancel {
            background: #ffffff;
            color: #b91c1c;
            border-color: #fecaca;
            box-shadow: 0 0 8px rgba(255, 0, 0, 0.15);
        }
        .ieat-btn--cancel:hover {
            background: #fee2e2;
            box-shadow: 0 0 14px rgba(255, 0, 0, 0.35);
        }

        /* ปุ่มล้างข้อมูล */
        .ieat-btn--reset {
            background: #fff7ed;
            color: #c05621;
            border-color: #fed7aa;
            box-shadow: 0 0 8px rgba(251, 146, 60, 0.20);
        }
        .ieat-btn--reset:hover {
            background: #ffedd5;
            box-shadow: 0 0 14px rgba(251, 146, 60, 0.45);
        }

        /* ปุ่มบันทึก */
        .ieat-btn--save {
            background: #ecfdf3;
            color: #15803d;
            border-color: #bbf7d0;
            box-shadow: 0 0 8px rgba(52, 211, 153, 0.25);
        }
        .ieat-btn--save:hover {
            background: #dcfce7;
            box-shadow: 0 0 16px rgba(16, 185, 129, 0.55);
        }

        /*  ปุ่มส่งคำขอให้ กนอ. */
        .ieat-btn--submit {
            background: #1d4ed8;
            color: #ffffff;
            border-color: #1d4ed8;
            box-shadow: 0 0 8px rgba(59, 130, 246, 0.40);
        }
        .ieat-btn--submit:hover {
            background: #1e40af;
            border-color: #1e40af;
            box-shadow: 0 0 16px rgba(59, 130, 246, 0.75);
        }

        /* ปุ่มเรียง 2 แถว บนจอเล็ก */
        @media (max-width: 768px) {
            .ieat-btn {
                flex: 1 1 calc(50% - 12px);
            }
        }
    </style>

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