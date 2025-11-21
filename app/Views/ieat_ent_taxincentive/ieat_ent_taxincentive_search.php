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
    <a href="center_ieat_ent" style="color: #6007b3ff; font-size: 18px;"><b>คำขอ TAX</b></a>
    <b>&nbsp;&nbsp;/&nbsp;&nbsp;</b>
    <a href="ieat_ent_taxincentive" style="color: #6007b3ff; font-size: 18px;"><b>คำขอรับรองการเป็นผู้ประกอบการในเขตประกอบการเสรี และขอเลขทะเบียนสิทธิประโยชน์ทางด้านภาษีอากร (TAX Incentive)</b></a>
    <b>&nbsp;&nbsp;/&nbsp;&nbsp;</b>
    <a style="color: #000000ff; font-size: 18px;"><b>1-01-1-306-00001-2568</b></a>
</div>
<br />
<div class="class_header_page_02">
    <font style="color: #000000ff; font-size: 25px;"><b>คำขอ 1-01-1-306-00001-2568</b></font>
    &nbsp;&nbsp;
    <font style="color: #000000ff; font-size: 18px;"><b>คำขอรับรองการเป็นผู้ประกอบการในเขตประกอบการเสรี และขอเลขทะเบียนสิทธิประโยชน์ทางด้านภาษีอากร (TAX Incentive)</b></font>
</div>
<br /><br />
<div class="col-md-12">
    <div class="card">
        <div class="card-header p-4" style="text-align: center;">
            <ul class="nav nav-pills">
                <li class="nav-item"><a class="nav-link active" href="#tab1" data-toggle="tab"><span class="font_header_detail"><b>ข้อมูลทั่วไป</b></span></a></li>
                <li class="nav-item"><a class="nav-link" href="#tab2" data-toggle="tab"><span class="font_header_detail"><b>ข้อมูลเกี่ยวกับการขออนุญาต</b></span></a></li>
                <li class="nav-item"><a class="nav-link" href="#tab3" data-toggle="tab"><span class="font_header_detail"><b>ที่อยู่สถานประกอบการ ภ.พ.20</b></span></a></li>
                <li class="nav-item"><a class="nav-link" href="#tab4" data-toggle="tab"><span class="font_header_detail"><b>เอกสารแนบ</b></span></a></li>
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

                <div class="tab-pane" id="tab2">
                    <div class="card p-4">
                        <div class="card-header">
                            <span class="font_header"><b>ข้อมูลเกี่ยวกับการขออนุญาต</b></span>
                        </div>
                        <div class="table-responsive div_header p-4">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>เลือกรายการประเภทผู้ประกอบการ<td>
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
                                    </tr>
                                    <tr>
                                        <td>วัตถุประสงค์ในการขอเลข TAX Incentive<td>
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
                                    </tr>
                                    <tr>
                                        <td>ข้อมูลเพิ่มเติมอื่นๆ (ถ้ามี)</td>
                                        <td>
                                            <textarea rows="6" cols="50" name="other_detail" class="textarea-box"><?php echo $datashow['other_detail']; ?></textarea>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="tab3">
                    <div class="card p-4">

                        <div class="card-header">
                            <span class="font_header">
                                <b>ที่อยู่สถานประกอบการ ภ.พ.20</b>
                            </span>
                        </div>

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
                    </div>
                </div>

                <div class="tab-pane" id="tab4">
                    <div class="card p-4">
                        <div class="card-header">
                            <span class="font_header"><b>อ้างถึงเอกสารใบอนุญาตล่าสุด เลขที่ TEST015 ลงวันที่ 31-01-2554 หมดอายุวันที่ 31-12-2558</b></span>
                        </div>
                        <div class="table-responsive div_header p-4">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="table-detail-left radio-header" width="40%">
                                            หนังสือรับรองการจดทะเบียนจัดตั้งนิติบุคคลและวัตถุประสงค์การจัดตั้ง (ไม่เกิน 6 เดือน นับตั้งแต่วันที่ออกหนังสือ)
                                        </td>
                                        <td width="30%">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">อัพโหลดไฟล์ข้อมูล</label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td class="table-detail-left radio-header" width="40%">
                                            เอกสารลงทะเบียนเป็นผู้นำเข้า - ส่งออกกับกรมศุลกากร (Customs Registration)
                                        </td>
                                        <td width="30%">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">อัพโหลดไฟล์ข้อมูล</label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td class="table-detail-left radio-header" width="40%">
                                            ใบทะเบียนภาษีมูลค่าเพิ่ม (ภพ 20)
                                        </td>
                                        <td width="30%">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">อัพโหลดไฟล์ข้อมูล</label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td class="table-detail-left radio-header" width="40%">
                                            เอกสารอื่นๆที่เกี่ยวข้อง
                                        </td>
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