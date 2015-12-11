<?php
session_start();
if(!isset($_SESSION['username']))
{
	header("location:index.php");
}
include("conn.php");
$user=$_SESSION['username'];
$sendtime=$_GET['time'];
$token=$_GET['tok'];
// for delete message from inbox
if($_GET['type']=='inbox'){
    $que=mysql_query("update messages set reciver_type='Trash',reciver_delete='yes' where reciver_id='$user' && send_time='$sendtime' && tokenid='$token';");
if($que){
     echo "<script type='text/javascript'>window.location.href='../inbox.php';</script>;";
}
else{
    echo "Error in data Deletion".mysql_error();
}
}

// for delete message from draft

if($_GET['type']=='draft'){
    $que=mysql_query("update messages set reciver_type='Trash',sender_delete='yes',reciver_delete='yes' where sender_id='$user' && send_time='$sendtime' && tokenid='$token';");
if($que){
     echo "<script type='text/javascript'>window.location.href='../draft.php';</script>;";
}
else{
    echo "Error in data Deletion".mysql_error();
}
}


//for delete message from sent
if($_GET['type']=='sent'){
    $que=mysql_query("update messages set sender_type='Trash',sender_delete='yes' where sender_id='$user' && sender_type='Sent' && send_time='$sendtime' && tokenid='$token';");
if($que){
     echo "<script type='text/javascript'>window.location.href='../sent.php';</script>;";
}
else{
    echo "Error in data Deletion".mysql_error();
}
}

//for delete message rom trash
if($_GET['type']=='trash'){

    $sendtime=$_GET['time'];
//    $que=mysql_query("update  messages  set trash_sender_delete='deleted',trash_reciver_delete='deleted' where (sender_id='$user' || reciver_id='$user') && (sender_type='Trash' || reciver_type='Trash')  && send_time='$sendtime';");
    $que=mysql_query("delete from messages  where (sender_id='$user' || reciver_id='$user') && (sender_type='Trash' || reciver_type='Trash') && (sender_delete='yes' && reciver_delete='yes') && send_time='$sendtime';");
    
//    $tr=mysql_query("INSERT INTO trash_messages (reciver_id,sender_id,subject,message,attachment,reciver_type,sender_type,send_time) SELECT reciver_id,sender_id,subject,message,attachment,reciver_type,sender_type,send_time FROM messages WHERE send_time='$sendtime';");
//    
if($que){
     echo "<script type='text/javascript'>window.location.href='../trash.php';</script>;";
}
else{
    echo "Error in data Deletion".mysql_error();
}
}

// fir insert delete message in trash table



?>