<?= $this->extend('layouts/main_for_view') ?>

<?= $this->section("content"); ?>

<div class="class_header_page_02">
    <br />
    แผนปฏิบัติงานรายเดือนประกอบการยื่นคำของบประมาณ
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
                        <font style="font-size: 20px;">ปีงบประมาณ</font>
                        <?php echo $data["FiscalYear"]; ?>
                    </div>
                </div>
            </div>
        </div>
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
                                <?php echo $data['month_' . $seq_row][$seq_var]['data_value']; ?>
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