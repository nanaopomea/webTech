<?php

//This is a login page for login only
//Would have to speak to David on why PDO is being problematic

$host = "localhost";
$user = "root";
$password = "";
$db = "finalsuserlogin";

global $data;
 $data=mysqli_connect($host, $user, $password, $db);
// print_r($data);
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}
