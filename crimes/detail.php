<?php
 session_start();
 if(!isset($_SESSION["username"])){
     header("location:login.php");
 }
include "db_config.php";
include 'head.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  
</head>
<body>
<table class="table my-5" >
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Fullname</th>
      <th scope="col">Address</th>
      <th scope="col">Phone</th>
      <!-- <th scope="col">Citzen_id</th> -->
      <th scope="col">Email</th>
      <th scope="col">Complaint Topic</th>
      <th scope="col">File</th>
      <th scope="col">Detail</th>
    </tr>
  </thead>
  <tbody>
  <?php
      $sql="Select * from`complaints` ORDER BY id DESC";
      $result=mysqli_query($conn,$sql);
      if($result){
      $row=mysqli_fetch_assoc($result);
        $id=$row['id'];
        $fullname=$row['fullname'];
        $address=$row['address'];
        // $cit_id=$row['cit_id'];
        $email=$row['email'];
        $phone=$row['phone'];
        $complaint = $row['complaint'];
        $file = $row['file'];
        $details=$row['description'];
        echo'<tr>
          <th scope="row">'.$id.'</th>
          <td>'.$fullname.'</td>
          <td>'.$address.'</td>
          <td>'.$phone.'</td>
          <td>'.$email.'</td>
          <td>'.$complaint.'</td>
          <td>.<img src="images/'.$file.'"style="height:150px;width:150px"/>.</td>
          <td>'.$details.'</td>
          <td>
        <button class="btn btn-danger"><a href="update.php?updateid='.$id.'"
        class="text-light">Edit</a></button>
          </td>
          </tr>';
      }
    
     ?>
    
   
  </tbody>
</table>

</body>
</html>