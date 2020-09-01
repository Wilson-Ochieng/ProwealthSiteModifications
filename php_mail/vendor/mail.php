<?php session_start(); // Starting Session
error_reporting(E_ALL);
ini_set('display_errors',1);

	
$date=date("d-m-Y");
$day=date('1');










use phpmailer\PHPMailer\PHPMailer;
use phpmailer\PHPMailer\SMTP;
use phpmailer\PHPMailer\Exception;


require 'phpmailer/phpmailer/src/Exception.php';
require 'phpmailer/phpmailer/src/PHPMailer.php';
require 'phpmailer/phpmailer/src/SMTP.php';




// Load Composer's autoloader
require 'autoload.php';

// Instantiation and passing `true` enables exceptions


$key=$_POST['key'];
if($key=="footer"){
	$user_email=$_POST['email'];
}elseif ($key=="get_quote") {
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$message=$_POST['message'];

	
}else if($key=="contact"){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];



}



$mail = new PHPMailer(true);




try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    
    $mail->Host = "ssl://smtp.gmail.com";
        $mail->Mailer = "smtp";
    
     $mail->Host       = 'smtp.gmail.com';                     // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'corammers@gmail.com';                       // SMTP username
      $mail->Password   = 'Pakistan1947';                                 // SMTP password
//    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;          // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
  //  $mail->Port       = 587; 

 
         
   // For Sending Email Without Secure)       
          
          $mail->isSMTP();
 $mail->Host = 'localhost';
 $mail->SMTPAuth = false;
 $mail->SMTPAutoTLS = false; 
 $mail->Port = 25; 


// // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
// $mail->SMTPOptions = array(
// 'ssl' => array(
// 'verify_peer' => false,
// 'verify_peer_name' => false,
// 'allow_self_signed' => true
// )
// );
    
    
    
   $mail->setFrom('corammers@gmail.com', 'Inbox Developers');  //yaha se email bhejni hai\
   
    $mail->addAddress('Kdavis@investmentdojo.com', 'Davis');      //is pay mail bhejni hai Add a recipient
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');


    // Content
    $mail->isHTML(true); // Set email format to HTML

    if($key=="footer"){
	

	$mail->Subject = 'You have a new Subscriber';
   $mail->Body    = '<b>'.$user_email.'</b>  ';


}elseif ($key=="get_quote") {


	$mail->Subject = 'Someone has requested for a quote!';
   $mail->Body    = '<b>Name:'.$name.'</b><br>
   							<b>Phone:'.$phone.'</b><br>
   							<b>Message:'.$message.'</b><br>  ';

	
}else if($key=="contact"){


	$mail->Subject = 'Someone Wants to contact Inbox Developers';
   $mail->Body    = '<b>Name:'.$name.'</b><br>
   							<b>Email:'.$email.'</b><br>
   							<b>Subject:'.$subject.'</b><br>
   							<b>Message:'.$message.'</b><br>  ';


}
    

    $mail->send();
    echo 'Email Has Been Sent';
} 

catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}











?>