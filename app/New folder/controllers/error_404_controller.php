<?php
//echo "Page not Found";
class error_404_controller{
    protected $_template;
    
    function __construct()
    {   $lang = array();
        echo "Error 404";
        $this->_template = new template('404','404',$lang);
        $this->_template->set('title','Page not found!');
    }
    function __destruct()
    {
        $this->_template->render();
    }
        
}
