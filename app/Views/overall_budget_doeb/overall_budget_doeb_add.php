<?= $this->extend('layouts/main') ?>

<?= $this->section("content"); ?>

<div class="class_header_page_02">
    <br />
    โปรแกรมจัดทำข้อมูลภาพรวมแผนงบประมาณ
    <hr />
</div>
<div class="row">
    <form id="frm" class="form-horizontal" action="<?php echo base_url(); ?>/<?= $routeGroup ?>/<?= $action_page ?>" method="post">
        <input type="hidden" name="OverAllBudget_id" id="OverAllBudget_id" value="<?php echo $data['OverAllBudget_id']; ?>" readonly />
        <?= csrf_field() ?>
        <div class="row text-left">
            <div class="col-md-12">
                <div class="form-group row">
                    <div class="col-3">
                        รหัสอ้างอิง
                        <input type="text" class='form-control' name="OverAllPlanCode" id="OverAllPlanCode" value="<?php echo $data['OverAllPlanCode']; ?>" readonly />
                    </div>
                    <div class="col-3">
                        วันที่ปรับปรุงข้อมูลล่าสุด
                        <input type="text" class='form-control' name="ModifyDate" id="ModifyDate" value="<?php echo $data['ModifyDate']; ?>" readonly />
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-left">
            <div class="col-md-12">
                <div class="form-group row">
                    <div class="col-12">
                        ชื่อแผน
                        <input type="text" class='form-control' name="PlanName" id="PlanName" value="<?php echo $data['PlanName']; ?>" required />
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-left">
            <div class="col-md-12">
                <div class="form-group row">
                    <div class="col-6">
                        ประเภทแผน
                        <?php echo form_dropdown('TypePlan', $dropdown_master_plan_for_budgetplan, $data["TypePlan"], "class='form form-control' "); ?>
                    </div>
                    <div class="col-3">
                        ปีงบประมาณ
                        <?php echo form_dropdown('Fiscalyear', $dropdown_year_thai, $data["Fiscalyear"], "class='form form-control' "); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-left">
            <div class="col-md-12">
                <div class="form-group row">
                    <div class="col-12">
                        ที่มา
                        <textarea name='Origin' rows='5' class='form-control'><?php echo $data['Origin']; ?></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-left">
            <div class="col-md-12">
                <div class="form-group row">
                    <div class="col-12">
                        วิสัยทัศน์
                        <textarea name='Vision' rows='5' class='form-control'><?php echo $data['Vision']; ?></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-left">
            <div class="col-md-12">
                <div class="form-group row">
                    <div class="col-12">
                        พันธกิจ
                        <textarea name='Mission' rows='5' class='form-control'><?php echo $data['Mission']; ?></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-left">
            <div class="col-md-12">
                <div class="form-group row">
                    <div class="col-12">
                        ค่านิยม
                        <textarea name='Values' rows='5' class='form-control'><?php echo $data['Values']; ?></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-left">
            <div class="col-md-12">
                <div class="form-group row">
                    <div class="col-12">
                        ภาพรวมเป้าหมาย
                        <textarea name='GoalOverview' rows='5' class='form-control'><?php echo $data['GoalOverview']; ?></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-left">
            <div class="col-md-12">
                <div class="form-group row">
                    ภาพรวมเป้าหมาย ตัวชี้วัด และค่าเป้าหมายของแผน
                    <table>
                        <tr>
                            <td align="left" valign="middle">
                                <span class="detail">
                                    <input type="button" class="btn btn-success" value="เพิ่มรายการ" onClick="addRow('datatable1')" />
                                    <input type="button" class="btn btn-danger" value="ลบรายการ" onClick="deleteRow('datatable1')" />
                                </span>
                            </td>
                        </tr>
                    </table>
                    <br />
                    <table class="table table-bordered" id="datatable1">
                        <tr class="bg_th">
                            <th class="text-center" width="7%">
                                <font color='white'>เลือกลบ</font>
                            </th>
                            <th class="text-center" width="10%">
                                <font color='white'>ปี พ.ศ.</font>
                            </th>
                            <th class="text-center">
                                <font color='white'>เป้าหมาย</font>
                            </th>
                            <th class="text-center">
                                <font color='white'>ตัวชี้วัด</font>
                            </th>
                            <th class="text-center" width="10%">
                                <font color='white'>จำนวน</font>
                            </th>
                            <th class="text-center" width="20%">
                                <font color='white'>หน่วยนับ</font>
                            </th>
                        </tr>
                        <?php
                        if (!empty($data['AnnualTargetValue'])) {
                            $count_data_use = count($data['AnnualTargetValue']);
                        }
                        foreach ($data['AnnualTargetValue'] as $AnnualTargetValue):
                        ?>
                            <tr>
                                <td align="left" valign="middle"><input type="checkbox" name="chk" id="chk" /></td>
                                <td align="left" valign="middle">
                                    <span class="detail">
                                        <input class="form form-control" name="Years[]" type="text" id="Years[]" value="<?php echo $AnnualTargetValue['Years']; ?>" />
                                    </span>
                                </td>
                                <td align="left" valign="middle">
                                    <span class="detail">
                                        <input class="form form-control" name="AnnualTargetValue_NameFocus[]" type="text" id="AnnualTargetValue_NameFocus[]" value="<?php echo $AnnualTargetValue['AnnualTargetValue_NameFocus']; ?>" />
                                    </span>
                                </td>
                                <td align="left" valign="middle">
                                    <span class="detail">
                                        <input class="form form-control" name="AnnualTargetValue_NamePoint[]" type="text" id="AnnualTargetValue_NamePoint[]" value="<?php echo $AnnualTargetValue['AnnualTargetValue_NamePoint']; ?>" />
                                    </span>
                                </td>
                                <td align="left" valign="middle">
                                    <span class="detail">
                                        <input class="form form-control" name="AnnualTargetValue_Values[]" type="text" id="AnnualTargetValue_Values[]" value="<?php echo $AnnualTargetValue['AnnualTargetValue_Values']; ?>" />
                                    </span>
                                </td>
                                <td align="left" valign="middle">
                                    <?php echo form_dropdown('AnnualTargetValue_Unit[]', $dropdown_master_unit, $AnnualTargetValue["AnnualTargetValue_Unit"], "class='form form-control' "); ?>
                                </td>
                            </tr>
                        <?php
                        endforeach;
                        ?>
                        <tr>
                            <td align="left" valign="middle"><input type="checkbox" name="chk" id="chk" /></td>
                            <td align="left" valign="middle">
                                <span class="detail">
                                    <input class="form form-control" name="Years[]" type="text" id="Years[]" value="" />
                                </span>
                            </td>
                            <td align="left" valign="middle">
                                <span class="detail">
                                    <input class="form form-control" name="AnnualTargetValue_NameFocus[]" type="text" id="AnnualTargetValue_NameFocus[]" value="" />
                                </span>
                            </td>
                            <td align="left" valign="middle">
                                <span class="detail">
                                    <input class="form form-control" name="AnnualTargetValue_NamePoint[]" type="text" id="AnnualTargetValue_NamePoint[]" value="" />
                                </span>
                            </td>
                            <td align="left" valign="middle">
                                <span class="detail">
                                    <input class="form form-control" name="AnnualTargetValue_Values[]" type="text" id="AnnualTargetValue_Values[]" value="" />
                                </span>
                            </td>
                            <td align="left" valign="middle">
                                <?php echo form_dropdown('AnnualTargetValue_Unit[]', $dropdown_master_unit, '', "class='form form-control' "); ?>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="row text-left">
            <div class="col-md-12">
                <div class="form-group row">
                    ยุทธศาสตร์ที่เกี่ยวข้อง
                    <table>
                        <tr>
                            <td align="left" valign="middle">
                                <span class="detail">
                                    <input type="button" class="btn btn-success" value="เพิ่มรายการ" onClick="addRow2('datatable2')" />
                                    <input type="button" class="btn btn-danger" value="ลบรายการ" onClick="deleteRow2('datatable2')" />
                                </span>
                            </td>
                        </tr>
                    </table>
                    <br />
                    <table class="table table-bordered" id="datatable2">
                        <tr class="bg_th">
                            <th class="text-center" width="7%">
                                <font color='white'>เลือกลบ</font>
                            </th>
                            <th class="text-center">
                                <font color='white'>รายการยุทธศาสตร์</font>
                            </th>
                            <th class="text-center">
                                <font color='white'>หมายเหตุ</font>
                            </th>
                        </tr>
                        <?php
                        if (!empty($data['RelatedStrategies'])) {
                            $count_data_use2 = count($data['RelatedStrategies']);
                        }
                        foreach ($data['RelatedStrategies'] as $RelatedStrategies):
                        ?>
                            <tr>
                                <td align="left" valign="middle"><input type="checkbox" name="chk" id="chk" /></td>
                                <td align="left" valign="middle">
                                    <span class="detail">
                                        <input class="form form-control" name="RelatedStrategies_Name[]" type="text" id="RelatedStrategies_Name[]" value="<?php echo $RelatedStrategies['RelatedStrategies_Name']; ?>" />
                                    </span>
                                </td>
                                <td align="left" valign="middle">
                                    <span class="detail">
                                        <input class="form form-control" name="RelatedStrategies_Remarks[]" type="text" id="RelatedStrategies_Remarks[]" value="<?php echo $RelatedStrategies['RelatedStrategies_Remarks']; ?>" />
                                    </span>
                                </td>
                            </tr>
                        <?php
                        endforeach;
                        ?>
                        <tr>
                            <td align="left" valign="middle"><input type="checkbox" name="chk" id="chk" /></td>
                            <td align="left" valign="middle">
                                <span class="detail">
                                    <input class="form form-control" name="RelatedStrategies_Name[]" type="text" id="RelatedStrategies_Name[]" value="" />
                                </span>
                            </td>
                            <td align="left" valign="middle">
                                <span class="detail">
                                    <input class="form form-control" name="RelatedStrategies_Remarks[]" type="text" id="RelatedStrategies_Remarks[]" value="" />
                                </span>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="row text-left">
            <div class="col-md-12">
                <div class="form-group row">
                    นโยบายที่เกี่ยวข้อง
                    <table>
                        <tr>
                            <td align="left" valign="middle">
                                <span class="detail">
                                    <input type="button" class="btn btn-success" value="เพิ่มรายการ" onClick="addRow3('datatable3')" />
                                    <input type="button" class="btn btn-danger" value="ลบรายการ" onClick="deleteRow3('datatable3')" />
                                </span>
                            </td>
                        </tr>
                    </table>
                    <br />
                    <table class="table table-bordered" id="datatable3">
                        <tr class="bg_th">
                            <th class="text-center" width="7%">
                                <font color='white'>เลือกลบ</font>
                            </th>
                            <th class="text-center">
                                <font color='white'>รายการนโยบาย</font>
                            </th>
                            <th class="text-center">
                                <font color='white'>หมายเหตุ</font>
                            </th>
                        </tr>
                        <?php
                        if (!empty($data['RelatedPolicies'])) {
                            $count_data_use3 = count($data['RelatedPolicies']);
                        }
                        foreach ($data['RelatedPolicies'] as $RelatedPolicies):
                        ?>
                            <tr>
                                <td align="left" valign="middle"><input type="checkbox" name="chk" id="chk" /></td>
                                <td align="left" valign="middle">
                                    <span class="detail">
                                        <input class="form form-control" name="RelatedPolicies_Name[]" type="text" id="RelatedPolicies_Name[]" value="<?php echo $RelatedPolicies['RelatedPolicies_Name']; ?>" />
                                    </span>
                                </td>
                                <td align="left" valign="middle">
                                    <span class="detail">
                                        <input class="form form-control" name="RelatedPolicies_Remarks[]" type="text" id="RelatedPolicies_Remarks[]" value="<?php echo $RelatedPolicies['RelatedPolicies_Remarks']; ?>" />
                                    </span>
                                </td>
                            </tr>
                        <?php
                        endforeach;
                        ?>
                        <tr>
                            <td align="left" valign="middle"><input type="checkbox" name="chk" id="chk" /></td>
                            <td align="left" valign="middle">
                                <span class="detail">
                                    <input class="form form-control" name="RelatedPolicies_Name[]" type="text" id="RelatedPolicies_Name[]" value="" />
                                </span>
                            </td>
                            <td align="left" valign="middle">
                                <span class="detail">
                                    <input class="form form-control" name="RelatedPolicies_Remarks[]" type="text" id="RelatedPolicies_Remarks[]" value="" />
                                </span>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="row text-left">
            <div class="col-md-12">
                <div class="form-group row">
                    <div class="col-12">
                        หมายเหตุ
                        <textarea name='Remarks' rows='5' class='form-control'><?php echo $data['Remarks']; ?></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-sm-12 text-right">
                <input name="btnSave" id="btnSave" type="submit" class="btn btn-info" value="บันทึกข้อมูล" onclick="javascript:return formCheck();">
                <input name="btnConfirm" id="btnConfirm" type="submit" class="btn btn-success" value="ยืนยันข้อมูล" onclick="javascript:return formCheck();">
                <button type="reset" class="btn btn-secondary" value="reset" onclick="window.location='<?php echo base_url(); ?>/<?= $routeGroup ?>'"><i class="fas fa-reply"></i> กลับสู่หน้าหลัก</button>

            </div>
        </div>
        <br />
    </form>
