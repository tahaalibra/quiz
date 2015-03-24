<?php

class TestController extends Controller{
    protected $_question;
    protected $_valid;


     function test(){
        $this->doNotRenderHeader=1;
        Auth::checkLogin(true);
        $model = new $this->model; 
         
        
        if($model->scoreExists()){
            
            
            if(isset($_POST['answer'],$_POST['qid'])){  
                $model->putresult($_POST['qid'],$_POST['answer']);
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
                            header('Location: result');
                    }
                }
             
            
             $this->_question=$model->get_next($_POST['next']-1);
             $_SESSION["qid"]=$this->_question['id'];
             $this->set("question_done", QUESTION_LIMIT-$zero+1);
             $this->set("question_no", $_POST['next']);
             $this->set("next",$_POST['next']+1);
             $this->set("question_total", QUESTION_LIMIT);
             $this->set("question", $this->_question['question_name']);
             $this->set("answer1", $this->_question['answer1']);
             $this->set("answer2", $this->_question['answer2']);
             $this->set("answer3", $this->_question['answer3']);
             $this->set("answer4", $this->_question['answer4']);
             //$this->set("value", $this->_question['answer']);////////////////////////////////////////////////////
             $this->set("qid", $this->_question['id']);
            
             if($this->_question['code']){
//$this->set("code", '<pre class="prettyprint linenum"  style="text-align:left;"><code>'.$this->_question['code'].'</code></pre>');                  
             }
             
             if($this->_question['img']){
                $this->set("image", '<img src="photo.php?id='.$this->_question['img'].'"class="md-card-image">');
             }
            
            
            
             
            }else{
                echo "yo";
                header("Location:".INSTALL_FOLDER."/result");
                 }
        }else{
            echo "yo";
            header("Location:".INSTALL_FOLDER."/home");
        }
        
         
/*
         if(isset($_COOKIE["my_cookie"]))
             {
                    if($_COOKIE["my_cookie"]==0)
                    {
                        $i=QUESTION_LIMIT-$model->countrows();
                        for($j=0;$j<$i;$j++)
                        {
                            echo $model->putresult(-$j,-$j);

                        }

                            unset($_COOKIE['my_cookie']);
                            setcookie('my_cookie', null, -1, '/');
                            setcookie('my_cookie', null, -1, '/');
                            header('Location: result');
                    }
             } else{
              $this->_valid="0";
             }


         if(isset($_POST['answer'],$_POST['qid']))
            {

               if($model->putresult($_POST['answer'],$_POST['qid']))
               { $this->_valid="0"; }

            }
        if($model->countrows()<QUESTION_LIMIT)
         {
            if($this->_valid=="0"){
             $this->_question=$model->generate_one();
             $_SESSION["qid"]=$this->_question['id'];

                $this->_valid="1";
            }
            else{

              $this->_question=$model->generate_withid();
            }

             $this->set("question_no", $model->countrows()+1);
             $this->set("question_total", QUESTION_LIMIT);
             $this->set("question", $this->_question['question_name']);
             $this->set("answer1", $this->_question['answer1']);
             $this->set("answer2", $this->_question['answer2']);
             $this->set("answer3", $this->_question['answer3']);
             $this->set("answer4", $this->_question['answer4']);
             $this->set("qid", $this->_question['id']);
            
             if($this->_question['code']){
                $this->set("code", $this->_question['code']);
                 echo $this->_question['code'];
                 
                 <pre class='prettyprint linenums' style='text-align:left;'><code
>${{code}}
</code></pre>
                 
             }
             if($this->_question['img']){
                $this->set("image", '<img src="photo.php?id='.$this->_question['img'].'"class="md-card-image">');
             }
            

         }else
        { header('Location: result');}

     }
    
    public function accept(){
        //update input answer api
    }

*/
}
}