<?php include('header.php');
include('code/retrived_prsonal_professional.php');

$user=$_SESSION['username'];
$sql=mysql_query("select a.last_login,a.status,a.join_date,b.pic,b.first_name,b.last_name from login a,user_profile b where a.username='$user' and b.username='$user';");
if($sql){
    if($sql && mysql_num_rows($sql) >0){
        if($row=mysql_fetch_array($sql)){
        
            $name=$row['first_name']." ".$row['last_name'];
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
<head>
<script>
      function openWindow(){
document.getElementById("ImageBrowse").click();
}
    
    $(document).ready(function (e) {
    $('#imageUploadForm').on('submit',(function(e) {
        e.preventDefault();
        var formData = new FormData(this);

        $.ajax({
            type:'POST',
            url: $(this).attr('action'),
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){
                console.log("success");
                console.log(data);
                if(jQuery.trim(data)!=''){
                window.reload();
                }
               // $('#covrpic').attr("src",jQuery.trim(data));
            },
            error: function(data){
                console.log("error");
                console.log(data);
            }
        });
    }));

    $("#ImageBrowse").on("change", function() {
        $("#imageUploadForm").submit();
    });
});
    
    
    </script>
</head>
<?php require_once('profile-header.php'); ?>
    
    <div class="w3-row">
    <div class="w3-col">
        <div style="position:;width:100%;height:300px">
        <img src="coverpics/<?php echo $coverimage; ?>" id="covrpic" class="" style="width:100%;height:300px">
            <span class="fa fa-image" onclick='openWindow()' style="margin-left:70%;margin-top:10px;"> Change Cover Photo</span>
            
            <!--cover photo div -->
            <form name="photo" id="imageUploadForm" enctype="multipart/form-data" action="code/coverimage.php" method="post">
        <input type="file" name="coverimage" id="ImageBrowse" style="display:none;" multiple accept='image/*'>
    <input type="submit" name="upload" value="Upload" style="display:none;" />
</form>
            
            <!-- End Here -->
            
            <div style="position:;margin-top:-125px;margin-left:20px">
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
       <br><br> <h4 style="text-align:;font-weight:bold;margin-left:30px;color:gray" class=""><?php echo $name; ?></h4>
         </div>
          <div class="w3-col m6 w3-">
             <br><br> <h4 style="text-align:;font-weight:bold;margin-left:30px;color:gray">Since : <span style="color:darkslateblue"><?php
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
                  </span><a href="edit-profile.php"><i class="fa fa-edit btn btn-default btn-sm pull-right" style="margin-right:10px;margin-top:-5px"></i></a></h4>
         </div>
    </div>
    
    <div class="w3-row" style="margin-top:10px;border:1px solid lightgray">
    <div class="w3-col w3-white">
        <div>
        <h4 style="text-align:center;font-weight:bold;color:#75A3FF"><?php echo $designation;?><a href="edit-profile.php"><i class="fa fa-edit btn btn-default btn-sm pull-right" style="margin-right:10px"></i></a></h4>
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
        <h4 style="text-align:center;font-weight:bold;color:#75A3FF">Personal Details<a href="edit-profile.php"><i class="fa fa-edit btn btn-default btn-sm pull-right" style="margin-right:10px"></i></a></h4>
            <hr>
        </div>
        <div style="margin-left:30px;margin-top:10px">
            <?php
if($email !=''){
            echo '<p style="font-weight:bold;font-size:15px"><i class="fa fa-envelope"></i> <span style="color:darkslateblue">'.$email.'</span></p>';
}
            
    if($contactno !=''){
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