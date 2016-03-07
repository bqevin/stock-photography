<?php
$host = "localhost";
$db_name = "mjedevel_ia";
$username = "mjedevel_kev";
$password = "Token2016";

try {
    $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
}

//to handle connection error
catch(PDOException $exception){
    echo "Connection error: " . $exception->getMessage();
}
?>