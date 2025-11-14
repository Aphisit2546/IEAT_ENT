<?= $this->extend('layouts/main_for_view') ?>

<?= $this->section("content"); ?>

<div class="class_header_page_02">
    <br />
    แผนการใช้งบประมาณ (โครงการ)
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
        <!--
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
        -->
        <div class="class_header_page_03">
            รายละเอียดงวดงานและงวดเงิน
        </div>
        <br />
        <table class="table table-bordered" id="datatable_new">
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
                if (!empty($data_new)) {
                    $count_data_use1 = count($data_new);
                }
                $overall_price_list = array();
                foreach ($data_new as $result_data_set2):
                ?>
                    <tr>
                        <td align="center" valign="middle">
                            <span class="detail">
                                <?php echo $result_data_set2['WorkMoneyPeriodNumber']; ?>
                            </span>
                        </td>
                        <td align="center" valign="middle">
                            <span class="detail">
                                <?php echo $result_data_set2['MoneyPeriod']; ?>
                            </span>
                        </td>
                        <td align="center" valign="middle">
                            <span class="detail">
                                <?php echo $result_data_set2['Disbursement']; ?>
                            </span>
                        </td>
                        <td align="right" valign="middle"><?php echo number_format($result_data_set2['TotalDisbursement'], 2); ?></td>
                        <td align="center" valign="middle">
                            <span class="detail">
                                <?php echo $result_data_set2['TimeDisbursement']; ?>
                            </span>
                        </td>
                        <td align="center" valign="middle">
                            <span class="detail">
                                <?php echo $result_data_set2['DateWorkMoneyPeriod']; ?>
                            </span>
                        </td>
                        <td align="center" valign="middle">
                            <span class="detail">
                                <?php echo $result_data_set2['ProgressWorkMoneyPeriod']; ?>
                            </span>
                        </td>
                        <?php
                        $overall_price_list[] = $result_data_set2['TotalDisbursement'];
                        ?>
                    </tr>
                <?php
                endforeach;
                ?>
            </tbody>
        </table>
        <div class="row text-right">
            <table>
                <tr>
                    <td align="right" valign="middle">
                        <span class="detail">
                            จำนวนเงินรวม : <input size='10' style="border-width: 0px; text-align: right; font-size:25px;" name="overall_price" type="text" id="overall_price" value="<?php if (!empty($overall_price_list)): echo number_format(array_sum($overall_price_list), 2);
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
                        - <?php echo $data['monthly']['Remarks']; ?>
                    </div>
                </div>
            </div>
        </div>
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