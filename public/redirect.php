<?php

if($_GET){
   
    //$_GET["from"];
    //$_GET["message"];
    header('Location: '.$_GET["to"]);
}
else{
    header('Location: index');
}