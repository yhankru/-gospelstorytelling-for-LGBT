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
    
    @charset "UTF-8";
/* CSS Document */

body {
  background:  #000 url("http://localhost/bootstrap/img/bg7.jpg") center center ;/*slide.jpg =>you image*/    
    @include background-size(cover); 
    background-position: center center;
      height: 930px;
font-family: 'Raleway', sans-serif;
    margin: 0;
    
}

p {
	color:#CCC;
}

.spacing {
	padding-top:7px;
	padding-bottom:7px;
}
.middlePage {
	width: 680px;
    height: 500px;
    position: absolute;
    top:0;
    bottom: 0;
    left: 0;
    right: 0;
    margin: auto;
}

.logo {
	color: dodgerblue;
    text-shadow: 1px 1px black;
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
		<li><a href="#Services">Services</a></li>
		<li><a href="contact.php">Contact</a></li>
        </ul>
          <ul class ="nav navbar-nav navbar-right">
        <li><a href="log-in.php">Log-in</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
        </ul>
              
          
      </div></div>
  </nav>  
    
<div class="middlePage">
<div class="page-header">
  <h1 class="logo">Blessed Malabanan <small>Welcome to our place!</small></h1>
</div>

<div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">Please Sign In</h3>
  </div>
  <div class="panel-body">
  
  <div class="row">
  
<div class="col-md-5" >
<a href="#"><img src="http://techulus.com/buttons/fb.png" /></a><br/>
<a href="#"><img src="http://techulus.com/buttons/tw.png" /></a><br/>
<a href="#"><img src="http://techulus.com/buttons/gplus.png" /></a>
</div>

    <div class="col-md-7" style="border-left:1px solid #ccc;height:160px">
<form class="form-horizontal">
<fieldset>

  <input id="textinput" name="textinput" type="text" placeholder="Enter User Name" class="form-control input-md">
  <div class="spacing"><input type="checkbox" name="checkboxes" id="checkboxes-0" value="1"><small> Remember me</small></div>
  <input id="textinput" name="textinput" type="text" placeholder="Enter Password" class="form-control input-md">
  <div class="spacing"><a href="#"><small> Forgot Password?</small></a><br/></div>
  <button id="singlebutton" name="singlebutton" class="btn btn-info btn-sm pull-right">Sign In</button>


</fieldset>
</form>
        
</div>
    
</div>
    
</div>
</div>

<p><a href="https://github.com/arjunkomath">About</a> · Septic boys</p>
    
<?php         
	
	if (isset($_SESSION['username'])) {
	header('Location: septic.php');
	}
	else{
		
	}
	if(isset($_POST['login'])){		
	session_start();
	$username=$_POST['username'];
	$password=$_POST['password'];
	// Include database connection settings
	include('connection.php');
        
	// Retrieve username and password from database according to user's input
        
	$login = mysql_query("SELECT * FROM registration WHERE username = '$username' and password = '$password'");
	$value = mysql_fetch_object($login);
	// Check username and password match
        
	if (mysql_num_rows($login) == 1){
	// Set username session variable
	$_SESSION['username']=$_POST['username'];
	$_SESSION['password']=$_POST['password'];
	
	header("Location: septic.php");
}
	else{
	echo "<br><font color='red'>Note: Incorrect Username or Password</font><br>";
	}
}
            
?>

    
    
    
</div>
</body>
        
        