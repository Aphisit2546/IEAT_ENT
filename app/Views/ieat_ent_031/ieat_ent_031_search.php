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
    <font style="color: #6007b3ff; font-size: 18px;"><b>คำขอการประกอบกิจการในนิคมอุตสาหกรรม</b></font>
    <b>&nbsp;&nbsp;/&nbsp;&nbsp;</b>
    <font style="color: #6007b3ff; font-size: 18px;"><b>กนอ. 03/1</b></font>
    <b>&nbsp;&nbsp;/&nbsp;&nbsp;</b>
    <font style="color: #000000ff; font-size: 18px;"><b>1-01-1-301-00001-2568</b></font>
</div>
<br />
<div class="class_header_page_02">
    <font style="color: #000000ff; font-size: 25px;"><b>คำขอ 1-01-1-301-00001-2568</b></font>
    &nbsp;&nbsp;
    <font style="color: #000000ff; font-size: 18px;"><b>(กนอ. 03/1)</b></font>
</div>
<br /><br />
<div class="col-md-12">
    <div class="card">
        <div class="card-header p-4" style="text-align: center;">
            <ul class="nav nav-pills">
                <li class="nav-item"><a class="nav-link active" href="#tab1" data-toggle="tab"><span class="font_header_detail"><b>ข้อมูลทั่วไป</b></span></a></li>
                <li class="nav-item"><a class="nav-link" href="#tab2" data-toggle="tab"><span class="font_header_detail"><b>ข้อมูลเกี่ยวกับการขออนุญาต</b></span></a></li>
                <li class="nav-item"><a class="nav-link" href="#tab3" data-toggle="tab"><span class="font_header_detail"><b>การอนุญาตตามกฏหมายอื่น</b></span></a></li>
                <li class="nav-item"><a class="nav-link" href="#tab4" data-toggle="tab"><span class="font_header_detail"><b>ข้อมูลด้านการผลิต</b></span></a></li>
                <li class="nav-item"><a class="nav-link" href="#tab5" data-toggle="tab"><span class="font_header_detail"><b>สาธารณูปโภค</b></span></a></li>
                <li class="nav-item"><a class="nav-link" href="#tab6" data-toggle="tab"><span class="font_header_detail"><b>ข้อมูลด้านความปลอดภัย</b></span></a></li>
                <li class="nav-item"><a class="nav-link" href="#tab7" data-toggle="tab"><span class="font_header_detail"><b>ข้อมูลด้านสิ่งแวดล้อม</b></span></a></li>
                <li class="nav-item"><a class="nav-link" href="#tab8" data-toggle="tab"><span class="font_header_detail"><b>เอกสารประกอบการขออนุญาต</b></span></a></li>
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
                            <span class="font_header"><b>ข้อมูลเกี่ยวกับโรงงาน</b></span>
                        </div>
                        <br />
                        <div class="panel-body div_header p-4">
                            <div class="row row-form">
                                <div class="col-lg-3">
                                    <div class="col-lg-6 form-label" for="factory_location_no_view"> เลขที่</div>
                                    <div class="col-lg-12">
                                        <input type="text" id="factory_location_no_view"
                                            name="factory_location_no_view"
                                            class="form-control"
                                            value="<?php echo $datashow['factory_location_no_view']; ?>" />
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="col-lg-6 form-label" for="factory_moo_view"> หมู่ที่</div>
                                    <div class="col-lg-12">
                                        <input type="text" id="factory_moo_view"
                                            name="factory_moo_view"
                                            class="form-control"
                                            value="<?php echo $datashow['factory_moo_view']; ?>" style="width: 100%;" onkeypress="return integeronly(event)" />
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="col-lg-6 form-label" for="factory_building_name_view"> อาคาร</div>
                                    <div class="col-lg-12">
                                        <input type="text" id="factory_building_name_view"
                                            name="factory_building_name_view"
                                            class="form-control"
                                            value="<?php echo $datashow['factory_building_name_view']; ?>" />
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="col-lg-6 form-label" for="factory_floor_view"> ชั้น</div>
                                    <div class="col-lg-12">
                                        <input type="text" id="factory_floor_view"
                                            name="factory_floor_view"
                                            class="form-control"
                                            value="<?php echo $datashow['factory_floor_view']; ?>" />
                                    </div>
                                </div>
                            </div>
                            <div class="row row-form">
                                <div class="col-lg-3">
                                    <div class="col-lg-6 form-label" for="factory_room_view" style="margin-top:5px;"> ห้อง</div>
                                    <div class="col-lg-12">
                                        <input type="text" id="factory_room_view"
                                            name="factory_room_view"
                                            class="form-control"
                                            value="<?php echo $datashow['factory_room_view']; ?>" />
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="col-lg-6 form-label" for="factory_room_view" style="margin-top:5px;"> ตรอก/ซอย</div>
                                    <div class="col-lg-12">
                                        <input type="text" id="factory_soi_view"
                                            name="factory_soi_view"
                                            class="form-control"
                                            value="<?php echo $datashow['factory_soi_view']; ?>" />
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="col-lg-6 form-label" for="factory_room_view" style="margin-top:5px;"> ถนน</div>
                                    <div class="col-sm-12">
                                        <input type="text" id="factory_street_view"
                                            name="factory_street_view"
                                            class="form-control"
                                            value="<?php echo $datashow['factory_street_view']; ?>" />
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    &nbsp;
                                </div>
                            </div>
                            <div class="row row-form">
                                <div class="col-lg-3">
                                    <div class="col-lg-6 form-label" for="factory_province_id_view" style="margin-top:5px;">จังหวัด</div>
                                    <div class="col-lg-12">
                                        <select class="form-control">
                                            <option value="0">- เลือกจังหวัด -</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="col-lg-6 form-label" for="factory_amphur_id_view" style="margin-top:5px;">เขต/อําเภอ</div>
                                    <div class="col-lg-12">
                                        <select class="form-control">
                                            <option value='0'>- เลือกอำเภอ -</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="col-lg-6 form-label" for="factory_sub_district_id_view" style="margin-top:5px;"> ตําบล/แขวง</span></div>
                                    <div class="col-lg-12">
                                        <select class="form-control">
                                            <option value='0'>- เลือกตำบล -</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="col-lg-6 form-label" for="factory_zipcode_id_view" style="margin-top:5px;"> รหัสไปรษณีย์</div>
                                    <div class="col-lg-6">
                                        <input type="text" id="factory_zipcode_id_view"
                                            name="factory_zipcode_id_view"
                                            class="form-control"
                                            value="<?php echo $datashow['factory_zipcode_id_view']; ?>" style="width: 100%" onkeypress="return integeronly(event)" />
                                    </div>
                                </div>
                            </div>
                            <div class="row row-form" style="margin-top:40px;">
                                <div class="col-lg-2">
                                    <div class="col-lg-6 form-label" for="factory_phone_no1_view">โทรศัพท์ 1</div>
                                    <div class="col-lg-12">
                                        <input type="text" id="factory_phone_no1_view"
                                            name="factory_phone_no1_view"
                                            class="form-control inputMask-phone"
                                            value="<?php echo $datashow['factory_phone_no1_view']; ?>" style="width: 100%" onkeypress="return integeronly(event)" />
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="col-lg-6 form-label" for="factory_phone_no_ext1_view"> เบอร์ต่อ</div>
                                    <div class="col-lg-6">
                                        <input type="text" id="factory_phone_no_ext1_view"
                                            name="factory_phone_no_ext1_view"
                                            class="form-control inputMask-numeric"
                                            value="<?php echo $datashow['factory_phone_no_ext1_view']; ?>" style="width: 100%" onkeypress="return integeronly(event)" />
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="col-lg-6 form-label" for="factory_phone_no2_view">โทรศัพท์ 2</div>
                                    <div class="col-lg-12">
                                        <input type="text" id="factory_phone_no2_view"
                                            name="factory_phone_no2_view"
                                            class="form-control inputMask-phone"
                                            value="<?php echo $datashow['factory_phone_no2_view']; ?>" style="width: 100%" onkeypress="return integeronly(event)" />
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="col-lg-6 form-label" for="factory_phone_no_ext2_view"> เบอร์ต่อ</div>
                                    <div class="col-lg-6">
                                        <input type="text" id="factory_phone_no_ext2_view"
                                            name="factory_phone_no_ext2_view"
                                            class="form-control inputMask-numeric"
                                            value="<?php echo $datashow['factory_phone_no_ext2_view']; ?>" style="width: 100%" onkeypress="return integeronly(event)" />
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="col-lg-6 form-label" for="factory_phone_no3_view">โทรศัพท์ 3</div>
                                    <div class="col-lg-12">
                                        <input type="text" id="factory_phone_no3_view"
                                            name="factory_phone_no3_view"
                                            class="form-control inputMask-phone"
                                            value="<?php echo $datashow['factory_phone_no3_view']; ?>" style="width: 100%" onkeypress="return integeronly(event)" />
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="col-lg-6 form-label" for="factory_phone_no_ext3_view"> เบอร์ต่อ</div>
                                    <div class="col-lg-6">
                                        <input type="text" id="factory_phone_no_ext3_view"
                                            name="factory_phone_no_ext3_view"
                                            class="col-sm-12 form-control inputMask-numeric"
                                            value="<?php echo $datashow['factory_phone_no_ext3_view']; ?>" style="width: 100%" onkeypress="return integeronly(event)" />
                                    </div>
                                </div>
                            </div>
                            <div class="row row-form">
                                <div class="col-lg-2">
                                    <div class="col-lg-6 form-label" for="factory_fax_no_view"> โทรสาร</div>
                                    <div class="col-lg-12">
                                        <input type="text" id="factory_fax_no_view"
                                            name="factory_fax_no_view"
                                            class="form-control inputMask-phone"
                                            value="<?php echo $datashow['factory_fax_no_view']; ?>" style="width: 100%" onkeypress="return integeronly(event)" />
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="col-lg-6 form-label" for="factory_fax_no_ext_view"> เบอร์ต่อ</div>
                                    <div class="col-lg-6">
                                        <input type="text" id="factory_fax_no_ext_view"
                                            name="factory_fax_no_ext_view"
                                            class="form-control inputMask-numeric"
                                            value="<?php echo $datashow['factory_fax_no_ext_view']; ?>" style="width: 100%" onkeypress="return integeronly(event)" />
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="col-lg-6 form-label" for="factory_email_view"> อีเมล์</div>
                                    <div class="col-lg-12">
                                        <input type="text" id="factory_email_view"
                                            name="factory_email_view"
                                            class="validate[custom[email]] form-control"
                                            value="<?php echo $datashow['factory_email_view']; ?>" />
                                    </div>
                                </div>
                                <div class="col-lg-6" style="margin-top:10px;">
                                    ตัวอย่างอีเมล์ <i style="color:blue">sample@email.com</i><br />
                                    กรณีมีมากกว่า 1 อีเมลล์ให้คั่นด้วยเครื่องหมายจุลภาค ( , ) ตัวอย่าง <i style="color:blue">sample1 @email.com, sample2 @email.com</i>
                                </div>
                            </div>

                            <div class="row row-form" style="margin-top:40px;">
                                <div class="col-lg-2">
                                    <div class="col-lg-12 form-label" for="factory_email_view">พิกัดที่ตั้งอาคารโรงงาน ละติจูด</div>
                                    <div class="col-lg-12">
                                        <input type="text" id="factory_latitude_view"
                                            name="factory_latitude_view"
                                            class="form-control"
                                            value="<?php echo $datashow['factory_latitude_view']; ?>" onkeypress="return numbersonly(event)" />
                                    </div>
                                </div>

                                <div class="col-lg-2">
                                    <div class="col-lg-12 form-label" for="factory_email_view">พิกัดที่ตั้งอาคารโรงงาน ลองติจูด</div>
                                    <div class="col-lg-12">
                                        <input type="text" id="factory_longtitude_view"
                                            name="factory_longtitude_view"
                                            class="form-control"
                                            value="<?php echo $datashow['factory_longtitude_view']; ?>" onkeypress="return numbersonly(event)" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br />
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
                        <div class="table-responsive div_header p-4">
                            <div class="row row-form">
                                <div class="col-lg-3">
                                    <span class="font_header_detail"><b>ระบุวันที่เริ่มประกอบอุตสาหกรรม เริ่มภายในวันที่ <font color='red'><b>*</b></font></b></span>
                                    <br /><br />
                                    <input type="text" id="factory_moo_view"
                                        name="factory_moo_view"
                                        class="form-control"
                                        value="<?php echo $datashow['factory_moo_view']; ?>" style="width: 100%;" onkeypress="return integeronly(event)" />
                                </div>
                                <div class="col-lg-1">
                                    &nbsp;
                                </div>
                                <div class="col-lg-8">
                                    <span class="font_header_detail"><b>ประสงค์จะเริ่มประกอบอุตสาหกรรม <font color='red'><b>*</b></font></b></span>
                                    <br /><br />
                                    <label><input type="radio" id="construction_type_id_view_1" name="construction_type_id" value="1" <?php if ($datashow['construction_type_id'] == '1'): echo "checked='checked'";
                                                                                                                                        endif ?> /> <span class="font_header_detail"><b>ทั้งหมด (สำหรับการแจ้งเริ่มประกอบกิจการครั้งแรก)</b></span></label>&nbsp;<br />
                                    <label><input type="radio" id="construction_type_id_view_2" name="construction_type_id" value="2" <?php if ($datashow['construction_type_id'] == '2'): echo "checked='checked'";
                                                                                                                                        endif ?> /> <span class="font_header_detail"><b>บางส่วน (สำหรับการแจ้งเริ่มประกอบกิจการครั้งแรก)</b></span></label>&nbsp;<br />
                                    <label><input type="radio" id="construction_type_id_view_2" name="construction_type_id" value="2" <?php if ($datashow['construction_type_id'] == '2'): echo "checked='checked'";
                                                                                                                                        endif ?> /> <span class="font_header_detail"><b>เพิ่มเติม (สำหรับการแจ้งเริ่มประกอบกิจการเมื่อมีการขอเพิ่มประเภทการประกอบกิจการ ซึ่งอาจไม่เข้าข่ายต้องยื่นคำขอขยายโรงงาน)</b></span></label>&nbsp;
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card p-4">
                        <div class="card-header">
                            <span class="font_header"><b>ข้อมูลด้านคนงาน</b></span>
                        </div>
                        <div class="table-responsive div_header">
                            <table class="table table_data">
                                <thead>
                                    <tr style="text-align: center; vertical-align: top;">
                                        <th class="table-head-tab" colspan="4"><span class="font_header_detail"><b>ประมาณการจำนวนบุคลากรในโครงการ</b></span></th>
                                    </tr>
                                    <tr style="text-align: center; vertical-align: top;">
                                        <th class="table-head-tab" width="50%" rowspan="2"><span class="font_header_detail"><b>ประเภทพนักงาน</b></span></th>
                                    </tr>
                                    <tr style="text-align: center; vertical-align: top;">
                                        <th class="table-head-tab" width="20%"><span class="font_header_detail"><b>ชาย</b></span></th>
                                        <th class="table-head-tab" width="20%"><span class="font_header_detail"><b>หญิง</b></span></th>
                                        <th width="10%">หน่วย</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="4"><span class="font_header_detail"><b>พนักงานไทย</b></span></td>
                                    </tr>
                                    <tr>
                                        <td class=" table-detail-left" style="padding-left:50px;">- เจ้าหน้าที่บริหารและวิชาการ</td>
                                        <td align="center">10<?php echo $datashow_master['th_male_executive_and_technical']; ?><input type="hidden" id="th_male_executive_and_technical_view" name="th_male_executive_and_technical_view" value="<?php echo $datashow_master['th_male_executive_and_technical']; ?>" /></td>
                                        <td align="center">10<?php echo $datashow_master['th_female_executive_and_technical']; ?><input type="hidden" id="th_female_executive_and_technical_view" name="th_female_executive_and_technical_view" value="<?php echo $datashow_master['th_female_executive_and_technical']; ?>" /></td>
                                        <td style="text-align: center;">คน</td>
                                    </tr>
                                    <tr>
                                        <td class=" table-detail-left" style="padding-left:50px;">- คนงาน (ช่างฝีมือ)</td>
                                        <td align="center">10<?php echo $datashow_master['th_male_skilled_worker']; ?><input type="hidden" id="th_male_skilled_worker_view" name="th_male_skilled_worker_view" value="<?php echo $datashow_master['th_male_skilled_worker']; ?>" /></td>
                                        <td align="center">10<?php echo $datashow_master['th_female_skilled_worker']; ?><input type="hidden" id="th_female_skilled_worker_view" name="th_female_skilled_worker_view" value="<?php echo $datashow_master['th_female_skilled_worker']; ?>" /></td>
                                        <td style="text-align: center;">คน</td>
                                    </tr>
                                    <tr>
                                        <td class=" table-detail-left" style="padding-left:50px;">- คนงาน (ทั่วไป)</td>
                                        <td align="center">10<?php echo $datashow_master['th_male_unskilled_worker']; ?><input type="hidden" id="th_male_unskilled_worker_view" name="th_male_unskilled_worker_view" value="<?php echo $datashow_master['th_male_unskilled_worker']; ?>" /></td>
                                        <td align="center">10<?php echo $datashow_master['th_female_unskilled_worker']; ?><input type="hidden" id="th_female_unskilled_worker_view" name="th_female_unskilled_worker_view" value="<?php echo $datashow_master['th_female_unskilled_worker']; ?>" /></td>
                                        <td style="text-align: center;">คน</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"><span class="font_header_detail"><b>พนักงานต่างประเทศ</b></span></td>
                                    </tr>
                                    <tr>
                                        <td class=" table-detail-left" style="padding-left:50px;">- เจ้าหน้าที่บริหารและวิชาการ</td>
                                        <td align="center">10<?php echo $datashow_master['foreign_male_executive_and_technical']; ?><input type="hidden" id="foreign_male_executive_and_technical_view" name="foreign_male_executive_and_technical_view" value="<?php echo $datashow_master['foreign_male_executive_and_technical']; ?>" /></td>
                                        <td align="center">10<?php echo $datashow_master['foreign_female_executive_and_technical']; ?><input type="hidden" id="foreign_female_executive_and_technical_view" name="foreign_female_executive_and_technical_view" value="<?php echo $datashow_master['foreign_female_executive_and_technical']; ?>" /></td>
                                        <td style="text-align: center;">คน</td>
                                    </tr>
                                    <tr>
                                        <td class=" table-detail-left" style="padding-left:50px;">- ช่างเทคนิคและช่างฝีมือ</td>
                                        <td align="center">10<?php echo $datashow_master['foreign_male_skilled_technician']; ?><input type="hidden" id="foreign_male_skilled_technician_view" name="foreign_male_skilled_technician_view" value="<?php echo $datashow_master['foreign_male_skilled_technician']; ?>" /></td>
                                        <td align="center">10<?php echo $datashow_master['foreign_female_skilled_technician']; ?><input type="hidden" id="foreign_female_skilled_technician_view" name="foreign_female_skilled_technician_view" value="<?php echo $datashow_master['foreign_female_skilled_technician']; ?>" /></td>
                                        <td style="text-align: center;">คน</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight:700; font-size:16px; text-align:center;">รวมพนักงาน</td>
                                        <td align="center">5<?php echo $datashow_master['th_male_executive_and_technical'] + $datashow_master['th_male_skilled_worker'] + $datashow_master['th_male_unskilled_worker'] + $datashow_master['foreign_male_executive_and_technical'] + $datashow_master['foreign_male_skilled_technician']; ?><input type="hidden" id="male_personnel_number_total_view" name="male_personnel_number_total_view" value="<?php echo $datashow_master['th_male_executive_and_technical'] + $datashow_master['th_male_skilled_worker'] + $datashow_master['th_male_unskilled_worker'] + $datashow_master['foreign_male_executive_and_technical'] + $datashow_master['foreign_male_skilled_technician']; ?>" readonly /></td>
                                        <td align="center">5<?php echo $datashow_master['th_female_executive_and_technical'] + $datashow_master['th_female_skilled_worker'] + $datashow_master['th_female_unskilled_worker'] + $datashow_master['foreign_female_executive_and_technical'] + $datashow_master['foreign_female_skilled_technician']; ?><input type="hidden" id="female_personnel_number_total_view" name="female_personnel_number_total_view" value="<?php echo $datashow_master['th_female_executive_and_technical'] + $datashow_master['th_female_skilled_worker'] + $datashow_master['th_female_unskilled_worker'] + $datashow_master['foreign_female_executive_and_technical'] + $datashow_master['foreign_female_skilled_technician']; ?>" readonly /></td>
                                        <td style="text-align: center;">คน</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <br />
                    </div>

                    <div class="card p-4">
                        <div class="row">
                            <div class="col-6">
                                <div class="card-header">
                                    <span class="font_header"><b>ข้อมูลด้านเงินลงทุน</b></span>
                                </div>
                                <div class="table-responsive div_header p-4">
                                    <table class="table table_data">
                                        <tbody>
                                            <tr>
                                                <td class="table-detail-left" width="50%">ที่ดิน</td>
                                                <td width="30%" align="right">1,000,00<?php echo number_format($datashow_master['land_capital'], 2); ?><input type="hidden" id="land_capital_view" name="land_capital_view" value="<?php echo $datashow_master['land_capital']; ?>" /></td>
                                                </td>
                                                <td class="table-detail-center" width="20%">บาท</td>
                                            </tr>
                                            <tr>
                                                <td class="table-detail-left">อาคารและสิ่งปลูกสร้าง</td>
                                                <td align="right">1,000,00<?php echo number_format($datashow_master['building_capital'], 2); ?><input type="hidden" id="building_capital_view" name="building_capital_view" value="<?php echo $datashow_master['building_capital']; ?>" /></td>
                                                <td class="table-detail-center">บาท</td>
                                            </tr>
                                            <tr>
                                                <td class="table-detail-left">เครื่องจักรและอุปกรณ์</td>
                                                <td align="right">1,000,00<?php echo number_format($datashow_master['machine_capital'], 2); ?><input type="hidden" id="machine_capital_view" name="machine_capital_view" value="<?php echo $datashow_master['machine_capital']; ?>" /></td>
                                                <td class="table-detail-center">บาท</td>
                                            </tr>
                                            <tr>
                                                <td class="table-detail-left">มูลค่าทรัพย์สินอื่น ๆ</td>
                                                <td align="right">1,000,00<?php echo number_format($datashow_master['other_capital'], 2); ?><input type="hidden" id="other_capital_view" name="other_capital_view" value="<?php echo $datashow_master['other_capital']; ?>" /></td>
                                                <td class="table-detail-center">บาท</td>
                                            </tr>
                                            <tr>
                                                <td class="table-detail-left">เงินทุนหมุนเวียน</td>
                                                <td align="right">1,000,00<?php echo number_format($datashow_master['asset_capital'], 2); ?><input type="hidden" id="current_asset_capital_view" name="current_asset_capital_view" value="<?php echo $datashow_master['asset_capital']; ?>" /></td>
                                                <td class="table-detail-center">บาท</td>
                                            </tr>
                                            <tr>
                                                <td style="text-align:center;"><span class="font_header_detail"><b>รวมทั้งหมด</b></span></td>
                                                <td align="right">
                                                    <span class="font_header_detail"><b>
                                                            5,000,00<?php echo number_format($datashow_master['land_capital'] + $datashow_master['building_capital'] + $datashow_master['machine_capital'] + $datashow_master['other_capital'] + $datashow_master['asset_capital'], 2); ?>
                                                            <input type="hidden" id="total_capital_view" name="total_capital_view" value="<?php echo $datashow_master['land_capital'] + $datashow_master['building_capital'] + $datashow_master['machine_capital'] + $datashow_master['other_capital'] + $datashow_master['asset_capital']; ?>" readonly />
                                                        </b></span>
                                                </td>
                                                <td class="table-detail-center"><span class="font_header_detail"><b>บาท</b></span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card-header">
                                    <span class="font_header"><b>เวลาทำงาน</b></span>
                                </div>
                                <div class="table-responsive div_header p-4">
                                    <table class="table table_data">
                                        <tbody>
                                            <tr>
                                                <td class="table-detail-left">เวลาทำงานปกติตั้งแต่เวลา</td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-lg-2" style="padding:0;">
                                                            <select class="form-control" id="normal_working_hour_start_view" name="normal_working_hour_start_view">
                                                                <option value="0">-- เลือก --</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-label" style="text-align:center; float:left; margin-left:0.5em;margin-right:0.5em;">น.</div>
                                                        <div class="col-lg-2" style="padding:0;">
                                                            <select class="form-control" id="normal_working_hour_finish_view" name="normal_working_hour_finish_view">
                                                                <option value="0">-- เลือก --</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-label" style="text-align:center; float:left; margin-left:0.5em;margin-right:0.5em;">น.</div>

                                                        <div class="form-label col-lg-1" style="text-align:left; padding:0; float:left;">คิดเป็น</div>
                                                        <div class="col-lg-2" style="padding:0;">
                                                            <input type="text" class='form-control' id="total_daily_working_hour_view" name="total_daily_working_hour_view" value="<?php echo $datashow['total_daily_working_hour_view']; ?>" onkeypress="return numbersonly(event)" />
                                                        </div>
                                                        <div class="form-label col-lg-2" style="text-align:right; padding: 0; float:left;">ชั่วโมง/วัน</div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="table-detail-left">จำนวน กะ การทำงาน</td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <select class="form-control" id="daily_shift_number_view" name="daily_shift_number_view">
                                                                <option value="0">-- เลือก --</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-label col-lg-6">
                                                            กะ/วัน
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="table-detail-left">วันหยุดงานปีละ</td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <input class='form form-control' type="text" id="annual_holiday_view" name="annual_holiday_view" value="<?php echo $datashow['annual_holiday_view']; ?>" onkeypress="return integeronly(event)" />
                                                        </div>
                                                        <div class="form-label col-lg-6">
                                                            วัน/ปี
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="table-detail-left">รวมวันทำงานปีละ</td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <input class='form form-control' type="text" id="total_yearly_working_day_view" name="total_yearly_working_day_view" value="<?php echo $datashow['total_yearly_working_day_view']; ?>" onkeypress="return integeronly(event)" />
                                                        </div>
                                                        <div class="form-label col-lg-6">
                                                            วัน/ปี
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <br />
                    </div>

                    <div class="card p-4">
                        <div class="row">
                            <div class="col-6">
                                <div class="card-header">
                                    <span class="font_header"><b>การขอรับส่งเสริมการลงทุนตามกฎหมายว่าด้วยการส่งเสริมการลงทุน</b></span>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive div_header p-4">
                                        <div>
                                            <?php if ($datashow['investment_promotion_apply_status_id_view'] == '1'): ?>
                                                <?php $investment_promotion_apply_status_id_view_show_01 = ""; ?>
                                                <input type="radio" id="investment_promotion_apply_status_id_view_show" name="investment_promotion_apply_status_id_view" value="1" checked="checked" />
                                            <?php else: ?>
                                                <?php $investment_promotion_apply_status_id_view_show_01 = "style='display: none;'" ?>
                                                <input type="radio" id="investment_promotion_apply_status_id_view_show" name="investment_promotion_apply_status_id_view" value="1" />
                                            <?php endif; ?>
                                            &nbsp;&nbsp;
                                            ได้รับการส่งเสริมการลงทุนแล้ว
                                        </div>
                                        <div>
                                            <SCRIPT language="javascript">
                                                function addRow_grid01(tableID) {

                                                    var table = document.getElementById(tableID);

                                                    var rowCount = table.rows.length;
                                                    var row = table.insertRow(rowCount);

                                                    var colCount = table.rows[<?php echo $count_data_grid_01; ?> + 2].cells.length;

                                                    for (var i = 0; i < colCount; i++) {

                                                        var newcell = row.insertCell(i);

                                                        newcell.innerHTML = table.rows[<?php echo $count_data_grid_01; ?> + 2].cells[i].innerHTML;
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

                                                function deleteRow_grid01(tableID) {
                                                    var selectCount = getTableSelectedCount(tableID);
                                                    var tableRows = getTableRowsCount(tableID);
                                                    var tableRows_result = tableRows - 1;
                                                    if (selectCount >= (tableRows_result - 1)) {
                                                        alert("ไม่สามารถลบข้อมูลทั้งหมดได้ ต้องเหลือข้อมูลอย่างน้อย 1 รายการ");
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
                                            </SCRIPT>
                                        </div>
                                        <div id="show_01" <?php echo $investment_promotion_apply_status_id_view_show_01; ?>>
                                            <div class="botton-add-and-delete-row">
                                                <input type='button' class="btn btn-success" value="เพิ่มข้อมูล (Add)" onClick="addRow_grid01('datatable_grid01')" />
                                                <input type='button' class="btn btn-danger" value="ลบข้อมูล (Delete)" onClick="deleteRow_grid01('datatable_grid01')" />
                                            </div>
                                            <div class="table-responsive">
                                                <table id="datatable_grid01" class="table table-striped table-hover table-bordered">
                                                    <thead>
                                                        <tr class="success">
                                                            <th class="table-head-tab" width="100" rowspan="2">เลือก </th>
                                                            <th class="table-head-tab" colspan="2">ประเภทกิจการที่ได้รับการส่งเสริมจาก BOI</th>
                                                            <th class="table-head-tab" colspan="2">ระยะเวลาที่ได้รับการส่งเสริม </th>
                                                        </tr>
                                                        <tr class="success">
                                                            <th class="table-head-tab" width="322">ประเภทกลุ่มอุตสาหกรรม</th>
                                                            <th class="table-head-tab" width="199">กิจการ</th>
                                                            <th class="table-head-tab" width="174">ตั้งแต่ปี พ.ศ.</th>
                                                            <th class="table-head-tab" width="179">ถึง พ.ศ.</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($data_grid_01 as $result_data_grid_01): ?>
                                                            <tr>
                                                                <td><input style="margin-left:40%;" type="checkbox" name="chk2" id="chk" /></td>
                                                                <td><select class="form-control" name="investment_industrial_type_id_view[]">
                                                                        <option value="0">-- เลือก --</option>
                                                                    </select></td>
                                                                <td><input class="form-control" name="investment_operation_type_view[]" type="text" id="investment_operation_type_view" size="10" value="<?php echo $result_data_grid_01['investment_operation_type_view']; ?>" /></td>
                                                                <td><select class="form-control" name="investment_promotion_start_view[]">
                                                                        <option value="0">-- เลือก --</option>
                                                                    </select></td>
                                                                <td><select class="form-control" name="investment_promotion_end_view[]">
                                                                        <option value="0">-- เลือก --</option>
                                                                    </select></td>
                                                            </tr>
                                                        <?php endforeach; ?>
                                                        <tr>
                                                            <td><input style="margin-left:40%;" type="checkbox" name="chk2" id="chk" /></td>
                                                            <td><select class="form-control" name="investment_industrial_type_id_view[]">
                                                                    <option value="0">-- เลือก --</option>
                                                                </select></td>
                                                            <td><input class="form-control" name="investment_operation_type_view[]" type="text" id="investment_operation_type_view" size="10" align="center" /></td>
                                                            <td><select class="form-control" name="investment_promotion_start_view[]">
                                                                    <option value="0">-- เลือก --</option>
                                                                </select></td>
                                                            <td><select class="form-control" name="investment_promotion_end_view[]">
                                                                    <option value="0">-- เลือก --</option>
                                                                </select></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div style="margin-top:10px;">
                                            <?php if ($datashow['investment_promotion_apply_status_id_view'] == '2'): ?>
                                                <input type="radio" id="investment_promotion_apply_status_id_view_hide" name="investment_promotion_apply_status_id_view" value="2" checked="checked" />
                                            <?php else: ?>
                                                <input type="radio" id="investment_promotion_apply_status_id_view_hide" name="investment_promotion_apply_status_id_view" value="2" />
                                            <?php endif; ?>
                                            &nbsp;&nbsp;
                                            อยู่ระหว่างการขอรับการส่งเสริมการลงทุน
                                        </div>
                                        <div style="margin-top:10px;">
                                            <?php if ($datashow['investment_promotion_apply_status_id_view'] == '3'): ?>
                                                <input type="radio" id="investment_promotion_apply_status_id_view_hide_1" name="investment_promotion_apply_status_id_view" value="3" checked="checked" />
                                            <?php else: ?>
                                                <input type="radio" id="investment_promotion_apply_status_id_view_hide_1" name="investment_promotion_apply_status_id_view" value="3" />
                                            <?php endif; ?>
                                            &nbsp;&nbsp;
                                            ยังไม่ขอรับการส่งเสริมการลงทุน
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card-header">
                                    <span class="font_header"><b>การขอรับอุตสาหกรรมสีเขียว</b></span>
                                </div>
                                <div class="table-responsive div_header p-4">
                                    <div style="margin-top:0px;">
                                        <?php if ($datashow['investment_promotion_apply_status_id_view'] == '2'): ?>
                                            <input type="radio" id="investment_promotion_apply_status_id_view_hide" name="investment_promotion_apply_status_id_view" value="2" checked="checked" />
                                        <?php else: ?>
                                            <input type="radio" id="investment_promotion_apply_status_id_view_hide" name="investment_promotion_apply_status_id_view" value="2" />
                                        <?php endif; ?>
                                        &nbsp;&nbsp;
                                        ได้รับใบรับรองอุตสาหกรรมสีเขียวแล้ว
                                    </div>
                                    <div style="margin-top:10px;">
                                        <?php if ($datashow['investment_promotion_apply_status_id_view'] == '3'): ?>
                                            <input type="radio" id="investment_promotion_apply_status_id_view_hide_1" name="investment_promotion_apply_status_id_view" value="3" checked="checked" />
                                        <?php else: ?>
                                            <input type="radio" id="investment_promotion_apply_status_id_view_hide_1" name="investment_promotion_apply_status_id_view" value="3" />
                                        <?php endif; ?>
                                        &nbsp;&nbsp;
                                        อยู่ระหว่างขอรับการรับรอง
                                    </div>
                                    <div style="margin-top:10px;">
                                        <?php if ($datashow['investment_promotion_apply_status_id_view'] == '3'): ?>
                                            <input type="radio" id="investment_promotion_apply_status_id_view_hide_1" name="investment_promotion_apply_status_id_view" value="3" checked="checked" />
                                        <?php else: ?>
                                            <input type="radio" id="investment_promotion_apply_status_id_view_hide_1" name="investment_promotion_apply_status_id_view" value="3" />
                                        <?php endif; ?>
                                        &nbsp;&nbsp;
                                        ยังไม่ได้รับการรับรอง
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="tab3">
                    <div class="card p-4">
                        <div class="card-header">
                            <span class="font_header"><b>พระราชบัญญัติโรงงาน พ.ศ. 2535</b></span>
                        </div>
                        <div class="table-responsive div_header p-4">
                            <span class="font_header_detail">เป็นกิจการที่ต้องจัดทํารายงานการวิเคราะห์ความเสี่ยงจากอันตรายที่อาจเกิดจากการประกอบกิจการโรงงานหรือไม่</span>
                            <br /><br />
                            <div class="row">
                                <div class="col-lg-6">
                                    <?php if ($datashow['risk_assessment_report_requirement_id_view'] == '2'): ?>
                                        <input type="radio" id="risk_assessment_report_requirement_id_view" name="risk_assessment_report_requirement_id_view" value="2" checked="checked" />
                                    <?php else: ?>
                                        <input type="radio" id="risk_assessment_report_requirement_id_view" name="risk_assessment_report_requirement_id_view" value="2" />
                                    <?php endif; ?>
                                    &nbsp;&nbsp;
                                    เข้าข่ายต้องจัดทำรายงานการวิเคราะห์ความเสี่ยงจากอันตรายที่อาจเกิดจากการประกอบกิจการโรงงาน
                                </div>
                                <div class="col-lg-6">
                                    <?php if ($datashow['risk_assessment_report_requirement_id_view'] == '1'): ?>
                                        <input type="radio" id="risk_assessment_report_requirement_id_view" name="risk_assessment_report_requirement_id_view" value="1" checked="checked" />
                                    <?php else: ?>
                                        <input type="radio" id="risk_assessment_report_requirement_id_view" name="risk_assessment_report_requirement_id_view" value="1" />
                                    <?php endif; ?>
                                    &nbsp;&nbsp;
                                    ไม่เข้าข่าย
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card p-4">
                        <div class="card-header">
                            <span class="font_header"><b>พระราชบัญญัติส่งเสริมและรักษาคุณภาพสิ่งแวดล้อมแห่งชาติ พ.ศ.2535 และการดำเนินการให้เป็นไปตามมาตรา 67 วรรคสอง ของรัฐธรรมนูญแห่งราชอาณาจักรไทย พ.ศ.2550</b></span>
                        </div>
                        <div class="table-responsive div_header p-4">
                            <span class="font_header_detail">เป็นกิจการที่ต้องจัดทํารายงานการวิเคราะห์ผลกระทบสิ่งแวดล้อมเบื้องต้น (IEE) หรือรายงานการวิเคราะห์ผลกระทบสิ่งแวดล้อม (EIA) หรือรายงานการประเมินผลกระทบสิ่งแวดล้อม โครงการที่อาจก่อให้เกิดผลกระทบต่อชุมชนอย่างรุนแรง ทั้งทางด้านคุณภาพสิ่งแวดล้อม ทรัพยากรธรรมชาติ และสุขภาพ (EHIA) หรือไม่</span>
                            <br /><br />
                            <div class="row">
                                <div class="col-lg-3">
                                    <?php if ($datashow['eia_report_requirement_id_view'] == '4'): ?>
                                        <input type="radio" id="eia_report_requirement_id_view" name="eia_report_requirement_id_view" value="4" checked="checked" />
                                    <?php else: ?>
                                        <input type="radio" id="eia_report_requirement_id_view" name="eia_report_requirement_id_view" value="4" />
                                    <?php endif; ?>
                                    &nbsp;&nbsp;
                                    ไม่เข้าข่าย
                                </div>
                                <div class="col-lg-3">
                                    <?php if ($datashow['eia_report_requirement_id_view'] == '1'): ?>
                                        <input type="radio" id="eia_report_requirement_id_view" name="eia_report_requirement_id_view" value="1" checked="checked" />
                                    <?php else: ?>
                                        <input type="radio" id="eia_report_requirement_id_view" name="eia_report_requirement_id_view" value="1" />
                                    <?php endif; ?>
                                    &nbsp;&nbsp;
                                    เข้าข่ายต้องจัดทำ IEE
                                </div>
                                <div class="col-lg-3">
                                    <?php if ($datashow['eia_report_requirement_id_view'] == '2'): ?>
                                        <input type="radio" id="eia_report_requirement_id_view" name="eia_report_requirement_id_view" value="2" checked="checked" />
                                    <?php else: ?>
                                        <input type="radio" id="eia_report_requirement_id_view" name="eia_report_requirement_id_view" value="2" />
                                    <?php endif; ?>
                                    &nbsp;&nbsp;
                                    เข้าข่ายต้องจัดทำ EIA
                                </div>
                                <div class="col-lg-3">
                                    <?php if ($datashow['eia_report_requirement_id_view'] == '3'): ?>
                                        <input type="radio" id="eia_report_requirement_id_view" name="eia_report_requirement_id_view" value="3" checked="checked" />
                                    <?php else: ?>
                                        <input type="radio" id="eia_report_requirement_id_view" name="eia_report_requirement_id_view" value="3" />
                                    <?php endif; ?>
                                    &nbsp;&nbsp;
                                    เข้าข่ายต้องจัดทำ EHIA
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="tab4">
                    <div class="card p-4">
                        <div class="card-header">
                            <span class="font_header"><b>วัตถุดิบและวัตถุจำเป็นที่ใช้ในการผลิตที่ <font color='red'>ไม่เป็นสารเคมี</font></b></span>
                        </div>
                        <div class="table-responsive div_header p-4">
                            <table class="table table-bordered">
                                <tr>
                                    <td rowspan='2' align='center'><span class="font_header_detail">ลำดับ</span></td>
                                    <td rowspan='2' align='center'><span class="font_header_detail">ชนิดของวัตถุดิบ</span></td>
                                    <td rowspan='2' align='center'><span class="font_header_detail">สถานะ</span></td>
                                    <td rowspan='2' align='center'><span class="font_header_detail">ปริมาณการใช้ต่อปี</span></td>
                                    <td rowspan='2' align='center'><span class="font_header_detail">หน่วย</span></td>
                                    <td rowspan='2' align='center'><span class="font_header_detail">มูลค่า (บาท/ปี)</span></td>
                                    <td colspan='2' align='center'><span class="font_header_detail">แหล่งที่มาของวัตถุดิบ</span></td>
                                </tr>
                                <tr>
                                    <td align='center'><span class="font_header_detail">ประเทศ</span></td>
                                    <td align='center'><span class="font_header_detail">คิดเป็นปริมาณร้อยละ</span></td>
                                </tr>
                                <tr align='left'>
                                    <td align='center' valign='top'>1.</td>
                                    <td align='left' valign='top'>
                                        Electronic expansion valve (EEV)
                                        <input name='non_chemical_product_name_view[]' type='hidden' id='non_chemical_product_name_view' value='".$convert_data->TIS620ToUTF8($result_data_grid[' non_chemical_material_name'])."' />
                                    </td>
                                    <td align='center' valign='top'>
                                        ของแข็ง
                                        <input name='non_chemical_product_state_id_view[]' type='hidden' id='non_chemical_product_state_id_view' value='".$convert_data->TIS620ToUTF8($result_data_grid[' non_chemical_material_state'])."' />
                                    </td>
                                    <td align='center' valign='top'>
                                        1,000
                                        <input name='non_chemical_production_quantity_view[]' type='hidden' id='non_chemical_production_quantity_view' value='".$convert_data->TIS620ToUTF8($result_data_grid[' non_chemical_material_use_year'])."' />
                                    </td>
                                    <td align='center' valign='top'>
                                        ชิ้น
                                        <input name='non_chemical_product_unit_id_view[]' type='hidden' id='non_chemical_product_unit_id_view' value='".$convert_data->TIS620ToUTF8($result_data_grid[' non_chemical_material_yearly_usage_unit'])."' />
                                    </td>
                                    <td align='right' valign='top'>
                                        1,000,000
                                        <input name='non_chemical_production_value_view[]' type='hidden' id='non_chemical_production_value_view' value='".$convert_data->TIS620ToUTF8($result_data_grid[' non_chemical_material_yearly_value'])."' />
                                    </td>
                                    <td align='center' valign='top'>
                                        จีน
                                        <input name='non_chemical_product_export_country_id_view[]' type='hidden' id='non_chemical_product_export_country_id_view' value='".$convert_data->TIS620ToUTF8($result_data_grid[' non_chemical_material_source'])."' />
                                    </td>
                                    <td align='center' valign='top'>
                                        50
                                        <input name='non_chemical_product_export_percentage_view[]' type='hidden' id='non_chemical_product_export_percentage_view' value='".$convert_data->TIS620ToUTF8($result_data_grid[' non_chemical_material_percentage'])."' />
                                    </td>
                                </tr>
                                <tr align='left'>
                                    <td align='center' valign='top'>2.</td>
                                    <td align='left' valign='top'>
                                        Reservoir
                                        <input name='non_chemical_product_name_view[]' type='hidden' id='non_chemical_product_name_view' value='".$convert_data->TIS620ToUTF8($result_data_grid[' non_chemical_material_name'])."' />
                                    </td>
                                    <td align='center' valign='top'>
                                        ของแข็ง
                                        <input name='non_chemical_product_state_id_view[]' type='hidden' id='non_chemical_product_state_id_view' value='".$convert_data->TIS620ToUTF8($result_data_grid[' non_chemical_material_state'])."' />
                                    </td>
                                    <td align='center' valign='top'>
                                        1,000
                                        <input name='non_chemical_production_quantity_view[]' type='hidden' id='non_chemical_production_quantity_view' value='".$convert_data->TIS620ToUTF8($result_data_grid[' non_chemical_material_use_year'])."' />
                                    </td>
                                    <td align='center' valign='top'>
                                        ชิ้น
                                        <input name='non_chemical_product_unit_id_view[]' type='hidden' id='non_chemical_product_unit_id_view' value='".$convert_data->TIS620ToUTF8($result_data_grid[' non_chemical_material_yearly_usage_unit'])."' />
                                    </td>
                                    <td align='right' valign='top'>
                                        5,000,000
                                        <input name='non_chemical_production_value_view[]' type='hidden' id='non_chemical_production_value_view' value='".$convert_data->TIS620ToUTF8($result_data_grid[' non_chemical_material_yearly_value'])."' />
                                    </td>
                                    <td align='center' valign='top'>
                                        จีน
                                        <input name='non_chemical_product_export_country_id_view[]' type='hidden' id='non_chemical_product_export_country_id_view' value='".$convert_data->TIS620ToUTF8($result_data_grid[' non_chemical_material_source'])."' />
                                    </td>
                                    <td align='center' valign='top'>
                                        50
                                        <input name='non_chemical_product_export_percentage_view[]' type='hidden' id='non_chemical_product_export_percentage_view' value='".$convert_data->TIS620ToUTF8($result_data_grid[' non_chemical_material_percentage'])."' />
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="card p-4">
                        <div class="card-header">
                            <span class="font_header"><b>วัตถุดิบและวัตถุจำเป็นที่ใช้ในการผลิตที่ <font color='red'>เป็นสารเคมี</font></b></span>
                        </div>
                        <div class="table-responsive div_header p-4">
                            <table class="table table-bordered">
                                <tr>
                                    <td rowspan='2' align='center'><span class="font_header_detail">ลำดับ</span></td>
                                    <td rowspan='2' align='center'><span class="font_header_detail">ชื่อสารเคมี</span></td>
                                    <td rowspan='2' align='center'><span class="font_header_detail">CLASS</span></td>
                                    <td rowspan='2' align='center'><span class="font_header_detail">CAS No.</span></td>
                                    <td rowspan='2' align='center'><span class="font_header_detail">UN No.</span></td>
                                    <td rowspan='2' align='center'><span class="font_header_detail">สถานะ</span></td>
                                    <td rowspan='2' align='center'><span class="font_header_detail">ปริมาณการใช้ต่อปี</span></td>
                                    <td rowspan='2' align='center'><span class="font_header_detail">หน่วย</span></td>
                                    <td rowspan='2' align='center'><span class="font_header_detail">มูลค่า (บาท/ปี)</span></td>
                                    <td colspan='2' align='center'><span class="font_header_detail">ปริมาณการเก็บในโรงงาน</span></td>
                                    <td colspan='2' align='center'><span class="font_header_detail">แหล่งที่มาของวัตถุดิบ</span></td>
                                </tr>
                                <tr>
                                    <td align='center'><span class="font_header_detail">ปริมาณ</span></td>
                                    <td align='center'><span class="font_header_detail">หน่วย</span></td>
                                    <td align='center'><span class="font_header_detail">ประเทศ</span></td>
                                    <td align='center'><span class="font_header_detail">คิดเป็นปริมาณร้อยละ</span></td>
                                </tr>
                                <tr>
                                    <td colspan="13" align='center' valign='top'><span class="font_header_detail_red"> -- ไม่มีข้อมูล --</span></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="card p-4">
                        <div class="card-header">
                            <span class="font_header"><b>อัตราส่วนของวัตถุดิบและวัตถุจำเป็นที่มีต้นกำเนิดในประเทศกับที่นำเข้ามาจากต่างประเทศ</b></span>
                        </div>
                        <div class="table-responsive div_header p-4">
                            <table class="table table-bordered">
                                <tr>
                                    <td width="70%" align='center'><span class="font_header_detail">รายละเอียด</span></td>
                                    <td width="30%" align='center'><span class="font_header_detail">คิดเป็นร้อยละ (%)</span></td>
                                </tr>
                                <tr>
                                    <td align='left'>1. วัตถุดิบและวัตถุจำเป็นต้นกำเนิดในประเทศ</td>
                                    <td align='center'>
                                        <input type="text" id="total_domestic_material_percentage_view" name="total_domestic_material_percentage_view" value="<?php echo $datashow['total_domestic_material_percentage_view']; ?>" />
                                    </td>
                                </tr>
                                <tr>
                                    <td align='left'>2. วัตถุดิบและวัตถุจำเป็นที่นำเข้าจากต่างประเทศ</td>
                                    <td align='center'>
                                        <input type="text" id="total_import_material_percentage_view" name="total_import_material_percentage_view" value="<?php echo $datashow['total_import_material_percentage_view']; ?>" />
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="card p-4">
                        <div class="card-header">
                            <span class="font_header"><b>บัญชีผลิตภัณฑ์และวัตถุพลอยได้ที่ <font color='red'>ไม่เป็นสารเคมี</font></b></span>
                        </div>
                        <div class="table-responsive div_header p-4">
                            <table class="table table-bordered">
                                <tr>
                                    <td rowspan='2' align='center'><span class="font_header_detail">ลำดับ</span></td>
                                    <td rowspan='2' align='center'><span class="font_header_detail">ประเภท</span></td>
                                    <td rowspan='2' align='center'><span class="font_header_detail">ชื่อผลิตภัณฑ์</span></td>
                                    <td rowspan='2' align='center'><span class="font_header_detail">สถานะ</span></td>
                                    <td rowspan='2' align='center'><span class="font_header_detail">ปริมาณการใช้ต่อปี</span></td>
                                    <td rowspan='2' align='center'><span class="font_header_detail">หน่วย</span></td>
                                    <td rowspan='2' align='center'><span class="font_header_detail">มูลค่า (บาท/ปี)</span></td>
                                    <td colspan='2' align='center'><span class="font_header_detail">สัดส่วนการจำหน่ายผลิตภัณฑ์ในแต่ละประเทศ</span></td>
                                </tr>
                                <tr>
                                    <td align='center'><span class="font_header_detail">ประเทศ</span></td>
                                    <td align='center'><span class="font_header_detail">คิดเป็นปริมาณร้อยละ</span></td>
                                </tr>
                                <tr>
                                    <td align='center' valign='top'>1.</td>
                                    <td align='center' valign='top'>ผลิตภัณฑ์</td>
                                    <td align='center' valign='top'>Industrial Air Conditioner</td>
                                    <td align='center' valign='top'>ของแข็ง</td>
                                    <td align='center' valign='top'>2,000</td>
                                    <td align='center' valign='top'>เครื่อง</td>
                                    <td align='right' valign='top'>70,000,000.00</td>
                                    <td align='center' valign='top'>ไทย</td>
                                    <td align='center' valign='top'>50</td>
                                </tr>
                                <tr>
                                    <td align='center' valign='top'>2.</td>
                                    <td align='center' valign='top'>ผลิตภัณฑ์</td>
                                    <td align='center' valign='top'>Air/Water Heat Exchanger</td>
                                    <td align='center' valign='top'>ของแข็ง</td>
                                    <td align='center' valign='top'>2,000</td>
                                    <td align='center' valign='top'>เครื่อง</td>
                                    <td align='right' valign='top'>50,000,000.00</td>
                                    <td align='center' valign='top'>ไทย</td>
                                    <td align='center' valign='top'>50</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="card p-4">
                        <div class="card-header">
                            <span class="font_header"><b>บัญชีผลิตภัณฑ์และวัตถุพลอยได้ <font color='red'>ที่เป็นสารเคมี</font></b></span>
                        </div>
                        <div class="table-responsive div_header p-4">
                            <table class="table table-bordered">
                                <tr>
                                    <td rowspan='2' align='center'><span class="font_header_detail">ลำดับ</span></td>
                                    <td rowspan='2' align='center'><span class="font_header_detail">ประเภท</span></td>
                                    <td rowspan='2' align='center'><span class="font_header_detail">ชื่อผลิตภัณฑ์สารเคมี</span></td>
                                    <td rowspan='2' align='center'><span class="font_header_detail">CLASS</span></td>
                                    <td rowspan='2' align='center'><span class="font_header_detail">CAS No.</span></td>
                                    <td rowspan='2' align='center'><span class="font_header_detail">UN No.</span></td>
                                    <td rowspan='2' align='center'><span class="font_header_detail">สถานะ</span></td>
                                    <td rowspan='2' align='center'><span class="font_header_detail">ปริมาณการใช้ต่อปี</span></td>
                                    <td rowspan='2' align='center'><span class="font_header_detail">หน่วย</span></td>
                                    <td rowspan='2' align='center'><span class="font_header_detail">มูลค่า (บาท/ปี)</span></td>
                                    <td colspan='2' align='center'><span class="font_header_detail">สัดส่วนการจำหน่ายผลิตภัณฑ์ในแต่ละประเทศ</span></td>
                                </tr>
                                <tr>
                                    <td align='center'><span class="font_header_detail">ประเทศ</span></td>
                                    <td align='center'><span class="font_header_detail">คิดเป็นปริมาณร้อยละ</span></td>
                                </tr>
                                <tr>
                                    <td colspan="13" align='center' valign='top'><span class="font_header_detail_red"> -- ไม่มีข้อมูล --</span></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="card p-4">
                        <div class="card-header">
                            <span class="font_header"><b>อัตราส่วนของบัญชีผลิตภัณฑ์และวัตถุพลอยได้ที่ขายในประเทศกับส่งออกไปต่างประเทศ</b></span>
                        </div>
                        <div class="table-responsive div_header p-4">
                            <table class="table table-bordered">
                                <tr>
                                    <td width="70%" align='center'><span class="font_header_detail">รายละเอียด</span></td>
                                    <td width="30%" align='center'><span class="font_header_detail">คิดเป็นร้อยละ (%)</span></td>
                                </tr>
                                <tr>
                                    <td align='left'>1. บัญชีผลิตภัณฑ์และวัตถุพลอยได้ที่ขายในประเทศคิดเป็นร้อยละ</td>
                                    <td align='center'>
                                        <input type="text" id="total_domestic_material_percentage_view" name="total_domestic_material_percentage_view" value="<?php echo $datashow['total_domestic_material_percentage_view']; ?>" />
                                    </td>
                                </tr>
                                <tr>
                                    <td align='left'>2. บัญชีผลิตภัณฑ์และวัตถุพลอยได้ที่ส่งออกต่างประเทศคิดเป็นร้อยละ</td>
                                    <td align='center'>
                                        <input type="text" id="total_import_material_percentage_view" name="total_import_material_percentage_view" value="<?php echo $datashow['total_import_material_percentage_view']; ?>" />
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="card p-4">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-lg-7">
                                    <span class="font_header"><b>กระบวนการผลิต (ให้เขียนแผนภูมิแสดงขั้นตอนการผลิตและระบุจุดกำเนิดมลพิษ พร้อมคำอธิบายโดยละเอียด)</b></span>
                                </div>
                                <div class="col-lg-5">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">อัพโหลดไฟล์ข้อมูล</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card p-4">
                        <div class="card-header">
                            <span class="font_header"><b>บัญชีเครื่องจักรที่ใช้ในลำดับขั้นตอนการผลิต</b></span>
                        </div>
                        <div class="table-responsive div_header p-4">
                            <table class="table table-bordered">
                                <tr>
                                    <td rowspan='2' align='center'>ลำดับ</td>
                                    <td rowspan='2' align='center'>ชื่อเครื่องจักร<br />Name of manufacturing machine</td>
                                    <td rowspan='2' align='center'>บริษัท และประเทศผู้ผลิต<br />Corporation and country of manufacturing machine</td>
                                    <td rowspan='2' align='center'>งานที่ใช้ <br />Application of machine</td>
                                    <td colspan='3' align='center'>กำลังเครื่องจักร ต่อเครื่อง<br />Machinery power per unit</td>
                                    <td rowspan='2' align='center'>จำนวน<br />No. of machines</td>
                                    <td rowspan='2' align='center'>รวมกำลังเครื่องจักร<br />Total Hp</td>
                                    <td rowspan='2' align='center'>หมายเหตุ</td>
                                </tr>
                                <tr>
                                    <td align='center'>แรงม้า<br />(HP)</td>
                                    <td align='center'>แรงม้าเปรียบเทียบ <br />Compare HP</td>
                                    <td align='center'>หน่วยแรงม้า<br />เปรียบเทียบ</td>
                                </tr>
                                <tr>
                                    <td align='center' valign='top'>1.</td>
                                    <td align='center' valign='top'>BITZER 4TC12.2</td>
                                    <td align='center' valign='top'>Germany</td>
                                    <td align='center' valign='top'>Compressor</td>
                                    <td align='center' valign='top'>12.5</td>
                                    <td align='center' valign='top'>12.5</td>
                                    <td align='center' valign='top'>HP</td>
                                    <td align='center' valign='top'>ไทย</td>
                                    <td align='center' valign='top'>12.5</td>
                                    <td align='center' valign='top'>DC2</td>
                                </tr>
                                <tr>
                                    <td align='center' valign='top'>2.</td>
                                    <td align='center' valign='top'>GUNTNER GSF050.1D/37AS</td>
                                    <td align='center' valign='top'>Germany</td>
                                    <td align='center' valign='top'>Evaporator</td>
                                    <td align='center' valign='top'>3</td>
                                    <td align='center' valign='top'>3</td>
                                    <td align='center' valign='top'>HP</td>
                                    <td align='center' valign='top'>1</td>
                                    <td align='center' valign='top'>3</td>
                                    <td align='center' valign='top'>DC2</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="card p-4">
                        <div class="card-header">
                            <span class="font_header"><b>การรับรองของผู้ประกอบการวิชาชีพวิศวกรรมควบคุม การออกแบบแผนผังโรงงาน</b></span>
                        </div>
                        <div class="table-responsive div_header p-4">
                            <input class="btn btn-success" type="button" value="เพิ่มข้อมูล" onClick="addRow04('datatable04')" />
                            <input class="btn btn-danger" type="button" value="ลบข้อมูล" onClick="deleteRow04('datatable04')" />
                            <br /><br />
                            <table width="100%" border="0" align="center" cellpadding="5" cellspacing="1" id="datatable03" name='datatable03' class="table-bordered">
                                <tr>
                                    <th class="text-center">เลือก</th>
                                    <th class="text-center">คำนำหน้าชื่อ</th>
                                    <th class="text-center">ชื่อ</th>
                                    <th class="text-center">นามสกุล</th>
                                    <th class="text-center">สาขาวิศวกรรมประเภท</th>
                                    <th class="text-center">เลขที่ใบอนุญาตวิศวกรผู้รับรอง</th>
                                    <th class="text-center">วันที่ออกใบอนุญาต</th>
                                    <th class="text-center">ใบอนุญาตหมดอายุ</th>
                                </tr>
                                <tr>
                                    <td align="center"><input type="checkbox" name="chk2" value="" /></td>
                                    <td align="center">
                                        <select name="title_id_view[]">
                                            <option value="0">- เลือกข้อมูล -</option>
                                        </select>
                                    </td>
                                    <td align="center">
                                        <input name="firstname_view[]" type="text" id="firstname_view" />
                                    </td>
                                    <td align="center">
                                        <input name="lastname_view[]" type="text" id="lastname_view" />
                                    </td>
                                    <td align="center">
                                        <select name="construction_job_id_view[]" onchange="fncConstructionChange(this);">
                                            <option value="0">- เลือกข้อมูล -</option>
                                        </select>
                                    </td>
                                    <td align="center">
                                        <input name="lastname_view[]" type="text" id="lastname_view" />
                                    </td>
                                    <td align="center">
                                        <input name="lastname_view[]" type="text" id="lastname_view" />
                                    </td>
                                    <td align="center">
                                        <input name="engineer_license_name[]" type="text" id="engineer_license_name" value="" maxlength='2' size='5' readonly />
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="card p-4">
                        <div class="table-responsive div_header p-4">
                            <div class="card-header">
                                <span class="font_header"><b>เอกสารการรับรองของผู้ประกอบวิชาชีพวิศวกรรมควบคุมการออกแบบแผนผังโรงงาน * เอกสารทุกรายการต้องลงนามรับรองโดยผู้ประกอบวิชาชีพวิศวกรรมควบคุม</b></span>
                            </div>
                            <table width="100%" border="0" align="center" cellpadding="5" cellspacing="1" class="table table-bordered">
                                <tr>
                                    <td width='70%'>
                                        <label class="col-lg-12">1. หนังสือรับรองของผู้ประกอบวิชาชีพวิศวกรรมควบคุม การออกแบบแผนผังโรงงาน</label>
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
                                        <label class="col-lg-12">2. ใบอนุญาตเป็นผู้ประกอบวิชาชีพวิศวกรรมควบคุม</label>
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
                                        <label class="col-lg-12">3. แผนผังแปลงที่ดินแสดงสิ่งปลูกสร้าง อาคารที่จะประกอบอุตสาหกรรม</label>
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
                                        <label class="col-lg-12">4. แบบแปลนอาคารโรงงาน และแผนผังแสดงการติดตั้งเครื่องจักรขนาดเหมาะสม และถูกต้องตามมาตราส่วน พร้อมด้วยรายละเอียดประกอบ</label>
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
                                        <label class="col-lg-12">5. บัญชีเครื่องจักรที่ใช้ในลำดับขั้นตอนการผลิต</label>
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
                                        <label class="col-lg-12">6. เอกสารประกอบอื่นๆ ในการออกแบบแผนผังโรงงาน</label>
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

                <div class="tab-pane" id="tab5">
                    <div class="card p-4">
                        <div class="card-header">
                            <span class="font_header"><b>ปริมาณการใช้ไฟฟ้า</b></span>
                        </div>
                        <div class="panel-table">
                            <!-- Table -->
                            <div class="table-responsive div_header p-4">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center; vertical-align: top;" width="60%"><span class="font_header_detail">แหล่งที่มา</span></th>
                                            <th style="text-align: center; vertical-align: top;" width="40%"><span class="font_header_detail">ปริมาณการใช้ (KW/วัน)</span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td align="center">
                                                การไฟฟ้านครหลวง
                                            </td>
                                            <td align="center">
                                                1,00<?php echo number_format($result_data_grid_01['electricity_daily_supply'], 2); ?>
                                                <input type="hidden" name="electricity_daily_supply_view[]" id="electricity_daily_supply_view" value="<?php echo $result_data_grid_01['electricity_daily_supply']; ?>" />
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="card p-4">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-2" align="left">
                                    <span class="font_header"><b>จำนวนหมายเลขโทรศัพท์</b></span>
                                </div>
                                <div class="col-1" align="left">
                                    <span class="font_header"><b>5</b></span>
                                </div>
                                <div class="col-8" align="left">
                                    <span class="font_header"><b>เลขหมาย</b></span>
                                </div>
                            </div>
                            <br />
                        </div>
                    </div>

                    <div class="card p-4">
                        <div class="card-header">
                            <span class="font_header"><b>ปริมาณการใช้น้ำ</b></span>
                        </div>
                        <div class="table-responsive div_header p-4">
                            <table id="datatable007" class="table table-bordered p-4">
                                <thead>
                                    <tr>
                                        <th style="text-align: center; vertical-align: top;"><span class="font_header_detail">ประเภทน้ำที่ใช้</span></th>
                                        <th style="text-align: center; vertical-align: top;"><span class="font_header_detail">ปริมาณการใช้</span></th>
                                        <th style="text-align: center; vertical-align: top;"><span class="font_header_detail">แหล่งที่มา</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td align="center">
                                            น้ำดิบ
                                        </td>
                                        <td align="center">
                                            500
                                        </td>
                                        <td align="center">
                                            การประปานครหลวง
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card p-4">
                        <div class="card-header">
                            <span class="font_header"><b>ปริมาณการใช้เชื้อเพลิง</b></span>
                        </div>
                        <div class="table-responsive div_header p-4">
                            <table id="datatable008" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="text-align: center; vertical-align: top;"><span class="font_header_detail">ชนิดเชื้อเพลิง</span></th>
                                        <th style="text-align: center; vertical-align: top;"><span class="font_header_detail">แหล่งที่มา</span></th>
                                        <th style="text-align: center; vertical-align: top;"><span class="font_header_detail">ปริมาณการใช้ (ต่อวัน)</span></th>
                                        <th style="text-align: center; vertical-align: top;"><span class="font_header_detail">หน่วย</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td align="center">
                                            น้ำมัน
                                        </td>
                                        <td align="center">
                                            ปตท.
                                        </td>
                                        <td align="center">
                                            500
                                        </td>
                                        <td align="center">
                                            ลิตร
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="tab6">
                    <div class="card p-4">
                        <div class="card-header">
                            <span class="font_header"><b>ความปลอดภัย</b></span>
                        </div>
                        <div class="table-responsive div_header p-4">

                            <div class="radio-header p-3">
                                <div class="card-header">
                                    <span class="font_header"><b>หม้อไอน้ำ</b></span>
                                </div>
                                <div class="table-responsive div_header p-4">
                                    <table id="datatable13" class="table table-bordered">
                                        <thead>
                                            <tr class="success">
                                                <th style="text-align: center; vertical-align: top;" rowspan="2"><span class="font_header_detail"><b>หม้อน้ำหมายเลข</b></span></th>
                                                <th style="text-align: center; vertical-align: top;" rowspan="2"><span class="font_header_detail"><b>ชนิด</b></span></th>
                                                <th style="text-align: center; vertical-align: top;" rowspan="2"><span class="font_header_detail"><b>อัตราการผลิตไอน้ำ</b></span></th>
                                                <th style="text-align: center; vertical-align: top;" rowspan="2"><span class="font_header_detail"><b>แรงม้าหม้อน้ำ</b></span></th>
                                                <th style="text-align: center; vertical-align: top;" rowspan="2"><span class="font_header_detail"><b>ชนิดเนื้อเพลิง</b></span></th>
                                                <th style="text-align: center; vertical-align: top;" rowspan="2"><span class="font_header_detail"><b>วันที่ตรวจสอบ</b></span></th>
                                                <th style="text-align: center; vertical-align: top;" rowspan="2"><span class="font_header_detail"><b>อายุการใช้งาน (ปี)</b></span></th>
                                                <th style="text-align: center; vertical-align: top;" colspan="6"><span class="font_header_detail"><b>ผู้ตรวจสอบ</b></span></th>
                                                <th style="text-align: center; vertical-align: top;" colspan="4"><span class="font_header_detail"><b>ผู้ควบคุมประจำ</b></span></th>
                                            </tr>
                                            <tr class="success">
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail"><b>ชื่อ</b></span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail"><b>นามสกุล</b></span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail"><b>ทะเบียนวิศวกรรม</b></span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail"><b>วันหมดอายุ</b></span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail"><b>ทะเบียนตรวจสอบหม้อไอน้ำ</b></span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail"><b>วันหมดอายุ</b></span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail"><b>ชื่อ</b></span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail"><b>นามสกุล</b></span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail"><b>ทะเบียนเลขที่</b></span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail"><b>วันหมดอายุ</b></span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td colspan="17" align="center"><span class="font_header_detail_red"><b> -- ไม่มีข้อมูล --</b></span></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <table width="100%" border="0" align="center" cellpadding="5" cellspacing="1" class="table table-bordered">
                                        <tr>
                                            <td width='70%'>
                                                <label class="col-lg-12">เอกสารรับรองความปลอดภัยในการใช้หม้อไอน้ํา</label>
                                            </td>
                                            <td>
                                                <span class="font_header_detail_red"><b> -- ไม่มีข้อมูล --</b></span>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <div class="radio-header p-3">
                                <div class="card-header">
                                    <span class="font_header"><b>หม้อต้ม</b></span>
                                </div>
                                <div class="table-responsive div_header p-4">
                                    <table id="datatable15" class="table table-bordered">
                                        <thead>
                                            <tr class="success">
                                                <th style="text-align: center; vertical-align: top;" rowspan="2"><span class="font_header_detail"><b>หม้อต้มหมายเลข</b></span></th>
                                                <th style="text-align: center; vertical-align: top;" rowspan="2"><span class="font_header_detail"><b>ชนิดของเหลวที่เป็นสื่อนำความร้อน</b></span></th>
                                                <th style="text-align: center; vertical-align: top;" rowspan="2"><span class="font_header_detail"><b>วันที่ตรวจสอบ</b></span></th>
                                                <th style="text-align: center; vertical-align: top;" rowspan="2"><span class="font_header_detail"><b>อายุการใช้งาน (ปี)</b></span></th>
                                                <th style="text-align: center; vertical-align: top;" colspan="6"><span class="font_header_detail"><b>ผู้ตรวจสอบ</b></span></th>
                                                <th style="text-align: center; vertical-align: top;" colspan="4"><span class="font_header_detail"><b>ผู้ควบคุมประจำ</b></span></th>
                                            </tr>
                                            <tr class="success">
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail"><b>ชื่อ</b></span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail"><b>นามสกุล</b></span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail"><b>ทะเบียนวิศวกรรม</b></span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail"><b>วันหมดอายุ</b></span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail"><b>ทะเบียนตรวจสอบหม้อไอน้ำ</b></span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail"><b>วันหมดอายุ</b></span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail"><b>ชื่อ</b></span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail"><b>นามสกุล</b></span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail"><b>ทะเบียนเลขที่</b></span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail"><b>วันหมดอายุ</b></span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td colspan="14" align="center"><span class="font_header_detail_red"><b> -- ไม่มีข้อมูล --</b></span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </table>

                                    <table width="100%" border="0" align="center" cellpadding="5" cellspacing="1" class="table table-bordered">
                                        <tr>
                                            <td width='70%'>
                                                <label class="col-lg-12">เอกสารรับรองความปลอดภัยในการใช้หม้อต้ม</label>
                                            </td>
                                            <td>
                                                <span class="font_header_detail_red"><b> -- ไม่มีข้อมูล --</b></span>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <div class="radio-header p-3">
                                <div class="card-header">
                                    <span class="font_header"><b>ภาชนะรับแรงดัน</b></span>
                                </div>
                                <div class="table-responsive div_header p-4">
                                    <table id="datatable13" class="table table-bordered">
                                        <thead>
                                            <tr class="success">
                                                <th style="text-align: center; vertical-align: top;" rowspan="2"><span class="font_header_detail"><b>ภาชนะรับแรงดันหมายเลข</b></span></th>
                                                <th style="text-align: center; vertical-align: top;" rowspan="2"><span class="font_header_detail"><b>โครงสร้าง</b></span></th>
                                                <th style="text-align: center; vertical-align: top;" rowspan="2"><span class="font_header_detail"><b>ความดันการใช้งานปกติ<br />(kg/cm2)</b></span></th>
                                                <th style="text-align: center; vertical-align: top;" rowspan="2"><span class="font_header_detail"><b>วันที่ตรวจสอบ</b></span></th>
                                                <th style="text-align: center; vertical-align: top;" rowspan="2"><span class="font_header_detail"><b>อายุการใช้งาน (ปี)</b></span></th>
                                                <th style="text-align: center; vertical-align: top;" colspan="6"><span class="font_header_detail"><b>ผู้ตรวจสอบ</b></span></th>
                                                <th style="text-align: center; vertical-align: top;" colspan="4"><span class="font_header_detail"><b>ผู้ควบคุมประจำ</b></span></th>
                                            </tr>
                                            <tr class="success">
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail"><b>ชื่อ</b></span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail"><b>นามสกุล</b></span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail"><b>ทะเบียนวิศวกรรม</b></span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail"><b>วันหมดอายุ</b></span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail"><b>ทะเบียนตรวจสอบภาชนะรับแรงดัน</b></span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail"><b>วันหมดอายุ</b></span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail"><b>ชื่อ</b></span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail"><b>นามสกุล</b></span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail"><b>ทะเบียนเลขที่</b></span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail"><b>วันหมดอายุ</b></span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td colspan="15" align="center"><span class="font_header_detail_red"><b> -- ไม่มีข้อมูล --</b></span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table width="100%" border="0" align="center" cellpadding="5" cellspacing="1" class="table table-bordered">
                                        <tr>
                                            <td width='70%'>
                                                <label class="col-lg-12">เอกสารรับรองความปลอดภัยในการใช้ภาชนะรับแรงดัน</label>
                                            </td>
                                            <td>
                                                <span class="font_header_detail_red"><b> -- ไม่มีข้อมูล --</b></span>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <div class="radio-header p-3">
                                <div class="card-header">
                                    <span class="font_header"><b>ถังปฏิกิริยา</b></span>
                                </div>
                                <div class="table-responsive div_header p-4">
                                    <table id="datatable13" class="table table-bordered">
                                        <thead>
                                            <tr class="success">
                                                <th class="table-head-tab" width="499"><span class="font_header_detail"><b>แบบถังปฏิกิริยา</b></span></th>
                                                <th class="table-head-tab" width="360"><span class="font_header_detail"><b>ขนาด (ลบ.ม.)</b></span></th>
                                                <th class="table-head-tab" width="360"><span class="font_header_detail"><b>ชนิดของสารเคมี</b></span></th>
                                                <th class="table-head-tab" width="360"><span class="font_header_detail"><b>Class</b></span></th>
                                                <th class="table-head-tab" width="360"><span class="font_header_detail"><b>CAS No.</b></span></th>
                                                <th class="table-head-tab" width="360"><span class="font_header_detail"><b>UN No.</b></span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td align="center">ถังปฏิกิริยา A</td>
                                                <td align="center">200</td>
                                                <td align="center">Etrenal</td>
                                                <td align="center">100-1</td>
                                                <td align="center">100-1-A</td>
                                                <td align="center">A-01-111</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="radio-header p-3">
                                <div class="card-header">
                                    <span class="font_header"><b>ภาชนะบรรจุวัตถุอันตราย</b></span>
                                </div>
                                <div class="table-responsive div_header p-4">
                                    <table id="datatable13" class="table table-bordered">
                                        <thead>
                                            <tr class="success">
                                                <th style="text-align: center; vertical-align: top;" rowspan="2"><span class="font_header_detail"><b>ชนิดวัตถุอันตราย</b></span></th>
                                                <th style="text-align: center; vertical-align: top;" rowspan="2"><span class="font_header_detail"><b>CLASS</b></span></th>
                                                <th style="text-align: center; vertical-align: top;" rowspan="2"><span class="font_header_detail"><b>CAS No.</b></span></th>
                                                <th style="text-align: center; vertical-align: top;" rowspan="2"><span class="font_header_detail"><b>UN No.</b></span></th>
                                                <th style="text-align: center; vertical-align: top;" rowspan="2"><span class="font_header_detail"><b>สถานะ</b></span></th>
                                                <th style="text-align: center; vertical-align: top;" rowspan="2"><span class="font_header_detail"><b>ขนาดภาชนะที่จัดเก็บ</b></span></th>
                                                <th style="text-align: center; vertical-align: top;" rowspan="2"><span class="font_header_detail"><b>การจัดเก็บ</b></span></th>
                                                <th style="text-align: center; vertical-align: top;" rowspan="2"><span class="font_header_detail"><b>ปริมาณที่จัดเก็บ</b></span></th>
                                                <th style="text-align: center; vertical-align: top;" rowspan="2"><span class="font_header_detail"><b>หน่วย</b></span></th>
                                                <th style="text-align: center; vertical-align: top;" class="table-head-tab" colspan="3"><span class="font_header_detail"><b>ชื่อวัตถุหรือเคมีภัณฑ์ที่เตรียมระงับ<br />หรือลดความรุนแรง</b></span></th>
                                                <th style="text-align: center; vertical-align: top;" class="table-head-tab" colspan="3"><span class="font_header_detail"><b>ผู้ตรวจสอบ</b></span></th>
                                            </tr>
                                            <tr class="success">
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail"><b>ชนิด</b></span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail"><b>ปริมาณ</b></span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail"><b>หน่วย</b></span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail"><b>ชื่อ / นามสกุล</b></span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail"><b>ทะเบียนเลขที่</b></span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail"><b>หมดอายุ</b></span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td colspan="15" align="center"><span class="font_header_detail_red"><b> -- ไม่มีข้อมูล --</b></span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="radio-header p-3">
                                <div class="card-header">
                                    <span class="font_header"><b>น้ำมันเชื้อเพลิง/ ภาชนะบรรจุเชื้อเพลิง</b></span>
                                </div>
                                <div class="table-responsive div_header p-4">
                                    <table id="datatable13" class="table table-bordered">
                                        <thead>
                                            <tr class="success">
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail"><b>ชนิดของเชื้อเพลิง</b></span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail"><b>ปริมาณเชื้อเพลิงที่ใช้</b></span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail"><b>ประเภทเชื้อเพลิง</b></span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail"><b>ชนิดถังบรรจุเชื้อเพลิง</b></span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail"><b>การจัดเก็บ</b></span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td align="center">LPG</td>
                                                <td align="center">200</td>
                                                <td align="center">ไวไฟน้อย</td>
                                                <td align="center">ถังขนส่งน้ำมันเชื้อเพลิงทำด้วยเหล็ก</td>
                                                <td align="center">บนพื้นดิน</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="radio-header p-3">
                                <div class="card-header">
                                    <span class="font_header"><b>การตรวจสอบระบบไฟฟ้าของโรงงาน</b></span>
                                </div>
                                <div class="table-responsive div_header p-4">
                                    <table id="datatable13" class="table table-bordered">
                                        <thead>
                                            <tr class="success">
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail"><b>หม้อแปลงจำนวนกี่กิโลวัตต์ (KW)</b></span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail"><b>วันที่ตรวจสอบล่าสุด</b></span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail"><b>วิศวกรผู้ตรวจสอบ</b></span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail"><b>ทะเบียนเลขที่</b></span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail"><b>วันหมดอายุ</b></span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td align="center">1,000</td>
                                                <td align="center">01/11/2568</td>
                                                <td align="center">นายทดสอบ ระบบ</td>
                                                <td align="center">9999</td>
                                                <td align="center">30/11/2572</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <table width="100%" border="0" align="center" cellpadding="5" cellspacing="1" class="table table-bordered">
                                        <tr>
                                            <td width='70%'>
                                                <label class="col-lg-12">เอกสารการตรวจสอบระบบไฟฟ้าของโรงงาน</label>
                                            </td>
                                            <td>
                                                <span class="font_header_detail_red"><a href="#">ไฟล์เอกสาร</a></span>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <div class="radio-header p-3">
                                <div class="card-header">
                                    <span class="font_header"><b>เตาเผาขยะ</b></span>
                                </div>
                                <div class="table-responsive div_header p-4">
                                    <table id="datatable13" class="table table-bordered">
                                        <thead>
                                            <tr class="success">
                                                <th style="text-align: center; vertical-align: top;" rowspan="2"><span class="font_header_detail"><b>ชนิดของเตาเผาขยะ</b></span></th>
                                                <th style="text-align: center; vertical-align: top;" rowspan="2"><span class="font_header_detail"><b>อุณหภูมิที่ใช้ในการเผา<br />องศาเซลเซียส</b></span></th>
                                                <th style="text-align: center; vertical-align: top;" rowspan="2"><span class="font_header_detail"><b>ชนิดของเสียที่ใช้ในเตาเผา</b></span></th>
                                                <th style="text-align: center; vertical-align: top;" rowspan="2"><span class="font_header_detail"><b>ความสามรถในการเผาของเตาเผา</b></span></th>
                                                <th style="text-align: center; vertical-align: top;" rowspan="2"><span class="font_header_detail"><b>ปริมาณที่เผา</b></span></th>
                                                <th style="text-align: center; vertical-align: top;" rowspan="2"><span class="font_header_detail"><b>หน่วย</b></span></th>
                                                <th style="text-align: center; vertical-align: top;" colspan="7"><span class="font_header_detail"><b>วิศวกรผู้รับรอง</b></span></th>
                                            </tr>
                                            <tr class="success">
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail"><b>ชื่อ</b></span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail"><b>นามสกุล</b></span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail"><b>สาขาวิศวกรรม</b></span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail"><b>ประเภท</b></span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail"><b>เลขที่ใบอนุญาตวิศวกรผู้รับรอง</b></span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail"><b>วันที่ออกใบอนุญาต</b></span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail"><b>ใบอนุญาตหมดอายุ</b></span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td colspan="17" align="center"><span class="font_header_detail_red"><b> -- ไม่มีข้อมูล --</b></span></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <table width="100%" border="0" align="center" cellpadding="5" cellspacing="1" class="table table-bordered">
                                        <tr>
                                            <td width='70%'>
                                                <label class="col-lg-12">เอกสารรับรองความปลอดภัยในการใช้เตาเผาขยะ</label>
                                            </td>
                                            <td>
                                                <span class="font_header_detail_red"><b> -- ไม่มีข้อมูล --</b></span>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="tab7">
                    <div class="card p-4">
                        <div class="card-header">
                            <span class="font_header"><b>น้ำเสีย</b></span>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="table-responsive div_header p-4">
                                    <div class="radio-lists">
                                        <span class="font_header_detail">1.1 ปริมาณน้ำเสียที่เกิดขึ้น ดังนี้</span>
                                    </div>
                                    <br />
                                    <table id="datatable_grid09" class="table">
                                        <thead>
                                            <tr>
                                                <th class="table-head-tab" width="40%"><span class="font_header_detail">แหล่งน้ำเสียที่เกิดขึ้น</span></th>
                                                <th class="table-head-tab" width="60%"><span class="font_header_detail">ปริมาณน้ำเสียที่เกิดขึ้น (ลบ.ม. / วัน)</span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>กระบวนการผลิต</td>
                                                <td align="left">
                                                    10<?php echo $datashow_master['production_waste_water_daily_amount']; ?>
                                                    <input type="hidden" id="production_waste_water_daily_amount_view" name="production_waste_water_daily_amount_view" value="<?php echo $datashow_master['production_waste_water_daily_amount']; ?>" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>อุปโภค-บริโภค</td>
                                                <td align="left">
                                                    10<?php echo $datashow_master['consumer_waste_water_daily_amount']; ?>
                                                    <input type="hidden" id="consumer_waste_water_daily_amount_view" name="consumer_waste_water_daily_amount_view" value="<?php echo $datashow_master['consumer_waste_water_daily_amount']; ?>" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>กิจกรรมสนับสนุนการผลิต</td>
                                                <td align="left">
                                                    10<?php echo $datashow_master['production_support_waste_water_daily_amount']; ?>
                                                    <input type="hidden" id="production_support_waste_water_daily_amount_view" name="production_support_waste_water_daily_amount_view" value="<?php echo $datashow_master['production_support_waste_water_daily_amount']; ?>" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="left">รวมเป็น</td>
                                                <td align="left">
                                                    30<?php echo $datashow_master['production_waste_water_daily_amount'] + $datashow_master['production_support_waste_water_daily_amount'] + $datashow_master['consumer_waste_water_daily_amount']; ?>
                                                    <input name="d001" id="d001" type="hidden" value="<?php echo $datashow_master['production_waste_water_daily_amount'] + $datashow_master['production_support_waste_water_daily_amount'] + $datashow_master['consumer_waste_water_daily_amount']; ?>" />
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="table-responsive div_header p-4">
                                    <span class="font_header_detail"><b>การเชื่อมต่อระบบตรวจวัดคุณภาพน้ำแบบอัตโนมัติ (WQMS)</b> : เชื่อมแล้ว</span>
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive div_header p-4">
                                    <div class="card-header">
                                        <span class="font_header_detail"><b>ผู้ออกแบบระบบและติดตั้งระบบน้ำเสีย <font color="red">* กรณีมีระบบบําบัดน้ำเสีย</font></b></span>
                                    </div>
                                    <table id="datatable004" class="table table-bordered">
                                        <thead>
                                            <tr class="success">
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail">ชื่อ</span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail">นามสกุล</span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail">สาขาวิศวกรรม</span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail">ประเภท</span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail">เลขที่ใบอนุญาตวิศวกรผู้รับรอง</span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail">วันที่ออกใบอนุญาต</span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail">ใบอนุญาตหมดอายุ</span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    ทดสอบ
                                                    <?php echo $result_data_grid_02['waste_water_treatment_system_certify_engineer_name_view']; ?>
                                                    <input type="hidden" id="waste_water_treatment_system_certify_engineer_name_view" name="waste_water_treatment_system_certify_engineer_name_view[]" value="<?php echo $result_data_grid_02['waste_water_treatment_system_certify_engineer_name_view']; ?>" />
                                                </td>
                                                <td>
                                                    ระบบ
                                                    <?php echo $result_data_grid_02['waste_water_treatment_system_certify_engineer_lastname_view']; ?>
                                                    <input type="hidden" id="waste_water_treatment_system_certify_engineer_lastname_view" name="waste_water_treatment_system_certify_engineer_lastname_view[]" value="<?php echo $result_data_grid_02['waste_water_treatment_system_certify_engineer_lastname_view']; ?>" />
                                                </td>
                                                <td>
                                                    สิ่งแวดล้อม
                                                    <?php echo $result_data_grid_02['waste_water_treatment_system_certify_engineer_major_id_view']; ?>
                                                    <input type="hidden" id="waste_water_treatment_system_certify_engineer_major_id_view" name="waste_water_treatment_system_certify_engineer_major_id_view[]" value="<?php echo $result_data_grid_02['waste_water_treatment_system_certify_engineer_major_id_view']; ?>" />
                                                </td>
                                                <td>
                                                    สามัญ
                                                    <?php echo $result_data_grid_02['waste_water_treatment_system_certify_engineer_license_type_id_view']; ?>
                                                    <input type="hidden" id="waste_water_treatment_system_certify_engineer_license_type_id_view" name="waste_water_treatment_system_certify_engineer_license_type_id_view[]" value="<?php echo $result_data_grid_02['waste_water_treatment_system_certify_engineer_license_type_id_view']; ?>" />
                                                </td>
                                                <td>
                                                    9999999
                                                    <?php echo $result_data_grid_02['waste_water_treatment_system_certify_engineer_license_no_view']; ?>
                                                    <input type="hidden" id="waste_water_treatment_system_certify_engineer_license_no_view" name="waste_water_treatment_system_certify_engineer_license_no_view[]" value="<?php echo $result_data_grid_02['waste_water_treatment_system_certify_engineer_license_no_view']; ?>" />
                                                </td>
                                                <td>
                                                    01/11/2568
                                                    <?php echo $result_data_grid_02['waste_water_treatment_system_certify_engineer_license_issue_date_view']; ?>
                                                    <input type="hidden" name="waste_water_treatment_system_certify_engineer_license_issue_date_view[]" id="waste_water_treatment_system_certify_engineer_license_issue_date_view" value="<?php echo $result_data_grid_02['waste_water_treatment_system_certify_engineer_license_issue_date_view']; ?>" />
                                                </td>
                                                <td>
                                                    30/11/2572
                                                    <?php echo $result_data_grid_02['waste_water_treatment_system_certify_engineer_license_expire_date_view']; ?>
                                                    <input type="hidden" id="waste_water_treatment_system_certify_engineer_license_expire_date_view" name="waste_water_treatment_system_certify_engineer_license_expire_date_view[]" value="<?php echo $result_data_grid_02['waste_water_treatment_system_certify_engineer_license_expire_date_view']; ?>" />
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive div_header p-4">
                                    <div class="card-header">
                                        <span class="font_header_detail"><b>ระบบบําบัดน้ำเสีย <font color="red">* กรณีมีระบบบําบัดน้ำเสีย</font></b></span>
                                    </div>
                                    <table id="datatable004" class="table table-bordered">
                                        <thead>
                                            <tr class="success">
                                                <th style="text-align: center; vertical-align: top;" rowspan="2"><span class="font_header_detail">ระบบบำบัดน้ำเสีย<br />ที่ใช้เป็นระบบ</span></th>
                                                <th style="text-align: center; vertical-align: top;" rowspan="2"><span class="font_header_detail">บำบัดได้สูงสุด<br />(ลบ.ม. / วัน)</span></th>
                                                <th style="text-align: center; vertical-align: top;" rowspan="2"><span class="font_header_detail">ปริมาณน้ำเสียที่เข้าระบบ<br />(ลบ.ม. / วัน)</span></th>
                                                <th style="text-align: center; vertical-align: top;" colspan="3"><span class="font_header_detail">อัตราส่วนการรับน้ำจากแหล่งน้ำเสีย Source (%)</span></th>
                                                <th style="text-align: center; vertical-align: top;" rowspan="2"><span class="font_header_detail">การระบายน้ำทิ้งออกนอก<br />บริเวณโรงงาน</span></th>
                                                <th style="text-align: center; vertical-align: top;" rowspan="2"><span class="font_header_detail">สารเคมีที่ใช้ในการบำบัด</span></th>
                                                <th style="text-align: center; vertical-align: top;" rowspan="2"><span class="font_header_detail">ปริมาณการใช้สารเคมี <br />(กก. / วัน)</span></th>
                                                <th style="text-align: center; vertical-align: top;" rowspan="2"><span class="font_header_detail">การติดตั้งมาตร<br />วัดไฟฟ้า</span></th>
                                            </tr>
                                            <tr class="success">
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail">กระบวนการผลิต</span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail">อุปโภค-บริโภค</span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail">กิจกรรมสนับสนุน<br />การผลิต</span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    ระบบบำบัดทางกายภาพ
                                                    <?php echo $result_data_grid_02['waste_water_treatment_system_certify_engineer_name_view']; ?>
                                                    <input type="hidden" id="waste_water_treatment_system_certify_engineer_name_view" name="waste_water_treatment_system_certify_engineer_name_view[]" value="<?php echo $result_data_grid_02['waste_water_treatment_system_certify_engineer_name_view']; ?>" />
                                                </td>
                                                <td>
                                                    150
                                                    <?php echo $result_data_grid_02['waste_water_treatment_system_certify_engineer_lastname_view']; ?>
                                                    <input type="hidden" id="waste_water_treatment_system_certify_engineer_lastname_view" name="waste_water_treatment_system_certify_engineer_lastname_view[]" value="<?php echo $result_data_grid_02['waste_water_treatment_system_certify_engineer_lastname_view']; ?>" />
                                                </td>
                                                <td>
                                                    100
                                                    <?php echo $result_data_grid_02['waste_water_treatment_system_certify_engineer_major_id_view']; ?>
                                                    <input type="hidden" id="waste_water_treatment_system_certify_engineer_major_id_view" name="waste_water_treatment_system_certify_engineer_major_id_view[]" value="<?php echo $result_data_grid_02['waste_water_treatment_system_certify_engineer_major_id_view']; ?>" />
                                                </td>
                                                <td>
                                                    50
                                                    <?php echo $result_data_grid_02['waste_water_treatment_system_certify_engineer_license_type_id_view']; ?>
                                                    <input type="hidden" id="waste_water_treatment_system_certify_engineer_license_type_id_view" name="waste_water_treatment_system_certify_engineer_license_type_id_view[]" value="<?php echo $result_data_grid_02['waste_water_treatment_system_certify_engineer_license_type_id_view']; ?>" />
                                                </td>
                                                <td>
                                                    50
                                                    <?php echo $result_data_grid_02['waste_water_treatment_system_certify_engineer_license_no_view']; ?>
                                                    <input type="hidden" id="waste_water_treatment_system_certify_engineer_license_no_view" name="waste_water_treatment_system_certify_engineer_license_no_view[]" value="<?php echo $result_data_grid_02['waste_water_treatment_system_certify_engineer_license_no_view']; ?>" />
                                                </td>
                                                <td>
                                                    50
                                                    <?php echo $result_data_grid_02['waste_water_treatment_system_certify_engineer_license_issue_date_view']; ?>
                                                    <input type="hidden" name="waste_water_treatment_system_certify_engineer_license_issue_date_view[]" id="waste_water_treatment_system_certify_engineer_license_issue_date_view" value="<?php echo $result_data_grid_02['waste_water_treatment_system_certify_engineer_license_issue_date_view']; ?>" />
                                                </td>
                                                <td>
                                                    ปล่อยเข้าสู่ระบบบำบัดส่วนกลางของนิคมฯ
                                                    <?php echo $result_data_grid_02['waste_water_treatment_system_certify_engineer_license_expire_date_view']; ?>
                                                    <input type="hidden" id="waste_water_treatment_system_certify_engineer_license_expire_date_view" name="waste_water_treatment_system_certify_engineer_license_expire_date_view[]" value="<?php echo $result_data_grid_02['waste_water_treatment_system_certify_engineer_license_expire_date_view']; ?>" />
                                                </td>
                                                <td>
                                                    ASC
                                                    <?php echo $result_data_grid_02['waste_water_treatment_system_certify_engineer_license_expire_date_view']; ?>
                                                    <input type="hidden" id="waste_water_treatment_system_certify_engineer_license_expire_date_view" name="waste_water_treatment_system_certify_engineer_license_expire_date_view[]" value="<?php echo $result_data_grid_02['waste_water_treatment_system_certify_engineer_license_expire_date_view']; ?>" />
                                                </td>
                                                <td>
                                                    10
                                                    <?php echo $result_data_grid_02['waste_water_treatment_system_certify_engineer_license_expire_date_view']; ?>
                                                    <input type="hidden" id="waste_water_treatment_system_certify_engineer_license_expire_date_view" name="waste_water_treatment_system_certify_engineer_license_expire_date_view[]" value="<?php echo $result_data_grid_02['waste_water_treatment_system_certify_engineer_license_expire_date_view']; ?>" />
                                                </td>
                                                <td>
                                                    มี
                                                    <?php echo $result_data_grid_02['waste_water_treatment_system_certify_engineer_license_expire_date_view']; ?>
                                                    <input type="hidden" id="waste_water_treatment_system_certify_engineer_license_expire_date_view" name="waste_water_treatment_system_certify_engineer_license_expire_date_view[]" value="<?php echo $result_data_grid_02['waste_water_treatment_system_certify_engineer_license_expire_date_view']; ?>" />
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive div_header p-4">
                                    <div class="card-header">
                                        <span class="font_header_detail"><b>เอกสารการรับรองของผู้ประกอบวิชาชีพวิศวกรรมควบคุมระบบบำบัดน้ำเสีย <font color="red">* เอกสารทุกรายการต้องลงนามรับรองโดยผู้ประกอบวิชาชีพวิศวกรรมควบคุม</font></b></span>
                                    </div>
                                    <table id="datatable_grid14" class="table">
                                        <tbody>
                                            <tr>
                                                <td class="table-detail-left" width="60%">1. หนังสือรับรองของผู้ประกอบวิชาชีพวิศวกรรมควบคุมระบบบำบัดน้ำเสีย</td>
                                                <td width="40%">
                                                    <span class="font_header_detail_red"><a href="#">ไฟล์เอกสาร</a></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="table-detail-left">2. ใบอนุญาตเป็นผู้ประกอบวิชาชีพวิศวกรรมควบคุม</td>
                                                <td>
                                                    <span class="font_header_detail_red"><a href="#">ไฟล์เอกสาร</a></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="table-detail-left">3. แผนผังแสดงระบบระบายน้ำเสียจากโรงงานสู่บ่อพักน้ำเสียของนิคมอุตสาหกรรม</td>
                                                <td>
                                                    <span class="font_header_detail_red"><a href="#">ไฟล์เอกสาร</a></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="table-detail-left">4. แบบแปลนรายละเอียดระบบบำบัดน้ำเสีย พร้อมรายการคำนวณ</td>
                                                <td>
                                                    <span class="font_header_detail_red"><a href="#">ไฟล์เอกสาร</a></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="table-detail-left">5. เอกสารประกอบอื่นๆ ในการรับรองการควบคุมระบบบำบัดน้ำเสีย</td>
                                                <td>
                                                    <span class="font_header_detail_red"><a href="#">ไฟล์เอกสาร</a></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="table-detail-left">6. ผลการตรวจวัดคุณภาพน้ำทิ้ง</td>
                                                <td>
                                                    <span class="font_header_detail_red"><a href="#">ไฟล์เอกสาร</a></span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card p-4">
                        <div class="card-header">
                            <span class="font_header"><b>มลพิษทางอากาศ</b></span>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive div_header p-4">
                                    <div class="card-header">
                                        <span class="font_header_detail"><b>รายละเอียดระบบบําบัดมลพิษทางอากาศ</font></b></span>
                                    </div>
                                    <table id="datatable006" class="table table-bordered">
                                        <thead>
                                            <tr class="success">
                                                <th style="text-align: center; vertical-align: top;" rowspan="2"><span class="font_header_detail">ระบบบำบัดมลพิษทางอากาศ<br />ที่ใช้เป็นระบบ</span></th>
                                                <th style="text-align: center; vertical-align: top;" rowspan="2"><span class="font_header_detail">ชนิดมลสาร</span></th>
                                                <th style="text-align: center; vertical-align: top;" rowspan="2"><span class="font_header_detail">เครื่องจักรหรือแหล่งกำเนิด</span></th>
                                                <th style="text-align: center; vertical-align: top;" rowspan="2"><span class="font_header_detail">บำบัดได้สูงสุด<br />(กรัม / วัน)</span></th>
                                                <th style="text-align: center; vertical-align: top;" colspan="7"><span class="font_header_detail">วิศวกรผู้รับรอง</span></th>
                                            </tr>
                                            <tr class="success">
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail">ชื่อ</span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail">นามสกุล</span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail">สาขาวิศวกรรม</span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail">ประเภท</span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail">เลขที่ใบอนุญาต<br />วิศวกรผู้รับรอง</span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail">วันที่ออกใบอนุญาต</span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail">ใบอนุญาตหมดอายุ</span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    ระบบบำบัดมลพิษอากาศ
                                                    <?php echo $result_data_grid_03['air_pollution_treatment_system_type_view']; ?>
                                                    <input type="hidden" id="air_pollution_treatment_system_type_view" name="air_pollution_treatment_system_type_view[]" value="<?php echo $result_data_grid_03['air_pollution_treatment_system_type_view']; ?>" />
                                                </td>
                                                <td>
                                                    ฝุ่นละออง
                                                    <?php echo $result_data_grid_03['air_pollutant_treatment_type_id_view']; ?>
                                                    <input type="hidden" id="air_pollutant_treatment_type_id_view" name="air_pollutant_treatment_type_id_view[]" value="<?php echo $result_data_grid_03['air_pollutant_treatment_type_id_view']; ?>" />
                                                </td>
                                                <td>
                                                    ESRTQ
                                                    <?php echo $result_data_grid_03['air_pollution_source_id_view']; ?>
                                                    <input type="hidden" id="air_pollution_source_id_view" name="air_pollution_source_id_view[]" value="<?php echo $result_data_grid_03['air_pollution_source_id_view']; ?>" />
                                                </td>
                                                <td>
                                                    100
                                                    <?php echo $result_data_grid_03['air_pollution_treatment_daily_capacity_view']; ?>
                                                    <input type="hidden" id="air_pollution_treatment_daily_capacity_view" name="air_pollution_treatment_daily_capacity_view[]" value="<?php echo $result_data_grid_03['air_pollution_treatment_daily_capacity_view']; ?>" />
                                                </td>
                                                <td>
                                                    ทดสอบ
                                                    <?php echo $result_data_grid_03['air_pollution_manage_engineer_firstname_view']; ?>
                                                    <input type="hidden" id="air_pollution_manage_engineer_firstname_view" name="air_pollution_manage_engineer_firstname_view[]" value="<?php echo $result_data_grid_03['air_pollution_manage_engineer_firstname_view']; ?>" />
                                                </td>
                                                <td>
                                                    ระบบ
                                                    <?php echo $result_data_grid_03['air_pollution_manage_engineer_lastname_view']; ?>
                                                    <input type="hidden" id="air_pollution_manage_engineer_lastname_view" name="air_pollution_manage_engineer_lastname_view[]" value="<?php echo $result_data_grid_03['air_pollution_manage_engineer_lastname_view']; ?>" />
                                                </td>
                                                <td>
                                                    สิ่งแวดล้อม
                                                    <?php echo $result_data_grid_03['air_pollution_manage_engineer_major_id_view']; ?>
                                                    <input type="hidden" id="air_pollution_manage_engineer_major_id_view" name="air_pollution_manage_engineer_major_id_view[]" value="<?php echo $result_data_grid_03['air_pollution_manage_engineer_major_id_view']; ?>" />
                                                </td>
                                                <td>
                                                    สามัญ
                                                    <?php echo $result_data_grid_03['air_pollution_manage_engineer_license_type_id_view']; ?>
                                                    <input type="hidden" id="air_pollution_manage_engineer_license_type_id_view" name="air_pollution_manage_engineer_license_type_id_view[]" value="<?php echo $result_data_grid_03['air_pollution_manage_engineer_license_type_id_view']; ?>" />
                                                </td>
                                                <td>
                                                    999999
                                                    <?php echo $result_data_grid_03['air_pollution_manage_engineer_license_no_view']; ?>
                                                    <input type="hidden" id="air_pollution_manage_engineer_license_no_view" name="air_pollution_manage_engineer_license_no_view[]" value="<?php echo $result_data_grid_03['air_pollution_manage_engineer_license_no_view']; ?>" />
                                                </td>
                                                <td>
                                                    01/11/2568
                                                    <?php echo $result_data_grid_03['air_pollution_manage_engineer_license_issue_date_view']; ?>
                                                    <input type="hidden" id="air_pollution_manage_engineer_license_issue_date_view" name="air_pollution_manage_engineer_license_issue_date_view[]" value="<?php echo $result_data_grid_03['air_pollution_manage_engineer_license_issue_date_view']; ?>" />
                                                </td>
                                                <td>
                                                    30/11/2572
                                                    <?php echo $result_data_grid_03['air_pollution_manage_engineer_license_expire_date_view']; ?>
                                                    <input type="hidden" id="air_pollution_manage_engineer_license_expire_date_view" name="air_pollution_manage_engineer_license_expire_date_view[]" value="<?php echo $result_data_grid_03['air_pollution_manage_engineer_license_expire_date_view']; ?>" />
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="table-responsive div_header p-4">
                                    <div class="card-header">
                                        <span class="font_header_detail"><b>ชนิดของมลสารที่เกิดขึ้น และอัตราการระบายมลสารหหลังจากบําบัด</font></b></span>
                                    </div>
                                    <table id="datatable004" class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail">ชนิดมลสาร</span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail">อัตรการปล่อยมลสาร<br />(กรัม / วินาที)</span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail">ความเข้มข้น</span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail">หน่วย</span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    ฝุ่นละออง
                                                    <?php echo $result_data_grid_02['waste_water_treatment_system_certify_engineer_name_view']; ?>
                                                    <input type="hidden" id="waste_water_treatment_system_certify_engineer_name_view" name="waste_water_treatment_system_certify_engineer_name_view[]" value="<?php echo $result_data_grid_02['waste_water_treatment_system_certify_engineer_name_view']; ?>" />
                                                </td>
                                                <td>
                                                    10
                                                    <?php echo $result_data_grid_02['waste_water_treatment_system_certify_engineer_lastname_view']; ?>
                                                    <input type="hidden" id="waste_water_treatment_system_certify_engineer_lastname_view" name="waste_water_treatment_system_certify_engineer_lastname_view[]" value="<?php echo $result_data_grid_02['waste_water_treatment_system_certify_engineer_lastname_view']; ?>" />
                                                </td>
                                                <td>
                                                    100
                                                    <?php echo $result_data_grid_02['waste_water_treatment_system_certify_engineer_major_id_view']; ?>
                                                    <input type="hidden" id="waste_water_treatment_system_certify_engineer_major_id_view" name="waste_water_treatment_system_certify_engineer_major_id_view[]" value="<?php echo $result_data_grid_02['waste_water_treatment_system_certify_engineer_major_id_view']; ?>" />
                                                </td>
                                                <td>
                                                    ลูกบาศก์เซนติเมตร
                                                    <?php echo $result_data_grid_02['waste_water_treatment_system_certify_engineer_license_type_id_view']; ?>
                                                    <input type="hidden" id="waste_water_treatment_system_certify_engineer_license_type_id_view" name="waste_water_treatment_system_certify_engineer_license_type_id_view[]" value="<?php echo $result_data_grid_02['waste_water_treatment_system_certify_engineer_license_type_id_view']; ?>" />
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="table-responsive div_header p-4">
                                    <div class="card-header">
                                        <span class="font_header_detail"><b>สารอินทรีย์ไอระเหย(VOCs) มาตรฐานค่าเฝ้าระวังสําหรับสารอินทรีย์ระเหยง่ายในบรรยากาศโดยทั่วไปในเวลา 24 ชัวโมง</font></b></span>
                                    </div>
                                    <table id="datatable004" class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail">ชนิดมลสาร</span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail">อัตรการปล่อยมลสาร<br />(กรัม / วินาที)</span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    อะครอลีน
                                                    <?php echo $result_data_grid_02['waste_water_treatment_system_certify_engineer_name_view']; ?>
                                                    <input type="hidden" id="waste_water_treatment_system_certify_engineer_name_view" name="waste_water_treatment_system_certify_engineer_name_view[]" value="<?php echo $result_data_grid_02['waste_water_treatment_system_certify_engineer_name_view']; ?>" />
                                                </td>
                                                <td>
                                                    1
                                                    <?php echo $result_data_grid_02['waste_water_treatment_system_certify_engineer_lastname_view']; ?>
                                                    <input type="hidden" id="waste_water_treatment_system_certify_engineer_lastname_view" name="waste_water_treatment_system_certify_engineer_lastname_view[]" value="<?php echo $result_data_grid_02['waste_water_treatment_system_certify_engineer_lastname_view']; ?>" />
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="table-responsive div_header p-4">
                                    <div class="card-header">
                                        <span class="font_header_detail"><b>มลสารอื่นๆ</font></b></span>
                                    </div>
                                    <table id="datatable004" class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail">มลสารอื่นๆ</span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail">อัตรการปล่อยมลสาร</span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail">หน่วย</span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    -
                                                    <?php echo $result_data_grid_02['waste_water_treatment_system_certify_engineer_name_view']; ?>
                                                    <input type="hidden" id="waste_water_treatment_system_certify_engineer_name_view" name="waste_water_treatment_system_certify_engineer_name_view[]" value="<?php echo $result_data_grid_02['waste_water_treatment_system_certify_engineer_name_view']; ?>" />
                                                </td>
                                                <td>
                                                    -
                                                    <?php echo $result_data_grid_02['waste_water_treatment_system_certify_engineer_lastname_view']; ?>
                                                    <input type="hidden" id="waste_water_treatment_system_certify_engineer_lastname_view" name="waste_water_treatment_system_certify_engineer_lastname_view[]" value="<?php echo $result_data_grid_02['waste_water_treatment_system_certify_engineer_lastname_view']; ?>" />
                                                </td>
                                                <td>
                                                    -
                                                    <?php echo $result_data_grid_02['waste_water_treatment_system_certify_engineer_major_id_view']; ?>
                                                    <input type="hidden" id="waste_water_treatment_system_certify_engineer_major_id_view" name="waste_water_treatment_system_certify_engineer_major_id_view[]" value="<?php echo $result_data_grid_02['waste_water_treatment_system_certify_engineer_major_id_view']; ?>" />
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive div_header p-4">
                                    <div class="card-header">
                                        <span class="font_header_detail"><b>เอกสารการรับรองของผู้ประกอบวิชาชีพวิศวกรรมควบคุมระบบบำบัดอากาศ <font color="red">* เอกสารทุกรายการต้องลงนามรับรองโดยผู้ประกอบวิชาชีพวิศวกรรมควบคุม</font></b></span>
                                    </div>
                                    <table id="datatable_grid14" class="table">
                                        <tbody>
                                            <tr>
                                                <td class="table-detail-left" width="60%">1. หนังสือรับรองของผู้ประกอบวิชาชีพวิศวกรรมควบคุมระบบบำบัดอากาศ</td>
                                                <td width="40%">
                                                    <span class="font_header_detail_red"><a href="#">ไฟล์เอกสาร</a></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="table-detail-left">2. ใบอนุญาตเป็นผู้ประกอบวิชาชีพวิศวกรรมควบคุม</td>
                                                <td>
                                                    <span class="font_header_detail_red"><a href="#">ไฟล์เอกสาร</a></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="table-detail-left">3. แบบแปลนรายละเอียดระบบบำบัดมลพิษทางอากาศ พร้อมรายการคำนวณ</td>
                                                <td>
                                                    <span class="font_header_detail_red"><a href="#">ไฟล์เอกสาร</a></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="table-detail-left">4. เอกสารประกอบอื่นๆ ในการรับรองการควบคุมระบบบำบัดอากาศ</td>
                                                <td>
                                                    <span class="font_header_detail_red"><a href="#">ไฟล์เอกสาร</a></span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card p-4">
                        <div class="card-header">
                            <span class="font_header"><b>ขยะมูลฝอย / กากอุตสาหกรรม</b></span>
                        </div>
                        <div class="table-responsive div_header p-4">
                            <table id="datatable_grid09" class="table">
                                <thead>
                                    <tr>
                                        <th class="table-head-tab" width="40%"><span class="font_header_detail">ต้นกําเนิดขยะ/กาก (Soures)</span></th>
                                        <th class="table-head-tab" width="60%"><span class="font_header_detail">ปริมาณที่เกิดขึ้น (กก./วัน)</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td align="left">ขยะมูลฝอยที่เกิดจากการอุปโภค-บริโภค</td>
                                        <td align="left">
                                            10<?php echo $datashow_master['consumer_waste_daily_amount']; ?>
                                            <input type="hidden" id="consumer_waste_daily_amount_view" name="consumer_waste_daily_amount_view" value="<?php echo $datashow_master['consumer_waste_daily_amount']; ?>" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="left">กากอุตสาหกรรมที่เกิดจากกระบวนการผลิต</td>
                                        <td align="left">
                                            10<?php echo $datashow_master['production_waste_daily_amount']; ?>
                                            <input type="hidden" id="production_waste_daily_amount_view" name="production_waste_daily_amount_view" value="<?php echo $datashow_master['production_waste_daily_amount']; ?>" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="left">กากอุตสาหกรรมที่เกิดจากกิจกรรมสนับสนุนการผลิต</td>
                                        <td align="left">
                                            10<?php echo $datashow_master['production_support_waste_daily_amount']; ?>
                                            <input type="hidden" id="production_support_waste_daily_amount_view" name="production_support_waste_daily_amount_view" value="<?php echo $datashow_master['production_support_waste_daily_amount']; ?>" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="left">รวมเป็น</td>
                                        <td align="left">
                                            3<?php echo $datashow_master['production_support_waste_daily_amount'] + $datashow_master['production_waste_daily_amount'] + $datashow_master['consumer_waste_daily_amount']; ?>
                                            <input name="d002" id="d002" type="hidden" value="<?php echo $datashow_master['production_support_waste_daily_amount'] + $datashow_master['production_waste_daily_amount'] + $datashow_master['consumer_waste_daily_amount']; ?>" />
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive div_header p-4">
                                    <div class="card-header">
                                        <span class="font_header_detail"><b>ชนิดและปริมาณการจัดการกากอุตสาหกรรมตามประกาศกระทรวงอุตสาหกรรม เรื่องการกําจัดสิ่งปฏิกูลหรือวัสดุที่ไม่ใช้แล้ว</b></span>
                                    </div>
                                    <table id="datatable_grid09" class="table">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail">กากอุตสาหกรรมรหัส 6 ตัว</span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail">ประเภท</span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail">ชื่อกากอุตสาหกรรม</span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail">ลักษณะ</span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail">ปริมาณที่เกิด (กก./วัน)</span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail">ผู้กำจัด</span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail">วิธีการกำจัด</span></th>
                                                <th style="text-align: center; vertical-align: top;"><span class="font_header_detail">ความถี่ในการขนส่งหรือกำจัด(ครั้ง/เดือน)</span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td colspan="8" align="center">
                                                    <span class="font_header_detail_red"><b> -- ไม่มีข้อมูล --</b></span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive div_header p-4">
                                    <div class="card-header">
                                        <span class="font_header_detail"><b>เอกสารเกี่ยวกับขยะมูลฝอย/กากอุตสาหกรรม</b></span>
                                    </div>
                                    <table id="datatable_grid14" class="table">
                                        <tbody>
                                            <tr>
                                                <td class="table-detail-left" width="60%">เอกสารชนิดและปริมาณการจัดการกากอุตสาหกรรมตามประกาศกระทรวงอุตสาหกรรม เรื่องการกําจัดสิ่งปฏิกูลหรือวัสดุที่ไม่ใช้แล้ว</td>
                                                <td width="40%">
                                                    <span class="font_header_detail_red"><a href="#">ไฟล์เอกสาร</a></span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="tab8">
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
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">อัพโหลดไฟล์ข้อมูล</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left radio-header">2. หนังสือมอบอำนาจ ปิดอากรแสตมป์</td>
                                        <td>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">อัพโหลดไฟล์ข้อมูล</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" style="padding-left:50px;">ประกอบด้วย</td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left radio-lists" style="padding-left:70px;">2.1 สำเนาบัตรประจำตัวประชาชน หรือ สำเนาหนังสือเดินทาง ผู้มอบอำนาจ</td>
                                        <td>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">อัพโหลดไฟล์ข้อมูล</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left radio-lists" style="padding-left:70px;">2.2 สำเนาทะเบียนบ้าน ผู้มอบอำนาจ</td>
                                        <td>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">อัพโหลดไฟล์ข้อมูล</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left radio-lists" style="padding-left:70px;">2.3 สำเนาบัตรประจำตัวประชาชน หรือ สำเนาหนังสือเดินทาง (Passport) ผู้รับมอบอำนาจ</td>
                                        <td>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">อัพโหลดไฟล์ข้อมูล</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left radio-lists" style="padding-left:70px;">2.4 สำเนาทะเบียนบ้าน ผู้รับมอบอำนาจ</td>
                                        <td>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">อัพโหลดไฟล์ข้อมูล</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left radio-header">3. แผนผังแปลงที่ดิน/ผังแม่บท</td>
                                        <td>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">อัพโหลดไฟล์ข้อมูล</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left radio-header">4. โฉนดที่ดิน</td>
                                        <td>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">อัพโหลดไฟล์ข้อมูล</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left radio-header">5. สำเนาหนังสืออนุญาตใช้ที่ดินพร้อมเงื่อนไขแนบท้าย</td>
                                        <td>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">อัพโหลดไฟล์ข้อมูล</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left radio-header">6. เอกสารอื่นๆที่เกี่ยวข้อง</td>
                                        <td>
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
<?= $this->endSection(); ?>