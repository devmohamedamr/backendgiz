<?php

class db 
{
    private $connection;
    private $sql;
    public function __construct()
    {
        $this->connection = mysqli_connect("localhost","root","","giz2");
    }
    public function select($table,$columns)
    {
      $this->sql = "SELECT $columns FROM `$table`";
      return $this;
    }

    public function delete($table)
    {
      $this->sql = "DELETE FROM `$table`";
      return $this;
    }

    public function where($column,$operator,$value)
    {
        $this->sql .= " WHERE  `$column` $operator '$value'";
        return $this; 
    }

    public function row(){
        $query =  mysqli_query($this->connection,$this->sql);
        return mysqli_fetch_assoc($query);
    }
    public function excute(){
        mysqli_query($this->connection,$this->sql);
        return mysqli_affected_rows($this->connection);
    }
    public function all(){
        $query =  mysqli_query($this->connection,$this->sql);
        return mysqli_fetch_all($query,MYSQLI_ASSOC);
    }
}


$db  = new db;
$data = $db->delete("category")->where("id","=",2)->excute();
echo "<pre>";
print_r($data);