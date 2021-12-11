<?php

require_once('../models/database_connection.php');
        //So if submission, ie the submit button is clicked,
        if (isset($_POST['submission'])) {


            //Then you get the values coming from the form
            $fname = $_POST['first'];
            $lname = $_POST['last'];
            $email = $_POST['mailing'];
            $pass = $_POST['pswrd'];
            $confirmpass = $_POST['confirmation'];





            //Source:PHP.NET
            //Pasword salting. A specific string added before hashing takes place. 


            $pass = hash_hmac("sha256", $pass, "asdfghjk6tyhjkrfvb");
            //Sha is the engription type,  asd is my salt



            $sql = "INSERT INTO registration(`firstname`,`lastname`,`email`,`password`,`pconfirmation`) VALUES(?,?,?,?,?)";
            //its saying use the db object defined in database connection for your insert
            $insertion = $db->prepare($sql);
            $result = $insertion->execute([$fname, $lname, $email, $pass, $confirmpass]);
            if ($result) {
                echo 'Welcome to the party!';
            } else {
                echo 'There was an error saving your data. Try again?';
            }
        }
