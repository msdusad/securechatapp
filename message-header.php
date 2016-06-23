<div class="w3-col m8 w3-" style="padding-left:1px;padding-right:1px;padding-bottom:20px">
    <div class="w3-row" style="background-color:indianred">
    <div class="w3-col m6" style="padding-bottom:3px">
        <div style="font-weight:bold;padding-bottom:3px;margin-top:-3px;margin-left:15px">
    <h4 class="btn btn-default"> <?php 
$name="Message Section -> ";
$file = $_SERVER["SCRIPT_NAME"];
$break = Explode('/', $file);
$pfile = $break[count($break) - 1]; 
 if($pfile=='inbox.php'){
 echo "<i class='fa fa-envelope'> </i> ".$name. "Inbox";
 } 

if($pfile=='draft.php'){
 echo "<i class='fa fa-dropbox'> </i> ".$name. "Draft";
 } 

if($pfile=='sent.php'){
 echo "<i class='fa fa-send'> </i> ".$name. "Sent";
 } 
if($pfile=='trash.php'){
 echo "<i class='fa fa-trash'> </i> ".$name. "Trash";
 }
        ?></h4>
    </div>
        </div>
        <div class="w3-col m6">
            <div style="padding:3px;margin-top:3px">
        <input type="text" style="width:70%;height:30px" class="" placeholder="Search Mail"><button type="submit" class="btn btn-default btn-sm" style="margin-top:-3px">Search</button>
                </div>
        </div>
    </div>