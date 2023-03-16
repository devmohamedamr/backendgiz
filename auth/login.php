<?php
session_start();
    if(count($_POST) > 0){
        $email = $_POST['email'];
        $password = $_POST['password'];

       $connect =  mysqli_connect("localhost","root","","giz2");
       $query =  mysqli_query($connect,"SELECT * FROM `user` WHERE `email` = '$email' AND `password` = '$password'");
      $data =  mysqli_fetch_assoc($query);
        if(count($data) > 0){
            $_SESSION['user'] = $data;
            header("location: index.php");
        }
    }

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
    <form action="index.php" method="post" enctype="multipart/form-data">
    <input type="text" name="name">   
    <input type="file" multiple name="img[]">
        <input type="submit">
    </form>
</body>
</html>
