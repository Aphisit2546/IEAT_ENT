<?= $this->extend('layouts/main_for_view') ?>

<?= $this->section("content"); ?>

<div class="class_header_page_02">
    <br />
    รายการแผนย่อย
    <hr />
</div>
<div class="row">
    <div class="row text-left">
        <div class="col-md-12">
            <div class="form-group row">
                <div class="col-3">
                    รหัสอ้างอิง
                    <input type="text" class='form-control' name="StrategyRelateCode" id="StrategyRelateCode" value="<?php echo $data['StrategyRelateCode']; ?>" readonly />
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
                <b>รายการแผนย่อย</b>
                <br />
                <table class="table table-bordered" id="datatable1">
                    <tr class="bg_th">
                        <th class="text-center" width="18%">
                            <font color='white'>ที่</font>
                        </th>
                        <th class="text-center">
                            <font color='white'>ชื่อแผนย่อย</font>
                        </th>
                        <th class="text-center">
                            <font color='white'>รายการข้อมูล</font>
                        </th>
                    </tr>
                    <?php
                    if (!empty($data['StrategyRelateDetail'])) {
                        $count_data_use = count($data['StrategyRelateDetail']);
                    }
                    foreach ($data["StrategyRelateDetail"] as $result_data_set1):
                    ?>
                        <tr>
                            <td align="left" valign="middle">
                                <span class="detail">
                                    <?php echo $result_data_set1['ItemL1']; ?> <?php if ($result_data_set1['ItemL1'] != ''): ?><b>.</b><?php endif; ?>
                                    <?php echo $result_data_set1['ItemL2']; ?> <?php if ($result_data_set1['ItemL2'] != ''): ?><b>.</b><?php endif; ?>
                                    <?php echo $result_data_set1['ItemL3']; ?>
                                </span>
                            </td>
                            <td align="left" valign="middle">
                                <span class="detail">
                                    <?php echo $result_data_set1['Name']; ?>
                                </span>
                            </td>
                            <td align="left" valign="middle">
                                <span class="detail">
                                    <?php echo $result_data_set1['Description']; ?>
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
                    <b>หมายเหตุ :</b> <?php echo $data['remarks']; ?>
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