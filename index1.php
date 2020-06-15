<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>SPOT INDIA GROUP</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
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
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
		<script src="jssor.slider-22.0.15.min.js" type="text/javascript" data-library="jssor.slider" data-version="22.0.15"></script>
<script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_options = {
              $AutoPlay: true,
              $Idle: 0,
              $AutoPlaySteps: 4,
              $SlideDuration: 2500,
              $SlideEasing: $Jease$.$Linear,
              $PauseOnHover: 4,
              $SlideWidth: 140,
              $Cols: 7
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*responsive code begin*/
            /*you can remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 809);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*responsive code end*/
        };
    </script>
	<style>
	html{
	width:100%;
	height:100%;
	margin:0px;
	padding:0px;
	overflow-x:hidden;
	}
	body {
      position: relative; 
  }
	.affix {
      top: 0;
      width: 100%;
	  z-index: 9999 !important;
  }

	</style>
	</head>
    <body>
<?php session_start(); ?>	
		<div id="top-bar" class="container-fluid">
			<div class="row">
				<div class="span3">
						<a href="index.html" class="logo pull-left"><img src="themes/images/logo.png" class="site_logo" alt=""></a>
				</div>
				<div class="span4">
				<form method="POST" class="search_form">
					<input type="search" Placeholder="EG.PRODUCT NAME" style="text-align:center;margin-left:-3px;border-radius:0px;border-top:2px solid orange;border-left:1px solid orange;border-bottom:2px solid orange;border-right:1px solid white;">
					<button type="submit" style="text-align:center;font-size:11px;height:31px;margin-bottom:10px;margin-left:-3px;padding:3px;background-color:orange;border-top:1px solid orange;width:60px;border-bottom:3px solid orange;border-right:1px solid white;">SEARCH</button>
					</form>
					</div>
					<div class="span4" style="text-transform:capitalize;">
					<div id="account" class="account pull-right">
						<ul class="user-menu">				
							<li><a href="#"><span class="glyphicon glyphicon-earphone"></span>CALL ON 9999999999</a></li>
							<?php if (isset($_SESSION['username']))?>
