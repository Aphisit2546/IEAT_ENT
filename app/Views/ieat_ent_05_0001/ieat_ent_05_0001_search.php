<?= $this->extend("layout/login-layout"); ?>
<!-- DataTables -->

<?= $this->section("content"); ?>
<!--
<div class="class_header_page_02">
    <button onclick="window.location.href='center_ieat_ent'" style="background-color: #ff0000ff; color:aliceblue;">กลับสู่หน้าหลัก</button>
</div>
<hr />
-->
<div class="class_header_page_02">
    <a style="color: #6007b3ff; font-size: 18px;"><b>แผงควบคุมหลัก</b></a>
    <b>&nbsp;&nbsp;/&nbsp;&nbsp;</b>
    <a href="center_ieat_ent" style="color: #6007b3ff; font-size: 18px;"><b> คำขอ NON-TAX</b></a>
    <b>&nbsp;&nbsp;/&nbsp;&nbsp;</b>
    <a href="ieat_ent_t01_009" style="color: #6007b3ff; font-size: 18px;"><b>โปรแกรมปรับปรุงฐานข้อมูล ช่าง และครอบครัว ให้เป็นปัจจุบัน</b></a>
</div>
<br />
<div class="class_header_page_02">
    <font style="color: #000000ff; font-size: 18px;"><b>โปรแกรมปรับปรุงฐานข้อมูล ช่าง และครอบครัว ให้เป็นปัจจุบัน</b></font>
