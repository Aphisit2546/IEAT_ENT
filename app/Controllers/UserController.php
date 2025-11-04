<?php

namespace App\Controllers;

use App\Models\UserModel;
use Exception;

class UserController extends BaseController
{
    protected $model;
    protected $pageData;
    protected $pageName;
    protected $routeGroup;

    public function __construct()
    {
        $this->model = new UserModel(); // I am guessing this is in your App\Controllers Folder.
        $this->pageName = "ข้อมูลส่วนตัว";
        $this->routeGroup = "user";
        $this->pageData = [
            "routeGroup" => $this->routeGroup,
            "menuName" => $this->pageName,
        ];
    }

    public function index()
    {
        // iclude helper form
        helper("form");
        $pageName = $this->getPageName($this->programCode);

        // $model = new UserModel();

        $lstData = $this->model->findAll();
        $data = [
            "menuName" => "User Managemene" . $pageName,
            "lstData" => $lstData
        ];

        return view('UserManagement/usersearch', $data);
    }
    public function profile()
    {
        // iclude helper form
        helper("form");

        $httpRequest = service('request');

        $data = $this->model->find(session()->get("UserID"));
        $this->pageData["data"] = $data;
        if (strtoupper($httpRequest->getMethod()) == "POST") {

            $input = $this->request->getRawInput();

            $rules = [
                "name_th" => [
                    "rules" =>  "required|max_length[150]",
                    "label" => "ชื่อ (TH)",
                    "errors" => [
                        "required"  => " กรุณาระบุ {field}",
                        "max_length" => "{field} ตัวอักษรไม่เกิน {param}"
                    ]
                ],
                "surname_th" => [
                    "rules" =>  "required|max_length[150]",
                    "label" => "ชื่อสกุล (TH)",
                    "errors" => [
                        "required"  => " กรุณาระบุ {field}",
                        "max_length" => "{field} ตัวอักษรไม่เกิน {param}"
                    ]
                ],
                "name_en" => [
                    "rules" =>  "required|max_length[150]",
                    "label" => "ชื่อ (EN)",
                    "errors" => [
                        "required"  => "กรุณาระบุ {field}",
                        "max_length" => "{field} ตัวอักษรไม่เกิน {param}"
                    ]
                ],
                "surname_en" => [
                    "rules" =>  "required|max_length[150]",
                    "label" => "ชื่อสกุล (EN)",
                    "errors" => [
                        "required"  => " กรุณาระบุ {field}",
                        "max_length" => "{field} ตัวอักษรไม่เกิน {param}"
                    ]
                ],
                "mobile_no" => [
                    "rules" =>  "required|max_length[250]",
                    "label" => "เบอร์โทร",
                    "errors" => [
                        "required"  => " กรุณาระบุ {field}",
                        "max_length" => "{field} ตัวอักษรไม่เกิน {param}"
                    ]
                ],
                "email" => [
                    "rules" =>  "required|max_length[250]|valid_email",
                    "label" => "อีเมล",
                    "errors" => [
                        "required"  => " กรุณาระบุ {field}",
                        "max_length" => "{field} ตัวอักษรไม่เกิน {param}",
                        "valid_email" => "รูปแบบ Email ไม่ถูกต้อง"
                    ]
                ],
                "remark" => [
                    "rules" =>  "max_length[250]",
                    "label" => "หมายเหตุ",
                    "errors" => [
                        "max_length" => "{field} ตัวอักษรไม่เกิน {param}"
                    ]
                ],
            ];

            $this->pageData["data"] = [
                "UserID" =>  $data["UserID"],
                "UserName" =>  $data["UserName"],
                "TitleNameTH" => $input["title_name_th"],
                "TitleNameEN" => $input["title_name_th"],
                "NameTH" => $input["name_th"],
                "SurnameTH" => $input["surname_th"],
                "NameEN" => $input["name_en"],
                "SurnameEN" => $input["surname_en"],
                "MobileNo" => str_replace("-", "", $input["mobile_no"]),
                "Email" => $input["email"],
                "Remark" => $input["remark"],
                "UpdateDate" => Date("Y-m-d H:i:s"),
                "UpdateUserID" => session()->get("UserID"),
            ];
            if ($this->validate($rules)) {
                try {
                    $postData = $this->pageData["data"];
                    $result = $this->model->update($postData["UserID"], $postData);

                    return redirect()->to($this->routeGroup . "/profile")->with("alertNoti", "alertPopup('บันทึกเรียบร้อย','รหัส : " . $data["UserName"] . "','success' , '');");
                } catch (Exception $e) {
                    session()->setFlashData("validation", $e->getMessage());
                    return view('profile', $this->pageData);
                }
            } else {

                session()->setFlashData("validation", $this->validator->listErrors());
                return view('profile', $this->pageData);
            }
        }
        return view('profile', $this->pageData);
    }
    public function changepassword()
    {
        $this->pageData["menuName"] = "เปลี่ยนรหัสผ่าน";
        // iclude helper form
        helper("form");

        $httpRequest = service('request');

        $data = $this->model->find(session()->get("UserID"));
        $this->pageData["data"] = $data;
        if (strtoupper($httpRequest->getMethod()) == "POST") {

            $input = $this->request->getRawInput();

            $rules = [
                "txtPasswordOld" => [
                    "rules" =>  "required|max_length[20]",
                    "label" => "รหัสผ่านเดิม",
                    "errors" => [
                        "required"  => " กรุณาระบุ {field}",
                        "max_length" => "{field} ตัวอักษรไม่เกิน {param}"
                    ]
                ],
                "txtPasswordNew" => [
                    "rules" =>  "required|max_length[20]|min_length[6]",
                    "label" => "รหัสผ่านใหม่",
                    "errors" => [
                        "required"  => " กรุณาระบุ {field}",
                        "max_length" => "{field} ตัวอักษรไม่เกิน {param}",
                        "min_length" => "{field} ตัวอักษรไม่น้อยกว่า {param}"
                    ]
                ],
                "txtPasswordComf" => [
                    "rules" =>  "required|max_length[20]|matches[txtPasswordNew]",
                    "label" => "ยืนยันรหัสผ่าน",
                    "errors" => [
                        "required"  => "กรุณาระบุ {field}",
                        "max_length" => "{field} ตัวอักษรไม่เกิน {param}",
                        "matches" => "{field} ไม่ตรงกับรหัสผ่านใหม่"
                    ]
                ],
            ];

            if ($this->validate($rules)) {

                try {
                    if (!$this->_passwordRegex($input["txtPasswordNew"])) {

                        throw new Exception("รหัสผ่านใหม่ จะต้องเป็นตัวอกษร a-z A-Z และมีตัวเลข 0-9");
                    }

                    $verifyPass = password_verify($input["txtPasswordOld"], $data["Password"]);
                    if (!$verifyPass) {
                        throw new Exception("รหัสผ่านเดิม ไม่ถูกต้อง");
                    }
                    $postData = [
                        "UserID" =>  $data["UserID"],
                        "Password" => password_hash($input["txtPasswordNew"], PASSWORD_DEFAULT),
                        "UpdateDate" => Date("Y-m-d H:i:s"),
                        "UpdateUserID" => session()->get("UserID"),
                    ];;
                    $result = $this->model->update($postData["UserID"], $postData);

                    return redirect()->to("user/changepass")->with("alertNoti", "alertPopup('บันทึกเรียบร้อย','รหัส : " . $this->pageData["data"]["UserName"] . "','success' , '');");
                } catch (Exception $e) {
                    session()->setFlashData("validation", $e->getMessage());
                    return view('changepassword', $this->pageData);
                }
            } else {

                session()->setFlashData("validation", $this->validator->listErrors());
                return view('changepassword', $this->pageData);
            }
        }
        return view('changepassword', $this->pageData);
    }
    public function changeUserName_PasswordFirst()
    {
        $this->pageData["menuName"] = "เปิดใช้งานระบบครั้งแรก";
        // iclude helper form
        helper("form");

        $httpRequest = service('request');

        $data = $this->model->find(session()->get("UserID"));
        $data["UserName"] = explode("@", $data["Email"])[0];
        $this->pageData["data"] = $data;
        if ($data["ChangeUserNameFlag"] == "Y") {
            return redirect()->to("home");
        }
        if (strtoupper($httpRequest->getMethod()) == "POST") {

            $input = $this->request->getRawInput();

            $rules = [
                "txtNewUserName" => [
                    "rules" =>  "required|max_length[20]|min_length[6]",
                    "label" => "ชื่อผู้ใช้งานใหม่",
                    "errors" => [
                        "required"  => " กรุณาระบุ {field}",
                        "max_length" => "{field} ตัวอักษรไม่เกิน {param}",
                        "min_length" => "{field} ตัวอักษรไม่น้อยกว่า {param}"
                    ]
                ],
                "txtPasswordNew" => [
                    "rules" =>  "required|max_length[20]|min_length[6]",
                    "label" => "รหัสผ่านใหม่",
                    "errors" => [
                        "required"  => " กรุณาระบุ {field}",
                        "max_length" => "{field} ตัวอักษรไม่เกิน {param}",
                        "min_length" => "{field} ตัวอักษรไม่น้อยกว่า {param}"
                    ]
                ],
                "txtPasswordComf" => [
                    "rules" =>  "required|max_length[20]|matches[txtPasswordNew]",
                    "label" => "ยืนยันรหัสผ่าน",
                    "errors" => [
                        "required"  => "กรุณาระบุ {field}",
                        "max_length" => "{field} ตัวอักษรไม่เกิน {param}",
                        "matches" => "{field} ไม่ตรงกับรหัสผ่านใหม่"
                    ]
                ],
            ];

            if ($this->validate($rules)) {

                try {
                    if (!$this->_UserNameRegex($input["txtNewUserName"])) {

                        throw new Exception("ชื่อผู้ใช้งานใหม่ จะต้องเป็นตัวอักษร a-z,A-Z, ตัวเลข 0-9, อักษรพิเศษ  . _ ไม่เกิน 1 ตัวอักษร");
                    }

                    $postData = [
                        "UserID" =>  $data["UserID"],
                        "UserName" =>  $input["txtNewUserName"],
                        "ChangeUserNameFlag" =>  "Y",
                        "Password" => password_hash($input["txtPasswordNew"], PASSWORD_DEFAULT),
                        "UpdateDate" => Date("Y-m-d H:i:s"),
                        "UpdateUserID" => session()->get("UserID"),
                    ];

                    $chk = $this->model->where(["UserName" => $postData["UserName"]])->first();
                    if (!(empty($chk))) {
                        throw new Exception("UserName: " . $postData["UserName"] . " ซ้ำในระบบ");
                    }

                    $result = $this->model->update($postData["UserID"], $postData);
                    session()->set('UserName', $postData["UserName"]);

                    $html = file_get_contents(APPPATH  . DIRECTORY_SEPARATOR . "HtmlTemplate/MailActivateUserAccountTemplate.html");
                    $html = str_replace("{UserName}", $postData["UserName"], $html);

                    $this->sendMail($data["Email"], "[" . $_ENV["app.AppName"] . "] เปิดใช้งานระบบเรียบร้อย", $html);

                    return redirect()->to("home")->with("alertNoti", "alertPopup('บันทึกเรียบร้อย','ชื่อผู้ใช้งานระบบ : " . $postData["UserName"] . "','success' , '');");
                } catch (Exception $e) {
                    session()->setFlashData("validation", $e->getMessage());
                    return view('changeUserName_PasswordFirstLogin', $this->pageData);
                }
            } else {

                session()->setFlashData("validation", $this->validator->listErrors());
                return view('changeUserName_PasswordFirstLogin', $this->pageData);
            }
        }
        return view('changeUserName_PasswordFirstLogin', $this->pageData);
    }
    public function _UserNameRegex($value)
    {
        /* จะต้องเป็นตัวอกษร a-z A-Z ,ตัวเลข 0-9 อักษรพิเศษ
        . (Dot) => ไม่เกิน 1 ตัวอักษร
        _ (UnderScore)=>  ไม่เกิน 1 ตัวอักษร

        */
        $lst = str_split($value);
        $char = 0;
        $charDot = 0;
        $charUnderScore = 0;
        $number = 0;
        foreach ($lst as $item) {
            if (preg_match('/^[a-zA-Z0-9\.\_]+$/', $item)) {
                if (preg_match('/^[a-zA-Z]+$/', $item)) {
                    $char++;
                } elseif (preg_match('/^[0-9]+$/', $item)) {
                    $number++;
                } elseif (preg_match('/^[\.]+$/', $item)) {
                    $charDot++;
                } elseif (preg_match('/^[\_]+$/', $item)) {
                    $charUnderScore++;
                }
            } else {
                return FALSE;
            }
        }
        if (!($char > 0 && $number > 0) || ($char == 0 && $charDot > 0) || $charDot > 1 || $charUnderScore > 1) {
            return FALSE;
        }
        return TRUE;
    }
    public function _passwordRegex($value)
    {
        $lst = str_split($value);
        $char = 0;
        $number = 0;
        foreach ($lst as $item) {
            if (preg_match('/^[a-zA-Z0-9]+$/', $item)) {
                if (preg_match('/^[a-zA-Z]+$/', $item)) {
                    $char++;
                } elseif (preg_match('/^[0-9]+$/', $item)) {
                    $number++;
                }
            } else {
                return FALSE;
            }
        }
        if (!($char > 0 && $number > 0)) {
            return FALSE;
        }
        return TRUE;
    }
    public function forgotpassword()
    {
        $this->pageData["menuName"] = "เปลี่ยนรหัสผ่าน";
        // iclude helper form
        helper("form");

        $httpRequest = service('request');

        if (strtoupper($httpRequest->getMethod()) == "POST") {

            $input = $this->request->getRawInput();


            $rules = [
                "txtUserName" => [
                    "rules" =>  "required|max_length[20]",
                    "label" => "User Name",
                    "errors" => [
                        "required"  => " กรุณาระบุ {field}",
                        "max_length" => "{field} ตัวอักษรไม่เกิน {param}"
                    ]
                ],
                "txtEmail" => [
                    "rules" =>  "trim|required|max_length[250]|valid_email",
                    "label" => "อีเมล",
                    "errors" => [
                        "required"  => " กรุณาระบุ {field}",
                        "max_length" => "{field} ตัวอักษรไม่เกิน {param}",
                        "valid_email" => "รูปแบบ Email ไม่ถูกต้อง"
                    ]
                ],
            ];

            if ($this->validate($rules)) {



                $data = $this->model->where(["UserName" => $input["txtUserName"]])->first();
                try {
                    if (empty($data)) {
                        throw new Exception("ไม่พบข้อมูล User Name ที่ระบุ");
                    }

                    if ($data["Email"] != $input["txtEmail"]) {
                        throw new Exception("Email ที่ระบุ ไม่ตรงกับข้อมูลในระบบ");
                    }

                    $strRamd =  substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil(6 / strlen($x)))), 1, 6);

                    $result =  $this->sendMail($data["Email"], "[DXG] ลืมรหัสผ่าน", "รหัสผ่านใหม่ของท่านคือ : " . $strRamd);

                    $postData = [
                        "UserID" =>  $data["UserID"],
                        "Password" => password_hash($strRamd, PASSWORD_DEFAULT),
                        "UpdateDate" => Date("Y-m-d H:i:s"),
                        "UpdateUserID" => session()->get("UserID"),
                    ];;
                    $result = $this->model->update($postData["UserID"], $postData);

                    return redirect()->to("forgot-password")->with("alertNoti", "alertPopup('บันทึกเรียบร้อย','ชื่อผู้ใช้ : " . $data["UserName"] . " ระบบจะส่งรหัสผ่านที่ Email : " . $data["Email"] . "','success' , '');");
                } catch (Exception $e) {
                    session()->setFlashData("validation", $e->getMessage());
                }
            } else {
                session()->setFlashData("validation", $this->validator->listErrors());
            }
        }
        return view('forgot-password', $this->pageData);
    }
    public function verifyPassword()
    {

        try {
            $passData = $this->request->getPost();
            $postData = [
                "UserName" => $passData["UserName"],
                "Password" => $passData["Password"],
                "FromApp" => $passData["FromApp"],
            ];
            $data = $this->model->where(["UserName" => $postData["UserName"]])->first();

            if (empty($data)) {
                throw new Exception("Authentication fail. Username not found!!.");
            }
            $verifyPass = password_verify($postData["Password"], $data["Password"]);
            if (!$verifyPass) {
                throw new Exception("Authentication fail. Wrong password.");
            }
            $result = [
                "Status" => true,
                "Message" => "Successfully!!"
            ];
        } catch (Exception $e) {

            $result = [
                "Status" => false,
                "Message" => $e->getMessage(),
            ];
        }
        return $this->response->setJson($result);
    }
}
