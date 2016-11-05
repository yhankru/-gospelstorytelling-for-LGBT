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
 <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>
 <script>
var myCenter = new google.maps.LatLng( 6.7571, 125.3531);

function initialize() {
var mapProp = {
center:myCenter,
zoom:12,
scrollwheel:false,
draggable:false,
mapTypeId:google.maps.MapTypeId.ROADMAP
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
 
	/* Add a dark background color with a little bit see-through */ 
.navbar {
    margin-bottom: 0;
    background-color: red;
    border: 0;
    font-size: 14px !important;
    letter-spacing: 4px;
    opacity:0.7;
}

/* Add a gray color to all navbar links */
.navbar li a, .navbar .navbar-brand { 
    color: #FFFFFF  !important;
}

/* On hover, the links will turn white */
.navbar-nav li a:hover {
    color: #fff !important;
}

/* The active link */
.navbar-nav li.active a {
    color: #fff !important;
    background-color:#0CB8E8 !important;
}

/* Remove border color from the collapsible button */
.navbar-default .navbar-toggle {
    border-color: transparent;
}

/* Dropdown */
.open .dropdown-toggle {
    color: #000 ;
    background-color: #555 !important;
	
}

/* Dropdown links */
.dropdown-menu li a {
    color: #000 !important;
	font-size: 17px !important;
	
}

/* On hover, the dropdown links will turn red */
.dropdown-menu li a:hover {
    background-color: cyan !important;

}

#brand-image{
	height: 30px;
}

body {
  padding-top: 60px;
}
@media (max-width: 979px) {
  body {
    padding-top: 0px;
  }
}
	.jumbotron {
    background: #000 url("http://localhost/bootstrap/img/blood.jpg") center center;/*slide.jpg =>you image*/  
        background-color: #f4511e; /* Orange */
    color: #ffffff;
    opacity:0.9;
      color: #12D6D3 !important;
        height: 65vh;
        position: auto;
        margin: 0;
     }
     
 
 </style>
 
  
				
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="20">


<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
      <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
	  <a class="navbar-brand" href="#img/bb.png">
		<img id="brand-image" alt="Website Logo" src="img/bb.png" />
	  </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav nav-right">
        <li><a href="#Home">Home</a></li>
        <li><a href="#About">About Us</a></li>
		<li><a href="#Services">Services</a></li>
		<li><a href="#Contact">Contact</a></li>
		<li><a href="#Blogs">Blogs</a></li>  
  </div>
  </nav>

  <div>
	
  <div class="jumbotron text-center">
    <h1 style="color: #fff">BLOOD BANK</h1> 
    <p style="color: #fff">Give Blood. Give Hope</p> 
  </div>
	   
        
        
        
	 
</div>


<div id="About" class="container-fluid">
<div class="bg-1">
<div class="container text-center">
	<h3> About Us </h3>
	<p>About Blood Bank</p>
		<br>
  <div class="row">
    <div class="col-sm-12">
      <p class="text-center"><strong>
      <a><img src="C:\xampp\htdocs\bootstrap\img\septic.png" class="img-circle"></a>
	  <div id="yeah">
      <p>The Blood Bank, born of a desire to bring assistance without discrimination to the wounded on the battlefield, endeavors - in its international and national capacity - to prevent and alleviate human suffering wherever and whenever it may be found. Its purpose is to protect life and health and to ensure respect for the human being. It promotes mutual understanding, friendship, cooperation, and lasting peace among its people.</p>
    </div>
</div>
</div>
</div>
</div>
</div>


    

<div id="Contact" class="container-fluid bg-grey" style="background-color: #FE2E2E">
  <h2 class="text-center" style="color: #fff">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p style="color: #fff">Our Office are Located at</p>
      <p style="color: #fff"><span class="glyphicon glyphicon-map-marker" style="color: #fff"></span> 10 M. De Leon Street. Santolan Pasig City</p>
      <p style="color: #fff"><span class="glyphicon glyphicon-phone" style="color: #fff"></span>Landline: 401 – 2347 or 576 – 0337</p>
      <p style="color: #fff"><span class="glyphicon glyphicon-envelope" style="color: #fff"></span>Mobile: 0908 – 620 2596 / 0977 – 402 8827</p> 
    </div>
    <div class="col-sm-7">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div> 
    </div>
  </div>
</div>

<div id="googleMap" style="height:400px;width:65%;" class="container-fluid text-center"></div>

<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-thumbs-up"></span>
  </a>
  <p>This Website is made by <a href="Septic Boys" title="Visit w3schools"> <br>Guimalan, JJ</a></p> 
</footer>

<script>

$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){
   
      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
    });
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>




		</body>
		</html>
		
	
