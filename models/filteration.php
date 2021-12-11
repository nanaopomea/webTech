<?php


$host = "localhost";
$user = "root";
$password = "";
$db = "finalsuserlogin";

$con = mysqli_connect($host, $user, $password, $db);


//check connection
if(!$con){
    echo 'Connection error;  '. mysqli_connect_error();
}

//The query
$sql= ' SELECT title FROM events WHERE Start="#" ';


//making the query to the database
$queryresults=mysqli_query($con, $sql);



//Fetch rows we want as an array

$runningevents=mysqli_fetch_all($queryresults, MYSQLI_ASSOC);

print_r($queryresults);
