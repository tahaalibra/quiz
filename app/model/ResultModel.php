<?php namespace app\model;

use dales\model\Model;
use PDO;

class ResultModel extends Model
{
  protected $correct;

    function selectedQuestion()
    {
        $stmt = $this->dbconnect->prepare('SELECT SUM(q_count) FROM category');
        $stmt->execute();
        $number_of_rows = $stmt->fetchColumn();
        return $number_of_rows;
    }

  function generate_result()
    {
        define('QUESTION_LIMIT',$this->selectedQuestion());
        $this->correct=0;
        $stmt = $this->dbconnect->prepare("SELECT * FROM `result` WHERE `user_id` = :uid");
        $stmt->execute(array('uid' => $_SESSION['user_id']));
        $stmt->execute();
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if($stmt->rowCount()==QUESTION_LIMIT)
        {   $i=0;

            do{
               if(($row[$i]['q_id']>0)&&($row[$i]['answer']==$this->generate_result2($row[$i]['q_id'])))
               {
                   $this->correct+=1;
               }
                $i++;
            }while($i<=QUESTION_LIMIT-1);


            return $this->correct;
        } else {
            return "test not finished";}
     }


    function updateScore($score)
    {
        $stmt = $this->dbconnect->prepare("SELECT score FROM `score` WHERE user_id = :id ");
        $stmt->execute(array('id'=>$_SESSION['user_id']));
        $previousScore = $stmt->fetch(PDO::FETCH_ASSOC);
        $score=$score+$previousScore['score'];
        $stmt2 = $this->dbconnect->prepare("UPDATE  `score` SET score=:score WHERE user_id=:id");
        $stmt2->execute(array('id' => $_SESSION['user_id'],'score'=>$score));

    }


    function generateResult()
    {

        $stmt = $this->dbconnect->prepare("SELECT * FROM result WHERE user_id = :uid");
        $stmt->execute(array('uid' => $_SESSION['user_id']));
        $stmt->execute();
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $correct = array();
        $selected = array();

        foreach($row as $key)
        {
            $stmt = $this->dbconnect->prepare("SELECT * FROM questions WHERE id = :uid");
            $stmt->execute(array(':uid' => $key['q_id']));
            $stmt->execute();
            $row2 = $stmt->fetch(PDO::FETCH_ASSOC);
            array_push($correct  , $row2['answer']);
            array_push($selected , $key['answer']);

        }
        $data = array();
        for($i=0; $i<count($correct); $i++){
            $data[$i]['correct']  = $correct[$i];
            $data[$i]['selected'] = $selected[$i];
        }
        return $data;

    }



function generate_result2($qid)
  {

    $stmt = $this->dbconnect->prepare("SELECT * FROM `questions` WHERE `id` = :id");
    $stmt->execute(array('id' => $qid));
    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $row[0]["answer"];
  }

    public function result()
    {
        $stmt = $this->dbconnect->prepare("SELECT * FROM `result` WHERE `user_id` = :id");
        $stmt->execute(array(':id' => $_SESSION['user_id']));
        $row= $stmt->fetchAll(PDO::FETCH_ASSOC);

        $result=array();

        for($i=0 ; $i< count($row) ; $i++){
            $stmt = $this->dbconnect->prepare("SELECT * FROM `questions` WHERE `id` = :id");
            $stmt->execute(array('id' => $row[$i]['q_id']));
            $row2= $stmt->fetch(PDO::FETCH_ASSOC);
            $result[$i]["correct"]  =$row2['answer'.$row2['answer']];
            $result[$i]["selected"] = $row[$i]['answer']==-1 ? 'unanswered' : $row2['answer'.$row[$i]['answer']];
            $result[$i]["question"] =$row2['question_name'];
        }

        return $result;
    }

    function reset()
    {

        $stmt = $this->dbconnect->prepare("DELETE FROM `result` WHERE `user_id` = :uid");
        $stmt->execute(array('uid' => $_SESSION['user_id']));
        $stmt->execute();
    }

    function exists()
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

}
