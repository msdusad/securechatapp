<?php
session_start();
if(isset($_SESSION['username'])){
header('location:inbox.php');
}
?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>securechat</title>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="securechatjs/font-awasome.min.css">
        <link rel="stylesheet" href="securechatjs/w3.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="securechatjs/indexjs.js"></script>
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
            
            .left-addon .glyphicon {
                left: 0px;
            }
            
            .right-addon .glyphicon {
                right: 0px;
            }
            /* add padding  */
            
            .left-addon input {
                padding-left: 30px;
            }
            
            .right-addon input {
                padding-right: 30px;
            }
            
            ul#icon li {
                display: inline-block
            }
            
            div.fixed {
                position: fixed;
                right: 20px;
                bottom: 0px;
            }
            
            .card:hover {
                box-sizing: border-box;
                box-shadow: 0px 20px 40px lightgray, 0px 30px 60px lightgray;
            }
        </style>
        
        
    <!-- For Alpha Numeric-->
  <script type="text/javascript">
        var specialKeys = new Array();
        specialKeys.push(8); //Backspace
        specialKeys.push(9); //Tab
        specialKeys.push(46); //Delete
        specialKeys.push(36); //Home
        specialKeys.push(35); //End
        specialKeys.push(37); //Left
        specialKeys.push(39); //Right
        function IsAlphaNumeric(e) {
            var keyCode = e.keyCode == 0 ? e.charCode : e.keyCode;
            var ret = ((keyCode >= 48 && keyCode <= 57) || (keyCode >= 65 && keyCode <= 90) || (keyCode >= 97 && keyCode <= 122) || (specialKeys.indexOf(e.keyCode) != -1 && e.charCode != e.keyCode));
            document.getElementById("error").style.display = ret ? "none" : "inline";
            return ret;
        }
    </script>

    
    <!-- End Hear -->
    
    
    <script type="text/javascript">
        
          //code for to id check
    
       function idcheck(first){ 

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
        xmlhttp.open("GET","code/signup_idcheck.php?id="+first,true);
        xmlhttp.send();
        }
        
        
        
        
        // code for paassword match signup
        
        function passwordcheck(){
            var fpassword = document.checksignup.password.value;
            var conform_password = document.checksignup.repassword.value;
            
            if (conform_password != fpassword) {
                document.getElementById("pass_error").style.display="block";
                 document.getElementById("cofpass_error").innerHTML ="Re-Enter Password Not Match";
                return false;
            }
            else{
             document.getElementById("cofpass_error").style.display="none";
                return true;
            }
        }
    </script>     
        
           
<script>
    //login script  
$(document).ready(function(){
	 $("#login").click(function(){	
		  user=$("#username").val();
         
         if(user==''){
          $("#add_err").html("Enter Username");
             return false;
         }
         
		  pass=$("#password").val();
		  $.ajax({
		   type: "POST",
		   url: "code/login.php",
			data: "username="+user+"&password="+pass,
		   success: function(data){  
                if(jQuery.trim(data) === "true")
                                   {
                           window.location="inbox.php";
                                      } 
               else {
    
                $("#add_err").html("Wrong Username / Password").css("color","red");   
               }    
               
		   },
		   beforeSend:function()
		   {
			$("#add_err").html("<img src='securechat_images/ajax-loader.gif' /> Loading...")
		   }
		  });
		return false;
	});
});
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
<span style="color:white;font-size:20px;">Get Help From IT Developers</span>
            </div>
            <div class="w3-col m4 w3-" style="background-color:;padding:10px;text-align:">
               <!-- <button id="mod" type="button" class="btn btn-info sm" data-toggle="modal" data-target="#myModal1"><i class="glyphicon glyphicon-log-in"></i> &nbsp;LOGIN</button>
                 Modal
   
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal2"><i class="glyphicon glyphicon-edit"></i> &nbsp;SIGNUP</button>
                Modal -->
        
            </div>
        </div>
        <!--end top bar-->
        <div class="w3-row">
            <div class="w3-col m4" style="padding:0px">
              
             <div class="" id="" role="dialog">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header" style="background-color:skyblue;text-align:center">
                                
                                <h4 class="modal-title" style="font-weight:bold"><i class="glyphicon glyphicon-lock"></i> LOGIN</h4>
                            </div>
                             
                            <div class="modal-body" style="">
                               <p class="err" id="add_err"></p>     
                                <form id="login_form" role="form" style="margin-left:0px">
                                   
                                    
                                    <div class="inner-addon left-addon">
                                        <i class="glyphicon glyphicon-user" style="color:black;"></i>
                                        <input type="text" id="username" name="username" class="form-control" value="<?php 
