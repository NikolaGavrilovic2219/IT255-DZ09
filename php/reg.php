<?php
include("functions.php");


if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	if(!empty($username) && !empty($email) && !empty($password)){
				addPerson($username,$email, $password);
				header("Location: ../login.php");
	} else{
		header("Location: ../registration.php");
	}
}

?>