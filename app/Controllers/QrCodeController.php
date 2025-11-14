<?php

namespace App\Controllers;

use App\Controllers\BaseController;


use Config\Paths;
use Generator as GlobalGenerator;
use SimpleSoftwareIO\QrCode\Generator;
// use SimpleSoftwareIO\QrCode\Generator;

use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Label\Label;
use Endroid\QrCode\Label\Font\Font;
use Endroid\QrCode\Logo\Logo;
use Endroid\QrCode\RoundBlockSizeMode;
use Endroid\QrCode\Writer\PngWriter;
use Endroid\QrCode\Writer\ValidationException;

use GuzzleHttp\Client;

use Exception;


class QrCodeController extends BaseController
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

        error_reporting(0);
        helper("form");

        $input = $this->request->getRawInput();

        if ($input["search_value"] == "search_value") {

            $data_search1 = $input["data_search1"];
            $data_search2 = $input["data_search2"];
            $data_search3 = $input["data_search3"];
        } else {
            $data_search1 = "";
            $data_search2 = "";
            $data_search3 = "";
        }

        $this->pageData["data_search1"] = $data_search1; //ชื่อแผน
        $this->pageData["data_search2"] = $data_search2; //รหัสอ้างอิง
        $this->pageData["data_search3"] = $data_search3; //สถานะ

        $client = new Client();
        $res = $client->request('GET', Env("app.RestBaseURL") . '/api/qr-code', [
            'query' => [
                'search_value' => $input["search_value"],
                'data_search1' => $data_search1,
                'data_search2' => $data_search2,
                'data_search3' => $data_search3,
            ],
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('access_token'),
            ]
        ]);

        $data = $res->getBody()->getContents('json');
        $data = json_decode($data, true);


        $this->pageData['user_data'] = $data['data'];
        $this->pageData['pagination_link'] = $data['pagination_link'];


        return view($this->pageData['page'] . '/' . 'index', $this->pageData);
    }

    function add()
    {

        $client = new Client();
        $res = $client->request('GET', Env("app.RestBaseURL") . '/api/type', [

            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('access_token'),
            ]
        ]);

        $data = $res->getBody()->getContents('json');
        $data = json_decode($data, true);
        $this->pageData['typeFile'] = $data['data'];


        $res = $client->request('GET', Env("app.RestBaseURL") . '/api/file-type', [

            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('access_token'),
            ]
        ]);

        $data = $res->getBody()->getContents('json');
        $data = json_decode($data, true);
        $this->pageData['fileType'] = $data['data'];


        //  $this->pageData['typeFile'] = (new TypeModel())->orderBy('id', 'ASC')->findAll();
        //  $this->pageData['fileType'] = (new FileTypeModel())
        //      ->where('IsActive', 'Y')->orderBy('id', 'ASC')->findAll();



        $arrlogo = array(
            ['id' => '1', 'logo_name' => 'logo1'],
            ['id' => '2', 'logo_name' => 'logo2'],
            ['id' => '3', 'logo_name' => 'logo3'],
            ['id' => '4', 'logo_name' => 'logo4'],
            ['id' => '5', 'logo_name' => 'logo5'],
        );
        $this->pageData['logo'] = $arrlogo;

        $arrsizeqr = array(
            ['id' => '1', 'sizeqr_name' => '100x100'],
            ['id' => '2', 'sizeqr_name' => '200x200'],
            ['id' => '3', 'sizeqr_name' => '300x300'],
            ['id' => '4', 'sizeqr_name' => '400x400'],
            ['id' => '5', 'sizeqr_name' => '500x500'],
            ['id' => '6', 'sizeqr_name' => '600x600'],
            ['id' => '7', 'sizeqr_name' => '700x700'],
            ['id' => '8', 'sizeqr_name' => '800x800'],
            ['id' => '9', 'sizeqr_name' => '900x900'],
            ['id' => '10', 'sizeqr_name' => '1000x1000'],
        );
        $this->pageData['sizeqr'] = $arrsizeqr;

        //$this->pageData['simple'] = (new Generator())->size(120)->generate('http://google.com' );
        $this->pageData['qrcode'] = $this->genQrCode("DEMO");


        return view($this->pageData['page'] . '/' . 'add', $this->pageData);
    }

    function store()
    {


        $client = new Client();
        $res_type = $client->request('GET', Env("app.RestBaseURL") . '/api/type', [

            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('access_token'),
            ]
        ]);

        $data_type = $res_type->getBody()->getContents('json');
        $data_type = json_decode($data_type, true);
        $this->pageData['typeFile'] = $data_type['data'];


        $res_fileType = $client->request('GET', Env("app.RestBaseURL") . '/api/file-type', [

            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('access_token'),
            ]
        ]);

        $data_fileType = $res_fileType->getBody()->getContents('json');
        $data_fileType = json_decode($data_fileType, true);
        $this->pageData['fileType'] = $data_fileType['data'];

       // $this->pageData['typeFile'] = (new TypeModel())->orderBy('id', 'ASC')->findAll();

       // $this->pageData['fileType'] = (new FileTypeModel())->orderBy('id', 'ASC')->findAll();
        $rules = [
            //  'txtref_code' => 'required|min_length[3]',
            'txttitle' => 'required',
            'txtmake' => 'required',
            'rdotype' => 'required',
            'txtstartdate' => 'required',
            'txtenddate' => 'required',
            'txtlogo' => 'required',
            'txtsizeqr' => 'required',
        ];

        if ($this->request->getFile('rdotype') == '3') {
            $rules = array_merge($rules, [
                'rdofiletype' => 'required',
            ]);
        }


        if ($this->validate($rules)) {
            try {
             //   $objDoc = $this->genDocNo('0001');
              //  if ($objDoc["status"] == false) {
               //     throw new Exception("พบข้อผิดพลาดการสร้างเลขที่เอกสาร (" . $objDoc["msg"] . ")");
               // }
                $postData = [
                   // 'ref_code' => $objDoc['value'], //   $this->request->getVar('txtref_code'),
                  //  'gen_qr_code' => sha1($objDoc['value']),
                    'title' => $this->request->getVar('txttitle'),
                    'make' => $this->request->getVar('txtmake'),
                    'id_type' => $this->request->getVar('rdotype'),
                    'start_date' => $this->request->getVar('txtstartdate'),
                    'end_date' => $this->request->getVar('txtenddate'),
                    'logo_id' => $this->request->getVar('txtlogo') ?? '',
                    'textqrcode' => $this->request->getVar('txttextqrcode') ?? '',
                    'sizeqr_id' => $this->request->getVar('txtsizeqr') ?? '',

                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ];


                if ($this->request->getVar('rdotype') == '1') {
                    $postData['clink'] = $this->request->getVar('txtlink') ?? '';
                } else if ($this->request->getVar('rdotype') == '2') {
                    $postData['ctext'] = $this->request->getVar('txttext') ?? '';
                } else if ($this->request->getVar('rdotype') == '3') {

                    // ถ้าอัพโหลดไฟล์
                    if ($this->request->getFile('uploadfile')) {
                        $file = $this->request->getFile('uploadfile');
                        if ($file->isValid() && !$file->hasMoved()) {
                            $newName = $file->getRandomName();
                            // ปรับเส้นทางการเคลื่อนย้ายไฟล์ไปยังโฟลเดอร์ `assets`

                            $path = "uploads/Files/" . date("Ym");
                            $file->move($path, $newName);


                            $ext = (explode(".", $newName)); # extra () to prevent notice
                            // $ext = pathinfo($newName, PATHINFO_EXTENSION);
                            $postData['cfile_type'] = $ext[1] ?? '';
                            $postData['cfile_size'] = $file->getSize() ?? '';
                            $postData['cfile_name'] = $newName ?? '';
                            $postData['cfile_path'] = $path . "/" . $newName ?? '';
                        }
                    }
                }


                $res_qrCode = $client->post(Env("app.RestBaseURL") . '/api/qr-code',[
                    "body" => json_encode($postData),
                    

                ]);
                

                
               // $id_qr_code = $this->model->insert($postData);

                $postData = [
                    'id_type_file' => $this->request->getVar('rdotype') ?? '',
                    'id_qr_code' => $res_qrCode,
                ];




                // ถ้ากรอกลิงค์
                if ($this->request->getVar('txtlink')) {
                    $postData = array_merge($postData, [
                        'name'  =>  $this->request->getVar('txtlink') ?? ''
                    ]);
                }

                // ถ้ากรอกข้อความ
                if ($this->request->getVar('txttext')) {
                    $postData = array_merge($postData, [
                        'name'  =>  $this->request->getVar('txttext') ?? ''
                    ]);
                }

                // ถ้าอัพโหลดไฟล์
                if ($this->request->getFile('uploadfile')) {
                    $file = $this->request->getFile('uploadfile');
                    if ($file->isValid() && !$file->hasMoved()) {
                        $newName = $file->getRandomName();
                        // ปรับเส้นทางการเคลื่อนย้ายไฟล์ไปยังโฟลเดอร์ `assets`
                        $file->move(ROOTPATH . 'public/assets', $newName);

                        $postData = array_merge($postData, [
                            'name'  =>   $newName,
                            'rdofiletype'  =>   $this->request->getVar('rdofiletype') ?? ''
                        ]);
                    }
                }

                // (new QrCodeFormModel())->insert($postData);

                $session = \Config\Services::session();

                $session->setFlashdata('success', 'User Data Added');

                return $this->response->redirect(site_url($this->pageData['routeGroup']));
            } catch (\Exception $e) {
                exit($e->getMessage());
            }
        } else {
            $this->pageData['error'] = $this->validator;
            return view($this->pageData['page'] . '/' . 'add', $this->pageData);
        }
    }

    // show single user
    function edit($id = null)
    {

        $client = new Client();
        $res_type = $client->request('GET', Env("app.RestBaseURL") . '/api/type', [

            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('access_token'),
            ]
        ]);

        $data_type = $res_type->getBody()->getContents('json');
        $data_type = json_decode($data_type, true);
        $this->pageData['typeFile'] = $data_type['data'];


        $res_fileType = $client->request('GET', Env("app.RestBaseURL") . '/api/file-type', [

            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('access_token'),
            ]
        ]);

        $data_fileType = $res_fileType->getBody()->getContents('json');
        $data_fileType = json_decode($data_fileType, true);
        $this->pageData['fileType'] = $data_fileType['data'];

        //  $this->pageData['typeFile'] = (new TypeModel())->orderBy('id', 'ASC')->findAll();
        // $this->pageData['fileType'] = (new FileTypeModel())
        //     ->where('IsActive', 'Y')->orderBy('id', 'ASC')->findAll();


        $res_qrCode = $client->request('GET', Env("app.RestBaseURL") . '/api/qr-code/'.$id, [

            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('access_token'),
            ]
        ]);

        $data_qrCode = $res_qrCode->getBody()->getContents('json');
        $data_qrCode = json_decode($data_qrCode, true);

        $this->pageData['user_data'] = $data_qrCode['data']; // $this->model->where('id', $id)->first();
        $this->pageData['qr_codeform'] = ''; //(new QrCodeFormModel())->where('id_qr_code', $id)->first();

        $arrlogo = array(
            ['id' => '1', 'logo_name' => 'logo1'],
            ['id' => '2', 'logo_name' => 'logo2'],
            ['id' => '3', 'logo_name' => 'logo3'],
            ['id' => '4', 'logo_name' => 'logo4'],
            ['id' => '5', 'logo_name' => 'logo5'],
        );
        $this->pageData['logo'] = $arrlogo;

        $arrsizeqr = array(
            ['id' => '1', 'sizeqr_name' => '100x100'],
            ['id' => '2', 'sizeqr_name' => '200x200'],
            ['id' => '3', 'sizeqr_name' => '300x300'],
            ['id' => '4', 'sizeqr_name' => '400x400'],
            ['id' => '5', 'sizeqr_name' => '500x500'],
            ['id' => '6', 'sizeqr_name' => '600x600'],
            ['id' => '7', 'sizeqr_name' => '700x700'],
            ['id' => '8', 'sizeqr_name' => '800x800'],
            ['id' => '9', 'sizeqr_name' => '900x900'],
            ['id' => '10', 'sizeqr_name' => '1000x1000'],
        );
        $this->pageData['sizeqr'] = $arrsizeqr;

        //$this->pageData['simple'] = (new Generator())->size(120)->generate('http://google.com' );
        $this->pageData['qrcode'] =  $this->genQrCode(base_url('viewqrcode?id=' . $this->pageData['user_data']['gen_qr_code']));

        return view($this->pageData['page'] . '/' . 'edit', $this->pageData);
    }



    # function สร้าง QR Code

    function genQrCode($param)
    {


        $writer = new PngWriter();

        // Create QR code
        $qrCode = new QrCode(
            data: $param,
            encoding: new Encoding('UTF-8'),
            errorCorrectionLevel: ErrorCorrectionLevel::Low,
            size: 300,
            margin: 10,
            roundBlockSizeMode: RoundBlockSizeMode::Margin,
            foregroundColor: new Color(0, 0, 0),
            backgroundColor: new Color(255, 255, 255)
        );

        // Create generic logo
        $logo = new Logo(
            path: 'dist/img/icon_eg.png',
            resizeToWidth: 50,
            punchoutBackground: false
        );

        // Create generic label
        $label = new Label(
            text: 'กรมธุรกิจพลังงาน',
            font: new Font(__DIR__ . '../../THSarabunNew/THSarabunNew.ttf', 16),


            textColor: new Color(0, 0, 0)
        );

        $result = $writer->write($qrCode, $logo, $label);
        return $result->getDataUri();
    }


    function GenerateQrCode()
    {

        $writer = new PngWriter();

        $id = $this->request->getVar('id');
        $size = 300;
        $logo = 'dist/img/icon_eg.png';
        $label = '';

        if ($this->request->getVar('text')) {
            $label = $this->request->getVar('text');
        }

        if ($this->request->getVar('size')) {
            $size = $this->request->getVar('size');
        }

        if ($this->request->getVar('logo')) {
            $logo_id = $this->request->getVar('logo');
            if ($logo_id == 1) {
                $logo = 'dist/img/QrCode/icon_eg.png';
            } else if ($logo_id == 2) {
                $logo = 'dist/img/QrCode/doeb.png';
            } else if ($logo_id == 3) {
                $logo = 'dist/img/QrCode/doeb_logo.jpg';
            } else if ($logo_id == 4) {
                $logo = 'dist/img/QrCode/logo2.jpg';
            } else if ($logo_id == 5) {
                $logo = 'dist/img/QrCode/logo3.jpg';
            }
        }

        $fontSize = 16;
        if ($this->request->getVar('size')) {
            $size_id = $this->request->getVar('size');
            if ($size_id == '1') {
                $size = 100;
                $fontSize = 12;
            } else if ($size_id == '2') {
                $size = 200;
                $fontSize = 14;
            } else if ($size_id == '3') {
                $size = 300;
                $fontSize = 16;
            } else if ($size_id == '4') {
                $size = 400;
                $fontSize = 20;
            } else if ($size_id == '5') {
                $size = 500;
                $fontSize = 24;
            } else if ($size_id == '6') {
                $size = 600;
            } else if ($size_id == '7') {
                $size = 700;
                $fontSize = 28;
            } else if ($size_id == '8') {
                $size = 800;
                $fontSize = 32;
            } else if ($size_id == '9') {
                $size = 900;
                $fontSize = 36;
            } else if ($size_id == '10') {
                $size = 1000;
                $fontSize = 40;
            }
        }


        $data = base_url('viewqrcode?id=' . $id);
        if ($id == "DEMO") {
            $data = "DEMO";
        }
        // Create QR code
        $qrCode = new QrCode(
            data: $data,
            encoding: new Encoding('UTF-8'),
            errorCorrectionLevel: ErrorCorrectionLevel::Low,
            size: $size,
            margin: 10,
            roundBlockSizeMode: RoundBlockSizeMode::Margin,
            foregroundColor: new Color(0, 0, 0),
            backgroundColor: new Color(255, 255, 255)
        );

        // Create generic logo
        $logo = new Logo(
            path: $logo,
            resizeToWidth: intval($size / 6),
            punchoutBackground: false
        );

        // Create generic label
        $label = new Label(
            text: $label,
            font: new Font(__DIR__ . '../../THSarabunNew/THSarabunNew.ttf', $fontSize),
            textColor: new Color(0, 0, 0)
        );

        $result = $writer->write($qrCode, $logo, $label);
        return $result->getDataUri();
    }

    function downloadQrCode()
    {

        $writer = new PngWriter();

        $id = $this->request->getVar('id');
        $size = 300;
        $logo = 'dist/img/icon_eg.png';
        $label = '';

        if ($this->request->getVar('text')) {
            $label = $this->request->getVar('text');
        }


        if ($this->request->getVar('logo')) {
            $logo_id = $this->request->getVar('logo');
            if ($logo_id == 1) {
                $logo = 'dist/img/QrCode/icon_eg.png';
            } else if ($logo_id == 2) {
                $logo = 'dist/img/QrCode/doeb.png';
            } else if ($logo_id == 3) {
                $logo = 'dist/img/QrCode/doeb_logo.jpg';
            } else if ($logo_id == 4) {
                $logo = 'dist/img/QrCode/logo2.jpg';
            } else if ($logo_id == 5) {
                $logo = 'dist/img/QrCode/logo3.jpg';
            }
        }


        $fontSize = 16;
        if ($this->request->getVar('size')) {
            $size_id = $this->request->getVar('size');
            if ($size_id == '1') {
                $size = 100;
                $fontSize = 12;
            } else if ($size_id == '2') {
                $size = 200;
                $fontSize = 14;
            } else if ($size_id == '3') {
                $size = 300;
                $fontSize = 16;
            } else if ($size_id == '4') {
                $size = 400;
                $fontSize = 20;
            } else if ($size_id == '5') {
                $size = 500;
                $fontSize = 24;
            } else if ($size_id == '6') {
                $size = 600;
            } else if ($size_id == '7') {
                $size = 700;
                $fontSize = 28;
            } else if ($size_id == '8') {
                $size = 800;
                $fontSize = 32;
            } else if ($size_id == '9') {
                $size = 900;
                $fontSize = 36;
            } else if ($size_id == '10') {
                $size = 1000;
                $fontSize = 40;
            }
        }

        $data = base_url('viewqrcode?id=' . $id);

        // Create QR code
        $qrCode = new QrCode(
            data: $data,
            encoding: new Encoding('UTF-8'),
            errorCorrectionLevel: ErrorCorrectionLevel::Low,
            size: $size,
            margin: 10,
            roundBlockSizeMode: RoundBlockSizeMode::Margin,
            foregroundColor: new Color(0, 0, 0),
            backgroundColor: new Color(255, 255, 255)
        );

        // Create generic logo
        $logo = new Logo(
            path: $logo,
            resizeToWidth: intval($size / 7),
            punchoutBackground: false
        );

        // Create generic label
        $label = new Label(
            text: $label,
            font: new Font(__DIR__ . '../../THSarabunNew/THSarabunNew.ttf', $fontSize),


            textColor: new Color(0, 0, 0)
        );

        $result = $writer->write($qrCode, $logo, $label);


        return $result->getDataUri();
    }


    function update()
    {

        $id = $this->request->getVar('hid');

        $rules = [
            // 'txtref_code' => 'required|min_length[3]',
            'txttitle' => 'required',
            'txtmake' => 'required',
            'rdotype' => 'required',
            'txtstartdate' => 'required',
            'txtenddate' => 'required',
        ];




        if ($this->validate($rules)) {
            try {
                $postData = [
                    // 'ref_code' => $this->request->getVar('txtref_code'),
                    'title' => $this->request->getVar('txttitle'),
                    'make' => $this->request->getVar('txtmake'),
                    'id_type' => $this->request->getVar('rdotype'),
                    'start_date' => $this->request->getVar('txtstartdate'),
                    'end_date' => $this->request->getVar('txtenddate'),
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ];
                $this->model->update($id, $postData);


                $postData = [
                    'id_type_file' => $this->request->getVar('rdotype') ?? '',
                ];

                if ($this->request->getVar('txtlink')) {
                    $postData = array_merge($postData, [
                        'name'  =>  $this->request->getVar('txtlink') ?? ''
                    ]);
                }

                if ($this->request->getVar('txttext')) {
                    $postData = array_merge($postData, [
                        'name'  =>  $this->request->getVar('txttext') ?? ''
                    ]);
                }

                if ($this->request->getVar('oldfile')) {
                    $postData = array_merge($postData, [
                        'name'  =>  $this->request->getVar('oldfile') ?? ''
                    ]);
                }


                if ($this->request->getFile('uploadfile')) {
                    $file = $this->request->getFile('uploadfile');
                    if ($file->isValid() && !$file->hasMoved()) {
                        $newName = $file->getRandomName();
                        // ปรับเส้นทางการเคลื่อนย้ายไฟล์ไปยังโฟลเดอร์ `assets`
                        $file->move(ROOTPATH . 'public/assets', $newName);
                        $postData = array_merge($postData, [
                            'name'  =>   $newName
                        ]);
                    }
                }

                $QrCodeForm = (new QrCodeFormModel())->select('id')->where('id_qr_code', $id)->first();
                // dd($QrCodeForm);
                if ($QrCodeForm) {
                    $idQrCodeForm = $QrCodeForm['id'];
                    (new QrCodeFormModel())
                        ->update($idQrCodeForm, $postData);
                } else {
                    $postData = array_merge(
                        $postData,
                        ['id_qr_code' =>  $id]
                    );
                    (new QrCodeFormModel())->insert($postData);
                }




                $session = \Config\Services::session();

                $session->setFlashdata('success', 'User Data Updated');

                return $this->response->redirect(site_url($this->pageData['routeGroup']));
            } catch (\Exception $e) {
                exit($e->getMessage());
            }
        } else {
            $this->pageData['user_data'] = $this->model->where('id', $id)->first();
            $this->pageData['error'] = $this->validator;
            return view('edit_data', $this->pageData);
        }
    }

    function delete($id)
    {
        $this->model->update($id, ['status' => 'DELETE']);

        $session = \Config\Services::session();

        $session->setFlashdata('success', 'User Data Deleted');

        return $this->response->redirect(site_url($this->pageData['routeGroup']));
    }

    function validateLink()
    {

        $rules = [
            'link' => 'required',
        ];

        if ($this->validate($rules)) {
            // return json_encode(['status' => true]);
        } else {
            return "false"; // json_encode(['status' => false, 'msg' => $this->validator->getErrors()]);
        }

        $input = $this->request->getPost();

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $input['link']);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 3);
        $curlresult = curl_exec($ch);
        curl_close($ch);

        if (empty($curlresult)) {
            return "false"; // json_encode(['status' => false, 'msg' => 'ไม่สามารถติดต่อเซิร์ฟเวอร์ได้']);
        } else {
            return "true"; // json_encode(['status' => true]);
        }
        // echo $curlresult;
    }
}
