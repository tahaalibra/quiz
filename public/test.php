<?php 
$str = addslashes('What does "yolo" mean?');
echo($str); 

$str = stripslashes("Is your name O\'reilly?");

// Outputs: Is your name O'reilly?
echo $str;
if (!ini_get('register_globals')) {
     $new = 0;
    echo $new;
                }


echo " ";
$url = str_replace("/kitchen/", "",$_SERVER["REQUEST_URI"]);
echo $url." ";
$urlArray = array();
$urlArray = explode("/",$url);
echo $urlArray[0];
echo<<<theEnd
this is a<br>
new       text
theEnd;


$size = "large";
$var_array = array("color" => "blue",
                   "size"  => "medium",
                   "shape" => "sphere");
extract($var_array);

echo "$color, $size, $shape, $size\n";
    
    
?>