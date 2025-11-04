<?= $this->extend('layouts/main') ?>

<?= $this->section("content"); ?>

<div class="class_header_page_02">
    <br />
    ผลการปฏิบัติงานกองความปลอดภัยธุรกิจก๊าซธรรมชาติ
    <hr />
</div>
<div class="row">
    <form name"frm" id="frm" class="form-horizontal" action="<?php echo base_url(); ?>/<?= $routeGroup ?>/<?= $action_page ?>" method="post">
        <input type="hidden" name="Report_02_id" id="Report_02_id" value="<?php echo $data['Report_02_id']; ?>" readonly />
        <?= csrf_field() ?>
        <div class="row text-left">
            <div class="col-md-12">
                <div class="form-group row">
                    <div class="col-3">
                        รหัสอ้างอิง
                        <input type="text" class='form-control' name="TypeBudgetCode" id="code_ref" value="<?php echo $data['TypeBudgetCode']; ?>" readonly />
                    </div>
                    <div class="col-3">
                        วันที่ปรับปรุงข้อมูลล่าสุด
                        <input type="text" class='form-control' name="ModifyDate" id="ModifyDate" value="<?php echo $data['ModifyDate']; ?>" readonly />
                    </div>
                </div>
            </div>
        </div>
        <hr />
        <div class="row text-left">
            <div class="col-md-12">
                <div class="form-group row">
                    <div class="col-12">
                        รายงานประจำเดือน
                        <select name='start_date'>
                            <option>--เลือก--</option>
                        </select>
                        <font color='red'>**ภายในวันที่ 1 - 5 ของเดือนถัดไป</font>
                    </div>
                </div>
            </div>
        </div>
        <table class="table table-bordered table-hover">
            <thead>
                <tr class="bg_th">
                    <th class="align-middle text-center" width='40%'>
                        <font color='white'>รายการปฏิบัติงาน</font>
                    </th>
                    <th class="align-middle text-center" width='15%'>
                        <font color='white'>ข้อมูลสะสม</font>
                    </th>
                    <th class="align-middle text-center" width='10%'>
                        <font color='white'>ข้อมูล ณ เดือน</font>
                    </th>
                    <th class="align-middle text-center" width='15%'>
                        <font color='white'>รวมข้อมูลสะสม</font>
                    </th>
                    <th class="align-middle text-center" width='20%'>
                        <font color='white'>หน่วยนับ</font>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="align-top text-left">ตรวจขอใบอนุญาตใหม่</td>
                    <td class="align-top text-center">10</td>
                    <td class="align-top text-center"><input class="form-control" type='text' name='data_entry_01' value=''></td>
                    <td class="align-top text-center">10</td>
                    <td class="align-top text-center">ใบอนุญาต</td>
                </tr>
                <tr>
                    <td class="align-top text-left">ตรวจต่ออายุใบอนุญาต</td>
                    <td class="align-top text-center">5</td>
                    <td class="align-top text-center"><input class="form-control" type='text' name='data_entry_01' value=''></td>
                    <td class="align-top text-center">5</td>
                    <td class="align-top text-center">ใบอนุญาต</td>
                </tr>
                <tr>
                    <td class="align-top text-left">ตรวจครบวาระ</td>
                    <td class="align-top text-center">2</td>
                    <td class="align-top text-center"><input class="form-control" type='text' name='data_entry_01' value=''></td>
                    <td class="align-top text-center">2</td>
                    <td class="align-top text-center">รายงาน</td>
                </tr>
                <tr>
                    <td class="align-top text-left">ตรวจตรา</td>
                    <td class="align-top text-center">3</td>
                    <td class="align-top text-center"><input class="form-control" type='text' name='data_entry_01' value=''></td>
                    <td class="align-top text-center">3</td>
                    <td class="align-top text-center">รายงาน</td>
                </tr>
                <tr>
                    <td class="align-top text-left">ใบโอน/ใบแทน</td>
                    <td class="align-top text-center">1</td>
                    <td class="align-top text-center"><input class="form-control" type='text' name='data_entry_01' value=''></td>
                    <td class="align-top text-center">1</td>
                    <td class="align-top text-center">ใบอนุญาต</td>
                </tr>
                <tr>
                    <td class="align-top text-left">แก้ไขเปลี่ยนแปลง</td>
                    <td class="align-top text-center">5</td>
                    <td class="align-top text-center"><input class="form-control" type='text' name='data_entry_01' value=''></td>
                    <td class="align-top text-center">5</td>
                    <td class="align-top text-center">ใบอนุญาต</td>
                </tr>
                <tr>
                    <td class="align-top text-left">ออกใบรับแจ้ง</td>
                    <td class="align-top text-center">2</td>
                    <td class="align-top text-center"><input class="form-control" type='text' name='data_entry_01' value=''></td>
                    <td class="align-top text-center">2</td>
                    <td class="align-top text-center">ใบรับแจ้ง</td>
                </tr>
            </tbody>
        </table>
        <div class="row text-left">
            <div class="col-md-12">
                <div class="form-group row">
                    <div class="col-12">
                        หมายเหตุ
                        <textarea name='Remarks' rows='5' class='form-control'><?php echo $data['Remarks']; ?></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-sm-12 text-right">
                <input name="btnSave" id="btnSave" type="submit" class="btn btn-success" value="บันทึกข้อมูล" onclick="javascript:return formCheck();">
                <input name="btnSave_Confirm" id="btnSave_Confirm" type="submit" class="btn btn-info" value="ยืนยันข้อมูล" onclick="javascript:return formCheck();">
                <button type="reset" class="btn btn-secondary" value="reset" onclick="window.location='<?php echo base_url(); ?>/<?= $routeGroup ?>'"><i class="fas fa-reply"></i> กลับสู่หน้าหลัก</button>
            </div>
        </div>
        <br />
    </form>

</div>

<?= $this->endSection(); ?>

<?= $this->section("javascripts"); ?>
<script>
    function formCheck() {
        var name_th = document.getElementById('name_th').value;
        var name_en = document.getElementById('name_en').value;

        if (name_th.trim() == '') {
            alert('กรุณากรอกชื่อภาษาไทย');
            document.getElementById('name_th').focus();
            return false;
        } else if (name_en.trim() == '') {
            alert('กรุณากรอกชื่อภาษาอังกฤษ');
            document.getElementById('name_en').focus();
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

    let startDate = document.getElementById('start_plan')
    let endDate = document.getElementById('finish_plan')

    startDate.addEventListener('change', (e) => {
        let startDateVal = e.target.value
        document.getElementById('start_plan').innerText = startDateVal
    })

    endDate.addEventListener('change', (e) => {
        let endDateVal = e.target.value
        document.getElementById('finish_plan').innerText = endDateVal
    })

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