<?php 
require_once('header.php');
require_once('code/conn.php');
$senderid=$_GET['sdid'];
$reciverid=$_GET['recid'];
$tokenid=$_GET['tokid'];
$time=$_GET['t'];
$type=$_GET['type'];
$sql=mysql_query("select * from messages where reciver_id='$reciverid' && sender_id='$senderid' && tokenid='$tokenid' && send_time='$time';");
if($sql){

    if($sql && mysql_num_rows($sql)>0){
        if($row=mysql_fetch_array($sql)){
            $reciverid=$row['reciver_id'];
            $from=$row['sender_id'];
            $subject=$row['subject'];
            $showsubject=substr($subject, 0, 60);
            $attach=$row['attachment'];
            $message=$row['message'];
            $time=$row['send_time'];
            $tokenid=$row['tokenid'];
            $date=date_create($time);
          $messagetime=date_format($date,"M d , h:i A");
            
        }

    }
         
}
else{
         
echo "Error in Q".mysql_error();
}
?>
<head>
<script>
function reply(){
document.getElementById("reply_box").style.display="block";

}

</script>
</head>
<div id="message_view" class="w3-col m8 w3-" style="padding-left:1px;padding-right:1px;padding-bottom:20px">
    <div class="w3-row" style="background-color:indianred">
    <div class="w3-col m6" style="padding-bottom:3px">
        <div style="font-weight:bold;padding-bottom:px;margin-top:3px;margin-left:15px">
    <button onclick="javascript:history.go(-1)" class="btn btn-default"><i class="fa fa-arrow-circle-left" style="font-size:18px"></i></button>
            <a href="#reply" class="btn btn-default" onclick="reply()"><i class="fa fa-reply"></i> Reply</a>
           <?php echo " <a href='code/delete-message.php?type=$type&time=$time&tok=$tokenid' class='btn btn-default'><i class='fa fa-trash'></i> Delete</a>"; ?>
    </div>
        </div>
        <!--<div class="w3-col m6">
            <div style="padding:3px;margin-top:px">
        <input type="text" style="width:70%;height:30px" class="" placeholder="Search Friends"><button type="submit" class="btn btn-default btn-sm" style="margin-top:-3px">Search</button>
                </div>
        </div>-->
    </div>
    
    <div class="w3-row"style="margin-top:10px" >
        
        
    <div class="w3-col w3-white" style="border:1px solid lightgray;padding:10px">
        
         <?php
        if($attach!=''){
    echo "<a class='btn btn-danger' style='margin-left:40%;' href='downloadfile.php?tokid=$tokenid&t=$time&sdid=$senderid&recid=$reciverid'>Download Attachment</a><br><br> ";
    }
        ?>
        
        <p class="pull-right"><?php echo $messagetime;?></p>
         <div style="width:100%;height:auto;background-color:lightgray;padding:5px">
        <p style="margin-top:5px"><b>Subject :</b> <?php  echo $subject ?></p>
        </div><br>
        <div style="width:100%;height:auto;background-color:lightgray;padding:5px">
        <p style="margin-top:5px"><b>Message :</b> <?php  echo $message ?></p>
        </div><br>
        
         <section id="reply">
        <div id="reply_box" style="width:50%;height:auto;display:none;">
        <form role="form">
            <textarea type="text" name="reply_message" class="form-control" style="" placeholder="Reply"></textarea><br>
            <input type="submit" name="reply_form" class="btn btn-danger" style="width:100%" value="Send">
            </form>
        </div>
        </section>
        
        </div>
    </div>

</div>

 <!--warning code start-->
    <div id="error_message" class="w3-col m8 w3-" style="padding-left:1px;padding-right:1px;padding-bottom:20px;;display:none;">
                <div class="w3-row">
                <div class="w3-col w3-" style="text-align:center">
                    <h2 style="color:red">Sorry, this page isn't available</h2><br>
                    <h4>The link you followed may be broken, or the page may have been removed.</h4><br><br>
                    <div style="margin-left:40%">
                    <img src="securechat_images/Warning_icon.png" style="width:200px;height:auto">
                    </div><br><br>
                   <button type="button" class="btn btn-warning" onclick="javascript:history.go(-1)">Go back to the previous page</button>
                    </div>
                </div>
    </div>
                <!--warning code end-->
 
<?php include('footer.php');?>