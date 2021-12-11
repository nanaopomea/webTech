<?php
print_r($_POST);




include '../models/connect.php';

if (isset($_POST['add'])) {
    $genre = $_POST['genre'];
    $title = $_POST['title'];
    $image = $_FILES['image'];
    $start = $_POST['startDate'];
    $end = $_POST['endDate'];
    $description = $_POST['descrpt'];



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
        //print_r($check);
        //Checks the needle against the haystack($allowed_mimes) returns boolean
        if (in_array($check["mime"], $allowed_mimes)) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
            header('Location:../views/neweventform.php?title=' . urlencode($title) . '&genre=' . urlencode($genre)   . '&startDate=' . urlencode($start)  . '&endDate=' . urlencode($end)  . '&descrpt=' . urlencode($description));
        }
    }
    echo $target_file;

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["image"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
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
                VALUES ('$genre', '$title', 'uploaded_files/aaaaa.png', '$start', '$end', '$description')";
    //$query = "INSERT INTO `events` VALUES ( '$genre', '$title', 'ujnfb','$start','$end', '$description')";
    $queryRun = mysqli_query($connection, $query);
    //var_dump($queryRun);

    
    // Perform a query, check for error
    if (!$queryRun) {
        echo("Error description: " . mysqli_error($connection));
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
