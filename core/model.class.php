
<?php

class Model extends PDOquery
{
    protected $model;
    protected $table;

    public function __construct()
    {
        $this->connect(DB_NAME, DB_HOST, DB_USER, DB_PASSWORD);
        //$this->model = get_class($this);
        //$this->table = $table;
    }

    public function __destruct()
    {
        $this->close();
    }
}
