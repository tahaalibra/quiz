<?php

class admin_controller extends controller{
    
    function admin(){
        
        $admin_model = new $this->_model;
        
        $admin_model->displayall();
        
        
    }
    
    
    function add(){
$admin_model = new $this->_model;
$admin_model->add($_POST['question'],$_POST['answere1'],$_POST['answere2'],$_POST['answere3'],$_POST['answere4'],$_POST['answere']);
        
    }
}