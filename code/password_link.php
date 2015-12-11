<?php
session_start();
$name=$_GET['name'];
$username=$_GET['user'];
$email=$_GET['email'];

	$subject = 'SecureChat Password Reset Link';
$message = ("Dear  <b>$name </b>,<br><br>
For Confirmation <a href='http:'> Click Hear For Password Update </a><br><br>
<b>Thanks and Regards,<br>
Mahender Singh (SecureChat Developer)</b>
");  
        
$header= 'From: msdusad@gmail.com' . "\r\n" .
          'Reply-To:  msdusad@gmail.com' . "\r\n" .
          'X-Mailer: PHP/' . phpversion();
$header.= "MIME-Version: 1.0\r\n"; 
$header.= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
$header.= "X-Priority: 1\r\n"; 
 $sendmail=mail($email, $subject, $message, $header);
if($sendmail){
    $_SESSION['forgot_pass_mail']='Password Reset Link Sent On Your Email';
      header('location:../forgot_password.php');
//echo "Email Sent Successfully"; 

}

else{
    $_SESSION['forgot_pass_mail']='Error in Password Reset Link Sending';
     header('location:../forgot_password.php');
//echo "Error in Mail Sending".mysql_error();

}

?>