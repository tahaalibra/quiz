<?php namespace app\controller;

use dales\system\Auth\Auth;
use app\model\AdminModel;

class AdminController
{

    protected function admincheck()
    {
        if($_SESSION['level']!='1'){
        header("Location: ".BP."home.php");
        }
    }

    public function admin()
    {
        $this->admincheck();

        $model = new AdminModel;
        $category = $model->getCategory();
        if ($category) {
        return view("admin", array("category" => $category));
        } else{
        return view("admin",array("response"=>"No Category Present"));
        }
    }

    public function add($id = null)
    {
        $id = $_POST['id'];
        if (isset($id)) {

        $this->admincheck();

            if(isset($_POST['category'])&&!empty($_POST['category'])){
                $response ="Question Added Successfully";
                $model = new AdminModel;

                $model->add($_POST['question'],$_POST['answere1'],$_POST['answere2'],
                            $_POST['answere3'],$_POST['answere4'],
                            $_POST['answere'] ,$_POST['category']);
                return view("admin.addquestion", array("id" => $id, "response"=>$response));
            }

        return view("admin.addquestion", array("id" => $id));
        }else{
            header("Location: ".BP."admin.php");
        }
    }

    public function newCategory(){

        $this->admincheck();
        if(isset($_POST['category'])&&!empty($_POST['category'])){

            $model = new AdminModel;
            $response = $model->newCategory($_POST['category']);
            return view("admin.newcategory",array("response"=>$response));
        }
        return view("admin.newcategory");
    }

    public function setting(){

        $this->admincheck();
        $model    = new AdminModel;

        if(isset($_POST['category'])&&!empty($_POST['category']))
        {
            $model->countset($_POST['category'],$_POST['q_count']);
        }

        $category = $model->getCategory();
        $totalQuestion = $model->totalQuestion();
        $selectedQuestion = $model->selectedQuestion();

        if ($category) {

            foreach($category as $key){
                $model->totalInCategory($key['id']);
            }

            $category = $model->getCategory();

            return view("admin.setting", array("category" => $category,"total"=>$totalQuestion,"quiz_total"=>$selectedQuestion));
        } else{
            return view("admin.setting",array("response"=>"No Category Present"));
        }

    }

    public function reset(){

        $this->admincheck();
        $model = new AdminModel;
        if(isset($_POST['question']))
        {
            $model->resetQuestion();
        }
        if(isset($_POST['user']))
        {
            $model->resetUser();

        }
        if(isset($_POST['category']))
        {
            $model->resetcategory();
        }
        if(isset($_POST['result']))
        {
            $model->resetResult();
        }

        return view("admin.reset");
    }

    public function result(){
        $this->admincheck();
        $model = new AdminModel;
        $result = $model->fullResult();
        //print_r($result);
        return view('admin.result',array('result'=>$result));
    }


}
