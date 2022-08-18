<?php
 session_start();
 if(!isset($_SESSION["admin"])){
     header("location:login.php");
 }
include "./include/db_config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details of complaint</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  
</head>
<body>
<table class="table my-5" >
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Fullname</th>
      <th scope="col">Description</th>
      <th scope="col">File</th>     
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
  <?php
      $sql="Select * from complaint";
      $result=mysqli_query($conn,$sql);
      if($result){
      while($row=mysqli_fetch_assoc($result)){
        $id=$row['cId'];
        $fullname=$row['fullName'];
        $details=$row['description'];
        $photo = $row['file'];
        $date=$row['date'];
        echo'<tr>
          <th scope="row">'.$id.'</th>
          <td>'.$fullname.'</td>
          <td>'.$details.'</td>
          <td>.<img src="images/'.$photo.'" style="height:150px;width:150px"/>.</td>
          <td>
          <td>'.$date.'</td>
        
          </tr>';
      }
    }
     ?>
    
   
  </tbody>
</table>
 </div>
</body>
</html>
