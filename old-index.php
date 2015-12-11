<?php
session_start();
if(isset($_SESSION['username'])){
header('location:inbox.php?pro=message');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Securechat Workstaster</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <style>
        #title_name
        {
        font-size:24px;
            margin-left:50px;
            font-weight:bold;
        }
        #buttonsindex
        {
        float:right;
            margin-right:50px;
            color:black;
        }
        i.new {
    position:absolute;
    width:70px;
    height:42px;
    left:;
    margin-top:-15px;
    background:url(pic/flag-new-red.png)no-repeat;
        }
        i.noticenew {
    position:absolute;
    width:70px;
    height:42px;
    left:px;
    margin-top:-6px;
    background:url(pic/new-icon.gif)no-repeat;
        }
        .container-fluid{
            height: auto;
            padding:px;
            background-color:lightgrey
        }
        ul#menu li{display:inline}
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
    </head>
    <body>
        <div class="container-fluid">
    <div class="w3-row">
        <div class="w3-col w3-indigo" style="box-shadow:0px 0px 0px 0px black;padding:10px;border-top-left-radius:2em; border-top-right-radius: 2em;">
            <a href="#" style="text-decoration:none;color:white"><span id="title_name" style="">SecureChat<sub> LIVE LIFE</sub></span></a>
            <div class="btn-group" id="buttonsindex" style="">
            <a href="index.php"><button type="button" class="btn btn-default glyphicon glyphicon-home"> HOME</button></a>
   <a href="contactus.php"><button type="button" class="btn btn-default glyphicon glyphicon-envelope"> CONTACT US</button></a>
            </div>
        </div>
        </div><br>
        
    <div class="w3-row" id="news">
  <div class="w3-col m4 w3-white" style="box-shadow:1px 1px 1px 1px gray;">
      <div style="padding:10px">
          <div style="width:100%;height:auto">
           <img src="pic/member-login.png" alt="membericon" style="width:100%;height:auto">
              </div>
        <form class="form-horizontal"  role="form" action="code/login.php" method="post" style="padding:10px">
    <div class="form-group">
        
      <div class="col-sm-10">
          <?php
			if(isset($_GET['messg'])){
				$ErrorMessage=$_GET['messg'];
				?>
				<div class="alert alert-danger">
  <?php echo $ErrorMessage;?></div>	
<?php
			}
?>			
          <label class="control-label col-sm-2 glyphicon glyphicon-user" for="email"><b>Username </b></label>
       <br><br> <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?php 
if(isset($_COOKIE['usernamecook'])){
echo $_COOKIE['usernamecook']; 
}														
														 
 ?>"  required>
          
          
          
          <br>   <label class="control-label col-sm-2 glyphicon glyphicon-lock" for="pwd"><b>Password </b></label>
        <br><br><input type="password" class="form-control" id="password" name="password" placeholder="Password" value="<?php 
if(isset($_COOKIE['userpasscook'])){
echo $_COOKIE['userpasscook']; 
}														
														 
 ?>"  required>
           <div class="checkbox">
          <label><input type="checkbox" name="idremember" value="1"> Remember me</label>
                <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="login" class="btn btn-primary">LOGIN</button>
      </div>
        </div>
      </div>
    </div>

  </form>
          <a href="forgot_password.php" style="margin-left:43%; text-decoration:none;" class="glyphicon glyphicon-fire"> <b style="color:darkblue">Forget Password</b></a>
          <div>
                    <img src="pic/network.jpg" style="width:100%;height:200px;margin-top:20px" alt="networkimage">
                        </div>
          </div>
        </div>
  <div class="w3-col m4 w3-grey" style="box-shadow:1px 1px 1px 1px gray;padding:5px">
        <div>
      <b style="color:black;font-size:18px;margin-left:110px">SIGNUP</b><img src="pic/hello.gif" alt="helloicon">
            <div style="background-color:white;padding:10px">
                        <i class="new"></i>
                         <form role="form" name="checksignup" style="width:70%;margin-left:60px" action="code/signup.php" method="post" onsubmit="return  passwordcheck();" class="form-danger">
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
                 <input type="text" class="form-control" name="username" placeholder="Create Userid" onkeyup="idcheck(this.value)" onkeypress="return IsAlphaNumeric(event);" ondrop="return false;"
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
                             
                             
                    <input type="submit" name="signup" class="btn btn-primary btn-block" value="SignUp">
                </form>
                <div style="width:100%;height:auto">
                     <img src="pic/banner%20(1).png" style="width:100%;height:auto;" alt="userbanner">
                        </div>
            </div>
      </div>
        </div>
  <div class="w3-col m4 w3-white" style="padding:10px;box-shadow:1px 1px 1px 1px gray">
        <div>
      <img src="pic/hire-developer.png" style="width:100%;height:auto">
      </div>
      <div style="width:100%;height:auto;margin-top:10px;box-shadow:1px 1px 1px 1px gray">
          <i class="noticenew"></i>
      <h3 style="background-color:#30C2CF;text-align:center;font-weight:bold;box-shadow:1px 1px 1px 1px gray;margin-top:0px">Notice</h3>
          <div style="width:25%;height:auto;">
          <img src="pic/notice.png" style="width:100%;height:auto">
          </div>
          <div style="width:75%;height:auto;margin-left:25%;margin-top:-86px">
          <marquee direction=up style="marquee-speed:2;" onmouseover="this.stop();" onmouseout="this.start();">
          <p><i class="fa fa-arrow-circle-o-right" style="font-size:px;color:red"></i> Only for IT Software Developers</p>
              <p><i class="fa fa-arrow-circle-o-right" style="font-size:px;color:red"></i> Chat with Software developers</p>
              <p><i class="fa fa-arrow-circle-o-right" style="font-size:px;color:red"></i> Share Your Knlowladge with us</p>
              <p><i class="fa fa-arrow-circle-o-right" style="font-size:px;color:red"></i> For new updates be connected</p>
          </marquee>
              </div>
      </div>
        </div>
</div><br>
            <div class="w3-row">
  <div class="w3-col w3-grey" style="box-shadow:1px 1px 1px 1px gray">
                <div style="width:12%;height:100px;float:left;background-color:white">
               <img src="pic/ss_j.jpg" style="width:100%;height:100px">    
      </div>
      <div style="margin-left:18%;margin-top:10px">
      <ul id="menu">
          <li><a href="index.php"><img src="pic/home%20button.gif" style="width:100px;height:auto" alt="home"></a></li>
            <li><a href="contactus.php"><img src="pic/contactus%20button.png" style="width:100px;height:auto" alt="contactus"></a></li>
          </ul>
      </div>
       <div style="float:right;margin-top:-58px">
        <ul id="menu">
            <li><b style="color:white">STAY CONNECTED&nbsp;</b></li>
            <li><a href="#"><img src="pic/f.png" style="width:80px;height:auto" alt="facebook" title="facebook"></a></li>
             <li><a href="#"><img src="pic/f%20-%20Copy%20(2)%20copy.png" style="width:80px;height:auto" alt="google+" title="google+"></a></li>
             <li><a href="#"><img src="pic/t.png" style="width:80px;height:auto" alt="twitter" title="twitter"></a></li>
             <li><a href="#"><img src="pic/i.png" style="width:80px;height:auto" alt="linkdin" title="linkdin"></a></li>
            </ul>
        </div><br>
      <div style="color:white;margin-left:35%;margin-top:30px">
      Copyright&copy;SecureChat services Pvt. Ltd. 2015
          </div>
                </div>
</div>
            </div>
    </body>
</html>