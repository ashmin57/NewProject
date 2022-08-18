<?php
    include_once "include/header.php";
?>

<!Doctype html>
<html>
    <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./style/login.css">
    </head>
        <body>
            <form action="process_login.php" method="post">
                <div class="login-box">
                        <h1>Login</h1>
                        <!-- <?php
                            if(isset($error)){
                                foreach($error as $error){
                                    echo '<span class="error-msg">'.$error.'</span>';
                                };
                            };
                            ?> -->
                        <div class="textbox">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <input type="text" placeholder="Username/Phone" maxlength="10" name="username" value="" autocomplete="off" required>
                        </div>
                        <div class="textbox">
                            <i class="fa fa-key" aria-hidden="true"></i>

                            <input type="password" placeholder="Password" name="password" id="password" autocomplete="off" >
                            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon" id ="togglePassword"></span>
                        </div>
                        <label>
                            <input type="checkbox" checked="checked" name="remember"> Remember me
                        </label>
                        <input class="btn" type="submit" name="" value="Sign in">
                        Dont have an Account?<a href="register.php">Click Here</a>
                </div>
            </form>

            
        <?php
          
            if(isset($_POST['Error'])){
                echo $_POST['Error'];
            }
         ?>
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
         </script>
        </body>
      
</html>