<html>
<head>
<title>Spot India</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/jquery.min.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
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
</head>
<body>
<?php 
include 'header.php';?>
	<div class="banner">
		<div class="container">
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
<div class="container">
<?php
					require_once("dbcontroller.php");
					$db_handle = new DBController();
$category=$_GET['category'];
	$product_array=mysql_query("SELECT distinct subcat FROM `$category` ");
	echo'<table cellpadding="0" cellspacing="3" border="0" width="100%"><tbody><tr>';
	while($row = mysql_fetch_array($product_array))
	{
		$result_array = $row['subcat'];
		echo '<td class="center" valign="top" width="33%">
		<a href="#" class="title">'.$result_array.'</a></td>';
	}?><?php echo '</tr></table>';?>
	
	<div class="cont">
				<h1 class="shadow"><?php echo $withoutExt = preg_replace('/\\.[^.\\s]{10,11}$/','',$_GET['category']);?></h1>
				<div class="grid-in">
					<?php
					require_once("dbcontroller.php");
					$db_handle = new DBController();
					$num_rec_per_page=20;
					if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
					$start_from = ($page-1) * $num_rec_per_page; 
	$category=$_GET['category'];
	$product_array = $db_handle->runQuery("SELECT * FROM $category where cat='$category' LIMIT $start_from, $num_rec_per_page");
	if (!empty($product_array)) { 
		foreach($product_array as $key=>$value){
	?>
					<div class="col-sm-3">
					<div class="span3">
					<div class="product-box">	
		        <img src="product/<?php echo $product_array[$key]["cat"];?>/<?php echo $product_array[$key]["subcat"];?>/<?php echo $product_array[$key]["file"]; ?>">
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
				
				<?php 	
				$sql = "SELECT * FROM $category"; 
				$rs_result = mysql_query($sql); 
				$total_records = mysql_num_rows($rs_result);  
				$total_pages = ceil($total_records / $num_rec_per_page); 
				echo "<ul class='pager'>";
				echo "<li><a href='showCategory.php?category=$category'>".'Previous'."</a></li> ";
				for ($i=1; $i<=$total_pages; $i++) { 
							echo "<li><a href='showCategory.php?category=$category?page=".$i."'>".$i."</a></li>"; 
							
							};
							
				echo "<li><a href='showCategory.php?category=$category?page=$total_pages'>".'Last'."</a></li> "; 
				echo "</ul>";
				?>
				</div>
<?php include('footer.php');?>
</body>
</html>
			