<?php
//THIS PAGE IS MADE SPECIFICALLY FOR ENQUIRY FORM SUBMISSION







?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="formStyle.css">
</head>

<body>
    <!--<p> Please complete the form below and we will be in touch shortly. </p>-->
    <div class="contact-title">
        <h1>
            Come chat with us, don't be a stranger
        </h1>

    </div>
    <div class="contact-form">
        <form id="contact-form" method="POST" action="formHandling.php">
            <!--This is to say that send the form to the handling page-->
            <input name="name" type="text" class="form-control" placeholder="Your Name" required>
            <br>
            <input name="email" type="email" class="form-control" placeholder="Your Email" required>
            <br>
            <textarea name="message" class="form-control" placeholder="Message..." rows=4 required></textarea>
            <input type="submit" class="form-control submit" value="send">
        </form>
    </div>

</body>

</html>