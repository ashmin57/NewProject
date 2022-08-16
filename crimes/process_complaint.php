<?php
    session_start();
    require_once "include/db_config.php";
    if(!isset($_SESSION["phone"])){
        header("location:index.php");
    }
        if(isset($_POST["Submit"])){
        $fname = $_POST['userName'];
        $address = $_POST['address'];
        // $phone = $_POST['phone'];
        $desc = $_POST['desc'];

        $query = "insert into complaint(fullName,address, description) values('$fname','$address','$desc')";

        mysqli_query($conn, $query);
        header("location:index.php");
    }
   
?>
<html>
    <head>
        <title>User Detail</title>
        <link rel="stylesheet" href="style/login.css">
        <!-- <script src="js/complaint.js"></script> -->
        <?php 
            include "include/head.php";
        ?>
        <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
  
    </head>
    <body>
        <form action="" method="post" name="complaint">
            <div class="login-box">
                <h1>Complaint</h1>
                <div class="textbox">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <input type="text" placeholder="Fullname" name="userName" id="uname">
                </div>
                <!-- <div class="textbox">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <input type="text" placeholder="Mobile Number" name="phone" id="phone">
                </div> -->
                <div class="textbox">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <input type="text" placeholder="Crime Address" name="address" id="address">
                </div>
                <div class="textbox">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <input type="text" placeholder="Description" name="desc" id="desc">
                </div>
                <button  name="Submit" id="click" onclick="formValidate()">Submit</button>
        </form>
        <script>
            function formValidate(){
                let fname = document.complaint.userName.value;
                let phone = document.complaint.phone.value;
                let address = document.complaint.address.value;

                var numbers = /^[9][6-8]{1}[0-9]{8}/;
                function validPhone(){
                    if(phone.value.match(numbers)){
                        // phone.focus();
                        return true;
                    }
                    else{
                        alert('Phone number should be of 10 character in correct format starting from 9 following 6-8');
                        event.preventDefault();
                    }
                }
                validPhone();

                function validName(){
                    if(fname == ""){
                        alert("Please input your name");
                    }
                }
                validName();
            }
        </script>
    </body>
</html>

