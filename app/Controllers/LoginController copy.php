<?php

namespace App\Controllers;

use DateTime;
use Exception;

class LoginController extends BaseController
{
    protected $model;
    protected $modelHistory;

    public function __construct()
    {
      
    }

    public function index()
    {
        // iclude helper form
        helper("form");
        $data["pageTitle"] = "Login";

        $session = session();
        $session->destroy();

        return view('Login', $data);
    }

    public function auth()
    {
        // iclude helper form
        helper("form");
        // $data["pageTitle"] = "Login";

        $input = $this->request->getRawInput();
        $username = $input['username'];
        $password = $input['password'];
        //$password = md5($input['password']);
		
		/*
        $model = new UserModel();
        $data = $model->check_login($username, $password);

        try {

            $sess = session();
            $sess->set(["ClientIP" => $this->request->getVar("hidIP")]);
            if (!empty($data['id'])) {

                //$verifyPass = password_verify($this->request->getVar("password"), $data["Password"]);
                if (!empty($data['id'])) {

                    $encrypter = \Config\Services::encrypter();
                    $encryptPWD = $encrypter->encrypt($password);

                    
                    $program = new UserAccessRolesModel();
                    $lstProgram = $program->getAccessRole($data["UserGroup"]);
                    
                    $sess = session();
                    $sessData = [
                        "user_id_view" => $data["id"],
                        "UserID" => $data["id"],
                        "companyname_th" => $data["companyname_th"],
                        "cid" => $data["cid"],
                        "fid14n" => $data["fid14n"],
                        "business_no" => $data["business_no"],
                        'taxid' => $data['taxid'],
                        'groupuser_id' => $data['groupuser_id'],
                        'groupname' => $data['groupname'],
                        'industrial_zone_id' => $data['ind_type_id'],
                        'user_create_by' => $data['user_create_by'],
                        'group_customer_id' => $data['group_customer_id'],

                        'addrno_office' => $data['addrno_office'],
                        'moo_office' => $data['moo_office'],
                        'lane_office' => $data['lane_office'],
                        'street_office' => $data['street_office'],
                        'district_office' => $data['district_office'],
                        'amphur_office' => $data['amphur_office'],
                        'province_office' => $data['province_office'],
                        'zipcode_office' => $data['zipcode_office'],
                        'tel_office' => $data['tel_office'],
                        'fax_office' => $data['fax_office'],
                        'email_office' => $data['email_office'],

                        'addrno_factory_tabuser' => $data['addrno_factory_tabuser'],
                        'moo_factory_tabuser' => $data['moo_factory_tabuser'],
                        'lane_factory_tabuser' => $data['lane_factory_tabuser'],
                        'district_factory_tabuser' => $data['district_factory_tabuser'],
                        'amphur_factory_tabuser' => $data['amphur_factory_tabuser'],
                        'province_factory_tabuser' => $data['province_factory_tabuser'],
                        'zipcode_factory_tabuser' => $data['zipcode_factory_tabuser'],
                        'tel_factory_tabuser' => $data['tel_factory_tabuser'],
                        'fax_factory_tabuser' => $data['fax_factory_tabuser'],
                        'email_factory_tabuser' => $data['email_factory_tabuser'],
                        'street_factory_tabuser' => $data['street_factory_tabuser'],

                        'industrial_id' => $data['industrial_id'],
                        'industrial_name' => $data['industrial_name'],
                        'ind_type_id' => $data['ind_type_id'],
                        'ind_type_name' => $data['ind_type_name'],
                        'tax_incentive' => $data['tax_incentive'],

                        'acceptcode_012' => $data['acceptcode_012'],
                        'acceptdate_012' => $data['acceptdate_012'],
                        'acceptcode_036' => $data['acceptcode_036'],
                        'acceptdate_036' => $data['acceptdate_036'],
                        'expiredate_03' => $data['expiredate_03'],
                        'acceptcode_034' => $data['acceptcode_034'],
                        'acceptdate_034' => $data['acceptdate_034'],

                        'flag_staff' => $data['flag_staff'],

                        'flag_agree' => $data['flag_agree'],
                        'psm_app_flag' => $data['psm_app_flag'],

                        "UserPD" => $encryptPWD,
                        "LoginStatus" => true,
                        "LastLogIn" => Date('Y-m-d H:i:s')
                    ];

                    $sess->set($sessData);

                    return redirect()->to("home");
                } else {

                    // echo "Password is wrong";
                    return redirect()->to("login")->with("fail", "Password wrong!!");
                }
            } else {

                return redirect()->to("login")->with("fail", "Username not found!!");
            }
        } catch (Exception $e) {
            return redirect()->to("login")->with("fail", $e->getMessage());
        }
		*/
		
		return redirect()->to("home");
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
