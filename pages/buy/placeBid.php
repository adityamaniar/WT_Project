<?php
	session_start();
	require_once("connection.php");
    if (isset($_SESSION['user'])) {
    	$username = $_SESSION['user'];
  	}

  	$sql = "SELECT * from users where fname = '$username'";
  	$res=mysqli_query($conn,$sql);
  	$row = mysqli_fetch_array($res);
 	$email = $row['email'];

	$current_bid = $_POST["current_bid"];
	$id = $_GET["id"];

	$qry = "UPDATE buy SET current_bid = '$current_bid', bidder_name = '$email' WHERE id = $id";

	$result=mysqli_query($conn,$qry);
	if($result) {		
		header("location:property.php?id=$id");
		exit();
	}
	else {
		echo "Error: " . $qry . "<br>" . mysqli_error($conn);
	}
?>