<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>OCRS</title>
        <link rel="stylesheet" href="./style/footer.css">
        <script src="js/index.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <?php
            include "include/header.php";
        ?>
        
        <div class="hero">
            <div class="background-image"></div>
        
            <h1>Crime Near Your Place</h1>
            <h2>Inform Us   <i class="fas fa-hand-point-down"></i></h2>
            <form name ="complaint" action="process.php" enctype="multipart/form-data" method="post">
                <input type="file" name="file" id="file" accept="image/png, image/jpeg">
                <input type="text" maxlength="10" placeholder="Mobile Number" name="phone" id="phone">
                <br>
                <textarea name="description" id="" cols="60" rows="2" placeholder="Describe Crime"></textarea>
                <br><button name="Submit" onclick=" validation()">Submit</button>
            </form>
    
        </div>
    <br>
        
            <footer> 
                <ul>
                <li><a href="#"><i class="fab fa-facebook"></i></a></li> 
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                </ul>
                <p>&copy; <script> document.write(new Date().getFullYear());</script>
                -OnlineCrimeSystem.All rights reserved
                <br>
                <i class="fas fa-phone">+977-1-4411210</i>
                <br>
                <a href="#"><i class="fas fa-envelope-square"> info@crimereport.com</i></a>
                </p>
            </footer> 
        
    </body>
</html>