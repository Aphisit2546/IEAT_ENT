<?= $this->extend('layouts/main_for_view') ?>

<?= $this->section("content"); ?>

<div class="class_header_page_02">
    <br />
    จัดสรรงบประมาณ
    <hr />
</div>
<form id="frm" class="form-horizontal" action="<?php echo base_url(); ?>/<?= $routeGroup ?>/<?= $action_page ?>" method="post">
    <?= csrf_field() ?>
    <input type="hidden" name='OverAllBudget_id' id="OverAllBudget_id" value="<?php echo $OverAllBudget_id; ?>">

    <hr />
    <div class="form-group row" id='content'>
        <?php
        $seq_main_01 = 1;
        $seq_array_01 = 1;
        $seq_01_ft = 1;
        $seq_01 = 1;
        ?>
        <?php
        if (!empty($data_main['return_data_Group01'])):
            foreach ($data_main['return_data_Group01'] as $result_data_set1):
        ?>
                <div class="class_header_page_03"><b><?php echo $result_data_set1['NameHead01']; ?></b></div>
                <br /><br />

                <?php foreach ($result_data_set1['detailsub_last'] as $detailsub_last): ?>

                    <?php if ($detailsub_last['detail_sub2'] == null): ?>

                        <table class="table table-bordered" id="datatable1">
                            <tr>
                                <th class="text-left">
                                    <div class="class_header_page_03">
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <?php echo $detailsub_last['NameHead02']; ?>
                                    </div>
                                </th>
                            </tr>
                        </table>

                    <?php else: ?>

                        <table class="table table-bordered" id="datatable1">
                            <tr>
                                <th class="text-left">
                                    <div class="class_header_page_03">
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <?php echo $detailsub_last['detail_sub2'][0]['NameHead03']; ?>
                                        <br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        งบประมาณที่ได้รับตาม พ.ร.บ. <font style="color:black; font-size:20px;"><?php echo number_format($detailsub_last['detail_sub2'][0]['Budget01'], 2); ?></font> บาท
                                    </div>
                                </th>
                            </tr>
                        </table>

                        <?php if ($detailsub_last['detail_sub2'][0]['NameActivity'] != ''): ?>
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
                                        <font color='white'>งบประมาณที่ขอ (บาท)</font>
                                    </th>
                                    <!--
                                    <th class="text-center">
                                        <font color='white'>งบประมาณที่ได้รับตาม พรบ. (บาท)</font>
                                    </th>
                                    -->
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
                                <?php $seq_all = 1; ?>

                                <?php foreach ($detailsub_last['detail_sub2'] as $detail_sub2): ?>


                                    <?php if ($detail_sub2['NameActivity'] != ''): ?>


                                        <?php if ($detail_sub2['CreatePlanDetail_id'] != ''): ?>

                                            <tr>
                                                <td align="left" valign="middle"><?php echo $seq_all; ?>.</td>
                                                <td align="left" valign="middle">
                                                    <span class="detail">
                                                        <?php echo $detail_sub2['NameActivity']; ?>
                                                    </span>
                                                </td>
                                                <td align="left" valign="middle">
                                                    <span class="detail">
                                                        <?php echo $detail_sub2['GroupUserName']; ?>
                                                    </span>
                                                </td>
                                                <td align="right" valign="middle">
                                                    <span class="detail">
                                                        <?php echo number_format($detail_sub2['sum_budget'], 2); ?>
                                                    </span>
                                                    <input type="hidden" name='count_data_01[]' id="count_data_01[]" value="<?php echo $seq_01; ?>">
                                                    <input type="hidden" name='sum_budget_Type1_<?php echo $seq_01; ?>' id="sum_budget" value="<?php echo $detail_sub2['sum_budget']; ?>">
                                                    <input type="hidden" name='CreatePlanDetail_id_Type1_<?php echo $seq_01; ?>' id="CreatePlanDetail_id" value="<?php echo $detail_sub2['CreatePlanDetail_id']; ?>">
                                                </td>
                                                <td align="center" valign="middle"><?php echo number_format($detail_sub2['Budget02'], 2); ?></td>
                                                <td align="center" valign="middle"><?php echo number_format($detail_sub2['BudgetNegative'], 2); ?></td>
                                                <td align="center" valign="middle"><?php echo $detail_sub2['BudgetPercentage']; ?></td>

                                                <td align="center" valign="middle">
                                                    <?php if ($detail_sub2["AllPlanId"] != ''): ?>
                                                        <span class="detail">
                                                            <a id="btnView" class="btn btn-primary" onclick="window.open('../../check_detail_plan_doeb/view/<?= $detail_sub2["AllPlanId"] ?>.<?= $detail_sub2["TypeAllPlan"] ?>', '_blank', 'width=1400,height=550,scrollbars=1');">เลือก</a>
                                                        </span>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>

                                            <?php $sum_budget[] = $detail_sub2['sum_budget']; ?>
                                            <?php $sum_budget_01[] = $detail_sub2['sum_budget']; ?>
                                            <?php $seq_01++; ?>
                                        <?php endif; ?>


                                        <?php if ($detail_sub2['DraftBudgetControlDetail_id'] != ''): ?>

                                            <tr>
                                                <td align="left" valign="middle"><?php echo $seq_all; ?>.</td>
                                                <td align="left" valign="middle">
                                                    <span class="detail">
                                                        <?php echo $detail_sub2['NameActivity']; ?>
                                                    </span>
                                                </td>
                                                <td align="left" valign="middle">
                                                    <span class="detail">
                                                        <?php echo $detail_sub2['GroupUserName']; ?>
                                                    </span>
                                                </td>
                                                <td align="right" valign="middle">
                                                    <span class="detail">
                                                        <?php echo number_format($detail_sub2['sum_budget'], 2); ?>
                                                    </span>
                                                    <input type="hidden" name='DraftBudgetControlDetail_id_Type3_<?php echo $seq_array_01; ?>' id="DraftBudgetControlDetail_id_Type3_<?php echo $seq_array_01; ?>" value="<?php echo $detail_sub2['DraftBudgetControlDetail_id']; ?>">
                                                    <input type="hidden" name='count_data_03[]' id="count_data_03[]" value="<?php echo $seq_array_01; ?>">
                                                    <input type="hidden" name='sum_budget_Type3_<?php echo $seq_array_01; ?>' id="sum_budget" value="<?php echo $detail_sub2['sum_budget']; ?>">
                                                </td>
                                                <td align="center" valign="middle"><?php echo number_format($detail_sub2['Budget02'], 2); ?></td>
                                                <td align="center" valign="middle"><input size='10' style="border-width: 0px; text-align: right; font-size:16px;" name="BudgetNegative_Type3_<?php echo $seq_array_01; ?>" type="text" id="BudgetNegative" value="<?php echo $detail_sub2['BudgetNegative']; ?>"></td>
                                                <td align="center" valign="middle"><input size='10' style="border-width: 0px; text-align: right; font-size:16px;" name="BudgetPercentage_Type3_<?php echo $seq_array_01; ?>" type="text" id="BudgetPercentage" value="<?php echo $detail_sub2['BudgetPercentage']; ?>"></td>

                                                <td align="center" valign="middle">
                                                    -
                                                </td>
                                            </tr>
                                            <?php
                                            $seq_main_01++;
                                            $seq_array_01++;
                                            ?>
                                        <?php endif; ?>

                                        <?php
                                        $seq_all++;
                                        ?>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </table>
                        <?php else: ?>
                            <!--
                            <table class="table table-bordered" id="datatable1">
                                <tr>
                                    <td class="text-center">
                                        <font color='red'>
                                            -- ไม่พบข้อมูล --
                                        </font>
                                    </td>
                                </tr>
                            </table>
                             -->
                        <?php endif; ?>
                    <?php endif; ?>

                <?php endforeach; ?>
            <?php endforeach; ?>
        <?php endif; ?>


        <hr />
        <table>
            <tr>
                <td align="right" valign="middle">
                    <span class="detail">
                        จำนวนเงินรวมทั้งหมด : <input size='10' style="border-width: 0px; text-align: right; font-size:25px;" name="overall_price" type="text" id="overall_price" value="<?php if (!empty($sum_budget)): echo number_format(array_sum($sum_budget), 2);
                                                                                                                                                                                        else: echo "-";
                                                                                                                                                                                        endif; ?> " readonly /> บาท
                    </span>
                </td>
            </tr>
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
                                        <input disabled type='radio' name='ActiveStatusIns' value='Y' <?php if ($data_main['ActiveStatusIns'] == 'Y'): echo "checked";
                                                                                                        endif; ?>> อนุมัติ
                                        <input disabled type='radio' name='ActiveStatusIns' value='N' <?php if ($data_main['ActiveStatusIns'] == 'N'): echo "checked";
                                                                                                        endif; ?>> ไม่อนุมัติ
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td align="left" valign="middle">
                                    <span class="detail">
                                        ความคิดเห็นเพิ่มเติม
                                        <br />
                                        - <?php echo $data_main['RemarksFirstIns']; ?>
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
                                        <input disabled type='radio' name='ActiveStatusApprove' value='Y' <?php if ($data_main['ActiveStatusApprove'] == 'Y'): echo "checked";
                                                                                                            endif; ?>> อนุมัติ
                                        <input disabled type='radio' name='ActiveStatusApprove' value='N' <?php if ($data_main['ActiveStatusApprove'] == 'N'): echo "checked";
                                                                                                            endif; ?>> ไม่อนุมัติ
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td align="left" valign="middle">
                                    <span class="detail">
                                        ความคิดเห็นเพิ่มเติม
                                        <br />
                                        - <?php echo $data_main['RemarksFirstApprove']; ?>
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
                                        <input disabled type='radio' name='ActiveStatusLastApprove' value='Y' <?php if ($data_main['ActiveStatusLastApprove'] == 'Y'): echo "checked";
                                                                                                                endif; ?>> อนุมัติ
                                        <input disabled type='radio' name='ActiveStatusLastApprove' value='N' <?php if ($data_main['ActiveStatusLastApprove'] == 'N'): echo "checked";
                                                                                                                endif; ?>> ไม่อนุมัติ
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td align="left" valign="middle">
                                    <span class="detail">
                                        ความคิดเห็นเพิ่มเติม
                                        <br />
                                        - <?php echo $data_main['RemarksLastApprove']; ?>
                                    </span>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    </div>

</form>
</div>
<?= $this->endSection(); ?>