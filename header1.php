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
		<link href="css/memenu.css" rel="stylesheet"/>

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
					<div class="account pull-right">
						<ul class="user-menu">				
							<li><a href="#"><span class="glyphicon glyphicon-earphone"></span>&nbsp;9999999999</a></li>
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
							echo "<a href='login.php'><span>Login&nbsp;&nbsp;</span></a>";}
						
													if(!isset($_SESSION['logged'])){
							echo "<a href='register.php'><span>Register</span></a>";}
    ?></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<section class="navbar main-menu" style="width:100%;height:0%;">
				<div class="navbar-inner main-menu">				
					<div class=" h_menu4">
				<ul class="memenu skyblue">
					  <li><a class="color8" href="index.php"><img src="home2.png" style="height:20px; width:20px;color:white;"/></a></li>	
				      <li><a class="color1" href="#">SHOP</a>
				      	<div class="mepanel">
						<div class="row">
							<div class="col1">
								<div class="h_nav">
								<a href="showCategory.php?category=office chair">Office Chair</a>
									<ul>
										
										<li><a href="showSubCategory.php?subcategory=computer chair">Computer Chair</a></li>
							             <li><a href="showSubCategory.php?subcategory=boss chair">Boss Chair</a></li>
										<li><a href="showSubCategory.php?subcategory=executive chair">Executive Chair</a></li>
										<li><a href="showSubCategory.php?subcategory=conference chair">Conference Chair</a></li>

										<li><a href="showSubCategory.php?subcategory=meeting chair">Meeting Chair</a></li>
									</ul>	
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
								<a href="showCategory.php?category=beauty chair">Beauty Chair</a>
									<ul>
										
										
										
										<li><a href="showSubCategory.php?subcategory=parlor chair">Beauty Parlour Chair</a></li>
										
										<li><a href="showSubCategory.php?subcategory=stand cum trolly">Stand Cum Trolley</a></li>
										<li><a href="showSubCategory.php?subcategory=hair cut chair">Hair Cut Chair</a></li>
										<li><a href="showBed.php?subcategory=foldeble bed">Folding Bed</a></li>
										
										
									</ul>	
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
								<a href="showCategory.php?category=waiting chair">Waiting Chair</a>
								
								</div>												
							</div>
							<div class="col1">
								<div class="h_nav">
								<a href="showCategory.php?category=modern stool">Modern Stool</a>
								
									<br>
								</div>												
							</div>
							<div class="col1">
								<div class="h_nav">
								<a href="showCategory.php?category=sofa">Sofa</a>
								
									<br>	
								</div>												
							</div>
							<div class="col1">
								<div class="h_nav">
								<a href="showCategory.php?category=school chair">School</a>
							
								<br>
								</div>												
							</div>
						  </div>
						</div>
					</li>
					<li><a class="color4" href="about.php">ABOUT US</a></li>
						<li><a class="color4" href="portfolio.php">PORTFOLIO</a></li>
				
            					
				<li><a class="color6" href="contact.php">CONTACT</a></li>
			  </ul> 
			</div>
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