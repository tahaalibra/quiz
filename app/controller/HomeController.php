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
                header("Location: ".BP."result.php");
            }else{
                header("Location: ".BP."test.php");
            }
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
                header("Location: ".BP."test.php");
            }else{
                return view("home",array("response","No Question in Quiz"));
            }
        }



        if($_SESSION['level']=='1'){
            header("Location: ".BP."admin.php");
        }
        return view("home");

    }
}
