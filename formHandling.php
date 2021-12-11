<?php
$name = $_POST["name"];
$mail = $_POST['email'];
$message = $_POST['message'];




//Different video additions 

$to = "allotei5@gmail.com";
$subject = "Yet another complaint";
$text = "Name =" . $name . "\r\n Email =" . $mail . "\r\n Message =" . $message .


    ini_set('SMTP', 'myserver');
ini_set('smtp_port', 25);

$headers = "From: nopquansah@gmail.com" . "\r\n";
if ($mail != NULL) {
    if (mail($to, $subject, $text, $headers)) {
        echo 'Sent';
    } else {
        echo 'Failed';
    };
}


//Redirect
//header("Location:form.php");



//The mail refuses to be sent to me
