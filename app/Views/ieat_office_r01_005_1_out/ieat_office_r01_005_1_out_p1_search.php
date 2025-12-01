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
    <a href="center_ieat_ent" style="color: #6007b3ff; font-size: 18px;"><b>คำขอ TAX</b></a>
    <b>&nbsp;&nbsp;/&nbsp;&nbsp;</b>
    <a href="ieat_ent_r01_005_1_out" style="color: #6007b3ff; font-size: 18px;"><b>รายงานการนำของออก วัตถุประสงค์ เพื่อการอื่นเป็นการชั่วคราวและการนำกลับ (IEAT-E-02-R-03)</b></a>
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
                            <span class="font_header"><b>รายงานการนำของออก วัตถุประสงค์ เพื่อการอื่นเป็นการชั่วคราวและการนำกลับ (IEAT-E-02-R-03)</b></span>
                        </div>
                        <div class="table-responsive div_header p-4">
                            <table class="table">
                                <tr>
                                    <td width='25%'>ค้นหาจากช่วงเวลาที่ส่งรายงาน</td>
                                    <td>
                                        <div class="col-xs-4" style="float: left;">
                                            วันที่&nbsp;<input name='start_date_search' id='datepicker-th-1' type="text" value="25/11/2568">
                                            &nbsp;&nbsp;ถึงวันที่&nbsp;&nbsp;
                                        </div>
                                        <div class="col-xs-4">
                                            <input name='finish_date_search' id='datepicker-th-2' type="text" value="25/11/2568">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>ค้นหาจากเลขที่รายงาน</td>
                                    <td>
                                        <div class="col-xs-4" style="float: left;">
                                            <input name='doc_code' id='doc_code' type="text" value="">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>ค้นหาจากรายชื่อผู้ประกอบการ</td>
                                    <td>
                                        <div class="col-xs-4" style="float: left;">
                                            <input name='doc_name' id='doc_name' type="text" value="" size="50">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>ค้นหาจากสถานะข้อมูล</td>
                                    <td>
                                        <div class="col-xs-4" style="float: left;">
                                            <select name='dropdown_status_report'>
                                                <option value='1' selected=selected>รอการดำเนินการ</option>
                                                <option value='2'>ตรวจสอบแล้ว</option>
                                                <option value='3'>ทั้งหมด</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                        <div class="col-xs-4"><button type="submit" name="Submit" id="Submit" class="btn btn-info" value="ค้นหา">ค้นหา</button></div>
                                    </td>
                                </tr>
                            </table>
                            <hr />
                            <table width="100%" border="0" align="center" cellpadding="5" cellspacing="1">
                                <tr class="info">
                                    <td align='left'>
                                        เลือก <input type="checkbox"> ที่ต้องการดำเนินการรับทราบรายงานแล้วคลิกปุ่มยืนยัน
                                        <input class="btn btn-success" type="submit" name="approve_data" id="approve_data" value="ยืนยันการตรวจสอบรายงาน" />
                                    </td>
                                </tr>
                            </table>
                            <table class="table">
                                <thead>
                                    <tr class="info">
                                        <td width="5%" align="center">เลือก</td>
                                        <td width="5%" align="center">ที่</td>
                                        <td align="center">ชื่อบริษัท</td>
                                        <td align="center">เลขที่รายงาน</td>
                                        <td align="center">วันที่ส่งรายงาน</td>
                                        <td align="center">สถานะรายงาน<br />(ล่าสุด)</td>
                                        <td align="center">ผู้ตรวจสอบรายงาน</td>
                                        <td align="center">วันที่และเวลาตรวจสอบรายงาน</td>
                                        <td align="center">ดูรายละเอียด</td>
                                        <td align="center">ตีกลับเอกสาร</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td align="center">
                                            <input type="checkbox" name="main_id[]" id="main_id[]" value="83789">
                                        </td>
                                        <td align="left"><span class="detail">1</span></td>
                                        <td align="left"><span class="detail">บริษัท เดลต้า อีเลคโทรนิคส์ (ประเทศไทย) จำกัด (มหาชน)</span></td>
                                        <td align="left"><span class="detail"><b>2-905-83789-2568</b></span></td>
                                        <td align="left"><span class="detail">25-11-2025 12:03:03</span></td>
                                        <td align="left"><span class="detail">
                                                <font style='color:orange;'><b>รอการดำเนินการ</b></font>
                                            </span></td>
                                        <td align="left"><span class="detail"> </span></td>
                                        <td align="left"><span class="detail"></span></td>
                                        <td align="center">
                                            <span class="detail"><a type='button'>คลิก</a></span>
                                        </td>
                                        <td align="center">
                                            <span class="detail"><a type='button'>เลือก</a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center">
                                            <input type="checkbox" name="main_id[]" id="main_id[]" value="83788">
                                        </td>
                                        <td align="left"><span class="detail">2</span></td>
                                        <td align="left"><span class="detail">บริษัท เดลต้า อีเลคโทรนิคส์ (ประเทศไทย) จำกัด (มหาชน)</span></td>
                                        <td align="left"><span class="detail"><b>2-905-83788-2568</b></span></td>
                                        <td align="left"><span class="detail">25-11-2025 12:02:19</span></td>
                                        <td align="left"><span class="detail">
                                                <font style='color:orange;'><b>รอการดำเนินการ</b></font>
                                            </span></td>
                                        <td align="left"><span class="detail"> </span></td>
                                        <td align="left"><span class="detail"></span></td>
                                        <td align="center">
                                            <span class="detail"><a type='button'>คลิก</a></span>
                                        </td>
                                        <td align="center">
                                            <span class="detail"><a type='button'>เลือก</a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center">
                                            <input type="checkbox" name="main_id[]" id="main_id[]" value="83787">
                                        </td>
                                        <td align="left"><span class="detail">3</span></td>
                                        <td align="left"><span class="detail">บริษัท เดลต้า อีเลคโทรนิคส์ (ประเทศไทย) จำกัด (มหาชน)</span></td>
                                        <td align="left"><span class="detail"><b>2-905-83787-2568</b></span></td>
                                        <td align="left"><span class="detail">25-11-2025 12:01:05</span></td>
                                        <td align="left"><span class="detail">
                                                <font style='color:orange;'><b>รอการดำเนินการ</b></font>
                                            </span></td>
                                        <td align="left"><span class="detail"> </span></td>
                                        <td align="left"><span class="detail"></span></td>
                                        <td align="center">
                                            <span class="detail"><a type='button'>คลิก</a></span>
                                        </td>
                                        <td align="center">
                                            <span class="detail"><a type='button'>เลือก</a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center">
                                            <input type="checkbox" name="main_id[]" id="main_id[]" value="83786">
                                        </td>
                                        <td align="left"><span class="detail">4</span></td>
                                        <td align="left"><span class="detail">บริษัท เดลต้า อีเลคโทรนิคส์ (ประเทศไทย) จำกัด (มหาชน)</span></td>
                                        <td align="left"><span class="detail"><b>2-905-83786-2568</b></span></td>
                                        <td align="left"><span class="detail">25-11-2025 11:59:05</span></td>
                                        <td align="left"><span class="detail">
                                                <font style='color:orange;'><b>รอการดำเนินการ</b></font>
                                            </span></td>
                                        <td align="left"><span class="detail"> </span></td>
                                        <td align="left"><span class="detail"></span></td>
                                        <td align="center">
                                            <span class="detail"><a type='button'>คลิก</a></span>
                                        </td>
                                        <td align="center">
                                            <span class="detail"><a type='button'>เลือก</a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center">
                                            <input type="checkbox" name="main_id[]" id="main_id[]" value="83785">
                                        </td>
                                        <td align="left"><span class="detail">5</span></td>
                                        <td align="left"><span class="detail">บริษัท เดลต้า อีเลคโทรนิคส์ (ประเทศไทย) จำกัด (มหาชน)</span></td>
                                        <td align="left"><span class="detail"><b>2-905-83785-2568</b></span></td>
                                        <td align="left"><span class="detail">25-11-2025 11:54:09</span></td>
                                        <td align="left"><span class="detail">
                                                <font style='color:orange;'><b>รอการดำเนินการ</b></font>
                                            </span></td>
                                        <td align="left"><span class="detail"> </span></td>
                                        <td align="left"><span class="detail"></span></td>
                                        <td align="center">
                                            <span class="detail"><a type='button'>คลิก</a></span>
                                        </td>
                                        <td align="center">
                                            <span class="detail"><a type='button'>เลือก</a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center">
                                            <input type="checkbox" name="main_id[]" id="main_id[]" value="83784">
                                        </td>
                                        <td align="left"><span class="detail">6</span></td>
                                        <td align="left"><span class="detail">บริษัท เดลต้า อีเลคโทรนิคส์ (ประเทศไทย) จำกัด (มหาชน)</span></td>
                                        <td align="left"><span class="detail"><b>2-905-83784-2568</b></span></td>
                                        <td align="left"><span class="detail">25-11-2025 11:52:31</span></td>
                                        <td align="left"><span class="detail">
                                                <font style='color:orange;'><b>รอการดำเนินการ</b></font>
                                            </span></td>
                                        <td align="left"><span class="detail"> </span></td>
                                        <td align="left"><span class="detail"></span></td>
                                        <td align="center">
                                            <span class="detail"><a type='button'>คลิก</a></span>
                                        </td>
                                        <td align="center">
                                            <span class="detail"><a type='button'>เลือก</a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center">
                                            <input type="checkbox" name="main_id[]" id="main_id[]" value="83783">
                                        </td>
                                        <td align="left"><span class="detail">7</span></td>
                                        <td align="left"><span class="detail">บริษัท เดลต้า อีเลคโทรนิคส์ (ประเทศไทย) จำกัด (มหาชน)</span></td>
                                        <td align="left"><span class="detail"><b>2-905-83783-2568</b></span></td>
                                        <td align="left"><span class="detail">25-11-2025 11:48:00</span></td>
                                        <td align="left"><span class="detail">
                                                <font style='color:orange;'><b>รอการดำเนินการ</b></font>
                                            </span></td>
                                        <td align="left"><span class="detail"> </span></td>
                                        <td align="left"><span class="detail"></span></td>
                                        <td align="center">
                                            <span class="detail"><a type='button'>คลิก</a></span>
                                        </td>
                                        <td align="center">
                                            <span class="detail"><a type='button'>เลือก</a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center">
                                            <input type="checkbox" name="main_id[]" id="main_id[]" value="83782">
                                        </td>
                                        <td align="left"><span class="detail">8</span></td>
                                        <td align="left"><span class="detail">บริษัท เดลต้า อีเลคโทรนิคส์ (ประเทศไทย) จำกัด (มหาชน)</span></td>
                                        <td align="left"><span class="detail"><b>2-905-83782-2568</b></span></td>
                                        <td align="left"><span class="detail">25-11-2025 11:45:52</span></td>
                                        <td align="left"><span class="detail">
                                                <font style='color:orange;'><b>รอการดำเนินการ</b></font>
                                            </span></td>
                                        <td align="left"><span class="detail"> </span></td>
                                        <td align="left"><span class="detail"></span></td>
                                        <td align="center">
                                            <span class="detail"><a type='button'>คลิก</a></span>
                                        </td>
                                        <td align="center">
                                            <span class="detail"><a type='button'>เลือก</a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center">
                                            <input type="checkbox" name="main_id[]" id="main_id[]" value="83781">
                                        </td>
                                        <td align="left"><span class="detail">9</span></td>
                                        <td align="left"><span class="detail">บริษัท มินซัน เอ็นเตอร์ไพรส์ (ประเทศไทย) จำกัด</span></td>
                                        <td align="left"><span class="detail"><b>2-905-83781-2568</b></span></td>
                                        <td align="left"><span class="detail">25-11-2025 11:20:45</span></td>
                                        <td align="left"><span class="detail">
                                                <font style='color:orange;'><b>รอการดำเนินการ</b></font>
                                            </span></td>
                                        <td align="left"><span class="detail"> </span></td>
                                        <td align="left"><span class="detail"></span></td>
                                        <td align="center">
                                            <span class="detail"><a type='button'>คลิก</a></span>
                                        </td>
                                        <td align="center">
                                            <span class="detail"><a type='button'>เลือก</a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center">
                                            <input type="checkbox" name="main_id[]" id="main_id[]" value="83780">
                                        </td>
                                        <td align="left"><span class="detail">10</span></td>
                                        <td align="left"><span class="detail">บริษัท มินซัน เอ็นเตอร์ไพรส์ (ประเทศไทย) จำกัด</span></td>
                                        <td align="left"><span class="detail"><b>2-905-83780-2568</b></span></td>
                                        <td align="left"><span class="detail">25-11-2025 11:18:09</span></td>
                                        <td align="left"><span class="detail">
                                                <font style='color:orange;'><b>รอการดำเนินการ</b></font>
                                            </span></td>
                                        <td align="left"><span class="detail"> </span></td>
                                        <td align="left"><span class="detail"></span></td>
                                        <td align="center">
                                            <span class="detail"><a type='button'>คลิก</a></span>
                                        </td>
                                        <td align="center">
                                            <span class="detail"><a type='button'>เลือก</a></span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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