<?php
function __autoload($class)
{include($class.".php");}
if(isset($_POST['login']))
{$run=new classfun();
$run->login();
}
?>
<html>
<head>
<base target="_self">
<title>
E-CON : Login or Sign Up
</title>
<link rel="stylesheet" href="ECONStyle.css">
<link rel="shortcut icon" type="image/x-icon" href="Thumbnails/I-CON.ico" />

 <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>
<body>
<style>
body
{
background-size:cover;
background-image:url("Thumbnails/ECONbg.jpg");
}
</style>

<script>

function changeImageInfo()
{
var image=document.getElementById('Info');
if (image.src.match("Thumbnails/Info1.png"))
   {
   image.src="Thumbnails/Info2.png";
    }
else{
 image.src="Thumbnails/Info1.png";
}
}

function changeImageCreators()
{
var image=document.getElementById('Crtrs');
if (image.src.match("Thumbnails/Creators1.png"))
   {
   image.src="Thumbnails/Creators2.png";
    }
else{
 image.src="Thumbnails/Creators1.png";
}
}

function changeImageCntct()
{
var image=document.getElementById('Cont');
if (image.src.match("Thumbnails/ContactUs1.png"))
   {
   image.src="Thumbnails/ContactUs2.png";
    }
else{
 image.src="Thumbnails/ContactUs1.png";
}
}


</script>

<div class="container">

<div class="header">
<div id="logo">
<img src="Thumbnails/E-CONLogo.gif" height="180px" width="180px"/>
</div>
<div class="ECONttltgl">
<div id="title">
<h1><span style="font-size:110;color:#0059b3;font-family:Agency FB;text-shadow: -8px -4px #99ddff;opacity:0.85;">E-CON</span></h1><br>
</div>
<div id="tagline">
<h2><span></span></h2>
</div>
</div>





<div class="Sidebtn">
<a href="Info.html"><img id="Info"onmouseover="changeImageInfo()" onMouseOut="changeImageInfo()" src="Thumbnails/Info1.png"height="51px" width="51px1px"></a>
&nbsp
<a href="Creators.html"><img id="Crtrs"onmouseover="changeImageCreators()" onMouseOut="changeImageCreators()" src="Thumbnails/Creators1.png" height="54px" width="54px"></a>
&nbsp
<a href="(url)"><img id="Cont" onMouseOver="changeImageCntct()" onMouseOut="changeImageCntct()" src="Thumbnails/ContactUs1.png" height="52px" width="52px"></a>
</div>


</div> <!--header closed here--->


<br><br><br><br><br><br>


<div class="choice">
<div class="login">

<div id="part">
<h3><span style="font-family:Agency FB;font-size:28;color:#663300;">&nbsp&nbspARE YOU ALREADY A PART OF THIS ?</span></h3>
</div>
<div id="loginbtn">
<a class="btn btn-link-1 launch-modal" href="#" data-modal-id="modal-login"><button class="loginbtn"input type="login" name="login" value="login" >LOGIN</button></a>

</div>

</div>

<br><br><br>

<div class="signup">

<div id="jump">
<h3><span style="font-family:Agency FB;font-size:28;color:#4d2600;">DO YOU WANT TO JUMP IN ?&nbsp</span></h3>
</div>
<div id="signupbtn">
<a href ="register.php"> 
<button class="signupbtn"input type="submit" name="signup" value="signup" >SIGN UP</button>
</a>
</div>

</div>
</div>

</div><!---container ends here--->


 <!-- MODAL -->
        <div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true">
        	<div class="modal-dialog">
        		<div class="modal-content">
        			
        			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal">
        					<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
        				</button>
        				<h3 class="modal-title" id="modal-login-label"><span style="font-family:Segoe UI;">Login to E-CON</span></h3>
        				<p>Enter your AKTU Roll Number and Password to Login!</p>
        			</div>
        			
        			<div class="modal-body">
        				
	                    <form role="form" action="" method="post" class="login-form">
	                    	<div class="form-group">
	                    		<label class="sr-only" for="form-username">AKTU</label>
	                        	<input type="text" name="form-username" placeholder="AKTU Enrollment Number..." class="form-username form-control" id="form-username">
	                        </div>
	                        <div class="form-group">
	                        	<label class="sr-only" for="form-password">Password</label>
	                        	<input type="password" name="form-password" placeholder="Password..." class="form-password form-control" id="form-password">
	                        </div>
	                        <button type="submit" class="btn" name="login" value="LOGIN"/>LOGIN</button>
	                    </form>
	                    
        			</div>
        			
        		</div>
        	</div>
        </div>
 <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->
</body>
</html>

