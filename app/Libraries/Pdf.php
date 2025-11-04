<?php

namespace App\Libraries;

use Mpdf\Mpdf;

class Pdf
{
    public function generate($html, $filename = 'document.pdf', $stream = true)
    {
        $mpdf = new Mpdf([
            'default_font' => 'thsarabunnew' // ฟอนต์ไทย
        ]);

        $mpdf->WriteHTML($html);

        if ($stream) {
            $mpdf->Output($filename, 'I'); // แสดงใน Browser
        } else {
            return $mpdf->Output($filename, 'S'); // return string
        }
    }
}
