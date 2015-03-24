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

function add($question,$code,$answere1,$answere2,$answere3,$answere4,$answere,$image){


       $stmt = $this->dbconnect->prepare('INSERT INTO questions (question_name,code,answer1,
                                                                 answer2,answer3,
                                                                 answer4,answer,img) 
                                                         VALUES (:question_name,:code,
                                                                 :answer1,:answer2,
                                                                 :answer3,:answer4,
                                                                 :answer,:img)');
       $stmt->execute(array(':question_name'=>$question,':code'=>$code,':answer1'=>$answere1,
                            ':answer2'=>$answere2,':answer3'=>$answere3,
                            ':answer4'=>$answere4,':answer'=>$answere,':img'=>$image));


   }

/*
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
    if($row[0]["answer"]){
    return $row[0]["answer"];
    }
    else{
        return 0;
    }
  }
*/

   


    public function register($username,$password){


       $password_hashed = password_hash($password, PASSWORD_BCRYPT);
       $stmt = $this->dbconnect->prepare('INSERT INTO users (email,password) VALUES (:username,:password)');
       $stmt->execute(array(':username'=>$username,':password'=>$password_hashed));


   }
    public function countUsers(){
        $stmt = $this->dbconnect->prepare("SELECT COUNT(*) FROM `score` WHERE 1");
        $stmt->execute();
        return $stmt->fetchColumn();
    }
    
    public function fullResult()
    {
        $stmt = $this->dbconnect->prepare("SELECT user_id FROM `score` WHERE 1");
        $stmt->execute();
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $count = $this->countUsers();
        
        $stmt = $this->dbconnect->prepare("SELECT count(*) FROM `questions` a, `result` b, `score` c WHERE a.answer=b.answer AND a.id=b.q_id AND b.user_id=:id");
        $stmt2 = $this->dbconnect->prepare("UPDATE  `score` SET score=:score WHERE user_id=:id");
        
        
        for($i=0;$i<$count;$i++)
        {
            $stmt->execute(array('id' => $row[$i]['user_id']));
            $score= $stmt->fetchColumn();
            $stmt2->execute(array('id' => $row[$i]['user_id'],'score'=>$score));
            
        }
        
        
        $stmt = $this->dbconnect->prepare("SELECT name, score FROM `score` WHERE 1 ORDER BY name ASC");
        $stmt->execute();
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $row;
        
    }

}
