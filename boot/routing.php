<?php

/*
 * Routing function
 * for smart url  
 */

function routing($url)
{
   
    $api           = false;
    $urlArray      = array();
    $urlArray      = explode("/", $url);
    $Controller    = '';
    $Action        = '';
    $Extend_Action = array();

    if(strtolower($urlArray[0]) == 'api'){
        array_shift($urlArray);
        $api = true;
    }
        
    if (sizeof($urlArray) > 0){
        $Controller    = $urlArray[0];
    }
    
    
    if (sizeof($urlArray) > 1) {
        array_shift($urlArray);
        $Action = $urlArray[0];
    }
  
    if (sizeof($urlArray) > 1) {
        array_shift($urlArray);
        $Extend_Action = $urlArray;
    }
    
  
    if ($Controller == '') {
        $Controller = 'Home';
    }
    if ($Action == '') {
        $Action = $Controller;
    }
    
    
    $Controller     = rtrim(ucfirst($Controller));
    $Model          = $Controller;
    $Model         .= 'Model';
    $PassController = $Controller;
    
    if($api == false){
    $Controller .= "Controller";
    }else{
    $Controller .= "Api";
    }
    
   
    try {
        if ((int) method_exists($Controller, $Action)) {
            $page = new $Controller($PassController, $Action, $Extend_Action, $Model);
            call_user_func_array(array($page, $Action), $Extend_Action);
        } else {
            $page = new Error_404Controller();
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
