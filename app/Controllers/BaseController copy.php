<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;
use Config\Site;
use App\Models\DocumentControlModel;
use Exception;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = [];

    /**
     * Constructor.
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.

        // E.g.: $this->session = \Config\Services::session();
    }
    function isMobile()
    {
        return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
    }
    public function getServerAddress()
    {

        ob_start();
        system('ipconfig/all');
        $mycom = ob_get_contents();
        ob_clean();
        $findme = "Physical";
        $pmac = strpos($mycom, $findme);
        $mac = substr($mycom, ($pmac + 36), 17);

        return $mac;
    }
    public function getClientAddress()
    {
        // $macAddr = false;
        // $arp = `arp -n`;
        // $lines = explode("\n", $arp);

        // foreach ($lines as $line) {
        //     $cols = preg_split('/\s+/', trim($line));

        //     if ($cols[0] == $_SERVER['REMOTE_ADDR']) {
        //         $macAddr = $cols[2];
        //     }
        // }

        // echo "Client MAC: " . $macAddr;

        if (isset($_SERVER['HTTP_CLIENT_IP']))
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        else if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else if (isset($_SERVER['HTTP_X_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        else if (isset($_SERVER['HTTP_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        else if (isset($_SERVER['HTTP_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        else if (isset($_SERVER['REMOTE_ADDR']))
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        else
            $ipaddress = 'UNKNOWN';

        $macCommandString   =   "arp " . $ipaddress . " | awk 'BEGIN{ i=1; } { i++; if(i==3) print $3 }'";

        $mac = exec($macCommandString);

        return ['IP' => $ipaddress, 'MAC' => $mac];
    }
    public function getSiteName()
    {
        $site = new Site;
        return "DXG";
    }

    public function getPageName($pCode = null)
    {
        if (!empty($pCode)) {
            $lstProgram = session()->get("lstProgram");
            $pName = "";

            if (!empty($lstProgram)) {
                $listMenu = array_filter($lstProgram, function ($item) use ($pCode) {
                    return $item["ProgramCode"] == $pCode;
                });
                if (!empty($listMenu)) {
                    $objMenu = reset($listMenu); // First row of array
                    $pName = $objMenu["ProgramName"];
                    session()->setFlashdata("curGroupMenu", $objMenu["GroupID"]);
                    session()->setFlashdata("curMenu", $objMenu["ProgramID"]);
                } else {
                    $pName = "";
                    session()->setFlashdata("curGroupMenu", "");
                    session()->setFlashdata("curMenu", "");
                }
                // foreach ($lstProgram as $item) {
                //     if ($item["ProgramCode"] == $pCode) {
                //         $pName = $item["ProgramName"];
                //     }
                // }
            }
            return $pName;
        } else {
            return "Page name";
        }
    }

    public function getBackMenu($pCode = null)
    {
        $pBackMenu = "home";
        if (!empty($pCode)) {
            $lstProgram = session()->get("lstProgram");

            if (!empty($lstProgram)) {
                $listMenu = array_filter($lstProgram, function ($item) use ($pCode) {
                    return $item["ProgramCode"] == $pCode;
                });
                if (!empty($listMenu)) {
                    $objMenu = reset($listMenu); // First row of array
                    if ($objMenu["LevelNo"] == "3") {
                        $GroupID = $objMenu["GroupID"];
                        $listMenu = array_filter($lstProgram, function ($item) use ($GroupID) {
                            return $item["ProgramID"] == $GroupID;
                        });
                        $objMenu = reset($listMenu); // First row of array
                        return "submenu/" . $objMenu["GroupID"];
                    } else if ($objMenu["LevelNo"] == "2") {
                        $objMenu = reset($listMenu); // First row of array
                        return "submenu/" . $objMenu["GroupID"];
                    }
                }
            }
            return $pBackMenu;
        }
    }
    public function genDocNo($docCode = null)
    {
        try {
            if (empty($docCode)) {
                throw new \Exception("DocCode is emptry.");
            }
            $model = new DocumentControlModel();
            $objData = $model->where(["DocCode" => $docCode])->first();

            if (empty($objData)) {

                throw new \Exception("No data found! DocCode : " . $docCode);
            }


            $DocNo = $objData["DocFormat"];

            // Check Reset Running No when ResetFlag == Y And Differance Year
            if ($objData["ResetFlag"] == "Y" && date_format(date_create($objData["LastResetDate"]), "Y") != date("Y")) {

                $objData["RunningLast"] = 0;
                $model->update($objData["ID"], ["RunningLast" => $objData["RunningLast"], "LastResetDate" => Date('Y-m-d')]);
            }
            $RunningNo = (int)$objData["RunningLast"] + 1;

            $model->update($objData["ID"], ["RunningLast" => $RunningNo, "LastResetDate" => Date('Y-m-d')]);

            preg_match('(B+)', $objData["DocFormat"], $m);
            if (!empty($m)) {
                $strBudhaYear =  (int)date("Y") + 543;
                if (strlen($m[0]) == 4) {
                    $DocNo = str_replace("BBBB", $strBudhaYear, $DocNo);
                } else if (strlen($m[0]) == 2) {
                    $strBudhaYear = substr($strBudhaYear, -2);
                    $DocNo = str_replace("BB", $strBudhaYear, $DocNo);
                }
            }

            preg_match('(Y+)', $objData["DocFormat"], $m);
            if (!empty($m)) {
                $strYear =  date("Y");
                if (strlen($m[0]) == 4) {
                    $DocNo = str_replace("YYYY", $strYear, $DocNo);
                } else if (strlen($m[0]) == 2) {
                    $strYear = substr($strYear, -2);
                    $DocNo = str_replace("YY", $strYear, $DocNo);
                }
            }

            preg_match('(M+)', $objData["DocFormat"], $m);
            if (!empty($m)) {
                $strMonth =  date("m");
                if (strlen($m[0]) == 2) {
                    $DocNo = str_replace("MM", $strMonth, $DocNo);
                } else if (strlen($m[0]) == 1) {
                    $DocNo = str_replace("M", (int)$strMonth, $DocNo);
                }
            }

            preg_match('(R+)', $objData["DocFormat"], $m);
            if (!empty($m)) {
                $strRunning =  substr(str_repeat("0", (int)$objData["RunningDigit"]) . $RunningNo, ((int)$objData["RunningDigit"] * -1));
                $DocNo = str_replace($m[0], $strRunning, $DocNo);
            }

            // Prefix
            preg_match('(PFX)', $objData["DocFormat"], $m);
            if (!empty($m)) {
                $DocNo = str_replace($m[0], $objData["PrefixCode"], $DocNo);
            }
            //
            return ["status" => true, "value" => $DocNo,];;
        } catch (\Exception $ee) {
            // $aa = "";
            return ["status" => false, "msg" => $ee->getMessage(),];
        }
    }
    function genLuhnNo($number)
    {
        $sum = 0;
        $numDigits = strlen($number);
        $parity = $numDigits % 2;
        for ($i = $numDigits; $i >= 0; $i--) {
            $digit = substr($number, $i, 1);
            if (!$parity == ($i % 2)) {
                $digit <<= 1;
            }
            $digit = ($digit > 9) ? ($digit - 9) : $digit;
            $sum += $digit;
        }

        $result_2 = $sum * 9;
        $result_3 = $result_2 % 10;

        return $result_3;
    }
    public function fncEncrypt($sValue)
    {
        $encrypter = \Config\Services::encrypter();
        $var = $encrypter->encrypt($sValue);
        return  $var;
    }
    public function fncDecrypt($sValue)
    {
        $encrypter = \Config\Services::encrypter();
        $var = $encrypter->decrypt($sValue);
        return  $var;
    }
    public function sendGlayLog($data = null, $infoType = "info")
    {
        try {
            if (empty($data)) {
                return;
            }
            $Type = ["error", "info", "critical", "warning"];
            $mainData = [
                "SRC_CLIENT_IP" => session()->get("ClientIP"),
                "URL" => $this->request->getUri()->getPath(), //"https://dms-mgr.nidpro.tech/login",
                "HOST" =>  $_SERVER["HTTP_HOST"], //"dms-mgr.nidpro.tech",
                "TYPE" => $infoType,
                "EVENT_TIME_DST_SERVER" => Date('Y-m-d H:i:s'),
                "DST_SERVER" => $_ENV["app.AppName"],
                "BROWSER_AGENT" =>  $_SERVER["HTTP_USER_AGENT"],
                "METHOD" => $_SERVER["REQUEST_METHOD"], //  GET POST HEAD PUT
                "HTTP_VERSION" => $_SERVER["SERVER_PROTOCOL"], // 1.1   2.0
                "HTTP_CODE" => $_SERVER["SERVER_PROTOCOL"], //200 401 503
                "APP_NAME" => $_ENV["app.AppName"] . " WebApplication",
                "MSG" =>   $data
            ];

            $sData = json_encode($mainData);

            // $sock = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP);

            // $len = strlen($sData);

            // $sendResult =  socket_sendto($sock, $sData, $len, 0, '192.168.225.90', 51499);
            // socket_close($sock);
        } catch (\Exception $e) {
        }
    }
    function sendMail($to, $subject, $message)
    {
        // $to = "dummykung@hotmail.co.th";
        // $subject = "test send mail";
        // $message = "Dear . test mail";

        $email = \Config\Services::email();
        $email->setTo($to);
        $email->setSubject($subject);
        $email->setMessage($message);
        $email->fromName = $_ENV["app.AppName"];

        // send email หากครั้งแรก Error จะส่งอีก 1 ครั้ง
        if ($email->send()) {
            // echo "Send mail Completed!!";
            return true;
        } else {
            // throw new Exception($email->printDebugger());
            // print_r($email->printDebugger());
            // echo "Send mail Error!!";
            if ($email->send()) {
                return true;
            } else {
                return false;
            }
        }
    }
}
