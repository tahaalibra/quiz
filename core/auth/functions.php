<?php

/*

    
    
function login($password,$username){
    
    //$options = ['salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM)];
    $_password=$password;
    $_username=$username;
    $obj = new model;
    $stmt = $obj->_dbconnect->prepare('SELECT * FROM users WHERE username = :username');
    $stmt->execute(array('username' => $this->_username));
    
    //$stmt->bindParam(':id', $id, PDO::PARAM_INT);
    //$stmt->execute();
    
    $row = $stmt->fetch(PDO::FETCH_BOTH);//or use ASSSOC
    
    
    if($stmt->rowCount()==1)
    {
        $_passwordhash=$row[3];
        if(password_verify($_password,$_passwordhash)==TRUE)
          {     
                //function check brute force and load captcha
                //start session
                    $_user_browser = $_SERVER['HTTP_USER_AGENT'];
                    //$this->_userid = preg_replace("/[^a-zA-Z0-9_\-]+/","",row[0]);
                    $_SESSION['user_id'] = $row[0];
                    // XSS protection as we might print this value
                    $_username = preg_replace("/[^a-zA-Z0-9_\-]+/","",$_username);
                    $_SESSION['username'] = $_username;
                    $_SESSION['login_string'] = hash('sha512',$_passwordhash.$_user_browser);
                    // Login successful.
                    
                    return true;
          }else{
            return false;
          }
        
    } else {
        return false;
    }
}
  
    
    
    
    
    
    function checklogin(){
        
        if(isset($_SESSION['user_id'],$_SESSION['username'],$_SESSION['login_string']))
        {
            $this->_username = $_SESSION['username'];
            $this->_userid = $_SESSION['user_id'];
            //$this->_login_string = session['login_string'];
            $_user_browser = $_SERVER['HTTP_USER_AGENT'];
            
            //echo $this->_username;
            
            $stmt = $this->_dbconnect->prepare('SELECT * FROM users WHERE username = :username');
            $stmt->execute(array('username' => $this->_username));
    
            $row = $stmt->fetch(PDO::FETCH_BOTH);//or use ASSSOC
            
            
            
            if($stmt->rowCount()==1)
                {   $this->_passwordhash=$row[3];
                    $_user_browser = $_SERVER['HTTP_USER_AGENT'];
                            
                        if($_SESSION['login_string'] == hash('sha512',$this->_passwordhash.$_user_browser))
                            {     
                            
                                    // Loggedin
                                    return true;
                            }else{
                                    return false;
                                 }        
                
               } else{
                      return false;
                     }       
        
        }else {
                return false;
              }
    }
    
    
    function logout(){
        
            //boot_session();
 
            // Unset all session values 
            $_SESSION = array();
 
            // get session parameters 
            $params = session_get_cookie_params();
 
            // Delete the actual cookie. 
            setcookie(session_name(),'', time() - 42000,$params["path"],$params["domain"],$params["secure"],$params["httponly"]);
 
            // Destroy session 
            session_destroy();
            header('Location: /kitchen/home');
    }
    
    
    
    function boot_session(){
    
   $session_name = 'sec_session_id';   // Set a custom session name
   $secure = "SECURE";
   
    // This stops JavaScript being able to access the session id.
    $httponly = false;
    // Forces sessions to only use cookies.
        
    if (ini_set('session.use_only_cookies', 1) === FALSE) {
        //error code for enabling cookies
    }
    // Gets current cookies params.
    $cookieParams = session_get_cookie_params();
    session_set_cookie_params($cookieParams["lifetime"],
        $cookieParams["path"], 
        $cookieParams["domain"], 
        $secure,
        $httponly);
    
    // Sets the session name to the one set above.
    session_name($session_name);
    session_start();            // Start the PHP session 
    session_regenerate_id(true);    // regenerated the session, delete the old one. 
}
    
    



   

//boot_session();


*/