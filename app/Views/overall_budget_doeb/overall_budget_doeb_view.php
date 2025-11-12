<?= $this->extend('layouts/main_for_view') ?>

<?= $this->section("content"); ?>

<div class="class_header_page_02">
    <br />
    โปรแกรมจัดทำข้อมูลภาพรวมแผนงบประมาณ
    <hr />
</div>
<div class="row">
    <div class="row text-left">
        <div class="col-md-12">
            <div class="form-group row">
                <div class="col-3">
                    รหัสอ้างอิง
                    <input type="text" class='form-control' name="OverAllBudgetCode" id="OverAllBudgetCode" value="<?php echo $data['OverAllBudgetCode']; ?>" readonly />
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
                    <b>ชื่อแผน</b> <?php echo $data['PlanName']; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row text-left">
        <div class="col-md-12">
            <div class="form-group row">
                <div class="col-6">
                    <b>ประเภทแผน</b>
                    <?php echo $data['TypePlanName']; ?>
                </div>
                <div class="col-6">
                    <b>ช่วงเวลาของแผนจาก</b> <?php echo $data['StartPlan']; ?> <b>ถึง</b> <?php echo $data['FinishPlan']; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row text-left">
        <div class="col-md-12">
            <div class="form-group row">
                <div class="col-12">
                    <b>ที่มา :</b> <?php echo $data['Origin']; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row text-left">
        <div class="col-md-12">
            <div class="form-group row">
                <div class="col-12">
                    <b>วิสัยทัศน์ :</b> <?php echo $data['Vision']; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row text-left">
        <div class="col-md-12">
            <div class="form-group row">
                <div class="col-12">
                    <b>พันธกิจ :</b> <?php echo $data['Mission']; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row text-left">
        <div class="col-md-12">
            <div class="form-group row">
                <div class="col-12">
                    <b>ค่านิยม :</b> <?php echo $data['Values']; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row text-left">
        <div class="col-md-12">
            <div class="form-group row">
                <div class="col-12">
                    <b>ภาพรวมเป้าหมาย :</b> <?php echo $data['GoalOverview']; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row text-left">
        <div class="col-md-12">
            <div class="form-group row">
                <b>ภาพรวมเป้าหมาย ตัวชี้วัด และค่าเป้าหมายของแผน</b>
                <br />
                <table class="table table-bordered" id="datatable1">
                    <tr class="bg_th">
                        <th class="text-center" width="10%">
                            <font color='white'>ปี พ.ศ.</font>
                        </th>
                        <th class="text-center">
                            <font color='white'>เป้าหมาย</font>
                        </th>
                        <th class="text-center">
                            <font color='white'>ตัวชี้วัด</font>
                        </th>
                        <th class="text-center" width="10%">
                            <font color='white'>จำนวน</font>
                        </th>
                        <th class="text-center" width="20%">
                            <font color='white'>หน่วยนับ</font>
                        </th>
                    </tr>
                    <?php
                    if (!empty($data['AnnualTargetValue'])) {
                        $count_data_use = count($data['AnnualTargetValue']);
                    }
                    foreach ($data['AnnualTargetValue'] as $AnnualTargetValue):
                    ?>
                        <tr>
                            <td align="left" valign="middle">
                                <span class="detail">
                                    <?php echo $AnnualTargetValue['Years']; ?>
                                </span>
                            </td>
                            <td align="left" valign="middle">
                                <span class="detail">
                                    <?php echo $AnnualTargetValue['AnnualTargetValue_NameFocus']; ?>
                                </span>
                            </td>
                            <td align="left" valign="middle">
                                <span class="detail">
                                    <?php echo $AnnualTargetValue['AnnualTargetValue_NamePoint']; ?>
                                </span>
                            </td>
                            <td align="left" valign="middle">
                                <span class="detail">
                                    <?php echo $AnnualTargetValue['AnnualTargetValue_Values']; ?>
                                </span>
                            </td>
                            <td align="left" valign="middle">
                                <?php echo form_dropdown('AnnualTargetValue_Unit[]', $dropdown_master_unit, $AnnualTargetValue["AnnualTargetValue_Unit"], "class='form form-control' disabled "); ?>
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
                <b>ยุทธศาสตร์ที่เกี่ยวข้อง</b>
                <br />
                <table class="table table-bordered" id="datatable2">
                    <tr class="bg_th">
                        <th class="text-center">
                            <font color='white'>รายการยุทธศาสตร์</font>
                        </th>
                        <th class="text-center">
                            <font color='white'>หมายเหตุ</font>
                        </th>
                    </tr>
                    <?php
                    if (!empty($data['RelatedStrategies'])) {
                        $count_data_use2 = count($data['RelatedStrategies']);
                    }
                    foreach ($data['RelatedStrategies'] as $RelatedStrategies):
                    ?>
                        <tr>
                            <td align="left" valign="middle">
                                <span class="detail">
                                    <?php echo $RelatedStrategies['RelatedStrategies_Name']; ?>
                                </span>
                            </td>
                            <td align="left" valign="middle">
                                <span class="detail">
                                    <?php echo $RelatedStrategies['RelatedStrategies_Remarks']; ?>
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
                <b>นโยบายที่เกี่ยวข้อง</b>
                <br />
                <table class="table table-bordered" id="datatable3">
                    <tr class="bg_th">
                        <th class="text-center">
                            <font color='white'>รายการนโยบาย</font>
                        </th>
                        <th class="text-center">
                            <font color='white'>หมายเหตุ</font>
                        </th>
                    </tr>
                    <?php
                    if (!empty($data['RelatedPolicies'])) {
                        $count_data_use3 = count($data['RelatedPolicies']);
                    }
                    foreach ($data['RelatedPolicies'] as $RelatedPolicies):
                    ?>
                        <tr>
                            <td align="left" valign="middle">
                                <span class="detail">
                                    <?php echo $RelatedPolicies['RelatedPolicies_Name']; ?>
                                </span>
                            </td>
                            <td align="left" valign="middle">
                                <span class="detail">
                                    <?php echo $RelatedPolicies['RelatedPolicies_Remarks']; ?>
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

        $('[name=StartPlan]').daterangepicker({
            "singleDatePicker": true,
            "showDropdowns": true,
            "timePicker": false,
            "timePicker24Hour": true,
            "autoApply": true,
            StartDate: moment().add(543, 'years').format("DD/MM/YYYY"),
            locale: {
                format: 'DD/MM/YYYY'
            }
        });

        $('[name=FinishPlan]').daterangepicker({
            "singleDatePicker": true,
            "showDropdowns": true,
            "timePicker": false,
            "timePicker24Hour": true,
            "autoApply": true,
            StartDate: moment().add(543, 'years').format("DD/MM/YYYY"),
            locale: {
                format: 'DD/MM/YYYY'
            }
        });

    });
</script>
<?= $this->endSection(); ?>