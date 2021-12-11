<?php


//$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$database = "finalsuserlogin";

//Is it that when I use PDO i cant define host above?

$db = new PDO('mysql:host=localhost;dbname=' . $database . '; charset=utf8', $dbuser, $dbpassword);
//the line below would give extra information should the code throw an error
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
