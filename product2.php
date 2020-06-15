<?php include ('header.php');?>
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
	<br>
	<div class="row">
	<div class="container">
	<div class="col-sm-12" style="text-align:center;">
				<span style="font-family:-webkit-pictograph;font-size:22px;color:orange;">TRENDING CHAIRS</span>
				</div>
	</div>
	</div>
	<br>
	<br>
	<div class="container-fluid">
					<?php
					require_once("dbcontroller.php");
					$db_handle = new DBController();
					$num_rec_per_page=20;
					if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
					$start_from = ($page-1) * $num_rec_per_page; 
	$product_array = $db_handle->runQuery("SELECT * FROM prod2 LIMIT $start_from, $num_rec_per_page");
	if (!empty($product_array)) { 
		foreach($product_array as $key=>$value){
			?>
			<div class="col-sm-3">
					<div class="span3">
					<div class="product-box">
		        <img src="upload/<?php echo $product_array[$key]["file"]; ?>">
				<a href="#" class="title">JANITORIAL ITEMS</a><br/>
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
				$sql = "SELECT * FROM prod2"; 
				$rs_result = mysql_query($sql); 
				$total_records = mysql_num_rows($rs_result);  
				$total_pages = ceil($total_records / $num_rec_per_page); 
				echo "<ul class='pager'>";
				echo "<li><a href='index.php?page=1'>".'Previous'."</a></li> ";
				for ($i=1; $i<=$total_pages; $i++) { 
							echo "<li><a href='index.php?page=".$i."'>".$i."</a></li>"; 
							};
							
				echo "<li><a href='index.php?page=$total_pages'>".'Last'."</a></li> "; 
				echo "</ul>";
				?>
<?php include('footer.php');?>
</body>
</html>