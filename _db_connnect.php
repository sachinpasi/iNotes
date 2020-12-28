<?php
    $servername = "localhost";
    $username = "root";
    $password ="";

    $conn = mysqli_connect($servername,$username,$password);
    if (!$conn){
        die("Sorry we are facing some issue at our end ". mysqli_connect_error());
    }
    else{
        echo "Connected successfully<br>";
    }


?>