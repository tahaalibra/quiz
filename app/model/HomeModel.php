<?php namespace app\model;

use dales\model\Model;
use PDO;

class HomeModel extends Model
{

    public function getCategory(){


        $stmt            = $this->dbconnect->prepare('SELECT * FROM category ');
        $stmt->execute();
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if($stmt->rowCount() == 0)
        {
            return false;
        }else{
            return $row;
        }
    }

    function selectedQuestion()
    {
        $stmt = $this->dbconnect->prepare('SELECT SUM(q_count) FROM category');
        $stmt->execute();
        $number_of_rows = $stmt->fetchColumn();
        return $number_of_rows;
    }

     function exists()
     {
         $stmt = $this->dbconnect->prepare("SELECT COUNT(*) FROM `result` WHERE `user_id` = :uid");
         $stmt->execute(array('uid' => $_SESSION['user_id']));
         $stmt->execute();
         $count = $stmt->fetchColumn();
         return $count;
     }

    function generateWithId($id,$q_count)
    {

         $uid=$_SESSION['user_id'];
         $stmt = $this->dbconnect->prepare("SELECT id FROM `questions` WHERE category = :category GROUP BY `id` ORDER BY RAND() LIMIT :limit");
         //$stmt->execute(array('limit'=>QUESTION_LIMIT));
         $stmt->bindValue(':limit',(int) $q_count, PDO::PARAM_INT);
         $stmt->bindValue(':category',(int) $id, PDO::PARAM_INT);
         $stmt->execute();
         $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

      for($i=0;$i<$q_count;$i++){

            $stmt2 = $this->dbconnect->prepare('INSERT INTO result (q_id,user_id,answer) VALUES (:qid,:uid,0)');
            $stmt2->execute(array(':qid' => $row[$i]['id'],':uid' => $uid));
      }
    }

    public function setScore(){

        $stmt = $this->dbconnect->prepare("SELECT COUNT(*) FROM `score` WHERE `user_id` = :uid");
        $stmt->execute(array('uid' => $_SESSION['user_id']));
        $stmt->execute();
        $count = $stmt->fetchColumn();
        if(!$count) {
            $stmt = $this->dbconnect->prepare('SELECT * FROM users WHERE user_id = :id');
            $stmt->execute(array(':id' => $_SESSION['user_id']));
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            $stmt2 = $this->dbconnect->prepare('INSERT INTO score (user_id,name) VALUES (:user_id,:name)');
            $stmt2->execute(array(':user_id' => $_SESSION['user_id'], ':name' => $row['name']));
        }
    }

    function zeroCount()
    {
        $stmt = $this->dbconnect->prepare("SELECT COUNT(*) FROM `result` WHERE `user_id` = :uid AND `answer`=0");
        $stmt->execute(array('uid' => $_SESSION['user_id']));
        $stmt->execute();
        $count = $stmt->fetchColumn();
        return $count;
    }




    
}
