<?php
    include_once "include/header.php";
?>

<!Doctype html>
<html>
    <head>
    <meta charset="utf-8">
    <title>transparent login form</title>
    <link rel="stylesheet" href="style/register.css">
   
    </head>
        <body onload="document.registration.fullname.focus();">
            <form name='registration' action="#" method="post">

            <div class="login-box">
                    <h1>Register</h1>
                    <div class="textbox">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="text" placeholder="Fullname" name="fullname" id="fname" autocomplete="off">
                    </div> 
                    <div class="textbox">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                        <input type="text" maxlength="10" placeholder="Phone" name="phone" id="phone" autocomplete="off" >
                    </div>
                    <div class="textbox">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <input type="text" placeholder="Home Address" name="address" id="address" autocomplete="off">
                    </div>
                    <div class="textbox">
                         <i class="fa fa-id-card-o" aria-hidden="true"></i>
                        <input type="text" placeholder="Citizenship Number" name="cit_id" id="citizen" autocomplete="off">
                    </div>
                    <div class="textbox">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <input type="email" placeholder="Email" name="email" id="email" autocomplete="off">
                    </div>
                    <div class="textbox">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="text" placeholder="Username" name="username" id="username" autocomplete="off">
                    </div>
                    <div class="textbox">
                        <i class="fa fa-key" aria-hidden="true"></i>
                        <input type="password" placeholder="Password" name="password" id="password" autocomplete="off">
                        <span toggle="#password-field" class="fa fa-fw fa-eye field-icon" id ="togglePassword"></span>
                    </div>
                        <input class="btn" type="submit" name="" value="Sign Up" onclick="return formValidation()">
                        Already Have an Account? <a href="login.php">Sign In</a>
                    </div>
                  
            </form>
            
            <script>
                const togglePassword = document.querySelector('#togglePassword');
                const password = document.querySelector('#password');
            
                togglePassword.addEventListener('click', function (e) {
                // toggle the type attribute
                    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                    password.setAttribute('type', type);
                    // toggle the eye slash icon
                    this.classList.toggle('fa-eye-slash');
                });
                function formValidation()
                {
                    var fname = document.registration.fullname;
                    var phone = document.registration.phone;
                    var address = document.registration.address;
                    var citid = document.registration.cit_id;
                    var email = document.registration.email;
                    var uname = document.registration.username;
                    var password = document.registration.password;
                    if(username_validation(uname,5,12))
                    {
                    if(password_validation(password))
                    {
                    if(allLetter(fname))
                    {
                    if(alphanumeric(address))
                    { 
                    if(alphanumeric(citid))
                    {
                    if(allnumeric(phone))
                    {
                    if(ValidateEmail(email))
                    {
                    }
                    } 
                    }
                    } 
                    }
                    }
                    }
                    return false;
                }
                function username_validation(uname,mx,my)
                {
                    var uname_len = uname.value.length;
                    if (uname_len == 0 || uname_len >= my || uname_len < mx)
                    {
                    alert("Username should not be empty / length be between "+mx+" to "+my);
                    uname.focus();
                    return false;
                    }
                    return true;
                }
                function password_validation(password)
                {
                    var pass = /^(?=.*[!@#$%^&*-])(?=.*[0-9])(?=.*[A-Za-z]).{8,20}$/;
                    // var password_len = password.value.length;
                    if (password.value.match(pass))
                    {
                        return true;
                    }
                    else{
                        alert("Password should be minimum 8 and contain Capital letters, number and special characters ");
                        password.focus();
                        return false;
                    }
                    
                }
                function allLetter(fname)
                { 
                    var letters = /^[A-Za-z_ -]+$/;
                    if(fname.value.match(letters))
                    {
                    return true;
                    }
                    else
                    {
                    alert('Fullname must have alphabet characters only');
                    fname.focus();
                    return false;
                    }
                }
                function allnumeric(phone)
                { 
                    var numbers = /^[9][6-8]{1}[0-9]{8}/;
                    if(phone.value.match(numbers))
                    {
                    // else if(phone.length == 10)
                    return true;
                    }
                    else
                    {
                    alert('Phone number should be of 10 character in correct format starting from 9 following 6-8');
                    phone.focus();
                    return false;
                    }
                }
                function alphanumeric(address)
                { 
                    var letters = /^[0-9a-zA-Z_-]+$/;
                    if(address.value.match(letters))
                    {
                    return true;
                    }
                    else
                    {
                    alert('User address must have alphanumeric characters only');
                    address.focus();
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

        </script>
        </body>
</html>