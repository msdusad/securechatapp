<?php
include('conn.php');
     session_start();
$chatuserid=$_GET["chatuserid"];

$_SESSION['chatuser']=$_GET["chatuserid"];
$sql=mysql_query("select first_name,last_name from user_profile where username='$chatuserid';");
if($sql){
if($row = mysql_fetch_array($sql))
     {
    $chatusername=ucfirst($row['first_name']." ".$row['last_name']);
    $_SESSION['chatusername']=ucfirst($row['first_name']." ".$row['last_name']);
    echo $chatusername;
    
}
}
else{
echo mysql_error();
}

?>