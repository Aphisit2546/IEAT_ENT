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
    <a href="ieat_ent_r01_003_out" style="color: #6007b3ff; font-size: 18px;"><b>รายงานการนำของออก ประเภทตามช่วงเวลา (IEAT-E-02-R-01)</b></a>
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
                            <span class="font_header"><b>รายงานการนำของออก ประเภทตามช่วงเวลา (IEAT-E-02-R-01)</b></span>
                        </div>
                        <div class="table-responsive div_header p-4">
                            <table class="table">
                                <tr>
                                    <td width='25%'>ค้นหาจากช่วงเวลาที่ส่งรายงาน</td>
                                    <td>
                                        <div class="col-xs-4" style="float: left;">
                                            เดือน
                                            <select name='month_report'>
                                                <option value='01'>มกราคม</option>
                                                <option value='02'>กุมภาพันธ์</option>
                                                <option value='03'>มีนาคม</option>
                                                <option value='04'>เมษายน</option>
                                                <option value='05'>พฤษภาคม</option>
                                                <option value='06'>มิถุนายน</option>
                                                <option value='07'>กรกฎาคม</option>
                                                <option value='08'>สิงหาคม</option>
                                                <option value='09'>กันยายน</option>
                                                <option value='10' selected=selected>ตุลาคม</option>
                                                <option value='11'>พฤศจิกายน</option>
                                                <option value='12'>ธันวาคม</option>
                                            </select> ปี
                                            <select name='year_report'>
                                                <option value='2023'>2566</option>
                                                <option value='2024'>2567</option>
                                                <option value='2025' selected=selected>2568</option>
                                                <option value='2026'>2569</option>
                                                <option value='2027'>2570</option>
                                                <option value='2028'>2571</option>
                                            </select>
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
                                                <option value='1'>รอการดำเนินการ</option>
                                                <option value='2'>ตรวจสอบแล้ว</option>
                                                <option value='3' selected=selected>ทั้งหมด</option>
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
                                            -
                                        </td>
                                        <td align="left"><span class="detail">1</span></td>
                                        <td align="left"><span class="detail">บริษัท เวิรล์ด ควอลิตี้ จำกัด</span></td>
                                        <td align="left"><span class="detail"><b>12-901-09338-2568</b></span></td>
                                        <td align="left"><span class="detail">24-11-2025 15:48:55</span></td>
                                        <td align="left"><span class="detail">
                                                <font style='color:green;'><b>ตรวจสอบรายงานแล้ว</b></font>
                                            </span></td>
                                        <td align="left"><span class="detail">ทดสอบ ระบบ</span></td>
                                        <td align="left"><span class="detail">25-11-2025 09:12:42</span></td>
                                        <td align="center">
                                            <span class="detail"><a type='button'>คลิก</a></span>
                                        </td>
                                        <td align="center" valign="top">
                                            -
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center">
                                            -
                                        </td>
                                        <td align="left"><span class="detail">2</span></td>
                                        <td align="left"><span class="detail">บริษัท อีซูซุมอเตอร์ (ประเทศไทย) จำกัด</span></td>
                                        <td align="left"><span class="detail"><b>6-901-09337-2568</b></span></td>
                                        <td align="left"><span class="detail">21-11-2025 15:28:34</span></td>
                                        <td align="left"><span class="detail">
                                                <font style='color:green;'><b>ตรวจสอบรายงานแล้ว</b></font>
                                            </span></td>
                                        <td align="left"><span class="detail">ทดสอบ ระบบ</span></td>
                                        <td align="left"><span class="detail">25-11-2025 09:12:42</span></td>
                                        <td align="center">
                                            <span class="detail"><a type='button'>คลิก</a></span>
                                        </td>
                                        <td align="center" valign="top">
                                            -
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center">
                                            -
                                        </td>
                                        <td align="left"><span class="detail">3</span></td>
                                        <td align="left"><span class="detail">บริษัท ดีที ไวริ่ง ซิสเต็มส์ (ไทยแลนด์) จำกัด</span></td>
                                        <td align="left"><span class="detail"><b>8-901-09335-2568</b></span></td>
                                        <td align="left"><span class="detail">20-11-2025 17:15:40</span></td>
                                        <td align="left"><span class="detail">
                                                <font style='color:green;'><b>ตรวจสอบรายงานแล้ว</b></font>
                                            </span></td>
                                        <td align="left"><span class="detail">ทดสอบ ระบบ</span></td>
                                        <td align="left"><span class="detail">21-11-2025 10:32:34</span></td>
                                        <td align="center">
                                            <span class="detail"><a type='button'>คลิก</a></span>
                                        </td>
                                        <td align="center" valign="top">
                                            -
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center">
                                            -
                                        </td>
                                        <td align="left"><span class="detail">4</span></td>
                                        <td align="left"><span class="detail">บริษัท ซิกเนเจอร์ อิมเพ็ค จำกัด</span></td>
                                        <td align="left"><span class="detail"><b>16-901-09334-2568</b></span></td>
                                        <td align="left"><span class="detail">20-11-2025 16:48:32</span></td>
                                        <td align="left"><span class="detail">
                                                <font style='color:green;'><b>ตรวจสอบรายงานแล้ว</b></font>
                                            </span></td>
                                        <td align="left"><span class="detail">ทดสอบ ระบบ</span></td>
                                        <td align="left"><span class="detail">21-11-2025 10:32:34</span></td>
                                        <td align="center">
                                            <span class="detail"><a type='button'>คลิก</a></span>
                                        </td>
                                        <td align="center" valign="top">
                                            -
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center">
                                            -
                                        </td>
                                        <td align="left"><span class="detail">5</span></td>
                                        <td align="left"><span class="detail">บริษัท คิมบอล อิเล็คทรอนิคส์ (ประเทศไทย) จำกัด</span></td>
                                        <td align="left"><span class="detail"><b>6-901-09332-2568</b></span></td>
                                        <td align="left"><span class="detail">20-11-2025 09:33:24</span></td>
                                        <td align="left"><span class="detail">
                                                <font style='color:green;'><b>ตรวจสอบรายงานแล้ว</b></font>
                                            </span></td>
                                        <td align="left"><span class="detail">ทดสอบ ระบบ</span></td>
                                        <td align="left"><span class="detail">21-11-2025 10:32:34</span></td>
                                        <td align="center">
                                            <span class="detail"><a type='button'>คลิก</a></span>
                                        </td>
                                        <td align="center" valign="top">
                                            -
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center">
                                            -
                                        </td>
                                        <td align="left"><span class="detail">6</span></td>
                                        <td align="left"><span class="detail">บริษัท ซี. เอส. ที. เอเซีย แปซิฟิค จำกัด</span></td>
                                        <td align="left"><span class="detail"><b>16-901-09331-2568</b></span></td>
                                        <td align="left"><span class="detail">19-11-2025 16:09:30</span></td>
                                        <td align="left"><span class="detail">
                                                <font style='color:green;'><b>ตรวจสอบรายงานแล้ว</b></font>
                                            </span></td>
                                        <td align="left"><span class="detail">ทดสอบ ระบบ</span></td>
                                        <td align="left"><span class="detail">20-11-2025 09:00:03</span></td>
                                        <td align="center">
                                            <span class="detail"><a type='button'>คลิก</a></span>
                                        </td>
                                        <td align="center" valign="top">
                                            -
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center">
                                            -
                                        </td>
                                        <td align="left"><span class="detail">7</span></td>
                                        <td align="left"><span class="detail">บริษัท คาซ่า จิวเวลส์ จำกัด</span></td>
                                        <td align="left"><span class="detail"><b>16-901-09330-2568</b></span></td>
                                        <td align="left"><span class="detail">19-11-2025 14:20:20</span></td>
                                        <td align="left"><span class="detail">
                                                <font style='color:green;'><b>ตรวจสอบรายงานแล้ว</b></font>
                                            </span></td>
                                        <td align="left"><span class="detail">ทดสอบ ระบบ</span></td>
                                        <td align="left"><span class="detail">20-11-2025 09:00:03</span></td>
                                        <td align="center">
                                            <span class="detail"><a type='button'>คลิก</a></span>
                                        </td>
                                        <td align="center" valign="top">
                                            -
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center">
                                            -
                                        </td>
                                        <td align="left"><span class="detail">8</span></td>
                                        <td align="left"><span class="detail">บริษัท โกลบอล อาร์เมอร์ (ประเทศไทย) จำกัด</span></td>
                                        <td align="left"><span class="detail"><b>6-901-09310-2568</b></span></td>
                                        <td align="left"><span class="detail">18-11-2025 17:12:20</span></td>
                                        <td align="left"><span class="detail">
                                                <font style='color:green;'><b>ตรวจสอบรายงานแล้ว</b></font>
                                            </span></td>
                                        <td align="left"><span class="detail">ทดสอบ ระบบ</span></td>
                                        <td align="left"><span class="detail">20-11-2025 09:00:03</span></td>
                                        <td align="center">
                                            <span class="detail"><a type='button'>คลิก</a></span>
                                        </td>
                                        <td align="center" valign="top">
                                            -
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center">
                                            -
                                        </td>
                                        <td align="left"><span class="detail">9</span></td>
                                        <td align="left"><span class="detail">บริษัท อาร์เอ็มเอ ออโตโมทีฟ จำกัด</span></td>
                                        <td align="left"><span class="detail"><b>6-901-09309-2568</b></span></td>
                                        <td align="left"><span class="detail">18-11-2025 17:10:16</span></td>
                                        <td align="left"><span class="detail">
                                                <font style='color:green;'><b>ตรวจสอบรายงานแล้ว</b></font>
                                            </span></td>
                                        <td align="left"><span class="detail">ทดสอบ ระบบ</span></td>
                                        <td align="left"><span class="detail">20-11-2025 09:00:03</span></td>
                                        <td align="center">
                                            <span class="detail"><a type='button'>คลิก</a></span>
                                        </td>
                                        <td align="center" valign="top">
                                            -
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center">
                                            -
                                        </td>
                                        <td align="left"><span class="detail">10</span></td>
                                        <td align="left"><span class="detail">บริษัท ซิเลซติกา (ประเทศไทย) จำกัด</span></td>
                                        <td align="left"><span class="detail"><b>6-901-09308-2568</b></span></td>
                                        <td align="left"><span class="detail">18-11-2025 15:35:29</span></td>
                                        <td align="left"><span class="detail">
                                                <font style='color:green;'><b>ตรวจสอบรายงานแล้ว</b></font>
                                            </span></td>
                                        <td align="left"><span class="detail">ทดสอบ ระบบ</span></td>
                                        <td align="left"><span class="detail">20-11-2025 09:00:03</span></td>
                                        <td align="center">
                                            <span class="detail"><a type='button'>คลิก</a></span>
                                        </td>
                                        <td align="center" valign="top">
                                            -
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