<?php
// server creation start
$servername="localhost";
$username="root";
$password="";
$database="interview";

$conn=mysqli_connect($servername,$username,$password,$database);
if($conn){
   echo "connection is created successfully";
}
else{
    die("The connection is not working properly check it ".mysqli_error());
}
?>