</div>

<?= $this->endSection(); ?>

<?= $this->section("javascripts"); ?>
<script>
    function formCheck() {
        var PlanName = document.getElementById('PlanName').value;

        if (PlanName.trim() == '') {
            alert('กรุณากรอกชื่อภาษาไทย');
            document.getElementById('PlanName').focus();
            return false;
        } else {
            document.form_ID.submit();
            return true;
        }
    }

    function addRow(tableID) {

        var table = document.getElementById(tableID);

        var rowCount = table.rows.length;
        var row = table.insertRow(rowCount);

        var colCount = table.rows[<?php echo $count_data_use; ?> + 1].cells.length;

        for (var i = 0; i < colCount; i++) {

            var newcell = row.insertCell(i);

            newcell.innerHTML = table.rows[<?php echo $count_data_use; ?> + 1].cells[i].innerHTML;
            //alert(newcell.childNodes);
            switch (newcell.childNodes[0].type) {
                case "text":
                    newcell.childNodes[0].value = "";
                    break;
                case "checkbox":
                    newcell.childNodes[0].checked = false;
                    break;
                case "select-one":
                    newcell.childNodes[0].selectedIndex = 0;
                    break;
            }
        }
    }

    function deleteRow(tableID) {
        var selectCount = getTableSelectedCount(tableID);
        var tableRows = getTableRowsCount(tableID);

        if (selectCount >= (tableRows - 1)) {
            alert("ไม่สามารถลบแถวทั้งหมดได้ ต้องเหลือข้อมูลอย่างน้อย 1 แถว");
            return;
        }
        try {
            var table = document.getElementById(tableID);
            var rowCount = table.rows.length;

            for (var i = 0; i < rowCount; i++) {
                var row = table.rows[i];
                var chkbox = row.cells[0].childNodes[0];
                if (chkbox != null && chkbox.checked == true) {
                    table.deleteRow(i);
                    rowCount--;
                    i--;
                }
            }
        } catch (e) {
            alert(e);
        }
    }

    function addRow2(tableID) {

        var table = document.getElementById(tableID);

        var rowCount = table.rows.length;
        var row = table.insertRow(rowCount);

        var colCount = table.rows[<?php echo $count_data_use2; ?> + 1].cells.length;

        for (var i = 0; i < colCount; i++) {

            var newcell = row.insertCell(i);

            newcell.innerHTML = table.rows[<?php echo $count_data_use2; ?> + 1].cells[i].innerHTML;
            //alert(newcell.childNodes);
            switch (newcell.childNodes[0].type) {
                case "text":
                    newcell.childNodes[0].value = "";
                    break;
                case "checkbox":
                    newcell.childNodes[0].checked = false;
                    break;
                case "select-one":
                    newcell.childNodes[0].selectedIndex = 0;
                    break;
            }
        }
    }

    function deleteRow2(tableID) {
        var selectCount = getTableSelectedCount(tableID);
        var tableRows = getTableRowsCount(tableID);

        if (selectCount >= (tableRows - 1)) {
            alert("ไม่สามารถลบแถวทั้งหมดได้ ต้องเหลือข้อมูลอย่างน้อย 1 แถว");
            return;
        }
        try {
            var table = document.getElementById(tableID);
            var rowCount = table.rows.length;

            for (var i = 0; i < rowCount; i++) {
                var row = table.rows[i];
                var chkbox = row.cells[0].childNodes[0];
                if (chkbox != null && chkbox.checked == true) {
                    table.deleteRow(i);
                    rowCount--;
                    i--;
                }
            }
        } catch (e) {
            alert(e);
        }
    }

    function addRow3(tableID) {

        var table = document.getElementById(tableID);

        var rowCount = table.rows.length;
        var row = table.insertRow(rowCount);

        var colCount = table.rows[<?php echo $count_data_use3; ?> + 1].cells.length;

        for (var i = 0; i < colCount; i++) {

            var newcell = row.insertCell(i);

            newcell.innerHTML = table.rows[<?php echo $count_data_use3; ?> + 1].cells[i].innerHTML;
            //alert(newcell.childNodes);
            switch (newcell.childNodes[0].type) {
                case "text":
                    newcell.childNodes[0].value = "";
                    break;
                case "checkbox":
                    newcell.childNodes[0].checked = false;
                    break;
                case "select-one":
                    newcell.childNodes[0].selectedIndex = 0;
                    break;
            }
        }
    }

    function deleteRow3(tableID) {
        var selectCount = getTableSelectedCount(tableID);
        var tableRows = getTableRowsCount(tableID);

        if (selectCount >= (tableRows - 1)) {
            alert("ไม่สามารถลบแถวทั้งหมดได้ ต้องเหลือข้อมูลอย่างน้อย 1 แถว");
            return;
        }
        try {
            var table = document.getElementById(tableID);
            var rowCount = table.rows.length;

            for (var i = 0; i < rowCount; i++) {
                var row = table.rows[i];
                var chkbox = row.cells[0].childNodes[0];
                if (chkbox != null && chkbox.checked == true) {
                    table.deleteRow(i);
                    rowCount--;
                    i--;
                }
            }
        } catch (e) {
            alert(e);
        }
    }

    var fncSubmit = function() {
        $("#frm").submit();
    }
    $(document).ready(function() {
        // console.log("Document ready page Add");
    })

    $(window).on("load", function() {
        /*
        $('[name=StartPlan]').daterangepicker({
            "singleDatePicker": true,
            "showDropdowns": true,
            "timePicker": false,
            "timePicker24Hour": true,
            "autoApply": true,
            StartDate: moment().add(543, 'years').format("DD/MM/YYYY"),
            locale: {
                format: 'DD/MM/YYYY'
            }
        });

        $('[name=FinishPlan]').daterangepicker({
            "singleDatePicker": true,
            "showDropdowns": true,
            "timePicker": false,
            "timePicker24Hour": true,
            "autoApply": true,
            StartDate: moment().add(543, 'years').format("DD/MM/YYYY"),
            locale: {
                format: 'DD/MM/YYYY'
            }
        });
        */
    });
</script>
<?= $this->endSection(); ?>