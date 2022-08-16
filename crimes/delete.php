<?php
    include_once 'include/db_config.php';
    if(isset($_GET['id'])){
        $delete_id=$_GET['id'];
    
        $sql_delete=mysqli_query($conn,"delete from message where id='$delete_id'");
        if($sql_delete){
            header('location:read_msg.php');
        }else{
            die(mysqli_error($conn));
        }
    }

?>