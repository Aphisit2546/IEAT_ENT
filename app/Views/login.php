<?= $this->extend("layout/login-layout"); ?>
<?= $this->section("content"); ?>


<?php if (!empty(session()->getFlashData("fail"))) : ?>
    <div class="form-group row">
        <div class="col-sm-12">
            <div class="alert alert-danger"><?= session()->getFlashData("fail"); ?></div>
        </div>
    </div>
<?php endif; ?>

<div class="container">
    <!--<form action="login/auth" method="post">-->
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card shadow-2-strong" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">
                        <img src="dist/img/logo_new_v2.jpg" height="140" width="90" class="brand-image" style="margin:0;">
                        <br /><br />
                        <h4 class="mb-4"><b>ระบบ - อนุมัติอนุญาตทางอิเล็กทรอนิกส์</b></h4>
                        <h6 class="mb-5" style="color:#6007b3ff;"><b>เข้าสู่ระบบส่วนงานผู้ประกอบการ</b></h6>

                        <div data-mdb-input-init class="form-outline mb-4" style="text-align: left;">
                            <label class="form-label" for="typeEmailX-2">ชื่อผู้ใช้งาน</label>
                            <input type="email" id="typeEmailX-2" class="form-control form-control-lg" />
                            <label class="form-label" style="font-size: 12px; color:gray;">ตัวอักษรเล็ก ใหญ่ (เช่น A, a) มีผลต่อการ Login</label>
                        </div>

                        <div data-mdb-input-init class="form-outline mb-4" style="text-align: left;">
                            <label class="form-label" for="typePasswordX-2">รหัสผ่าน</label>
                            <input type="password" id="typePasswordX-2" class="form-control form-control-lg" />
                        </div>

                        <!-- Checkbox -->
                        <div class="col-12">
                            <div class="col-6" style="float: left; text-align: left;">
                                <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
                                <label class="form-label" for="typeEmailX-2">จดจำฉัน</label>
                            </div>
                            <div class="col-6" style=" float: left; text-align: right;">
                                <h5 style="color:#6007b3ff;"><b>ลืมรหัสผ่าน ?</b></h5>
                            </div>
                        </div>

                        <br /><br />
                        <button data-mdb-button-init data-mdb-ripple-init class="btn btn-lg btn-block" onclick="window.location.href='center_ieat_ent'" style="background-color: #6007b3ff; color:aliceblue;">เข้าสู่ระบบ</button>
                        <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg btn-block" style="background-color: #ffffffff; color:#6007b3ff;">เข้าสู่ระบบด้วย Thai ID</button>

                        <br />
                        <div>
                            หากมีข้อสอบถาม เพิ่มเติม หรือพบปัญหาในการใช้งาน? <br />ดูข้อมูลติดต่อแผนกช่วยเหลือผู้ใช้
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--</form>-->
</div>

<?= $this->endSection(); ?>