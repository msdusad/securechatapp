<?php include('header.php');
include('code/conn.php');
?>
<head>
    <script>
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
        xmlhttp.open("GET","code/idcheck.php?id="+first,true);
        xmlhttp.send();
        }
    
    // code for file upload progress bar
/* Script written by Adam Khoury @ DevelopPHP.com */
/* Video Tutorial: http://www.youtube.com/watch?v=EraNFJiY0Eg */
function _(el){
	return document.getElementById(el);
}
function uploadFile(){
    
    document.getElementById("fileprogress").style.display="block";
	var file = _("attachment").files[0];
	// alert(file.name+" | "+file.size+" | "+file.type);
	var formdata = new FormData();
	formdata.append("attachment", file);
	var ajax = new XMLHttpRequest();
	ajax.upload.addEventListener("progress", progressHandler, false);
	ajax.addEventListener("load", completeHandler, false);
	ajax.addEventListener("error", errorHandler, false);
	ajax.addEventListener("abort", abortHandler, false);
	ajax.open("POST", "code/file_lod.php");
	ajax.send(formdata);
}
function progressHandler(event){
	//_("loaded_n_total").innerHTML = "Uploaded "+event.loaded+" bytes of "+event.total;
	var percent = (event.loaded / event.total) * 100;
	_("progressBar").value = Math.round(percent);
	_("status").innerHTML = Math.round(percent)+"% uploaded... please wait";
}
function completeHandler(event){
	_("status").innerHTML = event.target.responseText;
	_("progressBar").value = 0;
}
function errorHandler(event){
	_("status").innerHTML = "Upload Failed";
}
function abortHandler(event){
	_("status").innerHTML = "Upload Aborted";
}

    
function send(){
var sendval = document.send_message.to.value;
            
            if (sendval == '') {
                 document.getElementById("toalert").style.display ="block";
                return false;
            }
    else{
        document.getElementById("toalert").style.display ="none";
    return true;
    }

}

</script>

</head>
<div class="w3-col m8 w3-" style="padding-left:1px;padding-right:1px;padding-bottom:20px">
    <div class="w3-row" style="background-color:indianred">
    <div class="w3-col m6" style="padding-bottom:3px">
        <div style="font-weight:bold;padding-bottom:3px;margin-top:-3px;margin-left:15px">
    <h4 class="btn btn-default"><i class="fa fa-pencil"></i> Compose Message</h4>
    </div>
        </div>
      <!--  <div class="w3-col m6">
            <div style="padding:3px;margin-top:3px">
        <input type="text" style="width:70%;height:30px" class="" placeholder="Search Mail"><button type="submit" class="btn btn-default btn-sm" style="margin-top:-3px">Search</button>
                </div>
        </div>-->
    </div>
    
    <div class="w3-row">
    <div class="w3-col w3-white" style="text-align:;padding-bottom:10px;border:1px solid lightgray">
        <div style="margin-top:20px;margin-left:50px">
            
                <!-- for message send sucess show -->
     <?php
if(isset($_SESSION['sucess_sending'])){

                       echo '<br><div id="sent_sucess" class="alert alert-success" style="width:50%;margin-left:;">
                  <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>'; 

    if($_SESSION['sucess_sending']=='Draft'){

        echo "Message Saved Sucessfully";
    }
    if($_SESSION['sucess_sending']=='Inbox'){
        echo "Message Sent Sucessfully";
    }
    
        echo '</strong> </div>';
              
                                      }
unset($_SESSION['sucess_sending']);
?>
     <!-- end hear -->
            
            
        <form action="code/send_message.php" name="send_message" method="post" enctype="multipart/form-data">
            <b>To</b> <input type="text" class="form-control" name="to" placeholder="To (only securechat userid)" maxlength="50" onkeyup="idcheck(this.value)"  value="<?php if(isset($_GET['sendtouser'])){

echo $_GET['sendtouser'];
}?>" style="width:50%" placeholder="To Only Securechat Id" > <strong id="iderror" style="color:red;"></strong> <br>
            
            <div id="toalert" class="alert alert-success" style="width:50%;display:none">
                	<button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>Fill To Field</strong>    
                </div>
            
            
            <b>From</b> <input type="text" class="form-control" name="from" value="<?php echo $_SESSION['username'];?>"  style="width:50%" readonly><br>
            <b>Subject</b> <input type="text" class="form-control"  name="subject" placeholder="Subject" maxlength="300" style="width:50%" placeholder="Subject" ><br>
            <b>Message</b> <textarea type="text" class="form-control" name="message" placeholder="Message" maxlength="2000" style="width:50%"  rows="5" ></textarea><br>
            <span><b>Attach File </b></span>&nbsp; &nbsp; <input type="file" name="attachment" class="btn btn-warning" id="attachment"  onchange="uploadFile()" style="width:50%"><br>
                        <div id="fileprogress" style="display:none">
  <progress  id="progressBar" value="0" max="100" style="width:300px;"></progress>
  <p id="status"></p>
  <p id="loaded_n_total"></p>
                        </div>
             <input type="submit" class="btn btn-danger" value="Send" name="send_message" style="width:50%" onclick="return send()"><br>
    <input type="submit" class="btn btn-danger" value="Save Draft" name="save_draft" style="width:50%;"><br>
            </form>
        </div>
        </div>
    </div>
</div>
<?php include('footer.php');?>