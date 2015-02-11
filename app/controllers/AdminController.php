<?php

class AdminController extends Controller{



    function admincheck()
    {
        if($_SESSION['level']!='1'){
        header("Location: home");
        }
    }

    function admin(){
        $this->doNotRenderHeader=1;
        $this->admincheck();
        $doNotRenderHeader=1;
        $model = new $this->model;
        $this->set("noofq",$model->displayall());
    }


    function add(){
        $this->doNotRenderHeader=1;
        $this->admincheck();
        $model = new $this->model;
        $this->set("noofq",$model->displayall());
        $model->add($_POST['question'],$_POST['answere1'],$_POST['answere2'],$_POST['answere3'],$_POST['answere4'],$_POST['answere']);
        header("Location: admin");
    }



    function result()
    {   $this->render=0;
        $model = new $this->model;
        $model->resultforall();
        $model->display();

    }
}
