<?= $this->extend('layouts/main') ?>

<?= $this->section("content"); ?>

<div class="class_header_page_02">
    <br />
    จัดทำ/ปรับปรุงแผนการใช้งบประมาณ (ทั่วไป)
    <hr />
</div>
<div class="row">
    <form name"frm" id="frm" class="form-horizontal" action="<?php echo base_url(); ?>/<?= $routeGroup ?>/<?= $action_page ?>" method="post">
        <input type="hidden" name="DraftBudgetControlDetail_id" id="DraftBudgetControlDetail_id" value="<?php echo $data['DraftBudgetControlDetail_id']; ?>" readonly />
        <?= csrf_field() ?>
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <td class="align-top text-left" width='35%'><b>ชื่อกิจกรรม</b></td>
                    <td class="align-top text-center"><?php echo $data['NameActivity']; ?></td>
                </tr>
                <tr>
                    <td class="align-top text-left"><b>งบประมาณที่ได้รับการจัดสรร (บาท)</b></td>
                    <td class="align-top text-center"><?= number_format($data["Budget02"], 2) ?></td>
                </tr>
            </tbody>
        </table>
        <hr />
        <?php
        $seq = 1;
        if (!empty($data['DraftBudgetControlDetailSub'])):
            foreach ($data['DraftBudgetControlDetailSub'] as $result_data_set1):
        ?>
                <input type="hidden" name="DraftBudgetControlDetailSub_id[]" id="DraftBudgetControlDetailSub_id[]" value="<?php echo $result_data_set1['DraftBudgetControlDetailSub_id']; ?>" readonly />
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td class="align-top text-left" width='20%'><b>รายการที่ <?php echo $seq++; ?></b></td>
                            <td class="align-top text-center"><?php echo $result_data_set1['NameDetail']; ?></td>
                        </tr>
                </table>
                <table class="table table-bordered">
                    <tbody>
                        <tr class="bg_th">
                            <td class="align-top text-center" width='10%'>
                                <font color='white'>เดือน</font>
                            </td>
                            <td class="align-top text-center">
                                <font color='white'>ต.ค.</font>
                            </td>
                            <td class="align-top text-center">
                                <font color='white'>พ.ย.</font>
                            </td>
                            <td class="align-top text-center">
                                <font color='white'>ธ.ค.</font>
                            </td>
                            <td class="align-top text-center">
                                <font color='white'>ม.ค.</font>
                            </td>
                            <td class="align-top text-center">
                                <font color='white'>ก.พ.</font>
                            </td>
                            <td class="align-top text-center">
                                <font color='white'>มี.ค.</font>
                            </td>
                            <td class="align-top text-center">
                                <font color='white'>เม.ย.</font>
                            </td>
                            <td class="align-top text-center">
                                <font color='white'>พ.ค.</font>
                            </td>
                            <td class="align-top text-center">
                                <font color='white'>มิ.ย.</font>
                            </td>
                            <td class="align-top text-center">
                                <font color='white'>ก.ค.</font>
                            </td>
                            <td class="align-top text-center">
                                <font color='white'>ส.ค.</font>
                            </td>
                            <td class="align-top text-center">
                                <font color='white'>ก.ย.</font>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-top text-center">จำนวนเงิน</td>
                            <td class="align-top text-center"><input size='6' type='text' name='month01[]' value='<?php if ($result_data_set1['month01'] != '' && $result_data_set1['month01'] != null) {
                                                                                                                        echo number_format($result_data_set1['month01'], 2);
                                                                                                                    } ?>' onkeyup="dokeyupMoney(this);" onchange="dokeyupMoney(this);" onkeypress="checknumberMoney()"></td>

                            <td class="align-top text-center"><input size='6' type='text' name='month02[]' value='<?php if ($result_data_set1['month02'] != '' && $result_data_set1['month02'] != null) {
                                                                                                                        echo number_format($result_data_set1['month02'], 2);
                                                                                                                    } ?>' onkeyup="dokeyupMoney(this);" onchange="dokeyupMoney(this);" onkeypress="checknumberMoney()"></td>

                            <td class="align-top text-center"><input size='6' type='text' name='month03[]' value='<?php if ($result_data_set1['month03'] != '' && $result_data_set1['month03'] != null) {
                                                                                                                        echo number_format($result_data_set1['month03'], 2);
                                                                                                                    } ?>' onkeyup="dokeyupMoney(this);" onchange="dokeyupMoney(this);" onkeypress="checknumberMoney()"></td>

                            <td class="align-top text-center"><input size='6' type='text' name='month04[]' value='<?php if ($result_data_set1['month04'] != '' && $result_data_set1['month04'] != null) {
                                                                                                                        echo number_format($result_data_set1['month04'], 2);
                                                                                                                    } ?>' onkeyup="dokeyupMoney(this);" onchange="dokeyupMoney(this);" onkeypress="checknumberMoney()"></td>

                            <td class="align-top text-center"><input size='6' type='text' name='month05[]' value='<?php if ($result_data_set1['month05'] != '' && $result_data_set1['month05'] != null) {
                                                                                                                        echo number_format($result_data_set1['month05'], 2);
                                                                                                                    } ?>' onkeyup="dokeyupMoney(this);" onchange="dokeyupMoney(this);" onkeypress="checknumberMoney()"></td>

                            <td class="align-top text-center"><input size='6' type='text' name='month06[]' value='<?php if ($result_data_set1['month06'] != '' && $result_data_set1['month06'] != null) {
                                                                                                                        echo number_format($result_data_set1['month06'], 2);
                                                                                                                    } ?>' onkeyup="dokeyupMoney(this);" onchange="dokeyupMoney(this);" onkeypress="checknumberMoney()"></td>
                            <td class="align-top text-center"><input size='6' type='text' name='month07[]' value='<?php if ($result_data_set1['month07'] != '' && $result_data_set1['month07'] != null) {
                                                                                                                        echo number_format($result_data_set1['month07'], 2);
                                                                                                                    } ?>' onkeyup="dokeyupMoney(this);" onchange="dokeyupMoney(this);" onkeypress="checknumberMoney()"></td>

                            <td class="align-top text-center"><input size='6' type='text' name='month08[]' value='<?php if ($result_data_set1['month08'] != '' && $result_data_set1['month08'] != null) {
                                                                                                                        echo number_format($result_data_set1['month08'], 2);
                                                                                                                    } ?>' onkeyup="dokeyupMoney(this);" onchange="dokeyupMoney(this);" onkeypress="checknumberMoney()"></td>

                            <td class="align-top text-center"><input size='6' type='text' name='month09[]' value='<?php if ($result_data_set1['month09'] != '' && $result_data_set1['month09'] != null) {
                                                                                                                        echo number_format($result_data_set1['month09'], 2);
                                                                                                                    } ?>' onkeyup="dokeyupMoney(this);" onchange="dokeyupMoney(this);" onkeypress="checknumberMoney()"></td>

                            <td class="align-top text-center"><input size='6' type='text' name='month10[]' value='<?php if ($result_data_set1['month10'] != '' && $result_data_set1['month10'] != null) {
                                                                                                                        echo number_format($result_data_set1['month10'], 2);
                                                                                                                    } ?>' onkeyup="dokeyupMoney(this);" onchange="dokeyupMoney(this);" onkeypress="checknumberMoney()"></td>

                            <td class="align-top text-center"><input size='6' type='text' name='month11[]' value='<?php if ($result_data_set1['month11'] != '' && $result_data_set1['month11'] != null) {
                                                                                                                        echo number_format($result_data_set1['month11'], 2);
                                                                                                                    } ?>' onkeyup="dokeyupMoney(this);" onchange="dokeyupMoney(this);" onkeypress="checknumberMoney()"></td>

                            <td class="align-top text-center"><input size='6' type='text' name='month12[]' value='<?php if ($result_data_set1['month12'] != '' && $result_data_set1['month12'] != null) {
                                                                                                                        echo number_format($result_data_set1['month12'], 2);
                                                                                                                    } ?>' onkeyup="dokeyupMoney(this);" onchange="dokeyupMoney(this);" onkeypress="checknumberMoney()"></td>

                        </tr>
                    </tbody>
                </table>
            <?php endforeach; ?>
        <?php endif; ?>
        <div class="row text-left">
            <div class="col-md-12">
                <div class="form-group row">
                    <div class="col-12">
                        หมายเหตุ
                        <textarea name='Remarks' rows='5' class='form-control'><?php echo $result_data_set1['Remarks']; ?></textarea>
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