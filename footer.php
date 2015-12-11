<head>
 <style>
    div.fixed{
        position:fixed;
        right:17%;
        bottom:10px;
    }
     .status:hover{background-color:lightgray;cursor:pointer}
    </style>
    <meta http-equiv="refresh" >
</head>
<div class="w3-col m2" style="padding:px;">
    <div style="background-color:#75A3FF;text-align:center;color:white;padding:6px">
        <h5><b style="color:white;">Friends Online</b></h5>
    </div>
            <div class="w3-row" style="background-color:">
                <div class="w3-col" style="padding:5px;">
                <?php
                    $chatcurr_user=$_SESSION['username'];
$onlineuser=mysql_query("select distinct a.username,a.first_name,a.last_name,a.pic,b.status from user_profile a,login b,user_friends c where a.username=c.friend_id && b.username= c.friend_id && b.status='Online' && c.username='$chatcurr_user'; ");

if($onlineuser){
    if($onlineuser && mysql_num_rows($onlineuser)>0){
        while($onlines=mysql_fetch_array($onlineuser)){
            $chuse=$onlines['username'];
            ?>
            <div class="status" style="width:100%;height:auto;border-bottom:1px solid lightgrey;padding-top:4px">
                    <a   style="text-decoration:none;color:black" onclick="chatboxshow('<?php echo $chuse;?>')"><p><img src="profilephoto/<?php 
            if($onlines['pic']!=''){
            echo $onlines['pic'];
            }
            else{
            echo "no_avatar.jpg";
            }
                        ?>" class="img-circle" style="width:30px;height:30px"> <span style="font-size:11px;"><?php echo ucfirst($onlines['first_name']." ".$onlines['last_name']); ?></span><i class="fa fa-circle pull-right" style="color:green;font-size:10px;margin-top:7px;margin-right:5px"></i></p></a></div>
        <?php    
        }
        
    
    }

}
        ?>
                    
                    
                    
                    
                </div>
     </div>
        </div>
</div> 
<!--chatbox-->
<div id="chatbox_full" class="fixed" style="width:270px;height:auto;border:1px solid lightgray;display:none;">
<div class="w3-row" style="">
    <div class="w3-col w3-blue" style="width:50%;color:white;padding:5px"><p style="margin-top:2px"><i class="fa fa-circle" style="color:green;font-size:10px"></i> <span id="chat_name"></span></p></div>
  <div class="w3-col w3-blue" style="width:50%;color:white;padding:5px"><p style="margin-top:2px" class="pull-right"><i class="fa fa-minus" style="cursor:pointer" onclick="chatboxminimize()"></i> <i class="fa fa-close" style="cursor:pointer" onclick="chatboxremove()"></i></p></div>
    </div>
    
    <div id="show_chat" style="width:100%;height:250px;overflow-y:scroll;background-color:white">
         <!--<div class="w3-row">
        <div class="w3-col " style="width:100%;text-align:center;padding:5px"><p style="font-size:10px">Oct 31,2015 10:30PM</p> </div>
        </div>-->
        
    </div>
    
    <div style="background-color:lavender;">
       
    <textarea id="txtmsg" name="msg" type="text" placeholder="Type Message" rows="1" cols="33" class="form-control" onkeypress="handleKeyPress(event)"></textarea>
        <button id="Submit2" class="btn btn-warning" style="width:100%" value="Send" onclick="forchat()">Send</button>
       
    </div>
</div>

<!-- short chat box with name -->
<div id="chatbox_mini" class="fixed" style="width:270px;height:auto;border:1px solid lightgray;display:none;">
<div class="w3-row" style="">
    <div class="w3-col w3-blue" style="width:50%;color:white;padding:5px"><p style="margin-top:2px"><i class="fa fa-circle" style="color:green;font-size:10px"></i> <b></b></p></div>
  <div class="w3-col w3-blue" style="width:50%;color:white;padding:5px"><p style="margin-top:2px" class="pull-right"><i class="fa fa-expand" style="cursor:pointer" onclick="chatboxshow()"></i> <i class="fa fa-close" style="cursor:pointer" onclick="chatboxremove()"></i></p></div>
    </div>
</div>
<!--end Haer -->
</body>
</html>