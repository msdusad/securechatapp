<?php
include('conn.php');
session_start();
$id=mysql_real_escape_string($_REQUEST['id']);
$result=mysql_query("SELECT * FROM login WHERE username='$id';");
if ($result){
    
  if ($result && mysql_num_rows($result)>0) {
    if($row= mysql_fetch_array($result)){ 
        
       // code for show detail if userid match that user is same or not
        
        $user=mysql_query("select username,first_name,last_name,email,pic from user_profile where username='$id';");
        if($user){
        while($detail=mysql_fetch_array($user)){
            
            
            $username=$detail['username'];
            $name=$detail['first_name']." ".$detail['last_name'];
            $pic=$detail['pic'];
            $email=$detail['email'];

            echo "<div  style='width:auto;height:auto;background-color:black;text-align:center;padding:10px;margin-top:20px;color:white;opacity:0.6'>
<img src='profilephoto/";
if($pic!=''){
            echo $pic."'";
            }
            else{
             echo "no_avatar.jpg'";
            }       
            echo "alt='' style='width:150px;height:auto;' class='img-circle'><br><br>
                   <b> $name</b><br><br>";
               echo "<a href='code/password_link.php?user=$username&email=$email&name=$name' class='btn btn-success' style='width:auto'>Get Password Reset Link</a><br> </div>";  
        
        
        }
        
        }
        else{
        echo "Error in Detail Fetch".mysql_error();
        }
        
       
    }
  }
    else{
    echo "<div  style='width:auto;height:auto;background-color:black;text-align:center;padding:10px;margin-top:20px;color:white;opacity:0.6'>Username Not Match ,Please Check</div>";
    }
}
        ?>