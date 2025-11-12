<?= $this->extend('layouts/main_for_view') ?>

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
                        <div class="class_header_page_03">สรุปข้อมูลเบื้องต้นโครงการ</div>
                        - <?php echo $data['SummarizeProject']; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php if ($data['CheckStatusContract'] != 'Y'): ?>
            <div id="myDiv">
                <table class="table table-bordered table-hover">
                    <tbody>
                        <tr>
                            <td class="align-top text-left" width='20%'><b>วันที่อนุมัติ TOR</b></td>
                            <td class="align-top text-center"><?php echo $data['DateTOR']; ?></td>
                            <td class="align-top text-left" width='20%'><b>วันที่ประกาศจัดซื้อจัดจ้าง</b></td>
                            <td class="align-top text-center"><?php echo $data['ProcurementAnnouncementDate']; ?></td>
                        </tr>
                        <tr>
                            <td class="align-top text-left"><b>วันที่ได้ผู้รับจ้าง</b></td>
                            <td class="align-top text-center"><?php echo $data['DateReceiveContractor']; ?></td>
                            <td class="align-top text-left"><b>วันที่ลงนามสัญญา</b></td>
                            <td class="align-top text-center"><?php echo $data['ContractSigningDate']; ?></td>
                        </tr>
                        <tr>
                            <td class="align-top text-left"><b>วันที่เริ่มสัญญา</b></td>
                            <td class="align-top text-center"><?php echo $data['ContractStartDate']; ?></td>
                            <td class="align-top text-left"><b>วันที่สิ้นสุดสัญญา</b></td>
                            <td class="align-top text-center"><?php echo $data['ContractEndDate']; ?></td>
                        </tr>
                        <tr>
                            <td class="align-top text-left"><b>ข้อมูลผู้รับจ้าง</b></td>
                            <td class="align-top text-center"><?php echo $data['ContractorInformation']; ?></td>
                            <td class="align-top text-left"><b>เลขประจำตัวผู้เสียภาษี</b></td>
                            <td class="align-top text-center"><?php echo $data['ContractorTaxID']; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>

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
                        </td>
                        <td class="align-top text-center"><?php if (!empty($result_data_set1['WorkNow'])): echo number_format($result_data_set1['WorkNow'], 2);
                                                            endif; ?></td>
                        <td class="align-top text-center">
                            <?php echo $result_data_set1['TotalAccumulateWork']; ?>
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
                        </td>
                        <td class="align-top text-center"><?php if (!empty($result_data_set1['DisbursementNow'])): echo number_format($result_data_set1['DisbursementNow'], 2);
                                                            endif; ?></td>
                        <td class="align-top text-center">
                            <?php echo $result_data_set1['TotalAccumulateDisbursement']; ?>
                        </td>
                    </tr>
                <?php
                endforeach;
                ?>
                <tr>
                    <td colspan='3' class="align-top text-center">แนบไฟล์ประกอบ</td>
                    <td colspan='7' class="align-top text-center">-</td>
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
                        <td class="align-top text-center"><?php echo $result_data_set2['ReceiveDeliverDate']; ?></td>
                        <td class="align-top text-center"><?php echo $result_data_set2['RemarksDeliver']; ?></td>
                    </tr>
                <?php
                endforeach;
                ?>
                <tr>
                    <td colspan='2' class="align-top text-center">แนบไฟล์ประกอบ</td>
                    <td colspan='4' class="align-top text-center">-</td>
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
                        </td>
                        <td class="align-top text-center"><?php echo $result_data_set4['KPINow']; ?></td>
                        <td class="align-top text-center">
                            <?php echo $result_data_set4['TotalKPI']; ?>
                        </td>
                        <td class="align-top text-center"><?php echo $result_data_set4['FinishDateKPI']; ?></td>
                        <td class="align-top text-center"><?php echo $result_data_set4['RemarksKPI']; ?></td>
                    </tr>
                <?php
                endforeach;
                ?>
                <tr>
                    <td colspan='2' class="align-top text-center">ไฟล์ประกอบ</td>
                    <td colspan='8' class="align-top text-center">-</td>
                </tr>
            </tbody>
        </table>

        <div class="row text-left">
            <div class="col-md-12">
                <div class="form-group row">
                    <div class="col-12">
                        หมายเหตุ
                        - <?php echo $data['Remarks']; ?>
                    </div>
                </div>
            </div>
        </div>
        <br />
    </form>

</div>

<?= $this->endSection(); ?>

<?= $this->section("javascripts"); ?>
<script>
    function isNumberchar(str, obj) {
        var isThai = true;
        var orgi_text = "0123456789";
        var chk_text = str.split("");
        chk_text.filter(function(s) {
            if (orgi_text.indexOf(s) == -1) {
                isThai = false;
                obj.value = str.replace(RegExp(s, "g"), '');
            }
        });
        return isThai; // ถ้าเป็น true แสดงว่าเป็นภาษาไทยทั้งหมด*/
    }

    function formCheck() {
        var OverAllPlan_id = document.getElementById('OverAllPlan_id').value;

        if (OverAllPlan_id.trim() == 0) {
            alert('กรุณาเลือกแผน');
            document.getElementById('OverAllPlan_id').focus();
            return false;
        } else {
            document.form_ID.submit();
            return true;
        }
    }

    function deleteRow(tableID) {

        var selectCount = getTableSelectedCount(tableID);
        var tableRows = getTableRowsCount(tableID);

        if (selectCount >= (tableRows - 1)) {
            alert("ไม่สามารถลบแถวทั้งหมดได้ ต้องเหลือข้อมูลอย่างน้อย 1 แถว");
            return;
        }
        try {
            var table = document.getElementById(tableID);
            var rowCount = table.rows.length;

            for (var i = 0; i < rowCount; i++) {
                var row = table.rows[i];
                var chkbox = row.cells[0].childNodes[0];

                if (chkbox != null && chkbox.checked == true) {
                    table.deleteRow(i);
                    rowCount--;
                    i--;
                }
            }
        } catch (e) {
            alert(e);
        }
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

        $("#btnSave").on("click", function() {
            confirmPopup("กรุณายืนยันบันทึกข้อมูล", "บันทึกข้อมูล", "ยกเลิก", fncSubmit);
        });
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