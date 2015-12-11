<?php
include('conn.php');
session_start();
        $current_userid= $_SESSION['username'];
        //$old_password=$_POST['old_password'];
	     $old_password=$_POST['old_password'];
       $ch_old=MD5($old_password);
       // $new_password=$_POST['new_password'];
	   $new_password=$_POST['new_password'];
       $up_pass=MD5($new_password);
      
                $dataupdate=mysql_query("UPDATE login SET password='$up_pass' WHERE username='$current_userid' && password='$ch_old';");
            
               if($dataupdate && mysql_num_rows($dataupdate)>0){
               
          //echo '<script>alert("Student Password Updated Sucessfully!");</script>';
			   echo '<script type="text/javascript">window.location ="../change_password.php?sucess=yes";</script>';
               //echo "Password Updated Sucessfullly";
        }
        else{
        //echo "Error in Password Update Query".mysql_error();
              echo '<script type="text/javascript">window.location ="../change_password.php?sucess=no";</script>';
           //echo '<script>alert("Error In Student Password Updatation !'.mysql_error().'");</script>';
        }
        
           
         
     
       ?>