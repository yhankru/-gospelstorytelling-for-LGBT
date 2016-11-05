<!DOCTYPE html>
	<html lang="en">
		<head>
				<meta charset="utf-8">
				<meta http-equiv="X-UA-Compatible" content="IE=edge">
				<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link href="img/bb.png" rel="shortcut icon">
  <link href="css/style.css" rel="stylesheet">
  <script src="js/jquery.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
 <script src="js/custom.js"></script>
 <script src="http://maps.googleapis.com/maps/api/js"></script>
 <script>
var myCenter = new google.maps.LatLng( 14.616524, 121.082827);

function initialize() {
var mapProp = {
center:myCenter,
zoom:12,
scrollwheel:false,
draggable:false,
mapTypeId:google.maps.MapTypeId.HYBRID
};

var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);


var marker = new google.maps.Marker({
position:myCenter,
});

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
<style>

    #brand-image{
	height: 25px;
}
   .navbar {
     background-image: linear-gradient(#54B4EB, #2FA4E7 60%, #1D9CE5);
     background-repeat: no-repeat;
     border-bottom: 1px solid #000;
     box-shadow: 0px 1px 10px rgba(0, 0, 0, 0.1);
     border-radius: 0px;
}

.navbar-default {
     background-color: #2FA4E7;
     border-color: #fff;
}

.navbar-default .navbar-brand,
.navbar-default .navbar-brand:hover,
.navbar-default .navbar-brand:focus ,
.navbar-default .navbar-nav > li > a {
     color: #FFF;
}

.navbar-default .navbar-nav > li > a:hover,
.navbar-default .navbar-nav > li > a:focus {
     color: #FFF;
     background-color: #000;
}

.navbar-default .navbar-toggle:hover,
.navbar-default .navbar-toggle:focus {
    background-color: #178ACC;
}

.navbar-default .navbar-toggle {
    border-color: #178ACC;
}

.navbar-default .navbar-toggle .icon-bar {
    background-color: #FFF;
}
   @import url(http://fonts.googleapis.com/css?family=Montserrat:400,700);

body { 
    background: #000 url("http://localhost/bootstrap/img/bgbg.jpg") ;
    }
form { max-width:420px; margin:50px auto; }

.feedback-input {
  color:white;
  font-family: Helvetica, Arial, sans-serif;
  font-weight:500;
  font-size: 18px;
  border-radius: 5px;
  line-height: 22px;
  background-color: transparent;
  border:2px solid #CC6666;
  transition: all 0.3s;
  padding: 13px;
  margin-bottom: 15px;
  width:100%;
  box-sizing: border-box;
  outline:0;
}

.feedback-input:focus { border:2px solid #CC4949; }

textarea {
  height: 150px;
  line-height: 150%;
  resize:vertical;
}

[type="submit"] {
  font-family: 'Montserrat', Arial, Helvetica, sans-serif;
  width: 100%;
  background:#CC6666;
  border-radius:5px;
  border:0;
  cursor:pointer;
  color:white;
  font-size:24px;
  padding-top:10px;
  padding-bottom:10px;
  transition: all 0.3s;
  margin-top:-4px;
  font-weight:700;
}
[type="submit"]:hover { background:#CC4949; 
    }
  .social-icons{
	display:block;
	text-align: center;
	margin: 15px;
    }
    
</style>
            
<body>

    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
      <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
	  <a class="navbar-brand" href="#img/logo.png">
		<img id="brand-image" alt="Website Logo" src="img/logo.png" />
	  </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav nav-left">
        <li><a href="septic.php">Home</a></li>
        <li><a href="about.php">About Us</a></li>
		<li><a href="services.php">Services</a></li>
		<li><a href="#Contact">Contact</a></li>
        </ul>
          <ul class ="nav navbar-nav navbar-right">
        <li><a href="log-in.php">Log-in</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
        </ul>
              
          
      </div></div>
  </nav>  
    
    
    <div id="googleMap" style="height:500px;width:65%;" class="container-fluid text-center"></div>
<div>
<form>      
  <input name="name" type="text" class="feedback-input" placeholder="Name" />   
  <input name="email" type="text" class="feedback-input" placeholder="Email" />
  <textarea name="text" class="feedback-input" placeholder="Comment"></textarea>
  <input type="submit" value="SUBMIT"/>
</form>
            <div class="container-fluid footer2">
			<div class="social">
				<div class="social-icons">
				<a href="#"><img src="social/facebook.png" alt="facebook icon" > </a>
				<a href="#"><img src="social/Twitter.png" alt="twitter icon"> </a>
				<a href="#"><img src="social/Google-plus.png" alt="Google-plus icon" > </a>
				</div>
			<p class="text-center"> We are <strong><em class="titleOrange">Septic Boys</em></strong>, offering our services.</p>
			<p class="text-center"> &copy 2016 Septic Boys, ALL RIGHTS RESERVED. </p><br>
			</div>
			
		</div>
</body>
</html>