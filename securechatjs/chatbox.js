function chatboxminimize(){
document.getElementById("chatbox_full").style.display="none";
document.getElementById("chatbox_mini").style.display="block";

}
    
    function chatboxshow(sendtoid){
 document.getElementById("chatbox_full").style.display="block";
document.getElementById("chatbox_mini").style.display="none";
        
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
            document.getElementById("chat_name").innerHTML=res;
            }
          }
        xmlhttp.open("GET","code/set_chat_user.php?chatuserid="+sendtoid,true);
        xmlhttp.send();
       
        
}
    
    function chatboxremove(){
document.getElementById("chatbox_full").style.display="none";
document.getElementById("chatbox_mini").style.display="none";

}