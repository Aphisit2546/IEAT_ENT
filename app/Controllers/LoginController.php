<?php

namespace App\Controllers;

use DateTime;
use Exception;

use GuzzleHttp\Client;

class LoginController extends BaseController
{
    protected $programCode = "Login_doeb";
    //protected $check_session;
    protected $model;
    protected $dropdown;
    protected $pageData;
    protected $pageName;
    protected $routeGroup;
    protected $function;

    public function __construct() {}

    public function index()
    {
        // iclude helper form
        helper("form");
        $data["pageTitle"] = "login";

        $session = session();
        $session->destroy();

        return view('login', $data);
    }

    public function auth()
    {
        // iclude helper form
        error_reporting(0);
        helper("form");
        $sess = session();
        // $data["pageTitle"] = "Login";

        $input = $this->request->getRawInput();

        $username = $input['username'];
        $password = $input['password'];

        $input_check_login = array();
        $input_check_login['usn'] = $username;
        $input_check_login['pwd'] = $password;

        $client = new Client();
        $input = $this->request->getRawInput();
        $res = $client->request('GET', Env("app.RestBaseURL") . '/api/LoginDoeb', [
            "body" => json_encode($input_check_login)
        ]);

        $data = $res->getBody()->getContents('json');
        $data = json_decode($data, true);

        $status_check = $data['data']['status_check'];

        if ($status_check == 'true') {
            $sessData = [
                "username" => $data['data']['usn'],
                "AccountName" => $data['data']['AccountName'],
                "GroupID" => $data['data']['GroupID'],
                "GroupUserID" => $data['data']['GroupUserID'],
                "GroupTypeID" => $data['data']['GroupTypeID'],
                "GroupName" => $data['data']['AgencyNameTH'],

                "GroupSet10" => $data['data']['GroupSet10'],
                "GroupSet1001" => $data['data']['GroupSet1001'],
                "GroupSet1002" => $data['data']['GroupSet1002'],
                "GroupSet1003" => $data['data']['GroupSet1003'],
                "GroupSet1004" => $data['data']['GroupSet1004'],
                "GroupSet1005" => $data['data']['GroupSet1005'],
                "GroupSet20" => $data['data']['GroupSet20'],
                "GroupSet2001" => $data['data']['GroupSet2001'],
                "GroupSet2002" => $data['data']['GroupSet2002'],
                "GroupSet2003" => $data['data']['GroupSet2003'],
                "GroupSet2004" => $data['data']['GroupSet2004'],
                "GroupSet2005" => $data['data']['GroupSet2005'],
                "GroupSet30" => $data['data']['GroupSet30'],
                "GroupSet3001" => $data['data']['GroupSet3001'],
                "GroupSet3002" => $data['data']['GroupSet3002'],
                "GroupSet3003" => $data['data']['GroupSet3003'],
                "GroupSet3004" => $data['data']['GroupSet3004'],
                "GroupSet3005" => $data['data']['GroupSet3005'],
                "GroupSet3006" => $data['data']['GroupSet3006'],
                "GroupSet3007" => $data['data']['GroupSet3007'],
                "GroupSet3008" => $data['data']['GroupSet3008'],
                "GroupSet3009" => $data['data']['GroupSet3009'],
                "GroupSet40" => $data['data']['GroupSet40'],
                "GroupSet4001" => $data['data']['GroupSet4001'],
                "GroupSet4002" => $data['data']['GroupSet4002'],
                "GroupSet50" => $data['data']['GroupSet50'],
                "GroupSet5001" => $data['data']['GroupSet5001'],
                "GroupSet5002" => $data['data']['GroupSet5002'],
                "GroupSet5003" => $data['data']['GroupSet5003'],
                "GroupSet5004" => $data['data']['GroupSet5004'],
                "GroupSet5005" => $data['data']['GroupSet5005'],
                "GroupSet5005P" => $data['data']['GroupSet5005P'],
                "GroupSet60" => $data['data']['GroupSet60'],
                "GroupSet6001" => $data['data']['GroupSet6001'],
                "GroupSet6002" => $data['data']['GroupSet6002'],
                "GroupSet6003" => $data['data']['GroupSet6003'],
                "GroupSet6004" => $data['data']['GroupSet6004'],
                "GroupSet6005" => $data['data']['GroupSet6005'],
                "GroupSet6004P" => $data['data']['GroupSet6004P'],
                "GroupSet6005P" => $data['data']['GroupSet6005P'],
                "GroupSet70" => $data['data']['GroupSet70'],
                "GroupSet7001" => $data['data']['GroupSet7001'],
                "GroupSet7002" => $data['data']['GroupSet7002'],
                "GroupSet7003" => $data['data']['GroupSet7003'],
                "GroupSet7004" => $data['data']['GroupSet7004'],
                "GroupSet7005" => $data['data']['GroupSet7005'],
                "GroupSet7006" => $data['data']['GroupSet7006'],
                "GroupSet7007" => $data['data']['GroupSet7007'],
                "GroupSet7008" => $data['data']['GroupSet7008'],
                "GroupSet7009" => $data['data']['GroupSet7009'],
                "GroupSet80" => $data['data']['GroupSet80'],
                "GroupSet8001" => $data['data']['GroupSet8001'],
                "GroupSet8002" => $data['data']['GroupSet8002'],
                "GroupSet8003" => $data['data']['GroupSet8003'],
                "GroupSet8004" => $data['data']['GroupSet8004'],
                "GroupSet900" => $data['data']['GroupSet900'],
                "GroupSet901" => $data['data']['GroupSet901'],
                "GroupSet902" => $data['data']['GroupSet902'],
                "GroupSet903" => $data['data']['GroupSet903'],
            ];
            $sess->set($sessData);
            return redirect()->to("home");
            //return redirect()->to("home")->with("alertNoti", "alertPopup('USER ของท่านผ่านการยืนยันสิทธิ์ในระบบ ALL CONNECT เรียบร้อยแล้ว','' , '');");
        } elseif ($status_check == 'holding') {

            //แสดงหน้าให้ยืนยันตัวตน

            $this->pageData["data"] = $data['data'];
            return view("regis_holding", $this->pageData);
        } elseif ($status_check == 'holding_approve') {

            //แสดงหน้าว่ารอยืนยันสิทธิ์

            $this->pageData["data"] = $data['data'];
            return view("regis_holding_approve", $this->pageData);
        } else {
            //return redirect()->to("login")->with("alertNoti", "alertPopup('USER ของท่านยังไม่มีสิทธิ์ในระบบ ALL CONNECT','' , '');");
            //session()->setFlashdata('error_message', '');

            //session()->setFlashdata('status', 'error');
            //session()->setFlashdata('message', 'USER ของท่านยังไม่มีสิทธิ์ในระบบ ALL CONNECT');
            //return redirect()->to('login');

            return redirect()->to("login")->with("fail", "USER ของท่านยังไม่มีสิทธิ์ในระบบ ALL CONNECT");
        }
    }

