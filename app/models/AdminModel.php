<?php

class AdminModel extends Model
{

  function displayall()
  {
    $stmt = $this->dbconnect->prepare('SELECT COUNT(*) FROM questions');
    $stmt->execute();
    $number_of_rows = $stmt->fetchColumn();
    return $number_of_rows;
  }

function add($question,$code,$answere1,$answere2,$answere3,$answere4,$answere){


       $stmt = $this->dbconnect->prepare('INSERT INTO questions (question_name,code,answer1,answer2,answer3,answer4,answer) VALUES (:question_name,:code,:answer1,:answer2,:answer3,:answer4,:answer)');
       $stmt->execute(array(':question_name'=>$question,':code'=>$code,':answer1'=>$answere1,
                            ':answer2'=>$answere2,':answer3'=>$answere3,
                            ':answer4'=>$answere4,':answer'=>$answere));


   }


    function resultforall(){
        $stmt = $this->dbconnect->prepare("SELECT * FROM `score`");
         $stmt->execute();
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

        for ($i = 0; $i<$stmt->rowCount();$i++){

            $resultscore = $this->generate_result($row[$i]['user_id']);

            $stmt2 = $this->dbconnect->prepare('UPDATE `score` SET `score` = :score WHERE `user_id` = :user_id');
            $stmt2->execute(array(':score' => $resultscore,':user_id' => $row[$i]['user_id']));

        }
    }

    function generate_result($id)
    {
        $this->correct=0;
        $stmt = $this->dbconnect->prepare("SELECT * FROM `result` WHERE `user_id` = :uid");
        $stmt->execute(array('uid' => $id));
        $stmt->execute();
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);



        if($stmt->rowCount()==QUESTION_LIMIT)
        {   $i=0;

            do{
               if($row[$i]['answer']==$this->generate_result2($row[$i]['q_id']))
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

    $stmt = $this->dbconnect->prepare("SELECT * FROM `questions` WHERE `id` = :id");
    $stmt->execute(array('id' => $qid));
    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $row[0]["answer"];
  }


    function display(){

         $stmt = $this->dbconnect->prepare("SELECT * FROM `score` ORDER BY name ASC");
         $stmt->execute();
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);


        echo "<table> <tr><td>name</td><td>score</td><tr>";
        for ($i = 0; $i<$stmt->rowCount();$i++){

            echo "<tr><td>".$row[$i]["name"]."</td><td>".$row[$i]["score"]."</td><tr>";

        }
        echo "</table>";
    }



    public function register($username,$password){


       $password_hashed = password_hash($password, PASSWORD_BCRYPT);
       $stmt = $this->dbconnect->prepare('INSERT INTO users (email,password) VALUES (:username,:password)');
       $stmt->execute(array(':username'=>$username,':password'=>$password_hashed));


   }

}
