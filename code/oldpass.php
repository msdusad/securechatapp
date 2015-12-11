<?php
include('conn.php');
session_start();
        $current_userid= $_SESSION['username'];
        //$old_password=$_POST['old_password'];
	     $old_password=$_REQUEST['first'];
       $ch_old=MD5($old_password);
       
      
       $old_pass_fetch=mysql_query("select * from login where username='$current_userid';");
if($old_pass_fetch){
       if($row=mysql_fetch_array($old_pass_fetch)){
            $oldpass=$row['password'];
           if($oldpass==$ch_old){
                
       // echo "Pass Matched";
           }
           
           else{
            echo 'Old Password Not Match'.mysql_error();
			 //echo '<script type="text/javascript">window.location ="../student/student_profile.php";</script>';
           }
       }
    else{
    echo "No Record Found";
    }
}
else{
echo "Error in query".mysql_error();
}
     
       ?>