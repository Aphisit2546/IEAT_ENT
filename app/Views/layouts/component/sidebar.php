<div style="background-color:#0A4274; width:310px;" class="sidebar sidebar-fixed border-end" id="sidebar">
    <div class="row" style="background-color:#FFFFFF; height: 100px;">
        <div class="sidebar-top">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="<?php echo base_url('/dist/img/LOGO_AC_All_Connect.png'); ?>" width="280" height="80" class="img-fluid">
        </div>
    </div>
    <br />

    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">

        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('dashboard'); ?>">
                <img src="<?php echo base_url('/dist/img/icon_doeb_p3/M00-Home.png'); ?>" class="img-fluid me-2" style="max-width: 25px;">
                &nbsp;<font color='white'>Home</font></a></li>

        <?php if (session('GroupSet10') == 'checked'): ?>
            <li class="nav-group"><a class="nav-link nav-group-toggle" href="javascript:void(0);">
                    <img src="<?php echo base_url('/dist/img/icon_doeb_p3/M08.2-จัดการข้อมูลหลักการประชุม.png'); ?>" class="img-fluid me-2" style="max-width: 25px;">
                    &nbsp; <font color='white'>จัดการสิทธิ์ (SAFETY SSO)</font></a>
                <ul class="nav-group-items compact">
                    <?php if (session('GroupSet1001') == 'checked'): ?>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('groupuser_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                                <font color='white'>- จัดการกลุ่มผู้ใช้งาน</font>
                            </a></li>
                    <?php endif; ?>
                    <?php if (session('GroupSet1002') == 'checked'): ?>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('groupuseraccressprogram_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                                <font color='white'>- กำหนดสิทธิ์ระดับกลุ่มผู้ใช้งาน</font>
                            </a></li>
                    <?php endif; ?>
                    <?php if (session('GroupSet1003') == 'checked'): ?>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('useraccressgroup_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                                <font color='white'>- จัดการข้อมูลผู้ใช้งาน</font>
                            </a></li>
                    <?php endif; ?>
                    <?php if (session('GroupSet1004') == 'checked'): ?>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('listuseraccressprogram_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                                <font color='white'>- รายงานสรุปรายชื่อผู้ใช้งานระบบ</font>
                            </a></li>
                    <?php endif; ?>
                    <?php if (session('GroupSet1005') == 'checked'): ?>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('listusesystem_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                                <font color='white'>- รายงานประวัติการเข้าใช้งานระบบ</font>
                            </a></li>
                    <?php endif; ?>
                </ul>
            </li>
        <?php endif; ?>
        <?php /* ?> <li class="nav-item"><a class="nav-link" href="<?php echo base_url('dashboard'); ?>">
                <img src="<?php echo base_url('/dist/img/icon_doeb_p3/M02-แก้ไขข้อมูลย้อนหลัง.png'); ?>" class="img-fluid me-2" style="max-width: 20px;">
                &nbsp;แก้ไขข้อมูลย้อนหลัง</a></li> <?php */ ?>


        <?php if (session('GroupSet20') == 'checked'): ?>
            <li class="nav-group"><a class="nav-link nav-group-toggle" href="javascript:void(0);">
                    <img src="<?php echo base_url('/dist/img/icon_doeb_p3/M03-จัดการข้อมูลหลัก.png'); ?>" class="img-fluid me-2" style="max-width: 25px;">
                    &nbsp; <font color='white'>จัดการข้อมูลหลัก</font></a>
                <ul class="nav-group-items" style="margin-left: 0.2rem;">
                    <?php if (session('GroupSet2001') == 'checked'): ?>
                        <li class="nav-item2"><a class="nav-link" href="<?php echo base_url('plan_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                                <font color='white'>- ประเภทแผน</font>
                            </a></li>
                    <?php endif; ?>
                    <?php if (session('GroupSet2002') == 'checked'): ?>
                        <li class="nav-item2"><a class="nav-link" href="<?php echo base_url('unit_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                                <font color='white'>- หน่วยนับ</font>
                            </a></li>
                    <?php endif; ?>
                    <?php if (session('GroupSet2003') == 'checked'): ?>
                        <li class="nav-item2"><a class="nav-link" href="<?php echo base_url('source_budget_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                                <font color='white'>- ประเภทแหล่งเงินงบประมาณ</font>
                            </a></li>
                    <?php endif; ?>
                    <?php if (session('GroupSet2004') == 'checked'): ?>
                        <li class="nav-item2"><a class="nav-link" href="<?php echo base_url('structure_budget_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                                <font color='white'>- โครงสร้างงบประมาณรายจ่าย</font>
                            </a></li>
                    <?php endif; ?>
                    <?php if (session('GroupSet2005') == 'checked'): ?>
                        <li class="nav-item2"><a class="nav-link" href="<?php echo base_url('TypeBudget_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                                <font color='white'>- ประเภทงบประมาณ</font>
                            </a></li>
                    <?php endif; ?>
                </ul>
            </li>
        <?php endif; ?>

        <?php if (session('GroupSet30') == 'checked'): ?>
            <li class="nav-group"><a class="nav-link nav-group-toggle" href="javascript:void(0);">
                    <img src="<?php echo base_url('/dist/img/icon_doeb_p3/M04-จัดการข้อมูลแผนบริหาร.png'); ?>" class="img-fluid me-2" style="max-width: 25px;">
                    &nbsp; <font color='white'>งานด้านยุทธศาสตร์</font></a>
                <ul class="nav-group-items " style="margin-left: 0.2rem;">
                    <?php if (session('GroupSet3001') == 'checked'): ?>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('overall_plan_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                                <font color='white'>- โปรแกรมจัดทำข้อมูลภาพรวม<br />แผนยุทธศาสตร์</font>
                            </a></li>
                    <?php endif; ?>
                    <?php if (session('GroupSet3002') == 'checked'): ?>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('focus_indicators_plan_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                                <font color='white'>- สร้างรายการแผนย่อย</font>
                            </a></li>
                    <?php endif; ?>
                    <?php if (session('GroupSet3003') == 'checked'): ?>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('focus_indicators_plan_doeb2'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                                <font color='white'>- สร้างรายการเป้าหมาย</font>
                            </a></li>
                    <?php endif; ?>
                    <?php if (session('GroupSet3004') == 'checked'): ?>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('focus_indicators_plan_doeb3'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                                <font color='white'>- สร้างตัวชี้วัดตามยุทธศาสตร์</font>
                            </a></li>
                    <?php endif; ?>
                    <?php if (session('GroupSet3005') == 'checked'): ?>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('mark_focus_budget_plan_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                                <font color='white'>- จัดทำข้อมูลค่าเป้าหมาย<br />และงบประมาณ</font>
                            </a></li>
                    <?php endif; ?>
                    <?php if (session('GroupSet3006') == 'checked'): ?>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('expenses_plan_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                                <font color='white'>- แผนรายจ่ายของโครงการ</font>
                            </a></li>
                    <?php endif; ?>
                    <?php if (session('GroupSet3007') == 'checked'): ?>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('check_detail_plan_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                                <font color='white'>- ตรวจทานรายละเอียดโครงการ</font>
                            </a></li>
                    <?php endif; ?>
                    <?php if (session('GroupSet3008') == 'checked'): ?>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('create_plan_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                                <font color='white'>- จัดทำ / ปรับปรุงแผนงาน</font>
                            </a></li>
                    <?php endif; ?>
                    <?php if (session('GroupSet3009') == 'checked'): ?>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('approve_plan_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                                <font color='white'>- ตรวจสอบและพิจารณาแผนงาน</font>
                            </a></li>
                    <?php endif; ?>
                </ul>
            </li>
        <?php endif; ?>

        <?php if (session('GroupSet40') == 'checked'): ?>
            <li class="nav-group"><a class="nav-link nav-group-toggle" href="javascript:void(0);">
                    <img src="<?php echo base_url('/dist/img/icon_doeb_p3/M02-แก้ไขข้อมูลย้อนหลัง.png'); ?>" class="img-fluid me-2" style="max-width: 25px;">
                    &nbsp; <font color='white'>จัดทำแผนงานโครงการ</font></a>
                <ul class="nav-group-items " style="margin-left: 0.2rem;">
                    <?php if (session('GroupSet4001') == 'checked'): ?>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('overall_fiveyear_plan_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                                <font color='white'>- ข้อมูลภาพรวมโครงการ<br />(ประกอบแผนปฏิบัติการ 5 ปี)</font>
                            </a></li>
                    <?php endif; ?>
                    <?php if (session('GroupSet4002') == 'checked'): ?>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('overall_year_plan_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                                <font color='white'>- จัดทำแผนงานโครงการ<br />(แผนปฏิบัติราชการรายปี)</font>
                            </a></li>
                    <?php endif; ?>
                </ul>
            </li>
        <?php endif; ?>

        <?php if (session('GroupSet50') == 'checked'): ?>
            <li class="nav-group"><a class="nav-link nav-group-toggle" href="javascript:void(0);">
                    <img src="<?php echo base_url('/dist/img/icon_doeb_p3/M05-จัดการข้อมูลงบประมาณ.png'); ?>" class="img-fluid me-2" style="max-width: 25px;">
                    &nbsp; <font color='white'>งานด้านงบประมาณ</font></a>
                <ul class="nav-group-items " style="margin-left: 0.2rem;">
                    <?php if (session('GroupSet5001') == 'checked'): ?>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('overall_budget_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                                <font color='white'>- โปรแกรมจัดทำข้อมูลภาพรวม<br />แผนงบประมาณ</font>
                            </a></li>
                    <?php endif; ?>
                    <?php if (session('GroupSet6002') == 'checked'): ?>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('monthly_plan_activity_approve_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                                <font color='white'>- ตรวจสอบและพิจารณา<br />แผนปฏิบัติงานรายเดือน<br />ประกอบการยื่นคำของบประมาณ</font>
                            </a></li>
                    <?php endif; ?>
                    <?php if (session('GroupSet5002') == 'checked'): ?>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('data_budget_control_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                                <font color='white'>- ตรวจสอบรายละเอียด<br />คำของบประมาณ</font>
                            </a></li>
                    <?php endif; ?>
                    <?php if (session('GroupSet5003') == 'checked'): ?>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('create_budget_control_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                                <font color='white'>- จัดทำ/ปรับปรุงแผนการใช้<br />งบประมาณเพื่อขออนุมัติ</font>
                            </a></li>
                    <?php endif; ?>
                    <?php if (session('GroupSet5004') == 'checked'): ?>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('inspec_BudgetControl_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                                <font color='white'>- ตรวจสอบและพิจารณาแผน<br />งบประมาณ</font>
                            </a></li>
                    <?php endif; ?>
                    <?php if (session('GroupSet5005') == 'checked'): ?>
                        <!--<li class="nav-item"><a class="nav-link" href="<?php echo base_url('approve_budget_control_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span> พิจารณาแผนงบประมาณ</a></li>-->
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('Allocate_Budget_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                                <font color='white'>- จัดสรรงบประมาณ</font>
                            </a></li>
                    <?php endif; ?>
                    <?php if (session('GroupSet5005P') == 'checked'): ?>
                        <!--<li class="nav-item"><a class="nav-link" href="<?php echo base_url('approve_budget_control_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span> พิจารณาแผนงบประมาณ</a></li>-->
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('Allocate_BudgetP_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                                <font color='white'>- จัดสรรงบประมาณ<br />ส่วนสำนักงานพลังงานจังหวัด</font>
                            </a></li>
                    <?php endif; ?>
                </ul>
            </li>
        <?php endif; ?>

        <?php if (session('GroupSet60') == 'checked'): ?>
            <li class="nav-group"><a class="nav-link nav-group-toggle" href="javascript:void(0);">
                    <img src="<?php echo base_url('/dist/img/icon_doeb_p3/M02-แก้ไขข้อมูลย้อนหลัง.png'); ?>" class="img-fluid me-2" style="max-width: 25px;">
                    &nbsp; <font color='white'>จัดทำงบประมาณสำหรับ<br />&nbsp;&nbsp;ผู้ยื่นของบประมาณ</font></a>
                <ul class="nav-group-items " style="margin-left: 0.2rem;">
                    <?php if (session('GroupSet6001') == 'checked'): ?>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('monthly_plan_activity_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                                <font color='white'>- จัดทำแผนปฏิบัติงานรายเดือน<br />ประกอบการยื่นคำของบประมาณ</font>
                            </a></li>
                    <?php endif; ?>
                    <?php if (session('GroupSet6003') == 'checked'): ?>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('draft_budget_control_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                                <font color='white'>- จัดทำร่างคำของบประมาณ เสนอ กยผ.</font>
                            </a></li>
                    <?php endif; ?>
                    <?php if (session('GroupSet6004') == 'checked'): ?>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('monthly_plan_budget_project_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                                <font color='white'>- จัดทำ/ปรับปรุงแผนการใช้งบประมาณ<br />(โครงการ)</font>
                            </a></li>
                    <?php endif; ?>
                    <?php if (session('GroupSet6005') == 'checked'): ?>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('monthly_plan_budget_other_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                                <font color='white'>- จัดทำ/ปรับปรุงแผนการใช้งบประมาณ<br />(ทั่วไป)</font>
                            </a></li>
                    <?php endif; ?>
                </ul>
            </li>
        <?php endif; ?>

        <?php if (session('GroupSet80') == 'checked'): ?>
            <li class="nav-group"><a class="nav-link nav-group-toggle" href="javascript:void(0);">
                    <img src="<?php echo base_url('/dist/img/icon_doeb_p3/M08-จัดการข้อมูลการประชุม.png'); ?>" class="img-fluid me-2" style="max-width: 25px;">
                    &nbsp; <font color='white'>ระบบติดตามและประเมินผล</font></a>
                <ul class="nav-group-items " style="margin-left: 0.2rem;">
                    <?php if (session('GroupSet6004P') == 'checked'): ?>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('monthly_plan_budget_project_approve_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                                <font color='white'>- ตรวจสอบและพิจารณา<br />แผนการใช้งบประมาณ(โครงการ)</font>
                            </a></li>
                    <?php endif; ?>
                    <?php if (session('GroupSet6005P') == 'checked'): ?>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('monthly_plan_budget_other_approve_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                                <font color='white'>- ตรวจสอบและพิจารณา<br />แผนการใช้งบประมาณ(ทั่วไป)</font>
                            </a></li>
                    <?php endif; ?>
                    <?php if (session('GroupSet8001') == 'checked'): ?>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('tracking_01_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                                <font color='white'>- ติดตามผลโครงการ</font>
                            </a></li>
                    <?php endif; ?>
                    <?php if (session('GroupSet8002') == 'checked'): ?>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('tracking_02_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                                <font color='white'>- ติดตามผล ต. ง. (ส่วนกลาง)</font>
                            </a></li>
                    <?php endif; ?>
                    <?php if (session('GroupSet8003') == 'checked'): ?>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('tracking_03_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                                <font color='white'>- ติดตามผล ต. ง. (สพจ.)</font>
                            </a></li>
                    <?php endif; ?>
                    <?php if (session('GroupSet8004') == 'checked'): ?>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('tracking_ins_approve_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                                <font color='white'>- ตรวจสอบและพิจารณาเผยแพร่<br />ผลการติดตามประเมินผลประจำเดือน</font>
                            </a></li>
                    <?php endif; ?>
                </ul>
            </li>
        <?php endif; ?>

        <?php if (session('GroupSet70') == 'checked'): ?>
            <li class="nav-group"><a class="nav-link nav-group-toggle" href="javascript:void(0);">
                    <img src="<?php echo base_url('/dist/img/icon_doeb_p3/icone-de-rapport-orange.png'); ?>" class="img-fluid me-2" style="max-width: 25px;">
                    &nbsp; <font color='white'>ระบบรายงานความก้าวหน้า<br />&nbsp;&nbsp;และการใช้งบประมาณ</font></a>
                <ul class="nav-group-items" style="margin-left: 0.2rem;">
                    <?php if (session('GroupSet7001') == 'checked'): ?>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('Report_01_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                                <font color='white'>- รายงานแผน/ผลโครงการ</font>
                            </a></li>
                    <?php endif; ?>
                    <?php if (session('GroupSet7002') == 'checked'): ?>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('Report_01_activity_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                                <font color='white'>- รายงานแผน/ผล ง.</font>
                            </a></li>
                    <?php endif; ?>
                    <?php if (session('GroupSet7003') == 'checked'): ?>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('Report_02_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                                <font color='white'>- รายงานแผน/ผล ต.<br />กองความปลอดภัยธุรกิจก๊าซธรรมชาติ</font>
                            </a></li>
                    <?php endif; ?>
                    <?php if (session('GroupSet7004') == 'checked'): ?>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('Report_03_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                                <font color='white'>- รายงานแผน/ผล ต.<br />กองความปลอดภัยธุรกิจ<br />ก๊าซปิโตรเลียมเหลว</font>
                            </a></li>
                    <?php endif; ?>
                    <?php if (session('GroupSet7005') == 'checked'): ?>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('Report_04_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                                <font color='white'>- รายงานแผน/ผล ต.<br />กองความปลอดภัยธุรกิจน้ำมัน</font>
                            </a></li>
                    <?php endif; ?>
                    <?php if (session('GroupSet7006') == 'checked'): ?>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('Report_05_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                                <font color='white'>- รายงานแผน/ผล ต.<br />สถาบันพัฒนาเทคนิคพลังงาน</font>
                            </a></li>
                    <?php endif; ?>
                    <?php if (session('GroupSet7007') == 'checked'): ?>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('Report_06_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                                <font color='white'>- รายงานแผน/ผล ต.<br />ภารกิจด้านคุณภาพ</font>
                            </a></li>
                    <?php endif; ?>
                    <?php if (session('GroupSet7008') == 'checked'): ?>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('Report_07_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                                <font color='white'>- รายงานแผน/ผล ต.<br />ภารกิจด้านการค้าและการสำรอง</font>
                            </a></li>
                    <?php endif; ?>
                    <?php if (session('GroupSet7009') == 'checked'): ?>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('Report_08_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                                <font color='white'>- รายงานแผน/ผล ต.<br />สำหรับสำนักงานพลังงานจังหวัด</font>
                            </a></li>
                    <?php endif; ?>
                </ul>
            </li>
        <?php endif; ?>



        <?php if (session('GroupSet900') == 'checked'): ?>
            <li class="nav-group"><a class="nav-link nav-group-toggle" href="javascript:void(0);">
                    <img src="<?php echo base_url('/dist/img/icon_doeb_p3/M06-รายงานผู้ปฏิบติงานแผน.png'); ?>" class="img-fluid me-2" style="max-width: 25px;">
                    &nbsp; <font color='white'>รายงานสำหรับผู้ปฏิบัติงาน</font></a>
                <ul class="nav-group-items " style="margin-left: 0.2rem;">
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('report_show_01_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                            <font color='white'>- รายงานสรุปค่าใช้จ่าย<br />ตามแผนปฏิบัติราชการ 5 ปี</font>
                        </a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('report_show_02_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                            <font color='white'>- รายงานค่าเป้าหมายและตัวชี้วัด<br />ของแผนปฏิบัติราชการ</font>
                        </a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('report_show_03_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                            <font color='white'>- รายงานแผนการปฏิบัติงาน<br />และการใช้จ่าย</font>
                        </a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('report_show_04_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                            <font color='white'>- รายงานสรุปสถานะโครงการ<br />ตามปีงบประมาณ</font>
                        </a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('report_show_05_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                            <font color='white'>- รายงานสรุปงบประมาณเบิกจ่าย<br />แทนกัน สพจ.</font>
                        </a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('report_show_06_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                            <font color='white'>- รายงาสรุปข้อมูลกิจกรรมที่น่าสนใจ<br />ของหน่วยงาน(ปฏิทินกิจกรรม)</font>
                        </a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('report_show_07_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                            <font color='white'>- รายงานสรุปผลการจัดทำ<br />แบบฟอร์มลงทะเบียนผ่านระบบ</font>
                        </a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('report_show_08_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                            <font color='white'>- รายงานสรุปผลการจัดทำ<br />QR Code ผ่านระบบ</font>
                        </a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('report_show_09_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                            <font color='white'>- รายงานสรุปข้อมูลการนัดหมาย<br />ตามช่วงเวลา</font>
                        </a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('report_show_10_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                            <font color='white'>- รายงานผลการพิจารณา<br />รายงานทางด้านสิ่งแวดล้อม (ER/MR)</font>
                        </a></li>
                </ul>
            </li>
        <?php endif; ?>

        <?php if (session('GroupSet901') == 'checked'): ?>
            <li class="nav-group"><a class="nav-link nav-group-toggle" href="javascript:void(0);">
                    <img src="<?php echo base_url('/dist/img/icon_doeb_p3/M06-รายงานผู้ปฏิบติงานแผน.png'); ?>" class="img-fluid me-2" style="max-width: 25px;">
                    &nbsp; <font color='white'>ส่วนประมวลข้อมูลรายงาน ด้านแผน<br />และยุทธศาสตร์องค์กร</font></a>
                <ul class="nav-group-items " style="margin-left: 0.2rem;">
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('report_show_01_v2_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                            <font color='white'>- รายงานแผนการดำเนินงานต่าง ๆ<br />ที่มีการดำเนินการในระบบ</font>
                        </a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('report_show_02_v2_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                            <font color='white'>- รายงานสรุปความคืบหน้า<br />ตามแผนและตัวชี้วัด</font>
                        </a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('report_show_03_v2_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                            <font color='white'>- รายงานสรุปโครงการที่มีการปรับแผน</font>
                        </a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('report_show_04_v2_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                            <font color='white'>- รายงานสรุปคำของบประมาณ<br />ประจำปีแยกตามประเภทรายจ่าย<br />ตามงบประมาณหรือหมวดหมู่ของ<br />งบประมาณและแหล่งงบประมาณ</font>
                        </a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('report_show_05_v2_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                            <font color='white'>- รายงานสรุปการจัดสรรงบประมาณ<br />ประจำปีแยกตามประเภทรายจ่าย<br />ตามงบประมาณหรือหมวดหมู่ของ<br />งบประมาณ</font>
                        </a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('report_show_06_v2_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                            <font color='white'>- รายงานสรุปโครงการที่ล่าช้ากว่าแผน</font>
                        </a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('report_show_07_v2_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                            <font color='white'>- รายงานสรุปโครงการที่ล่าช้า<br />กว่าเกณฑ์ดัชนีชี้วัด</font>
                        </a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('report_show_08_v2_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                            <font color='white'>- รายงานต้นทุนหน่วยปฏิบัติ</font>
                        </a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('report_show_09_v2_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                            <font color='white'>- รายงานโครงการที่ต้องเฝ้าระวัง<br />เป็นพิเศษ</font>
                        </a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('report_show_10_v2_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                            <font color='white'>- รายงานการโอนเปลี่ยนแปลงงบประมาณ<br />และการจัดสรรงบประมาณเหลือจ่าย</font>
                        </a></li>
                </ul>
            </li>
        <?php endif; ?>

        <?php if (session('GroupSet902') == 'checked'): ?>
            <li class="nav-group"><a class="nav-link nav-group-toggle" href="javascript:void(0);">
                    <img src="<?php echo base_url('/dist/img/icon_doeb_p3/M10-รายงานผู้บริหาร.png'); ?>" class="img-fluid me-2" style="max-width: 25px;">
                    &nbsp; <font color='white'>รายงานสำหรับผู้บริหาร<br />&nbsp;&nbsp;และรายงานเชิงภูมิศาสตร์สารสนเทศ</font></a>
                <ul class="nav-group-items " style="margin-left: 0.2rem;">
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('report_show_gis_01_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                            <font color='white'>- รายงานภาพรวมงานยุทธศาสตร์<br />และแผนงาน</font>
                        </a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('report_show_gis_02_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                            <font color='white'>- รายงานสุขภาพโครงการ</font>
                        </a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('report_show_gis_03_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                            <font color='white'>- รายงานสถิติน่าสนใจประกอบ<br />การวางแผนยุทธศาสตร์</font>
                        </a></li>
                </ul>
            </li>
        <?php endif; ?>

        <?php if (session('GroupSet903') == 'checked'): ?>
            <li class="nav-group"><a class="nav-link nav-group-toggle" href="javascript:void(0);">
                    <img src="<?php echo base_url('/dist/img/icon_doeb_p3/M10-รายงานผู้บริหาร.png'); ?>" class="img-fluid me-2" style="max-width: 25px;">
                    &nbsp; <font color='white'>รายงานสรุปสถิติเชิงบริหารจัดการ</font></a>
                <ul class="nav-group-items " style="margin-left: 0.2rem;">
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('report_show_manage_01_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                            <font color='white'>- รายงานสรุปผลการใช้จ่ายงบประมาณ<br />เบิกจ่ายแทนกันของสำนักงาน<br />พลังงานจังหวัดรายเดือน</font>
                        </a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('report_show_manage_02_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                            <font color='white'>- รายงานผลการปฏิบัติงาน<br />ตามปีงบประมาณ</font>
                        </a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('report_show_manage_03_doeb'); ?>"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                            <font color='white'>- รายงานผลการใช้จ่ายงบประมาณ<br />ประจำปีงบประมาณ</font>
                        </a></li>
                </ul>
            </li>
        <?php endif; ?>
    </ul>

</div>