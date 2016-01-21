<?php namespace app\model;

use dales\model\Model;
use PDO;

class TestModel extends Model{



function scoreExists()
{
    $stmt = $this->dbconnect->prepare("SELECT COUNT(*) FROM `score` WHERE `user_id` = :uid");
    $stmt->execute(array('uid' => $_SESSION['user_id']));
    $stmt->execute();
    $count = $stmt->fetchColumn();
    return $count;
}

function zeroCount()
{
      $stmt = $this->dbconnect->prepare("SELECT COUNT(*) FROM `result` WHERE `user_id` = :uid AND `answer`=0");
      $stmt->execute(array('uid' => $_SESSION['user_id']));
      $stmt->execute();
      $count = $stmt->fetchColumn();
      return $count;
}

function qidWithZero()
{
      $stmt = $this->dbconnect->prepare("SELECT q_id FROM `result` WHERE `user_id` = :uid AND `answer`=0");
      $stmt->execute(array('uid' => $_SESSION['user_id']));
      $stmt->execute();
      $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $rows;
}

function putresult($qid,$answer)
  {
    $uid=$_SESSION['user_id'];
    $stmt = $this->dbconnect->prepare("UPDATE `result` SET `answer`=:answer WHERE `q_id` = :qid AND `user_id`= :uid");
    $stmt->execute(array(':answer' => $answer,'qid' => $qid,'uid' => $uid));

      $stmt = $this->dbconnect->prepare("SELECT answer FROM questions WHERE `id` = :qid");
      $stmt->execute(array('qid' => $qid));
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
      if($row['answer']==$answer){
          $stmt = $this->dbconnect->prepare("SELECT score FROM `score` WHERE user_id = :id ");
          $stmt->execute(array('id'=>$_SESSION['user_id']));
          $previousScore = $stmt->fetch(PDO::FETCH_ASSOC);
          $score=1+$previousScore['score'];
          $stmt2 = $this->dbconnect->prepare("UPDATE  `score` SET score=:score WHERE user_id=:id");
          $stmt2->execute(array('id' => $_SESSION['user_id'],'score'=>$score));
      }

  }
  
function get_next($next)
{
    $stmt = $this->dbconnect->prepare("SELECT * FROM `result` WHERE user_id=:uid limit :next,1");
    $stmt->bindValue(':next',(int) trim($next), PDO::PARAM_INT);
    $stmt->bindValue(':uid',(int) trim($_SESSION['user_id']));
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return $this->generate_withid($row['q_id']);   

}

function generate_withid($q_id)
{
    $stmt = $this->dbconnect->prepare("SELECT * FROM `questions` WHERE `id` = :qid");
    $stmt->execute(array('qid' => $q_id));
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return $row;
}

function selectedQuestion()
{
    $stmt = $this->dbconnect->prepare('SELECT SUM(q_count) FROM category');
    $stmt->execute();
    $number_of_rows = $stmt->fetchColumn();
     return $number_of_rows;
}


    
    
    
    
    
/*    
function countrows()
{
    $stmt = $this->dbconnect->prepare("SELECT * FROM `result` WHERE `user_id` = :uid");
    $stmt->execute(array('uid' => $_SESSION['user_id']));
    $stmt->execute();
    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
*/
}
