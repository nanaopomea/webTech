<?php
session_start();
//This allows us to use the database connection made in the database_connection page



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>seek coding</title>
    <link rel="stylesheet" href="loginStyle.css">
    <!---we had linked our css file----->
</head>

<body>

    <div>
    </div>

    <div class="full-page">
        <div class="navbar">

            <nav>
                <ul id='MenuItems'>
                    <li><button class='loginbtn' onclick="document.getElementById('login-form').style.display='block'" style="width:auto;">Login</button></li>
                </ul>
            </nav>
        </div>
        <div id='login-form' class='login-page'>
            <div class="form-box">
                <div class='button-box'>
                    <div id='btn'></div>
                    <button type='button' onclick='login()' class='toggle-btn' id="registered">Log In</button>
                    <button type='button' onclick='register()' class='toggle-btn'>Register</button>
                </div>
                <form id='login' class='input-group-login' method="POST" action="controllers/process_login.php">
                    <span class="text-danger" id="login_info" style="font-size: 18px; text-align: center; width: 100%; color: red;"></span>


                    <input type='text' class='input-field' placeholder='Email Id' name="mail" id="login_email" required onkeyup="checkLoginEmail();">
                    <!--Setting password length requirements-->
                    <input type='password' class='input-field' placeholder='Enter Password' name="paswrd" minlength="8" maxlength="32" required>
                    <input type='checkbox' class='check-box'><span>Remember Password</span>
                    <button type='submit' class='submit-btn' name="login">Log in</button>
                </form>
                <form id='register' class='input-group-register' method="POST" action="controllers/process_registration.php">
                    <input type='text' class='input-field' placeholder='First Name' name='first' required>
                    <input type='text' class='input-field' placeholder='Last Name' name="last" required>
                    <input type='email' class='input-field' placeholder='Email Id' name="mailing" id="registration_email" required>
                    <input type='password' class='input-field' placeholder='Enter Password' name="pswrd" minlength="8" maxlength="32" required>
                    <input type='password' class='input-field' placeholder='Confirm Password' name="confirmation" minlength="8" maxlength="32" required>
                    <input type='checkbox' class='check-box'><span>I agree to the terms and conditions</span>
                    <button type='submit' class='submit-btn' name="submission">Register</button>


                </form>
            </div>
        </div>
    </div>
    <script>
        var x = document.getElementById('login');
        var y = document.getElementById('register');
        var z = document.getElementById('btn');

        function register() {
            x.style.left = '-400px';
            y.style.left = '50px';
            z.style.left = '110px';
        }

        function login() {
            x.style.left = '50px';
            y.style.left = '450px';
            z.style.left = '0px';
        }
    </script>
    <script>
        var modal = document.getElementById('login-form');
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        document.getElementById('registered').click();



        //W3resource taught the concept
        function ValidateEmail(inputText) {
            var allowedformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,12})+$/;
            if (inputText.match(allowedformat)) {
                return true;
            } else {
                return false;
            }
        }

        function checkLoginEmail(){
            let login_email = document.getElementById("login_email").value;
            let message = "";
            if(!ValidateEmail(login_email)){
                document.getElementById("login_info").innerHTML = "wrong email"
            } else {
                document.getElementById("login_info").innerHTML = ""
            }
        }
    </script>
</body>

</html>