<?php
session_start();
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
        .fixed{position: fixed;
            top:40%;
            right:0;
        }
        ul#icon li{list-style-type: none}
    </style>
    
    
    <script>
    function useridcheck(){
        var first=document.forgot_passform.username.value;  

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
            document.getElementById("iderror").innerHTML=res;
            }
          }
        xmlhttp.open("GET","code/forgot_password.php?id="+first,true);
        xmlhttp.send();
        }
    </script>
    
    </head>
    <body>
    <div class="w3-row" style="padding:px;background-color:black;">
         <div class="w3-col m4 w3-" style="background-color:;padding:10px">
             <div style="margin:">
       <img src="securechat_images/securechat_logo.png" style="width:40px;height:auto"> <span style="font-weight:bold;font-size:20px;color:white">SecureChat <sub style="font-size:10px">LIVE LIFE</sub></span>
                 </div>
        </div>
        <div class="w3-col m4 w3-" style="background-color:;padding:10px">
       
        </div>
        <div class="w3-col m4 w3-" style="background-color:;padding:10px;text-align:">
        <a href="index.php" class="btn btn-warning pull-right"><i class="fa fa-home"></i> Go TO Home</a>
        </div>
        </div>
        <!--end top bar-->
       <div class="w3-row">
        <div class="w3-col m6" style="text-align:center">
           <div>
               <img src="securechat_images/forgot_pass.jpg" style="width:100%;height:auto">
            </div>
           </div>
           <div class="w3-col m3" style="">
               <?php
if(isset($_SESSION['forgot_pass_mail'])){
    ?>
                    
                    <div class="alert alert-danger">
  <?php echo $_SESSION['forgot_pass_mail'];
                       unset($_SESSION['forgot_pass_mail']); 
                        ?></div>	
                    <?php
                    }
                    ?>
              <div>
               <form  style="margin-top:30px" name="forgot_passform">
                  <b>Username</b><input type="text" class="form-control" placeholder="Username" name="username" id="username"  required style="width:100%"><br>
                    </form>
                   <button name="forgot_password"  value="Search" onclick="useridcheck()" class="btn btn-danger" style="width:100%">SEND</button>
                 
               </div>
               <p id="iderror"></p>               
               
           </div>
           <div class="w3-col m3" style="">
           </div>
        </div>
    </body>
</html>