    public function authholding()
    {
        // iclude helper form
        error_reporting(0);
        helper("form");
        $input = $this->request->getRawInput();

        $client = new Client();
        $res = $client->post(Env("app.RestBaseURL") . '/api/LoginDoeb', [
            "body" => json_encode($input)
        ]);
        $data = $res->getBody()->getContents('json');
        $data = json_decode($data, true);

        session()->setFlashdata('status', 'error');
        session()->setFlashdata('message', 'ระบบได้ทำการลงทะเบียนเรียบร้อย');
        return redirect()->to('login');
    }

    public function logout()
    {
        // iclude helper form
        helper("form");

        $session = session();
        if (!empty(session()->get("UserName"))) {
            $hist = [
                "UserCode" => session()->get("UserCode"),
                "LogOutDate" => Date('Y-m-d H:i:s'),
                "UpdateDate" => Date('Y-m-d H:i:s'),
                "LogOutFlag" => 'Y',
                "SESS_ID" => session_id(),
            ];
            $session->destroy();
            $this->modelHistory->where([
                "UserCode" => $hist["UserCode"],
                "SESS_ID" => $hist["SESS_ID"],
            ])->set($hist)->update();
        }
        return redirect()->to("login");
    }

    public function genCaptcha()
    {

        // header("Content-Type: image/png");
        $im = imagecreate(100, 20) or die("Cannot Initialize new GD image stream");
        $rt = $this->generateRandomString(6);

        ob_start();

        $background_color = imagecolorallocate($im, 255, 255, 255);
        // $line1_color = imagecolorallocate($im, rand(0, 255), rand(0, 255), rand(0, 255));
        // $line2_color = imagecolorallocate($im, rand(0, 255), rand(0, 255), rand(0, 255));
        // $line3_color = imagecolorallocate($im, rand(0, 255), rand(0, 255), rand(0, 255));


        // $line1_color = imagecolorallocate($im, 255, 255, 255);

        // for ($i = 0; $i < 20; $i++) {
        //     imageline($im, rand(0, 100), rand(0, 25), rand(0, 100), rand(0, 25), $line1_color);
        // }

        $lstChar = str_split($rt);
        $i = 5;
        foreach ($lstChar as $char) {
            $i += 12;
            $text_color = imagecolorallocate($im, rand(0, 255), rand(0, 255), rand(0, 255));
            imagestring($im, 15, $i, 0, $char, $text_color);
        }
        imagepng($im);
        imagedestroy($im);

        $bin = ob_get_clean();
        $b64 = base64_encode($bin);
        return 'data:image/png;base64,' . $b64;
        // return $this->response->setHeader("Content-Type", "image/png");
    }

    function generateRandomString($length = 6)
    {
        return substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length / strlen($x)))), 1, $length);
    }
}
