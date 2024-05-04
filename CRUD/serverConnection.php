<?php
//For Connection
$servername= "localhost";
$username=  "root";
$password= "";

//For Database
$mydb="std_db";


$conn= mysqli_connect($servername,$username,$password,$mydb);


if($conn){
    echo "\n Server Connected Successfully";
}
else{
    echo "Connection failed";
}

?>