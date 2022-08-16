<?php
 session_start();
 if(!isset($_SESSION["admin"])){
     header("location:login.php");
 }
include "incude/db_config.php";
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
      <th scope="col">Phone</th>
      <th scope="col">Citzen_id</th>
      <th scope="col">Email</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
    </tr>
  </thead>
  <tbody>
  <?php
      $sql="Select * from`users` ";
      $result=mysqli_query($conn,$sql);
      if($result){
      while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $fullname=$row['fullname'];
        $address=$row['address'];
        $cit_id=$row['cit_id'];
        $email=$row['email'];
        $phone=$row['phone'];
        $username = $row['username'];
        $password=$row['password'];
        echo'<tr>
          <th scope="row">'.$id.'</th>
          <td>'.$fullname.'</td>
          <td>'.$address.'</td>
          <td>'.$phone.'</td>
          <td>'.$cit_id.'</td>
          <td>'.$email.'</td>
          <td>'.$username.'</td>
          <td>'.$password.'</td>
          <td>
        <button class="btn btn-danger"><a href="deleteuser.php?deleteid='.$id.'"
        class="text-light">Delete </a></button>
          </td>
          </tr>';
      }
    }
     ?>
    
   
  </tbody>
</table>
 </div>
</body>
</html>