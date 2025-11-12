<?= $this->extend('layouts/main') ?>
<!-- DataTables -->

<?= $this->section("content"); ?>
<div class="class_header_page_02">
    <br />
    ผลการปฏิบัติงานกองความปลอดภัยธุรกิจน้ำมัน
    <hr />
</div>
<div class="row">
    <form id="frm" class="form-horizontal" action="<?php echo base_url(); ?>/<?= $routeGroup ?>" method="post">
        <div class="row text-left">
            <div class="col-md-12">
                <div class="form-group row">
                    <div class="col-4">
                        ค้นหารายงานช่วงเดือน
                        <select name='start_date'>
                            <option>--เลือก--</option>
                        </select>
                        ถึงเดือน
                        <select name='start_date'>
                            <option>--เลือก--</option>
                        </select>
                    </div>
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
<div class="row">
    <div class="row text-right">
        <div class="col-12">
            <a id="btnAdd" class="btn btn-success ml-2" href="<?= $routeGroup ?>/add"><i class="fas fa-plus-square"></i> เพิ่มข้อมูล</a>
        </div>
    </div>
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
                                <th class="align-middle text-center" width="5%">#</th>
                                <th class="align-middle text-center">รหัสควบคุม</th>
                                <th class="align-middle text-center">เดือนที่รายงาน</th>
                                <th class="align-middle text-center" width='25%'>เลือก</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $rowIndx = 1;
                            //if (!empty($lstData)) {
                            //    foreach ($lstData as $item) :
                            ?>
                            <tr>
                                <td class="align-top text-center"><?= $rowIndx++; ?></td>
                                <td class="align-top text-center">000001</td>
                                <td class="align-top text-center">กรกฏาคม 2568</td>
                                <td class="align-top text-center">
                                    <a id="btnEdit" class="btn btn-primary" href="<?= $routeGroup ?>/view/<?= $item["OverAllBudget_id"] ?>"><i class="fas fa-edit"></i> ดูรายละเอียด</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-top text-center"><?= $rowIndx++; ?></td>
                                <td class="align-top text-center">000002</td>
                                <td class="align-top text-center">สิงหาคม 2568</td>
                                <td class="align-top text-center">
                                    <a id="btnEdit" class="btn btn-warning" href="<?= $routeGroup ?>/edt/<?= $item["OverAllBudget_id"] ?>"><i class="fas fa-edit"></i> แก้ไข</a>
                                </td>
                            </tr>
                            <?php
                            //  endforeach;
                            // } else {
                            ?>
                            <!--
                                <tr>
                                    <td colspan="13" class="align-top text-center">
                                        <font color="red">-- ไม่มีรายการข้อมูล --</font>
                                    </td>
                                </tr>
                                -->
                            <?php
                            // }
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