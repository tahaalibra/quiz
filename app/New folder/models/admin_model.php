<?php

class admin_model extends model{

  function displayall()
  {
   
    $stmt = $this->_dbconnect->prepare('SELECT COUNT(*) FROM questions');
    $stmt->execute();
    
    $number_of_rows = $stmt->fetchColumn();
    echo $number_of_rows;
  }
    
function add($question,$answere1,$answere2,$answere3,$answere4,$answere){
        
       
            
       $stmt = $this->_dbconnect->prepare('INSERT INTO questions (question_name,answer1,answer2,answer3,answer4,answer) VALUES (:question_name,:answer1,:answer2,:answer3,:answer4,:answer)');
       $stmt->execute(array(':question_name'=>$question,':answer1'=>$answere1,
                            ':answer2'=>$answere2,':answer3'=>$answere3,
                            ':answer4'=>$answere4,':answer'=>$answere));
   
   
   } 
    
    
}