<?= $this->extend('layouts/main') ?>
<!-- DataTables -->

<?= $this->section("content"); ?>
<div class="class_header_page_02">
    <br />
    รายงานสรุปผลการจัดทำ QR Code ผ่านระบบ
    <hr />
</div>
<div class="row">
    <form id="frm" class="form-horizontal" action="<?php echo base_url(); ?>/<?= $routeGroup ?>" method="post">
        <div class="row text-left">
            <div class="col-md-12">
                <div class="form-group row">
                    <div class="col-3">
                        ค้นหาวันที่เริ่มใช้ QR Code
                        <input data-provide="datepicker" data-date-language="th-th" type="text" class='form-control' name="StartYearPlan" id="StartYearPlan" value="<?php echo $data['StartYearPlan']; ?>" autocomplete="off" disabled />
                    </div>
                    <div class="col-2">
                        สิ้นสุด
                        <input data-provide="datepicker" data-date-language="th-th" type="text" class='form-control' name="FinishYearPlan" id="FinishYearPlan" value="<?php echo $data['FinishYearPlan']; ?>" autocomplete="off" disabled />
                    </div>
                    <div class="col-4">
                        ค้นหาชื่อหัวข้อ QR Code
                        <input type="text" class='form-control' name="FinishYearPlan" id="FinishYearPlan" value="<?php echo $data['FinishYearPlan']; ?>" autocomplete="off" />
                    </div>
                    <div class="col-3">
                        <br />
                        <button type="submit" class="btn btn-info" name='search_value' value="search_value"><i class="fas fa-search"></i> ค้นหาข้อมูล</button>
                        <button type="reset" class="btn btn-secondary" name='reset_value' value="reset"><i class="fas fa-reply"></i> ล้างข้อมูล</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-left">
            <div class="col-md-12">

            </div>
        </div>
        <div class="row text-right">
            <div class="col-12">
                <button type="submit" class="btn btn-success" name='search_excel' value="search_excel"> Excel</button>
                <button type="submit" class="btn btn-danger" name='search_pdf' value="search_pdf"> PDF</button>
                <button type="submit" class="btn btn-primary" name='search_doc' value="search_doc"> Doc</button>
                <button type="submit" class="btn btn-success" name='search_csv' value="search_csv"> CSV</button>
                <button type="submit" class="btn btn-secondary" name='search_json' value="search_json"> JSON</button>
            </div>
        </div>
    </form>
