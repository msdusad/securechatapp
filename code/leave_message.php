<?php
include('conn.php');
session_start();

$sendername=$_POST["sdname"];
$senderemail=$_POST["sdemail"];
$sendermessage=$_POST["sdmessage"];
$result=mysql_query("insert into leave_message (name,email,message) values ('$sendername','$senderemail','$sendermessage')");

if($result){
echo "true";
}
else{

echo "Error in message send".mysql_error();
}

?>