<?php

// class bmw 
// {
//     public $name;

//     function move(){
//         echo "move ".$this->name."<br>";
//     }
// }



// $b1 = new bmw;
// $b1->name = "bmw x6";
// $b1->move();


// $b2 = new bmw;
// $b2->name = "bmw new ";
// $b2->move();


// class car 
// {
//     public $color;

//     function move()
//     {
//         echo "move";
//     }
// }



// class fiat extends car{
//     function stop () 
//     {
//         echo "stop";
//     }
// }

// $f  = new fiat;
// $f->color = "red";
// print_r($f);

// class car 
// {
//     private $color = "Red";
//     function change(){
//         echo "color is :".$this->color;
//     }
// }
// // $c = new car;
// // $c->change();
// // echo $c->color;

// class bmw extends car 
// {
//     function newchange()
//     {
//         echo "color change is :".$this->color;
//     } 
// }

// $b = new bmw;
// $b->newchange();


// interface animale {
//     public function eat();
// }

// class human implements animale{
//     public function eat(){
//         echo "human eat";
//     }
// }

// class cat implements animale{
//    public function eat(){
//         echo "cat eat";
//     }
// }





// $h = new cat;
// $h->eat();











// abstract class animale {
//     public function move(){
//         echo "animale move";
//     }

//     abstract function eat();
// } 




// class human extends animale{
//     public function eat(){
//         echo "human eat";
//     }
// }

// $h = new human;
// $h->move();


// trait a {
//     public function amethod (){
//         echo "a method";
//     }
// }

// trait b {
//     public function bmethod (){
//         echo "b method";
//     }
// }


// class c{
//     use a,b;
//     public function cmethod (){
//         echo "c method";
//     }
// }

// $c = new c;
// $c->cmethod();



// class user {
//     public static $color = "red";
//     public $status = true;
//     public static function delete(){
//         echo "user delete";
//     }

//     public function go(){
//         echo self::$color;
//         // self::delete();
//     }
// }



// $u = new user;
// print_r($u);
// // $u->go();

// // user::$color = "red";





// class calc {
//     const PI = 22/7;


//     public function add ($x){
//        echo  $x + self::PI;
//     }
// }

// $c = new calc;
// $c->add(10);

// // echo calc::PI;






// class user {
//     public $color;
//     public function __construct($c)
//     {
//         $this->color = $c;
//     }
//     public function select(){
//         echo "select users";
//     }

//     public function __destruct()
//     {
//         echo "by";
//     }

// }


// $u = new user("red");
// echo $u->color;
// $u->select();






// class test {
//     private $color;
//     public function __get($name)
//     {
//         echo "this :".$name." not access";  
//     }


//     public function __set($name, $value)
//     {
//         echo "this :".$name." not access and value is  : ".$value;  
//     }

//     public function __call($name, $arguments)
//     {
//         echo "this :".$name." not access <br>";
//         print_r($arguments);
//     }

//     // static function __callStatic($name, $arguments)
//     // {
//     //     echo "this callstatic :".$name." not access <br>";
//     //     print_r($arguments);
//     // }
// }

// test::move();
// $t = new test;
// $t->move(10,"mohamed");
// echo $t->color;
// $t->color = "Red";




// class user {
//     public function get(){
//         echo "get user";
//     }
// }


// class product extends user{
//     public function get(){
//         echo "product get";
//     }
// }


// $p = new product;
// $p->get();





// class calc {
//     // function add($x,$y){
//     //     echo $x + $y;
//     // }

//     // function add($x,$y,$z){
//     //     echo $x + $y + $z;
//     // }

//     public function __call($name, $arguments)
//     {
//         if($name == "add"){
//             if(count($arguments) == 2){
//                 echo $arguments[0] + $arguments[1];
//             }else{
//                 echo $arguments[0] + $arguments[1] + $arguments[2];
//             }
//         }
//     }
// }

// $c = new calc;
// $c->add(10,20);
// $c->add(10,20,30);








// 
// class user {
//     private $password;

//     public function setPassword($x){
//         $this->password = sha1($x);
//     }
//     public function getPassword(){
//         echo $this->password;
//     }
// }


// $u = new user;
// $u->setPassword(1234);
// $u->getPassword();
// $u->password = 1234;

// echo $u->password;

// include "user.php";
// include "category.php";
// spl_autoload_register(function($n){
//     include $n.".php";
// });
// $c = new user;

include "db.php";

// class db {

// }


$d = new amit\db("","","","");










// $x = function (){
//     echo "hi x";
// };


// $x();