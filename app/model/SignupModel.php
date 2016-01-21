<?php namespace app\model;

use PDO;
use dales\model\Model;

class SignupModel extends Model
{
    function register($name,$username,$password)
    {
        $password = crypt($password,"quiz");

        $stmt            = $this->dbconnect->prepare('SELECT * FROM users WHERE email = :email');
        $stmt->execute(array('email' => $username));

        if($stmt->rowCount() == 1)
        {
            return "User Already Present";
        } else {

            $stmt = $this->dbconnect->prepare('INSERT INTO users (name,email,password) VALUES (:name,:email,:password)');
            $stmt->execute(array(':name' => $name, ':email' => $username, ':password' => $password));
            return "SignUp Successful";
        }
    }

}
