<?php include('header.php');
include('code/conn.php');
?>
<div class="w3-col m8 w3-" style="padding-left:1px;padding-right:1px;padding-bottom:20px">
    <div class="w3-row" style="background-color:darkslategray">
    <div class="w3-col m6" style="padding-bottom:3px">
        <div style="font-weight:bold;padding-bottom:3px;margin-top:-3px;margin-left:15px">
    <h4 class="btn btn-" style="background-color:orange;color:white"><i class="fa fa-envelope"></i> News</h4>
    </div>
        </div>
        <div class="w3-col m6">
            <div style="padding:3px;margin-top:3px">
        <input type="text" style="width:70%;height:30px" class="" placeholder="Search Friends"><button type="submit" class="btn btn-default btn-sm" style="margin-top:-3px">SEARCH</button>
                </div>
        </div>
    </div>
    
    <div class="w3-row"style="margin-top:10px" >
    <div class="w3-col w3-white" style="border:1px solid lightgray;padding:10px;text-align:center">
        <div>
            <form role="form">
        <a href="" style="text-decoration:none"><i class="fa fa-pencil btn btn-primary btn-xs"></i> <b style="color:black"> Update News</b></a> <span style="color:lightgray">|</span> <a href="" style="text-decoration:none"><i class="fa fa-image btn btn-warning btn-xs"></i> <b style="color:black"> Photo/Video</b></a>
            <hr>
                <textarea type="text" class="form-control" placeholder="News"></textarea><br>
                <select class="btn btn-default btn-sm">
                <option>Public</option>
                    <option>Friends</option>
                    <option>Only Me</option>
                </select> &nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-primary btn-sm">Share</button>
            </form>
        </div>
        </div>
    </div>
    
    
    <div class="w3-row" style="margin-top:10px">
    <div class="w3-col m2 w3-" style="padding:10px;">
    
        </div>
         <div class="w3-col m8 w3-white"  style="border:1px solid lightgray;padding:10px;margin-left:px">
             <div>
        <a href="" style="text-decoration:none"><img src="securechat_images/2015-10-23%2022.44.012.jpg" class="img-circle" style="width:50px;height:auto"> <b>Arun kumar</b></a>
                 </div>
             <hr>
             <div style="">
             <img src="securechat_images/3.png" style="width:100%;height:auto">
             </div>
             <hr>
        </div>
         <div class="w3-col m2 w3-" style="padding:10px">
        
        </div>
    </div>
</div>
<?php include('footer.php');?>