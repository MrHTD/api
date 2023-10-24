<?php

header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: POST, GET, OPTIONS');

header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');

// header("Content-Type: aplication/json");

$con = mysqli_connect("localhost","root","","api") or die("Connection Failed :" . mysqli_connect_error());

?>