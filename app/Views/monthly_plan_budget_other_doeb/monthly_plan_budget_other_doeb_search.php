<?= $this->extend('layouts/main') ?>
<!-- DataTables -->

<?= $this->section("content"); ?>
<div class="class_header_page_02">
    <br />
    จัดทำ/ปรับปรุงแผนการใช้งบประมาณ (ทั่วไป)
    <hr />
</div>
<!--
<div class="row">
    <form id="frm" class="form-horizontal" action="<?php echo base_url(); ?>/<?= $routeGroup ?>" method="post">
        <div class="row text-left">
            <div class="col-md-12">
                <div class="form-group row">
                    <div class="col-8" style="text-align: left;">
                        <div class="form-group row">
                            <div class="col-12">
                                ค้นหาสถานะ
                                <label>
                                    <input type="radio" name="data_search3" value="ALL" <?php if ($data_search3 == 'ALL') {
                                                                                            echo "checked";
                                                                                        }  ?>>
                                    ทั้งหมด
                                </label>
                                <label>
                                    <input type="radio" name="data_search3" value="Y" <?php if ($data_search3 == 'Y') {
                                                                                            echo "checked";
                                                                                        }  ?>>
                                    ยืนยันข้อมูล
                                </label>
                                <label>
                                    <input type="radio" name="data_search3" value="N" <?php if ($data_search3 == 'N') {
                                                                                            echo "checked";
                                                                                        }  ?>>
                                    กำลังดำเนินการ
                                </label>
                                <button type="submit" class="btn btn-info" name='search_value' value="search_value"><i class="fas fa-search"></i> ค้นหาข้อมูล</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<hr />
-->
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
                                <th class="align-middle text-center" width="5%">ลำดับ</th>
                                <th class="align-middle text-center" width="40%">ชื่อกิจกรรม</th>
                                <th class="align-middle text-center">ชื่อแผนงบประมาณ</th>
                                <th class="align-middle text-center">งบประมาณที่ได้รับการจัดสรร (บาท)</th>
                                <th class="align-middle text-center" width='15%'>ปรับปรุงแผน</th>
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
                                        <td class="align-top text-left"><?= $item["NameActivity"] ?></td>
                                        <td class="align-top text-left"><?= $item["PlanName"] ?></td>
                                        <td class="align-top text-right">
                                            <?php if (!empty($item["Budget02"])): ?>
                                                <?= number_format($item["Budget02"], 2); ?>
                                            <?php else: ?>
                                                -
                                            <?php endif; ?>
                                        </td>
                                        <td class="align-top text-center">
                                            <?php if ($item["open_ChangeBudgetPlan"] == 'Y'): ?>
                                                <a id="btnEdit" class="btn btn-danger" href="<?= $routeGroup ?>/edt2/<?= $item["DraftBudgetControlDetail_id"] ?>"><i class="fas fa-edit"></i> ปรับแผน ง.</a>
                                            <?php elseif ($item["ActiveStatusChangeTPALL"] == 'Y'): ?>
                                                <a id="btnEdit" class="btn btn-danger" href="<?= $routeGroup ?>/edt2/<?= $item["DraftBudgetControlDetail_id"] ?>"><i class="fas fa-edit"></i> ปรับแผน ต.</a>
                                            <?php elseif ($item["ActiveStatusPlanMonth"] == 'Y'): ?>

                                                <a id="btnView" class="btn btn-primary" onclick="window.open('<?= $routeGroup ?>/view/<?= $item["DraftBudgetControlDetail_id"] ?>', '_blank', 'width=1400,height=550,scrollbars=1');">ดูรายละเอียดข้อมูล</a>
                                            <?php else: ?>
                                                <a id="btnEdit" class="btn btn-info" href="<?= $routeGroup ?>/edt/<?= $item["DraftBudgetControlDetail_id"] ?>"><i class="fas fa-edit"></i> เลือก</a>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php
                                endforeach;
                            } else {
                                ?>

                                <tr>
                                    <td colspan="5" class="align-top text-center">
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