if(isset($_COOKIE['usernamecook'])){
echo $_COOKIE['usernamecook']; 
}														
														 
 ?>" placeholder="Username" style="background-color:#e1eef3 !important; color:#999;" required>
                                    </div>
                                    <div class="inner-addon left-addon">
                                        <i class="glyphicon glyphicon-lock" style="color:black;"></i>
                                        <input type="password" id="password" name="password" class="form-control" value="<?php 
if(isset($_COOKIE['userpasscook'])){
echo $_COOKIE['userpasscook']; 
}														
														 
 ?>" placeholder="●●●●●" style="background-color:#e1eef3 !important; color:#999;" required>
                                    </div>
                                    <p style="margin-top:5px">
                                        <input type="checkbox" name="idremember" value="1">Remember Me</p>
                                    <button type="submit" id="login" name="login" class="btn btn-danger" style="width:100%">LOGIN</button>
                                    <br>
                                     </form>
                                    <p><a href="forgot_password.php" style="text-decoration:none">Forget password?</a></p>
                               
                            </div>
                            
                            
                            <div class="modal-footer" style="background-color:skyblue;">
                             
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="w3-col m4" style="padding:0px">
                       <div class="" id="myModal2" role="dialog">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header" style="background-color:skyblue;text-align:center">
                              
                                <h4 class="modal-title" style="font-weight:bold"><i class="glyphicon glyphicon-edit"></i> SIGNUP</h4>
                            </div>
                            <div class="modal-body" style="">
                                      <form role="form" name="checksignup" action="code/signup.php" method="post" onsubmit="return  passwordcheck();" class="form-danger">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-pencil"> </span> Name</label>
              <input type="text" class="form-control" name="first_name" placeholder="Your Name" required>
            </div>
              <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-leaf"> </span> Email</label>
              <input type="email" class="form-control" name="email" placeholder="Email" required>
            </div>
                          <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"> </span> Username</label>
                 <input type="text" class="form-control" name="username" placeholder="Create Username" onkeyup="idcheck(this.value)" onkeypress="return IsAlphaNumeric(event);" ondrop="return false;"
        onpaste="return false;" required>
                              <p id="iderror" style="color: Red;"></p>
                              <span id="error" style="color: Red; display: none">* Special Characters not allowed
                              
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"> </span> Password</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="Password" maxlength="10" minlength="6" required>
            </div>
              <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"> </span> Repeat Password</label>
              <input type="password" class="form-control" name="repassword" id="repassword" placeholder="Re-Enter Password" maxlength="10" minlength="6" required>
            </div>
                             <div class="alert alert-danger" id="pass_error" style="display:none;">
                                 <p id="cofpass_error"></p> 
