<?php
define('admin','/');
define('assets','../assets/');
define('bootstrap','../Bootstrap/');

$server="localhost";
$dbUser="root";
$dbPassword="root";
$dbName = "FOMS";

$connection=mysqli_connect($server,$dbUser,$dbPassword,$dbName);

if($connection->connect_error){
    die("connection error between server and client");
}

?>