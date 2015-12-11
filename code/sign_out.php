<?php
include("conn.php");
session_start();
$user= $_SESSION['username'];
$sql=mysql_query("update login set status='Offline' where username='$user';");
if($sql){
//status chge sucessfully
}
else{
echo "Error in user status change offline".mysql_error();
}

session_destroy();
header('location:../index.php');
?>