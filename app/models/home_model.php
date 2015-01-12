<?php
class home_model extends model{
    
    function countrows()
{   $auth=new auth();
    $stmt = $this->_dbconnect->prepare("SELECT * FROM `result` WHERE `uid` = :uid");
    $stmt->execute(array('uid' => $_SESSION['user_id']));
    $stmt->execute();   
    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $stmt->rowCount();
}
    
    
function generate_name($name)
  { $auth= new auth;
    $qid=$_SESSION["user_id"];
    $stmt = $this->_dbconnect->prepare("SELECT * FROM `score` WHERE `id` = :id");
    $stmt->execute(array('id' => $qid));   
    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    if($stmt->rowCount()==0){
        $stmt2 = $this->_dbconnect->prepare('INSERT INTO score (id,name) VALUES (:id,:name)');
        $stmt2->execute(array(':id'=>$qid,':name'=>$name));
        return true;
        
    }else{
        
        return false;
    }
  }
    
    
    
}