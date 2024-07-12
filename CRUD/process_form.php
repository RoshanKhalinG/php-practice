<?php

include "serverConnection.php";

$table_name = "std_tb"; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['FirstName'];
    $lname = $_POST['LastName'];
    $Phone = $_POST['PhoneNumber'];

    // Insert data into table
    $sql = "INSERT INTO $table_name (FirstName, LastName, PhoneNumber) VALUES ('$fname', '$lname', '$Phone')";

    if ($conn->query($sql)) {
        echo "Inserted successfully";
    } else {
        echo "Error inserting record: " . $conn->error;
    }
    
    $conn->close();
}





?>
