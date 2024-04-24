<?php
$uname="root";
$password="";
$servername="localhost";
$db="roshandb";
$conn=mysqli_connect($servername,$uname,$password,$db);
if($conn){
    echo "Database is connected <br>";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_REQUEST['Fname'];
    $Lname = $_REQUEST['Lname'];
    $address = $_REQUEST['Address'];
    $Phone = $_REQUEST['Phone'];
    $email = $_REQUEST['Email'];
    $gender = $_REQUEST['gender'];

    $sql_insert = "INSERT INTO roshantb (Fname, Lname, Address, Phone,Email, gender) VALUES ('$fname', '$Lname', '$address', '$Phone','$email', '$gender')";
    if ($conn->query($sql_insert) === TRUE) {
        echo "Inserted successfully <br>";
    } 
    $conn->close();
}
?>
