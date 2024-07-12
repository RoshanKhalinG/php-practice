<?php
$uname="root";
$password="";
$servername="localhost";
$db="std_tb";

$conn=mysqli_connect($servername,$uname,$password,$db);
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $fname = $_REQUEST['Fname'];
//     $Lname = $_REQUEST['Lname'];
//     $address = $_REQUEST['Address'];
//     $Phone = $_REQUEST['Phone'];
//     $gender = $_REQUEST['gender'];

//     $sql_select = "Select From std";

//     if ($conn->query($sql_insert) === TRUE) {
//         echo "Inserted successfully";
//     } 
    
//     $conn->close();
// }
$sql_select = "SELECT * FROM std_tb   ";
$result = mysqli_query($conn,$sql_select);
$num= mysqli_num_rows($result);
echo("The number of rows in your table is:");
echo ($num);

echo("<br>");
echo("<br>");

   
// if($num>0){
//     $i=0;
//     while($i<$num)
//     {
//                 $row=mysqli_fetch_assoc($result);
//                 echo var_dump($row);
//                 echo("<br>");
//                 $i++;
//             }     

// }
    
// else{

// }


if($num>0){
    
     while($row=mysqli_fetch_assoc($result)){
        echo("<br>");
        echo "id:".$row['Sid'];
        echo("<br>");
        echo "fname: ".$row['FirstName'];
        echo("<br>");
        echo "lname: ".$row['LastName'];
        echo("<br>");
        
        echo "phone: ".$row['PhoneNumber'];
        echo("<br>");
       
        
     }
     
}
else{}

?>