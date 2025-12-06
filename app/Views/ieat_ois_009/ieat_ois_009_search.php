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
    <a href="center_ieat_ent/page_office" style="color: #6007b3ff; font-size: 18px;"><b>ระบบการออกหนังสือคำสั่ง ค.</b></a>
    <b>&nbsp;&nbsp;/&nbsp;&nbsp;</b>
    <a href="ieat_ois_009" style="color: #6007b3ff; font-size: 18px;"><b>จัดทำหนังสือคำสั่ง ค.5 (คำสั่งให้ยื่นคำขออนุญาตหรือดำเนินการแจ้ง หรือดำเนินการแก้ไขเปลี่ยนแปลงการก่อสร้าง การดัดแปลง การรื้อถอน หรือการเคลื่อนย้ายอาคารตามมาตรา 41)</b></a>
    <b>&nbsp;&nbsp;/&nbsp;&nbsp;</b>
    <a style="color: #000000ff; font-size: 18px;"><b>ieat_ois_009</b></a>
</div>
<br />
<div class="class_header_page_02">
    <font style="color: #000000ff; font-size: 18px;"><b>จัดทำหนังสือคำสั่ง ค.5 (คำสั่งให้ยื่นคำขออนุญาตหรือดำเนินการแจ้ง หรือดำเนินการแก้ไขเปลี่ยนแปลงการก่อสร้าง การดัดแปลง การรื้อถอน หรือการเคลื่อนย้ายอาคารตามมาตรา 41)</b></font>
