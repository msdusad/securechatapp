<div class="w3-col m8 w3-" style="padding-left:1px;padding-right:1px;padding-bottom:20px">
    <div class="w3-row" style="background-color:#75A3FF">
    <div class="w3-col m6" style="padding-bottom:3px">
        <div style="font-weight:bold;padding-bottom:3px;margin-top:-3px;margin-left:15px">
    <h4 class="btn btn-warning"><i class="fa fa-image"></i> Profile Section -> <?php $file = $_SERVER["SCRIPT_NAME"];
$break = Explode('/', $file);
$pfile = $break[count($break) - 1]; 
 if($pfile=='user-profile.php'){
 echo "Your Profile";
 } 

if($pfile=='edit-profile.php'){
 echo "Edit/Complete Profile";
 } 

if($pfile=='friends.php'){
 echo "Your Friends";
 } 
        ?></h4>
    </div>
        </div>
        <div class="w3-col m6">
            <div style="padding:3px;margin-top:3px;position:relative;">
        <input type="text" style="width:70%;height:30px" class="" placeholder="Search Friends" onkeyup="searchfriend(this.value)"><!--<button type="submit" class="btn btn-warning btn-sm" style="margin-top:-3px">Search</button>-->
                <div id="search_friends" style="width:69%;height:200px;background-color:white;border:1px solid lightgray;overflow-y:scroll;position:absolute;display:none">
               
                </div>
                </div>
        </div>
    </div>