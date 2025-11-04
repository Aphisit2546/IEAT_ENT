<?= $this->extend('layouts/main') ?>

<?= $this->section("content"); ?>

<div class="class_header_page_02">
    <br />
    จัดทำร่างคำของบประมาณ
    <hr />
</div>
<div class="row">
    <form id="frm" class="form-horizontal" action="<?php echo base_url(); ?>/<?= $routeGroup ?>/<?= $action_page ?>" method="post">
        <div class="row text-left">
            <div class="col-md-12">
                <div class="form-group row">
                    <div class="col-3">
                        รหัสอ้างอิง
                        <input type="text" class='form-control' name="DraftBudgetControlCode" id="DraftBudgetControlCode" value="<?php echo $data['DraftBudgetControlCode']; ?>" readonly />
                    </div>
                    <div class="col-3">
                        วันที่ปรับปรุงข้อมูลล่าสุด
                        <input type="text" class='form-control' name="ModifyDate" id="ModifyDate" value="<?php echo $data['ModifyDate']; ?>" readonly />
                    </div>
                </div>
            </div>
        </div>
        <?php if (empty($data['DraftBudgetControl_id'])): ?>
            <div class="row text-left">
                <div class="col-md-12">
                    <div class="form-group row">
                        <div class="col-12">
                            เลือกแผน
                            <?php echo form_dropdown('OverAllBudget_id', $dropdown_masterOverAllPlanOneYear, $data["OverAllBudget_id"], "class='form form-control' "); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-sm-12 text-right">
                    <input name="btnSave_continue" id="btnSave_continue" type="submit" class="btn btn-success" value="ยืนยันรายการ" onclick="javascript:return formCheck();">
                    <button type="reset" class="btn btn-secondary" value="reset" onclick="window.location='<?php echo base_url(); ?>/<?= $routeGroup ?>'"><i class="fas fa-reply"></i> กลับสู่หน้าหลัก</button>
                </div>
            </div>
        <?php endif; ?>
    </form>
    <?php if (!empty($data['DraftBudgetControl_id'])): ?>
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
    <?php endif; ?>
</div>
<hr />

<input type="hidden" name="DraftBudgetControl_id" id="DraftBudgetControl_id" value="<?php echo $data['DraftBudgetControl_id']; ?>" readonly />
<?= csrf_field() ?>
<?php if ($type_submonth == 'Y'): ?>
    <iframe id="myCrossOriginIframe" src="<?php echo base_url('draft_budget_control_doeb/edtsub2/' . $DraftBudgetControl_id . '.' . $DraftBudgetControlDetail_id . '.' . $CostReference . ''); ?>" frameborder="0"></iframe>
<?php else: ?>
    <?php if ($DraftBudgetControlDetail_id == '0'): ?>
        <iframe id="myCrossOriginIframe" src="<?php echo base_url('draft_budget_control_doeb/addsub/' . $DraftBudgetControl_id . ''); ?>" frameborder="0"></iframe>
    <?php else: ?>
        <iframe id="myCrossOriginIframe" src="<?php echo base_url('draft_budget_control_doeb/edtsub/' . $DraftBudgetControl_id . '.' . $DraftBudgetControlDetail_id . '.' . $CostReference . ''); ?>" frameborder="0"></iframe>
    <?php endif; ?>
<?php endif; ?>



<?= $this->endSection(); ?>

<?= $this->section("javascripts"); ?>
<script>
    <?php if ($DraftBudgetControlDetail_id == '0'): ?>
        window.addEventListener('message', function(event) {
            // ตรวจสอบ origin ของผู้ส่งข้อความเพื่อความปลอดภัย
            // เปลี่ยน 'https://another-domain.com' เป็นโดเมนจริงของ iframe
            if (event.origin !== '<?php echo base_url('draft_budget_control_doeb/addsub/' . $DraftBudgetControl_id . ''); ?>') {
                return;
            }

            if (event.data.type === 'iframeHeight') {
                const iframe = document.getElementById('myCrossOriginIframe');
                if (iframe) {
                    iframe.style.height = event.data.height + 'px';
                }
            }
        });

        // เมื่อ iframe โหลดเสร็จ, เราสามารถส่งข้อความไปบอกให้ iframe ส่งความสูงกลับมา
        // หรือ iframe อาจจะส่งความสูงมาเองเมื่อโหลดเสร็จ
        document.getElementById('myCrossOriginIframe').onload = function() {
            this.contentWindow.postMessage({
                type: 'getHeight'
            }, '<?php echo base_url('draft_budget_control_doeb/addsub/' . $DraftBudgetControl_id . ''); ?>');
        };
    <?php else: ?>
        window.addEventListener('message', function(event) {
            // ตรวจสอบ origin ของผู้ส่งข้อความเพื่อความปลอดภัย
            // เปลี่ยน 'https://another-domain.com' เป็นโดเมนจริงของ iframe
            if (event.origin !== '<?php echo base_url('draft_budget_control_doeb/edtsub/' . $DraftBudgetControl_id . '.' . $DraftBudgetControlDetail_id . ''); ?>') {
                return;
            }

            if (event.data.type === 'iframeHeight') {
                const iframe = document.getElementById('myCrossOriginIframe');
                if (iframe) {
                    iframe.style.height = event.data.height + 'px';
                }
            }
        });

        // เมื่อ iframe โหลดเสร็จ, เราสามารถส่งข้อความไปบอกให้ iframe ส่งความสูงกลับมา
        // หรือ iframe อาจจะส่งความสูงมาเองเมื่อโหลดเสร็จ
        document.getElementById('myCrossOriginIframe').onload = function() {
            this.contentWindow.postMessage({
                type: 'getHeight'
            }, '<?php echo base_url('draft_budget_control_doeb/edtsub/' . $DraftBudgetControl_id . '.' . $DraftBudgetControlDetail_id . ''); ?>');
        };

    <?php endif; ?>

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