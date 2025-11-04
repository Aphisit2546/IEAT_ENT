<?= $this->extend('layouts/main') ?>

<?= $this->section("content"); ?>

<div class="class_header_page_02">
    <br />
    ผลการปฏิบัติงานกองความปลอดภัยธุรกิจก๊าซปิโตรเลียมเหลว
    <hr />
</div>
<div class="row">
    <form name"frm" id="frm" class="form-horizontal" action="<?php echo base_url(); ?>/<?= $routeGroup ?>/<?= $action_page ?>" method="post">
        <input type="hidden" name="MonthlyResultActivity_Id" id="MonthlyResultActivity_Id" value="<?php echo $data['MonthlyResultActivity_Id']; ?>" readonly />
        <?= csrf_field() ?>
        <div class="row text-left">
            <div class="col-md-12">
                <div class="form-group row">
                    <div class="col-12">
                        <font style="font-size: 20px;">รายงานประจำเดือน</font>
                        <?php echo form_dropdown('Monthly_report', $dropdown_year_report, $data["Monthly_report"], "class='form form-control' id='Monthly_report' "); ?>
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
                    <th class="align-middle text-center" width='10%'>
                        <font color='white'>ข้อมูล ณ เดือน</font>
                    </th>
                    <th class="align-middle text-center" width='20%'>
                        <font color='white'>หน่วยนับ</font>
                    </th>
                </tr>
            </thead>

            <tbody>
                <?php $seq_row = 1; ?>
                <?php $seq_var = 0; ?>
                <?php foreach ($lstData_mapping as $lstData_mapping_result): ?>
                    <tr>
                        <td class="align-top text-left"><?php echo $lstData_mapping_result['name']; ?></td>
                        <td class="align-top text-center"><input class="form-control" type='text' name='<?php echo $seq_row; ?>_<?php echo $lstData_mapping_result['variable_name']; ?>' id='<?php echo $seq_row; ?>_<?php echo $lstData_mapping_result['variable_name']; ?>' value='<?php echo $data['month_1'][$seq_var]['data_value']; ?>' " onkeyup=" dokeyupMoney(this);" onchange="dokeyupMoney(this);" onkeypress="checknumberMoney()" oninput="updateColumn3(this)"></td>

                        <td class="align-top text-center">
                            <input type="hidden" name="<?php echo $seq_row; ?>_MonthlyResultActivityDetail_Id" id="<?php echo $seq_row; ?>_MonthlyResultActivityDetail_Id" value="<?php echo $data['month_1'][$seq_var]['MonthlyResultActivityDetail_Id']; ?>" readonly />
                            <?php echo $lstData_mapping_result['unit_name']; ?>
                        </td>
                    </tr>
                    <?php $seq_row++; ?>
                    <?php $seq_var++; ?>
                <?php endforeach; ?>

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

    function updateColumn3(element) {
        // ค้นหา Element ของแถวปัจจุบัน (<tr>) ที่เป็น Parent ของช่อง input นี้
        const row = element.closest('tr');

        // ค้นหาช่อง input ของ Column 1, Column 2 และ Column 3 ในแถวเดียวกัน
        const col0Input = row.querySelector('input[id="data_entry_old"]');
        const col1Input = row.querySelector('input[id="data_entry"]');
        const col2Input = row.querySelector('input[id="data_entry_new"]');

        // ดึงค่าจาก Column 1 และ Column 2 (ใช้ค่าว่างถ้ายังไม่มีการกรอก)
        const val0 = col0Input.value || '';
        const val1 = col1Input.value || '';
        const val2 = col2Input.value || '';

        // --- กำหนดวิธีการรวมค่าที่นี่ ---
        // ตัวอย่างที่ 1: รวมแบบต่อข้อความ (Concatenation)
        //col3Output.value = val1 + val2;

        // ตัวอย่างที่ 2: รวมแบบบวกตัวเลข (ถ้าต้องการให้เป็นตัวเลข)
        const num0 = parseFloat(val0) || 0;
        const num1 = parseFloat(val1) || 0; // แปลงเป็นตัวเลข ถ้าไม่ใช่ให้เป็น 0
        const num2 = parseFloat(val2.replace(/,/g, '')) || 0;
        var value_before = num0 + num1;
        let formattedWithTwoDecimals = new Intl.NumberFormat('en-US', {
            minimumFractionDigits: 2, // กำหนดให้มีทศนิยมอย่างน้อย 2 ตำแหน่ง
            maximumFractionDigits: 2 // กำหนดให้มีทศนิยมอย่างมาก 2 ตำแหน่ง (จะมีการปัดเศษให้)
        }).format(value_before);

        col2Input.value = formattedWithTwoDecimals;

        // เรียกฟังก์ชันเพื่ออัปเดตยอดรวมทั้งหมด
        //updateGrandTotal();
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