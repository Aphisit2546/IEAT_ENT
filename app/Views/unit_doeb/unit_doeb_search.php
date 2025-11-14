<?= $this->extend('layouts/main') ?>
<!-- DataTables -->

<?= $this->section("content"); ?>
<div class="class_header_page_02">
    <br />
    หน่วยนับ
    <hr />
</div>
<div class="row">
    <form id="frm" class="form-horizontal" action="<?php echo base_url(); ?>/<?= $routeGroup ?>" method="post">
        <div class="row text-left">
            <div class="col-md-12">
                <div class="form-group row">
                    <div class="col-1">
                        ค้นหาชื่อ
                    </div>
                    <div class="col-3">
                        <input type="text" name="data_search1" class="form form-control" value="<?php echo $data_search1; ?>">
                    </div>
                    <div class="col-2" style="text-align: right;">
                        ค้นหาประเภทหน่วยนับ
                    </div>
                    <div class=" col-2">
                        <input type="text" name="data_search2" class="form form-control" value="<?php echo $data_search2; ?>">
                    </div>
                    <div class="col-sm-4">
                        <button type="submit" class="btn btn-info" name='search_value' value="search_value"><i class="fas fa-search"></i> ค้นหาข้อมูล</button>
                        <button type="reset" class="btn btn-secondary" name='reset_value' value="reset"><i class="fas fa-reply"></i> ล้างข้อมูล</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-left">
            <div class="col-md-12">
                <div class="form-group row">
                    <div class="col-1">
                        สถานะ
                    </div>
                    <div class="col-6">
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
                            ใช้งาน
                        </label>
                        <label>
                            <input type="radio" name="data_search3" value="N" <?php if ($data_search3 == 'N') {
                                                                                    echo "checked";
                                                                                }  ?>>
                            ไม่ใช้งาน
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-right">
            <div class="col-12">
                <a id="btnAdd" class="btn btn-success ml-2" href="<?= $routeGroup ?>/add"><i class="fas fa-plus-square"></i> เพิ่มข้อมูล</a>
            </div>
        </div>
    </form>
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
                                <th class="align-middle text-center " style="width: 90px;">#</th>
                                <th class="align-middle text-center">ประเภทหน่วยนับ</th>
                                <th class="align-middle text-center">ชื่อภาษาไทย</th>
                                <th class="align-middle text-center">ชื่อภาษาอังกฤษ</th>
                                <th class="align-middle text-center">สถานะข้อมูล</th>
                                <th class="align-middle text-center">วัน-เวลาปรับปรุงข้อมูลล่าสุด</th>
                                <th class="align-middle text-center">จัดการ</th>
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
                                        <td class="align-top text-left"><?= $item["UnitType"]; ?></td>
                                        <td class="align-top text-left"><?= $item["name_th"]; ?></td>
                                        <td class="align-top text-left"><?= $item["name_en"]; ?></td>
                                        <td class="align-top text-center">
                                            <?php if ($item["ActiveStatus"] == 'Y'): ?>
                                                <font color='green'>ใช้งาน</font>
                                            <?php elseif ($item["ActiveStatus"] == 'N'): ?>
                                                <font color='red'>ไม่ใช้งาน</font>
                                            <?php else: ?>
                                                <font color='red'>-</font>
                                            <?php endif; ?>
                                        </td>
                                        <td class="align-top text-center"><?= $item["ModifyDate"]; ?></td>
                                        <td class="align-top text-center">
                                            <a id="btnEdit" class="btn btn-warning" href="<?= $routeGroup ?>/edt/<?= $item["UnitManagement_id"] ?>"><i class="fas fa-edit"></i> ปรับปรุงข้อมูล</a>
                                            <a id="btnDel" class="btn btn-danger" href="<?= $routeGroup ?>/del/<?= $item["UnitManagement_id"] ?>"><i class="fas fa-edit"></i> ลบ</a>
                                        </td>
                                    </tr>
                                <?php
                                endforeach;
                            } else {
                                ?>
                                <tr>
                                    <td colspan="8" class="align-top text-center">
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