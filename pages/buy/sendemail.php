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
if($bid_email=='') {
  $message = "
  Hello. We are sorry to inform you that the property you have uploaded on Homeland.com has not found a suitable buyer yet.
  We would request you to upload your property again and assure you a buyer the next time.
  In case of further help we will be happy to assist you in any way possible.";
}
else {
  $message = "  
  Hello. The property you have uploaded on Homeland.com has found a suitable buyer 
  with a price of $price from a buyer who's email address is $bid_email. You can contact him at your own will.
  In case of further help we will be happy to assist you in any way possible.";
  }
  $mail->Timeout = 3600; 
  $mail->Username = "adityamaniar24@gmail.com";  //YOUR EMAIL ID HERE
  $mail->Password = "aavm240196";           //YOUR EMAIL PASSWORD HERE
  $mail->SetFrom('onlineauction@gmail.com', 'Homeland'); //FROM WHOM AND NAME ON EMAIL
  if($bid_email=='')
    $mail->Subject = "Auction Successful";
  else
    $mail->Subject = "Auction Unsuccessful";
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
