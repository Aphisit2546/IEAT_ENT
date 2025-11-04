<?= $this->extend('layouts/main_for_view') ?>

<?= $this->section("content"); ?>

<div class="class_header_page_02">
    <br />
    จัดทำ/ปรับปรุงแผนการใช้งบประมาณเพื่อขออนุมัติ
    <hr />
</div>
<div class="row">
    <form id="frm" class="form-horizontal" action="<?php echo base_url(); ?>/<?= $routeGroup ?>/<?= $action_page ?>" method="post">
        <?= csrf_field() ?>
        <div class="row text-left">
            <div class="col-md-12">
                <div class="form-group row">
                    <div class="col-3">
                        รหัสอ้างอิง
                        <input type="text" class='form-control' name="CreateBudgetControlCode" id="CreateBudgetControlCode" value="<?php echo $data['CreateBudgetControlCode']; ?>" readonly />
                    </div>
                    <div class="col-3">
                        วันที่ปรับปรุงข้อมูลล่าสุด
                        <input type="text" class='form-control' name="ModifyDate" id="ModifyDate" value="<?php echo $data['ModifyDate']; ?>" readonly />
                    </div>
                    <div class="col-3">
                        ครั้งที่
                        <input type="text" class='form-control' name="CountCreateBudgetControl" id="CountCreateBudgetControl" value="<?php echo $data['CountCreateBudgetControl']; ?>" readonly />
                    </div>
                </div>
            </div>
        </div>
        <?php if (empty($data['CreateBudgetControl_id'])): ?>
            <div class="row text-left">
                <div class="col-md-12">
                    <div class="form-group row">
                        <div class="col-12">
                            เลือกแผน
                            <?php echo form_dropdown('OverAllPlan_id', $dropdown_masterOverAllPlanForCreateBudgetControl, $data["OverAllPlan_id"], "class='form form-control' "); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-sm-12 text-right">
                    <input name="btnSave_continue" id="btnSave_continue" type="submit" class="btn btn-success" value="ยืนยันจัดทำรายละเอียดแผนงาน" onclick="javascript:return formCheck();">
                    <button type="reset" class="btn btn-secondary" value="reset" onclick="window.location='<?php echo base_url(); ?>/<?= $routeGroup ?>'"><i class="fas fa-reply"></i> กลับสู่หน้าหลัก</button>

                </div>
            </div>
        <?php endif; ?>
        <?php if (!empty($data['CreateBudgetControl_id'])): ?>
            <input type="hidden" name="CreateBudgetControl_id" id="CreateBudgetControl_id" value="<?php echo $data['CreateBudgetControl_id']; ?>" />
            <div class="row text-left">
                <div class="col-md-12">
                    <div class="form-group row">
                        <div class="col-3">
                            <h6>ขื่อแผน : <?php echo $data["PlanName"]; ?></h6>
                        </div>
                        <div class="col-3">
                            <h6>ประเภทแผน : <?php echo $data["PlanTypeName"]; ?></h6>
                        </div>
                        <div class="col-6">
                            <h6>ช่วงเวลาของแผน : จาก <?php echo $data["StartPlan"]; ?> ถึง <?php echo $data["FinishPlan"]; ?></h6>
                        </div>
                    </div>
                </div>
            </div>
            <hr />
            <div class="row text-left">
                <div class="col-md-12">
                    <div class="form-group row">
                        <div class="class_header_page_03">รายการแผนการใช้งบประมาณ</div>
                        <br />
                        <table class="table table-bordered" id="datatable1">
                            <tr class="bg_th">
                                <th class="text-center">
                                    <font color='white'>ลำดับ</font>
                                </th>
                                <th class="text-center">
                                    <font color='white'>ชื่อแผน</font>
                                </th>
                                <th class="text-center">
                                    <font color='white'>หน่วยงาน</font>
                                </th>
                                <th class="text-center">
                                    <font color='white'>ค่าใช้จ่ายรวมทั้งหมด(บาท)</font>
                                </th>
                                <th class="text-center">
                                    <font color='white'>เลือก</font>
                                </th>
                            </tr>
                            <?php
                            if (!empty($data['CreateBudgetControlDetail'])) {
                                $count_data_use = count($data['CreateBudgetControlDetail']);
                                $seq = 1;
                            }
                            foreach ($data["CreateBudgetControlDetail"] as $result_data_set1):
                            ?>
                                <tr>
                                    <td align="right" valign="middle">
                                        <span class="detail">
                                            <?php echo $seq++; ?>.
                                        </span>
                                    </td>
                                    <td align="left" valign="middle">

                                        <input type="hidden" name="DataBudgetControl_id[]" id="DataBudgetControl_id[]" value="<?php echo $result_data_set1['DataBudgetControl_id']; ?>" />
                                        <span class="detail">
                                            <?= $result_data_set1["PlanName"]; ?>
                                        </span>
                                    </td>
                                    <td align="right" valign="middle">
                                        <span class="detail">
                                            สลก.
                                        </span>
                                    </td>
                                    <td align="right" valign="middle">
                                        <span class="detail">
                                            <?php echo number_format($result_data_set1['sum_price_all'], 2); ?>
                                        </span>
                                    </td>
                                    <td align="center" valign="middle">
                                        <span class="detail">
                                            <a id="btnView" class="btn btn-primary" onclick="window.open('../../data_budget_control_doeb/view/<?= $result_data_set1["DataBudgetControl_id"] ?><?= $result_data_set1["TypeAllPlan"] ?>', '_blank', 'width=1400,height=550,scrollbars=1');">ดูรายละเอียดข้อมูล</a>
                                        </span>
                                    </td>
                                </tr>
                            <?php
                            endforeach;
                            ?>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row text-left">
                <div class="col-md-12">
                    <div class="form-group row">
                        <div class="col-12">
                            หมายเหตุ
                            - <?php echo $data['Remarks']; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <br />
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
        var OverAllPlan_id = document.getElementById('OverAllPlan_id').value;

        if (OverAllPlan_id.trim() == 0) {
            alert('กรุณาเลือกแผน');
            document.getElementById('OverAllPlan_id').focus();
            return false;
        } else {
            document.form_ID.submit();
            return true;
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

        $("#btnSave").on("click", function() {
            confirmPopup("กรุณายืนยันบันทึกข้อมูล", "บันทึกข้อมูล", "ยกเลิก", fncSubmit);
        });
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