<?php

class auth extends PDOQuery{
    
    private $_password;
    private $_passwordhash;
    private $_salt;
    private $_username;
    private $_user_browser;
    private $_login_string;
    private $_userid;
    private $_model;
    private $_table;
     
    
    
    function __construct() {
        
        $this->connect(DB_NAME,DB_HOST,DB_USER,DB_PASSWORD);
        $this->_model = get_class($this);        
        $this->boot_session();       
    }
 
    function __destruct() {
        $this->close();
    }
    

    
    
    function login($username,$password){
    
    $this->_password=$password;
    $this->_username=$username;
    $stmt = $this->_dbconnect->prepare('SELECT * FROM users WHERE username = :username');
    $stmt->execute(array('username' => $this->_username));
    
    $row = $stmt->fetch(PDO::FETCH_BOTH);//or use ASSSOC

    if($stmt->rowCount()==1)
    {   
        $this->_passwordhash=$row["password"];
        if(password_verify($this->_password,$this->_passwordhash)==TRUE)
          {     
                    $_user_browser = $_SERVER['HTTP_USER_AGENT'];
                    //$this->_userid = preg_replace("/[^a-zA-Z0-9_\-]+/","",row["id"]);
                    $_SESSION['user_id'] = $row["id"];
                    // XSS protection as we might print this value
                    //$this->_username = preg_replace("/[^a-zA-Z0-9_\-]+/","",$this->_username);
                    $_SESSION['username'] = $this->_username;
                    $_SESSION['login_string'] = hash('sha512',$this->_passwordhash.$_user_browser);
                    $_SESSION['level']=$row["level"];
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
            $_user_browser = $_SERVER['HTTP_USER_AGENT'];
                        
            $stmt = $this->_dbconnect->prepare('SELECT * FROM users WHERE username = :username');
            $stmt->execute(array('username' => $this->_username));
    
            $row = $stmt->fetch(PDO::FETCH_BOTH);//or use ASSSOC
                        
            if($stmt->rowCount()==1)
                {   $this->_passwordhash=$row["password"];
                    $_user_browser = $_SERVER['HTTP_USER_AGENT'];
                            
                        if($_SESSION['login_string'] == hash('sha512',$this->_passwordhash.$_user_browser))
                            {                            
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
            
            $_SESSION = array();
            $params = session_get_cookie_params(); 
            // Delete the actual cookie. 
            setcookie(session_name(),'', time() - 42000,$params["path"],$params["domain"],$params["secure"],$params["httponly"]); 
            // Destroy session 
            session_destroy();
    }
    
    
    
   function boot_session(){
   if(!isset($_SESSION['user_id'],$_SESSION['username'],$_SESSION['login_string'])) 
   {$session_name = 'sec_session_id';   // Set a custom session name
   
    //set this if using https    
    $secure = false;
   
    // This stops JavaScript being able to access the session id.
    //set this if only https allowed
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
    session_regenerate_id(true); }   // regenerated the session, delete the old one. 
}   
    
    ///WANRNING!!!!!! TEMP FUNCTION DELETE ME
    /*function register($username,$password){
        
       
       $password_hashed = password_hash($password, PASSWORD_BCRYPT);      
       $stmt = $this->_dbconnect->prepare('INSERT INTO users (username,password) VALUES (:username,:password)');
        $stmt->execute(array(':username'=>$username,':password'=>$password_hashed));
   
   
   } */
    
}

