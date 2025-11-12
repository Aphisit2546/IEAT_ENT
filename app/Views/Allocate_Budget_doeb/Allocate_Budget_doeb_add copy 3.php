<?= $this->extend('layouts/main') ?>

<?= $this->section("content"); ?>

<div class="class_header_page_02">
    <br />
    จัดสรรงบประมาณ
    <hr />
</div>
<form id="frm" class="form-horizontal" action="<?php echo base_url(); ?>/<?= $routeGroup ?>/<?= $action_page ?>" method="post">
    <?= csrf_field() ?>
    <input type="hidden" name='OverAllBudget_id' id="OverAllBudget_id" value="<?php echo $OverAllBudget_id; ?>">
    <div class="row">

        <!--
        <div class="row text-left">
            <div class="col-md-12">
                <div class="form-group row">
                    <div class="col-3">
                        รหัสอ้างอิง
                        <input type="text" class='form-control' name="CreateBudgetControlCode" id="CreateBudgetControlCode" value="<?php echo $data['CreateBudgetControlCode']; ?>" readonly />
                    </div>
                    <div class="col-3">
                        วันที่ปรับปรุงข้อมูลล่าสุด
                        <input type="text" class='form-control' name="ModifyDate" id="ModifyDate" value="<?php echo $data['ModifyDate']; ?>" readonly />
                    </div>
                    
                    <div class="col-3">
                        ครั้งที่
                        <input type="text" class='form-control' name="CountCreateBudgetControl" id="CountCreateBudgetControl" value="<?php echo $data['CountCreateBudgetControl']; ?>" readonly />
                    </div>
                </div>
            </div>
            -->
    </div>
    <?php //if (!empty($data['CreateBudgetControl_id'])): 
    ?>
    <!--
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
    -->
    <hr />
    <div class="form-group row">
        <table class="table table-bordered" id="datatable1">
            <tr class="bg_th">
                <th class="text-center">
                    <font color='white'>ลำดับ</font>
                </th>
                <th class="text-center" width='25%'>
                    <font color='white'>ชื่อกิจกรรม</font>
                </th>
                <th class="text-center">
                    <font color='white'>หน่วยงานรับผิดชอบ</font>
                </th>
                <th class="text-center">
                    <font color='white'>ระยะเวลา</font>
                </th>
                <th class="text-center">
                    <font color='white'>งบประมาณที่ขอ (บาท)</font>
                </th>

                <th class="text-center">
                    <font color='white'>งบประมาณที่ได้รับตาม พรบ. (บาท)</font>
                </th>
                <th class="text-center">
                    <font color='white'>งบประมาณที่ได้รับการจัดสรร (บาท)</font>
                </th>
                <th class="text-center">
                    <font color='white'>งบประมาณที่ได้รับการจัดสรร-งบประมาณที่ขอ (บาท)</font>
                </th>

                <th class="text-center">
                    <font color='white'>ร้อยล่ะผลต่างของงบประมาณที่ได้รับการจัดสรร เทียบกับงบประมาณที่ขอ</font>
                </th>
                <th class="text-center">
                    <font color='white'>ดูรายละเอียด</font>
                </th>
            </tr>
            <tr>
                <td colspan='10' align="left" valign="middle">
                    <div class="class_header_page_03">โครงการงบลงทุน</div>
                </td>
            </tr>
            <?php
            if (!empty($data_main['return_data_01'])):
                $count_data_use = count($data_main['return_data_01']);
                $seq_01 = 1;
                foreach ($data_main['return_data_01'] as $result_data_set1):
            ?>
                    <tr>
                        <td align="left" valign="middle"><?php echo $seq_01; ?>.</td>
                        <td align="left" valign="middle">
                            <span class="detail">
                                <?php echo $result_data_set1['NameActivity']; ?>
                            </span>
                        </td>
                        <td align="left" valign="middle">
                            <span class="detail">
                                <?php echo $result_data_set1['GroupUserName']; ?>
                            </span>
                        </td>
                        <td align="left" valign="middle">
                            <span class="detail">
                                12 เดือน
                            </span>
                        </td>
                        <td align="right" valign="middle">
                            <span class="detail">
                                <?php echo number_format($result_data_set1['sum_budget'], 2); ?>
                            </span>
                            <input type="hidden" name='count_data_01[]' id="count_data_01[]" value="<?php echo $seq_01; ?>">
                            <input type="hidden" name='sum_budget_Type1_<?php echo $seq_01; ?>' id="sum_budget" value="<?php echo $result_data_set1['sum_budget']; ?>">
                            <input type="hidden" name='CreatePlanDetail_id_Type1_<?php echo $seq_01; ?>' id="CreatePlanDetail_id" value="<?php echo $result_data_set1['CreatePlanDetail_id']; ?>">
                        </td>

                        <td align="center" valign="middle"><input size='13' name="Budget01_Type1_<?php echo $seq_01; ?>" type="text" id="Budget01" value="<?php if ($result_data_set1['Budget01'] != '' && $result_data_set1['Budget01'] != null) {
                                                                                                                                                                echo number_format($result_data_set1['Budget01'], 2);
                                                                                                                                                            } ?>" onkeyup="dokeyupMoney(this);" onchange="dokeyupMoney(this);" onkeypress="checknumberMoney()" /></td>
                        <td align="center" valign="middle"><input size='13' name="Budget02_Type1_<?php echo $seq_01; ?>" type="text" id="Budget02" value="<?php if ($result_data_set1['Budget02'] != '' && $result_data_set1['Budget02'] != null) {
                                                                                                                                                                echo number_format($result_data_set1['Budget02'], 2);
                                                                                                                                                            } ?>" onkeyup="dokeyupMoney(this);" onchange="dokeyupMoney(this);" onkeypress="checknumberMoney()" oninput="updateColumn3(this)" /></td>
                        <td align="center" valign="middle"><input size='10' style="border-width: 0px; text-align: right; font-size:16px;" name="BudgetNegative_Type1_<?php echo $seq_01; ?>" type="text" id="BudgetNegative" onchange="dokeyupMoney(this);" value="<?php echo number_format($result_data_set1['BudgetNegative'], 2); ?>"></td>
                        <td align="center" valign="middle"><input size='10' style="border-width: 0px; text-align: right; font-size:16px;" name="BudgetPercentage_Type1_<?php echo $seq_01; ?>" type="text" id="BudgetPercentage" value="<?php echo $result_data_set1['BudgetPercentage']; ?>"></td>

                        <td align="center" valign="middle">
                            <span class="detail">
                                <a id="btnView" class="btn btn-primary" onclick="window.open('../../check_detail_plan_doeb/view/<?= $result_data_set1["AllPlanId"] ?>.<?= $result_data_set1["TypeAllPlan"] ?>', '_blank', 'width=1400,height=550,scrollbars=1');">เลือก</a>
                            </span>
                        </td>

                    </tr>
                    <?php $sum_budget[] = $result_data_set1['sum_budget']; ?>
                    <?php $sum_budget_01[] = $result_data_set1['sum_budget']; ?>
                <?php
                    $seq_01++;
                endforeach;
                ?>
            <?php
            else:
            ?>
                <td colspan='10' align="center" valign="middle">
                    <font color="red">-- ไม่มีรายการข้อมูล --</font>
                </td>
            <?php
            endif;
            ?>
            <tr>
                <td colspan='10' align="left" valign="middle">
                    <div class="class_header_page_03">โครงการงบดำเนินการ</div>
                </td>
            </tr>
            <?php
            if (!empty($data_main['return_data_02'])):
                $seq_02 = 1;
                foreach ($data_main['return_data_02'] as $result_data_set2):
            ?>
                    <tr>
                        <td align="left" valign="middle"><?php echo $seq_02; ?>.</td>
                        <td align="left" valign="middle">
                            <span class="detail">
                                <?php echo $result_data_set2['NameActivity']; ?>
                            </span>
                        </td>
                        <td align="left" valign="middle">
                            <span class="detail">
                                <?php echo $result_data_set2['GroupUserName']; ?>
                            </span>
                        </td>
                        <td align="left" valign="middle">
                            <span class="detail">
                                12 เดือน
                            </span>
                        </td>
                        <td align="right" valign="middle">
                            <span class="detail">
                                <?php echo number_format($result_data_set2['sum_budget'], 2); ?>
                            </span>
                            <input type="hidden" name='count_data_02[]' id="count_data_02[]" value="<?php echo $seq_02; ?>">
                            <input type="hidden" name='sum_budget_Type2_<?php echo $seq_02; ?>' id="sum_budget" value="<?php echo $result_data_set2['sum_budget']; ?>">
                            <input type="hidden" name='CreatePlanDetail_id_Type2_<?php echo $seq_02; ?>' id="CreatePlanDetail_id" value="<?php echo $result_data_set2['CreatePlanDetail_id']; ?>">
                        </td>

                        <td align="center" valign="middle"><input size='13' name="Budget01_Type2_<?php echo $seq_02; ?>" type="text" id="Budget01" value="<?php if ($result_data_set2['Budget01'] != '' && $result_data_set2['Budget01'] != null) {
                                                                                                                                                                echo number_format($result_data_set2['Budget01'], 2);
                                                                                                                                                            } ?>" onkeyup="dokeyupMoney(this);" onchange="dokeyupMoney(this);" onkeypress="checknumberMoney()" /></td>
                        <td align="center" valign="middle"><input size='13' name="Budget02_Type2_<?php echo $seq_02; ?>" type="text" id="Budget02" value="<?php if ($result_data_set2['Budget02'] != '' && $result_data_set2['Budget02'] != null) {
                                                                                                                                                                echo number_format($result_data_set2['Budget02'], 2);
                                                                                                                                                            } ?>" onkeyup="dokeyupMoney(this);" onchange="dokeyupMoney(this);" onkeypress="checknumberMoney()" oninput="updateColumn3(this)" /></td>
                        <td align="center" valign="middle"><input size='10' style="border-width: 0px; text-align: right; font-size:16px;" name="BudgetNegative_Type2_<?php echo $seq_02; ?>" type="text" id="BudgetNegative" value="<?php echo $result_data_set2['BudgetNegative']; ?>"></td>
                        <td align="center" valign="middle"><input size='10' style="border-width: 0px; text-align: right; font-size:16px;" name="BudgetPercentage_Type2_<?php echo $seq_02; ?>" type="text" id="BudgetPercentage" value="<?php echo $result_data_set2['BudgetPercentage']; ?>"></td>

                        <td align="center" valign="middle">
                            <span class="detail">
                                <a id="btnView" class="btn btn-primary" onclick="window.open('../../check_detail_plan_doeb/view/<?= $result_data_set2["AllPlanId"] ?>.<?= $result_data_set2["TypeAllPlan"] ?>', '_blank', 'width=1400,height=550,scrollbars=1');">เลือก</a>
                            </span>
                        </td>

                    </tr>
                    <?php $sum_budget[] = $result_data_set2['sum_budget']; ?>
                    <?php $sum_budget_02[] = $result_data_set2['sum_budget']; ?>
                <?php
                    $seq_02++;
                endforeach;
                ?>
            <?php
            else:
            ?>
                <td colspan='10' align="center" valign="middle">
                    <font color="red">-- ไม่มีรายการข้อมูล --</font>
                </td>
            <?php
            endif;
            ?>
            <tr>
                <td colspan='10' align="left" valign="middle">
                    <div class="class_header_page_03">โครงการอื่น ๆ ส่วนกิจกรรมภายในหน่วยงาน</div>
                </td>
            </tr>
            <?php
            if (!empty($data_main['return_data_03'])):
                $seq_main_01 = 1;
                $seq_array_01 = 1;
                foreach ($data_main['return_data_03'] as $result_data_set3):
            ?>
                    <tr>
                        <td align="left" valign="middle"><?php echo $seq_main_01; ?>.</td>
                        <td align="left" valign="middle">
                            <span class="detail">
                                <?php echo $result_data_set3['NameActivity']; ?>
                            </span>
                        </td>
                        <td align="left" valign="middle">
                            <span class="detail">
                                <?php echo $result_data_set3['GroupUserName']; ?>
                            </span>
                        </td>
                        <td align="left" valign="middle">
                            <span class="detail">
                                12 เดือน
                            </span>
                        </td>
                        <td align="right" valign="middle">
                            <span class="detail">
                                <?php echo number_format($result_data_set3['sum_budget'], 2); ?>
                            </span>
                            <input type="hidden" name='DraftBudgetControlDetail_id_Type3_<?php echo $seq_array_01; ?>' id="DraftBudgetControlDetail_id_Type3_<?php echo $seq_array_01; ?>" value="<?php echo $result_data_set3['DraftBudgetControlDetail_id']; ?>">
                            <input type="hidden" name='count_data_03[]' id="count_data_03[]" value="<?php echo $seq_array_01; ?>">
                            <input type="hidden" name='sum_budget_Type3_<?php echo $seq_array_01; ?>' id="sum_budget" value="<?php echo $result_data_set3['sum_budget']; ?>">
                        </td>

                        <td align="center" valign="middle"><input size='13' name="Budget01_Type3_<?php echo $seq_array_01; ?>" type="text" id="Budget01" value="<?php if ($result_data_set3['Budget01'] != '' && $result_data_set3['Budget01'] != null) {
                                                                                                                                                                    echo number_format($result_data_set3['Budget01'], 2);
                                                                                                                                                                } ?>" onkeyup="dokeyupMoney(this);" onchange="dokeyupMoney(this);" onkeypress="checknumberMoney()" /></td>
                        <td align="center" valign="middle"><input size='13' name="Budget02_Type3_<?php echo $seq_array_01; ?>" type="text" id="Budget02" value="<?php if ($result_data_set3['Budget02'] != '' && $result_data_set3['Budget02'] != null) {
                                                                                                                                                                    echo number_format($result_data_set3['Budget02'], 2);
                                                                                                                                                                } ?>" onkeyup="dokeyupMoney(this);" onchange="dokeyupMoney(this);" onkeypress="checknumberMoney()" oninput="updateColumn3(this)" /></td>
                        <td align="center" valign="middle"><input size='10' style="border-width: 0px; text-align: right; font-size:16px;" name="BudgetNegative_Type3_<?php echo $seq_array_01; ?>" type="text" id="BudgetNegative" value="<?php echo $result_data_set3['BudgetNegative']; ?>"></td>
                        <td align="center" valign="middle"><input size='10' style="border-width: 0px; text-align: right; font-size:16px;" name="BudgetPercentage_Type3_<?php echo $seq_array_01; ?>" type="text" id="BudgetPercentage" value="<?php echo $result_data_set3['BudgetPercentage']; ?>"></td>

                        <td align="center" valign="middle">
                            -
                        </td>
                    </tr>
                <?php
                    $seq_main_01++;
                    $seq_array_01++;
                endforeach;
                ?>
            <?php
            else:
            ?>
                <td colspan='10' align="center" valign="middle">
                    <font color="red">-- ไม่มีรายการข้อมูล --</font>
                </td>
            <?php
            endif;
            ?>
            <tr>
                <td colspan='10' align="left" valign="middle">
                    <div class="class_header_page_03">โครงการอื่น ๆ ส่วนสำนักงานพลังงานจังหวัด</div>
                </td>
            </tr>
            <?php
            if (!empty($data_main['return_data_04'])):
                $seq_main_02 = 1;
                $seq_array_02 = 1;
                foreach ($data_main['return_data_04'] as $result_data_set4):
            ?>
                    <tr>
                        <td align="left" valign="middle"><?php echo $seq_main_02; ?>.</td>
                        <td align="left" valign="middle">
                            <span class="detail">
                                <?php echo $result_data_set4['NameActivity']; ?>
                            </span>
                        </td>
                        <td align="left" valign="middle">
                            <span class="detail">
                                <?php echo $result_data_set4['GroupUserName']; ?>
                            </span>
                        </td>
                        <td align="left" valign="middle">
                            <span class="detail">
                                12 เดือน
                            </span>
                        </td>
                        <td align="right" valign="middle">
                            <span class="detail">
                                <?php echo number_format($result_data_set4['sum_budget'], 2); ?>
                            </span>
                            <input type="hidden" name='DraftBudgetControlDetail_id_Type4_<?php echo $seq_array_02; ?>' id="DraftBudgetControlDetail_id_Type4_<?php echo $seq_array_02; ?>" value="<?php echo $result_data_set4['DraftBudgetControlDetail_id']; ?>">
                            <input type="hidden" name='count_data_04[]' id="count_data_04[]" value="<?php echo $seq_array_02; ?>">
                            <input type="hidden" name='sum_budget_Type4_<?php echo $seq_array_02; ?>' id="sum_budget" value="<?php echo $result_data_set4['sum_budget']; ?>">
                        </td>

                        <td align="center" valign="middle"><input size='13' name="Budget01_Type4_<?php echo $seq_array_02; ?>" type="text" id="Budget01" value="<?php if ($result_data_set4['Budget01'] != '' && $result_data_set4['Budget01'] != null) {
                                                                                                                                                                    echo number_format($result_data_set4['Budget01'], 2);
                                                                                                                                                                } ?>" onkeyup="dokeyupMoney(this);" onchange="dokeyupMoney(this);" onkeypress="checknumberMoney()" /></td>
                        <td align="center" valign="middle"><input size='13' name="Budget02_Type4_<?php echo $seq_array_02; ?>" type="text" id="Budget02" value="<?php if ($result_data_set4['Budget02'] != '' && $result_data_set4['Budget02'] != null) {
                                                                                                                                                                    echo number_format($result_data_set4['Budget02'], 2);
                                                                                                                                                                } ?>" onkeyup="dokeyupMoney(this);" onchange="dokeyupMoney(this);" onkeypress="checknumberMoney()" oninput="updateColumn3(this)" /></td>
                        <td align="center" valign="middle"><input size='10' style="border-width: 0px; text-align: right; font-size:16px;" name="BudgetNegative_Type4_<?php echo $seq_array_02; ?>" type="text" id="BudgetNegative" value="<?php echo $result_data_set4['BudgetNegative']; ?>"></td>
                        <td align="center" valign="middle"><input size='10' style="border-width: 0px; text-align: right; font-size:16px;" name="BudgetPercentage_Type4_<?php echo $seq_array_02; ?>" type="text" id="BudgetPercentage" value="<?php echo $result_data_set4['BudgetPercentage']; ?>"></td>

                        <td align="center" valign="middle">
                            -
                        </td>
                    </tr>
                <?php
                    $seq_main_02++;
                    $seq_array_02++;
                endforeach;
                ?>
            <?php
            else:
            ?>
                <td colspan='10' align="center" valign="middle">
                    <font color="red">-- ไม่มีรายการข้อมูล --</font>
                </td>
            <?php
            endif;
            ?>
        </table>

        <div class="row text-left">
            <table align="center" width='100%'>
                <tr>
                    <td align='center'>
                        <table class="table table-bordered" id="datatable1">
                            <tr class="bg_th_sub">
                                <th class="text-center">
                                    <font color='white'>รับรองข้อมูลการจัดสรรงบประมาณ</font>
                                </th>
                            </tr>
                            <tr>
                                <td align="left" valign="middle">
                                    <span class="detail">
                                        <input type='radio' name='ActiveStatusIns' value='Y' <?php if ($data_main['ActiveStatusIns'] == 'Y'): echo "checked";
                                                                                                endif; ?>> อนุมัติ
                                        <input type='radio' name='ActiveStatusIns' value='N' <?php if ($data_main['ActiveStatusIns'] == 'N'): echo "checked";
                                                                                                endif; ?>> ไม่อนุมัติ
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td align="left" valign="middle">
                                    <span class="detail">
                                        ความคิดเห็นเพิ่มเติม
                                        <br />
                                        <textarea name="RemarksFirstIns" cols='40' rows='3'><?php echo $data_main['RemarksFirstIns']; ?></textarea>
                                    </span>
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td align='center'>
                        <table class="table table-bordered" id="datatable1">
                            <tr class="bg_th_sub">
                                <th class="text-center">
                                    <font color='white'>อนุมัติข้อมูลการจัดสรรงบประมาณ</font>
                                </th>
                            </tr>
                            <tr>
                                <td align="left" valign="middle">
                                    <span class="detail">
                                        <input type='radio' name='ActiveStatusApprove' value='Y' <?php if ($data_main['ActiveStatusApprove'] == 'Y'): echo "checked";
                                                                                                    endif; ?>> อนุมัติ
                                        <input type='radio' name='ActiveStatusApprove' value='N' <?php if ($data_main['ActiveStatusApprove'] == 'N'): echo "checked";
                                                                                                    endif; ?>> ไม่อนุมัติ
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td align="left" valign="middle">
                                    <span class="detail">
                                        ความคิดเห็นเพิ่มเติม
                                        <br />
                                        <textarea name="RemarksFirstApprove" cols='40' rows='3'><?php echo $data_main['RemarksFirstApprove']; ?></textarea>
                                    </span>
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td align='center'>
                        <table class="table table-bordered" id="datatable1">
                            <tr class="bg_th_sub">
                                <th class="text-center">
                                    <font color='white'>ผู้อนุมัติเผยแพร่</font>
                                </th>
                            </tr>
                            <tr>
                                <td align="left" valign="middle">
                                    <span class="detail">
                                        <input type='radio' name='ActiveStatusLastApprove' value='Y' <?php if ($data_main['ActiveStatusLastApprove'] == 'Y'): echo "checked";
                                                                                                        endif; ?>> อนุมัติ
                                        <input type='radio' name='ActiveStatusLastApprove' value='N' <?php if ($data_main['ActiveStatusLastApprove'] == 'N'): echo "checked";
                                                                                                        endif; ?>> ไม่อนุมัติ
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td align="left" valign="middle">
                                    <span class="detail">
                                        ความคิดเห็นเพิ่มเติม
                                        <br />
                                        <textarea name="RemarksLastApprove" cols='40' rows='3'><?php echo $data_main['RemarksLastApprove']; ?></textarea>
                                    </span>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
        <!--
        <table>
            <tr>
                <td align="right" valign="middle">
                    <span class="detail">
                        จำนวนเงินรวม : <input size='10' style="border-width: 0px; text-align: right; font-size:25px;" name="overall_price" type="text" id="overall_price" value="<?php if (!empty($sum_budget)): echo number_format(array_sum($sum_budget), 2);
                                                                                                                                                                                    else: echo "-";
                                                                                                                                                                                    endif; ?> " readonly /> บาท
                    </span>
                </td>
            </tr>
        </table>
        -->
    </div>
    <div class="form-row">
        <div class="col-sm-12 text-right">
            <input name="btnExcel" id="btnExcel" type="submit" class="btn btn-primary" value="ส่งออกข้อมูล">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input name="btnSave" id="btnSave" type="submit" class="btn btn-success" value="บันทึกข้อมูล">
            <input name="btnConfirm" id="btnConfirm" type="submit" class="btn btn-info" value="ยืนยันข้อมูล">
            <button type="reset" class="btn btn-secondary" value="reset" onclick="window.location='<?php echo base_url(); ?>/<?= $routeGroup ?>'"><i class="fas fa-reply"></i> กลับสู่หน้าหลัก</button>

        </div>
    </div>
    <?php //endif; 
    ?>

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

    function updateColumn3(element) {
        // ค้นหา Element ของแถวปัจจุบัน (<tr>) ที่เป็น Parent ของช่อง input นี้
        const row = element.closest('tr');

        // ค้นหาช่อง input ของ Column 1, Column 2 และ Column 3 ในแถวเดียวกัน
        const col0Input = row.querySelector('input[id="sum_budget"]');
        const col1Input = row.querySelector('input[id="Budget01"]');
        const col2Input = row.querySelector('input[id="Budget02"]');
        const col3Output = row.querySelector('input[id="BudgetNegative"]');
        const col4Output = row.querySelector('input[id="BudgetPercentage"]');

        // ดึงค่าจาก Column 1 และ Column 2 (ใช้ค่าว่างถ้ายังไม่มีการกรอก)
        const val0 = col0Input.value || '';
        const val1 = col1Input.value || '';
        const val2 = col2Input.value || '';

        // --- กำหนดวิธีการรวมค่าที่นี่ ---
        // ตัวอย่างที่ 1: รวมแบบต่อข้อความ (Concatenation)
        //col3Output.value = val1 + val2;

        // ตัวอย่างที่ 2: รวมแบบบวกตัวเลข (ถ้าต้องการให้เป็นตัวเลข)
        const num0 = parseFloat(val0) || 0;
        const num1 = parseFloat(val1) || 0; // แปลงเป็นตัวเลข ถ้าไม่ใช่ให้เป็น 0
        const num2 = parseFloat(val2.replace(/,/g, '')) || 0;
        var value_before = num2 - num0;
        let formattedWithTwoDecimals = new Intl.NumberFormat('en-US', {
            minimumFractionDigits: 2, // กำหนดให้มีทศนิยมอย่างน้อย 2 ตำแหน่ง
            maximumFractionDigits: 2 // กำหนดให้มีทศนิยมอย่างมาก 2 ตำแหน่ง (จะมีการปัดเศษให้)
        }).format(value_before);

        col3Output.value = formattedWithTwoDecimals;
        col4Output.value = ((value_before / num0) * 100).toFixed(2) + "%";

        // เรียกฟังก์ชันเพื่ออัปเดตยอดรวมทั้งหมด
        //updateGrandTotal();
    }
    /*
    function updateGrandTotal() {
        const col3Outputs = document.querySelectorAll('.col3-output');
        let grandTotal = 0;

        col3Outputs.forEach(input => {
            // ดึงค่าจาก Column 3, ลบคอมม่าออกก่อนแปลงเป็นตัวเลขเพื่อการคำนวณ
            const value = parseFloat(input.value.replace(/,/g, '')) || 0;
            grandTotal += value;
        });

        // แสดงยอดรวมทั้งหมด (จัดรูปแบบให้มีคอมม่า)
        document.getElementById('grandTotalCol3').value = formatNumberWithCommas(grandTotal);
    }
    */

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