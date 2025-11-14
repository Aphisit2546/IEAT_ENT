<?= $this->extend('layouts/main') ?>

<?= $this->section("content"); ?>

<div class="class_header_page_02">
    <br />
    แผนรายจ่ายของโครงการ
    <hr />
</div>
<div class="row">
    <form id="frm" class="form-horizontal" action="<?php echo base_url(); ?>/<?= $routeGroup ?>" method="post">
        <div class="row text-left">
            <div class="col-md-12">
                <div class="form-group row">
                    <div class="col-12">
                        เลือกแผน
                        <select name='' class='form form-control'>
                            <option>-- เลือก --</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-left">
            <div class="col-md-12">
                <div class="form-group row">
                    <div class="col-12">
                        เลือกแผนย่อย
                        <select name='' class='form form-control'>
                            <option>-- เลือก --</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-left">
            <div class="col-md-12">
                <div class="form-group row">
                    <div class="col-3">
                        ปีงบประมาณ
                        <input type="date" class='form-control' name="start_plan" id="start_plan" value="<?php echo $data['start_plan']; ?>" required />
                    </div>
                    <div class="col-2">
                        ถึง
                        <input type="date" class='form-control' name="finish_plan" id="finish_plan" value="<?php echo $data['finish_plan']; ?>" required />
                    </div>
                    <div class="col-sm-4">
                        <br />
                        <button type="submit" class="btn btn-info" name='search_value' value="search_value"><i class="fas fa-search"></i> ค้นหาข้อมูล</button>
                        <button type="reset" class="btn btn-secondary" name='reset_value' value="reset"><i class="fas fa-reply"></i> ล้างข้อมูล</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-right">
            <div class="col-12">
                <a id="btnAdd" class="btn btn-success ml-2" href="<?= $routeGroup ?>/add"><i class="fas fa-plus-square"></i> Export Excel</a>
            </div>
        </div>
    </form>
</div>
<hr />
<div class="row">
    <div class="col-md-12">
        <div class="card card-gray">
            <div class="card-header">
                <h3 class="card-title">แผงอ้างอิง</h3>
            </div>
            <div class="row">
                <div class="col-12">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr class="align-middle">
                                <th class="align-middle text-center " style="width: 90px;">ลำดับที่</th>
                                <th class="align-middle text-center">ชื่อโครงการ</th>
                                <th class="align-middle text-center">แผนย่อย</th>
                                <th class="align-middle text-center">หน่วยงาน</th>
                                <th class="align-middle text-center">ปีงบประมาณ</th>
                                <th class="align-middle text-center">งบประมาณ</th>
                                <th class="align-middle text-center">ที่มางบประมาณ</th>
                                <th class="align-middle text-center">สถานะปัจจุบัน</th>
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
                                        <td class="align-top text-left"><?= $item["code_ref"]; ?></td>
                                        <td class="align-top text-left"><?= $item["name_th"]; ?></td>
                                        <td class="align-top text-left"><?= $item["name_th"]; ?></td>
                                        <td class="align-top text-left"><?= $item["status_plan"]; ?></td>
                                        <td class="align-top text-left"><?= $item["status_plan"]; ?></td>
                                        <td class="align-top text-center">
                                            <a id="btnEdit" class="btn btn-info" href="<?= $routeGroup ?>/edt/<?= $item["plan_doeb_id"] ?>"><i class="fas fa-edit"></i> ดูรายละเอียด</a>
                                        </td>
                                        <td class="align-top text-center">
                                            <a id="btnEdit" class="btn btn-warning" href="<?= $routeGroup ?>/edt/<?= $item["plan_doeb_id"] ?>"><i class="fas fa-edit"></i> ปรับปรุงข้อมูล</a>
                                            <a id="btnDel" class="btn btn-danger" href="<?= $routeGroup ?>/del/<?= $item["plan_doeb_id"] ?>"><i class="fas fa-edit"></i> ลบ</a>
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