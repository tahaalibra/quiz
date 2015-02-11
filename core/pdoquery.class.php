<?php


class PDOquery
{

public $dbconnect;
protected $result;

    public function connect($dbname, $host, $dbusername, $dbpassword)
    {
        try {
            $this->dbconnect = new PDO("mysql:host=$host;dbname=$dbname", $dbusername, $dbpassword);
            $this->dbconnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo $e->getMessage();
            //handle the error
        }
    }

    public function close()
    {
        $this->dbconnect = null;
    }

    //ADD CRUD
}
