<?php

$dsn = "mysql:host=localhost;dbname=d1";
$dbusername = "root";
$dbpassword = "";

try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo -> setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "verbinding mislukt: " . $e -> getMessage();
}

/*
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $dbname = "d1";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
*/