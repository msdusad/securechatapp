<!-- code for Search Friend -->
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

<!-- End Hear -->

<?php include('header.php');
include('code/conn.php');
$viewid=$_GET['viewid'];

$user=$_SESSION['username'];
//  personal professional fetched
//$_SESSION['chatuser']=$_GET['viewid'];
$query=mysql_query("select * from user_profile a,professional_detail b,privacy c where a.username='$viewid' && b.username='$viewid'");

if($query){
    if($query && mysql_num_rows($query)>0){
    if($row=mysql_fetch_array($query)){
        
         $username=$row['username'];
        $first_name=$row['first_name'];
        $last_name=$row['last_name'];
        $email=$row['email'];
        $dobday=$row['dobday'];
        $dobmonth=$row['dobmonth'];
        $dobyear=$row['dobyear'];
        $gender=$row['gender'];
        $pic=$row['pic'];
        $contactno=$row['contactno'];
        $location=$row['location'];
        $designation=$row['designation'];
        $expmonth=$row['expmonth'];
        $expyear=$row['expyear'];
        $keyskills=$row['keyskills'];
         $pri_email=$row['email_privacy'];
     $pri_contact=$row['contact_privacy'];
     $pri_fullpro=$row['full_profile_privacy'];
     $pri_message=$row['message_privacy'];
    }
    
    }
    else{
    echo "Number of Row Not Grater then Zero".mysql_error();
    }

}

else{

    echo "Error in personal and professional data fetch query".mysql_error();
}
//end hear

?>

<div class="w3-col m8 w3-" style="padding-left:1px;padding-right:1px;padding-bottom:20px">
    <div class="w3-row" style="background-color:#75A3FF">
    <div class="w3-col m6" style="padding-bottom:3px">
        <div style="font-weight:bold;padding-bottom:3px;margin-top:-3px;margin-left:15px">
          <h4 class="btn btn-warning" onclick="chatboxshow('<?php echo $viewid;?>')"><i class="fa fa-wechat"></i> Start Chat</h4>
   <a href="compose.php?sendtouser=<?php echo $viewid;?>" > <h4 class="btn btn-warning" ><i class="fa fa-envelope"></i> Send Mail</h4></a>
    </div>
        </div>
        <div class="w3-col m6">
            <div style="padding:3px;margin-top:3px;position:relative;">
        <input type="text" style="width:70%;height:30px" class="" placeholder="Search Friends" onkeypress="searchfriend(this.value)"><button type="submit" class="btn btn-warning btn-sm" style="margin-top:-3px" onkeypress="searchfriend(this.value)">Search</button>
                <div id="search_friends"  style="width:69%;height:auto;background-color:white;border:1px solid lightgray;overflow-y:scroll;position:absolute;display:block">
               
                </div>
                </div>
        </div>
    </div>
    
    <div class="w3-row">
    <div class="w3-col">
        <div style="position:;width:100%;height:300px">
        <img src="securechat_images/3.png" class="" style="width:100%;height:300px">
            <div style="position:;margin-top:-125px;margin-left:20px">
                
                 <?php
$sql=mysql_query("select a.last_login,a.status,a.join_date,b.pic,b.first_name,b.last_name from login a,user_profile b  where a.username='$viewid' and b.username='$viewid';");
if($sql){
    if($sql && mysql_num_rows($sql) >0){
        if($row=mysql_fetch_array($sql)){
        
            $name=ucwords($row['first_name']." ".$row['last_name']);
            $lastlogin=$row['last_login'];
            $status=$row['status'];
            $joindate=$row['join_date'];
            $pic=$row['pic'];
            $date=date_create($lastlogin);
          $lastlog=date_format($date,"l , M d , h:i A");
           // join date format
        $date1 = $joindate;
$date2 = date('y-m-d h:i:s');

$diff = abs(strtotime($date2) - strtotime($date1));

$years = floor($diff / (365*60*60*24));
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));


        }
    
    }
else{
echo "No Record Fetched".mysql_error();
}
}
else{
echo "Error in query".mysql_error();
}

?>
                
                
        <img src="profilephoto/<?php 
if($pic!=''){
            echo $pic;
            }
            else{
            echo "no_avatar.jpg";
            }       
            ?>" class="img-rounded" style="width:150px;height:150px">
        </div>
        </div>
        </div>
    </div>
    
     <div class="w3-row" style="margin-top:20px;background-color:white;border:1px solid lightgray">
    <div class="w3-col m6 w3-">
        <h4 style="text-align:;font-weight:bold;margin-left:30px;color:gray" class=""><?php echo $name; ?></h4>
        
         </div>
          <div class="w3-col m6 w3-">
              <h4 style="text-align:;font-weight:bold;margin-left:30px;color:gray">Since : <span style="color:gray"><?php
if($years>0){
echo $years."  Years ".$months."  Months ".$days."  Days";
}
if($years==0 && $months>0){
echo $months."  Months ".$days."  Days";
}
if($years==0 && $months==0 && $days>0){
echo $days."  Days";
}
if($days<=0){
echo " Recently Joined";
}      
      ?>
                  </span></h4>
         </div>
    </div>
    
    <div class="w3-row" style="margin-top:10px;border:1px solid lightgray">
    <div class="w3-col w3-white">
        <div>
        <h4 style="text-align:center;font-weight:bold;color:#75A3FF"><?php echo $designation;?></h4>
            <hr>
        </div>
        <div style="margin-left:30px">
        <p style="font-weight:bold;font-size:15px"><?php 
if($expyear !='' || $expmonth !='' ){
                   if($expyear>0){
                       echo "Experience :<span style='color:darkslateblue'> ".$expyear." Year and ".$expmonth." Months</span> ";
                   }
               if($expyear<=0 && $expmonth>0){
                   echo "Experience : <span style='color:darkslateblue'>".$expmonth." Months </span>";
               
               }
}
                   
                   ?></p>
            <p style="font-weight:bold;font-size:15px">Skills : <span style="color:darkslateblue"><?php 
if($keyskills !=''){
echo $keyskills;
}
?>
</span></p>
        </div>
        <hr>
        </div>
    </div>
    
    <div class="w3-row" style="margin-top:10px;background-color:white;border:1px solid lightgray">
    <div class="w3-col">
        <div>
        <h4 style="text-align:center;font-weight:bold;color:#75A3FF">Personal Details</h4>
            <hr>
        </div>
        <div style="margin-left:30px;margin-top:10px">
            <?php
if($email !='' && $pri_email=='friends'){
            echo '<p style="font-weight:bold;font-size:15px"><i class="fa fa-envelope"></i> <span style="color:darkslateblue">'.$email.'</span></p>';
}
            
    if($contactno !='' && $pri_contact=='friends'){
           echo '<p style="font-weight:bold;font-size:15px"><i class="fa fa-mobile"></i> <span style="color:darkslateblue"> '.$contactno.'</span></p>';
    }
   if($dobday !='' && $dobmonth !='' && $dobyear !=''){
    $dobf=$dobday."-".$dobmonth."-".$dobyear;
    $dobdate=date_create($dobf);
          $seedob=date_format($dobdate,"d / M / Y ");
            echo '<p style="font-weight:bold;font-size:15px"><i class="fa fa-gift"></i> <span style="color:darkslateblue">'.$seedob.'</span></p>';
    }
              if($location !=''){
           echo '<p style="font-weight:bold;font-size:15px"><i class="fa fa-map-marker"></i> <span style="color:darkslateblue">'.$location.'</span></p>';
            
            }
?>
        </div> 
        <hr>
        </div>
    </div>
</div>
<?php include('footer.php');?>