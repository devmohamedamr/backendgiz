<?php





include "../vendor/autoload.php";
use Giz2\Mvc\core\route;
route::get("mina",["user","index"]);


$url = $_SERVER['QUERY_STRING'];

if(array_key_exists($url,route::$routes)){

    call_user_func_array([]);
}else{
    echo "false";
}