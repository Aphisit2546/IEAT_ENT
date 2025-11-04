<?php

namespace App\Models\FUNCTION_REUSE;

use CodeIgniter\Model;
use Exception;

class function_reuse extends Model
{
    //private $db2;
    public function __construct()
    {
        //$this->db = db_connect("default");
        //$this->db2 = db_connect("dbEntrepreneur");
        //$this->db3 = db_connect("dbIeat");
    }

    function status_plan($status_plan)
    {
        switch ($status_plan) {
            case 'Y':
                $return_data = "<font color='green'><b>ใช้งาน</b></font>";
                break;
            case 'N':
                $return_data = "<font color='red'><b>ไม่ใช้งาน</b></font>";
                break;
            default:
                $return_data = "-";
                break;
        }
        return $return_data;
    }

    function status_strategy($status_strategy)
    {
        switch ($status_strategy) {
            case 'Y':
                $return_data = "<font color='green'><b>ยืนยันข้อมูล</b></font>";
                break;
            case 'H':
                $return_data = "<font color='red'><b>แบบร่างข้อมูล</b></font>";
                break;
            default:
                $return_data = "-";
                break;
        }
        return $return_data;
    }

    function ConvertDateThai_Eng_DMY($date)
    {
        if ($date != '' && $date != null) {
            $year_eng = substr($date, 0, 4) + 543;
            $date_eng = substr($date, 8, 2) . "/" . substr($date, 5, 2) . "/" . $year_eng;
        } else {
            $date_eng = "";
        }

        return $date_eng;
    }

    function ConvertDateThai_Eng_DMY_for_edit($date)
    {
        if ($date != '' && $date != null) {
            $year_eng = substr($date, 0, 4);
            $date_eng = substr($date, 8, 2) . "/" . substr($date, 5, 2) . "/" . $year_eng;
        } else {
            $date_eng = "";
        }

        return $date_eng;
    }

    function ConvertDateToDatabase($date)
    {
        if ($date != '' && $date != null) {
            $year_eng = substr($date, -4);
            $date_eng = $year_eng . "-" . substr($date, 3, 2) . "-" . substr($date, 0, 2);
        } else {
            $date_eng = "";
        }

        return $date_eng;
    }

    function ConvertDateToShow($date)
    {
        if ($date != '' && $date != null) {
            $year_thai = substr($date, 0, 4) + 543;
            $date_show = substr($date, 8, 2) . "/" . substr($date, 5, 2) . "/" . $year_thai;
        } else {
            $date_show = "";
        }

        return $date_show;
    }

    function ConvertDateModifyToShow($date)
    {
        if ($date != '' && $date != null) {
            $year_thai = substr($date, 0, 4) + 543;
            $time = substr($date, 11, 5);
            $date_show = substr($date, 8, 2) . "/" . substr($date, 5, 2) . "/" . $year_thai . " " . $time;
        } else {
            $date_show = "";
        }

        return $date_show;
    }

    function ConvertMoney($money)
    {
        if ($money != '' && $money != null) {

            $check_dot = substr($money, -3, 3);
            if ($check_dot == '.00') {
                $money_return = number_format($money);
            } else {
                $money_return = number_format($money, 2);
            }
        } else {
            $money_return = "";
        }

        return $money_return;
    }
}
