<!--This is for loggind in-->


<?php


include('../models/password_verification.php');


//The first condition was true for both login and register so second part had to be added to distinguish
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {

    $Logmail = $_POST["mail"];
    $Logpass = $_POST["paswrd"];

    // echo $Logpass;
    // die();

    passwordCheck($Logmail, $Logpass);
}




?>