<?php

include ('includes/functions.php');

 if (!$_GET['oid']) {
     header("HTTP/1.0 404 Not Found");
 }


$queryString = http_build_query($_GET);
$x =  getRemoteData('http://api.e-travels.com.ua/ticket.php?'. $queryString.'&type=all');
//$x =  getRemoteData('http://static.php.net/www.php.net/images/php.gif');
//print_r($x);
header('Content-type:application/pdf ');
echo $x[1];
die;