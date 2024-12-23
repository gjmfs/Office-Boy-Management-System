<?php
include "config.php";
session_start();

$adminUserName=$_POST["adminUserName"];
$adminPassword=$_POST["adminPassword"];

$query="select * from admin where uName='$adminUserName' and uPassword='$adminPassword' ";

$result= $connection->query($query);

if($result->num_rows>0){
    header("Location: home.php");
    exit; 
}else{
    echo ("User doesn't exisit");
}



?>