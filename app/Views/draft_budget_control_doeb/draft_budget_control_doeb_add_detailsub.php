<?= $this->extend('layouts/main_for_iframe') ?>

<?= $this->section("content"); ?>
<style>
    .error {
        border: 2px solid red;
        background: #ffe0e0;
    }

    .valid {
        border: 2px solid green;
        background: #eaffea;
    }

    .msg {
        color: red;
        font-size: 12px;
        display: none;
    }
</style>
<form id="frm" class="form-horizontal" action="<?php echo base_url(); ?>/<?= $routeGroup ?>/edtupdatesub" method="post" onsubmit="return checkBeforeSubmit()">
    <input type="hidden" name="DraftBudgetControlDetail_id" id="DraftBudgetControlDetail_id" value="<?php echo $DraftBudgetControlDetail_id; ?>" readonly />
    <input type="hidden" name="DraftBudgetControl_id" id="DraftBudgetControl_id" value="<?php echo $DraftBudgetControl_id; ?>" readonly />
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
        <div class="class_header_page_03">แจงค่าใช้จ่าย</div>
        <br /><br />
        <table>
            <tr>
                <td align="left" valign="middle">
                    <span class="detail">
                        <input type="button" name="add_data" class="btn btn-success" value="เพิ่มรายการ" onClick="addRow('datatable1')" />
                        <input type="button" name="del_data" class="btn btn-danger" value="ลบรายการ" onClick="deleteRow('datatable1')" />
                    </span>
                </td>
            </tr>
        </table>
        <br />
        <table class="table table-bordered" id="datatable1">
            <tr class="bg_th_table">
                <th class="text-center" width="7%">
                    <font color='white'>เลือก</font>
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
            <?php
            $count_data_use = count($DraftBudgetDetailSub);
            $overall_price_list = array();
            foreach ($DraftBudgetDetailSub as $result_data_set1):
            ?>
                <tr>
                    <td align="left" valign="middle"><input type="checkbox" name="chk" id="chk" /></td>
                    <td align="left" valign="middle">
                        <span class="detail">
                            <input name="NameDetail[]" type="text" id="NameDetail[]" value="<?php echo $result_data_set1['NameDetail']; ?>" />
                        </span>
                    </td>
                    <td align="left" valign="middle">
                        <span class="detail">
                            <input name="Description[]" type="text" id="Description[]" value="<?php echo $result_data_set1['Description']; ?>" />
                        </span>
                    </td>
                    <td align="left" valign="middle">
                        <span class="detail">
                            <?php echo form_dropdown('UnitManagement_id[]', $dropdown_master_unit, $result_data_set1['UnitManagement_id'], " "); ?>
                        </span>
                        <?php
                        $overall_price_list[] = $result_data_set1['price_all'];
                        ?>
                    </td>
                    <td align="left" valign="middle"><input class="check-input" size='9' name="price[]" type="text" id="price" value="<?php echo number_format($result_data_set1['price'], 2); ?>" onkeyup="dokeyupMoney(this);" onchange="dokeyupMoney(this);" onkeypress="checknumberMoney()" oninput="updateColumn3(this)" /></td>
                    <td align="left" valign="middle"><input class="check-input" size='9' name="quantity[]" type="text" id="quantity" value="<?php echo number_format($result_data_set1['quantity'], 2); ?>" onkeyup="dokeyupMoney(this);" onchange="dokeyupMoney(this);" onkeypress="checknumberMoney()" oninput="updateColumn3(this)" /></td>
                    <td align="left" valign="middle"><input class="check-input" size='9' name="price_all[]" type="text" id="price_all" value="<?php echo number_format($result_data_set1['price_all'], 2); ?>" /></td>
                    <td align="left" valign="middle">
                        <span class="detail">
                            <input name="RemarksSub[]" type="text" id="RemarksSub[]" value="<?php echo $result_data_set1['RemarksSub']; ?>" />
                        </span>
                    </td>
                </tr>
            <?php endforeach; ?>
            <tr>
                <td align="left" valign="middle"><input type="checkbox" name="chk" id="chk" /></td>
                <td align="left" valign="middle">
                    <span class="detail">
                        <input name="NameDetail[]" type="text" id="NameDetail[]" value="" />
                    </span>
                </td>
                <td align="left" valign="middle">
                    <span class="detail">
                        <input name="Description[]" type="text" id="Description[]" value="" />
                    </span>
                </td>
                <td align="left" valign="middle">
                    <span class="detail">
                        <?php echo form_dropdown('UnitManagement_id[]', $dropdown_master_unit, "", " "); ?>
                    </span>
                </td>
                <td align="left" valign="middle"><input class="check-input" size='9' name="price[]" type="text" id="price" value="" onkeyup="dokeyupMoney(this);" onchange="dokeyupMoney(this);" onkeypress="checknumberMoney()" oninput="updateColumn3(this)" /></td>
                <td align="left" valign="middle"><input class="check-input" size='9' name="quantity[]" type="text" id="quantity" value="" onkeyup="dokeyupMoney(this);" onchange="dokeyupMoney(this);" onkeypress="checknumberMoney()" oninput="updateColumn3(this)" /></td>
                <td align="left" valign="middle"><input class="check-input" size='9' name="price_all[]" type="text" id="price_all" value="" /></td>
                <td align="left" valign="middle">
                    <span class="detail">
                        <input name="RemarksSub[]" type="text" id="RemarksSub" value="" />
                    </span>
                </td>
            </tr>
        </table>
        <table>
            <tr>
                <td align="left" valign="middle">
                    <?php if ($data_ref['CostReference'] == '1'): ?>
                        <span class="detail">
                            ดูข้อมูลเอกสารราคากลาง
                            <a id="btnView" class="btn btn-secondary" onclick="window.open('<?php echo base_url('/Upload/document_default.pdf'); ?>', '_blank', 'width=800,height=600,scrollbars=1');">ดูเอกสาร</a>
                        </span>
                    <?php endif; ?>
                    <?php if ($data_ref['CostReference'] == '2'): ?>
                        <span class="detail">
                            แนบไฟล์ประกอบ : <input class="form form-control" name="doc_file" type="file" id="doc_file" />
                        </span>
                    <?php endif; ?>
                </td>
                <!--
                <td align="right" valign="middle">
                    <span class="detail" id='totalCell'>
                        จำนวนเงินรวม : <input size='10' style="border-width: 0px; text-align: right; font-size:25px;" name="overall_price" type="text" id="overall_price" value="<?php if (!empty($overall_price_list)): echo number_format(array_sum($overall_price_list), 2);
                                                                                                                                                                                    else: echo "-";
                                                                                                                                                                                    endif; ?> " readonly /> บาท
                    </span>
                </td>
                -->
            </tr>
        </table>
    </div>
    <div class="row text-left">
        <div class="col-sm-12 text-right">
            <input name="btnSaveSub" id="btnSaveSub" type="submit" class="btn btn-success" value="บันทึกข้อมูล">
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
        //updateGrandTotal();

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
<script>
    function parseNumber(value) {
        return Number(value.replace(/,/g, ''));
    }

    function checkInput(input) {
        let raw = input.value.trim();
        let value = parseNumber(raw);
        let msg = input.parentElement.querySelector(".msg");

        if (raw === "" || isNaN(value) || value < 0) {
            input.classList.add("error");
            input.classList.remove("valid");
            if (msg) msg.style.display = "block";
            return false;
        } else {
            input.classList.remove("error");
            input.classList.add("valid");
            if (msg) msg.style.display = "none";
            return true;
        }
    }
</script>
<script>
    function checkBeforeSubmit() {
        // ตรวจเฉพาะช่องที่มี class check-input เท่านั้น
        const inputs = document.querySelectorAll('.check-input');
        let isValid = true;

        inputs.forEach(input => {
            if (input.value.trim() === "") {
                input.value = 0; // ใส่ค่า 0 อัตโนมัติ
                // ถ้าอยากเตือนให้ผู้ใช้เห็นชัดก็ใส่สีพื้นหลัง
                input.style.backgroundColor = "#ffebeb";
                isValid = false;
            } else {
                input.style.backgroundColor = ""; // คืนค่าสีปกติ
            }
        });

        /*
        if (!isValid) {
            alert("บางช่องว่าง ระบบใส่ค่า 0 ให้แล้ว ⚠️");
        }
        */

        return true; // อนุญาตให้ submit ต่อได้
    }
</script>
<?= $this->endSection(); ?>