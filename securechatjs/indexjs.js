
        var specialKeys = new Array();
        specialKeys.push(8); //Backspace
        specialKeys.push(9); //Tab
        specialKeys.push(46); //Delete
        specialKeys.push(36); //Home
        specialKeys.push(35); //End
        specialKeys.push(37); //Left
        specialKeys.push(39); //Right
        function IsAlphaNumeric(e) {
            var keyCode = e.keyCode == 0 ? e.charCode : e.keyCode;
            var ret = ((keyCode >= 48 && keyCode <= 57) || (keyCode >= 65 && keyCode <= 90) || (keyCode >= 97 && keyCode <= 122) || (specialKeys.indexOf(e.keyCode) != -1 && e.charCode != e.keyCode));
            document.getElementById("error").style.display = ret ? "none" : "inline";
            return ret;
        }
   
    
    function leave_message(){
    
    document.getElementById("short").style.display="none";
    document.getElementById("full").style.display="block";
    
    }
    
   
        
          //code for to id check
    
       function idcheck(first){ 

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
            document.getElementById("iderror").innerHTML=res;
            }
          }
        xmlhttp.open("GET","code/signup_idcheck.php?id="+first,true);
        xmlhttp.send();
        }
        
        
        
        
        // code for paassword match signup
        
        function passwordcheck(){
            var fpassword = document.checksignup.password.value;
            var conform_password = document.checksignup.repassword.value;
            
            if (conform_password != fpassword) {
                document.getElementById("pass_error").style.display="block";
                 document.getElementById("cofpass_error").innerHTML ="Re-Enter Password Not Match";
                return false;
            }
            else{
             document.getElementById("cofpass_error").style.display="none";
                return true;
            }
        }

//code for  Leave Message 
$(document).ready(function(){
     // $('#leave_form').validate(); 
$("#leave_submit").click(function(){
 sendername=$("#leave_name").val();
    senderemail=$("#leave_email").val();
    sendermessage=$("#leave_message").val();
    if(sendername==''){
        	 $("#suss_leave").html("Please fill Your Name").css("color","red");
        //alert('Please fill Your Name');
    return false;
    }
     if(senderemail==''){
         $("#suss_leave").html("Please Enter Your Email/Mobile").css("color","red");
        // alert('Please fill Your Email/Mobile');
    return false;
    }
     if(sendermessage==''){
          $("#suss_leave").html("Please Fill Your Message").css("color","red");
        // alert('Please fill Message');
    return false;
    }
    $.ajax({
    type: "POST",
        url: "code/leave_message.php",
        data: "sdname="+sendername+"&sdemail="+senderemail+"&sdmessage="+sendermessage,
        success: function(html){
       	if(jQuery.trim(html)=='true'){
			 $("#suss_leave").html("Thanks For Feedback").css("color","black");
			
			}
			else {
			
			 $("#suss_leave").html("Feedback Not Sent");
        
			} 
        }
    });
return false;
});
});






   