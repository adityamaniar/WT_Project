<?php
	$mysql_hostname = "localhost";
	$mysql_user = "root";
	$mysql_password = "";
	$mysql_database = "wt_project";
	$conn = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database);
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
?>