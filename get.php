<?php

include "db.php";

$result = mysqli_query($con, "select * from tbluser");

$arr = [];

while($row = mysqli_fetch_assoc($result))
{
    $arr[] = $row;
}

print(json_encode($arr));

?>
