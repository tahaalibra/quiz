<?php


class SigninController extends Controller
{

    function signin()
    {   $this->doNotRenderHeader=1;        
        Auth::checkLogin(false);
        

        if(isset($_POST['username'])&&isset($_POST['password'])){

              if(Auth::login($_POST['username'],$_POST['password'])){

                      header("Location:".INSTALL_FOLDER."/home");
              }else{
                      echo "invalid password";
              }
        }
    }
}
