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
    <font style="color: #6007b3ff; font-size: 18px;"><b>แผงควบคุมหลัก</b></font>
    <b>&nbsp;&nbsp;/&nbsp;&nbsp;</b>
    <font style="color: #6007b3ff; font-size: 18px;"><b>คำขอใช้ที่ดิน</b></font>
    <b>&nbsp;&nbsp;/&nbsp;&nbsp;</b>
    <font style="color: #6007b3ff; font-size: 18px;"><b>กนอ. 01/3 (โอนสิทธิ)</b></font>
    <b>&nbsp;&nbsp;/&nbsp;&nbsp;</b>
    <font style="color: #000000ff; font-size: 18px;"><b>1-01-1-103-00001-2568</b></font>
</div>
<br />
<div class="class_header_page_02">

    <div class="row row-form">
        <div class="col-lg-4">
            <font style="color: #000000ff; font-size: 25px;"><b>คำขอ 1-01-1-103-00001-2568</b></font>
            &nbsp;&nbsp;
            <font style="color: #000000ff; font-size: 18px;"><b>(กนอ. 01/3 โอนสิทธิ)</b></font>
            &nbsp;&nbsp;
        </div>
        <div class="col-lg-2">
            <div class="div_header_focus p-2">
                <center><span class="font_header_office_focus"><b>ตรวจสอบ</b></span></center>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="div_header_focus p-2">
                <center><span class="font_header_office_focus"><b>ร่างเอกสาร</b></span></center>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="div_header_focus p-2">
                <center><span class="font_header_office_focus"><b>พิจารณา</b></span></center>
            </div>
        </div>
    </div>

