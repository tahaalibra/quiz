<?php
/*
 * Todo:
 * Shift this file into app/class
 */
class controller {
     
    protected $_controller;
    protected $_model;
    protected $_action;
    protected $_extended_action;
    protected $_template;
    //protected $_lang;
    //protected $auth1;
    public $doNotRenderHeader;
	public $render;
    
    function __construct($controller,$action,$extended_action,$model,$lang,$loginstatus)
    {
        $this->_action=$action;
        $this->_controller=$controller;
        $this->_extended_action=$extended_action;
        $this->_model = $model;
        $this->doNotRenderHeader = 0;
		$this->render = 1;
        $this->_template = new template($controller,$action,$lang,$loginstatus);
        
    }
    
    function set($key,$value)
    {
        $this->_template->set($key,$value);
            
    }
    
    function __destruct()
    {
        if ($this->render) {
			$this->_template->render($this->doNotRenderHeader);
		}
    }
        
         
}