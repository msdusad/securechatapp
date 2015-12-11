<?php
include('conn.php');
session_start();
$user=$_SESSION['username'];
if(isset($_POST['privacy_submit'])){
    $email=$_POST['primail'];
     $contact=$_POST['pricontact'];
     $fullpro=$_POST['prifullprofile'];
     $message=$_POST['primessage'];
    
$query=mysql_query("update privacy set email_privacy='$email',contact_privacy='$contact',full_profile_privacy='$fullpro',message_privacy='$message' where username='$user';");

if($query){
echo '<script>window.location ="../privacy.php?messg=sucess";</script>';
}
    
    else{
    echo "Error in privacy update".mysql_error();
    }
}
?>