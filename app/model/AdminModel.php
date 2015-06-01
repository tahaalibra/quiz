<?php namespace app\model;

use dales\model\Model;
use PDO;

class AdminModel extends Model
{

    public function newCategory($category)
    {


        $stmt = $this->dbconnect->prepare('SELECT * FROM category WHERE name = :category');
        $stmt->execute(array(':category' => $category));

        if ($stmt->rowCount() == 1) {
            return "Category Already Present";
        } else {

            $stmt = $this->dbconnect->prepare('INSERT INTO category (name) VALUES (:name)');
            $stmt->execute(array(':name' => $category));
            return "Category Created Successfully";
        }
    }

    public function getCategory()
    {


        $stmt = $this->dbconnect->prepare('SELECT * FROM category ');
        $stmt->execute();
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($stmt->rowCount() == 0) {
            return false;
        } else {
            return $row;
        }
    }

    function add($question, $answere1, $answere2, $answere3, $answere4, $answere, $category)
    {

        $stmt = $this->dbconnect->prepare('INSERT INTO questions (question_name,answer1,
                                                                 answer2,answer3,
                                                                 answer4,answer,category)
                                                         VALUES (:question_name,
                                                                 :answer1,:answer2,
                                                                 :answer3,:answer4,
                                                                 :answer,:category)');
        $stmt->execute(array(':question_name' => $question, ':answer1' => $answere1,
            ':answer2' => $answere2, ':answer3' => $answere3,
            ':answer4' => $answere4, ':answer' => $answere, ':category' => $category));
    }

    function totalQuestion()
    {
        $stmt = $this->dbconnect->prepare('SELECT COUNT(*) FROM questions');
        $stmt->execute();
        $number_of_rows = $stmt->fetchColumn();
        return $number_of_rows;
    }

    function totalInCategory($category)
    {
        $stmt = $this->dbconnect->prepare('SELECT COUNT(*) FROM questions WHERE category = :category');
        $stmt->execute(array(":category" => $category));
        $number_of_rows = $stmt->fetchColumn();

        $stmt = $this->dbconnect->prepare('UPDATE category SET total = :total WHERE id = :category');
        $stmt->execute(array(":total" => $number_of_rows, ":category" => $category));

    }

    function countset($category, $count)
    {
        $stmt = $this->dbconnect->prepare('UPDATE category SET q_count = :total WHERE id = :category');
        $stmt->execute(array(":total" => $count, ":category" => $category));
    }

    function selectedQuestion()
    {
        $stmt = $this->dbconnect->prepare('SELECT SUM(q_count) FROM category');
        $stmt->execute();
        $number_of_rows = $stmt->fetchColumn();
        return $number_of_rows;
    }

    function resetResult()
    {
        $stmt = $this->dbconnect->prepare("DELETE FROM `score` ");
        $stmt->execute();
        $stmt = $this->dbconnect->prepare("DELETE FROM `result`");
        $stmt->execute();
    }

    function resetQuestion()
    {
        $stmt = $this->dbconnect->prepare("DELETE FROM `questions` ");
        $stmt->execute();
        $stmt = $this->dbconnect->prepare("UPDATE category SET q_count =0, total =0 ");
        $stmt->execute();
    }

    function resetUser()
    {

        $stmt = $this->dbconnect->prepare("DELETE FROM `users` where email != :admin  ");
        $stmt->execute(array(':admin' => 'admin'));

    }

    function resetcategory()
    {
        $stmt = $this->dbconnect->prepare("DELETE FROM `questions` ");
        $stmt->execute();
        $stmt = $this->dbconnect->prepare("DELETE FROM `category` ");
        $stmt->execute();

    }

    public function countUsers(){
        $stmt = $this->dbconnect->prepare("SELECT COUNT(*) FROM `score` WHERE 1");
        $stmt->execute();
        return $stmt->fetchColumn();
    }


    public function fullResult()
    {
//        $stmt = $this->dbconnect->prepare("SELECT user_id FROM `score` WHERE 1");
//        $stmt->execute();
//        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
//        $count = $this->countUsers();
//
//        $stmt = $this->dbconnect->prepare("SELECT count(*) FROM `questions` a, `result` b WHERE a.answer=b.answer AND a.id=b.q_id AND b.user_id=:id");
//        $stmt2 = $this->dbconnect->prepare("UPDATE  `score` SET score=:score WHERE user_id=:id");
//
//
//        for($i=0;$i<$count;$i++)
//        {
//            $stmt->execute(array('id' => $row[$i]['user_id']));
//            $score= $stmt->fetchColumn();
//            $stmt2->execute(array('id' => $row[$i]['user_id'],'score'=>$score));
//
//        }


        $stmt = $this->dbconnect->prepare("SELECT name, score FROM `score` WHERE 1 ORDER BY name ASC");
        $stmt->execute();
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $row;

    }

}