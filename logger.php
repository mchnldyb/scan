<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$urlString =  $_GET['barcode_id'];

$file = file_put_contents('/var/www/html/scanv2_dev/log.txt',$urlString.PHP_EOL,FILE_APPEND | LOCK_EX);

//if (!$file){
//    $file = file_put_contents('logs.txt', 'Error Occured '. $urlString.PHP_EOL , FILE_APPEND | LOCK_EX);
//}

?>