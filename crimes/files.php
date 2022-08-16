<html>
 <head>
 <title>display image</title>
 </head>
 <body>
 <p>Here in your form and text</p>
	<?php
	$conn = mysqli_connect("localhost", "root", "", "orcs");
	$image_details  = mysqli_query($conn, "SELECT * FROM crime");
     while ($row = mysqli_fetch_array($image_details)) {     
		
      	echo "<img src='images/".$row['file']."' >";   
      
    }     

	?> 
  
 </body>
 </html>