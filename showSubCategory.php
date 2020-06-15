<?php include('header.php');?>
<html>
<head>
<title>Spot India group</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Mattress Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'><!--//fonts-->
<!-- start menu -->
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<script src="js/simpleCart.min.js"> </script>
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
			  <script src="js/responsiveslides.min.js"></script>
  <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
  <style>
  .shadow{
  font-size: 34px;
    font-family: cursive;
    text-shadow: 2px 2px #ccc;
    padding-top: 12px;
  }
  .input-group-btn {
    position: relative;
    font-size: 0;
    white-space: nowrap;
    background: #000;
    border-radius: 0px 6px 6px 0px;
}
  </style>
  </head>
<body>
<!--content-->
<!--<div class="col-sm-2 sidenav">
<ul>Category
      <li><a href="#">Office Chair</a></li>
      <li><a href="#">Beauty Chair</a></li>
      <li><a href="#">Executive Chair</a></li>
	  <ul>
    </div>-->
<div class="container">
	<div class="cont">
				<h1 class="shadow"><?php $parts = explode('=',$_GET['category']);echo array_pop($parts);?></h1>
				<div class="grid-in">
					<?php
					require_once("dbcontroller.php");
					$db_handle = new DBController();
					$num_rec_per_page=20;
					if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
					$start_from = ($page-1) * $num_rec_per_page;
					$parts = explode('=',$_GET['category']);
					$subcat=$parts[1];
					
					$category=$_GET['category'];
					$segments = explode('?', $category);
					
					$cat=$segments[0];
					
	$product_array = $db_handle->runQuery("SELECT * FROM $cat where subcat='$subcat'");
	if (!empty($product_array)) { 
		foreach($product_array as $key=>$value){
	?>
					<div class="col-sm-3">
					<div class="span3">
					<div class="product-box">	
		        <img src="product/<?php echo $product_array[$key]["cat"];?>/<?php echo $product_array[$key]["subcat"];?>/<?php echo $product_array[$key]["subcate"];?>/<?php echo $product_array[$key]["subcateg"];?>/<?php echo $product_array[$key]["file"]; ?>">
				<a href="#" class="title"><?php echo $withoutExt = preg_replace('/\\.[^.\\s]{3,4}$/', '',$product_array[$key]["file"]);?></a><br/>
				<a href="#" class="category">GET QUOTE</a>
			</div>
		</div>
		</div>
		<?php
					}
				}
					?>
					</div>
		</div>
						
				</div>
				
<?php include('footer.php');?>
</body>
</html>