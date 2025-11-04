<?php

$lstProgram = session()->get("lstProgram");
$lstGroup = [];
$listMenu = [];
// var_dump($lstProgram);
if (!empty($lstProgram)) {
    $lstGroup = array_filter($lstProgram, function ($item) {
        return $item["ProgramType"] == "GROUP" and $item["AccessStatus"] == "Y";
    }, ARRAY_FILTER_USE_BOTH);

    $listMenu = array_filter($lstProgram, function ($item) {
        return $item["ProgramType"] == "MENU" and $item["AccessStatus"] == "Y";
    }, ARRAY_FILTER_USE_BOTH);
}
$curentGroup = "";
$curentMenu = "";

// foreach ($listMenu as $item) {
// if (current_url() == base_url(str_replace("-", "_", $item["ProgramCode"]))) {
$curentGroup = session()->getFlashdata('curGroupMenu'); //$item["GroupID"];
$curentMenu = session()->getFlashdata('curMenu'); //$item["ProgramID"];
// }
// }

?>
<style>
    .nav-item .nav-icon {
        color: #17a2b8;
    }
</style>
<li class="nav-item">
    <a href="/home" class="nav-link">
        <i class="nav-icon fas fa-home"></i>
        <p>
            Home
            <!-- <span class="right badge badge-danger">New</span> -->
        </p>
    </a>
</li>

<?php foreach ($lstGroup as $grp) : ?>
    <li class="nav-item <?= ($curentGroup == $grp["ProgramID"]) ? " menu-open" : "" ?>">
        <a href="#" class="nav-link <?= ($curentGroup == $grp["ProgramID"]) ? " active" : "" ?>">
            <i class="nav-icon fas fa-th"></i>
            <p>
                <?= $grp["ProgramName"] ?>
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <?php
            $lstItem = array_filter($listMenu, function ($item) use ($grp) {
                return $item["GroupID"] == $grp["ProgramID"];
            }, ARRAY_FILTER_USE_BOTH);
            foreach ($lstItem as $item) : ?>
                <li class="nav-item">
                    <a href="<?= str_replace("-", "_", $item["ProgramCode"]) ?>" class="nav-link<?= ($curentMenu == $item["ProgramID"] ? " active" :  ""); ?>">
                        <i class="far fa-circle nav-icon"></i>
                        <p><?= $item["ProgramName"] ?></p>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </li>
<?php endforeach; ?>