</div>
<br /><br />
<div class="col-md-12">
    <div class="card">
        <div class="card-header p-4" style="text-align: center;">
            <ul class="nav nav-pills">
                <li class="nav-item"><a class="nav-link active" href="#tab1" data-toggle="tab"><span class="font_header_detail"><b>ข้อมูลทั่วไป</b></span></a></li>
                <li class="nav-item"><a class="nav-link" href="#tab2" data-toggle="tab"><span class="font_header_detail"><b>ข้อมูลเกี่ยวกับการขออนุญาต</b></span></a></li>
                <li class="nav-item"><a class="nav-link" href="#tab3" data-toggle="tab"><span class="font_header_detail"><b>เอกสารประกอบการขออนุญาต</b></span></a></li>
                <li class="nav-item"><a class="nav-link" href="#tab9" data-toggle="tab"><span class="font_header_office_alert"><b>
                                <font color='red'>*</font>พิจารณา<font color='red'>*</font>
                            </b></span></a></li>
            </ul>
        </div><!-- /.card-header -->

        <div class="card-body">
            <div class="tab-content">
                <div class="tab-pane" id="tab9">
                    <div class="row row-form">
                        <div class="col-lg-6">
                            <div class="div_header p-2" style="text-align: center;">
                                <div class="card-header">
                                    <span class="font_header"><b>ร่างใบอนุญาต</b></span>
                                </div>
                                <embed src="Upload/doc01_001/011.pdf" width="800px" height="800px" />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="div_header p-2" style="text-align: center;">
                                <div class="card-header">
                                    <span class="font_header"><b>ร่างใบแจ้งผู้ประกอบการ</b></span>
                                </div>
                                <embed src="Upload/doc01_001/011_notice.pdf" width="800px" height="800px" />
                            </div>
                        </div>
                    </div>
                    <br />
                    <div class="card p-4">
                        <div class="row">
                            <div class="col-6" align="center">
                                <div class="table-responsive div_header p-4">
                                    <div class="card-header">
                                        <span class="font_header"><b>รายละเอียดการชำระเงิน</b></span>
                                    </div>
                                    <table class="table table-lg">
                                        <tbody>
                                            <tr>
                                                <td class="table-detail-left col-lg-6"><span class="font_header_detail">รายการ</span></td>
                                                <td class="table-detail-left col-lg-4"><span class="font_header_detail">จำนวนเงิน</span></td>
                                                <td class="table-detail-left col-lg-2">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td class="table-detail-left col-lg-6"><span class="font_header_detail">ค่าบริการในการออกใบอนุญาตฯ</span> <span class="font_header_detail_red">** ไม่รวม VAT **</span></td>
                                                <td class="table-detail-left col-lg-4"><span class="font_header_detail">10,000.00</span></td>
                                                <td class="table-detail-left col-lg-2"><span class="font_header_detail">บาท</span></td>
                                            </tr>
                                            <tr>
                                                <td class="table-detail-left col-lg-6"><span class="font_header_detail">ค่าบริการใช้ระบบ</span> <span class="font_header_detail_red">** ไม่รวม VAT **</span></td>
                                                <td class="table-detail-left col-lg-4"><span class="font_header_detail">200</span></td>
                                                <td class="table-detail-left col-lg-2"><span class="font_header_detail">บาท</span></td>
                                            </tr>
                                            <tr>
                                                <td class="table-detail-left col-lg-6"><span class="font_header_detail">รวม</span> <span class="font_header_detail_red">** ไม่รวม VAT **</span></td>
                                                <td class="table-detail-left col-lg-4"><span class="font_header_detail">10,200</span></td>
                                                <td class="table-detail-left col-lg-2"><span class="font_header_detail">บาท</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-6" align="center">
                                <div class="table-responsive div_header p-4">
                                    <div class="card-header">
                                        <span class="font_header"><b>ข้อมูลไฟล์ประกอบการอนุมัติอนุญาต</b></span>
                                    </div>
                                    <table class="table table-lg">
                                        <tbody>
                                            <tr>
                                                <td class="table-detail-left col-lg-6"><span class="font_header_detail">เอกสารประกอบการพิจารณา</span></td>
                                                <td class="table-detail-left col-lg-6"><span class="font_header_detail"><a href="#">ไฟล์เอกสาร</a></span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br />
                    <div class="row">
                        <div class="col-lg-2">
                            <input class='btn btn-danger btn-lg btn-block' name="cancel" type="button" id="cancel" value="กลับสู่หน้าหลัก" onclick="window.location='center_ieat_ent/page_office'" />
                        </div>
                        <div class="col-lg-3">
                            &nbsp;
                        </div>
                        <div class="col-lg-7">
                            <div class="row">
                                <div class="col-lg-5">
                                    <input class='btn btn-secondary btn-lg btn-block' name="Submit_return" type="button" id="Submit" value="ไม่ผ่านการพิจารณา (ตีคืนเอกสาร)" onclick="return confirm('ไม่ผ่านการพิจารณา(ตีคืนเอกสาร) !!!')" onclick="window.location='center_ieat_ent/page_office'" />
                                </div>
                                <div class="col-lg-3">
                                    <input class='btn btn-success btn-lg btn-block' name="Submit_continue" type="button" id="Submit" value="บันทึกการพิจารณา" onclick="return confirm('บันทึกการพิจารณา !!!')" onclick="window.location='center_ieat_ent/page_office'" />
                                </div>
                                <div class="col-lg-4">
                                    <input class='btn btn-primary btn-lg btn-block' name="Submit_approve" type="button" id="Submit" value="พิจารณาอนุมัติอนุญาต" onclick="window.location='ieat_office_013_1/otp'" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

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
                                            <?php echo $data_result_land['LANDAMOUNT_M']; ?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card p-4">
                        <div class="row">
                            <div class="col-1" align="left">
                                &nbsp;
                            </div>
                            <div class="col-5" align="left">
                                <div class="table-responsive div_header p-4">
                                    <div class="card-header">
                                        <span class="font_header"><b>ข้อมูลที่อยู่สำหรับออกใบกำกับภาษี</b></span>
                                    </div>
                                    <br />
                                    <div class="row row-form">
                                        <div class="col-lg-12">
                                            <div class="col-lg-12">
                                                บริษัท ทดสอบ จำกัด เลขประจำตัวผู้เสียภาษี 0109999999999
                                                <br />
                                                เลขที่ 9999 หมู่ที่ 9999 ซอย - ถนน - ตำบล คลองสวน อำเภอ บางบ่อ จังหวัด สมุทรปราการ รหัสไปรษณีย์ 10560
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-5" align="left">
                                <div class="table-responsive div_header p-4">
                                    <div class="card-header">
                                        <span class="font_header"><b>ข้อมูลผู้ติดต่อ</b></span>
                                    </div>
                                    <br />
                                    <div class="row row-form">
                                        <div class="col-lg-12">
                                            <div class="col-lg-12">
                                                ทดสอบ ระบบ เบอร์ติดต่อ 0999999999
                                                <br />
                                                เลขที่ 9999 หมู่ที่ 9999 ซอย - ถนน - ตำบล คลองสวน อำเภอ บางบ่อ จังหวัด สมุทรปราการ รหัสไปรษณีย์ 10560
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-1" align="left">
                                &nbsp;
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="tab2">
                    <div class="card p-4">

                        <div class="table-responsive div_header p-4">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="table-detail-left col-xs-4 col-sm-4 col-md-4 col-lg-4">ประเภทการโอนสิทธิ</td>
                                        <td class="table-detail-left col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                            โอนกรรมสิทธิ์ในที่ดิน
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left col-xs-4 col-sm-4 col-md-4 col-lg-4">ลักษณะพื้นที่ที่โอน</td>
                                        <td class="table-detail-left col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                            โอนกรรมสิทธิ์ในที่ดิน
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left col-xs-4 col-sm-4 col-md-4 col-lg-4">ลักษณะการโอน</td>
                                        <td class="table-detail-left col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                            ที่ดินพร้อมอาคาร
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left col-xs-4 col-sm-4 col-md-4 col-lg-4">ผู้รับโอนสิทธิการใช้ที่ดิน</td>
                                        <td class="table-detail-left col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                            Username: ent_tester<br />
                                            บริษัท : บริษัท ทดสอบระบบ จำกัด<br />
                                            แปลงที่ดิน : A-003<br />
                                            เลขทะเบียนโรงงาน : น.53(5)-1/2568-นนป.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <br />
                        <div class="panel-heading">
                            <span class="font_header">แปลงที่ดินและเนื้อที่ที่ประสงค์จะโอนสิทธิ</span>
                        </div>
                        <div class="table-responsive div_header p-4">
                            <div id="LandInformationDiv" class="panel-body scrollHeader-innerDiv">
                                <SCRIPT language="javascript">
                                    function addRow01(tableID) {
                                        var table = document.getElementById(tableID);

                                        var rowCount = table.rows.length;
                                        var row = table.insertRow(rowCount);

                                        var colCount = table.rows[<?php echo $count_data_grid_01; ?> + 1].cells.length;

                                        for (var i = 0; i < colCount; i++) {

                                            var newcell = row.insertCell(i);

                                            newcell.innerHTML = table.rows[<?php echo $count_data_grid_01; ?> + 1].cells[i].innerHTML;

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

                                    function deleterowT1(tableID) {
                                        try {
                                            var table = document.getElementById(tableID);
                                            var rowCount = table.rows.length;
                                            //alert(rowCount);
                                            for (var i = 0; i < rowCount; i++) {
                                                var row = table.rows[i];
                                                var chkbox = row.cells[0].childNodes[0];
                                                //alert(chkbox);
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

                                    function sum_land(tableID) {

                                        var count_rai_Rows = 0;
                                        var count_ngan_Rows = 0;
                                        var count_wa_Rows = 0;
                                        var count_square_Rows = 0;

                                        try {
                                            var table = document.getElementById(tableID);
                                            var rowCount = table.rows.length;

                                            for (var i = 1; i < rowCount; i++) {
                                                var row = table.rows[i];

                                                var rai_Rows = row.cells[2].childNodes[1]; //rai
                                                var ngan_Rows = row.cells[3].childNodes[1]; //ngan
                                                var wa_Rows = row.cells[4].childNodes[1]; //wa
                                                var square_Rows = row.cells[5].childNodes[1]; //sqr

                                                if (square_Rows.value != "") {
                                                    if (isNaN(square_Rows.value) == true) {
                                                        square_Rows.value = 0;
                                                    }
                                                    count_square_Rows += parseFloat(square_Rows.value);
                                                } else {
                                                    square_Rows.value = 0;
                                                    count_square_Rows += parseFloat(square_Rows.value);
                                                }

                                                if (rai_Rows.value != "") {
                                                    if (isNaN(rai_Rows.value) == true) {
                                                        rai_Rows.value = 0;
                                                    }
                                                    count_rai_Rows += parseInt(rai_Rows.value);
                                                } else {
                                                    rai_Rows.value = 0;
                                                    count_rai_Rows += parseInt(rai_Rows.value);
                                                }

                                                if (ngan_Rows.value > 4) {
                                                    alert('ค่าที่กรอกต้องน้อยกว่า 4');
                                                    ngan_Rows.value = 0;
                                                    count_ngan_Rows += parseInt(ngan_Rows.value);
                                                } else if (ngan_Rows.value != "" && ngan_Rows.value < 4) {
                                                    if (isNaN(ngan_Rows.value) == true) {
                                                        ngan_Rows.value = 0;
                                                    }
                                                    count_ngan_Rows += parseInt(ngan_Rows.value);
                                                } else {
                                                    ngan_Rows.value = 0;
                                                    count_ngan_Rows += parseInt(ngan_Rows.value);
                                                }

                                                if (wa_Rows.value > 100) {
                                                    alert('ค่าที่กรอกต้องน้อยกว่า 100');
                                                    wa_Rows.value = 0;
                                                    count_wa_Rows += parseFloat(wa_Rows.value);
                                                } else if (wa_Rows.value != "" && wa_Rows.value < 100) {
                                                    if (isNaN(wa_Rows.value) == true) {
                                                        wa_Rows.value = 0;
                                                    }
                                                    count_wa_Rows += parseFloat(wa_Rows.value);
                                                } else {
                                                    wa_Rows.value = 0;
                                                    count_wa_Rows += parseFloat(wa_Rows.value);
                                                }

                                            }

                                            var cal_rai_row = parseInt(rai_Rows.value) * 400;
                                            var cal_ngan_row = parseInt(ngan_Rows.value) * 100;
                                            var cal_wa_row = parseFloat(wa_Rows.value);
                                            var cal_land_all_row = cal_rai_row + cal_ngan_row + cal_wa_row;
                                            square_Rows.value = cal_land_all_row * 4;

                                            var cal_rai = count_rai_Rows * 400;
                                            var cal_ngan = count_ngan_Rows * 100;
                                            var cal_wa = count_wa_Rows;
                                            var cal_land_all = cal_rai + cal_ngan + cal_wa;
                                            var cal_count_square_Rows = cal_land_all * 4;

                                            var rai_result = Math.floor(cal_land_all / 400);
                                            var ngan_result = Math.floor((cal_land_all % 400 / 100));
                                            var wa_result = (cal_land_all % 400) % 100;
                                            var wa_result2 = wa_result.toFixed(2);

                                            document.getElementById('rai_sum').value = rai_result;
                                            document.getElementById('ngan_sum').value = ngan_result;
                                            document.getElementById('wa_sum').value = wa_result2;
                                            document.getElementById('squaremeter_sum').value = cal_count_square_Rows;

                                        } catch (e) {
                                            alert(e);
                                        }
                                    }
                                </SCRIPT>
                                <!-- Table -->
                                <div class="table-responsive">
                                    <table id="datatable01" class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="table-head-tab" style="text-align: center; vertical-align: top;">เลขที่แปลง</th>
                                                <th class="table-head-tab" style="text-align: center; vertical-align: top;">ไร่</th>
                                                <th class="table-head-tab" style="text-align: center; vertical-align: top;">งาน</th>
                                                <th class="table-head-tab" style="text-align: center; vertical-align: top;">ตารางวา</th>
                                                <th class="table-head-tab" style="text-align: center; vertical-align: top;">ตารางเมตร</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    A-003
                                                </td>
                                                <td>
                                                    1
                                                </td>
                                                <td>
                                                    1
                                                </td>
                                                <td>
                                                    1
                                                </td>
                                                <td>
                                                    -
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table id="datatable01_1" class="table table-striped table-hover table-bordered">
                                        <tr>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <span>รวมพื้นที่ ไร่ งาน วา <b>:</b> </span>
                                                        <span style="margin-left:20px;">
                                                            1
                                                        </span>
                                                        <span>ไร่</span>
                                                        <span style="margin-left:20px;">
                                                            1
                                                        </span>
                                                        <span>งาน</span>
                                                        <span style="margin-left:20px;">
                                                            1
                                                        </span>
                                                        <span>วา</span>
                                                        <span style="margin-left:30px; margin-right:20px;">|</span>
                                                        <span>รวมพื้นที่ ตารางเมตร (total)</span>
                                                        <span>
                                                            2,004
                                                        </span>
                                                        <span>ตารางเมตร</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </tr>
                                    </table>
                                </div><!-- End Table Responsive -->
                            </div>
                        </div>

                    </div>


                </div>

                <div class="tab-pane" id="tab3">
                    <div class="card p-4">
                        <div class="card-header">
                            <span class="font_header"><b>เอกสารประกอบการขออนุญาต</b></span>
                        </div>
                        <div class="table-responsive div_header p-4">
                            <div class="card-header">
                                <span class="font_header_detail"><b>รายการแนบเอกสารประกอบคำขอฯ ที่ต้องส่งให้เจ้าหน้าที่พิจารณา <font color="red">* เอกสารทั้งหมดต้องลงนาม พร้อมรับรองสําเนาถูกต้อง โดยผู้มีอํานาจลงนาม</font></b></span>
                            </div>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="table-detail-left radio-header" width="70%">
                                            1. หนังสือรับรองการจดทะเบียนจัดตั้งนิติบุคคลและวัตถุประสงค์การจัดตั้ง และ สำเนาบัญชีรายชื่อผู้ถือหุ้น (บอจ.5/บริคณห์สนธิ) (ไม่เกิน 6 เดือน นับตั้งแต่วันที่ออกหนังสือ)
                                        </td>
                                        <td width="30%">
                                            <span class="font_header_detail_red"><a href="#">ไฟล์เอกสาร</a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left radio-header">2. หนังสือมอบอำนาจ ปิดอากรแสตมป์</td>
                                        <td>
                                            <span class="font_header_detail_red"><a href="#">ไฟล์เอกสาร</a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" style="padding-left:50px;">ประกอบด้วย</td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left radio-lists" style="padding-left:70px;">2.1 สำเนาบัตรประจำตัวประชาชน หรือ สำเนาหนังสือเดินทาง ผู้มอบอำนาจ</td>
                                        <td>
                                            <span class="font_header_detail_red"><a href="#">ไฟล์เอกสาร</a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left radio-lists" style="padding-left:70px;">2.2 สำเนาทะเบียนบ้าน ผู้มอบอำนาจ</td>
                                        <td>
                                            <span class="font_header_detail_red"><a href="#">ไฟล์เอกสาร</a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left radio-lists" style="padding-left:70px;">2.3 สำเนาบัตรประจำตัวประชาชน หรือ สำเนาหนังสือเดินทาง (Passport) ผู้รับมอบอำนาจ</td>
                                        <td>
                                            <span class="font_header_detail_red"><a href="#">ไฟล์เอกสาร</a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left radio-lists" style="padding-left:70px;">2.4 สำเนาทะเบียนบ้าน ผู้รับมอบอำนาจ</td>
                                        <td>
                                            <span class="font_header_detail_red"><a href="#">ไฟล์เอกสาร</a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left radio-header">3. แผนผังแปลงที่ดิน/ผังแม่บท</td>
                                        <td>
                                            <span class="font_header_detail_red"><a href="#">ไฟล์เอกสาร</a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left radio-header">4. โฉนดที่ดิน</td>
                                        <td>
                                            <span class="font_header_detail_red"><a href="#">ไฟล์เอกสาร</a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left radio-header">5. หนังสืออนุญาตใช้ที่ดิน กนอ. 01/2 หรือ กนอ.03/6 ล่าสุด พร้อมเงื่อนไขแนบท้าย</td>
                                        <td>
                                            <span class="font_header_detail_red"><a href="#">ไฟล์เอกสาร</a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left radio-header">6. หนังสือรับรองการปลอดภาระหนี้สินหรือภาระติดพันจากผู้พัฒนานิคมอุตสาหกรรม (เช่น ค่าบริการระบบสาธารณูปโภค สิ่งอำนวยความสะดวก ค่าส่วนกลาง ค่าน้ำ ค่าไฟ ฯลฯ)</td>
                                        <td>
                                            <span class="font_header_detail_red"><a href="#">ไฟล์เอกสาร</a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left radio-header">7. เอกสารอื่นๆที่เกี่ยวข้อง</td>
                                        <td>
                                            <span class="font_header_detail_red"><a href="#">ไฟล์เอกสาร</a></span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.tab-pane -->
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