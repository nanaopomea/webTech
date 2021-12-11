<?php

//W3schools procedural 
include '../models/connect.php';

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['add'])) {
    $genre = $_POST['genre'];
    $title = $_POST['title'];
    $image = $_FILES['image'];
    $start = $_POST['start'];
    $end = $_POST['end'];
    $description = $_POST['description'];
    $eventid = $_POST['event'];


    $check = getimagesize($_FILES["image"]["tmp_name"]);
    $allowed_mimes = ["image/png", "image/jpg", "image/gif", "image/jpeg"];


    //Checks the needle against the haystack($allowed_mimes) returns boolean
    if (in_array($_FILES["image"]["type"], $allowed_mimes)) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
        header('Location:../views/neweventform.php?title=' . urlencode($title) . '&genre=' . urlencode($genre)   . '&startDate=' . urlencode($start)  . '&endDate=' . urlencode($end)  . '&descrpt=' . urlencode($description));
        exit();
    }

    // Checking file size
    if ($_FILES["image"]["size"] > 15000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    $new_target_file = "";
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        //for consistency's sake so extension's match
        $image_extension = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        //Stackoverflow(Preventing the overwiting of images uploaded. Given a length of 16 characters)
        $new_target_file = substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil(16 / strlen($x)))), 1, 16);
        $new_target_file = $new_target_file . "." . $image_extension;


        //Preventing the misinterpretation of file content by telling the browser to read it well (Text and not code)
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_dir . $new_target_file)) {
            echo "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }




    // sql to update a record
    $sql = "UPDATE `events` SET
     `Genre` = '$genre',
     `Title` = '$title',
     `Start` = '$start',
     `Image` = '$new_target_file',
     `End` = '$end',
     `Description` ='$description'
     WHERE `events`.`id` =$eventid";


    if (mysqli_query($connection, $sql)) {
        //echo "Record deleted successfully";
        header('Location:../views/adminpanel.php');
    } else {
        echo "Error updating record: " . mysqli_error($connection);
    }
}
