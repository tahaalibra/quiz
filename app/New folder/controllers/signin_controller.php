<?php


class signin_controller extends controller{
    
    function signin(){
    $auth = new auth;
        if($auth->checklogin())
            { 
                    header("Location:".INSTALL_FOLDER."/home");
            }
        elseif(isset($_POST['username'])&&isset($_POST['password']))
            {
            
                if($auth->login($_POST['username'],$_POST['password']))
                    {
                        header("Location:".INSTALL_FOLDER."home");
                    }
                else{
                        echo "invalid password";
                    }
            }
        else
            {
                    header('Location: home');
            }
    
    
    }
}