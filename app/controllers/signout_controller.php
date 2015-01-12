<?php

class signout_controller extends controller{
    
    function signout(){
    $auth = new auth;
    $auth->logout();     
    }
    
}