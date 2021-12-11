<?php
$sname="localhost";
$uname="room";
$passworrd="";

$datab="finalsuserlogin";

$conn=mysqli_connect($sname,$unmae,$passworrd,$datab);

if(!$conn){
    echo "connection failed";
}
