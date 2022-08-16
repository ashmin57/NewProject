<?php
include 'db_config.php';

    include_once "head.php";
    session_start();
        if(!isset($_SESSION["username"])){
            header("location:login.php");
        }


$id = $_GET['updateid'];

$sql="Select * from `complaints` where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

$fullname = $row['fullname'];
$address = $row['address'];
$phone = $row['phone'];
// $cit_id = $row['cit_id'];
$email = $row['email'];
$complaint = $row['complaint'];
$description = $row['description'];


if(isset($_POST['submit'])){
    $fullname = $_POST['fullname'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    // $cit_id = $_POST['cit_id'];
    $email = $_POST['email'];
    $complaint = $_POST['complaint'];
    $description = $_POST['description'];
    

    $sql="update `complaints` set id=$id,fullname='$fullname',address='$address',phone='$phone',cit_id='$cit_id',email='$email',complaint='$complaint',description='$description' where id=$id";

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
                    <h1>Complaint</h1>
                    <div class="textbox">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="text" placeholder="Fullname" name="fullname" id="fullname" value= <?php  echo  $fullname; ?>>
                    </div>
                    <div class="textbox">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <input type="text" placeholder="Phone" name="phone" id="phone" value= <?php  echo  $phone; ?>>
                    </div>
                    <div class="textbox">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <input type="text" placeholder="Home Address" name="address" id="address" value= <?php  echo  $address; ?> >
                    </div>
                    <!-- <div class="textbox">
                         <i class="fa fa-id-card-o" aria-hidden="true"></i>
                        <input type="text" placeholder="Citizenship Number" name="cit_id" id="citizen" value= <?php  echo  $cit_id; ?>>
                    </div> -->
                    <div class="textbox">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <input type="email" placeholder="Email" name="email" id="email" value= <?php  echo  $email; ?>>
                    </div>
                    <div class="textbox">
                        <input type="text" placeholder="ReasonforComplaint" name="complaint" id="" value= <?php  echo  $complaint; ?>>
                    </div>
                    <div class="textbox">
                        <textarea placeholder="Please provide any details " name="description" id="" cols="45" rows="6" <?php  echo  $description; ?>></textarea>
                    </div>
                  
                    
                    <input class="btn" type="submit" name="submit" value="Submit">
                      </div>
            </form>
        </body>
</html>