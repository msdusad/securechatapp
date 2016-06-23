Mahender New<?php include('header.php');
include('code/conn.php');
?>
<head>
<style>
    ul#frnds li{display:inline-block;
    margin:5px}
    ul#frnds li a{text-decoration:none;color:black}
    ul#frnds li a:hover{color:blue}
    ul#frnds li a i,b{color:black}
    ul#frnds li div{border-radius:10px 10px 10px 10px;background-color:lavender;}
    ul#frnds li div:hover{background-color:#00CC66;box-shadow:5px 6px 12px grey}
    </style>
    <script>
            function addfriend(first){
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
            document.getElementById(first).innerHTML=res;
            }
          }
        xmlhttp.open("GET","code/add_friend.php?friendid="+first,true);
        xmlhttp.send();
        }
        </script>
</head>
<div class="w3-col m8 w3-" style="padding-left:1px;padding-right:1px;padding-bottom:20px">
    <div class="w3-row" style="background-color:#00CC66">
    <div class="w3-col m6" style="padding-bottom:3px">
        <div style="font-weight:bold;padding-bottom:3px;margin-top:-3px;margin-left:15px">
    <h4 class="btn btn-info"><i class="fa fa-users"></i> All Users</h4>
    </div>
        </div>
        <div class="w3-col m6">
            <div style="padding:3px;margin-top:3px">
        <input type="text" style="width:70%;height:30px" class="" placeholder="Search Friends"><button type="submit" class="btn btn-info btn-sm" style="margin-top:-3px">Search</button>
                </div>
        </div>
    </div>
    
    <div class="w3-row"style="margin-top:10px" >
    <div class="w3-col w3-white" style="border:1px solid lightgray;padding:10px">
        <div style="margin-top:10px;margin-left:-20px">
        <ul id="frnds">
            
            <?php
$curr_user=$_SESSION['username'];
$query=mysql_query("select distinct a.username,a.first_name,a.last_name,a.pic,a.location,b.designation,b.expyear,b.expmonth from user_profile a,professional_detail b,user_friends c where a.username!='$curr_user' && a.username not in (SELECT friend_id FROM `user_friends` where username='$curr_user') && a.username=b.username ; ");

if($query){
    if($query && mysql_num_rows($query)>0){
        while($row=mysql_fetch_array($query)){
        ?>
            
           <li>
                <div style="width:350px;height:auto;padding:5px">
                <span><a href="view_profile.php?viewid=<?php echo $row['username'];?>"><img src="profilephoto/<?php 
            if($row['pic']!=''){
            echo $row['pic'];
            }
            else{
            echo "no_avatar.jpg";
            }
            ?>" class="img-rounded" style="width:35px;height:35px;margin-top:-5px"> <?php echo $row['first_name']." ".$row['last_name'];?></a><button class="btn btn-default btn-sm pull-right" style="margin-top:-3px" value="<?php echo $row['username']  ;?>" onclick="addfriend(this.value)"><i class="fa fa-spinner"></i> <b>Connect</b></button></span><br><br>
                              <?php if($row['designation']!=''){
            echo "<p style='text-align:center'><b> ".$row['designation']."</b></p>";
}
            if($row['expyear']!=''){
                
                if($row['expyear']!='' && $row['expmonth']!=''){
            
            echo " <p style='text-align:center'><b>Experience - ".$row['expyear']." Year ".$row['expmonth']." Month</b></p>";
                }
                
                else{
                echo " <p style='text-align:center'><b>Experience - ".$row['expyear']." Year </b></p>";
                }
            }
            
             if($row['expyear']=='' && $row['expmonth']!=''){
            
            echo " <p style='text-align:center'><b>Experience - ".$row['expmonth']." Month</b></p>";
                
            }
            ?>
                <p id="<?php echo $row['username'];?>"></p>
                    
                </div>
            </li>
              <?php
        }
    }
else{
echo "<b> All Users Are Your Friends Now</b>";
}

}
else{
 echo '<script>alert(" Error In All Member List ! Query'.mysql_error().' ");</script>';

}


?>       
            
            
            </ul>
        </div>
        </div>
    </div>
</div>
<?php include('footer.php');?>
