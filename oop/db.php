<?php

class db 
{
    private $connection;
    private $sql;
    public function __construct($server,$user,$pass,$db)
    {
        $this->connection = mysqli_connect($server,$user,$pass,$db);
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
    public function insert($table,$data){
        $columns  = "";
        $values  = "";
        foreach($data as $column => $value){
            $columns .= $column.",";
            $values .=  "'".$value."',";
        }
        $columns = rtrim($columns,",");
        $values = rtrim($values,",");
        $this->sql = "INSERT INTO `$table` ( $columns ) VALUES ( $values )";
        return $this;
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


$db  = new db("localhost","root","","giz2");
// $data =  $db->select("category","*")->all();
// print_r($data);
// $db->insert("category",[
//     "id"=>22 ,
//      "name"=>"ahmed"
// ])->excute();







