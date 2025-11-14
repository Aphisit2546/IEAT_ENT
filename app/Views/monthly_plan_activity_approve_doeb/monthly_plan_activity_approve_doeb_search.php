<?= $this->extend('layouts/main') ?>
<!-- DataTables -->

<?= $this->section("content"); ?>
<div class="class_header_page_02">
    <br />
    ตรวจสอบและพิจารณาแผนปฏิบัติงานรายเดือนประกอบการยื่นคำของบประมาณ
    <hr />
</div>
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
                                <th class="align-middle text-center">#</th>
                                <th class="align-middle text-center">ปีงบประมาณ</th>
                                <th class="align-middle text-center">หน่วยงาน</th>
                                <th class="align-middle text-center" width="20%">จัดการข้อมูล</th>
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
                                        <td class="align-top text-center"><?= $item["FiscalYear"]; ?></td>
                                        <td class="align-top text-center"><?= $item["GroupUserName"]; ?></td>
                                        <td class="align-top text-center">
                                            <?php if ($item["ActiveStatusIns"] == 'Y' and $item["ActiveStatusApprove"] == 'Y'): ?>
                                                <span class="detail">
                                                    <a id="btnView" class="btn btn-primary" onclick="window.open('<?= $routeGroup ?>/view/<?= $item["MonthlyPlanActivity_Id"] ?>.<?= $item["GroupUserID"] ?>', '_blank', 'width=1400,height=550,scrollbars=1');">ดูรายละเอียดข้อมูล</a>
                                                </span>
                                            <?php elseif ($item["HoldStatusApprove"] == 'N'): ?>
                                                <a id="btnEdit" class="btn btn-secondary" href="<?= $routeGroup ?>/edt/<?= $item["MonthlyPlanActivity_Id"] ?>.<?= $item["GroupUserID"] ?>"><i class="fas fa-edit"></i> ตรวจสอบและพิจารณาค้างอยู่</a>
                                            <?php elseif ($item["ActiveStatusFirstIns"] == 'Y' and $item["ActiveStatusFirstApprove"] == 'N'): ?>
                                                <a id="btnEdit" class="btn btn-warning" href="<?= $routeGroup ?>/edt/<?= $item["MonthlyPlanActivity_Id"] ?>.<?= $item["GroupUserID"] ?>"><i class="fas fa-edit"></i> พิจารณา</a>
                                            <?php else: ?>
                                                <a id="btnEdit" class="btn btn-warning" href="<?= $routeGroup ?>/edt/<?= $item["MonthlyPlanActivity_Id"] ?>.<?= $item["GroupUserID"] ?>"><i class="fas fa-edit"></i> ตรวจสอบและพิจารณา</a>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php
                                endforeach;
                            } else {
                                ?>
                                <tr>
                                    <td colspan="7" class="align-top text-center">
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