<span>Welcome <?php echo $_SESSION['username']; echo "<a href='logout.php'>Logout</a>";?></span>
							<li><a href="register.php">REGISTER</a></li>					
							<li><a href="login.php">LOGIN</a></li>		
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid" data-spy="affix" data-offset-top="100">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<nav id="menu" class="pull-right">
						<ul>
							<li><a href="./#">Home</a>
							</li>															
							<li><a href="./#">Products</a>
                             <ul>
									<li><a href="./#">Abrasives</a></li>									
									<li><a href="./#">Pumps</a></li>
									<li><a href="./#">Tools & Equipment</a></li>									
								</ul></li>				
							<li><a href="./#">Services</a>
								<ul>									
									<li><a href="./#">Inventory & Product Solutions</a></li>
									<li><a href="./#">Inventory Management</a></li>
									<li><a href="./#">Peyroll & Comprehencive Services</a></li>
								</ul>
							</li>							
							<li><a href="./#">About Us</a></li>
							<li><a href="./#">Feedback</a></li>
							<li><a href="./#">Apply for credit</a></li>
							<li><a href="./#">Career</a></li>
							<li><a href="./#">Contact Us</a></li>
						</ul>
					</nav>
				</div>
			</section>
			</div>
			<section  class="homepage-slider" id="home-slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<img src="themes/images/slider/Slider Pics/1.jpg" alt="" />
							<div class="intro">
								<h1>Offer sale</h1>
								<p><span>Up to 40% Off</span></p>
							</div>
						</li>
						<li>
							<img src="themes/images/slider/Slider Pics/2.jpg" alt="" />
							<div class="intro">
								<h1>Offer sale</h1>
								<p><span>Up to 30% Off</span></p>
							</div>
						</li>
						<li>
							<img src="themes/images/slider/Slider Pics/3.jpg" alt="" />
							<div class="intro">
								<h1>Offer sale</h1>
								<p><span>Up to 40% Off</span></p>
							</div>
						</li>
						<li>
							<img src="themes/images/slider/Slider Pics/4.jpg" alt="" />
							<div class="intro">
								<h1>Offer sale</h1>
								<p><span>Up to 30% Off</span></p>
							</div>
						</li>
					</ul>
				</div>			
			</section>
			<section class="header_text">
				We stand for top quality products. Our experince of  manufacturing always make usable and quality products. 
				<br/>Your satisfacyion is our growth.
			</section>
			<section class="main-content">
				<div class="row">
					<div class="span12">													
						<div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">Trending <strong>Products</strong></span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">												
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="#"><img src="themes/images/product/1.jpg" alt="" /></a></p>
														<a href="#" class="title">ABRASIVES</a><br/>
														<a href="#" class="category">GET QUOTE</a>
														
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="#"><img src="themes/images/product/2.jpg" alt="" /></a></p>
														<a href="#" class="title">AUTOMOTIVE FLEET</a><br/>
														<a href="#" class="category">GET QUOTE</a>
														
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="#"><img src="themes/images/product/3.jpg" alt="" /></a></p>
														<a href="#" class="title">PLUMBING</a><br/>
														<a href="#" class="category">GET QUOTE</a>
														
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="#"><img src="themes/images/product/4.jpg" alt="" /></a></p>
														<a href="#" class="title">ELECTRICAL & LIGHTING</a><br/>
														<a href="#" class="category">GET QUOTE</a>
														
													</div>
												</li>
											</ul>
										<ul class="thumbnails">												
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="#"><img src="themes/images/product/5.jpg" alt="" /></a></p>
														<a href="#" class="title">FASTENERS</a><br/>
														<a href="#" class="category">GET QUOTE</a>
														
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="#"><img src="themes/images/product/6.jpg" alt="" /></a></p>
														<a href="#" class="title">FITTINGS</a><br/>
														<a href="#" class="category">GET QUOTE</a>
														
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="#"><img src="themes/images/product/7.jpg" alt="" /></a></p>
														<a href="#" class="title">GEARS</a><br/>
														<a href="#" class="category">GET QUOTE</a>
														
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="#"><img src="themes/images/product/8.jpg" alt="" /></a></p>
														<a href="#" class="title">HARDWARE</a><br/>
														<a href="#" class="category">GET QUOTE</a>
														
													</div>
												</li>
											</ul>
										</div>
										<div class="item">
											<ul class="thumbnails">
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="#"><img src="themes/images/product/9.jpg" alt="" /></a></p>
														<a href="#" class="title">PLASTIC COMPONENT</a><br/>
														<a href="#" class="category">GET QUOTE</a>
														
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="#"><img src="themes/images/product/10.jpg" alt="" /></a></p>
														<a href="#" class="title">PNEUMATICS & HYDRAULICS</a><br/>
														<a href="#" class="category">GET QUOTE</a>
														
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="#"><img src="themes/images/product/11.jpg" alt="" /></a></p>
														<a href="#" class="title">POWER TRANSMITION & MOTORS</a><br/>
														<a href="#" class="category">GET QUOTE</a>
														
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="#"><img src="themes/images/product/12.jpg" alt="" /></a></p>
														<a href="#" class="title">PUMPS</a><br/>
														<a href="#" class="category">GET QUOTE</a>
														
													</div>
												</li>																																	
											</ul>
										</div>
									</div>							
								</div>
							</div>						
						</div>
						<br/>
						<div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">Trending <strong>Services</strong></span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel-2" data-slide="prev"></a><a class="right button" href="#myCarousel-2" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel-2" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">												
												<li class="span3">
													<div class="product-box">
														<p><a href="#"><img src="themes/images/services/1.jpg" alt="" /></a></p>
														<a href="#" class="title">JANITORIAL ITEMS</a><br/>
														<a href="#" class="category">GET QUOTE</a>
														
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="#"><img src="themes/images/services/2.png" alt="" /></a></p>
														<a href="#" class="title">MECHANICAL EQUIPMENT</a><br/>
														<a href="#" class="category">GET QUOTE</a>
														
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="#"><img src="themes/images/services/3.jpg" alt="" /></a></p>
														<a href="#" class="title">OFFICE FURNITURE & SUPPLIES</a><br/>
														<a href="#" class="category">GET QUOTE</a>
														
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="#"><img src="themes/images/services/4.png" alt="" /></a></p>
														<a href="#" class="title">PACKAGINF MATERIALS</a><br/>
														<a href="#" class="category">GET QUOTE</a>
														
													</div>
												</li>
											</ul>
										</div>
										<div class="item">
											<ul class="thumbnails">
												<li class="span3">
													<div class="product-box">
														<p><a href="#"><img src="themes/images/services/5.jpg" alt="" /></a></p>
														<a href="#" class="title">HVAC</a><br/>
														<a href="#" class="category">GET QUOTE</a>
														
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="#"><img src="themes/images/services/6.jpg" alt="" /></a></p>
														<a href="#" class="title">JANOTORAIAL ITEMS</a><br/>
														<a href="#" class="category">GET QUOTE</a>
														
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="#"><img src="themes/images/services/7.jpg" alt="" /></a></p>
														<a href="#" class="title">LIFTING & RIGGINGS</a><br/>
														<a href="#" class="category">GET QUOTE</a>
														
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="#"><img src="themes/images/services/8.jpg" alt="" /></a></p>
														<a href="#" class="title">VALVES</a><br/>
														<a href="#" class="category">GET QUOTE</a>
														
													</div>
												</li>																																	
											</ul>
										</div>
									</div>							
								</div>
							</div>						
						</div>
						<!--<div class="row feature_box">						
							<div class="span4">
								<div class="service">
									<div class="responsive">	
										<img src="themes/images/feature_img_2.png" alt="" />
										<h4>MODERN <strong>DESIGN</strong></h4>
										<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>									
									</div>
								</div>
							</div>
							<div class="span4">	
								<div class="service">
									<div class="customize">			
										<img src="themes/images/feature_img_1.png" alt="" />
										<h4>FREE <strong>SHIPPING</strong></h4>
										<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
									</div>
								</div>
							</div>
							<div class="span4">
								<div class="service">
									<div class="support">	
										<img src="themes/images/feature_img_3.png" alt="" />
										<h4>24/7 LIVE <strong>SUPPORT</strong></h4>
										<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
									</div>
								</div>
							</div>	
						</div>		
					</div>-->			
				</div>
			</section>
			<section class="our_client" style="border-bottom:none;">
				<h4 class="title"><span class="text">Transportation&nbsp;Partner</span></h4>
				<div class="row">
                <div class="container-fluid">				
					<div class="span4">
						<a href="#"><img alt="" src="themes/images/clients/14.png"></a>
					</div>
					<div class="span4">
						<a href="#"><img alt="" src="themes/images/clients/35.png"></a>
					</div>
					<div class="span4">
						<a href="#"><img alt="" src="themes/images/clients/1.png"></a>
					</div>
				</div>
				</div>
			</section>
			</div>
