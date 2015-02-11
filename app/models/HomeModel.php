<?php

class HomeModel extends Model
{

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
}
