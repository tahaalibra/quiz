
<?php
/*
$_model in both controller and this file : may generate error
*/
class Model extends pdoquery {
    protected $_model;
    protected $_table;
 
    function __construct() {
 
        $this->connect(DB_NAME,DB_HOST,DB_USER,DB_PASSWORD);
        $this->_model = get_class($this);        
        //$this->_table = $table;
        
        
    }
 
    function __destruct() {
        $this->close();
    }
}