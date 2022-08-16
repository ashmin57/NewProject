<?php
 session_start();
 if(!isset($_SESSION["admin"])){
     header("location:login.php");
 }
include "include/db_config.php";
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
      <th scope="col">Crime Detail</th>
    </tr>
  </thead>
  <tbody>
  <?php
      $sql="Select * from`complaint` ";
      $result=mysqli_query($conn,$sql);
      if($result){
      while($row=mysqli_fetch_assoc($result)){
        $id=$row['cId'];
        $fullname=$row['fullName'];
        $details=$row['description'];
        echo'<tr>
          <th scope="row">'.$id.'</th>
          <td>'.$fullname.'</td>
          <td>'.$details.'</td>
        
          </tr>';
      }
    }
     ?>   
  </tbody>
  </table>
  </div>
  <?php
  while($row=mysqli_fetch_array($result))
  {
      $q2 = "SELECT * FROM `complaint` WHERE `status` = 1;
      $r2 = mysqli_query($conn, $q2);
      $expiry_flag = 0;
      $inactive_flag=0;
      while($row2=mysqli_fetch_array($r2))
      {
          $Date_e = date("Y-m-d");
  
  
          if ( $row2['object_expire_dt'] < date('Y-m-d', strtotime($Date_e. ' + 20 days')))
          {
              if ($row2['object_expire_dt'] > '0000-00-00')
              {
                  $expiry_flag = 1;
              }
          }
  
          if ( $row2['object_expire_dt'] < date("Y-m-d"))
          {
              if ($row2['object_expire_dt'] > '0000-00-00')
              {
                  $inactive_flag = 1;
              }
          }
  
      }
  
  }
          if ($expiry_flag == 1)
          {
              echo '<script type="text/javascript">';
              echo ' alert("my msg1")';
              echo '</script>';
          }
          if ($inactive_flag == 1)
          {
              echo '<script type="text/javascript">';
              echo ' alert("my msg2")'; 
              echo '</script>';
          }
</body>
</html>