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
    <font style="color: #6007b3ff; font-size: 18px;"><b>คำขอขุดดิน ถมดิน</b></font>
    <b>&nbsp;&nbsp;/&nbsp;&nbsp;</b>
    <font style="color: #6007b3ff; font-size: 18px;"><b>ขุดดิน ถมดิน</b></font>
    <b>&nbsp;&nbsp;/&nbsp;&nbsp;</b>
    <font style="color: #000000ff; font-size: 18px;"><b>1-01-1-401-00001-2568</b></font>
</div>
<br />
<div class="class_header_page_02">
    <font style="color: #000000ff; font-size: 25px;"><b>คำขอ 1-01-1-401-00001-2568</b></font>
    &nbsp;&nbsp;
    <font style="color: #000000ff; font-size: 18px;"><b>ขุดดิน ถมดิน</b></font>
</div>
<br /><br />
<div class="col-md-12">
    <div class="card">
        <div class="card-header p-4" style="text-align: center;">
            <ul class="nav nav-pills">
                <li class="nav-item"><a class="nav-link active" href="#tab1" data-toggle="tab"><span class="font_header_detail"><b>ข้อมูลทั่วไป</b></span></a></li>
                <li class="nav-item"><a class="nav-link" href="#tab2" data-toggle="tab"><span class="font_header_detail"><b>ข้อมูลเกี่ยวกับการขออนุญาต</b></span></a></li>
                <li class="nav-item"><a class="nav-link" href="#tab3" data-toggle="tab"><span class="font_header_detail"><b>เอกสารประกอบการขออนุญาต</b></span></a></li>
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
                        <div class="card-header">
                            <span class="font_header"><b>ข้อมูลที่ตั้งโรงงานตามโฉนดที่ดิน</b></span>
                        </div>
                        <div class="table-responsive div_header p-4">
                            <input type="hidden" name="factory_address_id_view" value="<?php echo $datashow['factory_address_id_view']; ?>" />
                            <table class="table">
                                <tr>
                                    <td>
                                        <label class="control-label col-lg-12"><span class="font_header_detail"><b>เลขที่โฉนดอ้างอิง</b></span></label>
                                    </td>
                                    <td colspan="2">
                                        99999
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="bottom">
                                        <label class="control-label col-lg-12"><span class="font_header_detail"><b>จังหวัด</b></span></label>
                                    </td>
                                    <td valign="top">
                                        สมุทรปราการ
                                    </td>
                                    <td valign="bottom">
                                        <label class="control-label col-lg-12"><span class="font_header_detail"><b>อำเภอ/เขต</b></span></label>
                                    </td>
                                    <td valign="top">
                                        บางบ่อ
                                    </td>
                                    <td valign="bottom">
                                        <label class="control-label col-lg-12"><span class="font_header_detail"><b>ตำบล/แขวง</b></span></label>
                                    </td>
                                    <td valign="top">
                                        คลองสวน
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="card p-4">
                        <div class="row">
                            <div class="col-4" align="left">
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
                            <div class="col-4" align="left">
                                <div class="table-responsive div_header p-4">
                                    <div class="card-header">
                                        <span class="font_header"><b>ข้อมูลที่อยู่สำหรับออกใบกำกับภาษี</b></span>
                                    </div>
                                    <br />
                                    <div class="row row-form">
                                        <div class="col-lg-12">
                                            <div class="col-lg-12">
                                                <select class="form-control">
                                                    <option value="0">-- เลือกข้อมูลที่อยู่สำหรับออกใบกำกับภาษี --</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4" align="left">
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

                <div class="tab-pane" id="tab2">
                    <div class="card p-4">
                        <div class="card-header">
                            <span class="font_header"><b>ข้อมูลการขออนุญาต</b></span>
                        </div>
                        <div class="table-responsive div_header p-4">
                            <table width="100%" border="0" align="center" cellpadding="5" cellspacing="1" class="table table-bordered">
                                <tr>
                                    <td width="10%">
                                        <font color="red">***</font> เลือกรายการ
                                    </td>
                                    <td>
                                        <select name="type_change_dig" id="dropdown">
                                            <option value="0">-- เลือกข้อมูล --</option>
                                        </select>
                                    </td>
                                </tr>
                            </table>
                            <table width="100%" border="0" align="center" cellpadding="5" cellspacing="1" class="table table-bordered">
                                <tr>
                                    <td width="10%">
                                        <font color="red">***</font> กรอกรายละเอียด
                                    </td>
                                    <td>
                                        ความกว้าง <input type="text" id="data_002" name="data_002" value="<?php echo $datashow['data_002']; ?>" /> เมตร
                                        ความยาว <input type="text" id="data_003" name="data_003" value="<?php echo $datashow['data_003']; ?>" /> เมตร
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                        ความลึก/ความสูง จากระดับดินเดิม <input type="text" id="data_004" name="data_004" value="<?php echo $datashow['data_004']; ?>" /> เมตร
                                        พื้นที่ <input type="text" id="data_005" name="data_005" value="<?php echo $datashow['data_005']; ?>" /> ตารางเมตร
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                        เพื่อใช้เป็น <input size="120" type="text" id="data_006" name="data_006" value="<?php echo $datashow['data_006']; ?>" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                        กำหนดแล้วเสร็จภายใน <input type="text" id="data_007" name="data_007" value="<?php echo $datashow['data_007']; ?>" /> วัน
                                        โดยจะเริ่มขุดดิน/ถมดินวันที่ <input type="text" id="data_008" name="data_008" value="<?php echo $datashow['data_008']; ?>" />
                                        และจะแล้วเสร็จวันที่ <input type="text" id="data_009" name="data_009" value="<?php echo $datashow['data_009']; ?>" />
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="card p-4">
                        <div class="card-header">
                            <span class="font_header"><b>ผู้ออกแบบ</b></span>
                        </div>
                        <div class="table-responsive div_header p-4">
                            <input class="btn btn-success" type="button" value="เพิ่มข้อมูล" onClick="addRow03('datatable03')" />
                            <input class="btn btn-danger" type="button" value="ลบข้อมูล" onClick="deleteRow03('datatable03')" />
                            <br /><br />
                            <table width="100%" border="0" align="center" cellpadding="5" cellspacing="1" id="datatable03" class="table-bordered">
                                <tr>
                                    <th class="text-center">เลือก</th>
                                    <th class="text-center">คำนำหน้าชื่อ<br />(Title)</th>
                                    <th class="text-center">ชื่อ<br />(First Name)</th>
                                    <th class="text-center">นามสกุล<br />(Last Name)</th>
                                    <th class="text-center">ประเภท (Category)</th>
                                    <th class="text-center">สาขา(Major)</th>
                                    <th class="text-center">เลขทะเบียน<br />ประกอบวิชาชีพ<br />(License ID.)</th>
                                    <th class="text-center">วันที่ใบอนุญาตหมดอายุ<br />(Issue ID.)</th>
                                </tr>
                                <tr>
                                    <td align="left"><input type="checkbox" name="chk2" value="" /></td>
                                    <td align="left">
                                        <select name="title_id_view[]">
                                            <option value="0">-- เลือกข้อมูล --</option>
                                        </select>
                                    </td>
                                    <td align="left">
                                        <input name="firstname_view[]" type="text" id="firstname_view" />
                                    </td>
                                    <td align="left">
                                        <input name="lastname_view[]" type="text" id="lastname_view" />
                                    </td>
                                    <td align="left">
                                        <input name="construction_job_id_view[]" type="hidden" id="construction_job_id_view" value="2" />
                                        <select name="category_id_view[]" onchange="fncCategoryChange(this);">
                                            <option value="0">-- เลือกข้อมูล --</option>
                                        </select>
                                    </td>
                                    <td align="left">
                                        โยธา <input name="major_id_view[]" type="hidden" value="โยธา" />
                                    </td>
                                    <td align="left">
                                        <input name="engineer_license_type_id_view[]" type="text" id="engineer_license_type_id_view" maxlength='20' />
                                    </td>
                                    <td align="left">
                                        <input name="license_issue_date_view[]" type="text" id="license_issue_date_view" readonly />
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <br />
                    <div class="card p-4">
                        <div class="card-header">
                            <span class="font_header"><b>ผู้ควบคุมงาน</b></span>
                        </div>
                        <div class="table-responsive div_header p-4">
                            <input class="btn btn-success" type="button" value="เพิ่มข้อมูล" onClick="addRow04('datatable04')" />
                            <input class="btn btn-danger" type="button" value="ลบข้อมูล" onClick="deleteRow04('datatable04')" />
                            <br /><br />
                            <table width="100%" border="0" align="center" cellpadding="5" cellspacing="1" id="datatable03" class="table-bordered">
                                <tr>
                                    <th class="text-center">เลือก</th>
                                    <th class="text-center">คำนำหน้าชื่อ<br />(Title)</th>
                                    <th class="text-center">ชื่อ<br />(First Name)</th>
                                    <th class="text-center">นามสกุล<br />(Last Name)</th>
                                    <th class="text-center">ประเภท (Category)</th>
                                    <th class="text-center">สาขา(Major)</th>
                                    <th class="text-center">เลขทะเบียน<br />ประกอบวิชาชีพ<br />(License ID.)</th>
                                    <th class="text-center">วันที่ใบอนุญาตหมดอายุ<br />(Issue ID.)</th>
                                </tr>
                                <tr>
                                    <td align="left"><input type="checkbox" name="chk2" value="" /></td>
                                    <td align="left">
                                        <select name="title_id_view[]">
                                            <option value="0">-- เลือกข้อมูล --</option>
                                        </select>
                                    </td>
                                    <td align="left">
                                        <input name="firstname_view[]" type="text" id="firstname_view" />
                                    </td>
                                    <td align="left">
                                        <input name="lastname_view[]" type="text" id="lastname_view" />
                                    </td>
                                    <td align="left">
                                        <input name="construction_job_id_view[]" type="hidden" id="construction_job_id_view" value="3" />
                                        <select name="category_id_view[]" onchange="fncCategoryChange(this);">
                                            <option value="0">-- เลือกข้อมูล --</option>
                                        </select>
                                    </td>
                                    <td align="left">
                                        โยธา <input name="major_id_view[]" type="hidden" value="โยธา" />
                                    </td>
                                    <td align="left">
                                        <input name="engineer_license_type_id_view[]" type="text" id="engineer_license_type_id_view" maxlength='20' />
                                    </td>
                                    <td align="left">
                                        <input name="license_issue_date_view[]" type="text" id="license_issue_date_view" readonly />
                                    </td>
                                </tr>
                            </table>
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

                            <div class="table-responsive div_header p-4">
                                <div class="card-header">
                                    <span class="font_header_detail"><b>เอกสารประกอบการขอหนังสือแจ้งการขุดดิน/ถมดิน (กนอ. 04/1)</b></span>
                                </div>
                                <table width="100%" border="0" align="center" cellpadding="5" cellspacing="1" class="table table-bordered">
                                    <tr>
                                        <td width='70%'>
                                            <label class="col-lg-12">1. หนังสือรับรองการจดทะเบียนจัดตั้งนิติบุคคลและวัตถุประสงค์การจัดตั้งของผู้ประกอบการ(ไม่เกิน 6 เดือน นับตั้งแต่วันที่ออกหนังสือ)</label>
                                        </td>
                                        <td>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">อัพโหลดไฟล์ข้อมูล</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="col-lg-12">2. หนังสือมอบอำนาจ ปิดอากรแสตมป์</label>
                                        </td>
                                        <td>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">อัพโหลดไฟล์ข้อมูล</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <label class="col-lg-12">ประกอบด้วย</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="col-lg-12">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.1 สำเนาบัตรประจำตัวประชาชน หรือ สำเนาหนังสือเดินทาง (Passport) ผู้มอบอำนาจ</label>
                                        </td>
                                        <td>
                                            &nbsp;
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="col-lg-12">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.2 สำเนาบัตรประจำตัวประชาชน หรือ สำเนาหนังสือเดินทาง (Passport) ผู้รับมอบอำนาจ</label>
                                        </td>
                                        <td>
                                            &nbsp;
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="col-lg-12">3. สำเนาโฉนดที่ดินหน้า-หลังและหนังสือยินยอมให้ทำการขุดดินหรือถมดิน</label>
                                        </td>
                                        <td>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">อัพโหลดไฟล์ข้อมูล</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="col-lg-12">4. ใบอนุญาตใช้ที่ดินฉบับล่าสุดพร้อมเงื่อนไขแนบท้าย</label>
                                        </td>
                                        <td>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">อัพโหลดไฟล์ข้อมูล</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="col-lg-12">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.1 เงื่อนไขแนบท้าย</label>
                                        </td>
                                        <td>
                                            &nbsp;
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="col-lg-12">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.2 สัญญา</label>
                                        </td>
                                        <td>
                                            &nbsp;
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="col-lg-12">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.3 สำเนาแผนผังแปลงที่ดินแนบท้ายสัญญาใช้ทีดิน</label>
                                        </td>
                                        <td>
                                            &nbsp;
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="col-lg-12">5. ผังบริเวณพร้อมระบุตำแหน่งบริเวณที่จะขุดดินหรือถมดิน (Layout Plan)</label>
                                        </td>
                                        <td>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">อัพโหลดไฟล์ข้อมูล</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="col-lg-12">6. แบบแปลนและรูปตัด ที่จะขุดดินหรือถมดิน</label>
                                        </td>
                                        <td>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">อัพโหลดไฟล์ข้อมูล</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="col-lg-12">7. รายการคำนวณ</label>
                                        </td>
                                        <td>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">อัพโหลดไฟล์ข้อมูล</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="col-lg-12">8. ขั้นตอนการปฏิบัติงานและมาตรการป้องกัน พร้อมทั้งระบบระบายน้ำ</label>
                                        </td>
                                        <td>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">อัพโหลดไฟล์ข้อมูล</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="col-lg-12">9. หนังสือเห็นชอบจาก กนอ. หรือผู้พัฒนานิคมอุตสาหกรรม ในการขนย้ายดิน</label>
                                        </td>
                                        <td>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">อัพโหลดไฟล์ข้อมูล</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="col-lg-12">10. เอกสารอื่นๆ ที่เกี่ยวข้อง</label>
                                        </td>
                                        <td>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">อัพโหลดไฟล์ข้อมูล</label>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <br />
                            <div class="table-responsive div_header p-4">
                                <div class="card-header">
                                    <span class="font_header_detail"><b>หนังสือรับรองของผู้ประกอบวิชาชีพสถาปัตยกรรมควบคุม/วิศวกรรมควบคุม</b></span>
                                </div>
                                <table width="100%" border="0" align="center" cellpadding="5" cellspacing="1" class="table table-bordered">
                                    <tr>
                                        <td width='70%'>
                                            <label class="col-lg-12">1. หนังสือรับรองผู้ประกอบวิชาชีพวิศวกรรมควบคุม (ผู้คำนวณ) <a href="form_01.pdf" target="_blank">แบบฟอร์ม Download กนอ. ขดถ. 1</a></label>
                                        </td>
                                        <td>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">อัพโหลดไฟล์ข้อมูล</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="col-lg-12">2. หนังสือแสดงความยินยอมของผู้ควบคุมงาน (ขุดดินหรือถมดิน) <a href="form_02.pdf" target="_blank">แบบฟอร์ม Download กนอ. ขดถ. 2</a></label>
                                        </td>
                                        <td>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">อัพโหลดไฟล์ข้อมูล</label>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
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