<?php

class Api
{

    protected $controller;
    protected $model;
    protected $action;
    protected $method;

    public function __construct($controller, $action, $extended_action, $model)
    {
        $this->action            = $action;
        $this->controller        = $controller;
        $this->model             = $model; 
        $this->method            = $_SERVER['REQUEST_METHOD'];
    }   

    public function __destruct()
    {
       
    }
}
