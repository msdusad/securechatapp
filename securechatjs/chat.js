function handleKeyPress(e){
 var key=e.keyCode || e.which;
  if (key==13){
     forchat();
  }
}
var t = setInterval(function(){get_chat_msg()},5000);
      
var oxmlHttp;
var oxmlHttpSend;
      
function get_chat_msg()
{

    if(typeof XMLHttpRequest != "undefined")
    {
        oxmlHttp = new XMLHttpRequest();
    }
    else if (window.ActiveXObject)
    {
       oxmlHttp = new ActiveXObject("Microsoft.XMLHttp");
    }
    if(oxmlHttp == null)
    {
        alert("Browser does not support XML Http Request");
       return;
    }
    
    oxmlHttp.onreadystatechange = get_chat_msg_result;
    oxmlHttp.open("GET","code/chat_recv_ajax.php",true);
    oxmlHttp.send(null);
}
     
function get_chat_msg_result()
{
    if(oxmlHttp.readyState==4 || oxmlHttp.readyState=="complete")
    {
        if (document.getElementById("show_chat") != null)
        {
            document.getElementById("show_chat").innerHTML =  oxmlHttp.responseText;
            oxmlHttp = null;
        }
       // var scrollDiv = document.getElementById("show_chat");
      //  scrollDiv.scrollTop = scrollDiv.scrollHeight;
    }
}


        function forchat(){
        
         if(typeof XMLHttpRequest != "undefined")
    {
        oxmlHttpSend = new XMLHttpRequest();
    }
    else if (window.ActiveXObject)
    {
       oxmlHttpSend = new ActiveXObject("Microsoft.XMLHttp");
    }
    if(oxmlHttpSend == null)
    {
       alert("Browser does not support XML Http Request");
       return;
    }
    
    var url = "code/chat_send_ajax.php";
    var strmsg="";
     
    if (document.getElementById("txtmsg").value!= '')
    {
        strmsg = document.getElementById("txtmsg").value;
        document.getElementById("txtmsg").value = "";
        
         url += "?msg=" + strmsg ;
    oxmlHttpSend.open("GET",url,true);
    
    oxmlHttpSend.send(null);
        
    }  
        }

$("input").keypress(function(event) {
    if (event.which == 13) {
        event.preventDefault();
        $("form").submit();
    }
});