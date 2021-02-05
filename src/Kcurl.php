<?php
namespace Herokeyboard;
class Kcurl
{
    public static function curl($link, $cookie, $useragent)
    {

        $response = self::requestCurl($link, $cookie, $useragent);
        return $response;
    }

    protected static function requestCurl($link, $cookie, $useragent)
    {  
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $link);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_USERAGENT, $useragent);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array("Cookie:".$cookie));
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_ENCODING , 'gzip, deflate');
        $timeout = 10;
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, $timeout);

        $data = curl_exec($curl);
        curl_close($curl);
        return $data;
    }
}

?>
