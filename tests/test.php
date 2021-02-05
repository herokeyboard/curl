<?php


require_once ('vendor/autoload.php');
use \Herokeyboard\Kcurl;

$link = "https://domain.com"; 
$cookie = "cookie";
$agent = "user agent";
$curl = new Kcurl();
$result = $curl->curl($link, $cookie, $agent);
echo $result;
