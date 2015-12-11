<?php
session_start();
if(!isset($_SESSION['username']))
{
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html>  
<head>
    <title>securechat</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="securechatjs/chat.js"></script>
     <script type="text/javascript" src="securechatjs/chatbox.js"></script>
    
      <script type="text/javascript" src="bootstrap/js/jquery-1.11.3.min.js"></script>  
    <style>
        
        
     .inner-addon { 
    position: relative; 
}

/* style icon */
.inner-addon .glyphicon {
  position: absolute;
  padding: 10px;
  pointer-events: none;
}

/* align icon */
.left-addon .glyphicon  { left:  0px;}
.right-addon .glyphicon { right: 0px;}

/* add padding  */
.left-addon input  { padding-left:  30px; }
.right-addon input { padding-right: 30px; }
        #fixed{position: fixed;
            top:40%;
            right:0;
        }
        ul#icon li{list-style-type: none}
        ul#list li{border-bottom:px solid white;list-style-type: none;}
        ul#list li a{text-decoration: none;
            font-weight:bold;
        font-size:15px}
        ul.message li a{
    color:;
            width:80%;
            
        }
        
    </style>
    <script>

       function searchfriend(first){
        var xmlhttp;
        if (window.XMLHttpRequest)
          {// code for IE7+, Firefox, Chrome, Opera, Safari
          xmlhttp=new XMLHttpRequest();
          }
        else
          {// code for IE6, IE5
          xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
          }
        xmlhttp.onreadystatechange=function()
        {
          if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
            var res=xmlhttp.responseText;
            document.getElementById('search_friends').innerHTML=res;
            }
          }
        xmlhttp.open("GET","code/search_friend.php?friend="+first,true);
        xmlhttp.send();
        }
</script>
    
    <script>
$(document).ready(function(){
    $("#hide").click(function(){
        $("#div").toggle(1000);
    });
});
</script>
    <script>
$(document).ready(function(){
    $("#hide1").click(function(){
        $("#div1").toggle(1000);
    });
});
</script>
     <script>
$(document).ready(function(){
    $("#hide2").click(function(){
        $("#div2").toggle(1000);
    });
});
</script>
      <script>
$(document).ready(function(){
    $("#hide3").click(function(){
        $("#div3").toggle(1000);
    });
});
</script>
    </head>
    <body style="background-color:whitesmoke">
    <div class="w3-row" style="padding:px;background-color:black;">
         <div class="w3-col m6 w3-" style="background-color:;padding:10px">
             <div style="margin:">
       <img src="securechat_images/securechat_logo.png" style="width:40px;height:auto"> <span style="font-weight:bold;font-size:20px;color:white">SecureChat <sub style="font-size:10px">LIVE LIFE</sub></span>
                 </div>
        </div>

        
        <div class="w3-col m6 w3-" style="background-color:;padding:10px">
  <div class="dropdown pull-right">
    <button class="btn btn- dropdown-toggle" type="button" data-toggle="dropdown" style=""><img src="profilephoto/<?php echo $_SESSION['pic'] ?>" style="width:30px;height:30px;margin-top:-5px" class="img-circle"> <?php echo $_SESSION['name'];?>
    <span class="caret"></span></button> 
    <ul class="dropdown-menu">
       <li><a href="edit-profile.php" style="text-decoration:none"><i class="fa fa-edit"></i> Edit Profile</a></li>
    <li><a href="change_password.php" style="text-decoration:none"><i class="fa fa-wrench"></i> Change Password</a></li>
    <li><a href="privacy.php" style="text-decoration:none"><i class="fa fa-lock"></i> Privacy Setting</a></li>
      <li><a href="code/sign_out.php" style="text-decoration:none"><i class="glyphicon glyphicon-off"></i> Signout</a></li>
    </ul>
  </div>
        </div>
        </div>
        <!--sidebar start-->
        <div class="w3-row" style="background-color:">
            <div class="w3-col m2 w3-" style="">
                <div>
            <div id="hide" style="background-color:#75A3FF;text-align:center;padding:5px;cursor:pointer;">
                        <h5 style="font-weight:bold;color:white">Profile Section &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-down"></i></h5>
        </div>
                <div id="div" class="div" style="width:100%;height:auto;background-color:#75A3FF;display:none;padding-bottom:3px;">
               <ul id="list" style="margin-left:0px">
                    <li><a class="btn btn-warning" style="width:90%;" href="user-profile.php"><i class="fa fa-image"></i> Your Profile</a></li>
                   <li><a class="btn btn-warning" style="width:90%;" href="edit-profile.php"><i class="fa fa-edit"></i> Edit/Complete</a></li>
                   <li><a class="btn btn-warning" style="width:90%;" href="friends.php"><i class="fa fa-user"></i> Friend Cricle</a></li>
                    </ul>
                </div>
                </div>
                
                <div>
                    <div id="hide1" style="background-color:indianred;text-align:center;padding:5px;cursor:pointer">
                        <h5 style="font-weight:bold;color:white">Message Section &nbsp;&nbsp;<i class="fa fa-chevron-down"></i></h5>
        </div>
                <div id="div1" class="div" style="width:100%;height:auto;background-color:indianred;display:none;padding-bottom:3px">
               <ul class="message" id="list" style="margin-left:0px;">
                    <li><a class="btn btn-default"  href="compose.php"><i class="fa fa-pencil"></i> Compose</a></li>
                   <li><a  class="btn btn-default" href="inbox.php"><i class="fa fa-envelope"></i> Inbox</a></li>
                   <li><a  class="btn btn-default" href="draft.php"><i class="fa fa-dropbox"></i> Draft</a></li>
                   <li><a  class="btn btn-default" href="sent.php"><i class="fa fa-send"></i> Sent</a></li>
                   <li><a  class="btn btn-default" href="trash.php"><i class="fa fa-trash"></i> Trash</a></li>
                   <li><a  class="btn btn-default" href="chats.php"><i class="fa fa-users"></i> Chat History</a></li>
                    </ul>
                </div>
                    </div>
                
                 <div>
                    <div id="hide2" style="background-color:#00CC66;text-align:center;padding:5px;cursor:pointer">
                        <h5 style="font-weight:bold;color:white">Members Section &nbsp;&nbsp;<i class="fa fa-chevron-down"></i></h5>
        </div>
                <div id="div2" class="div" style="width:100%;height:auto;background-color:#00CC66;display:none;padding-bottom:3px">
               <ul id="list" style="margin-left:0px">
                    <li><a class="btn btn-info" style="width:80%;" href="all_user.php"><i class="fa fa-users"></i> All User</a></li>
                    </ul>
                </div>
                    </div>
                
                
                    <div>
                    <div id="hide3" style="background-color:darkslategray;text-align:center;padding:5px;cursor:pointer">
                        <h5 style="font-weight:bold;color:white">Public Section &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-down"></i></h5>
        </div>
                <div id="div3" class="div" style="width:100%;height:auto;background-color:darkslategray;display:none;padding-bottom:3px">
               <ul id="list" style="margin-left:0px">
                    <li><a class="btn btn-danger" style="width:90%;background-color:;color:white" href="news_update.php"><i class="fa fa-share-alt"></i> Update News</a></li>
                   <li><a class="btn btn-danger" style="width:90%;background-color:;color:white" href="all_user.php"><i class="fa fa-twitch"></i> Ask Question</a></li>
                    </ul>
                </div>
                    </div>
                
            </div>
         <!--sidebar start-->
             
        