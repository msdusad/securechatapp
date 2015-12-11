<?php
include('conn.php');
session_start();
$id=$_REQUEST['id'];
$result=mysql_query("SELECT * FROM login WHERE username='$id';");
if ($result){
    
  if ($result && mysql_num_rows($result)>0) {
    if($row = mysql_fetch_array($result)){ 
        echo "User Name Already Exists";
    }
  }
    else{
    //echo "Not Match ,Please Check";
    }
}
        ?>