<?php
include('conn.php');
session_start();
$frnd=$_REQUEST['friend'];
$result=mysql_query("SELECT a.first_name,a.last_name FROM user_profile a WHERE username LIKE '%$frnd%' || a.first_name like '%$frnd%' || a.last_name like '%$frnd%';");
if ($result){
    
  if ($result && mysql_num_rows($result)>0) {   
    while($row = mysql_fetch_array($result)){ 
        $first_name=$row['first_name'];
        $last_name=$row['last_name'];    
        echo $first_name." ".$last_name."<br>";
    }
     
  }
    else{
    echo "No Match Found";
    }
}
        ?>