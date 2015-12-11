<!DOCTYPE html>
<html>
    <head>
        <title>aboutus</title>
            <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
          <style>
              .modal-header, h4, .close {
      background-color: #5cb85c;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }
        
        ul#menu li{display:inline}
        ul#menu li a{background-color:plum;
                     color:black;
                     padding:10px 20px;
                    text-decoration:none;
            border-radius:6px 0 6px 0;
            margin-left:0px}
        ul#menu li a:hover{background-color:lightcoral;}
        </style>
        <script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});

$(document).ready(function(){
    $("#signup").click(function(){
        $("#signupform").modal();
    });
});
            
   $(document).ready(function(){
    $("#logsignup").click(function(){
        $("#signupform").modal();
    });
});         
            
            
                </script>
    </head>
    <body>
        <div class="container">
                
            <div style="height:200px;width:99%;background-color:lightcoral;box-shadow:10px 10px 20px lightcoral;position:;color:white">
                <div style="padding:13px;position:relative">
    <ul id="menu" style="margin-left:20%;" >
        <li><a href="#home"><b>HOME</b></a></li>
        <li><a href="#about us"><b>ABOUT US</b></a></li>
        <li><a type="button" id="myBtn"><b>LOGIN</b></a></li>
         <li><a type="button" id="signup" ><b>SIGNUP</b></a></li>
       <li><a href="#contact us"><b>CONTACT US</b></a></li>
        </ul> 
                </div>
                <h1 style="margin-left:18%;text-shadow:2px 2px 4px black"class="glyphicon glyphicon-leaf"><b>HI GUYS READ ABOUT OUR <span style="color:lightblue"><sub>SecureChat</sub></span></b></h1>
  <!-- Trigger the modal with a button -->
  

  <!-- Modal for login  -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" name="username" placeholder="Username">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="text" class="form-control" name="password" placeholder="password">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked><font color="blue">Remember me</font></label>
            </div>
              <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p><a type="button" id="logsignup">Not a member? Sign Up</a></p>
          <p><a>Forgot Password?</a></p>
        </div>
          
      </div>
      
    </div>
  </div> 
              
          <!-- code for signup -->  
                  <div class="modal fade" id="signupform" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> SignUp</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-pencil"></span> Name</label>
              <input type="text" class="form-control" name="first_name" placeholder="Your Name" required>
            </div>
              <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-leaf"></span> EmailId</label>
              <input type="email" class="form-control" name="email" placeholder="Email" required>
            </div>
                          <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" name="username" placeholder="Create Userid" required>
            </div>

            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="text" class="form-control" name="password" placeholder="Password" maxlength="10" minlength="6" required>
            </div>
              <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span>Repeat Password</label>
              <input type="text" class="form-control" name="re-password" placeholder="Re-Enter password" maxlength="10" minlength="6" required>
            </div>
              <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> SignUp</button>
          </form>
            <br><button type="submit" class="btn btn-danger btn-block" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
        </div>

          
        
      </div>
    
    </div>
  </div> 
</div><br>
            <hr>
                            <div style="height:230px;width:40%;border:5px transparent;background-color:Thistle;box-shadow:15px 10px 10px #000000;position:absolute;border-radius:10px 10px 10px 10px;color:white;">
                                <img src="pic/depositphotos_5611685-Girl-chatting.jpg" style="height:200px;width:50%;margin-top:30px;position:absolute">
                                <h3 style="background-color:MediumSlateBlue;margin-top:8px;text-align:center;font-family:courier;position:relative">SecureChat:-  Live Life</h3>
            </div>
            <div class="tile tile-profile" style="height:230px;width:40%;border:5px transparent;background-color:LightSteelBlue;box-shadow:15px 10px 10px #000000;position:absolute;border-radius:10px 10px 10px 10px;color:white;margin-left:43%">
                <img src="pic/image12.jpg" style="height:200px;width:50%;margin-top:30px;position:absolute">
                <h3 style="background-color:Tomato;margin-top:8px;position:relative;text-align:center;font-family:courier">-:Users:-</h3>
            </div>
        </div>
        
    </body>
    
</html>