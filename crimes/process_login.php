<?php
    session_start();
    require_once "include/db_config.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST['username'];
        $password = $_POST['password'];
            
        $query = "select * from user where (username = '$username') and password = '$password'";

        $res = mysqli_query($conn,$query);


        $row = mysqli_fetch_array($res);
        if($row["usertype"] == "user")
            {
                $_SESSION["username"] = $username;
                header("location:complaintdetail.php");
            }
            elseif($row["usertype"]=="admin")
            {
                $_SESSION["admin"] = $username;
                header("location:admin/dashboard.php");
            }
            else
            {
                header("location:login.php?Error=invalid username or password");
            }


}