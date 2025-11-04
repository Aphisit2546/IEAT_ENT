<?php

namespace App\Models;

use CodeIgniter\Model;
use Exception;
use GuzzleHttp\Client;

class dropdown_reuse extends Model
{
    public function dropdown_year_thai()
    {
        $year_length_thai = date("Y") + 540;
        //$year_length_eng = date("Y") - 20;

        //$options[0] = "-- แสดงข้อมูลทุกเดือน --";
        for ($seq = 0; $seq < 10; $seq++) {

            //$data1 = $year_length_eng + $seq;
            $data2 = $year_length_thai + $seq;

            $options[$data2] = $data2;
        }

        return $options;
    }

    public function dropdown_example()
    {
        $options['-'] = "-- กรุณาเลือก --";
        $options['1'] = "สายปฏิบัติการ 1";
        $options['2'] = "สายปฏิบัติการ 2";
        $options['3'] = "สายปฏิบัติการ 3";

        return $options;
    }

    public function dropdown_unit_type()
    {
        $options['-'] = "-- กรุณาเลือก --";
        $options['1'] = "ค่าเงิน";
        $options['2'] = "จำนวน";
        $options['3'] = "ระยะทาง";
        $options['4'] = "น้ำหนัก";

        return $options;
    }

    public function dropdown_type_document()
    {
        $options['-'] = "-- กรุณาเลือก --";
        $options['1'] = "ประเภท 1";
        $options['2'] = "ประเภท 2";
        $options['3'] = "ประเภท 3";
        $options['4'] = "ประเภท 4";

        return $options;
    }