<!--Slider-->
<section class="our_client">
				<h4 class="title"><span class="text">Our Brands</span></h4>
				</section>
	      <!--start of row-->
		  <div id="jssor_1" style="position: relative; margin:0 auto; top: 0px; left: 0px; width: 1100px; height: 100px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1100px; height: 100px; overflow: hidden;">
            <div>
                <img data-u="image" src="themes/images/brands/images1.png" />
            </div>
            <div style="display:none;">
                <img data-u="image" src="themes/images/brands/arcellor.png" />
            </div>
            <div style="display:none;">
                <img data-u="image" src="themes/images/brands/images41PPVD78.jpg" />
            </div>
            <div style="display:none;">
                <img data-u="image" src="themes/images/brands/Capture.jpg" />
            </div>
            <div style="display:none;">
                <img data-u="image" src="themes/images/brands/images8ERKQS8Z.jpg" />
            </div>
            <div style="display:none;">
                <img data-u="image" src="themes/images/brands/images67M5CQKZ.jpg" />
            </div>
            
            
            <div style="display:none;">
                <img data-u="image" src="themes/images/brands/images35TR3RRI.jpg" />
            </div>
            
            
            
			<div style="display:none;">
                <img data-u="image" src="themes/images/brands/Ratnamani.jpg" />
            </div>
			<div style="display:none;">
                <img data-u="image" src="themes/images/brands/images.png" />
            </div>
			<div style="display:none;">
                <img data-u="image" src="themes/images/brands/psg.png" />
            </div>
			<div style="display:none;">
                <img data-u="image" src="themes/images/brands/corus.png" />
            </div>
			<div style="display:none;">
                <img data-u="image" src="themes/images/brands/krystal.png" />
            </div>
			<div style="display:none;">
                <img data-u="image" src="themes/images/brands/nippon.png" />
            </div>
            
            
            <a data-u="any" href="http://www.jssor.com" style="display:none">Scrolling Logo Thumbnail Slider</a>
            
            

        </div>
    </div>
	<br>
	<br>
    <script type="text/javascript">jssor_1_slider_init();</script>

