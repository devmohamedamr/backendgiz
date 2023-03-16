<?php
session_start();
if(count($_SESSION) == 0){
    header("location: login.php");
}

echo "home";