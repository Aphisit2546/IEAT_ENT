<?= $this->extend('layouts/main_for_view') ?>

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
                                            <input style="background-color:white;" data-provide="datepicker" data-date-language="th-th" type="text" class='form-control' name="start_tor" id="start_tor" value="<?php echo $data['start_tor']; ?>" disabled />
                                        </div>
                                        <div class="col-3">
                                            สิ้นสุด
                                            <input style="background-color:white;" data-provide="datepicker" data-date-language="th-th" type="text" class='form-control' name="finish_tor" id="finish_tor" value="<?php echo $data['finish_tor']; ?>" disabled />
                                        </div>
                                        <div class="col-3">
                                            ช่วงเวลาจัดซื้อจัดจ้าง เริ่มต้น
                                            <input style="background-color:white;" data-provide="datepicker" data-date-language="th-th" type="text" class='form-control' name="start_procurement" id="start_procurement" value="<?php echo $data['start_procurement']; ?>" disabled />
                                        </div>
                                        <div class="col-3">
                                            สิ้นสุด
                                            <input style="background-color:white;" data-provide="datepicker" data-date-language="th-th" type="text" class='form-control' name="finish_procurement" id="finish_procurement" value="<?php echo $data['finish_procurement']; ?>" disabled />
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
                        <div id="tab2">
                            <div class="row text-left">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="class_header_page_03">
                                                รายละเอียดงวดงานและงวดเงิน
                                            </div>
                                            <br />
                                            <div class="scrollmenu">
                                                <table class="table table-bordered" id="datatable1">
                                                    <tr class="bg_th">
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
                                                        foreach ($OverAllPlanYearWorkMoneyPeriod as $result_data_set1):
                                                        ?>
                                                            <tr>
                                                                <td align="left" valign="middle">
                                                                    <span class="detail">
                                                                        <?php echo $result_data_set1['WorkMoneyPeriodNumber']; ?>
                                                                    </span>
                                                                </td>
                                                                <td align="left" valign="middle">
                                                                    <span class="detail">
                                                                        <?php echo $result_data_set1['MoneyPeriod']; ?>
                                                                    </span>
                                                                </td>
                                                                <td align="left" valign="middle">
                                                                    <span class="detail">
                                                                        <?php echo $result_data_set1['Disbursement']; ?>
                                                                    </span>
                                                                </td>
                                                                <td align="left" valign="middle">
                                                                    <span class="detail">
                                                                        <?php echo $result_data_set1['TotalDisbursement']; ?>
                                                                    </span>
                                                                </td>
                                                                <td align="left" valign="middle">
                                                                    <span class="detail">
                                                                        <?php echo $result_data_set1['TimeDisbursement']; ?>
                                                                    </span>
                                                                </td>
                                                                <td align="left" valign="middle">
                                                                    <span class="detail">
                                                                        <?php echo $result_data_set1['DateWorkMoneyPeriod']; ?>
                                                                    </span>
                                                                </td>
                                                                <td align="left" valign="middle">
                                                                    <span class="detail">
                                                                        <?php echo $result_data_set1['ProgressWorkMoneyPeriod']; ?>
                                                                    </span>
                                                                </td>
                                                            </tr>
                                                        <?php
                                                        endforeach;
                                                        ?>
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
                                        <table class="table table-bordered" id="datatable2">
                                            <tr class="bg_th">
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
                                            foreach ($OverAllPlanYearDeliver as $result_data_set2):
                                            ?>
                                                <tr>
                                                    <td align="left" valign="middle">
                                                        <span class="detail">
                                                            <?php echo $result_data_set2['WorkingPeriodNumber']; ?>
                                                        </span>
                                                    </td>
                                                    <td align="left" valign="middle">
                                                        <span class="detail">
                                                            <?php echo $result_data_set2['DetailDeliver']; ?>
                                                        </span>
                                                    </td>
                                                    <td align="left" valign="middle">
                                                        <span class="detail">
                                                            <?php echo $result_data_set2['WeightValue']; ?>
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
                                        <table class="table table-bordered" id="datatable3">
                                            <tr class="bg_th">
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
                                            foreach ($OverAllPlanYearDocument as $result_data_set3):
                                            ?>
                                                <tr>
                                                    <td align="left" valign="middle">
                                                        <span class="detail">
                                                            <?php echo $result_data_set3['DetailDocument']; ?>
                                                        </span>
                                                    </td>
                                                    <td align="left" valign="middle">
                                                        <?php echo form_dropdown('TypeDocument[]', $dropdown_type_document, $result_data_set3["TypeDocument"], "class='form form-control' id='TypeDocument' disabled "); ?>
                                                    </td>
                                                    <td align="left" valign="middle">
                                                        <span class="detail">
                                                            <?php echo $result_data_set3['FileDocument']; ?>
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
                                        <div class="class_header_page_03">
                                            การติดตามกิจกรรมค่าเป้าหมาย (KPI) (ถ้ามี)
                                        </div>
                                        <br /><br />
                                        <div class="scrollmenu">
                                            <table class="table table-bordered" id="datatable4">
                                                <tr class="bg_th">
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
                                                foreach ($OverAllPlanYearTargetKPI as $result_data_set4):
                                                ?>
                                                    <tr>
                                                        <td align="left" valign="middle">
                                                            <span class="detail">
                                                                <?php echo $result_data_set4['ActivityTargetKPI']; ?>
                                                            </span>
                                                        </td>
                                                        <td align="left" valign="middle">
                                                            <span class="detail">
                                                                <?php echo $result_data_set4['QuantityTargetKPI']; ?>
                                                            </span>
                                                        </td>
                                                        <td align="left" valign="middle">
                                                            <?php echo form_dropdown('UnitTargetKPI[]', $dropdown_master_unit, $result_data_set4["UnitTargetKPI"], "class='form form-control' id='UnitTargetKPI' disabled "); ?>
                                                        </td>
                                                        <td align="left" valign="middle">
                                                            <span class="detail">
                                                                <?php echo $result_data_set4['DetailTargetKPI']; ?>
                                                            </span>
                                                        </td>
                                                        <td align="left" valign="middle">
                                                            <span class="detail">
                                                                <?php echo $result_data_set4['Month1TargetKPI']; ?>
                                                            </span>
                                                        </td>
                                                        <td align="left" valign="middle">
                                                            <span class="detail">
                                                                <?php echo $result_data_set4['Month2TargetKPI']; ?>
                                                            </span>
                                                        </td>
                                                        <td align="left" valign="middle">
                                                            <span class="detail">
                                                                <?php echo $result_data_set4['Month3TargetKPI']; ?>
                                                            </span>
                                                        </td>
                                                        <td align="left" valign="middle">
                                                            <span class="detail">
                                                                <?php echo $result_data_set4['Month4TargetKPI']; ?>
                                                            </span>
                                                        </td>
                                                        <td align="left" valign="middle">
                                                            <span class="detail">
                                                                <?php echo $result_data_set4['Month5TargetKPI']; ?>
                                                            </span>
                                                        </td>
                                                        <td align="left" valign="middle">
                                                            <span class="detail">
                                                                <?php echo $result_data_set4['Month6TargetKPI']; ?>
                                                            </span>
                                                        </td>
                                                        <td align="left" valign="middle">
                                                            <span class="detail">
                                                                <?php echo $result_data_set4['Month7TargetKPI']; ?>
                                                            </span>
                                                        </td>
                                                        <td align="left" valign="middle">
                                                            <span class="detail">
                                                                <?php echo $result_data_set4['Month8TargetKPI']; ?>
                                                            </span>
                                                        </td>
                                                        <td align="left" valign="middle">
                                                            <span class="detail">
                                                                <?php echo $result_data_set4['Month9TargetKPI']; ?>
                                                            </span>
                                                        </td>
                                                        <td align="left" valign="middle">
                                                            <span class="detail">
                                                                <?php echo $result_data_set4['Month10TargetKPI']; ?>
                                                            </span>
                                                        </td>
                                                        <td align="left" valign="middle">
                                                            <span class="detail">
                                                                <?php echo $result_data_set4['Month11TargetKPI']; ?>
                                                            </span>
                                                        </td>
                                                        <td align="left" valign="middle">
                                                            <span class="detail">
                                                                <?php echo $result_data_set4['Month12TargetKPI']; ?>
                                                            </span>
                                                        </td>
                                                        <td align="left" valign="middle">
                                                            <span class="detail">
                                                                <?php echo $result_data_set4['CalTargetKPI']; ?>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <br />
    </form>
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