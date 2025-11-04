<?= $this->extend('layouts/main_for_iframe') ?>

<?= $this->section("content"); ?>

<form id="frm" class="form-horizontal" action="<?php echo base_url(); ?>/<?= $routeGroup ?>/edtupdatesub2" method="post" onsubmit="return checkBeforeSubmit()">
    <input type="hidden" name="DraftBudgetControlDetail_id" id="DraftBudgetControlDetail_id" value="<?php echo $DraftBudgetControlDetail_id; ?>" />
    <input type="hidden" name="DraftBudgetControl_id" id="DraftBudgetControl_id" value="<?php echo $DraftBudgetControl_id; ?>" />
    <div class="form-group row">
        <table class="table table-bordered">
            <tr>
                <td class="text-left" width='25%'>
                    <b>ชื่อกิจกรรม</b>
                </td>
                <td class="text-left">
                    <?php echo $data_ref['NameActivity']; ?>
                </td>
            </tr>
            <tr>
                <td class="text-left">
                    <b>ประเภทงบประมาณ</b>
                </td>
                <td class="text-left">
                    <?php echo $data_ref['ItemL1']; ?>
                </td>
            </tr>
            <tr>
                <td class="text-left">
                    <b>หมวดหลัก/ย่อย</b>
                </td>
                <td class="text-left">
                    <?php echo $data_ref['ItemL2']; ?>
                </td>
            </tr>
            <tr>
                <td class="text-left">
                    <b>รายการ</b>
                </td>
                <td class="text-left">
                    <?php echo $data_ref['ItemL3']; ?>
                </td>
            </tr>
            <tr>
                <td class="text-left">
                    <b>รายละเอียดเพิ่มเติม</b>
                </td>
                <td class="text-left">
                    <?php echo $data_ref['Description']; ?>
                </td>
            </tr>
        </table>
        <hr />
        <div class="class_header_page_03">แจงแผนรายเดือน</div>
        <br />
        <table class="table table-bordered" id="datatable1">
            <?php
            $seq_sub = 1;
            $count_data_use = count($DraftBudgetDetailSub);
            $overall_price_list = array();
            foreach ($DraftBudgetDetailSub as $result_data_set1):
            ?>
                <tr class="bg_th_table">
                    <th class="text-center">
                        <font color='white'>ลำดับ</font>
                    </th>
                    <th class="text-center">
                        <font color='white'>รายการ</font>
                    </th>
                    <th class="text-center">
                        <font color='white'>รายละเอียด</font>
                    </th>
                    <th class="text-center">
                        <font color='white'>หน่วยนับ</font>
                    </th>
                    <th class="text-center">
                        <font color='white'>ราคา/หน่วย</font>
                    </th>
                    <th class="text-center">
                        <font color='white'>จำนวนหน่วย</font>
                    </th>
                    <th class="text-center">
                        <font color='white'>จำนวนเงิน</font>
                    </th>
                    <th class="text-center">
                        <font color='white'>หมายเหตุ</font>
                    </th>
                </tr>
                <tr>
                    <td align="left" valign="middle">
                        <span class="detail">
                            <?php echo $seq_sub++; ?>
                        </span>
                    </td>
                    <td align="left" valign="middle">
                        <span class="detail">
                            <?php echo $result_data_set1['NameDetail']; ?>
                        </span>
                    </td>
                    <td align="left" valign="middle">
                        <span class="detail">
                            <?php echo $result_data_set1['Description']; ?>
                        </span>
                    </td>
                    <td align="left" valign="middle">
                        <span class="detail">
                            <?php echo form_dropdown('UnitManagement_id[]', $dropdown_master_unit, $result_data_set1['UnitManagement_id'], " disabled "); ?>
                        </span>
                        <?php
                        $overall_price_list[] = $result_data_set1['price_all'];
                        ?>
                    </td>
                    <td align="left" valign="middle"><?php echo number_format($result_data_set1['price'], 2); ?></td>
                    <td align="left" valign="middle"><?php echo $result_data_set1['quantity']; ?></td>
                    <td align="left" valign="middle"><?php echo number_format($result_data_set1['price_all'], 2); ?></td>
                    <td align="left" valign="middle">
                        <span class="detail">
                            <?php echo $result_data_set1['RemarksSub']; ?>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td colspan='8' class="text-center">
                        <table class="table table-bordered">
                            <tbody>
                                <tr class="bg_th_sub">
                                    <td class="align-top text-center" width='10%'>
                                        <font color='white'>เดือน</font>
                                    </td>
                                    <td class="align-top text-center">
                                        <font color='white'>ต.ค</font>
                                    </td>
                                    <td class="align-top text-center">
                                        <font color='white'>พ.ย</font>
                                    </td>
                                    <td class="align-top text-center">
                                        <font color='white'>ธ.ค</font>
                                    </td>
                                    <td class="align-top text-center">
                                        <font color='white'>ม.ค</font>
                                    </td>
                                    <td class="align-top text-center">
                                        <font color='white'>ก.พ</font>
                                    </td>
                                    <td class="align-top text-center">
                                        <font color='white'>มี.ค</font>
                                    </td>
                                    <td class="align-top text-center">
                                        <font color='white'>เม.ย</font>
                                    </td>
                                    <td class="align-top text-center">
                                        <font color='white'>พ.ค</font>
                                    </td>
                                    <td class="align-top text-center">
                                        <font color='white'>มิ.ย</font>
                                    </td>
                                    <td class="align-top text-center">
                                        <font color='white'>ก.ค</font>
                                    </td>
                                    <td class="align-top text-center">
                                        <font color='white'>ส.ค</font>
                                    </td>
                                    <td class="align-top text-center">
                                        <font color='white'>ก.ย</font>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-top text-center">
                                        จำนวนเงิน
                                        <input type="hidden" name="DraftBudgetControlDetailSub_id[]" id="DraftBudgetControlDetailSub_id" value="<?php echo $result_data_set1['DraftBudgetControlDetailSub_id']; ?>" />
                                    </td>
                                    <td class="align-top text-center"><input class="numInput" size='5' type='text' name='month01[]' value='<?php if ($result_data_set1['month01'] != '' && $result_data_set1['month01'] != null) {
                                                                                                                                                echo number_format($result_data_set1['month01'], 2);
                                                                                                                                            } ?>' onkeyup="dokeyupMoney(this);" onchange="dokeyupMoney(this);" onkeypress="checknumberMoney()"></td>

                                    <td class="align-top text-center"><input class="numInput" size='5' type='text' name='month02[]' value='<?php if ($result_data_set1['month02'] != '' && $result_data_set1['month02'] != null) {
                                                                                                                                                echo number_format($result_data_set1['month02'], 2);
                                                                                                                                            } ?>' onkeyup="dokeyupMoney(this);" onchange="dokeyupMoney(this);" onkeypress="checknumberMoney()"></td>

                                    <td class="align-top text-center"><input class="numInput" size='5' type='text' name='month03[]' value='<?php if ($result_data_set1['month03'] != '' && $result_data_set1['month03'] != null) {
                                                                                                                                                echo number_format($result_data_set1['month03'], 2);
                                                                                                                                            } ?>' onkeyup="dokeyupMoney(this);" onchange="dokeyupMoney(this);" onkeypress="checknumberMoney()"></td>

                                    <td class="align-top text-center"><input class="numInput" size='5' type='text' name='month04[]' value='<?php if ($result_data_set1['month04'] != '' && $result_data_set1['month04'] != null) {
                                                                                                                                                echo number_format($result_data_set1['month04'], 2);
                                                                                                                                            } ?>' onkeyup="dokeyupMoney(this);" onchange="dokeyupMoney(this);" onkeypress="checknumberMoney()"></td>

                                    <td class="align-top text-center"><input class="numInput" size='5' type='text' name='month05[]' value='<?php if ($result_data_set1['month05'] != '' && $result_data_set1['month05'] != null) {
                                                                                                                                                echo number_format($result_data_set1['month05'], 2);
                                                                                                                                            } ?>' onkeyup="dokeyupMoney(this);" onchange="dokeyupMoney(this);" onkeypress="checknumberMoney()"></td>

                                    <td class="align-top text-center"><input class="numInput" size='5' type='text' name='month06[]' value='<?php if ($result_data_set1['month06'] != '' && $result_data_set1['month06'] != null) {
                                                                                                                                                echo number_format($result_data_set1['month06'], 2);
                                                                                                                                            } ?>' onkeyup="dokeyupMoney(this);" onchange="dokeyupMoney(this);" onkeypress="checknumberMoney()"></td>
                                    <td class="align-top text-center"><input class="numInput" size='5' type='text' name='month07[]' value='<?php if ($result_data_set1['month07'] != '' && $result_data_set1['month07'] != null) {
                                                                                                                                                echo number_format($result_data_set1['month07'], 2);
                                                                                                                                            } ?>' onkeyup="dokeyupMoney(this);" onchange="dokeyupMoney(this);" onkeypress="checknumberMoney()"></td>

                                    <td class="align-top text-center"><input class="numInput" size='5' type='text' name='month08[]' value='<?php if ($result_data_set1['month08'] != '' && $result_data_set1['month08'] != null) {
                                                                                                                                                echo number_format($result_data_set1['month08'], 2);
                                                                                                                                            } ?>' onkeyup="dokeyupMoney(this);" onchange="dokeyupMoney(this);" onkeypress="checknumberMoney()"></td>

                                    <td class="align-top text-center"><input class="numInput" size='5' type='text' name='month09[]' value='<?php if ($result_data_set1['month09'] != '' && $result_data_set1['month09'] != null) {
                                                                                                                                                echo number_format($result_data_set1['month09'], 2);
                                                                                                                                            } ?>' onkeyup="dokeyupMoney(this);" onchange="dokeyupMoney(this);" onkeypress="checknumberMoney()"></td>

                                    <td class="align-top text-center"><input class="numInput" size='5' type='text' name='month10[]' value='<?php if ($result_data_set1['month10'] != '' && $result_data_set1['month10'] != null) {
                                                                                                                                                echo number_format($result_data_set1['month10'], 2);
                                                                                                                                            } ?>' onkeyup="dokeyupMoney(this);" onchange="dokeyupMoney(this);" onkeypress="checknumberMoney()"></td>

                                    <td class="align-top text-center"><input class="numInput" size='5' type='text' name='month11[]' value='<?php if ($result_data_set1['month11'] != '' && $result_data_set1['month11'] != null) {
                                                                                                                                                echo number_format($result_data_set1['month11'], 2);
                                                                                                                                            } ?>' onkeyup="dokeyupMoney(this);" onchange="dokeyupMoney(this);" onkeypress="checknumberMoney()"></td>

                                    <td class="align-top text-center"><input class="numInput" size='5' type='text' name='month12[]' value='<?php if ($result_data_set1['month12'] != '' && $result_data_set1['month12'] != null) {
                                                                                                                                                echo number_format($result_data_set1['month12'], 2);
                                                                                                                                            } ?>' onkeyup="dokeyupMoney(this);" onchange="dokeyupMoney(this);" onkeypress="checknumberMoney()"></td>

                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
    <div class="row text-left">
        <div class="col-sm-12 text-right">
            <input name="btnSaveSub2" id="btnSaveSub2" type="submit" class="btn btn-success" value="บันทึกข้อมูล">
            <input name="btnBackSub" id="btnBackSub" type="submit" class="btn btn-secondary" value="กลับสู่หน้าหลัก">
        </div>
    </div>
    <br />
