<?php
    $server = "localhost";
    $email = "root";
    $password = "";
    $database = "rent_db";

    $conn = mysqli_connect($server, $email, $password, $database);

    if(!$conn){
        die("Connection Failed: " . mysqli_connect_error());
    }
?>