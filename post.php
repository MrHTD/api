<?php 

include "db.php";

$name = $_POST['name'];
$age = $_POST['age'];

$query = "INSERT INTO `tbluser`(`uname`, `uage`) VALUES ('$name',$age)";
$insert = mysqli_query($con, $query);
    
?>