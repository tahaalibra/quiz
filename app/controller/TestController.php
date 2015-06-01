<?php namespace app\controller;

use app\model\TestModel;
use dales\system\Auth\Auth;


class TestController{
    protected $_question;
    protected $_valid;


     function test(){

        Auth::checkLogin(true);
        $model = new TestModel;
         define('QUESTION_LIMIT',$model->selectedQuestion());
         
        
        if($model->scoreExists()){
            
            
            if(isset($_POST['answer'],$_POST['qid'])){  
                $model->putresult($_POST['qid'],$_POST['answer']);
                //$resultModel->updateScore($resultModel->generate_result());
            }
            
            $zero=$model->zeroCount();
            
            if((!isset($_POST['next'])&&empty($_POST['next']))||$_POST['next']>QUESTION_LIMIT){
                $_POST['next']=1;
                $_POST['next']=QUESTION_LIMIT-$zero+1;/////////////////temp only if not requred to go back
                
            }
            /////////////////////////////////////////////////////////////////////////////////////////
            $_POST['next']=QUESTION_LIMIT-$zero+1;/////////////////temp only if not requred to go back
            
            if($zero!=0){

                if(isset($_COOKIE["my_cookie"])){
                    if($_COOKIE["my_cookie"]==0){                        
                        //fetch quid with zero
                        $qid = $model->qidWithZero();
                        for($j=0;$j<$zero;$j++){
                            $model->putresult($qid[$j]['q_id'],-1);
                        }
                            unset($_COOKIE['my_cookie']);
                            setcookie('my_cookie', null, -1, '/');
                            setcookie('my_cookie', null, -1, '/');
                            header('Location: result.php');
                    }
                }
             
            
             $this->_question=$model->get_next($_POST['next']-1);
             $_SESSION["qid"]=$this->_question['id'];
             $data = array("question_done"=> QUESTION_LIMIT-$zero+1,
                           "question_no"=> $_POST['next'],
                           "next"=>$_POST['next']+1,
                           "qid"=> $this->_question['id'],
                           "question_total"=> QUESTION_LIMIT,
                           "question"=> $this->_question['question_name'],
                           "answer1"=> $this->_question['answer1'],
                           "answer2"=> $this->_question['answer2'],
                           "answer3"=> $this->_question['answer3'],
                           "answer4"=> $this->_question['answer4']
                            );
                return view("test",$data);
            
             
            }else{
                echo "yo";
                header("Location:".BP."result.php");
                 }
        }else{
            echo "yo";
            header("Location:".BP."home.php");
        }
}
}