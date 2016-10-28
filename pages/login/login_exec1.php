<?php

session_start();

require_once('connection.php');
// define variables and set to empty values
$yearErr = $nameErr = $pnameErr = $mblErr = $stdErr = "";
$year = $name = $pname = $rname = $res = $mbl = $std = $batch1 = $batch2 = $batch3 = $batch4 = $batch5 = $batch6 = $batch7 = $batch8 = $batch9 = "";
$err=false;


	if (empty($_POST["year"])) {
     $yearErr = "Year is required";
	 $_SESSION['yearErr'] = $yearErr;
	 $err=true;
   } else {
     $year = test_input($_POST["year"]);
   }
   
   if (empty($_POST["name"])) {
     $nameErr = "Name is required";
	 $_SESSION['nameErr'] = $nameErr;
	 $err=true;
   } else {
     $name = test_input($_POST["name"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
       $nameErr = "Only letters and white space allowed"; 
     }
   }
   
   if (empty($_POST["pname"])) {
     $pnameErr = "Parent Name is required";
	 $_SESSION['pnameErr'] = $pnameErr;
	 $err=true;
   } else {
     $pname = test_input($_POST["pname"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$pname)) {
       $pnameErr = "Only letters and white space allowed"; 
     }
  }
   
   if (empty($_POST["rname"])) {
     $rnameErr = "";
   }else {
     $rname = test_input($_POST["rname"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$rname)) {
       $rnameErr = "Only letters and white space allowed"; 
     }
   }
   
   if (empty($_POST["res"])) {
     $resErr = "";
   } else {
     $res = test_input($_POST["res"]);
   }
   
   if (empty($_POST["mbl"])) {
     $mblErr = "Mobile No. is required";
	 $_SESSION['mblErr'] = $mblErr;
   } else {
     $mbl = test_input($_POST["mbl"]);
   }

   if (empty($_POST["std"])) {
     $stdErr = "Standard is required";
	 $_SESSION['stdErr']=$stdErr;
	 $err=true;
   } else {
     $std = test_input($_POST["std"]);
   }
   
   if (empty($_POST["batch1"])) {
     $resErr = "";
   } else {
     $batch1 = test_input($_POST["batch1"]);
   }
   
   if (empty($_POST["batch2"])) {
     $resErr = "";
   } else {
     $batch2 = test_input($_POST["batch2"]);
   }
   
   if (empty($_POST["batch3"])) {
     $resErr = "";
   } else {
     $batch3 = test_input($_POST["batch3"]);
   }
   
   if (empty($_POST["batch4"])) {
     $resErr = "";
   } else {
     $batch4 = test_input($_POST["batch4"]);
   }
   
   if (empty($_POST["batch5"])) {
     $resErr = "";
   } else {
     $batch5 = test_input($_POST["batch5"]);
   }
   
   if (empty($_POST["batch6"])) {
     $resErr = "";
   } else {
     $batch6 = test_input($_POST["batch6"]);
   }
   
   if (empty($_POST["batch7"])) {
     $resErr = "";
   } else {
     $batch7 = test_input($_POST["batch7"]);
   }
   
   if (empty($_POST["batch8"])) {
     $resErr = "";
   } else {
     $batch8 = test_input($_POST["batch8"]);
   }
   
   if (empty($_POST["batch9"])) {
     $resErr = "";
   } else {
     $batch9 = test_input($_POST["batch9"]);
   }


	function test_input($data) {
	   $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
   
    if($err) {
		session_write_close();
		header("location: register.php");
		exit();
	}
	else{
	$qry="insert into student(year,name,pname,rname,res,mbl,std,batch1,batch2,batch3
	,batch4,batch5,batch6,batch7,batch8,batch9) values('$year','$name','$pname','$rname','$res','$mbl','$std','$batch1','$batch2','$batch3',
	'$batch4','$batch5','$batch6','$batch7','$batch8','$batch9')";	
	$result=mysqli_query($sql,$qry);
		if($result) {		
		header("location:homepage.php");
		exit();
		}
	}

?>