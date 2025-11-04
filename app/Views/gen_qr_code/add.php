<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<link rel="stylesheet" href="<?php echo base_url('plugins/magnific-popup/magnific-popup.css'); ?>" />
<style>
    .white-popup {
        position: relative;
        background: #FFF;
        padding: 20px;
        width: auto;
        max-width: 500px;
        margin: 20px auto;
    }
</style>
<div class="card">
    <div class="card-header bg-white">
        <div class="text-orange h5"><?= $subtitle ?></div>
    </div>
    <div class="card-body">
        <form method="post" action="<?= base_url($routeGroup . '/' . 'store')  ?>" enctype="multipart/form-data">
            <div class="form-group ">
                <label>รหัสอ้างอิง</label>
                <input type="text" name="txtref_code" value="<?= set_value('txtref_code') ?>" class="form-control col-12 col-md-6 col-lg-4" disabled />
                <?php
                if ($validation->getError('txtref_code')) {
                    echo '<div class="alert alert-danger mt-2">' . $validation->getError('txtref_code') . '</div>';
                }
                ?>
            </div>

            <div class="form-group">
                <label>หัวข้ออ้างอิง</label>
                <input type="text" name="txttitle" value="<?= set_value('txttitle')  ?>" class="form-control" />
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
                <textarea class="form-control text-left" name="txtmake"><?= set_value('txtmake') ?></textarea>
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
                    <select name="rdotype" id="type" class="form-control">
                        <option value="">เลือก</option>
                        <?php foreach ($typeFile as $key => $value) : ?>
                            <option value="<?= $value['id'] ?>" <?= set_value('rdotype') == $value['id'] ? 'selected' : ''  ?>><?= $value['type_file_name'] ?></option>
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
                    <label>วันที่</label>

                    <div class="input-group">
                        <input type="text" id="txtstartdate" name="txtstartdate" class="form-control datepicker" value="<?= set_value('txtstartdate') ?>" data-date-language="th-th" data-date-autoclose="true" maxlength="10" autocomplete="off" readonly>
                        <div id="divCriDateBegin" class="input-group-append date-icon">
                            <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                        </div>
                    </div>

                    <?php

                    if ($validation->getError('txtstartdate')) {
                        echo '<div class="alert alert-danger mt-2">
                            ' . $validation->getError("txtstartdate") . '
                            </div>';
                    }

                    ?>
                </div>
                <div class="col-12 col-md-3">
                    <label>ถึง</label>

                    <div class="input-group">
                        <input type="text" id="txtenddate" name="txtenddate" class="form-control datepicker" value="<?= set_value('txtenddate') ?>" data-date-language="th-th" data-date-autoclose="true" maxlength="10" autocomplete="off" readonly>
                        <div id="divCriDateEnd" class="input-group-append date-icon">
                            <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                        </div>
                    </div>


                    <?php

                    if ($validation->getError('txtenddate')) {
                        echo '<div class="alert alert-danger mt-2">
                            ' . $validation->getError("txtenddate") . '
                            </div>';
                    }

                    ?>
                </div>
            </div>

            <div class="row form-group c-link" style="display: none;">
                <div class="col-12 col-md-9">
                    <label>Link</label>
                    <input type="text" name="txtlink" value="<?= set_value('txtlink') ?>" class="form-control">

                    <?php
                    if ($validation->getError('txtlink')) {
                        echo '<div class="alert alert-danger mt-2">
                ' . $validation->getError("txtlink") . '
                </div>';
                    }
                    ?>
                </div>

                <div class="col-12  col-md-3 d-flex align-items-end mt-2 mt-md-0 text-md-end">
                    <a href="https://www.google.com" class="btn btn-primary w-100" id="validatelink">ตรวจสอบลิงค์อ้างอิง</a>
                </div>
            </div>

            <div class="row form-group c-text" style="display: none;">
                <div class="col-12">
                    <label>Text</label>
                    <textarea class="form-control" name="txttext"><?= set_value('txttext') ?></textarea>

                    <?php
                    if ($validation->getError('txttext')) {
                        echo '<div class="alert alert-danger mt-2">
                ' . $validation->getError("txttext") . '
                </div>';
                    }
                    ?>
                </div>


            </div>
            <div id="test-popup" class="white-popup mfp-hide">
                Popup content
            </div>
            <div class="text-right form-group c-text" style="display: none;">
                <a href="#test-popup" id="txtTextExam" class="btn btn-info col-12 col-sm-12 col-md-3">ดูตัวอย่างข้อความ</a>
            </div>
            <div class="row form-group c-file" style="display: none;">
                <!-- Dropdown ประเภทไฟล์ -->
                <?php /* ?>
                <div class="col-12 col-md-4">
                    <label>ประเภทไฟล์</label>
                    <select name="rdofiletype" id="" class="form-control">
                        <option value="">เลือกประเภทไฟล์</option>
                        <?php foreach ($fileType as $val) : ?>
                            <option value="<?= $val['id'] ?>" <?= set_value('rdofiletype') == $val['id'] ? 'selected' : '' ?>><?= $val['type_name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <?php
                    if ($validation->getError('rdofiletype')) {
                        echo '<div class="alert alert-danger mt-2">
                ' . $validation->getError("rdofiletype") . '
                </div>';
                    }
                    ?>
                </div>

                <!-- File Input -->
                <div class="col-12 col-md-5">
                    <label>อัปโหลดไฟล์</label>
                    <div class="custom-file">
                        <input type="file" name="uploadfile--" class="form-control" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                    </div>
                </div>
                <?php */ ?>

                <div class="col-12 col-md-12">
                    <label for="uploadfile">อัปโหลดไฟล์</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="QrFileAttachment" name="uploadfile" placeholder="เอกสารแนบ" <?php //= ($ViewOnly ? "disabled" : "") 
                                                                                                                                        ?>>
                        <label id="lblfileQr" class="custom-file-label" for="QrFileAttachment">เลือกไฟล์</label>
                    </div>
                    <canvas class="img-responsive img-thumbnail mt-2" id="pdfViewerQr"></canvas>
                </div>



                <input type="hidden" name="oldfile" value="<?= set_value('oldfile') ?>">

                <!-- ปุ่มตรวจสอบ -->
                <div class="col-12 col-md-3 d-flex align-items-end mt-2 mt-md-0">
                    <button type="button" class="btn btn-primary w-100">ดูตัวอย่างไฟล์</button>
                </div>
            </div>





            <div class="row form-group">
                <div class="col-12 col-md-4 text-center">
                    <label>ตัวอย่าง QR Code</label>
                    <img src="<?= $qrcode ?? "" ?>" alt="" style="width: 250px; -webkit-filter: drop-shadow(5px 5px 5px #222222);
  filter: drop-shadow(5px 5px 5px #222222);" id="qrcode">
                </div>
                <div class="col-12 col-md-8">


                    <div class="form-group ">
                        <label>เลือกโลโก้</label>
                        <select name="txtlogo" class="form-control">
                            <option value="">เลือก</option>
                            <?php if (!empty($logo)) : ?>
                                <?php foreach ($logo as $key => $value) : ?>
                                    <option value="<?= $value['id'] ?>" <?= set_value('txtlogo') == $value['id'] ? 'selected' : ''  ?>><?= $value['logo_name'] ?></option>
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
                        <input type="text" name="txttextqrcode" value="<?= set_value('txttextqrcode', 'กรมธุรกิจพลังงาน') ?>" class="form-control" />
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
                        <select name="txtsizeqr" class="form-control">
                            <option value="">เลือก</option>
                            <?php if (!empty($sizeqr)) : ?>
                                <?php foreach ($sizeqr as $key => $value) : ?>
                                    <option value="<?= $value['id'] ?>" <?= set_value('txtsizeqr',) == $value['id'] ? 'selected' : ''  ?>><?= $value['sizeqr_name'] ?></option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                    </div>


                </div>
            </div>




            <div class="d-flex flex-wrap justify-content-center justify-content-md-end mt-2 mt-md-4">
                <button type="submit" class="btn btn-success mr-2">ยืนยันการสร้าง QR Code</button>
                <button type="reset" class="btn btn-danger">ยกเลิก</button>&nbsp;
                <button type="reset" class="btn btn-secondary" value="reset" onclick="window.location='<?php echo base_url(); ?>/<?= $routeGroup ?>'"><i class="fas fa-reply"></i> กลับสู่หน้าหลัก</button>
            </div>

        </form>
    </div>
</div>
<script src="<?php echo base_url('plugins/pdfjs/build/pdf.mjs'); ?>" type="module" defer></script>
<script type="module">
    // error occurs here pdfjsLib not defined       
    pdfjsLib.GlobalWorkerOptions.workerSrc = '<?php echo base_url('plugins/pdfjs/build/pdf.worker.mjs'); ?>';
</script>
<script src="<?php echo base_url('plugins/magnific-popup/jquery.magnific-popup.min.js'); ?>" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(window).on('load', function() {
        $('.datepicker').daterangepicker({
            "singleDatePicker": true,
            "timePicker": false,
            "timePicker24Hour": true,
            "autoApply": true,
            StartDate: moment().format("YYYY-MM-DD"),
            locale: {
                format: 'YYYY-MM-DD'
            }
        });


        $("#txtstartdate").on('change', function() {
            const date = $(this).val()
            const date2 = $("#txtenddate").val()
            console.log(date)
            console.log(date2)
            if (date2 < date) {

                swal('วันที่สิ้นสุดต้องมากกว่าหรือเท่ากับวันที่เริ่มต้น', '', 'warning')
                $(this).val('')
                return
            }
        })

        $("#txtenddate").on('change', function() {
            const date = $(this).val()
            const date2 = $("#txtstartdate").val()
            if (date < date2) {

                swal('วันที่สิ้นสุดต้องมากกว่าหรือเท่ากับวันที่เริ่มต้น', '', 'warning')
                $(this).val('')
                return
            }
        })



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

    });

    function displayQrCode() {
        const text = $("input[name=txttextqrcode]").val();
        const size = $("select[name=txtsizeqr]").val();
        const logo = $("select[name=txtlogo]").val();
        const url = "<?= base_url('qrcode/generateQrCode') ?>"
        const data = {
            id: "DEMO",
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


    $("[name=uploadfile]").on("change", function(e) {

        $("#lblfileQr").html("");
        var canvas = $("#pdfViewerQr")[0];
        var context = canvas.getContext('2d');
        context.clearRect(0, 0, canvas.width, canvas.height);
        var file = e.target.files[0];

        if (file == undefined) {
            clearfileQr();
            return;
        }
        var regex = /(pdf)$/;
        var extension = file.name.substr((file.name.lastIndexOf('.') + 1));
        if (!regex.test(extension)) {
            // clearfileQr();
            // alertPopup("พบข้อผิดพลาด", 'ไฟล์ ' + file.name + "\n ต้องเลือกไฟล์ .pdf เท่านั้น", "warning");
            //  return;
        }
        const filesize = Math.round((file.size / 1024));
        if (filesize > 20480) {
            clearfileQr();
            alertPopup("พบข้อผิดพลาด", "ขนาดไฟล์ ต้องไม่เกิน 20 MB", "warning");
            return;
        }

        $("#lblfileQr").html(file.name);
       
        if (file.type == "application/pdf") {
            var fileReader = new FileReader();
            fileReader.onload = function() {
                var pdfData = new Uint8Array(this.result);
                // Using DocumentInitParameters object to load binary data.
                var loadingTask = pdfjsLib.getDocument({
                    data: pdfData
                });
                loadingTask.promise.then(function(pdf) {
                    console.log('PDF loaded');

                    // Fetch the first page
                    var pageNumber = 1;
                    pdf.getPage(pageNumber).then(function(page) {
                        console.log('Page loaded');

                        var scale = .5;
                        var viewport = page.getViewport({
                            scale: scale
                        });

                        // Prepare canvas using PDF page dimensions
                        canvas.height = viewport.height;
                        canvas.width = viewport.width;

                        // Render PDF page into canvas context
                        var renderContext = {
                            canvasContext: context,
                            viewport: viewport
                        };
                        var renderTask = page.render(renderContext);
                        renderTask.promise.then(function() {
                            console.log('Page rendered');
                        });
                    });
                }, function(reason) {
                    // PDF loading error
                    console.error(reason);
                    clearfileQr();
                    alertPopup("พบข้อผิดพลาด", 'ไฟล์ ' + file.name + "\n กรุณาเลือกไฟล์ ประเภทไฟล์ pdf เท่านั้น", "warning");
                });
            };
            fileReader.readAsArrayBuffer(file);
        } else if (file.type == "image/jpeg" || file.type == "image/jpg") {
            var fileReader = new FileReader();
            fileReader.onload = function() {
                var img = new Image();
                img.src = fileReader.result;
                img.onload = function() {
                    context.drawImage(img, 0, 0, canvas.width, canvas.height);
                }
            }
            fileReader.readAsDataURL(file);
        } else if (file.type == "image/png") {
            var fileReader = new FileReader();
            fileReader.onload = function() {
                var img = new Image();
                img.src = fileReader.result;
                img.onload = function() {
                    context.drawImage(img, 0, 0, canvas.width, canvas.height);
                }
            }
            fileReader.readAsDataURL(file);
        } else if (file.type == "image/gif") {
            var fileReader = new FileReader();
            fileReader.onload = function() {
                var img = new Image();
                img.src = fileReader.result;
                img.onload = function() {
                    context.drawImage(img, 0, 0, canvas.width, canvas.height);
                }
            }
            fileReader.readAsDataURL(file);

        } else if (file.type == "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet") {
            var fileReader = new FileReader();
            fileReader.onload = function() {
                var img = new Image();
                img.src = fileReader.result;
                img.onload = function() {
                    context.drawImage(img, 0, 0, canvas.width, canvas.height);
                }
            }
            fileReader.readAsDataURL(file);
        } else if (file.type == "application/vnd.openxmlformats-officedocument.presentationml.presentation") {
            var fileReader = new FileReader();
            fileReader.onload = function() {
                var img = new Image();
                img.src = fileReader.result;
                img.onload = function() {
                    context.drawImage(img, 0, 0, canvas.width, canvas.height);
                }
            }
            fileReader.readAsDataURL(file);
        } else if (file.type == "application/vnd.openxmlformats-officedocument.wordprocessingml.document") {
            var fileReader = new FileReader();
            fileReader.onload = function() {
                var img = new Image();
                img.src = fileReader.result;
                img.onload = function() {
                    context.drawImage(img, 0, 0, canvas.width, canvas.height);
                }
            }
            fileReader.readAsDataURL(file);
        } else if (file.type == "application/vnd.ms-excel") {
            var fileReader = new FileReader();
            fileReader.onload = function() {
                var img = new Image();
                img.src = fileReader.result;
                img.onload = function() {
                    context.drawImage(img, 0, 0, canvas.width, canvas.height);
                }
            }
            fileReader.readAsDataURL(file);
        } else if (file.type == "application/msword") {
            var fileReader = new FileReader();
            fileReader.onload = function() {
                var img = new Image();
                img.src = fileReader.result;
                img.onload = function() {
                    context.drawImage(img, 0, 0, canvas.width, canvas.height);
                }
            }
            fileReader.readAsDataURL(file);
        } else if (file.type == "application/vnd.ms-powerpoint") {
            var fileReader = new FileReader();
            fileReader.onload = function() {
                var img = new Image();
                img.src = fileReader.result;
                img.onload = function() {
                    context.drawImage(img, 0, 0, canvas.width, canvas.height);
                }
            }
            fileReader.readAsDataURL(file);
        } else if (file.type == "text/csv") {
            var fileReader = new FileReader();
            fileReader.onload = function() {
                var img = new Image();
                img.src = fileReader.result;
                img.onload = function() {
                    context.drawImage(img, 0, 0, canvas.width, canvas.height);
                }
            }
            fileReader.readAsDataURL(file);
        } else {
            clearfileQr();
            alertPopup("พบข้อผิดพลาด", 'ไฟล์ ' + file.name + "\n ยังไม่่รองรับให้อัพโหลด", "warning");
        }
    });

    function clearfileQr() {
        $("[name=uploadfile]").val('');
        $("#lblfileQr").html("เลือกไฟล์");
        $("#pdfViewerQr").val('');
        $("#pdfViewerQr").removeAttr("width");
        $("#pdfViewerQr").removeAttr("height");
    }



    $('#validatelink').on('click', function() {

        const link = $('[name="txtlink"]').val()
        $(this).attr("href", link);
        return false;
        if (link === '') {
            swal('กรุณากรอกข้อมูล', '', 'warning')
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

    $("#txtTextExam").on('click', function() {
        const text = $('[name="txttext"]').val()


        $("#test-popup").text(text);
    });

    $("#txtTextExam").magnificPopup({
        type: 'inline',
        midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.


    });

    $("#validatelink").magnificPopup({
        type: 'iframe',
        iframe: {
            markup: '<style>.mfp-iframe-holder .mfp-content {height:100%;} #toolbar {display: none !important;} </style>' +
                '<div class="mfp-iframe-scaler">' +
                '<div class="mfp-close"></div>' +
                '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
                '</div>'
        }
    });

    $(".datepicker2").datepicker({
        dateFormat: 'yy-mm-dd',
        theme: 'bootstrap',
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
            $('[name="oldfile"]').val('')
            $('[name="rdofiletype"]').val('').prop('checked', false)
        }


        if (data == 2) {
            $('.c-text').show()
            $('.c-link').hide()
            $('.c-file').hide()

            $('[name="txtlink"]').val('')
            $('[name="oldfile"]').val('')
            $('[name="rdofiletype"]').val('').prop('checked', false)
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
            $('[name="oldfile"]').val('')
            $('[name="rdofiletype"]').val('').prop('checked', false)
        }

    })

    const data = $('#type').val()

    if (data == 1) {
        $('.c-link').show()
        $('.c-text').hide()
        $('.c-file').hide()



        $('[name="txttext"]').val('')
        $('[name="txtfile"]').val('')
        $('[name="rdofiletype"]').val('').prop('checked', false)
    }


    if (data == 2) {
        $('.c-text').show()
        $('.c-link').hide()
        $('.c-file').hide()

        $('[name="txtlink"]').val('')
        $('[name="txtfile"]').val('')
        $('[name="rdofiletype"]').val('').prop('checked', false)
    }

    if (data == 3) {
        $('.c-file').show()
        $('.c-link').hide()
        $('.c-text').hide()

        $('[name="txtlink"]').val('')
        $('[name="txttext"]').val('')
    }

    if (data == '') {
        $('.c-link').hide()
        $('.c-text').hide()
        $('.c-file').hide()


        $('[name="txtlink"]').val('')
        $('[name="txttext"]').val('')
        $('[name="txtfile"]').val('')
        $('[name="rdofiletype"]').val('').prop('checked', false)
    }
</script>
<?= $this->endSection() ?>