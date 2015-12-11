<?php
session_start();
include('conn.php');
$user=$_SESSION['username'];
$friend_username=mysql_real_escape_string($_REQUEST["friendid"]);

$add=mysql_query("insert into user_friends (username,friend_id,friendship_date) values ('$user','$friend_username',now())");
if($add){
     $frndname=mysql_query("select first_name,last_name from user_profile where username='$friend_username';");
     if($row=mysql_fetch_array($frndname)){
			
            $firstname=$row['first_name'];
            $lastname=$row['last_name'];
			//echo 'You And '.$row['first_name']." ".$row['last_name'].' Already Friend';
          echo "You And ".$firstname." ".$lastname." Now Connected/Friends";
     }
    else{
    echo mysql_error();
    }
    
    //echo "<script>alert('Friend Added Sucessfullly')</script>";
//echo '<script>alert(" Friend Add Sucessfully ! Query'.mysql_error().' ");</script>';
			
}
    else{
        
                    $checkVar=mysql_error();
        
						//echo $checkVar;
 if($checkVar=="Duplicate entry '".$friend_username."' for key 'friend_id'"){
     
     $frdname=mysql_query("select first_name,last_name from user_profile where username='$friend_username';");
     if($row=mysql_fetch_array($frdname)){
			
			echo 'You And '.$row['first_name']." ".$row['last_name'].' Already Friend';
     }
			}
				
			else{	
			echo mysql_error();
			
			}
           
    
			
    }

?>
