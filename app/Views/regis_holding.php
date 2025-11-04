<?= $this->extend("layout/login-layout"); ?>
<?= $this->section("content"); ?>

<div class="container">
    <form action="login/authholding" method="post">
        <input type="hidden" name="UserID" id="UserID" value="<?php echo $data['UserID']; ?>" />
        <input type="hidden" name="USN" id="USN" value="<?php echo $data['UserName']; ?>" />
        <input type="hidden" name="AccountName" id="AccountName" value="<?php echo $data['AccountName']; ?>" />

        <input type="hidden" name="AgencyNameTH" id="AgencyNameTH" value="<?php echo $data['AgencyNameTH']; ?>" />
        <input type="hidden" name="AgancyCode" id="AgancyCode" value="<?php echo $data['AgancyCode']; ?>" />
        <input type="hidden" name="OrganizationStructureCode" id="OrganizationStructureCode" value="<?php echo $data['OrganizationStructureCode']; ?>" />
        <input type="hidden" name="OrganizationStructureNameTH" id="OrganizationStructureNameTH" value="<?php echo $data['OrganizationStructureNameTH']; ?>" />

        <br /><br />
        <div class="card" style="border-radius:30px">
            <div class="row">
                <div class="col-md-6">
                    <div class="col-12" style="margin-top:20px; margin-left:40px;">
                        <label class="col-form-label fw-bold fs-3">
                            <img src="dist/img/Login_img_1.png" class="brand-image" style="margin:0;">
                        </label>
                    </div>
                </div>
                <div class="col-md-5" style="background-color:#fff; border-radius: 20px; margin-top:30px;">
                    <div class="row">
                        &nbsp;
                    </div>
                    <div class="row">
                        &nbsp;
                    </div>
                    <div class="row">
                        &nbsp;
                    </div>
                    <div class="row">
                        &nbsp;
                    </div>
                    <div class="row">
                        <font color="#115DBF" style="font-size:32px;"><b>ลงทะเบียนใช้งานสำหรับระบบ ALL CONNECT</b></font>
                    </div>
                    <div class="row">
                        &nbsp;
                    </div>
                    <div class="row mb-3" id="factory_username" style="margin-left:30px;">
                        <font color="#FF4D00" style="font-size:20px;"><b>ชื่อ-นามสกุล ผู้ขอใช้งานระบบ</b></font>
                        <font style="font-size:20px;">&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;</font>
                        <font color="#000000ff" style="font-size:20px;"><b><?php echo $data['AccountName']; ?></b></font>
                    </div>
                    <div class="row mb-3" id="factory_username" style="margin-left:30px;">
                        <font color="#FF4D00" style="font-size:20px;"><b>หน่วยงาน</b></font>
                        <font style="font-size:20px;">&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;</font>
                        <font color="#000000ff" style="font-size:20px;"><b><?php echo $data['AgencyNameTHShow']; ?></b></font>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <input type="submit" class="btn" name="submit_doeb" value="ยืนยันข้อมูล" style="font-size:22px; color:white; background: #003375ff 0% 0% no-repeat padding-box; border-radius: 25px; width: 100%; height:50px;">
                        </div>
                    </div>
                    <div class="row">
                        &nbsp;
                    </div>
                    <div class="row">
                        &nbsp;
                    </div>

                </div>
                <div class="col-md-1">
                    &nbsp;
                </div>
            </div>
            <div class="row">
                &nbsp;
            </div>
        </div>

    </form>
</div>

<?= $this->endSection(); ?>