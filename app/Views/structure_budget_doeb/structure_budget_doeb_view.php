<?= $this->extend('layouts/main_for_view') ?>

<?= $this->section("content"); ?>

<div class="class_header_page_02">
    <br />
    โครงสร้างงบประมาณรายจ่าย
    <hr />
</div>
<div class="row">
    <div class="row text-left">
        <div class="col-md-12">
            <div class="form-group row">
                <div class="col-3">
                    รหัสอ้างอิง
                    <input type="text" class='form-control' name="BudgetStructureCode" id="BudgetStructureCode" value="<?php echo $data['BudgetStructureCode']; ?>" readonly />
                </div>
                <div class="col-3">
                    วันที่ปรับปรุงข้อมูลล่าสุด
                    <input type="text" class='form-control' name="ModifyDate" id="ModifyDate" value="<?php echo $data['ModifyDate']; ?>" readonly />
                </div>
            </div>
        </div>
    </div>
    <div class="row text-left">
        <div class="col-md-12">
            <div class="form-group row">
                <div class="col-12">
                    <b>รหัสควบคุมเวอร์ชัน :</b> <?php echo $data['VersionControl']; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row text-left">
        <div class="col-md-12">
            <div class="form-group row">
                <div class="col-12">
                    <b>รายละเอียดเวอร์ชัน :</b> <?php echo $data['VersionDescription']; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row text-left">
        <div class="col-md-12">
            <div class="form-group row">
                <b>รายการโครงสร้างงบประมาณรายจ่าย</b>
                <br />
                <table class="table table-bordered" id="datatable1">
                    <tr class="bg_th">
                        <th class="text-center" width="18%">
                            <font color='white'>ระดับหมวดงบประมาณ</font>
                        </th>
                        <th class="text-center">
                            <font color='white'>ชื่อโครงสร้างงบประมาณ</font>
                        </th>
                        <th class="text-center">
                            <font color='white'>รายละเอียด</font>
                        </th>
                    </tr>
                    <?php
                    if (!empty($data['BudgetStructureDetail'])) {
                        $count_data_use = count($data['BudgetStructureDetail']);
                    }
                    foreach ($data['BudgetStructureDetail'] as $BudgetStructureDetail):
                    ?>
                        <tr>
                            <td align="left" valign="middle">
                                <span class="detail">
                                    <?php echo $BudgetStructureDetail['ItemL1']; ?> <?php if ($BudgetStructureDetail['ItemL1'] != ''): ?><b>.</b><?php endif; ?>
                                    <?php echo $BudgetStructureDetail['ItemL2']; ?> <?php if ($BudgetStructureDetail['ItemL2'] != ''): ?><b>.</b><?php endif; ?>
                                    <?php echo $BudgetStructureDetail['ItemL3']; ?>
                                </span>
                            </td>
                            <td align="left" valign="middle">
                                <span class="detail">
                                    <?php echo $BudgetStructureDetail['Name']; ?>
                                </span>
                            </td>
                            <td align="left" valign="middle">
                                <span class="detail">
                                    <?php echo $BudgetStructureDetail['Description']; ?>
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
                    <b>หมายเหตุ :</b> <?php echo $data['Remarks']; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>

<?= $this->section("javascripts"); ?>
<script>
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