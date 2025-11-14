<?= $this->extend('layouts/main') ?>

<?= $this->section("content"); ?>

<div class="class_header_page_02">
    <br />
    รายงานความก้าวหน้างานโครงการตามแผนงบประมาณประจำปี
    <hr />
</div>
<div class="row">
    <form name"frm" id="frm" class="form-horizontal" action="<?php echo base_url(); ?>/<?= $routeGroup ?>/<?= $action_page ?>" method="post">
        <input type="hidden" name="OverAllPlanStrategy_id" id="OverAllPlanStrategy_id" value="<?php echo $OverAllPlanStrategy_id; ?>" />
        <?= csrf_field() ?>
        <div class="row text-left">
            <div class="col-md-12">
                <div class="form-group row">
                    <div class="col-12">
                        <font style="font-size: 20px;">สร้างรายงานประจำเดือน</font>
                        <?php echo form_dropdown('Monthly_report', $dropdown_year_report, $data["Monthly_report"], "class='form form-control' id='Monthly_report' "); ?>
                        <font color='red'>**ภายในวันที่ 1 - 5 ของเดือนถัดไป</font>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-sm-12 text-right">
                <input name="btnSave_Confirm" id="btnSave_Confirm" type="submit" class="btn btn-info" value="สร้างรายงานประจำเดือน" onclick="javascript:return formCheck();">
                <button type="reset" class="btn btn-secondary" value="reset" onclick="window.location='<?php echo base_url(); ?>/<?= $routeGroup ?>'"><i class="fas fa-reply"></i> กลับสู่หน้าหลัก</button>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-md-12">
                <div class="card card-gray">
                    <div class="card-header">
                        <h3 class="card-title">รายการข้อมูลรายงานประจำเดือน</h3>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr class="align-middle">
                                        <th rowspan='2' class="align-middle text-center" width="5%">#</th>
                                        <th colspan='4' class="align-middle text-center">ความก้าวหน้างานสะสม</th>
                                        <th rowspan='2' class="align-middle text-center">เดือนที่รายงาน</th>
                                        <th rowspan='2' class="align-middle text-center">เลือก</th>
                                    </tr>
                                    <tr class="align-middle">
                                        <th class="align-middle text-center">งาน ณ เดือน</th>
                                        <th class="align-middle text-center">งานสะสม</th>
                                        <th class="align-middle text-center">ยอดเบิกจ่าย<br />ณ เดือน (บาท)</th>
                                        <th class="align-middle text-center">รวมเบิกจ่าย (บาท)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $rowIndx = 1;
                                    if (!empty($lstData)) {
                                        foreach ($lstData as $item) :
                                    ?>
                                            <tr>
                                                <td class="align-top text-center"><?= $rowIndx++; ?></td>
                                                <td class="align-top text-center">
                                                    <?php if (!empty($item["SumWorkNow"])): ?>
                                                        <?= number_format($item["SumWorkNow"], 2); ?>
                                                    <?php else: ?>
                                                        -
                                                    <?php endif; ?>
                                                </td>
                                                <td class="align-top text-center">
                                                    <?php if (!empty($item["SumTotalAccumulateWork"])): ?>
                                                        <?= number_format($item["SumTotalAccumulateWork"], 2); ?>
                                                    <?php else: ?>
                                                        -
                                                    <?php endif; ?>
                                                </td>
                                                <td class="align-top text-right">
                                                    <?php if (!empty($item["SumDisbursementNow"])): ?>
                                                        <?= number_format($item["SumDisbursementNow"], 2); ?>
                                                    <?php else: ?>
                                                        -
                                                    <?php endif; ?>
                                                </td>
                                                <td class="align-top text-right">
                                                    <?php if (!empty($item["SumTotalAccumulateDisbursement"])): ?>
                                                        <?= number_format($item["SumTotalAccumulateDisbursement"], 2); ?>
                                                    <?php else: ?>
                                                        -
                                                    <?php endif; ?>
                                                </td>
                                                <td class="align-top text-center"><?= $item["MonthReportThai"] ?> <?= $item["YearReport"] ?></td>
                                                <td class="align-top text-center">
                                                    <?php if ($item["ActiveStatus"] == 'Y'): ?>
                                                        <a id="btnView" class="btn btn-primary" onclick="window.open('<?php echo base_url(); ?>Report_01_doeb/view/<?= $item["MonthlyProject_id"] ?>', '_blank', 'width=1200,height=550,scrollbars=1');">ดูรายละเอียดข้อมูล</a>
                                                    <?php else: ?>
                                                        <a id="btnEdit" class="btn btn-warning" href="<?php echo base_url(); ?>Report_01_doeb/edt/<?= $item["MonthlyProject_id"] ?>"><i class="fas fa-edit"></i> แก้ไข</a>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                        <?php
                                        endforeach;
                                    } else {
                                        ?>
                                        <tr>
                                            <td colspan="13" class="align-top text-center">
                                                <font color="red">-- ไม่มีรายการข้อมูล --</font>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </form>

</div>

<?= $this->endSection(); ?>

<?= $this->section("javascripts"); ?>
<script>
    const checkbox = document.getElementById('hideDivCheckbox');
    const myDiv = document.getElementById('myDiv');

    checkbox.addEventListener('change', function() {
        // ถ้า Checkbox ถูกเลือก (this.checked เป็น true)
        // ให้เพิ่ม class 'hidden' เข้าไปใน myDiv
        // ถ้า Checkbox ไม่ถูกเลือก (this.checked เป็น false)
        // ให้ลบ class 'hidden' ออกจาก myDiv
        if (this.checked) {
            myDiv.classList.add('hidden'); // เพิ่ม class 'hidden' เพื่อซ่อน
        } else {
            myDiv.classList.remove('hidden'); // ลบ class 'hidden' เพื่อแสดง
        }
    });

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
        const col0Input = row.querySelector('input[id="AccumulateWork"]');
        const col1Input = row.querySelector('input[id="WorkNow"]');
        const col2Input = row.querySelector('input[id="TotalAccumulateWork"]');

        // ดึงค่าจาก Column 1 และ Column 2 (ใช้ค่าว่างถ้ายังไม่มีการกรอก)
        const val0 = col0Input.value || '';
        const val1 = col1Input.value || '';

        // --- กำหนดวิธีการรวมค่าที่นี่ ---
        // ตัวอย่างที่ 1: รวมแบบต่อข้อความ (Concatenation)
        //col3Output.value = val1 + val2;

        // ตัวอย่างที่ 2: รวมแบบบวกตัวเลข (ถ้าต้องการให้เป็นตัวเลข)
        const num0 = parseFloat(val0) || 0;
        const num1 = parseFloat(val1.replace(/,/g, '')) || 0;

        var value_before = num0 + num1;
        let formattedWithTwoDecimals = new Intl.NumberFormat('en-US', {
            minimumFractionDigits: 2, // กำหนดให้มีทศนิยมอย่างน้อย 2 ตำแหน่ง
            maximumFractionDigits: 2 // กำหนดให้มีทศนิยมอย่างมาก 2 ตำแหน่ง (จะมีการปัดเศษให้)
        }).format(value_before);

        col2Input.value = formattedWithTwoDecimals;

        // เรียกฟังก์ชันเพื่ออัปเดตยอดรวมทั้งหมด
        //updateGrandTotal();
    }

    function updateColumn4(element) {
        // ค้นหา Element ของแถวปัจจุบัน (<tr>) ที่เป็น Parent ของช่อง input นี้
        const row = element.closest('tr');

        // ค้นหาช่อง input ของ Column 1, Column 2 และ Column 3 ในแถวเดียวกัน
        const col0Input = row.querySelector('input[id="AccumulateDisbursement"]');
        const col1Input = row.querySelector('input[id="DisbursementNow"]');
        const col2Input = row.querySelector('input[id="TotalAccumulateDisbursement"]');

        // ดึงค่าจาก Column 1 และ Column 2 (ใช้ค่าว่างถ้ายังไม่มีการกรอก)
        const val0 = col0Input.value || '';
        const val1 = col1Input.value || '';

        // --- กำหนดวิธีการรวมค่าที่นี่ ---
        // ตัวอย่างที่ 1: รวมแบบต่อข้อความ (Concatenation)
        //col3Output.value = val1 + val2;

        // ตัวอย่างที่ 2: รวมแบบบวกตัวเลข (ถ้าต้องการให้เป็นตัวเลข)
        const num0 = parseFloat(val0) || 0;
        const num1 = parseFloat(val1.replace(/,/g, '')) || 0;

        var value_before = num0 + num1;
        let formattedWithTwoDecimals = new Intl.NumberFormat('en-US', {
            minimumFractionDigits: 2, // กำหนดให้มีทศนิยมอย่างน้อย 2 ตำแหน่ง
            maximumFractionDigits: 2 // กำหนดให้มีทศนิยมอย่างมาก 2 ตำแหน่ง (จะมีการปัดเศษให้)
        }).format(value_before);

        col2Input.value = formattedWithTwoDecimals;

        // เรียกฟังก์ชันเพื่ออัปเดตยอดรวมทั้งหมด
        //updateGrandTotal();
    }

    function updateColumn5(element) {
        // ค้นหา Element ของแถวปัจจุบัน (<tr>) ที่เป็น Parent ของช่อง input นี้
        const row = element.closest('tr');

        // ค้นหาช่อง input ของ Column 1, Column 2 และ Column 3 ในแถวเดียวกัน
        const col0Input = row.querySelector('input[id="AccumulateKPI"]');
        const col1Input = row.querySelector('input[id="KPINow"]');
        const col2Input = row.querySelector('input[id="TotalKPI"]');

        // ดึงค่าจาก Column 1 และ Column 2 (ใช้ค่าว่างถ้ายังไม่มีการกรอก)
        const val0 = col0Input.value || '';
        const val1 = col1Input.value || '';

        // --- กำหนดวิธีการรวมค่าที่นี่ ---
        // ตัวอย่างที่ 1: รวมแบบต่อข้อความ (Concatenation)
        //col3Output.value = val1 + val2;

        // ตัวอย่างที่ 2: รวมแบบบวกตัวเลข (ถ้าต้องการให้เป็นตัวเลข)
        const num0 = parseFloat(val0) || 0;
        const num1 = parseFloat(val1.replace(/,/g, '')) || 0;

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