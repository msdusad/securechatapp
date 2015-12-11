<?php include('header.php');
include('code/conn.php');
$crrnt_user=$_SESSION['username'];
?>
<div class="w3-col m8 w3-" style="padding-left:1px;padding-right:1px;padding-bottom:20px">
    <div class="w3-row" style="background-color:indianred">
    <div class="w3-col m6" style="padding-bottom:3px">
        <div style="font-weight:bold;padding-bottom:3px;margin-top:-3px;margin-left:15px">
    <h4 class="btn btn-default"><i class="fa fa-wechat"></i> Chat History</h4>
    </div>
        </div>
        <div class="w3-col m6">
            <div style="padding:3px;margin-top:3px">
        <input type="text" style="width:70%;height:30px" class="" placeholder="Search Friends"><button type="submit" class="btn btn-default btn-sm" style="margin-top:-3px">SEARCH</button>
                </div>
        </div>
    </div>
    
    <div class="w3-row"style="margin-top:10px" >
     <?php
$query=mysql_query("select * from chat_messages where sender_username='$crrnt_user' || reciver_username='$crrnt_user' ");  
  

?>
    <div class="w3-col w3-white" style="border:1px solid lightgray;padding:10px">
        <p>hjlcvcv.</p>
        </div>
        
        
    </div>
</div>
<?php include('footer.php');?>