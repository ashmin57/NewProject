<?php
    include "include/db_config.php";
    if(isset($_GET['cId'])){
        $main_id = $_GET['cId'];
        $sql_update = mysqli_query($conn, "update complaint set status = 1 where cId = '$main_id'");
    }

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/12ac647ec1.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="admin/dash.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>View Complant!</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Crime Reporting</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    
    </nav>
    <div class="container">
        <div class="row">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">S.N.</th>
                <th scope="col">Name</th>
                <th scope="col">Complaint</th>
                <th scope="col">Date</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sr_no = 1; 
                $sql_get = mysqli_query($conn, "select * from complaint where status = 1"); 
                    while($main_result = mysqli_fetch_assoc($sql_get)){

                        echo'<tr>
                            <th scope="row">'.$sr_no++.'</th>
                            <td>'. $main_result ['fullName'].'</td>
                            <td>'. $main_result ['description'].'</td>
                            <td>'.$main_result ['date'].'</td>
                            <td> <a href="delete.php?id = '.$main_result['cId'].'">
                            <i class="fa-solid fa-check"></i></a> &nbsp;&nbsp; <a href="delete.php?id = '.$main_result['cId'].'">
                            <i class="fa-solid fa-trash-can"></i> </a> </td>
                            </tr>';
                    }
                ?>
               
            </tbody>
        </table>
        </div>
    </div>
   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>