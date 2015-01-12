<?php

class result_controller extends controller{

function result(){
     $auth=new auth;
     if ($auth->checklogin()==false){
        header("Location:".INSTALL_FOLDER."signin");
        }
    
     $result = new $this->_model;
     $this->set("result",$result->generate_result());
    $this->set("name",$result->getname());
    
    
    //if($result>=(QUESTION_LIMIT*50)/100)
}    
    
}