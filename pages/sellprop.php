<?php
	session_start();

	require_once('buy/connection.php');

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$area = $_POST['area'];
	$beds = $_POST['bedrooms'];
	$baths = $_POST['bathrooms'];
	$initial_bid = $_POST['inibid'];
	$min_bid = $_POST['minibid'];
	$end_date = $_POST['end_date'];
	$image = $_FILES['img']['tmp_name'];
    //$img = file_get_contents($image);
    $house_type = $_POST['chooseone'];

	$qry = "INSERT into users(fname,lname,email,address,area,beds,baths,initial_bid,min_bid,end_date,image,house_type) values('$fname','$lname','$email','$address','$area','$beds','$baths','$initial_bid','$min_bid','$end_date','$image','$house_type')";
	$result = mysqli_query($conn,$qry);
	
		header("location:buy/buy.php");
		exit();
	
?>