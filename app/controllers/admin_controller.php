<?php

class admin_controller extends controller{
    
    
    
    function admincheck(){         
        $auth = new auth;
        if($_SESSION['level']!='1')
        {header("Location:".INSTALL_FOLDER);}
    }
    
    function admin(){        
       
        $this->admincheck();
        
        $admin_model = new $this->_model;        
        $this->set("noofq",$admin_model->displayall());        
    }
    
    
    function add(){
        
        $this->admincheck();
        $admin_model = new $this->_model;
        $this->set("noofq",$admin_model->displayall());   
        
        $admin_model->add($_POST['question'],$_POST['answere1'],$_POST['answere2'],$_POST['answere3'],$_POST['answere4'],$_POST['answere']);        
    }
    
    
    
    function result()
    {  $this->render=0;
        $admin_model = new $this->_model;
        $this->set("noofq",$admin_model->displayall());   
        $admin_model->resultforall();  
        
        $admin_model->display();
        
    }
}