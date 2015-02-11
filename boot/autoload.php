<?php
/*
 * Autoload Controllers, Models, Class and Api
 */


spl_autoload_register("autoloadModel");
spl_autoload_register("autoloadApi");
spl_autoload_register("autoloadController");
spl_autoload_register("autoloadClass");


function autoloadApi($className)
{
    if (file_exists(ROOT.DS.'app'.DS.'api'.DS.$className.'.php')) {
        require_once ROOT.DS.'app'.DS.'api'.DS.$className.'.php';
    }
}


function autoloadClass($className)
{
    if (file_exists(ROOT.DS.'core'.DS.$className.'.class.php')) {
        require_once ROOT.DS.'core'.DS.$className.'.class.php';
    }
}

function autoloadController($className)
{
    if (file_exists(ROOT.DS.'app'.DS.'controllers'.DS.$className.'.php')) {
        require_once ROOT.DS.'app'.DS.'controllers'.DS.$className.'.php';
    }
}

function autoloadModel($className)
{
    if (file_exists(ROOT.DS.'app'.DS.'models'.DS.$className.'.php')) {
        require_once ROOT.DS.'app'.DS.'models'.DS.$className.'.php';
    }
}

//Autoload Extensions
require_once EXT_PATH.DS.'autoload.php';

//Autoload composer
//require_once ROOT.DS.'vendor'.DS.'autoload.php';
