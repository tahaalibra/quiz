<?php

class AdminController extends Controller{



    function admincheck()
    {
        if($_SESSION['level']!='1'){
        header("Location: ".INSTALL_FOLDER."/home");
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
        if( $_FILES['image']['name'] != "" ){
            $image=$model->displayall()+1;
            $target_dir = ROOT.DS.'app'.DS.'data';
            $target_file = $target_dir .DS. $image;
            move_uploaded_file( $_FILES['image']['tmp_name'], $target_file ) or 
                die( "Could not copy file!");
        }else{
            $image=NULL;
        }
  
        if(empty($_POST['code'])){
            $_POST['code']=NULL;
        }
        
        $model = new $this->model;
        $this->set("noofq",$model->displayall());
        $model->add($_POST['question'],$_POST['code'],
                    $_POST['answere1'],$_POST['answere2'],
                    $_POST['answere3'],$_POST['answere4'],
                    $_POST['answere'],$image);
        header("Location:".INSTALL_FOLDER."/admin");
    }



    function result()
    {   $this->render=0;
        $this->admincheck();
        $model = new $this->model;
        $model->resultforall();
        $model->display();
    }


    function register()
    {   $this->doNotRenderHeader=1;
        $this->admincheck();
        $model = new $this->model;
        $password=rand(10000,99999);
        if(isset($_POST['username'])){
        $model->register($_POST['username'],$password);
        $this->set('password',$password);
        $temp=file_get_contents(ROOT.DS.'test.html');
        file_put_contents(ROOT.DS.'test.html',$temp.$_POST['username'].'-'.$password.'<br>');
        header('Location: '.INSTALL_FOLDER.'/redirect.php?to=admin/register');
        }

    }
}
