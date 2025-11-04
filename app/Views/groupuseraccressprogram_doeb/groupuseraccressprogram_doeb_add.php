<?= $this->extend('layouts/main') ?>

<?= $this->section("content"); ?>

<div class="class_header_page_02">
    <br />
    กำหนดสิทธิ์ระดับกลุ่มผู้ใช้งาน
    <hr />
</div>
<div class="row">
    <form id="frm" class="form-horizontal" action="<?php echo base_url(); ?>/<?= $routeGroup ?>/<?= $action_page ?>" method="post">
        <input type="hidden" name="GroupID" id="GroupID" value="<?php echo $data['GroupID']; ?>" />
        <?= csrf_field() ?>
        <div class="row text-left">
            <div class="col-md-12">
                <div class="form-group row">
                    <div class="col-12">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr class="align-middle">
                                    <th class="align-middle text-center " style="width: 90px;">#</th>
                                    <th class="align-middle text-center">รายการเมนู</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-top text-center"><input type='checkbox' name='GroupSet10' value='checked' <?php echo $data['GroupSet10']; ?>></td>
                                    <td class="align-top text-left"><b>[Main] จัดการสิทธิ์ (SAFETY SSO)</b></td>
                                </tr>
                                <tr>
                                    <td class="align-top text-center"><input type='checkbox' name='GroupSet1001' value='checked' <?php echo $data['GroupSet1001']; ?>></td>
                                    <td class="align-top text-left">จัดการกลุ่มผู้ใช้งาน</td>
                                </tr>
                                <tr>
                                    <td class="align-top text-center"><input type='checkbox' name='GroupSet1002' value='checked' <?php echo $data['GroupSet1002']; ?>></td>
                                    <td class="align-top text-left">กำหนดสิทธิ์ระดับกลุ่มผู้ใช้งาน</td>
                                </tr>
                                <tr>
                                    <td class="align-top text-center"><input type='checkbox' name='GroupSet1003' value='checked' <?php echo $data['GroupSet1003']; ?>></td>
                                    <td class="align-top text-left">จัดการข้อมูลผู้ใช้งาน</td>
                                </tr>
                                <tr>
                                    <td class="align-top text-center"><input type='checkbox' name='GroupSet1004' value='checked' <?php echo $data['GroupSet1004']; ?>></td>
                                    <td class="align-top text-left">รายงานสรุปรายชื่อผู้ใช้งานระบบ</td>
                                </tr>
                                <tr>
                                    <td class="align-top text-center"><input type='checkbox' name='GroupSet1005' value='checked' <?php echo $data['GroupSet1005']; ?>></td>
                                    <td class="align-top text-left">รายงานประวัติการเข้าใช้งานระบบ</td>
                                </tr>

                                <tr>
                                    <td class="align-top text-center"><input type='checkbox' name='GroupSet20' value='checked' <?php echo $data['GroupSet20']; ?>></td>
                                    <td class="align-top text-left"><b>[Main] จัดการข้อมูลหลัก</b></td>
                                </tr>
                                <tr>
                                    <td class="align-top text-center"><input type='checkbox' name='GroupSet2001' value='checked' <?php echo $data['GroupSet2001']; ?>></td>
                                    <td class="align-top text-left">ประเภทแผน</td>
                                </tr>
                                <tr>
                                    <td class="align-top text-center"><input type='checkbox' name='GroupSet2002' value='checked' <?php echo $data['GroupSet2002']; ?>></td>
                                    <td class="align-top text-left">หน่วยนับ</td>
                                </tr>
                                <tr>
                                    <td class="align-top text-center"><input type='checkbox' name='GroupSet2003' value='checked' <?php echo $data['GroupSet2003']; ?>></td>
                                    <td class="align-top text-left">ประเภทแหล่งเงินงบประมาณ</td>
                                </tr>
                                <tr>
                                    <td class="align-top text-center"><input type='checkbox' name='GroupSet2004' value='checked' <?php echo $data['GroupSet2004']; ?>></td>
                                    <td class="align-top text-left">โครงสร้างงบประมาณรายจ่าย</td>
                                </tr>
                                <tr>
                                    <td class="align-top text-center"><input type='checkbox' name='GroupSet2005' value='checked' <?php echo $data['GroupSet2005']; ?>></td>
                                    <td class="align-top text-left">ประเภทงบประมาณ</td>
                                </tr>

                                <tr>
                                    <td class="align-top text-center"><input type='checkbox' name='GroupSet30' value='checked' <?php echo $data['GroupSet30']; ?>></td>
                                    <td class="align-top text-left"><b>[Main] งานด้านยุทธศาสตร์</b></td>
                                </tr>
                                <tr>
                                    <td class="align-top text-center"><input type='checkbox' name='GroupSet3001' value='checked' <?php echo $data['GroupSet3001']; ?>></td>
                                    <td class="align-top text-left">โปรแกรมจัดทำข้อมูลภาพรวมแผนยุทธศาสตร์</td>
                                </tr>
                                <tr>
                                    <td class="align-top text-center"><input type='checkbox' name='GroupSet3002' value='checked' <?php echo $data['GroupSet3002']; ?>></td>
                                    <td class="align-top text-left">สร้างรายการแผนย่อย</td>
                                </tr>
                                <tr>
                                    <td class="align-top text-center"><input type='checkbox' name='GroupSet3003' value='checked' <?php echo $data['GroupSet3003']; ?>></td>
                                    <td class="align-top text-left">สร้างรายการเป้าหมาย</td>
                                </tr>
                                <tr>
                                    <td class="align-top text-center"><input type='checkbox' name='GroupSet3004' value='checked' <?php echo $data['GroupSet3004']; ?>></td>
                                    <td class="align-top text-left">สร้างตัวชี้วัดตามยุทธศาสตร์</td>
                                </tr>
                                <tr>
                                    <td class="align-top text-center"><input type='checkbox' name='GroupSet3005' value='checked' <?php echo $data['GroupSet3005']; ?>></td>
                                    <td class="align-top text-left">จัดทำข้อมูลค่าเป้าหมายและงบประมาณ</td>
                                </tr>
                                <tr>
                                    <td class="align-top text-center"><input type='checkbox' name='GroupSet3006' value='checked' <?php echo $data['GroupSet3006']; ?>></td>
                                    <td class="align-top text-left">แผนรายจ่ายของโครงการ</td>
                                </tr>
                                <tr>
                                    <td class="align-top text-center"><input type='checkbox' name='GroupSet3007' value='checked' <?php echo $data['GroupSet3007']; ?>></td>
                                    <td class="align-top text-left">ตรวจทานรายละเอียดโครงการ</td>
                                </tr>
                                <tr>
                                    <td class="align-top text-center"><input type='checkbox' name='GroupSet3008' value='checked' <?php echo $data['GroupSet3008']; ?>></td>
                                    <td class="align-top text-left">จัดทำ / ปรับปรุงแผนงาน</td>
                                </tr>
                                <tr>
                                    <td class="align-top text-center"><input type='checkbox' name='GroupSet3009' value='checked' <?php echo $data['GroupSet3009']; ?>></td>
                                    <td class="align-top text-left">ตรวจสอบและพิจารณาแผนงาน</td>
                                </tr>

                                <tr>
                                    <td class="align-top text-center"><input type='checkbox' name='GroupSet40' value='checked' <?php echo $data['GroupSet40']; ?>></td>
                                    <td class="align-top text-left"><b>[Main] จัดทำแผนงานโครงการ</b></td>
                                </tr>
                                <tr>
                                    <td class="align-top text-center"><input type='checkbox' name='GroupSet4001' value='checked' <?php echo $data['GroupSet4001']; ?>></td>
                                    <td class="align-top text-left">ข้อมูลภาพรวมโครงการ (ประกอบแผนปฏิบัติการ 5 ปี)</td>
                                </tr>
                                <tr>
                                    <td class="align-top text-center"><input type='checkbox' name='GroupSet4002' value='checked' <?php echo $data['GroupSet4002']; ?>></td>
                                    <td class="align-top text-left">จัดทำแผนงานโครงการ (แผนปฏิบัติราชการรายปี)</td>
                                </tr>

                                <tr>
                                    <td class="align-top text-center"><input type='checkbox' name='GroupSet50' value='checked' <?php echo $data['GroupSet50']; ?>></td>
                                    <td class="align-top text-left"><b>[Main] งานด้านงบประมาณ</b></td>
                                </tr>
                                <tr>
                                    <td class="align-top text-center"><input type='checkbox' name='GroupSet5001' value='checked' <?php echo $data['GroupSet5001']; ?>></td>
                                    <td class="align-top text-left">โปรแกรมจัดทำข้อมูลภาพรวมแผนงบประมาณ</td>
                                </tr>
                                <tr>
                                    <td class="align-top text-center"><input type='checkbox' name='GroupSet6002' value='checked' <?php echo $data['GroupSet6002']; ?>></td>
                                    <td class="align-top text-left">ตรวจสอบและพิจารณาแผนปฏิบัติงานรายเดือนประกอบการยื่นคำของบประมาณ</td>
                                </tr>
                                <tr>
                                    <td class="align-top text-center"><input type='checkbox' name='GroupSet5002' value='checked' <?php echo $data['GroupSet5002']; ?>></td>
                                    <td class="align-top text-left">ตรวจสอบรายละเอียดคำของบประมาณ</td>
                                </tr>
                                <tr>
                                    <td class="align-top text-center"><input type='checkbox' name='GroupSet5003' value='checked' <?php echo $data['GroupSet5003']; ?>></td>
                                    <td class="align-top text-left">จัดทำ/ปรับปรุงแผนการใช้งบประมาณเพื่อขออนุมัติ</td>
                                </tr>
                                <tr>
                                    <td class="align-top text-center"><input type='checkbox' name='GroupSet5004' value='checked' <?php echo $data['GroupSet5004']; ?>></td>
                                    <td class="align-top text-left">ตรวจสอบและพิจารณาแผนงบประมาณ</td>
                                </tr>
                                <tr>
                                    <td class="align-top text-center"><input type='checkbox' name='GroupSet5005' value='checked' <?php echo $data['GroupSet5005']; ?>></td>
                                    <td class="align-top text-left">จัดสรรงบประมาณ</td>
                                </tr>
                                <tr>
                                    <td class="align-top text-center"><input type='checkbox' name='GroupSet60' value='checked' <?php echo $data['GroupSet60']; ?>></td>
                                    <td class="align-top text-left"><b>[Main] จัดทำงบประมาณสำหรับผู้ยื่นของบประมาณ</b></td>
                                </tr>
                                <tr>
                                    <td class="align-top text-center"><input type='checkbox' name='GroupSet6001' value='checked' <?php echo $data['GroupSet6001']; ?>></td>
                                    <td class="align-top text-left">จัดทำแผนปฏิบัติงานรายเดือนประกอบการยื่นคำของบประมาณ</td>
                                </tr>

                                <tr>
                                    <td class="align-top text-center"><input type='checkbox' name='GroupSet6003' value='checked' <?php echo $data['GroupSet6003']; ?>></td>
                                    <td class="align-top text-left">จัดทำร่างคำของบประมาณ เสนอ กยผ.</td>
                                </tr>
                                <tr>
                                    <td class="align-top text-center"><input type='checkbox' name='GroupSet6004' value='checked' <?php echo $data['GroupSet6004']; ?>></td>
                                    <td class="align-top text-left">จัดทำ/ปรับปรุงแผนการใช้งบประมาณ (โครงการ)</td>
                                </tr>
                                <tr>
                                    <td class="align-top text-center"><input type='checkbox' name='GroupSet6005' value='checked' <?php echo $data['GroupSet6005']; ?>></td>
                                    <td class="align-top text-left">จัดทำ/ปรับปรุงแผนการใช้งบประมาณ (ทั่วไป)</td>
                                </tr>

                                <tr>
                                    <td class="align-top text-center"><input type='checkbox' name='GroupSet70' value='checked' <?php echo $data['GroupSet70']; ?>></td>
                                    <td class="align-top text-left"><b>[Main] ระบบรายงานความก้าวหน้าและการใช้งบประมาณ</b></td>
                                </tr>
                                <tr>
                                    <td class="align-top text-center"><input type='checkbox' name='GroupSet7001' value='checked' <?php echo $data['GroupSet7001']; ?>></td>
                                    <td class="align-top text-left">รายงานแผน/ผลโครงการ</td>
                                </tr>
                                <tr>
                                    <td class="align-top text-center"><input type='checkbox' name='GroupSet7002' value='checked' <?php echo $data['GroupSet7002']; ?>></td>
                                    <td class="align-top text-left">รายงานแผน/ผล ง.</td>
                                </tr>
                                <tr>
                                    <td class="align-top text-center"><input type='checkbox' name='GroupSet7003' value='checked' <?php echo $data['GroupSet7003']; ?>></td>
                                    <td class="align-top text-left">รายงานแผน/ผล ต. กองความปลอดภัยธุรกิจก๊าซธรรมชาติ</td>
                                </tr>
                                <tr>
                                    <td class="align-top text-center"><input type='checkbox' name='GroupSet7004' value='checked' <?php echo $data['GroupSet7004']; ?>></td>
                                    <td class="align-top text-left">รายงานแผน/ผล ต. กองความปลอดภัยธุรกิจก๊าซปิโตรเลียมเหลว</td>
                                </tr>
                                <tr>
                                    <td class="align-top text-center"><input type='checkbox' name='GroupSet7005' value='checked' <?php echo $data['GroupSet7005']; ?>></td>
                                    <td class="align-top text-left">รายงานแผน/ผล ต. กองความปลอดภัยธุรกิจน้ำมัน</td>
                                </tr>
                                <tr>
                                    <td class="align-top text-center"><input type='checkbox' name='GroupSet7006' value='checked' <?php echo $data['GroupSet7006']; ?>></td>
                                    <td class="align-top text-left">รายงานแผน/ผล ต. สถาบันพัฒนาเทคนิคพลังงาน</td>
                                </tr>
                                <tr>
                                    <td class="align-top text-center"><input type='checkbox' name='GroupSet7007' value='checked' <?php echo $data['GroupSet7007']; ?>></td>
                                    <td class="align-top text-left">รายงานแผน/ผล ต. ภารกิจด้านคุณภาพ</td>
                                </tr>
                                <tr>
                                    <td class="align-top text-center"><input type='checkbox' name='GroupSet7008' value='checked' <?php echo $data['GroupSet7008']; ?>></td>
                                    <td class="align-top text-left">รายงานแผน/ผล ต. ภารกิจด้านการค้าและการสำรอง</td>
                                </tr>
                                <tr>
                                    <td class="align-top text-center"><input type='checkbox' name='GroupSet7009' value='checked' <?php echo $data['GroupSet7009']; ?>></td>
                                    <td class="align-top text-left">รายงานแผน/ผล ต. สำหรับสำนักงานพลังงานจังหวัด</td>
                                </tr>

                                <tr>
                                    <td class="align-top text-center"><input type='checkbox' name='GroupSet80' value='checked' <?php echo $data['GroupSet80']; ?>></td>
                                    <td class="align-top text-left"><b>[Main] ระบบติดตามและประเมินผล</b></td>
                                </tr>
                                <tr>
                                    <td class="align-top text-center"><input type='checkbox' name='GroupSet6004P' value='checked' <?php echo $data['GroupSet6004P']; ?>></td>
                                    <td class="align-top text-left">ตรวจสอบแผนการใช้งบประมาณ (โครงการ)</td>
                                </tr>
                                <tr>
                                    <td class="align-top text-center"><input type='checkbox' name='GroupSet6005P' value='checked' <?php echo $data['GroupSet6005P']; ?>></td>
                                    <td class="align-top text-left">ตรวจสอบแผนการใช้งบประมาณ (ทั่วไป)</td>
                                </tr>
                                <tr>
                                    <td class="align-top text-center"><input type='checkbox' name='GroupSet8001' value='checked' <?php echo $data['GroupSet7009']; ?>></td>
                                    <td class="align-top text-left">ติดตามผลโครงการ</td>
                                </tr>
                                <tr>
                                    <td class="align-top text-center"><input type='checkbox' name='GroupSet8002' value='checked' <?php echo $data['GroupSet8002']; ?>></td>
                                    <td class="align-top text-left">ติดตามผล ต. ง. (ส่วนกลาง)</td>
                                </tr>
                                <tr>
                                    <td class="align-top text-center"><input type='checkbox' name='GroupSet8003' value='checked' <?php echo $data['GroupSet8003']; ?>></td>
                                    <td class="align-top text-left">ติดตามผล ต. ง. (สพจ.)</td>
                                </tr>
                                <tr>
                                    <td class="align-top text-center"><input type='checkbox' name='GroupSet8004' value='checked' <?php echo $data['GroupSet8004']; ?>></td>
                                    <td class="align-top text-left">ตรวจสอบและพิจารณาเผยแพร่ผลการติดตามประเมินผลประจำเดือน</td>
                                </tr>

                                <tr>
                                    <td class="align-top text-center"><input type='checkbox' name='GroupSet900' value='checked' <?php echo $data['GroupSet900']; ?>></td>
                                    <td class="align-top text-left"><b>[Main] รายงานสำหรับผู้ปฏิบัติงาน</b></td>
                                </tr>
                                <tr>
                                    <td class="align-top text-center"><input type='checkbox' name='GroupSet901' value='checked' <?php echo $data['GroupSet901']; ?>></td>
                                    <td class="align-top text-left"><b>[Main] ส่วนประมวลข้อมูลรายงาน ด้านแผนและยุทธศาสตร์องค์กร</b></td>
                                </tr>
                                <tr>
                                    <td class="align-top text-center"><input type='checkbox' name='GroupSet902' value='checked' <?php echo $data['GroupSet902']; ?>></td>
                                    <td class="align-top text-left"><b>[Main] รายงานสำหรับผู้บริหารและรายงานเชิงภูมิศาสตร์สารสนเทศ</b></td>
                                </tr>
                                <tr>
                                    <td class="align-top text-center"><input type='checkbox' name='GroupSet903' value='checked' <?php echo $data['GroupSet903']; ?>></td>
                                    <td class="align-top text-left"><b>[Main] รายงานสรุปสถิติเชิงบริหารจัดการ</b></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="col-sm-12 text-right">
                <input name="btnSave" id="btnSave" type="submit" class="btn btn-info" value="ยืนยันข้อมูล" onclick="javascript:return formCheck();">
                <button type="reset" class="btn btn-secondary" value="reset" onclick="window.location='<?php echo base_url(); ?>/<?= $routeGroup ?>'"><i class="fas fa-reply"></i> กลับสู่หน้าหลัก</button>
            </div>
        </div>
    </form>
