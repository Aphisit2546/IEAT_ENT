<?= $this->extend('layouts/main') ?>
<!-- DataTables -->

<?= $this->section("content"); ?>
<div class="class_header_page_02">
    <br />
    รายงานความก้าวหน้างานโครงการตามแผนงบประมาณประจำปี
    <hr />
</div>
<hr />
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
                                <th rowspan='2' class="align-middle text-center" width="5%">#</th>
                                <th rowspan='2' class="align-middle text-center">ชื่อแผนงบประมาณ</th>
                                <th rowspan='2' class="align-middle text-center">ชื่อโครงการ</th>
                                <!--<th rowspan='2' class="align-middle text-center">ระยะเวลาโครงการ</th>-->
                                <th rowspan='2' class="align-middle text-center">วงเงินงบประมาณที่ได้รับการจัดสรร (บาท)</th>
                                <th rowspan='2' class="align-middle text-center">วันที่ TOR</th>
                                <th colspan='4' class="align-middle text-center">ความก้าวหน้างานสะสม</th>
                                <th rowspan='2' class="align-middle text-center">เดือนล่าสุดที่รายงาน</th>
                                <th rowspan='2' class="align-middle text-center">จัดทำรายงาน</th>
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
                                    $start_tor_cal = new DateTime($item["StartYearPlan"]);
                                    $finish_tor_cal = new DateTime($item["FinishYearPlan"]);
                                    $interval = $start_tor_cal->diff($finish_tor_cal);
                                    $numberOfDays = $interval->days;
                            ?>
                                    <tr>
                                        <td class="align-top text-center"><?= $rowIndx++; ?></td>
                                        <td class="align-top text-left"><?= $item["PlanName"] ?></td>
                                        <td class="align-top text-left"><?= $item["ProjectNameTH"] ?></td>
                                        <!--<td class="align-top text-center"><?php echo $numberOfDays; ?> วัน</td>-->
                                        <td class="align-top text-right">
                                            <?php if (!empty($item["Budget02"])): ?>
                                                <?= number_format($item["Budget02"], 2); ?>
                                            <?php else: ?>
                                                -
                                            <?php endif; ?>
                                        </td>
                                        <td class="align-top text-center"><?= $item["start_tor"] ?> - <?= $item["finish_tor"] ?></td>
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
                                            <a id="btnEdit" class="btn btn-warning" href="<?= $routeGroup ?>/add/<?= $item["OverAllPlanStrategy_id"] ?>"><i class="fas fa-edit"></i> รายงาน</a>
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