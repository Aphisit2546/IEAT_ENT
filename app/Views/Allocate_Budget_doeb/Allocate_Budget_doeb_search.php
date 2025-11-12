<?= $this->extend('layouts/main') ?>
<!-- DataTables -->

<?= $this->section("content"); ?>
<div class="class_header_page_02">
    <br />
    จัดสรรงบประมาณ
    <hr />
</div>
<div class="row">
    <!--
    <form id="frm" class="form-horizontal" action="<?php echo base_url(); ?>/<?= $routeGroup ?>" method="post">
        <div class="row text-left">
            <div class="col-md-12">
                <div class="form-group row">
                    <div class="col-4" style="text-align: left;">
                        <div class="form-group row">
                            <div class="col-3" style="text-align: left;">
                                ค้นหาสถานะ
                            </div>
                            <div class="col-9">
                                <label>
                                    <input type="radio" name="data_search3" value="ALL" <?php if ($data_search3 == 'ALL') {
                                                                                            echo "checked";
                                                                                        }  ?>>
                                    ทั้งหมด
                                </label>
                                <label>
                                    <input type="radio" name="data_search3" value="N" <?php if ($data_search3 == 'N') {
                                                                                            echo "checked";
                                                                                        }  ?>>
                                    รอดำเนินการ
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <button type="submit" class="btn btn-info" name='search_value' value="search_value"><i class="fas fa-search"></i> ค้นหาข้อมูล</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    -->
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
                                <th rowspan='2' class="align-middle text-center" width="5%">ลำดับ</th>
                                <th rowspan='2' class="align-middle text-center">ชื่อแผน</th>

                                <th rowspan='2' class="align-middle text-center">จำนวนกิจกรรม</th>
                                <th colspan='3' class="align-middle text-center">จำนวนเงิน (บาท)</th>

                                <th rowspan='2' class="align-middle text-center" width="30%">จัดการข้อมูล</th>
                            </tr>
                            <tr class="align-middle">
                                <th class="align-middle text-center">รวมงบประมาณตามคำขอ</th>
                                <th class="align-middle text-center">งบประมาณที่ได้รับตาม พ.ร.บ. (บาท)</th>
                                <th class="align-middle text-center">งบประมาณที่ได้รับการจัดสรร (บาท)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $rowIndx = 1;
                            if (!empty($lstData)) {
                                foreach ($lstData as $item) :
                            ?>
                                    <?php if ($item["ActiveStatusFinalALL"] == 'Y' || $item["ActiveStatusFirstALL"] == 'Y'): ?>
                                        <tr>
                                            <td class="align-top text-center"><?= $rowIndx++; ?></td>
                                            <td class="align-top text-left"><?= $item["PlanName"]; ?></td>
                                            <td class="align-top text-center"><?= number_format($item["count_activity"]); ?></td>

                                            <td class="align-top text-right"><?= number_format($item["BudgetYearPlan"], 2); ?></td>
                                            <td class="align-top text-right"><?= number_format($item["BudgetReceivedUnderTheAct"], 2); ?></td>
                                            <td class="align-top text-right"><?= number_format($item["AnnualAppropriationAct"], 2); ?></td>

                                            <td class="align-top text-center">

                                                <?php if ($item["ActiveStatusFinalALL"] == 'Y'): ?>
                                                    <font color='green'><b>ใช้งาน</b></font>
                                                    <br />
                                                    <span class="detail">
                                                        <a id="btnView" class="btn btn-primary" onclick="window.open('<?= $routeGroup ?>/view/<?= $item["OverAllBudget_id"] ?>', '_blank', 'width=1450,height=600,scrollbars=1');">ดูรายละเอียดข้อมูล</a>
                                                        <?php if ($item["open_ChangeBudgetPlan"] == 'Y'): ?>
                                                            <a id="btnEdit" class="btn btn-danger" href="<?= $routeGroup ?>/edt_3/<?= $item["OverAllBudget_id"] ?>.<?= $item["ChangeBudgetPlanID"] ?>"><i class="fas fa-edit"></i> กำลังดำเนินการปรับแผนงบ</a>
                                                        <?php else: ?>
                                                            <a id="btnEdit" class="btn btn-success" href="<?= $routeGroup ?>/edt_2/<?= $item["OverAllBudget_id"] ?>"><i class="fas fa-edit"></i> ปรับแผนงบ</a>
                                                        <?php endif; ?>
                                                    </span>

                                                <?php elseif ($item["ActiveStatusFirstALL"] == 'Y'): ?>
                                                    <a id="btnEdit" class="btn btn-warning" href="<?= $routeGroup ?>/edt/<?= $item["OverAllBudget_id"] ?>"><i class="fas fa-edit"></i> เลือก</a>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    <?php endif; ?>
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