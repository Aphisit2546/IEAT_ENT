<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= isset($_ENV["app.SiteName"]) ? $_ENV["app.SiteName"] :  ""  ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">

    <style>
        .register-box {
            width: 860px;
        }

        body {
            background: rgb(98, 41, 129);
            background: linear-gradient(141deg, rgba(98, 41, 129, 1) 0%, rgba(32, 142, 109, 1) 51%, rgba(23, 162, 184, 1) 85%);
        }
    </style>
</head>

<body class="hold-transition register-page">
    <div class="register-box">
        <?= $this->renderSection("content") ?>

    </div>
    <!-- /.register-box -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <script src="plugins/sweetalert/sweetalert.min.js"></script>


    <script>
        var alertPopup = function(titleText, message, iconClass = "success") {
            swal(message, {
                closeOnClickOutside: false,
                title: titleText,
                text: message,
                //icon: iconClass,
            });

        }
        $(document).ready(function() {
            console.log("Document ready app-layout");

            <?php if (!empty(session()->getFlashData("alertNoti"))) {
                echo session()->getFlashData("alertNoti");
            } ?>
        });
        $(window).on("load", function() {
            console.log("window load page app-layout");
        });
    </script>
</body>

</html>