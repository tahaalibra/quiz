<?php

if($_GET){
   
    //$_GET["from"];
    //$_GET["message"];
    //echo str_ireplace(".php",null,$_GET["to"]);
    //die();
    header('Location: '.
        str_ireplace(".php",null,$_GET["to"])
    );
}
else{
    header('Location: index');
}