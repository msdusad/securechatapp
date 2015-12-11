<?php
include('conn.php');
$user=$_SESSION['username'];
$query=mysql_query("select * from user_profile a,professional_detail b where a.username='$user' && b.username='$user'");

if($query){
    if($query && mysql_num_rows($query)>0){
    if($row=mysql_fetch_array($query)){
    
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
    }
    
    }
    else{
    echo "Number of Row Not Grater then Zero".mysql_error();
    }

}

else{

    echo "Error in personal and professional data fetch query".mysql_error();
}
?>