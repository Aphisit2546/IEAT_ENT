<?= $this->extend("layout/login-layout"); ?>
<!-- DataTables -->

<?= $this->section("content"); ?>
<!--
<div class="class_header_page_02">
    <button onclick="window.location.href='center_ieat_ent'" style="background-color: #ff0000ff; color:aliceblue;">กลับสู่หน้าหลัก</button>
</div>
<hr />
-->
<div class="class_header_page_02">
    <a style="color: #6007b3ff; font-size: 18px;"><b>แผงควบคุมหลัก</b></a>
    <b>&nbsp;&nbsp;/&nbsp;&nbsp;</b>
    <a href="center_ieat_ent" style="color: #6007b3ff; font-size: 18px;"><b>ตรวจประเมินรับรองตัวเอง</b></a>
    <b>&nbsp;&nbsp;/&nbsp;&nbsp;</b>
    <a href="ieat_ent_selfdecare" style="color: #6007b3ff; font-size: 18px;"><b>โปรแกรมตรวจประเมินรับรองด้วยตนเอง</b></a>
    <b>&nbsp;&nbsp;/&nbsp;&nbsp;</b>
    <a style="color: #000000ff; font-size: 18px;"><b>1-01-1-306-00001-2568</b></a>
</div>
<br />
<div class="class_header_page_02">
    <font style="color: #000000ff; font-size: 25px;"><b>คำขอ 1-01-1-306-00001-2568</b></font>
    &nbsp;&nbsp;
    <font style="color: #000000ff; font-size: 18px;"><b>โปรแกรมตรวจประเมินรับรองด้วยตนเอง</b></font>