</div>
<br /><br />
<div class="col-md-12">
    <div class="card">

        <div class="card-body">
            <div class="tab-content">
                <div class="active tab-pane" id="tab1">
                    <!-- Table -->
                    <div class="card p-4">
                        <div class="card-header">
                            <span class="font_header"><b>ข้อมูลช่าง / ครอบครัว</b></span>
                        </div>
                        <div class="table-responsive div_header p-4">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="table-detail-right col-xs-4 col-sm-4 col-md-4 col-lg-4">คำนำหน้า :</td>
                                        <td class="col-xs-8 col-sm-8 col-md-8 col-lg-8" style="border-right:none;">
                                            <select name="d016" class="form-control">
                                                <option value='-'>---เลือก---</option>
                                                <option value='MR.' selected>MR.</option>
                                                <option value='MRS.'>MRS.</option>
                                                <option value='MS.'>MS.</option>
                                            </select>
                                            <input type='hidden' name='d016_old' value='MR.'>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-right col-xs-4 col-sm-4 col-md-4 col-lg-4">ชื่อ-ชื่อกลาง-ชื่อสกุล :</td>
                                        <td class="col-xs-8 col-sm-8 col-md-8 col-lg-8" style="border-right:none;">
                                            TEST,&nbsp;&nbsp;TEST </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-right col-xs-4 col-sm-4 col-md-4 col-lg-4">เลขที่หนังสือเดินทาง :</td>
                                        <td class="col-xs-8 col-sm-8 col-md-8 col-lg-8" style="border-right:none;">
                                            <input type='text' name='d018' id='d018' size='30' value='EJ3755786' />
                                            <input type='hidden' name='d018_old' value='EJ3755786'>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-right col-xs-4 col-sm-4 col-md-4 col-lg-4">วันที่หนังสือเดินทางหมดอายุ :</td>
                                        <td class="col-xs-8 col-sm-8 col-md-8 col-lg-8" style="border-right:none;">
                                            <input type='text' name='d018_1' id='d018_1' value='26/08/2030' size='10' readonly />
                                            <input type='hidden' name='d018_1_old' value='26/08/2030'>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-right col-xs-4 col-sm-4 col-md-4 col-lg-4">วัน/เดือน/ปี เกิด :</td>
                                        <td class="col-xs-8 col-sm-8 col-md-8 col-lg-8" style="border-right:none;">
                                            <input type='text' name='d020' id='d020' value='28/02/1968' size='10' readonly />
                                            <input type='hidden' name='d020_old' value='28/02/1968'>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-right col-xs-4 col-sm-4 col-md-4 col-lg-4">วุฒิการศึกษา :</td>
                                        <td class="col-xs-8 col-sm-8 col-md-8 col-lg-8" style="border-right:none;">
                                            <input type='text' name='d021' class='form-control' value='BACHELOR OF FORGING TECHNOLOGY AND EQUIPMENT' />
                                            <input type='hidden' name='d021_old' value='BACHELOR OF FORGING TECHNOLOGY AND EQUIPMENT'>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-right col-xs-4 col-sm-4 col-md-4 col-lg-4">ตำแหน่ง :</td>
                                        <td class="col-xs-8 col-sm-8 col-md-8 col-lg-8" style="border-right:none;">
                                            MANAGING DIRECTOR </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-right col-xs-4 col-sm-4 col-md-4 col-lg-4">Vaild Until :</td>
                                        <td class="col-xs-8 col-sm-8 col-md-8 col-lg-8" style="border-right:none;">
                                            26/10/2027 </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-right col-xs-4 col-sm-4 col-md-4 col-lg-4">เลขที่ใบอนุญาตทำงาน :</td>
                                        <td class="col-xs-8 col-sm-8 col-md-8 col-lg-8" style="border-right:none;">
                                            <input type='text' name='work_permit' id='work_permit' size='30' value='' />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-detail-right col-xs-4 col-sm-4 col-md-4 col-lg-4">วันที่ออกใบอนุญาตทำงาน :</td>
                                        <td class="col-xs-8 col-sm-8 col-md-8 col-lg-8" style="border-right:none;">
                                            <input type='text' name='date_work_permit' id='date_work_permit' size='10' value='' readonly />
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- /.tab-pane -->
                <div class="ieat-action-bar">
                    <div class="ieat-action-group">
                        <button type="button" class="ieat-btn ieat-btn--cancel" id="btnCancel">
                            <i class="fas fa-arrow-left"></i>
                            <span>ยกเลิกและกลับสู่หน้าหลัก</span>
                        </button>

                        <button type="button" class="ieat-btn ieat-btn--reset" id="btnReset">
                            <i class="fas fa-undo-alt"></i>
                            <span>ล้างข้อมูล</span>
                        </button>

                        <button type="button" class="ieat-btn ieat-btn--save" id="btnSaveDraft">
                            <i class="fas fa-save"></i>
                            <span>บันทึกการกรอกข้อมูล</span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- /.tab-content -->
        </div><!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>


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
<script>
    $(document).ready(function() {

        $("#add_operation_type_view_01").click(function() {
            $("#show_02").hide("slide");
            $("#show_01").show("slide");
        });

        $("#operation_type_modify_view_02").click(function() {
            $("#show_02").show("slide");
            $("#show_01").hide("slide");
        });

        $("#whole_land_return_return_id_view").click(function() {
            $("#show_102").hide("slide");
            $("#show_101").show("slide");
            $("#show_103").hide("slide");
        });

        $("#partial_land_return_id_view").click(function() {
            $("#show_102").show("slide");
            $("#show_101").hide("slide");
            $("#show_103").hide("slide");
        });

        $("#all_land_return_id_view").click(function() {
            $("#show_102").hide("slide");
            $("#show_101").hide("slide");
            $("#show_103").show("slide");
        });

        $("#out_of_business_type_view_1").click(function() {
            $("#show_107").show("slide");
            $("#show_207").hide("slide");
        });

        $("#out_of_business_type_view_2").click(function() {
            $("#show_107").hide("slide");
            $("#show_207").show("slide");
        });

        $("#land_transfer_type_view_1").click(function() {
            $("#show_111").show("slide");
            $("#show_211").hide("slide");
            $("#show_311").hide("slide");
        });

        $("#land_transfer_type_view_2").click(function() {
            $("#show_111").hide("slide");
            $("#show_211").show("slide");
            $("#show_311").hide("slide");
        });

        $("#land_transfer_type_view_3").click(function() {
            $("#show_111").hide("slide");
            $("#show_211").hide("slide");
            $("#show_311").show("slide");
        });

    });
</script>
<?= $this->endSection(); ?>