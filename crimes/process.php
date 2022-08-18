<?php
    session_start();
    include_once "include/db_config.php";

    if(isset($_POST["Submit"])){
        $phone = $_POST['phone'];
        $description = $_POST['description'];
        $file = $_POST['file'];
        $pname = rand(1000,10000)."-".$_FILES["file"]["name"];
        $tname = $_FILES["file"]["tmp_name"];
        // $upload_dir = 'images/';
        move_uploaded_file($tname,'images/'.$pname);

        $query = "insert into complaint(fullName,description,file) values('$phone','$description','$pname')";
        $qry2 = "insert into user (username) values ('$phone')";
        mysqli_query($conn, $query);
        mysqli_query($conn, $qry2);
        $_SESSION["phone"] = $phone;
        
    }
    header("location:index.php");
   
?>

