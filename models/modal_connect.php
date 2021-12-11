<?php
include'unique.php';

if(file_exists("upload/". $_FILES["image"]["name"])){

}
else{
    $query= "INSERT INTO events  VALUES ('$genre', '$title', '$image', '$RunningDate', '$descrpt')";
    $queryRun=mysqli_query($data, $query);




$query= "INSERT INTO `events`  VALUES ('$genre', '$title', '$image', '$RunningDate', '$descrpt')";
$queryRun=mysqli_query($data, $query);
if($queryRun){

    move_uploaded_file($_FILES["image"]["tnp_name"],"upload/".$_FILES["file"]["name"]);
    $_SESSION['success']= "Event Added";
    header('Location:adminpanel.php');
}
else{
    $_SESSION['success']="Couldn't add event";
    header('Location: adminpanel.php');
}

}
