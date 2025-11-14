<?= $this->extend('layouts/main') ?>

<?= $this->section("content"); ?>

<div class="class_header_page_02">
    <br />
    รายงานความก้าวหน้างานโครงการตามแผนงบประมาณประจำปี
    <hr />
</div>
<div class="row">
    <form name"frm" id="frm" class="form-horizontal" action="<?php echo base_url(); ?>/<?= $routeGroup ?>/<?= $action_page ?>" method="post">
        <input type="hidden" name="MonthlyProject_id" id="MonthlyProject_id" value="<?php echo $data['MonthlyProject_id']; ?>" readonly />
        <input type="hidden" name="OverAllPlanStrategy_id" id="OverAllPlanStrategy_id" value="<?php echo $data['OverAllPlanStrategy_id']; ?>" readonly />
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

        <div class="class_header_page_03">ความก้าวหน้าโครงการประจำเดือน</div>
        <table class="table table-bordered table-hover">
            <thead>
                <tr class="bg_th">
                    <th class="align-middle text-center">
                        <font color='white'>ที่</font>
                    </th>
                    <th class="align-middle text-center">
                        <font color='white'>งานงวดที่</font>
                    </th>
                    <th class="align-middle text-center">
                        <font color='white'>เงินงวดที่</font>
                    </th>
                    <th class="align-middle text-center" width='10%'>
                        <font color='white'>งานสะสม<br />(ก่อนรายงาน)</font>
                    </th>
                    <th class="align-middle text-center">
                        <font color='white'>งาน ณ เดือน</font>
                    </th>
                    <th class="align-middle text-center">
                        <font color='white'>รวมผลงานสะสม</font>
                    </th>
                    <th class="align-middle text-center">
                        <font color='white'>ยอดเบิกจ่าย (บาท)</font>
                    </th>
                    <th class="align-middle text-center" width='10%'>
                        <font color='white'>เบิกจ่ายสะสม (บาท)</font>
                    </th>
                    <th class="align-middle text-center">
                        <font color='white'>ยอดเบิกจ่าย<br />ณ เดือน (บาท)</font>
                    </th>
                    <th class="align-middle text-center">
                        <font color='white'>รวมเบิกจ่าย (บาท)</font>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                $seq_01 = 1;
                foreach ($data['OverAllPlanStrategyWorkMoneyPeriod'] as $result_data_set1):
                ?>
                    <tr>
                        <td class="align-top text-center">
                            <input type="hidden" name="WorkMoneyPeriodMonthly_id[]" id="WorkMoneyPeriodMonthly_id[]" value="<?php echo $result_data_set1['WorkMoneyPeriodMonthly_id']; ?>" readonly />
                            <?php echo $seq_01++; ?>.
                        </td>
                        <td align="left" valign="middle">
                            <span class="detail">
                                <?php echo $result_data_set1['WorkMoneyPeriodNumber']; ?>
                            </span>
                        </td>
                        <td align="left" valign="middle">
                            <span class="detail">
                                <?php echo $result_data_set1['MoneyPeriod']; ?>
                            </span>
                        </td>
                        <td class="align-top text-center">
                            <?php echo $result_data_set1['AccumulateWork']; ?>
                            <input type="hidden" name="AccumulateWork[]" id="AccumulateWork" value="<?php echo $result_data_set1['AccumulateWork']; ?>" readonly />
                        </td>
                        <td class="align-top text-center"><input size='10' class="form-control" type='text' name='WorkNow[]' id='WorkNow' value='<?php if (!empty($result_data_set1['WorkNow'])): echo number_format($result_data_set1['WorkNow'], 2);
                                                                                                                                                    endif; ?>' onkeyup="dokeyupMoney(this);" onchange="dokeyupMoney(this);" onkeypress="checknumberMoney()" oninput="updateColumn3(this)"></td>
                        <td class="align-top text-center">
                            <input size='10' style="border-width: 0px; text-align: right; font-size:16px;" name="TotalAccumulateWork[]" id="TotalAccumulateWork" value="<?php echo $result_data_set1['TotalAccumulateWork']; ?>" readonly />
                        </td>
                        <td class="align-top text-right">
                            <span class="detail">
                                <?php if (!empty($result_data_set1['TotalDisbursement'])): ?>
                                    <?php echo number_format($result_data_set1['TotalDisbursement'], 2); ?>
                                <?php endif; ?>
                            </span>
                        </td>
                        <td class="align-top text-center">
                            <span class="detail">
                                <?php if (!empty($result_data_set1['AccumulateDisbursement'])): ?>
                                    <?php echo number_format($result_data_set1['AccumulateDisbursement'], 2); ?>
                                <?php endif; ?>
                            </span>
                            <input type="hidden" name="AccumulateDisbursement[]" id="AccumulateDisbursement" value="<?php echo $result_data_set1['AccumulateDisbursement']; ?>" readonly />
                        </td>
                        <td class="align-top text-center"><input size='10' class="form-control" type='text' name='DisbursementNow[]' id='DisbursementNow' value='<?php if (!empty($result_data_set1['DisbursementNow'])): echo number_format($result_data_set1['DisbursementNow'], 2);
                                                                                                                                                                    endif; ?>' onkeyup="dokeyupMoney(this);" onchange="dokeyupMoney(this);" onkeypress="checknumberMoney()" oninput="updateColumn4(this)"></td>
                        <td class="align-top text-center">
                            <input size='10' style="border-width: 0px; text-align: right; font-size:16px;" name="TotalAccumulateDisbursement[]" id="TotalAccumulateDisbursement" value="<?php echo $result_data_set1['TotalAccumulateDisbursement']; ?>" readonly />
                        </td>
                    </tr>
                <?php
                endforeach;
                ?>
                <tr>
                    <td colspan='3' class="align-top text-center">แนบไฟล์ประกอบ</td>
                    <td colspan='7' class="align-top text-center"><input class="form form-control" name="doc_file" type="file" id="doc_file" /></td>
                </tr>
            </tbody>
        </table>

        <div class="class_header_page_03">สิ่งที่ต้องส่งมอบ</div>
        <table class="table table-bordered table-hover">
            <thead>
                <tr class="bg_th">
                    <th class="align-middle text-center">
                        <font color='white'>ที่</font>
                    </th>
                    <th class="align-middle text-center">
                        <font color='white'>งวดที่</font>
                    </th>
                    <th class="align-middle text-center">
                        <font color='white'>รายการสิ่งที่ต้องส่งมอบ</font>
                    </th>
                    <th class="align-middle text-center">
                        <font color='white'>ค่าถ่วงน้ำหนัก</font>
                    </th>
                    <th class="align-middle text-center" width='11%'>
                        <font color='white'>รับมอบเมื่อ</font>
                    </th>
                    <th class="align-middle text-center">
                        <font color='white'>หมายเหตุ</font>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                $seq_02 = 1;
                foreach ($data['OverAllPlanStrategyDeliver'] as $result_data_set2):
                ?>
                    <tr>
                        <td class="align-top text-center">
                            <input type="hidden" name="DeliverMonthly_id[]" id="DeliverMonthly_id[]" value="<?php echo $result_data_set2['DeliverMonthly_id']; ?>" readonly />
                            <?php echo $seq_02++; ?>.
                        </td>
                        <td class="align-top text-center"><?php echo $result_data_set2['WorkingPeriodNumber']; ?></td>
                        <td class="align-top text-center"><?php echo $result_data_set2['DetailDeliver']; ?></td>
                        <td class="align-top text-center"><?php echo $result_data_set2['WeightValue']; ?></td>
                        <td class="align-top text-center"><input autocomplete="off" data-provide="datepicker" data-date-language="th-th" class="form-control" type='text' name='ReceiveDeliverDate[]' value='<?php echo $result_data_set2['ReceiveDeliverDate']; ?>'></td>
                        <td class="align-top text-center"><input class="form-control" type='text' name='RemarksDeliver[]' value='<?php echo $result_data_set2['RemarksDeliver']; ?>'></td>
                    </tr>
                <?php
                endforeach;
                ?>
                <tr>
                    <td colspan='2' class="align-top text-center">แนบไฟล์ประกอบ</td>
                    <td colspan='4' class="align-top text-center"><input class="form form-control" name="doc_file" type="file" id="doc_file" /></td>
                </tr>
            </tbody>
        </table>

        <div class="class_header_page_03">กิจกรรมค่าเป้าหมาย</div>
        <table class="table table-bordered table-hover">
            <thead>
                <tr class="bg_th">
                    <th rowspan="2" class="align-middle text-center">
                        <font color='white'>ที่</font>
                    </th>
                    <th rowspan="2" class="align-middle text-center" width='20%'>
                        <font color='white'>กิจกรรม</font>
                    </th>
                    <th rowspan="2" class="align-middle text-center" width='20%'>
                        <font color='white'>รายละเอียดเพิ่มเติม</font>
                    </th>
                    <th colspan='2' class="align-middle text-center">
                        <font color='white'>เป้าหมาย</font>
                    </th>
                    <th rowspan="2" class="align-middle text-center">
                        <font color='white'>ผลสะสม<br />จำนวน</font>
                    </th>
                    <th rowspan="2" class="align-middle text-center">
                        <font color='white'>ผล ณ เดือน<br />จำนวน</font>
                    </th>
                    <th rowspan="2" class="align-middle text-center">
                        <font color='white'>ผลสะสม<br />จนถึงเดือนที่รายงาน</font>
                    </th>
                    <th rowspan="2" class="align-middle text-center">
                        <font color='white'>แล้วเสร็จเมื่อ</font>
                    </th>
                    <th rowspan="2" class="align-middle text-center">
                        <font color='white'>หมายเหตุ</font>
                    </th>
                </tr>
                <tr class="bg_th">
                    <th class="align-middle text-center">
                        <font color='white'>จำนวน</font>
                    </th>
                    <th class="align-middle text-center">
                        <font color='white'>หน่วยนับ</font>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                $seq_04 = 1;
                foreach ($data['OverAllPlanStrategyTargetKPI'] as $result_data_set4):
                ?>
                    <tr>
                        <td class="align-top text-center">
                            <input type="hidden" name="TargetKPIMonthly_id[]" id="TargetKPIMonthly_id[]" value="<?php echo $result_data_set4['TargetKPIMonthly_id']; ?>" readonly />
                            <?php echo $seq_04++; ?>.
                        </td>
                        <td class="align-top text-left"><?php echo $result_data_set4['ActivityTargetKPI']; ?></td>
                        <td class="align-top text-left"><?php echo $result_data_set4['DetailTargetKPI']; ?></td>
                        <td class="align-top text-center"><?php echo $result_data_set4['QuantityTargetKPI']; ?></td>
                        <td class="align-top text-center"><?php echo $result_data_set4['unitname']; ?></td>
                        <td class="align-top text-center">
                            <span class="detail">
                                <?php echo $result_data_set4['AccumulateKPI']; ?>
                            </span>
                            <input type="hidden" name="AccumulateKPI[]" id="AccumulateKPI" value="<?php echo $result_data_set4['AccumulateKPI']; ?>" readonly />
                        </td>
                        <td class="align-top text-center"><input size='10' class="form-control" type='text' name='KPINow[]' id='KPINow' value='<?php echo $result_data_set4['KPINow']; ?>' onkeyup="dokeyupMoney(this);" onchange="dokeyupMoney(this);" onkeypress="checknumberMoney()" oninput="updateColumn5(this)"></td>
                        <td class="align-top text-center">
                            <input size='10' style="border-width: 0px; text-align: right; font-size:16px;" name="TotalKPI[]" id="TotalKPI" value="<?php echo $result_data_set4['TotalKPI']; ?>" readonly />
                        </td>
                        <td class="align-top text-center"><input autocomplete="off" data-provide="datepicker" data-date-language="th-th" class="form-control" type='text' name='FinishDateKPI[]' value='<?php echo $result_data_set4['FinishDateKPI']; ?>'></td>
                        <td class="align-top text-center"><input class="form-control" type='text' name='RemarksKPI[]' value='<?php echo $result_data_set4['RemarksKPI']; ?>'></td>
                    </tr>
                <?php
                endforeach;
                ?>
                <tr>
                    <td colspan='2' class="align-top text-center">แนบไฟล์ประกอบ</td>
                    <td colspan='8' class="align-top text-center"><input class="form form-control" name="doc_file" type="file" id="doc_file" /></td>
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
                <button type="reset" class="btn btn-secondary" value="reset" onclick="window.location='<?php echo base_url(); ?>/<?= $routeGroup ?>/add/<?= $data['OverAllPlanStrategy_id']; ?>'"><i class="fas fa-reply"></i> กลับสู่หน้าหลัก</button>
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