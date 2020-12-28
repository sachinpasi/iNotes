<?php
     $servername = "localhost";
     $username = "root";
     $password = "";
     $database = "testfrom";
     
    $conn = mysqli_connect($servername,$username,$password,$database);

    if (!$conn){
        die("sorry we failed to connect to database".mysqli_connect_error());
    }
    else{
        echo "connection was succesfull<br>";
    }

    $sql = "select * from form";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
    } else {
    echo "0 results";
    }
    $conn->close();
?>