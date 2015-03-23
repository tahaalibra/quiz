<?php

class TestModel extends Model{




function countrows()
{
    $stmt = $this->dbconnect->prepare("SELECT * FROM `result` WHERE `user_id` = :uid");
    $stmt->execute(array('uid' => $_SESSION['user_id']));
    $stmt->execute();
    //$row = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $stmt->rowCount();
}

function generate_withid()
{
    $stmt = $this->dbconnect->prepare("SELECT * FROM `questions` WHERE `id` = :qid");
    $stmt->execute(array('qid' => $_SESSION["qid"]));
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return $row;
}

  function generate_one()
  {



      do{
    $stmt = $this->dbconnect->prepare("SELECT * FROM `questions` GROUP BY `id` ORDER BY RAND() LIMIT 1");
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    $stmt2 = $this->dbconnect->prepare("SELECT * FROM result WHERE q_id = :qid AND user_id= :uid");
    $stmt2->execute(array('qid' => $row["id"],'uid' => $_SESSION['user_id']));
    $row2 = $stmt->fetch(PDO::FETCH_ASSOC);
      }while($stmt2->rowCount()!=0);

    return $row;
  }

function putresult($answer,$qid)
  {

    $uid=$_SESSION['user_id'];
    $stmt = $this->dbconnect->prepare("SELECT * FROM result WHERE q_id = :qid AND user_id= :uid");
    $stmt->execute(array('qid' => $qid,'uid' => $uid));
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

            if($stmt->rowCount()==0)
            {
                $stmt2 = $this->dbconnect->prepare('INSERT INTO result (q_id,user_id,answer) VALUES (:qid,:uid,:answer)');
                $stmt2->execute(array(':qid' => $qid,':uid' => $uid,':answer' => $answer));
                return true;
            }else{
            return false;
            }
  }

}
