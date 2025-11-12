<?= $this->extend('layouts/main') ?>
<!-- DataTables -->

<?= $this->section("content"); ?>
<div class="class_header_page_02">
    <br />
    ตรวจสอบแผนการใช้งบประมาณ (ทั่วไป)
    <hr />
</div>
<div class="row">
    <form id="frm" class="form-horizontal" action="<?php echo base_url(); ?>/<?= $routeGroup ?>" method="post">
        <!--
        <div class="row text-left">
            <div class="col-md-12">
                <div class="form-group row">
                    <div class="col-12">
                        ชื่อโครงการ
                        <input type="text" class='form-control' name="data_search1" id="data_search1" value="<?php echo $data_search1; ?>" />
                    </div>
                </div>
            </div>
        </div>
        -->
        <div class="row text-left">
            <div class="col-md-12">
                <div class="form-group row">
                    <div class="col-12">
                        เลือกแผน
                        <?php echo form_dropdown('data_search2', $dropdown_masterOverAllPlan, $data_search2, "class='form form-control' id='data_search2' onchange='GetAnnualTargetValueYearDetail();' "); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-left">
            <div class="col-md-12">
                <div class="form-group row">
                    <div class="col-sm-4">
                        <button type="submit" class="btn btn-info" name='search_value' value="search_value"><i class="fas fa-search"></i> ค้นหาข้อมูล</button>
                    </div>
                </div>
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
                                <th class="align-middle text-center">ชื่อแผน</th>
                                <!--<th class="align-middle text-center">ปีงบประมาณ</th>-->
                                <th class="align-middle text-center">หน่วยงาน</th>
                                <th class="align-middle text-center">ค่าใช้จ่ายงบประมาณรวมทั้งหมด(บาท)</th>
                                <th class="align-middle text-center">ดูรายละเอียดข้อมูล</th>
                                <th class="align-middle text-center">เลือก</th>
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
                                        <td class="align-top text-left"><?= $item["PlanName"]; ?></td>
                                        <!--<td class="align-top text-center"><?= $item["PlanYearName"]; ?></td>-->
                                        <td class="align-top text-center"><?= $item["GroupUserName"]; ?></td>
                                        <td class="align-top text-right"><?= number_format($item["sum_price_all"], 2); ?></td>
                                        <td class="align-top text-center">
                                            <span class="detail">
                                                <a id="btnView" class="btn btn-primary" onclick="window.open('../../<?= $routeGroup ?>/view/<?= $item["DraftBudgetControl_id"] ?>', '_blank', 'width=1400,height=550,scrollbars=1');">เลือก</a>
                                            </span>
                                        </td>
                                        <td class="align-top text-center">
                                            <?php if ($item["FlagApprove"] == 'Y'): ?>
                                                <font color='green'>ยืนยันข้อมูลเรียบร้อย</font>
                                            <?php else: ?>
                                                <a id="btnEdit" class="btn btn-success" href="<?= $routeGroup ?>/edt/<?= $item["DraftBudgetControl_id"] ?>">ยืนยันข้อมูล</a>
                                                <a id="btnDel" class="btn btn-danger" href="<?= $routeGroup ?>/del/<?= $item["DraftBudgetControl_id"] ?>">ทบทวนข้อมูล</a>
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