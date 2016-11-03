<?php
	session_start();
	require_once("connection.php");

	$current_bid = $_POST["current_bid"];
	$id = $_GET["id"];

	$qry = "UPDATE buy SET current_bid = $current_bid WHERE id = $id";

	$result=mysqli_query($conn,$qry);
	if($result) {		
		header("location:property.php?id=$id");
		exit();
	}
?>