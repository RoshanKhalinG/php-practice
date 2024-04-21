<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $mydb = "NEW";
    
    $conn= mysqli_connect($servername,$username,$password,$mydb);
    
    $sql = "CREATE TABLE if not exists student5 (
        id INT AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    age INT,
    gender ENUM('Male', 'Female', 'Other') NOT NULL,
    comment TEXT NOT NULL
       
        )";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $comment = $_POST['comment'];

        $sql_insert="INSERT INTO student5(fullname,email,age,gender,comment) VALUES ('$fullname','$email','$age','$gender','$comment')";

    if($conn->query($sql)===true){
        echo "created";
      
        }

    else{
        echo "nono";
    }
    if($conn->query($sql_insert)===true){
        echo "inserted";
      
        }

    else{
        echo "nono";
    }

      
      $conn->close();
}
      ?>