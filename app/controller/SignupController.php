<?php namespace app\controller;

use app\model\SignupModel;
use dales\model\Model;
use PDO;

class SignupController
{

    function signup()
    {
        //Auth::checkLogin(false);

        if(isset($_POST['username'])&&isset($_POST['password'])&&isset($_POST['name'])){
            if(!empty($_POST['password'])&&!empty($_POST['username'])&&!empty($_POST['name']))
            {
                  $model           = new SignupModel;
                  $response = $model->register($_POST['name'],$_POST['username'],$_POST['password']);
                  //echo $response;
                  return view("signup",array("response"=>$response));
            }
        }

        return view("signup");
    }
}
