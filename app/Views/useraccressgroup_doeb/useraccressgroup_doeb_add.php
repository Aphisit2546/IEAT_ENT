<?= $this->extend('layouts/main') ?>

<?= $this->section("content"); ?>

<div class="class_header_page_02">
    <br />
    จัดการข้อมูลผู้ใช้งาน
    <hr />
</div>
<div class="row">
    <form id="frm" class="form-horizontal" action="<?php echo base_url(); ?>/<?= $routeGroup ?>/<?= $action_page ?>" method="post">
        <input type="hidden" name="GroupUserMapping_id" id="GroupUserMapping_id" value="<?php echo $data['GroupUserMapping_id']; ?>" readonly />
        <?= csrf_field() ?>
        <div class="row text-left">
            <div class="col-md-12">
                <div class="form-group row">
                    <div class="col-12">
                        <table class="table table-bordered table-hover">
                            <tbody>
                                <tr>
                                    <td width='40%' class="align-top text-left"><b>ชื่อผู้ใช้งาน</b></td>
                                    <td class="align-top text-left"><?php echo $data['AccountName']; ?></td>
                                </tr>
                                <tr>
                                    <td class="align-top text-left"><b>หน่วยงาน</b></td>
                                    <td class="align-top text-left"><?php echo $data['AgencyNameTH']; ?></td>
                                </tr>
                                <tr>
                                    <td class="align-top text-left"><b>กำหนดสิทธิ์กลุ่มการใช้งาน</b></td>
                                    <td class="align-top text-left">
                                        <?php echo form_dropdown('GroupID', $dropdown_GroupID, $data["GroupID"], "class='form form-control' "); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-top text-left"><b>ประเภทกลุ่มผู้ใช้งาน</b></td>
                                    <td class="align-top text-left">
                                        <?php echo form_dropdown('GroupTypeID', $dropdown_GroupTypeID, $data["GroupTypeID"], "class='form form-control' "); ?>
                                    </td>
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