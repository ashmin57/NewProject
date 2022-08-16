<?php
    $host = 'localhost';
    $username = "root";
    $password = "";
    $database = "ocrs";

    $conn = mysqli_connect($host,$username,$password,$database);

    if(!$conn){
        die();
    }