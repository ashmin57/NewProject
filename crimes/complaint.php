<?php
    include_once "head.php";
        session_start();
        if(!isset($_SESSION["username"])){
            header("location:login.php");
        }
?>

<!Doctype html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Complaint</title>
    <link rel="stylesheet" href="style/register.css">    
    </head>
    <body onload="document.complaintForm.fullname.focus();">
        <form name="complaintForm" action="#" method="post" enctype="multipart/form-data" onSubmit="return validateForm();">
            <div class="login-box">
                <h1>Complaint</h1>
                <div class="textbox">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <input type="text" placeholder="Fullname" name="fullname" id="fname">
                </div>
                    <div class="textbox">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                        <input type="text" placeholder="Phone" name="phone" id="phone">
                    </div>
                    <div class="textbox">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <input type="text" placeholder="Crime Address" name="address" id="address">
                    </div>
                    <div class="textbox">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <input type="email" placeholder="Email" name="email" id="email">
                    </div>
                    <div class="textbox">
                    <p>insert images or video(optional)</p>
                        <i class="fa fa-file" aria-hidden="true"></i>  
                        <input type="file" name="file" id="file">
                    </div>
                    <div class="textbox">
                        <i class="fa fa-comment" aria-hidden="true"></i>
                        <input type="text" placeholder="Reason For Complaint" name="complaint" id="">
                    </div>
                    <div class="textbox">
                        <textarea placeholder="Please provide any details " name="description" id="" cols="45" rows="4"></textarea>
                    </div>
                  
                    <input class="btn" type="submit" name="" value="Submit">
                      </div>
            </form>
            <!-- <script>
                function validateForm(){
                    var fname = document.complaintForm.fullname;
                    var phone = document.complaintForm.phone;
                    var addres = document.complaintForm.address;
                    var email = document.complaintForm.email;
                    var complaint  = document.complaintForm.complaint;
                    var descp = document.complaintForm.description;

                    if(allLetter(fname)){
                        if(allnumeric(phone)){
                            if(alphanumeric(address)){
                                if(ValidateEmail(email)){
                                    if(allLetter(complaint)){
                                        if(alphanumeric(descp))
                                    }
                                }
                            }
                        }    
                    }
                    return false;
                }
                function allLetter(fname){
                    var letters = /^[A-Za-z]+$/;
                    // if(fname == ''){
                    //     alert("Name cannot be Empty");
                    // }
                    // else 
                    if(fname.value.match(letters)){
                        return true;
                    }
                        else
                    {
                        alert('Fullname must have alphabet characters only');
                        fname.focus();
                        return false;
                    }
                }
                function ValidateEmail(email)
                {
                    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                    if(email.value.match(mailformat))
                    {
                    return true;
                    }
                    else
                    {
                    alert("You have entered an invalid email address!");
                    email.focus();
                    return false;
                    }
                }
            </script> -->
        </body>
        
</html>