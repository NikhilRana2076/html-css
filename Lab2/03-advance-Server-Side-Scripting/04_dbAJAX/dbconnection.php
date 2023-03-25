<?php 
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbName = "ajax";
    $port = 3306;
    $conn = new mysqli($hostname,$username,$password,$dbName,$port);

    if(mysqli_connect_error()){
        echo "error connection with the database";
        exit;
    }
?>
