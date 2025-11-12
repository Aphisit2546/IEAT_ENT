<?= $this->extend('layouts/main_for_view') ?>

<?= $this->section("content"); ?>

<div class="class_header_page_02">
    <br />
    ตรวจสอบและพิจารณาแผนงบประมาณ
    <hr />
</div>
<div class="row">
    <div class="form-group row">
        <?php
        if (!empty($data_main['return_data_Group01'])):
            $seq = 1;
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
                                    </div>
                                </th>
                            </tr>
                        </table>
                        <?php if ($detailsub_last['detail_sub2'][0]['NameActivity'] != ''): ?>
                            <table class="table table-bordered" id="datatable1">
                                <tr class="bg_th">
                                    <th class="text-center" width='5%'>
                                        <font color='white'>ลำดับ</font>
                                    </th>
                                    <th class="text-center" width='25%'>
                                        <font color='white'>กลุ่มงาน</font>
                                    </th>
                                    <th class="text-center" width='45%'>
                                        <font color='white'>ชื่อกิจกรรม</font>
                                    </th>
                                    <th class="text-center">
                                        <font color='white'>ค่าใช้จ่ายรวม(บาท)</font>
                                    </th>
                                </tr>
                                <?php foreach ($detailsub_last['detail_sub2'] as $detail_sub2): ?>

                                    <?php if ($detail_sub2['NameActivity'] != ''): ?>
                                        <tr>
                                            <td align="left" valign="middle"><?php echo $seq++; ?>.</td>
                                            <td align="left" valign="middle">
                                                <span class="detail">
                                                    <?php echo $detail_sub2['GroupUserName']; ?>
                                                </span>
                                            </td>
                                            <td align="left" valign="middle">
                                                <span class="detail">
                                                    <?php echo $detail_sub2['NameActivity']; ?>
                                                </span>
                                            </td>
                                            <td align="right" valign="middle">
                                                <span class="detail">
                                                    <?php echo number_format($detail_sub2['sum_budget'], 2); ?>
                                                    <?php $sum_budget[] = $detail_sub2['sum_budget']; ?>
                                                </span>
                                            </td>
                                        </tr>
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
    </div>
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