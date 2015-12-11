<?php
include('conn.php');
session_start();
class Registration extends createConnection{ 
    
    // for insert data into database of registration 
    
   public  function regestration(){
          // for insert data into database
        $fname=mysql_real_escape_string($_POST['first_name']);
        $email=mysql_real_escape_string($_POST['email']);
        $userid=mysql_real_escape_string($_POST['username']);
        $password=mysql_real_escape_string($_POST['password']);
        $en_pass=md5($password);
       $status="Online";
       
        //for login table
         
        $login=mysql_query("insert into login (username,password,last_login,status,join_date) values('$userid','$en_pass','$status',now(),now());");
       // for user details 
         $user_profile=mysql_query("insert into user_profile (username,first_name,email,last_update) values('$userid','$fname','$email',now());");
       
       // for professional detail
       $user_professional=mysql_query("insert into professional_detail (username,last_update_pro) values('$userid',now());");
        $user_privacy=mysql_query("insert into privacy (username) values('$userid');");
        
        
        if($user_profile==true && $login==true && $user_professional==true && $user_privacy==true){
			
      // confirmation mail for account activate
			
	$subject = 'Secure Chat Account Activation Confirmation Mail';
$message = ("Dear  $fname ,<br>Greetings!!!<br>
Your Account had been created sucessfully :<br>
For Confirmation <a href=''> Click Hear </a><br>
<b>Thanks and Regards,<br>
Mahender Singh (SecureChat Developer)</b>
");  
        
 $header= 'From: msdusad@gmail.com' . "\r\n" .
          'Reply-To:  msdusad@gmail.com' . "\r\n" .
          'X-Mailer: PHP/' . phpversion();
$header.= "MIME-Version: 1.0\r\n"; 
$header.= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
$header.= "X-Priority: 1\r\n"; 
 mail($email, $subject, $message, $header);				
			
             $_SESSION['username']=mysql_real_escape_string($_POST['username']);
            $_SESSION['name']=$_POST['first_name'];
            header('location:../edit-profile.php?pro=profile');
             // echo '<script type="text/javascript">window.location ="../student/student_profile.php";</script>';
          echo '<script>alert("User Registration Sucessfully!");</script>';
        }
        else{
        
            $checkVar=mysql_error();
        
						//echo $checkVar;
 if($checkVar=="Duplicate entry '".$userid."' for key 'userid'"){
			
			echo '<script>alert(" Username Aleready Taken , Enter Different Username");javascript:history.go(-1);</script>';
			
			}
				
			else{	
			echo '<script>alert(" Error In User Registration ! Query'.mysql_error().' ");javascript:history.go(-1);</script>';
			
			}
            
        }
    }
}

if(isset($_POST['signup'])){
$cl= new Registration();
$cl->regestration();
}
    