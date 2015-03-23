<?php
header("Content-type: image/jpeg");

//Define Directory Separator
define('DS', DIRECTORY_SEPARATOR);

//Define Root Directory Path
define('ROOT', dirname(dirname(__FILE__)));

if($_GET){   
    $image = ROOT.DS."app".DS."data".DS.$_GET["id"];
    $image=imagecreatefromjpeg($image);
    imagejpeg($image);
}
else{
    header('Location: index');
}