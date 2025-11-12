<?= $this->extend('layouts/main') ?>

<?= $this->section("content"); ?>

<div class="class_header_page_02">
    <br />
    รายงานความก้าวหน้างานกิจกรรมตามแผนงบประมาณประจำปี
    <hr />
</div>
<div class="row">
    <form name"frm" id="frm" class="form-horizontal" action="<?php echo base_url(); ?>/<?= $routeGroup ?>/<?= $action_page ?>" method="post">
        <input type="hidden" name="MonthlyActivity_id" id="MonthlyActivity_id" value="<?php echo $data['MonthlyActivity_id']; ?>" readonly />
        <input type="hidden" name="DraftBudgetControlDetail_id" id="DraftBudgetControlDetail_id" value="<?php echo $data['DraftBudgetControlDetail_id']; ?>" readonly />
        <?= csrf_field() ?>
        <div class="row text-left">
            <div class="col-md-12">
                <div class="form-group row">
                    <div class="col-12">
                        <font style="font-size: 20px;">
                            รายงานประจำเดือน
                            <b><u><?php echo $data['MonthReportThai']; ?> พ.ศ. <?php echo $data['YearReport']; ?></u></b>
                        </font>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-left">
            <div class="col-md-12">
                <div class="form-group row">
                    <div class="col-12">
                        <div class="class_header_page_03">สรุปข้อมูลการรายงานความก้าวหน้า ประเด็นปัญหา และข้อแก้ไข</div>
                        <textarea name='SummarizeProject' rows='3' class='form-control'><?php echo $data['SummarizeProject']; ?></textarea>
                    </div>
                </div>
            </div>
        </div>
        <input type='checkbox' name='CheckStatusContract' value='Y' <?php if ($data['CheckStatusContract'] == 'Y'): echo "checked";
                                                                        $hide_myDiv = "display:none";
                                                                    endif; ?> id="hideDivCheckbox" /> ไม่มีการรายงานผลในส่วนนี้
        <br /><br />

        <div id="myDiv2">
            <table class="table table-bordered table-hover" style="<?php echo $hide_myDiv; ?>">
                <tbody>
                    <tr>
                        <td class="align-top text-left" width='20%'><b>วันที่อนุมัติ TOR</b></td>
                        <td class="align-top text-center"><input autocomplete="off" data-provide="datepicker" data-date-language="th-th" class='form-control' type='text' name='DateTOR' id='DateTOR' value='<?php echo $data['DateTOR']; ?>' /></td>
                        <td class="align-top text-left" width='20%'><b>วันที่ประกาศจัดซื้อจัดจ้าง</b></td>
                        <td class="align-top text-center"><input autocomplete="off" data-provide="datepicker" data-date-language="th-th" class='form-control' type='text' name='ProcurementAnnouncementDate' id='ProcurementAnnouncementDate' value='<?php echo $data['ProcurementAnnouncementDate']; ?>' /></td>
                    </tr>
                    <tr>
                        <td class="align-top text-left"><b>วันที่ได้ผู้รับจ้าง</b></td>
                        <td class="align-top text-center"><input autocomplete="off" data-provide="datepicker" data-date-language="th-th" class='form-control' type='text' name='DateReceiveContractor' id='DateReceiveContractor' value='<?php echo $data['DateReceiveContractor']; ?>' /></td>
                        <td class="align-top text-left"><b>วันที่ลงนามสัญญา</b></td>
                        <td class="align-top text-center"><input autocomplete="off" data-provide="datepicker" data-date-language="th-th" class='form-control' type='text' name='ContractSigningDate' id='ContractSigningDate' value='<?php echo $data['ContractSigningDate']; ?>' /></td>
                    </tr>
                    <tr>
                        <td class="align-top text-left"><b>วันที่เริ่มสัญญา</b></td>
                        <td class="align-top text-center"><input autocomplete="off" data-provide="datepicker" data-date-language="th-th" class='form-control' type='text' name='ContractStartDate' id='ContractStartDate' value='<?php echo $data['ContractStartDate']; ?>' /></td>
                        <td class="align-top text-left"><b>วันที่สิ้นสุดสัญญา</b></td>
                        <td class="align-top text-center"><input autocomplete="off" data-provide="datepicker" data-date-language="th-th" class='form-control' type='text' name='ContractEndDate' id='ContractEndDate' value='<?php echo $data['ContractEndDate']; ?>' /></td>
                    </tr>
                    <tr>
                        <td class="align-top text-left"><b>ข้อมูลผู้รับจ้าง</b></td>
                        <td class="align-top text-center"><input class='form-control' type='text' name='ContractorInformation' id='ContractorInformation' value='<?php echo $data['ContractorInformation']; ?>' /></td>
                        <td class="align-top text-left"><b>เลขประจำตัวผู้เสียภาษี</b></td>
                        <td class="align-top text-center"><input class='form-control' type='text' name='ContractorTaxID' id='ContractorTaxID' value='<?php echo $data['ContractorTaxID']; ?>' /></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <br />
        <div class="class_header_page_03">รายการใบสั่งซื้อ</div>
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
                    <td class="align-top text-center">เลขรายการ</td>
                    <td class="align-top text-center"><input size='6' type='text' name='PurchaseOrder01[]' value='<?php if ($result_data_set1['PurchaseOrder01'] != '' && $result_data_set1['PurchaseOrder01'] != null) {
                                                                                                                        echo number_format($result_data_set1['PurchaseOrder01'], 2);
                                                                                                                    } ?>'></td>

                    <td class="align-top text-center"><input size='6' type='text' name='PurchaseOrder02[]' value='<?php if ($result_data_set1['PurchaseOrder02'] != '' && $result_data_set1['PurchaseOrder02'] != null) {
                                                                                                                        echo number_format($result_data_set1['PurchaseOrder02'], 2);
                                                                                                                    } ?>'></td>

                    <td class="align-top text-center"><input size='6' type='text' name='PurchaseOrder03[]' value='<?php if ($result_data_set1['PurchaseOrder03'] != '' && $result_data_set1['PurchaseOrder03'] != null) {
                                                                                                                        echo number_format($result_data_set1['PurchaseOrder03'], 2);
                                                                                                                    } ?>'></td>

                    <td class="align-top text-center"><input size='6' type='text' name='PurchaseOrder04[]' value='<?php if ($result_data_set1['PurchaseOrder04'] != '' && $result_data_set1['PurchaseOrder04'] != null) {
                                                                                                                        echo number_format($result_data_set1['PurchaseOrder04'], 2);
                                                                                                                    } ?>'></td>

                    <td class="align-top text-center"><input size='6' type='text' name='PurchaseOrder05[]' value='<?php if ($result_data_set1['PurchaseOrder05'] != '' && $result_data_set1['PurchaseOrder05'] != null) {
                                                                                                                        echo number_format($result_data_set1['PurchaseOrder05'], 2);
                                                                                                                    } ?>'></td>

                    <td class="align-top text-center"><input size='6' type='text' name='PurchaseOrder06[]' value='<?php if ($result_data_set1['PurchaseOrder06'] != '' && $result_data_set1['PurchaseOrder06'] != null) {
                                                                                                                        echo number_format($result_data_set1['PurchaseOrder06'], 2);
                                                                                                                    } ?>'></td>
                    <td class="align-top text-center"><input size='6' type='text' name='PurchaseOrder07[]' value='<?php if ($result_data_set1['PurchaseOrder07'] != '' && $result_data_set1['PurchaseOrder07'] != null) {
                                                                                                                        echo number_format($result_data_set1['PurchaseOrder07'], 2);
                                                                                                                    } ?>'></td>

                    <td class="align-top text-center"><input size='6' type='text' name='PurchaseOrder08[]' value='<?php if ($result_data_set1['PurchaseOrder08'] != '' && $result_data_set1['PurchaseOrder08'] != null) {
                                                                                                                        echo number_format($result_data_set1['PurchaseOrder08'], 2);
                                                                                                                    } ?>'></td>

                    <td class="align-top text-center"><input size='6' type='text' name='PurchaseOrder09[]' value='<?php if ($result_data_set1['PurchaseOrder09'] != '' && $result_data_set1['PurchaseOrder09'] != null) {
                                                                                                                        echo number_format($result_data_set1['PurchaseOrder09'], 2);
                                                                                                                    } ?>'></td>

                    <td class="align-top text-center"><input size='6' type='text' name='PurchaseOrder10[]' value='<?php if ($result_data_set1['PurchaseOrder10'] != '' && $result_data_set1['PurchaseOrder10'] != null) {
                                                                                                                        echo number_format($result_data_set1['PurchaseOrder10'], 2);
                                                                                                                    } ?>'></td>

                    <td class="align-top text-center"><input size='6' type='text' name='PurchaseOrder11[]' value='<?php if ($result_data_set1['PurchaseOrder11'] != '' && $result_data_set1['PurchaseOrder11'] != null) {
                                                                                                                        echo number_format($result_data_set1['PurchaseOrder11'], 2);
                                                                                                                    } ?>'></td>

                    <td class="align-top text-center"><input size='6' type='text' name='PurchaseOrder12[]' value='<?php if ($result_data_set1['PurchaseOrder12'] != '' && $result_data_set1['PurchaseOrder12'] != null) {
                                                                                                                        echo number_format($result_data_set1['PurchaseOrder12'], 2);
                                                                                                                    } ?>'></td>

                </tr>
            </tbody>
        </table>
        <br />
        <div class="class_header_page_03">ความก้าวหน้ากิจกรรมประจำเดือน</div>
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
                <input type="hidden" name="MonthlyActivity_Budget_id[]" id="MonthlyActivity_Budget_id[]" value="<?php echo $result_data_set1['MonthlyActivity_Budget_id']; ?>" readonly />
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
                        <textarea name='Remarks' rows='5' class='form-control'><?php echo $data['Remarks']; ?></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-sm-12 text-right">
                <input name="btnSave" id="btnSave" type="submit" class="btn btn-success" value="บันทึกข้อมูล" onclick="javascript:return formCheck();">
                <input name="btnSave_Confirm" id="btnSave_Confirm" type="submit" class="btn btn-info" value="ยืนยันข้อมูล" onclick="javascript:return formCheck();">
                <button type="reset" class="btn btn-secondary" value="reset" onclick="window.location='<?php echo base_url(); ?>/<?= $routeGroup ?>/add/<?= $data['DraftBudgetControlDetail_id']; ?>'"><i class="fas fa-reply"></i> กลับสู่หน้าหลัก</button>
            </div>
        </div>
        <br />
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