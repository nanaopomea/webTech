<?php

//W3schools procedural 
include '../models/connect.php';

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

$eventid = $_POST["eventid"];
// sql to delete a record
$sql = "DELETE FROM `events` WHERE `events`.`id` = $eventid";

if (mysqli_query($connection, $sql)) {
    //echo "Record deleted successfully";
    header('Location:../views/adminpanel.php');
} else {
    echo "Error deleting record: " . mysqli_error($connection);
}
