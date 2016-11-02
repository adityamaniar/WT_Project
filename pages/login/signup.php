<?php
	session_start();

	require_once('connection.php');

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$qry = "INSERT into users(fname,lname,email,password) values('$fname','$lname','$email','$password')";
	$result = mysqli_query($conn,$qry);
	if($result) {
		header("location:signin.php");
		exit();
	}
?>