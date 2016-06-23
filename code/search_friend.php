<style>
    ul#frnds li{display:inline-block;
    margin:5px}
    ul#frnds li a{text-decoration:none;color:black}
     ul#frnds li a:hover{color:orangered}
    ul#frnds li a i,b{color:black}
     ul#frnds li div{border-radius:10px 10px 10px 10px;background-color:whitesmoke;}
    ul#frnds li div:hover{box-shadow:2px 3px 6px #75A3FF}
    </style>

<?php
include('conn.php');
session_start();
$frnd=$_REQUEST['friend'];
$result=mysql_query("SELECT distinct a.first_name,a.last_name,a.pic,a.username,b.designation FROM user_profile a,professional_detail b WHERE  a.username=b.username && a.username LIKE '%$frnd%' || a.first_name like '%$frnd%' || a.last_name like '%$frnd%' GROUP BY a.username  ;");
if ($result){
    
  if ($result && mysql_num_rows($result)>0) {
      echo "<ul id='frnds' style='margin-left:-30px;'>";
    while($row = mysql_fetch_array($result)){ 
        $username=$row['username'];
        $first_name=$row['first_name'];
        $last_name=$row['last_name'];  
        $pic=$row['pic'];
        $designation=$row['designation'];
        echo " <a href='view_profile.php?viewid=$username'><li style='width:100%;'><div style=''><img src='profilephoto/$pic' class='img-circle' height='50' width='50'><b> ".$first_name." ".$last_name."</b><br><center>$designation</center><br></div></li></a>";
    }
    echo "</ul>"; 
  }
    else{
    echo "No Match Found";
    }
}
else{
echo mysql_error();
}
        ?>