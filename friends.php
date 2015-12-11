<?php include('header.php');
include('code/conn.php');
?>
<head>
<style>
    ul#frnds li{display:inline-block;
    margin:5px}
    ul#frnds li a{text-decoration:none;color:black}
     ul#frnds li a:hover{color:orangered}
    ul#frnds li a i,b{color:black}
     ul#frnds li div{border-radius:10px 10px 10px 10px;background-color:whitesmoke;}
    ul#frnds li div:hover{box-shadow:2px 3px 6px #75A3FF}
    </style>
</head>
<div class="w3-col m8 w3-" style="padding-left:1px;padding-right:1px;padding-bottom:20px">
    <div class="w3-row" style="background-color:#75A3FF">
    <div class="w3-col m6" style="padding-bottom:3px">
        <div style="font-weight:bold;padding-bottom:3px;margin-top:-3px;margin-left:15px">
    <h4 class="btn btn-warning"><i class="fa fa-users"></i> Friends</h4>
    </div>
        </div>
        <div class="w3-col m6">
            <div style="padding:3px;margin-top:3px">
        <input type="text" style="width:70%;height:30px" class="" placeholder="Search Friends"><button type="submit" class="btn btn-warning btn-sm" style="margin-top:-3px">Search</button>
                </div>
        </div>
    </div>
    
    <div class="w3-row" style="margin-top:10px">
    <div class="w3-col w3-white" style="margin-top:0px;border:1px solid lightgray">
        <div style="margin-top:10px">
        <ul id="frnds">
            <?php

            $curr_user=$_SESSION['username'];
$query=mysql_query("select distinct a.username,a.first_name,a.last_name,a.pic,a.location,b.designation,b.expyear,b.expmonth from user_profile a,professional_detail b,user_friends c where a.username=c.friend_id && b.username= c.friend_id && c.username='$curr_user'; ");

if($query){
    if($query && mysql_num_rows($query)>0){
        while($row=mysql_fetch_array($query)){
            $username=$row['username'];
        ?>
           <li>
                <div style="width:350px;height:auto;padding:5px;border:1px solid lightgrey">
                <span><a href="view_profile.php?viewid=<?php echo $row['username'];?>"><img src="profilephoto/<?php 
            if($row['pic']!=''){
            echo $row['pic'];
            }
            else{
            echo "no_avatar.jpg";
            }
            ?>" class="img-rounded" style="width:35px;height:35px;margin-top:-5px"><b> <?php echo $row['first_name']." ".$row['last_name'];?></b></a>
                    <button onclick="chatboxshow('<?php echo $username;?>')" class="btn btn-default btn-sm pull-right" style="margin-top:-3px"><i class="fa fa-envelope"></i> <b>Chat</b></button>
                    <p style="text-align:center;margin-top:5px;"><?php if($row['designation']!=''){
            echo $row['designation'];
}
            
            if($row['designation']==''){
            echo "Designation : ";
}
?>
                </p>
                    </span>
                </div>
            </li>
               <?php
        }
    }
else{
echo "<b> No User Connected Yet</b>";
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