</form>

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

    }

    function chkNumber(ele) {
        var vchar = String.fromCharCode(event.keyCode);
        if (vchar < '0' || vchar > '9') return false;
        ele.onKeyPress = vchar;
    }

    function updateColumn3(element) {
        // ค้นหา Element ของแถวปัจจุบัน (<tr>) ที่เป็น Parent ของช่อง input นี้
        const row = element.closest('tr');

        // ค้นหาช่อง input ของ Column 1, Column 2 และ Column 3 ในแถวเดียวกัน
        const col0Input = row.querySelector('input[id="price"]');
        const col1Input = row.querySelector('input[id="quantity"]');
        const col2Input = row.querySelector('input[id="price_all"]');

        // ดึงค่าจาก Column 1 และ Column 2 (ใช้ค่าว่างถ้ายังไม่มีการกรอก)
        const val0 = col0Input.value || '';
        const val1 = col1Input.value || '';

        // --- กำหนดวิธีการรวมค่าที่นี่ ---
        // ตัวอย่างที่ 1: รวมแบบต่อข้อความ (Concatenation)
        //col3Output.value = val1 + val2;

        // ตัวอย่างที่ 2: รวมแบบบวกตัวเลข (ถ้าต้องการให้เป็นตัวเลข)
        const num0 = parseFloat(val0.replace(/,/g, '')) || 0;
        const num1 = parseFloat(val1.replace(/,/g, '')) || 0;

        var value_before = num0 * num1;
        let formattedWithTwoDecimals = new Intl.NumberFormat('en-US', {
            minimumFractionDigits: 2, // กำหนดให้มีทศนิยมอย่างน้อย 2 ตำแหน่ง
            maximumFractionDigits: 2 // กำหนดให้มีทศนิยมอย่างมาก 2 ตำแหน่ง (จะมีการปัดเศษให้)
        }).format(value_before);

        col2Input.value = formattedWithTwoDecimals;

        // เรียกฟังก์ชันเพื่ออัปเดตยอดรวมทั้งหมด
        updateGrandTotal();

    }

    function updateGrandTotal() {
        // เข้าถึงตาราง
        const table = document.getElementById('datatable1');
        // กำหนดตัวแปรสำหรับเก็บผลรวมเริ่มต้น
        let total = 0;

        // วนลูปผ่านทุกแถวในส่วนเนื้อหาของตาราง
        for (let i = 0; i < table.tBodies[0].rows.length; i++) {
            // เข้าถึงแถวปัจจุบัน
            const row = table.tBodies[0].rows[i];
            // เข้าถึงเซลล์สุดท้ายในแถวนั้น
            const lastCell = row.lastElementChild;
            // ดึงค่าจากเซลล์, แปลงเป็นตัวเลข และบวกเพิ่ม
            const value = parseInt(lastCell.textContent, 10);
            // ตรวจสอบว่าเป็นตัวเลขที่ถูกต้องก่อนบวก
            if (!isNaN(value)) {
                total += value;
            }
        }

        // แสดงผลรวมที่ได้ในเซลล์ที่กำหนดไว้
        document.getElementById('totalCell').textContent = total;
    }

    function checkBeforeSubmit() {
        const inputs = document.querySelectorAll('.numInput');
        let isAllValid = true;

        inputs.forEach(input => {
            // ถ้าว่างหรือไม่มีค่า
            if (input.value.trim() === "") {
                input.value = 0; // ใส่ค่า 0 ให้อัตโนมัติ
            }
        });

        // ส่งฟอร์มต่อได้
        return true;
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