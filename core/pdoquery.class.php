<?php


class pdoquery{
        
protected $_dbconnect;
protected $_result;
  
    function connect($dbname,$host,$dbusername,$dbpassword)
    {
        try{
            $this->_dbconnect= new PDO("mysql:host=$host;dbname=$dbname",$dbusername,$dbpassword);
            $this->_dbconnect->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
            
        }catch(PDOException $e)
        {
            echo $e->getMessage();
            //handle the error
        }
    }
    
    
    
    function close()
    {
        $this->_dbconnect=NULL;
    }
    
    
    //ADD CRUD
}