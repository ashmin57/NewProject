<?php
    require_once "db_config.php";

    $fname = $_POST['fullname'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $cit_id = $_POST['cit_id'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "insert into users(fullName,address,phone,cit_id,email,username,password) values('$fname','$address','$phone','$cit_id','$email','$username','$password')";
    mysqli_query($conn, $query);

    header("location:login.php");
