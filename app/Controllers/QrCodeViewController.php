<?php

namespace App\Controllers;

use App\Controllers\BaseController;


use SimpleSoftwareIO\QrCode\Generator;
// use SimpleSoftwareIO\QrCode\Generator;
use GuzzleHttp\Client;

class QrCodeViewController extends BaseController
{
    protected $model;
    protected $routeGroup;
    protected $pageData;


    public function __construct()
    {
        helper(['form', 'url']);
       
        $this->pageData = [
            'title' => 'ระบบบริหารด้านยุทธศาสตร์',
            'subtitle' => 'ระบบสร้าง QR Code',
            'page' => 'gen_qr_code',
            'routeGroup' => 'qrcode',
            'validation' => \Config\Services::validation()
        ];
    }


    public function index()
    {
        $id = $_GET['id'];


        $client = new Client();
        $res_qrCode = $client->request('GET', Env("app.RestBaseURL") . '/api/qr-code-view/'.$id, [

            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('access_token'),
            ]
        ]);

        $data_qrCode = $res_qrCode->getBody()->getContents('json');
        $data_qrCode = json_decode($data_qrCode, true);

        $data= $data_qrCode['data']; // $this->model->where('id', $id)->first();


        /*
        $data = $this->model
            ->select("qr_code.* , type.type_file_name as type_file_name,
            Format(qr_code.created_at,'dd/MM/yyyy','th-TH') AS created_atTH,
            Format(qr_code.start_date,'dd/MM/yyyy','th-TH') AS start_dateTH,
            Format(qr_code.end_date,'dd/MM/yyyy','th-TH') AS end_dateTH,
             DATEDIFF(day,GETDATE(), end_date) AS DayBalance
            ")
            ->join('type', 'type.id = qr_code.id_type', 'left')
            ->where("qr_code.status IS NULL")
            ->where("gen_qr_code", "$id")->get()->getRowArray();
        */
        if ($data == null) {
            echo "ไม่พบข้อมูล";
            exit();
        } else {

            /*
            if ($data['DayBalance'] < 0) {
                echo "QR Code หมดอายุ";
                exit();
            }*/

            $this->pageData['data'] = $data;


            if ($data['id_type'] == '1') {
                // echo $data['clink'];
                return  redirect()->to($data['clink']);
                exit();
            } else if ($data['id_type'] == '2') {
                echo $data['ctext'];
                exit();
            } else if ($data['id_type'] == '3') {

                if ($data['cfile_type'] == 'pdf') {
                    header("Content-type: application/pdf");
                    header("Content-Disposition: inline; filename=" . $data['cfile_path']);
                    header("Content-Length: " . filesize($data['cfile_path']));
                    header("Content-Transfer-Encoding: binary");
                    header("Accept-Ranges: bytes");
                    @readfile($data['cfile_path']);
                    exit();
                } else if ($data['cfile_type'] == 'jpg' || $data['cfile_type'] == 'jpeg') {
                    header("Content-type: image/jpeg");
                    header("Content-Disposition: inline; filename=" . $data['cfile_path']);
                    header("Content-Length: " . filesize($data['cfile_path']));
                    header("Content-Transfer-Encoding: binary");
                    header("Accept-Ranges: bytes");
                    @readfile($data['cfile_path']);
                    exit();
                } else if ($data['cfile_type'] == 'png') {
                    header("Content-type: image/png");
                    header("Content-Disposition: inline; filename=" . $data['cfile_path']);
                    header("Content-Length: " . filesize($data['cfile_path']));
                    header("Content-Transfer-Encoding: binary");
                    header("Accept-Ranges: bytes");
                    @readfile($data['cfile_path']);
                    exit();
                } else if ($data['cfile_type'] == 'gif') {
                    header("Content-type: image/gif");
                    header("Content-Disposition: inline; filename=" . $data['cfile_path']);
                    header("Content-Length: " . filesize($data['cfile_path']));
                    header("Content-Transfer-Encoding: binary");
                    header("Accept-Ranges: bytes");
                    @readfile($data['cfile_path']);
                    exit();
                } else if ($data['cfile_type'] == 'doc' || $data['cfile_type'] == 'docx') {
                    header("Content-type: application/msword");
                    header("Content-Disposition: inline; filename=" . $data['cfile_path']);
                    header("Content-Length: " . filesize($data['cfile_path']));
                    header("Content-Transfer-Encoding: binary");
                    header("Accept-Ranges: bytes");
                    @readfile($data['cfile_path']);
                    exit();
                } else if ($data['cfile_type'] == 'xls' || $data['cfile_type'] == 'xlsx') {
                    header("Content-type: application/vnd.ms-excel");
                    header("Content-Disposition: inline; filename=" . $data['cfile_path']);
                    header("Content-Length: " . filesize($data['cfile_path']));
                    header("Content-Transfer-Encoding: binary");
                    header("Accept-Ranges: bytes");
                    @readfile($data['cfile_path']);
                    exit();
                } else if ($data['cfile_type'] == 'ppt' || $data['cfile_type'] == 'pptx') {
                    header("Content-type: application/vnd.ms-powerpoint");
                    header("Content-Disposition: inline; filename=" . $data['cfile_path']);
                    header("Content-Length: " . filesize($data['cfile_path']));
                    header("Content-Transfer-Encoding: binary");
                    header("Accept-Ranges: bytes");
                    @readfile($data['cfile_path']);
                    exit();
                } else if ($data['cfile_type'] == 'csv') {
                    header("Content-type: application/vnd.ms-excel");
                    header("Content-Disposition: inline; filename=" . $data['cfile_path']);
                    header("Content-Length: " . filesize($data['cfile_path']));
                    header("Content-Transfer-Encoding: binary");
                    header("Accept-Ranges: bytes");
                    @readfile($data['cfile_path']);
                    exit();
                }
            }
        }

        return view($this->pageData['page'] . '/' . 'viewQrCode', $this->pageData);
    }
}
