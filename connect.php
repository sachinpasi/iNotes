<?php
    $name = $_POST['name'];
    $email = $_POST['email'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "testfrom";

    //create connection

    $conn = mysqli_connect($servername,$username,$password,$database);

    //check connection

    if (!$conn){
        die ("connection failed".mysqli_connect_error());
    }
    else{
        echo "Connected Successfully<br>";
    }

    // //creating database

    // $sql = "CREATE DATABASE testfrom";
    // if (mysqli_query($conn,$sql)){
    //     echo "database created successfully<br>";
    // }
    // else{
    //     echo "database not created ".mysqli_error($conn);
    // }

    // mysqli_close($conn);

    //creating tables in database;

    // $sql = "CREATE TABLE form (
    //     id int(2) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //     name VARCHAR(30) NOT NULL,
    //     email VARCHAR(40) NOT NULL
    // )";

    // if (mysqli_query($conn,$sql)){
    //     echo "table created succesfully<br>";
    // }
    // else{
    //     echo "error in creating table ".mysqli_error($conn);
    // }

    //inserting data

    // $sql = "INSERT INTO form (name,email) VALUES ('$name','$email')";
    // if (mysqli_query($conn,$sql)){
    //         echo "data inserted succesfully<br>";
    //     }
    //     else{
    //         echo "error in creating table ".mysqli_error($conn);
    //     }
    // selecting data from databse;

    $sql = "SELECT id ,name, email FROM form";
    $result = $conn->query($sql);

    if ($result->num_rows > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo "the data is " .$row["id" ] . " ". $row["name"] . "<br>";
        }
        
    }
    else{
        echo "0 results";
    }
    mysqli_close($conn);
?>
