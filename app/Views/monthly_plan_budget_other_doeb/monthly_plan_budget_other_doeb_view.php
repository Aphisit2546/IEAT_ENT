<?= $this->extend('layouts/main_for_view') ?>

<?= $this->section("content"); ?>

<div class="class_header_page_02">
    <br />
    แผนการใช้งบประมาณ (ทั่วไป)
    <hr />
</div>
<div class="row">
    <form name"frm" id="frm" class="form-horizontal" action="<?php echo base_url(); ?>/<?= $routeGroup ?>/<?= $action_page ?>" method="post">
        <input type="hidden" name="DraftBudgetControlDetail_id" id="DraftBudgetControlDetail_id" value="<?php echo $data['DraftBudgetControlDetail_id']; ?>" readonly />
        <?= csrf_field() ?>
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <td class="align-top text-left" width='35%'><b>ชื่อกิจกรรม</b></td>
                    <td class="align-top text-center"><?php echo $data['NameActivity']; ?></td>
                </tr>
                <tr>
                    <td class="align-top text-left"><b>งบประมาณที่ได้รับการจัดสรร (บาท)</b></td>
                    <td class="align-top text-center"><?= number_format($data["Budget02"], 2) ?></td>
                </tr>
            </tbody>
        </table>
        <hr />
        <?php
        $seq = 1;
        if (!empty($data['DraftBudgetControlDetailSub'])):
            foreach ($data['DraftBudgetControlDetailSub'] as $result_data_set1):
        ?>
                <input type="hidden" name="DraftBudgetControlDetailSub_id[]" id="DraftBudgetControlDetailSub_id[]" value="<?php echo $result_data_set1['DraftBudgetControlDetailSub_id']; ?>" readonly />
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td class="align-top text-left" width='20%'><b>รายการที่ <?php echo $seq++; ?></b></td>
                            <td class="align-top text-center"><?php echo $result_data_set1['NameDetail']; ?></td>
                        </tr>
                </table>
                <table class="table table-bordered">
                    <tbody>
                        <tr class="bg_th">
                            <td class="align-top text-center" width='10%'>
                                <font color='white'>เดือน</font>
                            </td>
                            <td class="align-top text-center">
                                <font color='white'>ต.ค.</font>
                            </td>
                            <td class="align-top text-center">
                                <font color='white'>พ.ย.</font>
                            </td>
                            <td class="align-top text-center">
                                <font color='white'>ธ.ค.</font>
                            </td>
                            <td class="align-top text-center">
                                <font color='white'>ม.ค.</font>
                            </td>
                            <td class="align-top text-center">
                                <font color='white'>ก.พ.</font>
                            </td>
                            <td class="align-top text-center">
                                <font color='white'>มี.ค.</font>
                            </td>
                            <td class="align-top text-center">
                                <font color='white'>เม.ย.</font>
                            </td>
                            <td class="align-top text-center">
                                <font color='white'>พ.ค.</font>
                            </td>
                            <td class="align-top text-center">
                                <font color='white'>มิ.ย.</font>
                            </td>
                            <td class="align-top text-center">
                                <font color='white'>ก.ค.</font>
                            </td>
                            <td class="align-top text-center">
                                <font color='white'>ส.ค.</font>
                            </td>
                            <td class="align-top text-center">
                                <font color='white'>ก.ย.</font>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-top text-center">จำนวนเงิน</td>
                            <td class="align-top text-center"><?php if ($result_data_set1['month01'] != '' && $result_data_set1['month01'] != null) {
                                                                    echo number_format($result_data_set1['month01'], 2);
                                                                } ?></td>

                            <td class="align-top text-center"><?php if ($result_data_set1['month02'] != '' && $result_data_set1['month02'] != null) {
                                                                    echo number_format($result_data_set1['month02'], 2);
                                                                } ?></td>

                            <td class="align-top text-center"><?php if ($result_data_set1['month03'] != '' && $result_data_set1['month03'] != null) {
                                                                    echo number_format($result_data_set1['month03'], 2);
                                                                } ?></td>

                            <td class="align-top text-center"><?php if ($result_data_set1['month04'] != '' && $result_data_set1['month04'] != null) {
                                                                    echo number_format($result_data_set1['month04'], 2);
                                                                } ?></td>

                            <td class="align-top text-center"><?php if ($result_data_set1['month05'] != '' && $result_data_set1['month05'] != null) {
                                                                    echo number_format($result_data_set1['month05'], 2);
                                                                } ?></td>

                            <td class="align-top text-center"><?php if ($result_data_set1['month06'] != '' && $result_data_set1['month06'] != null) {
                                                                    echo number_format($result_data_set1['month06'], 2);
                                                                } ?></td>
                            <td class="align-top text-center"><?php if ($result_data_set1['month07'] != '' && $result_data_set1['month07'] != null) {
                                                                    echo number_format($result_data_set1['month07'], 2);
                                                                } ?></td>

                            <td class="align-top text-center"><?php if ($result_data_set1['month08'] != '' && $result_data_set1['month08'] != null) {
                                                                    echo number_format($result_data_set1['month08'], 2);
                                                                } ?></td>

                            <td class="align-top text-center"><?php if ($result_data_set1['month09'] != '' && $result_data_set1['month09'] != null) {
                                                                    echo number_format($result_data_set1['month09'], 2);
                                                                } ?></td>

                            <td class="align-top text-center"><?php if ($result_data_set1['month10'] != '' && $result_data_set1['month10'] != null) {
                                                                    echo number_format($result_data_set1['month10'], 2);
                                                                } ?></td>

                            <td class="align-top text-center"><?php if ($result_data_set1['month11'] != '' && $result_data_set1['month11'] != null) {
                                                                    echo number_format($result_data_set1['month11'], 2);
                                                                } ?></td>

                            <td class="align-top text-center"><?php if ($result_data_set1['month12'] != '' && $result_data_set1['month12'] != null) {
                                                                    echo number_format($result_data_set1['month12'], 2);
                                                                } ?></td>

                        </tr>
                    </tbody>
                </table>
            <?php endforeach; ?>
        <?php endif; ?>
        <div class="row text-left">
            <div class="col-md-12">
                <div class="form-group row">
                    <div class="col-12">
                        หมายเหตุ
                        - <?php echo $result_data_set1['Remarks']; ?>
                    </div>
                </div>
            </div>
        </div>
    </form>

</div>
<?= $this->endSection(); ?>