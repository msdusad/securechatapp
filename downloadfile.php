<?php
session_start();
if(!isset($_SESSION['username']))
{
	header("location:index.php");
}
include('code/conn.php');
//code for download file 10th document


if(isset($_GET['sdid']) && isset($_GET['recid']) && isset($_GET['tokid']) && isset($_GET['t'])){
             $senderid=$_GET['sdid'];
$reciverid=$_GET['recid'];
$tokenid=$_GET['tokid'];
$time=$_GET['t'];       
                    //$table=$_GET['lin'];
            $result=mysql_query("select attachment from messages where reciver_id='$reciverid' && sender_id='$senderid' && tokenid='$tokenid' && send_time='$time';");
if($result){
              if ($result && mysql_num_rows($result)>0) {
    while($row = mysql_fetch_array($result)){ 
                      
       // $type=$row['type'];
        $name=$row['attachment'];
         if($name==""){    
             echo "<script type='text/javascript'>alert('No file found');window.location.href='employees.php';</script>;";
         }
        else{
  if(file_exists('message_files/'.$name)){
      header("Content-type: ".filetype('message_files/'.$name));
        header('Content-disposition: attachment; filename="'.$name.'"');
        echo file_get_contents('message_files/'.$name);
        exit; }
             
    /*   $sr="upload/".$name;
        $file = fopen($sr, 'w+');
echo fwrite($file, $sr);
fclose($file);*/
    }
    }
             }
                 

}
else{ echo "error in query pass".mysql_error();}

}

?>