<?php 
    
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbName = "dbms";
    $port = 3306;
    $conn = new mysqli($hostname,$username,$password,$dbName,$port);

    if(mysqli_connect_error()){
        echo "error connection with the database";
        exit;
    }


    //a.AVG
    $avgSqlStatement = "SELECT AVG(salary) as averageSalary from employee";
    $result = $conn->query($avgSqlStatement);
    print_r($result->fetch_assoc());
    echo "<br>";

    //b.count
    $countSqlStatement = "SELECT COUNT(id) as totalEmployee from employee";
    $result= $conn->query($countSqlStatement);
    print_r($result->fetch_assoc());
     echo "<br>";

    //c.sum
    $sumSqlStatement = "SELECT SUM(salary) as totalSalary from employee";
    $result = $conn->query($sumSqlStatement);
    print_r($result->fetch_assoc());
     echo "<br>";


    //d.min
    $minSqlStatement =  "SELECT MIN(salary) as minimumSalary from employee";
    $result = $conn->query($minSqlStatement);
    print_r($result->fetch_assoc());
     echo "<br>";

    //e.max
    $maxSqlStatement = "SELECT max(salary) as maximumSalary from employee";
    $result = $conn->query($maxSqlStatement);
    print_r($result->fetch_assoc());
     echo "<br>";

?>
