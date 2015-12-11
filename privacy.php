<?php include('header.php');
include('code/conn.php');
?>
<div class="w3-col m8 w3-" style="padding-left:1px;padding-right:1px;padding-bottom:20px">
    <div class="w3-row w3-cyan" style="background-color:;">
    <div class="w3-col m6" style="padding-bottom:3px">
        <div style="font-weight:bold;padding-bottom:3px;margin-top:-3px;margin-left:15px">
    <h4 class="btn btn-warning" style="background-color:"><i class="fa fa-lock"></i> Privacy Setting</h4>
    </div>
        </div>
        <div class="w3-col m6">
            <div style="padding:3px;margin-top:3px;position:relative;">
        <input type="text" style="width:70%;height:30px" class="" placeholder="Search Friends"><button type="submit" class="btn btn-warning btn-sm" style="margin-top:-3px;background-color:">Search</button>
                <div style="width:69%;height:200px;background-color:white;border:1px solid lightgray;overflow-y:scroll;position:absolute;display:none">
                
                </div>
                </div>
        </div>
    </div>
    
    <div class="w3-row"style="margin-top:10px" >
    <div class="w3-col w3-white" style="border:1px solid lightgray;padding:0px">
        <?php
if(isset($_GET['messg'])){
?>
        <div class="alert alert-primary">
        <p>Updated Sucessfully</p>
        </div>
        
        <?php

}

?>
        <form action="code/privacy.php" method="post" role="form" style="margin-left:20px;margin-top:20px">
            <b style="font-size:15px">Who Can See Your Email</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select id="pri-email" name="primail" class="btn btn-info" style="cursor:pointer">
            <option value="onlyyou">Only You</option>
            <option value="friends">Friends</option>
            <option value="public">Public  </option>
            </select></h4>
            <hr>
            <b style="font-size:15px">Who Can See Your Contact</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select id="pri-email" name="pricontact" class="btn btn-info" style="cursor:pointer">
            <option value="onlyyou">Only You</option>
            <option value="friends">Friends</option>
            <option value="public">Public  </option>
            </select></h4>
         <hr>
        <b style="font-size:15px">Who Can See Your Full Profile</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select id="pri-email" name="prifullprofile" class="btn btn-info"  style="cursor:pointer">
        
            <option value="friends">Only Friends</option>
            <option value="public">Public  </option>
            </select></h4>
     <hr>
        <b style="font-size:15px">Who Can Send You Mail/Message</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select id="pri-email" name="primessage" class="btn btn-info" style="cursor:pointer">
            
            <option value="friends">Only Friends</option>
            <option value="public">Public  </option>
            </select></h4><br><br>
        <input type="submit" name="privacy_submit" value="Save" class="btn btn-info" style="width:50%;">
 <hr>
            </form>
        </div>
    </div>
</div>
<?php include('footer.php');?>