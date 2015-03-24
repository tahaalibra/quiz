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
    {   $this->doNotRenderHeader=1;
        $this->admincheck();
        $model = new $this->model;
        //$model->resultforall();
        $result=$model->fullresult();
        $this->set('result',$result);
        $this->set('users',$model->countUsers());
        //$model->display();
        
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
/*
        $user="9922753782,8928459676,8007961664,9869246327,8796720747,7709575400,8657656406,8087206534,7057568619,9930414898,7057566226,8793755690,8605116661,8087494395,7744955538,9403498220,7083750175,8149831446,9623445930,9158086106,8237227438,9689659783,9028269129,7758988673,7709943551,7385588174,7875747296,9049487137,9175323460,7058571625,9209202814,9762851417,7709617821,9820823834,8796579768,9860721240,8796904759,9167679170";
     
     $user=explode(',',$user);
     
     foreach($user as $x){
         $password=rand(10000,99999);
         $model->register($x,$password);
         $this->set('password',$password);
         $temp=file_get_contents(ROOT.DS.'test.html');
         file_put_contents(ROOT.DS.'test.html',$temp.$x.'-'.$password.'<br>');
     }
    
    */
    }
    
}
