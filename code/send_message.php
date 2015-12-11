<?php
include('conn.php');
session_start();
if(isset($_POST['send_message'])){
$sender_type="Sent";
$reciver_type="Inbox";
}

if(isset($_POST['save_draft'])){
    $sender_type="";
$reciver_type="Draft";
}
$to=mysql_real_escape_string($_POST['to']);

$from=mysql_real_escape_string($_POST['from']);

if($_POST['subject']==''){
$subject='';
}
else{
$subject=mysql_real_escape_string($_POST['subject']);
}
if($_POST['message']==''){
    $message='';
}
else{
$message=mysql_real_escape_string($_POST['message']);
}
if(empty($_FILES['attachment']['name'])){
$file='';
}
else{
     // $sentfile="../message_files/".$_FILES['attachment']['name'];
	//move_uploaded_file($_FILES['attachment']['tmp_name'],$sentfile);
         $file=$_FILES['attachment']['name'];
}
$token=rand(0,999999999);

$sql=mysql_query("insert into messages (reciver_id,sender_id,subject,message,attachment,reciver_type,sender_type,tokenid,send_time) values('$to','$from','$subject','$message','$file','$reciver_type','$sender_type','$token',now());");

if($sql){
    if($reciver_type=='Draft'){
    $_SESSION['sucess_sending']='Draft';
    }
    if($reciver_type=='Inbox'){
    $_SESSION['sucess_sending']='Inbox';
    }

     echo '<script type="text/javascript">window.location ="../compose.php";</script>'; 

}
else{
echo "Error in Message Sending".mysql_error();

}


?>