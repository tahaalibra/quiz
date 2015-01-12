<?php

class result_model extends model{

protected $correct;

    
    function generate_result()
    {   $auth = new auth;
        $this->correct=0;
        $stmt = $this->_dbconnect->prepare("SELECT * FROM `result` WHERE `uid` = :uid");
        $stmt->execute(array('uid' => $_SESSION['user_id']));
        $stmt->execute();   
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC); 
        
        if($stmt->rowCount()==QUESTION_LIMIT)
        {   $i=0;
           
            do{
               if(($row[$i]['qid']>0)&&($row[$i]['answer']==$this->generate_result2($row[$i]['qid'])))
               {
                   $this->correct+=1;
               }            
                $i++;
            }while($i<=QUESTION_LIMIT-1);         
         return $this->correct;
        } else {
            return "test not finished";}
     }
    
    
    
function generate_result2($qid)
  {
   
    $stmt = $this->_dbconnect->prepare("SELECT * FROM `questions` WHERE `id` = :id");
    $stmt->execute(array('id' => $qid));   
    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
   
    return $row[0]["answer"];
   
    
  }
    
    function getname(){
        
        $auth = new auth;
        $stmt = $this->_dbconnect->prepare("SELECT * FROM `score` WHERE `id` = :uid");
        $stmt->execute(array('uid' => $_SESSION['user_id']));
        $stmt->execute();
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $row[0]['name'];
    }
    
}