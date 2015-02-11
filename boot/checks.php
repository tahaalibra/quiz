<?php
/*
 * Perform essential checks
 * before loading the website
 *
 */
 
//Check if development enviourment is true
function setReporting()
 {
     if (DEVELOPMENT_ENVIRONMENT == true) {
         error_reporting(E_ALL);
         ini_set('display_errors', 'On');
     } else {
         error_reporting(E_ALL);
         ini_set('display_errors', 'Off');
         ini_set('log_errors', 'On');
         ini_set('error_log', ROOT.DS.'tmp'.DS.'logs'.DS.'error.log');
     }
 }

 
// This Check for Magic Quotes and Remove them for more refer google
function stripSlashesDeep($value)
 {
     $value = is_array($value) ? array_map('stripSlashesDeep', $value) : stripslashes($value);
     return $value;
 }

 function removeMagicQuotes()
 {
     if (get_magic_quotes_gpc()) {
         $_GET    = stripSlashesDeep($_GET);
         $_POST   = stripSlashesDeep($_POST);
         $_COOKIE = stripSlashesDeep($_COOKIE);
     }
 }

//Check register globals and remove them
function unregisterGlobals()
 {
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

 /*
 // Force user to https only
 function httpsonly()
 {
    if ($_SERVER['SERVER_PORT'] !== 443 && (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === 'off')) {
        header('Location: https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
        exit;
    }
 }
*/

 setReporting();
 removeMagicQuotes();
 unregisterGlobals();
