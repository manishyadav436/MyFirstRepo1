<!DOCTYPE html>
<html lang="en">
	<head>
<meta charset="utf-8">
		<title>SPOT INDIA GROUP</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		
		<link href="themes/css/bootstrappage.css" rel="stylesheet"/>
		
		<!-- global styles -->
		<link href="themes/css/flexslider.css" rel="stylesheet"/>
		<link href="themes/css/main.css" rel="stylesheet"/>

		<!-- scripts -->
		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>				
		<script src="themes/js/superfish.js"></script>	
		<script src="themes/js/jquery.scrolltotop.js"></script>
<style>
.open > .dropdown-menu {
  -webkit-transform: scale(1, 1);
  transform: scale(1, 1);  
  opacity:1;
}
  
.dropdown-menu {
  opacity:.7;
  -webkit-transform-origin: top;
  transform-origin: top;
  -webkit-animation-fill-mode: forwards;  
  animation-fill-mode: forwards; 
  -webkit-transform: scale(1, 0);
  transition: all 0.3s linear;
  -webkit-transition: all 0.3s linear;
}

.caret-up {
    width: 0; 
    height: 0; 
    border-left: 4px solid rgba(0, 0, 0, 0);
    border-right: 4px solid rgba(0, 0, 0, 0);
    border-bottom: 4px solid;
    
    display: inline-block;
    margin-left: 2px;
    vertical-align: middle;
}
.dropdown-menu:hover > .submenu{
	display:block;
	margin:0;
}
.button2{
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 10px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}

.button2:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
.button3{
    background-color: orange; /* Green */
    border: none;
    color: white;
    padding: 10px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}

.button3:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
</style>
</head>
<?php session_start(); ?>
<div id="top-bar" class="container-fluid">
			<div class="row">
				<div class="span3">
						<a href="index.php" class="logo pull-left"><img src="themes/images/logo.png" class="site_logo" alt=""></a>
				</div>
				<div class="span4">
				<form method="POST" class="search_form">
					<input type="search" Placeholder="EG.PRODUCT NAME" style="text-align:center;margin-left:-3px;border-radius:0px;border-top:2px solid orange;border-left:1px solid orange;border-bottom:2px solid orange;border-right:1px solid white;">
					<button type="submit" style="text-align:center;font-size:11px;height:31px;margin-bottom:10px;margin-left:-3px;padding:3px;background-color:orange;border-top:1px solid orange;width:60px;border-bottom:3px solid orange;border-right:1px solid white;">SEARCH</button>
					</form>
					</div>
					<div class="span4" style="text-transform:capitalize;">
					<div class="account pull-right" align="center">
						<ul class="user-menu">				
							<!--php if (isset($_SESSION['username']))?>
							<span>Welcome ?php echo $_SESSION['username']; echo "<a href='logout.php'>Logout</a>";?></span>
							<li><a href="register.php">REGISTER</a></li>					
							<li><a href="login.php">LOGIN</a></li>	-->	
							<li>
						<?php 
							if(isset($_SESSION['logged'])){ 
							echo $_SESSION["username"];
							echo "<a href='logout.php'><span>&nbsp;Logout</span></a>";
							}
							if(!isset($_SESSION['logged'])){
							echo "<button class='button2'><a href='login.php'><span style='font-size:12px;color:white;'>LOGIN</span></a></button>&nbsp;&nbsp;";}
						
													if(!isset($_SESSION['logged'])){
							echo "<button class='button3'><a href='register.php'><span style='font-size:12px;color:white;'>REGISTER</span></a></button>";}
    ?></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<section class="navbar main-menu" style="width:101%;height:0%;left:0px">
				<div class="navbar-inner main-menu">				
					<nav id="menu" style="text-align:center;">
						<ul>
							<li><a href="index.php">Home</a>
							</li>															
							<li><a href="cateloge.php">Cateloge</a>
							</li>			
						<!--	<li><a href="./#">Services</a>
								<ul>									
									<li><a href="./#">Inventory & Product Solutions</a></li>
									<li><a href="./#">Inventory Management</a></li>
									<li><a href="./#">Peyroll & Comprehencive Services</a></li>
								</ul>
							</li>	-->
                    <li class="dropdown "><a href="#" id="drop1" data-toggle="dropdown" class="dropdown-toggle" role="button">Servcies <b class="caret"></b></a>
            <ul role="menu" class="dropdown-menu" aria-labelledby="drop1">
                <li role="presentation"><a href="data.php" role="menuitem">Data &amp;communication</a></li>
                <li role="presentation"><a href="govern.php" role="menuitem">Government</a></li>
                <li role="presentation"><a href="healthcare.php" role="menuitem">Heath care</a></li>
                <li role="presentation"><a href="industry.php" role="menuitem">Industrial Customer</a></li>
				<li role="presentation"><a href="institution.php" role="menuitem">Institutional</a></li>
				<li role="presentation"><a href="agriculture.php" role="menuitem">Agriculture</a></li>
				<li role="presentation"><a href="hospitality.php" role="menuitem">Hospitality Industry</a></li>
				<li role="presentation"><a href="energy.php" role="menuitem">Energy Efficiency</a></li>
				<li role="presentation"><a href="" role="menuitem">Utility Market</a></li>
            </ul>
			</li>							
							<li><a href="aboutus.php">About Us</a></li>
							<li><a href="feedback.php">Feedback</a></li>
							<li><a href="apply.php">Apply for credit</a></li>
							<li><a href="career.php">Career</a></li>
							<li><a href="contact.php">Contact Us</a></li>
						</ul>
					</nav>
				</div>
			</section>
			</div>
			<script>
 $(function(){
    $(".dropdown").hover(            
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            },
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            });
    });
	</script>