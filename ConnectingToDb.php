<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "sachin";

    $conn = mysqli_connect($servername,$username,$password,$database);

    if (!$conn){
        die("sorry we failed to connect to database".mysqli_connect_error());
    }
    else{
        echo "connection was succesfull<br>";
    }

    //createing database;

    // $sql = "create database sachin";
    // if (mysqli_query($conn, $sql)) {
    //     echo "Database created successfully";
    //   } else {
    //     echo "Error creating database: " . mysqli_error($conn);
    //   }
      
    //   mysqli_close($conn);


    //creating tables in database;
    
    // $sql = "CREATE TABLE CUSTOMERS(
    //     ID INT(3) AUTO_INCREMENT PRIMARY KEY,
    //     FIRST_NAME VARCHAR(10) NOT NULL,
    //     LAST_NAME VARCHAR(10) NOT NULL,
    //     EMAIL VARCHAR(20),
    //     REG_DATE TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    // )";

    // if ($conn->query($sql) === TRUE) {
    //     echo "Table MyGuests created successfully";
    // } else {
    //     echo "Error creating table: " . $conn->error;
    // }
    
    // $conn->close();

    $sql = "INSERT INTO CUSTOMERS (
        FIRST_NAME,LAST_NAME,EMAIL)
        VALUES
        ('SACHIN','PASI','SACHINPASI2000@GMAIL.COM')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);
?>

