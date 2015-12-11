<?php include('header.php');
include('code/conn.php');
?>
    
    <script type="text/javascript">
        
          //code for to pass check
        
        
        function oldcheck(first){		
		
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
            document.getElementById("dbpassmatch").innerHTML=res;
            }
          }
        xmlhttp.open("GET","code/oldpass.php?first="+first,true);
        xmlhttp.send();
        }
        
          
        
        //end hear
    
      function rechecking(){
		
		var new_pass = document.change_password.new_password.value;
       var re_new_pass = document.change_password.re_password.value;
		var first = document.change_password.old_password.value;
            if (re_new_pass != new_pass) {
                //alert(" Re-Password Not Match");
				document.getElementById("PassError").style.display="block";
                re_new_pass.focus;
                return false;
            }
          else{
		document.getElementById('PassError').style.display="none";
              return true;
          }
      }
</script>

<div class="w3-col m8 w3-" style="padding-left:1px;padding-right:1px;padding-bottom:20px">
    <div class="w3-row w3-blue-grey" style="background-color:;">
    <div class="w3-col m6" style="padding-bottom:3px">
        <div style="font-weight:bold;padding-bottom:3px;margin-top:-3px;margin-left:15px">
    <h4 class="btn btn" style="background-color:orangered"><i class="fa fa-wrench"></i> Change Password</h4>
    </div>
        </div>
      <!--  <div class="w3-col m6">
            <div style="padding:3px;margin-top:3px">
        <input type="text" style="width:70%;height:30px" class="" placeholder="Search Friends"><button type="submit" class="btn btn- btn-sm" style="margin-top:-3px;background-color:orangered">Search</button>
                </div>
        </div> -->
    </div>
    
    <div class="w3-row"style="margin-top:10px" >
    <div class="w3-col w3-white" style="border:1px solid lightgray;padding:10px">
           <?php
if(isset($_GET['sucess'])){
    if($_GET['sucess']=='yes'){
?>
		<div class="alert alert-sucess"  id="pass-sucess">
  <strong>Password Updated Sucessfully</strong> </div>
     <?php
}
if($_GET['sucess']=='no'){
?>
		<div class="alert alert-sucess"  id="pass-sucess">
  <strong>Old Password Not Match</strong> </div>
     <?php
}
}
    ?>
        <div style="margin-left:20px;margin-top:20px">
        <form role="form" method="post" action="code/pass_update.php"  name="change_password" onsubmit="return  rechecking();">
            <input type="password" class="form-control" placeholder="Old Password" style="width:50%" name="old_password" id="old_password" onchange="oldcheck(this.value)" required><strong id="dbpassmatch" style="margin-left:0%;color:red;"></strong><br><br>
            <input type="password" class="form-control" placeholder="New Password" style="width:50%" name="new_password" id="new_password"  maxlength="10" minlength="6" required><br>
            <input type="password" class="form-control" placeholder="Confirm Password" name="re_password" id="re_password" style="width:50%"  maxlength="10" minlength="6" required><br>
            <div class="alert alert-warning" style="display:none;width:50%;" id="PassError">
  <strong>Re-Enter Password Not Match</strong> </div>
            <button  type="submit" class="btn btn-" name="password_update" style="width:50%;background-color:orangered;color:white"><i class="fa fa-upload"></i> Update Password</button>
            </form>
        </div>
        </div>
    </div>
</div>
<?php include('footer.php');?>