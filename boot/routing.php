<?php
/*
 * This Files call the controller and passes the needed argument to controller class
 * Todo:
 * validate $Action before passing and choose somthing for $Extend_Action
 * $Extend_Action is an array
 * 
 * Fix Try and Catch
 */

function routing($url,$lang)
{
    $urlArray=array();
    $urlArray=explode("/",$url);
    $Action='';
    $Extend_Action= array();
     
    
   
    $Controller=$urlArray[0];
    
    
    if(sizeof($urlArray)>1)
        {
            array_shift($urlArray);
            $Action=$urlArray[0];
            //echo 'test';
        }
    if(sizeof($urlArray)>1)
        {
            array_shift($urlArray);
            $Extend_Action=$urlArray;
        }
    
    if ($Controller=='')
    {
        $Controller='home';
    }
    if($Action==''){
        $Action=$Controller;
        //echo $Action;
    }
    
    $Controller=rtrim(strtolower($Controller));
    $Model=$Controller;
    $Model.='_model';
    $PassController=$Controller;
    $Controller.="_controller";
    
    //$auth1 = new auth;
    $loginstatus = 0;
    //call controller and model
    try{
        
        if ((int)method_exists($Controller, $Action)) {      
        $page = new $Controller($PassController, $Action, $Extend_Action, $Model, $lang, $loginstatus);
        call_user_func_array(array($page,$Action),$Extend_Action);
            } else {
        //echo "this";
        //not loading the page properly?? when action is specified
        //$Action='';
        $page = new error_404_controller;
          }
    }catch (Exception $e) {
     echo $e->getMessage();
    $Action='';
    $page = new error_404_controller;
        
}

}




