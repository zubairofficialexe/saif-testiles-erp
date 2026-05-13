<?php

$host = "localhost";

$user = "root";

$password = "";

$database = "saif_textiles";

$conn = mysqli_connect(
    $host,
    $user,
    $password,
    $database
);

if(!$conn){

    die("Database Connection Failed");

}

session_start();

?>