<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="class_header_page_02">
    <br />
    &nbsp;&nbsp;&nbsp;&nbsp;<?= $subtitle ?>
    <hr />
</div>
<div class="row">
    <form id="frm" class="form-horizontal" action="<?php echo base_url(); ?>/<?= $routeGroup ?>" method="post">
        <div class="row text-left">
            <div class="col-md-12">
                <div class="form-group row">
                    <div class="col-1">
                        ค้นหาชื่อแผน
                    </div>
                    <div class="col-3">
                        <input type="text" name="data_search1" class="form form-control" value="<?php echo $data_search1; ?>">
                    </div>
                    <div class="col-1">
                        ค้นหารหัสอ้างอิง
                    </div>
                    <div class="col-3">
                        <input type="text" name="data_search2" class="form form-control" value="<?php echo $data_search2; ?>">
                    </div>
                    <div class="col-sm-4">
                        <button type="submit" class="btn btn-primary" name='search_value' value="search_value"><i class="fas fa-search"></i> ค้นหาข้อมูล</button>
                        <button type="reset" class="btn btn-secondary" name='reset_value' value="reset"><i class="fas fa-reply"></i> ล้างข้อมูล</button>
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
                        <input type="radio" name="data_search3" value="ALL" <?php if ($data_search3 == 'ALL') {
                                                                                echo "checked";
                                                                            }  ?>>
                        ทั้งหมด
                    </div>
                    <div class="col-1">
                        <input type="radio" name="data_search3" value="Y" <?php if ($data_search3 == 'Y') {
                                                                                echo "checked";
                                                                            }  ?>>
                        ใช้งาน
                    </div>
                    <div class="col-1">
                        <input type="radio" name="data_search3" value="N" <?php if ($data_search3 == 'N') {
                                                                                echo "checked";
                                                                            }  ?>>
                        ไม่ใช้งาน
                    </div>
                </div>
            </div>
        </div>

    </form>
</div>
<hr />

<div class="card">
    <div class="card-header bg-white">
        <div class="row">
            <div class="col text-orange h5"><?= $subtitle ?></div>
            <div class="col text-right">
                <a href="<?php echo base_url($routeGroup . '/' . "add") ?>" class="btn btn-success btn-sm"><i class="fas fa-plus-square"></i> เพิ่มข้อมูล</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered" id="dtTable" style="width:100%">
                <tr>
                    <th>ที่</th>
                    <th>รหัสอ้างอิง</th>
                    <th>หัวข้อ</th>
                    <th>ประเภทเนื้อหา</th>
                    <th>จัดทำเมื่อ</th>
                    <th>ประกาศใช้งานเมื่อ(API)</th>
                    <th>ปิดใช้งานเมื่อ(API)</th>
                    <th>จัดการ</th>
                </tr>

                <?php if ($user_data) : ?>
                    <?php foreach ($user_data as $key => $user) : ?>
                        <tr>
                            <td><?= ++$key ?? '' ?> </td>
                            <td><a href="<?= base_url($routeGroup . '/' . 'view' . '/' . $user['id'])  ?>" class=" btn btn-sm btn-link"><?= $user["ref_code"] ?? '' ?></a> </td>
                            <td><?= $user["title"]  ?? '' ?> </td>
                            <td><?= $user["type_file_name"] ?? '' ?> </td>
                            <td><?= $user["created_atTH"] ?? '' ?> </td>
                            <td><?= $user["start_dateTH"] ?? '' ?> </td>
                            <td><?= $user["end_dateTH"] ?? '' ?> </td>
                            <td>
                                <a href="javascript:void(0);" data-id="<?= $user['gen_qr_code'] ?>" data-logo="<?= $user['logo_id'] ?>" data-textqrcode="<?= $user['textqrcode'] ?>" data-sizeqr="<?= $user['sizeqr_id'] ?>" class=" btn btn-sm btn-warning downloadQrCode"><i class="fa fa-download"></i> ดาวน์โหลด </a>
                                <a id="btnDel" class="btn btn-sm btn-danger" href="<?= $routeGroup ?>/del/<?= $user['id'] ?>"><i class="fas fa-trash"></i> ลบข้อมูล</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </table>
        </div>
        <div>
            <?php

            if ($pagination_link) {
                $pagination_link->setPath($routeGroup);
                echo $pagination_link->links();
            }

            ?>

        </div>
    </div>
</div>

<script src="<?= base_url() ?>/assets/js/jquery-3.6.0.min.js"></script>
<script src="<?= base_url() ?>/assets/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>/assets/js/dataTables.bootstrap4.min.js"></script>
<link rel="stylesheet" href="<?= base_url() ?>/assets/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="<?= base_url() ?>/assets/css/jquery-ui.css">
<link rel="stylesheet" href="<?= base_url() ?>/assets/css/jquery-ui.theme.css">
<link rel="stylesheet" href="<?= base_url() ?>/assets/css/jquery-ui.structure.css">
<script>
    $(document).ready(function() {

        datatable = $('#dtTable').DataTable({
            "order": [],
            "columnDefs": [{
                "targets": [0, 1, 2, 3, 4, 5, 6],
                "orderable": false,
            }]
        });
        $('.downloadQrCode').on('click', function() {
            const id = $(this).data('id');
            const logo = $(this).data('logo');
            const text = $(this).data('textqrcode');
            const size = $(this).data('sizeqr');

            downloadQrCode(id, logo, text, size);
        })
    });


    function downloadQrCode(id, logo = null, text = null, size = null) {



        const url = "<?= base_url('qrcode/downloadQrCode') ?>"
        const data = {
            id: id,
            text: text,
            logo: logo,
            size: size
        }
        console.log(data);

        $.ajax({
            url: url,
            type: 'POST',
            data: data,
            success: function(response) {


                var a = document.createElement("a"); //Create <a>
                a.href = response; //Image Base64 Goes here
                a.download = "qr-code.png"; //File name Here
                a.click(); //Downloaded file
            }
        })
    }
</script>
<?= $this->endSection() ?>