</div>
<br /><br />
<div class="col-md-12">
    <div class="card">
        <div class="card-header p-4" style="text-align: center;">
            <ul class="nav nav-pills">
                <li class="nav-item"><a class="nav-link active" href="#tab1" data-toggle="tab"><span class="font_header_detail"><b>ข้อมูลทั่วไป</b></span></a></li>
                <li class="nav-item"><a class="nav-link" href="#tab2" data-toggle="tab"><span class="font_header_detail"><b>การจัดเตรียมเอกสาร</b></span></a></li>
            </ul>
        </div><!-- /.card-header -->
        <div class="card-body">
            <div class="tab-content">
                <div class="active tab-pane" id="tab1">
                    <!-- Table -->
                    <div class="card p-4">
                        <div class="card-header">
                            <span class="font_header"><b>ข้อมูลทั่วไป (General informantion)</b></span>
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
                                                บางปะอิน<?php echo $_SESSION['industrial_name_view']; ?>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left col-xs-4 col-sm-4 col-md-4 col-lg-4">ในเขตอุตสาหกรรม</td>
                                        <td class="table-detail-right col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                            <div class="initial-form">
                                                เขคประกอบการเสรี<?php echo $_SESSION['industrial_zone_view']; ?>
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
                                                <span><b>ตำบล คลองจิก</b><?php echo $_SESSION['district_office_view']; ?></span>
                                                <span><b>อำเภอ บางปะอิน</b><?php echo $_SESSION['amphur_office_view']; ?></span>
                                                <span><b>จังหวัด พระนครศรีอยุธยา</b><?php echo $_SESSION['province_office_view']; ?></span>
                                                <span><b>รหัสไปรษณีย์ 13160</b><?php echo $_SESSION['zipcode_office_view']; ?></span>
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
                </div>

                <div class="tab-pane" id="tab2">
                    <div class="table-responsive div_header p-4" style="border: 2px dashed #6007b3ff; position: relative;">
                    <div style="position: absolute; top: 20px; right: 30px; font-weight: bold;">
                        แบบ ค.5
                    </div>
                    <div>
                        <div class="text-center mb-4">
                            <img src="https://epp-ieat-dev.nidprotech.com/new_epp_ieat_tester_67/assets/logo_new.png" width="120" alt="logo"><br>
                            <div style="font-weight: bold; font-size: 1.1em;">
                                คำสั่งให้ยื่นคำขออนุญาตหรือดำเนินการแจ้ง หรือดำเนินการแก้ไขเปลี่ยนแปลงการก่อสร้าง การดัดแปลง<br>
                                การรื้อถอน หรือการเคลื่อนย้ายอาคารตามมาตรา 41
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-5 d-flex align-items-center">
                                <span class="mr-2">ที่</span>
                                <input type="text" class="form-control form-control-sm" name="doc_no" style="width: 200px;">
                            </div>
                            <div class="col-md-7">
                                <div class="row justify-content-end">
                                    <div class="col-auto d-flex align-items-center">
                                        <span class="mr-2">_______________<br>_______________<br>_______________</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-md-7">
                            <div class="row justify-content-end">
                                <div class="col-auto d-flex align-items-center">
                                    <span class="mr-2">วันที่</span>
                                    <select class="form-control form-control-sm" name="doc_day" style="width: 70px;">
                                        <option value="">--</option>
                                    </select>
                                </div>
                                <div class="col-auto d-flex align-items-center">
                                    <span class="mr-2">เดือน</span>
                                    <select class="form-control form-control-sm" name="doc_month" style="width: 100px;">
                                        <option value="">--</option>
                                    </select>
                                </div>
                                <div class="col-auto d-flex align-items-center">
                                    <span class="mr-2">พ.ศ.</span>
                                    <select class="form-control form-control-sm" name="doc_year" style="width: 80px;">
                                        <option value="">--</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row mb-2 align-items-center">
                            <div class="col-md-2" style="text-indent: 40px;">แจ้งความมายัง</div>
                            <div class="col-md-8">
                                <input type="text" class="form-control form-control-sm" name="notify_to">
                            </div>
                            <div class="col-md-1 text-right">
                                เจ้าของอาคาร
                            </div>
                        </div>
                        
                        <div class="row mb-2 align-items-center">
                            <div class="col-md-2">อยู่บ้านเลขที่</div>
                            <div class="col-md-2">
                                <input type="text" class="form-control form-control-sm" name="address_no">
                            </div>
                            <div class="col-md-1 text-right">หมู่ที่</div>
                            <div class="col-md-2">
                                <input type="text" class="form-control form-control-sm" name="address_moo">
                            </div>
                            <div class="col-md-1 text-right">ตรอก/ซอย</div>
                            <div class="col-md-4">
                                <input type="text" class="form-control form-control-sm" name="address_soi">
                            </div>
                        </div>
                        <div class="row mb-2 align-items-center">
                            <div class="col-md-2">ถนน</div>
                            <div class="col-md-3">
                                <input type="text" class="form-control form-control-sm" name="address_road">
                            </div>
                            <div class="col-md-1 text-right">ตำบล/แขวง</div>
                            <div class="col-md-2">
                                <input type="text" class="form-control form-control-sm" name="address_tambon">
                            </div>
                            <div class="col-md-2 text-right">อำเภอ/เขต</div>
                            <div class="col-md-2">
                                <input type="text" class="form-control form-control-sm" name="address_amphur">
                            </div>
                        </div>
                        <div class="row mb-3 align-items-center">
                            <div class="col-md-2">จังหวัด</div>
                            <div class="col-md-3">
                                <input type="text" class="form-control form-control-sm" name="address_province">
                            </div>
                            <div class="col-md-2 text-right">รหัสไปรษณีย์</div>
                            <div class="col-md-2">
                                <input type="text" class="form-control form-control-sm" name="address_postcode">
                            </div>
                        </div>
                        
                        <div class="row mb-2 align-items-center">
                            <div class="col-md-2" style="text-indent: 40px;">ในนิคมอุตสาหกรรม</div>
                            <div class="col-md-3">
                                <input type="text" class="form-control form-control-sm" name="industrial_estate">
                            </div>
                            <div class="col-md-1 text-right">เขต</div>
                            <div class="col-md-2">
                                <input type="text" class="form-control form-control-sm" name="estate_zone">
                            </div>
                            <div class="col-md-2 text-right">แปลงที่ดินเลขที่</div>
                            <div class="col-md-2">
                                <input type="text" class="form-control form-control-sm" name="land_no">
                            </div>
                        </div>
                        
                        <div class="row mb-2 align-items-center">
                            <div class="col-md-2">ด้วยปรากฏว่า ท่านได้ทําการ</div>
                            <div class="col-md-10">
                                <input type="text" class="form-control form-control-sm" name="factory_activity">
                            </div>
                        </div>
                        
                        <div class="row mb-2 align-items-center">
                            <div class="col-md-2">(1) ชนิด</div>
                            <div class="col-md-3">
                                <input type="text" class="form-control form-control-sm" name="industrial_estate">
                            </div>
                            <div class="col-md-1 text-right">ขนาด</div>
                            <div class="col-md-2">
                                <input type="text" class="form-control form-control-sm" name="estate_zone">
                            </div>
                            <div class="col-md-2 text-right">จำนวน</div>
                            <div class="col-md-2">
                                <input type="text" class="form-control form-control-sm" name="land_no">
                            </div>
                            <div class="col-md-2">เพื่อใช้เป็น</div>
                            <div class="col-md-3">
                                <input type="text" class="form-control form-control-sm" name="industrial_estate">
                            </div>
                            <div class="col-md-1 text-right">โดยมีพื้นที่อาคาร/ความยาว</div>
                            <div class="col-md-2">
                                <input type="text" class="form-control form-control-sm" name="estate_zone">
                            </div>
                            <div class="col-md-2 text-right">มีที่จอดรถ ที่กลับรถ และทางเข้าออกของรถ จำนวน</div>
                            <div class="col-md-2">
                                <input type="text" class="form-control form-control-sm" name="land_no">
                            </div>
                        </div>
                        <div class="row mb-2 align-items-center">
                            <div class="col-md-2">(2) ชนิด</div>
                            <div class="col-md-3">
                                <input type="text" class="form-control form-control-sm" name="industrial_estate">
                            </div>
                            <div class="col-md-1 text-right">ขนาด</div>
                            <div class="col-md-2">
                                <input type="text" class="form-control form-control-sm" name="estate_zone">
                            </div>
                            <div class="col-md-2 text-right">จำนวน</div>
                            <div class="col-md-2">
                                <input type="text" class="form-control form-control-sm" name="land_no">
                            </div>
                            <div class="col-md-2">เพื่อใช้เป็น</div>
                            <div class="col-md-3">
                                <input type="text" class="form-control form-control-sm" name="industrial_estate">
                            </div>
                            <div class="col-md-1 text-right">โดยมีพื้นที่อาคาร/ความยาว</div>
                            <div class="col-md-2">
                                <input type="text" class="form-control form-control-sm" name="estate_zone">
                            </div>
                            <div class="col-md-2 text-right">มีที่จอดรถ ที่กลับรถ และทางเข้าออกของรถ จำนวน</div>
                            <div class="col-md-2">
                                <input type="text" class="form-control form-control-sm" name="land_no">
                            </div>
                        </div>
                        <div class="row mb-2 align-items-center">
                            <div class="col-md-2">(3) ชนิด</div>
                            <div class="col-md-3">
                                <input type="text" class="form-control form-control-sm" name="industrial_estate">
                            </div>
                            <div class="col-md-1 text-right">ขนาด</div>
                            <div class="col-md-2">
                                <input type="text" class="form-control form-control-sm" name="estate_zone">
                            </div>
                            <div class="col-md-2 text-right">จำนวน</div>
                            <div class="col-md-2">
                                <input type="text" class="form-control form-control-sm" name="land_no">
                            </div>
                            <div class="col-md-2">เพื่อใช้เป็น</div>
                            <div class="col-md-3">
                                <input type="text" class="form-control form-control-sm" name="industrial_estate">
                            </div>
                            <div class="col-md-1 text-right">โดยมีพื้นที่อาคาร/ความยาว</div>
                            <div class="col-md-2">
                                <input type="text" class="form-control form-control-sm" name="estate_zone">
                            </div>
                            <div class="col-md-2 text-right">มีที่จอดรถ ที่กลับรถ และทางเข้าออกของรถ จำนวน</div>
                            <div class="col-md-2">
                                <input type="text" class="form-control form-control-sm" name="land_no">
                            </div>
                        </div>
                        
                        <div class="row mb-2 align-items-center">
                            <div class="col-md-2" style="text-indent: 40px;">โดยมี</div>
                            <div class="col-md-8">
                                <input type="text" class="form-control form-control-sm" name="factory_activity">
                            </div>
                            <div class="col-md-2">เป็นผู้ควบคุมงาน</div>
                        </div>
                        
                        <div class="row mb-2 align-items-center">
                            <div class="col-md-2">ในนิคมอุตสาหกรรม</div>
                            <div class="col-md-3">
                                <input type="text" class="form-control form-control-sm" name="industrial_estate">
                            </div>
                            <div class="col-md-1 text-right">เขต</div>
                            <div class="col-md-2">
                                <input type="text" class="form-control form-control-sm" name="estate_zone">
                            </div>
                            <div class="col-md-2 text-right">แปลงที่ดินเลขที่</div>
                            <div class="col-md-2">
                                <input type="text" class="form-control form-control-sm" name="land_no">
                            </div>
                        </div>
                        
                        <div class="row mb-2 align-items-center">
                            <div class="col-md-2">อยู่บ้านเลขที่</div>
                            <div class="col-md-2">
                                <input type="text" class="form-control form-control-sm" name="address_no">
                            </div>
                            <div class="col-md-1 text-right">หมู่ที่</div>
                            <div class="col-md-2">
                                <input type="text" class="form-control form-control-sm" name="address_moo">
                            </div>
                            <div class="col-md-1 text-right">ตรอก/ซอย</div>
                            <div class="col-md-4">
                                <input type="text" class="form-control form-control-sm" name="address_soi">
                            </div>
                        </div>
                        <div class="row mb-2 align-items-center">
                            <div class="col-md-2">ถนน</div>
                            <div class="col-md-3">
                                <input type="text" class="form-control form-control-sm" name="address_road">
                            </div>
                            <div class="col-md-1 text-right">ตำบล/แขวง</div>
                            <div class="col-md-2">
                                <input type="text" class="form-control form-control-sm" name="address_tambon">
                            </div>
                            <div class="col-md-2 text-right">อำเภอ/เขต</div>
                            <div class="col-md-2">
                                <input type="text" class="form-control form-control-sm" name="address_amphur">
                            </div>
                        </div>
                        <div class="row mb-3 align-items-center">
                            <div class="col-md-2">จังหวัด</div>
                            <div class="col-md-3">
                                <input type="text" class="form-control form-control-sm" name="address_province">
                            </div>
                            <div class="col-md-2 text-right">รหัสไปรษณีย์</div>
                            <div class="col-md-2">
                                <input type="text" class="form-control form-control-sm" name="address_postcode">
                            </div>
                        </div>
                        
                        <div class="pl-4 mb-4">
                            <div class="d-flex mb-2">
                                <div class="mr-2">
                                    <input type="checkbox" name="detail_2" value="1">
                                </div>
                                <div>
                                    โดยไม่ได้รับใบอนุญาตหรือใบรับแจ้งจากเจ้าพนักงานท้องถิ่น
                                </div>
                            </div>
                            <div class="d-flex mb-2">
                                <div class="mr-2">
                                    <input type="checkbox" name="detail_2" value="1">
                                </div>
                                <div>
                                    ให้ผิดไปจากแผนผังบริเวณ แบบแปลน และรายการประกอบแบบแปลนตลอดจนวิธีการ 
                                    หรือเงื่อนไขที่เจ้าพนักงานท้องถิ่นกำหนดไว้ในใบอนุญาตเลขที่
                                    <input type="text" class="form-control form-control-sm d-inline-block" 
                                        style="width:150px;" name="address_postcode">
                                </div>
                            </div>
                            <div class="row mb-2 align-items-center">
                                <div class="col-md-1">ลงวันที่</div>
                                <div class="col-md-1">
                                    <input type="text" class="form-control form-control-sm" name="address_no">
                                </div>
                                <div class="col-md-1 text-right">เดือน</div>
                                <div class="col-md-2">
                                    <input type="text" class="form-control form-control-sm" name="address_moo">
                                </div>
                                <div class="col-md-1 text-right">พ.ศ.</div>
                                <div class="col-md-2">
                                    <input type="text" class="form-control form-control-sm" name="address_soi">
                                </div>
                                <div class="col-md-4">หรือผิดไปจากที่ได้แจ้งไว้ตามใบรับแจ้ง</div>
                            </div>
                            <div class="row mb-2 align-items-center">
                                <div class="col-md-1">เลขที่</div>
                                <div class="col-md-1">
                                    <input type="text" class="form-control form-control-sm" name="address_road">
                                </div>
                                <div class="col-md-1 text-right">ลงวันที่</div>
                                <div class="col-md-2">
                                    <input type="text" class="form-control form-control-sm" name="address_tambon">
                                </div>
                                <div class="col-md-1 text-right">เดือน</div>
                                <div class="col-md-2">
                                    <input type="text" class="form-control form-control-sm" name="address_amphur">
                                </div>
                                <div class="col-md-1 text-right">พ.ศ.</div>
                                <div class="col-md-2">
                                    <input type="text" class="form-control form-control-sm" name="address_amphur">
                                </div>
                            </div>
                            <div class="d-flex mb-2">
                                <div class="mr-2">
                                    <input type="checkbox" name="detail_2" value="1">
                                </div>
                                <input type="text" class="form-control form-control-sm" name="address_amphur">
                            </div>
                        </div>
                        
                        <div class="pl-4 mb-4">
                            <div class="d-flex mb-2">
                                <div class="mb-1 text-justify" style="text-indent: 40px;">
                                    อาศัยอำนาจตามความในมาตรา 41 แห่งพระราชบัญญัติควบคุมอาคาร พ.ศ. 2522 ให้ท่านดำเนินการดังนี้
                                </div>
                            </div>
                            <div class="row mb-2 align-items-center">
                                <div class="col-auto">
                                    <input type="checkbox" name="sec41_opt1" value="1">
                                </div>
                                <div class="col-auto">
                                    (1) ยื่นคำขออนุญาต
                                </div>
                                <div class="col-md-3 col-sm-4 mb-1 mb-sm-0">
                                    <input type="text" class="form-control form-control-sm" name="sec41_opt1_no">
                                </div>
                                <div class="col-auto">
                                    ตามแบบ ข
                                </div>
                                <div class="col-md-3 col-sm-4 mb-1 mb-sm-0">
                                    <input type="text" class="form-control form-control-sm" name="sec41_opt1_form">
                                </div>
                                <div class="col">
                                    หรือดำเนินการแจ้งต่อ เจ้าพนักงานท้องถิ่น ตามมาตรา 39 ทวิ
                                </div>
                            </div>
                            <div class="row mb-2 align-items-center">
                                <div class="col-auto">
                                    ภายใน
                                </div>
                                <div class="col-md-3 col-sm-4 mb-1 mb-sm-0">
                                    <input type="text" class="form-control form-control-sm" name="sec41_opt1_within">
                                </div>
                                <div class="col-auto">
                                    (
                                </div>
                                <div class="col-md-3 col-sm-4 mb-1 mb-sm-0">
                                    <input type="text" class="form-control form-control-sm" name="sec41_opt1_days">
                                </div>
                                <div class="col-auto">
                                    ) วัน** นับแต่วันที่ท่านได้รับคำสั่งนี้
                                </div>
                            </div>
                            <div class="row mb-2 align-items-center">
                                <div class="col-auto">
                                    <input type="checkbox" name="sec41_opt2" value="1">
                                </div>
                                <div class="col">
                                    (2) ดำเนินการ
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col">
                                    (ก) แก้ไขเปลี่ยนแปลงให้ถูกต้องตามรายละเอียดต่อไปนี้*
                                </div>
                            </div>

                            <div class="row mb-2 align-items-center">
                                <div class="col">
                                    <input type="text" class="form-control form-control-sm" name="sec41_detail1">
                                </div>
                            </div>
                            <div class="row mb-2 align-items-center">
                                <div class="col">
                                    <input type="text" class="form-control form-control-sm" name="sec41_detail2">
                                </div>
                            </div>
                            <div class="row mb-2 align-items-center">
                                <div class="col">
                                    <input type="text" class="form-control form-control-sm" name="sec41_detail3">
                                </div>
                            </div>
                            <div class="row mb-2 align-items-center">
                                <div class="col">
                                    <input type="text" class="form-control form-control-sm" name="sec41_detail4">
                                </div>
                            </div>
                            <div class="row mb-2 align-items-center">
                                <div class="col-auto">
                                    ภายใน
                                </div>
                                <div class="col-md-3 col-sm-4 mb-1 mb-sm-0">
                                    <input type="text" class="form-control form-control-sm" name="sec41_opt2_within">
                                </div>
                                <div class="col-auto">
                                    (
                                </div>
                                <div class="col-md-3 col-sm-4 mb-1 mb-sm-0">
                                    <input type="text" class="form-control form-control-sm" name="sec41_opt2_days">
                                </div>
                                <div class="col-auto">
                                    ) วัน** นับแต่วันที่ท่านได้รับคำสั่งนี้ และ
                                </div>
                            </div>
                            <div class="row mb-2 align-items-center">
                                <div class="col-auto">
                                    (ข) ยื่นคำขออนุญาต
                                </div>
                                <div class="col-md-3 col-sm-4 mb-1 mb-sm-0">
                                    <input type="text" class="form-control form-control-sm" name="sec41_opt2_reqno">
                                </div>
                                <div class="col-auto">
                                    ตามแบบ ข
                                </div>
                                <div class="col-md-3 col-sm-4 mb-1 mb-sm-0">
                                    <input type="text" class="form-control form-control-sm" name="sec41_opt2_reqno">
                                </div>
                            </div>
                            <div class="row mb-2 align-items-center">
                                <div class="col-auto">
                                    หรือดำเนินการแจ้งต่อเจ้าพนักงานท้องถิ่น ตามมาตรา 39 ทวิ ภายใน
                                </div>
                                <div class="col-md-3 col-sm-4 mb-1 mb-sm-0">
                                    <input type="text" class="form-control form-control-sm" name="sec41_opt2_within2">
                                </div>
                                <div class="col-auto">
                                    (
                                </div>
                                <div class="col-md-3 col-sm-4 mb-1 mb-sm-0">
                                    <input type="text" class="form-control form-control-sm" name="sec41_opt2_days2">
                                </div>
                                <div class="col-auto">
                                    ) วัน** นับแต่วันพ้นกำหนดตาม (ก)
                                </div>
                            </div>
                            <div class="d-flex mb-2">
                                <div>
                                    หากพ้นกำหนดระยะเวลาตาม (1) หรือ (2) (ก) หรือ (ข) แล้ว จะดำเนินการตามกฎหมายต่อไป
                                </div>
                            </div>
                            <div class="mb-5 text-justify" style="text-indent: 40px;">
                                อนึ่ง ผู้ได้รับคำสั่งจากเจ้าพนักงานท้องถิ่นมีสิทธิอุทธรณ์คำสั่งดังกล่าวต่อคณะกรรมการพิจารณา
                                อุทธรณ์ตามมาตรา 52 แห่งพระราชบัญญัติควบคุมอาคาร พ.ศ. 2522 ภายในสามสิบวันนับแต่วันทราบคำสั่ง
                                โดยทำเป็น หนังสือและยื่นต่อเจ้าพนักงานท้องถิ่นผู้ออกคำสั่งนี้
                            </div>
                        </div>
                        
                        <div class="row mb-4">
                            <div class="col-md-5"></div>
                            <div class="col-md-7 text-center">
                                <div class="mb-3">
                                    (ลายมือชื่อ) ............................................................ ผู้ออกคำสั่ง
                                </div>
                                <div class="mb-2">
                                    ( ............................................................ )
                                </div>
                                <div>
                                    ............................................................ ปฏิบัติงานแทน<br>
                                    ผู้ว่าการการนิคมอุตสาหกรรมแห่งประเทศไทย
                                </div>
                            </div>
                        </div>
                        
                        <div class="text-center p-3">
                            <div class="font-weight-bold mb-2">เลือกส่งผู้พิจารณา อนุมัติ อนุญาต เอกสาร</div>
                            <div class="row justify-content-center mb-3">
                                <div class="col-md-6">
                                    <select class="form-control form-control-sm" name="document_owner">
                                        <option value="">-- เลือกผู้รับผิดชอบ --</option>
                                    </select>
                                </div>
                            </div>
                            <div class="font-weight-bold mb-2">หมายเหตุเพิ่มเติม (แจ้งผู้พิจารณาอนุมัติ อนุญาต)</div>
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <textarea class="form-control" name="document_remark" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <br />
                    <div class="row">
                        <div class="col-lg-2">
                            <input class='btn btn-danger btn-lg btn-block' name="cancel" type="button" id="cancel" value="ยกเลิกและกลับสู่หน้าหลัก" onclick="window.location='center_ieat_ent/page_office'" />
                        </div>
                        <div class="col-lg-3">
                            &nbsp;
                        </div>
                        <div class="col-lg-7">
                            <div class="row">
                                <div class="col-lg-5">
                                    <input class='btn btn-secondary btn-lg btn-block' name="Submit_return" type="button" id="Submit" value="บันทึกการจัดเตรียมเอกสาร" onclick="return confirm('บันทึกการจัดเตรียมเอกสาร !!!')" onclick="window.location='center_ieat_ent/page_office'" />
                                </div>
                                <div class="col-lg-3">
                                    <input class='btn btn-success btn-lg btn-block' name="Submit_continue" type="button" id="Submit" value="ดูร่างใบอนุญาต" onclick="return confirm('ดูร่างใบอนุญาต !!!')" onclick="window.location='center_ieat_ent/page_office'" />
                                </div>
                                <div class="col-lg-4">
                                    <input class='btn btn-primary btn-lg btn-block' name="Submit_approve" type="button" id="Submit" value="รายงานแจ้งผู้อนุมัติอนุญาต" onclick="return confirm('รายงานแจ้งผู้อนุมัติอนุญาต !!!')" onclick="window.location='center_ieat_ent/page_office'" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.tab-pane -->
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