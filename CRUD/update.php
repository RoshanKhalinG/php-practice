<?php
include "serverConnection.php";

if($_SERVER["REQUEST_METHOD"]=="POST"){


$id=$_POST['Sid'];
$firstname=$_POST['FirstName'];
$lastname=$_POST['LastName'];




$sql= "UPDATE std_tb SET FirstName= '$firstname', LastName='$lastname' where id=$id";

if($conn->query($sql)===TRUE){
    echo "UPdate successfully";
}
else{
    echo "Error";   
}
}
?>