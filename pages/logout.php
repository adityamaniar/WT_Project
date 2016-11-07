<?php
session_start();
if (isset($_SESSION['user'])) {
	echo "Hii";
	unset($_SESSION['user']);
	echo "Hiii";
   header("location: ../index.php");
 }
?>
