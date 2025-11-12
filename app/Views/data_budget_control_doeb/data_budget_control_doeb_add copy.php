<?= $this->extend('layouts/main') ?>

<?= $this->section("content"); ?>

<div class="class_header_page_02">
    <br />
    ตรวจสอบรายละเอียดคำของบประมาณ
    <hr />
</div>
<div class="row">
    <form id="frm" class="form-horizontal" action="<?php echo base_url(); ?>/<?= $routeGroup ?>/<?= $action_page ?>" method="post">
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
                        <div class="col-3">
                            <h6>ช่วงเวลาของแผน : จาก <?php echo $data_main["StartPlan"]; ?> ถึง <?php echo $data_main["FinishPlan"]; ?></h6>
                        </div>
                        <div class="col-3">
                            <h4>กองงาน : <?php echo $data_main["GroupUserName"]; ?></h4>
                        </div>
                    </div>
                </div>
            </div>
            <hr />
            <div class="row text-left">
                <div class="col-md-12">
                    <div class="form-group row">
                        <div class="class_header_page_03">รายการโครงการ</div>
                        <br />
                        <table class="table table-bordered" id="datatable1">
                            <tr class="bg_th">
                                <th class="text-center" width="7%">
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
                                        <?php echo $result_data_set0['ItemL1Name']; ?>
                                    </td>
                                    <td align="left" valign="middle">
                                        <span class="detail">
                                            <?php echo $result_data_set0['ItemL2Name']; ?>
                                        </span>
                                    </td>
                                    <td align="left" valign="middle">
                                        <span class="detail">
                                            <?php if ($result_data_set0['ItemL1Project'] != '0' && $result_data_set0['ItemL1Project'] != '' && $result_data_set0['ItemL2Project'] != '0' && $result_data_set0['ItemL2Project'] != ''): ?>
                                                <?php $namelv3 = "dropdown_StructureBudgetMainLv3Project" . $result_data_set0['CreatePlanDetail_id']; ?>
                                                <?php echo form_dropdown('ItemL3Project_' . $result_data_set0['CreatePlanDetail_id'], $$namelv3, $result_data_set0['ItemL3Project'], "disabled id='ItemL3Project_1' "); ?>
                                            <?php else: ?>
                                                <?php echo form_dropdown('ItemL3Project_' . $result_data_set0['CreatePlanDetail_id'], $dropdown_StructureBudgetMainLv3, '', "disabled id='ItemL3Project_1' "); ?>
                                            <?php endif; ?>
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
                                            <a id="btnView" class="btn btn-primary" onclick="window.open('../../check_detail_plan_doeb/view/<?= $result_data_set0["AllPlanId"] ?><?= $result_data_set0["TypeAllPlan"] ?>', '_blank', 'width=1400,height=550,scrollbars=1');">ดูรายละเอียด</a>
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
                        $overall_price_list_all = array();
                        foreach ($DraftBudgetDetail as $result_data_set1):
                            $DraftBudgetControlDetail_id = $result_data_set1['DraftBudgetControlDetail_id'];
                    ?>
                            <tr class="bg_th">
                                <th class="text-center">
                                    <font color='white'>ลำดับ</font>
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
                                    <input type="hidden" name="DraftBudgetControlDetail_id[]" id="DraftBudgetControlDetail_id[]" value="<?php echo $DraftBudgetControlDetail_id; ?>" />
                                    <span class="detail">
                                        <input type="hidden" name="ItemL1[]" id="ItemL1[]" value="<?php echo $result_data_set1['ItemL1']; ?>" />
                                        <?php echo form_dropdown('ItemL1_' . $result_data_set1['DraftBudgetControlDetail_id'], $dropdown_StructureBudgetMain, $result_data_set1['ItemL1'], "disabled id='ItemL1_1' onchange='GetStructureBudgetDropdownLv2Doeb$DraftBudgetControlDetail_id();' "); ?>
                                    </span>
                                </td>
                                <td align="left" valign="middle">
                                    <span class="detail">
                                        <input type="hidden" name="ItemL2[]" id="ItemL2[]" value="<?php echo $result_data_set1['ItemL2']; ?>" />
                                        <?php if ($result_data_set1['ItemL1'] != '0' && $result_data_set1['ItemL1'] != ''): ?>
                                            <?php $namelv2 = "dropdown_StructureBudgetMainLv2" . $result_data_set1['DraftBudgetControlDetail_id']; ?>
                                            <?php echo form_dropdown('ItemL2_' . $result_data_set1['DraftBudgetControlDetail_id'], $$namelv2, $result_data_set1['ItemL2'], "disabled id='ItemL2_1' onchange='GetStructureBudgetDropdownLv3Doeb$DraftBudgetControlDetail_id();' "); ?>
                                        <?php else: ?>
                                            <?php echo form_dropdown('ItemL2_' . $result_data_set1['DraftBudgetControlDetail_id'], $dropdown_StructureBudgetMainLv2, '', "disabled id='ItemL2_1' onchange='GetStructureBudgetDropdownLv3Doeb$DraftBudgetControlDetail_id();' "); ?>
                                        <?php endif; ?>
                                    </span>
                                </td>
                                <td align="left" valign="middle">
                                    <span class="detail">
                                        <input type="hidden" name="ItemL3[]" id="ItemL3[]" value="<?php echo $result_data_set1['ItemL3']; ?>" />
                                        <?php if ($result_data_set1['ItemL1'] != '0' && $result_data_set1['ItemL1'] != '' && $result_data_set1['ItemL2'] != '0' && $result_data_set1['ItemL2'] != ''): ?>
                                            <?php $namelv3 = "dropdown_StructureBudgetMainLv3" . $result_data_set1['DraftBudgetControlDetail_id']; ?>
                                            <?php echo form_dropdown('ItemL3_' . $result_data_set1['DraftBudgetControlDetail_id'], $$namelv3, $result_data_set1['ItemL3'], "disabled id='ItemL3_1' "); ?>
                                        <?php else: ?>
                                            <?php echo form_dropdown('ItemL3_' . $result_data_set1['DraftBudgetControlDetail_id'], $dropdown_StructureBudgetMainLv3, '', "disabled id='ItemL3_1' "); ?>
                                        <?php endif; ?>
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
                                        <?php echo form_dropdown('TypeBudget_' . $result_data_set1['DraftBudgetControlDetail_id'], $dropdown_type_budget, $result_data_set1['TypeBudget'], " disabled "); ?>
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
                                </td>
                            </tr>
                            <tr>
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
                                        $overall_price_list = array();
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
                                                        <?php echo form_dropdown('UnitManagement_id[]', $dropdown_master_unit, $result_data_set2['UnitManagement_id'], " disabled "); ?>
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
                                $sum_total_budge_year = array_sum($overall_price_project_list) + array_sum($overall_price_list);
                                ?>
                                <input size='40' style="border-width: 0px; text-align: right; font-size:25px;" name="sum_overall_price" type="text" id="sum_overall_price" value="จำนวนเงินรวม : <?php if (!empty($sum_total_budge_year)): echo number_format($sum_total_budge_year, 2);
                                                                                                                                                                                                    else: echo "-";
                                                                                                                                                                                                    endif; ?> บาท" readonly />
                            </span>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="row text-left">
                <div class="col-md-12">
                    <div class="form-group row">
                        <div class="col-12">
                            หมายเหตุ
                            <?php if (!empty($data['remarks'])): echo $data['remarks'];
                            else: echo "-";
                            endif; ?></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <hr />
            <div class="row text-left">
                <div class="col-md-12">
                    <div class="form-group row">
                        <div class="col-12">
                            <font color='red'>* หมายเหตุ (กรณีตีกลับข้อมูล)</font>
                            <textarea name='RemarksReturn' rows='3' class='form-control'><?php echo $data['RemarksReturn']; ?></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-sm-12 text-right">
                    <input name="btnConfirm" id="btnConfirm" type="submit" class="btn btn-info" value="ยืนยันข้อมูล">
                    <input name="btnConfirm_hold" id="btnConfirm_hold" type="submit" class="btn btn-success" value="บันทึกข้อมูล">
                    <input name="btnSave" id="btnSave" type="submit" class="btn btn-danger" value="แจ้งทบทวนเอกสาร">
                    <button type="reset" class="btn btn-secondary" value="reset" onclick="window.location='<?php echo base_url(); ?>/<?= $routeGroup ?>'"><i class="fas fa-reply"></i> กลับสู่หน้าหลัก</button>
                </div>
            </div>
            <br />
        <?php endif; ?>
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

    document.addEventListener('DOMContentLoaded', function() {
        const iframe = document.getElementById('myIframe');

        iframe.onload = function() {
            try {
                // ตรวจสอบว่า iframe โหลดจากโดเมนเดียวกันหรือไม่
                if (iframe.contentWindow.location.origin === window.location.origin) {
                    // ปรับความสูงของ iframe ตามความสูงของเนื้อหาภายใน
                    // scrollHeight คือความสูงทั้งหมดของเนื้อหา (รวมส่วนที่มองไม่เห็น)
                    // documentElement.scrollHeight จะให้ความสูงของเนื้อหาทั้งหมด
                    iframe.style.height = iframe.contentWindow.document.documentElement.scrollHeight + 'px';
                    console.log('Iframe height adjusted to:', iframe.style.height);
                } else {
                    console.warn('Cannot adjust iframe height due to cross-origin policy.');
                    // ถ้าเป็น cross-origin คุณต้องจัดการด้วยวิธีอื่น (เช่น postMessage)
                    // หรือตั้งความสูงคงที่
                }
            } catch (e) {
                console.error('Error accessing iframe content:', e);
                console.warn('This usually means the iframe is cross-origin.');
            }
        };
    });

    var fncSubmit = function() {
        $("#frm").submit();
    }
    $(document).ready(function() {
        // console.log("Document ready page Add");
        /*
        $("#btnSave").on("click", function() {
            confirmPopup("กรุณายืนยันบันทึกข้อมูล", "บันทึกข้อมูล", "ยกเลิก", fncSubmit);
        });
        */
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