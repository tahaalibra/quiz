<?php namespace app\controller;

use dales\system\Auth\Auth;

class SigninController
{

    function signin()
    {          
        Auth::checkLogin(false);

        if(isset($_POST['username'])&&isset($_POST['password'])&&!empty($_POST['username'])&&!empty($_POST['password'])){

              if(Auth::login($_POST['username'],$_POST['password'])===true){

                  header('Location: '.BP.'home.php');
              }else{
                  return view("signin",array("response"=>"Invalid Password"));

              }
        }

        return view("signin");
    }
}
