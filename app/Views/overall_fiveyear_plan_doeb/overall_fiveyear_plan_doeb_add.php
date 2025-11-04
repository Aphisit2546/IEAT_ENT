<?= $this->extend('layouts/main') ?>

<?= $this->section("content"); ?>

<div class="class_header_page_02">
    <br />
    ข้อมูลภาพรวมโครงการ (ประกอบแผนปฏิบัติการ 5 ปี)
    <hr />
</div>
<div class="row">
    <form id="frm" class="form-horizontal" action="<?php echo base_url(); ?>/<?= $routeGroup ?>/<?= $action_page ?>" method="post">
        <input type="hidden" name="OverAllPlanFiveYear_id" id="OverAllPlanFiveYear_id" value="<?php echo $data['OverAllPlanFiveYear_id']; ?>" readonly />
        <?= csrf_field() ?>
        <div class="row text-left">
            <div class="col-md-12">
                <div class="form-group row">
                    <div class="col-3">
                        รหัสอ้างอิง
                        <input type="text" class='form-control' name="OverAllPlanFiveYearCode" id="OverAllPlanFiveYearCode" value="<?php echo $data['OverAllPlanFiveYearCode']; ?>" readonly />
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
                        แผน
                        <?php echo form_dropdown('OverAllPlan_id', $dropdown_masterOverAllPlan, $data["OverAllPlan_id"], "class='form form-control' id='OverAllPlan_id' onchange='GetAnnualTargetValueYearDetail();' "); ?>
                    </div>
                    <div class="col-2">
                        ปีที่จัดทำโครงการ
                        <?php echo form_dropdown('AnnualTargetValue_Year', $dropdown_AnnualTargetValue_Year, $data["AnnualTargetValue_Year"], "class='form form-control' id='AnnualTargetValue_Year' "); ?>
                    </div>
                </div>
            </div>
        </div>
        <!--
        <div class="row text-left">
            <div class="col-md-12">
                <div class="form-group row">
                    <div class="col-12">
                        ยุทธศาสตร์
                        <?php echo form_dropdown('RelatedStrategies_id', $dropdown_RelatedStrategies, $data["RelatedStrategies_id"], "class='form form-control' id='RelatedStrategies_id' "); ?>
                    </div>
                </div>
            </div>
        </div>
        -->
        <div class="row text-left">
            <div class="col-md-12">
                <div class="form-group row">
                    <div class="col-12">
                        แผนย่อย
                        <?php echo form_dropdown('StrategyRelateDetail_id', $dropdown_StrategyRelate, $data["StrategyRelateDetail_id"], "class='form form-control' id='StrategyRelateDetail_id' onchange='GetStrategyTarGetDetail();' "); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-left">
            <div class="col-md-12">
                <div class="form-group row">
                    <div class="col-12">
                        เป้าหมาย
                        <?php echo form_dropdown('StrategyTarGetDetail_id', $dropdown_StrategyTarGet, $data["StrategyTarGetDetail_id"], "class='form form-control' id='StrategyTarGetDetail_id' onchange='GetStrategyIndicatorDetail();' "); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-left">
            <div class="col-md-12">
                <div class="form-group row">
                    <div class="col-12">
                        ตัวชี้วัด
                        <?php echo form_dropdown('StrategyIndicatorDetail_id', $dropdown_StrategyIndicator, $data["StrategyIndicatorDetail_id"], "class='form form-control' id='StrategyIndicatorDetail_id' "); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-left">
            <div class="col-md-12">
                <div class="form-group row">
                    <div class="col-4">
                        ประเภทแผน
                        <?php echo form_dropdown('TypeBudget_id', $dropdown_master_plan_for_budgetplan, $data["TypeBudget_id"], "class='form form-control' id='TypeBudget_id' "); ?>
                    </div>
                    <div class="col-8">
                        ประเภทแหล่งเงินงบประมาณ
                        <?php echo form_dropdown('BudgetSourceType_id', $dropdown_SourceBudget, $data["BudgetSourceType_id"], "class='form form-control' id='BudgetSourceType_id' "); ?>
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
                            <input type="radio" name="TypeProjectFiveYearPlan" value="1" <?php if ($data['TypeProjectFiveYearPlan'] == '1') {
                                                                                                echo "checked";
                                                                                            }  ?> />
                            จบในโครงการ
                        </label>
                    </div>
                    <div class="col-3">
                        <label>
                            <input type="radio" name="TypeProjectFiveYearPlan" value="2" <?php if ($data['TypeProjectFiveYearPlan'] == '2') {
                                                                                                echo "checked";
                                                                                            }  ?>>
                            โครงการต่อเนื่อง (เป็นโครงการแรก)
                        </label>
                    </div>
                    <div class="col-3">
                        <label>
                            <input type="radio" name="TypeProjectFiveYearPlan" value="3" <?php if ($data['TypeProjectFiveYearPlan'] == '3') {
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
                        <input style="background-color:white;" data-provide="datepicker" data-date-language="th-th" type="text" class='form-control' name="StartFiveYearPlan" id="StartFiveYearPlan" value="<?php echo $data['StartFiveYearPlan']; ?>" autocomplete="off" />
                    </div>
                    <div class="col-3">
                        สิ้นสุด
                        <input style="background-color:white;" data-provide="datepicker" data-date-language="th-th" type="text" class='form-control' name="FinishFiveYearPlan" id="FinishFiveYearPlan" value="<?php echo $data['FinishFiveYearPlan']; ?>" autocomplete="off" />
                    </div>
                    <div class="col-6">
                        งบประมาณดำเนินโครงการ (บาท)
                        <input type="text" class='form-control' name="BudgetFiveYearPlan" id="BudgetFiveYearPlan" value="<?php echo $data['BudgetFiveYearPlan']; ?>" onkeyup="dokeyupMoney(this);" onchange="dokeyupMoney(this);" onkeypress="checknumberMoney()" required autocomplete="off" />
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-left">
            <div class="col-md-12">
                <div class="form-group row">
                    <div class="col-12">
                        ที่มาโครงการ/เหตุผลและความจำเป็น
                        <textarea name='ProjectSourceFiveYearPlan' rows='5' class='form-control'><?php echo $data['ProjectSourceFiveYearPlan']; ?></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-left">
            <div class="col-md-12">
                <div class="form-group row">
                    <div class="col-12">
                        วัตถุประสงค์โครงการ
                        <textarea name='ObjectiveFiveYearPlan' rows='5' class='form-control'><?php echo $data['ObjectiveFiveYearPlan']; ?></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-left">
            <div class="col-md-12">
                <div class="form-group row">
                    <div class="col-12">
                        รายละเอียดเพิ่มเติม
                        <textarea name='DetailFiveYearPlan' rows='5' class='form-control'><?php echo $data['DetailFiveYearPlan']; ?></textarea>
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
                            <input type="radio" name="StatusFiveYearPlan" value="Y" <?php if ($data['StatusFiveYearPlan'] == 'Y') {
                                                                                        echo "checked";
                                                                                    }  ?> />
                            ใช้งาน
                        </label>
                    </div>
                    <div class="col-2">
                        <label>
                            <input type="radio" name="StatusFiveYearPlan" value="N" <?php if ($data['StatusFiveYearPlan'] == 'N') {
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
                        <textarea name='RemarksFiveYearPlan' rows='5' class='form-control'><?php echo $data['RemarksFiveYearPlan']; ?></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-sm-12 text-right">
                <input name="btnSave" id="btnSave" type="submit" class="btn btn-info" value="บันทึกข้อมูล">
                <input name="btnConfirm" id="btnConfirm" type="submit" class="btn btn-success" value="ยืนยันข้อมูล">
                <button type="reset" class="btn btn-secondary" value="reset" onclick="window.location='<?php echo base_url(); ?>/<?= $routeGroup ?>'"><i class="fas fa-reply"></i> กลับสู่หน้าหลัก</button>

            </div>
        </div>
        <br />
    </form>
</div>

<?= $this->endSection(); ?>

<?= $this->section("javascripts"); ?>
<script>
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
        //alert(StrategyTarGetDetail_id);
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