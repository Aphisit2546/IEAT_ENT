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
    <a href="ieat_ent_051" style="color: #6007b3ff; font-size: 18px;"><b>คำขออนุญาตบรรจุ ช่างฝีมือ ผู้ชำนาญการ และครอบครัวเข้ามาอยู่และมาทำงานในราชอาณาจักรไทย 17-1 และ 17-2</b></a>
    <b>&nbsp;&nbsp;/&nbsp;&nbsp;</b>
    <a style="color: #000000ff; font-size: 18px;"><b>45-02-54-000001/2568</b></a>
</div>
<br />
<div class="class_header_page_02">

    <div class="row row-form">
        <div class="col-lg-4">
            <font style="color: #000000ff; font-size: 25px;"><b>คำขอ 45-02-54-000001/2568</b></font>
            &nbsp;&nbsp;
            <font style="color: #000000ff; font-size: 18px;"><b>17-1 และ 17-2</b></font>
            &nbsp;&nbsp;
        </div>
        <div class="col-lg-2">
            <div class="div_header_focus p-2">
                <center><span class="font_header_office_focus"><b>ตรวจสอบ</b></span></center>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="div_header p-2">
                <center><span class="font_header_office"><b>พิจารณา</b></span></center>
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
                <li class="nav-item"><a class="nav-link" href="#tab3" data-toggle="tab"><span class="font_header_detail"><b>แนบเอกสารที่เกี่ยวข้อง</b></span></a></li>
                <li class="nav-item"><a class="nav-link" href="#tab9" data-toggle="tab"><span class="font_header_office_alert"><b>
                                <font color='red'>*</font>ตรวจสอบ<font color='red'>*</font>
                            </b></span></a></li>
            </ul>
        </div><!-- /.card-header -->

        <div class="card-body">
            <div class="tab-content">
                <div class="tab-pane" id="tab9">
                    <div class="row row-form">
                        <div class="col-lg-8">
                            <div class="div_header p-2" style="text-align: center;">
                                <div class="card-header">
                                    <span class="font_header_detail"><b>รายงานผลการตรวจสอบข้อมูล (รายละเอียดให้ผู้ประกอบการกรณีส่งคำขอกลับ/หรือรายละเอียดให้เจ้าหน้าที่ กรณีส่งคำขอไปขั้นต่อไป)</b></span>
                                </div>
                                <textarea name='i_remarks' cols="120" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="div_header p-2">
                                <div class="card-header">
                                    <span class="font_header_detail"><b>ไฟล์ประกอบ</b></span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">อัพโหลดไฟล์ข้อมูล</label>
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
                                    <input class='btn btn-secondary btn-lg btn-block' name="Submit_return" type="button" id="Submit" value="ไม่ผ่านการตรวจสอบคำขอ (ตีคืนเอกสาร)" onclick="return confirm('ไม่ผ่านการตรวจสอบคำขอ(ตีคืนเอกสาร) !!!')" onclick="window.location='center_ieat_ent/page_office'" />
                                </div>
                                <div class="col-lg-3">
                                    <input class='btn btn-success btn-lg btn-block' name="Submit_continue" type="button" id="Submit" value="บันทึกการตรวจสอบคำขอ" onclick="return confirm('บันทึกการตรวจสอบคำขอ !!!')" onclick="window.location='center_ieat_ent/page_office'" />
                                </div>
                                <div class="col-lg-4">
                                    <input class='btn btn-primary btn-lg btn-block' name="Submit_approve" type="button" id="Submit" value="ส่งผลการตรวจสอบคำขอ" onclick="return confirm('ส่งผลการตรวจสอบคำขอ !!!')" onclick="window.location='center_ieat_ent/page_office'" />
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
                        <div class="card-header">
                            <span class="font_header"><b>ข้อมูลการถือครองหุ้น</b></span>
                        </div>
                        <div class="table-responsive div_header p-4">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td style="width:25%;">มูลค่าหุ้น หุ้นละ</td>
                                        <td style="width:75%;">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-6">
                                                    <span class="form-control-plaintext">5,000.00</span>
                                                </div>
                                                <div class="col-md-2 col-sm-3 align-self-center">
                                                    บาท
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>จำนวนบุคคลผู้ถือหุ้น</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-md-3 col-sm-4">
                                                    <label>สัญชาติไทย</label>
                                                    <span class="form-control-plaintext">10</span>
                                                </div>
                                                <div class="col-md-1 col-sm-2 align-self-end mb-2">
                                                    คน
                                                </div>
                                                <div class="col-md-3 col-sm-4">
                                                    <label>คนต่างด้าว</label>
                                                    <span class="form-control-plaintext">3</span>
                                                </div>
                                                <div class="col-md-1 col-sm-2 align-self-end">
                                                    คน
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>จำนวนหุ้น</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-md-3 col-sm-4">
                                                    <label>คนไทยถือครองรวม</label>
                                                    <span class="form-control-plaintext">15</span>
                                                </div>
                                                <div class="col-md-1 col-sm-2 align-self-end mb-2">
                                                    หุ้น
                                                </div>
                                                <div class="col-md-3 col-sm-4">
                                                    <label>คิดเป็นเงินลงทุนคนไทย</label>
                                                    <span class="form-control-plaintext">75,000.00</span>
                                                </div>
                                                <div class="col-md-1 col-sm-2 align-self-end">
                                                    บาท
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card p-4">
                        <div class="table-responsive div_header p-4">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width:15%; text-align:center; vertical-align:top;">เลือกลบ</th>
                                        <th style="width:45%; text-align:center; vertical-align:top;">
                                            สัญชาติ
                                            <div style="font-size:12px; color:#ff0000ff; margin-top:3px;">
                                                หากไม่พบข้อมูลสัญชาติที่ต้องการ กรุณาแจ้ง update ข้อมูลมาได้ที่ ieat_support@ieat.mail.go.th เพื่อการเพิ่มสัญชาติ
                                            </div>
                                        </th>
                                        <th style="width:20%; text-align:center; vertical-align:top;">จำนวนหุ้น</th>
                                        <th style="width:20%; text-align:center; vertical-align:top;">หมายเหตุ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center align-middle">-</td>
                                        <td>
                                            <span class="form-control-plaintext">ไทย</span>
                                        </td>
                                        <td>
                                            <span class="form-control-plaintext text-right">8</span>
                                        </td>
                                        <td>
                                            <span class="form-control-plaintext">ไม่มี</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr style="border-top: 1px solid #b39ddb;">
                            <div class="row mt-2">
                                <div class="col-md-3 col-sm-4 align-self-center">
                                    จำนวนหุ้นต่างด้าวรวม ถือครองรวม
                                </div>
                                <div class="col-md-2 col-sm-3 mb-2">
                                    <span class="form-control-plaintext text-right">8</span>
                                </div>
                                <div class="col-md-1 col-sm-2 align-self-center mb-2">
                                    หุ้น
                                </div>
                                <div class="col-md-3 col-sm-4 align-self-center">
                                    คิดเป็นเงินลงทุนต่างด้าว
                                </div>
                                <div class="col-md-2 col-sm-3 mb-2">
                                    <span class="form-control-plaintext text-right">40,000.00</span>
                                </div>
                                <div class="col-md-1 col-sm-2 align-self-center">
                                    บาท
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card p-4">
                        <div class="card-header">
                            <span class="font_header"><b>คำขอบรรจุช่างฝีมือฯ</b></span>
                        </div>
                        <div class="card-header">
                            <span class="font_header"><b>กรุณากรอกข้อมูลกำลังการผลิต</b></span>
                        </div>
                        <div class="div_header p-4">
                            <div class="table-responsive" style="overflow-x:auto;">
                                <table class="table table-bordered" style="min-width:1200px;">
                                    <thead>
                                        <tr>
                                            <th rowspan="3" style="width:8%; text-align:center; vertical-align:top;">เลือก</th>
                                            <th rowspan="3" style="width:22%; text-align:center; vertical-align:top;">ชื่อผลิตภัณฑ์</th>
                                            <th rowspan="3" style="width:10%; text-align:center; vertical-align:top;">หน่วยผลิตภัณฑ์</th>
                                            <th colspan="6" style="text-align:center; vertical-align:top;">ปริมาณการผลิต</th>
                                            <th colspan="6" style="text-align:center; vertical-align:top;">มูลค่า-ล้านบาท</th>
                                        </tr>
                                        <tr>
                                            <th colspan="3" style="text-align:center; vertical-align:top;">ตลาดในประเทศ</th>
                                            <th colspan="3" style="text-align:center; vertical-align:top;">ตลาดต่างประเทศ</th>
                                            <th colspan="3" style="text-align:center; vertical-align:top;">ตลาดในประเทศ</th>
                                            <th colspan="3" style="text-align:center; vertical-align:top;">ตลาดต่างประเทศ</th>
                                        </tr>
                                        <tr>
                                            <th style="text-align:center;">พ.ศ. 2565</th>
                                            <th style="text-align:center;">พ.ศ. 2566</th>
                                            <th style="text-align:center;">พ.ศ. 2567</th>
                                            <th style="text-align:center;">พ.ศ. 2565</th>
                                            <th style="text-align:center;">พ.ศ. 2566</th>
                                            <th style="text-align:center;">พ.ศ. 2567</th>
                                            <th style="text-align:center;">พ.ศ. 2565</th>
                                            <th style="text-align:center;">พ.ศ. 2566</th>
                                            <th style="text-align:center;">พ.ศ. 2567</th>
                                            <th style="text-align:center;">พ.ศ. 2565</th>
                                            <th style="text-align:center;">พ.ศ. 2566</th>
                                            <th style="text-align:center;">พ.ศ. 2567</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center align-middle">-</td>
                                            <td>
                                                <span class="form-control-plaintext">โทรศัพท์</span>
                                            </td>
                                            <td>
                                                <span class="form-control-plaintext">เครื่อง</span>
                                            </td>
                                            <td><span class="form-control-plaintext text-right">10,000</span></td>
                                            <td><span class="form-control-plaintext text-right">12,000</span></td>
                                            <td><span class="form-control-plaintext text-right">15,000</span></td>
                                            <td><span class="form-control-plaintext text-right">5,000</span></td>
                                            <td><span class="form-control-plaintext text-right">7,000</span></td>
                                            <td><span class="form-control-plaintext text-right">10,000</span></td>
                                            <td><span class="form-control-plaintext text-right">50</span></td>
                                            <td><span class="form-control-plaintext text-right">60</span></td>
                                            <td><span class="form-control-plaintext text-right">80</span></td>
                                            <td><span class="form-control-plaintext text-right">40</span></td>
                                            <td><span class="form-control-plaintext text-right">55</span></td>
                                            <td><span class="form-control-plaintext text-right">75</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="px-4">
                            <hr style="border-top: 1px solid #b39ddb;">
                        </div>
                        <div class="table-responsive div_header px-4 pb-4">
                            <br>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width:70%; text-align:center;">แรงงาน</th>
                                        <th style="width:30%; text-align:center;">จำนวนคน</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>ปัจจุบันมีช่างฝีมือ ผู้อำนวยการที่เป็นคนต่างด้าว</td>
                                        <td class="text-center align-middle">
                                            <span class="form-control-plaintext text-right">5</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>การจ้างแรงงานเป็นคนไทย</td>
                                        <td class="text-center align-middle">
                                            <span class="form-control-plaintext text-right">120</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>การจ้างแรงงานรวม</td>
                                        <td class="text-center align-middle">
                                            <span class="form-control-plaintext text-right">125</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card p-4">
                        <div class="card-header">
                            <span class="font_header"><b>เพิ่มช่างฝีมือ ผู้ชำนาญการที่เป็นคนต่างด้าว</b></span>
                        </div>
                        <div class="card-header">
                            <span class="font_header" style="color:red;">
                                <b>*** คำแนะนำ การกรอกข้อมูลในตารางรายละเอียดแผนการถ่ายทอดเทคโนโลยี ห้ามใช้อักษรดังต่อไปนี้ \ ' & " ***</b>
                            </span>
                        </div>
                        <div class="div_header p-4">
                            <div class="table-responsive" style="overflow-x:auto;">
                                <table class="table table-bordered" style="min-width:1800px;">
                                    <thead>
                                        <tr style="color:#000;">
                                            <th style="width:16%; text-align:center; vertical-align:top;">ตำแหน่ง</th>
                                            <th style="width:20%; text-align:center; vertical-align:top;">ขอบเขตงานที่รับผิดชอบ</th>
                                            <th style="width:8%; text-align:center; vertical-align:top;">คำนำหน้า</th>
                                            <th style="width:20%; text-align:center; vertical-align:top;">ชื่อ–ชื่อกลาง–ชื่อสกุล<br>บุคคลต่างด้าว</th>
                                            <th style="width:8%; text-align:center; vertical-align:top;">เลขที่หนังสือเดินทาง</th>
                                            <th style="width:12%; text-align:center; vertical-align:top;">
                                                วันที่หนังสือเดินทางหมดอายุ<br>
                                                <span style="font-size:12px; color:#444;">(dd/mm/YYYY)<br>Ex. 01/01/1900</span>
                                            </th>
                                            <th style="width:10%; text-align:center; vertical-align:top;">
                                                สัญชาติ<br>
                                                <span style="font-size:12px; color:red;">
                                                    *** หากไม่พบข้อมูลสัญชาติที่ต้องการ กรุณาแจ้ง update ข้อมูลมาที่ ieat_support@ieat.mail.go.th เพื่อทำการเพิ่มสัญชาติ ***
                                                </span>
                                            </th>
                                            <th style="width:10%; text-align:center; vertical-align:top;">
                                                วัน/เดือน/ปี เกิด<br>
                                                <span style="font-size:12px; color:#444;">(dd/mm/YYYY)<br>Ex. 01/01/1900</span>
                                            </th>
                                            <th style="width:10%; text-align:center; vertical-align:top;">
                                                วุฒิการศึกษา<br>
                                                <span style="font-size:12px; color:#444;">Ex. Bachelor of Engineering</span>
                                            </th>
                                            <th style="width:10%; text-align:center; vertical-align:top;">
                                                อนุญาตถึง<br>
                                                <span style="font-size:12px; color:#444;">(dd/mm/YYYY)<br>Ex. 01/01/1900</span>
                                            </th>
                                            <th style="width:20%; text-align:center; vertical-align:top;">
                                                เหตุผล<br>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="form-control-plaintext">
                                                    Developer
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-control-plaintext">
                                                    Coding
                                                </div>
                                            </td>
                                            <td>
                                                <span class="form-control-plaintext">นาย</span>
                                            </td>
                                            <td>
                                                <div class="form-control-plaintext">
                                                    ทดสอบ&nbsp;ทดลอง
                                                </div>
                                            </td>
                                            <td>
                                                <span class="form-control-plaintext">1234567</span>
                                            </td>
                                            <td>
                                                <span class="form-control-plaintext">31/12/2029</span>
                                            </td>
                                            <td>
                                                <span class="form-control-plaintext">ไทย</span>
                                            </td>
                                            <td>
                                                <span class="form-control-plaintext">15/03/1985</span>
                                            </td>
                                            <td>
                                                <div class="form-control-plaintext">
                                                    ม.6
                                                </div>
                                            </td>
                                            <td>
                                                <span class="form-control-plaintext">31/12/2027</span>
                                            </td>
                                            <td>
                                                <div class="form-control-plaintext">
                                                    ไม่มี
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="card p-4">
                        <div class="card-header">
                            <span class="font_header"><b>รายละเอียดแผนการถ่ายทอดเทคโนโลยี</b></span>
                        </div>
                        <div class="card-header">
                            <span class="font_header" style="color:red;">
                                <b>*** คำแนะนำ การกรอกข้อมูลในตารางรายละเอียดแผนการถ่ายทอดเทคโนโลยี
                                    ห้ามใช้อักษรดังต่อไปนี้ \ ' & " ***</b>
                            </span>
                        </div>
                        <div class="div_header p-4">
                            <div class="table-responsive" style="overflow-x:auto;">
                                <table class="table table-bordered" style="min-width:1600px;">
                                    <thead>
                                        <tr style="color:#000;">
                                            <th rowspan="2" style="width:5%; text-align:center; vertical-align:top;">เลือก</th>
                                            <th colspan="2" style="width:20%; text-align:center; vertical-align:top;">ระยะเวลาที่ใช้ในการถ่ายทอด</th>
                                            <th rowspan="2" style="width:20%; text-align:center; vertical-align:top;">
                                                วิธีการถ่ายทอด<br>
                                                <span style="font-size:12px; font-weight:normal; vertical-align:top;">
                                                    **(โปรดระบุวิธีการถ่ายทอด ตัวอย่างเช่น
                                                    วิธี On The Job Training, วิธีสอบปฏิบัติงานจริง เป็นต้น)**
                                                </span>
                                            </th>
                                            <th rowspan="2" style="width:20%; text-align:center; vertical-align:top;">
                                                รายละเอียดการถ่ายทอดเทคโนโลยี<br>
                                                <span style="font-size:12px; font-weight:normal;">
                                                    **(เช่น เนื้อหาของหลักสูตร, แผนงาน)**
                                                </span>
                                            </th>
                                            <th rowspan="2" style="width:20%; text-align:center; vertical-align:top;">
                                                ผลที่คาดว่าจะได้รับ
                                            </th>
                                        </tr>
                                        <tr style="color:#000;">
                                            <th style="text-align:center; vertical-align:top;">
                                                ตั้งแต่วันที่<br>
                                                <span style="font-size:12px; font-weight:normal;">
                                                    (dd/mm/YYYY)<br>**Ex. 01/01/1900
                                                </span>
                                            </th>
                                            <th style="text-align:center; vertical-align:top;">
                                                ถึงวันที่<br>
                                                <span style="font-size:12px; font-weight:normal;">
                                                    (dd/mm/YYYY)<br>**Ex. 01/01/1900
                                                </span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center align-middle">
                                                -
                                            </td>
                                            <td>
                                                <span class="form-control-plaintext">01/01/2026</span>
                                            </td>
                                            <td>
                                                <span class="form-control-plaintext">31/12/2026</span>
                                            </td>
                                            <td>
                                                <div class="form-control-plaintext">
                                                    ถ่ายด้วยโทรศัพท์
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-control-plaintext">
                                                    ไม่มี
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-control-plaintext">
                                                    มีประโยชน์
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
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
                            <table class="table table-hover table-bordered">
                                <thead>
                                    <tr class="success">
                                        <th class="table-head-tab" colspan="2">แนบเอกสารที่เกี่ยวข้อง</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="table-detail-left radio-header" colspan="2">
                                            <font style='font-size:16px; color:red;'><b>*** <i><u>คำแนะนำ</u></i> การตั้งชื่อไฟล์เอกสารแนบที่เกี่ยวข้อง ห้ามใช้อักษรดังต่อไปนี้ \ ' & " ,</b></font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left radio-header" width="70%">
                                            1.) สำเนาหนังสือรับรองการจดทะเบียนเป็นนิติบุคคล (ไม่เกิน 6 เดือน)
                                        </td>
                                        <td width="30%">
                                            <span class="font_header_detail_red"><a href="#">ไฟล์เอกสาร</a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left radio-header">2.) สำเนาบัญชีรายชื่อผู้ถือหุ้น (ไม่เกิน 6 เดือน)</td>
                                        <td>
                                            <span class="font_header_detail_red"><a href="#">ไฟล์เอกสาร</a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left radio-header"> 3.) แผนภูมิแสดงการจัดแบ่งหน่วยงานและหน้าที่ (แสดงชื่อตำแหน่ง/ชื่อช่างฝีมือฯ ที่ได้รับอนุญาตจาก กนอ. แล้ว และตำแหน่งที่อยู่ระหว่างการยื่นขออนุญาต)</td>
                                        <td width="30%">
                                            <span class="font_header_detail_red"><a href="#">ไฟล์เอกสาร</a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left radio-header">4.) แผนภูมิแสดงกรรมวิธีการผลิต</td>
                                        <td width="30%">
                                            <span class="font_header_detail_red"><a href="#">ไฟล์เอกสาร</a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left radio-header">5.) หลักฐานแสดงอัตราการผลิต ปริมาณและมูลค่าการส่งออก (ถ้ามี)</td>
                                        <td width="30%">
                                            <span class="font_header_detail_red"><a href="#">ไฟล์เอกสาร</a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left radio-header">6.) สำเนาหนังสือเดินทางของช่างฝีมือ ผู้ชำนาญการ (หน้าแรก, หน้าวีซ่า non – b จากสถานทูต, หน้าประทับตราขาเข้าด่าน ตม. ครั้งล่าสุด, หน้าบัตร TM.6)</td>
                                        <td width="30%">
                                            <span class="font_header_detail_red"><a href="#">ไฟล์เอกสาร</a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left radio-header">7.) สำเนาคุณวุฒิการศึกษา</td>
                                        <td width="30%">
                                            <span class="font_header_detail_red"><a href="#">ไฟล์เอกสาร</a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left radio-header">8.) สำเนาใบผ่านงาน</td>
                                        <td width="30%">
                                            <span class="font_header_detail_red"><a href="#">ไฟล์เอกสาร</a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left radio-header">9.) ประวัติของช่างฝีมือ ผู้ชำนาญการ</td>
                                        <td width="30%">
                                            <span class="font_header_detail_red"><a href="#">ไฟล์เอกสาร</a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left radio-header">10.) หนังสือมอบอำนาจ พร้อมติดอากรตามกฎหมาย (ถ้ามี)</td>
                                        <td width="30%">
                                            <span class="font_header_detail_red"><a href="#">ไฟล์เอกสาร</a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left radio-header">11.) เอกสารอื่น (ถ้ามี)</td>
                                        <td width="30%">
                                            <span class="font_header_detail_red"><a href="#">ไฟล์เอกสาร</a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left radio-header" colspan='2'>
                                            <font color='red'>
                                                * เอกสารลำดับที่ 1-5 รับรองสำเนาถูกต้องโดยผู้มีอำนาจตามหนังสือรับรองบริษัท และประทับตราบริษัท<br />
                                                ** เอกสารลำดับที่ 6-8 รับรองสำเนาถูกต้องโดยช่างฝีมือ ผู้ชำนาญการ<br />
                                                *** หากเอกสารเป็นภาษาอื่น นอกเหนือจากภาษาไทย หรือ ภาษาอังกฤษ จะต้องแปลโดยสถาบันการแปล (รับรองการแปลและแนบใบเสร็จรับเงิน) หรือสถาบันการศึกษา หรือสถานทูต/สถานกงสุล หรือ Notary Public ของประเทศนั้น ๆ
                                            </font>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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