

<?php

session_start();

include('database_connection.php');
include('unique.php');
include('connect.php');



function passwordCheck($email, $rawpassword)

{



    $pass = hash_hmac("sha256", $rawpassword, "asdfghjk6tyhjkrfvb");
    //Sha is the engription type,  asd is my salt
    $sql = "select * from registration WHERE  email='" . $email . "' AND  password='" . $pass . "'";



    // 6e5093e75ac90b5bf0a79040b0f6024db0f7f1154cdef97afdac2e3fc4979f3a
    // 6e5093e75ac90b5bf0a79040b0f6024db0f7f1154cdef97afdac2e3fc4979f3a

    //so if the above happens, the next line should happen
    global $connection;
    $result = mysqli_query($connection, $sql);

    if (!$result) {
        echo ("Error: " . mysqli_error($connection));
    }

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        //   https://www.php.net/manual/en/function.password-hash.php

        $_SESSION["loggedin"] = true;
        $_SESSION["id"] = $row['id'];
        $_SESSION["email"] = $row['email'];
        $_SESSION["role"] = $row['Role'];
        if ($_SESSION["role"] == "Client") {
            //redirect to the user's interface
            header("location: ../views/userwelcome.php");
        } elseif ($_SESSION["role"] == "Administrator") {
            header("location: ../views/adminpanel.php");
        }
    } else {
        header("Location: ../login.php?feedback=0");
        die();
    }
}


?>