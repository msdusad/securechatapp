<?php
require_once('conn.php');
session_start();
$user=$_SESSION['username'];
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["coverimage"]["name"]);
$extension = end($temp);
if ((($_FILES["coverimage"]["type"] == "image/gif")
|| ($_FILES["coverimage"]["type"] == "image/jpeg")
|| ($_FILES["coverimage"]["type"] == "image/jpg")
|| ($_FILES["coverimage"]["type"] == "image/pjpeg")
|| ($_FILES["coverimage"]["type"] == "image/x-png")
|| ($_FILES["coverimage"]["type"] == "image/png"))
&& in_array($extension, $allowedExts)){
    
    $pic=$_FILES['coverimage']['name'];
     $profilepic="../coverpics/".$_FILES['coverimage']['name'];
    
   // code for if file exists in folder
   
$addtional="1";
while (file_exists($profilepic)) {
	$info=pathinfo($profilepic);
	$profilepic="../".$info['dirname']."/".$info['filename'].$addtional.'.'.$info['extension'];
	$pic=$info['filename'].$addtional.'.'.$info['extension'];
}
    // end here file exists
    
	$filemove=move_uploaded_file($_FILES['coverimage']['tmp_name'],$profilepic);
    if($filemove){
    //echo "Image Uploaded";
      
$query=mysql_query("update user_profile set cover_pic='$pic' where username='$user'");        
        
     if($query){
echo $pic;
     }  
        
        
    }
    else{
    echo "Error In Image Upload Query".mysql_error();
    }
}
else{
echo "Image Type Not Valid";
}
        
 
     // echo '<script type="text/javascript">window.location ="../edit-profile.php?img_error=yes";</script>'; 
