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
    <a href="ieat_ent_05_007" style="color: #6007b3ff; font-size: 18px;"><b>คำขออนุญาตถือกรรมสิทธิ์ที่ดินในนิคมอุตสาหกรรม ของนิติบุคคลไทย/บุคคลธรรมดา (15.2 ส)</b></a>
    <b>&nbsp;&nbsp;/&nbsp;&nbsp;</b>
    <a style="color: #000000ff; font-size: 18px;"><b>01-02-53-000001/2568</b></a>
</div>
<br />
<div class="class_header_page_02">
    <font style="color: #000000ff; font-size: 25px;"><b>คำขอ 01-02-53-000001/2568</b></font>
    &nbsp;&nbsp;
    <font style="color: #000000ff; font-size: 18px;"><b>คำขออนุญาตถือกรรมสิทธิ์ที่ดินในนิคมอุตสาหกรรม ของนิติบุคคลไทย/บุคคลธรรมดา (15.2 ส)</b></font>
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
                            <span class="font_header"><b>ประวัติการถือกรรมสิทธิ์ที่ดิน</b></span>
                        </div>
                        <div class="table-responsive div_header p-4">
                            <table class="table" id="datatable01">
                                <thead>
                                    <tr style="text-align:center;">
                                        <th rowspan="2" style="vertical-align:middle;"><span class="font_header_detail">ลำดับ</th>
                                        <th rowspan="2" style="vertical-align:middle;"><span class="font_header_detail">สัดส่วนของแปลงที่ดิน</th>
                                        <th rowspan="2" style="vertical-align:middle; width:15%;"><span class="font_header_detail">เลขที่แปลง</th>
                                        <th rowspan="2" style="vertical-align:middle; width:15%;"><span class="font_header_detail">เลขที่โฉนดที่ดิน</th>
                                        <th rowspan="2" style="vertical-align:middle; width:15%;"><span class="font_header_detail">เลขที่หนังสืออนุญาต</th>
                                        <th rowspan="2" style="vertical-align:middle; width:5%;"><span class="font_header_detail">ลงวันที่</th>
                                        <th colspan="3" style="vertical-align:middle;"><span class="font_header_detail">เนื้อที่ตามโฉนดที่ดิน</th>
                                    </tr>
                                    <tr style="text-align:center;">
                                        <th align="center"><span class="font_header_detail">ไร่</span></th>
                                        <th align="center"><span class="font_header_detail">งาน</span></th>
                                        <th align="center"><span class="font_header_detail">ตารางวา</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr style="text-align:center;">
                                        <td>1</td>
                                        <td>ทั้งหมด</td>
                                        <td>A-001</td>
                                        <td>Land001</td>
                                        <td>0001</td>
                                        <td>01/01/2025</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                    </tr>
                                    <tr style="text-align:center;">
                                        <td>1</td>
                                        <td>ทั้งหมด</td>
                                        <td>A-002</td>
                                        <td>Land002</td>
                                        <td>0001</td>
                                        <td>01/01/2025</td>
                                        <td>2</td>
                                        <td>1</td>
                                        <td>3</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card p-4">
                        <div class="card p-4">
                            <div class="row">
                                <div class="col-6" align="left">
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
                    <div class="card p-4">
                        <div class="card-header">
                            <span class="font_header"><b>ผู้ประกอบการ</b></span>
                        </div>
                        <div class="table-responsive div_header px-4 pb-4">
                            <br>
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td>ผู้ประกอบการ มีความประสงค์จะขอรับหนังสือ</td>
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
                                                    <input type="text" class="form-control" name="share_value" value="">
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
                                                    <input type="text" class="form-control" name="thai_holder" value="">
                                                </div>
                                                <div class="col-md-1 col-sm-2 align-self-end mb-2">
                                                    คน
                                                </div>
                                                <div class="col-md-3 col-sm-4">
                                                    <label>คนต่างด้าว</label>
                                                    <input type="text" class="form-control" name="foreigner_holder" value="">
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
                                                    <input type="text" class="form-control" name="thai_share_amount" value="">
                                                </div>
                                                <div class="col-md-1 col-sm-2 align-self-end mb-2">
                                                    หุ้น
                                                </div>
                                                <div class="col-md-3 col-sm-4">
                                                    <label>คิดเป็นเงินลงทุนคนไทย</label>
                                                    <input type="text" class="form-control" name="thai_share_value" value="">
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
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-3 col-sm-4 mb-2">
                                    <button type="button" class="btn btn-success btn-block">
                                        เพิ่มข้อมูลผู้ถือหุ้นต่างด้าว
                                    </button>
                                </div>
                                <div class="col-md-3 col-sm-4 mb-2">
                                    <button type="button" class="btn btn-danger btn-block">
                                        ลบข้อมูลผู้ถือหุ้นต่างด้าว
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive div_header p-4">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width:15%; text-align:center;">เลือก</th>
                                        <th style="width:45%; text-align:center;">
                                            สัญชาติ
                                            <div style="font-size:12px; color:#ff0000ff; margin-top:3px;">
                                                หากไม่พบข้อมูลสัญชาติที่ต้องการ กรุณาแจ้ง update ข้อมูลมาได้ที่ ieat_support@ieat.mail.go.th เพื่อการเพิ่มสัญชาติ
                                            </div>
                                        </th>
                                        <th style="width:20%; text-align:center;">จำนวนหุ้น</th>
                                        <th style="width:20%; text-align:center;">หมายเหตุ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center align-middle">
                                            <input type="checkbox" name="select_foreign_holder[]">
                                        </td>
                                        <td>
                                            <select class="form-control" name="foreign_nationality[]">
                                                <option value="">-- เลือก --</option>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control text-right" name="foreign_share_amount[]">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control text-right" name="foreign_share_capital[]">
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
                                    <input type="text" class="form-control text-right" name="total_foreign_share_amount">
                                </div>
                                <div class="col-md-1 col-sm-2 align-self-center mb-2">
                                    หุ้น
                                </div>
                                <div class="col-md-3 col-sm-4 align-self-center">
                                    คิดเป็นเงินลงทุนต่างด้าว
                                </div>
                                <div class="col-md-2 col-sm-3 mb-2">
                                    <input type="text" class="form-control text-right" name="total_foreign_invest_value">
                                </div>
                                <div class="col-md-1 col-sm-2 align-self-center">
                                    บาท
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card p-4">
                        <div class="card-header">
                            <span class="font_header"><b>มีความประสงค์จะขออนุญาตถือกรรมสิทธิ์ที่ดิน ดังนี้</b></span>
                        </div>
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-3 col-sm-4 mb-2">
                                    <button type="button" class="btn btn-success btn-block">
                                        เพิ่มข้อมูล
                                    </button>
                                </div>
                                <div class="col-md-3 col-sm-4 mb-2">
                                    <button type="button" class="btn btn-danger btn-block">
                                        ลบข้อมูล
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="div_header p-4">
                            <div class="table-responsive" style="overflow-x:auto;">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width:8%; text-align:center;">เลือก</th>
                                            <th style="width:10%; text-align:center;">
                                                สัดส่วนของ<br>แปลงที่ดิน
                                            </th>
                                            <th style="width:10%; text-align:center;">
                                                เลขที่แปลง<br>(Land No.)
                                            </th>
                                            <th style="width:10%; text-align:center;">
                                                สัดส่วนของ<br>โฉนดที่ดิน
                                            </th>
                                            <th style="width:10%; text-align:center;">โฉนดที่ดินเลขที่</th>
                                            <th style="width:20%; text-align:center;">โฉนดที่ดินจังหวัด</th>
                                            <th style="width:8%; text-align:center;">
                                                ไร่<br>(Rai)
                                            </th>
                                            <th style="width:8%; text-align:center;">
                                                งาน<br>(Ngan)
                                            </th>
                                            <th style="width:8%; text-align:center;">
                                                ตร.ว.<br>(Square wah)
                                            </th>
                                            <th style="width:8%; text-align:center;">
                                                ตร.ม.<br>(Square meter)
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center align-middle">
                                                <input type="checkbox" name="select_foreign_holder[]">
                                            </td>
                                            <td>
                                                <select class="form-control" name="foreign_nationality[]">
                                                    <option value="">-- เลือก --</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-right" name="foreign_share_amount[]">
                                            </td>
                                            <td>
                                                <select class="form-control" name="foreign_nationality[]">
                                                    <option value="">-- เลือก --</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-right" name="foreign_share_capital[]">
                                            </td>
                                            <td>
                                                <select class="form-control" name="foreign_nationality[]">
                                                    <option value="">-- เลือก --</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-right" name="foreign_share_capital[]">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-right" name="foreign_share_capital[]">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-right" name="foreign_share_capital[]">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-right" name="foreign_share_capital[]">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <hr style="border-top: 1px solid #b39ddb;">
                            <div class="row mt-2">
                                <div class="col-md-2 col-sm-4 align-self-center">
                                    รวมพื้นที่ ไร่ งาน วา
                                </div>
                                <div class="col-md-1 col-sm-2 mb-2">
                                    <input type="text" class="form-control text-right" name="total_area_rai" value="0">
                                </div>
                                <div class="col-md-1 col-sm-2 align-self-center mb-2">
                                    ไร่
                                </div>
                                <div class="col-md-1 col-sm-2 mb-2">
                                    <input type="text" class="form-control text-right" name="total_area_ngan" value="0">
                                </div>
                                <div class="col-md-1 col-sm-2 align-self-center mb-2">
                                    งาน
                                </div>
                                <div class="col-md-1 col-sm-2 mb-2">
                                    <input type="text" class="form-control text-right" name="total_area_wah" value="0.0">
                                </div>
                                <div class="col-md-1 col-sm-2 align-self-center mb-2">
                                    วา
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-2 col-sm-3 align-self-center">
                                    รวมพื้นที่ ตารางเมตร
                                </div>
                                <div class="col-md-1 col-sm-2 mb-2">
                                    <input type="text" class="form-control text-right" name="total_area_meter" value="0">
                                </div>
                                <div class="col-md-1 col-sm-2 align-self-center mb-2">
                                    ตารางเมตร
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card p-4">
                        <div class="card-header">
                            <span class="font_header"><b>ขอใช้ที่ดิน</b></span>
                        </div>
                        <div class="table-responsive div_header px-4 pb-4">
                            <br>
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td class="align-middle" style="width:30%;">
                                            เป็นการขอใช้ที่ดิน
                                        </td>
                                        <td style="width:70%;">
                                            <select class="form-control" name="request_type">
                                                <option value="">---โปรดเลือก---</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">
                                            - รับโอนสิทธิการใช้ที่ดินและกรรมสิทธิ์ที่ดิน จากผู้ประกอบการในนิคม (ข้อมูล "ชื่อบริษัทผู้โอน")
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="transfer_company">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td class="align-middle" style="width:30%;">
                                            ซื้อที่ดินจาก
                                        </td>
                                        <td style="width:70%;">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">
                                            - ผู้พัฒนาที่ดิน
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="transfer_company">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">
                                            - สถาบันการเงิน (ระบุชื่อสะถาบันการเงิน)
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="transfer_company">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">
                                            - การขายทอดตลาดตามคำสั่งศาล
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="transfer_company">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">
                                            - อื่นๆ
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="transfer_company">
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
                            <span class="font_header"><b>แนบเอกสารที่เกี่ยวข้อง</b></span>
                        </div>
                        <div class="table-responsive div_header p-4">
                            <div class="card-header">
                                <span class="font_header_detail"><b>รายการแนบเอกสารประกอบคำขอฯ ที่ต้องส่งให้เจ้าหน้าที่พิจารณา <font color="red">* เอกสารทั้งหมดต้องลงนาม พร้อมรับรองสําเนาถูกต้อง โดยผู้มีอํานาจลงนาม</font></b></span>
                            </div>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="table-detail-left radio-header" width="70%">1. สำเนาหนังสือรับรองการจดทะเบียนเป็นนิติบุคคล (ไม่เกิน 6 เดือน)</td>
                                        <td width="30%">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">อัพโหลดไฟล์ข้อมูล</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left radio-header">2. สำเนาบัญชีรายชื่อผู้ถือหุ้น (ไม่เกิน 6 เดือน)</td>
                                        <td>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">อัพโหลดไฟล์ข้อมูล</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left radio-header">3. สำเนาใบอนุญาตให้ใช้ที่ดิน</td>
                                        <td>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">อัพโหลดไฟล์ข้อมูล</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left radio-header" width="70%">4. สำเนาโฉนดที่ดิน</td>
                                        <td width="30%">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">อัพโหลดไฟล์ข้อมูล</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left radio-header">5. ผังแม่บท (ถ้ามี)</td>
                                        <td>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">อัพโหลดไฟล์ข้อมูล</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left radio-header">6. ผังจัดสรร (ถ้ามี)</td>
                                        <td>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">อัพโหลดไฟล์ข้อมูล</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left radio-header">7. หนังสือมอบอำนาจ พร้อมติดอากรตามกฎหมาย</td>
                                        <td>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">อัพโหลดไฟล์ข้อมูล</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left radio-header" width="70%">8. เอกสารอื่น</td>
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