</div>
<hr />
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="row">
                <div class="col-12" id='content'>
                    <table class="table table-bordered table-hover" id='content_csv'>
                        <thead>
                            <tr class="align-middle">
                                <th colspan="6" class="align-middle text-left">รายงานสรุปผลการจัดทำ QR Code ผ่านระบบ</th>
                            </tr>
                            <tr class="align-middle">
                                <th class="align-middle text-center" width="5%">ลำดับ</th>
                                <th class="align-middle text-center">ชื่อรายการ QR Code</th>
                                <th class="align-middle text-center">วันที่เริ่มประกาศใช้งาน</th>
                                <th class="align-middle text-center">สถานะการใช้งานปัจจุบัน</th>
                                <th class="align-middle text-center">ผู้จัดทำ QR Code</th>
                                <th class="align-middle text-center">ประเภทข้อมูลใน QR Code</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $rowIndx = 1;
                            if (!empty($lstData)) {
                                foreach ($lstData as $item) :
                            ?>
                                    <tr>
                                        <td class="align-top text-center"><?= $rowIndx++; ?></td>
                                        <td class="align-top text-left"><?= $item["TypeHeadPlanName"]; ?></td>
                                        <td class="align-top text-left"><?= $item["name_th"]; ?></td>
                                        <td class="align-top text-left"><?= $item["name_en"]; ?></td>
                                        <td class="align-top text-center">
                                            <?php if ($item["ActiveStatus"] == 'Y'): ?>
                                                <font color='green'>ใช้งาน</font>
                                            <?php elseif ($item["ActiveStatus"] == 'N'): ?>
                                                <font color='red'>ไม่ใช้งาน</font>
                                            <?php else: ?>
                                                <font color='red'>-</font>
                                            <?php endif; ?>
                                        </td>
                                        <td class="align-top text-center"><?= $item["ModifyDate"]; ?></td>
                                        <td class="align-top text-center">
                                            <a id="btnEdit" class="btn btn-warning" href="<?= $routeGroup ?>/edt/<?= $item["PlanType_id"] ?>"><i class="fas fa-edit"></i> ปรับปรุงข้อมูล</a>
                                            <a id="btnDel" class="btn btn-danger" href="<?= $routeGroup ?>/del/<?= $item["PlanType_id"] ?>"><i class="fas fa-edit"></i> ลบ</a>
                                        </td>
                                    </tr>
                                <?php
                                endforeach;
                            } else {
                                ?>
                                <tr>
                                    <td colspan="16" class="align-top text-center">
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

<?php if ($export_pdf == 'Y'): ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
    <script>
        window.onload = function() {
            const element = document.getElementById("content");
            const opt = {
                margin: 10,
                filename: '<?php echo $filename; ?>.pdf',
                image: {
                    type: 'jpeg',
                    quality: 0.98
                },
                html2canvas: {
                    scale: 2
                },
                jsPDF: {
                    unit: 'mm',
                    format: 'a3',
                    orientation: 'landscape'
                }
            };
            html2pdf().set(opt).from(element).save();
        };
    </script>
<?php endif; ?>
<?php if ($export_excel == 'Y'): ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>
    <script>
        window.onload = function() {
            // ดึง element ของตาราง
            var table = document.getElementById("content");

            // แปลงตารางเป็น worksheet
            var wb = XLSX.utils.table_to_book(table, {
                sheet: "รายงาน"
            });

            // สร้างไฟล์ Excel และบันทึกเป็นชื่อที่ต้องการ
            XLSX.writeFile(wb, "<?php echo $filename; ?>.xlsx");
        };
    </script>

<?php endif; ?>
<?php if ($export_word == 'Y'): ?>
    <script>
        window.onload = function() {
            var content = document.getElementById("content").innerHTML;

            // ครอบ HTML สำหรับ Word
            var preHtml = "<html xmlns:o='urn:schemas-microsoft-com:office:office' " +
                "xmlns:w='urn:schemas-microsoft-com:office:word' " +
                "xmlns='http://www.w3.org/TR/REC-html40'><head><meta charset='utf-8'></head><body>";
            var postHtml = "</body></html>";
            var html = preHtml + content + postHtml;

            // สร้าง Blob และดาวน์โหลด
            var blob = new Blob(['\ufeff', html], {
                type: 'application/msword'
            });
            var url = URL.createObjectURL(blob);
            var link = document.createElement("a");
            link.href = url;
            link.download = "<?php echo $filename; ?>.doc";
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        };
    </script>
<?php endif; ?>
<?php if ($export_csv == 'Y'): ?>
    <script>
        // ฟังก์ชันแปลง Table → CSV
        function tableToCSV(tableId) {
            var csv = [];
            var rows = document.querySelectorAll("#" + tableId + " tr");

            for (var i = 0; i < rows.length; i++) {
                var row = [],
                    cols = rows[i].querySelectorAll("td, th");
                for (var j = 0; j < cols.length; j++) {
                    // escape double quotes
                    var text = cols[j].innerText.replace(/"/g, '""');
                    row.push('"' + text + '"');
                }
                csv.push(row.join(","));
            }
            return csv.join("\n");
        }

        window.onload = function() {
            var csvContent = tableToCSV("content_csv");

            // สร้างไฟล์ CSV
            /*
            var blob = new Blob([csvContent], {
                type: "text/csv;charset=utf-8;"
            });
            */
            var blob = new Blob(['\ufeff' + csvContent], {
                type: "text/csv;charset=utf-8;"
            });
            var url = URL.createObjectURL(blob);

            // trigger download
            var link = document.createElement("a");
            link.href = url;
            link.download = "<?php echo $filename; ?>.csv";
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        };
    </script>
<?php endif; ?>
<?= $this->endSection(); ?>