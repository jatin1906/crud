<?php
include 'dbconnect.php';
$id=$_GET['id'];
$del="DELETE FROM `info` WHERE `info`.`Sr.no` = $id";
mysqli_query($conn,$del);

header('location:display.php');



?>