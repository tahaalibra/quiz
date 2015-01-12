<?php
/*
 * Initialize website
 * 
 * Todo:
 *  
 */

//development enviourment check
function setReporting() 
{
    if (DEVELOPMENT_ENVIRONMENT == true) 
        {    error_reporting(E_ALL);
             ini_set('display_errors','On');
        } else 
            {    error_reporting(E_ALL);
                 ini_set('display_errors','Off');
                 ini_set('log_errors', 'On');
                 ini_set('error_log', ROOT.DS.'tmp'.DS.'logs'.DS.'error.log');
            }
}
 

//Check for Magic Quotes and remove them
function stripSlashesDeep($value) {
    $value = is_array($value) ? array_map('stripSlashesDeep', $value) : stripslashes($value);
    return $value;
}
 
function removeMagicQuotes() {
if ( get_magic_quotes_gpc() ) {
    $_GET    = stripSlashesDeep($_GET   );
    $_POST   = stripSlashesDeep($_POST  );
    $_COOKIE = stripSlashesDeep($_COOKIE);
}
}
 

//Check register globals and remove them 
function unregisterGlobals() {
    if (ini_get('register_globals')) {
        $array = array('_SESSION', '_POST', '_GET', '_COOKIE', '_REQUEST', '_SERVER', '_ENV', '_FILES');
        foreach ($array as $value) {
            foreach ($GLOBALS[$value] as $key => $var) {
                if ($var === $GLOBALS[$key]) {
                    unset($GLOBALS[$key]);
                }
            }
        }
    }
}
 
//Call Routing which then calls the hooks
require_once(ROOT.DS.'boot'.DS.'routing.php');




 
//Autoload any classes that are required 
function __autoload($className) {
    if (file_exists(ROOT . DS . 'core' . DS . strtolower($className) . '.class.php')) {
        require_once(ROOT . DS . 'core' . DS . strtolower($className) . '.class.php');
    } else if (file_exists(ROOT . DS . 'app' . DS . 'controllers' . DS . strtolower($className) . '.php')) {
        require_once(ROOT . DS . 'app' . DS . 'controllers' . DS . strtolower($className) . '.php');
    } else if (file_exists(ROOT . DS . 'app' . DS . 'models' . DS . strtolower($className) . '.php')) {
        require_once(ROOT . DS . 'app' . DS . 'models' . DS . strtolower($className) . '.php');
    } else {
        //throw new Exception;
        //error code is here for no class found
        //error should be cached when creating new class object
        header('Location:'.DS.INSTALL_FOLDER.DS.'error_404');
    }
}
//$somethig = new test_model;
//$any=array();
//if(!$any==null)
//{$any = $somethig->generate_all();}

setReporting();
removeMagicQuotes();
unregisterGlobals();
routing($url,$lang);