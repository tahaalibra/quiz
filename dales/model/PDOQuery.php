<?php namespace dales\model;

use PDO;

class PDOQuery
{
    public $dbconnect;
    protected $result;

    /**
     * @param $dbname
     * @param $host
     * @param $dbusername
     * @param $dbpassword
     */
    public function connect($dbname, $host, $dbusername, $dbpassword)
    {
        try {
            $this->dbconnect = new PDO("mysql:host=$host;dbname=$dbname", $dbusername, $dbpassword);
            $this->dbconnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            \dales\error\Error::send("Can Not Connect to The Database", $e->getMessage());
        }
    }

    public function close()
    {
        $this->dbconnect = null;
    }

    //Set Query
    public function query($query)
    {
        $this->stmt = $this->dbconnect->prepare($query);
    }
    //Execute Query
    public function execute()
    {
        return $this->stmt->execute();
    }
    // Get All Rows
    public function rowAll()
    {
        $this->stmt->execute();
        if($this->stmt->rowCount())
            return $this->stmt->fetchAll(\PDO::FETCH_ASSOC);
        else
            return 0;
    }
    //Get single row
    public function row()
    {
        $this->stmt->execute();
        if($this->stmt->rowCount())
            return $this->stmt->fetch(PDO::FETCH_ASSOC);
        else
            return 0;
    }
    /*
    public function bind($param, $value, $type = null)
    {
         if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
                }
            }
        $this->stmt->bindValue($param, $value, $type);
    }
    */
    public function bind($param, $value)
    {
        $this->stmt->bindValue($param, $value);
    }

    public function rowCount()
    {
        return $this->stmt->rowCount();
    }
}
