<?= $this->extend('layouts/main_for_view') ?>

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
                        <div class="class_header_page_03">สรุปข้อมูลกิจกรรมเบื้องต้น</div>
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
                                <font color='white'>#</font>
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
                            <td class="align-top text-center"><?php if ($result_data_set1['month01'] != '' && $result_data_set1['month01'] != null) {
                                                                    echo number_format($result_data_set1['month01'], 2);
                                                                } ?></td>

                            <td class="align-top text-center"><?php if ($result_data_set1['month02'] != '' && $result_data_set1['month02'] != null) {
                                                                    echo number_format($result_data_set1['month02'], 2);
                                                                } ?></td>

                            <td class="align-top text-center"><?php if ($result_data_set1['month03'] != '' && $result_data_set1['month03'] != null) {
                                                                    echo number_format($result_data_set1['month03'], 2);
                                                                } ?></td>

                            <td class="align-top text-center"><?php if ($result_data_set1['month04'] != '' && $result_data_set1['month04'] != null) {
                                                                    echo number_format($result_data_set1['month04'], 2);
                                                                } ?></td>

                            <td class="align-top text-center"><?php if ($result_data_set1['month05'] != '' && $result_data_set1['month05'] != null) {
                                                                    echo number_format($result_data_set1['month05'], 2);
                                                                } ?></td>

                            <td class="align-top text-center"><?php if ($result_data_set1['month06'] != '' && $result_data_set1['month06'] != null) {
                                                                    echo number_format($result_data_set1['month06'], 2);
                                                                } ?></td>
                            <td class="align-top text-center"><?php if ($result_data_set1['month07'] != '' && $result_data_set1['month07'] != null) {
                                                                    echo number_format($result_data_set1['month07'], 2);
                                                                } ?></td>

                            <td class="align-top text-center"><?php if ($result_data_set1['month08'] != '' && $result_data_set1['month08'] != null) {
                                                                    echo number_format($result_data_set1['month08'], 2);
                                                                } ?></td>

                            <td class="align-top text-center"><?php if ($result_data_set1['month09'] != '' && $result_data_set1['month09'] != null) {
                                                                    echo number_format($result_data_set1['month09'], 2);
                                                                } ?></td>

                            <td class="align-top text-center"><?php if ($result_data_set1['month10'] != '' && $result_data_set1['month10'] != null) {
                                                                    echo number_format($result_data_set1['month10'], 2);
                                                                } ?></td>

                            <td class="align-top text-center"><?php if ($result_data_set1['month11'] != '' && $result_data_set1['month11'] != null) {
                                                                    echo number_format($result_data_set1['month11'], 2);
                                                                } ?></td>

                            <td class="align-top text-center"><?php if ($result_data_set1['month12'] != '' && $result_data_set1['month12'] != null) {
                                                                    echo number_format($result_data_set1['month12'], 2);
                                                                } ?></td>

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
                        - <?php echo $data['Remarks']; ?>
                    </div>
                </div>
            </div>
        </div>
        <br />
    </form>

</div>

<div class="class_header_page_02">
    <br />
    แผนและผลการปฏิบัติงานกองความปลอดภัยธุรกิจก๊าซปิโตรเลียมเหลว
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
                        <font style="font-size: 24px;">ประจำเดือน <b><u><?php echo $data['MonthReportThai']; ?> พ.ศ. <?php echo $data['YearReport']; ?></u></b></font>
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
                        <font color='white'>แผนข้อมูล ณ เดือน</font>
                    </th>
                    <th class="align-middle text-center" width='10%'>
                        <font color='white'>ผลข้อมูล ณ เดือน</font>
                    </th>
                    <th class="align-middle text-center" width='20%'>
                        <font color='white'>หน่วยนับ</font>
                    </th>
                </tr>
            </thead>

            <tbody>
                <?php $seq_var = 0; ?>
                <?php foreach ($data['MonthlyPlanActivity_Id'] as $result_data_set_plan): ?>
                    <tr>
                        <td class="align-top text-left"><?php echo $result_data_set_plan['varname']; ?></td>
                        <td class="align-top text-center"><?php echo $result_data_set_plan['data_value']; ?></td>
                        <td class="align-top text-center"><?php echo $data['MonthlyResultActivity_Id'][$seq_var]['data_value']; ?></td>
                        <td class="align-top text-center">
                            <?php echo $result_data_set_plan['unit_name']; ?>
                        </td>
                    </tr>
                    <?php $seq_var++; ?>
                <?php endforeach; ?>

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