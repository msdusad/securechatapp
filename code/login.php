<?php
include('conn.php');
session_start();
$id=$_POST["username"];
$cookiepass=$_POST['password'];
$pass=$_POST["password"]; 
$pass=md5($pass);
$result=mysql_query("SELECT * FROM login WHERE username='$id' && password='$pass';");
if ($result){
    
  if ($result && mysql_num_rows($result)>0) {
    if($row = mysql_fetch_array($result)){
        echo "true";
     $_SESSION['username']=$_POST["username"];
	//header('location:../user-profile.php');
        // code for set cookies on remember metaphone
        
        if(isset($_POST['idremember'])){
					$cookie_name ="usernamecook";
                   $cookie_value = $id;
			    $cookie_pass ="userpasscook";
                   $cookie_val = $cookiepass;
		setcookie($cookie_name, $cookie_value, time() + (86400 * 90)); // 86400 = 1 day
		setcookie($cookie_pass, $cookie_val, time() + (86400 * 90), "/");
		}
        
        else{
            unset($_COOKIE['usernamecook']);
            unset($_COOKIE['userpasscook']);
        
        }
        
        
        //end hear
        
        // for retrive user name from db
        $username=mysql_query("select first_name,pic from user_profile where username='$id';");
        if ($username){
    
  if ($username && mysql_num_rows($username)>0) {
    if($fetchname = mysql_fetch_array($username)){ 
     $_SESSION['name']=$fetchname['first_name'];
      $_SESSION["pic"]=$fetchname['pic'];    
    }
  }
        }
        //end hear retrive name
        
       //code for update login time  
        $updatetime=mysql_query("update login set status='Online',last_login=now() where username='$id' && password='$pass';");
        //end hear time update
        
        
       // echo '<script>alert("User Login Sucessfully!");</script>';
       // echo '<script type="text/javascript">window.location ="../student/student_profile.php";</script>';
    }
      
  }
   else{
       echo "false";
      // echo '<script>window.location ="../index.php?messg= Not Match Username/Password";</script>';
   }
}
    else{
       // echo '<script>alert("Error IN User Login Query!'.mysql_error().'");</script>';
    }
?>