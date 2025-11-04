<?php

use \Config\Services;
use CodeIgniter\I18n\Time;

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>/assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>/assets/img/favicon.png">
	<title><?= isset($_ENV["app.SiteName"]) ? $_ENV["app.SiteName"] :  ""  ?></title>

	<!-- CSS Files -->
	<link id="pagestyle" href="<?php echo base_url(); ?>/dist/theme_modify/argon-dashboard.css?v=2.1.0" rel="stylesheet" />
	<!-- ======= Icons used for dropdown (you can use your own) ======== -->
	<link href='https://fonts.googleapis.com/css?family=Kanit:100,300,200' rel='stylesheet' type='text/css'>

	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>/dist/css/adminlte.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/plugins/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/plugins/daterangepicker/daterangepicker.css">
	<link href="<?php echo base_url(); ?>/dist/css/style.css" rel="stylesheet">
	<!-- animate style -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>/dist/css/animate.min.css">

	<!-- REQUIRED SCRIPTS -->
	<!-- jQuery -->
	<script src="<?php echo base_url(); ?>/plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="<?php echo base_url(); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- AdminLTE App -->
	<script src="<?php echo base_url(); ?>/dist/js/adminlte.min.js"></script>
	<script src="<?php echo base_url(); ?>/plugins/sweetalert/sweetalert.min.js"></script>

	<script src="<?php echo base_url(); ?>/plugins/moment/moment.min.js"></script>
	<script src="<?php echo base_url(); ?>/plugins/moment/moment-with-locales.min.js"></script>
	<script src="<?php echo base_url(); ?>/plugins/inputmask/jquery.inputmask.min.js"></script>
	<!-- date-range-picker -->
	<script src="<?php echo base_url(); ?>/plugins/daterangepicker/daterangepicker.js"></script>
	<script src="<?php echo base_url(); ?>/plugins/jquery.blockUI.js"></script>

	<!-- browser new -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.min.css" crossorigin="anonymous">
	<link href="<?php echo base_url(); ?>/plugins/dist/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>/plugins/dist/all.css">

	<script src="<?php echo base_url(); ?>/plugins/dist/js/plugins/buffer.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>/plugins/dist/js/plugins/filetype.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>/plugins/dist/js/fileinput.js" type="text/javascript"></script>

	<!-- Bootstrap 5 -->
	<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>

	<link rel="stylesheet" href="https://code.jquery.com/ui/1.14.1/themes/base/jquery-ui.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
	<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
	<script src="https://code.jquery.com/ui/1.14.1/jquery-ui.js"></script>

	<style type="text/css">
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

		.sidebar li .submenu {
			list-style: none;
			margin: 0;
			padding: 0;
			padding-left: 1rem;
			padding-right: 1rem;
		}

		.sidebar .nav-link {
			font-size: 14px;
			color: var(--bs-dark);
		}

		.sidebar .nav-link:hover {
			color: var(--bs-primary);
		}

		.class_header_page_01 {
			font: var(--unnamed-font-style-normal) normal var(--unnamed-font-weight-normal) 30px/45px var(--unnamed-font-family-kanit);
			letter-spacing: var(--unnamed-character-spacing-0);
			color: var(--unnamed-color-ff4d00);
			text-align: left;
			font: normal normal normal 30px/45px Kanit;
			letter-spacing: 0px;
			color: #FF4D00;
			opacity: 1;
		}

		.content_all {
			background: #FFFFFF 0% 0% no-repeat padding-box;
			width: 99%;
			box-shadow: 0px 0px 5px #0000004D;
			border-radius: 20px;
			opacity: 1;
		}

		.content_add_edit {
			width: 99%;
			box-shadow: 0px 0px 5px #0000004D;
			border-radius: 20px;
			opacity: 1;
		}

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
	<script type="text/javascript">
		document.addEventListener("DOMContentLoaded", function() {

			document.querySelectorAll('.sidebar .nav-link').forEach(function(element) {

				element.addEventListener('click', function(e) {

					let nextEl = element.nextElementSibling;
					let parentEl = element.parentElement;

					if (nextEl) {
						e.preventDefault();
						let mycollapse = new bootstrap.Collapse(nextEl);

						if (nextEl.classList.contains('show')) {
							mycollapse.hide();
						} else {
							mycollapse.show();
							// find other submenus with class=show
							var opened_submenu = parentEl.parentElement.querySelector('.submenu.show');
							// if it exists, then close all of them
							if (opened_submenu) {
								new bootstrap.Collapse(opened_submenu);
							}

						}
					}

				});
			})

		});
		// DOMContentLoaded  end
	</script>

