<?php

class test_controller extends controller{
    protected $_question;
    protected $_valid;
    
    
     function test(){
         $auth=new auth;
         if ($auth->checklogin()==false){
         header("Location:".INSTALL_FOLDER."signin");
        }
         
         $new_model = new $this->_model;        
         
         if(isset($_COOKIE["my_cookie"])) 
             {
                    if($_COOKIE["my_cookie"]==0)
                    {
                        $i=QUESTION_LIMIT-$new_model->countrows();
                        for($j=0;$j<$i;$j++)
                        {
                            echo $new_model->putresult(-$j,-$j);
                            
                        }
                        
                            unset($_COOKIE['my_cookie']);
                            setcookie('my_cookie', null, -1, '/');
                            setcookie('my_cookie', null, -1, '/');
                            header('Location:'.INSTALL_FOLDER.'result');
                    }
             } else{
              $this->_valid="0";
             }
         
         
         if(isset($_POST['answer'],$_POST['qid']))
            {
               
               if($new_model->putresult($_POST['answer'],$_POST['qid']))
               { $this->_valid="0"; }
               
            }
        if($new_model->countrows()<QUESTION_LIMIT)
         {
            if($this->_valid=="0"){
             $this->_question=$new_model->generate_one();
             $_SESSION["qid"]=$this->_question[0]['id'];
               
                $this->_valid="1";
            }
            else{
                 
              $this->_question=$new_model->generate_withid();
            }

             $this->set("question_no", $new_model->countrows()+1);
             $this->set("question_total", QUESTION_LIMIT);
             $this->set("question", $this->_question[0]['question_name']);
             $this->set("answer1", $this->_question[0]['answer1']);
             $this->set("answer2", $this->_question[0]['answer2']);
             $this->set("answer3", $this->_question[0]['answer3']);
             $this->set("answer4", $this->_question[0]['answer4']);
             $this->set("qid", $this->_question[0]['id']);         
             
         }else
        { header('Location:'.INSTALL_FOLDER.'result');}
         
     } 


}