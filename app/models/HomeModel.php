<?php

class HomeModel extends Model
{
    /*
    function countrows()
    {
      $stmt = $this->dbconnect->prepare("SELECT * FROM `result` WHERE `user_id` = :uid");
      $stmt->execute(array('uid' => $_SESSION['user_id']));
      $stmt->execute();
      $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $stmt->rowCount();
    }


    function generate_name($name)
    {
      $qid=$_SESSION["user_id"];
      $stmt = $this->dbconnect->prepare("SELECT * FROM `score` WHERE `user_id` = :id");
      $stmt->execute(array('id' => $qid));
      $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if($stmt->rowCount()==0){
            $stmt2 = $this->dbconnect->prepare('INSERT INTO score (user_id,name) VALUES (:user_id,:name)');
            $stmt2->execute(array(':user_id'=>$qid,':name'=>$name));
            return true;
          }else{
            return false;
          }
    }
    
    */
    //return no of rows wit result answer as 0
   function zeroCount()
    {
      $stmt = $this->dbconnect->prepare("SELECT COUNT(*) FROM `result` WHERE `user_id` = :uid AND `answer`=0");
      $stmt->execute(array('uid' => $_SESSION['user_id']));
      $stmt->execute();
      $count = $stmt->fetchColumn();
      return $count;
    }
    
    function generateAll()
    {
         $uid=$_SESSION['user_id'];
         $stmt = $this->dbconnect->prepare("SELECT id FROM `questions` GROUP BY `id` ORDER BY RAND() LIMIT :limit");
         //$stmt->execute(array('limit'=>QUESTION_LIMIT));
         $stmt->bindValue(':limit',(int) QUESTION_LIMIT, PDO::PARAM_INT);
         $stmt->execute();
         $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
      for($i=0;$i<QUESTION_LIMIT;$i++){
            
            $stmt2 = $this->dbconnect->prepare('INSERT INTO result (q_id,user_id,answer) VALUES (:qid,:uid,0)');
            $stmt2->execute(array(':qid' => $row[$i]['id'],':uid' => $uid));
      }
    }
    
    function scoreExists()
{
    $stmt = $this->dbconnect->prepare("SELECT COUNT(*) FROM `score` WHERE `user_id` = :uid");
    $stmt->execute(array('uid' => $_SESSION['user_id']));
    $stmt->execute();
    $count = $stmt->fetchColumn();
    return $count;
}
    
    
    function generate_name($name)
    {
      $qid=$_SESSION["user_id"];
      $stmt = $this->dbconnect->prepare("SELECT * FROM `score` WHERE `user_id` = :id");
      $stmt->execute(array('id' => $qid));
      $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if($stmt->rowCount()==0){
            $stmt2 = $this->dbconnect->prepare('INSERT INTO score (user_id,name) VALUES (:user_id,:name)');
            $stmt2->execute(array(':user_id'=>$qid,':name'=>$name));
            return true;
          }else{
            return false;
          }
    }
    
}
