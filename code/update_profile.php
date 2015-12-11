<?php
include('conn.php');
session_start();
class UpdateProfile{

public function PersonalDetail(){

    $user=$_SESSION['username'];
      $firstname=mysql_real_escape_string($_POST['firstname']);
     $lastname=mysql_real_escape_string($_POST['lastname']);
     $email=mysql_real_escape_string($_POST['email']);
     $day=mysql_real_escape_string($_POST['day']);
     $month=mysql_real_escape_string($_POST['month']);
     $year=mysql_real_escape_string($_POST['year']);
     $gender=mysql_real_escape_string($_POST['gender']);
     $contactno=mysql_real_escape_string($_POST['contactno']);
     $location=mysql_real_escape_string($_POST['location']);
    
    if(empty($_FILES['profilepic']['name'])) {
        $pic=$_POST['picsd'];
    }
    else{
        $allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["profilepic"]["name"]);
$extension = end($temp);
if ((($_FILES["profilepic"]["type"] == "image/gif")
|| ($_FILES["profilepic"]["type"] == "image/jpeg")
|| ($_FILES["profilepic"]["type"] == "image/jpg")
|| ($_FILES["profilepic"]["type"] == "image/pjpeg")
|| ($_FILES["profilepic"]["type"] == "image/x-png")
|| ($_FILES["profilepic"]["type"] == "image/png"))
&& in_array($extension, $allowedExts)){
    
     $profilepic="../profilephoto/".$_FILES['profilepic']['name'];
    
   /* code for if file exists in folder
   
    $fullpath = '../profilephoto/';
$additional = '1';

while (file_exists($fullpath)) {
    $info = pathinfo($fullpath);
    $fullpath = $info['dirname'] . '/'
              . $info['filename'] . $additional
              . '.' . $info['extension'];
}
    
    */
    
	move_uploaded_file($_FILES['profilepic']['tmp_name'],$profilepic);
         $pic=$_FILES['profilepic']['name'];
          
    
}
        
        else{
$pic=$_POST['picsd'];
      echo '<script type="text/javascript">window.location ="../edit-profile.php?img_error=yes";</script>'; 
            
        }
    }
    //for insert data in database
    
    $personlupdate= mysql_query("update user_profile set first_name='$firstname' ,last_name='$lastname',email='$email',dobday='$day',dobmonth='$month',dobyear='$year',gender='$gender',pic='$pic',contactno='$contactno',location='$location',last_update=now() where username='$user'; ");
    
    // checking query in right or not
    
    if($personlupdate){
        
        //echo '<script>alert(" Personal Detail Updated Successfully");javascript:history.go(-1);</script>';
			 echo '<script type="text/javascript">window.location ="../edit-profile.php?per_up=yes";</script>';
    
    }
    else{ 
    echo "Error in User Personal Detail Update".mysql_error();
    }

}

public function ProfessionalDetail(){
      $user=$_SESSION['username'];
     $designation=mysql_real_escape_string($_POST['designation']);
     $expyear=mysql_real_escape_string($_POST['year']);
     $expmonth=mysql_real_escape_string($_POST['month']);
     $keyskills=mysql_real_escape_string($_POST['keyskills']);
    
    $professupdate=mysql_query("update professional_detail set designation='$designation',expmonth='$expmonth',expyear='$expyear',keyskills='$keyskills',last_update_pro=now() where username='$user';");

    
    if($professupdate){
    
        echo '<script type="text/javascript">window.location ="../edit-profile.php?pro_up=yes";</script>';
        
			
    }
    else{
        
        echo "Error in User Professional Detail Update".mysql_error();    
    }
}
}

if(isset($_POST['personal'])){
$personaldetail= new UpdateProfile();
    $personaldetail->PersonalDetail();
}
if(isset($_POST['professional'])){
$professionaldetail= new UpdateProfile();
    $professionaldetail->ProfessionalDetail();
}
?>
