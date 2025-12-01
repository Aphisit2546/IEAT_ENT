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
    <a href="center_ieat_ent" style="color: #6007b3ff; font-size: 18px;"><b>คำขอ NON-TAX</b></a>
    <b>&nbsp;&nbsp;/&nbsp;&nbsp;</b>
    <a href="ieat_ent_053_4" style="color: #6007b3ff; font-size: 18px;"><b>คำขอทั่วไป 17-3 (การขอเพิ่ม *ตำแหน่งกรรมการ *ให้ช่างฝีมือ ผู้ชำนาญการ)</b></a>
    <b>&nbsp;&nbsp;/&nbsp;&nbsp;</b>
    <a style="color: #000000ff; font-size: 18px;"><b>2-1-59-00001/2568</b></a>
</div>
<br />
<div class="class_header_page_02">
    <font style="color: #000000ff; font-size: 25px;"><b>คำขอ 2-1-59-00001/2568</b></font>
    &nbsp;&nbsp;
    <font style="color: #000000ff; font-size: 18px;"><b>คำขอทั่วไป 17-3 (การขอเพิ่ม *ตำแหน่งกรรมการ *ให้ช่างฝีมือ ผู้ชำนาญการ)</b></font>
</div>
<br /><br />
<div class="col-md-12">
    <div class="card">
        <div class="card-header p-4" style="text-align: center;">
            <ul class="nav nav-pills">
                <li class="nav-item"><a class="nav-link active" href="#tab1" data-toggle="tab"><span class="font_header_detail"><b>ข้อมูลทั่วไป</b></span></a></li>
                <li class="nav-item"><a class="nav-link" href="#tab2" data-toggle="tab"><span class="font_header_detail"><b>ข้อมูลเกี่ยวกับการขออนุญาต</b></span></a></li>
                <li class="nav-item"><a class="nav-link" href="#tab3" data-toggle="tab"><span class="font_header_detail"><b>แนบเอกสารที่เกี่ยวข้อง</b></span></a></li>
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
                            <span class="font_header"><b>ข้อมูลผู้ประกอบการ</b></span>
                        </div>
                        <div class="table-responsive div_header p-4">
                            <table class="table table-lg">
                                <tbody>
                                    <tr>
                                        <td class="table-detail-left col-xs-4 col-sm-4 col-md-4 col-lg-4">ชื่อผู้ประกอบการ (ภาษาไทย)</td>
                                        <td class="table-detail-right col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                            <div class="initial-form">บริษัท ทดสอบ จำกัด<?php echo $_SESSION['companyname_th_view']; ?></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left col-xs-4 col-sm-4 col-md-4 col-lg-4">ชื่อผู้ประกอบการ (ภาษาอังกฤษ)</td>
                                        <td class="table-detail-right col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                            <div class="initial-form">Tester Company<?php echo $_SESSION['companyname_en_view']; ?></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left col-xs-4 col-sm-4 col-md-4 col-lg-4">ทะเบียนนิติบุคคล</td>
                                        <td class="table-detail-right col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                            <div class="initial-form">0109999999999<?php echo $_SESSION['tax_id_view']; ?></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left col-xs-4 col-sm-4 col-md-4 col-lg-4">สำนักงานใหญ่ตั้งอยู่ที่</td>
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
                                        <td class="table-detail-left col-xs-4 col-sm-4 col-md-4 col-lg-4">โทรศัพท์</td>
                                        <td class="table-detail-right col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                            <div class="initial-form">
                                                02-3456789<?php echo $_SESSION['tel_office_view']; ?>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left col-xs-4 col-sm-4 col-md-4 col-lg-4">โทรสาร</td>
                                        <td class="table-detail-right col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                            <div class="initial-form">
                                                02-3456789<?php echo $_SESSION['fax_office_view']; ?>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left col-xs-4 col-sm-4 col-md-4 col-lg-4">อีเมล์</td>
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
                                        <td class="table-detail-left col-xs-4 col-sm-4 col-md-4 col-lg-4">ทะเบียนผู้ประกอบอุตสาหกรรม</td>
                                        <td class="table-detail-right col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                            <div class="initial-form">
                                                น.72-999/2568-นอส.
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left col-xs-4 col-sm-4 col-md-4 col-lg-4">ประเภทหรือชนิดของโรงงาน</td>
                                        <td class="table-detail-right col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                            <div class="initial-form">
                                                72
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
                            <span class="font_header"><b>สถานภาพตำแหน่งคนต่างด้าว</b></span>
                        </div>
                        <div class="table-responsive div_header p-4">
                            <table class="table" id="datatable01">
                                <thead>
                                    <tr>
                                        <th class="table-head-tab" style="text-align: center; vertical-align: top;"><span class="font_header_detail"><b>ลำดับ</b></span></th>
                                        <th class="table-head-tab" style="text-align: center; vertical-align: top;"><span class="font_header_detail"><b>ชื่อตำแหน่ง</b></span></th>
                                        <th class="table-head-tab" style="text-align: center; vertical-align: top;"><span class="font_header_detail"><b>ชื่อ-นามสกุล ช่างฝีมือ</b></span></th>
                                        <th class="table-head-tab" style="text-align: center; vertical-align: top;"><span class="font_header_detail"><b>อนุมัติถึง</b></span></th>
                                        <th class="table-head-tab" style="text-align: center; vertical-align: top;"><span class="font_header_detail"><b>ดูรายละเอียดเพิ่มเติม</b></span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td align="center">
                                            1.
                                        </td>
                                        <td align="center">
                                            Dev
                                        </td>
                                        <td align="center">
                                            สมคิด ใจดี
                                        </td>
                                        <td align="center">
                                            01/01/2025
                                        </td>
                                        <td align="center">
                                            -
                                        </td>
                                        <td align="center">
                                            <?php echo $data_result_land['LANDAMOUNT_M']; ?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card p-4">
                        <div class="card-header">
                            <span class="font_header"><b>สถานภาพครอบครัวคนต่างด้าว</b></span>
                        </div>
                        <div class="table-responsive div_header p-4">
                            <table class="table" id="datatable01">
                                <thead>
                                    <tr>
                                        <th class="table-head-tab" style="text-align: center; vertical-align: top;"><span class="font_header_detail"><b>ลำดับ</b></span></th>
                                        <th class="table-head-tab" style="text-align: center; vertical-align: top;"><span class="font_header_detail"><b>ชื่อ-นามสกุล ช่างฝีมือ</b></span></th>
                                        <th class="table-head-tab" style="text-align: center; vertical-align: top;"><span class="font_header_detail"><b>ความสัมพันธ์</b></span></th>
                                        <th class="table-head-tab" style="text-align: center; vertical-align: top;"><span class="font_header_detail"><b>ชื่อ-นามสกุล ช่างฝีมือ</b></span></th>
                                        <th class="table-head-tab" style="text-align: center; vertical-align: top;"><span class="font_header_detail"><b>อนุมัติถึง</b></span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td align="center">
                                            1.
                                        </td>
                                        <td align="center">
                                            สมคิด ใจดี
                                        </td>
                                        <td align="center">
                                            บิดา
                                        </td>
                                        <td align="center">
                                            สมคิด ใจดี
                                        </td>
                                        <td align="center">
                                            01/01/2025
                                        </td>
                                        <td align="center">
                                            <?php echo $data_result_land['LANDAMOUNT_M']; ?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card p-4">
                        <div class="card p-4">
                            <div class="row">
                                <div class="col-3" align="left">
                                    &nbsp;
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
                                <div class="col-3" align="left">
                                    &nbsp;
                                </div>
                            </div>
                            <br />
                        </div>
                    </div>

                </div>

                <div class="tab-pane" id="tab2">
                    <div class="card p-4">
                        <div class="table-responsive div_header px-4 pb-4">
                            <br>
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td>ขอรับบริการวีซ่าที่</td>
                                        <td class="text-center align-middle">
                                            <select class="form-control" name="foreign_nationality[]">
                                                <option value="">-- เลือก --</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>ขอรับบริการเกี่ยวกับใบอนุญาตทำงานที่</td>
                                        <td class="text-center align-middle">
                                            <select class="form-control" name="foreign_nationality[]">
                                                <option value="">-- เลือก --</option>
                                            </select>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card p-4">
                        <div class="card-header">
                            <span class="font_header"><b>เลือกรายการ การเพิ่มตำแหน่งกรรมการ</b></span>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <select class="form-control">
                                <option value="0">-- เลือก --</option>
                            </select>
                        </div>
                        <div class="card-header">
                            <span class="font_header"><b>เลือกรายการของช่างที่ต้องการเพิ่มตำแหน่ง</b></span>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <select class="form-control">
                                <option value="0">-- เลือก --</option>
                            </select>
                        </div>
                        <div class="table-responsive div_header px-4 pb-4">
                            <br>
                            <table class="table table-bordered" style="font-size:14px;">
                                <thead style="text-align:center;">
                                    <tr>
                                        <th style="vertical-align:top;">คำนำหน้า</th>
                                        <th style="vertical-align:top;">ชื่อตัว–ชื่อรอง–ชื่อสกุล<br>บุคคลต่างด้าวในตำแหน่งที่ขอบรรจุ</th>
                                        <th style="vertical-align:top;">เลขที่<br>หนังสือเดินทาง</th>
                                        <th style="vertical-align:top;">สัญชาติ</th>
                                        <th style="vertical-align:top;">วัน/เดือน/ปีเกิด</th>
                                        <th style="vertical-align:top;">วุฒิการศึกษา</th>
                                        <th style="vertical-align:top;">ตำแหน่ง</th>
                                        <th style="vertical-align:top;">ขอบเขตงานที่รับผิดชอบ</th>
                                        <th style="vertical-align:top;">อนุญาตสิ้นสุดวันที่</th>
                                        <th style="vertical-align:top;">เหตุผล</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr style="text-align:center;">
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-header">
                            <span class="font_header" style="color:#a10ddb;">
                                <b>กรอกรายละเอียดข้อมูล</b>
                            </span>
                        </div>
                        <div class="table-responsive div_header px-4 pb-4">
                            <br>
                            <table class="table table-bordered" style="font-size:14px;">
                                <thead style="text-align:center;">
                                    <tr>
                                        <th style="vertical-align:top;">เลขที่หนังสือเดินทาง</th>
                                        <th style="vertical-align:top;">เลขที่หนังสือรับรอง</th>
                                        <th style="vertical-align:top;">เลขที่หนังสือรับรองออกให้ ณ วันที่<br>** วัน/เดือน/ปี พ.ศ.<br>** Ex. 01/01/2560</th>
                                        <th style="vertical-align:top;">สำนักงานทะเบียนหุ้นส่วนบริษัท</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr style="text-align:center;">
                                        <td>
                                            <input type="text" class="form-control" name="thai_share_value" value="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="thai_share_value" value="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="thai_share_value" value="">
                                        </td>
                                        <td class="text-center align-middle">
                                            <select class="form-control" name="foreign_nationality[]">
                                                <option value="">-- เลือก --</option>
                                            </select>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <br>
                        <div class="table-responsive div_header px-4 pb-4">
                            <br>
                            <table class="table table-bordered" style="font-size:14px;">
                                <thead style="text-align:center;">
                                    <tr>
                                        <th style="vertical-align:top;">นิคมอุตสาหกรรม</th>
                                        <th style="vertical-align:top;">ชื่อบริษัทที่ต้องการเพิ่มตำแหน่ง</th>
                                        <th style="vertical-align:top;">เลขที่ตั้งโรงงาน<br>ที่ต้องการเพิ่มตำแหน่ง</th>
                                        <th style="vertical-align:top;">ชื่อตำแหน่งที่ขอเพิ่ม</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr style="text-align:center;">
                                        <td class="text-center align-middle">
                                            <select class="form-control" name="foreign_nationality[]">
                                                <option value="">-- เลือก --</option>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="thai_share_value" value="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="thai_share_value" value="">
                                        </td>
                                        <td>กรรมการ</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card p-4">
                        <div class="card-header">
                            <span class="font_header"><b>ขอบเขตงานที่รับผิดชอบ</b></span>
                        </div>
                        <div class="table-responsive div_header px-4 pb-4">
                            <br>
                            <td>
                                <textarea class="form-control" rows="5"></textarea>
                        </div>
                    </div>

                    <div class="card p-4">
                        <div class="card-header">
                            <span class="font_header_detail" style="color:red;">
                                <b>*** ตัวอย่างการกรอก เลขที่ตั้งโรงงานที่ต้องการเพิ่มตำแหน่ง เช่น</b>
                                <br>
                                <span>เลขที่ตั้งโรงงาน 1 หมู่ที่ 1 นิคมฯ เกตเวย์ซิตี้ ซอย - ถนน -
                                    ตำบล หัวสำโรง อำเภอ แปลงยาว จังหวัด ฉะเชิงเทรา รหัสไปรษณีย์ 24190***</span>
                                <br></br>
                                <b>*** กรณีอนุญาตให้คนต่างด้าวไปปฏิบัติงานเพิ่มเติมที่บริษัทในเครือเดียวกัน***</b>
                                <br>
                                <span>บริษัทหรือห้างหุ้นส่วนนิติบุคคลในเครือเดียวกันหมายความว่า บริษัทหรือห้างหุ้นส่วนนิติบุคคลตั้งแต่สองนิติบุคคลขึ้นไป
                                    ซึ่งมีความสัมพันธ์กันในลักษณะดังต่อไปนี้</span>
                                <br>
                                <span>1. ในแต่ละนิติบุคคลมีผู้ถือหุ้นเหมือนกันเกินกว่าร้อยละห้าสิบ ของผู้ถือหุ้นทั้งหมด</span>
                                <br>
                                <span>2. ผู้ถือหุ้นถือหุ้นมีมูลค่าเกินกว่าร้อยละห้าสิบของทุนทั้งหมดในแต่ละนิติบุคคล</span>
                                <br>
                                <span>3. นิติบุคคลหนึ่งถือหุ้นหรือเป็นหุ้นส่วนในอีกนิติบุคคลหนึ่งเกินกว่าร้อยละห้าสิบของทุนทั้งหมด</span>
                                <br>
                                <span>4. บุคคลเกินกว่ากึ่งจำนวนกรรมการหรือผู้เป็นหุ้นส่วนซึ่งมีอำนาจจัดการในนิติบุคคลหนึ่งเป็นกรรมการ หรือเป็นผู้เป็นหุ้นส่วนซึ่งมีอำนาจจัดการในอีกนิติบุคคล</span>
                            </span>
                        </div>
                    </div>

                    <div class="card p-4">
                        <div class="card-header">
                            <span class="font_header"><b>หมายเหตุ</b></span>
                        </div>
                        <div class="table-responsive div_header px-4 pb-4">
                            <br>
                            <td>
                                <textarea class="form-control" rows="5"></textarea>
                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="tab3">
                    <div class="card p-4">
                        <div class="card-header">
                            <span class="font_header"><b>แนบเอกสารที่เกี่ยวข้อง</b></span>
                        </div>
                        <div class="table-responsive div_header p-4">
                            <div class="card-header">
                                <span class="font_header_detail"><b>รายการแนบเอกสารประกอบคำขอฯ ที่ต้องส่งให้เจ้าหน้าที่พิจารณา <font color="red">* เอกสารทั้งหมดต้องลงนาม พร้อมรับรองสําเนาถูกต้อง โดยผู้มีอํานาจลงนาม</font></b></span>
                            </div>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="table-detail-left radio-header" width="70%">1. สำเนาหนังสือรับรองนิติบุคคล (นิติบุคคลเดิมและนิติบุคคลที่ขอเพิ่ม)</td>
                                        <td width="30%">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">อัพโหลดไฟล์ข้อมูล</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left radio-header">2. สำเนาบัญชีรายชื่อผู้ถือหุ้น (นิติบุคคลเดิมและนิติบุคคลที่ขอเพิ่ม)</td>
                                        <td>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">อัพโหลดไฟล์ข้อมูล</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left radio-header">3. สำเนาหนังสือเดินทางของช่างฝีมือ ผู้ชำนาญการ</td>
                                        <td>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">อัพโหลดไฟล์ข้อมูล</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left radio-header" width="70%">4. สำเนาใบอนุญาตทำงานของช่างฝีมือ ผู้ชำนาญการ</td>
                                        <td width="30%">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">อัพโหลดไฟล์ข้อมูล</label>
                                            </div>
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
        </div>
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