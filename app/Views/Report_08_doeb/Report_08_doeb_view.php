<?= $this->extend('layouts/main_for_view') ?>

<?= $this->section("content"); ?>

<div class="class_header_page_02">
    <br />
    ผลการปฏิบัติงานผลการปฏิบัติงานสำหรับสำนักงานพลังงานจังหวัด
    <hr />
</div>
<div class="row">
    <form name"frm" id="frm" class="form-horizontal" action="<?php echo base_url(); ?>/<?= $routeGroup ?>/<?= $action_page ?>" method="post">
        <input type="hidden" name="MonthlyResultActivity_Id" id="MonthlyResultActivity_Id" value="<?php echo $data['MonthlyResultActivity_Id']; ?>" readonly />
        <?= csrf_field() ?>
        <div class="row text-left">
            <div class="col-md-12">
                <div class="form-group row">
                    <div class="col-12">
                        <font style="font-size: 24px;">ประจำเดือน <?php echo $data["MonthResultShow"]; ?> <?php echo $data["YearResult"]; ?></font>
                    </div>
                </div>
            </div>
        </div>
        <table class="table table-bordered table-hover">
            <thead>
                <tr class="bg_th">
                    <th class="align-middle text-center" width='40%'>
                        <font color='white'>รายการปฏิบัติงาน</font>
                    </th>
                    <th class="align-middle text-center" width='10%'>
                        <font color='white'>ข้อมูล ณ เดือน</font>
                    </th>
                    <th class="align-middle text-center" width='20%'>
                        <font color='white'>หน่วยนับ</font>
                    </th>
                </tr>
            </thead>

            <tbody>
                <?php $seq_row = 1; ?>
                <?php $seq_var = 0; ?>
                <?php foreach ($lstData_mapping as $lstData_mapping_result): ?>
                    <tr>
                        <td class="align-top text-left"><?php echo $lstData_mapping_result['name']; ?></td>
                        <td class="align-top text-center"><?php echo $data['month_1'][$seq_var]['data_value']; ?></td>

                        <td class="align-top text-center">
                            <input type="hidden" name="<?php echo $seq_row; ?>_MonthlyResultActivityDetail_Id" id="<?php echo $seq_row; ?>_MonthlyResultActivityDetail_Id" value="<?php echo $data['month_1'][$seq_var]['MonthlyResultActivityDetail_Id']; ?>" readonly />
                            <?php echo $lstData_mapping_result['unit_name']; ?>
                        </td>
                    </tr>
                    <?php $seq_row++; ?>
                    <?php $seq_var++; ?>
                <?php endforeach; ?>

            </tbody>

        </table>
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