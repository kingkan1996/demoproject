<?php

$server ="localhost";
$user="root";
$pass="";
$db="demo";

$conn=mysqli_connect($server,$user,$pass,$db);

if ($conn) {
    print("connected");
}
else{
    print("not connect");
}


?>