</div>
<br /><br />
<div class="col-md-12">
    <div class="card">
        <div class="card-header p-4" style="text-align: center;">
            <ul class="nav nav-pills">
                <li class="nav-item"><a class="nav-link active" href="#tab1" data-toggle="tab"><span class="font_header_detail"><b>ข้อมูลทั่วไป</b></span></a></li>
                <li class="nav-item"><a class="nav-link" href="#tab2" data-toggle="tab"><span class="font_header_detail"><b>การประกอบกิจการ และการติดตั้งเครื่องจักร</b></span></a></li>
                <li class="nav-item"><a class="nav-link" href="#tab3" data-toggle="tab"><span class="font_header_detail"><b>ความปลอดภัย</b></span></a></li>
            </ul>
        </div><!-- /.card-header -->

        <div class="card-body">
            <div class="row">
                <div class="col-2" align="center">
                    <font style="color: #000000ff; font-size: 18px;"><b>ความคืบหน้าโดยรวม</b></font>
                </div>
                <div class="col-9">
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 90%;"></div>
                    </div>
                </div>
                <div class="col-1" align="center">
                    <font style="color: #000000ff; font-size: 18px;"><b>90%</b></font>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="tab-content">
                <div class="active tab-pane" id="tab1">
                    <!-- Table -->
                    <div class="card p-4">
                        <div class="card-header">
                            <span class="font_header"><b>ข้อมูลทั่วไป</b></span>
                        </div>
                        <div class="table-responsive div_header p-4">
                            <table class="table table-lg">
                                <tbody>
                                    <tr>
                                        <td class="table-detail-left col-xs-4 col-sm-4 col-md-4 col-lg-4">ชื่อโรงงาน (ภาษาไทย)</td>
                                        <td class="table-detail-right col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                            <div class="initial-form">บริษัท ทดสอบ จำกัด<?php echo $_SESSION['companyname_th_view']; ?></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left col-xs-4 col-sm-4 col-md-4 col-lg-4">ชื่อโรงงาน (ภาษาอังกฤษ)</td>
                                        <td class="table-detail-right col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                            <div class="initial-form">Tester Company<?php echo $_SESSION['companyname_en_view']; ?></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left col-xs-4 col-sm-4 col-md-4 col-lg-4">เลขประจำตัวผู้เสียภาษี</td>
                                        <td class="table-detail-right col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                            <div class="initial-form">0109999999999<?php echo $_SESSION['tax_id_view']; ?></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left col-xs-4 col-sm-4 col-md-4 col-lg-4">เลขทะเบียนโรงงานรูปแบบเก่า</td>
                                        <td class="table-detail-right col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                            <div class="initial-form">น.71(66)-90015/2559-ญนอ.<?php echo $_SESSION['tax_id_view']; ?></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left col-xs-4 col-sm-4 col-md-4 col-lg-4">เลขทะเบียนโรงงานรูปแบบใหม่</td>
                                        <td class="table-detail-right col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                            <div class="initial-form">82159999925999<?php echo $_SESSION['tax_id_view']; ?></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left col-xs-4 col-sm-4 col-md-4 col-lg-4">ประเภทหรือชนิดโรงงานลำดับที่</td>
                                        <td class="table-detail-right col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                            <div class="initial-form">3<?php echo $_SESSION['tax_id_view']; ?></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left col-xs-4 col-sm-4 col-md-4 col-lg-4">นิคมอุตสาหกรรม</td>
                                        <td class="table-detail-right col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                            <div class="initial-form">เกตเวย์ซิตี้<?php echo $_SESSION['tax_id_view']; ?></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left col-xs-4 col-sm-4 col-md-4 col-lg-4">สถานภาพโรงงาน</td>
                                        <td class="table-detail-right col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                            <div class="initial-form">แจ้งประกอบกิจการล่าสุด วันที่ 01/01/2026<?php echo $_SESSION['tax_id_view']; ?></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left col-xs-4 col-sm-4 col-md-4 col-lg-4">สำนักงานใหญ่</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left col-xs-4 col-sm-4 col-md-4 col-lg-4" style="padding-left:50px;">ตั้งอยู่ที่</td>
                                        <td class="table-detail-right col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                            <div class="initial-form">
                                                <span><b>เลขที่ 9999</b><?php echo $_SESSION['addrno_office_view']; ?></span>
                                                <span><b>หมู่ที่ 9999</b><?php echo $_SESSION['moo_office_view']; ?></span>
                                                <span><b>ซอย -</b><?php echo $_SESSION['lane_office_view']; ?></span>
                                                <span><b>ถนน -</b><?php echo $_SESSION['street_office_view']; ?></span>
                                                <span><b>ตำบล คลองสวน</b><?php echo $_SESSION['district_office_view']; ?></span>
                                                <span><b>อำเภอ บางบ่อ</b><?php echo $_SESSION['amphur_office_view']; ?></span>
                                                <span><b>จังหวัด สมุทรปราการ</b><?php echo $_SESSION['province_office_view']; ?></span>
                                                <span><b>รหัสไปรษณีย์ 10560</b><?php echo $_SESSION['zipcode_office_view']; ?></span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left col-xs-4 col-sm-4 col-md-4 col-lg-4" style="padding-left:50px;">โทรศัพท์</td>
                                        <td class="table-detail-right col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                            <div class="initial-form">
                                                02-3456789<?php echo $_SESSION['tel_office_view']; ?>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left col-xs-4 col-sm-4 col-md-4 col-lg-4" style="padding-left:50px;">โทรสาร</td>
                                        <td class="table-detail-right col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                            <div class="initial-form">
                                                02-3456789<?php echo $_SESSION['fax_office_view']; ?>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left col-xs-4 col-sm-4 col-md-4 col-lg-4" style="padding-left:50px;">อีเมล์</td>
                                        <td class="table-detail-right col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                            <div class="initial-form">
                                                tester@gmail.com<?php echo $_SESSION['email_office_view']; ?>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left col-xs-4 col-sm-4 col-md-4 col-lg-4">โรงงานตั้งอยู่ในนิคมอุตสาหกรรม</td>
                                        <td class="table-detail-right col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                            <div class="initial-form">
                                                เอเซีย (สุวรรณภูมิ)<?php echo $_SESSION['industrial_name_view']; ?>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left col-xs-4 col-sm-4 col-md-4 col-lg-4">ในเขตอุตสาหกรรม</td>
                                        <td class="table-detail-right col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                            <div class="initial-form">
                                                อุตสาหกรรมทั่วไป<?php echo $_SESSION['industrial_zone_view']; ?>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left col-xs-4 col-sm-4 col-md-4 col-lg-4">ที่ตั้งโรงงาน</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left col-xs-4 col-sm-4 col-md-4 col-lg-4" style="padding-left:50px;">ตั้งอยู่ที่</td>
                                        <td class="table-detail-right col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                            <div class="initial-form">
                                                <span><b>เลขที่ 9999</b><?php echo $_SESSION['addrno_office_view']; ?></span>
                                                <span><b>หมู่ที่ 9999</b><?php echo $_SESSION['moo_office_view']; ?></span>
                                                <span><b>ซอย -</b><?php echo $_SESSION['lane_office_view']; ?></span>
                                                <span><b>ถนน -</b><?php echo $_SESSION['street_office_view']; ?></span>
                                                <span><b>ตำบล คลองสวน</b><?php echo $_SESSION['district_office_view']; ?></span>
                                                <span><b>อำเภอ บางบ่อ</b><?php echo $_SESSION['amphur_office_view']; ?></span>
                                                <span><b>จังหวัด สมุทรปราการ</b><?php echo $_SESSION['province_office_view']; ?></span>
                                                <span><b>รหัสไปรษณีย์ 10560</b><?php echo $_SESSION['zipcode_office_view']; ?></span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left col-xs-4 col-sm-4 col-md-4 col-lg-4" style="padding-left:50px;">โทรศัพท์</td>
                                        <td class="table-detail-right col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                            <div class="initial-form">
                                                02-3456789<?php echo $_SESSION['tel_office_view']; ?>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left col-xs-4 col-sm-4 col-md-4 col-lg-4" style="padding-left:50px;">โทรสาร</td>
                                        <td class="table-detail-right col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                            <div class="initial-form">
                                                02-3456789<?php echo $_SESSION['fax_office_view']; ?>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left col-xs-4 col-sm-4 col-md-4 col-lg-4" style="padding-left:50px;">อีเมล์</td>
                                        <td class="table-detail-right col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                            <div class="initial-form">
                                                tester@gmail.com<?php echo $_SESSION['email_office_view']; ?>
                                            </div>
                                        </td>
                                    </tr>
                                     <tr>
                                        <td class="table-detail-left col-xs-4 col-sm-4 col-md-4 col-lg-4">พิกัดตำแหน่งที่ตั้งโรงงาน</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left col-xs-4 col-sm-4 col-md-4 col-lg-4" style="padding-left:50px;">Latitude</td>
                                        <td class="table-detail-right col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                            <div class="initial-form">
                                                37.819722<?php echo $_SESSION['email_office_view']; ?>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left col-xs-4 col-sm-4 col-md-4 col-lg-4" style="padding-left:50px;">Longitude</td>
                                        <td class="table-detail-right col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                            <div class="initial-form">
                                                -122.478611<?php echo $_SESSION['email_office_view']; ?>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left col-xs-4 col-sm-4 col-md-4 col-lg-4">รายละเอียดการประกอบกิจการ</td>
                                        <td class="table-detail-right col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                            <div class="initial-form">
                                                ผลิตผลิตภัณฑ์คอนดัคทีฟ โพลิเมอร์ อลูมินัม โซลิด คาปาซิเตอร์ (Conductive Polymer Aluminum Solid Capacitor) และผลิตภัณฑ์อิเล็กโทรไลต์ติค คาปาซิเตอร์ (Electrolytic Capacitor)
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left col-xs-4 col-sm-4 col-md-4 col-lg-4">ชื่อเจ้าหน้าที่ผู้นำส่งข้อมูล</td>
                                        <td>
                                            <table class="table table-lg">
                                            <div class="row row-form">
                                                <div class="col-lg-12">
                                                    <div class="col-lg-12">
                                                        <select class="form-control">
                                                            <option value="0">-- เลือก --</option>
                                                        </select>
                                                    </div>
                                                </div>                           
                                            </div>           
                                        </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card p-4">
                        <div class="card-header">
                            <span class="font_header"><b>ข้อมูลเกี่ยวกับที่ดินในปัจจุบัน</b></span>
                        </div>
                        <div class="table-responsive div_header p-4">
                            <table class="table" id="datatable01">
                                <thead>
                                    <tr>
                                        <th class="table-head-tab" style="text-align: center; vertical-align: top;"><span class="font_header_detail"><b>ลำดับ</b></span></th>
                                        <th class="table-head-tab" style="text-align: center; vertical-align: top;"><span class="font_header_detail"><b>เลขที่แปลง</b></span></th>
                                        <th class="table-head-tab" style="text-align: center; vertical-align: top;"><span class="font_header_detail"><b>ไร่</b></span></th>
                                        <th class="table-head-tab" style="text-align: center; vertical-align: top;"><span class="font_header_detail"><b>งาน</b></span></th>
                                        <th class="table-head-tab" style="text-align: center; vertical-align: top;"><span class="font_header_detail"><b>ตารางวา</b></span></th>
                                        <th class="table-head-tab" style="text-align: center; vertical-align: top;"><span class="font_header_detail"><b>ตารางเมตร</b></span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td align="center">
                                            1.
                                        </td>
                                        <td align="center">
                                            A-001
                                        </td>
                                        <td align="center">
                                            1
                                        </td>
                                        <td align="center">
                                            2
                                        </td>
                                        <td align="center">
                                            3
                                        </td>
                                        <td align="center">
                                            12
                                        </td>
                                            <?php echo $data_result_land['LANDAMOUNT_M']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center">
                                            2.
                                        </td>
                                        <td align="center">
                                            A-002
                                        </td>
                                        <td align="center">
                                            2
                                        </td>
                                        <td align="center">
                                            1
                                        </td>
                                        <td align="center">
                                            3
                                        </td>
                                        <td align="center">
                                            12
                                        </td>
                                            <?php echo $data_result_land['LANDAMOUNT_M']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" align="center">
                                            <span class="font_header_detail"><b>รวม</b></span>
                                        </td>
                                        <td align="center">
                                            <span class="font_header_detail"><b>3</b></span>
                                        </td>
                                        <td align="center">
                                            <span class="font_header_detail"><b>3</b></span>
                                        </td>
                                        <td align="center">
                                            <span class="font_header_detail"><b>6</b></span>
                                        </td>
                                        <td align="center">
                                            <span class="font_header_detail"><b>24</b></span>
                                        </td>
                                            <?php echo $data_result_land['LANDAMOUNT_M']; ?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                        <div class="card p-4">
                            <div class="card-header">
                                <span class="font_header"><b>ข้อมูลบุคคลติดต่อประสานงาน ด้านสิทธิประโยชน์ด้านภาษีอากร</b></span>
                            </div>
                            <div class="card p-4">
                            <div class="row">
                                <div class="col-6" align="left">
                                    <div class="table-responsive div_header p-4">
                                        <div class="card-header">
                                            <span class="font_header"><b>ข้าพเจ้ามีความประสงค์จะทำธุรกรรมอิเล็กทรอนิกส์กับ</b></span>
                                        </div>
                                        <br />
                                        <div class="row row-form">
                                            <div class="col-lg-12">
                                                <div class="col-lg-12">
                                                    <select class="form-control">
                                                        <option value="0">-- เลือกข้อมูล --</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6" align="left">
                                    <div class="table-responsive div_header p-4">
                                        <div class="card-header">
                                            <span class="font_header"><b>ข้อมูลผู้ติดต่อ</b></span>
                                        </div>
                                        <br />
                                        <div class="row row-form">
                                            <div class="col-lg-12">
                                                <div class="col-lg-12">
                                                    <select class="form-control">
                                                        <option value="0">-- เลือกข้อมูลผู้ติดต่อ --</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br />
                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="tab2">
                    <span class="font_header"><b>การประกอบกิจการ และการติดตั้งเครื่องจักร</b></span>
                    <div class="card p-4">
                        <div class="card-header">
                            <span class="font_header"><b>1. ประกอบกิจการในปัจจุบัน</b></span>
                        </div>
                        <div class="table-responsive div_header p-4">
                            <table class="table" id="datatable01">
                                <thead>
                                    <tr>
                                        <th class="table-head-tab" rowspan="2" style="text-align:center; vertical-align:middle; background:#a3d49a;">
                                            <span class="font_header_detail"><b>ชื่อเครื่องจักร<br>Name of manufacturing machine</b></span>
                                        </th>
                                        <th class="table-head-tab" rowspan="2" style="text-align:center; vertical-align:middle; background:#a3d49a;">
                                            <span class="font_header_detail"><b>บริษัท และประเทศผู้ผลิต<br>Corporation and country</b></span>
                                        </th>
                                         <th class="table-head-tab" rowspan="2" style="text-align:center; vertical-align:middle; background:#a3d49a;">
                                            <span class="font_header_detail"><b>งานที่ใช้<br>Application</b></span>
                                        </th>
                                        <th class="table-head-tab" colspan="3" 
                                            style="text-align:center; vertical-align:middle; background:#a3d49a;">
                                            <span class="font_header_detail"><b>กำลังเครื่องจักร ต่อเครื่อง<br>Machinery power per unit</b></span>
                                        </th>
                                        <th class="table-head-tab" rowspan="2" 
                                            style="text-align:center; vertical-align:middle; background:#a3d49a;">
                                            <span class="font_header_detail"><b>จำนวน<br>No. of machines</b></span>
                                        </th>
                                        <th class="table-head-tab" rowspan="2" 
                                            style="text-align:center; vertical-align:middle; background:#a3d49a;">
                                            <span class="font_header_detail"><b>รวมกำลังเครื่องจักร<br>Total Hp</b></span>
                                        </th>
                                        <th class="table-head-tab" rowspan="2" 
                                            style="text-align:center; vertical-align:middle; background:#a3d49a;">
                                            <span class="font_header_detail"><b>หมายเหตุ</b></span>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th class="table-head-tab" style="text-align:center; background:#a3d49a;">
                                            <span class="font_header_detail"><b>แรงม้า (HP)</b></span>
                                        </th>
                                        <th class="table-head-tab" style="text-align:center; background:#a3d49a;">
                                            <span class="font_header_detail"><b>แรงม้าเปรียบเทียบ<br>Compare HP</b></span>
                                        </th>
                                        <th class="table-head-tab" style="text-align:center; background:#a3d49a;">
                                            <span class="font_header_detail"><b>หน่วยแรงม้าเปรียบเทียบ</b></span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>เครื่องทดสอบ1</td>
                                        <td>ออสเตรเลีย</td>
                                        <td>ตัดแต่งผลิตภัณฑ์</td>
                                        <td align="center">50</td>
                                        <td align="center">150</td>
                                        <td align="center">HP</td>
                                        <td align="center">10</td>
                                        <td align="center">500</td>
                                        <td align="center">Test1</td>
                                    </tr>
                                    <tr>
                                        <td>เครื่องทดสอบ2</td>
                                        <td>ญี่ปุ่น</td>
                                        <td>ผลิต</td>
                                        <td align="center">75</td>
                                        <td align="center">150</td>
                                        <td align="center">HP</td>
                                        <td align="center">2</td>
                                        <td align="center">150</td>
                                        <td align="center">Test2</td>
                                    </tr>
                                    <tr>
                                        <td>เครื่องทดสอบ3</td>
                                        <td>จีน</td>
                                        <td>บรรจุ</td>
                                        <td align="center">85</td>
                                        <td align="center">150</td>
                                        <td align="center">HP</td>
                                        <td align="center">10</td>
                                        <td align="center">850</td>
                                        <td align="center">Test3</td>
                                    </tr>
                                    <tr>
                                        <td colspan="7" style="text-align:right;"><b>รวมกำลังเครื่องจักรทั้งหมด (All Total Hp)</b></td>
                                        <td align="center"><b>1,500.00</b></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td class="table-detail-left">1. แรงม้าที่พบในปัจจุบัน</td>
                                    <td class="table-detail-right">
                                        <div class="initial-form">1,500.00<?php echo $_SESSION['companyname_en_view']; ?></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-detail-left">2. เอกสารบัญชีเครื่องจักรที่ใช้ในลำดับขั้นตอนการผลิต</td>
                                    <td class="table-detail-right">
                                        <div class="initial-form">ไม่พบเอกสาร<?php echo $_SESSION['companyname_en_view']; ?></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-detail-left">3. หนังสือรับรองของผู้ประกอบวิชาชีพวิศวกรรมควบคุม</td>
                                    <td class="table-detail-right">
                                        <div class="initial-form">ไม่พบเอกสาร<?php echo $_SESSION['companyname_en_view']; ?></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-detail-left">
                                        4. การเข้าขยายโรงงานตามพระราชบัญญัติโรงงาน มาตรา 18
                                    </td>
                                    <td class="table-detail-right">
                                        <div class="radio-group-clean">
                                            <label class="clean-radio">
                                                <input type="radio" name="factory_expand" value="1">
                                                <span>เข้าข่าย</span>
                                            </label>
                                            <br></br>
                                            <label class="clean-radio">
                                                <input type="radio" name="factory_expand" value="0" checked>
                                                <span>ไม่เข้าข่าย</span>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-detail-left">5. จำนวนคนงานในปัจจุบัน</td>
                                    <td class="table-detail-right">
                                        <div class="initial-form">ชาย 5 คน หญิง 5 คน รวม 10 คน<?php echo $_SESSION['companyname_en_view']; ?></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-detail-left">6. จำนวนวันที่ทำการผลิตในรอบปีของรายงาน</td>
                                    <td class="table-detail-right">
                                        <div class="initial-form">150 วัน/ปี<?php echo $_SESSION['companyname_en_view']; ?></div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="card p-4">
                        <div class="card-header">
                            <span class="font_header">
                                <b>
                                    2. การจัดทำรายงานการวิเคราะห์ผลกระทบสิ่งแวดล้อม (EIA) หรือรายงานการวิเคราะห์ผลกระทบสิ่งแวดล้อมเบื้องต้น (IEE)
                                    หรือรายงานการวิเคราะห์ผลกระทบสิ่งแวดล้อมสำหรับโครงการที่อาจก่อให้เกิดผลกระทบต่อชุมชนอย่างรุนแรง ทั้งทางด้านคุณภาพสิ่งแวดล้อม
                                    ทรัพยากรธรรมชาติและสุขภาพ (EHIA)
                                </b>
                            </span>
                        </div>
                        <div class="table-responsive div_header p-4">
                            <div class="eia-radio-group mb-3">
                                <label class="clean-radio">
                                    <input type="radio" name="eia_status" value="1" checked>
                                    <span>ไม่เข้าข่าย</span>
                                </label>
                                <br>
                                <label class="clean-radio">
                                    <input type="radio" name="eia_status" value="0">
                                    <span>เข้าข่ายต้องจัดทำ IEE (Required (IEE))</span>
                                </label>
                                <br>
                                <label class="clean-radio">
                                    <input type="radio" name="eia_status" value="0">
                                    <span>เข้าข่ายต้องจัดทำ EIA (Required (EIA))</span>
                                </label>
                                <br>
                                <label class="clean-radio">
                                    <input type="radio" name="eia_status" value="0">
                                    <span>เข้าข่ายต้องจัดทำ EHIA (Required (EHIA))</span>
                                </label>
                            </div>
                            <p class="mb-2">
                                <u>กรณีเข้าข่าย มีรายงานการวิเคราะห์ผลกระทบสิ่งแวดล้อมฯ ที่ได้รับความเห็นชอบได้แก่</u>
                            </p>
                            <br>
                            <div class="mb-3">
                                <button type="button" class="btn btn-success btn-sm">
                                    เพิ่มข้อมูล (Add)
                                </button>
                                <button type="button" class="btn btn-danger btn-sm">
                                    ลบข้อมูล (Delete)
                                </button>
                            </div>
                            <table class="table table-bordered" id="datatable_eia">
                                <thead>
                                    <tr>
                                        <th style="text-align:center; width:6%;">เลือกลบ</th>
                                        <th style="text-align:center; width:24%;">ชื่อรายงาน</th>
                                        <th style="text-align:center; width:12%;">ฉบับเดือน</th>
                                        <th style="text-align:center; width:10%;">ปี พ.ศ</th>
                                        <th style="text-align:center; width:18%;">จัดทำโดย</th>
                                        <th style="text-align:center; width:18%;">ตามหนังสือเห็นชอบที่</th>
                                        <th style="text-align:center; width:12%;">ลงวันที่</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="text-align:center;">
                                            <input type="checkbox" name="eia_select[]">
                                        </td>
                                        <td>
                                            <input type="text" name="eia_report_name[]" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" name="eia_report_month[]" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" name="eia_report_year[]" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" name="eia_report_by[]" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" name="eia_approve_doc[]" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" name="eia_approve_date[]" class="form-control">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card p-4">
                        <div class="card-header">
                            <span class="font_header">
                                <b>3. การจัดทำรายงานการวิเคราะห์ความเสี่ยง จากอันตรายที่อาจเกิดจากการประกอบกิจการโรงงาน</b>
                            </span>
                        </div>
                        <div class="table-responsive div_header p-4">
                            <div class="eia-radio-group mb-3">
                                <label class="clean-radio">
                                    <input type="radio" name="Preparation" value="0" checked>
                                    <span>ไม่เข้าข่าย</span>
                                </label>
                                <br>
                                <label class="clean-radio">
                                    <input type="radio" name="Preparation" value="1">
                                    <span>เข้าข่าย (หมายเหตุ: โรงงานต้องมีการจัดทำรายงานการวิเคราะห์ความเสี่ยงประกอบการต่ออายุและการขอขยายการประกอบอุตสาหกรรมทุกครั้ง)</span>
                                </label>
                            </div>
                            <p class="mb-2"><b>การจัดทำรายงาน</b></p>
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td width="30%">
                                            <label class="clean-radio">
                                                <input type="radio" name="RiskReportStatus" value="sent">
                                                <span>จัดส่งกรมโรงงานแล้ว</span>
                                            </label>
                                        </td>
                                        <td width="35%">
                                            <b>หน้าเล่ม</b>
                                            <div class="custom-file mt-1">
                                                <input type="file" class="custom-file-input" id="RiskFile_main">
                                                <label class="custom-file-label" for="RiskFile_main">เลือกไฟล์</label>
                                            </div>
                                        </td>
                                        <td width="35%">
                                            <b>จดหมายนำส่ง</b>
                                            <div class="custom-file mt-1">
                                                <input type="file" class="custom-file-input" id="RiskFile_letter">
                                                <label class="custom-file-label" for="RiskFile_letter">เลือกไฟล์</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">
                                            <label class="clean-radio">
                                                <input type="radio" name="RiskReportStatus" value="progress">
                                                <span>อยู่ระหว่างจัดทำ</span>
                                            </label>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card p-4">
                        <div class="card-header">
                            <span class="font_header">
                                <b>                               
                                    4. การจัดทำรายงานการตรวจประเมินความปลอดภัยกระบวนการผลิต (Process Safety Management: PSM)
                                </b>
                            </span>
                        </div>
                        <div class="table-responsive div_header p-4">
                            <div class="eia-radio-group mb-3">
                                <label class="clean-radio">
                                    <input type="radio" name="preparation_of_process_safety" value="0" checked>
                                    <span>ไม่เข้าข่าย</span>
                                </label>
                                <br>
                                <label class="clean-radio">
                                    <input type="radio" name="preparation_of_process_safety" value="1">
                                    <span>เข้าข่าย</span>
                                </label>
                            </div>
                            <p class="mb-2">
                                <span style="color: #ff0000ff;">*** กรณีเข้าข่ายการจัดทำรายงานการตรวจประเมินความปลอดภัยกระบวนการผลิต (Process Safety Management: PSM) กรุณากรอกข้อมูลเพิ่มเติมในหัวข้อดังต่อไปนี้ ***</span>
                            </p>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="table-detail-left">บริษัทมีการจัดทำรายงานการตรวจประเมินภายนอกด้านความปลอดภัยกระบวนการผลิต (PSM External Audit)</td>
                                        <td class="table-detail-right">
                                            <div class="radio-group-clean">
                                                <label class="clean-radio">
                                                    <input type="radio" name="psm_audit" value="1">
                                                    <span>มี</span>
                                                </label>
                                                <br></br>
                                                <label class="clean-radio">
                                                    <input type="radio" name="psm_audit" value="0" checked>
                                                    <span>ไม่มี</span>
                                                </label>
                                                <br></br>
                                                <label class="clean-radio">
                                                    <input type="radio" name="psm_audit" value="0" checked>
                                                    <span>อยู่ระหว่างดำเนินการ</span>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left">การติดตั้งเครื่องจักรเพิ่มเติมในการประกอบกิจการส่วนขยาย ส่งผลให้กำลังการผลิตเพิ่มขึ้นหรือไม่</td>
                                        <td class="table-detail-right">
                                            <div class="radio-group-clean">
                                                <label class="clean-radio">
                                                    <input type="radio" name="install_machine" value="1">
                                                    <span>มี</span>
                                                </label>
                                                <br></br>
                                                <label class="clean-radio">
                                                    <input type="radio" name="install_machine" value="0" checked>
                                                    <span>ไม่มี</span>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left">มีการครอบครองสารเคมีอันตราย แก๊สไวไฟ หรือของเหลวไวไฟ เพิ่มขึ้นจากเดิมตั้งแต่ร้อยละ 35 หรือไม่ (ยกเว้นแก๊สไวไฟหรือของเหลวไวไฟที่ใช้เป็นเชื้อเพลิง)</td>
                                        <td class="table-detail-right">
                                            <div class="radio-group-clean">
                                                <label class="clean-radio">
                                                    <input type="radio" name="chemical_expand" value="1">
                                                    <span>มี</span>
                                                </label>
                                                <br></br>
                                                <label class="clean-radio">
                                                    <input type="radio" name="chemical_expand" value="0" checked>
                                                    <span>ไม่มี</span>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left">บริษัทมีการจัดทำรายงานการตรวจประเมินภายนอกด้านความปลอดภัยกระบวนการผลิต (PSM External Audit)</td>
                                        <td class="table-detail-right">
                                            <div class="radio-group-clean">
                                                <label class="clean-radio">
                                                    <input type="radio" name="psm_audit_2" value="1">
                                                    <span>มี</span>
                                                </label>
                                                <br></br>
                                                <label class="clean-radio">
                                                    <input type="radio" name="psm_audit_2" value="0" checked>
                                                    <span>ไม่มี</span>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card p-4">
                        <div class="card-header">
                            <span class="font_header">
                                <b>                               
                                    5. ผู้ประกอบกิจการโรงงานมีการชำระค่าธรรมเนียมรายปีครบถ้วน
                                </b>
                            </span>
                        </div>
                        <div class="table-responsive div_header p-4">
                            <div class="eia-radio-group mb-3">
                                <label class="clean-radio">
                                    <input type="radio" name="factory_operators" value="0" checked>
                                    <span>ครบถ้วน</span>
                                </label>
                                <br>
                                <label class="clean-radio">
                                    <input type="radio" name="factory_operators" value="1">
                                    <span>ไม่ครบถ้วน  </span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="tab-pane" id="tab3">
                    <div class="card p-4">
                        <div class="card-header">
                            <span class="font_header"><b>ความปลอดภัย</b></span>
                        </div>
                        <div class="table-responsive div_header p-4">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width:25%;">หัวข้อ</th>
                                        <th style="width:50%;">ประเด็นการตรวจ</th>
                                        <th style="width:25%;">หมายเหตุ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <b>1. การป้องกันอัคคีภัยในโรงงาน</b>
                                        </td>
                                        <td>
                                            <a href="https://epp-ent-dev.nidprotech.com/new_epp_entrepreneur_tester_67/application/view/self_decare/doc4selfdeclare/%E0%B8%81%E0%B8%8E%E0%B8%81%E0%B8%A3%E0%B8%B0%E0%B8%97%E0%B8%A3%E0%B8%A7%E0%B8%87%E0%B8%AD%E0%B8%B8%E0%B8%95%E0%B8%AA%E0%B8%B2%E0%B8%AB%E0%B8%81%E0%B8%A3%E0%B8%A3%E0%B8%A1%20%E0%B9%80%E0%B8%A3%E0%B8%B7%E0%B9%88%E0%B8%AD%E0%B8%87%20%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%9B%E0%B9%89%E0%B8%AD%E0%B8%87%E0%B8%81%E0%B8%B1%E0%B8%99%E0%B9%81%E0%B8%A5%E0%B8%B0%E0%B8%A3%E0%B8%B0%E0%B8%87%E0%B8%B1%E0%B8%9A%E0%B8%AD%E0%B8%B1%E0%B8%84%E0%B8%84%E0%B8%B5%E0%B8%A0%E0%B8%B1%E0%B8%A2%E0%B9%83%E0%B8%99%E0%B9%82%E0%B8%A3%E0%B8%87%E0%B8%87%E0%B8%B2%E0%B8%99%20%E0%B8%9E.%E0%B8%A8.%202552.pdf" target="_blank">
                                                กฎกระทรวงอุตสาหกรรม เรื่อง การป้องกันและระงับอัคคีภัยในโรงงาน พ.ศ. 2552
                                            </a>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            1.1 การจัดประเภทโรงงาน
                                        </td>
                                        <td>
                                            <div class="mb-2">
                                                การเข้าข่ายความเสี่ยงด้านอัคคีภัย
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="fire_risk_type" class="form-check-input" value="no_risk">
                                                    <span class="form-check-label">โรงงานไม่เข้าข่ายความเสี่ยงด้านอัคคีภัย</span>
                                                </label>
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="fire_risk_type" class="form-check-input" value="high">
                                                    <span class="form-check-label">โรงงานเข้าข่ายความเสี่ยงอัคคีภัยสูง</span>
                                                </label>
                                            </div>
                                            <div>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="fire_risk_type" class="form-check-input" value="medium">
                                                    <span class="form-check-label">โรงงานเข้าข่ายความเสี่ยงอัคคีภัยปานกลาง</span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <textarea class="form-control" rows="3" placeholder="ระบุรายละเอียดเพิ่มเติม / หมายเหตุ"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            1.2 เส้นทางหนีไฟและอุปกรณ์ดับเพลิง
                                        </td>
                                        <td>
                                            <div class="mb-2">
                                                1. การแสดงเส้นทางหนีไฟและตำแหน่งติดตั้งอุปกรณ์ดับเพลิง&nbsp;&nbsp;
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="escape_path_display" class="form-check-input" value="yes">
                                                    <span class="form-check-label">มี</span>
                                                </label>
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="escape_path_display" class="form-check-input" value="no">
                                                    <span class="form-check-label">ไม่มี</span>
                                                </label>
                                            </div>
                                            <div class="mb-2">
                                                2. มีเส้นทางหนีไฟจำนวน
                                                <input type="text" class="form-control d-inline-block"
                                                    style="width:80px; display:inline-block;" />
                                                &nbsp;มีประตูหนีไฟจำนวน
                                                <input type="text" class="form-control d-inline-block"
                                                    style="width:80px; display:inline-block;" />
                                            </div>
                                            <div class="mb-2">
                                                3. มีการตรวจสอบ ทดสอบและบำรุงรักษาอุปกรณ์ดับเพลิง&nbsp;&nbsp;
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="fire_equipment_maintenance" class="form-check-input" value="yes">
                                                    <span class="form-check-label">มี</span>
                                                </label>
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="fire_equipment_maintenance" class="form-check-input" value="no">
                                                    <span class="form-check-label">ไม่มี</span>
                                                </label>
                                            </div>
                                            <div class="mb-2">
                                                4. แผนผังที่ระบุเส้นทางการหนีไฟ จุดวางถังดับเพลิง หรือจุดเก็บสารเคมี/วัตถุอันตราย
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">อัพโหลดไฟล์ข้อมูล</label>
                                            </div>

                                        </td>
                                        <td>
                                            <textarea class="form-control" rows="3" placeholder="ระบุรายละเอียดเพิ่มเติม / หมายเหตุ"></textarea>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>

                <!-- /.tab-pane -->
                <div class="ieat-action-bar">
                    <div class="ieat-action-group">
                        <button type="button" class="ieat-btn ieat-btn--cancel" id="btnCancel">
                            <i class="fas fa-arrow-left"></i>
                            <span>ยกเลิกและกลับสู่หน้าหลัก</span>
                        </button>

                        <button type="button" class="ieat-btn ieat-btn--reset" id="btnReset">
                            <i class="fas fa-undo-alt"></i>
                            <span>ล้างข้อมูล</span>
                        </button>

                        <button type="button" class="ieat-btn ieat-btn--save" id="btnSaveDraft">
                            <i class="fas fa-save"></i>
                            <span>บันทึกการกรอกข้อมูล</span>
                        </button>

                        <button type="button" class="ieat-btn ieat-btn--submit" id="btnSubmit">
                            <i class="fas fa-paper-plane"></i>
                            <span>ส่งคำขอให้ กนอ.</span>
                        </button>
                    </div>
                </div>                 
            </div>
            <!-- /.tab-content -->
        </div><!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>


