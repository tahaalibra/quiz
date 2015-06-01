<?php  namespace dales\routing;

use ReflectionMethod;

class Routes
{
    protected static $path = array();

    /**
     * @return mixed
     */
    public static function get($url)
    {
        $path = self::$path;
        foreach($path as $key => $value){

            $vars = array();
            $key  = explode('/', $key);
            $url  = explode('/', $url);

            if (count($key) == count($url)) {
                for ($i = 0; $i < count($key); $i++) {
                    if (preg_match("/\{(.*?)\}/", $key[$i], $match)) {
                        $vars[$match[1]] = $url[$i];
                        $key[$i] = $url[$i];
                    }
                }
            } else {
                for ($i = 0; $i < count($key); $i++) {
                    if (preg_match("/\{(.*?)\}/", $key[$i], $match)) {
                        $key[$i] = null;
                        //$vars[$match[1]] = null;
                    }
                }
            }

            $key = implode("/", $key);
            $url = implode("/", $url);
            $key = str_ireplace("//", "/", $key);
            $key = rtrim($key, '/');

            if ($key == $url) {
                return array("action" => $value, "vars" => $vars);
            }
        }

        return null;
    }

    /**
     * @param mixed $path
     */
    public static function set($key, $value)
    {
        $key   = ltrim($key, '/');
        $key   = rtrim($key, '/');
        $value = str_replace(".","\\",$value);
        self::$path[$key] = $value;
    }
}


