<?php
    session_start();
    include_once "include/db_config.php";

    if(isset($_POST["Submit"])){
        $phone = $_POST['phone'];
        $file = $_POST['file'];
        $pname = rand(1000,10000)."-".$_FILES["file"]["name"];
        $tname = $_FILES["file"]["tmp_name"];
        // $upload_dir = 'images/';
        move_uploaded_file($tname,'images/'.$pname);

        $query = "insert into crime(phone,file) values('$phone','$pname')";

        mysqli_query($conn, $query);
        $_SESSION["phone"] = $phone;
        
    }
    header("location:process_complaint.php");
   
?>

