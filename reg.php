<!DOCTYPE html>
	<html lang="en">
		<head>
				<meta charset="utf-8">
				<meta http-equiv="X-UA-Compatible" content="IE=edge">
				<meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="apple-mobile-web-app-status-bar-style" content="default">
            <meta name="apple-mobile-web-app-capable" content="yes"/>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link href="img/logo.png" rel="shortcut icon">
  <link href="css/style.css" rel="stylesheet">
  <script src="js/jquery.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
 <script src="js/custom.js"></script>
<script>
        $(function() {
  $('input').floatlabel({labelEndTop:0});
});
            </script>

<script type="text/javascript" src="http://www.clubdesign.at/floatlabels.js"></script>
            
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
        
    .registrationPanel{
	
	background: url("http://localhost/bootstrap/img/bg2.jpg");
        opacity: 0.8;
	background-size:cover;
	padding-top: 90px;
	padding-right: 50px;
	padding-left: 50px;
	padding-bottom: 100px;
	height: 920px;
	width: auto;
	
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
		<li><a href="contact.php">Contact</a></li>
        </ul>
          <ul class ="nav navbar-nav navbar-right">
        <li><a href="log-in.php">Log-in</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
        </ul>
              
          
      </div></div>
  </nav>  
    </div>
    
    
<div class="container-fluid  registrationPanel">
	
	
	<div class="col-md-4">

		

		<div class="panel panel-default panelRegistration">
		
		<div class="panel-heading text-center shitHead ">
			<p>REGISTRATION</p>
		</div>
            
		<div class="panel-body" >
            <form method="post"> 
                
                
			<div class ="form-group">
				<!--<label for="fname"> First Name </label> -->
					<input type="text" class="form-control" name="fname" placeholder="Enter First Name" required>
			</div>
			<div class ="form-group">
				<!--<label for="lname"> Last Name </label> -->
				<input type="text" class="form-control" name="lname" placeholder="Enter Last Name" required>
			</div>
			<div class ="form-group">
				<!--<label for="eMail"> Email </label>-->
              
				<input type="text" class="form-control" name="email" placeholder="Enter Email" required>
			</div>
			<div class ="form-group">
				<!--<label for="usr"> Username </label>-->
				<input type="text" class="form-control" name="user" placeholder="Enter Username" required>
			</div>
			<div class ="form-group">
				<!--<label for="pwd"> Password </label> -->
				<input type="password" class="form-control" name="pass" placeholder="Enter Password" required>
			</div>	
            <div class ="form-group">
				<!--<label for="pwd2"> Retype Password </label> -->
				<input type="password" class="form-control" name="pass2" placeholder="Enter Password" required>
			</div>
			
			
			<br>
			<button  class="btn btn-warning" name="adduser" type="submit"> SUBMIT
			</button>
		
    
                
		</form>
                </div>
		<div class="panel-footer text-center">
			<p><a href="#"> Already have an account? Log in here! </a> </p>


		</div>
            
    
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>
            </body>
            </html>