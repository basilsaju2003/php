<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$db="abc";
$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$db);
if($conn->connect_error){
    die("Connection failed:".$conn->connect_error);
}
else
echo "success";
?>