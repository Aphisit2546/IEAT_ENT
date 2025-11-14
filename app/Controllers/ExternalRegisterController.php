<?php

namespace App\Controllers;

use App\Models\RegisGovernmentAgenciesModel;
use App\Models\RegisPrivateSectorsModel;
use App\Models\RegisIndependentEntitiesModel;
use App\Models\RegisPublicGeneralModel;

use App\Models\ActivateTransactionModel;
use App\Models\UserModel;
use Exception;
use DateTime;;

class ExternalRegisterController extends BaseController
{
    protected $programCode = "DXG-UC04-002";
    protected $pageData;
    protected $pageName = "register";
    protected $routeGroup;
    public function __construct()
    {
        $this->model = new UserModel();
        $this->pageName = $this->getPageName($this->programCode);
        $this->routeGroup = "public";

        $this->pageData = [
            "routeGroup" => $this->routeGroup,
            "menuName" => $this->pageName,
        ];
    }
    public function index()
    {
        helper("form");

        $this->pageData["pageTitle"] = "Register";
        $this->pageData["pageAction"] = "";
        return view('PublicPage/ExternalRegister', $this->pageData);
    }
    public function save()
    {
        helper("form");
        $this->pageData["pageAction"] = "save";
        $rules = [
            "NameTH" => "required|min_length[1]|max_length[20]",
            "NameEN" => "required|min_length[1]|max_length[20]",
            "email" => "required|min_length[6]|max_length[200]|valid_email",
            "password" => "required|min_length[3]|max_length[20]",
            "confirmpassword" => "matches[password]",
        ];
        // if ((new RegisGovernmentaAenciesModel())->validate($rules)) {
        // $model = new UserModel();

        // echo "<pre>";
        // var_dump($this->request->getVar());
        // echo "</pre>";
        // exit();
        try {
            switch ($this->request->getVar("submitForm")) {

                case "GVA_Submit":
                    $verify = $this->validate([

                        "GVA_NameTH" => [
                            "rules" =>  "required|max_length[255]",
                            "label" => "ชื่อหน่วยงานภาษาไทย",
                            "errors" => [
                                "required" => " กรุณาระบุ {field}", "max_length" => "{field} ตัวอักษรไม่เกิน {param}"
                            ]
                        ],
                        "GVA_TaxNo" => [
                            "rules" =>  "required|max_length[20]",
                            "label" => "หมายเลขผู้เสียภาษีหน่วยงาน",
                            "errors" => [
                                "required" => " กรุณาระบุ {field}", "max_length" => "{field} ตัวอักษรไม่เกิน {param}"
                            ]
                        ],
                        "GVA_GMapPlaceName" => [
                            "rules" =>  "required|max_length[500]",
                            "label" => "ที่ตั้งหน่วยงาน",
                            "errors" => [
                                "required" => " กรุณาระบุ {field}", "max_length" => "{field} ตัวอักษรไม่เกิน {param}"
                            ]
                        ],
                        "GVA_ContractFirstName" => [
                            "rules" =>  "required|max_length[255]",
                            "label" => "ชื่อ ผู้ติดต่อประสานงาน",
                            "errors" => [
                                "required" => " กรุณาระบุ {field}", "max_length" => "{field} ตัวอักษรไม่เกิน {param}"
                            ]
                        ],
                        "GVA_ContractLastName" => [
                            "rules" =>  "required|max_length[255]",
                            "label" => "ชื่อสกุล ผู้ติดต่อประสานงาน",
                            "errors" => [
                                "required" => " กรุณาระบุ {field}", "max_length" => "{field} ตัวอักษรไม่เกิน {param}"
                            ]
                        ],
                        "GVA_ContractEmailAddress" => [
                            "rules" =>  "required|max_length[500]|valid_email",
                            "label" => "อีเมล ผู้ติดต่อประสานงาน",
                            "errors" => [
                                "required" => " กรุณาระบุ {field}",
                                "max_length" => "{field} ตัวอักษรไม่เกิน {param}",
                                "valid_email" => "{field} ไม่ถูกต้อง"
                            ]
                        ],
                    ]);
                    if ($verify) {
                        $this->saveGovernmentAgencies($this->request);
                        $Result["email"] = $this->request->getVar("GVA_ContractEmailAddress");
                    }

                    break;
                case "PRI_Submit":
                    $verify = $this->validate([
                        "PRI_NameTH" => [
                            "rules" =>  "required|max_length[255]",
                            "label" => "ชื่อหน่วยงานภาษาไทย",
                            "errors" => [
                                "required" => " กรุณาระบุ {field}", "max_length" => "{field} ตัวอักษรไม่เกิน {param}"
                            ]
                        ],
                        "PRI_TaxNo" => [
                            "rules" =>  "required|max_length[20]",
                            "label" => "หมายเลขผู้เสียภาษีหน่วยงาน",
                            "errors" => [
                                "required" => " กรุณาระบุ {field}", "max_length" => "{field} ตัวอักษรไม่เกิน {param}"
                            ]
                        ],
                        "PRI_GMapPlaceName" => [
                            "rules" =>  "required|max_length[500]",
                            "label" => "ที่ตั้งหน่วยงาน",
                            "errors" => [
                                "required" => " กรุณาระบุ {field}", "max_length" => "{field} ตัวอักษรไม่เกิน {param}"
                            ]
                        ],
                        "PRI_ContractFirstName" => [
                            "rules" =>  "required|max_length[255]",
                            "label" => "ชื่อ ผู้ติดต่อประสานงาน",
                            "errors" => [
                                "required" => " กรุณาระบุ {field}", "max_length" => "{field} ตัวอักษรไม่เกิน {param}"
                            ]
                        ],
                        "PRI_ContractLastName" => [
                            "rules" =>  "required|max_length[255]",
                            "label" => "ชื่อสกุล ผู้ติดต่อประสานงาน",
                            "errors" => [
                                "required" => " กรุณาระบุ {field}",
                                "max_length" => "{field} ตัวอักษรไม่เกิน {param}"
                            ]
                        ],
                        "PRI_ContractEmailAddress" => [
                            "rules" =>  "required|max_length[500]|valid_email",
                            "label" => "อีเมล ผู้ติดต่อประสานงาน",
                            "errors" => [
                                "required" => " กรุณาระบุ {field}",
                                "max_length" => "{field} ตัวอักษรไม่เกิน {param}",
                                "valid_email" => "{field} ไม่ถูกต้อง"
                            ]
                        ],
                    ]);
                    if ($verify) {
                        $this->savePrivateSectors($this->request);
                        $Result["email"] = $this->request->getVar("PRI_ContractEmailAddress");
                    }
                    break;
                case "IDE_Submit":
                    $verify = $this->validate([
                        "IDE_NameTH" => [
                            "rules" =>  "required|max_length[255]",
                            "label" => "ชื่อหน่วยงานภาษาไทย",
                            "errors" => [
                                "required" => " กรุณาระบุ {field}", "max_length" => "{field} ตัวอักษรไม่เกิน {param}"
                            ]
                        ],
                        "IDE_TaxNo" => [
                            "rules" =>  "required|max_length[20]",
                            "label" => "หมายเลขผู้เสียภาษีหน่วยงาน",
                            "errors" => [
                                "required" => " กรุณาระบุ {field}", "max_length" => "{field} ตัวอักษรไม่เกิน {param}"
                            ]
                        ],
                        "IDE_GMapPlaceName" => [
                            "rules" =>  "required|max_length[500]",
                            "label" => "ที่ตั้งหน่วยงาน",
                            "errors" => [
                                "required" => " กรุณาระบุ {field}", "max_length" => "{field} ตัวอักษรไม่เกิน {param}"
                            ]
                        ],
                        "IDE_ContractFirstName" => [
                            "rules" =>  "required|max_length[255]",
                            "label" => "ชื่อ ผู้ติดต่อประสานงาน",
                            "errors" => [
                                "required" => " กรุณาระบุ {field}", "max_length" => "{field} ตัวอักษรไม่เกิน {param}"
                            ]
                        ],
                        "IDE_ContractLastName" => [
                            "rules" =>  "required|max_length[255]",
                            "label" => "ชื่อสกุล ผู้ติดต่อประสานงาน",
                            "errors" => [
                                "required" => " กรุณาระบุ {field}", "max_length" => "{field} ตัวอักษรไม่เกิน {param}"
                            ]
                        ],
                        "IDE_ContractEmailAddress" => [
                            "rules" =>  "required|max_length[500]|valid_email",
                            "label" => "อีเมล ผู้ติดต่อประสานงาน",
                            "errors" => [
                                "required" => " กรุณาระบุ {field}",
                                "max_length" => "{field} ตัวอักษรไม่เกิน {param}",
                                "valid_email" => "{field} ไม่ถูกต้อง"
                            ]
                        ],
                    ]);
                    if ($verify) {
                        $this->saveIndependentEntities($this->request);
                        $Result["email"] = $this->request->getVar("IDE_ContractEmailAddress");
                    }
                    break;
                case "PUB_Submit":
                    $verify = $this->validate([
                        "PUB_FirstNameTH" => [
                            "rules" =>  "required|max_length[255]",
                            "label" => "ชื่อ ภาษาไทย",
                            "errors" => [
                                "required" => " กรุณาระบุ {field}", "max_length" => "{field} ตัวอักษรไม่เกิน {param}"
                            ]
                        ],
                        "PUB_LastNameTH" => [
                            "rules" =>  "required|max_length[255]",
                            "label" => "ชื่อสกุล ภาษาไทย",
                            "errors" => [
                                "required" => " กรุณาระบุ {field}", "max_length" => "{field} ตัวอักษรไม่เกิน {param}"
                            ]
                        ],
                        "PUB_FirstNameEN" => [
                            "rules" =>  "required|max_length[255]",
                            "label" => "ชื่อ ภาษาอังกฤษ",
                            "errors" => [
                                "required" => " กรุณาระบุ {field}", "max_length" => "{field} ตัวอักษรไม่เกิน {param}"
                            ]
                        ],
                        "PUB_LastNameEN" => [
                            "rules" =>  "required|max_length[255]",
                            "label" => "ชื่อสกุล ภาษาอังกฤษ",
                            "errors" => [
                                "required" => " กรุณาระบุ {field}", "max_length" => "{field} ตัวอักษรไม่เกิน {param}"
                            ]
                        ],
                        "PUB_CardID" => [
                            "rules" =>  "required|max_length[13]",
                            "label" => "เลขประจำตัวบัตรประชาชน",
                            "errors" => [
                                "required" => " กรุณาระบุ {field}", "max_length" => "{field} ตัวอักษรไม่เกิน {param}"
                            ]
                        ],
                        "PUB_EmailAddress" => [
                            "rules" =>  "required|max_length[500]",
                            "label" => "อีเมล",
                            "errors" => [
                                "required" => " กรุณาระบุ {field}", "max_length" => "{field} ตัวอักษรไม่เกิน {param}"
                            ]
                        ],
                    ]);
                    if ($verify) {

                        $this->savePublicGeneral($this->request);
                        $Result["email"] = $this->request->getVar("PUB_EmailAddress");
                    }
                    break;
                default:
                    break;
            }

            if ($verify == false) {
                session()->setFlashData("validation", $this->validator->listErrors());
                return view('PublicPage/ExternalRegister', $this->pageData);
            }
        } catch (Exception $e) {
            session()->setFlashData("validation", $e->getMessage());
            return view('PublicPage/ExternalRegister', $this->pageData);
        }
        return view('PublicPage/externalRegisterResult', $Result);
        // }
    }
    function saveGovernmentAgencies($request)
    {
        try {
            $verify = $this->validate([
                'GVA_FileAttachment' => [
                    "rules" =>  "uploaded[file]|max_size[file,2048]|ext_in[file,pdf],",
                    "label" => "เลือกไฟล์",
                    "errors" => [
                        "uploaded" => "กรุณาเลือกไฟล์",
                        "max_size" => "ขนาดไฟล์ต้องไม่เกิน {param}",
                        "ext_in" => "กรุณาเลือกไฟล์นามสกุล .pdf",
                    ]
                ]
            ]);
            $file = $request->getFile("GVA_FileAttachment");
            if (!$file->isValid()) {
                throw new Exception($file->getErrorString());
            }
            $data = [
                "NameTH" => $request->getVar("GVA_NameTH"),
                "NameEN" => $request->getVar("GVA_NameEN"),
                "NameShotness" => $request->getVar("GVA_NameShotness"),
                "TaxNo" => $request->getVar("GVA_TaxNo"),
                "WebSiteUrl" => $request->getVar("GVA_WebSiteUrl"),
                "EmailAddress" => $request->getVar("GVA_EmailAddress"),
                "GMapLongtitude" => $request->getVar("search_GVA_longtitude"),
                "GMapLatitude" => $request->getVar("search_GVA_latitude"),
                "GMapPlaceName" => $request->getVar("GVA_GMapPlaceName"),
                "GMapAddress" => $request->getVar("GVA_GMapAddress"),
                "ObjectiveCode" => $request->getVar("GVA_ObjectiveCode"),
                // "FileAttachmentPath" => $request->getVar("GVA_FileAttachmentPath"),
                // "FileAttachmentName" => $request->getVar("GVA_FileAttachmentName"),
                "ContractTitleName" => $request->getVar("GVA_ContractTitleName"),
                "ContractFirstName" => $request->getVar("GVA_ContractFirstName"),
                "ContractLastName" => $request->getVar("GVA_ContractLastName"),
                "ContractEmailAddress" => $request->getVar("GVA_ContractEmailAddress"),
                "RegisterDate" => Date('Y-m-d H:i:s'),
                "ApprovalStatus" => "Approved",
                "ApprovalDate" => Date('Y-m-d H:i:s'),
                "ApprovalUserID" => NULL,
            ];
            $id = (new RegisGovernmentAgenciesModel())->insert($data);

            // Generate Document = GVA
            $objDoc = $this->genDocNo("0001");
            if ($objDoc["status"] == false) {
                throw new Exception("พบข้อผิดพลาดการสร้างเลขที่เอกสาร (" . $objDoc["msg"] . ")");
            }
            $newName = $file->getRandomName();
            $path = "uploads/Files/" . date("Ym");
            $file->move($path, $newName);
            $activateCode = substr(bin2hex(random_bytes(6)), 0, 6);
            (new RegisGovernmentAgenciesModel())->update(
                $id,
                [
                    "RegisterNo" => $objDoc["value"],
                    "ActivateCode" => $activateCode,
                    "FileAttachmentPath" => $path . "/" . $newName,
                    "FileAttachmentName" => $file->getClientName(),
                    "ActivateStatus" => "WAIT"
                ]
            );
            $activateData = [
                "ActivateType" => "GVA",
                // "ActivateKey" ,
                "ActivateCode" => $activateCode,
                "RefID" => $id,
                "ActivateStatus" => "InActivate",
                "CreateDate" => Date('Y-m-d H:i:s'),
                "UpdateDate" => Date('Y-m-d H:i:s'),
            ];

            $activateID = (new ActivateTransactionModel())->insert($activateData);

            $activateKey = $activateID . bin2hex(random_bytes(6)); //bin2hex($activateID);
            (new ActivateTransactionModel())->update($activateID, ["ActivateKey" => $activateKey]);

            $html = file_get_contents(APPPATH  . DIRECTORY_SEPARATOR . "HtmlTemplate/MailActivateTemplate.html");
            $html = str_replace("{ActivateCode}", $activateCode, $html);
            $html = str_replace("{ActivateURL}", base_url() . "/public/register/activate/" . $activateKey, $html);

            $this->sendMail($data["ContractEmailAddress"], "[" . $_ENV["app.AppName"] . "] ยืนยันตัวตนในระบบ", $html);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    function savePrivateSectors($request)
    {
        try {
            $verify = $this->validate([
                'PRI_FileAttachment' => [
                    "rules" =>  "uploaded[file]|max_size[file,2048]|ext_in[file,pdf],",
                    "label" => "เลือกไฟล์",
                    "errors" => [
                        "uploaded" => "กรุณาเลือกไฟล์",
                        "max_size" => "ขนาดไฟล์ต้องไม่เกิน {param}",
                        "ext_in" => "กรุณาเลือกไฟล์นามสกุล .pdf",
                    ]
                ]
            ]);
            $file = $request->getFile("PRI_FileAttachment");
            if (!$file->isValid()) {
                throw new Exception($file->getErrorString());
            }
            $data = [
                "NameTH" => $request->getVar("PRI_NameTH"),
                "NameEN" => $request->getVar("PRI_NameEN"),
                "TaxNo" => $request->getVar("PRI_TaxNo"),
                "CorporationType" => $request->getVar("PRI_CorporationType"),
                "WebSiteUrl" => $request->getVar("PRI_WebSiteUrl"),
                "EmailAddress" => $request->getVar("PRI_EmailAddress"),
                "GMapLongtitude" => $request->getVar("search_PRI_longtitude"),
                "GMapLatitude" => $request->getVar("search_PRI_latitude"),
                "GMapPlaceName" => $request->getVar("PRI_GMapPlaceName"),
                "GMapAddress" => $request->getVar("PRI_GMapAddress"),
                "ObjectiveCode" => $request->getVar("PRI_ObjectiveCode"),
                // "FileAttachmentPath" => $request->getVar("PRI_FileAttachmentPath"),
                // "FileAttachmentName" => $request->getVar("PRI_FileAttachmentName"),
                "ContractTitleName" => $request->getVar("PRI_ContractTitleName"),
                "ContractFirstName" => $request->getVar("PRI_ContractFirstName"),
                "ContractLastName" => $request->getVar("PRI_ContractLastName"),
                "ContractEmailAddress" => $request->getVar("PRI_ContractEmailAddress"),
                "RegisterDate" => Date('Y-m-d H:i:s'),
                "ApprovalStatus" => "Approved",
                "ApprovalDate" => Date('Y-m-d H:i:s'),
                "ApprovalUserID" => NULL,
            ];
            $id = (new RegisPrivateSectorsModel())->insert($data);

            // Generate Document = PRI
            $objDoc = $this->genDocNo("0002");
            if ($objDoc["status"] == false) {
                throw new Exception("พบข้อผิดพลาดการสร้างเลขที่เอกสาร (" . $objDoc["msg"] . ")");
            }
            $newName = $file->getRandomName();
            $path = "uploads/Files/" . date("Ym");
            $file->move($path, $newName);
            $activateCode = substr(bin2hex(random_bytes(6)), 0, 6);
            (new RegisPrivateSectorsModel())->update(
                $id,
                [
                    "RegisterNo" => $objDoc["value"],
                    "ActivateCode" => $activateCode,
                    "FileAttachmentPath" => $path . "/" . $newName,
                    "FileAttachmentName" => $file->getClientName(),
                    "ActivateStatus" => "WAIT"
                ]
            );
            $activateData = [
                "ActivateType" => "PRI",
                // "ActivateKey" ,
                "ActivateCode" => $activateCode,
                "RefID" => $id,
                "ActivateStatus" => "InActivate",
                "CreateDate" => Date('Y-m-d H:i:s'),
                "UpdateDate" => Date('Y-m-d H:i:s'),
            ];

            $activateID = (new ActivateTransactionModel())->insert($activateData);

            $activateKey = $activateID . bin2hex(random_bytes(6)); //bin2hex($activateID);
            (new ActivateTransactionModel())->update($activateID, ["ActivateKey" => $activateKey]);

            $html = file_get_contents(APPPATH  . DIRECTORY_SEPARATOR . "HtmlTemplate/MailActivateTemplate.html");
            $html = str_replace("{ActivateCode}", $activateCode, $html);
            $html = str_replace("{ActivateURL}", base_url() . "/public/register/activate/" . $activateKey, $html);

            $this->sendMail($data["ContractEmailAddress"], "[" . $_ENV["app.AppName"] . "] ยืนยันตัวตนในระบบ", $html);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    function saveIndependentEntities($request)
    {
        try {
            $verify = $this->validate([
                'IDE_FileAttachment' => [
                    "rules" =>  "uploaded[file]|max_size[file,2048]|ext_in[file,pdf],",
                    "label" => "เลือกไฟล์",
                    "errors" => [
                        "uploaded" => "กรุณาเลือกไฟล์",
                        "max_size" => "ขนาดไฟล์ต้องไม่เกิน {param}",
                        "ext_in" => "กรุณาเลือกไฟล์นามสกุล .pdf",
                    ]
                ]
            ]);
            $file = $request->getFile("IDE_FileAttachment");
            if (!$file->isValid()) {
                throw new Exception($file->getErrorString());
            }
            $data = [
                "NameTH" => $request->getVar("IDE_NameTH"),
                "NameEN" => $request->getVar("IDE_NameEN"),
                "NameShotness" => $request->getVar("IDE_NameShotness"),
                "TaxNo" => $request->getVar("IDE_TaxNo"),
                "WebSiteUrl" => $request->getVar("IDE_WebSiteUrl"),
                "EmailAddress" => $request->getVar("IDE_EmailAddress"),
                "GMapLongtitude" => $request->getVar("search_IDE_longtitude"),
                "GMapLatitude" => $request->getVar("search_IDE_latitude"),
                "GMapPlaceName" => $request->getVar("IDE_GMapPlaceName"),
                "GMapAddress" => $request->getVar("IDE_GMapAddress"),
                "ObjectiveCode" => $request->getVar("IDE_ObjectiveCode"),
                // "FileAttachmentPath" => $request->getVar("IDE_FileAttachmentPath"),
                // "FileAttachmentName" => $request->getVar("IDE_FileAttachmentName"),
                "ContractTitleName" => $request->getVar("IDE_ContractTitleName"),
                "ContractFirstName" => $request->getVar("IDE_ContractFirstName"),
                "ContractLastName" => $request->getVar("IDE_ContractLastName"),
                "ContractEmailAddress" => $request->getVar("IDE_ContractEmailAddress"),
                "RegisterDate" => Date('Y-m-d H:i:s'),
                "ApprovalStatus" => "Approved",
                "ApprovalDate" => Date('Y-m-d H:i:s'),
                "ApprovalUserID" => NULL,
            ];
            $id = (new RegisIndependentEntitiesModel())->insert($data);

            // Generate Document = IDE
            $objDoc = $this->genDocNo("0003");
            if ($objDoc["status"] == false) {
                throw new Exception("พบข้อผิดพลาดการสร้างเลขที่เอกสาร (" . $objDoc["msg"] . ")");
            }
            $newName = $file->getRandomName();
            $path = "uploads/Files/" . date("Ym");
            $file->move($path, $newName);
            $activateCode = substr(bin2hex(random_bytes(6)), 0, 6);
            (new RegisIndependentEntitiesModel())->update(
                $id,
                [
                    "RegisterNo" => $objDoc["value"],
                    "ActivateCode" => $activateCode,
                    "FileAttachmentPath" => $path . "/" . $newName,
                    "FileAttachmentName" => $file->getClientName(),
                    "ActivateStatus" => "WAIT"
                ]
            );
            $activateData = [
                "ActivateType" => "IDE",
                // "ActivateKey" ,
                "ActivateCode" => $activateCode,
                "RefID" => $id,
                "ActivateStatus" => "InActivate",
                "CreateDate" => Date('Y-m-d H:i:s'),
                "UpdateDate" => Date('Y-m-d H:i:s'),
            ];

            $activateID = (new ActivateTransactionModel())->insert($activateData);

            $activateKey = $activateID . bin2hex(random_bytes(6)); //bin2hex($activateID);
            (new ActivateTransactionModel())->update($activateID, ["ActivateKey" => $activateKey]);

            $html = file_get_contents(APPPATH  . DIRECTORY_SEPARATOR . "HtmlTemplate/MailActivateTemplate.html");
            $html = str_replace("{ActivateCode}", $activateCode, $html);
            $html = str_replace("{ActivateURL}", base_url() . "/public/register/activate/" . $activateKey, $html);

            $this->sendMail($data["ContractEmailAddress"], "[" . $_ENV["app.AppName"] . "] ยืนยันตัวตนในระบบ", $html);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    function savePublicGeneral($request)
    {
        try {
            $verify = $this->validate([
                'PUB_FileAttachment' => [
                    "rules" =>  "uploaded[file]|max_size[file,2048]|ext_in[file,pdf],",
                    "label" => "เลือกไฟล์",
                    "errors" => [
                        "uploaded" => "กรุณาเลือกไฟล์",
                        "max_size" => "ขนาดไฟล์ต้องไม่เกิน {param}",
                        "ext_in" => "กรุณาเลือกไฟล์นามสกุล .pdf",
                    ]
                ]
            ]);
            $file = $request->getFile("PUB_FileAttachment");
            if (!$file->isValid()) {
                throw new Exception($file->getErrorString());
            }
            $data = [
                "TitleNameTH" => $request->getVar("PUB_TitleNameTH"),
                "FirstNameTH" => $request->getVar("PUB_FirstNameTH"),
                "LastNameTH" => $request->getVar("PUB_LastNameTH"),
                "TitleNameEN" => $request->getVar("PUB_TitleNameEN"),
                "FirstNameEN" => $request->getVar("PUB_FirstNameEN"),
                "LastNameEN" => $request->getVar("PUB_LastNameEN"),
                "CardID" => $request->getVar("PUB_CardID"),
                "OccupationType" => $request->getVar("PUB_OccupationType"),
                "EmailAddress" => $request->getVar("PUB_EmailAddress"),
                "ObjectiveCode" => $request->getVar("PUB_ObjectiveCode"),
                // "FileAttachmentPath" => $request->getVar("PUB_FileAttachmentPath"),
                // "FileAttachmentName" => $request->getVar("PUB_FileAttachmentName"),
                "RegisterDate" => Date('Y-m-d H:i:s'),
                "ApprovalStatus" => "Approved",
                "ApprovalDate" => Date('Y-m-d H:i:s'),
                "ApprovalUserID" => NULL,
            ];
            $id = (new RegisPublicGeneralModel())->insert($data);

            // Generate Document = PUB
            $objDoc = $this->genDocNo("0004");
            if ($objDoc["status"] == false) {
                throw new Exception("พบข้อผิดพลาดการสร้างเลขที่เอกสาร (" . $objDoc["msg"] . ")");
            }

            $newName = $file->getRandomName();
            $path = "uploads/Files/" . date("Ym");
            $file->move($path, $newName);
            $activateCode = substr(bin2hex(random_bytes(6)), 0, 6);
            (new RegisPublicGeneralModel())->update(
                $id,
                [
                    "RegisterNo" => $objDoc["value"],
                    "ActivateCode" => $activateCode,
                    "FileAttachmentPath" => $path . "/" . $newName,
                    "FileAttachmentName" => $file->getClientName(),
                    "ActivateStatus" => "WAIT"
                ]
            );
            $activateData = [
                "ActivateType" => "PUB",
                // "ActivateKey" ,
                "ActivateCode" => $activateCode,
                "RefID" => $id,
                "ActivateStatus" => "InActivate",
                "CreateDate" => Date('Y-m-d H:i:s'),
                "UpdateDate" => Date('Y-m-d H:i:s'),
            ];

            $activateID = (new ActivateTransactionModel())->insert($activateData);

            $activateKey = $activateID . bin2hex(random_bytes(6)); //bin2hex($activateID);
            (new ActivateTransactionModel())->update($activateID, ["ActivateKey" => $activateKey]);

            $html = file_get_contents(APPPATH  . DIRECTORY_SEPARATOR . "HtmlTemplate/MailActivateTemplate.html");
            $html = str_replace("{ActivateCode}", $activateCode, $html);
            $html = str_replace("{ActivateURL}", base_url() . "/public/register/activate/" . $activateKey, $html);

            $this->sendMail($data["EmailAddress"], "[" . $_ENV["app.AppName"] . "] ยืนยันตัวตนในระบบ", $html);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }


    public function activate($key)
    {
        $this->pageData["key"] = $key;
        $httpRequest = service('request');

        try {
            $activateData = (new ActivateTransactionModel())->getByID($key);

            if (empty($activateData)) {
                throw new Exception("ไม่พบข้อมูลรหัสยืนยันตัวตน");
            }
            if ($activateData["ActivateStatus"] != "InActivate") {
                throw new Exception("รหัสยืนยันตัวตน ผ่านการบันทึกยืนยันตัวตนเรียบร้อยแล้ว");
            }
            if (strtoupper($httpRequest->getMethod()) == "POST") {

                $activateCode = $this->request->getVar("ActivateCode");

                if ($activateCode != $activateData["ActivateCode"]) {
                    throw new Exception("รหัสยืนยันตัวตน ไม่ถูกต้อง");
                }

                $objDoc = $this->genDocNo("UserCode");
                if ($objDoc["status"] == false) {
                    throw new Exception("พบข้อผิดพลาดการสร้างเลขที่เอกสาร (" . $objDoc["msg"] . ")");
                }
                $rndString = substr(bin2hex(random_bytes(6)), 0, 6);
                $pass =  password_hash($rndString, PASSWORD_DEFAULT);

                $userType = "2"; /* หน่วยในกำกับดูแลของภาครัฐ */
                $TitleNameTH = "";
                $NameTH = "";
                $SurnameTH = "";
                $Email = "";
                $TitleNameEN = "";
                $NameEN = "";
                $SurnameEN = "";

                switch ($activateData["ActivateType"]) {

                    case "GVA":
                        $GVA_Data = (new RegisGovernmentAgenciesModel())->find($activateData["RefID"]);
                        $userType = "2"; /* หน่วยในกำกับดูแลของภาครัฐ */
                        $TitleNameTH = $GVA_Data["ContractTitleName"];
                        $NameTH = $GVA_Data["ContractFirstName"];
                        $SurnameTH = $GVA_Data["ContractLastName"];
                        $Email = $GVA_Data["ContractEmailAddress"];
                        break;
                    case "PRI":
                        $PRV_Data = (new RegisPrivateSectorsModel())->find($activateData["RefID"]);
                        $userType = "3"; /* หน่วยงานภาคเอกชน */
                        $TitleNameTH = $PRV_Data["ContractTitleName"];
                        $NameTH = $PRV_Data["ContractFirstName"];
                        $SurnameTH = $PRV_Data["ContractLastName"];
                        $Email = $PRV_Data["ContractEmailAddress"];
                        break;
                    case "IDE":
                        $IDE_Data = (new RegisIndependentEntitiesModel())->find($activateData["RefID"]);
                        $userType = "4"; /* องค์กรอิสระ ตามรัฐธรรมนูญ */
                        $TitleNameTH = $IDE_Data["ContractTitleName"];
                        $NameTH = $IDE_Data["ContractFirstName"];
                        $SurnameTH = $IDE_Data["ContractLastName"];
                        $Email = $IDE_Data["ContractEmailAddress"];
                        break;
                    case "PUB":
                        $PUB_Data = (new RegisPublicGeneralModel())->find($activateData["RefID"]);
                        $userType = "5"; /* ประชาชนทั่วไป */
                        $TitleNameTH = $PUB_Data["TitleNameTH"];
                        $NameTH = $PUB_Data["FirstNameTH"];
                        $SurnameTH = $PUB_Data["LastNameTH"];

                        $TitleNameEN = $PUB_Data["TitleNameEN"];
                        $NameEN = $PUB_Data["FirstNameEN"];
                        $SurnameEN = $PUB_Data["LastNameEN"];

                        $Email = $PUB_Data["EmailAddress"];
                        break;
                    default:
                        break;
                }
                $postUser = [
                    "UserType" => $userType,
                    "UserName" => $objDoc["value"],
                    "UserCode" => $objDoc["value"],
                    "Password" => $pass,
                    "TitleNameTH" => $TitleNameTH,
                    "NameTH" => $NameTH,
                    "SurnameTH" => $SurnameTH,
                    "TitleNameEN" => $TitleNameEN,
                    "NameEN" => $NameEN,
                    "SurnameEN" => $SurnameEN,
                    "Email" => $Email,
                    "RefRegisID" => $activateData["RefID"],
                    "RefRegisType" => $activateData["ActivateType"],
                    "UserGroup" => "4",
                    "UserStatus" => "Y",
                    "CreateDate" => Date("Y-m-d H:i:s"),
                    "CreateUserID" => session()->get("UserID"),
                    "UpdateDate" => Date("Y-m-d H:i:s"),
                    "UpdateUserID" => session()->get("UserID"),
                ];

                $UserID =  (new UserModel())->insert($postUser);
                (new ActivateTransactionModel())->update($activateData["ID"], ["ActivateStatus" => "Activated"]);

                $html = file_get_contents(APPPATH  . DIRECTORY_SEPARATOR . "HtmlTemplate/MailActivateSuccessTemplate.html");
                $html = str_replace("{UserName}", $postUser["UserName"], $html);
                $html = str_replace("{Password}", $rndString, $html);
                $html = str_replace("{LoginURL}", base_url() . "/login", $html);

                $this->sendMail($Email, "[" . $_ENV["app.AppName"] . "] สร้างทะเบียนผู้ใช้งานระบบเรียบร้อย", $html);

                $Result["email"] = $Email;

                return view('PublicPage/externalRegisterSuccess', $Result);
            }
        } catch (Exception $e) {
            session()->setFlashData("validation", $e->getMessage());
        }
        return view('PublicPage/externalActivate', $this->pageData);
    }
    public function success()
    {
        // $this->pageData["key"] = $key;

        return view('PublicPage/externalRegisterResult', $this->pageData);
    }
}
