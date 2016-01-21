<?php  namespace dales\routing;

use dales\routing\http;
use dales\routing\Routes;
use ReflectionMethod;

class Routing
{
    public $routes = array();

    function __construct()
    {
        $this->routes = Routes::get(http::url());
    }

    public function getcontroller(){
        return $this->routes['action'];
    }

    public function controller(){

        $action = explode('@', $this->routes['action']);
        $Controller = "app\\controller\\" . ucfirst($action[0]);
        $Action = $action[1];
        if ((int)method_exists($Controller, $Action)) {
            $reflection = new \ReflectionMethod($Controller, $Action);
            if ($reflection->isPublic()) {

                //return array();
                $page = new $Controller();
                call_user_func_array(array($page, $Action), $this->routes['vars']);
            } else {
                \dales\error\error::send("Error: Controller Class Method should be Public");
            }
        } else {
            \dales\error\error::send("Error: Controller Class or Method does Not exists");
        }
    }
    
    function __destruct()
    {

    }

}


