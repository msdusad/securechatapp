
<?php

     include('conn.php');
     session_start();
    $curname=$_SESSION['username'];
          $sendtouser=$_SESSION['chatuser'];
/*
     $sql = "SELECT *, date_format(message_date,'%d-%m-%Y %r') as cdt from $ftble order by ID desc limit 200";
     $sql = "SELECT * FROM (" . $sql . ") as ch order by ID";
     */
$sql="SELECT * FROM chat_messages WHERE sender_username='$curname' && reciver_username='$sendtouser' OR sender_username='$sendtouser' && reciver_username='$curname' ORDER BY message_date ASC";

     $result = mysql_query($sql) or die('Query failed: ' . mysql_error());

     while ($line = mysql_fetch_array($result))
     {
         $message=$line['message'];
         $messagetime=$line['message_date'];
         $msgdate=date_create($messagetime);
          $msgsent_time=date_format($msgdate,"M d , h:i A");
         
         if($line['sender_username']==$curname){
             
             $detail=mysql_query("select * from user_profile where username='$curname'");
             if ($detail){
    
  if ($detail && mysql_num_rows($detail)>0) {
    if($userdtl = mysql_fetch_array($detail)){
        $urname=ucwords($userdtl['first_name']." ".$userdtl['last_name']);
        $urpic=$userdtl['pic']; 
         if($urpic==''){
        $urpic="no_avatar.jpg";
        }
    }
  }
             }
             else{
             echo mysql_error();
             }
                  
             
            $msg="<div class='w3-row' style='text-align: justify;'>
        <div class='w3-col w3-' style='width:20%;color:white;padding:3px'>
            <div><img src='profilephoto/$urpic' style='width:100%;height:45px;' class='img-circle'></div>
        </div>
  <div class='w3-col w3-' style='width:80%;color:;padding:3px;background-color:lavender'>
      <b class='pull-right' style='font-size:11px'>$msgsent_time</b><br>
        <p style='font-size:13px;'>$message</p>
        </div>
        </div><br>";         
             
              echo $msg;
         }
           if($line['sender_username']==$sendtouser){
               
                  $detail=mysql_query("select * from user_profile where username='$sendtouser'");
             if ($detail){
    
  if ($detail && mysql_num_rows($detail)>0) {
    if($userdtl = mysql_fetch_array($detail)){
        $urname=ucwords($userdtl['first_name']." ".$userdtl['last_name']);
        $urpic=$userdtl['pic']; 
        if($urpic==''){
        $urpic="no_avatar.jpg";
        }
        
    }
  }
             }
             else{
             echo mysql_error();
             }        
               
               $msg="<div class='w3-row'>
  <div class='w3-col w3-' style='width:80%;color:;padding:3px;background-color:lightgreen'>
      <b style='font-size:11px'>$msgsent_time</b><br>
        <p style='font-size:13px'>$message</p>
        </div>
             <div class='w3-col w3-' style='width:20%;color:white;padding:3px;'>
            <div><img src='profilephoto/$urpic' style='width:100%;height:45px;' class='img-circle'></div>
        </div>
        </div><br>";
                 
                echo $msg;
         }
        
        
     }
?>





