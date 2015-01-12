<?php

class test_model extends model{

  function generate_all()
  {
   //SELECT * FROM `questions` GROUP BY `id` ORDER BY RAND() LIMIT 2
    $stmt = $this->_dbconnect->prepare("SELECT * FROM `questions`");
    $stmt->execute();   
    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
      
      
    //echo $row[0]["id"];
    //echo $row[1]["id"];
    
      return $row;
  }
function plusone()
  {
   //SELECT * FROM `questions` GROUP BY `id` ORDER BY RAND() LIMIT 2
    $stmt = $this->_dbconnect->prepare("UPDATE `result` SET correct = :correct, where username = :username");
    $stmt->execute(array('username' => $_SESSION['username']));
    $stmt->execute();   
    //$row = $stmt->fetchAll(PDO::FETCH_BOTH);      
    //echo $row[0]["id"];
    //echo $row[1]["id"];
    
      return $row;
  }   
    
}

