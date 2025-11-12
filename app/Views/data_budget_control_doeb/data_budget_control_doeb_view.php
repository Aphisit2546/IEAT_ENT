<?= $this->extend('layouts/main_for_view') ?>

<?= $this->section("content"); ?>

<div class="class_header_page_02">
    <br />
    รายละเอียดคำของบประมาณ
    <hr />
</div>
<div class="row">
    <!--
        <div class="row text-left">
            <div class="col-md-12">
                <div class="form-group row">
                    <div class="col-3">
                        รหัสอ้างอิง
                        <input type="text" class='form-control' name="DraftBudgetControlCode" id="DraftBudgetControlCode" value="<?php echo $data_main['DraftBudgetControlCode']; ?>" readonly />
                    </div>
                    <div class="col-3">
                        วันที่ปรับปรุงข้อมูลล่าสุด
                        <input type="text" class='form-control' name="ModifyDate" id="ModifyDate" value="<?php echo $data_main['ModifyDate']; ?>" readonly />
                    </div>
                </div>
            </div>
        </div>
        -->
    <?php if (!empty($DraftBudgetControl_id)): ?>
        <div class="row text-left">
            <div class="col-md-12">
                <div class="form-group row">
                    <div class="col-3">
                        <h6>ขื่อแผน : <?php echo $data_main["PlanName"]; ?></h6>
                    </div>
                    <div class="col-3">
                        <h6>ประเภทแผน : <?php echo $data_main["PlanTypeName"]; ?></h6>
                    </div>
                    <!--
                        <div class="col-3">
                            <h6>ช่วงเวลาของแผน : จาก <?php echo $data_main["StartPlan"]; ?> ถึง <?php echo $data_main["FinishPlan"]; ?></h6>
                        </div>
                        -->
                    <div class="col-6">
                        <h4>กองงาน : <?php echo $data_main["GroupUserName"]; ?></h4>
                    </div>
                </div>
            </div>
        </div>
        <hr />
        <?php if ($data_main["GroupTypeID"] != '3'): ?>
            <div class="row text-left">
                <div class="col-md-12">
                    <div class="form-group row">
                        <div class="class_header_page_03">รายการโครงการ</div>
                        <br />
                        <table class="table table-bordered" id="datatable1">
                            <tr class="bg_th">
                                <th class="text-center" width="5%">
                                    <font color='white'>ที่</font>
                                </th>
                                <th class="text-center">
                                    <font color='white'>ชื่อกิจกรรม</font>
                                </th>
                                <th class="text-center" width='10%'>
                                    <font color='white'>หมวดบัญชีรายจ่ายหลัก</font>
                                </th>
                                <th class="text-center" width='10%'>
                                    <font color='white'>หมวดบัญชีรายจ่ายย่อย</font>
                                </th>
                                <th class="text-center" width='10%'>
                                    <font color='white'>หมวดรายละเอียดย่อย</font>
                                </th>
                                <th class="text-center" width='20%'>
                                    <font color='white'>รายละเอียดเพิ่มเติม</font>
                                </th>
                                <th class="text-center">
                                    <font color='white'>รายการงบ</font>
                                </th>
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
                            if (!empty($data2['CreatePlanDetail'])) {
                                $count_data_use = count($data2['CreatePlanDetail']);
                                $seq_show = 1;
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
                                        <?php echo $result_data_set0['ItemL1ProjectName']; ?>
                                    </td>
                                    <td align="left" valign="middle">
                                        <span class="detail">
                                            <?php echo $result_data_set0['ItemL2ProjectName']; ?>
                                        </span>
                                    </td>
                                    <td align="left" valign="middle">
                                        <span class="detail">
                                            <?php echo $result_data_set0['ItemL3ProjectName']; ?>
                                        </span>
                                    </td>
                                    <td align="center" valign="middle">
                                        <span class="detail">
                                            <?php echo $result_data_set0['DescriptionProject']; ?>
                                        </span>
                                    </td>
                                    <td align="center" valign="middle">
                                        <span class="detail">
                                            <?php echo $result_data_set0['TypeBudgetName']; ?>
                                        </span>
                                    </td>
                                    <td align="right" valign="middle">
                                        <span class="detail">
                                            <h5><?php echo number_format($result_data_set0['BudgetYearPlan'], 2); ?></h5>
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
                                        </span>
                                    </td>
                                </tr>
                            <?php
                                $overall_price_project_list[] = $result_data_set0['BudgetYearPlan'];
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

        <input type="hidden" name="DraftBudgetControl_id" id="DraftBudgetControl_id" value="<?php echo $data_main['DraftBudgetControl_id']; ?>" />
        <input type="hidden" name="OverAllPlan_id" id="OverAllPlan_id" value="<?php echo $data_main['OverAllPlan_id']; ?>" />
        <input type="hidden" name="ActiveStatus" id="ActiveStatus" value="Y" />
        <input type="hidden" name="Remarks" id="Remarks" value="<?php echo $data_main['Remarks']; ?>" />
        <?= csrf_field() ?>
        <div class="form-group row">
            <div class="class_header_page_03">กิจกรรมคำของบประมาณอื่นๆ</div>
            <br /><br />
            <table class="table table-bordered" id="datatable1">
                <?php
                if (!empty($DraftBudgetDetail)):
                    $count_data_use = count($DraftBudgetDetail);

                    $DraftBudgetControlDetail_id = "";
                    $seq = 1;
                    $seq_showhide = 1;
                    $overall_price_list = array();
                    foreach ($DraftBudgetDetail as $result_data_set1):
                        $DraftBudgetControlDetail_id = $result_data_set1['DraftBudgetControlDetail_id'];
                ?>
                        <tr class="bg_th">
                            <th class="text-center" width="5%">
                                <font color='white'>ที่</font>
                            </th>
                            <th class="text-center">
                                <font color='white'>ชื่อกิจกรรม</font>
                            </th>
                            <th class="text-center">
                                <font color='white'>หมวดบัญชีรายจ่ายหลัก</font>
                            </th>
                            <th class="text-center">
                                <font color='white'>หมวดบัญชีรายจ่ายย่อย</font>
                            </th>
                            <th class="text-center">
                                <font color='white'>หมวดรายละเอียดย่อย</font>
                            </th>
                            <th class="text-center">
                                <font color='white'>รายละเอียดเพิ่มเติม</font>
                            </th>
                            <th class="text-center">
                                <font color='white'>รายการงบ</font>
                            </th>
                            <th class="text-center">
                                <font color='white'>ค่าใช้จ่ายรวม(บาท)</font>
                            </th>
                        </tr>
                        <tr>
                            <td align="left" valign="middle"><?php echo $seq_show++; ?>.</td>
                            <td align="left" valign="middle">
                                <span class="detail">
                                    <input type="hidden" name="NameActivity[]" id="NameActivity[]" value="<?php echo $result_data_set1['NameActivity']; ?>" />
                                    <?php echo $result_data_set1['NameActivity']; ?>
                                </span>
                            </td>
                            <td align="left" valign="middle">
                                <span class="detail">
                                    <input type="hidden" name="DraftBudgetControlDetail_id[]" id="DraftBudgetControlDetail_id[]" value="<?php echo $DraftBudgetControlDetail_id; ?>" />
                                    <?php echo $result_data_set1['ItemL1Name']; ?>
                                </span>
                            </td>
                            <td align="left" valign="middle">
                                <span class="detail">
                                    <input type="hidden" name="ItemL2[]" id="ItemL2[]" value="<?php echo $result_data_set1['ItemL2']; ?>" />
                                    <?php echo $result_data_set1['ItemL2Name']; ?>
                                </span>
                            </td>
                            <td align="left" valign="middle">
                                <span class="detail">
                                    <input type="hidden" name="ItemL3[]" id="ItemL3[]" value="<?php echo $result_data_set1['ItemL3']; ?>" />
                                    <?php echo $result_data_set1['ItemL3Name']; ?>
                                </span>
                            </td>
                            <td align="left" valign="middle">
                                <span class="detail">
                                    <input type="hidden" name="Description[]" id="Description[]" value="<?php echo $result_data_set1['Description']; ?>" />
                                    <?php echo $result_data_set1['Description']; ?>
                                </span>
                            </td>
                            <td align="right" valign="middle">
                                <span class="detail">
                                    <input type="hidden" name="TypeBudget[]" id="TypeBudget[]" value="<?php echo $result_data_set1['TypeBudget']; ?>" />
                                    <?php echo $result_data_set1['TypeBudgetName']; ?>
                                </span>
                            </td>
                            <td align="right" valign="middle">
                                <span class="detail">
                                    <h5>
                                        <?php
                                        if (!empty($result_data_set1['SumBudgetRow'])) {
                                            echo number_format($result_data_set1['SumBudgetRow'], 2);
                                        } else {
                                            echo "-";
                                        }
                                        ?>
                                    </h5>
                                </span>
                                <hr />
                                <button class='btn btn-primary' onclick="toggleRow('row<?php echo $seq_showhide; ?>')">ซ่อน/แสดง<br />ค่าใช้จ่าย</button>
                            </td>
                        </tr>
                        <tr id="row<?php echo $seq_showhide; ?>" style="display:none;">
                            <td colspan="7" align="center">
                                <font style='font-size:18px'><b>รายการค่าใช้จ่าย</b></font>
                                <table class="table table-bordered" id="datatable1">
                                    <tr class="bg_th_sub">
                                        <th class="text-center" width="7%">
                                            <font color='white'>ลำดับ</font>
                                        </th>
                                        <th class="text-center">
                                            <font color='white'>รายการ</font>
                                        </th>
                                        <th class="text-center">
                                            <font color='white'>หน่วยนับ</font>
                                        </th>
                                        <th class="text-center">
                                            <font color='white'>จำนวนหน่วย</font>
                                        </th>
                                        <th class="text-center">
                                            <font color='white'>ราคา/หน่วย</font>
                                        </th>
                                        <th class="text-center">
                                            <font color='white'>จำนวนเงิน/ปี</font>
                                        </th>
                                    </tr>
                                    <?php
                                    $seq_sub = 1;
                                    foreach ($result_data_set1['query_data_sub'] as $result_data_set2):
                                    ?>
                                        <tr>
                                            <td align="left" valign="middle"><?php echo $seq_sub++; ?></td>
                                            <td align="left" valign="middle">
                                                <span class="detail">
                                                    <?php echo $result_data_set2['NameDetail']; ?>
                                                </span>
                                                <input type="hidden" name="DraftBudgetControlDetailSub_id[]" id="DraftBudgetControlDetailSub_id[]" value="<?php echo $result_data_set2['DraftBudgetControlDetailSub_id']; ?>" />
                                                <input type="hidden" name="NameDetail[]" id="NameDetail[]" value="<?php echo $result_data_set2['NameDetail']; ?>" />
                                            </td>
                                            <td align="left" valign="middle">
                                                <span class="detail">
                                                    <?php echo $result_data_set2['unitname']; ?>
                                                </span>
                                                <?php
                                                $overall_price_list[] = $result_data_set2['price_all'];
                                                ?>
                                                <input type="hidden" name="UnitManagement_id[]" id="UnitManagement_id[]" value="<?php echo $result_data_set2['UnitManagement_id']; ?>" />
                                                <input type="hidden" name="quantity[]" id="quantity[]" value="<?php echo $result_data_set2['quantity']; ?>" />
                                                <input type="hidden" name="price[]" id="price[]" value="<?php echo $result_data_set2['price']; ?>" />
                                                <input type="hidden" name="price_all[]" id="price_all[]" value="<?php echo $result_data_set2['price_all']; ?>" />
                                            </td>
                                            <td align="right" valign="middle"><?php echo number_format($result_data_set2['quantity']); ?></td>
                                            <td align="right" valign="middle"><?php echo number_format($result_data_set2['price'], 2); ?></td>
                                            <td align="right" valign="middle"><?php echo number_format($result_data_set2['price_all'], 2); ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </table>
                                <table width="100%" border="0">
                                    <tr>
                                        <td align="left" valign="middle">
                                            <?php if ($result_data_set1['CostReference'] == '1'): ?>
                                                <span class="detail">
                                                    ข้อมูลราคากลาง
                                                </span>
                                            <?php endif; ?>
                                            <?php if ($result_data_set1['CostReference'] == '2'): ?>
                                                <span class="detail">
                                                    ไฟล์ประกอบ : -
                                                </span>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    <?php
                        $seq_showhide++;
                    endforeach;
                else:
                    ?>
                    <td colspan='8' align="center" valign="middle">
                        <font color="red">-- ไม่มีรายการข้อมูล --</font>
                    </td>
                <?php
                endif;
                ?>
            </table>
            <table width="100%" border="0">
                <tr>
                    <td align="right" valign="middle">
                        <span class="detail">
                            <?php
                            if (!empty($overall_price_project_list) && !empty($overall_price_list)) {
                                $sum_total_budge_year = array_sum($overall_price_project_list) + array_sum($overall_price_list);
                            } elseif (!empty($overall_price_project_list)) {
                                $sum_total_budge_year = array_sum($overall_price_project_list);
                            } elseif (!empty($overall_price_list)) {
                                $sum_total_budge_year = array_sum($overall_price_list);
                            }
                            ?>
                            <input size='40' style="border-width: 0px; text-align: right; font-size:25px;" name="sum_overall_price" type="text" id="sum_overall_price" value="จำนวนเงินรวม : <?php if (!empty($sum_total_budge_year)): echo number_format($sum_total_budge_year, 2);
                                                                                                                                                                                                else: echo "-";
                                                                                                                                                                                                endif; ?> บาท" readonly />
                        </span>
                    </td>
                </tr>
            </table>
        </div>
    <?php endif; ?>
    </form>
</div>
<!--
<div class="class_header_page_02">
    <hr />
</div>
<div class="class_header_page_02">
    แผนปฏิบัติงานรายเดือนประกอบการยื่นคำของบประมาณ
</div>
<div class="row" id='row001'>
    <form id="frm" class="form-horizontal" action="<?php echo base_url(); ?>/<?= $routeGroup ?>/<?= $action_page ?>" method="post">
        <input type="hidden" name="MonthlyPlanActivity_Id" id="MonthlyPlanActivity_Id" value="<?php echo $data['MonthlyPlanActivity_Id']; ?>" readonly />
        <?= csrf_field() ?>
        <table class="table table-bordered table-hover">
            <thead>
                <tr class="bg_th">
                    <th rowspan="2" class="align-middle text-center" width='30%'>
                        <font color='white'>รายการปฏิบัติงาน</font>
                    </th>
                    <th colspan="12" class="align-middle text-center">
                        <font color='white'>จำนวน (ต่อเดือน)</font>
                    </th>
                    <th rowspan="2" class="align-middle text-center" width='10%'>
                        <font color='white'>หน่วยนับ</font>
                    </th>
                </tr>
                <tr class="bg_th">
                    <?php foreach ($monththaishow as $monththaishow_use): ?>
                        <th class="align-middle text-center" width='5%'>
                            <font color='white'><?php echo $monththaishow_use; ?></font>
                        </th>
                    <?php endforeach; ?>
                </tr>
            </thead>
            <tbody>
                <?php $seq_var = 0; ?>
                <?php $seq_var_id = 1; ?>
                <?php foreach ($lstData_mapping as $lstData_mapping_result): ?>
                    <tr class="child-row" data-target="row-<?php echo $seq_row; ?>">
                        <td class="align-top text-left"><?php echo $lstData_mapping_result['name']; ?></td>
                        <?php for ($seq_row = 1; $seq_row <= 12; $seq_row++): ?>
                            <td class="align-top text-center">
                                <?php echo $data_monthly_plan['month_' . $seq_row][$seq_var]['data_value']; ?>
                                <input type="hidden" name="<?php echo $seq_var_id; ?>_MonthlyPlanActivityDetail_Id" id="<?php echo $seq_var_id; ?>_MonthlyPlanActivityDetail_Id" value="<?php echo $data['month_' . $seq_row][$seq_var]['MonthlyPlanActivityDetail_Id']; ?>" readonly />
                            </td>
                            <?php $seq_var_id++; ?>
                        <?php endfor; ?>
                        <td class="align-top text-center">
                            <?php $seq_var++; ?>
                            <?php echo $lstData_mapping_result['unit_name']; ?>
                        </td>
                    </tr>
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
        <div class="row text-left">
            <div class="col-md-6">
                <div class="form-group row">
                    <div class="col-12">
                        <table class="table table-bordered" id="datatable1">
                            <tr class="bg_th_sub">
                                <th class="text-center">
                                    <font color='white'>การตรวจสอบข้อมูล</font>
                                </th>
                            </tr>
                            <tr>
                                <td align="left" valign="middle">
                                    <span class="detail">
                                        <input type='radio' name='ActiveStatusIns' value='Y' <?php if ($data['ActiveStatusIns'] == 'Y'): echo "checked";
                                                                                                endif; ?> disabled> อนุมัติ
                                        <input type='radio' name='ActiveStatusIns' value='N' <?php if ($data['ActiveStatusIns'] == 'N'): echo "checked";
                                                                                                endif; ?> disabled> ไม่อนุมัติ
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td align="left" valign="middle">
                                    <span class="detail">
                                        ความคิดเห็นเพิ่มเติม
                                        <br />
                                        - <?php echo $data['RemarksIns']; ?>
                                    </span>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <div class="col-12">
                        <table class="table table-bordered" id="datatable1">
                            <tr class="bg_th_sub">
                                <th class="text-center">
                                    <font color='white'>การพิจารณาข้อมูล</font>
                                </th>
                            </tr>
                            <tr>
                                <td align="left" valign="middle">
                                    <span class="detail">
                                        <input type='radio' name='ActiveStatusApprove' value='Y' <?php if ($data['ActiveStatusIns'] == 'Y'): echo "checked";
                                                                                                    endif; ?> disabled> อนุมัติ
                                        <input type='radio' name='ActiveStatusApprove' value='N' <?php if ($data['ActiveStatusIns'] == 'N'): echo "checked";
                                                                                                    endif; ?> disabled> ไม่อนุมัติ
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td align="left" valign="middle">
                                    <span class="detail">
                                        ความคิดเห็นเพิ่มเติม
                                        <br />
                                        - <?php echo $data['RemarksApprove']; ?>
                                    </span>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</div>
-->
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