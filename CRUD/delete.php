<?php

include "serverConnection.php";

if($_SERVER["REQUEST_METHOD"]=="POST"){


$id=$_POST['id'];

$sql= "DELETE from std_tb  where Sid=$id";

if($conn->query($sql)===TRUE){
    echo "Deleted successfully";
}
else{
    echo "Error";   
}
}
?>