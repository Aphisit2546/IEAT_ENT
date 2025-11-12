<?= $this->extend('layouts/main') ?>

<?= $this->section("content"); ?>

<div class="class_header_page_02">
    <br />
    จัดทำแผนงานโครงการ ตาม พรบ.งบประมาณ
    <hr />
</div>
<div class="row">
    <form id="frm" class="form-horizontal" action="<?php echo base_url(); ?>/<?= $routeGroup ?>/<?= $action_page ?>" method="post">
        <input type="hidden" name="OverAllPlanFiscalYear_id" id="OverAllPlanFiscalYear_id" value="<?php echo $data['OverAllPlanFiscalYear_id']; ?>" readonly />
        <?= csrf_field() ?>
        <div class="row text-left">
            <div class="col-md-12">
                <div class="form-group row">
                    <div class="col-3">
                        รหัสอ้างอิง
                        <input type="text" class='form-control' name="OverAllPlanFiscalYearCode" id="OverAllPlanFiscalYearCode" value="<?php echo $data['OverAllPlanFiscalYearCode']; ?>" readonly />
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
                    <div class="col-1">
                        ข้อมูลโครงการ
                    </div>
                    <?php if (empty($data['OverAllPlanFiscalYear_id'])): ?>
                        <div class="col-3">
                            <label>
                                <input type="radio" name="TypeSelect" value="1" <?php if ($data['TypeSelect'] == '1') {
                                                                                    echo "checked";
                                                                                }  ?> onclick="show2();" />
                                อ้างอิงข้อมูลโครงการที่มีอยู่
                            </label>
                        </div>
                        <div class="col-2">
                            <label>
                                <input type="radio" name="TypeSelect" value="2" <?php if ($data['TypeSelect'] == '2') {
                                                                                    echo "checked";
                                                                                }  ?> onclick="show1();" />
                                สร้างโครงการใหม่
                            </label>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($data['OverAllPlanFiscalYear_id'])): ?>
                        <div class="col-3">
                            <label>
                                <input type="radio" name="TypeSelect" value="1" <?php if ($data['TypeSelect'] == '1') {
                                                                                    echo "checked";
                                                                                }  ?> disabled />
                                อ้างอิงข้อมูลโครงการที่มีอยู่
                            </label>
                        </div>
                        <div class="col-2">
                            <label>
                                <input type="radio" name="TypeSelect" value="2" <?php if ($data['TypeSelect'] == '2') {
                                                                                    echo "checked";
                                                                                }  ?> disabled />
                                สร้างโครงการใหม่
                            </label>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php if (empty($data['OverAllPlanFiscalYear_id'])): ?>
            <div class="row text-left">
                <div class="col-md-12">
                    <div class="form-group row">
                        <div id="divTypeSelect1" class="hide_div1">
                            เลือกโครงการ
                            <?php echo form_dropdown('OverAllPlanYear_id', $dropdown_OverallPlanYear, $data["OverAllPlanYear_id"], "class='form form-control' id='OverAllPlanYear_id' "); ?>
                        </div>
                        <div id="divTypeSelect2" class="hide_div2">
                            <div class="row text-left">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <div class="col-12">
                                            ชื่อโครงการ (ภาษาไทย)
                                            <input type="text" class='form-control' name="ProjectNameTH" id="ProjectNameTH" value="<?php echo $data['ProjectNameTH']; ?>" onkeyup="isThaichar(this.value,this)" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row text-left">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <div class="col-12">
                                            ชื่อโครงการ (ภาษาอังกฤษ)
                                            <input type="text" class='form-control' name="ProjectNameEN" id="ProjectNameEN" value="<?php echo $data['ProjectNameEN']; ?>" onkeyup="isEngchar(this.value,this)" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row text-left">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <div class="col-10">
                                            เลือกแผน
                                            <?php echo form_dropdown('OverAllPlan_id', $dropdown_masterOverAllPlan, $data["OverAllPlan_id"], "class='form form-control' id='OverAllPlan_id' onchange='GetAnnualTargetValueYearDetail();' "); ?>
                                        </div>
                                        <div class="col-2">
                                            เลือกปีที่จัดทำโครงการ
                                            <?php echo form_dropdown('AnnualTargetValue_Year', $dropdown_AnnualTargetValue_Year, $data["AnnualTargetValue_Year"], "class='form form-control' id='AnnualTargetValue_Year' "); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row text-left">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <div class="col-12">
                                            เลือกยุทธศาสตร์
                                            <?php echo form_dropdown('RelatedStrategies_id', $dropdown_RelatedStrategies, $data["RelatedStrategies_id"], "class='form form-control' id='RelatedStrategies_id' "); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row text-left">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <div class="col-6">
                                            เลือกเป้าหมาย
                                            <?php echo form_dropdown('StrategyTarGetDetail_id', $dropdown_StrategyTarGet, $data["StrategyTarGetDetail_id"], "class='form form-control' id='StrategyTarGetDetail_id' onchange='GetStrategyIndicatorDetail();' "); ?>
                                        </div>
                                        <div class="col-6">
                                            เลือกตัวชี้วัด
                                            <?php echo form_dropdown('StrategyIndicatorDetail_id', $dropdown_StrategyIndicator, $data["StrategyIndicatorDetail_id"], "class='form form-control' id='StrategyIndicatorDetail_id' "); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row text-left">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <div class="col-2">
                                            รูปแบบโครงการ
                                        </div>
                                        <div class="col-2">
                                            <label>
                                                <input type="radio" name="TypeProjectYearPlan" value="1" <?php if ($data['TypeProjectYearPlan'] == '1') {
                                                                                                                echo "checked";
                                                                                                            }  ?> />
                                                จบในโครงการ
                                            </label>
                                        </div>
                                        <div class="col-3">
                                            <label>
                                                <input type="radio" name="TypeProjectYearPlan" value="2" <?php if ($data['TypeProjectYearPlan'] == '2') {
                                                                                                                echo "checked";
                                                                                                            }  ?>>
                                                โครงการต่อเนื่อง (เป็นโครงการแรก)
                                            </label>
                                        </div>
                                        <div class="col-3">
                                            <label>
                                                <input type="radio" name="TypeProjectYearPlan" value="3" <?php if ($data['TypeProjectYearPlan'] == '3') {
                                                                                                                echo "checked";
                                                                                                            }  ?>>
                                                โครงการต่อเนื่อง (จากโครงการที่มีอยู่)
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row text-left">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <div class="col-3">
                                            ระยะเวลาดำเนินโครงการ เริ่มต้น
                                            <input style="background-color:white;" data-provide="datepicker" data-date-language="th-th" type="text" class='form-control' name="StartYearPlan" id="StartYearPlan" value="<?php echo $data['StartYearPlan']; ?>" autocomplete="off" />
                                        </div>
                                        <div class="col-2">
                                            สิ้นสุด
                                            <input style="background-color:white;" data-provide="datepicker" data-date-language="th-th" type="text" class='form-control' name="FinishYearPlan" id="FinishYearPlan" value="<?php echo $data['FinishYearPlan']; ?>" autocomplete="off" />
                                        </div>
                                        <div class="col-3">
                                            งบประมาณดำเนินโครงการ (บาท)
                                            <input type="text" class='form-control' name="BudgetYearPlan" id="BudgetYearPlan" value="<?php echo $data['BudgetYearPlan']; ?>" onkeyup="dokeyupMoney(this);" onchange="dokeyupMoney(this);" onkeypress="checknumberMoney()" autocomplete="off" />
                                        </div>
                                        <div class="col-4">
                                            ประเภทแหล่งเงินงบประมาณ
                                            <?php echo form_dropdown('BudgetSourceType_id', $dropdown_SourceBudget, $data["BudgetSourceType_id"], "class='form form-control' id='BudgetSourceType_id' "); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row text-left">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <div class="col-3">
                                            ช่วงเวลาจัดทำ TOR เริ่มต้น
                                            <input style="background-color:white;" data-provide="datepicker" data-date-language="th-th" type="text" class='form-control' name="start_tor" id="start_tor" value="<?php echo $data['start_tor']; ?>" />
                                        </div>
                                        <div class="col-3">
                                            สิ้นสุด
                                            <input style="background-color:white;" data-provide="datepicker" data-date-language="th-th" type="text" class='form-control' name="finish_tor" id="finish_tor" value="<?php echo $data['finish_tor']; ?>" />
                                        </div>
                                        <div class="col-3">
                                            ช่วงเวลาจัดซื้อจัดจ้าง เริ่มต้น
                                            <input style="background-color:white;" data-provide="datepicker" data-date-language="th-th" type="text" class='form-control' name="start_procurement" id="start_procurement" value="<?php echo $data['start_procurement']; ?>" />
                                        </div>
                                        <div class="col-3">
                                            สิ้นสุด
                                            <input style="background-color:white;" data-provide="datepicker" data-date-language="th-th" type="text" class='form-control' name="finish_procurement" id="finish_procurement" value="<?php echo $data['finish_procurement']; ?>" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row text-left">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <div class="col-12">
                                            ที่มาโครงการ/เหตุผลและความจำเป็น
                                            <textarea name='ProjectSourceYearPlan' rows='5' class='form-control'><?php echo $data['ProjectSourceYearPlan']; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row text-left">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <div class="col-12">
                                            วัตถุประสงค์โครงการ
                                            <textarea name='ObjectiveYearPlan' rows='5' class='form-control'><?php echo $data['ObjectiveYearPlan']; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row text-left">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <div class="col-12">
                                            รายละเอียดเพิ่มเติม
                                            <textarea name='DetailYearPlan' rows='5' class='form-control'><?php echo $data['DetailYearPlan']; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row text-left">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <div class="col-1">
                                            สถานะ
                                        </div>
                                        <div class="col-1">
                                            <label>
                                                <input type="radio" name="StatusYearPlan" value="Y" <?php if ($data['StatusYearPlan'] == 'Y') {
                                                                                                        echo "checked";
                                                                                                    }  ?> />
                                                ใช้งาน
                                            </label>
                                        </div>
                                        <div class="col-2">
                                            <label>
                                                <input type="radio" name="StatusYearPlan" value="N" <?php if ($data['StatusYearPlan'] == 'N') {
                                                                                                        echo "checked";
                                                                                                    }  ?>>
                                                ไม่ใช้งาน
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row text-left">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <div class="col-12">
                                            หมายเหตุ
                                            <textarea name='RemarksYearPlan' rows='5' class='form-control'><?php echo $data['RemarksYearPlan']; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php if (empty($data['OverAllPlanFiscalYear_id'])): ?>
            <div class="form-row">
                <div class="col-sm-12 text-right">
                    <input name="btnSave_continue" id="btnSave_continue" type="submit" class="btn btn-success" value="ยืนยันข้อมูล">
                    <button type="reset" class="btn btn-secondary" value="reset" onclick="window.location='<?php echo base_url(); ?>/<?= $routeGroup ?>'"><i class="fas fa-reply"></i> กลับสู่หน้าหลัก</button>

                </div>
            </div>
        <?php endif; ?>
        <?php if (!empty($data['OverAllPlanFiscalYear_id'])): ?>
            <hr />
            <div class="row text-left">
                <div class="col-12">
                    <ul id="tabs">
                        <li><a type='button' name="tab1"><span class="head_tab">ข้อมูลโครงการ</span></a></li>
                        <li><a type='button' name="tab2"><span class="head_tab">รายละเอียดโครงการ</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="row text-left">
                <div class="col-12">
                    <div id="content_tab">
                        <?php if ($data['TypeSelect'] == '1'): ?>
                            <div id="tab1">
                                <div class="row text-left">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                ชื่อโครงการ (ภาษาไทย)
                                                <input type="text" class='form-control' name="ProjectNameTH" id="ProjectNameTH" value="<?php echo $data['ProjectNameTH']; ?>" onkeyup="isThaichar(this.value,this)" disabled />
                                            </div>
                                            <input type="hidden" name="ProjectNameTH" id="ProjectNameTH" value="<?php echo $data['ProjectNameTH']; ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row text-left">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                ชื่อโครงการ (ภาษาอังกฤษ)
                                                <input type="text" class='form-control' name="ProjectNameEN" id="ProjectNameEN" value="<?php echo $data['ProjectNameEN']; ?>" onkeyup="isEngchar(this.value,this)" disabled />
                                            </div>
                                            <input type="hidden" name="ProjectNameEN" id="ProjectNameEN" value="<?php echo $data['ProjectNameEN']; ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row text-left">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <div class="col-10">
                                                เลือกแผน
                                                <?php echo form_dropdown('OverAllPlan_id', $dropdown_masterOverAllPlan, $data["OverAllPlan_id"], "class='form form-control' id='OverAllPlan_id' onchange='GetAnnualTargetValueYearDetail();' disabled "); ?>
                                            </div>
                                            <div class="col-2">
                                                เลือกปีที่จัดทำโครงการ
                                                <?php echo form_dropdown('AnnualTargetValue_Year', $dropdown_AnnualTargetValue_Year, $data["AnnualTargetValue_Year"], "class='form form-control' id='AnnualTargetValue_Year' disabled "); ?>
                                            </div>
                                            <input type="hidden" name="OverAllPlan_id" id="OverAllPlan_id" value="<?php echo $data['OverAllPlan_id']; ?>" />
                                            <input type="hidden" name="AnnualTargetValue_Year" id="AnnualTargetValue_Year" value="<?php echo $data['AnnualTargetValue_Year']; ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row text-left">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                เลือกยุทธศาสตร์
                                                <?php echo form_dropdown('RelatedStrategies_id', $dropdown_RelatedStrategies, $data["RelatedStrategies_id"], "class='form form-control' id='RelatedStrategies_id' disabled "); ?>
                                            </div>
                                            <input type="hidden" name="RelatedStrategies_id" id="RelatedStrategies_id" value="<?php echo $data['RelatedStrategies_id']; ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row text-left">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <div class="col-6">
                                                เลือกเป้าหมาย
                                                <?php echo form_dropdown('StrategyTarGetDetail_id', $dropdown_StrategyTarGet, $data["StrategyTarGetDetail_id"], "class='form form-control' id='StrategyTarGetDetail_id' onchange='GetStrategyIndicatorDetail();' disabled "); ?>
                                            </div>
                                            <div class="col-6">
                                                เลือกตัวชี้วัด
                                                <?php echo form_dropdown('StrategyIndicatorDetail_id', $dropdown_StrategyIndicator, $data["StrategyIndicatorDetail_id"], "class='form form-control' id='StrategyIndicatorDetail_id' disabled "); ?>
                                            </div>
                                            <input type="hidden" name="StrategyTarGetDetail_id" id="StrategyTarGetDetail_id" value="<?php echo $data['StrategyTarGetDetail_id']; ?>" />
                                            <input type="hidden" name="StrategyIndicatorDetail_id" id="StrategyIndicatorDetail_id" value="<?php echo $data['StrategyIndicatorDetail_id']; ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row text-left">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <div class="col-2">
                                                รูปแบบโครงการ
                                            </div>
                                            <div class="col-2">
                                                <label>
                                                    <input type="radio" name="TypeProjectYearPlan_show" value="1" <?php if ($data['TypeProjectYearPlan'] == '1') {
                                                                                                                        echo "checked";
                                                                                                                    }  ?> disabled />
                                                    จบในโครงการ
                                                </label>
                                            </div>
                                            <div class="col-3">
                                                <label>
                                                    <input type="radio" name="TypeProjectYearPlan_show" value="2" <?php if ($data['TypeProjectYearPlan'] == '2') {
                                                                                                                        echo "checked";
                                                                                                                    }  ?> disabled />
                                                    โครงการต่อเนื่อง (เป็นโครงการแรก)
                                                </label>
                                            </div>
                                            <div class="col-3">
                                                <label>
                                                    <input type="radio" name="TypeProjectYearPlan_show" value="3" <?php if ($data['TypeProjectYearPlan'] == '3') {
                                                                                                                        echo "checked";
                                                                                                                    }  ?> disabled />
                                                    โครงการต่อเนื่อง (จากโครงการที่มีอยู่)
                                                </label>
                                            </div>
                                            <input type="hidden" name="TypeProjectYearPlan" id="TypeProjectYearPlan" value="<?php echo $data['TypeProjectYearPlan']; ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row text-left">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <div class="col-3">
                                                ระยะเวลาดำเนินโครงการ เริ่มต้น
                                                <input data-provide="datepicker" data-date-language="th-th" type="text" class='form-control' name="StartYearPlan" id="StartYearPlan" value="<?php echo $data['StartYearPlan']; ?>" autocomplete="off" disabled />
                                            </div>
                                            <div class="col-2">
                                                สิ้นสุด
                                                <input data-provide="datepicker" data-date-language="th-th" type="text" class='form-control' name="FinishYearPlan" id="FinishYearPlan" value="<?php echo $data['FinishYearPlan']; ?>" autocomplete="off" disabled />
                                            </div>
                                            <div class="col-3">
                                                งบประมาณดำเนินโครงการ (บาท)
                                                <input type="text" class='form-control' name="BudgetYearPlan" id="BudgetYearPlan" value="<?php echo $data['BudgetYearPlan']; ?>" onkeyup="dokeyupMoney(this);" onchange="dokeyupMoney(this);" onkeypress="checknumberMoney()" autocomplete="off" disabled />
                                            </div>
                                            <div class="col-4">
                                                ประเภทแหล่งเงินงบประมาณ
                                                <?php echo form_dropdown('BudgetSourceType_id', $dropdown_SourceBudget, $data["BudgetSourceType_id"], "class='form form-control' id='BudgetSourceType_id' disabled "); ?>
                                            </div>
                                            <input type="hidden" name="StartYearPlan" id="StartYearPlan" value="<?php echo $data['StartYearPlan']; ?>" />
                                            <input type="hidden" name="FinishYearPlan" id="FinishYearPlan" value="<?php echo $data['FinishYearPlan']; ?>" />
                                            <input type="hidden" name="BudgetYearPlan" id="BudgetYearPlan" value="<?php echo $data['BudgetYearPlan']; ?>" />
                                            <input type="hidden" name="BudgetSourceType_id" id="BudgetSourceType_id" value="<?php echo $data['BudgetSourceType_id']; ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row text-left">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <div class="col-3">
                                                ช่วงเวลาจัดทำ TOR เริ่มต้น
                                                <input style="background-color:white;" data-provide="datepicker" data-date-language="th-th" type="text" class='form-control' name="start_tor" id="start_tor" value="<?php echo $data['start_tor']; ?>" required />
                                            </div>
                                            <div class="col-3">
                                                สิ้นสุด
                                                <input style="background-color:white;" data-provide="datepicker" data-date-language="th-th" type="text" class='form-control' name="finish_tor" id="finish_tor" value="<?php echo $data['finish_tor']; ?>" required />
                                            </div>
                                            <div class="col-3">
                                                ช่วงเวลาจัดซื้อจัดจ้าง เริ่มต้น
                                                <input style="background-color:white;" data-provide="datepicker" data-date-language="th-th" type="text" class='form-control' name="start_procurement" id="start_procurement" value="<?php echo $data['start_procurement']; ?>" required />
                                            </div>
                                            <div class="col-3">
                                                สิ้นสุด
                                                <input style="background-color:white;" data-provide="datepicker" data-date-language="th-th" type="text" class='form-control' name="finish_procurement" id="finish_procurement" value="<?php echo $data['finish_procurement']; ?>" required />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row text-left">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                ที่มาโครงการ/เหตุผลและความจำเป็น
                                                <textarea name='ProjectSourceYearPlan' rows='5' class='form-control' disabled><?php echo $data['ProjectSourceYearPlan']; ?></textarea>
                                            </div>
                                            <input type="hidden" name="ProjectSourceYearPlan" id="ProjectSourceYearPlan" value="<?php echo $data['ProjectSourceYearPlan']; ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row text-left">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                วัตถุประสงค์โครงการ
                                                <textarea name='ObjectiveYearPlan' rows='5' class='form-control' disabled><?php echo $data['ObjectiveYearPlan']; ?></textarea>
                                            </div>
                                            <input type="hidden" name="ObjectiveYearPlan" id="ObjectiveYearPlan" value="<?php echo $data['ObjectiveYearPlan']; ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row text-left">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                รายละเอียดเพิ่มเติม
                                                <textarea name='DetailYearPlan' rows='5' class='form-control' disabled><?php echo $data['DetailYearPlan']; ?></textarea>
                                            </div>
                                            <input type="hidden" name="DetailYearPlan" id="DetailYearPlan" value="<?php echo $data['DetailYearPlan']; ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row text-left">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <div class="col-1">
                                                สถานะ
                                            </div>
                                            <div class="col-1">
                                                <label>
                                                    <input type="radio" name="StatusYearPlan_show" value="Y" <?php if ($data['StatusYearPlan'] == 'Y') {
                                                                                                                    echo "checked";
                                                                                                                }  ?> disabled />
                                                    ใช้งาน
                                                </label>
                                            </div>
                                            <div class="col-2">
                                                <label>
                                                    <input type="radio" name="StatusYearPlan_show" value="N" <?php if ($data['StatusYearPlan'] == 'N') {
                                                                                                                    echo "checked";
                                                                                                                }  ?> disabled />
                                                    ไม่ใช้งาน
                                                </label>
                                            </div>
                                            <input type="hidden" name="StatusYearPlan" id="StatusYearPlan" value="<?php echo $data['StatusYearPlan']; ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row text-left">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                หมายเหตุ
                                                <textarea name='RemarksYearPlan' rows='5' class='form-control' disabled><?php echo $data['RemarksYearPlan']; ?></textarea>
                                            </div>
                                            <input type="hidden" name="RemarksYearPlan" id="RemarksYearPlan" value="<?php echo $data['RemarksYearPlan']; ?>" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if ($data['TypeSelect'] == '2'): ?>
                            <div id="tab1">
                                <div class="row text-left">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <div class="row text-left">
                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <div class="col-12">
                                                            ชื่อโครงการ (ภาษาไทย)
                                                            <input type="text" class='form-control' name="ProjectNameTH" id="ProjectNameTH" value="<?php echo $data['ProjectNameTH']; ?>" onkeyup="isThaichar(this.value,this)" required />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row text-left">
                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <div class="col-12">
                                                            ชื่อโครงการ (ภาษาอังกฤษ)
                                                            <input type="text" class='form-control' name="ProjectNameEN" id="ProjectNameEN" value="<?php echo $data['ProjectNameEN']; ?>" onkeyup="isEngchar(this.value,this)" required />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row text-left">
                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <div class="col-10">
                                                            เลือกแผน
                                                            <?php echo form_dropdown('OverAllPlan_id', $dropdown_masterOverAllPlan, $data["OverAllPlan_id"], "class='form form-control' id='OverAllPlan_id' onchange='GetAnnualTargetValueYearDetail();' "); ?>
                                                        </div>
                                                        <div class="col-2">
                                                            เลือกปีที่จัดทำโครงการ
                                                            <?php echo form_dropdown('AnnualTargetValue_Year', $dropdown_AnnualTargetValue_Year, $data["AnnualTargetValue_Year"], "class='form form-control' id='AnnualTargetValue_Year' "); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row text-left">
                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <div class="col-12">
                                                            เลือกยุทธศาสตร์
                                                            <?php echo form_dropdown('RelatedStrategies_id', $dropdown_RelatedStrategies, $data["RelatedStrategies_id"], "class='form form-control' id='RelatedStrategies_id' "); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row text-left">
                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <div class="col-6">
                                                            เลือกเป้าหมาย
                                                            <?php echo form_dropdown('StrategyTarGetDetail_id', $dropdown_StrategyTarGet, $data["StrategyTarGetDetail_id"], "class='form form-control' id='StrategyTarGetDetail_id' onchange='GetStrategyIndicatorDetail();' "); ?>
                                                        </div>
                                                        <div class="col-6">
                                                            เลือกตัวชี้วัด
                                                            <?php echo form_dropdown('StrategyIndicatorDetail_id', $dropdown_StrategyIndicator, $data["StrategyIndicatorDetail_id"], "class='form form-control' id='StrategyIndicatorDetail_id' "); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row text-left">
                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <div class="col-2">
                                                            รูปแบบโครงการ
                                                        </div>
                                                        <div class="col-2">
                                                            <label>
                                                                <input type="radio" name="TypeProjectYearPlan" value="1" <?php if ($data['TypeProjectYearPlan'] == '1') {
                                                                                                                                echo "checked";
                                                                                                                            }  ?> />
                                                                จบในโครงการ
                                                            </label>
                                                        </div>
                                                        <div class="col-3">
                                                            <label>
                                                                <input type="radio" name="TypeProjectYearPlan" value="2" <?php if ($data['TypeProjectYearPlan'] == '2') {
                                                                                                                                echo "checked";
                                                                                                                            }  ?>>
                                                                โครงการต่อเนื่อง (เป็นโครงการแรก)
                                                            </label>
                                                        </div>
                                                        <div class="col-3">
                                                            <label>
                                                                <input type="radio" name="TypeProjectYearPlan" value="3" <?php if ($data['TypeProjectYearPlan'] == '3') {
                                                                                                                                echo "checked";
                                                                                                                            }  ?>>
                                                                โครงการต่อเนื่อง (จากโครงการที่มีอยู่)
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row text-left">
                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <div class="col-3">
                                                            ระยะเวลาดำเนินโครงการ เริ่มต้น
                                                            <input style="background-color:white;" data-provide="datepicker" data-date-language="th-th" type="text" class='form-control' name="StartYearPlan" id="StartYearPlan" value="<?php echo $data['StartYearPlan']; ?>" autocomplete="off" />
                                                        </div>
                                                        <div class="col-2">
                                                            สิ้นสุด
                                                            <input style="background-color:white;" data-provide="datepicker" data-date-language="th-th" type="text" class='form-control' name="FinishYearPlan" id="FinishYearPlan" value="<?php echo $data['FinishYearPlan']; ?>" autocomplete="off" />
                                                        </div>
                                                        <div class="col-3">
                                                            งบประมาณดำเนินโครงการ (บาท)
                                                            <input type="text" class='form-control' name="BudgetYearPlan" id="BudgetYearPlan" value="<?php echo $data['BudgetYearPlan']; ?>" onkeyup="dokeyupMoney(this);" onchange="dokeyupMoney(this);" onkeypress="checknumberMoney()" required autocomplete="off" />
                                                        </div>
                                                        <div class="col-4">
                                                            ประเภทแหล่งเงินงบประมาณ
                                                            <?php echo form_dropdown('BudgetSourceType_id', $dropdown_SourceBudget, $data["BudgetSourceType_id"], "class='form form-control' id='BudgetSourceType_id' "); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row text-left">
                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <div class="col-3">
                                                            ช่วงเวลาจัดทำ TOR เริ่มต้น
                                                            <input style="background-color:white;" data-provide="datepicker" data-date-language="th-th" type="text" class='form-control' name="start_tor" id="start_tor" value="<?php echo $data['start_tor']; ?>" required />
                                                        </div>
                                                        <div class="col-3">
                                                            สิ้นสุด
                                                            <input style="background-color:white;" data-provide="datepicker" data-date-language="th-th" type="text" class='form-control' name="finish_tor" id="finish_tor" value="<?php echo $data['finish_tor']; ?>" required />
                                                        </div>
                                                        <div class="col-3">
                                                            ช่วงเวลาจัดซื้อจัดจ้าง เริ่มต้น
                                                            <input style="background-color:white;" data-provide="datepicker" data-date-language="th-th" type="text" class='form-control' name="start_procurement" id="start_procurement" value="<?php echo $data['start_procurement']; ?>" required />
                                                        </div>
                                                        <div class="col-3">
                                                            สิ้นสุด
                                                            <input style="background-color:white;" data-provide="datepicker" data-date-language="th-th" type="text" class='form-control' name="finish_procurement" id="finish_procurement" value="<?php echo $data['finish_procurement']; ?>" required />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row text-left">
                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <div class="col-12">
                                                            ที่มาโครงการ/เหตุผลและความจำเป็น
                                                            <textarea name='ProjectSourceYearPlan' rows='5' class='form-control'><?php echo $data['ProjectSourceYearPlan']; ?></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row text-left">
                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <div class="col-12">
                                                            วัตถุประสงค์โครงการ
                                                            <textarea name='ObjectiveYearPlan' rows='5' class='form-control'><?php echo $data['ObjectiveYearPlan']; ?></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row text-left">
                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <div class="col-12">
                                                            รายละเอียดเพิ่มเติม
                                                            <textarea name='DetailYearPlan' rows='5' class='form-control'><?php echo $data['DetailYearPlan']; ?></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row text-left">
                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <div class="col-1">
                                                            สถานะ
                                                        </div>
                                                        <div class="col-1">
                                                            <label>
                                                                <input type="radio" name="StatusYearPlan" value="Y" <?php if ($data['StatusYearPlan'] == 'Y') {
                                                                                                                        echo "checked";
                                                                                                                    }  ?> />
                                                                ใช้งาน
                                                            </label>
                                                        </div>
                                                        <div class="col-2">
                                                            <label>
                                                                <input type="radio" name="StatusYearPlan" value="N" <?php if ($data['StatusYearPlan'] == 'N') {
                                                                                                                        echo "checked";
                                                                                                                    }  ?>>
                                                                ไม่ใช้งาน
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row text-left">
                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <div class="col-12">
                                                            หมายเหตุ
                                                            <textarea name='RemarksYearPlan' rows='5' class='form-control'><?php echo $data['RemarksYearPlan']; ?></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <div id="tab2">
                            <div class="row text-left">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="class_header_page_03">
                                                รายละเอียดงวดงานและงวดเงิน
                                            </div>
                                            <br />
                                            <table>
                                                <tr>
                                                    <td align="left" valign="middle">
                                                        <span class="detail">
                                                            <input type="button" class="btn btn-success" value="เพิ่มรายการ" onClick="addRow('datatable1')" />
                                                            <input type="button" class="btn btn-danger" value="ลบรายการ" onClick="deleteRow('datatable1')" />
                                                        </span>
                                                    </td>
                                                </tr>
                                            </table>
                                            <div class="scrollmenu">
                                                <table class="table table-bordered" id="datatable1">
                                                    <tr class="bg_th">
                                                        <th class="align-middle text-center">
                                                            <font color='white'>เลือกลบ</font>
                                                        </th>
                                                        <th class="align-middle text-center">
                                                            <font color='white'>งานงวดที่</font>
                                                        </th>
                                                        <th class="align-middle text-center">
                                                            <font color='white'>เงินงวดที่</font>
                                                        </th>
                                                        <th class="align-middle text-center">
                                                            <font color='white'>ร้อยละการเบิกจ่าย</font>
                                                        </th>
                                                        <th class="align-middle text-center">
                                                            <font color='white'>ยอดเบิกจ่าย(บาท)</font>
                                                        </th>
                                                        <th class="align-middle text-center">
                                                            <font color='white'>จ่ายเมื่อ<br />(จำนวนวันนับถัดจากวันที่ลงนามตามสัญญา)</font>
                                                        </th>
                                                        <th class="align-middle text-center">
                                                            <font color='white'>ประมาณวันที่</font>
                                                        </th>
                                                        <th class="align-middle text-center">
                                                            <font color='white'>ร้อยละความก้าวหน้างาน</font>
                                                        </th>
                                                    </tr>
                                                    <tbody>
                                                        <?php
                                                        if (!empty($OverAllPlanYearWorkMoneyPeriod)) {
                                                            $count_data_use1 = count($OverAllPlanYearWorkMoneyPeriod);
                                                        }
                                                        foreach ($OverAllPlanYearWorkMoneyPeriod as $result_data_set1):
                                                        ?>
                                                            <tr>
                                                                <td align="left" valign="middle"><input type="checkbox" name="chk" id="chk" /></td>
                                                                <td align="left" valign="middle">
                                                                    <span class="detail">
                                                                        <input class="form form-control" name="WorkMoneyPeriodNumber[]" type="text" id="WorkMoneyPeriodNumber[]" value="<?php echo $result_data_set1['WorkMoneyPeriodNumber']; ?>" />
                                                                    </span>
                                                                </td>
                                                                <td align="left" valign="middle">
                                                                    <span class="detail">
                                                                        <input class="form form-control" name="MoneyPeriod[]" type="text" id="MoneyPeriod[]" value="<?php echo $result_data_set1['MoneyPeriod']; ?>" />
                                                                    </span>
                                                                </td>
                                                                <td align="left" valign="middle">
                                                                    <span class="detail">
                                                                        <input class="form form-control" name="Disbursement[]" type="text" id="Disbursement[]" value="<?php echo $result_data_set1['Disbursement']; ?>" />
                                                                    </span>
                                                                </td>
                                                                <td align="left" valign="middle">
                                                                    <span class="detail">
                                                                        <input class="form form-control" name="TotalDisbursement[]" type="text" id="TotalDisbursement[]" value="<?php echo $result_data_set1['TotalDisbursement']; ?>" />
                                                                    </span>
                                                                </td>
                                                                <td align="left" valign="middle">
                                                                    <span class="detail">
                                                                        <input class="form form-control" name="TimeDisbursement[]" type="text" id="TimeDisbursement[]" value="<?php echo $result_data_set1['TimeDisbursement']; ?>" />
                                                                    </span>
                                                                </td>
                                                                <td align="left" valign="middle">
                                                                    <span class="detail">
                                                                        <input data-provide="datepicker" data-date-language="th-th" class="form form-control" name="DateWorkMoneyPeriod[]" type="text" id="DateWorkMoneyPeriod[]" value="<?php echo $result_data_set1['DateWorkMoneyPeriod']; ?>" />
                                                                    </span>
                                                                </td>
                                                                <td align="left" valign="middle">
                                                                    <span class="detail">
                                                                        <input class="form form-control" name="ProgressWorkMoneyPeriod[]" type="text" id="ProgressWorkMoneyPeriod[]" value="<?php echo $result_data_set1['ProgressWorkMoneyPeriod']; ?>" />
                                                                    </span>
                                                                </td>
                                                            </tr>
                                                        <?php
                                                        endforeach;
                                                        ?>
                                                        <tr>
                                                            <td align="left" valign="middle"><input type="checkbox" name="chk" id="chk" /></td>
                                                            <td align="left" valign="middle">
                                                                <span class="detail">
                                                                    <input class="form form-control" name="WorkMoneyPeriodNumber[]" type="text" id="WorkMoneyPeriodNumber[]" value="" />
                                                                </span>
                                                            </td>
                                                            <td align="left" valign="middle">
                                                                <span class="detail">
                                                                    <input class="form form-control" name="MoneyPeriod[]" type="text" id="MoneyPeriod[]" value="" />
                                                                </span>
                                                            </td>
                                                            <td align="left" valign="middle">
                                                                <span class="detail">
                                                                    <input class="form form-control" name="Disbursement[]" type="text" id="Disbursement[]" value="" />
                                                                </span>
                                                            </td>
                                                            <td align="left" valign="middle">
                                                                <span class="detail">
                                                                    <input class="form form-control" name="TotalDisbursement[]" type="text" id="TotalDisbursement[]" value="" />
                                                                </span>
                                                            </td>
                                                            <td align="left" valign="middle">
                                                                <span class="detail">
                                                                    <input class="form form-control" name="TimeDisbursement[]" type="text" id="TimeDisbursement[]" value="" />
                                                                </span>
                                                            </td>
                                                            <td align="left" valign="middle">
                                                                <span class="detail">
                                                                    <input data-provide="datepicker" data-date-language="th-th" class="form form-control" name="DateWorkMoneyPeriod[]" type="text" id="DateWorkMoneyPeriod[]" value="" />
                                                                </span>
                                                            </td>
                                                            <td align="left" valign="middle">
                                                                <span class="detail">
                                                                    <input class="form form-control" name="ProgressWorkMoneyPeriod[]" type="text" id="ProgressWorkMoneyPeriod[]" value="" />
                                                                </span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row text-left">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <div class="class_header_page_03">
                                            สิ่งที่ต้องส่งมอบ
                                        </div>
                                        <br /><br />
                                        <table>
                                            <tr>
                                                <td align="left" valign="middle">
                                                    <span class="detail">
                                                        <input type="button" class="btn btn-success" value="เพิ่มรายการ" onClick="addRow2('datatable2')" />
                                                        <input type="button" class="btn btn-danger" value="ลบรายการ" onClick="deleteRow2('datatable2')" />
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <!--<input type="button" class="btn btn-info" value="คำนวณข้อมูลค่าถ่วงน้ำหนักตั้งต้น" />-->
                                                    </span>
                                                </td>
                                            </tr>
                                        </table>
                                        <br />
                                        <table class="table table-bordered" id="datatable2">
                                            <tr class="bg_th">
                                                <th class="text-center" width="10%">
                                                    <font color='white'>เลือกลบ</font>
                                                </th>
                                                <th class="text-center">
                                                    <font color='white'>งานงวดที่</font>
                                                </th>
                                                <th class="text-center">
                                                    <font color='white'>รายการสิ่งที่ต้องส่งมอบ</font>
                                                </th>
                                                <th class="text-center">
                                                    <font color='white'>ค่าถ่วงน้ำหนัก</font>
                                                </th>
                                            </tr>
                                            <?php
                                            if (!empty($OverAllPlanYearDeliver)) {
                                                $count_data_use2 = count($OverAllPlanYearDeliver);
                                            }
                                            foreach ($OverAllPlanYearDeliver as $result_data_set2):
                                            ?>
                                                <tr>
                                                    <td align="left" valign="middle"><input type="checkbox" name="chk" id="chk" /></td>
                                                    <td align="left" valign="middle">
                                                        <span class="detail">
                                                            <input size='1' class="form form-control" name="WorkingPeriodNumber[]" type="text" id="WorkingPeriodNumber[]" value="<?php echo $result_data_set2['WorkingPeriodNumber']; ?>" />
                                                        </span>
                                                    </td>
                                                    <td align="left" valign="middle">
                                                        <span class="detail">
                                                            <input class="form form-control" name="DetailDeliver[]" type="text" id="DetailDeliver[]" value="<?php echo $result_data_set2['DetailDeliver']; ?>" />
                                                        </span>
                                                    </td>
                                                    <td align="left" valign="middle">
                                                        <span class="detail">
                                                            <input size='2' class="form form-control" name="WeightValue[]" type="text" id="WeightValue[]" value="<?php echo $result_data_set2['WeightValue']; ?>" />
                                                        </span>
                                                    </td>
                                                </tr>
                                            <?php
                                            endforeach;
                                            ?>
                                            <tr>
                                                <td align="left" valign="middle"><input type="checkbox" name="chk" id="chk" /></td>
                                                <td align="left" valign="middle">
                                                    <span class="detail">
                                                        <input size='1' class="form form-control" name="WorkingPeriodNumber[]" type="text" id="WorkingPeriodNumber[]" value="" />
                                                    </span>
                                                </td>
                                                <td align="left" valign="middle">
                                                    <span class="detail">
                                                        <input class="form form-control" name="DetailDeliver[]" type="text" id="DetailDeliver[]" value="" />
                                                    </span>
                                                </td>
                                                <td align="left" valign="middle">
                                                    <span class="detail">
                                                        <input size='2' class="form form-control" name="WeightValue[]" type="text" id="WeightValue[]" value="" />
                                                    </span>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--
                            <div class="row text-left">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <table class="table table-bordered table-hover">
                                                <thead>
                                                    <tr class="bg_th">
                                                        <th class="align-middle text-center" style="width: 90px;">#</th>
                                                        <th class="align-middle text-center">
                                                            <font color='white'>งานงวดที่</font>
                                                        </th>
                                                        <th class="align-middle text-center">
                                                            <font color='white'>ร้อยละ</font>
                                                        </th>
                                                        <th class="align-middle text-center">
                                                            <font color='white'>ค่าถ่วงน้ำหนัก</font>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $rowIndx = 1;
                                                    if (!empty($lstData)) {
                                                        foreach ($result_data_set2 as $result_data_set2) :
                                                    ?>
                                                            <tr>
                                                                <td class="align-top text-center"><?= $rowIndx++; ?></td>
                                                                <td class="align-top text-left"><?= $result_data_set2["code_ref"]; ?></td>
                                                                <td class="align-top text-left"><?= $result_data_set2["name_th"]; ?></td>
                                                                <td class="align-top text-left"><?= $result_data_set2["status_plan"]; ?></td>
                                                            </tr>
                                                        <?php
                                                        endforeach;
                                                    } else {
                                                        ?>
                                                        <tr>
                                                            <td colspan="4" class="align-top text-center">
                                                                <font color="red">-- ไม่มีรายการข้อมูล --</font>
                                                            </td>
                                                        </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            -->
                            <div class="row text-left">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <div class="class_header_page_03">
                                            เอกสารรายละเอียดข้อมูลขอบเขตงานและการเบิกเงิน
                                        </div>
                                        <br /><br />
                                        <table>
                                            <tr>
                                                <td align="left" valign="middle">
                                                    <span class="detail">
                                                        <input type="button" class="btn btn-success" value="เพิ่มรายการ" onClick="addRow3('datatable3')" />
                                                        <input type="button" class="btn btn-danger" value="ลบรายการ" onClick="deleteRow3('datatable3')" />
                                                    </span>
                                                </td>
                                            </tr>
                                        </table>
                                        <br />
                                        <table class="table table-bordered" id="datatable3">
                                            <tr class="bg_th">
                                                <th class="text-center" width="10%">
                                                    <font color='white'>เลือกลบ</font>
                                                </th>
                                                <th class="text-center">
                                                    <font color='white'>รายการเอกสาร</font>
                                                </th>
                                                <th class="text-center" width="20%">
                                                    <font color='white'>ประเภท</font>
                                                </th>
                                                <th class="text-center" width="30%">
                                                    <font color='white'>แนบเอกสาร</font>
                                                </th>
                                            </tr>
                                            <?php
                                            if (!empty($OverAllPlanYearDocument)) {
                                                $count_data_use3 = count($OverAllPlanYearDocument);
                                            }
                                            foreach ($OverAllPlanYearDocument as $result_data_set3):
                                            ?>
                                                <tr>
                                                    <td align="left" valign="middle"><input type="checkbox" name="chk" id="chk" /></td>
                                                    <td align="left" valign="middle">
                                                        <span class="detail">
                                                            <input class="form form-control" name="DetailDocument[]" type="text" id="DetailDocument[]" value="<?php echo $result_data_set3['DetailDocument']; ?>" />
                                                        </span>
                                                    </td>
                                                    <td align="left" valign="middle">
                                                        <?php echo form_dropdown('TypeDocument[]', $dropdown_type_document, $result_data_set3["TypeDocument"], "class='form form-control' id='TypeDocument' "); ?>
                                                    </td>
                                                    <td align="left" valign="middle">
                                                        <span class="detail">
                                                            <input class="form form-control" name="FileDocument[]" type="file" id="FileDocument[]" value="<?php echo $result_data_set3['FileDocument']; ?>" />
                                                        </span>
                                                    </td>
                                                </tr>
                                            <?php
                                            endforeach;
                                            ?>
                                            <tr>
                                                <td align="left" valign="middle"><input type="checkbox" name="chk" id="chk" /></td>
                                                <td align="left" valign="middle">
                                                    <span class="detail">
                                                        <input class="form form-control" name="DetailDocument[]" type="text" id="DetailDocument[]" value="" />
                                                    </span>
                                                </td>
                                                <td align="left" valign="middle">
                                                    <?php echo form_dropdown('TypeDocument[]', $dropdown_type_document, '', "class='form form-control' id='TypeDocument' "); ?>
                                                </td>
                                                <td align="left" valign="middle">
                                                    <span class="detail">
                                                        <input class="form form-control" name="FileDocument[]" type="file" id="FileDocument[]" value="" />
                                                    </span>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="row text-left">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <div class="class_header_page_03">
                                            การติดตามกิจกรรมค่าเป้าหมาย (KPI) (ถ้ามี)
                                        </div>
                                        <br /><br />
                                        <table>
                                            <tr>
                                                <td align="left" valign="middle">
                                                    <span class="detail">
                                                        <input type="button" class="btn btn-success" value="เพิ่มรายการ" onClick="addRow4('datatable4')" />
                                                        <input type="button" class="btn btn-danger" value="ลบรายการ" onClick="deleteRow4('datatable4')" />
                                                    </span>
                                                </td>
                                            </tr>
                                        </table>
                                        <br />
                                        <div class="scrollmenu">
                                            <table class="table table-bordered" id="datatable4">
                                                <tr class="bg_th">
                                                    <th class="text-center" width="7%">
                                                        <font color='white'>เลือกลบ</font>
                                                    </th>
                                                    <th class="text-center">
                                                        <font color='white'>
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            กิจกรรม
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        </font>
                                                    </th>
                                                    <th class="text-center">
                                                        <font color='white'>จำนวน</font>
                                                    </th>
                                                    <th class="text-center">
                                                        <font color='white'>
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            หน่วยนับ
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        </font>
                                                    </th>
                                                    <th class="text-center">
                                                        <font color='white'>
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            คำอธิบายเพิ่มเติม
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        </font>
                                                    </th>
                                                    <th class="text-center">
                                                        <font color='white'>เดือนที่ 1</font>
                                                    </th>
                                                    <th class="text-center">
                                                        <font color='white'>เดือนที่ 2</font>
                                                    </th>
                                                    <th class="text-center">
                                                        <font color='white'>เดือนที่ 3</font>
                                                    </th>
                                                    <th class="text-center">
                                                        <font color='white'>เดือนที่ 4</font>
                                                    </th>
                                                    <th class="text-center">
                                                        <font color='white'>เดือนที่ 5</font>
                                                    </th>
                                                    <th class="text-center">
                                                        <font color='white'>เดือนที่ 6</font>
                                                    </th>
                                                    <th class="text-center">
                                                        <font color='white'>เดือนที่ 7</font>
                                                    </th>
                                                    <th class="text-center">
                                                        <font color='white'>เดือนที่ 8</font>
                                                    </th>
                                                    <th class="text-center">
                                                        <font color='white'>เดือนที่ 9</font>
                                                    </th>
                                                    <th class="text-center">
                                                        <font color='white'>เดือนที่ 10</font>
                                                    </th>
                                                    <th class="text-center">
                                                        <font color='white'>เดือนที่ 11</font>
                                                    </th>
                                                    <th class="text-center">
                                                        <font color='white'>เดือนที่ 12</font>
                                                    </th>
                                                    <th class="text-center">
                                                        <font color='white'>ตัวช่วยคำนวณ</font>
                                                    </th>
                                                </tr>
                                                <?php
                                                if (!empty($OverAllPlanYearTargetKPI)) {
                                                    $count_data_use4 = count($OverAllPlanYearTargetKPI);
                                                }
                                                foreach ($OverAllPlanYearTargetKPI as $result_data_set4):
                                                ?>
                                                    <tr>
                                                        <td align="left" valign="middle"><input type="checkbox" name="chk" id="chk" /></td>
                                                        <td align="left" valign="middle">
                                                            <span class="detail">
                                                                <input class="form form-control" name="ActivityTargetKPI[]" type="text" id="ActivityTargetKPI[]" value="<?php echo $result_data_set4['ActivityTargetKPI']; ?>" />
                                                            </span>
                                                        </td>
                                                        <td align="left" valign="middle">
                                                            <span class="detail">
                                                                <input class="form form-control" name="QuantityTargetKPI[]" type="text" id="QuantityTargetKPI[]" value="<?php echo $result_data_set4['QuantityTargetKPI']; ?>" />
                                                            </span>
                                                        </td>
                                                        <td align="left" valign="middle">
                                                            <?php echo form_dropdown('UnitTargetKPI[]', $dropdown_master_unit, $result_data_set4["UnitTargetKPI"], "class='form form-control' id='UnitTargetKPI' "); ?>
                                                        </td>
                                                        <td align="left" valign="middle">
                                                            <span class="detail">
                                                                <input class="form form-control" name="DetailTargetKPI[]" type="text" id="DetailTargetKPI[]" value="<?php echo $result_data_set4['DetailTargetKPI']; ?>" />
                                                            </span>
                                                        </td>
                                                        <td align="left" valign="middle">
                                                            <span class="detail">
                                                                <input class="form form-control" name="Month1TargetKPI[]" type="text" id="Month1TargetKPI[]" value="<?php echo $result_data_set4['Month1TargetKPI']; ?>" />
                                                            </span>
                                                        </td>
                                                        <td align="left" valign="middle">
                                                            <span class="detail">
                                                                <input class="form form-control" name="Month2TargetKPI[]" type="text" id="Month2TargetKPI[]" value="<?php echo $result_data_set4['Month2TargetKPI']; ?>" />
                                                            </span>
                                                        </td>
                                                        <td align="left" valign="middle">
                                                            <span class="detail">
                                                                <input class="form form-control" name="Month3TargetKPI[]" type="text" id="Month3TargetKPI[]" value="<?php echo $result_data_set4['Month3TargetKPI']; ?>" />
                                                            </span>
                                                        </td>
                                                        <td align="left" valign="middle">
                                                            <span class="detail">
                                                                <input class="form form-control" name="Month4TargetKPI[]" type="text" id="Month4TargetKPI[]" value="<?php echo $result_data_set4['Month4TargetKPI']; ?>" />
                                                            </span>
                                                        </td>
                                                        <td align="left" valign="middle">
                                                            <span class="detail">
                                                                <input class="form form-control" name="Month5TargetKPI[]" type="text" id="Month5TargetKPI[]" value="<?php echo $result_data_set4['Month5TargetKPI']; ?>" />
                                                            </span>
                                                        </td>
                                                        <td align="left" valign="middle">
                                                            <span class="detail">
                                                                <input class="form form-control" name="Month6TargetKPI[]" type="text" id="Month6TargetKPI[]" value="<?php echo $result_data_set4['Month6TargetKPI']; ?>" />
                                                            </span>
                                                        </td>
                                                        <td align="left" valign="middle">
                                                            <span class="detail">
                                                                <input class="form form-control" name="Month7TargetKPI[]" type="text" id="Month7TargetKPI[]" value="<?php echo $result_data_set4['Month7TargetKPI']; ?>" />
                                                            </span>
                                                        </td>
                                                        <td align="left" valign="middle">
                                                            <span class="detail">
                                                                <input class="form form-control" name="Month8TargetKPI[]" type="text" id="Month8TargetKPI[]" value="<?php echo $result_data_set4['Month8TargetKPI']; ?>" />
                                                            </span>
                                                        </td>
                                                        <td align="left" valign="middle">
                                                            <span class="detail">
                                                                <input class="form form-control" name="Month9TargetKPI[]" type="text" id="Month9TargetKPI[]" value="<?php echo $result_data_set4['Month9TargetKPI']; ?>" />
                                                            </span>
                                                        </td>
                                                        <td align="left" valign="middle">
                                                            <span class="detail">
                                                                <input class="form form-control" name="Month10TargetKPI[]" type="text" id="Month10TargetKPI[]" value="<?php echo $result_data_set4['Month10TargetKPI']; ?>" />
                                                            </span>
                                                        </td>
                                                        <td align="left" valign="middle">
                                                            <span class="detail">
                                                                <input class="form form-control" name="Month11TargetKPI[]" type="text" id="Month11TargetKPI[]" value="<?php echo $result_data_set4['Month11TargetKPI']; ?>" />
                                                            </span>
                                                        </td>
                                                        <td align="left" valign="middle">
                                                            <span class="detail">
                                                                <input class="form form-control" name="Month12TargetKPI[]" type="text" id="Month12TargetKPI[]" value="<?php echo $result_data_set4['Month12TargetKPI']; ?>" />
                                                            </span>
                                                        </td>
                                                        <td align="left" valign="middle">
                                                            <span class="detail">
                                                                <input class="form form-control" name="CalTargetKPI[]" type="text" id="CalTargetKPI[]" value="<?php echo $result_data_set4['CalTargetKPI']; ?>" />
                                                            </span>
                                                        </td>
                                                    </tr>
                                                <?php
                                                endforeach;
                                                ?>
                                                <tr>
                                                    <td align="left" valign="middle"><input type="checkbox" name="chk" id="chk" /></td>
                                                    <td align="left" valign="middle">
                                                        <span class="detail">
                                                            <input class="form form-control" name="ActivityTargetKPI[]" type="text" id="ActivityTargetKPI[]" value="" />
                                                        </span>
                                                    </td>
                                                    <td align="left" valign="middle">
                                                        <span class="detail">
                                                            <input class="form form-control" name="QuantityTargetKPI[]" type="text" id="QuantityTargetKPI[]" value="" />
                                                        </span>
                                                    </td>
                                                    <td align="left" valign="middle">
                                                        <?php echo form_dropdown('UnitTargetKPI[]', $dropdown_master_unit, '', "class='form form-control' id='UnitTargetKPI' "); ?>
                                                    </td>
                                                    <td align="left" valign="middle">
                                                        <span class="detail">
                                                            <input class="form form-control" name="DetailTargetKPI[]" type="text" id="DetailTargetKPI[]" value="" />
                                                        </span>
                                                    </td>
                                                    <td align="left" valign="middle">
                                                        <span class="detail">
                                                            <input class="form form-control" name="Month1TargetKPI[]" type="text" id="Month1TargetKPI[]" value="" />
                                                        </span>
                                                    </td>
                                                    <td align="left" valign="middle">
                                                        <span class="detail">
                                                            <input class="form form-control" name="Month2TargetKPI[]" type="text" id="Month2TargetKPI[]" value="" />
                                                        </span>
                                                    </td>
                                                    <td align="left" valign="middle">
                                                        <span class="detail">
                                                            <input class="form form-control" name="Month3TargetKPI[]" type="text" id="Month3TargetKPI[]" value="" />
                                                        </span>
                                                    </td>
                                                    <td align="left" valign="middle">
                                                        <span class="detail">
                                                            <input class="form form-control" name="Month4TargetKPI[]" type="text" id="Month4TargetKPI[]" value="" />
                                                        </span>
                                                    </td>
                                                    <td align="left" valign="middle">
                                                        <span class="detail">
                                                            <input class="form form-control" name="Month5TargetKPI[]" type="text" id="Month5TargetKPI[]" value="" />
                                                        </span>
                                                    </td>
                                                    <td align="left" valign="middle">
                                                        <span class="detail">
                                                            <input class="form form-control" name="Month6TargetKPI[]" type="text" id="Month6TargetKPI[]" value="" />
                                                        </span>
                                                    </td>
                                                    <td align="left" valign="middle">
                                                        <span class="detail">
                                                            <input class="form form-control" name="Month7TargetKPI[]" type="text" id="Month7TargetKPI[]" value="" />
                                                        </span>
                                                    </td>
                                                    <td align="left" valign="middle">
                                                        <span class="detail">
                                                            <input class="form form-control" name="Month8TargetKPI[]" type="text" id="Month8TargetKPI[]" value="" />
                                                        </span>
                                                    </td>
                                                    <td align="left" valign="middle">
                                                        <span class="detail">
                                                            <input class="form form-control" name="Month9TargetKPI[]" type="text" id="Month9TargetKPI[]" value="" />
                                                        </span>
                                                    </td>
                                                    <td align="left" valign="middle">
                                                        <span class="detail">
                                                            <input class="form form-control" name="Month10TargetKPI[]" type="text" id="Month10TargetKPI[]" value="" />
                                                        </span>
                                                    </td>
                                                    <td align="left" valign="middle">
                                                        <span class="detail">
                                                            <input class="form form-control" name="Month11TargetKPI[]" type="text" id="Month11TargetKPI[]" value="" />
                                                        </span>
                                                    </td>
                                                    <td align="left" valign="middle">
                                                        <span class="detail">
                                                            <input class="form form-control" name="Month12TargetKPI[]" type="text" id="Month12TargetKPI[]" value="" />
                                                        </span>
                                                    </td>
                                                    <td align="left" valign="middle">
                                                        <span class="detail">
                                                            <input class="form form-control" name="CalTargetKPI[]" type="text" id="CalTargetKPI[]" value="" />
                                                        </span>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-sm-12 text-right">
                    <input name="btnSave" id="btnSave" type="submit" class="btn btn-success" value="บันทึกข้อมูล">
                    <input name="btnConfirm" id="btnConfirm" type="submit" class="btn btn-info" value="ยืนยันข้อมูล">
                    <button type="reset" class="btn btn-secondary" value="reset" onclick="window.location='<?php echo base_url(); ?>/<?= $routeGroup ?>'"><i class="fas fa-reply"></i> กลับสู่หน้าหลัก</button>

                </div>
            </div>
        <?php endif; ?>
        <br />
    </form>
</div>

<?= $this->endSection(); ?>

<?= $this->section("javascripts"); ?>
<script>
    function show1() {
        document.getElementById('divTypeSelect1').style.display = 'none';
        document.getElementById('divTypeSelect2').style.display = 'block';
    }

    function show2() {
        document.getElementById('divTypeSelect1').style.display = 'block';
        document.getElementById('divTypeSelect2').style.display = 'none';
    }

    function addRow(tableID) {

        var table = document.getElementById(tableID);

        var rowCount = table.rows.length;
        var row = table.insertRow(rowCount);

        var colCount = table.rows[<?php echo $count_data_use1; ?> + 1].cells.length;

        for (var i = 0; i < colCount; i++) {

            var newcell = row.insertCell(i);

            newcell.innerHTML = table.rows[<?php echo $count_data_use1; ?> + 1].cells[i].innerHTML;
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

    function addRow2(tableID) {

        var table = document.getElementById(tableID);

        var rowCount = table.rows.length;
        var row = table.insertRow(rowCount);

        var colCount = table.rows[<?php echo $count_data_use2; ?> + 1].cells.length;

        for (var i = 0; i < colCount; i++) {

            var newcell = row.insertCell(i);

            newcell.innerHTML = table.rows[<?php echo $count_data_use2; ?> + 1].cells[i].innerHTML;
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

    function deleteRow2(tableID) {
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

    function addRow3(tableID) {

        var table = document.getElementById(tableID);

        var rowCount = table.rows.length;
        var row = table.insertRow(rowCount);

        var colCount = table.rows[<?php echo $count_data_use3; ?> + 1].cells.length;

        for (var i = 0; i < colCount; i++) {

            var newcell = row.insertCell(i);

            newcell.innerHTML = table.rows[<?php echo $count_data_use3; ?> + 1].cells[i].innerHTML;
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

    function deleteRow3(tableID) {
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

    function addRow4(tableID) {

        var table = document.getElementById(tableID);

        var rowCount = table.rows.length;
        var row = table.insertRow(rowCount);

        var colCount = table.rows[<?php echo $count_data_use4; ?> + 1].cells.length;

        for (var i = 0; i < colCount; i++) {

            var newcell = row.insertCell(i);

            newcell.innerHTML = table.rows[<?php echo $count_data_use4; ?> + 1].cells[i].innerHTML;
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

    function deleteRow4(tableID) {
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


    function isThaichar(str, obj) {
        var isThai = true;
        var orgi_text = " ๅภถุึคตจขชๆไำพะัีรนยบลฃฟหกดเ้่าสวงผปแอิืทมใฝ๑๒๓๔ู฿๕๖๗๘๙๐ฎฑธํ๊ณฯญฐฅฤฆฏโฌ็๋ษศซฉฮฺ์ฒฬฦ0123456789-.";
        var chk_text = str.split("");
        chk_text.filter(function(s) {
            if (orgi_text.indexOf(s) == -1) {
                isThai = false;
                obj.value = str.replace(RegExp(s, "g"), '');
            }
        });
        return isThai; // ถ้าเป็น true แสดงว่าเป็นภาษาไทยทั้งหมด*/
    }

    function isEngchar(str, obj) {
        var isThai = true;
        var orgi_text = " ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefighjklmnopqrstuvwxyz0123456789-.";
        var chk_text = str.split("");
        chk_text.filter(function(s) {
            if (orgi_text.indexOf(s) == -1) {
                isThai = false;
                obj.value = str.replace(RegExp(s, "g"), '');
            }
        });
        return isThai; // ถ้าเป็น true แสดงว่าเป็นภาษาไทยทั้งหมด*/
    }

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
        var StrategyRelateDetail_id = document.getElementById('StrategyRelateDetail_id').value;

        if (OverAllPlan_id.trim() == 0) {
            alert('กรุณาเลือกแผน');
            document.getElementById('OverAllPlan_id').focus();
            return false;
        } else if (StrategyRelateDetail_id.trim() == 0) {
            alert('กรุณาเลือกแผนย่อย');
            document.getElementById('StrategyRelateDetail_id').focus();
            return false;
        } else {
            document.form_ID.submit();
            return true;
        }
    }

    function GetAnnualTargetValueYearDetail() {
        var OverAllPlan_id = $("[name=OverAllPlan_id]  option:selected").val();
        var objDDL = $("[name=AnnualTargetValue_Year]");
        objDDL.empty();
        objDDL.append("<option value='' >-- เลือกปี --</option>");

        var objDDL2 = $("[name=RelatedStrategies_id]");
        objDDL2.empty();
        objDDL2.append("<option value='' >-- เลือกยุทธศาสตร์ --</option>");

        var objDDL3 = $("[name=StrategyTarGetDetail_id]");
        objDDL3.empty();
        objDDL3.append("<option value='' >-- เลือกเป้าหมาย --</option>");

        var objDDL4 = $("[name=StrategyIndicatorDetail_id]");
        objDDL4.empty();
        objDDL4.append("<option value='' >-- เลือกตัวชี้วัด --</option>");

        if (OverAllPlan_id == "") return;

        var jqxhr = $.get("<?php echo base_url(); ?>Ajax/OverAllPlanAnnualTargetValueDoeb_year/" + OverAllPlan_id)

            .done(function(response, jqxhr) {
                if (!(response == null || response == false)) {
                    var objData = response;
                    objData.forEach(function(item, index) {
                        objDDL.append("<option value='" + item.Years + "' >" + item.Years + "</option>");
                    });
                    // initddlDistrictID();
                } else {

                }
            });

        jqxhr.fail(function(response) {
                // alert( "error" );
                console.log(response);
            })
            .always(function() {
                // initddlDistrictID();
            });


        var jqxhr2 = $.get("<?php echo base_url(); ?>Ajax/RelatedStrategies_list/" + OverAllPlan_id)

            .done(function(response, jqxhr2) {
                if (!(response == null || response == false)) {
                    var objData2 = response;
                    objData2.forEach(function(item, index) {
                        objDDL2.append("<option value='" + item.RelatedStrategies_id + "' >" + item.RelatedStrategies_Name + "</option>");
                    });
                    // initddlDistrictID();
                } else {

                }
            });

        jqxhr2.fail(function(response) {
                // alert( "error" );
                console.log(response);
            })
            .always(function() {
                // initddlDistrictID();
            });

        var jqxhr3 = $.get("<?php echo base_url(); ?>Ajax/StrategyTarGetDetail_listForPlanFiveYear/" + OverAllPlan_id)

            .done(function(response, jqxhr3) {
                if (!(response == null || response == false)) {
                    var objData3 = response;
                    objData3.forEach(function(item, index) {
                        objDDL3.append("<option value='" + item.StrategyTarGetDetail_id + "' >เป้าหมาย=" + item.ItemL1 + "." + item.ItemL2 + "." + item.ItemL3 + " " + item.Name + "</option>");
                    });
                    // initddlDistrictID();
                } else {

                }
            });

        jqxhr3.fail(function(response) {
                // alert( "error" );
                console.log(response);
            })
            .always(function() {
                // initddlDistrictID();
            });

    }

    function GetStrategyIndicatorDetail() {
        var StrategyTarGetDetail_id = $("[name=StrategyTarGetDetail_id]  option:selected").val();
        var objDDL = $("[name=StrategyIndicatorDetail_id]");
        objDDL.empty();
        objDDL.append("<option value='' >-- เลือกตัวชี้วัด --</option>");

        if (StrategyTarGetDetail_id == "") return;

        var jqxhr = $.get("<?php echo base_url(); ?>Ajax/StrategyIndicatorDetail_list/" + StrategyTarGetDetail_id)

            .done(function(response, jqxhr) {
                if (!(response == null || response == false)) {
                    var objData = response;
                    objData.forEach(function(item, index) {
                        objDDL.append("<option value='" + item.StrategyIndicatorDetail_id + "' >ตัวชี้วัด=" + item.ItemL1 + "." + item.ItemL2 + "." + item.ItemL3 + " " + item.Name + "</option>");
                    });
                    // initddlDistrictID();
                } else {

                }
            });

        jqxhr.fail(function(response) {
                // alert( "error" );
                console.log(response);
            })
            .always(function() {
                // initddlDistrictID();
            });

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

    });
</script>
<?= $this->endSection(); ?>