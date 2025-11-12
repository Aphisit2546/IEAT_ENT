<?= $this->extend('layouts/main') ?>

<?= $this->section("content"); ?>

<div class="class_header_page_02">
    <br />
    โครงสร้างงบประมาณรายจ่าย
    <hr />
</div>
<div class="row">
    <form id="frm" class="form-horizontal" action="<?php echo base_url(); ?>/<?= $routeGroup ?>/<?= $action_page ?>" method="post">
        <input type="hidden" name="BudgetStructure_id" id="BudgetStructure_id" value="<?php echo $data['BudgetStructure_id']; ?>" readonly />
        <?= csrf_field() ?>
        <div class="row text-left">
            <div class="col-md-12">
                <div class="form-group row">
                    <div class="col-3">
                        รหัสอ้างอิง
                        <input type="text" class='form-control' name="BudgetStructureCode" id="BudgetStructureCode" value="<?php echo $data['BudgetStructureCode']; ?>" readonly />
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
                        รหัสควบคุมเวอร์ชัน
                        <input type="text" class='form-control' name="VersionControl" id="VersionControl" value="<?php echo $data['VersionControl']; ?>" required />
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-left">
            <div class="col-md-12">
                <div class="form-group row">
                    <div class="col-12">
                        รายละเอียดเวอร์ชัน
                        <textarea name='VersionDescription' rows='3' class='form-control'><?php echo $data['VersionDescription']; ?></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-left">
            <div class="col-md-12">
                <div class="form-group row">
                    รายการโครงสร้างงบประมาณรายจ่าย
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
                            <th class="text-center" width="18%">
                                <font color='white'>ระดับหมวดงบประมาณ</font>
                            </th>
                            <th class="text-center">
                                <font color='white'>ชื่อโครงสร้างงบประมาณ</font>
                            </th>
                            <th class="text-center">
                                <font color='white'>รายละเอียด</font>
                            </th>
                        </tr>
                        <?php
                        if (!empty($data['BudgetStructureDetail'])) {
                            $count_data_use = count($data['BudgetStructureDetail']);
                        }
                        foreach ($data['BudgetStructureDetail'] as $BudgetStructureDetail):
                        ?>
                            <tr>
                                <td align="left" valign="middle"><input type="checkbox" name="chk" id="chk" /></td>
                                <td align="left" valign="middle">
                                    <span class="detail">
                                        <input onkeyup="isNumberchar(this.value,this)" size='2' name="ItemL1[]" type="text" id="ItemL1[]" value="<?php echo $BudgetStructureDetail['ItemL1']; ?>" /> <b>.</b>
                                        <input onkeyup="isNumberchar(this.value,this)" size='2' name="ItemL2[]" type="text" id="ItemL2[]" value="<?php echo $BudgetStructureDetail['ItemL2']; ?>" /> <b>.</b>
                                        <input onkeyup="isNumberchar(this.value,this)" size='2' name="ItemL3[]" type="text" id="ItemL3[]" value="<?php echo $BudgetStructureDetail['ItemL3']; ?>" />
                                    </span>
                                </td>
                                <td align="left" valign="middle">
                                    <span class="detail">
                                        <input class="form form-control" name="Name[]" type="text" id="Name[]" value="<?php echo $BudgetStructureDetail['Name']; ?>" />
                                    </span>
                                </td>
                                <td align="left" valign="middle">
                                    <span class="detail">
                                        <input class="form form-control" name="Description[]" type="text" id="Description[]" value="<?php echo $BudgetStructureDetail['Description']; ?>" />
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
                                    <input onkeyup="isNumberchar(this.value,this)" size='2' name="ItemL1[]" type="text" id="ItemL1[]" value="" /> <b>.</b>
                                    <input onkeyup="isNumberchar(this.value,this)" size='2' name="ItemL2[]" type="text" id="ItemL2[]" value="" /> <b>.</b>
                                    <input onkeyup="isNumberchar(this.value,this)" size='2' name="ItemL3[]" type="text" id="ItemL3[]" value="" />
                                </span>
                            </td>
                            <td align="left" valign="middle">
                                <span class="detail">
                                    <input class="form form-control" name="Name[]" type="text" id="Name[]" value="" />
                                </span>
                            </td>
                            <td align="left" valign="middle">
                                <span class="detail">
                                    <input class="form form-control" name="Description[]" type="text" id="Description[]" value="" />
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
                        <textarea name='Remarks' rows='3' class='form-control'><?php echo $data['Remarks']; ?></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-sm-12 text-right">
                <input name="btnSave" id="btnSave" type="submit" class="btn btn-success" value="บันทึกข้อมูล" onclick="javascript:return formCheck();">
                <input name="btnConfirm" id="btnConfirm" type="submit" class="btn btn-info" value="ยืนยันข้อมูล" onclick="javascript:return formCheck();">
                <button type="reset" class="btn btn-secondary" value="reset" onclick="window.location='<?php echo base_url(); ?>/<?= $routeGroup ?>'"><i class="fas fa-reply"></i> กลับสู่หน้าหลัก</button>
            </div>
        </div>
    </form>
</div>

<?= $this->endSection(); ?>

<?= $this->section("javascripts"); ?>
<script>
    function isNumberchar(str, obj) {
        var isThai = true;
        var orgi_text = "0123456789";
        var chk_text = str.split("");
        chk_text.filter(function(s) {
            if (orgi_text.indexOf(s) == -1) {
                isThai = false;
                obj.value = str.replace(RegExp(s, "g"), '');
            }
        });
        return isThai; // ถ้าเป็น true แสดงว่าเป็นภาษาไทยทั้งหมด*/
    }

    function formCheck() {
        var VersionControl = document.getElementById('VersionControl').value;

        if (VersionControl.trim() == '') {
            alert('กรุณากรอกชื่อภาษาไทย');
            document.getElementById('VersionControl').focus();
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

    function getTableRowsCount(tableID) {
        var textFieldSumBuilding = document.getElementById(tableID);
        try {
            var table = document.getElementById(tableID);
            return table.rows.length;
        } catch (e) {
            alert(e);
        }
        return -1; //Return -1 if TableID not found
    }

    function getTableSelectedCount(tableID) {
        var textFieldSumBuilding = document.getElementById(tableID);
        try {
            var table = document.getElementById(tableID);
            var selectedCount = 0;
            var rowCount = table.rows.length;
            for (var i = 0; i < rowCount; i++) {
                var row = table.rows[i];
                var chkbox = row.cells[0].childNodes[0];
                if (chkbox != null && chkbox.checked == true) {
                    selectedCount++;
                }
            }
            return selectedCount;
        } catch (e) {
            alert(e);
        }
        return -1; //Return -1 if TableID not found
    }

    let startDate = document.getElementById('start_plan')
    let endDate = document.getElementById('finish_plan')

    startDate.addEventListener('change', (e) => {
        let startDateVal = e.target.value
        document.getElementById('start_plan').innerText = startDateVal
    })

    endDate.addEventListener('change', (e) => {
        let endDateVal = e.target.value
        document.getElementById('finish_plan').innerText = endDateVal
    })

    var fncSubmit = function() {
        $("#frm").submit();
    }
    $(document).ready(function() {
        // console.log("Document ready page Add");
        /*
        $("#btnSave").on("click", function() {
            confirmPopup("กรุณายืนยันบันทึกข้อมูล", "บันทึกข้อมูล", "ยกเลิก", fncSubmit);
        });
        */
    })

    $(window).on("load", function() {
        /*
        $('[name=date_receive_report]').daterangepicker({
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
    });
</script>
<?= $this->endSection(); ?>