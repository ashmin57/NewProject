<script>
    function customerLoginValidation() {
    let email = document.custLoginForm.userLoginEmail.value;
    let pass = document.custLoginForm.userLoginPass.value;

    var logEmailErr = (logPassErr = true);
    // Validate email address

    if (email == "") {
      printError("logEmailErr", "Please enter your email address");
    } else {
      // Regular expression for basic email validation
      var regex = /^\S+@\S+\.\S+$/;
      // var regex = /^[A-Z0-9_!#$%&'*+/=?`{|}~^-]+(?:\.[A-Z0-9_!#$%&'*+/=?`{|}~^-]+)*@[A-Z0-9-]+(?:\.[A-Z0-9-]+)*$/;
      if (regex.test(email) === false) {
        printError("logEmailErr", "Please enter a valid email address");
      } else {
        printError("logEmailErr", "");
        logEmailErr = false;
      }
    }

    // Validate email address
    if (pass == "") {
      printError("logPassErr", "Please enter your password");
    } else {
      if (pass.length < 8 || pass.length > 16) {
        printError(
          "logPassErr",
          "Password should be between 8 and 16 characters"
        );
      } else {
        printError("logPassErr", "");
        logPassErr = false;
      }
    }

    if ((logPassErr || logEmailErr) == true) {
      console.log("validation failed");
      return false;
    } else {
      console.log("validation success");
      return true;
    }
    printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}
}
</script>
        <form action="#" method="post" >
            <div class="inputs">
                <input autocomplete='chrome-off' class="input-group-login" type="text" placeholder="Email address">
                <span id="username" class="error"> </span>

            </div>
            <div class="inputs password-input">
                <input autocomplete='chrome-off' class="input-group-login" id="password_input" type="password"
                    placeholder="Password">
                <i id="password_eye" class="fa fa-eye"></i>
                <span id="passwords" class="error"></span>
            </div>


            <span class="text-center mtt-5">

                <a href="#" class="a-tag">Forgot Password</a>
            </span>
            <button class="login-button" onclick="return customerLoginValidation()">Login Now</button>
        </form>