</div>

<?= $this->endSection(); ?>

<?= $this->section("javascripts"); ?>
<script>
    function formCheck() {
        var GroupNameTH = document.getElementById('GroupNameTH').value;
        var GroupNameEN = document.getElementById('GroupNameEN').value;

        if (GroupNameTH.trim() == '') {
            alert('กรุณากรอกชื่อภาษาไทย');
            document.getElementById('GroupNameTH').focus();
            return false;
        } else if (GroupNameEN.trim() == '') {
            alert('กรุณากรอกชื่อภาษาอังกฤษ');
            document.getElementById('GroupNameEN').focus();
            return false;
        } else {
            document.form_ID.submit();
            return true;
        }
    }

    function isThaichar(str, obj) {
        var isThai = true;
        var orgi_text = " ๅภถุึคตจขชๆไำพะัีรนยบลฃฟหกดเ้่าสวงผปแอิืทมใฝ๑๒๓๔ู฿๕๖๗๘๙๐ฎฑธํ๊ณฯญฐฅฤฆฏโฌ็๋ษศซฉฮฺ์ฒฬฦ0123456789-.";
        var chk_text = str.split("");
        chk_text.filter(function(s) {
            if (orgi_text.indexOf(s) == -1) {
                isThai = false;
                obj.value = str.replace(RegExp(s, "g"), '');
            }
        });
        return isThai; // ถ้าเป็น true แสดงว่าเป็นภาษาไทยทั้งหมด*/
    }

    function isEngchar(str, obj) {
        var isThai = true;
        var orgi_text = " ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefighjklmnopqrstuvwxyz0123456789-.";
        var chk_text = str.split("");
        chk_text.filter(function(s) {
            if (orgi_text.indexOf(s) == -1) {
                isThai = false;
                obj.value = str.replace(RegExp(s, "g"), '');
            }
        });
        return isThai; // ถ้าเป็น true แสดงว่าเป็นภาษาไทยทั้งหมด*/
    }

    var fncSubmit = function() {
        $("#frm").submit();
    }
    $(document).ready(function() {
        // console.log("Document ready page Add");
        /*
        $("#btnSave").on("click", function() {
            confirmPopup("กรุณายืนยันบันทึกข้อมูล", "บันทึกข้อมูล", "ยกเลิก", fncSubmit);
        });
        */
    })

    $(window).on("load", function() {
        /*
        $('[name=date_receive_report]').daterangepicker({
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
    });
</script>
<?= $this->endSection(); ?>