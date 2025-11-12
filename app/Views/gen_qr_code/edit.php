<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="card">
    <div class="card-header bg-white">
        <div class="text-orange h5"><?= $subtitle ?></div>
    </div>
    <div class="card-body">
        <form method="post" action="<?= base_url($routeGroup . '/' . 'update')  ?>" enctype="multipart/form-data">
            <input type="hidden" name="hid" value="<?= $user_data['id'] ?>">
            <div class="form-group ">
                <label>รหัสอ้างอิง</label>
                <input type="text" name="txtref_code" value="<?= set_value('txtref_code', $user_data['ref_code']) ?>" class="form-control col-12 col-md-6 col-lg-4" disabled />
                <?php
                if ($validation->getError('txtref_code')) {
                    echo '<div class="alert alert-danger mt-2">' . $validation->getError('txtref_code') . '</div>';
                }
                ?>
            </div>

            
            <div class="form-group">
                <label>หัวข้ออ้างอิง</label>
                <input type="text" name="txttitle" value="<?= set_value('txttitle', $user_data['title']  ?? '') ?>" class="form-control" disabled />
                <?php
                if ($validation->getError('txttitle')) {
                    echo "
                            <div class='alert alert-danger mt-2'>
                            " . $validation->getError('txttitle') . "
                            </div>
                            ";
                }
                ?>
            </div>

            <div class="form-group">
                <label>คำอธิบายเพิ่มเติ่ม</label>
                <textarea class="form-control" name="txtmake" disabled><?= set_value('txtmake', $user_data['make'] ?? '') ?></textarea>
                <?php

                if ($validation->getError('txtmake')) {
                    echo '<div class="alert alert-danger mt-2">
                            ' . $validation->getError("txtmake") . '
                            </div>';
                }

                ?>
            </div>
            <div class="row form-group">
                <div class="col-12 col-md-6">
                    <label>ประเภทข้อมูล</label>
                    <select name="rdotype" id="type" class="form-control" disabled>
                        <option value="">เลือก</option>
                        <?php foreach ($typeFile as $key => $value) : ?>
                            <option value="<?= $value['id'] ?>" <?= set_value('rdotype', $user_data['id_type']) == $value['id'] ? 'selected' : ''  ?>><?= $value['type_file_name'] ?></option>
                        <?php endforeach; ?>
                    </select>

                    <?php

                    if ($validation->getError('rdotype')) {
                        echo '<div class="alert alert-danger mt-2">
                            ' . $validation->getError("rdotype") . '
                            </div>';
                    }

                    ?>
                </div>

                <div class="col-12 col-md-3">
                    <label>เริ่มใช้งานได้ตั้งแต่วันที่</label>
                    <input type="text" name="txtstartdate" class="form-control datepicker" value="<?= set_value('txtstartdate', $user_data['start_date']) ?>" disabled>
                    <?php

                    if ($validation->getError('txtstartdate')) {
                        echo '<div class="alert alert-danger mt-2">
                            ' . $validation->getError("txtstartdate") . '
                            </div>';
                    }

                    ?>
                </div>
                <div class="col-12 col-md-3">
                    <label>ถึงวันที่</label>
                    <input type="text" name="txtenddate" class="form-control datepicker" value="<?= set_value('txtenddate', $user_data['end_date']) ?>" disabled>

                    <?php

                    if ($validation->getError('txtenddate')) {
                        echo '<div class="alert alert-danger mt-2">
                            ' . $validation->getError("txtenddate") . '
                            </div>';
                    }

                    ?>
                </div>
            </div>


            <div class="row form-group">
                <div class="col-12 col-md-4 text-center">
                    <label>ตัวอย่าง QR Code</label>
                    <img src="<?= $qrcode ?>" alt="" style="width: 250px; -webkit-filter: drop-shadow(5px 5px 5px #222222);
  filter: drop-shadow(5px 5px 5px #222222);" id="qrcode">
                </div>
                <div class="col-12 col-md-8">


                    <div class="form-group ">
                        <label>เลือกโลโก้</label>
                        <select name="txtlogo" class="form-control" disabled>
                            <option value="">เลือก</option>
                            <?php if (!empty($logo)) : ?>
                                <?php foreach ($logo as $key => $value) : ?>
                                    <option value="<?= $value['id'] ?>" <?= $user_data['logo_id'] ?? set_value('txtlogo') == $value['id'] ? 'selected' : ''  ?>><?= $value['logo_name'] ?></option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                    </div>


                    <?php /* ?>
                        <div class="col-12 col-md-6">

                            <div class="form-group">
                                <label>เลือกสีพื้นหลัง</label>
                                <select name="txtcolor" class="form-control">
                                    <option value="">เลือก</option>
                                    <?php if (!empty($color)) : ?>
                                        <?php foreach ($color as $key => $value) : ?>
                                            <option value="<?= $value['id'] ?>" <?= set_value('txtcolor', $user_data['id_color']) == $value['id'] ? 'selected' : ''  ?>><?= $value['color_name'] ?></option>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </select>
                            </div>

                        </div>

                        <div class="form-group">
                            <label>เลือกสีตัวอักษร</label>
                            <select name="txtfont" class="form-control">
                                <option value="">เลือก</option>
                                <?php if (!empty($font)) : ?>
                                    <?php foreach ($font as $key => $value) : ?>
                                        <option value="<?= $value['id'] ?>" <?= set_value('txtfont', $user_data['id_font']) == $value['id'] ? 'selected' : ''  ?>><?= $value['font_name'] ?></option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                        </div>
                        <?php */ ?>

                    <div class="form-group ">
                        <label>ข้อความ ใต้ QR Code</label>
                        <input type="text" name="txttextqrcode" value="<?= $user_data['textqrcode'] ?? set_value('txttextqrcode', 'กรมธุรกิจพลังงาน') ?>" class="form-control"  disabled/>
                    </div>

                    <?php /* ?>
                    <div class="form-group">
                        <label>เลือกรูปแบบ</label>
                        <select name="txtformat" class="form-control">
                            <option value="">เลือก</option>
                            <?php if (!empty($format)) : ?>
                                <?php foreach ($format as $key => $value) : ?>
                                    <option value="<?= $value['id'] ?>" <?= set_value('txtformat', $user_data['id_format']) == $value['id'] ? 'selected' : ''  ?>><?= $value['format_name'] ?></option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                    </div>
                    <?php */ ?>

                    <div class="form-group">
                        <label>เลือกขนาด QR Code</label>
                        <select name="txtsizeqr" class="form-control" disabled>
                            <option value="">เลือก</option>
                            <?php if (!empty($sizeqr)) : ?>
                                <?php foreach ($sizeqr as $key => $value) : ?>
                                    <option value="<?= $value['id'] ?>" <?= $user_data['sizeqr_id'] ?? set_value('txtsizeqr') == $value['id'] ? 'selected' : ''  ?>><?= $value['sizeqr_name'] ?></option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                    </div>


                </div>
            </div>




            <div class="d-flex flex-wrap justify-content-center justify-content-md-end mt-2 mt-md-4">
                <?php /* ?><div id="downloadQrCode" class="btn btn-success mr-2">ดาวน์โหลด QR Code</div> <?php */ ?>
                <a href="<?php echo base_url($routeGroup); ?>" class="btn btn-secondary">กลับสู่หน้าหลัก</a>
            </div>

            <div class="row">
                &nbsp;
            </div>
        </form>
    </div>
</div>

<script>
    function displayQrCode() {
        const text = $("input[name=txttextqrcode]").val();
        const size = $("select[name=txtsizeqr]").val();
        const logo = $("select[name=txtlogo]").val();
        const url = "<?= base_url('qrcode/generateQrCode') ?>"
        const data = {
            id: "<?= $user_data['gen_qr_code'] ?>",
            text: text,
            logo: logo,
            size: size
        }

        $.ajax({
            url: url,
            type: 'POST',
            data: data,
            success: function(response) {
                $('#qrcode').attr('src', response)
            }
        })
    }

    function downloadQrCode() {
        const text = $("input[name=txttextqrcode]").val();
        const size = $("select[name=txtsizeqr]").val();
        const logo = $("select[name=txtlogo]").val();
        const url = "<?= base_url('qrcode/downloadQrCode') ?>"
        const data = {
            id: "<?= $user_data['gen_qr_code'] ?>",
            text: text,
            logo: logo,
            size: size
        }

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

    $(function() {


        $("input[name=txttextqrcode]").on('keyup', function() {
            displayQrCode();
        })
        $("select[name=txtlogo]").on('change', function() {
            displayQrCode();
        })

        $("select[name=txtformat]").on('change', function() {
            displayQrCode();
        })
        $("select[name=txtsizeqr]").on('change', function() {
            console.log('test');
            displayQrCode();
        })

        $('#downloadQrCode').on('click', function() {
            console.log('test');
            downloadQrCode();
        })


        $('#validatelink').on('click', function() {

            const link = $('[name="txtlink"]').val()
            if (link === '') {
                alert('กรุณากรอกข้อมูล')
                return
            }

            $.ajax({
                url: '<?= base_url('qrcode/validateLink') ?>',
                type: 'POST',
                data: {
                    link: link
                },
                success: function(response) {

                    if (response === 'true') {
                        alert('ลิงค์ถูกต้อง')
                    } else {
                        alert('ลิงค์ไม่ถูกต้อง')
                    }
                }
            })
        })

        $(".datepicker").datepicker({
            dateFormat: 'yy-mm-dd',
            autoclose: true,
            todayHighlight: true,
            language: 'th',
            thaiyear: true //กำหนดปีในภาษาไทย พ.ศ.
        });

        $('#type').on('change', function() {
            const data = $(this).val()
            if (data == 1) {
                $('.c-link').show()
                $('.c-text').hide()
                $('.c-file').hide()

                $('[name="txttext"]').val('')
                $('[name="txtfile"]').val('')
            }


            if (data == 2) {
                $('.c-text').show()
                $('.c-link').hide()
                $('.c-file').hide()

                $('[name="txtlink"]').val('')
                $('[name="txtfile"]').val('')
            }

            if (data == 3) {
                $('.c-file').show()
                $('.c-link').hide()
                $('.c-text').hide()

                $('[name="txtlink"]').val('')
                $('[name="txttext"]').val('')
            }

            if (data === '') {
                $('.c-link').hide()
                $('.c-text').hide()
                $('.c-file').hide()

                $('[name="txtlink"]').val('')
                $('[name="txttext"]').val('')
                $('[name="txtfile"]').val('')
            }
        })

        const data = $('#type').val()

        if (data == 1) {
            $('.c-link').show()
            $('.c-text').hide()
            $('.c-file').hide()



            $('[name="txttext"]').val('')
            $('[name="txtfile"]').val('')
        }


        if (data == 2) {
            $('.c-text').show()
            $('.c-link').hide()
            $('.c-file').hide()

            $('[name="txtlink"]').val('')
            $('[name="txtfile"]').val('')
        }

        if (data == 3) {
            $('.c-file').show()
            $('.c-link').hide()
            $('.c-text').hide()

            $('[name="txtlink"]').val('')
            $('[name="txttext"]').val('')
        }

        if (data === '') {
            $('.c-link').hide()
            $('.c-text').hide()
            $('.c-file').hide()


            $('[name="txtlink"]').val('')
            $('[name="txttext"]').val('')
            $('[name="txtfile"]').val('')
        }


    });
</script>

<?= $this->endSection() ?>