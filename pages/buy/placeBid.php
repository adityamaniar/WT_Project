<?php
	session_start();
	require_once("connection.php");

	$current_bid = $_POST["current_bid"];
	$qry = "insert into buy(current_bid) values('$current_bid')";
	$result=mysqli_query($conn,$qry);
	if($result) {		
		header("location:property.php");
		exit();
	}
?>