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
    <font style="color: #6007b3ff; font-size: 18px;"><b>กนอ. 01/3 (ควบรวมกิจการ)</b></font>
    <b>&nbsp;&nbsp;/&nbsp;&nbsp;</b>
    <font style="color: #000000ff; font-size: 18px;"><b>1-01-1-110-00001-2568</b></font>
</div>
<br />
<div class="class_header_page_02">

    <div class="row row-form">
        <div class="col-lg-4">
            <font style="color: #000000ff; font-size: 25px;"><b>คำขอ 1-01-1-110-00001-2568</b></font>
            &nbsp;&nbsp;
            <font style="color: #000000ff; font-size: 18px;"><b>(กนอ. 01/3 ควบรวมกิจการ)</b></font>
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
                        <div class="col-lg-12">
                            <div class="card-header">
                                <span class="font_header"><b>การจัดเตรียมข้อมูล</b></span>
                            </div>
                        </div>
                        <div class="table-responsive div_header p-4">
                            <div class="row row-form">
                                <div class="col-lg-6">
                                    <div class="card-header">
                                        <span class="font_header_detail"><b>ระบุรายละเอียดข้อมูลบริษัทใหม่ที่เกิดจากการควบกิจการ</b></span>
                                    </div>
                                    <div class="table-responsive div_header p-4">
                                        <table width="100%" border="0" align="center" cellpadding="5" cellspacing="1">
                                            <tr>
                                                <td width='20%'><span class="head_detail">เลขที่ประจำตัวผู้เสียภาษี :</span></td>
                                                <td><input type='text' name='taxid_ng' id='taxid_ng' value='0105554023999'></td>
                                            </tr>
                                            <tr>
                                                <td><span class="head_detail">ชื่อบริษัทภาษาไทย :</span></td>
                                                <td><input type='text' size='60' name='companyname_th_ng' id='companyname_th_ng' value='บริษัท ทดสอบระบบ3 จำกัด'></td>
                                            </tr>
                                            <tr>
                                                <td><span class="head_detail">ชื่อบริษัทภาษาอังกฤษ :</span></td>
                                                <td><input type='text' size='60' name='companyname_en_ng' id='companyname_en_ng' value='TESTER SYSTEM COMPANY'></td>
                                            </tr>
                                            <tr>
                                                <td><span class="head_detail">เลขที่อยู่สำนักงาน :</span></td>
                                                <td><input type='text' name='addrno_office_ng' id='addrno_office_ng' value='999'></td>
                                            </tr>
                                            <tr>
                                                <td><span class="head_detail">หมู่ที่สำนักงาน :</span></td>
                                                <td><input type='text' name='moo_office_ng' id='moo_office_ng' value='-'></td>
                                            </tr>
                                            <tr>
                                                <td><span class="head_detail">ซอยสำนักงาน :</span></td>
                                                <td><input type='text' name='lane_office_ng' id='lane_office_ng' value='-'></td>
                                            </tr>
                                            <tr>
                                                <td><span class="head_detail">ถนนสำนักงาน :</span></td>
                                                <td><input type='text' name='street_office_ng' id='street_office_ng' value='ศรีนครินทร์'></td>
                                            </tr>
                                            <tr>
                                                <td><span class="head_detail">ตำบลสำนักงาน :</span></td>
                                                <td><input type='text' name='district_office_ng' id='district_office_ng' value='สวนหลวง'></td>
                                            </tr>
                                            <tr>
                                                <td><span class="head_detail">อำเภอสำนักงาน :</span></td>
                                                <td><input type='text' name='amphur_office_ng' id='amphur_office_ng' value='สวนหลวง'></td>
                                            </tr>
                                            <tr>
                                                <td><span class="head_detail">จังหวัดสำนักงาน :</span></td>
                                                <td><input type='text' name='province_office_ng' id='province_office_ng' value='กรุงเทพมหานคร'></td>
                                            </tr>
                                            <tr>
                                                <td><span class="head_detail">รหัสไปรษณีย์สำนักงาน :</span></td>
                                                <td><input type='text' name='zipcode_office_ng' id='zipcode_office_ng' value='10250'></td>
                                            </tr>
                                            <tr>
                                                <td><span class="head_detail">เบอร์โทรศัพท์ :</span></td>
                                                <td><input type='text' name='tel_office_ng' id='tel_office_ng' value='0899999999'></td>
                                            </tr>
                                            <tr>
                                                <td><span class="head_detail">เบอร์ fax สำนักงาน :</span></td>
                                                <td><input type='text' name='fax_office_ng' id='fax_office_ng' value='029999999'></td>
                                            </tr>
                                            <tr>
                                                <td><span class="head_detail">อีเมล สำนักงาน :</span></td>
                                                <td><input type='text' name='email_office_ng' id='email_office_ng' value='test@gmail.com'></td>
                                            </tr>
                                            <tr>
                                                <td><span class="head_detail">เลขที่อยู่โรงงาน :</span></td>
                                                <td><input type='text' name='addrno_factory_tabuser_ng' id='addrno_factory_tabuser_ng' value='9999'></td>
                                            </tr>
                                            <tr>
                                                <td><span class="head_detail">หมู่ที่โรงงาน :</span></td>
                                                <td><input type='text' name='moo_factory_tabuser_ng' id='moo_factory_tabuser_ng' value='2'></td>
                                            </tr>
                                            <tr>
                                                <td><span class="head_detail">ซอยโรงงาน :</span></td>
                                                <td><input type='text' name='lane_factory_tabuser_ng' id='lane_factory_tabuser_ng' value='-'></td>
                                            </tr>
                                            <tr>
                                                <td><span class="head_detail">ถนนโรงงาน :</span></td>
                                                <td><input type='text' name='street_factory_tabuser_ng' id='street_factory_tabuser_ng' value='-'></td>
                                            </tr>
                                            <tr>
                                                <td><span class="head_detail">ตำบลโรงงาน :</span></td>
                                                <td><input type='text' name='district_factory_tabuser_ng' id='district_factory_tabuser_ng' value='มะเขือแจ้'></td>
                                            </tr>
                                            <tr>
                                                <td><span class="head_detail">อำเภอโรงงาน :</span></td>
                                                <td><input type='text' name='amphur_factory_tabuser_ng' id='amphur_factory_tabuser_ng' value='เมืองลำพูน'></td>
                                            </tr>
                                            <tr>
                                                <td><span class="head_detail">จังหวัดโรงงาน :</span></td>
                                                <td><input type='text' name='province_factory_tabuser_ng' id='province_factory_tabuser_ng' value='ลำพูน'></td>
                                            </tr>
                                            <tr>
                                                <td><span class="head_detail">รหัสไปรษณีย์โรงงาน :</span></td>
                                                <td><input type='text' name='zipcode_factory_tabuser_ng' id='zipcode_factory_tabuser_ng' value='51000'></td>
                                            </tr>
                                            <tr>
                                                <td><span class="head_detail">เบอร์โทรศัพท์โรงงาน :</span></td>
                                                <td><input type='text' name='tel_factory_tabuser_ng' id='tel_factory_tabuser_ng' value='0899999999'></td>
                                            </tr>
                                            <tr>
                                                <td><span class="head_detail">เบอร์ fax โรงงาน :</span></td>
                                                <td><input type='text' name='fax_factory_tabuser_ng' id='fax_factory_tabuser_ng' value='029999999'></td>
                                            </tr>
                                            <tr>
                                                <td><span class="head_detail">อีเมล โรงงาน :</span></td>
                                                <td><input type='text' name='email_factory_tabuser_ng' id='email_factory_tabuser_ng' value='test2@gmail.com'></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-header">
                                        <span class="font_header_detail"><b>เลือกข้อมูล User ที่ต้องการถ่ายโอนข้อมูลไปยัง User ใหม่</b></span>
                                    </div>
                                    <div class="table-responsive div_header p-4">
                                        <table width="100%" border="0" align="center" cellpadding="5" cellspacing="1">
                                            <tr>
                                                <td valign="top">
                                                    <input type='checkbox' name='username_ng' value="9683" checked />
                                                    username : ent_user_31&nbsp;&nbsp;&nbsp;ชื่อบริษัท : บริษัท สมมุติ31 จำกัด <br />
                                                    <input type='checkbox' name='username_ng2' value="9683" />
                                                    username : ent_user_31&nbsp;&nbsp;&nbsp;ชื่อบริษัท : บริษัท สมมุติ31 จำกัด
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="card-header">
                                        <span class="font_header_detail"><b>ส่วนของการออกทะเบียนโรงงาน เลือกใช้ทะเบียนโรงงานจาก user ที่ทำการควบรวมกิจการหรือออกทะเบียนโรงงานใหม่</b></span>
                                    </div>
                                    <div class="table-responsive div_header p-4">
                                        <table width="100%" border="0" align="center" cellpadding="5" cellspacing="1">
                                            <tr>
                                                <td valign="top">
                                                    <input type='radio' name='select_buno' value="9683" checked />
                                                    username : ent_user_31&nbsp;&nbsp;&nbsp;ชื่อบริษัท : บริษัท สมมุติ31 จำกัด <br />
                                                    <input type='radio' name='select_buno' value="9683" checked />
                                                    username : ent_user_31&nbsp;&nbsp;&nbsp;ชื่อบริษัท : บริษัท สมมุติ31 จำกัด <br />
                                                    <input type='radio' name='select_buno' value="9999999" />
                                                    ออกทะเบียนโรงงานใหม่
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="card-header">
                                        <span class="font_header_detail"><b>หมายเหตุออกหน้าใบอนุญาต</b></span>
                                    </div>
                                    <div class="table-responsive div_header p-4">
                                        <table width="100%" border="0" align="center" cellpadding="5" cellspacing="1">
                                            <tr>
                                                <td valign="top">
                                                    <textarea name="d013" cols="80" rows="5">ต้องปฏิบัติตามมาตรการป้องกันและ แก้ไขผลกระทบสิ่งแวดล้อม และมาตรการติดตามตรวจสอบคุณภาพ</textarea>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="card-header">
                                        <span class="font_header_detail"><b>ประกอบกิจการออกหน้าใบอนุญาต</b></span>
                                    </div>
                                    <div class="table-responsive div_header p-4">
                                        <table width="100%" border="0" align="center" cellpadding="5" cellspacing="1">
                                            <tr>
                                                <td valign="top">
                                                    <textarea name="d013" cols="80" rows="5">ทดสอบระบบ</textarea>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="card-header">
                                        <span class="font_header_detail"><b>ประเภทหรือชนิดโรงงานลำดับที่ออกหน้าใบอนุญาต</b></span>
                                    </div>
                                    <div class="table-responsive div_header p-4">
                                        <table width="100%" border="0" align="center" cellpadding="5" cellspacing="1">
                                            <tr>
                                                <td valign="top">
                                                    <input name="new_factorytype" type="text" id="new_factorytype" value="71, 72, 73" />
                                                </td>
                                            </tr>
                                        </table>
                                    </div>

                                </div>
                            </div>
                            <div class="row row-form">
                                <div class="col-lg-12">
                                    <div class="card-header">
                                        <span class="font_header_detail"><b>กรอกส่วนของแปลงที่ดิน</b></span>
                                    </div>
                                    <div class="table-responsive div_header p-4">
                                        <table width="100%" border="0" align="center" cellpadding="5" cellspacing="1">
                                            <tr>
                                                <td>
                                                    <input class="btn btn-success" type="button" value="เพิ่ม" onClick="addRow_land('datatable_land')" />
                                                    <input class="btn btn-danger" type="button" value="ลบ" onClick="deleteRow_land('datatable_land')" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td valign="top" align='left'>
                                                    <table width='100%' border='0' align='left' cellpadding='5' cellspacing='1' class="table">
                                                        <tr>
                                                            <th width="10%" align="center">เลือกลบ</th>
                                                            <th width="50%" align="center">แปลงที่ดิน</th>
                                                            <th width="10%" align="center">ไร่</th>
                                                            <th width="10%" align="center">งาน</th>
                                                            <th width="10%" align="center">วา</th>
                                                            <th width="10%" align="center">ตารางเมตร</th>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" valign="middle"><input type="checkbox" name="chk3" id="chk3" /></td>
                                                            <td align="left" valign="middle">
                                                                <span class="detail">
                                                                    <input name="land_no[]" type="text" id="landno[]" size="30" value="A01" />
                                                                </span>
                                                            </td>
                                                            <td align="left" valign="middle">
                                                                <span class="detail">
                                                                    <input name="land_area_rai[]" type="text" id="land_area_rai[]" size="8" value="1" />
                                                                </span>
                                                            </td>
                                                            <td align="left" valign="middle">
                                                                <span class="detail">
                                                                    <input name="land_area_ngan[]" type="text" id="land_area_ngan[]" size="8" value="2" />
                                                                </span>
                                                            </td>
                                                            <td align="left" valign="middle">
                                                                <span class="detail">
                                                                    <input name="land_area_square_wah[]" type="text" id="land_area_square_wah[]" size="8" value="3" />
                                                                </span>
                                                            </td>
                                                            <td align="left" valign="middle">
                                                                <span class="detail">
                                                                    <input name="land_area_square_meter[]" type="text" id="land_area_square_meter[]" size="8" value="" />
                                                                </span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" valign="middle"><input type="checkbox" name="chk3" id="chk3" /></td>
                                                            <td align="left" valign="middle">
                                                                <span class="detail">
                                                                    <input name="land_no[]" type="text" id="landno[]" size="30" value="A02" />
                                                                </span>
                                                            </td>
                                                            <td align="left" valign="middle">
                                                                <span class="detail">
                                                                    <input name="land_area_rai[]" type="text" id="land_area_rai[]" size="8" value="3" />
                                                                </span>
                                                            </td>
                                                            <td align="left" valign="middle">
                                                                <span class="detail">
                                                                    <input name="land_area_ngan[]" type="text" id="land_area_ngan[]" size="8" value="2" />
                                                                </span>
                                                            </td>
                                                            <td align="left" valign="middle">
                                                                <span class="detail">
                                                                    <input name="land_area_square_wah[]" type="text" id="land_area_square_wah[]" size="8" value="1" />
                                                                </span>
                                                            </td>
                                                            <td align="left" valign="middle">
                                                                <span class="detail">
                                                                    <input name="land_area_square_meter[]" type="text" id="land_area_square_meter[]" size="8" value="" />
                                                                </span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" valign="middle"><input type="checkbox" name="chk3" id="chk3" /></td>
                                                            <td align="left" valign="middle">
                                                                <span class="detail">
                                                                    <input name="land_no[]" type="text" id="land_no[]" size="30" value="" />
                                                                </span>
                                                            </td>
                                                            <td align="left" valign="middle">
                                                                <span class="detail">
                                                                    <input name="land_area_rai[]" type="text" id="land_area_rai[]" size="8" value="" />
                                                                </span>
                                                            </td>
                                                            <td align="left" valign="middle">
                                                                <span class="detail">
                                                                    <input name="land_area_ngan[]" type="text" id="land_area_ngan[]" size="8" value="" />
                                                                </span>
                                                            </td>
                                                            <td align="left" valign="middle">
                                                                <span class="detail">
                                                                    <input name="land_area_square_wah[]" type="text" id="land_area_square_wah[]" size="8" value="" />
                                                                </span>
                                                            </td>
                                                            <td align="left" valign="middle">
                                                                <span class="detail">
                                                                    <input name="land_area_square_meter[]" type="text" id="land_area_square_meter[]" size="8" value="" />
                                                                </span>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <br />
                    <div class="row row-form">
                        <div class="col-lg-12">
                            <div class="card-header">
                                <span class="font_header"><b>ร่างหนังสือแจ้งผู้ประกอบการ</b></span>
                            </div>
                            <div class="table-responsive div_header p-4">
                                <table width='100%' border='0' align='center' cellpadding='10' cellspacing='1'>
                                    <tr>
                                        <td align='left' valign='top' width='30%'><br /><br /><br />ที่</td>
                                        <td align='center' width='40%'><img src='https://epp-ieat.ieat.go.th/new_epp_ieat/assets/logo_new.png' border='0' /></td>
                                        <td align='left' valign='top' width='30%'><br /><br /><br />
                                            <span class="font_header_detail">&nbsp;</span>
                                        </td>
                                    </tr>
                                </table>
                                <table width='100%' border='0' align='center' cellpadding='10' cellspacing='1'>
                                    <tr>
                                        <td height='35' align='center'>
                                            <font color="red">**ระบบจะแสดงวันที่ตามหน้าใบอนุญาตเมื่อดำเนินการอนุมัติแล้ว**</font>
                                        </td>
                                    </tr>
                                </table>
                                <table width='100%' border='0' align='center' cellpadding='10' cellspacing='1'>
                                    <tr>
                                        <td width="6%" height='35' valign='top'>
                                            <span class="font_header_detail">เรื่อง </span>
                                        </td>
                                        <td width="94%" height='35' valign='top'>
                                            <span class="font_header_detail"><input type="text" name="pp_000" value="" size="80" /></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height='35' valign='top'>
                                            <span class="font_header_detail">เรียน </span>
                                        </td>
                                        <td height='35' valign='top'>
                                            <span class="font_header_detail"><input type="text" name="pp_001" value="กรรมการผู้จัดการ บริษัท สมมุติ31 จำกัด" size="80" /></span>
                                        </td>
                                    </tr>
                                </table>
                                <br />
                                <table width='100%' border='0' align='center' cellpadding='5' cellspacing='1'>
                                    <tr>
                                        <td width="12%" height='35' valign='top'>
                                            <span class="font_header_detail">อ้างถึง </span>
                                        </td>
                                        <td align='left' valign='top'>
                                            <table width='100%' border='0' align='center' cellpadding='5' cellspacing='1'>
                                                <tr>
                                                    <td width='3%' valign='top'>
                                                        1.
                                                    </td>
                                                    <td valign='top'>
                                                        <input type="text" name="pp_002" value="" size="100" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td valign='top'>
                                                        2.
                                                    </td>
                                                    <td valign='top'>
                                                        <input type="text" name="pp_002_1" value="" size="100" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td valign='top'>
                                                        3.
                                                    </td>
                                                    <td valign='top'>
                                                        <input type="text" name="pp_002_2" value="" size="100" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td valign='top'>
                                                        4.
                                                    </td>
                                                    <td valign='top'>
                                                        <input type="text" name="pp_002_3" value="" size="100" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td valign='top'>
                                                        5.
                                                    </td>
                                                    <td valign='top'>
                                                        <input type="text" name="pp_002_4" value="" size="100" />
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                                <table width='100%' border='0' align='center' cellpadding='5' cellspacing='1'>
                                    <tr>
                                        <td width="12%" height='35' valign='top'>
                                            <span class="font_header_detail">สิ่งที่ส่งมาด้วย</span>
                                        </td>
                                        <td align='left' valign='top'>
                                            <table width='100%' border='0' align='center' cellpadding='5' cellspacing='1'>
                                                <tr>
                                                    <td width='3%' valign='top'>
                                                        1.
                                                    </td>
                                                    <td valign='top'>
                                                        <input type="text" name="pp_003" value="" size="100" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td valign='top'>
                                                        2.
                                                    </td>
                                                    <td valign='top'>
                                                        <input type="text" name="pp_003_1" value="" size="100" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td valign='top'>
                                                        3.
                                                    </td>
                                                    <td valign='top'>
                                                        <input type="text" name="pp_003_2" value="" size="100" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td valign='top'>
                                                        4.
                                                    </td>
                                                    <td valign='top'>
                                                        <input type="text" name="pp_003_3" value="" size="100" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td valign='top'>
                                                        5.
                                                    </td>
                                                    <td valign='top'>
                                                        <input type="text" name="pp_003_4" value="" size="100" />
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                                <br />
                                <table width='100%' border='0' align='center' cellpadding='7' cellspacing='1'>
                                    <td height='35' align='center'>
                                        ย่อหน้าที่ 1<br />
                                        <textarea name="pp_004" id="pp_004" cols="200" rows="8">ตามหนังสือที่อ้างถึง บริษัท สมมุติ31 จำกัด ได้ยื่นคำขอใช้ที่ดินเพื่อประกอบกิจการ xxxxxx ในเขตอุตสาหกรรมทั่วไป นิคมอุตสาหกรรมอาหารฮาลาล จังหวัดปัตตานี ที่ดินแปลงที่ xxxxxx เนื้อที่ประมาณ xxxxxx โดยเป็นการ xxxxxx  ความละเอียดแจ้งแล้ว นั้น</textarea>
                                    </td>
                                    </tr>
                                    <tr>
                                        <td height='35' align='center'>
                                            ย่อหน้าที่ 2<br />
                                            <textarea name="pp_005" id="pp_005" cols="200" rows="8">การนิคมอุตสาหกรรมแห่งประเทศไทย (กนอ.) พิจารณาแล้ว อนุมัติให้บริษัทฯ ใช้ที่ดินเพื่อประกอบกิจการ xxxxxx  ประเภทโรงงานลำดับที่ xxxxxx โดยกำหนดหมายเลขกำกับแปลงที่ดินใหม่เป็นแปลงที่ xxxxxx ทั้งนี้ ท่านต้องปฏิบัติตามประกาศและกฎหมายของ กนอ. จึงขอให้ท่านชำระค่าบริการในการอนุญาตฯ ภายในวันครบกำหนดชำระ (Due Date) ตามที่ระบุในใบแจ้งชำระเงินจากระบบ e-PP (Bill Payment) โดยสามารถชำระค่าบริการในการอนุญาตฯ ได้ที่ กนอ. สำนักงานใหญ่ /สำนักงานนิคมอุตสาหกรรม รวมถึง Counter service และช่องทางอื่นของทางธนาคาร เช่น Corporate Online, Internet Banking หรือ ATM เป็นต้น นับแต่วันที่ได้รับหนังสือฉบับนี้</textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height='35' align='center'>
                                            ย่อหน้าที่ 3<br />
                                            <textarea name="pp_006" id="pp_006" cols="200" rows="8">เมื่อบริษัทฯ ประสงค์จะเริ่มประกอบกิจการในส่วนหนึ่งส่วนใดต้องแจ้งให้ กนอ. ทราบไม่น้อยกว่า 30 วัน ก่อนวันเริ่มประกอบกิจการ โดยยื่นคำขอแจ้งเริ่มประกอบอุตสาหกรรม (แบบ กนอ. 03/1) กนอ. จึงจะพิจารณาดำเนินการต่อไป</textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height='35' align='center'>
                                            ย่อหน้าที่ 4<br />
                                            <textarea name="pp_007" id="pp_007" cols="200" rows="8">จึงเรียนมาเพื่อทราบ</textarea>
                                        </td>
                                    </tr>
                                </table>
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
                                <div class="col-lg-4">
                                    <input class='btn btn-secondary btn-lg btn-block' name="Submit_return" type="button" id="Submit" value="ไม่ผ่านการพิจารณา (ตีคืนเอกสาร)" onclick="return confirm('ไม่ผ่านการพิจารณา(ตีคืนเอกสาร) !!!')" onclick="window.location='center_ieat_ent/page_office'" />
                                </div>
                                <div class="col-lg-2">
                                    <input class='btn btn-info btn-lg btn-block' name="Submit_approve" type="button" id="Submit" value="ดูร่างใบอนุญาต" onclick="window.location='center_ieat_ent/page_office'" />
                                </div>
                                <div class="col-lg-3">
                                    <input class='btn btn-success btn-lg btn-block' name="Submit_continue" type="button" id="Submit" value="บันทึกร่างเอกสาร" onclick="return confirm('บันทึกร่างเอกสาร !!!')" onclick="window.location='center_ieat_ent/page_office'" />
                                </div>
                                <div class="col-lg-3">
                                    <input class='btn btn-primary btn-lg btn-block' name="Submit_approve" type="button" id="Submit" value="ส่งพิจารณาอนุมัติอนุญาต" onclick="window.location='center_ieat_ent/page_office'" />
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
                                        <td class="table-detail-left col-xs-4 col-sm-4 col-md-4 col-lg-4" colspan="2">
                                            <font color="red">บริษัทที่ต้องการดำเนินการควบรวมกิจการ (กรณีบริษัทอยู่ในนิคม)</font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="left">
                                            <span class="head_detail">ชื่อบริษัทภาษาไทย</span>
                                        </td>
                                        <td align="left">
                                            บริษัท ทดสอบระบบ จำกัด
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="left">
                                            <span class="head_detail">ชื่อบริษัทภาษาอังกฤษ</span>
                                        </td>
                                        <td align="left">
                                            Tester Company
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="left">
                                            <span class="head_detail">เลข TAXID</span>
                                        </td>
                                        <td align="left">
                                            0199999999999
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="left">
                                            <span class="head_detail">ที่อยู่สำนักงาน</span>
                                        </td>
                                        <td align="left">
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
                                        <td align="left">
                                            <span class="head_detail">ที่อยู่โรงงาน</span>
                                        </td>
                                        <td align="left">
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
                                        <td align="left">
                                            <span class="head_detail">จำนวนแรงม้า</span>
                                        </td>
                                        <td align="left">
                                            100 แรงม้า
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-left col-xs-4 col-sm-4 col-md-4 col-lg-4" colspan="2">
                                            <font color="red">บริษัทที่ต้องการดำเนินการควบรวมกิจการ (กรณีบริษัทอยู่นอกนิคม)</font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="left">
                                            <span class="head_detail">ชื่อบริษัทภาษาไทย</span>
                                        </td>
                                        <td align="left">
                                            บริษัท ทดสอบระบบ จำกัด
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="left">
                                            <span class="head_detail">ชื่อบริษัทภาษาอังกฤษ</span>
                                        </td>
                                        <td align="left">
                                            Tester Company
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="left">
                                            <span class="head_detail">เลข TAXID</span>
                                        </td>
                                        <td align="left">
                                            0199999999999
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