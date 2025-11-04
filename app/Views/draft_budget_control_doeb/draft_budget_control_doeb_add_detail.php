<?= $this->extend('layouts/main_for_iframe') ?>

<?= $this->section("content"); ?>
<form id="frm" class="form-horizontal" action="<?php echo base_url(); ?>/<?= $routeGroup ?>/storesub" method="post">
    <input type="hidden" name="DraftBudgetControl_id" id="DraftBudgetControl_id" value="<?php echo $DraftBudgetControl_id; ?>" readonly />

    <?php if ($GroupTypeID != '3'): ?>
        <div class="row text-left">
            <div class="col-md-12">
                <div class="form-group row">
                    <div class="class_header_page_03">รายการโครงการ</div>
                    <br />
                    <table class="table table-bordered" id="datatable1">
                        <tr class="bg_th_table">
                            <th class="text-center" width="7%">
                                <font color='white'>ที่</font>
                            </th>
                            <th class="text-center">
                                <font color='white'>ชื่อกิจกรรม</font>
                            </th>
                            <th class="text-center" width='10%'>
                                <font color='white'>ประเภทงบประมาณ</font>
                            </th>
                            <th class="text-center" width='10%'>
                                <font color='white'>หมวดหลัก/ย่อย</font>
                            </th>
                            <th class="text-center" width='10%'>
                                <font color='white'>รายการ</font>
                            </th>
                            <th class="text-center" width='20%'>
                                <font color='white'>รายละเอียดเพิ่มเติม</font>
                            </th>
                            <!--
                            <th class="text-center">
                                <font color='white'>รายการงบ</font>
                            </th>
                            -->
                            <th class="text-center">
                                <font color='white'>มูลค่าโครงการ(บาท)</font>
                            </th>
                            <!--
                        <th class="text-center">
                            <font color='white'>ปีที่คาดว่าดำเนินงาน</font>
                        </th>
                        -->

                            <th class="text-center">
                                <font color='white'>เลือก</font>
                            </th>
                        </tr>
                        <?php
                        $seq_show = 1;
                        if (!empty($data2['CreatePlanDetail'])) {
                            $count_data_use = count($data2['CreatePlanDetail']);

                            $seq_count_project = 0;
                            $CreatePlanDetail_id = "";
                        }
                        foreach ($data2["CreatePlanDetail"] as $result_data_set0):
                            $CreatePlanDetail_id = $result_data_set0['CreatePlanDetail_id'];
                            $seq_count_project++;
                        ?>
                            <tr>
                                <td align="left" valign="middle"><?php echo $seq_show++; ?></td>
                                <td align="left" valign="middle">
                                    <span class="detail">
                                        <?php echo $result_data_set0['ProjectNameTH']; ?>
                                    </span>
                                </td>
                                <td align="left" valign="middle">
                                    <input type="hidden" name="CreatePlanDetail_id[]" id="CreatePlanDetail_id[]" value="<?php echo $result_data_set0['CreatePlanDetail_id']; ?>" />
                                    <span class="detail">
                                        <?php echo form_dropdown('ItemL1Project_' . $result_data_set0['CreatePlanDetail_id'], $dropdown_StructureBudgetMain, $result_data_set0['ItemL1Project'], " class='form-select form-select-sm' id='ItemL1Project_1' onchange='GetStructureBudgetDropdownLv2DoebProject$CreatePlanDetail_id();' "); ?>
                                    </span>
                                </td>
                                <td align="left" valign="middle">
                                    <span class="detail">
                                        <?php if ($result_data_set0['ItemL1Project'] != '0' && $result_data_set0['ItemL1Project'] != ''): ?>
                                            <?php $namelv2 = "dropdown_StructureBudgetMainLv2Project" . $result_data_set0['CreatePlanDetail_id']; ?>
                                            <?php echo form_dropdown('ItemL2Project_' . $result_data_set0['CreatePlanDetail_id'], $$namelv2, $result_data_set0['ItemL2Project'], " class='form-select form-select-sm' id='ItemL2Project_1' onchange='GetStructureBudgetDropdownLv3DoebProject$CreatePlanDetail_id();' "); ?>
                                        <?php else: ?>
                                            <?php echo form_dropdown('ItemL2Project_' . $result_data_set0['CreatePlanDetail_id'], $dropdown_StructureBudgetMainLv2, '', " class='form-select form-select-sm' id='ItemL2Project_1' onchange='GetStructureBudgetDropdownLv3DoebProject$CreatePlanDetail_id();' "); ?>
                                        <?php endif; ?>
                                    </span>
                                </td>
                                <td align="left" valign="middle">
                                    <span class="detail">
                                        <?php if ($result_data_set0['ItemL1Project'] != '0' && $result_data_set0['ItemL1Project'] != '' && $result_data_set0['ItemL2Project'] != '0' && $result_data_set0['ItemL2Project'] != ''): ?>
                                            <?php $namelv3 = "dropdown_StructureBudgetMainLv3Project" . $result_data_set0['CreatePlanDetail_id']; ?>
                                            <?php echo form_dropdown('ItemL3Project_' . $result_data_set0['CreatePlanDetail_id'], $$namelv3, $result_data_set0['ItemL3Project'], "id='ItemL3Project_1' class='form-select form-select-sm' "); ?>
                                        <?php else: ?>
                                            <?php echo form_dropdown('ItemL3Project_' . $result_data_set0['CreatePlanDetail_id'], $dropdown_StructureBudgetMainLv3, '', "id='ItemL3Project_1' class='form-select form-select-sm' "); ?>
                                        <?php endif; ?>
                                    </span>
                                </td>
                                <td align="center" valign="middle">
                                    <span class="detail">
                                        <input name="DescriptionProject_<?php echo $result_data_set0['CreatePlanDetail_id']; ?>" type="text" id="DescriptionProject_<?php echo $result_data_set0['CreatePlanDetail_id']; ?>" value="<?php echo $result_data_set0['DescriptionProject']; ?>" />
                                    </span>
                                </td>
                                <!--
                                <td align="center" valign="middle">
                                    <span class="detail">
                                        <?php echo $result_data_set0['TypeBudgetName']; ?>
                                    </span>
                                </td>
                                -->
                                <td align="right" valign="middle">
                                    <span class="detail">
                                        <?php echo number_format($result_data_set0['BudgetYearPlan'], 2); ?>
                                    </span>
                                </td>
                                <!--
                            <td align="center" valign="middle">
                                <span class="detail">
                                    <?php echo $result_data_set0['AnnualTargetValue_Year']; ?>
                                </span>
                            </td>
                            -->
                                <td align="center" valign="middle">
                                    <span class="detail">
                                        <a id="btnView" class="btn btn-primary" onclick="window.open('../../check_detail_plan_doeb/view/<?= $result_data_set0["AllPlanId"] ?>.<?= $result_data_set0["TypeAllPlan"] ?>', '_blank', 'width=1400,height=550,scrollbars=1');">ดูรายละเอียด</a>
                                        <input type="hidden" name="CreatePlanDetailHide_<?php echo $seq_count_project; ?>" value="<?= $result_data_set0["CreatePlanDetail_id"] ?>" />
                                        <input type="submit" name="FlagHideForProject_<?php echo $seq_count_project; ?>" class="btn btn-danger" value="ชลอโครงการ" />
                                    </span>
                                </td>
                            </tr>
                        <?php
                        endforeach;
                        ?>
                    </table>
                    <input type="hidden" name="count_record_project" value="<?php echo $seq_count_project; ?>" />
                </div>
            </div>
        </div>
    <?php else: ?>
        <?php $seq_show = 1; ?>
    <?php endif; ?>

    <div class="form-group row">
        <div class="class_header_page_03">กิจกรรมคำของบประมาณอื่นๆ</div>
        <br /><br />
        <table>
            <tr>
                <td align="left" valign="middle">
                    <span class="detail">
                        <input type="submit" name="add_data" class="btn btn-success" value="เพิ่มรายการ" />
                        <input type="submit" name="del_data" class="btn btn-danger" value="ลบรายการ" />
                    </span>
                </td>
            </tr>
        </table>
        <br />
        <table class="table table-bordered" id="datatable1">
            <tr class="bg_th_table">
                <th class="text-center">
                    <font color='white'>เลือก</font>
                </th>
                <th class="text-center">
                    <font color='white'>ลำดับ</font>
                </th>
                <th class="text-center">
                    <font color='white'>ชื่อกิจกรรม</font>
                </th>
                <th class="text-center" width='10%'>
                    <font color='white'>ประเภทงบประมาณ</font>
                </th>
                <th class="text-center" width='10%'>
                    <font color='white'>หมวดหลัก/ย่อย</font>
                </th>
                <th class="text-center" width='10%'>
                    <font color='white'>รายการ</font>
                </th>
                <th class="text-center" width='20%'>
                    <font color='white'>รายละเอียดเพิ่มเติม</font>
                </th>
                <!--
                <th class="text-center" width='10%'>
                    <font color='white'>รายการงบ</font>
                </th>
                -->
                <th class="text-center" width='10%'>
                    <font color='white'>เอกสารอ้างอิง</font>
                </th>
                <th class="text-center">
                    <font color='white'>จำนวนเงิน(บาท)</font>
                </th>
                <th class="text-center">
                    <font color='white'>รายละเอียดค่าใช้จ่าย</font>
                </th>
                <th class="text-center">
                    <font color='white'>แผนรายเดือน</font>
                </th>
            </tr>
            <?php
            if (!empty($DraftBudgetDetail)):
                $count_data_use = count($DraftBudgetDetail);
                $seq_count_other = 1;
                $DraftBudgetControlDetail_id = "";
                foreach ($DraftBudgetDetail as $result_data_set1):
                    $DraftBudgetControlDetail_id = $result_data_set1['DraftBudgetControlDetail_id'];
                    $seq_count_other++;
            ?>
                    <tr>
                        <td align="center" valign="middle"><input type="checkbox" name="DraftBudgetControlDetail_id_del[]" id="DraftBudgetControlDetail_id_del[]" value="<?php echo $DraftBudgetControlDetail_id; ?>" /></td>
                        <td align="left" valign="middle"><?php echo $seq_show++; ?>.</td>
                        <td align="center" valign="middle">
                            <span class="detail">
                                <input name="NameActivity_<?php echo $result_data_set1['DraftBudgetControlDetail_id']; ?>" type="text" id="NameActivity_<?php echo $result_data_set1['DraftBudgetControlDetail_id']; ?>" value="<?php echo $result_data_set1['NameActivity']; ?>" />
                            </span>
                        </td>
                        <td align="left" valign="middle">
                            <input type="hidden" name="DraftBudgetControlDetail_id[]" id="DraftBudgetControlDetail_id[]" value="<?php echo $DraftBudgetControlDetail_id; ?>" />
                            <span class="detail">
                                <?php echo form_dropdown('ItemL1_' . $result_data_set1['DraftBudgetControlDetail_id'], $dropdown_StructureBudgetMain, $result_data_set1['ItemL1'], " class='form-select form-select-sm' id='ItemL1_1' onchange='GetStructureBudgetDropdownLv2Doeb$DraftBudgetControlDetail_id();' "); ?>
                            </span>
                        </td>
                        <td align="left" valign="middle">
                            <span class="detail">
                                <?php if ($result_data_set1['ItemL1'] != '0' && $result_data_set1['ItemL1'] != ''): ?>
                                    <?php $namelv2 = "dropdown_StructureBudgetMainLv2" . $result_data_set1['DraftBudgetControlDetail_id']; ?>
                                    <?php echo form_dropdown('ItemL2_' . $result_data_set1['DraftBudgetControlDetail_id'], $$namelv2, $result_data_set1['ItemL2'], " class='form-select form-select-sm' id='ItemL2_1' onchange='GetStructureBudgetDropdownLv3Doeb$DraftBudgetControlDetail_id();' "); ?>
                                <?php else: ?>
                                    <?php echo form_dropdown('ItemL2_' . $result_data_set1['DraftBudgetControlDetail_id'], $dropdown_StructureBudgetMainLv2, '', " class='form-select form-select-sm' id='ItemL2_1' onchange='GetStructureBudgetDropdownLv3Doeb$DraftBudgetControlDetail_id();' "); ?>
                                <?php endif; ?>
                            </span>
                        </td>
                        <td align="left" valign="middle">
                            <span class="detail">
                                <?php if ($result_data_set1['ItemL1'] != '0' && $result_data_set1['ItemL1'] != '' && $result_data_set1['ItemL2'] != '0' && $result_data_set1['ItemL2'] != ''): ?>
                                    <?php $namelv3 = "dropdown_StructureBudgetMainLv3" . $result_data_set1['DraftBudgetControlDetail_id']; ?>
                                    <?php echo form_dropdown('ItemL3_' . $result_data_set1['DraftBudgetControlDetail_id'], $$namelv3, $result_data_set1['ItemL3'], " class='form-select form-select-sm' id='ItemL3_1' "); ?>
                                <?php else: ?>
                                    <?php echo form_dropdown('ItemL3_' . $result_data_set1['DraftBudgetControlDetail_id'], $dropdown_StructureBudgetMainLv3, '', " class='form-select form-select-sm' id='ItemL3_1' "); ?>
                                <?php endif; ?>
                            </span>
                        </td>
                        <td align="center" valign="middle">
                            <span class="detail">
                                <input name="Description_<?php echo $result_data_set1['DraftBudgetControlDetail_id']; ?>" type="text" id="Description_<?php echo $result_data_set1['DraftBudgetControlDetail_id']; ?>" value="<?php echo $result_data_set1['Description']; ?>" />
                            </span>
                        </td>
                        <!--
                        <td align="center" valign="middle">
                            งบค่าใช้จ่าย<br />อื่นๆ
                            <span class="detail">
                                <?php echo form_dropdown('TypeBudget_' . $result_data_set1['DraftBudgetControlDetail_id'], $dropdown_type_budget, $result_data_set1['TypeBudget'], " "); ?>
                            </span>
                            
                        </td>
                        -->
                        <td align="center" valign="middle">
                            <span class="detail">
                                <?php echo form_dropdown('CostReference_' . $result_data_set1['DraftBudgetControlDetail_id'], $dropdown_CostReference, $result_data_set1['CostReference'], " class='form-select form-select-sm' "); ?>
                            </span>
                        </td>
                        <td align="right" valign="middle">
                            <span class="detail">
                                <?php
                                if (!empty($result_data_set1['SumBudgetRow'])) {
                                    echo number_format($result_data_set1['SumBudgetRow'], 2);
                                } else {
                                    echo "-";
                                }
                                ?>
                            </span>
                        </td>
                        <td align="center" valign="middle">
                            <input type="hidden" name="TypeBudget_<?php echo $result_data_set1['DraftBudgetControlDetail_id']; ?>" value="3" />
                            <input type="hidden" name="IDALL_<?php echo $seq_count_other; ?>" value="<?= $DraftBudgetControl_id; ?>.<?= $result_data_set1["DraftBudgetControlDetail_id"] ?>.<?= $result_data_set1["CostReference"] ?>" />
                            <input type="submit" name="AddDataDetail_<?php echo $seq_count_other; ?>" class="btn btn-primary" value="เลือก" />
                        </td>
                        <td align="center" valign="middle">
                            <input type="submit" name="AddDataDetail2_<?php echo $seq_count_other; ?>" class="btn btn-primary" value="เลือก" />
                        </td>
                    </tr>
                <?php
                endforeach;
            else:
                ?>
                <td colspan='13' align="center" valign="middle">
                    <font color="red">-- ไม่มีรายการข้อมูล --</font>
                </td>
            <?php
            endif;
            ?>
        </table>
        <input type="hidden" name="count_record" value="<?php echo $seq_count_other; ?>" />
    </div>
    <div class="row text-left">
        <div class="col-md-12">
            <div class="form-group row">
                <div class="col-12">
                    หมายเหตุ
                    <textarea name='remarks' rows='5' class='form-control'><?php echo $data['remarks']; ?></textarea>
                </div>
            </div>
        </div>
    </div>
    <br />
    <div class="row text-left">
        <div class="col-sm-12 text-left">
            <input name="btnSave" id="btnSave" type="submit" class="btn btn-success" value="บันทึกข้อมูล">
            <input name="btnConfirm" id="btnConfirm" type="submit" class="btn btn-info" value="ยืนยันข้อมูล">
            <button type="reset" class="btn btn-secondary" value="reset" onclick="parent.window.location = '../../draft_budget_control_doeb'"><i class="fas fa-reply"></i> กลับสู่หน้าหลัก</button>
        </div>
    </div>
    <br />
