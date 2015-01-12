<?php

class test_controller extends controller{
    protected $all_question;
    
    
     function test(){
         
         $new_model = new $this->_model;        
         $this->all_question = $new_model->generate_all();
         $this->_template->pass($this->all_question);
         header ("Location: test/question/1");
         if(!issset($_SESSION["questions"])){
         $_SESSION["questions"]=serialize($this->all_question);
         }
        
     } 
    function question(){
    
    $new_model = new $this->_model;        
         $this->all_question = $new_model->generate_all();
         $this->_template->pass($this->all_question);
    
         $qno=$this->_extended_action[0]-1;
         //echo $qno;
        $this->set("qno",$qno+1);
        $this->set("answer1",$this->all_question[$qno]['answer1']);
        $this->set("answer2",$this->all_question[$qno]['answer2']);
        $this->set("answer3",$this->all_question[$qno]['answer3']);
        $this->set("answer4",$this->all_question[$qno]['answer4']);
        $this->set("ques",$this->all_question[$qno]['question_name']);
        
        if(isset($_POST['answer']))
        {   
            if($this->all_question[$qno-1]['answer']==$_POST['answer']){
                echo  "correct ans" . $this->all_question[$qno-1]['answer'];
                echo "selected ans" . $_POST['answer'];
                //$_POST["result"]=$_POST["result"]+1;
                //echo $_POST["result"];
               //$new_model->plusone();
                $abcd=$_POST["result"]+1;
                $this->set("ans_disp",$abcd);
            } else {
            echo "bad";
                $abcd=$_POST["result"];
                $this->set("ans_disp",$abcd);
                }
        }
    }
    
    
}

