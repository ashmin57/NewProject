<?php
include 'include/db_config.php';

    include_once "include/head.php";
    session_start();
        if(!isset($_SESSION["username"])){
            header("location:login.php");
        }


// $id = $_GET['updateid'];

// $sql="Select * from `complaint` where cId=$id";

$sql="Select * from `complaint`";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

$fullname = $row['fullName'];
$file = $row['file'];
$description = $row['description'];


if(isset($_POST['submit'])){
    $fullname = $_POST['fullname'];
    $file = $_POST['file'];
    $description = $_POST['description'];
    

    $sql="update `complaint` set cId=$id,fullname='$fullname',file='$file',description='$description' where cId=$id";

    $result=mysqli_query($conn,$sql);
    if($result){
        
        header("location:detail.php");
    } else{
        echo "error";
    }
}

?>

<!doctype html>
<html>
    <head>
<meta charset="utf-8">
    <title>transparent login form</title>
    <link rel="stylesheet" href="style/register.css">
    
    
    
    </head>
        <body>
            <form action="#" method="post" onsubmit="return validateForm()">

            <div class="login-box">
                    <h1>Update your Complaint</h1>
                    <div class="textbox">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <!-- <input type="text" placeholder="Fullname" name="fullname" id="fullname" value= <?php  echo  $fullname; ?>> -->
                        <input type="text" maxlength="10" placeholder="Mobile Number" name="phone" id="phone">
                    </div>
                    <div class="textbox">
                        <input type="file" name="file" id="file" accept="image/png, image/jpeg">
                    </div>
                    <div class="textbox">
                        <textarea placeholder="Please provide any details " name="description" id="" cols="45" rows="6" <?php  echo  $description; ?>></textarea>
                    </div>
                  
                    
                    <input class="btn" type="submit" name="submit" value="Submit">
                      </div>
            </form>
        </body>
</html>