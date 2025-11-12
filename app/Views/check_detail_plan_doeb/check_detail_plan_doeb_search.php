<?= $this->extend('layouts/main') ?>

<?= $this->section("content"); ?>

<div class="class_header_page_02">
    <br />
    ตรวจทานรายละเอียดโครงการ
    <hr />
</div>
<div class="row">
    <form id="frm" class="form-horizontal" action="<?php echo base_url(); ?>/<?= $routeGroup ?>" method="post">
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
                    <div class="col-3">
                        ปีงบประมาณ
                        <?php echo form_dropdown('data_search3', $dropdown_AnnualTargetValue_Year, $data_search3, "class='form form-control' id='data_search3' "); ?>
                    </div>
                    <div class="col-2">
                        ถึง
                        <?php echo form_dropdown('data_search4', $dropdown_AnnualTargetValue_Year, $data_search4, "class='form form-control' id='data_search4' "); ?>
                    </div>
                    <div class="col-sm-4">
                        <br />
                        <button type="submit" class="btn btn-info" name='search_value' value="search_value"><i class="fas fa-search"></i> ค้นหาข้อมูล</button>
                        <button type="reset" class="btn btn-secondary" name='reset_value' value="reset"><i class="fas fa-reply"></i> ล้างข้อมูล</button>
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
                <h3 class="card-title">แผงอ้างอิง</h3>
            </div>
            <div class="row">
                <div class="col-12">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr class="align-middle">
                                <th class="align-middle text-center " style="width: 90px;">#</th>
                                <th class="align-middle text-center">ชื่อโครงการ</th>
                                <th class="align-middle text-center">มูลค่าโครงการ(บาท)</th>
                                <th class="align-middle text-center">ปีที่คาดว่าดำเนินงาน</th>
                                <th class="align-middle text-center">กลุ่มงาน</th>
                                <th class="align-middle text-center">จัดการข้อมูล</th>
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
                                        <td class="align-top text-left"><?= $item["ProjectNameTH"]; ?></td>
                                        <td class="align-top text-right"><?= $item["BudgetYearPlan"]; ?></td>
                                        <td class="align-top text-center"><?= $item["AnnualTargetValue_Year"]; ?></td>
                                        <td class="align-top text-center"><?= $item["GroupUserName"]; ?></td>
                                        <td class="align-top text-center">
                                            <?php if (!empty($item["CheckAllPlan_id"])): ?>
                                                <span class="detail">
                                                    <a id="btnView" class="btn btn-primary" onclick="window.open('<?= $routeGroup ?>/view/<?= $item["AllPlanId"] ?>.<?= $item["TypeAllPlan"] ?>.<?= $item["GroupUserID"] ?>', '_blank', 'width=1400,height=550,scrollbars=1');">ดูรายละเอียดข้อมูล</a>
                                                </span>
                                            <?php elseif ($item["Status_holding"] == 'Y'): ?>
                                                <a id="btnEdit" class="btn btn-success" href="<?= $routeGroup ?>/edt/<?= $item["AllPlanId"] ?>.<?= $item["TypeAllPlan"] ?>.<?= $item["GroupUserID"] ?>"><i class="fas fa-edit"></i> ตรวจทานข้อมูลค้างอยู่</a>
                                            <?php else: ?>
                                                <a id="btnEdit" class="btn btn-warning" href="<?= $routeGroup ?>/edt/<?= $item["AllPlanId"] ?>.<?= $item["TypeAllPlan"] ?>.<?= $item["GroupUserID"] ?>"><i class="fas fa-edit"></i> ตรวจทานข้อมูล</a>
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
    function GetAnnualTargetValueYearDetail() {
        var OverAllPlan_id = $("[name=data_search2]  option:selected").val();
        var objDDL = $("[name=data_search3]");
        objDDL.empty();
        objDDL.append("<option value='' >-- เลือกปี --</option>");

        var objDDL2 = $("[name=data_search4]");
        objDDL2.empty();
        objDDL2.append("<option value='' >-- เลือกปี --</option>");

        if (OverAllPlan_id == "") return;

        var jqxhr = $.get("<?php echo base_url(); ?>Ajax/OverAllPlanAnnualTargetValueDoeb_year/" + OverAllPlan_id)

            .done(function(response, jqxhr) {
                if (!(response == null || response == false)) {
                    var objData = response;
                    objData.forEach(function(item, index) {
                        objDDL.append("<option value='" + item.Years + "' >" + item.Years + "</option>");
                    });
                    // initddlDistrictID();
                } else {

                }
            });

        jqxhr.fail(function(response) {
                // alert( "error" );
                console.log(response);
            })
            .always(function() {
                // initddlDistrictID();
            });


        var jqxhr2 = $.get("<?php echo base_url(); ?>Ajax/OverAllPlanAnnualTargetValueDoeb_year/" + OverAllPlan_id)

            .done(function(response, jqxhr2) {
                if (!(response == null || response == false)) {
                    var objData2 = response;
                    objData2.forEach(function(item, index) {
                        objDDL2.append("<option value='" + item.Years + "' >" + item.Years + "</option>");
                    });
                    // initddlDistrictID();
                } else {

                }
            });

        jqxhr2.fail(function(response) {
                // alert( "error" );
                console.log(response);
            })
            .always(function() {
                // initddlDistrictID();
            });

    }

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