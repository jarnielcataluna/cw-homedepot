<?php
//ini_set('display_errors', '1');
require_once(dirname(__FILE__).'/../vendor/autoload.php');
header('Content-Type: image/png');

$generator = new \Picqer\Barcode\BarcodeGeneratorPNG();

$data = $generator->getBarcode($_GET['code'], $generator::TYPE_EAN_13, 2, 100, array(0,0,0));
$im = imagecreatefromstring($data);

imagepng($im);
imagedestroy($im);


?>