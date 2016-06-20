<?php

$server="localhost";
$user="root";
$pass="";
$db="methotel";

$conn=new mysqli($server,$user,$pass,$db);

if($conn->connect_error) {
	die("Error: ".$conn->connect_error);
}

?>