</head>

<body class="hold-transition layout-top-nav layout-navbar-fixed accent-green" style="font-family: Kanit;">
	<div class="min-height-300 position-absolute w-100" style="background: transparent linear-gradient(180deg, #FF4D00 0%, #FFA300 100%) 0% 0% no-repeat padding-box;"></div>
	<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-4 fixed-start ms-4 " id="sidenav-main">
		<div class="sidenav-header">
			<br />
			<img src="<?php echo base_url(); ?>/dist/img/doeb_thai_png.png" width="250px" height="50px" alt="main_logo">
			<br /><br />
		</div>
		<hr class="horizontal dark mt-0">
		<div class="collapse navbar-collapse w-auto sidebar" id="sidenav-collapse-main">

			<!-- ============= COMPONENT ============== -->

			<ul class="nav flex-column" id="nav_accordion">
				<li class="nav-item">
					<a class="nav-link" href="/home">HOME</a>
				</li>
				<?php  ?>
				<li class="nav-item has-submenu">
					<a class="nav-link" href="#"> จัดการสิทธิ์ (Safety SSO) <i class="bi small bi-caret-down-fill"></i> </a>
					<ul class="submenu collapse">
						<li><a class="nav-link" href="home1">จัดการกลุ่มผู้ใช้งาน</a></li>
						<li><a class="nav-link" href="home1">จัดการโปรแกรมใช้งาน</a></li>
						<li><a class="nav-link" href="home1">กำหนดสิทธิ์ระดับกลุ่มผู้ใช้งาน</a></li>
						<li><a class="nav-link" href="home1">จัดการข้อมูลผู้ใช้งาน</a></li>
						<li><a class="nav-link" href="home1">รีเช็ตรหัสผ่าน</a></li>
						<li><a class="nav-link" href="home1">จัดการรหัสอนุมัติและลายเซ็นต์</a></li>
						<li><a class="nav-link" href="home1">รายงานสรุปรายชื่อผู้ใช้งานระบบ</a></li>
						<li><a class="nav-link" href="home1">รายงานประวัติการเข้าใช้งานระบบ</a></li>
					</ul>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="home2">แก้ไขข้อมูลย้อนหลัง</a>
				</li>
				<li class="nav-item has-submenu">
					<a class="nav-link" href="#">จัดการข้อมูลหลัก <i class="bi small bi-caret-down-fill"></i> </a>
					<ul class="submenu collapse">
						<li><a class="nav-link" href="<?php echo base_url(); ?>/plan_doeb">จัดการข้อมูลหัวข้อแผน</a></li>
						<li><a class="nav-link" href="<?php echo base_url(); ?>/plan_detail_doeb">จัดการข้อมูลรายละเอียดแผนบริหารจัดการองค์กร</a></li>
						<li><a class="nav-link" href="<?php echo base_url(); ?>/strategy_head_doeb">จัดการข้อมูลหัวข้อยุทธศาสตร์</a></li>
						<li><a class="nav-link" href="<?php echo base_url(); ?>/strategy_doeb">จัดการข้อมูลกลยุทธ์</a></li>
						<li><a class="nav-link" href="<?php echo base_url(); ?>/budget_doeb">จัดการข้อมูลงบประมาณ</a></li>
						<li><a class="nav-link" href="<?php echo base_url(); ?>/calendar_doeb">ประเภทปฏิทินสำหรับองค์กร</a></li>
					</ul>
				</li>
				<li class="nav-item has-submenu">
					<a class="nav-link" href="#">จัดการข้อมูลแผนบริหาร จัดการองค์กร<i class="bi small bi-caret-down-fill"></i> </a>
					<ul class="submenu collapse">
						<li><a class="nav-link" href="home4">ยืนยันแผน ยุทธศาสตร์ และกลยุทธ์</a></li>
						<li><a class="nav-link" href="home4">จัดการข้อมูลเสนอเบื้องต้นแผนโครงการ/กิจกรรม</a></li>
						<li><a class="nav-link" href="home4">จัดการข้อมูลแผนงบประมาณ และโครงการที่ได้รับการอนุมัติ</a></li>
						<li><a class="nav-link" href="home4">โอนย้ายงบประมาณ</a></li>
						<li><a class="nav-link" href="home4">จัดการข้อมูลดัชนีชี้วัด</a></li>
						<li><a class="nav-link" href="home4">จัดการการแปรผลดัชนีชี้วัด</a></li>
						<li><a class="nav-link" href="home4">จัดการกรอบเวลาติดตามผลดัชนีชี้วัด</a></li>
					</ul>
				</li>
				<li class="nav-item has-submenu">
					<a class="nav-link" href="#">จัดการข้อมูลผู้ได้รับงบประมาณ<i class="bi small bi-caret-down-fill"></i> </a>
					<ul class="submenu collapse">
						<li><a class="nav-link" href="home5">แจ้งขอพิจารณาปรับแผนการดำเนินการ</a></li>
						<li><a class="nav-link" href="home5">อนุมัติการปรับแผนการดำเนินการ</a></li>
						<li><a class="nav-link" href="home5">บันทึกความก้าวหน้า (รายเดือน)</a></li>
						<li><a class="nav-link" href="home5">ติดตามความก้าวหน้ารายเดือน</a></li>
					</ul>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="home6">รายงานสำหรับผู้ปฏิบัติงาน ทางด้านจัดการแผนยุทธศาสตร์</a>
				</li>
				<li class="nav-item has-submenu">
					<a class="nav-link" href="#">ระบบจัดการกิจกรรมการลงทะเบียน<i class="bi small bi-caret-down-fill"></i> </a>
					<ul class="submenu collapse">
						<li><a class="nav-link" href="home7">สร้างหัวข้อแบบลงทะเบียน</a></li>
						<li><a class="nav-link" href="home7">จัดการรายละเอียดแบบลงทะเบียน</a></li>
						<li><a class="nav-link" href="home7">เผยแพร่แบบลงทะเบียน</a></li>
						<li><a class="nav-link" href="home7">รายงานสรุปผลการลงทะเบียน</a></li>
					</ul>
				</li>

				<li class="nav-item has-submenu">
					<a class="nav-link" href="#">จัดการข้อมูลการประชุม<i class="bi small bi-caret-down-fill"></i> </a>
					<ul class="submenu collapse">
						<li><a class="nav-link" href="home8">จัดการข้อมูลการประชุม</a></li>
						<li><a class="nav-link" href="home8">บันทึกการประชุม</a></li>
						<li><a class="nav-link" href="home8">แก้ไขรายงานการประชุม</a></li>
						<li><a class="nav-link" href="home8">ยืนยันข้อมูลรายงานการประชุม</a></li>
					</ul>
				</li>
				<?php  ?>
				<li class="nav-item has-submenu">
					<a class="nav-link" href="#">จัดทำแบบลงทะเบียน<i class="bi small bi-caret-down-fill"></i> </a>
					<ul class="submenu collapse">
						<li><a class="nav-link" href="/registerFormMangement">โปรแกรมจัดทำแบบลงทะเบียน</a></li>
						<li><a class="nav-link" href="/registerFormTracking">โปรแกรมติดตามสถานะการลงทะเบียน</a></li>
					</ul>
				</li>
				<li class="nav-item has-submenu">
					<a class="nav-link" href="#">จัดการข้อมูลปฏิทิน<i class="bi small bi-caret-down-fill"></i> </a>
					<ul class="submenu collapse">
						<li><a class="nav-link" href="/calendarActivity">ดูปฏิทินกิจกรรม</a></li>
						<li><a class="nav-link" href="/calendarMangement">จัดการปฏิทินกิจกรรม</a></li>
					</ul>
				</li>
				<?php  ?>
				<li class="nav-item">
					<a class="nav-link" href="home10">เมนูสำหรับผู้บริหาร</a>
				</li>
				<?php ?>
				<li class="nav-item">
					<a class="nav-link" href="/qrcode">สร้าง QR-Code</a>
				</li>
				<?php  ?>
				<li class="nav-item">
					<a class="nav-link" href="home11">โปรแกรมอื่นๆ</a>
				</li><?php ?>
			</ul>

		</div>
	</aside>
	<main class="main-content position-relative border-radius-lg ">
		<!-- Navbar -->
		<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
			<div class="container-fluid py-1 px-3">
				<nav aria-label="breadcrumb">
					<h6 class="font-weight-bolder text-white mb-0"><?= isset($_ENV["app.AppFullNameTH"]) ? $_ENV["app.AppFullNameTH"] :  ""  ?></h6>
					<ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
						<li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
						<li class="breadcrumb-item text-sm text-white active" aria-current="page">Dashboard</li>
					</ol>
				</nav>
				<div class="sidenav-toggler sidenav-toggler-inner d-xl-block d-none ">
					<a href="javascript:;" class="nav-link p-0">
						<div class="sidenav-toggler-inner">
							<i class="sidenav-toggler-line bg-white"></i>
							<i class="sidenav-toggler-line bg-white"></i>
							<i class="sidenav-toggler-line bg-white"></i>
						</div>
					</a>
				</div>

				<div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
					<div class="ms-md-auto pe-md-3 d-flex align-items-center">
						<div class="input-group">
							<img src="<?php echo base_url(); ?>/dist/img/user_1.png" height="40px" width="40px" class="img-circle" alt="User Image">
							&nbsp;&nbsp;
							<p>
								<small>LogIn ล่าสุด : <?= session()->get("LastLogIn")  ?></small>
							</p>
						</div>
					</div>
					<ul class="navbar-nav justify-content-end">
						<li class="nav-item d-flex align-items-center">
							<a href="logout" class="btn btn-dark w-100"><i class="fas fa-sign-out-alt"></i> ออกจากระบบ</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- End Navbar -->
		<div class="container-fluid py-1 content_all">

			<?= $this->renderSection("content") ?>

			<footer class="footer pt-3  ">
				<div class="container-fluid">
					<div class="row align-items-center justify-content-lg-between">
						<div class="col-lg-12 mb-lg-0 mb-4">
							<div class="copyright text-center text-sm text-muted text-lg-start">
								All rights reserved by NID Progress Technology Co., Ltd. © 2025 - 20xx
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</main>
	<!--   Core JS Files   -->
	<script src="<?php echo base_url(); ?>/dist/theme_modify/popper.min.js"></script>
	<script src="<?php echo base_url(); ?>/dist/theme_modify/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>/dist/theme_modify/perfect-scrollbar.min.js"></script>
	<script src="<?php echo base_url(); ?>/dist/theme_modify/smooth-scrollbar.min.js"></script>
	<script src="<?php echo base_url(); ?>/dist/theme_modify/chartjs.min.js"></script>
	<script>
		function addRow(tableID) {
			var table = document.getElementById(tableID);

			var rowCount = table.rows.length;
			var row = table.insertRow(rowCount);

			var colCount = table.rows[<?php echo $count_data_grid ?? 0; ?> + 1].cells.length;

			for (var i = 0; i < colCount; i++) {

				var newcell = row.insertCell(i);

				newcell.innerHTML = table.rows[<?php echo $count_data_grid ?? 0; ?> + 1].cells[i].innerHTML;
				//alert(newcell.childNodes);
				switch (newcell.childNodes[0].type) {
					case "text":
						newcell.childNodes[0].value = "";
						break;
					case "checkbox":
						newcell.childNodes[0].checked = false;
						break;
					case "select-one":
						newcell.childNodes[0].selectedIndex = 0;
						break;
				}
			}
		}

		function deleteRow(tableID) {
			var selectCount = getTableSelectedCount(tableID);
			var tableRows = getTableRowsCount(tableID);

			if (selectCount >= (tableRows - 1)) {
				alert("ไม่สามารถลบแถวทั้งหมดได้ ต้องเหลือข้อมูลอย่างน้อย 1 แถว");
				return;
			}
			try {
				var table = document.getElementById(tableID);
				var rowCount = table.rows.length;

				for (var i = 0; i < rowCount; i++) {
					var row = table.rows[i];
					var chkbox = row.cells[0].childNodes[0];
					if (chkbox != null && chkbox.checked == true) {
						table.deleteRow(i);
						rowCount--;
						i--;
					}
				}
			} catch (e) {
				alert(e);
			}
		}

		function getTableRowsCount(tableID) {
			var textFieldSumBuilding = document.getElementById(tableID);
			try {
				var table = document.getElementById(tableID);
				return table.rows.length;
			} catch (e) {
				alert(e);
			}
			return -1; //Return -1 if TableID not found
		}

		function getTableSelectedCount(tableID) {
			var textFieldSumBuilding = document.getElementById(tableID);
			try {
				var table = document.getElementById(tableID);
				var selectedCount = 0;
				var rowCount = table.rows.length;
				for (var i = 0; i < rowCount; i++) {
					var row = table.rows[i];
					var chkbox = row.cells[0].childNodes[0];
					if (chkbox != null && chkbox.checked == true) {
						selectedCount++;
					}
				}
				return selectedCount;
			} catch (e) {
				alert(e);
			}
			return -1; //Return -1 if TableID not found
		}
	</script>
	<script>
		var win = navigator.platform.indexOf('Win') > -1;
		if (win && document.querySelector('#sidenav-scrollbar')) {
			var options = {
				damping: '0.5'
			}
			Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
		}
	</script>
	<!-- Github buttons -->
	<script async defer src="https://buttons.github.io/buttons.js"></script>
	<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
	<script src="<?php echo base_url(); ?>/dist/theme_modify/argon-dashboard.min.js?v=2.1.0"></script>
</body>

</html>