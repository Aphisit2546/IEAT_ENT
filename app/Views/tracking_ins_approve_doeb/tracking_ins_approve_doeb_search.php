<?= $this->extend('layouts/main') ?>
<!-- DataTables -->

<?= $this->section("content"); ?>
<div class="class_header_page_02">
    <br />
    โปรแกรมตรวจสอบและพิจารณาเผยแพร่ผลการติดตามประเมินผลประจำเดือน
    <hr />
</div>
<font style="font-size: 20px;">
    ประจำเดือน
    <b><u><?php echo $month_before_search; ?> พ.ศ. <?php echo $year_before_search; ?></u></b>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a id="btnView" class="btn btn-info" href="<?= $routeGroup ?>/showall"> ดูข้อมูลประจำเดือนย้อนหลัง</a>
    <input type='hidden' name='month_tracking' id='month_tracking' value='<?php echo $month_tracking; ?>'>
    <input type='hidden' name='year_tracking' id='year_tracking' value='<?php echo $year_tracking; ?>'>
</font>
<br /><br />
<div class="class_header_page_03">กิจกรรมส่วนงานโครงการ</div>
<div class="row">
    <div class="col-md-12">
        <div class="card card-gray">
            <div class="card-header">
                <h3 class="card-title">รายการข้อมูล</h3>
            </div>
            <div class="row">
                <div class="col-12">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr class="align-middle">
                                <th rowspan='2' class="align-middle text-center" width="5%">#</th>
                                <th rowspan='2' class="align-middle text-center">ชื่อแผนงบประมาณ</th>
                                <th rowspan='2' class="align-middle text-center">ชื่อกลุ่มงาน</th>
                                <th rowspan='2' class="align-middle text-center">ชื่อโครงการ</th>
                                <!--<th rowspan='2' class="align-middle text-center">ระยะเวลาโครงการ</th>-->
                                <th rowspan='2' class="align-middle text-center">วงเงินงบประมาณที่ได้รับการจัดสรร (บาท)</th>
                                <th rowspan='2' class="align-middle text-center">วันที่ TOR</th>
                                <th colspan='4' class="align-middle text-center">ความก้าวหน้างานสะสม</th>
                                <th rowspan='2' class="align-middle text-center">เดือนล่าสุดที่รายงาน</th>
                                <th rowspan='2' class="align-middle text-center">ดูรายละเอียด</th>
                                <th rowspan='2' class="align-middle text-center">ตรวจสอบรายงาน</th>
                            </tr>
                            <tr class="align-middle">
                                <th class="align-middle text-center">งาน ณ เดือน</th>
                                <th class="align-middle text-center">งานสะสม</th>
                                <th class="align-middle text-center">ยอดเบิกจ่าย<br />ณ เดือน (บาท)</th>
                                <th class="align-middle text-center">รวมเบิกจ่าย (บาท)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $rowIndx = 1;
                            if (!empty($lstData01)) {
                                foreach ($lstData01 as $item) :
                                    $start_tor_cal = new DateTime($item["StartYearPlan"]);
                                    $finish_tor_cal = new DateTime($item["FinishYearPlan"]);
                                    $interval = $start_tor_cal->diff($finish_tor_cal);
                                    $numberOfDays = $interval->days;
                            ?>
                                    <tr>
                                        <td class="align-top text-center"><?= $rowIndx++; ?></td>
                                        <td class="align-top text-left"><?= $item["PlanName"] ?></td>
                                        <td class="align-top text-left"><?= $item["GroupUserName"] ?></td>
                                        <td class="align-top text-left"><?= $item["ProjectNameTH"] ?></td>
                                        <!--<td class="align-top text-center"><?php echo $numberOfDays; ?> วัน</td>-->
                                        <td class="align-top text-right"><?= number_format($item["Budget02"], 2) ?></td>
                                        <td class="align-top text-center"><?= $item["start_tor"] ?> - <?= $item["finish_tor"] ?></td>
                                        <td class="align-top text-center">
                                            <?php if (!empty($item["SumWorkNow"])): ?>
                                                <?= number_format($item["SumWorkNow"], 2); ?>
                                            <?php else: ?>
                                                -
                                            <?php endif; ?>
                                        </td>
                                        <td class="align-top text-center">
                                            <?php if (!empty($item["SumTotalAccumulateWork"])): ?>
                                                <?= number_format($item["SumTotalAccumulateWork"], 2); ?>
                                            <?php else: ?>
                                                -
                                            <?php endif; ?>
                                        </td>
                                        <td class="align-top text-right">
                                            <?php if (!empty($item["SumDisbursementNow"])): ?>
                                                <?= number_format($item["SumDisbursementNow"], 2); ?>
                                            <?php else: ?>
                                                -
                                            <?php endif; ?>
                                        </td>
                                        <td class="align-top text-right">
                                            <?php if (!empty($item["SumTotalAccumulateDisbursement"])): ?>
                                                <?= number_format($item["SumTotalAccumulateDisbursement"], 2); ?>
                                            <?php else: ?>
                                                -
                                            <?php endif; ?>
                                        </td>
                                        <td class="align-top text-center"><?= $item["MonthReportThai"] ?> <?= $item["YearReport"] ?></td>
                                        <td class="align-top text-center"><a id="btnView" class="btn btn-primary" onclick="window.open('<?php echo base_url(); ?>Report_01_doeb/view/<?= $item["MonthlyProject_id"] ?>', '_blank', 'width=1200,height=550,scrollbars=1');">ดูรายละเอียดข้อมูล</a></td>
                                        <td class="align-top text-center">
                                            <?php if ($item["ActiveStatusIns"] == 'Y'): ?>
                                                <font color='green'><b>ตรวจสอบข้อมูลเรียบร้อย</b></font>
                                            <?php else: ?>
                                                <a id="btnEdit" class="btn btn-danger" href="<?= $routeGroup ?>/edt/<?= $item["MonthlyProject_id"] ?>"><i class="fas fa-edit"></i> แจ้งทบทวน</a>
                                                <a id="btnEdit" class="btn btn-success" href="<?= $routeGroup ?>/add/<?= $item["MonthlyProject_id"] ?>"><i class="fas fa-edit"></i> รับทราบข้อมูล</a>
                                            <?php endif; ?>
                                            <input type='hidden' name='DataID_01' id='DataID_01' value='<?= $item["MonthlyProject_id"] ?>'>
                                        </td>
                                    </tr>
                                <?php
                                endforeach;
                            } else {
                                ?>
                                <tr>
                                    <td colspan="13" class="align-top text-center">
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
</div>

<div class="class_header_page_03">กิจกรรมส่วนงานภายในกรมธุรกิจพลังงาน</div>
<div class="row">
    <div class="col-md-12">
        <div class="card card-gray">
            <div class="card-header">
                <h3 class="card-title">รายการข้อมูล</h3>
            </div>
            <div class="row">
                <div class="col-12">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr class="align-middle">
                                <th rowspan='2' class="align-middle text-center" width="5%">#</th>
                                <th rowspan='2' class="align-middle text-center">ชื่อแผนงบประมาณ</th>
                                <th rowspan='2' class="align-middle text-center">ชื่อกลุ่มงาน</th>
                                <th rowspan='2' class="align-middle text-center">ชื่อกิจกรรม</th>
                                <th rowspan='2' class="align-middle text-center">วงเงินงบประมาณที่ได้รับการจัดสรร (บาท)</th>
                                <th rowspan='2' class="align-middle text-center">ยอดเบิกจ่าย<br />ณ ปัจจุบัน (บาท)</th>
                                <th rowspan='2' class="align-middle text-center">เดือนล่าสุดที่รายงาน</th>
                                <th rowspan='2' class="align-middle text-center">ดูรายละเอียด</th>
                                <th rowspan='2' class="align-middle text-center">ตรวจสอบรายงาน</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $rowIndx = 1;
                            if (!empty($lstData02)) {
                                foreach ($lstData02 as $item) :
                                    $start_tor_cal = new DateTime($item["StartYearPlan"]);
                                    $finish_tor_cal = new DateTime($item["FinishYearPlan"]);
                                    $interval = $start_tor_cal->diff($finish_tor_cal);
                                    $numberOfDays = $interval->days;
                            ?>
                                    <tr>
                                        <td class="align-top text-center"><?= $rowIndx++; ?></td>
                                        <td class="align-top text-left"><?= $item["PlanName"] ?></td>
                                        <td class="align-top text-left"><?= $item["GroupUserName"] ?></td>
                                        <td class="align-top text-left"><?= $item["NameActivity"] ?></td>
                                        <td class="align-top text-right">
                                            <?php if (!empty($item["Budget02"])): ?>
                                                <?= number_format($item["Budget02"], 2); ?>
                                            <?php else: ?>
                                                -
                                            <?php endif; ?>
                                        </td>
                                        <td class="align-top text-right">
                                            <?php if (!empty($item["sum_budget"])): ?>
                                                <?= number_format($item["sum_budget"], 2); ?>
                                            <?php else: ?>
                                                -
                                            <?php endif; ?>
                                        </td>
                                        <td class="align-top text-center"><?= $item["MonthReportThai"] ?> <?= $item["YearReport"] ?></td>
                                        <td class="align-top text-center"><a id="btnView" class="btn btn-primary" onclick="window.open('<?php echo base_url(); ?>Report_01_activity_doeb/view/<?= $item["MonthlyActivity_id"] ?>', '_blank', 'width=1200,height=550,scrollbars=1');">ดูรายละเอียดข้อมูล</a></td>
                                        <td class="align-top text-center">
                                            <?php if ($item["ActiveStatusIns"] == 'Y'): ?>
                                                <font color='green'><b>ตรวจสอบข้อมูลเรียบร้อย</b></font>
                                            <?php else: ?>
                                                <a id="btnEdit" class="btn btn-danger" href="<?= $routeGroup ?>/edt/<?= $item["MonthlyActivity_id"] ?>"><i class="fas fa-edit"></i> แจ้งทบทวน</a>
                                                <a id="btnEdit" class="btn btn-success" href="<?= $routeGroup ?>/add/<?= $item["MonthlyActivity_id"] ?>"><i class="fas fa-edit"></i> รับทราบข้อมูล</a>
                                            <?php endif; ?>
                                            <input type='hidden' name='DataID_02' id='DataID_02' value='<?= $item["MonthlyActivity_id"] ?>'>
                                        </td>
                                    </tr>
                                <?php
                                endforeach;
                            } else {
                                ?>
                                <tr>
                                    <td colspan="13" class="align-top text-center">
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
</div>

<div class="class_header_page_03">กิจกรรมส่วนสำนักงานพลังงานจังหวัด</div>
<div class="row">
    <div class="col-md-12">
        <div class="card card-gray">
            <div class="card-header">
                <h3 class="card-title">รายการข้อมูล</h3>
            </div>
            <div class="row">
                <div class="col-12">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr class="align-middle">
                                <th rowspan='2' class="align-middle text-center" width="5%">#</th>
                                <th rowspan='2' class="align-middle text-center">ชื่อแผนงบประมาณ</th>
                                <th rowspan='2' class="align-middle text-center">ชื่อกลุ่มงาน</th>
                                <th rowspan='2' class="align-middle text-center">ชื่อกิจกรรม</th>
                                <th rowspan='2' class="align-middle text-center">วงเงินงบประมาณที่ได้รับการจัดสรร (บาท)</th>
                                <th rowspan='2' class="align-middle text-center">ยอดเบิกจ่าย<br />ณ ปัจจุบัน (บาท)</th>
                                <th rowspan='2' class="align-middle text-center">เดือนล่าสุดที่รายงาน</th>
                                <th rowspan='2' class="align-middle text-center">ดูรายละเอียด</th>
                                <th rowspan='2' class="align-middle text-center">ตรวจสอบรายงาน</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $rowIndx = 1;
                            if (!empty($lstData03)) {
                                foreach ($lstData03 as $item) :
                                    $start_tor_cal = new DateTime($item["StartYearPlan"]);
                                    $finish_tor_cal = new DateTime($item["FinishYearPlan"]);
                                    $interval = $start_tor_cal->diff($finish_tor_cal);
                                    $numberOfDays = $interval->days;
                            ?>
                                    <tr>
                                        <td class="align-top text-center"><?= $rowIndx++; ?></td>
                                        <td class="align-top text-left"><?= $item["PlanName"] ?></td>
                                        <td class="align-top text-left"><?= $item["GroupUserName"] ?></td>
                                        <td class="align-top text-left"><?= $item["NameActivity"] ?></td>
                                        <td class="align-top text-right">
                                            <?php if (!empty($item["Budget02"])): ?>
                                                <?= number_format($item["Budget02"], 2); ?>
                                            <?php else: ?>
                                                -
                                            <?php endif; ?>
                                        </td>
                                        <td class="align-top text-right">
                                            <?php if (!empty($item["sum_budget"])): ?>
                                                <?= number_format($item["sum_budget"], 2); ?>
                                            <?php else: ?>
                                                -
                                            <?php endif; ?>
                                        </td>
                                        <td class="align-top text-center"><?= $item["MonthReportThai"] ?> <?= $item["YearReport"] ?></td>
                                        <td class="align-top text-center"><a id="btnView" class="btn btn-primary" onclick="window.open('<?php echo base_url(); ?>Report_01_activity_doeb/view/<?= $item["MonthlyActivity_id"] ?>', '_blank', 'width=1200,height=550,scrollbars=1');">ดูรายละเอียดข้อมูล</a></td>
                                        <td class="align-top text-center">
                                            <?php if ($item["ActiveStatusIns"] == 'Y'): ?>
                                                <font color='green'><b>ตรวจสอบข้อมูลเรียบร้อย</b></font>
                                            <?php else: ?>
                                                <a id="btnEdit" class="btn btn-danger" href="<?= $routeGroup ?>/edt/<?= $item["MonthlyActivity_id"] ?>"><i class="fas fa-edit"></i> แจ้งทบทวน</a>
                                                <a id="btnEdit" class="btn btn-success" href="<?= $routeGroup ?>/add/<?= $item["MonthlyActivity_id"] ?>"><i class="fas fa-edit"></i> รับทราบข้อมูล</a>
                                            <?php endif; ?>
                                            <input type='hidden' name='DataID_03' id='DataID_03' value='<?= $item["MonthlyActivity_id"] ?>'>
                                        </td>
                                    </tr>
                                <?php
                                endforeach;
                            } else {
                                ?>
                                <tr>
                                    <td colspan="13" class="align-top text-center">
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
</div>

<div class="row text-left">
    <table align="center" width='100%'>
        <tr>
            <td align='center'>
                <table class="table table-bordered" id="datatable1">
                    <tr class="bg_th_sub">
                        <th class="text-center">
                            <font color='white'>รับรองข้อมูล</font>
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
                            <font color='white'>อนุมัติข้อมูล</font>
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
<div class="form-row">
    <div class="col-sm-12 text-right">
        <input name="btnSave" id="btnSave" type="submit" class="btn btn-success" value="บันทึกข้อมูล">
        <input name="btnConfirm" id="btnConfirm" type="submit" class="btn btn-info" value="ยืนยันข้อมูล">
        <button type="reset" class="btn btn-secondary" value="reset" onclick="window.location='<?php echo base_url(); ?>/<?= $routeGroup ?>'"><i class="fas fa-reply"></i> กลับสู่หน้าหลัก</button>
        <br />
    </div>
</div>
<br /><br />
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<?= $this->endSection(); ?>

<?= $this->section("javascripts"); ?>
<script>
    $(document).ready(function() {
        // console.log("Document ready page Search");
        var tableDt = $('#tbSearch').DataTable({
            "paging": false,
            "destroy": true,
            "searching": false,
            "ordering": false,
            "processing": false,
            "serverSide": false,
            // "columns": colDt,
            "autoWidth": false,
            "order": [
                [0, 'asc']
            ],
            "responsive": true,
            "lengthChange": false,
            "bInfo": false,
            "bLengthMenu": false, // Hide page lengthMenu
        });
    });

    /*
    $('[name=data_search2]').daterangepicker({
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
    $(window).on("load", function() {
        // console.log("window load page Search");
    });
</script>
<?= $this->endSection(); ?>