<?php include('header.php');
include('code/conn.php');
?>
<div class="w3-col m8 w3-" style="padding-left:1px;padding-right:1px;padding-bottom:20px">
    <div class="w3-row" style="background-color:indianred">
    <div class="w3-col m6" style="padding-bottom:3px">
        <div style="font-weight:bold;padding-bottom:3px;margin-top:-3px;margin-left:15px">
    <h4 class="btn btn-default"><i class="fa fa-trash"></i> Trash</h4>
    </div>
        </div>
        <div class="w3-col m6">
            <div style="padding:3px;margin-top:3px">
        <input type="text" style="width:70%;height:30px" class="" placeholder="Search Friends"><button type="submit" class="btn btn-default btn-sm" style="margin-top:-3px">SEARCH</button>
                </div>
        </div>
    </div>
    
    <div class="w3-row"style="margin-top:10px" >
    <div class="w3-col w3-white" style="border:1px solid lightgray;padding:10px">
        
        <?php
$user=$_SESSION['username'];
$sql=mysql_query("select * from messages where (sender_id='$user' && sender_delete='yes') || (reciver_id='$user' && reciver_delete='yes')  && (sender_type='Trash' || reciver_type='Trash')   order by send_time desc;");
if($sql){
    if($sql && mysql_num_rows($sql)>0){
        while($row=mysql_fetch_array($sql)){
            $reciverid=$row['reciver_id'];
            $from=$row['sender_id'];
            $subject=$row['subject'];
            $showsubject=substr($subject, 0, 70);
            $attach=$row['attachment'];
            $time=$row['send_time'];
             $tokenid=$row['tokenid'];
            $date=date_create($time);
          $messagetime=date_format($date,"M d , h:i A");
            
           $userdetail=mysql_query("select first_name,last_name from user_profile where username='$from'");
            if($userfd=mysql_fetch_array($userdetail)){
                $name=$userfd['first_name']." ".$userfd['last_name'];
            
            }
            
        
         echo "<div class='w3-row' style='background-color:lightgray;'>
           <div class='w3-quarter w3-' style='padding-top:7px;padding-left:5px'><p><a title='$from' href='view_message.php?type=trash&tokid=$tokenid&t=$time&sdid=$from&recid=$reciverid' style='text-decoration:none;color:black;'><b>From :</b> $name</a></p></div>
  <div class='w3-half'>
    <div class='w3-row'>
      <div class='w3-col w3-right w3-' style='width:75px;padding-top:7px'>";
      if($attach!=''){
      echo "<a title='Download File' href='downloadfile.php?tokid=$tokenid&t=$time&sdid=$from&recid=$reciverid' style='text-decoration:none;color:black'><i class='fa fa-file'></i></a>";
      }
      echo "</div>
        <div class='w3-rest w3-'  style='padding-top:7px;padding-left:5px'><p><a title='$subject' href='view_message.php?type=trash&tokid=$tokenid&t=$time&sdid=$from&recid=$reciverid' style='text-decoration:none;color:black'><b>Subject :</b> $showsubject</a></p></div>
    </div>
  </div>
  <div class='w3-quarter w3-'  style='padding-top:7px;padding-right:5px'><p>$messagetime <i class='fa fa-trash pull-right'></i></p></div>
</div><br>";
      
      }
    
    }
else{
echo "Empty Trash";
}
}
else{
echo "Error in Query Trash Pass".mysql_error();
}

               ?>
        
        </div>
    </div>
</div>
<?php include('footer.php');?>