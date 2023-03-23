<?php

class db 
{
    public $connection;
    public $sql;
    public function __construct()
    {
        $this->connection = mysqli_connect("localhost","root","","giz2");
    }
    function select($table,$columns)
    {
      $this->sql = "SELECT $columns FROM `$table`";
      return $this;
    }

    function where($column,$operator,$value)
    {
        $this->sql .= " WHERE  `$column` $operator '$value'";
        return $this; 
    }

    function row(){
        $query =  mysqli_query($this->connection,$this->sql);
        return mysqli_fetch_assoc($query);
    }

    function all(){
        $query =  mysqli_query($this->connection,$this->sql);
        return mysqli_fetch_all($query,MYSQLI_ASSOC);
    }
}


$db  = new db;
$data = $db->select("category","*")->where("id",">",6)->all();
echo "<pre>";
print_r($data);