<?= $this->extend('layouts/main') ?>
<!-- DataTables -->

<?= $this->section("content"); ?>
<div class="class_header_page_02">
    <br />
    ติดตามผล ต. ง. (ส่วนกลาง)
    <hr />
</div>
<font style="font-size: 20px;">
    ประจำเดือน
    <b><u><?php echo $month_before_search; ?> พ.ศ. <?php echo $year_before_search; ?></u></b>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a id="btnView" class="btn btn-info" href="<?= $routeGroup ?>"> ดูข้อมูลประจำเดือนย้อนหลัง</a>
</font>
<br /><br />
<div class="row">
    <div class="col-md-12">
        <div class="card card-gray">
            <div class="card-header">
                <h3 class="card-title">รายการข้อมูล</h3>
            </div>
            <div class="row">
                <div class="col-12">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr class="align-middle">
                                <th rowspan='2' class="align-middle text-center" width="5%">ลำดับ</th>
                                <th rowspan='2' class="align-middle text-center">ชื่อแผนงบประมาณ</th>
                                <th rowspan='2' class="align-middle text-center">ชื่อกลุ่มงาน</th>
                                <th rowspan='2' class="align-middle text-center">ชื่อกิจกรรม</th>
                                <th rowspan='2' class="align-middle text-center">วงเงินงบประมาณที่ได้รับการจัดสรร (บาท)</th>
                                <th rowspan='2' class="align-middle text-center">ยอดเบิกจ่าย<br />ณ ปัจจุบัน (บาท)</th>
                                <th rowspan='2' class="align-middle text-center">เดือนล่าสุดที่รายงาน</th>
                                <th rowspan='2' class="align-middle text-center">ดูรายละเอียด</th>
                                <th rowspan='2' class="align-middle text-center">ตรวจสอบรายงาน</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $rowIndx = 1;
                            if (!empty($lstData)) {
                                foreach ($lstData as $item) :
                                    $start_tor_cal = new DateTime($item["StartYearPlan"]);
                                    $finish_tor_cal = new DateTime($item["FinishYearPlan"]);
                                    $interval = $start_tor_cal->diff($finish_tor_cal);
                                    $numberOfDays = $interval->days;
                            ?>
                                    <tr>
                                        <td class="align-top text-center"><?= $rowIndx++; ?></td>
                                        <td class="align-top text-left"><?= $item["PlanName"] ?></td>
                                        <td class="align-top text-left"><?= $item["GroupUserName"] ?></td>
                                        <td class="align-top text-left"><?= $item["NameActivity"] ?></td>
                                        <td class="align-top text-right">
                                            <?php if (!empty($item["Budget02"])): ?>
                                                <?= number_format($item["Budget02"], 2); ?>
                                            <?php else: ?>
                                                -
                                            <?php endif; ?>
                                        </td>
                                        <td class="align-top text-right">
                                            <?php if (!empty($item["sum_budget"])): ?>
                                                <?= number_format($item["sum_budget"], 2); ?>
                                            <?php else: ?>
                                                -
                                            <?php endif; ?>
                                        </td>
                                        <td class="align-top text-center"><?= $item["MonthReportThai"] ?> <?= $item["YearReport"] ?></td>
                                        <td class="align-top text-center"><a id="btnView" class="btn btn-primary" onclick="window.open('<?php echo base_url(); ?>Report_01_activity_doeb/view/<?= $item["MonthlyActivity_id"] ?>', '_blank', 'width=1200,height=550,scrollbars=1');">ดูรายละเอียดข้อมูล</a></td>
                                        <td class="align-top text-center">
                                            <?php if ($item["ActiveStatusIns"] == 'Y'): ?>
                                                <font color='green'><b>ตรวจสอบข้อมูลเรียบร้อย</b></font>
                                            <?php else: ?>
                                                <a id="btnEdit" class="btn btn-danger" href="<?= $routeGroup ?>/edt/<?= $item["MonthlyActivity_id"] ?>"><i class="fas fa-edit"></i> แจ้งทบทวน</a>
                                                <a id="btnEdit" class="btn btn-success" href="<?= $routeGroup ?>/add/<?= $item["MonthlyActivity_id"] ?>"><i class="fas fa-edit"></i> รับทราบข้อมูล</a>
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


<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<?= $this->endSection(); ?>

<?= $this->section("javascripts"); ?>
<script>
    $(document).ready(function() {
        // console.log("Document ready page Search");
        var tableDt = $('#tbSearch').DataTable({
            "paging": false,
            "destroy": true,
            "searching": false,
            "ordering": false,
            "processing": false,
            "serverSide": false,
            // "columns": colDt,
            "autoWidth": false,
            "order": [
                [0, 'asc']
            ],
            "responsive": true,
            "lengthChange": false,
            "bInfo": false,
            "bLengthMenu": false, // Hide page lengthMenu
        });
    });

    /*
    $('[name=data_search2]').daterangepicker({
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
    $(window).on("load", function() {
        // console.log("window load page Search");
    });
</script>
<?= $this->endSection(); ?>