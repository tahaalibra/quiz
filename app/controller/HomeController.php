<?php namespace app\controller;

use dales\system\Auth\Auth;
use app\model\HomeModel;

class HomeController
{

    public function home()
    {

        Auth::checkLogin(true);

        $model = new HomeModel;

        if($model->exists())
        {
            $zero=$model->zeroCount();
            if($zero==0){
                header("Location: ".BP."result");
            }else{
                header("Location: ".BP."test");
            }
        }else{
            //print_r($_COOKIE['my_cookie']);
            setcookie('my_cookie', null, time() - 3600, '/');
            setcookie('my_cookie', null, time() - 3600, '/');
            setcookie('my_cookie');
            unset($_COOKIE['my_cookie']);
            //print_r($_COOKIE['my_cookie']);
        }

        if(isset($_POST['start_test'])&&!empty($_POST['start_test']))
        {

            if($model->selectedQuestion()>0) {

                $category = $model->getCategory();
                print_r($category);
                foreach ($category as $key) {
                    if($key['q_count']>0){
                    $model->generateWithId($key['id'], $key['q_count']);
                    }
                }
                $model->setScore();
                header("Location: ".BP."test");
            }else{
                return view("home",array("response","No Question in Quiz"));
            }
        }



        if($_SESSION['level']=='1'){
            header("Location: ".BP."admin");
        }
        return view("home");

    }
}
