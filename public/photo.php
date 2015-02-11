<?php
header("Content-type: image/jpeg");

//method1
//$image=imagecreatefromjpeg("./img/bw.jpg");
//imagejpeg($image);

//method2
if($_GET){   
    $image = ROOT.DS."app".DS."data".DS."img".DS.$_GET["id"];
    readfile($image);
}
else{
    header('Location: index');
}