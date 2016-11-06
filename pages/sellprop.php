<?php
	session_start();
	require("connection.php");

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$sq_ft = $_POST['area'];
	$beds = $_POST['bedrooms'];
	$baths = $_POST['bathrooms'];
	$start_bid = $_POST['inibid'];
	$min_bid = $_POST['minibid'];
	$end_date = $_POST['end_date'];
	
    $imgData =addslashes (file_get_contents($_FILES['userfile']['tmp_name']));      

    $house_type = $_POST['chooseone'];

	$qry = "INSERT into buy(fname,lname,email,address,sq_ft,beds,baths,start_bid,current_bid,min_bid,end_date,image,house_type) values('$fname','$lname','$email','$address','$sq_ft','$beds','$baths','$start_bid','$start_bid','$min_bid','$end_date','{$imgData}','$house_type')";
	$result = mysqli_query($conn,$qry);
	if($result) {
		header("location:buy/buy.php");
		exit();
	}
	else {
		echo "Error: " . $qry . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);
?>