<?php
/*
 * Todo:
 * Shift this file into app/class
 */
class Controller
{

    protected $controller;
    protected $model;
    protected $action;
    protected $template;
    public $doNotRenderHeader;
    public $render;

    public function __construct($controller, $action, $extended_action, $model)
    {
        $this->action            = $action;
        $this->controller        = $controller;
        $this->model             = $model;
        $this->doNotRenderHeader = 0;
        $this->render            = 1;
        $this->template          = new Template($controller, $action);
        
        //convert extended action to get
        if(count($extended_action)>0){
            $getArray = explode("&", $extended_action[0]);
            if($getArray[0]!=''){
                for($i=0;$i<count($getArray);$i++){
                    list($k, $v) = explode('=', $getArray[$i]);
                    $_GET[$k]    = $v;
                    }
            }
        }
    }

    public function set($key, $value)
    {
        $this->template->set($key, $value);
    }

    public function __destruct()
    {
        if ($this->render) {
            $this->template->render($this->doNotRenderHeader);
        }
    }
}
