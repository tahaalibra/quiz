<?php

class test_model extends model{

    
    
    
function countrows()
{   $auth=new auth();
    $stmt = $this->_dbconnect->prepare("SELECT * FROM `result` WHERE `uid` = :uid");
    $stmt->execute(array('uid' => $_SESSION['user_id']));
    $stmt->execute();   
    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $stmt->rowCount();
}
   
function generate_withid()
{   $auth=new auth();
    $stmt = $this->_dbconnect->prepare("SELECT * FROM `questions` WHERE `id` = :qid");
    $stmt->execute(array('qid' => $_SESSION["qid"]));
    $stmt->execute();   
    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $row;
}    
    
  function generate_one()
  {
   
    $auth=new auth();
      
      do{
    $stmt = $this->_dbconnect->prepare("SELECT * FROM `questions` GROUP BY `id` ORDER BY RAND() LIMIT 1");
    $stmt->execute();   
    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
      
    $stmt2 = $this->_dbconnect->prepare("SELECT * FROM result WHERE qid = :qid AND uid= :uid");
    $stmt2->execute(array('qid' => $row[0]["id"],'uid' => $_SESSION['user_id']));
    $row2 = $stmt->fetchAll(PDO::FETCH_ASSOC);
      }while($stmt2->rowCount()!=0);  
      
    return $row;
  }
      
function putresult($answer,$qid)
  {   
    $auth=new auth;
    $uid=$_SESSION['user_id'];
    $stmt = $this->_dbconnect->prepare("SELECT * FROM result WHERE qid = :qid AND uid= :uid");
    $stmt->execute(array('qid' => $qid,'uid' => $uid));
    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            if($stmt->rowCount()==0)
            {
                $stmt2 = $this->_dbconnect->prepare('INSERT INTO result (qid,uid,answer) VALUES (:qid,:uid,:answer)');      
                $stmt2->execute(array(':qid' => $qid,':uid' => $uid,':answer' => $answer));
                return true;
            }else{
            return false;
            }
  }   
    
}

