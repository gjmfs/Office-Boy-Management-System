<?php
    $server="127.0.0.1";
    $dbusername="root";
    $dbpassword="root";
    $dbName="FOMS";

    $connection=mysqli_connect($server,$dbusername,$dbpassword,$dbName);
    if($connection->connect_error){
        die ("Database connection error");
    }
?>