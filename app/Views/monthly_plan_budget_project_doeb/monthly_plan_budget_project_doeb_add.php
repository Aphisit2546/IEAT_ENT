<?= $this->extend('layouts/main') ?>

<?= $this->section("content"); ?>

<div class="class_header_page_02">
    <br />
    จัดทำ/ปรับปรุงแผนการใช้งบประมาณ (โครงการ)
    <hr />
</div>
<div class="row">
    <form name"frm" id="frm" class="form-horizontal" action="<?php echo base_url(); ?>/<?= $routeGroup ?>/<?= $action_page ?>" method="post">
        <input type="hidden" name="OverAllPlanStrategy_id" id="OverAllPlanStrategy_id" value="<?php echo $data['OverAllPlanStrategy_id']; ?>" readonly />
        <input type="hidden" name="CreatePlanDetail_id" id="CreatePlanDetail_id" value="<?php echo $data['CreatePlanDetail_id']; ?>" readonly />
        <?= csrf_field() ?>
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <td class="align-top text-left" width='35%'><b>ชื่อโครงการ</b></td>
                    <td class="align-top text-center"><?php echo $data['ProjectNameTH']; ?></td>
                </tr>
                <tr>
                    <td class="align-top text-left"><b>งบประมาณที่ได้รับการจัดสรร (บาท)</b></td>
                    <td class="align-top text-center"><?= number_format($data["Budget02"], 2) ?></td>
                </tr>
            </tbody>
        </table>
        <div class="class_header_page_03">
            รายละเอียดงวดงานและงวดเงิน (ข้อมูลเดิม)
        </div>
        <br />
        <div class="scrollmenu">
            <table class="table table-bordered" id="datatable1">
                <tr class="bg_th">
                    <th class="align-middle text-center">
                        <font color='white'>งานงวดที่</font>
                    </th>
                    <th class="align-middle text-center">
                        <font color='white'>เงินงวดที่</font>
                    </th>
                    <th class="align-middle text-center">
                        <font color='white'>ร้อยละการเบิกจ่าย</font>
                    </th>
                    <th class="align-middle text-center">
                        <font color='white'>ยอดเบิกจ่าย(บาท)</font>
                    </th>
                    <th class="align-middle text-center">
                        <font color='white'>จ่ายเมื่อ<br />(จำนวนวันนับถัดจากวันที่ลงนามตามสัญญา)</font>
                    </th>
                    <th class="align-middle text-center">
                        <font color='white'>ประมาณวันที่</font>
                    </th>
                    <th class="align-middle text-center">
                        <font color='white'>ร้อยละความก้าวหน้างาน</font>
                    </th>
                </tr>
                <tbody>
                    <?php
                    foreach ($data['OverAllPlanStrategyWorkMoneyPeriod'] as $result_data_set1):
                    ?>
                        <tr>
                            <td align="center" valign="middle">
                                <span class="detail">
                                    <?php echo $result_data_set1['WorkMoneyPeriodNumber']; ?>
                                </span>
                            </td>
                            <td align="center" valign="middle">
                                <span class="detail">
                                    <?php echo $result_data_set1['MoneyPeriod']; ?>
                                </span>
                            </td>
                            <td align="center" valign="middle">
                                <span class="detail">
                                    <?php echo $result_data_set1['Disbursement']; ?>
                                </span>
                            </td>
                            <td align="right" valign="middle">
                                <span class="detail">
                                    <?php echo number_format($result_data_set1['TotalDisbursement'], 2); ?>
                                </span>
                            </td>
                            <td align="center" valign="middle">
                                <span class="detail">
                                    <?php echo $result_data_set1['TimeDisbursement']; ?>
                                </span>
                            </td>
                            <td align="center" valign="middle">
                                <span class="detail">
                                    <?php echo $result_data_set1['DateWorkMoneyPeriod']; ?>
                                </span>
                            </td>
                            <td align="center" valign="middle">
                                <span class="detail">
                                    <?php echo $result_data_set1['ProgressWorkMoneyPeriod']; ?>
                                </span>
                            </td>
                        </tr>
                    <?php
                    endforeach;
                    ?>
                </tbody>
            </table>
        </div>
        <hr />
        <div class="class_header_page_03">
            รายละเอียดงวดงานและงวดเงิน (ข้อมูลใหม่)
        </div>
        <table>
            <tr>
                <td align="left" valign="middle">
                    <span class="detail">
                        <input type="button" name="add_data" class="btn btn-success" value="เพิ่มรายการ" onClick="addRow('datatable_new')" />
                        <input type="button" name="del_data" class="btn btn-danger" value="ลบรายการ" onClick="deleteRow('datatable_new')" />
                    </span>
                </td>
            </tr>
        </table>
        <br />
        <table class="table table-bordered" id="datatable_new">
            <tr class="bg_th">
                <th class="align-middle text-center">
                    <font color='white'>เลือกลบ</font>
                </th>
                <th class="align-middle text-center">
                    <font color='white'>งานงวดที่</font>
                </th>
                <th class="align-middle text-center">
                    <font color='white'>เงินงวดที่</font>
                </th>
                <th class="align-middle text-center">
                    <font color='white'>ร้อยละการเบิกจ่าย</font>
                </th>
                <th class="align-middle text-center">
                    <font color='white'>ยอดเบิกจ่าย(บาท)</font>
                </th>
                <th class="align-middle text-center">
                    <font color='white'>จ่ายเมื่อ<br />(จำนวนวันนับถัดจากวันที่ลงนามตามสัญญา)</font>
                </th>
                <th class="align-middle text-center">
                    <font color='white'>ประมาณวันที่</font>
                </th>
                <th class="align-middle text-center">
                    <font color='white'>ร้อยละความก้าวหน้างาน</font>
                </th>
            </tr>
            <tbody>
                <?php
                if (!empty($data_new)) {
                    $count_data_use1 = count($data_new);
                }
                $overall_price_list = array();
                foreach ($data_new as $result_data_set2):
                ?>
                    <tr>
                        <td align="left" valign="middle"><input type="checkbox" name="chk" id="chk" /></td>
                        <td align="left" valign="middle">
                            <span class="detail">
                                <input class="form form-control" name="WorkMoneyPeriodNumber[]" type="text" id="WorkMoneyPeriodNumber[]" value="<?php echo $result_data_set2['WorkMoneyPeriodNumber']; ?>" />
                            </span>
                        </td>
                        <td align="left" valign="middle">
                            <span class="detail">
                                <input class="form form-control" name="MoneyPeriod[]" type="text" id="MoneyPeriod[]" value="<?php echo $result_data_set2['MoneyPeriod']; ?>" />
                            </span>
                        </td>
                        <td align="left" valign="middle">
                            <span class="detail">
                                <input class="form form-control" name="Disbursement[]" type="text" id="Disbursement[]" value="<?php echo $result_data_set2['Disbursement']; ?>" />
                            </span>
                        </td>
                        <td align="left" valign="middle"><input class="form form-control" name="TotalDisbursement[]" type="text" id="TotalDisbursement[]" value="<?php echo $result_data_set2['TotalDisbursement']; ?>" onkeyup="sum_budget('datatable_new')" OnKeyPress="return chkNumber(this)" /></td>
                        <td align="left" valign="middle">
                            <span class="detail">
                                <input class="form form-control" name="TimeDisbursement[]" type="text" id="TimeDisbursement[]" value="<?php echo $result_data_set2['TimeDisbursement']; ?>" />
                            </span>
                        </td>
                        <td align="left" valign="middle">
                            <span class="detail">
                                <input autocomplete="off" data-provide="datepicker" data-date-language="th-th" class="form form-control" name="DateWorkMoneyPeriod[]" type="text" id="DateWorkMoneyPeriod[]" value="<?php echo $result_data_set2['DateWorkMoneyPeriod']; ?>" />
                            </span>
                        </td>
                        <td align="left" valign="middle">
                            <span class="detail">
                                <input class="form form-control" name="ProgressWorkMoneyPeriod[]" type="text" id="ProgressWorkMoneyPeriod[]" value="<?php echo $result_data_set2['ProgressWorkMoneyPeriod']; ?>" />
                            </span>
                        </td>
                        <?php
                        $overall_price_list[] = $result_data_set2['TotalDisbursement'];
                        ?>
                    </tr>
                <?php
                endforeach;
                ?>
                <tr>
                    <td align="left" valign="middle"><input type="checkbox" name="chk" id="chk" /></td>
                    <td align="left" valign="middle">
                        <span class="detail">
                            <input class="form form-control" name="WorkMoneyPeriodNumber[]" type="text" id="WorkMoneyPeriodNumber[]" value="" />
                        </span>
                    </td>
                    <td align="left" valign="middle">
                        <span class="detail">
                            <input class="form form-control" name="MoneyPeriod[]" type="text" id="MoneyPeriod[]" value="" />
                        </span>
                    </td>
                    <td align="left" valign="middle">
                        <span class="detail">
                            <input class="form form-control" name="Disbursement[]" type="text" id="Disbursement[]" value="" />
                        </span>
                    </td>
                    <td align="left" valign="middle"><input class="form form-control" name="TotalDisbursement[]" type="text" id="TotalDisbursement[]" value="" onkeyup="sum_budget('datatable_new')" OnKeyPress="return chkNumber(this)" /></td>
                    <td align="left" valign="middle">
                        <span class="detail">
                            <input class="form form-control" name="TimeDisbursement[]" type="text" id="TimeDisbursement[]" value="" />
                        </span>
                    </td>
                    <td align="left" valign="middle">
                        <span class="detail">
                            <input autocomplete="off" data-provide="datepicker" data-date-language="th-th" class="form form-control" name="DateWorkMoneyPeriod[]" type="text" id="DateWorkMoneyPeriod[]" value="" />
                        </span>
                    </td>
                    <td align="left" valign="middle">
                        <span class="detail">
                            <input class="form form-control" name="ProgressWorkMoneyPeriod[]" type="text" id="ProgressWorkMoneyPeriod[]" value="" />
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="row text-right">
            <table>
                <tr>
                    <td align="right" valign="middle">
                        <span class="detail">
                            จำนวนเงินรวม : <input size='10' style="border-width: 0px; text-align: right; font-size:25px;" name="overall_price" type="text" id="overall_price" value="<?php if (!empty($overall_price_list)): echo array_sum($overall_price_list);
                                                                                                                                                                                        else: echo "-";
                                                                                                                                                                                        endif; ?> " readonly /> บาท
                        </span>
                    </td>
                </tr>
            </table>
        </div>
        <br />
        <div class="row text-left">
            <div class="col-md-12">
                <div class="form-group row">
                    <div class="col-12">
                        หมายเหตุ
                        <textarea name='Remarks' rows='5' class='form-control'><?php echo $data['monthly']['Remarks']; ?></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-sm-12 text-right">
                <input name="btnSave" id="btnSave" type="submit" class="btn btn-success" value="บันทึกข้อมูล" onclick="javascript:return formCheck();">
                <input name="btnSave_Confirm" id="btnSave_Confirm" type="submit" class="btn btn-info" value="ยืนยันข้อมูล" onclick="javascript:return formCheck();">
                <input type="button" class="btn btn-secondary" value="กลับสู่หน้าหลัก" onclick="window.location='<?php echo base_url(); ?>/<?= $routeGroup ?>'">
            </div>
        </div>
        <br />
    </form>

</div>

<?= $this->endSection(); ?>

<?= $this->section("javascripts"); ?>
<script>
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

        sum_budget(tableID);

    }

    function chkNumber(ele) {
        var vchar = String.fromCharCode(event.keyCode);
        if (vchar < '0' || vchar > '9') return false;
        ele.onKeyPress = vchar;
    }

    function sum_budget(tableID) {

        var countSum = 0;

        var table = document.getElementById(tableID);
        var rowCount = table.rows.length;

        for (var i = 1; i < rowCount; i++) { //i mush be 1, first rows of table will be ignore
            var row = table.rows[i];
            var textfieldBuildingPerRows = row.cells[4].childNodes[0]; //Building cell = 4 | childNodes[0] maybe have text or html tag, So it has to be node 1 not 0, Or it won't work
            if (textfieldBuildingPerRows.value != "") { //Not null in textfield
                if (isNaN(textfieldBuildingPerRows.value) == true) { //Not number? set value to zero
                    textfieldBuildingPerRows.value = 0;
                }
                countSum += parseFloat(textfieldBuildingPerRows.value);
            }
        }

        var countSum_use = parseFloat(countSum).toFixed(2);
        document.getElementById('overall_price').value = countSum_use;

    }

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