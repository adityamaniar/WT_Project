<?php
	//Start session
	session_start();
 
	//Include database connection details
	require_once('connection.php');

	//Sanitize the POST values
	$email = $_POST['email'];
	$password = $_POST['password'];
 
	//Create query
	$qry="SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result=mysqli_query($conn,$qry);
	$row = mysqli_fetch_array($result);
 	$username = $row['fname'];
	//Check whether the query was successful or not
	if($result) {
		if(mysqli_num_rows($result) > 0) {
			header("location: ../../home.php?username=$username");
			exit();
		}
		else {
			header("location: signin.php");
		}
	}
?>