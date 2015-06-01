<?php namespace dales\routing;

class http
{
    public static function url()
    {
        $url      = str_ireplace(FOLDER, "", $_SERVER["REQUEST_URI"]);
        $urlArray = explode("?", $url);

        if (count($urlArray) > 1) {
            $getArray = explode("&", $urlArray[1]);
            if ($getArray[0] != '') {
                for ($i = 0; $i < count($getArray); $i++) {
                    @ list($k, $v) = explode('=', $getArray[$i]);
                    $_GET[$k]      = $v;
                }
            }
        }

        $url = $urlArray[0];
        $url = ltrim($url, '/');
        $url = rtrim($url, '/');
        $url = str_ireplace(".php",null,$url);

        return $url;
    }


}