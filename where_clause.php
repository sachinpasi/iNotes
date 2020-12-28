<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "testfrom";


    $conn = mysqli_connect($servername,$username,$password,$database);
    if (!$conn){
        die ("Error in Connction with database" . mysqli_connect_error());
    }
    else{
        echo "Connection successfull<br>";
    }

    $sql = "SELECT * FROM form WHERE email = 'sachinpasi2000@gmail.com'";
    $result = mysqli_query($conn,$sql);

    $num = mysqli_num_rows($result);

    echo $num;
    echo " records found in the database" . "<br>";
    $no = 1;
    if($result->num_rows > 0){
        while ($row = mysqli_fetch_assoc($result)){
            echo "data ". $no ." " . $row["name"] . " " . $row["email"] . "<br>";
            $no = $no + 1;
        }

    }
    else{
        echo "0 records";
    }

    mysqli_close($conn);




?>