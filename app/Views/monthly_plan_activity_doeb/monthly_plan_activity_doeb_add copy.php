<?= $this->extend('layouts/main') ?>

<?= $this->section("content"); ?>

<div class="class_header_page_02">
    <br />
    จัดทำแผนปฏิบัติงานรายเดือนประกอบการยื่นคำของบประมาณ
    <hr />
</div>
<div class="row">
    <form id="frm" class="form-horizontal" action="<?php echo base_url(); ?>/<?= $routeGroup ?>/<?= $action_page ?>" method="post">
        <input type="hidden" name="MonthlyPlanActivity_Id" id="MonthlyPlanActivity_Id" value="<?php echo $data['MonthlyPlanActivity_Id']; ?>" readonly />
        <?= csrf_field() ?>
        <div class="row text-left">
            <div class="col-md-12">
                <div class="form-group row">
                    <div class="col-12">
                        <font style="font-size: 20px;">เลือกปีงบประมาณ</font>
                        <?php echo form_dropdown('FiscalYear', $dropdown_year_thai, $data["FiscalYear"], "class='form form-control' id='FiscalYear' "); ?>
                    </div>
                </div>
            </div>
        </div>
        <table class="table table-bordered table-hover">
            <thead>
                <tr class="bg_th">
                    <th class="align-middle text-center" width='40%'>
                        <font color='white'>รายการปฏิบัติงาน</font>
                    </th>
                    <th class="align-middle text-center" width='10%'>
                        <font color='white'>จำนวน</font>
                    </th>
                    <th class="align-middle text-center" width='20%'>
                        <font color='white'>หน่วยนับ</font>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php $seq_row_detail = 1; ?>
                <?php $seq_row = 1; ?>
                <?php foreach ($monththaishow as $monththaishow): ?>
                    <tr class="parent-row" data-toggle="row-<?php echo $seq_row; ?>">
                        <td colspan="3" class="align-top text-left">
                            <i class="fas fa-minus-circle"></i>
                            &nbsp;&nbsp;&nbsp;
                            <font color='white'><?php echo $monththaishow; ?></font>
                        </td>
                    </tr>
                    <?php $seq_var = 0; ?>
                    <?php foreach ($lstData_mapping as $lstData_mapping_result): ?>
                        <tr class="child-row" data-target="row-<?php echo $seq_row; ?>">
                            <td class="align-top text-left"><?php echo $lstData_mapping_result['name']; ?></td>
                            <td class="align-top text-center"><input class="form-control" type='text' name='<?php echo $seq_row; ?>_<?php echo $lstData_mapping_result['variable_name']; ?>' id='<?php echo $seq_row; ?>_<?php echo $lstData_mapping_result['variable_name']; ?>' value='<?php echo $data['month_' . $seq_row][$seq_var]['data_value']; ?>' " onkeyup=" dokeyupMoney(this);" onchange="dokeyupMoney(this);" onkeypress="checknumberMoney()" oninput="updateColumn3(this)"></td>
                            <td class="align-top text-center">
                                <input type="hidden" name="<?php echo $seq_row_detail; ?>_MonthlyPlanActivityDetail_Id" id="<?php echo $seq_row_detail; ?>_MonthlyPlanActivityDetail_Id" value="<?php echo $data['month_' . $seq_row][$seq_var]['MonthlyPlanActivityDetail_Id']; ?>" readonly />
                                <?php echo $lstData_mapping_result['unit_name']; ?>
                            </td>
                        </tr>
                        <?php $seq_row_detail++; ?>
                        <?php $seq_var++; ?>
                    <?php endforeach; ?>
                    <?php $seq_row++; ?>
                <?php endforeach; ?>

            </tbody>
        </table>
        <div class="row text-left">
            <div class="col-md-12">
                <div class="form-group row">
                    <div class="col-12">
                        หมายเหตุ
                        <textarea name='Remarks' rows='5' class='form-control'><?php echo $data['Remarks']; ?></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-sm-12 text-right">
                <input name="btnSave" id="btnSave" type="submit" class="btn btn-success" value="บันทึกข้อมูล" onclick="javascript:return formCheck();">
                <input name="btnSave_Confirm" id="btnSave_Confirm" type="submit" class="btn btn-info" value="ยืนยันข้อมูล" onclick="javascript:return formCheck();">
                <button type="reset" class="btn btn-secondary" value="reset" onclick="window.location='<?php echo base_url(); ?>/<?= $routeGroup ?>'"><i class="fas fa-reply"></i> กลับสู่หน้าหลัก</button>
            </div>
        </div>
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
    /*
    document.addEventListener('DOMContentLoaded', function() {
        const parentRows = document.querySelectorAll('.parent-row');

        parentRows.forEach(row => {
            row.addEventListener('click', function() {
                const targetId = this.getAttribute('data-toggle');
                const childRows = document.querySelectorAll(`.child-row[data-target="${targetId}"]`);
                const icon = this.querySelector('i');

                // สลับการแสดงผลของแถวลูก
                childRows.forEach(childRow => {
                    if (childRow.style.display === 'none' || childRow.style.display === '') {
                        childRow.style.display = 'table-row';
                    } else {
                        childRow.style.display = 'none';
                    }
                });

                // สลับไอคอนบวก/ลบ
                if (icon.classList.contains('fa-plus-circle')) {
                    icon.classList.remove('fa-plus-circle');
                    icon.classList.add('fa-minus-circle');
                } else {
                    icon.classList.remove('fa-minus-circle');
                    icon.classList.add('fa-plus-circle');
                }
            });
        });
    });
    */
    document.addEventListener('DOMContentLoaded', function() {
        const parentRows = document.querySelectorAll('.parent-row');

        parentRows.forEach(row => {
            row.addEventListener('click', function() {
                const targetId = this.getAttribute('data-toggle');
                const childRows = document.querySelectorAll(`.child-row[data-target="${targetId}"]`);
                const icon = this.querySelector('i');

                // ตรวจสอบสถานะการแสดงผลของแถวลูก
                // ถ้าแถวลูกแสดงอยู่ (style.display ไม่ใช่ 'none') ให้ซ่อนแถวลูก
                if (childRows[0].style.display !== 'none') {
                    childRows.forEach(childRow => {
                        childRow.style.display = 'none';
                    });
                    // เปลี่ยนไอคอนเป็นเครื่องหมายบวก (ยุบ)
                    icon.classList.remove('fa-minus-circle');
                    icon.classList.add('fa-plus-circle');
                }
                // ถ้าแถวลูกถูกซ่อนอยู่ ให้แสดงแถวลูก
                else {
                    childRows.forEach(childRow => {
                        childRow.style.display = 'table-row';
                    });
                    // เปลี่ยนไอคอนเป็นเครื่องหมายลบ (ขยาย)
                    icon.classList.remove('fa-plus-circle');
                    icon.classList.add('fa-minus-circle');
                }
            });
        });
    });

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

        var objDDL2_1 = $("[name=StrategyRelateDetail_id]");
        objDDL2_1.empty();
        objDDL2_1.append("<option value='' >-- เลือกแผนย่อย --</option>");

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

        var jqxhr2_1 = $.get("<?php echo base_url(); ?>Ajax/StrategyRelateDetail_listApprove/" + OverAllPlan_id)

            .done(function(response, jqxhr2_1) {
                if (!(response == null || response == false)) {
                    var objData2_1 = response;
                    objData2_1.forEach(function(item, index) {
                        objDDL2_1.append("<option value='" + item.StrategyRelateDetail_id + "' >แผนย่อย=" + item.ItemL1 + "." + item.ItemL2 + "." + item.ItemL3 + " " + item.Name + "</option>");
                    });
                    // initddlDistrictID();
                } else {

                }
            });

        jqxhr2_1.fail(function(response) {
                // alert( "error" );
                console.log(response);
            })
            .always(function() {
                // initddlDistrictID();
            });

    }

    function GetStrategyTarGetDetail() {
        var StrategyRelateDetail_id = $("[name=StrategyRelateDetail_id]  option:selected").val();
        var objDDL = $("[name=StrategyTarGetDetail_id]");
        objDDL.empty();
        objDDL.append("<option value='' >-- เลือกเป้าหมาย --</option>");

        var objDDL4 = $("[name=StrategyIndicatorDetail_id]");
        objDDL4.empty();
        objDDL4.append("<option value='' >-- เลือกตัวชี้วัด --</option>");
        //alert(StrategyRelateDetail_id);
        if (StrategyRelateDetail_id == "") return;

        var jqxhr = $.get("<?php echo base_url(); ?>Ajax/StrategyTarGetDetail_list/" + StrategyRelateDetail_id)

            .done(function(response, jqxhr) {
                if (!(response == null || response == false)) {
                    var objData = response;
                    objData.forEach(function(item, index) {
                        objDDL.append("<option value='" + item.StrategyTarGetDetail_id + "' >เป้าหมาย=" + item.ItemL1 + "." + item.ItemL2 + "." + item.ItemL3 + " " + item.Name + "</option>");
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