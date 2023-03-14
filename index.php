<?php
// $name = "ali";
// switch($name)
// {   
//     case "ahmed":
//         echo "hi ahmed";
//      break; 
//      case "mohamed":
//         echo "hi mohamed";
//      break;   
//      default :
//         echo "false";
// }




// for($i=0;$i<10;$i++){
//     echo $i."<br>";
// }

// $i=0;
// while($i<10)
// {
//     echo $i."<br>";
//     $i++;
// }


// $i=0;
// do{
//     echo $i."<br>";
//     $i++;
// }while($i<10);






// function add($x,$y)
// {
//     return  $x +$y;
// }


// echo 10 + add(1,20);







// $arr = [1,2,3,4,"@323",true];

// print_r($arr);






// $arr = [1,2,3];
// $user = [ "name" => "mohamed" , "age" => 22 ];

// $users = [
//     ["name" => "ahmed" , "age" =>22],
//     ["name" => "ahmed" , "age" =>22],
// ];


// echo "<pre>";
// print_r($users);


$arr = [0,2,1,5,3,4];
// $ans = [];
// $i=0;
// while($i<count($arr)){
//     $ans[] = $arr[$arr[$i]];
//     $i++;
// }

// echo count($arr);
// print_r($ans);



// function welcom($n)
// {
//     echo "welcom ya ".$n;
// }



// welcom("ahmed");


// $ad = "255.100.50.0";

// for($i=0;$i<strlen($ad);$i++){
//     if($ad[$i] == "."){
//         echo "*";
//     }else{
//         echo $ad[$i];
//     }
// }



// $colors = ["red","green","blue"];
// print_r($colors);

// $user = ["name" => "mohamed" , "age" =>20];
// print_r($user);


$users = [
    ["name"=>"ahmed","age"=>20],
    ["name"=>"mohamed","age"=>22],
    [
        "name"=>"ahmed",
        "skills" => ["html","css"]
    ]
    // [1,2,4],
];
// echo "<pre>";
// print_r($users);
// echo $users[2]['skills'][1];




// $colors = ["red","green"];
$user = ["name"=>"ahmed","age"=>20];
// $user_keys = array_keys($user);
// for($i=0;$i<count($user_keys);$i++){
//     echo $user[$user_keys[$i]]."<br>";
// }


// foreach($user as $value){
//     echo $value."<br>";
// }



// $balance = [
//     [1000,2000,3000],
//     [20000,44444,555],
//     [66666,77777,8888,45454]
// ];

// foreach($balance as $value){
//     $total = 0;
//     foreach($value as $v){
//         $total += $v;
//     }
//     echo $total;
//     echo "<hr>";
// }


// print_r($_POST);


// echo $_POST['category'] , $_POST['age'];
// echo "<br>";
// echo $_POST['age'];





// $connect =  mysqli_connect("localhost","root","","giz2");
// $category = $_POST['category'];
// mysqli_query($connect,"INSERT INTO `category` (`name`) VALUES ('$category')");



$connect =  mysqli_connect("localhost","root","","giz2");

$query =  mysqli_query($connect,"SELECT * FROM `category`");

$data = mysqli_fetch_all($query,MYSQLI_ASSOC);
// $list = "";
// foreach($data as $category){
//     $list .= "<li>".$category['name']."</li>";
// }




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>category list</h1>
    <ul>
        <!-- <?php echo $list; ?>   -->
        <!-- <?php foreach($data as $c): ?>
           <li> <?= $c['name'] ?> </li>
        <?php endforeach; ?> -->


        <!-- <?php foreach($data as $category){
            echo "<li>".$category['name']."</li>";
        } ?> -->

        <!-- <?php foreach($data as $category){ ?>
            <li> <?php echo $category['name']; ?> </li>
        <?php } ?> -->
    </ul>
</body>
</html>











