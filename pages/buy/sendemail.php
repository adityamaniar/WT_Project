<?php
require('phpmailer/PHPMailerAutoload.php');
require('connection.php');
$email = $_GET['email']; //The email you have to send to
$bid_email = $_GET['bidder_name'];
$price = $_GET['price'];
$id = $_GET['id'];
$mail = new PHPMailer(true);  // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 0;  // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true;  // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
$mail->Host = 'smtp.gmail.com';
$message = "
  
  Hello. The property you have uploaded on Homeland.com has found a suitable buyer 
 with a price of $price from a buyer who's email address is $bid_email. You can contact him at your own will.
 In case of further help we will be happy to assist you in any way possible.
  ";
  $mail->Timeout = 3600; 
  $mail->Username = "adityamaniar24@gmail.com";  //YOUR EMAIL ID HERE
  $mail->Password = "aavm240196";           //YOUR EMAIL PASSWORD HERE
  $mail->SetFrom('onlineauction@gmail.com', 'Homeland'); //FROM WHOM AND NAME ON EMAIL
  $mail->Subject = "Auction Successful";
  $mail->Port       = 465;                   
  $mail->SMTPSecure = "ssl"; 
  $mail->Body = $message;
  $mail->AddAddress($email);
  if(!$mail->Send())
  {
      echo $mail->errorMessages();
      echo "<html><body><h1>Something Went Wrong while sending you the Verification Email!,Please try Registering again</h1><body></html>";
  } 
  else
  {
    $delete_qry = "DELETE FROM buy WHERE id=$id";
    if(mysqli_query($conn, $delete_qry)) {
      header("location: ../../home.php");
      exit();
   }
  }

?>