    public function dropdown_master_plan()
    {
        $options[0] = "-- เลือกประเภทแผน --";
        try {
            $client = new Client();
            $value_all = '1.' . session('GroupUserID');
            $res = $client->request('GET', Env("app.RestBaseURL") . '/api/MasterDropDownDoeb/' . $value_all . '/edit');
            $data_dropdown = $res->getBody()->getContents('json');
            $data_dropdown = json_decode($data_dropdown, true);

            foreach ($data_dropdown['data'] as $row) {
                $options[$row['PlanType_id']] = $row['name_th'];
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        return $options;
    }

    public function dropdown_master_plan_for_report()
    {
        $options[''] = "-- ท้ั้งหมด --";
        try {
            $client = new Client();
            $value_all = '1.' . session('GroupUserID');
            $res = $client->request('GET', Env("app.RestBaseURL") . '/api/MasterDropDownDoeb/' . $value_all . '/edit');
            $data_dropdown = $res->getBody()->getContents('json');
            $data_dropdown = json_decode($data_dropdown, true);

            foreach ($data_dropdown['data'] as $row) {
                $options[$row['PlanType_id']] = $row['name_th'];
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        return $options;
    }

    public function dropdown_master_unit()
    {
        $options[0] = "-- เลือกหน่วย --";
        try {
            $client = new Client();
            $value_all = '2.' . session('GroupUserID');
            $res = $client->request('GET', Env("app.RestBaseURL") . '/api/MasterDropDownDoeb/' . $value_all . '/edit');
            $data_dropdown = $res->getBody()->getContents('json');
            $data_dropdown = json_decode($data_dropdown, true);

            foreach ($data_dropdown['data'] as $row) {
                $options[$row['UnitManagement_id']] = $row['name_th'];
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        return $options;
    }

    public function dropdown_masterOverAllPlan()
    {
        $options[0] = "-- เลือกแผน --";
        try {
            $client = new Client();
            $value_all = '3.' . session('GroupUserID');
            $res = $client->request('GET', Env("app.RestBaseURL") . '/api/MasterDropDownDoeb/' . $value_all . '/edit');
            $data_dropdown = $res->getBody()->getContents('json');
            $data_dropdown = json_decode($data_dropdown, true);

            foreach ($data_dropdown['data'] as $row) {
                $options[$row['OverAllPlan_id']] = $row['PlanName'];
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        return $options;
    }

    public function dropdown_masterOverAllPlanForOther()
    {
        $options[0] = "-- เลือกแผน --";
        try {
            $client = new Client();
            $value_all = '4.' . session('GroupUserID');
            $res = $client->request('GET', Env("app.RestBaseURL") . '/api/MasterDropDownDoeb/' . $value_all . '/edit');
            $data_dropdown = $res->getBody()->getContents('json');
            $data_dropdown = json_decode($data_dropdown, true);

            foreach ($data_dropdown['data'] as $row) {
                $options[$row['OverAllPlan_id']] = $row['PlanName'];
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        return $options;
    }

    public function dropdown_masterOverAllPlanForOtherV2()
    {
        $options[] = "-- ทั้งหมด --";
        try {
            $client = new Client();
            $value_all = '4.' . session('GroupUserID');
            $res = $client->request('GET', Env("app.RestBaseURL") . '/api/MasterDropDownDoeb/' . $value_all . '/edit');
            $data_dropdown = $res->getBody()->getContents('json');
            $data_dropdown = json_decode($data_dropdown, true);

            foreach ($data_dropdown['data'] as $row) {
                $options[$row['OverAllPlan_id']] = $row['PlanName'];
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        return $options;
    }

    public function dropdown_masterOverAllPlanForCreatePlan()
    {
        $options[0] = "-- เลือกแผน --";
        try {
            $client = new Client();
            $value_all = '8.' . session('GroupUserID');
            $res = $client->request('GET', Env("app.RestBaseURL") . '/api/MasterDropDownDoeb/' . $value_all . '/edit');
            $data_dropdown = $res->getBody()->getContents('json');
            $data_dropdown = json_decode($data_dropdown, true);

            foreach ($data_dropdown['data'] as $row) {
                $options[$row['OverAllPlan_id']] = $row['PlanName'];
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        return $options;
    }

    public function dropdown_masterOverAllPlanForCreatePlanV2()
    {
        $options[0] = "-- เลือกแผน --";
        try {
            $client = new Client();
            $value_all = '81.' . session('GroupUserID');
            $res = $client->request('GET', Env("app.RestBaseURL") . '/api/MasterDropDownDoeb/' . $value_all . '/edit');
            $data_dropdown = $res->getBody()->getContents('json');
            $data_dropdown = json_decode($data_dropdown, true);

            foreach ($data_dropdown['data'] as $row) {
                $options[$row['OverAllPlan_id']] = $row['PlanName'];
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        return $options;
    }

    public function dropdown_masterOverAllPlanForCreateBudgetControl()
    {
        $options[0] = "-- เลือกแผน --";
        try {
            $client = new Client();
            $value_all = '8.' . session('GroupUserID');
            $res = $client->request('GET', Env("app.RestBaseURL") . '/api/MasterDropDownDoeb/' . $value_all . '/edit');
            $data_dropdown = $res->getBody()->getContents('json');
            $data_dropdown = json_decode($data_dropdown, true);

            foreach ($data_dropdown['data'] as $row) {
                $options[$row['OverAllPlan_id']] = $row['PlanName'];
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        return $options;
    }

    public function dropdown_masterOverAllPlanForCreateBudgetControlV2()
    {
        $options[0] = "-- เลือกแผน --";
        try {
            $client = new Client();
            $value_all = '10.' . session('GroupUserID');
            $res = $client->request('GET', Env("app.RestBaseURL") . '/api/MasterDropDownDoeb/' . $value_all . '/edit');
            $data_dropdown = $res->getBody()->getContents('json');
            $data_dropdown = json_decode($data_dropdown, true);

            foreach ($data_dropdown['data'] as $row) {
                $options[$row['OverAllPlan_id']] = $row['PlanName'];
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        return $options;
    }

    public function dropdown_AnnualTargetValue_Year()
    {
        $options[0] = "-- เลือกปี --";
        return $options;
    }

    public function dropdown_RelatedPolicies()
    {
        $options[0] = "-- เลือกนโยบาย --";
        return $options;
    }

    public function dropdown_RelatedStrategies()
    {
        $options[0] = "-- เลือกยุทธศาสตร์ --";
        return $options;
    }

    public function dropdown_StrategyRelate_default()
    {
        $options[0] = "-- เลือกแผนย่อย --";
        return $options;
    }

    public function dropdown_StrategyTarGet_default()
    {
        $options[0] = "-- เลือกเป้าหมาย --";
        return $options;
    }

    public function dropdown_StrategyIndicator_default()
    {
        $options[0] = "-- เลือกตัวชี้วัด --";
        return $options;
    }


    public function dropdown_AnnualTargetValue_Year_forfiveyear($select)
    {
        if ($select != '' && $select != null) {
            $options[0] = "-- เลือกปี --";
            $client = new Client();
            //echo $OverAllPlan_id;
            $res = $client->request('GET', Env("app.RestBaseURL") . '/api/OverAllPlanAnnualTargetValueDoeb/' . $select);
            $data_next = $res->getBody()->getContents('json');
            $data_next = json_decode($data_next, true);
            $return_data = $data_next['data'];

            foreach ($return_data as $return_data) {
                $options[$return_data['Years']] = $return_data['Years'];
            }

            return $options;
        } else {
            $options[0] = "-- เลือกปี --";
            return $options;
        }
    }

    public function dropdown_RelatedPolicies_forfiveyear($select)
    {
        if ($select != '' && $select != null) {
            $options[0] = "-- เลือกนโยบาย --";
            $client = new Client();
            //echo $OverAllPlan_id;
            $res = $client->request('GET', Env("app.RestBaseURL") . '/api/OverAllPlanRelatedPoliciesDoeb/' . $select);
            $data_next = $res->getBody()->getContents('json');
            $data_next = json_decode($data_next, true);
            $return_data = $data_next['data'];

            foreach ($return_data as $return_data) {
                $options[$return_data['RelatedPolicies_id']] = $return_data['RelatedPolicies_Name'];
            }

            return $options;
        } else {
            $options[0] = "-- เลือกนโยบาย --";
            return $options;
        }
    }

    public function dropdown_RelatedStrategies_forfiveyear($select)
    {
        if ($select != '' && $select != null) {
            $options[0] = "-- เลือกยุทธศาสตร์ --";
            $client = new Client();
            //echo $OverAllPlan_id;
            $res = $client->request('GET', Env("app.RestBaseURL") . '/api/OverAllPlanRelatedStrategiesDoeb/' . $select);
            $data_next = $res->getBody()->getContents('json');
            $data_next = json_decode($data_next, true);
            $return_data = $data_next['data'];

            foreach ($return_data as $return_data) {
                $options[$return_data['RelatedStrategies_id']] = $return_data['RelatedStrategies_Name'];
            }

            return $options;
        } else {
            $options[0] = "-- เลือกยุทธศาสตร์ --";
            return $options;
        }
    }

    public function dropdown_StrategyRelate_forfiveyear($select)
    {
        if ($select != '' && $select != null) {
            $options[0] = "-- เลือกแผนย่อย --";
            $client = new Client();
            //echo $OverAllPlan_id;
            $res = $client->request('GET', Env("app.RestBaseURL") . '/api/StrategyRelateDetailListForPlanFiveYear/' . $select);
            $data_next = $res->getBody()->getContents('json');
            $data_next = json_decode($data_next, true);
            $return_data = $data_next['data'];

            foreach ($return_data as $return_data) {
                $options[$return_data['StrategyRelateDetail_id']] = "แผนย่อย=" . $return_data['ItemL1'] . "." . $return_data['ItemL2'] . "." . $return_data['ItemL3'] . " " . $return_data['Name'];
            }

            return $options;
        } else {
            $options[0] = "-- เลือกแผนย่อย --";
            return $options;
        }
    }

    public function dropdown_StrategyTarGet_forfiveyear($select)
    {
        if ($select != '' && $select != null) {
            $options[0] = "-- เลือกเป้าหมาย --";
            $client = new Client();
            //echo $OverAllPlan_id;
            $res = $client->request('GET', Env("app.RestBaseURL") . '/api/StrategyTarGetDetailListForPlanFiveYear/' . $select);
            $data_next = $res->getBody()->getContents('json');
            $data_next = json_decode($data_next, true);
            $return_data = $data_next['data'];

            foreach ($return_data as $return_data) {
                $options[$return_data['StrategyTarGetDetail_id']] = "เป้าหมาย=" . $return_data['ItemL1'] . "." . $return_data['ItemL2'] . "." . $return_data['ItemL3'] . " " . $return_data['Name'];
            }

            return $options;
        } else {
            $options[0] = "-- เลือกเป้าหมาย --";
            return $options;
        }
    }

    public function dropdown_StrategyIndicator_forfiveyear($select)
    {
        if ($select != '' && $select != null) {
            $options[0] = "-- เลือกตัวชี้วัด --";
            $client = new Client();
            //echo $OverAllPlan_id;
            $res = $client->request('GET', Env("app.RestBaseURL") . '/api/StrategyIndicatorDetailList/' . $select);
            $data_next = $res->getBody()->getContents('json');
            $data_next = json_decode($data_next, true);
            $return_data = $data_next['data'];

            foreach ($return_data as $return_data) {
                $options[$return_data['StrategyIndicatorDetail_id']] = "ตัวชี้วัด=" . $return_data['ItemL1'] . "." . $return_data['ItemL2'] . "." . $return_data['ItemL3'] . " " . $return_data['Name'];
            }

            return $options;
        } else {
            $options[0] = "-- เลือกตัวชี้วัด --";
            return $options;
        }
    }

    public function dropdown_OverallFiveYearPlan()
    {
        $options[0] = "-- เลือกโครงการ --";
        $client = new Client();
        //echo $OverAllPlan_id;
        $value_all = '6.' . session('GroupUserID'); // แยกตามกอง
        $res = $client->request('GET', Env("app.RestBaseURL") . '/api/MasterDropDownDoeb/' . $value_all . '/edit');
        $data_next = $res->getBody()->getContents('json');
        $data_next = json_decode($data_next, true);
        $return_data = $data_next['data'];

        foreach ($return_data as $return_data) {
            $options[$return_data['OverAllPlanFiveYear_id']] = $return_data['ProjectNameTH'];
        }

        return $options;
    }

    public function dropdown_SourceBudget()
    {
        $options[0] = "-- เลือกประเภทแหล่งเงินงบประมาณ --";
        try {
            $client = new Client();
            $value_all = '5.' . session('GroupUserID');
            $res = $client->request('GET', Env("app.RestBaseURL") . '/api/MasterDropDownDoeb/' . $value_all . '/edit');
            $data_dropdown = $res->getBody()->getContents('json');
            $data_dropdown = json_decode($data_dropdown, true);

            foreach ($data_dropdown['data'] as $row) {
                $options[$row['BudgetSourceType_id']] = $row['name_th'];
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        return $options;
    }

    public function dropdown_OverallPlanYear()
    {
        $options[0] = "-- เลือกแผน --";
        $client = new Client();
        //echo $OverAllPlan_id;
        $value_all = '7.' . session('GroupUserID');
        $res = $client->request('GET', Env("app.RestBaseURL") . '/api/MasterDropDownDoeb/' . $value_all . '/edit');
        $data_next = $res->getBody()->getContents('json');
        $data_next = json_decode($data_next, true);
        $return_data = $data_next['data'];

        foreach ($return_data as $return_data) {
            $options[$return_data['OverAllPlanYear_id']] = $return_data['ProjectNameTH'];
        }

        return $options;
    }

    public function dropdown_masterOverAllPlanOneYear()
    {
        $options[0] = "-- เลือกแผน --";
        try {
            $client = new Client();
            $value_all = '9.' . session('GroupUserID');
            $res = $client->request('GET', Env("app.RestBaseURL") . '/api/MasterDropDownDoeb/' . $value_all . '/edit');
            $data_dropdown = $res->getBody()->getContents('json');
            $data_dropdown = json_decode($data_dropdown, true);

            foreach ($data_dropdown['data'] as $row) {
                $options[$row['OverAllPlan_id']] = $row['PlanName'];
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        return $options;
    }

    public function dropdown_masterOverAllBudgetOneYear()
    {
        $options[0] = "-- เลือกแผน --";
        try {
            $client = new Client();
            $value_all = '13.' . session('GroupUserID');
            $res = $client->request('GET', Env("app.RestBaseURL") . '/api/MasterDropDownDoeb/' . $value_all . '/edit');
            $data_dropdown = $res->getBody()->getContents('json');
            $data_dropdown = json_decode($data_dropdown, true);

            foreach ($data_dropdown['data'] as $row) {
                $options[$row['OverAllBudget_id']] = $row['PlanName'];
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        return $options;
    }

    public function dropdown_masterOverAllBudgetOneYearV2()
    {
        $options[0] = "-- ทั้งหมด --";
        try {
            $client = new Client();
            $value_all = '13.' . session('GroupUserID');
            $res = $client->request('GET', Env("app.RestBaseURL") . '/api/MasterDropDownDoeb/' . $value_all . '/edit');
            $data_dropdown = $res->getBody()->getContents('json');
            $data_dropdown = json_decode($data_dropdown, true);

            foreach ($data_dropdown['data'] as $row) {
                $options[$row['OverAllBudget_id']] = $row['PlanName'];
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        return $options;
    }

    public function dropdown_StructureBudgetMain()
    {
        $options[0] = "-- เลือก --";
        try {
            $client = new Client();
            //echo $OverAllPlan_id;
            $res = $client->request('GET', Env("app.RestBaseURL") . '/api/StructureBudgetDropdownDoeb/');
            $data_dropdown = $res->getBody()->getContents('json');
            $data_dropdown = json_decode($data_dropdown, true);

            foreach ($data_dropdown['data'] as $row) {
                $options[$row['BudgetStructureDetail_id']] = $row['BudgetStructureDetail_Number'] . ' ' . $row['BudgetStructureDetail_Name'];
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        return $options;
    }

    public function dropdown_StructureBudgetMainLv2()
    {
        $options[0] = "-- เลือก --";
        return $options;
    }

    public function dropdown_StructureBudgetMainLv3()
    {
        $options[0] = "-- เลือก --";
        return $options;
    }

    public function dropdown_StructureBudgetMainLv2_foropen($select)
    {
        if ($select != '' && $select != null) {
            $options[0] = "-- เลือก --";
            $client = new Client();
            //echo $OverAllPlan_id;
            $res = $client->request('GET', Env("app.RestBaseURL") . '/api/StructureBudgetDropdownLv2Doeb/' . $select . '/edit');
            $data_dropdown = $res->getBody()->getContents('json');
            $data_dropdown = json_decode($data_dropdown, true);

            foreach ($data_dropdown['data'] as $row) {
                $options[$row['BudgetStructureDetail_id']] = $row['BudgetStructureDetail_Number'] . ' ' . $row['BudgetStructureDetail_Name'];
            }

            return $options;
        } else {
            $options[0] = "-- เลือก --";
            return $options;
        }
    }

    public function dropdown_StructureBudgetMainLv3_foropen($select)
    {
        if ($select != '' && $select != null) {
            $options[0] = "-- เลือก --";
            $client = new Client();
            //echo $OverAllPlan_id;
            $res = $client->request('GET', Env("app.RestBaseURL") . '/api/StructureBudgetDropdownLv3Doeb/' . $select . '/edit');
            $data_dropdown = $res->getBody()->getContents('json');
            $data_dropdown = json_decode($data_dropdown, true);

            foreach ($data_dropdown['data'] as $row) {
                $options[$row['BudgetStructureDetail_id']] = $row['BudgetStructureDetail_Number'] . ' ' . $row['BudgetStructureDetail_Name'];
            }

            return $options;
        } else {
            $options[0] = "-- เลือก --";
            return $options;
        }
    }

    public function dropdown_type_budget()
    {
        $options[0] = "-- เลือกประเภทงบประมาณ --";
        try {
            $client = new Client();
            //echo $OverAllPlan_id;
            $value_all = '15.' . session('GroupUserID');
            $res = $client->request('GET', Env("app.RestBaseURL") . '/api/MasterDropDownDoeb/' . $value_all . '/edit');
            $data_dropdown = $res->getBody()->getContents('json');
            $data_dropdown = json_decode($data_dropdown, true);

            foreach ($data_dropdown['data'] as $row) {
                $options[$row['TypeBudget_id']] = $row['name_th'];
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        return $options;
    }

    public function dropdown_master_plan_for_overplan()
    {
        $options[0] = "-- เลือกประเภทแผน --";
        try {
            $client = new Client();
            $value_all = '11.' . session('GroupUserID');
            $res = $client->request('GET', Env("app.RestBaseURL") . '/api/MasterDropDownDoeb/' . $value_all . '/edit');
            $data_dropdown = $res->getBody()->getContents('json');
            $data_dropdown = json_decode($data_dropdown, true);

            foreach ($data_dropdown['data'] as $row) {
                $options[$row['PlanType_id']] = $row['name_th'];
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        return $options;
    }

    public function dropdown_master_plan_for_budgetplan()
    {
        $options[0] = "-- เลือกประเภทแผน --";
        try {
            $client = new Client();
            $value_all = '12.' . session('GroupUserID');
            $res = $client->request('GET', Env("app.RestBaseURL") . '/api/MasterDropDownDoeb/' . $value_all . '/edit');
            $data_dropdown = $res->getBody()->getContents('json');
            $data_dropdown = json_decode($data_dropdown, true);

            foreach ($data_dropdown['data'] as $row) {
                $options[$row['PlanType_id']] = $row['name_th'];
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        return $options;
    }

    public function dropdown_masterOverAllPlanFiveYear()
    {
        $options[0] = "-- เลือกแผน --";
        try {
            $client = new Client();
            $value_all = '14.' . session('GroupUserID');
            $res = $client->request('GET', Env("app.RestBaseURL") . '/api/MasterDropDownDoeb/' . $value_all . '/edit');
            $data_dropdown = $res->getBody()->getContents('json');
            $data_dropdown = json_decode($data_dropdown, true);

            foreach ($data_dropdown['data'] as $row) {
                $options[$row['OverAllPlan_id']] = $row['PlanName'];
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        return $options;
    }

    public function dropdown_masterOverAllPlanOneYearV2()
    {
        $options[0] = "-- เลือกแผน --";
        try {
            $client = new Client();
            $value_all = '10.' . session('GroupUserID');
            $res = $client->request('GET', Env("app.RestBaseURL") . '/api/MasterDropDownDoeb/' . $value_all . '/edit');
            $data_dropdown = $res->getBody()->getContents('json');
            $data_dropdown = json_decode($data_dropdown, true);

            foreach ($data_dropdown['data'] as $row) {
                $options[$row['OverAllPlan_id']] = $row['PlanName'];
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        return $options;
    }

    public function dropdown_CostReference()
    {
        $options['-'] = "-- เลือก --";
        $options['1'] = "เอกสารราคากลาง";
        $options['2'] = "เอกสารเสนอราคา";
        $options['3'] = "ไม่มี";
        return $options;
    }

    public function convert_date_to_wording_thai($month)
    {
        switch ($month):
            case '01':
                $month_thai_use = "มกราคม";
                break;
            case '02':
                $month_thai_use = "กุมภาพันธ์";
                break;
            case '03':
                $month_thai_use = "มีนาคม";
                break;
            case '04':
                $month_thai_use = "เมษายน";
                break;
            case '05':
                $month_thai_use = "พฤษภาคม";
                break;
            case '06':
                $month_thai_use = "มิถุนายน";
                break;
            case '07':
                $month_thai_use = "กรกฎาคม";
                break;
            case '08':
                $month_thai_use = "สิงหาคม";
                break;
            case '09':
                $month_thai_use = "กันยายน";
                break;
            case '10':
                $month_thai_use = "ตุลาคม";
                break;
            case '11':
                $month_thai_use = "พฤศจิกายน";
                break;
            case '12':
                $month_thai_use = "ธันวาคม";
                break;
        endswitch;

        return $month_thai_use;
    }

    public function dropdown_year_report()
    {
        if (date("m") == '02') {

            $now_m = date("m") - 1;
            $now_m1 = date("m") + 10;
            $now_m2 = date("m") + 9;

            $now_y = date("Y") + 543;
            $now_y1 = date("Y") + 542;
            $now_y2 = date("Y") + 542;

            $month_01 = $this->convert_date_to_wording_thai($now_m) . "-" . $now_y;
            $month_02 = $this->convert_date_to_wording_thai($now_m1) . "-" . $now_y1;
            $month_03 = $this->convert_date_to_wording_thai($now_m2) . "-" . $now_y2;

            $options[$month_01] = $month_01;
            $options[$month_02] = $month_02;
            $options[$month_03] = $month_03;
        } elseif (date("m") == '01') {

            $now_m = date("m") + 11;
            $now_m1 = date("m") + 10;
            $now_m2 = date("m") + 9;

            $now_y = date("Y") + 542;
            $now_y1 = date("Y") + 542;
            $now_y2 = date("Y") + 542;

            $month_01_value = $now_m . "-" . $now_y;
            $month_02_value = $now_m1 . "-" . $now_y1;
            $month_03_value = $now_m2 . "-" . $now_y2;

            $month_01 = $this->convert_date_to_wording_thai($now_m) . "-" . $now_y;
            $month_02 = $this->convert_date_to_wording_thai($now_m1) . "-" . $now_y1;
            $month_03 = $this->convert_date_to_wording_thai($now_m2) . "-" . $now_y2;

            $options[$month_01_value] = $month_01;
            $options[$month_02_value] = $month_02;
            $options[$month_03_value] = $month_03;
        } elseif (date("m") == '03') {

            $now_m = date("m") - 1;
            $now_m1 = date("m") - 2;
            $now_m2 = date("m") + 9;

            $now_y = date("Y") + 543;
            $now_y1 = date("Y") + 543;
            $now_y2 = date("Y") + 542;

            $month_01_value = $now_m . "-" . $now_y;
            $month_02_value = $now_m1 . "-" . $now_y1;
            $month_03_value = $now_m2 . "-" . $now_y2;

            $month_01 = $this->convert_date_to_wording_thai($now_m) . "-" . $now_y;
            $month_02 = $this->convert_date_to_wording_thai($now_m1) . "-" . $now_y1;
            $month_03 = $this->convert_date_to_wording_thai($now_m2) . "-" . $now_y2;

            $options[$month_01_value] = $month_01;
            $options[$month_02_value] = $month_02;
            $options[$month_03_value] = $month_03;
        } else {
            $now_m = date("m") - 1;
            $now_m1 = date("m") - 2;
            $now_m2 = date("m") - 3;

            $now_y = date("Y") + 543;
            $now_y1 = date("Y") + 543;
            $now_y2 = date("Y") + 543;

            $month_01_value = $now_m . "-" . $now_y;
            $month_02_value = $now_m1 . "-" . $now_y1;
            $month_03_value = $now_m2 . "-" . $now_y2;

            $month_01 = $this->convert_date_to_wording_thai($now_m) . "-" . $now_y;
            $month_02 = $this->convert_date_to_wording_thai($now_m1) . "-" . $now_y1;
            $month_03 = $this->convert_date_to_wording_thai($now_m2) . "-" . $now_y2;

            $options[$month_01_value] = $month_01;
            $options[$month_02_value] = $month_02;
            $options[$month_03_value] = $month_03;
        }

        return $options;
    }

    public function dropdown_report_01()
    {
        $options['-'] = "-- กรุณาเลือก --";

        return $options;
    }

    function monththaishow()
    {
        $monthtai = array(
            'เดือนตุลาคม',
            'เดือนพฤศจิกายน',
            'เดือนธันวาคม',
            'เดือนมกราคม',
            'เดือนกุมภาพันธ์',
            'เดือนมีนาคม',
            'เดือนเมษายน',
            'เดือนพฤษภาคม',
            'เดือนมิถุนายน',
            'เดือนกรกฎาคม',
            'เดือนสิงหาคม',
            'เดือนกันยายน'
        );

        return $monthtai;
    }

    function monththaishortshow()
    {
        $monthtai = array(
            'ต.ค',
            'พ.ย',
            'ธ.ค',
            'ม.ค',
            'ก.พ',
            'มี.ค',
            'เม.ย',
            'พ.ค',
            'มิ.ย',
            'ก.ค',
            'ส.ค',
            'ก.ย'
        );

        return $monthtai;
    }

    function monththaiNumshow()
    {
        $monthtai = array(
            '10',
            '11',
            '12',
            '01',
            '02',
            '03',
            '04',
            '05',
            '06',
            '07',
            '08',
            '09'
        );

        return $monthtai;
    }

    public function dropdown_typegroup_use()
    {
        $options['-'] = "-- กรุณาเลือก --";
        $options['2'] = "กรมธุรกิจพลังงาน";
        $options['3'] = "สำนักงานพลังงานจังหวัด";
        return $options;
    }

    public function dropdown_groupid()
    {
        $options[0] = "-- กรุณาเลือก --";
        try {
            $client = new Client();
            $value_all = '16.0000';
            $res = $client->request('GET', Env("app.RestBaseURL") . '/api/MasterDropDownDoeb/' . $value_all . '/edit');
            $data_dropdown = $res->getBody()->getContents('json');
            $data_dropdown = json_decode($data_dropdown, true);

            foreach ($data_dropdown['data'] as $row) {
                $options[$row['GroupID']] = $row['GroupNameTH'];
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        return $options;
    }
}
