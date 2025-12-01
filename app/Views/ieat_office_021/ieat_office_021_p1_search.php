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
    <font style="color: #6007b3ff; font-size: 18px;"><b>คำขอก่อสร้างอาคาร</b></font>
    <b>&nbsp;&nbsp;/&nbsp;&nbsp;</b>
    <font style="color: #6007b3ff; font-size: 18px;"><b>ข.1</b></font>
    <b>&nbsp;&nbsp;/&nbsp;&nbsp;</b>
    <font style="color: #000000ff; font-size: 18px;"><b>1-01-1-201-00001-2568</b></font>
</div>
<br />
<div class="class_header_page_02">

    <div class="row row-form">
        <div class="col-lg-4">
            <font style="color: #000000ff; font-size: 25px;"><b>คำขอ 1-01-1-201-00001-2568</b></font>
            &nbsp;&nbsp;
            <font style="color: #000000ff; font-size: 18px;"><b>ข.1</b></font>
            &nbsp;&nbsp;
        </div>
        <div class="col-lg-2">
            <div class="div_header_focus p-2">
                <center><span class="font_header_office_focus"><b>ตรวจสอบ</b></span></center>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="div_header p-2">
                <center><span class="font_header_office"><b>ร่างเอกสาร</b></span></center>
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
                <li class="nav-item"><a class="nav-link" href="#tab3" data-toggle="tab"><span class="font_header_detail"><b>เอกสารประกอบการขออนุญาต</b></span></a></li>
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
                            <div class="col-lg-12">
                                <span class="font_header"><b>ข้อมูลอาคารที่จะขออนุญาต <font color='red'><b>*</b></font></b></span>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <label><input checked type="radio" id="construction_type_id_view_1" name="construction_type_id_view" value="1" <?php if ($data_show['construction_type_id_view'] == '1'): echo "checked='checked'";
                                                                                                                                                endif ?> /> ก่อสร้างอาคาร</label>&nbsp;
                                <label><input disabled type="radio" id="construction_type_id_view_2" name="construction_type_id_view" value="2" <?php if ($data_show['construction_type_id_view'] == '2'): echo "checked='checked'";
                                                                                                                                                endif ?> /> ดัดแปลงอาคาร </label>&nbsp;
                                <label><input disabled type="radio" id="construction_type_id_view_3" name="construction_type_id_view" value="3" <?php if ($data_show['construction_type_id_view'] == '3'): echo "checked='checked'";
                                                                                                                                                endif ?> /> รื้อถอนอาคาร </label>&nbsp;
                                <label><input disabled type="radio" id="construction_type_id_view_4" name="construction_type_id_view" value="4" <?php if ($data_show['construction_type_id_view'] == '4'): echo "checked='checked'";
                                                                                                                                                endif ?> /> ก่อสร้างและดัดแปลงอาคาร </label>&nbsp;
                                <label><input disabled type="radio" id="construction_type_id_view_4" name="construction_type_id_view" value="5" <?php if ($data_show['construction_type_id_view'] == '5'): echo "checked='checked'";
                                                                                                                                                endif ?> /> เคลื่อนย้ายอาคาร </label>
                            </div>
                        </div>
                    </div>

                    <div class="card p-4">
                        <div class="card-header">
                            <span class="font_header"><b>รายละเอียดอาคารที่จะขออนุญาต</b></span>
                        </div>
                        <div class="table-responsive div_header p-4">
                            <table width="100%" border="0" align="center" cellpadding="5" cellspacing="1" id="datatable02" class="table">
                                <tr>
                                    <th class="text-center">ลักษณะอาคาร</th>
                                    <th class="text-center">จำนวนชั้น</th>
                                    <th class="text-center">ลักษณะประกอบอื่นๆ</th>
                                    <th class="text-center">จำนวนอาคาร</th>
                                    <th class="text-center">หน่วย</th>
                                    <th class="text-center">ความกว้าง : เมตร</th>
                                    <th class="text-center">ความยาว: เมตร</th>
                                    <th class="text-center">ความสูง : เมตร</th>
                                    <th class="text-center">พื้นที่ : ตารางเมตร</th>
                                    <th class="text-center">เพื่อใช้เป็น</th>
                                </tr>
                                <tr>
                                    <td align="left">
                                        ค.ส.ล.
                                    </td>
                                    <td align="left">
                                        1
                                    </td>
                                    <td align="left">
                                        -
                                    </td>
                                    <td align="left">
                                        1
                                    </td>
                                    <td align="left">
                                        หลัง
                                    </td>
                                    <td align="left">
                                        50
                                    </td>
                                    <td align="left">
                                        50
                                    </td>
                                    <td align="left">
                                        10
                                    </td>
                                    <td align="left">
                                        25,000
                                    </td>
                                    <td align="left">
                                        คลังสินค้า
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <br />
                    <div class="card p-4">
                        <div class="card-header">
                            <span class="font_header"><b>ผู้ออกแบบและควบคุมงาน</b></span>
                        </div>
                        <div class="table-responsive div_header p-4">
                            <table width="100%" border="0" align="center" cellpadding="5" cellspacing="1" id="datatable03" name='datatable03' class="table">
                                <tr>
                                    <th class="text-center"><span class="font_header_detail">คำนำหน้าชื่อ</span></th>
                                    <th class="text-center"><span class="font_header_detail">ชื่อ</span></th>
                                    <th class="text-center"><span class="font_header_detail">นามสกุล</span></th>
                                    <th class="text-center"><span class="font_header_detail">ความรับผิดชอบ</span></th>
                                    <th class="text-center"><span class="font_header_detail">ประเภท</span></th>
                                    <th class="text-center"><span class="font_header_detail">สาขา</span></th>
                                    <th class="text-center"><span class="font_header_detail">อักษรย่อ</span></th>
                                    <th class="text-center"><span class="font_header_detail">เลขทะเบียนประกอบวิชาชีพ</span></th>
                                    <th class="text-center"><span class="font_header_detail">วันที่ใบอนุญาตหมดอายุ</span></th>
                                    <th class="text-center"><span class="font_header_detail">ประเภทใบทะเบียน</span></th>
                                </tr>
                                <tr>
                                    <td align='center'><span class="detail">1</span></td>
                                    <td align='left'><span class="detail">นาย</span></td>
                                    <td align='left'><span class="detail">ก่อสร้าง</span></td>
                                    <td align='left'><span class="detail">อาคาร01</span></td>
                                    <td align='left'><span class="detail">สถาปนิกผู้ออกแบบ</span></td>
                                    <td align='left'><span class="detail">สามัญ</span></td>
                                    <td align='left'><span class="detail">สถาปัตยกรรมหลัก</span></td>
                                    <td align='left'><span class="detail">ส-สถ 99999</span></td>
                                    <td align='left'><span class="detail">21/06/2030</span></td>
                                    <td align='left'><span class="detail">5 ปี</span></td>
                                </tr>
                                <tr>
                                    <td align='center'><span class="detail">2</span></td>
                                    <td align='left'><span class="detail">นาย</span></td>
                                    <td align='left'><span class="detail">ก่อสร้าง</span></td>
                                    <td align='left'><span class="detail">อาคาร02</span></td>
                                    <td align='left'><span class="detail">สถาปนิกผู้ควบคุมงาน</span></td>
                                    <td align='left'><span class="detail">สามัญ</span></td>
                                    <td align='left'><span class="detail">สถาปัตยกรรมหลัก</span></td>
                                    <td align='left'><span class="detail">ส-สถ 99999</span></td>
                                    <td align='left'><span class="detail">21/06/2030</span></td>
                                    <td align='left'><span class="detail">5 ปี</span></td>
                                </tr>
                                <tr>
                                    <td align='center'><span class="detail">3</span></td>
                                    <td align='left'><span class="detail">นาย</span></td>
                                    <td align='left'><span class="detail">ก่อสร้าง</span></td>
                                    <td align='left'><span class="detail">อาคาร03</span></td>
                                    <td align='left'><span class="detail">วิศวกรผู้ออกแบบ</span></td>
                                    <td align='left'><span class="detail">สามัญ</span></td>
                                    <td align='left'><span class="detail">โยธา</span></td>
                                    <td align='left'><span class="detail">สย.99999</span></td>
                                    <td align='left'><span class="detail">13/09/2027</span></td>
                                    <td align='left'><span class="detail">5 ปี</span></td>
                                </tr>
                                <tr>
                                    <td align='center'><span class="detail">4</span></td>
                                    <td align='left'><span class="detail">นาย</span></td>
                                    <td align='left'><span class="detail">ก่อสร้าง</span></td>
                                    <td align='left'><span class="detail">อาคาร04</span></td>
                                    <td align='left'><span class="detail">วิศวกรผู้ควบคุมงานก่อสร้าง</span></td>
                                    <td align='left'><span class="detail">สามัญ</span></td>
                                    <td align='left'><span class="detail">โยธา</span></td>
                                    <td align='left'><span class="detail">สย.99999</span></td>
                                    <td align='left'><span class="detail">13/09/2027</span></td>
                                    <td align='left'><span class="detail">5 ปี</span></td>
                                </tr>
                            </table>
                        </div>
                    </div>


                </div>

                <div class="tab-pane" id="tab3">
                    <div class="card p-4">
                        <div class="table-responsive div_header p-4">
                            <div class="card-header">
                                <span class="font_header"><b>รายการแนบเอกสารประกอบคำขอฯ ที่ต้องส่งให้เจ้าหน้าที่พิจารณา <font color="red">* เอกสารทั้งหมดต้องลงนาม พร้อมรับรองสําเนาถูกต้อง โดยผู้มีอํานาจลงนาม</font></b></span>
                            </div>

                            <div class="table-responsive div_header p-4">
                                <div class="card-header">
                                    <span class="font_header"><b>เอกสารประกอบการขออนุญาตก่อสร้าง ดัดแปลง รื้อถอน หรือเคลื่อนย้ายอาคาร (ข.1) ที่ต้องนำส่งให้เจ้าหน้าที่พิจารณา</b></span>
                                </div>
                                <table width="100%" border="0" align="center" cellpadding="5" cellspacing="1" class="table table-bordered">
                                    <tr>
                                        <td width='70%'>
                                            <label class="col-lg-12">1. หนังสือรับรองการจดทะเบียนจัดตั้งนิติบุคคลและวัตถุประสงค์การจัดตั้งของผู้ประกอบการ(ไม่เกิน 6 เดือน นับตั้งแต่วันที่ออกหนังสือ)</label>
                                        </td>
                                        <td>
                                            <span class="font_header_detail_red"><a href="#">ไฟล์เอกสาร</a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="col-lg-12">2.หนังสือมอบอำนาจ ปิดอากรแสตมป์ ประกอบด้วย</label>
                                        </td>
                                        <td>
                                            <span class="font_header_detail_red"><a href="#">ไฟล์เอกสาร</a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="col-lg-12">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.1 สำเนาบัตรประจำตัวประชาชน หรือ สำเนาหนังสือเดินทาง (Passport) ผู้มอบอำนาจ</label>
                                        </td>
                                        <td>
                                            <span class="font_header_detail_red"><a href="#">ไฟล์เอกสาร</a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="col-lg-12">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.2 สำเนาบัตรประจำตัวประชาชน หรือ สำเนาหนังสือเดินทาง (Passport) ผู้รับมอบอำนาจ</label>
                                        </td>
                                        <td>
                                            <span class="font_header_detail_red"><a href="#">ไฟล์เอกสาร</a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="col-lg-12">3. สำเนาโฉนดที่ดินหน้า-หลัง</label>
                                        </td>
                                        <td>
                                            <span class="font_header_detail_red"><a href="#">ไฟล์เอกสาร</a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="col-lg-12">4. ใบอนุญาตใช้ที่ดินฉบับล่าสุดพร้อมเงื่อนไขแนบท้าย</label>
                                        </td>
                                        <td>
                                            <span class="font_header_detail_red"><a href="#">ไฟล์เอกสาร</a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="col-lg-12">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.1 สัญญา เช่น สัญญาเช่า หรือ หนังสือสัญญายินยอมให้ใช้ที่ดิน</label>
                                        </td>
                                        <td>
                                            <span class="font_header_detail_red"><a href="#">ไฟล์เอกสาร</a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="col-lg-12">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.2 สำเนาแผนผังแปลงที่ดินแนบท้ายสัญญาใช้ทีดิน</label>
                                        </td>
                                        <td>
                                            <span class="font_header_detail_red"><a href="#">ไฟล์เอกสาร</a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="col-lg-12">5. ผังบริเวณพร้อมระบุตำแหน่งอาคารในแปลงที่ดินทั้งหมดและอาคารที่ยื่นขออนุญาต <span class="sm-label">(Layout Plan)</span> ประกอบด้วย</label>
                                        </td>
                                        <td>
                                            <span class="font_header_detail_red"><a href="#">ไฟล์เอกสาร</a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="col-lg-12">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5.1. แบบแปลนอาคาร <span class="sm-label">(Floor Plan) * ทุกชั้น</span></label>
                                        </td>
                                        <td>
                                            &nbsp;
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="col-lg-12">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5.2. แบบรูปด้านหน้า <span class="sm-label">(Front View)</span></label>
                                        </td>
                                        <td>
                                            &nbsp;
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="col-lg-12">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5.3. แบบรูปด้านข้าง <span class="sm-label"> (Side View)</span></label>
                                        </td>
                                        <td>
                                            &nbsp;
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="col-lg-12">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5.4. แบบรูปตัดตามขวาง <span class="sm-label">(Cross Section)</span></label>
                                        </td>
                                        <td>
                                            &nbsp;
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="col-lg-12">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5.5. แบบรูปตัดตามยาว <span class="sm-label">(Longitudinal Section)</span></label>
                                        </td>
                                        <td>
                                            &nbsp;
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="col-lg-12">6. ใบอนุญาตก่อสร้างเดิม (กรณีดัดแปลงอาคาร, รื้อถอนอาคาร, ก่อสร้างและดัดแปลงอาคาร, เคลื่อนย้ายอาคาร)</label>
                                        </td>
                                        <td>
                                            <span class="font_header_detail_red"><a href="#">ไฟล์เอกสาร</a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="col-lg-12">7. ปกรายการคำนวณและข้อกำหนดในการออกแบบ</label>
                                        </td>
                                        <td>
                                            <span class="font_header_detail_red"><a href="#">ไฟล์เอกสาร</a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="col-lg-12">8. การออกแบบอัตราส่วนผสมคอนกรีต (Mix Design)</label>
                                        </td>
                                        <td>
                                            <span class="font_header_detail_red"><a href="#">ไฟล์เอกสาร</a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="col-lg-12">9. เอกสารอื่นๆ ที่เกี่ยวข้อง</label>
                                        </td>
                                        <td>
                                            <span class="font_header_detail_red"><a href="#">ไฟล์เอกสาร</a></span>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <br />
                            <div class="table-responsive div_header p-4">
                                <div class="card-header">
                                    <span class="font_header"><b>หนังสือรับรองของผู้ประกอบวิชาชีพสถาปัตยกรรมควบคุม/วิศวกรรมควบคุม</b></span>
                                </div>
                                <table width="100%" border="0" align="center" cellpadding="5" cellspacing="1" class="table table-bordered">
                                    <tr>
                                        <td width='70%'>
                                            <label class="col-lg-12">
                                                1. หนังสือรับรองพร้อมสําเนาใบอนุญาตให้เป็นผู้ประกอบวิชาชีพสถาปัตยกรรมควบคุม และ
                                                หนังสือรับรองการได้รับอนุญาตให้เป็นผู้ประกอบวิชาชีพสถาปัตยกรรมควบคุมที่ออกโดยสภาสถาปนิก
                                                (ผู้ออกแบบ ด้านสถาปัตยกรรม (สถาปัตยกรรมหลัก))
                                                <a href="02.pdf" target="_blank">แบบฟอร์ม Download</a></label>
                                        </td>
                                        <td>
                                            <span class="font_header_detail_red"><a href="#">ไฟล์เอกสาร</a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width='70%'>
                                            <label class="col-lg-12">
                                                2. หนังสือแสดงความยินยอมพร้อมสําเนาใบอนุญาตให้เป็นผู้ประกอบวิชาชีพสถาปัตยกรรมควบคุม และ
                                                หนังสือรับรองการได้รับอนุญาตให้เป็นผู้ประกอบวิชาชีพสถาปัตยกรรมควบคุมที่ออกโดยสภาสถาปนิก
                                                (ผู้ควบคุมงาน ด้านสถาปัตยกรรม (สถาปัตยกรรมหลัก))
                                                <a href="04.pdf" target="_blank">แบบฟอร์ม Download</a></label>
                                        </td>
                                        <td>
                                            <span class="font_header_detail_red"><a href="#">ไฟล์เอกสาร</a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="col-lg-12">
                                                3. หนังสือรับรองพร้อมสําเนาใบอนุญาตให้เป็นผู้ประกอบวิชาชีพวิศวกรรมควบคุม และ หนังสือรับรองการได้รับอนุญาตให้เป็นผู้ประกอบวิชาชีพ
                                                วิศวกรรมควบคุมที่ออกโดยสภาวิศวกร (ผู้ออกแบบ ด้านวิศวกรรม (วิศวกรโยธา))
                                                <a href="01.pdf" target="_blank">แบบฟอร์ม Download</a></label>
                                        </td>
                                        <td>
                                            <span class="font_header_detail_red"><a href="#">ไฟล์เอกสาร</a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="col-lg-12">
                                                4. หนังสือแสดงความยินยอมพร้อมสําเนาใบอนุญาตให้เป็นผู้ประกอบวิชาชีพวิศวกรรมควบคุม และ หนังสือรับรองการได้รับ อนุญาตให้เป็นผู้ประกอบวิชาชีพ
                                                วิศวกรรมควบคุมที่ออกโดยสภาวิศวกร (ผู้ควบคุมงาน ด้านวิศวกรรม (วิศวกรโยธา))
                                                <a href="03.pdf" target="_blank">แบบฟอร์ม Download</a></label>
                                        </td>
                                        <td>
                                            <span class="font_header_detail_red"><a href="#">ไฟล์เอกสาร</a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="col-lg-12">
                                                5. หนังสือรับรองพร้อมสําเนาใบอนุญาตให้เป็นผู้ประกอบวิชาชีพวิศวกรรมควบคุม และ หนังสือรับรองการได้รับอนุญาตให้เป็นผู้ประกอบวิชาชีพ
                                                วิศวกรรมควบคุมที่ ออกโดยสภาวิศวกร (ผู้ออกแบบ ด้านวิศวกรรม (วิศวกรไฟฟากําลัง))
                                                <a href="01.pdf" target="_blank">แบบฟอร์ม Download</a></label>
                                        </td>
                                        <td>
                                            <span class="font_header_detail_red"><a href="#">ไฟล์เอกสาร</a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="col-lg-12">
                                                6. หนังสือรับรองพร้อมสําเนาใบอนุญาตให้เป็นผู้ประกอบวิชาชีพวิศวกรรมควบคุม และ หนังสือรับรองการได้รับอนุญาตให้เป็นผู้ประกอบวิชาชีพ
                                                วิศวกรรมควบคุมที่ออกโดยสภาวิศวกร (ผู้ออกแบบ ด้านวิศวกรรม (วิศวกรเครื่องกล, วิศวกรสิ่งแวดล้อม, วิศวกรอุตสาหการ))
                                                <a href="01.pdf" target="_blank">แบบฟอร์ม Download</a></label>
                                        </td>
                                        <td>
                                            <span class="font_header_detail_red"><a href="#">ไฟล์เอกสาร</a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="col-lg-12">
                                                7. หนังสือแสดงความยินยอมพร้อมสําเนาใบอนุญาตให้เป็นผู้ประกอบวิชาชีพวิศวกรรมควบคุม และ หนังสือรับรองการได้รับอนุญาต
                                                ให้เป็นผู้ประกอบวิชาชีพวิศวกรรมกรรมควบคุมที่ออกโดยสภาวิศวกร
                                                (ผู้ควบคุมงาน ด้านวิศวกรรม (วิศวกรโยธา การทาสีกันไฟ ตามกฎกระทรวงกำหนดการออกแบบโครงสร้างอาคารและลักษณะและคุณสมบัติของวัสดุที่ใช้ในงานโครงสร้างอาคาร พ.ศ. 2566))
                                                <a href="05.pdf" target="_blank">แบบฟอร์ม Download</a></label>
                                        </td>
                                        <td>
                                            <span class="font_header_detail_red"><a href="#">ไฟล์เอกสาร</a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="col-lg-12">
                                                8. หนังสือรับรองการตรวจสอบงานออกแบบและคำนวณพร้อมสําเนาใบอนุญาตให้เป็นผู้ประกอบวิชาชีพวิศวกรรมควบคุม
                                                (ผู้ตรวจสอบงานออกแบบและคํานวณด้านวิศวกรรม (วิศวกรโยธาระดับวุฒิวิศวกร))
                                                <a href="06.pdf" target="_blank">แบบฟอร์ม Download</a></label>
                                        </td>
                                        <td>
                                            <span class="font_header_detail_red"><a href="#">ไฟล์เอกสาร</a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="col-lg-12">
                                                9. หนังสือรับรองจากสถาบันที่เชื่อถือได้, ระบุชนิดวัสดุทนไฟ, ตารางความหนาของชิ้นส่วนที่ทาสีทนไฟ,
                                                ชื่ออาคาร, เจ้าของบริษัทฯ พร้อมผู้มีอํานาจและวุฒิวิศวกรสาขาโยธาลงนาม
                                                (เอกสารประกอบการรับรองการทาสีกันไฟ ตามกฎกระทรวงกำหนดการออกแบบโครงสร้างอาคารและลักษณะและคุณสมบัติของวัสดุที่ใช้ในงานโครงสร้างอาคาร พ.ศ. 2566)
                                            </label>
                                        </td>
                                        <td>
                                            <span class="font_header_detail_red"><a href="#">ไฟล์เอกสาร</a></span>
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