</form>

<?= $this->endSection(); ?>

<?= $this->section("javascripts"); ?>
<script>
    function sendHeightToParent() {
        // ต้องรอให้ DOM render สมบูรณ์
        setTimeout(() => {
            const bodyHeight = document.documentElement.scrollHeight;
            // ส่งความสูงของ body กลับไปยัง parent
            // 'https://your-parent-domain.com' คือโดเมนของ parent frame
            window.parent.postMessage({
                type: 'iframeHeight',
                height: bodyHeight
            }, '<?php echo base_url('draft_budget_control_doeb/edtsub/' . $DraftBudgetControl_id . ''); ?>');
        }, 0);
    }

    // ส่งความสูงเมื่อ iframe โหลดเสร็จ
    window.addEventListener('load', sendHeightToParent);

    // ฟังข้อความจาก parent (ถ้า parent ส่งมาขอความสูง)
    window.addEventListener('message', function(event) {
        // ตรวจสอบ origin ของผู้ส่งข้อความเพื่อความปลอดภัย
        // เปลี่ยน 'https://your-parent-domain.com' เป็นโดเมนจริงของ parent
        if (event.origin !== '<?php echo base_url('draft_budget_control_doeb/edtsub/' . $DraftBudgetControl_id . ''); ?>') {
            return;
        }

        if (event.data.type === 'getHeight') {
            sendHeightToParent();
        }
    });

    <?php foreach ($data2["CreatePlanDetail"] as $result_data_set00): ?>

        function GetStructureBudgetDropdownLv2DoebProject<?php echo $result_data_set00['CreatePlanDetail_id']; ?>() {
            var BudgetStructureDetail_id = $("[name=ItemL1Project_<?php echo $result_data_set00['CreatePlanDetail_id']; ?>]  option:selected").val();
            var objDDL = $("[name=ItemL2Project_<?php echo $result_data_set00['CreatePlanDetail_id']; ?>]");
            objDDL.empty();
            objDDL.append("<option value='' >-- เลือก --</option>");

            var objDDL2 = $("[name=ItemL3Project_<?php echo $result_data_set00['CreatePlanDetail_id']; ?>]");
            objDDL2.empty();
            objDDL2.append("<option value='' >-- เลือก --</option>");

            if (BudgetStructureDetail_id == "") return;

            var jqxhr = $.get("<?php echo base_url(); ?>Ajax/StructureBudgetDropdownLv2Doeb/" + BudgetStructureDetail_id)

                .done(function(response, jqxhr) {
                    if (!(response == null || response == false)) {
                        var objData = response;
                        objData.forEach(function(item, index) {
                            //alert(item.BudgetStructureDetail_id);
                            objDDL.append("<option value='" + item.BudgetStructureDetail_id + "' >" + item.BudgetStructureDetail_Number + " " + item.BudgetStructureDetail_Name + "</option>");
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

        function GetStructureBudgetDropdownLv3DoebProject<?php echo $result_data_set00['CreatePlanDetail_id']; ?>() {
            var BudgetStructureDetail_id = $("[name=ItemL1Project_<?php echo $result_data_set00['CreatePlanDetail_id']; ?>]  option:selected").val();
            var BudgetStructureDetail_id2 = $("[name=ItemL2Project_<?php echo $result_data_set00['CreatePlanDetail_id']; ?>]  option:selected").val();

            var objDDL = $("[name=ItemL3Project_<?php echo $result_data_set00['CreatePlanDetail_id']; ?>]");
            objDDL.empty();
            objDDL.append("<option value='' >-- เลือก --</option>");

            if (BudgetStructureDetail_id == "") return;

            var jqxhr = $.get("<?php echo base_url(); ?>Ajax/StructureBudgetDropdownLv3Doeb/" + BudgetStructureDetail_id + "N" + BudgetStructureDetail_id2)

                .done(function(response, jqxhr) {
                    if (!(response == null || response == false)) {
                        var objData = response;
                        objData.forEach(function(item, index) {
                            //alert(item.BudgetStructureDetail_id);
                            objDDL.append("<option value='" + item.BudgetStructureDetail_id + "' >" + item.BudgetStructureDetail_Number + " " + item.BudgetStructureDetail_Name + "</option>");
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
    <?php endforeach; ?>

    <?php foreach ($DraftBudgetDetail as $result_data_set2): ?>

        function GetStructureBudgetDropdownLv2Doeb<?php echo $result_data_set2['DraftBudgetControlDetail_id']; ?>() {
            var BudgetStructureDetail_id = $("[name=ItemL1_<?php echo $result_data_set2['DraftBudgetControlDetail_id']; ?>]  option:selected").val();
            var objDDL = $("[name=ItemL2_<?php echo $result_data_set2['DraftBudgetControlDetail_id']; ?>]");
            objDDL.empty();
            objDDL.append("<option value='' >-- เลือก --</option>");

            var objDDL2 = $("[name=ItemL3_<?php echo $result_data_set2['DraftBudgetControlDetail_id']; ?>]");
            objDDL2.empty();
            objDDL2.append("<option value='' >-- เลือก --</option>");

            if (BudgetStructureDetail_id == "") return;

            var jqxhr = $.get("<?php echo base_url(); ?>Ajax/StructureBudgetDropdownLv2Doeb/" + BudgetStructureDetail_id)

                .done(function(response, jqxhr) {
                    if (!(response == null || response == false)) {
                        var objData = response;
                        objData.forEach(function(item, index) {
                            //alert(item.BudgetStructureDetail_id);
                            objDDL.append("<option value='" + item.BudgetStructureDetail_id + "' >" + item.BudgetStructureDetail_Number + " " + item.BudgetStructureDetail_Name + "</option>");
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

        function GetStructureBudgetDropdownLv3Doeb<?php echo $result_data_set2['DraftBudgetControlDetail_id']; ?>() {
            var BudgetStructureDetail_id = $("[name=ItemL1_<?php echo $result_data_set2['DraftBudgetControlDetail_id']; ?>]  option:selected").val();
            var BudgetStructureDetail_id2 = $("[name=ItemL2_<?php echo $result_data_set2['DraftBudgetControlDetail_id']; ?>]  option:selected").val();

            var objDDL = $("[name=ItemL3_<?php echo $result_data_set2['DraftBudgetControlDetail_id']; ?>]");
            objDDL.empty();
            objDDL.append("<option value='' >-- เลือก --</option>");

            if (BudgetStructureDetail_id == "") return;

            var jqxhr = $.get("<?php echo base_url(); ?>Ajax/StructureBudgetDropdownLv3Doeb/" + BudgetStructureDetail_id + "N" + BudgetStructureDetail_id2)

                .done(function(response, jqxhr) {
                    if (!(response == null || response == false)) {
                        var objData = response;
                        objData.forEach(function(item, index) {
                            //alert(item.BudgetStructureDetail_id);
                            objDDL.append("<option value='" + item.BudgetStructureDetail_id + "' >" + item.BudgetStructureDetail_Number + " " + item.BudgetStructureDetail_Name + "</option>");
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
    <?php endforeach; ?>

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