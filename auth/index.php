<?php
// session_start();
// if(count($_SESSION) == 0){
//     header("location: login.php");
// }

// print_r($_SESSION);



// echo "index <br>";

// echo "<pre>"; 
// print_r($_SERVER);



// $x = 10;
// $y=20;

// function add(){
//     echo $GLOBALS['x']  + $GLOBALS['y'];
// }

// add();


// print_r($GLOBALS);








$tmp = $_FILES['img']['tmp_name'];
$name = $_POST['name'];
$type = $_FILES['img']['type'];
$typearray =  explode("/",$type);

move_uploaded_file($tmp,"img/".$name.".".$typearray[1]);





?>

<!-- <a href="logout.php"></a> -->