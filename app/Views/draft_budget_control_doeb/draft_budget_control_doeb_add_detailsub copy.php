<?= $this->extend('layouts/main_for_iframe') ?>

<?= $this->section("content"); ?>

<form id="frm" class="form-horizontal" action="<?php echo base_url(); ?>/<?= $routeGroup ?>/edtupdatesub" method="post">
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
                            <input class="form form-control" name="NameDetail[]" type="text" id="NameDetail[]" value="<?php echo $result_data_set1['NameDetail']; ?>" />
                        </span>
                    </td>
                    <td align="left" valign="middle">
                        <span class="detail">
                            <input class="form form-control" name="Description[]" type="text" id="Description[]" value="<?php echo $result_data_set1['Description']; ?>" />
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
                    <td align="left" valign="middle"><input class="form form-control" name="price[]" type="text" id="price" value="<?php echo number_format($result_data_set1['price'], 2); ?>" onkeyup="dokeyupMoney(this);" onchange="dokeyupMoney(this);" onkeypress="checknumberMoney()" oninput="updateColumn3(this)" /></td>
                    <td align="left" valign="middle"><input class="form form-control" name="quantity[]" type="text" id="quantity" value="<?php echo number_format($result_data_set1['quantity'], 2); ?>" onkeyup="dokeyupMoney(this);" onchange="dokeyupMoney(this);" onkeypress="checknumberMoney()" oninput="updateColumn3(this)" /></td>
                    <td align="left" valign="middle"><input class="form form-control" name="price_all[]" type="text" id="price_all" value="<?php echo number_format($result_data_set1['price_all'], 2); ?>" /></td>
                    <td align="left" valign="middle">
                        <span class="detail">
                            <input class="form form-control" name="RemarksSub[]" type="text" id="RemarksSub[]" value="<?php echo $result_data_set1['RemarksSub']; ?>" />
                        </span>
                    </td>
                </tr>
            <?php endforeach; ?>
            <tr>
                <td align="left" valign="middle"><input type="checkbox" name="chk" id="chk" /></td>
                <td align="left" valign="middle">
                    <span class="detail">
                        <input class="form form-control" name="NameDetail[]" type="text" id="NameDetail[]" value="" />
                    </span>
                </td>
                <td align="left" valign="middle">
                    <span class="detail">
                        <input class="form form-control" name="Description[]" type="text" id="Description[]" value="" />
                    </span>
                </td>
                <td align="left" valign="middle">
                    <span class="detail">
                        <?php echo form_dropdown('UnitManagement_id[]', $dropdown_master_unit, "", " "); ?>
                    </span>
                </td>
                <td align="left" valign="middle"><input class="form form-control" name="price[]" type="text" id="price" value="" onkeyup="dokeyupMoney(this);" onchange="dokeyupMoney(this);" onkeypress="checknumberMoney()" oninput="updateColumn3(this)" /></td>
                <td align="left" valign="middle"><input class="form form-control" name="quantity[]" type="text" id="quantity" value="" onkeyup="dokeyupMoney(this);" onchange="dokeyupMoney(this);" onkeypress="checknumberMoney()" oninput="updateColumn3(this)" /></td>
                <td align="left" valign="middle"><input class="form form-control" name="price_all[]" type="text" id="price_all" value="" /></td>
                <td align="left" valign="middle">
                    <span class="detail">
                        <input class="form form-control" name="RemarksSub[]" type="text" id="RemarksSub[]" value="" />
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