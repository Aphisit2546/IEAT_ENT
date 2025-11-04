<?php
require 'vendor/autoload.php';

use Dompdf\Dompdf;
use Dompdf\FontMetrics;

$fontName = 'THSarabunNew';
$fontPath = __DIR__ . '/THSarabunNew.ttf'; // ตรวจสอบ path ของไฟล์ฟอนต์

$dompdf = new Dompdf();
$fontMetrics = $dompdf->getFontMetrics();

// ติดตั้งฟอนต์
$fontMetrics->getFont($fontName, 'normal', $fontPath);
$fontMetrics->getFont($fontName, 'bold', $fontPath);
$fontMetrics->getFont($fontName, 'italic', $fontPath);
$fontMetrics->getFont($fontName, 'bold_italic', $fontPath);

echo "Font '$fontName' has been installed successfully.";