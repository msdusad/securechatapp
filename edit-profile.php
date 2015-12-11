<?php include('header.php');
include('code/retrived_prsonal_professional.php');
?>
<head>
<script>
//code for number allows only in contact field

$(document).ready(function () {
  //called when key is pressed in textbox
  $("#quantity").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#errmsg").html("Digits Only").show().fadeOut("slow");
               return false;
    }
   });
});
    </script>
<script>
    // code for show uploaded file
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
  };
</script>
<style>
#errmsg
{
color: red;
}
</style>
</head>

<div class="w3-col m8 w3-" style="padding-left:1px;padding-right:1px;padding-bottom:20px">
    <div class="w3-row" style="background-color:#75A3FF">
    <div class="w3-col m6" style="padding-bottom:3px">
        <div style="font-weight:bold;padding-bottom:3px;margin-top:-3px;margin-left:15px">
    <h4 class="btn btn-warning"><i class="fa fa-edit"></i> Edit Profile</h4>
    </div>
        </div>
        <div class="w3-col m6">
            <div style="padding:3px;margin-top:3px">
        <input type="text" style="width:70%;height:30px" class="" placeholder="Search Friends"><button type="submit" class="btn btn-warning btn-sm" style="margin-top:-3px">Search</button>
                </div>
        </div>
    </div>
    
    <div class="w3-row" style="background-color:;margin-top:20px;">
    <div class="w3-col m6 w3-white" style="border-right:2px solid lavender;padding-bottom:10px;border:1px solid lightgray">
        
                 <?php
if(isset($_GET['per_up'])){
?>
         <div class="alert alert-success" style="">
                	<button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>Profile Updated Sucessfully</strong> 
                    
                </div>
         <?php

}
?>
        
        
        
        
       <div style="background-color:#75A3FF;padding:1px">
        <h4 style="margin-left:20px;font-weight:bold;text-align:center;color:white">Personal Details</h4>
        </div>
        <div style="margin-left:20px;margin-top:20px;text-align:">
            <form action="code/update_profile.php" method="post" enctype="multipart/form-data">
        <input type="text" class="form-control" name="firstname" placeholder="First Name" style="width:95%;" value="<?php echo $first_name;?>" required title="What's Your Name"><br>
                 <input type="text" class="form-control" name="lastname" placeholder="Last Name" style="width:95%;" value="<?php echo $last_name;?>"><br>
            <input type="email" class="form-control" name="email" style="width:95%;" placeholder="Email" value="<?php echo $email ;?>" required><br><br>
                <b>Date of Birth</b>              
<select name="day" class="btn btn-warning" style="cursor:pointer">
               <?php
           if($dobday!=''){
          echo " <option>$dobday</option>";
           }
else{
echo '<option value="">Day</option>';
}
           ?>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>
                <select name="month" class="btn btn-warning" style="cursor:pointer">
                   <?php
           if($dobmonth!=''){
          echo " <option>$dobmonth</option>";
           }
else{
echo '<option value="">Month</option>';
}
           ?>
<option >January</option>
<option >February</option>
<option >March</option>
<option >April</option>
<option >May</option>
<option >June</option>
<option >July</option>
<option >August</option>
<option >September</option>
<option >October</option>
<option >November</option>
<option >December</option>
</select>
                   
<select name="year" class="btn btn-warning" style="cursor:pointer">
               <?php
           if($dobyear!=''){
          echo " <option>$dobyear</option>";
           }
else{
echo '<option value="">Year</option>';
}

           ?>
<option value="2009">2009</option>
<option value="2008">2008</option>
<option value="2007">2007</option>
<option value="2006">2006</option>
<option value="2005">2005</option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
<option value="2001">2001</option>
<option value="2000">2000</option>
<option value="1999">1999</option>
<option value="1998">1998</option>
<option value="1997">1997</option>
<option value="1996">1996</option>
<option value="1995">1995</option>
<option value="1994">1994</option>
<option value="1993">1993</option>
<option value="1992">1992</option>
<option value="1991">1991</option>
<option value="1990">1990</option>
<option value="1989">1989</option>
<option value="1988">1988</option>
<option value="1987">1987</option>
<option value="1986">1986</option>
<option value="1985">1985</option>
<option value="1984">1984</option>
<option value="1983">1983</option>
<option value="1982">1982</option>
<option value="1981">1981</option>
<option value="1980">1980</option>
<option value="1979">1979</option>
<option value="1978">1978</option>
<option value="1977">1977</option>
<option value="1976">1976</option>
<option value="1975">1975</option>
<option value="1974">1974</option>
<option value="1973">1973</option>
<option value="1972">1972</option>
<option value="1971">1971</option>
<option value="1970">1970</option>
<option value="1969">1969</option>
<option value="1968">1968</option>
<option value="1967">1967</option>
<option value="1966">1966</option>
<option value="1965">1965</option>
<option value="1964">1964</option>
<option value="1963">1963</option>
<option value="1962">1962</option>
<option value="1961">1961</option>
<option value="1960">1960</option>
<option value="1959">1959</option>
<option value="1958">1958</option>
<option value="1957">1957</option>
<option value="1956">1956</option>
<option value="1955">1955</option>
<option value="1954">1954</option>
<option value="1953">1953</option>
<option value="1952">1952</option>
<option value="1951">1951</option>
<option value="1950">1950</option>
<option value="1949">1949</option>
<option value="1948">1948</option>
<option value="1947">1947</option>
<option value="1946">1946</option>
<option value="1945">1945</option>
<option value="1944">1944</option>
<option value="1943">1943</option>
<option value="1942">1942</option>
<option value="1941">1941</option>
<option value="1940">1940</option>
<option value="1939">1939</option>
<option value="1938">1938</option>
<option value="1937">1937</option>
<option value="1936">1936</option>
<option value="1935">1935</option>
<option value="1934">1934</option>
<option value="1933">1933</option>
<option value="1932">1932</option>
<option value="1931">1931</option>
<option value="1930">1930</option>
<option value="1929">1929</option>
<option value="1928">1928</option>
<option value="1927">1927</option>
<option value="1926">1926</option>
<option value="1925">1925</option>
<option value="1924">1924</option>
<option value="1923">1923</option>
<option value="1922">1922</option>
<option value="1921">1921</option>
<option value="1920">1920</option>
<option value="1919">1919</option>
<option value="1918">1918</option>
<option value="1917">1917</option>
<option value="1916">1916</option>
<option value="1915">1915</option>
<option value="1914">1914</option>
<option value="1913">1913</option>
<option value="1912">1912</option>
<option value="1911">1911</option>
<option value="1910">1910</option>
<option value="1909">1909</option>
    <option value="1908">1908</option>
    <option value="1907">1907</option>
    <option value="1906">1906</option>
    <option value="1905">1905</option>
    <option value="1904">1904</option>
    <option value="1903">1903</option>
    <option value="1902">1902</option>
    <option value="1901">1901</option>
    <option value="1900">1900</option>   
