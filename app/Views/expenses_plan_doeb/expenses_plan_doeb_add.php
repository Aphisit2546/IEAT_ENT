<?= $this->extend('layouts/main') ?>

<?= $this->section("content"); ?>

<div class="class_header_page_02">
    <br />
    แผนรายจ่ายของโครงการ
    <hr />
</div>
<div class="row">
    <form id="frm" class="form-horizontal" action="<?php echo base_url(); ?>/<?= $routeGroup ?>/<?= $action_page ?>" method="post">
        <input type="hidden" name="plan_doeb_id" id="plan_doeb_id" value="<?php echo $data['plan_doeb_id']; ?>" readonly />
        <?= csrf_field() ?>
        <div class="row text-left">
            <div class="col-md-12">
                <div class="form-group row">
                    <div class="col-3">
                        รหัสอ้างอิง
                        <input type="text" class='form-control' name="code_ref" id="code_ref" value="<?php echo $data['code_ref']; ?>" readonly />
                    </div>
                    <div class="col-3">
                        วันที่ปรับปรุงข้อมูลล่าสุด
                        <input type="text" class='form-control' name="show_datetime" id="show_datetime" value="<?php echo $data['update_datetime']; ?>" readonly />
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-left">
            <div class="col-md-12">
                <div class="form-group row">
                    <div class="col-12">
                        เลือกแผน
                        <select name='' class='form form-control'>
                            <option>-- เลือก --</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-left">
            <div class="col-md-12">
                <div class="form-group row">
                    <div class="col-12">
                        เลือกแผนย่อยอ้างอิง
                        <select name='' class='form form-control'>
                            <option>-- เลือก --</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-left">
            <div class="col-md-12">
                <div class="form-group row">
                    <div class="col-6">
                        ประเภทแผน
                        <input type="text" class='form-control' name="start_plan" id="start_plan" value="<?php echo $data['start_plan']; ?>" disabled />
                    </div>
                    <div class="col-3">
                        ช่วงเวลาของแผนจาก
                        <input type="text" class='form-control' name="start_plan" id="start_plan" value="<?php echo $data['start_plan']; ?>" disabled />
                    </div>
                    <div class="col-3">
                        ถึง
                        <input type="text" class='form-control' name="finish_plan" id="finish_plan" value="<?php echo $data['finish_plan']; ?>" disabled />
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-left">
            <div class="col-md-12">
                <div class="form-group row">
                    รายการค่าเป้าหมาย
                    <br />
                    <table class="table table-bordered" id="datatable1">
                        <tr class="bg_th">
                            <th class="text-center" width="20%">
                                <font color='white'>ที่</font>
                            </th>
                            <th class="text-center">
                                <font color='white'>เป้าหมาย</font>
                            </th>
                            <th class="text-center">
                                <font color='white'>ตัวชี้วัด</font>
                            </th>
                            <th class="text-center">
                                <font color='white'>ค่าเป้าหมาย</font>
                            </th>
                        </tr>
                        <tr>
                            <td colspan="4" class="align-top text-center">
                                <font color="red">-- ไม่พบรายการข้อมูล --</font>
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
                        <textarea name='remarks' rows='3' class='form-control'><?php echo $data['remarks']; ?></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-sm-12 text-right">
                <input name="btnSave" id="btnSave" type="submit" class="btn btn-info" value="บันทึกข้อมูล">
                <input name="btnSave" id="btnSave" type="submit" class="btn btn-success" value="ยืนยันข้อมูล">
                <button type="reset" class="btn btn-secondary" value="reset" onclick="window.location='<?php echo base_url(); ?>/<?= $routeGroup ?>'"><i class="fas fa-reply"></i> กลับสู่หน้าหลัก</button>

            </div>
        </div>
        <br />
    </form>
</div>

<?= $this->endSection(); ?>

<?= $this->section("javascripts"); ?>
<script>
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