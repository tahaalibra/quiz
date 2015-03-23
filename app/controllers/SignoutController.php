<?php

class SignoutController extends Controller{

    function signout()
    {   $this->render=0;
        Auth::logout();
        header("Location:".INSTALL_FOLDER."/signin");
    }

}
