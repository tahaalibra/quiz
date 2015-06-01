<?php namespace dales\system\Auth;

use dales\model\Model;
use PDO;

class Auth
{

    public static function login($email, $password)
    {
        $model           = new Model;
        $stmt            = $model->dbconnect->prepare('SELECT * FROM users WHERE email = :email');
        $stmt->execute(array('email' => $email));
        $row             = $stmt->fetch(PDO::FETCH_ASSOC);
        $model           = null;
        if ($stmt->rowCount() == 1) {

                if (crypt($password,"quiz")== $row["password"]) {
                    $_user_browser            = $_SERVER['HTTP_USER_AGENT'];
                    $_SESSION['user_id']      = $row["user_id"];
                    $_SESSION['email']        = $email;
                    $passwordhash    = $row["password"];
                    $_SESSION['name']         = $$row["name"];
                    $_SESSION['login_string'] = hash('sha512', $passwordhash.$_user_browser);
                    $_SESSION['level']        = $row["level"];
                    return true;
                } else {
                    return 'Password or Email does not match';
                }

        } else {
            return 'Password or Email does not match';
        }
    }

    public static function checkLogin($bool)
    {   $result=null;
        if (isset($_SESSION['user_id'], $_SESSION['email'], $_SESSION['login_string'])) {

            $email           = $_SESSION['email'];
            $model           = new Model;
            $stmt            = $model->dbconnect->prepare('SELECT * FROM users WHERE email = :email');
            $stmt->execute(array('email' => $email));
            $row             = $stmt->fetch(PDO::FETCH_ASSOC);
            $model= null;
            if ($stmt->rowCount() == 1) {

                $passwordhash    = $row["password"];
                $_user_browser   = $_SERVER['HTTP_USER_AGENT'];

                if ($_SESSION['login_string'] == hash('sha512', $passwordhash.$_user_browser)&&$_SESSION['user_id']==$row['user_id']) {
                    $result = true;
                } else {
                    $result = false;
                }
            } else {
                $result = false;
            }
        } else {
            $result = false;
        }

        if($bool===true){
            if($result===false){
                header('Location: '.BP.'redirect.php?to=signin.php');
            }
        }else{
            if($result===true){
                header('Location: '.BP.'redirect.php?to=home.php');
            }
        }


    }


    public static function logout()
    {
        $_SESSION = array();
        $params   = session_get_cookie_params();
        setcookie(session_name(),
            '',
            time() - 42000,
            $params["path"],
            $params["domain"],
            $params["secure"],
            $params["httponly"]);
        session_destroy();
    }


    public static function startSession()
    {
        $session_name = 'quiz';   // Set a custom session name
        $secure       = false;
        $httponly     = true;
        if (ini_set('session.use_only_cookies', 1) === false) {
        } else {

            $cookieParams = session_get_cookie_params();
            session_set_cookie_params($cookieParams["lifetime"],
                $cookieParams["path"],
                $cookieParams["domain"],
                $secure,
                $httponly);
            session_name($session_name);
            session_start();
            session_regenerate_id(true);
        }
    }

}
