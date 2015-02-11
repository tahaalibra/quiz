<?php
//header("Content-type: image/jpeg");


//$image=imagecreatefromjpeg("./img/bw.jpg");
//imagejpeg($image);

//$image = "./../img/bw.jpg";
//readfile($image);



/*
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
$url = str_replace("/kitchen/", "", $_SERVER["REQUEST_URI"]);
echo $url." ";
$urlArray = array();
$urlArray = explode("/", $url);
echo $urlArray[0];
echo<<<theEnd
this is a<br>
new       text
theEnd;

$size = "large";
$var_array = array("color" => "blue",
                   "size"  => "medium",
                   "shape" => "sphere", );
extract($var_array);

echo "$color, $size, $shape, $size\n";

class A {
   static $data;
   public function example() {
        echo "I am the original function A::example().<br />\n";
        A::$data="yo";
    }
}
*/

//php code to send mail, 
//author : idrish laxmidhar
//Use this code to send a test mail from your localhost.

$random_hash1 = password_hash('14792', PASSWORD_BCRYPT);
echo $random_hash1."<br>";
echo $random_hash='$2y$10$QwCiokWAp.Gf57aMw30RNeZc/q0.aUA5b9kYWg5q62xcxl/2Dvho6';
echo " ".password_verify('14792',$random_hash);

$content ='
<html><head></head>
<body>
Hello {NAME},
Business name : {BUSINESS_NAME}.
Tel : {TELEPHONE}.
Mob : {MOBILE}.
</body>
</html>';

//$search= array ('{BUSINESS_NAME}','{TELEPHONE}','{MOBILE}');
//$replace=array($sBusiness,$sTelp,$sMobile);
//$content =str_replace($search,$replace,$content);

$url = str_ireplace('', "", $_SERVER["REQUEST_URI"]);
$url = substr( $url, 1 );
echo $url;

$url = "http://api.giphy.com/v1/gifs/search?q=ryan+gosling&api_key=dc6zaTOxFJmzC&limit=5";
print_r(json_decode(file_get_contents($url)));
    
?>
