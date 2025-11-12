<?= $this->extend('layouts/main') ?>

<?= $this->section("content"); ?>

<div class="class_header_page_02">
    <br />
    จัดสรรงบประมาณ
    <hr />
</div>
<form id="frm" class="form-horizontal" action="<?php echo base_url(); ?>/<?= $routeGroup ?>/<?= $action_page ?>" method="post">
    <?= csrf_field() ?>
    <input type="hidden" name='OverAllBudget_id' id="OverAllBudget_id" value="<?php echo $OverAllBudget_id; ?>">

    <hr />
    <div class="form-group row" id='content'>
        <?php
        $seq_main_01 = 1;
        $seq_array_01 = 1;
        $seq_01_ft = 1;
        $seq_01 = 1;
        ?>
        <?php
        if (!empty($data_main['return_data_Group01'])):
            foreach ($data_main['return_data_Group01'] as $result_data_set1):
        ?>
                <div class="class_header_page_03"><b><?php echo $result_data_set1['NameHead01']; ?></b></div>
                <br /><br />

                <?php foreach ($result_data_set1['detailsub_last'] as $detailsub_last): ?>

                    <?php if ($detailsub_last['detail_sub2'] == null): ?>

                        <table class="table table-bordered" id="datatable1">
                            <tr>
                                <th class="text-left">
                                    <div class="class_header_page_03">
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <?php echo $detailsub_last['NameHead02']; ?>
                                    </div>
                                </th>
                            </tr>
                        </table>

                    <?php else: ?>

                        <table class="table table-bordered" id="datatable1">
                            <tr>
                                <th class="text-left">
                                    <div class="class_header_page_03">
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <?php echo $detailsub_last['detail_sub2'][0]['NameHead03']; ?>
                                        <br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        งบประมาณที่ได้รับตาม พ.ร.บ. <input size='13' name="Budget01_<?php echo $seq_01_ft; ?>" type="text" id="Budget01_<?php echo $seq_01_ft; ?>" value="<?php if ($detailsub_last['detail_sub2'][0]['Budget01'] != '' && $detailsub_last['detail_sub2'][0]['Budget01'] != null) {
                                                                                                                                                                                                echo number_format($detailsub_last['detail_sub2'][0]['Budget01'], 2);
                                                                                                                                                                                            } ?>" onkeyup="dokeyupMoney(this);" onchange="dokeyupMoney(this);" onkeypress="checknumberMoney()" /> บาท
                                        <input type="hidden" name='ItemL3_<?php echo $seq_01_ft; ?>' id="ItemL3_<?php echo $seq_01_ft; ?>" value="<?php echo $detailsub_last['detail_sub2'][0]['ItemL3Project']; ?>">
                                        <input type="hidden" name='count_data_ft[]' id="count_data_ft[]" value="<?php echo $seq_01_ft; ?>">
                                        <?php $seq_01_ft++; ?>
                                    </div>
                                </th>
                            </tr>
                        </table>

                        <?php if ($detailsub_last['detail_sub2'][0]['NameActivity'] != ''): ?>
                            <table class="table table-bordered" id="datatable1">
                                <tr class="bg_th">
                                    <th class="text-center">
                                        <font color='white'>ลำดับ</font>
                                    </th>
                                    <th class="text-center" width='25%'>
                                        <font color='white'>ชื่อกิจกรรม</font>
                                    </th>
                                    <th class="text-center">
                                        <font color='white'>หน่วยงานรับผิดชอบ</font>
                                    </th>
                                    <th class="text-center">
                                        <font color='white'>งบประมาณที่ขอ (บาท)</font>
                                    </th>
                                    <!--
                                    <th class="text-center">
                                        <font color='white'>งบประมาณที่ได้รับตาม พรบ. (บาท)</font>
                                    </th>
                                    -->
                                    <th class="text-center">
                                        <font color='white'>งบประมาณที่ได้รับการจัดสรร (บาท)</font>
                                    </th>
                                    <th class="text-center">
                                        <font color='white'>งบประมาณที่ได้รับการจัดสรร-งบประมาณที่ขอ (บาท)</font>
                                    </th>

                                    <th class="text-center">
                                        <font color='white'>ร้อยล่ะผลต่างของงบประมาณที่ได้รับการจัดสรร เทียบกับงบประมาณที่ขอ</font>
                                    </th>
                                    <th class="text-center">
                                        <font color='white'>ดูรายละเอียด</font>
                                    </th>
                                </tr>
                                <?php $seq_all = 1; ?>

                                <?php foreach ($detailsub_last['detail_sub2'] as $detail_sub2): ?>


                                    <?php if ($detail_sub2['NameActivity'] != ''): ?>


                                        <?php if ($detail_sub2['CreatePlanDetail_id'] != ''): ?>

                                            <tr>
                                                <td align="left" valign="middle"><?php echo $seq_all; ?>.</td>
                                                <td align="left" valign="middle">
                                                    <span class="detail">
                                                        <?php echo $detail_sub2['NameActivity']; ?>
                                                    </span>
                                                </td>
                                                <td align="left" valign="middle">
                                                    <span class="detail">
                                                        <?php echo $detail_sub2['GroupUserName']; ?>
                                                    </span>
                                                </td>
                                                <td align="right" valign="middle">
                                                    <span class="detail">
                                                        <?php echo number_format($detail_sub2['sum_budget'], 2); ?>
                                                    </span>
                                                    <input type="hidden" name='count_data_01[]' id="count_data_01[]" value="<?php echo $seq_01; ?>">
                                                    <input type="hidden" name='sum_budget_Type1_<?php echo $seq_01; ?>' id="sum_budget" value="<?php echo $detail_sub2['sum_budget']; ?>">
                                                    <input type="hidden" name='CreatePlanDetail_id_Type1_<?php echo $seq_01; ?>' id="CreatePlanDetail_id" value="<?php echo $detail_sub2['CreatePlanDetail_id']; ?>">
                                                </td>
                                                <!--
                                                <td align="center" valign="middle"><input size='13' name="Budget01_Type1_<?php echo $seq_01; ?>" type="text" id="Budget01" value="<?php if ($detail_sub2['Budget01'] != '' && $detail_sub2['Budget01'] != null) {
                                                                                                                                                                                        echo number_format($detail_sub2['Budget01'], 2);
                                                                                                                                                                                    } ?>" onkeyup="dokeyupMoney(this);" onchange="dokeyupMoney(this);" onkeypress="checknumberMoney()" /></td>-->
                                                <td align="center" valign="middle"><input size='13' name="Budget02_Type1_<?php echo $seq_01; ?>" type="text" id="Budget02" value="<?php if ($detail_sub2['Budget02'] != '' && $detail_sub2['Budget02'] != null) {
                                                                                                                                                                                        echo number_format($detail_sub2['Budget02'], 2);
                                                                                                                                                                                    } ?>" onkeyup="dokeyupMoney(this);" onchange="dokeyupMoney(this);" onkeypress="checknumberMoney()" oninput="updateColumn3(this)" /></td>
                                                <td align="center" valign="middle"><input size='10' style="border-width: 0px; text-align: right; font-size:16px;" name="BudgetNegative_Type1_<?php echo $seq_01; ?>" type="text" id="BudgetNegative" onchange="dokeyupMoney(this);" value="<?php echo number_format($detail_sub2['BudgetNegative'], 2); ?>"></td>
                                                <td align="center" valign="middle"><input size='10' style="border-width: 0px; text-align: right; font-size:16px;" name="BudgetPercentage_Type1_<?php echo $seq_01; ?>" type="text" id="BudgetPercentage" value="<?php echo $detail_sub2['BudgetPercentage']; ?>"></td>

                                                <td align="center" valign="middle">
                                                    <?php if ($detail_sub2["AllPlanId"] != ''): ?>
                                                        <span class="detail">
                                                            <a id="btnView" class="btn btn-primary" onclick="window.open('../../check_detail_plan_doeb/view/<?= $detail_sub2["AllPlanId"] ?>.<?= $detail_sub2["TypeAllPlan"] ?>', '_blank', 'width=1400,height=550,scrollbars=1');">เลือก</a>
                                                        </span>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>

                                            <?php $sum_budget[] = $detail_sub2['sum_budget']; ?>
                                            <?php $sum_budget_01[] = $detail_sub2['sum_budget']; ?>
                                            <?php $seq_01++; ?>
                                        <?php endif; ?>


                                        <?php if ($detail_sub2['DraftBudgetControlDetail_id'] != ''): ?>

                                            <tr>
                                                <td align="left" valign="middle"><?php echo $seq_all; ?>.</td>
                                                <td align="left" valign="middle">
                                                    <span class="detail">
                                                        <?php echo $detail_sub2['NameActivity']; ?>
                                                    </span>
                                                </td>
                                                <td align="left" valign="middle">
                                                    <span class="detail">
                                                        <?php echo $detail_sub2['GroupUserName']; ?>
                                                    </span>
                                                </td>
                                                <td align="right" valign="middle">
                                                    <span class="detail">
                                                        <?php echo number_format($detail_sub2['sum_budget'], 2); ?>
                                                    </span>
                                                    <input type="hidden" name='DraftBudgetControlDetail_id_Type3_<?php echo $seq_array_01; ?>' id="DraftBudgetControlDetail_id_Type3_<?php echo $seq_array_01; ?>" value="<?php echo $detail_sub2['DraftBudgetControlDetail_id']; ?>">
                                                    <input type="hidden" name='count_data_03[]' id="count_data_03[]" value="<?php echo $seq_array_01; ?>">
                                                    <input type="hidden" name='sum_budget_Type3_<?php echo $seq_array_01; ?>' id="sum_budget" value="<?php echo $detail_sub2['sum_budget']; ?>">
                                                </td>
                                                <!--
                                                <td align="center" valign="middle"><input size='13' name="Budget01_Type3_<?php echo $seq_array_01; ?>" type="text" id="Budget01" value="<?php if ($detail_sub2['Budget01'] != '' && $detail_sub2['Budget01'] != null) {
                                                                                                                                                                                            echo number_format($detail_sub2['Budget01'], 2);
                                                                                                                                                                                        } ?>" onkeyup="dokeyupMoney(this);" onchange="dokeyupMoney(this);" onkeypress="checknumberMoney()" /></td>-->
                                                <td align="center" valign="middle"><input size='13' name="Budget02_Type3_<?php echo $seq_array_01; ?>" type="text" id="Budget02" value="<?php if ($detail_sub2['Budget02'] != '' && $detail_sub2['Budget02'] != null) {
                                                                                                                                                                                            echo number_format($detail_sub2['Budget02'], 2);
                                                                                                                                                                                        } ?>" onkeyup="dokeyupMoney(this);" onchange="dokeyupMoney(this);" onkeypress="checknumberMoney()" oninput="updateColumn3(this)" /></td>
                                                <td align="center" valign="middle"><input size='10' style="border-width: 0px; text-align: right; font-size:16px;" name="BudgetNegative_Type3_<?php echo $seq_array_01; ?>" type="text" id="BudgetNegative" value="<?php echo $detail_sub2['BudgetNegative']; ?>"></td>
                                                <td align="center" valign="middle"><input size='10' style="border-width: 0px; text-align: right; font-size:16px;" name="BudgetPercentage_Type3_<?php echo $seq_array_01; ?>" type="text" id="BudgetPercentage" value="<?php echo $detail_sub2['BudgetPercentage']; ?>"></td>

                                                <td align="center" valign="middle">
                                                    -
                                                </td>
                                            </tr>
                                            <?php
                                            $seq_main_01++;
                                            $seq_array_01++;
                                            ?>
                                        <?php endif; ?>

                                        <?php
                                        $seq_all++;
                                        ?>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </table>
                        <?php else: ?>
                            <!--
                            <table class="table table-bordered" id="datatable1">
                                <tr>
                                    <td class="text-center">
                                        <font color='red'>
                                            -- ไม่พบข้อมูล --
                                        </font>
                                    </td>
                                </tr>
                            </table>
                             -->
                        <?php endif; ?>
                    <?php endif; ?>

                <?php endforeach; ?>
            <?php endforeach; ?>
        <?php endif; ?>


        <hr />
        <table>
            <tr>
                <td align="right" valign="middle">
                    <span class="detail">
                        จำนวนเงินรวมทั้งหมด : <input size='10' style="border-width: 0px; text-align: right; font-size:25px;" name="overall_price" type="text" id="overall_price" value="<?php if (!empty($sum_budget)): echo number_format(array_sum($sum_budget), 2);
                                                                                                                                                                                        else: echo "-";
                                                                                                                                                                                        endif; ?> " readonly /> บาท
                    </span>
                </td>
            </tr>
        </table>

        <div class="row text-left">
            <table align="center" width='100%'>
                <tr>
                    <td align='center'>
                        <table class="table table-bordered" id="datatable1">
                            <tr class="bg_th_sub">
                                <th class="text-center">
                                    <font color='white'>รับรองข้อมูลการจัดสรรงบประมาณ</font>
                                </th>
                            </tr>
                            <tr>
                                <td align="left" valign="middle">
                                    <span class="detail">
                                        <input type='radio' name='ActiveStatusIns' value='Y' <?php if ($data_main['ActiveStatusIns'] == 'Y'): echo "checked";
                                                                                                endif; ?>> อนุมัติ
                                        <input type='radio' name='ActiveStatusIns' value='N' <?php if ($data_main['ActiveStatusIns'] == 'N'): echo "checked";
                                                                                                endif; ?>> ไม่อนุมัติ
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td align="left" valign="middle">
                                    <span class="detail">
                                        ความคิดเห็นเพิ่มเติม
                                        <br />
                                        <textarea name="RemarksFirstIns" cols='40' rows='3'><?php echo $data_main['RemarksFirstIns']; ?></textarea>
                                    </span>
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td align='center'>
                        <table class="table table-bordered" id="datatable1">
                            <tr class="bg_th_sub">
                                <th class="text-center">
                                    <font color='white'>อนุมัติข้อมูลการจัดสรรงบประมาณ</font>
                                </th>
                            </tr>
                            <tr>
                                <td align="left" valign="middle">
                                    <span class="detail">
                                        <input type='radio' name='ActiveStatusApprove' value='Y' <?php if ($data_main['ActiveStatusApprove'] == 'Y'): echo "checked";
                                                                                                    endif; ?>> อนุมัติ
                                        <input type='radio' name='ActiveStatusApprove' value='N' <?php if ($data_main['ActiveStatusApprove'] == 'N'): echo "checked";
                                                                                                    endif; ?>> ไม่อนุมัติ
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td align="left" valign="middle">
                                    <span class="detail">
                                        ความคิดเห็นเพิ่มเติม
                                        <br />
                                        <textarea name="RemarksFirstApprove" cols='40' rows='3'><?php echo $data_main['RemarksFirstApprove']; ?></textarea>
                                    </span>
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td align='center'>
                        <table class="table table-bordered" id="datatable1">
                            <tr class="bg_th_sub">
                                <th class="text-center">
                                    <font color='white'>ผู้อนุมัติเผยแพร่</font>
                                </th>
                            </tr>
                            <tr>
                                <td align="left" valign="middle">
                                    <span class="detail">
                                        <input type='radio' name='ActiveStatusLastApprove' value='Y' <?php if ($data_main['ActiveStatusLastApprove'] == 'Y'): echo "checked";
                                                                                                        endif; ?>> อนุมัติ
                                        <input type='radio' name='ActiveStatusLastApprove' value='N' <?php if ($data_main['ActiveStatusLastApprove'] == 'N'): echo "checked";
                                                                                                        endif; ?>> ไม่อนุมัติ
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td align="left" valign="middle">
                                    <span class="detail">
                                        ความคิดเห็นเพิ่มเติม
                                        <br />
                                        <textarea name="RemarksLastApprove" cols='40' rows='3'><?php echo $data_main['RemarksLastApprove']; ?></textarea>
                                    </span>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
        <!--
        <table>
            <tr>
                <td align="right" valign="middle">
                    <span class="detail">
                        จำนวนเงินรวม : <input size='10' style="border-width: 0px; text-align: right; font-size:25px;" name="overall_price" type="text" id="overall_price" value="<?php if (!empty($sum_budget)): echo number_format(array_sum($sum_budget), 2);
                                                                                                                                                                                    else: echo "-";
                                                                                                                                                                                    endif; ?> " readonly /> บาท
                    </span>
                </td>
            </tr>
        </table>
        -->
    </div>
    <div class="form-row">
        <div class="col-sm-12 text-right">
            <input name="search_excel" id="search_excel" type="submit" class="btn btn-primary" value="ส่งออกข้อมูล">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input name="btnSave" id="btnSave" type="submit" class="btn btn-success" value="บันทึกข้อมูล">
            <input name="btnConfirm" id="btnConfirm" type="submit" class="btn btn-info" value="ยืนยันข้อมูล">
            <input type="button" class="btn btn-secondary" value="กลับสู่หน้าหลัก" onclick="window.location='<?php echo base_url(); ?><?= $routeGroup ?>'">

        </div>
    </div>
    <?php //endif; 
    ?>

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

    function updateColumn3(element) {
        // ค้นหา Element ของแถวปัจจุบัน (<tr>) ที่เป็น Parent ของช่อง input นี้
        const row = element.closest('tr');

        // ค้นหาช่อง input ของ Column 1, Column 2 และ Column 3 ในแถวเดียวกัน
        const col0Input = row.querySelector('input[id="sum_budget"]');
        // const col1Input = row.querySelector('input[id="Budget01"]');
        const col2Input = row.querySelector('input[id="Budget02"]');
        const col3Output = row.querySelector('input[id="BudgetNegative"]');
        const col4Output = row.querySelector('input[id="BudgetPercentage"]');

        // ดึงค่าจาก Column 1 และ Column 2 (ใช้ค่าว่างถ้ายังไม่มีการกรอก)
        const val0 = col0Input.value || '';
        //const val1 = col1Input.value || '';
        const val2 = col2Input.value || '';

        // --- กำหนดวิธีการรวมค่าที่นี่ ---
        // ตัวอย่างที่ 1: รวมแบบต่อข้อความ (Concatenation)
        //col3Output.value = val1 + val2;

        // ตัวอย่างที่ 2: รวมแบบบวกตัวเลข (ถ้าต้องการให้เป็นตัวเลข)
        const num0 = parseFloat(val0) || 0;
        //const num1 = parseFloat(val1) || 0; // แปลงเป็นตัวเลข ถ้าไม่ใช่ให้เป็น 0
        const num2 = parseFloat(val2.replace(/,/g, '')) || 0;
        var value_before = num2 - num0;
        let formattedWithTwoDecimals = new Intl.NumberFormat('en-US', {
            minimumFractionDigits: 2, // กำหนดให้มีทศนิยมอย่างน้อย 2 ตำแหน่ง
            maximumFractionDigits: 2 // กำหนดให้มีทศนิยมอย่างมาก 2 ตำแหน่ง (จะมีการปัดเศษให้)
        }).format(value_before);

        col3Output.value = formattedWithTwoDecimals;
        col4Output.value = ((value_before / num0) * 100).toFixed(2) + "%";

        // เรียกฟังก์ชันเพื่ออัปเดตยอดรวมทั้งหมด
        //updateGrandTotal();
    }
    /*
    function updateGrandTotal() {
        const col3Outputs = document.querySelectorAll('.col3-output');
        let grandTotal = 0;

        col3Outputs.forEach(input => {
            // ดึงค่าจาก Column 3, ลบคอมม่าออกก่อนแปลงเป็นตัวเลขเพื่อการคำนวณ
            const value = parseFloat(input.value.replace(/,/g, '')) || 0;
            grandTotal += value;
        });

        // แสดงยอดรวมทั้งหมด (จัดรูปแบบให้มีคอมม่า)
        document.getElementById('grandTotalCol3').value = formatNumberWithCommas(grandTotal);
    }
    */

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
<?php if ($export_excel == 'Y'): ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>
    <script>
        window.onload = function() {
            // ดึง element ของตาราง
            var table = document.getElementById("content");

            // แปลงตารางเป็น worksheet
            var wb = XLSX.utils.table_to_book(table, {
                sheet: "รายงาน"
            });

            // สร้างไฟล์ Excel และบันทึกเป็นชื่อที่ต้องการ
            XLSX.writeFile(wb, "<?php echo $filename; ?>.xlsx");
        };
    </script>

<?php endif; ?>
<?= $this->endSection(); ?>