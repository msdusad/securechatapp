<?php
include('conn.php');
session_start();

$sendername=mysql_real_escape_string($_POST["sdname"]);
$senderemail=mysql_real_escape_string($_POST["sdemail"]);
$sendermessage=mysql_real_escape_string($_POST["sdmessage"]);
$result=mysql_query("insert into leave_message (name,email,message) values ('$sendername','$senderemail','$sendermessage')");

if($result){
echo "true";
}
else{

echo "Error in message send".mysql_error();
}

?>