</select><br><br>
                <b>Gender</b>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  <select name="gender" id="gender" class="btn btn-warning" style="cursor:pointer">
                      <?php
           if($gender!=''){
          echo " <option>$gender</option>";
           }
           ?>
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select><br><br>
                <img src="profilephoto/<?php echo $pic;?>" id="output"  alt="No File Selected" class="img-circle" style="margin-left:24%;padding:3px;" height="100" width="100"><br><br>
                
                  <span class="btn btn-default btn-file">
    <input type="file" name="profilepic"  onchange="loadFile(event)" title=" Upload"> 
      <input type="text" name="picsd" value="<?php echo $pic;?>" style="display:none;">
</span><br>
                 
                          <?php
if(isset($_GET['img_error'])){
?>
          <br><div class="alert alert-danger" style="">
                	<button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>Please Upload Image Format File</strong> 
                    
               </div>
         <?php

}
?>
                
                
                
                <br><input type="text" id="quantity" class="form-control" name="contactno" placeholder="Contact No." maxlength="11" min="10" value="<?php echo $contactno;?>" style="width:95%">&nbsp;<span id="errmsg"></span><br>
           <input type="text" class="form-control" name="location" placeholder="Current Location" value="<?php echo $location ;?>" style="width:95%"><br>
            <button type="submit" name="personal" class="btn btn-success" style="width:95%;margin-left:;"><i class="fa fa-upload"></i> Update</button>
                </form>
        </div>
    </div>
         <div class="w3-col m6 w3-white" style="border-left:2px solid lavender;padding-bottom:10px;border:1px solid lightgray">
             
                      <?php
if(isset($_GET['pro_up'])){
?>
         <div class="alert alert-success" style="">
                	<button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>Profile Updated Sucessfully</strong> 
                    
                </div>
         <?php

}
?>
             
             
             <div style="background-color:#75A3FF;padding:1px">
       <h4 style="text-align:center;font-weight:bold;color:white">Professional Details</h4>
                 </div>
             <div style="margin-left:20px;margin-top:20px;text-align:">
             <form action="code/update_profile.php" method="post" enctype="multipart/form-data">
           <input type="text" class="form-control" name="designation" placeholder="Designation" value="<?php echo $designation;?>" required style="width:95%"></span><br>
                 <b><i style="color:red">*</i> Total Experience </b>&nbsp; &nbsp;  <select name="year" class="btn btn-warning" style="cursor:pointer;">
                  <?php
           if($expyear!=''){
          echo " <option>$expyear</option>";
           }
else{
  echo "<option value=''>Years</option>";
}
           ?>
         
           <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
            <option>10</option>
            <option>11</option>
            <option>12</option>
            <option>13</option>
            <option>14</option>
            <option>15</option>
            <option>16</option>
            <option>17</option>
            <option>18</option>
            <option>19</option>
            <option>20</option>
           </select>
                  <select name="month" class="btn btn-warning dropdown-toggle" style="cursor:pointer;">
                          <?php
           if($expmonth!=''){
          echo " <option>$expmonth</option>";
           }
else{
echo "<option value=''>Months</option>";
}
           ?>
               
               <option>1</option>
               <option>2</option>
               <option>3</option>
               <option>4</option>
               <option>5</option>
               <option>6</option>
               <option>7</option>
               <option>8</option>
               <option>9</option>
               <option>10</option>
               <option>11</option>
               <option>12</option>
           </select><br><br>
           <b><i style="color:red">*</i> Key Skills</b><br>
                 <textarea type="text" class="form-control" name="keyskills" style="height:px;width:95%;margin-left:%;" placeholder="Key Skiils" maxlength="300 "><?php echo $keyskills;?></textarea><br>
                       <button type="submit" name="professional" class="btn btn-success" style="width:95%;margin-left:;"><i class="fa fa-upload"></i> Update</button><br>
                 </form>
             </div>
    </div>
    </div>
</div>
<?php include('footer.php');?>