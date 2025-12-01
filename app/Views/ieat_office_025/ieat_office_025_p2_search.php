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

    <div class="row row-form">
        <div class="col-lg-4">
            <font style="color: #000000ff; font-size: 25px;"><b>คำขอ 1-01-1-401-00001-2568</b></font>
            &nbsp;&nbsp;
            <font style="color: #000000ff; font-size: 18px;"><b>ขุดดิน ถมดิน</b></font>
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
                                <font color='red'>*</font>ร่างเอกสาร<font color='red'>*</font>
                            </b></span></a></li>
            </ul>
        </div><!-- /.card-header -->

        <div class="card-body">
            <div class="tab-content">
                <div class="tab-pane" id="tab9">
                    <div class="row row-form">
                        <div class="col-lg-1">
                            &nbsp;
                        </div>
                        <div class="col-lg-10">
                            <div class="table-responsive div_header p-4">
                                <table width="100%" border="0" align="center" cellpadding="6" cellspacing="0">
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td align="center">
                                            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                                                <tr>
                                                    <td width="30%" align="center">&nbsp;</td>
                                                    <td width="40%" align="center"><img src='https://epp-ieat.ieat.go.th/new_epp_ieat/assets/logo_new.png' border='0' /></td>
                                                    <td width="30%" align="right" valign='top'>แบบ กนอ. 04/2</td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td align="center"><b>ใบรับแจ้งการขุดดินหรือถมดิน</b></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                                                <tr>
                                                    <td width="4%" align="left" valign="top"><span class="head_detail">ที่</span></td>
                                                    <td width="18%" align="left" valign="top"><span class="head_detail">&nbsp;xxxx/2568 <input type="hidden" name="d006" id="d006" value="2-31-1-401-00003-2564">
                                                            <input type="hidden" name="doc_run_number" id="doc_run_number" value="0009/2568">
                                                        </span></td>
                                                    <td width="78%" align="right" valign="top"><span class="head_detail">การนิคมอุตสาหกรรมแห่งประเทศไทย</span></td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td align="center">
                                            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                                                <tr>
                                                    <td width="25%" align="right" valign="top">ได้รับแจ้งจาก</td>
                                                    <td align="center" valign="top">
                                                        <font style='font-size:18px;'><b>บริษัท สมมุติ31 จำกัด</b></font>
                                                    </td>
                                                    <td width="40%" align="left" valign="top">เจ้าของที่ดิน ผู้ครอบครองที่ดิน หรือ ตัวแทนเจ้าของที่ดิน</td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="left">
                                            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                                                <tr>
                                                    <td width='35%' align='left'>
                                                        อยู่บ้านเลขที่&nbsp;123
                                                    </td>
                                                    <td width='35%' align='left'>
                                                        หมู่ที่&nbsp;
                                                    </td>
                                                    <td width='30%' align='left'>
                                                        อาคาร&nbsp;
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table width='100%' border='0' cellspacing='0' cellpadding='3' align='center'>
                                                <tr>
                                                    <td width='35%' align='left'>
                                                        ตรอก/ซอย&nbsp;
                                                    </td>
                                                    <td width='35%' align='left'>
                                                        ถนน&nbsp;ทางหลวงแผ่นดินหมายเลข 4157 ตำบล
                                                    </td>
                                                    <td width='30%' align='left'>
                                                        ตำบล/แขวง&nbsp;บ้านน้ำบ่อ
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table width='100%' border='0' cellspacing='0' cellpadding='3' align='center'>
                                                <tr>
                                                    <td width='35%' align='left'>
                                                        อำเภอ/เขต&nbsp;ปะนาเระ
                                                    </td>
                                                    <td width='35%' align='left'>
                                                        จังหวัด&nbsp;ปัตตานี
                                                    </td>
                                                    <td width='30%' align='left'>
                                                        ดังข้อความต่อไปนี้
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table width="100%" border="0" align="right" cellpadding="0" cellspacing="0">
                                                <tr>
                                                    <td width='20%' align='center'>
                                                        ข้อที่ 1
                                                    </td>
                                                    <td width="40%" align="left" valign="top">ทำการ&nbsp;&nbsp;&nbsp;<input size="10" type="text" name="ac_001" value="ขุดดินและถมดิน" /></td>
                                                    <td width="40%" align="left" valign="top">ในเขต&nbsp;&nbsp;&nbsp;อุตสาหกรรมทั่วไป</td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                                                <tr>
                                                    <td width='50%' valign="top" align="left">นิคมอุตสาหกรรม&nbsp;&nbsp;&nbsp;อาหารฮาลาล จังหวัดปัตตานี</td>
                                                    <td width='50%' valign="top" align="left">แปลงที่ดินเลขที่&nbsp;&nbsp;&nbsp;TEST001 , TEST001</td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="left">
                                            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                                                <tr>
                                                    <td width="25%" align="left" valign="top">ตั้งอยู่เลขที่&nbsp;&nbsp;&nbsp;-</td>
                                                    <td width="30%" align="left" valign="top">หมู่ที่&nbsp;&nbsp;&nbsp;-</td>
                                                    <td width="20%" align="left" valign="top">ตรอก/ซอย&nbsp;&nbsp;&nbsp;-</td>
                                                    <td width="25%" align="left" valign="top">ถนน&nbsp;&nbsp;&nbsp;-</td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                                                <tr>
                                                    <td width="25%" align="left" valign="top">ตำบล/แขวง&nbsp;&nbsp;&nbsp;ดินแดง </td>
                                                    <td width="25%" align="left" valign="top">อำเภอ/เขต&nbsp;&nbsp;&nbsp;ดินแดง </td>
                                                    <td width="25%" align="left" valign="top">จังหวัด&nbsp;&nbsp;&nbsp;กรุงเทพมหานคร </td>
                                                    <td width="25%" align="left" valign="top">&nbsp;</td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                                                <tr>
                                                    <td width='50%' valign="top" align="left">ในที่ดินโฉนดที่ดินเลขที่&nbsp;&nbsp;&nbsp;<input size="40" type="text" name="title_deed" value="333" /></td>
                                                    <td width='50%' valign="top" align="left">เป็นที่ดินของ&nbsp;&nbsp;&nbsp;<input size="40" type="text" name="owner_land" value="333" /></td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table width="100%" border="0" align="right" cellpadding="0" cellspacing="0">
                                                <tr>
                                                    <td width="10%" align="left" valign="top">&nbsp;</td>
                                                    <td width="10%" align="left" valign="top">ข้อที่ 2</td>
                                                    <td width="80%" align="left" valign="top">
                                                        ทำการ <input size="10" type="text" name="ac_010" value="ขุดดินและถมดิน" />
                                                        โดยมีความกว้าง <input size="10" type="text" name="ac_011" value="50" /> เมตร
                                                        ความยาว <input size="10" type="text" name="ac_012" value="50" /> เมตร
                                                        <br /><br />
                                                        ความลึก/ความสูง จากระดับดินเดิม <input size="10" type="text" name="ac_013" value="15" /> เมตร
                                                        พื้นที่ <input size="10" type="text" name="ac_014" value="2500" /> ตารางเมตร
                                                        <br /><br />
                                                        เพื่อใช้เป็น <input size="100" type="text" name="ac_015" value="บ่อน้ำและใช้งานอื่นๆ" />
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="left">
                                            <table width="90%" border="0" align="right" cellpadding="0" cellspacing="0">
                                                <tr>
                                                    <td width="10%" align="left" valign="top">
                                                        ตามแผนผังบริเวณ แบบแปลน รายการประกอบแบบแปลน และรายการคำนวณที่แนบมาพร้อมนี้
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table width="90%" border="0" align="right" cellpadding="0" cellspacing="0">
                                                <tr>
                                                    <td width="10%" align="left" valign="top">ข้อที่ 3</td>
                                                    <td width="10%" align="right" valign="top">โดยมี</td>
                                                    <td width="65%" align="center" valign="top">
                                                        <font style='font-size:18px;'>
                                                            <b>
                                                                ร้อยตำรวจโท&nbsp;&nbsp;ผู้ทดสอบ&nbsp;ส่วนทดลองการเข้าใช้งาน&nbsp;&nbsp;วย.18745<br /> </b>
                                                        </font>
                                                    </td>
                                                    <td width="15%" align="left" valign="top">เป็นผู้ควบคุมงาน</td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table width="90%" border="0" align="right" cellpadding="0" cellspacing="0">
                                                <tr>
                                                    <td width="10%" align="left" valign="top">ข้อที่ 4</td>
                                                    <td width="90%" align="left" valign="top">
                                                        กำหนดแล้วเสร็จภายใน <input size="10" type="text" name="ac_016" value="30" /> วัน
                                                        <br /><br />
                                                        โดยจะเริ่มขุดดิน/ถมดิน วันที่ <input type="text" size="10" id="datepicker-th-1" name="ac_017" value="05/08/2564" readonly="readonly" />
                                                        <br /><br />
                                                        และจะแล้วเสร็จวันที่ <input type="text" size="10" id="datepicker-th-2" name="ac_018" value="04/09/2564" readonly="readonly" />
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table width="90%" border="0" align="right" cellpadding="0" cellspacing="0">
                                                <tr>
                                                    <td width="10%" align="left" valign="top">ข้อ 5</td>
                                                    <td width="90%" align="left" valign="top">
                                                        ผู้แจ้งต้องปฏิบัติตามหลักเกณฑ์ วิธีการและเงื่อนไขตามที่กำหนดในกฎกระทรวงและหรือ
                                                        หลักเกณฑ์การนิคมอุตสาหกรรมแห่งประเทศไทย ซึ่งออกตามความในมาตรา 6 มาตรา 7 หรือมาตรา 8 แห่ง
                                                        พระราชบัญญัติการขุดดินและถมดิน พ.ศ. 2543 และกฎหมายอื่นที่เกี่ยวข้อง
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align='left'>
                                            <br />
                                            <table width='100%' border='0' cellspacing='0' cellpadding='5' align='center'>
                                                <tr>
                                                    <td align='left' width='30%'>
                                                        <img src='https://epp-ieat.ieat.go.th/new_epp_ieat/assets/pic_qrcode/test.png' border='0' width='100' height='100' />
                                                        <br />
                                                        2-01-1-401-00001-2568
                                                    </td>
                                                    <td align='center' valign='bottom'>

                                                        (ลายมือชื่อ)...............................................................................ผู้อนุญาต
                                                        <br /><br />
                                                        (......................................)
                                                        <br />
                                                        ......................................... ปฏิบัติงานแทน
                                                        <br />
                                                        ผู้ว่าการการนิคมอุตสาหกรรมแห่งประเทศไทย

                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="col-lg-1">
                            &nbsp;
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
                                                <td class="table-detail-left col-lg-4"><span class="font_header_detail"><input class="form-control"></span></td>
                                                <td class="table-detail-left col-lg-2"><span class="font_header_detail">บาท</span></td>
                                            </tr>
                                            <tr>
                                                <td class="table-detail-left col-lg-6"><span class="font_header_detail">ค่าบริการใช้ระบบ</span> <span class="font_header_detail_red">** ไม่รวม VAT **</span></td>
                                                <td class="table-detail-left col-lg-4"><span class="font_header_detail"><input class="form-control"></span></td>
                                                <td class="table-detail-left col-lg-2"><span class="font_header_detail">บาท</span></td>
                                            </tr>
                                            <tr>
                                                <td class="table-detail-left col-lg-6"><span class="font_header_detail">รวม</span> <span class="font_header_detail_red">** ไม่รวม VAT **</span></td>
                                                <td class="table-detail-left col-lg-4"><span class="font_header_detail">-</span></td>
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
                                                <td class="table-detail-left col-lg-6">
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
                                    <input class='btn btn-primary btn-lg btn-block' name="Submit_approve" type="button" id="Submit" value="พิจารณาอนุมัติอนุญาต" onclick="window.location='ieat_office_013_4/otp'" />
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
                        <div class="card-header">
                            <span class="font_header"><b>ข้อมูลการขออนุญาต</b></span>
                        </div>
                        <div class="table-responsive div_header p-4">
                            <table width="100%" border="0" class="table">
                                <tr>
                                    <td align="left"><span class="font_header_detail">ขออนุญาต</span></td>
                                    <td align="left"><span class="head_detail">ถมดิน</span></td>
                                </tr>
                                <tr>
                                    <td align="left"><span class="font_header_detail">รายละเอียด</span></td>
                                    <td align="left"><span class="head_detail">ความกว้าง 76 เมตร ความยาว 172.80 เมตร</span></td>
                                </tr>
                                <tr>
                                    <td align="left">&nbsp;</td>
                                    <td align="left"><span class="head_detail">ความลึก/ความสูง จากระดับดินเดิม 1.05 เมตร พื้นที่ 10,017 ตารางเมตร</span></td>
                                </tr>
                                <tr>
                                    <td align="left">&nbsp;</td>
                                    <td align="left"><span class="head_detail">เพื่อใช้เป็น อาคารคลังสินค้า</span></td>
                                </tr>
                                <tr>
                                    <td align="left">&nbsp;</td>
                                    <td align="left"><span class="head_detail">กำหนดแล้วเสร็จภายใน 31 กรกฎาคม 2569 วัน โดยจะเริ่มขุดดิน/ถมดินวันที่ 07/11/2568 และจะแล้วเสร็จวันที่ 15/12/2568</span></td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="card p-4">
                        <div class="card-header">
                            <span class="font_header"><b>ผู้ออกแบบ</b></span>
                        </div>
                        <div class="table-responsive div_header p-4">
                            <table width="100%" border="0" class="table">
                                <tr>
                                    <td align="center" valign="middle"><span class="font_header_detail">ลำดับ</span></td>
                                    <td align="center" valign="middle"><span class="font_header_detail">คำนำหน้าชื่อ<br />(Title)</span></td>
                                    <td align="center" valign="middle"><span class="font_header_detail">ชื่อ<br />(First Name)</span></td>
                                    <td align="center" valign="middle"><span class="font_header_detail">นามสกุล<br />(Last Name)</span></td>
                                    <td align="center" valign="middle"><span class="font_header_detail">ความรับผิดชอบ</span></td>
                                    <td align="center" valign="middle"><span class="font_header_detail">ประเภท<br />(Category)</span></td>
                                    <td align="center" valign="middle"><span class="font_header_detail">สาขา<br />(Major)</span></td>
                                    <td align="center" valign="middle"><span class="font_header_detail">เลขที่ใบ<br />ประกอบวิชาชีพ<br />(License ID.)</span></td>
                                    <td align="center" valign="middle"><span class="font_header_detail">วันที่ใบอนุญาตหมดอายุ<br />(Issue ID.)</span></td>
                                    <td align="center" valign="middle"><span class="font_header_detail">ประเภทใบทะเบียน<br />(License Type)</span></td>
                                </tr>
                                <tr>
                                    <td align="center"><span class="detail">1</span></td>
                                    <td align="center"><span class="detail">นาย</span></td>
                                    <td align="center"><span class="detail">ไกรสร</span></td>
                                    <td align="center"><span class="detail">ช่างเสียง</span></td>
                                    <td align="center"><span class="detail">วิศวกรผู้ควบคุมงานก่อสร้าง</span></td>
                                    <td align="center"><span class="detail">ภาคี</span></td>
                                    <td align="center"><span class="detail">โยธา</span></td>
                                    <td align="center"><span class="detail">88902</span></td>
                                    <td align="center"><span class="detail">14/02/2027</span></td>
                                    <td align="center"><span class="detail">5 ปี</span></td>
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
                            <table width="100%" border="0" class="table">
                                <tr>
                                    <td align="center" valign="middle"><span class="font_header_detail">ลำดับ</span></td>
                                    <td align="center" valign="middle"><span class="font_header_detail">คำนำหน้าชื่อ<br />(Title)</span></td>
                                    <td align="center" valign="middle"><span class="font_header_detail">ชื่อ<br />(First Name)</span></td>
                                    <td align="center" valign="middle"><span class="font_header_detail">นามสกุล<br />(Last Name)</span></td>
                                    <td align="center" valign="middle"><span class="font_header_detail">ความรับผิดชอบ</span></td>
                                    <td align="center" valign="middle"><span class="font_header_detail">ประเภท<br />(Category)</span></td>
                                    <td align="center" valign="middle"><span class="font_header_detail">สาขา<br />(Major)</span></td>
                                    <td align="center" valign="middle"><span class="font_header_detail">เลขที่ใบ<br />ประกอบวิชาชีพ<br />(License ID.)</span></td>
                                    <td align="center" valign="middle"><span class="font_header_detail">วันที่ใบอนุญาตหมดอายุ<br />(Issue ID.)</span></td>
                                    <td align="center" valign="middle"><span class="font_header_detail">ประเภทใบทะเบียน<br />(License Type)</span></td>
                                </tr>
                                <tr>
                                    <td align="center"><span class="detail">1</span></td>
                                    <td align="center"><span class="detail">นาย</span></td>
                                    <td align="center"><span class="detail">วสันต์</span></td>
                                    <td align="center"><span class="detail">แสงศรี</span></td>
                                    <td align="center"><span class="detail">วิศวกรผู้ออกแบบ</span></td>
                                    <td align="center"><span class="detail">สามัญ</span></td>
                                    <td align="center"><span class="detail">โยธา</span></td>
                                    <td align="center"><span class="detail">9670</span></td>
                                    <td align="center"><span class="detail">10/10/2026</span></td>
                                    <td align="center"><span class="detail">5 ปี</span></td>
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
                                            <span class="font_header_detail_red"><a href="#">ไฟล์เอกสาร</a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="col-lg-12">2. หนังสือมอบอำนาจ ปิดอากรแสตมป์</label>
                                        </td>
                                        <td>
                                            <span class="font_header_detail_red"><a href="#">ไฟล์เอกสาร</a></span>
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
                                            <span class="font_header_detail_red"><a href="#">ไฟล์เอกสาร</a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="col-lg-12">6. แบบแปลนและรูปตัด ที่จะขุดดินหรือถมดิน</label>
                                        </td>
                                        <td>
                                            <span class="font_header_detail_red"><a href="#">ไฟล์เอกสาร</a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="col-lg-12">7. รายการคำนวณ</label>
                                        </td>
                                        <td>
                                            <span class="font_header_detail_red"><a href="#">ไฟล์เอกสาร</a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="col-lg-12">8. ขั้นตอนการปฏิบัติงานและมาตรการป้องกัน พร้อมทั้งระบบระบายน้ำ</label>
                                        </td>
                                        <td>
                                            <span class="font_header_detail_red"><a href="#">ไฟล์เอกสาร</a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="col-lg-12">9. หนังสือเห็นชอบจาก กนอ. หรือผู้พัฒนานิคมอุตสาหกรรม ในการขนย้ายดิน</label>
                                        </td>
                                        <td>
                                            <span class="font_header_detail_red"><a href="#">ไฟล์เอกสาร</a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="col-lg-12">10. เอกสารอื่นๆ ที่เกี่ยวข้อง</label>
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
                                    <span class="font_header_detail"><b>หนังสือรับรองของผู้ประกอบวิชาชีพสถาปัตยกรรมควบคุม/วิศวกรรมควบคุม</b></span>
                                </div>
                                <table width="100%" border="0" align="center" cellpadding="5" cellspacing="1" class="table table-bordered">
                                    <tr>
                                        <td width='70%'>
                                            <label class="col-lg-12">1. หนังสือรับรองผู้ประกอบวิชาชีพวิศวกรรมควบคุม (ผู้คำนวณ) <a href="form_01.pdf" target="_blank">แบบฟอร์ม Download กนอ. ขดถ. 1</a></label>
                                        </td>
                                        <td>
                                            <span class="font_header_detail_red"><a href="#">ไฟล์เอกสาร</a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="col-lg-12">2. หนังสือแสดงความยินยอมของผู้ควบคุมงาน (ขุดดินหรือถมดิน) <a href="form_02.pdf" target="_blank">แบบฟอร์ม Download กนอ. ขดถ. 2</a></label>
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