<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<?= $this->endSection(); ?>

<?= $this->section("javascripts"); ?>
<script>
    $(document).ready(function() {
        // console.log("Document ready page Search");
        var tableDt = $('#tbSearch').DataTable({
            "paging": false,
            "destroy": true,
            "searching": false,
            "ordering": false,
            "processing": false,
            "serverSide": false,
            // "columns": colDt,
            "autoWidth": false,
            "order": [
                [0, 'asc']
            ],
            "responsive": true,
            "lengthChange": false,
            "bInfo": false,
            "bLengthMenu": false, // Hide page lengthMenu
        });
    });

    /*
    $('[name=data_search2]').daterangepicker({
        "singleDatePicker": true,
        "timePicker": false,
        "timePicker24Hour": true,
        "timePickerIncrement": 10,
        "autoApply": true,
        StartDate: moment().format("YYYY-MM-DD"),
        locale: {
            format: 'YYYY-MM-DD'
        }
    });
    */
    $(window).on("load", function() {
        // console.log("window load page Search");
    });
</script>
<script>
    $(document).ready(function() {

        $("#add_operation_type_view_01").click(function() {
            $("#show_02").hide("slide");
            $("#show_01").show("slide");
        });

        $("#operation_type_modify_view_02").click(function() {
            $("#show_02").show("slide");
            $("#show_01").hide("slide");
        });

        $("#whole_land_return_return_id_view").click(function() {
            $("#show_102").hide("slide");
            $("#show_101").show("slide");
            $("#show_103").hide("slide");
        });

        $("#partial_land_return_id_view").click(function() {
            $("#show_102").show("slide");
            $("#show_101").hide("slide");
            $("#show_103").hide("slide");
        });

        $("#all_land_return_id_view").click(function() {
            $("#show_102").hide("slide");
            $("#show_101").hide("slide");
            $("#show_103").show("slide");
        });

        $("#out_of_business_type_view_1").click(function() {
            $("#show_107").show("slide");
            $("#show_207").hide("slide");
        });

        $("#out_of_business_type_view_2").click(function() {
            $("#show_107").hide("slide");
            $("#show_207").show("slide");
        });

        $("#land_transfer_type_view_1").click(function() {
            $("#show_111").show("slide");
            $("#show_211").hide("slide");
            $("#show_311").hide("slide");
        });

        $("#land_transfer_type_view_2").click(function() {
            $("#show_111").hide("slide");
            $("#show_211").show("slide");
            $("#show_311").hide("slide");
        });

        $("#land_transfer_type_view_3").click(function() {
            $("#show_111").hide("slide");
            $("#show_211").hide("slide");
            $("#show_311").show("slide");
        });

    });
</script>
<?= $this->endSection(); ?>