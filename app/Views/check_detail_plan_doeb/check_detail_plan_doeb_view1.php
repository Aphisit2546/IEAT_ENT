<?= $this->extend('layouts/main_for_view') ?>

<?= $this->section("content"); ?>

<div class="class_header_page_02">
    <br />
    รายละเอียดโครงการ
    <hr />
</div>
<div class="row">
    <div class="row text-left">
        <div class="col-md-12">
            <div class="form-group row">
                <div class="col-12">
                    <b>ชื่อโครงการ (ภาษาไทย)</b>
                    <?php echo $data['ProjectNameTH']; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row text-left">
        <div class="col-md-12">
            <div class="form-group row">
                <div class="col-12">
                    <b>ชื่อโครงการ (ภาษาอังกฤษ)</b>
                    <?php echo $data['ProjectNameEN']; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row text-left">
        <div class="col-md-12">
            <div class="form-group row">
                <div class="col-8">
                    <b>แผน</b>
                    <?php echo form_dropdown('OverAllPlan_id', $dropdown_masterOverAllPlan, $data["OverAllPlan_id"], "class='form form-control' id='OverAllPlan_id' onchange='GetAnnualTargetValueYearDetail();' disabled "); ?>
                </div>
                <div class="col-4">
                    <b>ปีที่จัดทำโครงการ</b>
                    <?php echo form_dropdown('AnnualTargetValue_Year', $dropdown_AnnualTargetValue_Year, $data["AnnualTargetValue_Year"], "class='form form-control' id='AnnualTargetValue_Year' disabled "); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row text-left">
        <div class="col-md-12">
            <div class="form-group row">
                <div class="col-12">
                    <b>ยุทธศาสตร์</b>
                    <?php echo form_dropdown('RelatedStrategies_id', $dropdown_RelatedStrategies, $data["RelatedStrategies_id"], "class='form form-control' id='RelatedStrategies_id' disabled "); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row text-left">
        <div class="col-md-12">
            <div class="form-group row">
                <div class="col-6">
                    <b>เป้าหมาย</b>
                    <?php echo form_dropdown('StrategyTarGetDetail_id', $dropdown_StrategyTarGet, $data["StrategyTarGetDetail_id"], "class='form form-control' id='StrategyTarGetDetail_id' onchange='GetStrategyIndicatorDetail();' disabled "); ?>
                </div>
                <div class="col-6">
                    <b>ตัวชี้วัด</b>
                    <?php echo form_dropdown('StrategyIndicatorDetail_id', $dropdown_StrategyIndicator, $data["StrategyIndicatorDetail_id"], "class='form form-control' id='StrategyIndicatorDetail_id' disabled "); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row text-left">
        <div class="col-md-12">
            <div class="form-group row">
                <div class="col-12">
                    <b>รูปแบบโครงการ :</b>
                    <?php if ($data['TypeProjectYearPlan'] == '1'): ?>
                        จบในโครงการ
                    <?php endif; ?>
                    <?php if ($data['TypeProjectYearPlan'] == '2'): ?>
                        โครงการต่อเนื่อง (เป็นโครงการแรก)
                    <?php endif; ?>
                    <?php if ($data['TypeProjectYearPlan'] == '3'): ?>
                        โครงการต่อเนื่อง (จากโครงการที่มีอยู่)
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row text-left">
        <div class="col-md-12">
            <div class="form-group row">
                <div class="col-6">
                    <b>ระยะเวลาดำเนินโครงการเริ่มต้น :</b>
                    <?php echo $data['StartYearPlan']; ?>
                </div>
                <div class="col-6">
                    <b>สิ้นสุด :</b>
                    <?php echo $data['FinishYearPlan']; ?>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-12">
                    <b>งบประมาณดำเนินโครงการ (บาท) :</b>
                    <?php echo $data['BudgetYearPlan']; ?>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-12">
                    <b>ประเภทแหล่งเงินงบประมาณ</b>
                    <?php echo form_dropdown('BudgetSourceType_id', $dropdown_SourceBudget, $data["BudgetSourceType_id"], "class='form form-control' id='BudgetSourceType_id' disabled "); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row text-left">
        <div class="col-md-12">
            <div class="form-group row">
                <div class="col-12">
                    <b>ที่มาโครงการ/เหตุผลและความจำเป็น</b>
                    <br />
                    - <?php echo $data['ProjectSourceYearPlan']; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row text-left">
        <div class="col-md-12">
            <div class="form-group row">
                <div class="col-12">
                    <b>วัตถุประสงค์โครงการ</b>
                    <br />
                    - <?php echo $data['ObjectiveYearPlan']; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row text-left">
        <div class="col-md-12">
            <div class="form-group row">
                <div class="col-12">
                    <b>รายละเอียดเพิ่มเติม</b>
                    <br />
                    - <?php echo $data['DetailYearPlan']; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row text-left">
        <div class="col-md-12">
            <b>สถานะ :</b>
            <?php if ($data['StatusYearPlan'] == 'Y'): ?>
                ใช้งาน
            <?php endif; ?>
            <?php if ($data['StatusYearPlan'] == 'N'): ?>
                } ?> disabled />
                ไม่ใช้งาน
            <?php endif; ?>
        </div>
    </div>
    <br /><br />
    <div class="row text-left">
        <div class="col-md-12">
            <b>หมายเหตุ</b>
            <br />
            - <?php echo $data['RemarksYearPlan']; ?>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>

<?= $this->section("javascripts"); ?>
<script>
    $(window).on("load", function() {
        /*
        $('[name=StartFiveYearPlan]').daterangepicker({
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

        $('[name=FinishFiveYearPlan]').daterangepicker({
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
        */
    });
</script>
<?= $this->endSection(); ?>