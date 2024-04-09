<?php
$host="localhost";
$username="root";
$password="";
$name="chenboyen";

$link = @new mysqli($host,$username,$password,$name);

if($link->connect_error!=""){
    die("資料庫連接錯誤");
} else {
    $link -> query("SET NAMES 'utf8'");
}

?>