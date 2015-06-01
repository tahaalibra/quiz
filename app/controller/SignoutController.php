<?php namespace app\controller;

use dales\system\Auth\Auth;

class SignoutController {

    function signout()
    {
        Auth::logout();
        header("Location:".BP."signin.php");
    }

}
