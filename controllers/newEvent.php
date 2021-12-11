<?php

include '../models/connect.php';

if (isset($_POST['add'])) {
    $genre = $_POST['genre'];
    $title = $_POST['title'];
    $image = $_FILES['image'];
    $start = $_POST['start'];
    $end = $_POST['end'];
    $description = $_POST['description'];



    echo $start;

    //Source:W3schools

    $target_dir = "../public/databaseImages/";

    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if (isset($_POST["add"])) {
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

        //Procedural error style (W3schools)
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
        }


        $query = "INSERT INTO `events` (`Genre`, `Title`, `Image`, `Start`, `End`, `Description`) 
                    VALUES ('$genre', '$title', '$new_target_file', '$start', '$end', '$description')";
        //$query = "INSERT INTO `events` VALUES ( '$genre', '$title', 'ujnfb','$start','$end', '$description')";
        $queryRun = mysqli_query($connection, $query);
        //var_dump($queryRun);


        // Perform a query, check for error
        if (!$queryRun) {
            echo ("Error description: " . mysqli_error($connection));
            die();
        }

        //$query = "INSERT INTO events VALUES ('$genre', '$title', '$image', '$RunningDate', '$descrpt')";
        //$queryRun = mysqli_query($data, $query);
        if ($queryRun) {
            move_uploaded_file($_FILES["image"]["tnp_name"], "databaseImages/" . $_FILES["image"]["name"]);
            $_SESSION['success'] = "Event Added";
            header('Location:../views/adminpanel.php');
        } else {
            $_SESSION['success'] = "Couldn't add event";
            header('Location:../views/adminpanel.php');
        }
    }
}
