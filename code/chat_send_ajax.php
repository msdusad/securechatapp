<?php
include('conn.php');
session_start();
     $msg=mysql_real_escape_string($_GET["msg"]);
      $curname=$_SESSION['username'];
          $sendtouser=$_SESSION['chatuser'];
        
// for save message in current user table

     $sql="INSERT INTO chat_messages(sender_username,reciver_username,message,message_date) VALUES ('$curname','$sendtouser','$msg',now());";  
 
//echo $sql;
     $result = mysql_query($sql);
///echo "sucess";
     if(!$result)
     {
        throw new Exception('Query failed: ' . mysql_error());
        exit();
     }



?>