<!--Footer-->
	            <!-- === BEGIN FOOTER === -->
                <section id="base" style="border-top:1px solid #DED8D8;">
                    <div class="container-fluid bottom-border">
                        <div class="row">
                            <!-- Disclaimer -->
                                <div class="span3" style="text-align: center;">
								<a href= "#LOCATION" style=" font-family:-webkit-body; font-weight: bold;color:black;width:5px">ABOUT SPOT INDIA</a>
								<br><br><a href= "#BANDRA" style=" font-family:-webkit-body;color:black;font-size: 15px;width:15px;color: #9E9E9E;">Events</a>
								<br><a href= "#BANDRA" style=" font-family:-webkit-body;color:black;font-size: 15px;width:15px;color: #9E9E9E;">Press Releases</a>
								<br><a href= "#BANDRA" style=" font-family:-webkit-body;color:black;font-size: 15px;width:15px;color: #9E9E9E;">Investor Relations</a>
								<br><a href= "#BANDRA" style=" font-family:-webkit-body;color:black;font-size: 15px;width:15px;color: #9E9E9E;">Community Relations</a>
								<br><a href= "#BANDRA" style=" font-family:-webkit-body;color:black;font-size: 15px;width:15px;color: #9E9E9E;">Career Opportunities</a>
                                   <!-- <img src="img/Saltus logo new.gif" width="180" height="130">-->
                                
                                </div>

                                <div class="span3" style="text-align: center;">
								<a href= "#MARKET" style=" font-family:-webkit-body; font-weight: bold;color:black;width:5px">CUSTOMER SERVICE</a>
								<br><br><a href= "#ALLOVERINDIA" style=" font-family:-webkit-body;color:black;font-size: 15px;width:15px;color: #9E9E9E;">Return Policy</a>
								<br><a href= "#ALLOVERINDIA" style=" font-family:-webkit-body;color:black;font-size: 15px;width:15px;color: #9E9E9E;">Shipping Options</a>
                                <br><a href= "#ALLOVERINDIA" style=" font-family:-webkit-body;color:black;font-size: 15px;width:15px;color: #9E9E9E;">Terms and Conditions of Sale</a>
								<br><a href= "#ALLOVERINDIA" style=" font-family:-webkit-body;color:black;font-size: 15px;width:15px;color: #9E9E9E;">Website Terms of Use</a>
								<br><a href= "#ALLOVERINDIA" style=" font-family:-webkit-body;color:black;font-size: 15px;width:15px;color: #9E9E9E;">Privacy Policy</a>



                                    <!--<img src="img/swachh bharat.jpg" width="180" height="130" style="border-radius:5px;">-->
                                
                                </div>
								<div class="span3" style="text-align: center;">
								<a href= "#PARTNERWITHUS" style=" font-family:-webkit-body; font-weight: bold;color:black;width:5px">HELP & SUPPORT</a>
								<br><br><a href= "#ALLOVERINDIA" style=" font-family:-webkit-body;color:black;font-size: 15px;width:15px;color: #9E9E9E;">FAQs</a>
								<br><a href= "#ALLOVERINDIA" style=" font-family:-webkit-body;color:black;font-size: 15px;width:15px;color: #9E9E9E;">How to Use Our Site</a>
                                <br><a href= "#ALLOVERINDIA" style=" font-family:-webkit-body;color:black;font-size: 15px;width:15px;color: #9E9E9E;">Site Map</a>
								<br><a href= "#ALLOVERINDIA" style=" font-family:-webkit-body;color:black;font-size: 15px;width:15px;color: #9E9E9E;">Locate SDS</a>    
                                
                                </div>

								<div class="col-md-3" style="text-align: center;">
								
								<br><a href= "#ALLOVERINDIA" style=" font-family:-webkit-body;color:black;font-size: 15px;width:15px">Location</a>
								<br><a href= "#ALLOVERINDIA" style=" font-family:-webkit-body;color:black;font-size: 15px;width:15px">Market</a>
                                <br><a href= "#ALLOVERINDIA" style=" font-family:-webkit-body;color:black;font-size: 15px;width:15px">Partner With Us</a>
								        
                                </div>
                        </div><br/>
						</div>
						
						<div class="container-fluid" style="color:black; background:rgba(245,243,243,0.54);border-top:1px solid #DED8D8;"><br/>
						<div class="row">
						<div class="col-sm-12"><p style="float:left;">&copy;2017<span style="color:orange;">&nbsp;SPOT INDIA GROUP.</span> All Rights Reserved.</p><p style="float:right;">Designed & Developed By <span style="color:orange;font-weight:bold;"><a href="http://www.innovationsolution.in">Innovation Solution.</a></span></p></div>
						</div>
						</div>
						</section>
		<script src="themes/js/common.js"></script>
		<script src="themes/js/jquery.flexslider-min.js"></script>
		<script type="text/javascript">
			$(function() {
				$(document).ready(function() {
					$('.flexslider').flexslider({
						animation: "fade",
						slideshowSpeed: 4000,
						animationSpeed: 600,
						controlNav: false,
						directionNav: true,
						controlsContainer: ".flex-container" // the container that holds the flexslider
					});
				});
			});
		</script>
    </body>
</html>