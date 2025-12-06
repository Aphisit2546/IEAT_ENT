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
    <a href="ieat_ois_003" style="color: #6007b3ff; font-size: 18px;"><b>จัดทำหนังสือคำสั่ง ค.2 (คำสั่งไม่อนุญาตตามมาตรา 25 วรรคหนึ่ง / มาตรา 31 ประกอบกับมาตรา 25 /มาตรา 33 ประกอบกับมาตรา 25 / มาตรา 34 หรือไม่ต่ออายุใบอนุญาตตามมาตรา 35)</b></a>
    <b>&nbsp;&nbsp;/&nbsp;&nbsp;</b>
    <a style="color: #000000ff; font-size: 18px;"><b>ieat_office_ois_003/p1</b></a>
</div>
<br />
<div class="class_header_page_02 text-center">
    <div class="row row-form mb-3">
        <div class="col-12">
            <span style="color:#000; font-size:25px; font-weight:bold;">
                จัดทำหนังสือคำสั่ง ค.2 (คำสั่งไม่อนุญาตตามมาตรา 25 วรรคหนึ่ง / 
                มาตรา 31 ประกอบกับมาตรา 25 /มาตรา 33 ประกอบกับมาตรา 25 / 
                มาตรา 34 หรือไม่ต่ออายุใบอนุญาตตามมาตรา 35)
            </span>
        </div>
    </div>
    <div class="row row-form justify-content-center">
        <div class="col-lg-2 col-md-3 col-sm-4 mb-2">
            <div class="div_header_focus p-2">
                <span class="font_header_office_focus"><b>ร่างเอกสาร</b></span>
            </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 mb-2">
            <div class="div_header p-2">
                <span class="font_header_office"><b>พิจารณา</b></span>
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
                <li class="nav-item"><a class="nav-link" href="#tab2" data-toggle="tab"><span class="font_header_office_alert"><b><font color='red'>*</font>การจัดเตรียมเอกสาร<font color='red'>*</font></b></span></a></li>
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
                        แบบ ค.2
                    </div>
                    <div>
                        <div class="text-center mb-4">
                            <img src="https://epp-ieat-dev.nidprotech.com/new_epp_ieat_tester_67/assets/logo_new.png" width="120" alt="logo"><br>
                            <div style="font-weight: bold; font-size: 1.1em;">
                                คำสั่งไม่อนุญาตตามมาตรา 25 วรรคหนึ่ง / มาตรา 31 ประกอบกับมาตรา 25 /<br>
                                มาตรา 33 ประกอบกับมาตรา 25 / มาตรา 34 หรือไม่ต่ออายุใบอนุญาตตามมาตรา 35
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
                        <div class="row mb-3 align-items-center" >
                            <div class="col-md-2" style="text-indent: 40px;">
                                แจ้งความมายัง
                            </div>
                            <div class="col-md-10 mb-2">
                                <input type="text" class="form-control form-control-sm" name="notify_to">
                            </div>
                            <div class="col-md-12">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="applicant_status[]" value="owner" id="chk_owner">
                                    <label class="form-check-label" for="chk_owner">เจ้าของอาคาร</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="applicant_status[]" value="occupier" id="chk_occupier1">
                                    <label class="form-check-label" for="chk_occupier1">ผู้ครอบครองอาคาร</label>
                                </div>
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
                        
                        <div class="row mb-3 align-items-center" style="text-indent: 40px;">
                            <div class="col-md-4">
                                ตามคำขออนุญาต/ต่ออายุใบอนุญาต เลขที่
                            </div>
                            <div class="col-md-5">
                                <input type="text" class="form-control form-control-sm" name="factory_activity">
                            </div>
                            <div class="col-md-3">
                                ของท่าน
                            </div>
                        </div>
                        <div class="row mb-2 align-items-center">
                            <div class="col-md-1">
                                ตามแบบ ข
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control form-control-sm" name="form_b_no">
                            </div>
                            <div class="col-md-1 text-right">
                                เลขที่
                            </div>
                            <div class="col-md-1">
                                <input type="text" class="form-control form-control-sm" name="license_no">
                            </div>
                            <div class="col-md-1 text-right">
                                ลงวันที่
                            </div>
                            <div class="col-md-1">
                                <input type="text" class="form-control form-control-sm" name="license_no">
                            </div>
                            <div class="col-md-1 text-right">
                                เดือน
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control form-control-sm" name="license_no">
                            </div>
                            <div class="col-md-1 text-right">
                                พ.ศ.
                            </div>
                            <div class="col-md-1">
                                <input type="text" class="form-control form-control-sm" name="license_no">
                            </div>
                        </div>
                        
                        <div class="pl-4 mb-4">
                            <div class="mb-2 text-justify" style="text-indent: 40px;">
                                เจ้าพนักงานท้องถิ่น ได้พิจารณาตามพระราชบัญญัติควบคุมอาคาร พ.ศ. 2522 แล้ว ปรากฏว่า *
                            </div>
                            <div class="row mb-2 align-items-center">
                                <div class="col">
                                    <input type="text" class="form-control form-control-sm" name="sec41_detail2">
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
                                <div class="col">
                                    <input type="text" class="form-control form-control-sm" name="sec41_detail2">
                                </div>
                            </div>
                            <div class="row mb-2 align-items-center">
                                <div class="col">
                                    <input type="text" class="form-control form-control-sm" name="sec41_detail2">
                                </div>
                            </div>
                        </div>
                        
                        <div class="pl-4 mb-4">
                            <div class="d-flex mb-2">
                                <div class="text-justify" style="text-indent: 40px;">
                                    อาศัยอํานาจตามความในมาตรา 25 วรรคหนึ่ง / มาตรา 32 ประกอบกับมาตรา 25 /
                                    มาตรา 33 ประกอบกับมาตรา 25 / มาตรา 34 หรือมาตรา 35 แห่งพระราชบัญญัติควบคุมอาคาร พ.ศ. 2522 
                                    เจ้าพนักงานท้องถิ่น ไม่อนุญาต ไม่ต่ออายุใบอนุญาตให้ทําการดังต่อไปนี้ตามที่ท่านได้ขออนุญาตไว้
                                </div>
                            </div>
                            <div class="d-flex mb-2">
                                <div class="mr-2"><input type="checkbox" name="detail_2"></div>
                                <div>ก่อสร้างอาคาร</div>
                            </div>
                            <div class="d-flex mb-2">
                                <div class="mr-2"><input type="checkbox" name="detail_2"></div>
                                <div>ดัดแปลงอาคาร</div>
                            </div>
                            <div class="d-flex mb-2">
                                <div class="mr-2"><input type="checkbox" name="detail_2"></div>
                                <div>รื้อถอนอาคาร</div>
                            </div>
                            <div class="d-flex mb-2">
                                <div class="mr-2"><input type="checkbox" name="detail_2"></div>
                                <div>เคลื่อนย้ายอาคาร</div>
                            </div>
                            <div class="d-flex mb-2">
                                <div class="mr-2"><input type="checkbox" name="detail_2"></div>
                                <div>
                                    แก้ไขเปลี่ยนแปลงแผนผังบริเวณ แบบแปลน และรายการประกอบแบบแปลน ตลอดจนวิธีการหรือเงื่อนไขที่เจ้าพนักงานท้องถิ่นกำหนด ให้ผิดไปจากที่ได้รับอนุญาตหรือแจ้งไว้
                                </div>
                            </div>
                            <div class="d-flex mb-2">
                                <div class="mr-2"><input type="checkbox" name="detail_2"></div>
                                <div>ใช้หรือเปลี่ยนการใช้อาคาร</div>
                            </div>
                            <div class="d-flex mb-2">
                                <div class="mr-2"><input type="checkbox" name="detail_2"></div>
                                <div>ดัดแปลงหรือใช้ที่จอดรถ ที่กลับรถ และทางเข้าออกของรถเพื่อการอื่น</div>
                            </div>
                            <div class="text-justify" style="text-indent: 40px;">
                                อนึ่ง ผู้ได้รับคำสั่งจากเจ้าพนักงานท้องถิ่นมีสิทธิอุทธรณ์คำสั่งดังกล่าวต่อคณะกรรมการพิ
                                จารณาอุทธรณ์ตามมาตรา 52 แห่งพระราชบัญญัติควบคุมอาคาร พ.ศ. 2522 
                                ภายในสามสิบวันนับแต่วันทราบคำสั่ง โดยทำเป็นหนังสือและยื่นต่อเจ้าพนักงานท้องถิ่นผู้ออกคำสั่งนี้
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