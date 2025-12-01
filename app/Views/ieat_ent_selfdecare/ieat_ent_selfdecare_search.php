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
</div>
<br />
<div class="class_header_page_02">
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
                <li class="nav-item"><a class="nav-link" href="#tab4" data-toggle="tab"><span class="font_header_detail"><b>สิ่งแวดล้อม</b></span></a></li>
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
                                        <th class="table-head-tab" rowspan="2" style="text-align:center; vertical-align:top;">
                                            <span class="font_header_detail"><b>ชื่อเครื่องจักร<br>Name of manufacturing machine</b></span>
                                        </th>
                                        <th class="table-head-tab" rowspan="2" style="text-align:center; vertical-align:top;">
                                            <span class="font_header_detail"><b>บริษัท และประเทศผู้ผลิต<br>Corporation and country</b></span>
                                        </th>
                                        <th class="table-head-tab" rowspan="2" style="text-align:center; vertical-align:top;">
                                            <span class="font_header_detail"><b>งานที่ใช้<br>Application</b></span>
                                        </th>
                                        <th class="table-head-tab" colspan="3"
                                            style="text-align:center; vertical-align:top;">
                                            <span class="font_header_detail"><b>กำลังเครื่องจักร ต่อเครื่อง<br>Machinery power per unit</b></span>
                                        </th>
                                        <th class="table-head-tab" rowspan="2"
                                            style="text-align:center; vertical-align:top;">
                                            <span class="font_header_detail"><b>จำนวน<br>No. of machines</b></span>
                                        </th>
                                        <th class="table-head-tab" rowspan="2"
                                            style="text-align:center; vertical-align:top;">
                                            <span class="font_header_detail"><b>รวมกำลังเครื่องจักร<br>Total Hp</b></span>
                                        </th>
                                        <th class="table-head-tab" rowspan="2"
                                            style="text-align:center; vertical-align:top;">
                                            <span class="font_header_detail"><b>หมายเหตุ</b></span>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th class="table-head-tab" style="text-align:center;">
                                            <span class="font_header_detail"><b>แรงม้า (HP)</b></span>
                                        </th>
                                        <th class="table-head-tab" style="text-align:center;">
                                            <span class="font_header_detail"><b>แรงม้าเปรียบเทียบ<br>Compare HP</b></span>
                                        </th>
                                        <th class="table-head-tab" style="text-align:center;">
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
                                    <span>ไม่ครบถ้วน </span>
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
                                        <th style="width:10%;">หัวข้อ</th>
                                        <th style="width:50%;">ประเด็นการตรวจ</th>
                                        <th style="width:40%;">หมายเหตุ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <b>1. การป้องกันอัคคีภัยในโรงงาน</b>
                                        </td>
                                        <td>
                                            <a href="https://epp-ent-dev.nidprotech.com/new_epp_entrepreneur_tester_67/application/view/self_decare/doc4selfdeclare/%E0%B8%81%E0%B8%8E%E0%B8%81%E0%B8%A3%E0%B8%B0%E0%B8%97%E0%B8%A3%E0%B8%A7%E0%B8%87%E0%B8%AD%E0%B8%B8%E0%B8%95%E0%B8%AA%E0%B8%B2%E0%B8%AB%E0%B8%81%E0%B8%A3%E0%B8%A3%E0%B8%A1%20%E0%B9%80%E0%B8%A3%E0%B8%B7%E0%B9%88%E0%B8%AD%E0%B8%87%20%E0%B8%81%E0%B8%B3%E0%B8%AB%E0%B8%99%E0%B8%94%E0%B8%A1%E0%B8%B2%E0%B8%95%E0%B8%A3%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%84%E0%B8%A7%E0%B8%B2%E0%B8%A1%E0%B8%9B%E0%B8%A5%E0%B8%AD%E0%B8%94%E0%B8%A0%E0%B8%B1%E0%B8%A2%E0%B9%80%E0%B8%81%E0%B8%B5%E0%B9%88%E0%B8%A2%E0%B8%A7%E0%B8%81%E0%B8%B1%E0%B8%9A%E0%B8%A3%E0%B8%B0%E0%B8%9A%E0%B8%9A%E0%B9%84%E0%B8%9F%E0%B8%9F%E0%B9%89%E0%B8%B2%E0%B9%83%E0%B8%99%E0%B9%82%E0%B8%A3%E0%B8%87%E0%B8%87%E0%B8%B2%E0%B8%99%20%E0%B8%9E.%E0%B8%A8.%202550.pdf" target="_blank">
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
                                    <tr>
                                        <td>
                                            1.3 การติดตั้ง การจัดเตรียมระบบอุปกรณ์สำหรับป้องกันและระงับอัคคีภัย
                                        </td>
                                        <td>
                                            <div class="mb-2">
                                                1. อาคารโรงงานมีอุปกรณ์ตรวจจับและแจ้งเหตุเพลิงไหม้&nbsp;&nbsp;
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Detect" class="form-check-input" value="yes">
                                                    <span class="form-check-label">มี</span>
                                                </label>
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Detect" class="form-check-input" value="no">
                                                    <span class="form-check-label">ไม่มี</span>
                                                </label>
                                            </div>
                                            <div class="mb-2">
                                                2. ถังดับเพลิงแบบมือถือ
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Mobile_fire_extinguisher" class="form-check-input" value="yes">
                                                    <span class="form-check-label">มี</span>
                                                    &nbsp;จำนวน
                                                    <input type="text" class="form-control d-inline-block" style="width:80px; display:inline-block;" />
                                                    &nbsp;ถัง
                                                </label>
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Mobile_fire_extinguisher" class="form-check-input" value="no">
                                                    <span class="form-check-label">ไม่มี</span>
                                                </label>
                                            </div>
                                            <div class="mb-2">
                                                3. ชนิดของถังดับเพลิง
                                                <br>
                                                <div class="d-flex align-items-center mb-1">
                                                    <input type="checkbox" name="type_A" class="me-2">
                                                    &nbsp;
                                                    <span class="me-2">ถังดับเพลิงชนิด A มีจำนวน</span>
                                                    &nbsp;
                                                    <input type="text" class="form-control d-inline-block" style="width:80px;">
                                                    &nbsp;
                                                    <span class="ms-2">ถัง</span>
                                                </div>
                                                <div class="d-flex align-items-center mb-1">
                                                    <input type="checkbox" name="type_B" class="me-2">
                                                    &nbsp;
                                                    <span class="me-2">ถังดับเพลิงชนิด B มีจำนวน</span>
                                                    &nbsp;
                                                    <input type="text" class="form-control d-inline-block" style="width:80px;">
                                                    &nbsp;
                                                    <span class="ms-2">ถัง</span>
                                                </div>
                                                <div class="d-flex align-items-center mb-1">
                                                    <input type="checkbox" name="type_C" class="me-2">
                                                    &nbsp;
                                                    <span class="me-2">ถังดับเพลิงชนิด C มีจำนวน</span>
                                                    &nbsp;
                                                    <input type="text" class="form-control d-inline-block" style="width:80px;">
                                                    &nbsp;
                                                    <span class="ms-2">ถัง</span>
                                                </div>
                                                <div class="d-flex align-items-center mb-1">
                                                    <input type="checkbox" name="type_D" class="me-2">
                                                    &nbsp;
                                                    <span class="me-2">ถังดับเพลิงชนิด D มีจำนวน</span>
                                                    &nbsp;
                                                    <input type="text" class="form-control d-inline-block" style="width:80px;">
                                                    &nbsp;
                                                    <span class="ms-2">ถัง</span>
                                                </div>
                                                <div class="d-flex align-items-center mb-1">
                                                    <input type="checkbox" name="type_K" class="me-2">
                                                    &nbsp;
                                                    <span class="me-2">ถังดับเพลิงชนิด K มีจำนวน</span>
                                                    &nbsp;
                                                    <input type="text" class="form-control d-inline-block" style="width:80px;">
                                                    &nbsp;
                                                    <span class="ms-2">ถัง</span>
                                                </div>
                                            </div>
                                            <div class="mb-2">
                                                4. ระบบน้ำดับเพลิง&nbsp;&nbsp;
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Fire_water_system" class="form-check-input" value="yes">
                                                    <span class="form-check-label">มี</span>
                                                </label>
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Fire_water_system" class="form-check-input" value="no">
                                                    <span class="form-check-label">ไม่มี</span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <textarea class="form-control" rows="3" placeholder="ระบุรายละเอียดเพิ่มเติม / หมายเหตุ"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            1.4 ระบบดับเพลิงอัตโนมัติ
                                        </td>
                                        <td>
                                            <div class="mb-2">
                                                1. การตรวจสอบว่าบริษัทต้องมีการกั้นแยกสถานที่จัดเก็บวัตถุดิบ หรือผลิตภัณฑ์ซึ่งเป็นวัตถุที่ติดไฟได้ หรือสถานที่จัดเก็บวัตถุไวไฟ ด้วยวัสดุที่มีการทนไฟไม่น้อยกว่า 1 ชั่วโมงหรือไม่ และการตรวจสอบว่าบริษัทต้องติดตั้งระบบดับเพลิงอัตโนมัติหรือไม่&nbsp;&nbsp;
                                            </div>
                                            <div class="mb-2">
                                                1.1. มีการจัดเก็บวัตถุสิ่งของที่ติดไฟได้ หากเป็นการเก็บกองวัตถุมิได้เก็บในชั้นวางความสูงของกองวัตถุไม่เกิน 6 เมตร และมีระยะห่างจากโคมไฟไม่น้อยกว่า 60 เซนติเมตร&nbsp;&nbsp;
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Mobile_fire_extinguisher_2" class="form-check-input" value="yes">
                                                    <span class="form-check-label">มี</span>
                                                    &nbsp;พื้นที่ต่อเนื่องประมาณ
                                                    <input type="text" class="form-control d-inline-block" style="width:80px; display:inline-block;" />
                                                    &nbsp;ตร.ม.
                                                </label>
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Mobile_fire_extinguisher_2" class="form-check-input" value="no">
                                                    <span class="form-check-label">ไม่มี</span>
                                                </label>
                                            </div>
                                            <div class="mb-2">
                                                1.2. บริษัทมีการจัดเก็บวัตถุไวไฟหรือไม่&nbsp;&nbsp;
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Mobile_fire_extinguisher" class="form-check-input" value="yes">
                                                    <span class="form-check-label">มี</span>
                                                    &nbsp;พื้นที่ต่อเนื่องประมาณ
                                                    <input type="text" class="form-control d-inline-block" style="width:80px; display:inline-block;" />
                                                    &nbsp;ตร.ม.
                                                </label>
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Mobile_fire_extinguisher" class="form-check-input" value="no">
                                                    <span class="form-check-label">ไม่มี</span>
                                                </label>
                                            </div>
                                            <div class="mb-2">
                                                2. บริษัทต้องมีการกั้นแยกสถานที่จัดเก็บวัตถุดิบหรือผลิตภัณฑ์ซึ่งเป็นวัตถุที่ติดไฟได้หรือสถานที่จัดเก็บวัตถุไวไฟด้วยวัสดุที่มีการทนไฟไม่น้อยกว่า 1 ชั่วโมงหรือไม่&nbsp;&nbsp;
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="storage_locations" class="form-check-input" value="yes">
                                                    <span class="form-check-label">เข้าข่าย</span>
                                                </label>
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="storage_locations" class="form-check-input" value="no">
                                                    <span class="form-check-label">ไม่เข้าข่าย</span>
                                                </label>
                                            </div>
                                            <div class="mb-2">
                                                3. บริษัทต้องติดตั้งระบบดับเพลิงอัตโนมัติหรือไม่&nbsp;&nbsp;
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="company_need" class="form-check-input" value="yes">
                                                    <span class="form-check-label">เข้าข่าย</span>
                                                </label>
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="company_need" class="form-check-input" value="no">
                                                    <span class="form-check-label">ไม่เข้าข่าย</span>
                                                </label>
                                            </div>
                                            <div class="mb-2">
                                                4. บริษัทดำเนินการกั้นแยกสถานที่จัดเก็บวัตถุดิบหรือผลิตภัณฑ์ด้วยวัสดุที่มีการทนไฟไม่น้อยกว่า 1 ชั่วโมง&nbsp;&nbsp;
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="company_has_separated" class="form-check-input" value="yes">
                                                    <span class="form-check-label">มี</span>
                                                </label>
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="company_has_separated" class="form-check-input" value="no">
                                                    <span class="form-check-label">ไม่มี</span>
                                                </label>
                                            </div>
                                            <div class="mb-2">
                                                5. บริษัทดำเนินการติดตั้งระบบดับเพลิงอัตโนมัติ 1 ชั่วโมง&nbsp;&nbsp;
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="company_has_fire_system" class="form-check-input" value="yes">
                                                    <span class="form-check-label">มี</span>
                                                </label>
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="company_has_fire_system" class="form-check-input" value="no">
                                                    <span class="form-check-label">ไม่มี</span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <textarea class="form-control" rows="3" placeholder="ระบุรายละเอียดเพิ่มเติม / หมายเหตุ"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            1.5 การดำเนินการป้องกันและระงับอัคคีภัยอื่นๆ
                                        </td>
                                        <td>
                                            <div class="mb-2">
                                                1. รายงานผลการฝึกซ้อมดับเพลิงและการอพยพหนีไฟ 1 ชั่วโมงหรือไม่&nbsp;&nbsp;
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="customFile">
                                                    <label class="custom-file-label" for="customFile">อัพโหลดไฟล์ข้อมูล</label>
                                                </div>
                                            </div>
                                            <div class="mb-2">
                                                2. การติดตั้ง การจัดเตรียมระบบอุปกรณ์สำหรับป้องกันและระงับอัคคีภัย&nbsp;&nbsp;
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Installation_and_preparation" class="form-check-input" value="yes">
                                                    <span class="form-check-label">มี</span>
                                                </label>
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Installation_and_preparation" class="form-check-input" value="no">
                                                    <span class="form-check-label">ไม่มี</span>
                                                </label>
                                            </div>
                                            <div class="mb-2">
                                                3. อาคารโรงงานในพื้นที่ที่ไม่มีคนงานปฏิบัติงานประจำและมีการติดตั้งหรือใช้งานอุปกรณ์ไฟฟ้า&nbsp;&nbsp;
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Factory_buildings_in_areas" class="form-check-input" value="yes">
                                                    <span class="form-check-label">มี</span>
                                                </label>
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Factory_buildings_in_areas" class="form-check-input" value="no">
                                                    <span class="form-check-label">ไม่มี</span>
                                                </label>
                                            </div>
                                            <div class="mb-2">
                                                4. อุปกรณ์แจ้งเหตุเพลิงไหม้ เป็นชนิดที่ให้สัญญาณโดยไม่ต้องใช้ไฟฟ้าจากระบบแสงสว่างและที่ใช้กับเครื่องจักร&nbsp;&nbsp;
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Fire_alarm_devices" class="form-check-input" value="yes">
                                                    <span class="form-check-label">มี</span>
                                                </label>
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Fire_alarm_devices" class="form-check-input" value="no">
                                                    <span class="form-check-label">ไม่มี</span>
                                                </label>
                                            </div>
                                            <div class="mb-2">
                                                5. การตรวจสอบ ทดสอบ และบำรุงรักษาระบบและอุปกรณ์ต่าง ๆ&nbsp;&nbsp;
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="System_maintenance" class="form-check-input" value="yes">
                                                    <span class="form-check-label">มี</span>
                                                </label>
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="System_maintenance" class="form-check-input" value="no">
                                                    <span class="form-check-label">ไม่มี</span>
                                                </label>
                                            </div>
                                            <div class="mb-2">
                                                6. เครื่องจักร อุปกรณ์ ถังเก็บ ถังปฏิกิริยาหรือกระบวนการที่เกี่ยวข้องกับวัตถุไวไฟ มีการต่อสายดิน (Grounding) หรือต่อฝาก (Bonding) เพื่อป้องกันอันตรายที่อาจเกิดจากไฟฟ้าสถิต&nbsp;&nbsp;
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="processes_involving_flammable" class="form-check-input" value="yes">
                                                    <span class="form-check-label">มี (อยู่ที่โรงงาน)</span>
                                                </label>
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="processes_involving_flammable" class="form-check-input" value="no">
                                                    <span class="form-check-label">ไม่มี</span>
                                                </label>
                                            </div>
                                            <div class="mb-2">
                                                7. การใช้ การจัดเก็บ การขนถ่ายหรือขนย้าย หรือการจัดการต่าง ๆ เกี่ยวกับสารไวไฟและสารติดไฟมีการปฏิบัติตามข้อกำหนดที่ระบุไว้ในเอกสารข้อมูลความปลอดภัย (Safety Data Sheet) ของสารนั้น&nbsp;&nbsp;
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="handling_of_flammable_and_combustible" class="form-check-input" value="yes">
                                                    <span class="form-check-label">มี (อยู่ที่โรงงาน)</span>
                                                </label>
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="handling_of_flammable_and_combustible" class="form-check-input" value="no">
                                                    <span class="form-check-label">ไม่มี</span>
                                                </label>
                                            </div>
                                            <div class="mb-2">
                                                8. มีแผนป้องกันและระงับอัคคีภัยในโรงงาน และมีเอกสารหลักฐานการดำเนินการตามแผน&nbsp;&nbsp;
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="fire_prevention_and_suppression_plan" class="form-check-input" value="yes">
                                                    <span class="form-check-label">มี (อยู่ที่โรงงาน)</span>
                                                </label>
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="fire_prevention_and_suppression_plan" class="form-check-input" value="no">
                                                    <span class="form-check-label">ไม่มี</span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <textarea class="form-control" rows="3" placeholder="ระบุรายละเอียดเพิ่มเติม / หมายเหตุ"></textarea>
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td>
                                            <b>2. ข้อมูลเกี่ยวกับการตอบโต้เหตฉุกเฉิน</b>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td style="width:20%;">
                                            2.1 ข้อมูลสารเคมี/ วัตถุอันตรายที่มีความเสี่ยงสูง
                                        </td>
                                        <td style="width:65%;">
                                            <div class="mb-2">
                                                <button type="button" class="btn btn-success btn-sm" id="btnAddChemRow">
                                                    เพิ่มข้อมูล (Add)
                                                </button>
                                                <button type="button" class="btn btn-danger btn-sm" id="btnDeleteChemRow">
                                                    ลบข้อมูล (Delete)
                                                </button>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table table-bordered mb-0" id="tblChemHighRisk">
                                                    <thead>
                                                        <tr>
                                                            <th style="width:5%; text-align:center;">เลือก</th>
                                                            <th style="width:15%; text-align:center;">ชื่อสารเคมี</th>
                                                            <th style="width:15%; text-align:center;">วัตถุอันตราย</th>
                                                            <th style="width:12%; text-align:center;">CAS No.<br>หรือ UN No.</th>
                                                            <th style="width:13%; text-align:center;">สถานะของสารเคมี</th>
                                                            <th style="width:12%; text-align:center;">ปริมาณกักเก็บ</th>
                                                            <th style="width:13%; text-align:center;">ภาชนะบรรจุ</th>
                                                            <th style="width:15%; text-align:center;">สารดับเพลิงและวิธีระงับเหตุเบื้องต้น</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-center">
                                                                <input type="checkbox" name="chem_select[]">
                                                            </td>
                                                            <td>
                                                                <input type="text" name="chem_name[]" class="form-control form-control-sm">
                                                            </td>
                                                            <td>
                                                                <input type="text" name="hazard_type[]" class="form-control form-control-sm">
                                                            </td>
                                                            <td>
                                                                <input type="text" name="cas_un_no[]" class="form-control form-control-sm">
                                                            </td>
                                                            <td>
                                                                <input type="text" name="chem_status[]" class="form-control form-control-sm">
                                                            </td>
                                                            <td>
                                                                <input type="text" name="storage_amount[]" class="form-control form-control-sm">
                                                            </td>
                                                            <td>
                                                                <input type="text" name="container_type[]" class="form-control form-control-sm">
                                                            </td>
                                                            <td>
                                                                <input type="text" name="fire_control[]" class="form-control form-control-sm">
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </td>
                                        <td style="width:20%;">
                                            <textarea class="form-control" rows="4" placeholder="ระบุรายละเอียดเพิ่มเติม / หมายเหตุ"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            2.2 เส้นทางหนีไฟและอุปกรณ์ดับเพลิง
                                        </td>
                                        <td>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">อัพโหลดไฟล์ข้อมูล</label>
                                            </div>
                                        </td>
                                        <td>
                                            <textarea class="form-control" rows="3" placeholder="ระบุรายละเอียดเพิ่มเติม / หมายเหตุ"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            2.3 ข้อมูลเครื่องมือและอุปกรณ์ในตอบโต้ภาวะฉุกเฉิน
                                        </td>
                                        <td style="width:65%;">
                                            <div class="mb-2">
                                                <button type="button" class="btn btn-success btn-sm" id="btnAddChemRow">
                                                    เพิ่มข้อมูล (Add)
                                                </button>
                                                <button type="button" class="btn btn-danger btn-sm" id="btnDeleteChemRow">
                                                    ลบข้อมูล (Delete)
                                                </button>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table table-bordered mb-0" id="tblChemHighRisk">
                                                    <thead>
                                                        <tr>
                                                            <th style="width:5%; text-align:center;">เลือก</th>
                                                            <th style="width:15%; text-align:center;">ชื่อสารเคมี</th>
                                                            <th style="width:13%; text-align:center;">ขนาดและปริมาณ</th>
                                                            <th style="width:12%; text-align:center;">จำนวนอุปกรณ์</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-center">
                                                                <input type="checkbox" name="chem_select[]">
                                                            </td>
                                                            <td>
                                                                <input type="text" name="chem_name[]" class="form-control form-control-sm">
                                                            </td>
                                                            <td>
                                                                <input type="text" name="hazard_type[]" class="form-control form-control-sm">
                                                            </td>
                                                            <td>
                                                                <input type="text" name="cas_un_no[]" class="form-control form-control-sm">
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </td>
                                        <td>
                                            <textarea class="form-control" rows="3" placeholder="ระบุรายละเอียดเพิ่มเติม / หมายเหตุ"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            2.4 ข้อมูลแผนผังทีมตอบโต้ภาวะฉุกเฉิน(แผนผังทีมตอบโต้ภาวะฉุกเฉินที่ระบุรายชื่อ ตำแหน่ง และเบอร์โทรที่สามารถติดต่อได้ในภาวะฉุกเฉิน)
                                        </td>
                                        <td>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">อัพโหลดไฟล์ข้อมูล</label>
                                            </div>
                                        </td>
                                        <td>
                                            <textarea class="form-control" rows="3" placeholder="ระบุรายละเอียดเพิ่มเติม / หมายเหตุ"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            2.5 ข้อมูลบุคลากรตอบโต้เหตฉุกเฉิน(ชื่อ-สกุล ตำแหน่ง เบอรโทร ของผู้ได้รับการแต่งตั้งในภาวะฉุกเฉิน อย่างน้อย 3 คน)
                                        </td>
                                        <td style="width:65%;">
                                            <div class="mb-2">
                                                <button type="button" class="btn btn-success btn-sm" id="btnAddChemRow">
                                                    เพิ่มข้อมูล (Add)
                                                </button>
                                                <button type="button" class="btn btn-danger btn-sm" id="btnDeleteChemRow">
                                                    ลบข้อมูล (Delete)
                                                </button>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table table-bordered mb-0" id="tblChemHighRisk">
                                                    <thead>
                                                        <tr>
                                                            <th style="width:5%; text-align:center;">เลือก</th>
                                                            <th style="width:15%; text-align:center;">คำนำหน้า</th>
                                                            <th style="width:13%; text-align:center;">ชื่อ</th>
                                                            <th style="width:12%; text-align:center;">สกุล</th>
                                                            <th style="width:13%; text-align:center;">ตำแหน่ง</th>
                                                            <th style="width:12%; text-align:center;">เบอร์โทร</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-center">
                                                                <input type="checkbox" name="chem_select[]">
                                                            </td>
                                                            <td>
                                                                <input type="text" name="chem_name[]">
                                                            </td>
                                                            <td>
                                                                <input type="text" name="hazard_type[]">
                                                            </td>
                                                            <td>
                                                                <input type="text" name="cas_un_no[]">
                                                            </td>
                                                            <td>
                                                                <input type="text" name="cas_un_no[]">
                                                            </td>
                                                            <td>
                                                                <input type="text" name="cas_un_no[]">
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </td>
                                        <td>
                                            <textarea class="form-control" rows="3" placeholder="ระบุรายละเอียดเพิ่มเติม / หมายเหตุ"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            2.6 การระงับเหตุฉุกเฉินสารเคมีอันตราย
                                        </td>
                                        <td>
                                            <div class="mb-2">
                                                1. มีแผนการระงับเหตุฉุกเฉินสารเคมีอันตราย ให้สอดคล้องเชื่อมโยงกับแผนการป้องกันและบรรเทาสาธารณภัยในระดับพื้นที่ โดยเก็บแผนนี้ไว้ในโรงงาน
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="suppressing_hazardous_chemicals" class="form-check-input" value="no_risk">
                                                    <span class="form-check-label">มี</span>
                                                </label>
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="suppressing_hazardous_chemicals" class="form-check-input" value="high">
                                                    <span class="form-check-label">ไม่มี</span>
                                                </label>
                                            </div>
                                            <div class="mb-2">
                                                2. มีการฝึกซ้อมและทบทวนแผนการระงับเหตุฉุกเฉินสารเคมีอันตราย อย่างน้อยปีละ 1 ครั้ง
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="practice_and_review" class="form-check-input" value="no_risk">
                                                    <span class="form-check-label">มี</span>
                                                </label>
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="practice_and_review" class="form-check-input" value="high">
                                                    <span class="form-check-label">ไม่มี</span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <textarea class="form-control" rows="3" placeholder="ระบุรายละเอียดเพิ่มเติม / หมายเหตุ"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            2.7 มาตรการความปลอดภัยในการใช้สารเคมีอันตราย
                                        </td>
                                        <td>
                                            <div class="mb-2">
                                                ภายในอาคารโรงงานที่มีทั้งการใช้และการเก็บสารเคมีอันตราย มีการแบ่งแยกบริเวณการใช้และการจัดเก็บให้ชัดเจน
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="where_hazardous_chemicals" class="form-check-input" value="no_risk">
                                                    <span class="form-check-label">มี</span>
                                                </label>
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="where_hazardous_chemicals" class="form-check-input" value="high">
                                                    <span class="form-check-label">ไม่มี</span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <textarea class="form-control" rows="3" placeholder="ระบุรายละเอียดเพิ่มเติม / หมายเหตุ"></textarea>
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td>
                                            <b>3. การตรวจสอบระบบไฟฟ้าโรงงาน</b>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="https://epp-ent-dev.nidprotech.com/new_epp_entrepreneur_tester_67/application/view/self_decare/doc4selfdeclare/%E0%B8%81%E0%B8%8E%E0%B8%81%E0%B8%A3%E0%B8%B0%E0%B8%97%E0%B8%A3%E0%B8%A7%E0%B8%87%E0%B8%AD%E0%B8%B8%E0%B8%95%E0%B8%AA%E0%B8%B2%E0%B8%AB%E0%B8%81%E0%B8%A3%E0%B8%A3%E0%B8%A1%20%E0%B9%80%E0%B8%A3%E0%B8%B7%E0%B9%88%E0%B8%AD%E0%B8%87%20%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%9B%E0%B9%89%E0%B8%AD%E0%B8%87%E0%B8%81%E0%B8%B1%E0%B8%99%E0%B9%81%E0%B8%A5%E0%B8%B0%E0%B8%A3%E0%B8%B0%E0%B8%87%E0%B8%B1%E0%B8%9A%E0%B8%AD%E0%B8%B1%E0%B8%84%E0%B8%84%E0%B8%B5%E0%B8%A0%E0%B8%B1%E0%B8%A2%E0%B9%83%E0%B8%99%E0%B9%82%E0%B8%A3%E0%B8%87%E0%B8%87%E0%B8%B2%E0%B8%99%20%E0%B8%9E.%E0%B8%A8.%202552.pdf" target="_blank">
                                                กฎกระทรวงอุตสาหกรรม เรื่อง กำหนดมาตรการความปลอดภัยเกี่ยวกับระบบไฟฟ้าในโรงงาน พ.ศ. 2550
                                            </a>
                                        </td>
                                        <td>
                                            <div class="mb-2">
                                                1. มีการตรวจสอบระบบไฟฟ้าในโรงงานและรับรองความปลอดภัยของระบบไฟฟ้าในโรงงานเป็นประจำทุกปี
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="electrical_system_inspection" class="form-check-input" value="no_risk">
                                                    <span class="form-check-label">มีการตรวจสอบ</span>
                                                </label>
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="electrical_system_inspection" class="form-check-input" value="high">
                                                    <span class="form-check-label">ไม่มีการตรวจสอบ</span>
                                                </label>
                                            </div>
                                            <div class="mb-2">
                                                2. มีแบบแปลนที่แสดงการติดตั้งระบบไฟฟ้า (Single line diagram)
                                            </div>
                                            <div class="mb-2">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="There_are_blueprints_showing" class="form-check-input" value="have">
                                                    <span class="form-check-label">มีแบบแปลน</span>
                                                </label>
                                                <div class="ms-4 mt-1">
                                                    <span class="form-check-label d-block mb-1">ถ้ามีแบบแปลน กรุณาแนบไฟล์แบบแปลน</span>
                                                    <div class="custom-file" style="max-width: 350px;">
                                                        <input type="file" class="custom-file-input" id="customFile">
                                                        <label class="custom-file-label" for="customFile">อัพโหลดไฟล์ข้อมูล</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="There_are_blueprints_showing" class="form-check-input" value="no">
                                                    <span class="form-check-label">ไม่มีแบบแปลน</span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <textarea class="form-control" rows="3" placeholder="ระบุรายละเอียดเพิ่มเติม / หมายเหตุ"></textarea>
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td>
                                            <b>4. การใช้กัมมันตรังสี</b>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Use_of_radioactivity" class="form-check-input" value="no_risk">
                                                    <span class="form-check-label">ไม่เข้าข่าย</span>
                                                </label>
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Use_of_radioactivity" class="form-check-input" value="high">
                                                    <span class="form-check-label">เข้าข่าย</span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mb-2">
                                                1. ข้อมูลการขอใบอนุญาตการใช้กัมมันตรังสี
                                            </div>
                                            <div class="custom-file" style="max-width: 350px;">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">อัพโหลดไฟล์ข้อมูล</label>
                                            </div>
                                            <div class="mb-2">
                                                2. เลขที่ใบอนุญาต&nbsp;&nbsp;
                                                <input type="text" class="form-control d-inline-block" style="width: 120px;; display:inline-block;" />
                                            </div>
                                            <div class="mb-2">
                                                3. มีการจัดส่งรายงานข้อมูลประจำปีและมีบุคลากรควบคุมการใช้สารกัมมันตรังสี
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Annual_data_reports" class="form-check-input" value="no_risk">
                                                    <span class="form-check-label">ดำเนินการครบถ้วน</span>
                                                </label>
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Annual_data_reports" class="form-check-input" value="high">
                                                    <span class="form-check-label">ยังไม่ได้ดำเนินการ/ดำเนินการไม่ครบถ้วน</span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <textarea class="form-control" rows="3" placeholder="ระบุรายละเอียดเพิ่มเติม / หมายเหตุ"></textarea>
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td>
                                            <b>5. หม้อน้ำ/หม้อต้มที่ใช้ของเหลวเป็นสื่อนำความร้อน</b>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="https://epp-ent-dev.nidprotech.com/new_epp_entrepreneur_tester_67/application/view/self_decare/doc4selfdeclare/%E0%B8%9B%E0%B8%A3%E0%B8%B0%E0%B8%81%E0%B8%B2%E0%B8%A8%E0%B8%81%E0%B8%A3%E0%B8%B0%E0%B8%97%E0%B8%A3%E0%B8%A7%E0%B8%87%E0%B8%AD%E0%B8%B8%E0%B8%95%E0%B8%AA%E0%B8%B2%E0%B8%AB%E0%B8%81%E0%B8%A3%E0%B8%A3%E0%B8%A1%20%E0%B9%80%E0%B8%A3%E0%B8%B7%E0%B9%88%E0%B8%AD%E0%B8%87%20%E0%B8%84%E0%B8%B8%E0%B8%93%E0%B8%AA%E0%B8%A1%E0%B8%9A%E0%B8%B1%E0%B8%95%E0%B8%B4%E0%B8%82%E0%B8%AD%E0%B8%87%E0%B8%AB%E0%B8%A1%E0%B9%89%E0%B8%AD%E0%B8%99%E0%B9%89%E0%B8%B3%202549.pdf" target="_blank">
                                                ประกาศกระทรวงอุตสาหกรรม เรื่อง คุณสมบัติของหม้อน้ำ 2549
                                            </a>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Radiator_boiler_that_uses" class="form-check-input" value="no_risk">
                                                    <span class="form-check-label">ไม่เข้าข่าย</span>
                                                </label>
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Radiator_boiler_that_uses" class="form-check-input" value="high">
                                                    <span class="form-check-label">เข้าข่าย</span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mb-2">
                                                1. รายการหม้อน้ำล่าสุดในระบบ
                                            </div>
                                            <div class="table table-responsive mb-3">
                                                <table class="table table-bordered mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th rowspan="2" class="text-center align-middle">หม้อน้ำหมายเลข<br>Boiler No</th>
                                                            <th rowspan="2" class="text-center align-middle">ชนิด<br>Type</th>
                                                            <th rowspan="2" class="text-center align-middle">อัตราการผลิตไอน้ำ<br>(Ton/Hr)</th>
                                                            <th rowspan="2" class="text-center align-middle">แรงม้าหม้อน้ำ<br>(BHP)</th>
                                                            <th rowspan="2" class="text-center align-middle">ชนิดเชื้อเพลิง</th>
                                                            <th rowspan="2" class="text-center align-middle">วันที่ตรวจสอบ</th>
                                                            <th rowspan="2" class="text-center align-middle">อายุการใช้งาน<br>(ปี)</th>
                                                            <th colspan="6" class="text-center align-middle">ผู้ตรวจสอบ</th>
                                                            <th colspan="4" class="text-center align-middle">ผู้ควบคุมประจำ</th>
                                                        </tr>
                                                        <tr>
                                                            <th class="text-center">ชื่อ</th>
                                                            <th class="text-center">นามสกุล</th>
                                                            <th class="text-center">ทะเบียนวิศวกรรม</th>
                                                            <th class="text-center">วันหมดอายุ</th>
                                                            <th class="text-center">ทะเบียนตรวจสอบหม้อน้ำไอน้ำ</th>
                                                            <th class="text-center">วันหมดอายุ</th>
                                                            <th class="text-center">ชื่อ</th>
                                                            <th class="text-center">นามสกุล</th>
                                                            <th class="text-center">ทะเบียนเลขที่</th>
                                                            <th class="text-center">วันหมดอายุ</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><span class="d-block py-1">1</span></td>
                                                            <td><span class="d-block py-1">1</span></td>
                                                            <td><span class="d-block py-1">1</span></td>
                                                            <td><span class="d-block py-1">1</span></td>
                                                            <td><span class="d-block py-1">1</span></td>
                                                            <td><span class="d-block py-1">01/10/2025</span></td>
                                                            <td><span class="d-block py-1">1</span></td>
                                                            <td><span class="d-block py-1">สม</span></td>
                                                            <td><span class="d-block py-1">ใจ</span></td>
                                                            <td><span class="d-block py-1">วศ.12345</span></td>
                                                            <td><span class="d-block py-1">01/10/2025</span></td>
                                                            <td><span class="d-block py-1">1</span></td>
                                                            <td><span class="d-block py-1">01/10/2025</span></td>
                                                            <td><span class="d-block py-1">วีระ</span></td>
                                                            <td><span class="d-block py-1">แซ่ลี้</span></td>
                                                            <td><span class="d-block py-1">1</span></td>
                                                            <td><span class="d-block py-1">01/10/2025</span></td>
                                                        </tr>
                                                    </tbody>

                                                </table>
                                            </div>
                                            <div class="mb-2">
                                                2. รายการหม้อต้มล่าสุดในระบบ
                                            </div>
                                            <div class="table-responsive mb-3">
                                                <table class="table table-bordered mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th rowspan="2" class="text-center align-middle">หม้อต้มฯ หมายเลข<br>No</th>
                                                            <th rowspan="2" class="text-center align-middle">ชนิดของเหลวที่เป็นสื่อนำความร้อน</th>
                                                            <th rowspan="2" class="text-center align-middle">วันที่ตรวจสอบ</th>
                                                            <th rowspan="2" class="text-center align-middle">อายุการใช้งาน<br>(ปี)</th>
                                                            <th colspan="6" class="text-center align-middle">ผู้ตรวจสอบ</th>
                                                            <th colspan="4" class="text-center align-middle">ผู้ควบคุมประจำ</th>
                                                        </tr>
                                                        <tr>
                                                            <th class="text-center">ชื่อ</th>
                                                            <th class="text-center">นามสกุล</th>
                                                            <th class="text-center">ทะเบียนวิศวกรรม</th>
                                                            <th class="text-center">วันหมดอายุ</th>
                                                            <th class="text-center">ทะเบียนตรวจสอบหม้อน้ำไอน้ำ</th>
                                                            <th class="text-center">วันหมดอายุ</th>
                                                            <th class="text-center">ชื่อ</th>
                                                            <th class="text-center">นามสกุล</th>
                                                            <th class="text-center">ทะเบียนเลขที่</th>
                                                            <th class="text-center">วันหมดอายุ</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><span class="d-block py-1">1</span></td>
                                                            <td><span class="d-block py-1">1</span></td>
                                                            <td><span class="d-block py-1">01/10/2025</span></td>
                                                            <td><span class="d-block py-1">1</span></td>
                                                            <td><span class="d-block py-1">1</span></td>
                                                            <td><span class="d-block py-1">1</span></td>
                                                            <td><span class="d-block py-1">สม</span></td>
                                                            <td><span class="d-block py-1">ใจ</span></td>
                                                            <td><span class="d-block py-1">1</span></td>
                                                            <td><span class="d-block py-1">01/01/2025</span></td>
                                                            <td><span class="d-block py-1">พา</span></td>
                                                            <td><span class="d-block py-1">ที</span></td>
                                                            <td><span class="d-block py-1">1</span></td>
                                                            <td><span class="d-block py-1">01/01/2025</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="mb-2">
                                                กรณีมีการใช้งานหม้อน้ำ/หม้อต้มที่ใช้งานเป็นสื่อนำความร้อน
                                            </div>
                                            <div class="mb-2">
                                                <div class="d-inline-flex align-items-center flex-wrap">
                                                    <span class="me-2">จำนวนหม้อน้ำ</span>
                                                    <input type="text" name="boiler_total" class="form-control d-inline-block" style="width:80px;">
                                                    <span class="mx-2">เครื่อง ตรวจสอบแล้ว</span>
                                                    <input type="text" name="boiler_checked" class="form-control d-inline-block" style="width:80px;">
                                                    <span class="ms-2">เครื่อง</span>
                                                </div>
                                                <div class="custom-file mt-2" style="max-width: 60%;">
                                                    <input type="file" class="custom-file-input" id="boilerSummaryFile">
                                                    <label class="custom-file-label" for="boilerSummaryFile">เลือกไฟล์</label>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="d-inline-flex align-items-center flex-wrap">
                                                    <span class="me-2">จำนวนหม้อต้มฯ</span>
                                                    <input type="text" name="hot_boiler_total" class="form-control d-inline-block" style="width:80px;">
                                                    <span class="mx-2">เครื่อง ตรวจสอบแล้ว</span>
                                                    <input type="text" name="hot_boiler_checked" class="form-control d-inline-block" style="width:80px;">
                                                    <span class="ms-2">เครื่อง</span>
                                                </div>
                                                <div class="custom-file mt-2" style="max-width: 60%;">
                                                    <input type="file" class="custom-file-input" id="hotBoilerSummaryFile">
                                                    <label class="custom-file-label" for="hotBoilerSummaryFile">เลือกไฟล์</label>
                                                </div>
                                            </div>
                                            <div class="mb-2">
                                                3. มีการขึ้นทะเบียนผู้ควบคุมแล้ว
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="The_controller_has_been_registered" class="form-check-input" value="no_risk">
                                                    <span class="form-check-label">มี</span>
                                                </label>
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="The_controller_has_been_registered" class="form-check-input" value="high">
                                                    <span class="form-check-label">ไม่มี</span>
                                                </label>
                                            </div>
                                            <div class="mb-2">
                                                4. มีวิศวกรควบคุมการสร้างหรือซ่อม หม้อน้ำ หรือหม้อต้มฯ ประจำโรงงาน
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="There_is_an_engineer_to_supervise" class="form-check-input" value="no_risk">
                                                    <span class="form-check-label">มี</span>
                                                </label>
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="There_is_an_engineer_to_supervise" class="form-check-input" value="high">
                                                    <span class="form-check-label">ไม่มี</span>
                                                </label>
                                            </div>
                                            <div class="mb-2">
                                                5. ผู้ประกอบกิจการโรงงานมีการขอขยายระยะเวลาการตรวจสอบภายในหม้อน้ำทุกระยะเวลาเกินกว่า 1 ปี แต่ไม่เกิน 5 ปี ต่อการตรวจสอบหนึ่งครั้งแนบเอกสาร (กรณีปฏิบัติ)
                                                - รายงานการตรวจสอบภายนอกหม้อน้ำและตรวจสอบการทำงานของระบบควบคุมและอุปกรณ์ความปลอดภัยสำหรับหม้อน้ำแต่ละเครื่อง อย่างน้อยปีละ 1 ครั้ง (แบบ สปภ.1-28)
                                                - หนังสือเห็นชอบในการตรวจสอบภายในหม้อน้ำ ทุกระยะเวลาเกินกว่า ๑ ปี แต่ไม่เกิน ๕ ปี ต่อการตรวจสอบหนึ่งครั้ง (แบบ สปภ.1-27)
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Factory_operators_may_request" class="form-check-input" value="no_risk">
                                                    <span class="form-check-label">มี</span>
                                                </label>
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Factory_operators_may_request" class="form-check-input" value="high">
                                                    <span class="form-check-label">ไม่มี</span>
                                                </label>
                                            </div>
                                            <div class="mb-2">
                                                6. ผู้ประกอบกิจการโรงงานที่มีการใช้งานหม้อต้มฯ มีการตรวจสอบคุณภาพของของเหลวที่ใช้เป็นสื่อนำความร้อนเป็นประจำทุก 6 เดือน
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Factory_operators_using_boilers" class="form-check-input" value="no_risk">
                                                    <span class="form-check-label">มี</span>
                                                </label>
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Factory_operators_using_boilers" class="form-check-input" value="high">
                                                    <span class="form-check-label">ไม่มี</span>
                                                </label>
                                            </div>
                                            <div class="mb-2">
                                                7. ผู้ประกอบกิจการโรงงานที่มีการใช้งานหม้อน้ำ มีการปรับสภาพน้ำสำหรับหม้อน้ำ เป็นไปตามประกาศกระทรวงอุตสาหกรรม เรื่อง คุณสมบัติของน้ำสำหรับหม้อน้ำ พ.ศ. 2549
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Factory_operators_who_use_boilers_must" class="form-check-input" value="no_risk">
                                                    <span class="form-check-label">มี</span>
                                                </label>
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Factory_operators_who_use_boilers_must" class="form-check-input" value="high">
                                                    <span class="form-check-label">ไม่มี</span>
                                                </label>
                                            </div>
                                            <div class="mb-2">
                                                8. ผู้ประกอบกิจการโรงงานที่มีการติดตั้งหรือใช้หม้อน้ำ จัดให้มีอุปกรณ์และระบบความปลอดภัยสำหรับหม้อน้ำ (14 รายการ) ตามประกาศกระทรวงอุตสาหกรรม เรื่อง อุปกรณ์ความปลอดภัยสำหรับหม้อน้ำและหม้อต้มฯ พ.ศ. 2549
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Factory_operators_who_install_or_use_boilers" class="form-check-input" value="no_risk">
                                                    <span class="form-check-label">มี</span>
                                                </label>
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Factory_operators_who_install_or_use_boilers" class="form-check-input" value="high">
                                                    <span class="form-check-label">ไม่มี</span>
                                                </label>
                                            </div>
                                            <div class="mb-2">
                                                9. ผู้ประกอบกิจการโรงงานที่มีการติดตั้งหรือใช้หม้อต้มฯ จัดให้มีอุปกรณ์และระบบความปลอดภัยสำหรับหม้อต้มฯ (11 รายการ) ตามประกาศกระทรวงอุตสาหกรรม เรื่อง อุปกรณ์ความปลอดภัยสำหรับหม้อน้ำและหม้อต้มฯ พ.ศ. 2549
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="announcement_on_safety" class="form-check-input" value="no_risk">
                                                    <span class="form-check-label">มี</span>
                                                </label>
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="announcement_on_safety" class="form-check-input" value="high">
                                                    <span class="form-check-label">ไม่มี</span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <textarea class="form-control" rows="3" placeholder="ระบุรายละเอียดเพิ่มเติม / หมายเหตุ"></textarea>
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td>
                                            <b>6. ระบบทำความเย็นที่ใช้แอมโมเนียเป็นสารทำความเย็นในโรงงาน (การเตรียมพร้อมรับภาวะฉุกเฉิน)</b>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="https://epp-ent-dev.nidprotech.com/new_epp_entrepreneur_tester_67/application/view/self_decare/doc4selfdeclare/%E0%B8%81%E0%B8%8E%E0%B8%81%E0%B8%A3%E0%B8%B0%E0%B8%97%E0%B8%A3%E0%B8%A7%E0%B8%87%20%E0%B8%81%E0%B8%B3%E0%B8%AB%E0%B8%99%E0%B8%94%E0%B8%A1%E0%B8%B2%E0%B8%95%E0%B8%A3%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%84%E0%B8%A7%E0%B8%B2%E0%B8%A1%E0%B8%9B%E0%B8%A5%E0%B8%AD%E0%B8%94%E0%B8%A0%E0%B8%B1%E0%B8%A2%E0%B9%80%E0%B8%81%E0%B8%B5%E0%B9%88%E0%B8%A2%E0%B8%A7%E0%B8%81%E0%B8%B1%E0%B8%9A_%E0%B9%83%E0%B8%8A%E0%B9%89%E0%B9%81%E0%B8%AD%E0%B8%A1%E0%B9%82%E0%B8%A1%E0%B9%80%E0%B8%99%E0%B8%B5%E0%B8%A2%E0%B9%80%E0%B8%9B%E0%B9%87%E0%B8%99%E0%B8%AA%E0%B8%B2%E0%B8%A3%E0%B8%97%E0%B8%B3%E0%B8%84%E0%B8%A7%E0%B8%B2%E0%B8%A1%E0%B9%80%E0%B8%A2%E0%B9%87%E0%B8%99%E0%B9%83%E0%B8%99%E0%B9%82%E0%B8%A3%E0%B8%87%E0%B8%87%E0%B8%B2%E0%B8%99%20%E0%B8%9E.%E0%B8%A8.%202554.pdf" target="_blank">
                                                กฎกระทรวง กำหนดมาตรการความปลอดภัยเกี่ยวกับใช้แอมโมเนียเป็นสารทำความเย็นในโรงงาน พ.ศ. 2554
                                            </a>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Ministerial_Regulations_on_Safety_Measures" class="form-check-input" value="no_risk">
                                                    <span class="form-check-label">ไม่เข้าข่าย</span>
                                                </label>
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Ministerial_Regulations_on_Safety_Measures" class="form-check-input" value="high">
                                                    <span class="form-check-label">เข้าข่าย</span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mb-2">
                                                1. ระบบทำความเย็นที่ใช้แอมโมเนียเป็นสารทำความเย็นในโรงงาน
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Refrigeration_system_using_ammonia" class="form-check-input" value="no_risk">
                                                    <span class="form-check-label">ตรวจสอบแล้ว</span>
                                                </label>
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Refrigeration_system_using_ammonia" class="form-check-input" value="high">
                                                    <span class="form-check-label">ยังไม่ได้ดำเนินการ/ดำเนินการไม่ครบถ้วน</span>
                                                </label>
                                            </div>
                                            <div class="mb-2">
                                                2. จัดทำแผนฉุกเฉินในกรณีแอมโมเนียรั่วไหลและมีการฝึกซ้อมตามแผนฉุกเฉินดังกล่าวอย่างน้อยปีละหนึ่งครั้ง
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Develop_an_emergency_plan_in_case" class="form-check-input" value="no_risk">
                                                    <span class="form-check-label">ตรวจสอบแล้ว</span>
                                                </label>
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Develop_an_emergency_plan_in_case" class="form-check-input" value="high">
                                                    <span class="form-check-label">ยังไม่ได้ดำเนินการ/ดำเนินการไม่ครบถ้วน</span>
                                                </label>
                                            </div>
                                            <div class="mb-2">
                                                3. จัดหาอุปกรณ์ป้องกันอันตรายส่วนบุคคลที่ใช้สำหรับป้องกันแอมโมเนีย หรือ อุปกรณ์อื่นที่จำเป็น รวมถึงอุปกรณ์ในการระงับอุบัติภัยที่เหมาะสมที่สามารถหยิบใช้ได้สะดวกและต้องอยู่ในสภาพพร้อมใช้งานเสมอ
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Provide_personal_protective_equipment" class="form-check-input" value="no_risk">
                                                    <span class="form-check-label">ตรวจสอบแล้ว</span>
                                                </label>
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Provide_personal_protective_equipment" class="form-check-input" value="high">
                                                    <span class="form-check-label">ยังไม่ได้ดำเนินการ/ดำเนินการไม่ครบถ้วน</span>
                                                </label>
                                            </div>
                                            <div class="mb-2">
                                                4. จัดให้มีที่ชำระล้างแอมโมเนีย ได้แก่ ที่ล้างตาฉุกเฉินและฝักบัวล้างตัวฉุกเฉิน หรืออุปกรณ์อื่นที่เหมาะสมที่สามารถใช้ได้ทันทีเมื่อเกิดเหตุฉุกเฉิน
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Provide_ammonia_decontamination_facilities" class="form-check-input" value="no_risk">
                                                    <span class="form-check-label">ตรวจสอบแล้ว</span>
                                                </label>
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Provide_ammonia_decontamination_facilities" class="form-check-input" value="high">
                                                    <span class="form-check-label">ยังไม่ได้ดำเนินการ/ดำเนินการไม่ครบถ้วน</span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <textarea class="form-control" rows="3" placeholder="ระบุรายละเอียดเพิ่มเติม / หมายเหตุ"></textarea>
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td>
                                            <b>7. การใช้ก๊าซอุตสาหกรรม</b>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="https://epp-ent-dev.nidprotech.com/new_epp_entrepreneur_tester_67/application/view/self_decare/doc4selfdeclare/%E0%B8%81%E0%B8%8E%E0%B8%81%E0%B8%A3%E0%B8%B0%E0%B8%97%E0%B8%A3%E0%B8%A7%E0%B8%87%E0%B8%AD%E0%B8%B8%E0%B8%95%E0%B8%AA%E0%B8%B2%E0%B8%AB%E0%B8%81%E0%B8%A3%E0%B8%A3%E0%B8%A1%20%E0%B9%80%E0%B8%A3%E0%B8%B7%E0%B9%88%E0%B8%AD%E0%B8%87%20%E0%B8%81%E0%B8%B3%E0%B8%AB%E0%B8%99%E0%B8%94%E0%B9%83%E0%B8%AB%E0%B9%89%E0%B8%A1%E0%B8%B5%E0%B8%84%E0%B8%99%E0%B8%87%E0%B8%B2%E0%B8%99%E0%B8%8B%E0%B8%B6%E0%B9%88%E0%B8%87%E0%B8%A1%E0%B8%B5%E0%B8%84%E0%B8%A7%E0%B8%B2%E0%B8%A1%E0%B8%A3%E0%B8%B9%E0%B9%89%E0%B9%80%E0%B8%89%E0%B8%9E%E0%B8%B2%E0%B8%B0%E0%B9%80%E0%B8%9E%E0%B8%B7%E0%B9%88%E0%B8%AD%E0%B8%9B%E0%B8%8F%E0%B8%B4%E0%B8%9A%E0%B8%B1%E0%B8%95%E0%B8%B4%E0%B8%AB%E0%B8%99%E0%B9%89%E0%B8%B2%E0%B8%97%E0%B8%B5%E0%B9%88%20%E0%B9%80%E0%B8%81%E0%B8%B5%E0%B9%88%E0%B8%A2%E0%B8%A7%E0%B8%81%E0%B8%B1%E0%B8%9A%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B9%83%E0%B8%8A%E0%B9%89%20%E0%B9%80%E0%B8%81%E0%B9%87%E0%B8%9A%20%E0%B8%AA%E0%B9%88%E0%B8%87%20%E0%B9%81%E0%B8%A5%E0%B8%B0%E0%B8%9A%E0%B8%A3%E0%B8%A3%E0%B8%88%E0%B8%B8%E0%B8%81%E0%B9%8A%E0%B8%B2%E0%B8%8B%E0%B8%9B%E0%B8%A3%E0%B8%B0%E0%B8%88%E0%B8%B3%E0%B9%82%E0%B8%A3%E0%B8%87%E0%B8%87%E0%B8%B2%E0%B8%99%20%E0%B8%9E.%E0%B8%A8.%202549.pdf" target="_blank">
                                                กฎกระทรวงอุตสาหกรรม เรื่อง กำหนดให้มีคนงานซึ่งมีความรู้เฉพาะเพื่อปฏิบัติหน้าที่ เกี่ยวกับการใช้ เก็บ ส่ง และบรรจุก๊าซประจำโรงงาน พ.ศ. 2549
                                            </a>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Perform_Duties_Regarding_the_Use" class="form-check-input" value="no_risk">
                                                    <span class="form-check-label">ไม่เข้าข่าย</span>
                                                </label>
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Perform_Duties_Regarding_the_Use" class="form-check-input" value="high">
                                                    <span class="form-check-label">เข้าข่าย</span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mb-2">
                                                การขึ้นทะเบียนคนงานควบคุมก๊าซ คนงานส่งก๊าซ และคนงานบรรจุก๊าซ
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Registration_of_gas_control_workers" class="form-check-input" value="no_risk">
                                                    <span class="form-check-label">ดำเนินการครบถ้วน</span>
                                                </label>
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Registration_of_gas_control_workers" class="form-check-input" value="high">
                                                    <span class="form-check-label">ยังไม่ได้ดำเนินการ/ดำเนินการไม่ครบถ้วน</span>
                                                </label>
                                            </div>
                                            <div class="mb-2">
                                                การตรวจสอบท่อบรรจุก๊าซและภาชนะบรรจุก๊าซ
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Inspection_of_gas_pipes_and_gas_containers" class="form-check-input" value="no_risk">
                                                    <span class="form-check-label">ดำเนินการครบถ้วน</span>
                                                </label>
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Inspection_of_gas_pipes_and_gas_containers" class="form-check-input" value="high">
                                                    <span class="form-check-label">ยังไม่ได้ดำเนินการ/ดำเนินการไม่ครบถ้วน</span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <textarea class="form-control" rows="3" placeholder="ระบุรายละเอียดเพิ่มเติม / หมายเหตุ"></textarea>
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td>
                                            <b>8. การใช้งานรถฟอร์คลิฟท์ ที่ใช้ก๊าซปิโตรเลียมเหลวเป็นเชื้อเพลิง</b>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="https://epp-ent-dev.nidprotech.com/new_epp_entrepreneur_tester_67/application/view/self_decare/doc4selfdeclare/%E0%B8%81%E0%B8%8E%E0%B8%81%E0%B8%A3%E0%B8%B0%E0%B8%97%E0%B8%A3%E0%B8%A7%E0%B8%87%E0%B8%AD%E0%B8%B8%E0%B8%95%E0%B8%AA%E0%B8%B2%E0%B8%AB%E0%B8%81%E0%B8%A3%E0%B8%A3%E0%B8%A1%20%E0%B9%80%E0%B8%A3%E0%B8%B7%E0%B9%88%E0%B8%AD%E0%B8%87%20%E0%B8%A3%E0%B8%96%E0%B8%9F%E0%B8%AD%E0%B8%A3%E0%B9%8C%E0%B8%84%E0%B8%A5%E0%B8%B4%E0%B8%9F%E0%B8%97%E0%B9%8C%20(Forklift)%20%E0%B8%97%E0%B8%B5%E0%B9%88%E0%B9%83%E0%B8%8A%E0%B9%89%E0%B8%81%E0%B9%8A%E0%B8%B2%E0%B8%8B%E0%B8%9B%E0%B8%B4%E0%B9%82%E0%B8%95%E0%B9%80%E0%B8%A5%E0%B8%B5%E0%B8%A2%E0%B8%A1%E0%B9%80%E0%B8%AB%E0%B8%A5%E0%B8%A7%E0%B9%80%E0%B8%9B%E0%B9%87%E0%B8%99%E0%B9%80%E0%B8%8A%E0%B8%B7%E0%B9%89%E0%B8%AD%E0%B9%80%E0%B8%9E%E0%B8%A5%E0%B8%B4%E0%B8%87%20%E0%B8%9E.%E0%B8%A8.%202545.pdf" target="_blank">
                                                กฎกระทรวงอุตสาหกรรม เรื่อง รถฟอร์คลิฟท์ (Forklift) ที่ใช้ก๊าซปิโตเลียมเหลวเป็นเชื้อเพลิง พ.ศ. 2545
                                            </a>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Regulations_on_Forklifts_Using" class="form-check-input" value="no_risk">
                                                    <span class="form-check-label">ไม่เข้าข่าย</span>
                                                </label>
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Regulations_on_Forklifts_Using" class="form-check-input" value="high">
                                                    <span class="form-check-label">เข้าข่าย</span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mb-2">
                                                จำนวนรถฟอร์คลิฟท์ ที่ใช้ก๊าซปิโตรเลียมเหลวเป็นเชื้อเพลิง
                                                <input type="text" class="form-control d-inline-block"
                                                    style="width:80px; display:inline-block;" />
                                                &nbsp;คัน
                                            </div>
                                            <div class="mb-2">
                                                ตรวจสอบแล้ว
                                                <input type="text" class="form-control d-inline-block"
                                                    style="width:80px; display:inline-block;" />
                                                &nbsp;คัน
                                            </div>
                                        </td>
                                        <td>
                                            <textarea class="form-control" rows="3" placeholder="ระบุรายละเอียดเพิ่มเติม / หมายเหตุ"></textarea>
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td>
                                            <b>9. ภาชนะบรรจุวัตถุอันตรายหรือของเหลวที่อาจทำให้เกิดอันตราย ขนาด 25,000 ลิตร ขึ้นไป</b>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="ubstances_or_liquids_that" class="form-check-input" value="no_risk">
                                                    <span class="form-check-label">ไม่มี</span>
                                                </label>
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="ubstances_or_liquids_that" class="form-check-input" value="high">
                                                    <span class="form-check-label">มี</span>
                                                </label>
                                            </div>
                                        </td>
                                        <td style="width:65%;">
                                            <div class="mb-2">
                                                <button type="button" class="btn btn-success btn-sm" id="btnAddChemRow">
                                                    เพิ่มข้อมูล (Add)
                                                </button>
                                                <button type="button" class="btn btn-danger btn-sm" id="btnDeleteChemRow">
                                                    ลบข้อมูล (Delete)
                                                </button>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table table-bordered mb-0" id="tblChemHighRisk">
                                                    <thead>
                                                        <tr>
                                                            <th style="width:5%; text-align:center;">เลือก</th>
                                                            <th style="width:15%; text-align:center;">รายชื่อสาร</th>
                                                            <th style="width:15%; text-align:center;">สถานะ</th>
                                                            <th style="width:15%; text-align:center;">ปริมาณการกักเก็บ (ลิตร)</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-center">
                                                                <input type="checkbox" name="chem_select[]">
                                                            </td>
                                                            <td>
                                                                <input type="text" name="chem_name[]" class="form-control form-control-sm">
                                                            </td>
                                                            <td>
                                                                <input type="text" name="hazard_type[]" class="form-control form-control-sm">
                                                            </td>
                                                            <td>
                                                                <input type="text" name="cas_un_no[]" class="form-control form-control-sm">
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <br />
                                            <div class="custom-file" style="max-width: 80%;">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">อัพโหลดไฟล์ข้อมูล</label>
                                            </div>
                                        </td>
                                        <td style="width:20%;">
                                            <textarea class="form-control" rows="4" placeholder="ระบุรายละเอียดเพิ่มเติม / หมายเหตุ"></textarea>
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td>
                                            <b>10. ภาชนะบรรจุเชื้อเพลิง</b>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Fuel_container" class="form-check-input" value="no_risk">
                                                    <span class="form-check-label">ไม่มี</span>
                                                </label>
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Fuel_container" class="form-check-input" value="high">
                                                    <span class="form-check-label">มี</span>
                                                </label>
                                            </div>
                                        </td>
                                        <td style="width:65%;">
                                            <div class="mb-2">
                                                <button type="button" class="btn btn-success btn-sm" id="btnAddChemRow">
                                                    เพิ่มข้อมูล (Add)
                                                </button>
                                                <button type="button" class="btn btn-danger btn-sm" id="btnDeleteChemRow">
                                                    ลบข้อมูล (Delete)
                                                </button>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table table-bordered mb-0" id="tblChemHighRisk">
                                                    <thead>
                                                        <tr>
                                                            <th style="width:5%; text-align:center;">เลือก</th>
                                                            <th style="width:15%; text-align:center;">ชนิด</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-center">
                                                                <input type="checkbox" name="chem_select[]">
                                                            </td>
                                                            <td>
                                                                <input type="text" name="chem_name[]" class="form-control form-control-sm">
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </td>
                                        <td style="width:20%;">
                                            <textarea class="form-control" rows="4" placeholder="ระบุรายละเอียดเพิ่มเติม / หมายเหตุ"></textarea>
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td>
                                            <b>11. เครื่องจักรที่มีการเคลื่อนไหวซึ่งอาจเกิดอันตรายกับคน</b>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Machinery_with_movement_that_may" class="form-check-input" value="no_risk">
                                                    <span class="form-check-label">ไม่เข้าข่าย</span>
                                                </label>
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Machinery_with_movement_that_may" class="form-check-input" value="high">
                                                    <span class="form-check-label">เข้าข่าย</span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mb-2">
                                                มีการติดตั้งอุปกรณ์ป้องกัน
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Protective_equipment_is_installed" class="form-check-input" value="no_risk">
                                                    <span class="form-check-label">มี</span>
                                                </label>
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Protective_equipment_is_installed" class="form-check-input" value="high">
                                                    <span class="form-check-label">ไม่มี</span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <textarea class="form-control" rows="3" placeholder="ระบุรายละเอียดเพิ่มเติม / หมายเหตุ"></textarea>
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td>
                                            <b>12. บ่อหรือถังเปิดซึ่งอาจเป็นอันตรายต่อคนงาน</b>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Open_pits_or_tanks_that" class="form-check-input" value="no_risk">
                                                    <span class="form-check-label">ไม่เข้าข่าย</span>
                                                </label>
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Open_pits_or_tanks_that" class="form-check-input" value="high">
                                                    <span class="form-check-label">เข้าข่าย</span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mb-2">
                                                มีการติดตั้งขอบหรือราวกั้นที่แข็งแรงสูงไม่น้อยกว่า 1 เมตร จากระดับพื้น
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="A_strong_edge_or_guardrail" class="form-check-input" value="no_risk">
                                                    <span class="form-check-label">มี</span>
                                                </label>
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="A_strong_edge_or_guardrail" class="form-check-input" value="high">
                                                    <span class="form-check-label">ไม่มี</span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <textarea class="form-control" rows="3" placeholder="ระบุรายละเอียดเพิ่มเติม / หมายเหตุ"></textarea>
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td>
                                            <b>13. การใช้เครื่องยก(Crane/noist)</b>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Use_of_lifting_equipment" class="form-check-input" value="no_risk">
                                                    <span class="form-check-label">ไม่เข้าข่าย</span>
                                                </label>
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Use_of_lifting_equipment" class="form-check-input" value="high">
                                                    <span class="form-check-label">เข้าข่าย</span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mb-2">
                                                มีการตรวจสอบความปลอดภัยและคิดคั้งป้ายระบุน้ำหนักปลอดภัยสูงสุดที่ยกได้
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Safety_checks_are_carried" class="form-check-input" value="no_risk">
                                                    <span class="form-check-label">มี</span>
                                                </label>
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Safety_checks_are_carried" class="form-check-input" value="high">
                                                    <span class="form-check-label">ไม่มี</span>
                                                </label>
                                            </div>
                                            <div class="mb-2">
                                                ถ้ามี ตรวจสอบเมื่อวันที่
                                            </div>
                                            <div class="custom-file" style="max-width: 80%;">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">อัพโหลดไฟล์ข้อมูล</label>
                                            </div>
                                        </td>
                                        <td>
                                            <textarea class="form-control" rows="3" placeholder="ระบุรายละเอียดเพิ่มเติม / หมายเหตุ"></textarea>
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td>
                                            <b>14. การใช้เครื่องลำเลียงขนส่ง (conveyer)</b>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Use_of_conveyor" class="form-check-input" value="no_risk">
                                                    <span class="form-check-label">ไม่เข้าข่าย</span>
                                                </label>
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Use_of_conveyor" class="form-check-input" value="high">
                                                    <span class="form-check-label">เข้าข่าย</span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mb-2">
                                                มีการติดตั้งเครื่องป้องกันขณะยกตลอดใต้สายลำเลียงและมีการติดตั้งเครื่องบังคับให้หยุดการทำงานได้
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Lifting_safety_devices" class="form-check-input" value="no_risk">
                                                    <span class="form-check-label">มี</span>
                                                </label>
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Lifting_safety_devices" class="form-check-input" value="high">
                                                    <span class="form-check-label">ไม่มี</span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <textarea class="form-control" rows="3" placeholder="ระบุรายละเอียดเพิ่มเติม / หมายเหตุ"></textarea>
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td>
                                            <b>15. โรงงานมีความเสี่ยงด้านแสงสว่าง</b>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="The_factory" class="form-check-input" value="no_risk">
                                                    <span class="form-check-label">ไม่เข้าข่าย</span>
                                                </label>
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="The_factory" class="form-check-input" value="high">
                                                    <span class="form-check-label">เข้าข่าย</span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mb-2">
                                                ไฟล์ประกอบเรื่องความเสี่ยงด้านแสงสว่าง
                                            </div>
                                            <div class="custom-file" style="max-width: 80%;">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">อัพโหลดไฟล์ข้อมูล</label>
                                            </div>
                                        </td>
                                        <td>
                                            <textarea class="form-control" rows="3" placeholder="ระบุรายละเอียดเพิ่มเติม / หมายเหตุ"></textarea>
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td>
                                            <b>16. โรงงานมีความเสี่ยงด้านความร้อน</b>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="The_factory_damage" class="form-check-input" value="no_risk">
                                                    <span class="form-check-label">ไม่เข้าข่าย</span>
                                                </label>
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="The_factory_damage" class="form-check-input" value="high">
                                                    <span class="form-check-label">เข้าข่าย</span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mb-2">
                                                ไฟล์ประกอบเรื่องความเสี่ยงด้านความร้อน
                                            </div>
                                            <div class="custom-file" style="max-width: 80%;">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">อัพโหลดไฟล์ข้อมูล</label>
                                            </div>
                                        </td>
                                        <td>
                                            <textarea class="form-control" rows="3" placeholder="ระบุรายละเอียดเพิ่มเติม / หมายเหตุ"></textarea>
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td style="width:40%;">
                                            <b>17. ความปลอดภัยเกี่ยวกับการจัดการสารเคมีในโรงงานอุตสาหกรรม</b>
                                        </td>
                                        <td style="width:40%;"></td>
                                        <td style="width:20%;"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="mb-2">
                                                1. รายงานข้อมูลสารเคมีอันตรายที่มีการเก็บหรือการใช้ในการประกอบกิจการโรงงาน
                                                ในปริมาณตั้งแต่ 1 ตันต่อปี ต่อหนึ่งสารเคมีอันตราย 1 ชนิดขึ้นไป ส่งให้กรมโรงงานอุตสาหกรรมปีละ 1 ครั้ง
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Report_information_on_hazardous" class="form-check-input" value="yes">
                                                    <span class="form-check-label">มี</span>
                                                </label>
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Report_information_on_hazardous" class="form-check-input" value="no">
                                                    <span class="form-check-label">ไม่มี</span>
                                                </label>
                                            </div>
                                            <div class="mb-2">
                                                2. บรรจุภัณฑ์สารเคมีอันตรายต้องติดฉลากที่เป็นภาษาไทย และมีสภาพแข็งแรง ทนทาน ไม่ชำรุด เสียหาย
                                                ปลอดภัยในการจัดเก็บ และใช้งาน สามารถขนย้ายได้ ด้วยความปลอดภัย รวมทั้งปิดบรรจุภัณฑ์สนิทมิดชิดเมื่อไม่ใช้งาน
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Hazardous_chemical_packaging" class="form-check-input" value="yes">
                                                    <span class="form-check-label">มี</span>
                                                </label>
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Hazardous_chemical_packaging" class="form-check-input" value="no">
                                                    <span class="form-check-label">ไม่มี</span>
                                                </label>
                                            </div>
                                            <div class="mb-2">
                                                3. มีเอกสารข้อมูลความปลอดภัย (Safety Data Sheet: SDS) ของสารเคมีที่เป็นภาษาไทย หรือคำแนะนำความปลอดภัยสารเคมีที่เป็นภาษาไทย
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="There_is_a_Safety_Data_Sheet" class="form-check-input" value="yes">
                                                    <span class="form-check-label">มี</span>
                                                </label>
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="There_is_a_Safety_Data_Sheet" class="form-check-input" value="no">
                                                    <span class="form-check-label">ไม่มี</span>
                                                </label>
                                            </div>
                                            <div class="mb-2">
                                                4. มีป้ายห้าม ป้ายให้ปฏิบัติ ป้ายเตือน ป้ายข้อมูล หรือสัญลักษณ์ ในการทำงานเกี่ยวกับสารเคมีอันตราย
                                                รวมถึงป้ายเครื่องหมายสัญลักษณ์ตามมาตรฐานสากลหรือข้อความ ที่เห็นได้ชัดเจนในบริเวณที่มีการปฏิบัติงาน การเก็บหรือการใช้สารเคมี
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="There_are_prohibition_signs" class="form-check-input" value="yes">
                                                    <span class="form-check-label">มี</span>
                                                </label>
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="There_are_prohibition_signs" class="form-check-input" value="no">
                                                    <span class="form-check-label">ไม่มี</span>
                                                </label>
                                            </div>
                                            <div class="mb-2">
                                                5. มีวิธีการปฏิบัติงานที่เกี่ยวกับสารเคมีอันตรายที่ครอบคลุมทุกขั้นตอนในการประกอบกิจการโรงงานเป็นลายลักษณ์อักษรไว้ในที่ปฏิบัติงานหรือสามารถเข้าถึงได้ระบุ (กรณีปฏิบัติ)
                                            </div>
                                            <div class="mb-2">
                                                - การรับ การขนถ่ายและการเคลื่อนย้ายสารเคมีอันตราย
                                            </div>
                                            <div class="mb-2">
                                                - การจัดเก็บสารเคมีอันตรายอย่างปลอดภัย
                                            </div>
                                            <div class="mb-2">
                                                - การใช้งานอย่างปลอดภัยตามลักษณะความเป็นอันตราย
                                            </div>
                                            <div class="mb-2">
                                                - การอนุญาตทำงานที่มีประกายไฟหรือความร้อนที่เป็นอันตราย
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="There_are_written_procedures" class="form-check-input" value="yes">
                                                    <span class="form-check-label">มี</span>
                                                </label>
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="There_are_written_procedures" class="form-check-input" value="no">
                                                    <span class="form-check-label">ไม่มี</span>
                                                </label>
                                            </div>
                                            <div class="mb-2">
                                                6. มีอุปกรณ์คุ้มครองความปลอดภัยส่วนบุคคลตามความเหมาะสมต่อการปฏิบัติงานที่เกี่ยวข้องกับสารเคมีอันตรายและมีมาตรการให้คนงานที่เกี่ยวข้องสวมใส่อุปกรณ์คุ้มครองความปลอดภัยส่วนบุคคลทุกครั้งเมื่อมีการปฏิบัติงาน
                                                รวมทั้งดูแลรักษาให้มีสภาพพร้อมใช้งานได้อย่างปลอดภัย
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Personal_safety_equipment" class="form-check-input" value="yes">
                                                    <span class="form-check-label">มี</span>
                                                </label>
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Personal_safety_equipment" class="form-check-input" value="no">
                                                    <span class="form-check-label">ไม่มี</span>
                                                </label>
                                            </div>
                                            <div class="mb-2">
                                                7. มีที่ชำระล้างดวงตาและร่างกายในกรณีฉุกเฉินในบริเวณที่มีการปฏิบัติงานเกี่ยวกับ สารเคมีอันตรายที่สามารถเข้าถึงได้โดยสะดวกและพร้อมใช้งาน โดยน้ำที่ใช้ต้องสะอาดและปลอดภัย
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Emergency_eye_and_body_wash" class="form-check-input" value="yes">
                                                    <span class="form-check-label">มี</span>
                                                </label>
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Emergency_eye_and_body_wash" class="form-check-input" value="no">
                                                    <span class="form-check-label">ไม่มี</span>
                                                </label>
                                            </div>
                                            <div class="mb-2">
                                                8. มีการตรวจสอบ ทดสอบและบำรุงรักษาอุปกรณ์และเครื่องจักรที่เกี่ยวข้องกับ สารเคมีอันตรายเพื่อป้องกันไม่ให้เกิดการรั่วไหลของสารเคมี
                                                ตามระยะเวลาที่กำหนดหรือเป็นไปตามแผนการบำรุงรักษาหรือตามคำแนะนำของผู้ผลิตอุปกรณ์และเครื่องจักร
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Equipment_and_machinery_related" class="form-check-input" value="yes">
                                                    <span class="form-check-label">มี</span>
                                                </label>
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Equipment_and_machinery_related" class="form-check-input" value="no">
                                                    <span class="form-check-label">ไม่มี</span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <textarea class="form-control" rows="3" placeholder="ระบุรายละเอียดเพิ่มเติม / หมายเหตุ"></textarea>
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td style="width:40%;">
                                            <b>18. มาตรการความปลอดภัยการรับ การขนถ่ายและการเคลื่อนย้ายสารเคมีอันตราย</b>
                                        </td>
                                        <td style="width:40%;"></td>
                                        <td style="width:20%;"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="mb-2">
                                                มีการติดตั้งสายดิน (Grounding) รวมถึงต่อฝาก (Bonding) ในการรับ การขนถ่ายและการเคลื่อนย้ายสารเคมีอันตรายที่มีสมบัติไวไฟ
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Grounding_and_bonding" class="form-check-input" value="yes">
                                                    <span class="form-check-label">มี</span>
                                                </label>
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Grounding_and_bonding" class="form-check-input" value="no">
                                                    <span class="form-check-label">ไม่มี</span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <textarea class="form-control" rows="3" placeholder="ระบุรายละเอียดเพิ่มเติม / หมายเหตุ"></textarea>
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td style="width:40%;">
                                            <b>19. มาตรการความปลอดภัยในการจัดเก็บสารเคมีอันตรายในอาคาร และนอกอาคาร</b>
                                        </td>
                                        <td style="width:40%;"></td>
                                        <td style="width:20%;"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="mb-2">
                                                1. มีป้ายชี้บ่งว่าเป็นพื้นที่จัดเก็บสารเคมีอันตรายแสดงให้เห็นชัดเจน
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="There_is_a_sign_clearly" class="form-check-input" value="yes">
                                                    <span class="form-check-label">มี</span>
                                                </label>
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="There_is_a_sign_clearly" class="form-check-input" value="no">
                                                    <span class="form-check-label">ไม่มี</span>
                                                </label>
                                            </div>
                                            <div class="mb-2">
                                                2. การจัดเก็บในอาคารมีแผนผังแสดงการจัดเก็บสารเคมีอันตรายที่เป็นปัจจุบันโดยจัดเก็บในสถานที่ที่เข้าถึงได้ง่ายและพร้อมใช้งาน
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="The_building_storage_has_a_current" class="form-check-input" value="yes">
                                                    <span class="form-check-label">มี</span>
                                                </label>
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="The_building_storage_has_a_current" class="form-check-input" value="no">
                                                    <span class="form-check-label">ไม่มี</span>
                                                </label>
                                            </div>
                                            <div class="mb-2">
                                                3. มีการจัดวางเรียงภาชนะบรรจุสารเคมีอันตรายซึ่งความจุสูงสุดไม่เกิน 450 ลิตรมวลสุทธิสูงสุดไม่เกิน 400 กิโลกรัม
                                                โดยต้องมีความสูงไม่เกิน 3 เมตร หรือหากวางบนแผ่นรองสินค้า (Pallet) ต้องวางเรียงกันไม่เกิน 3 ชั้น ยกเว้นกรณีที่จัดเก็บสารเคมีบนชั้นวางที่มีความมั่นคงแข็งแรงเพียงพอ
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Containers_of_hazardous" class="form-check-input" value="yes">
                                                    <span class="form-check-label">มี</span>
                                                </label>
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Containers_of_hazardous" class="form-check-input" value="no">
                                                    <span class="form-check-label">ไม่มี</span>
                                                </label>
                                            </div>
                                            <div class="mb-2">
                                                4. มีมาตรการในการป้องกันและระงับการหก รั่วไหล ของสารเคมีอันตราย
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="There_are_measures_to_prevent" class="form-check-input" value="yes">
                                                    <span class="form-check-label">มี</span>
                                                </label>
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="There_are_measures_to_prevent" class="form-check-input" value="no">
                                                    <span class="form-check-label">ไม่มี</span>
                                                </label>
                                            </div>
                                            <div class="mb-2">
                                                5. การจัดเก็บในอาคารสามารถนำเครื่องมือและอุปกรณ์เข้าไประงับเหตุได้โดยสะดวกและปลอดภัยไม่มีสิ่งกีดขวาง
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Indoor_storage_allows_tools" class="form-check-input" value="yes">
                                                    <span class="form-check-label">มี</span>
                                                </label>
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Indoor_storage_allows_tools" class="form-check-input" value="no">
                                                    <span class="form-check-label">ไม่มี</span>
                                                </label>
                                            </div>
                                            <div class="mb-2">
                                                6. การจัดเก็บนอกอาคารมีระบบกักเก็บสารเคมีอันตรายที่หก รั่วไหล ไม่ให้ปนเปื้อนสิ่งแวดล้อม
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Outdoor_storage_has_containment" class="form-check-input" value="yes">
                                                    <span class="form-check-label">มี</span>
                                                </label>
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Outdoor_storage_has_containment" class="form-check-input" value="no">
                                                    <span class="form-check-label">ไม่มี</span>
                                                </label>
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
                <div class="tab-pane" id="tab4">
                    <div class="card p-4">
                        <div class="card-header">
                            <span class="font_header"><b>สิ่งแวดล้อม</b></span>
                        </div>
                        <div class="table-responsive div_header p-4">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width:20%;">หัวข้อ</th>
                                        <th style="width:60%;">ประเด็นการตรวจ</th>
                                        <th style="width:20%;">หมายเหตุ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <b>1. การจัดการมลพิษทางน้ำ</b>
                                        </td>
                                        <td>
                                            <a href="https://epp-ent-dev.nidprotech.com/new_epp_entrepreneur_tester_67/application/view/self_decare/doc4selfdeclare/%E0%B8%9B%E0%B8%A3%E0%B8%B0%E0%B8%81%E0%B8%B2%E0%B8%A8%20%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%81%E0%B9%8D%E0%B8%B2%E0%B8%AB%E0%B8%99%E0%B8%94%E0%B8%8A%E0%B8%99%E0%B8%B4%E0%B8%94%E0%B9%81%E0%B8%A5%E0%B8%B0%E0%B8%82%E0%B8%99%E0%B8%B2%E0%B8%94%E0%B8%82%E0%B8%AD%E0%B8%87%E0%B9%82%E0%B8%A3%E0%B8%87%E0%B8%87%E0%B8%B2%E0%B8%99%20%E0%B8%81%E0%B9%8D%E0%B8%B2%E0%B8%AB%E0%B8%99%E0%B8%94%E0%B8%A7%E0%B8%B4%E0%B8%98%E0%B8%B5%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%84%E0%B8%A7%E0%B8%9A%E0%B8%84%E0%B8%B8%E0%B8%A1%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%9B%E0%B8%A5%E0%B9%88%E0%B8%AD%E0%B8%A2%E0%B8%82%E0%B8%AD%E0%B8%87%E0%B9%80%E0%B8%AA%E0%B8%B5%E0%B8%A2%20%E0%B8%A1%E0%B8%A5%E0%B8%9E%E0%B8%B4%E0%B8%A9%202545(2558).pdf" target="_blank">
                                                ประกาศ การกําหนดชนิดและขนาดของโรงงาน กําหนดวิธีการควบคุมการปล่อยของเสีย มลพิษ 2545(2558)
                                            </a>

                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            1.1 ข้อมูลน้ำเสีย
                                            <a href="https://epp-ent-dev.nidprotech.com/new_epp_entrepreneur_tester_67/application/view/self_decare/doc4selfdeclare/%E0%B8%81%E0%B8%B3%E0%B8%AB%E0%B8%99%E0%B8%94%E0%B8%A1%E0%B8%B2%E0%B8%95%E0%B8%A3%E0%B8%90%E0%B8%B2%E0%B8%99%E0%B8%97%E0%B8%B1%E0%B9%88%E0%B8%A7%E0%B9%84%E0%B8%9B%E0%B9%83%E0%B8%99%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%A3%E0%B8%B0%E0%B8%9A%E0%B8%B2%E0%B8%A2%E0%B8%99%E0%B9%89%E0%B8%B3%E0%B9%80%E0%B8%AA%E0%B8%B5%E0%B8%A22560.pdf" target="_blank">
                                                ประกาศกำหนดมาตรฐานทั่วไปในการระบายน้ำเสีย 2560
                                            </a>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Announcement_on_the" class="form-check-input" value="no_risk">
                                                    <span class="form-check-label">โรงงานไม่เข้าข่ายความเสี่ยงด้านอัคคีภัย</span>
                                                </label>
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Announcement_on_the" class="form-check-input" value="high">
                                                    <span class="form-check-label">โรงงานเข้าข่ายความเสี่ยงอัคคีภัยสูง</span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="table-responsive mt-3">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>รายการน้ำเสียที่เกิดขึ้นที่ระบายออกจากโรงงาน</th>
                                                            <th>ปริมาณน้ำเสียที่เกิดขึ้นที่ระบายออกจากโรงงาน</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1. กระบวนการผลิต</td>
                                                            <td>10 ลบ.ม./วัน</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2. อุปโภค–บริโภค</td>
                                                            <td>10 ลบ.ม./วัน</td>
                                                        </tr>
                                                        <tr>
                                                            <td>3. กิจกรรมสนับสนุนการผลิต</td>
                                                            <td>10 ลบ.ม./วัน</td>
                                                        </tr>
                                                        <tr>
                                                            <td><b>รวมทั้งสิ้น</b></td>
                                                            <td><b>30 ลบ.ม./วัน</b></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </td>
                                        <td>
                                            <textarea class="form-control" rows="3" placeholder="ระบุรายละเอียดเพิ่มเติม / หมายเหตุ"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            1.2 การระบายน้ำเสียและการบำบัดน้ำเสีย
                                        </td>
                                        <td>
                                            <div class="table-responsive mt-3">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th rowspan="2" class="text-center align-middle">ลำดับที่</th>
                                                            <th rowspan="2" class="text-center align-middle">ระบบบำบัดน้ำเสียที่ใช้เป็นระบบ</th>
                                                            <th rowspan="2" class="text-center align-middle">บำบัดได้สูงสุด(ลบ.ม./วัน)</th>
                                                            <th rowspan="2" class="text-center align-middle">ปริมาณน้ำเสียที่เข้าระบบ(ลบ.ม./วัน)</th>
                                                            <th colspan="3" class="text-center align-middle">
                                                                อัตราส่วนการรับน้ำจากแหล่งน้ำเสีย Source (%)
                                                            </th>
                                                            <th rowspan="2" class="text-center align-middle">การระบายน้ำทิ้งออกนอกบริเวณโรงงาน</th>
                                                            <th rowspan="2" class="text-center align-middle">สารเคมีที่ใช้ในการบำบัด</th>
                                                            <th rowspan="2" class="text-center align-middle">ปริมาณการใช้สารเคมี(กก./วัน)</th>
                                                            <th rowspan="2" class="text-center align-middle">การติดตั้งมาตรวัดไฟฟ้า</th>
                                                        </tr>
                                                        <tr>
                                                            <th class="text-center">กระบวนการผลิต</th>
                                                            <th class="text-center">อุปโภค-บริโภค</th>
                                                            <th class="text-center">กิจกรรมสนับสนุนการผลิต</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-center">1.</td>
                                                            <td>ระบบบำบัดทางกายภาพ</td>
                                                            <td class="text-center">1</td>
                                                            <td class="text-center">1</td>
                                                            <td class="text-center">1</td>
                                                            <td class="text-center">1</td>
                                                            <td class="text-center">1</td>
                                                            <td>ปล่อยเข้าสู่ระบบบำบัดส่วนกลางของนิคมฯ</td>
                                                            <td class="text-center">1</td>
                                                            <td class="text-center">1</td>
                                                            <td class="text-center">มี</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="mt-2">
                                                น้ำที่ระบายออกจากโรงงานเป็นไปตามมาตรฐานน้ำทิ้ง (แนบผลการวิเคราะห์ทุกจุดที่มีการระบายน้ำทิ้ง)
                                                <br>
                                                <div class="custom-file mt-1" style="max-width:280px;">
                                                    <input type="file" class="custom-file-input" id="file_outflow">
                                                    <label class="custom-file-label" for="file_outflow">เลือกไฟล์</label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <textarea class="form-control" rows="3" placeholder="ระบุรายละเอียดเพิ่มเติม / หมายเหตุ"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            1.3 จุดระบายน้ำออกนอกโรงงาน
                                        </td>
                                        <td>
                                            <div class="mb-2">
                                                1. จำนวนจุดระบายน้ำออกนอกโรงงาน&nbsp;&nbsp;
                                                <input type="text" class="form-control d-inline-block" style="width: 120px;; display:inline-block;" />
                                                &nbsp;จุด
                                            </div>
                                            <div class="mb-2">
                                                2. แผนผังจุดระบายน้ำออกนอกโรงงาน
                                            </div>
                                            <div class="custom-file mt-1" style="max-width:280px;">
                                                <input type="file" class="custom-file-input" id="file_outflow">
                                                <label class="custom-file-label" for="file_outflow">เลือกไฟล์</label>
                                            </div>
                                        </td>
                                        <td>
                                            <textarea class="form-control" rows="3" placeholder="ระบุรายละเอียดเพิ่มเติม / หมายเหตุ"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            1.4 การติดตั้งเครื่องมือหรือเครื่องอุปกรณ์
                                        </td>
                                        <td>
                                            <div class="mb-2">
                                                มีการติดตั้งเครื่องตรวจวัดค่าบีโอดี (BOD) หรือเครื่องตรวจวัดค่าซีโอดี (COD) และรายงานข้อมูลเข้าระบบเครือข่ายคอมพิวเตอร์ของกรมโรงงานอุตสาหกรรม&nbsp;&nbsp;
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="BOD_or_COD" class="form-check-input" value="yes">
                                                    <span class="form-check-label">มี</span>
                                                </label>
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="BOD_or_COD" class="form-check-input" value="no">
                                                    <span class="form-check-label">ไม่มี</span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <textarea class="form-control" rows="3" placeholder="ระบุรายละเอียดเพิ่มเติม / หมายเหตุ"></textarea>
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td>
                                            <b>2. การจัดการมลพิษทางอากาศ </b>
                                        </td>
                                        <td>
                                            <a href="https://epp-ent-dev.nidprotech.com/new_epp_entrepreneur_tester_67/application/view/self_decare/doc4selfdeclare/%E0%B8%9B%E0%B8%A3%E0%B8%B0%E0%B8%81%E0%B8%B2%E0%B8%A8%E0%B8%81%E0%B8%A3%E0%B8%B0%E0%B8%97%E0%B8%A3%E0%B8%A7%E0%B8%87%E0%B8%AD%E0%B8%B8%E0%B8%95%E0%B8%AA%E0%B8%B2%E0%B8%AB%E0%B8%81%E0%B8%A3%E0%B8%A3%E0%B8%A1%20%E0%B9%80%E0%B8%A3%E0%B8%B7%E0%B9%88%E0%B8%AD%E0%B8%87%20%E0%B8%81%E0%B8%B3%E0%B8%AB%E0%B8%99%E0%B8%94%E0%B8%84%E0%B9%88%E0%B8%B2%E0%B8%9B%E0%B8%A3%E0%B8%B4%E0%B8%A1%E0%B8%B2%E0%B8%93%E0%B8%82%E0%B8%AD%E0%B8%87%E0%B8%AA%E0%B8%B2%E0%B8%A3%E0%B9%80%E0%B8%88%E0%B8%B7%E0%B8%AD%E0%B8%9B%E0%B8%99%E0%B9%83%E0%B8%99%E0%B8%AD%E0%B8%B2%E0%B8%81%E0%B8%B2%E0%B8%A8%E0%B8%97%E0%B8%B5%E0%B9%88%E0%B8%A3%E0%B8%B0%E0%B8%9A%E0%B8%B2%E0%B8%A2%E0%B8%AD%E0%B8%AD%E0%B8%81%E0%B8%88%E0%B8%B2%E0%B8%81%E0%B9%82%E0%B8%A3%E0%B8%87%E0%B8%87%E0%B8%B2%E0%B8%99%20%E0%B8%9E.%E0%B8%A8.%202549.pdf" target="_blank">
                                                ประกาศกระทรวงอุตสาหกรรม เรื่อง กำหนดค่าปริมาณของสารเจือปนในอากาศที่ระบายออกจากโรงงาน พ.ศ. 2549
                                            </a>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            2.1 รายละเอียดระบบบําบัดมลพิษทางอากาศ
                                        </td>
                                        <td>
                                            <div class="table-responsive mt-3">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th rowspan="2" class="text-center align-middle">ลำดับที่</th>
                                                            <th rowspan="2" class="text-center align-middle">ระบบบำบัดมลพิษทางอากาศที่ใช้เป็นระบบ</th>
                                                            <th rowspan="2" class="text-center align-middle">ชนิดมลสาร</th>
                                                            <th rowspan="2" class="text-center align-middle">เครื่องจักรหรือแหล่งกำเนิด</th>
                                                            <th rowspan="2" class="text-center align-middle">บำบัดได้สูงสุด(กรัม / วัน)</th>
                                                            <th colspan="7" class="text-center align-middle">
                                                                วิศวกรผู้รับรอง
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                            <th class="text-center">ชื่อ</th>
                                                            <th class="text-center">นามสกุล</th>
                                                            <th class="text-center">สาขาวิศวกรรม</th>
                                                            <th class="text-center">ประเภท</th>
                                                            <th class="text-center">เลขที่ใบอนุญาตวิศวกรผู้รับรอง</th>
                                                            <th class="text-center">วันที่ออกใบอนุญาต</th>
                                                            <th class="text-center">ใบอนุญาตหมดอายุ</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-center">1.</td>
                                                            <td>ระบบบำบัดทางกายภาพ</td>
                                                            <td class="text-center">1</td>
                                                            <td class="text-center">1</td>
                                                            <td class="text-center">1</td>
                                                            <td class="text-center">1</td>
                                                            <td class="text-center">1</td>
                                                            <td>ปล่อยเข้าสู่ระบบบำบัดส่วนกลางของนิคมฯ</td>
                                                            <td class="text-center">1</td>
                                                            <td class="text-center">1</td>
                                                            <td class="text-center">01/01/65</td>
                                                            <td class="text-center">01/01/65</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </td>
                                        <td>
                                            <textarea class="form-control" rows="3" placeholder="ระบุรายละเอียดเพิ่มเติม / หมายเหตุ"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            2.2 การติดเครื่องมือหรือเครื่องอุปกรณ์พิเศษเพื่อตรวจสอบคุณภาพอากาศจากปล่องแบบอัตโนมัติ
                                            <a href="https://epp-ent-dev.nidprotech.com/new_epp_entrepreneur_tester_67/application/view/self_decare/doc4selfdeclare/%E0%B8%82%E0%B9%89%E0%B8%AD%E0%B8%9A%E0%B8%B1%E0%B8%87%E0%B8%84%E0%B8%B1%E0%B8%9A%E0%B8%AF%20%E0%B8%95%E0%B8%B4%E0%B8%94%E0%B8%95%E0%B8%B1%E0%B9%89%E0%B8%87%E0%B9%80%E0%B8%84%E0%B8%A3%E0%B8%B7%E0%B9%88%E0%B8%AD%E0%B8%87%E0%B8%A1%E0%B8%B7%E0%B8%AD%E0%B8%AF%20%E0%B8%95%E0%B8%A3%E0%B8%A7%E0%B8%88%E0%B8%AA%E0%B8%AD%E0%B8%9A%E0%B8%84%E0%B8%B8%E0%B8%93%E0%B8%A0%E0%B8%B2%E0%B8%9E%E0%B8%AD%E0%B8%B2%E0%B8%81%E0%B8%B2%E0%B8%A8%E0%B8%88%E0%B8%B2%E0%B8%81%E0%B8%9B%E0%B8%A5%E0%B9%88%E0%B8%AD%E0%B8%87%E0%B8%AD%E0%B8%B1%E0%B8%95%E0%B9%82%E0%B8%99%E0%B8%A1%E0%B8%B1%E0%B8%95%E0%B8%B42544.pdf" target="_blank">
                                                ประกาศ ข้อบังคับฯ ติดตั้งเครื่องมือฯตรวจสอบคุณภาพอากาศจากปล่องอัตโนมัติ พ.ศ.2544
                                            </a>
                                        </td>
                                        <td>
                                            <div class="mt-2">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Installing_special_tools" class="form-check-input" value="yes">
                                                    <span class="form-check-label">ไม่เข้าข่าย</span>
                                                </label>
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Installing_special_tools" class="form-check-input" value="no">
                                                    <span class="form-check-label">เข้าข่าย</span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <textarea class="form-control" rows="3" placeholder="ระบุรายละเอียดเพิ่มเติม / หมายเหตุ"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            2.3 ปริมาณของสารเจือปนในอากาศที่ระบายออก
                                        </td>
                                        <td>
                                            <div class="mb-2">
                                                1. อากาศที่ระบายออกจากโรงงาน มีค่าปริมาณของสารเจือปนแต่ละชนิดไม่เกินที่กำหนดไว้&nbsp;&nbsp;
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="The_air_discharged_from" class="form-check-input" value="yes">
                                                    <span class="form-check-label">มี</span>
                                                </label>
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="The_air_discharged_from" class="form-check-input" value="no">
                                                    <span class="form-check-label">ไม่มี</span>
                                                </label>
                                            </div>
                                            <div class="mb-2">
                                                ถ้ามี กรุณาแนบผลการวิเคราะห์ของพารามิเตอร์ทุกปล่องที่มีการระบายโดยไม่ต้องแนบทุกโรงงานแนบเฉพาะที่มีการเผาไหม้เชื้อเพลิง
                                            </div>
                                            <div class="custom-file mt-1" style="max-width:280px;">
                                                <input type="file" class="custom-file-input" id="file_outflow">
                                                <label class="custom-file-label" for="file_outflow">เลือกไฟล์</label>
                                            </div>
                                            <div class="mb-2">
                                                2. กรณีที่มีการใช้สารเคมีในระบบฟอกอากาศ มีการจดบันทึกการใช้สารเคมีในการฟอกอากาศประจำวันและมีหลักฐานในการจัดหาสารเคมีดังกล่าวด้วย&nbsp;&nbsp;
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="In_cases_where_chemicals" class="form-check-input" value="yes">
                                                    <span class="form-check-label">มี</span>
                                                </label>
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="In_cases_where_chemicals" class="form-check-input" value="no">
                                                    <span class="form-check-label">ไม่มี</span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <textarea class="form-control" rows="3" placeholder="ระบุรายละเอียดเพิ่มเติม / หมายเหตุ"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            2.4 การติดตั้งเครื่องมือหรือเครื่องอุปกรณ์
                                        </td>
                                        <td>
                                            <div class="mb-2">
                                                1. มีการส่งรายงานการปลดปล่อยและเคลื่อนย้ายมลพิษ (PRTR)&nbsp;&nbsp;
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Pollution_Release_and_Transfer" class="form-check-input" value="yes">
                                                    <span class="form-check-label">มี</span>
                                                </label>
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Pollution_Release_and_Transfer" class="form-check-input" value="no">
                                                    <span class="form-check-label">ไม่มี</span>
                                                </label>
                                            </div>
                                            <div class="mb-2">
                                                2. มีการส่งรายงานปริมาณการใช้สารเคมี ลักษณะการผลิต และลักษณะการก่อให้เกิดมลพิษ
                                                (กรณี โรงงานที่ไม่มีการใช้ ผลิต ครอบครอง หรือปล่อยสารเคมีหรือสารมลพิษตามบัญชีสารเคมีหรือสารมลพิษเป้าหมาย ให้แจ้งการไม่ถือครองสารเคมีและไม่ปลดปล่อยมลพิษ)&nbsp;&nbsp;
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Reports_on_the_amount" class="form-check-input" value="yes">
                                                    <span class="form-check-label">มี</span>
                                                </label>
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Reports_on_the_amount" class="form-check-input" value="no">
                                                    <span class="form-check-label">ไม่มี</span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <textarea class="form-control" rows="3" placeholder="ระบุรายละเอียดเพิ่มเติม / หมายเหตุ"></textarea>
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td>
                                            <b>3. การจัดการมลพิษทางเสียง </b>
                                        </td>
                                        <td>
                                            <a href="https://epp-ent-dev.nidprotech.com/new_epp_entrepreneur_tester_67/application/view/self_decare/doc4selfdeclare/%E0%B8%9B%E0%B8%A3%E0%B8%B0%E0%B8%81%E0%B8%B2%E0%B8%A8%E0%B8%81%E0%B8%A3%E0%B8%B0%E0%B8%97%E0%B8%A3%E0%B8%A7%E0%B8%87%E0%B8%AD%E0%B8%B8%E0%B8%95%E0%B8%AA%E0%B8%B2%E0%B8%AB%E0%B8%81%E0%B8%A3%E0%B8%A3%E0%B8%A1%20%E0%B9%80%E0%B8%A3%E0%B8%B7%E0%B9%88%E0%B8%AD%E0%B8%87%20%E0%B8%81%E0%B8%B3%E0%B8%AB%E0%B8%99%E0%B8%94%E0%B8%84%E0%B9%88%E0%B8%B2%E0%B8%A3%E0%B8%B0%E0%B8%94%E0%B8%B1%E0%B8%9A%E0%B9%80%E0%B8%AA%E0%B8%B5%E0%B8%A2%E0%B8%87%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%A3%E0%B8%9A%E0%B8%81%E0%B8%A7%E0%B8%99%E0%B9%81%E0%B8%A5%E0%B8%B0%E0%B8%A3%E0%B8%B0%E0%B8%94%E0%B8%B1%E0%B8%9A%E0%B9%80%E0%B8%AA%E0%B8%B5%E0%B8%A2%E0%B8%87%E0%B8%97%E0%B8%B5%E0%B9%88%E0%B9%80%E0%B8%81%E0%B8%B4%E0%B8%94%E0%B8%88%E0%B8%B2%E0%B8%81%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%9B%E0%B8%A3%E0%B8%B0%E0%B8%81%E0%B8%AD%E0%B8%9A%E0%B8%81%E0%B8%B4%E0%B8%88%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B9%82%E0%B8%A3%E0%B8%87%E0%B8%87%E0%B8%B2%E0%B8%99%20%E0%B8%9E.%E0%B8%A8.%202548.pdf" target="_blank">
                                                ประกาศกระทรวงอุตสาหกรรม เรื่อง กำหนดค่าระดับเสียงการรบกวนและระดับเสียงที่เกิดจากการประกอบกิจการโรงงาน พ.ศ. 2548
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="mt-2">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Measurement_report" class="form-check-input" value="yes">
                                                    <span class="form-check-label">ไม่มีรายงานการตรวจวัด</span>
                                                </label>
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Measurement_report" class="form-check-input" value="no">
                                                    <span class="form-check-label">มีรายงานการตรวจวัด</span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mb-2">
                                                1. รายงานการตรวจวัด&nbsp;&nbsp;
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="The_air_discharged_from" class="form-check-input" value="yes">
                                                    <span class="form-check-label">มี</span>
                                                </label>
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="The_air_discharged_from" class="form-check-input" value="no">
                                                    <span class="form-check-label">ไม่มี</span>
                                                </label>
                                            </div>
                                            <div class="mb-2">
                                                ถ้ามี กรุณาแนบผลการวิเคราะห์ของพารามิเตอร์ทุกปล่องที่มีการระบายโดยไม่ต้องแนบทุกโรงงานแนบเฉพาะที่มีการเผาไหม้เชื้อเพลิง
                                            </div>
                                            <div class="custom-file mt-1" style="max-width:280px;">
                                                <input type="file" class="custom-file-input" id="file_outflow">
                                                <label class="custom-file-label" for="file_outflow">เลือกไฟล์</label>
                                            </div>
                                            <div class="mb-2">
                                                2. เงื่อนไขกำหนดค่าระดับเสียง&nbsp;&nbsp;
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Sound_level_setting_conditions" class="form-check-input" value="yes">
                                                    <span class="form-check-label">ไม่มีเงื่อนไขกำหนดค่าระดับเสียง</span>
                                                </label>
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Sound_level_setting_conditions" class="form-check-input" value="no">
                                                    <span class="form-check-label">มีเงื่อนไขกำหนดค่าระดับเสียง</span>
                                                </label>
                                            </div>
                                            <div class="mb-2">
                                                3. ผลการตรวจวัดค่าระดับเสียง&nbsp;&nbsp;
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Sound_level_measurement_results" class="form-check-input" value="yes">
                                                    <span class="form-check-label">ผลการตรวจวัดค่าเป็นไปตามเกณฑ์มาตรฐาน </span>
                                                </label>
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Sound_level_measurement_results" class="form-check-input" value="no">
                                                    <span class="form-check-label">ผลการตรวจวัดค่าไม่เป็นไปตามเกณฑ์มาตรฐาน</span>
                                                </label>
                                            </div>
                                            <div class="mb-2">
                                                เอกสารผลการตรวจวัดค่าระดับเสียง&nbsp;&nbsp;
                                            </div>
                                            <div class="custom-file mt-1" style="max-width:280px;">
                                                <input type="file" class="custom-file-input" id="file_outflow">
                                                <label class="custom-file-label" for="file_outflow">เลือกไฟล์</label>
                                            </div>
                                        </td>
                                        <td>
                                            <textarea class="form-control" rows="3" placeholder="ระบุรายละเอียดเพิ่มเติม / หมายเหตุ"></textarea>
                                        </td>
                                    </tr>
                                </tbody>

                                <tbody>
                                    <tr>
                                        <td>
                                            <b>4. การจัดการการปนเปื้อนในดินและน้ำใต้ดิน </b>
                                        </td>
                                        <td>
                                            <a href="https://epp-ent-dev.nidprotech.com/new_epp_entrepreneur_tester_67/application/view/self_decare/doc4selfdeclare/%E0%B8%84%E0%B8%A7%E0%B8%9A%E0%B8%84%E0%B8%B8%E0%B8%A1%E0%B8%99%E0%B9%89%E0%B8%B3%E0%B9%83%E0%B8%95%E0%B9%89%E0%B8%94%E0%B8%B4%E0%B8%992559.pdf" target="_blank">
                                                ประกาศควบคุมการปนเปื้อนในดินและน้ำใต้ดินภายในบริเวณโรงงาน
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="mt-2">
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Management_of_soil" class="form-check-input" value="yes">
                                                    <span class="form-check-label">ไม่เข้าข่าย</span>
                                                </label>
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Management_of_soil" class="form-check-input" value="no">
                                                    <span class="form-check-label">เข้าข่าย</span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mb-2">
                                                1. การตรวจสอบคุณภาพดินและน้ำใต้ดิน&nbsp;&nbsp;
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Soil_and_groundwater" class="form-check-input" value="yes">
                                                    <span class="form-check-label">ดำเนินการแล้ว</span>
                                                </label>
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Soil_and_groundwater" class="form-check-input" value="no">
                                                    <span class="form-check-label">ยังไม่ได้ดำเนินการ/อยู่ระหว่างดำเนินการ</span>
                                                </label>
                                            </div>
                                            <div class="mb-2">
                                                2. การตรวจกำกับ การแจ้งข้อมูลสารเคมี จุดเก็บตัวอย่าง และบ่อสังเกตการณ์&nbsp;&nbsp;
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Chemical_monitoring" class="form-check-input" value="yes">
                                                    <span class="form-check-label">ดำเนินการแล้ว</span>
                                                </label>
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Chemical_monitoring" class="form-check-input" value="no">
                                                    <span class="form-check-label">ยังไม่ได้ดำเนินการ/อยู่ระหว่างดำเนินการ</span>
                                                </label>
                                            </div>
                                            <div class="mb-2">
                                                3. การจัดทำผลการตรวจวัดคุณภาพดินและน้ำใต้ดิน การตรวจสอบคุณภาพดิน (180 วัน นับจากการแจ้งเริ่มและติดตามตรวจสอบทุก 3 ปี)&nbsp;&nbsp;
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Preparation_of_soil_and_groundwater" class="form-check-input" value="yes">
                                                    <span class="form-check-label">ดำเนินการแล้ว </span>
                                                </label>
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Preparation_of_soil_and_groundwater" class="form-check-input" value="no">
                                                    <span class="form-check-label">ยังไม่ได้ดำเนินการ/อยู่ระหว่างดำเนินการ</span>
                                                </label>
                                            </div>
                                            <div class="mb-2">
                                                4. การจัดทำผลการตรวจวัดคุณภาพดินและน้ำใต้ดิน การตรวจสอบคุณภาพน้ำใต้ดิน (180 วัน นับจากการแจ้งเริ่มและติดตามตรวจสอบทุก 1 ปี)&nbsp;&nbsp;
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="measurement_results" class="form-check-input" value="yes">
                                                    <span class="form-check-label">ดำเนินการแล้ว </span>
                                                </label>
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="measurement_results" class="form-check-input" value="no">
                                                    <span class="form-check-label">ยังไม่ได้ดำเนินการ/อยู่ระหว่างดำเนินการ</span>
                                                </label>
                                            </div>
                                            <div class="mb-2">
                                                5. ผลการตรวจวัด&nbsp;&nbsp;
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Measurement_resultsss" class="form-check-input" value="yes">
                                                    <span class="form-check-label">ไม่เกินเกณฑ์ </span>
                                                </label>
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Measurement_resultsss" class="form-check-input" value="no">
                                                    <span class="form-check-label">เกินเกณฑ์</span>
                                                </label>
                                            </div>
                                            <div class="mb-2">
                                                6. กรณีผลการตรวจวัดสูงกว่าเกณฑ์ปนเปื้อนในดินและน้ำใต้ดิน บริษัทมีการจัดทำมาตรฐานเพื่อแก้ไขหรือไม่&nbsp;&nbsp;
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="measurement_results_are_higher" class="form-check-input" value="yes">
                                                    <span class="form-check-label">มี</span>
                                                </label>
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="measurement_results_are_higher" class="form-check-input" value="no">
                                                    <span class="form-check-label">ไม่มี</span>
                                                </label>
                                            </div>
                                            <div class="mb-2">
                                                7. กรณีที่ปรากฏตามรายงานว่าการปนเปื้อนในดินและน้ำใต้ดินสูงกว่าเกณฑ์การปนเปื้อน มีการเสนอรายงานมาตรการควบคุมหรือลดการปนเปื้อน&nbsp;&nbsp;
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="groundwater_contamination_is_higher" class="form-check-input" value="yes">
                                                    <span class="form-check-label">มี</span>
                                                </label>
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="groundwater_contamination_is_higher" class="form-check-input" value="no">
                                                    <span class="form-check-label">ไม่มี</span>
                                                </label>
                                            </div>
                                            <div class="mb-2">
                                                8. อยู่ระหว่างจัดทำรายงานเสนอมาตรการควบคุมหรือมาตรการลดการปนเปื้อนซึ่งยังไม่ครบกำหนด 180 วัน หรือ จัดส่งรายงานฯ แล้วรอการเห็นชอบจากเจ้าหน้าที่&nbsp;&nbsp;
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="submitting_the_report_and_awaiting" class="form-check-input" value="yes">
                                                    <span class="form-check-label">อยู่</span>
                                                </label>
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="submitting_the_report_and_awaiting" class="form-check-input" value="no">
                                                    <span class="form-check-label">ไม่อยู่</span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <textarea class="form-control" rows="3" placeholder="ระบุรายละเอียดเพิ่มเติม / หมายเหตุ"></textarea>
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td>
                                            <b>5. การรายงานข้อมูลมลพิษ (น้ำ อากาศ สารอินทรีย์ระเหย) </b>
                                        </td>
                                        <td>
                                            <div class="mb-2">
                                                การจัดส่งรายงานผลการวิเคราะห์ปริมาณสารมลพิษ
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>ประเภทการรายงานที่ต้องรายงาน</th>
                                                        <th class="text-center">ไม่เข้าข่าย</th>
                                                        <th class="text-center">เข้าข่ายโดยรายงานแล้ว</th>
                                                        <th class="text-center">เข้าข่ายแต่ยังไม่ได้รายงาน</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>รอ.1 (แบบรายงานข้อมูลทั่วไป)</td>
                                                        <td class="text-center"><input type="radio" name="r1" /></td>
                                                        <td class="text-center"><input type="radio" name="r1" /></td>
                                                        <td class="text-center"><input type="radio" name="r1" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td>รอ.2 (แบบรายงานแผลผันน้ำ)</td>
                                                        <td class="text-center"><input type="radio" name="r2" /></td>
                                                        <td class="text-center"><input type="radio" name="r2" /></td>
                                                        <td class="text-center"><input type="radio" name="r2" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td>รอ.3 (แบบรายงานแผลพัชชาภาค)</td>
                                                        <td class="text-center"><input type="radio" name="r3" /></td>
                                                        <td class="text-center"><input type="radio" name="r3" /></td>
                                                        <td class="text-center"><input type="radio" name="r3" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td>รอ.3/1 (แบบรายงานฯ สารอินทรีย์ระเหย)</td>
                                                        <td class="text-center"><input type="radio" name="r31" /></td>
                                                        <td class="text-center"><input type="radio" name="r31" /></td>
                                                        <td class="text-center"><input type="radio" name="r31" /></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="mb-2"></div>
                                            <div class="mb-2">
                                                หมายเหตุ: รอบการส่งรายงานของแต่ละปี รอบที่ 1 ภายใน 31 ก.ค. และ รอบที่ 2 ภายใน 31 ม.ค. ของปีถัดไป
                                            </div>
                                        </td>
                                        <td>
                                            <textarea class="form-control" rows="3" placeholder="ระบุรายละเอียดเพิ่มเติม / หมายเหตุ"></textarea>
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td>
                                            <b>6. บุคลากรด้านสิ่งแวดล้อม</b>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="mb-2">
                                                1. เข้าข่ายต้องมีบุคลากรด้านสิ่งแวดล้อมหรือไม่&nbsp;&nbsp;
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="necessary_to_have_environmental" class="form-check-input" value="yes">
                                                    <span class="form-check-label">ไม่เข้าข่ายต้องมีบุคลากรด้านสิ่งแวดล้อม</span>
                                                </label>
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="necessary_to_have_environmental" class="form-check-input" value="no">
                                                    <span class="form-check-label">เข้าข่ายต้องมีบุคลากรด้านสิ่งแวดล้อม</span>
                                                </label>
                                            </div>
                                            <div class="mb-2">
                                                กรณีเข้าข่ายต้องมีบุคลากรด้านสิ่งแวดล้อม ได้แจ้งการมีบุคลากรด้านสิ่งแวดล้อมประจำโรงงานด้านใดบ้าง&nbsp;&nbsp;
                                                <div class="mt-2">
                                                    <label class="form-check form-check-inline">
                                                        <input type="checkbox" name="env_person[]" class="form-check-input" value="water">
                                                        <span class="form-check-label">ทางด้านน้ำ</span>
                                                    </label>
                                                    <label class="form-check form-check-inline">
                                                        <input type="checkbox" name="env_person[]" class="form-check-input" value="air">
                                                        <span class="form-check-label">ทางด้านอากาศ</span>
                                                    </label>
                                                    <label class="form-check form-check-inline">
                                                        <input type="checkbox" name="env_person[]" class="form-check-input" value="waste">
                                                        <span class="form-check-label">ทางด้านกากอุตสาหกรรม</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="mb-2">
                                                2. จำนวนบุคลากร&nbsp;&nbsp;
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Number_of_personnel" class="form-check-input" value="yes">
                                                    <span class="form-check-label">มีบุคลากรครบถ้วน</span>
                                                </label>
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Number_of_personnel" class="form-check-input" value="no">
                                                    <span class="form-check-label">มีบุคลากรไม่ครบถ้วน </span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <textarea class="form-control" rows="3" placeholder="ระบุรายละเอียดเพิ่มเติม / หมายเหตุ"></textarea>
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td>
                                            <b>7. การจัดการกากอุตสาหกรรม</b>
                                        </td>
                                        <td>
                                            <a href="https://epp-ent-dev.nidprotech.com/new_epp_entrepreneur_tester_67/application/view/self_decare/doc4selfdeclare/%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%81%E0%B8%B3%E0%B8%88%E0%B8%B1%E0%B8%94%E0%B8%AA%E0%B8%B4%E0%B9%88%E0%B8%87%E0%B8%9B%E0%B8%8F%E0%B8%B4%E0%B8%81%E0%B8%B9%E0%B8%A5%E0%B8%AB%E0%B8%A3%E0%B8%B7%E0%B8%AD%E0%B8%A7%E0%B8%B1%E0%B8%AA%E0%B8%94%E0%B8%B8%E0%B8%97%E0%B8%B5%E0%B9%88%E0%B9%84%E0%B8%A1%E0%B9%88%E0%B9%83%E0%B8%8A%E0%B9%89%E0%B9%81%E0%B8%A5%E0%B9%89%E0%B8%A7%20%E0%B8%9E.%E0%B8%A8.%202548.pdf" target="_blank">
                                                ประกาศ การกำจัดสิ่งปฏิกูลหรือวัสดุที่ไม่ใช้แล้ว
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="mb-2">
                                                การจัดการสิ่งปฏิกูลหรือวัสดุที่ไม่ใช้แล้ว&nbsp;&nbsp;
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mb-2">
                                                1. มีการครอบครองสิ่งปฏิกูลหรือวัสดุที่ไม่ใช้แล้วในโรงงานเกิน 90 วัน&nbsp;&nbsp;
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="waste_or_unused_materials" class="form-check-input" value="yes">
                                                    <span class="form-check-label">มี</span>
                                                </label>
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="waste_or_unused_materials" class="form-check-input" value="no">
                                                    <span class="form-check-label">ไม่มี</span>
                                                </label>
                                            </div>
                                            <div class="mb-2">
                                                2. การขออนุญาตนำสิ่งปฏิกูลหรือวัสดุที่ไม่ใช้แล้วออกนอกบริเวณโรงงาน ตามแบบ กอ.1 กอ.2&nbsp;&nbsp;
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Requesting_permission_to_remove" class="form-check-input" value="yes">
                                                    <span class="form-check-label">ดำเนินการแล้ว</span>
                                                </label>
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Requesting_permission_to_remove" class="form-check-input" value="no">
                                                    <span class="form-check-label">ยังไม่ได้ดำเนินการ</span>
                                                </label>
                                            </div>
                                            <div class="custom-file mt-1" style="max-width:280px;">
                                                <input type="file" class="custom-file-input" id="file_outflow">
                                                <label class="custom-file-label" for="file_outflow">เลือกไฟล์</label>
                                            </div>
                                            <div class="mb-2">
                                                3. แสดงการจัดการสิ่งปฏิกูลที่ไม่ใช้แล้ว (กอ.2)&nbsp;&nbsp;
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Showing_the_management" class="form-check-input" value="yes">
                                                    <span class="form-check-label">ดำเนินการแล้ว</span>
                                                </label>
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Showing_the_management" class="form-check-input" value="no">
                                                    <span class="form-check-label">ยังไม่ได้ดำเนินการ</span>
                                                </label>
                                            </div>
                                            <div class="custom-file mt-1" style="max-width:280px;">
                                                <input type="file" class="custom-file-input" id="file_outflow">
                                                <label class="custom-file-label" for="file_outflow">เลือกไฟล์</label>
                                            </div>
                                            <div class="mb-2">
                                                4. การจัดส่งรายงานประจำปี&nbsp;&nbsp;
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Annual_report_submission" class="form-check-input" value="yes">
                                                    <span class="form-check-label">ดำเนินการแล้ว</span>
                                                </label>
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Annual_report_submission" class="form-check-input" value="no">
                                                    <span class="form-check-label">ยังไม่ได้ดำเนินการ</span>
                                                </label>
                                            </div>
                                            <div class="custom-file mt-1" style="max-width:280px;">
                                                <input type="file" class="custom-file-input" id="file_outflow">
                                                <label class="custom-file-label" for="file_outflow">เลือกไฟล์</label>
                                            </div>
                                            <div class="mb-2">
                                                5. รายงานประจำเดือน (สำหรับผู้รับดำเนินการ แนบย้อนหลัง 1 ปี)&nbsp;&nbsp;
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Monthly_report" class="form-check-input" value="yes">
                                                    <span class="form-check-label">ดำเนินการแล้ว</span>
                                                </label>
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="Monthly_report" class="form-check-input" value="no">
                                                    <span class="form-check-label">ยังไม่ได้ดำเนินการ</span>
                                                </label>
                                            </div>
                                            <div class="custom-file mt-1" style="max-width:280px;">
                                                <input type="file" class="custom-file-input" id="file_outflow">
                                                <label class="custom-file-label" for="file_outflow">เลือกไฟล์</label>
                                            </div>
                                        </td>
                                        <td>
                                            <textarea class="form-control" rows="3" placeholder="ระบุรายละเอียดเพิ่มเติม / หมายเหตุ"></textarea>
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td>
                                            <b>8. การรายงานข้อมูลการประกอบกิจการโรงงาน</b>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="mb-2">
                                                1. มีการแจ้งข้อมูลการประกอบกิจการโรงงาน รง. 8 (รายเดือน)&nbsp;&nbsp;
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="There_is_a_notification_of" class="form-check-input" value="yes">
                                                    <span class="form-check-label">มี</span>
                                                </label>
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="There_is_a_notification_of" class="form-check-input" value="no">
                                                    <span class="form-check-label">ไม่มี</span>
                                                </label>
                                            </div>
                                            <div class="mb-2">
                                                2. มีการแจ้งข้อมูลการประกอบกิจการโรงงาน รง. 9 (รายปี)&nbsp;&nbsp;
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="operations_data" class="form-check-input" value="yes">
                                                    <span class="form-check-label">มี</span>
                                                </label>
                                                <br>
                                                <label class="form-check form-check-inline">
                                                    <input type="radio" name="operations_data" class="form-check-input" value="no">
                                                    <span class="form-check-label">ไม่มี</span>
                                                </label>
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