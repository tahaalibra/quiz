<?php

///////////////////////////////////////////////////////////////////////////////////////////////////
// Map of Dales - Paths Configuration
///////////////////////////////////////////////////////////////////////////////////////////////////


$www = trim(str_replace(DS,'/',WWW),'/');
$document_root = trim($_SERVER["DOCUMENT_ROOT"],'/');
$folder = str_ireplace($document_root,null,$www);
$folder = trim($folder,"/");
define('FOLDER'    , $folder);
define('BP'        , "http://".trim($_SERVER['HTTP_HOST'],'/').'/'.FOLDER.'/');
define('CONTROLLER', ROOT.DS.'app'.DS.'controller');
define('MODEL'     , ROOT.DS.'app'.DS.'model');
define('VIEW'      , ROOT.DS.'app'.DS.'view');
define('DALES'     , ROOT.DS.'dales');
define('APP'       , ROOT.DS.'app');