</div>
                             
                             
                  <!--  <input type="submit" name="signup"  class="btn btn-danger" value="REGISTER">-->
                                    <button type="submit" class="btn btn-danger" name="signup"  style="width:100%"><i class="glyphicon glyphicon-off"></i> REGISTER</button>
                                </form>
                            </div>
                            <div class="modal-footer" style="background-color:skyblue;">
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           <!-- <div class="w3-col m4" style="padding:10px">
                <div class="w3-card w3- card" style="width:100%;height:300px">

                </div>
            </div>-->
        </div>
        <div class="w3-row">
            <div class="w3-col" style="padding:10px;text-align:center">
                <h1 style="font-weight:bold;color:;text-shadow:3px 3px 6px grey">Get Help From  IT Developers</h1>
            </div>
        </div>
        <div class="w3-row">
            <div class="w3-col m3" style="padding:10px;text-align:center">
                <img src="securechat_images/design.png" style="width:150px;height:auto">
               <!-- <h2 style="font-weight:bold;color:coral;text-shadow:">Website Designers</h2>-->
            </div>
            <div class="w3-col m3" style="padding:10px;text-align:center">
                <img src="securechat_images/php.png" style="width:140px;height:auto">
                 <!--  <h2 style="font-weight:bold;color:lightblue;text-shadow:">PHP Developers</h2>-->
            </div>
            <div class="w3-col m3" style="padding:10px;text-align:center">
                <img src="securechat_images/java.png" style="width:150px;height:auto">
                 <!--  <h2 style="font-weight:bold;color:khaki;text-shadow;">java Programmers</h2>-->
            </div>
            <div class="w3-col m3" style="padding:10px;text-align:center">
                <img src="securechat_images/android.png" style="width:140px;height:auto">
                 <!--  <h2 style="font-weight:bold;color:lightgreen;text-shadow:">Android Developers</h2>-->
            </div>
        </div>
        <div class="w3-row" style="background-color:grey;color:white">
            <div class="w3-col m6" style="padding:10px;text-align:center">
                <span>Copyright&copy;SecureChat Allright Reserved 2015</span>
            </div>
            <div class="w3-col m6" style="padding:10px;text-align:center">
                <div>
                    <ul id="icon">
                        <li>
                            <a href="" title="facebook"><img src="securechat_images/fb.png" style="width:40px"></a>
                        </li>
                        <li>
                            <a href="" title="twitter"><img src="securechat_images/twit.png" style="width:40px"></a>
                        </li>
                        <li>
                            <a href="" title="google+"><img src="securechat_images/gplus.png" style="width:40px"></a>
                        </li>
                        <li>
                            <a href="" title="linkedin"><img src="securechat_images/link.png" style="width:40px"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="full" class="fixed" style="width:250px;height:auto;display:none;border:2px solid teal">
            <div class="w3-row" style="background-color:teal;color:white">
                <div class="w3-col " style="padding:5px">
                    <span style="font-weight:bold;font-size:12px;margin-top:5px"><i class="glyphicon glyphicon-envelope"> </i> &nbsp; LEAVE MESSAGE</span>
                    <a href="" style="color:white;float:right;"><i class="glyphicon glyphicon-resize-small" style="font-size:;cursor:pointer"> </i></a>
                </div>
            </div>
            <div class="w3-row">
                <div class="w3-col w3-white" style="padding:10px">
                    <p id="suss_leave" style="text-align:center;"></p>
                   <form id="leave_form" role="form">
                        <input type="text" id="leave_name" placeholder="Name" class="form-control" style="width:93%" required>
                        <br>
                        <input type="text" id="leave_email" placeholder="Email/Mobile" class="form-control" style="width:93%" required>
                        <br>
                        <textarea type="text" id="leave_message" placeholder="Message" class="form-control" rows="4" style="width:93%" required></textarea>
                        <br>
                        <button id="leave_submit" type="submit" class="btn btn-" style="margin-left:0px;background-color:teal;color:white;width:93%">Send</button>
                    </form>
                </div>
            </div>
        </div>
        <div id="short" class="fixed" style="width:250px;height:auto;border:transparent;">
            <div class="w3-row" style="background-color:teal;color:white">
                <div class="w3-col " style="padding:5px">
                    <span style="font-weight:bold;font-size:12px;margin-top:5px"><i class="glyphicon glyphicon-envelope"> </i>&nbsp; LEAVE MESSAGE</span>
                    <i class="glyphicon glyphicon-resize-full" style="font-size:px;cursor:pointer;float:right" onclick="leave_message()"></i>
                </div>
            </div>
        </div>
    </body>

    </html>