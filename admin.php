<?php include('header.php');?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Update</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
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
<br>
<div class="row" style="margin-top:20px;">
<div class="col-sm-12">
<div class="container">
<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Upload Product</a></li>
    <li><a data-toggle="tab" href="#update">Update Product</a></li>
    <li><a data-toggle="tab" href="#delete">Delete Product</a></li>
  </ul>
</div>
</div>
</div>
<br>
<div class="tab-content">
    <div id="home" class="tab-pane fade in active">
<div class="row">
<form action="upload2.php" method="post" enctype="multipart/form-data">
<div class="form-gruop">
<div class="span2">
<p>Product Name:</p>
</div>
<div class="col-sm-10">
<input type="text" class="input-lg form-control" placeholder="Enter Product"  name="prod" style="margin:0 auto;"/>
</div>
</div>
</div>
<br />
<div class="row">
<div class="span2">
<p>Select Category</p>
</div>
<div class="col-sm-10">
<select class="form-control" name="select">
<option>s1</option>
<option>s2</option>
<option>s2</option>
</select>
</div>
</div>
<br/>
<div class="row">
<div class="span2">
<p>Select Sub Category</p>
</div>
<div class="col-sm-2">
<select class="form-control" name="subselect">
<option>s1</option>
<option>s2</option>
<option>s2</option>
</select>
</div>
</div>
<br/>
<div class="row">
<div class="span2">
<p>Product Image</p>
</div>
<div class="col-sm-2">
<input type="file"  name="file"/>
</div>
</div>
<br/>
<div class="col-sm-10">
<center><button type="submit" value="submit"  name="upload" class="btn btn-primary" style="vertical-align:middle"> Upload </button></center>
</div>
<br>
</form>
</div>
    <div id="update" class="tab-pane fade">
<div class="row">
<form>
<div class="form-gruop">
<div class="span2">
<p>Product Name:</p>
</div>
<div class="col-sm-10">
<input type="text" class="input-lg form-control" placeholder="Enter Product"  style="margin:0 auto;"/>
</div>
</div>
</div>
<br />
<div class="row">
<div class="span2">
<p>Product Image</p>
</div>
<div class="col-sm-2">
<input type="file"  />
</div>
</div>
<br/>
<div class="col-sm-10">
<center><button type="submit" value="submit"  class="btn btn-primary" style="vertical-align:middle"> Submit </button></center>
</div>
<br>
</form>
</div>
<div id="delete" class="tab-pane fade">
      <form role="form" class="formBody" action="delete.php" method="post" enctype="multipart/form-data">
	  <div style="margin-left:150px; padding-top: 25px;">
	<div class="form-group">
      <label for="name">Delete By Product Name :</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Product name" style="width:50%"/>
    </div>
	<button type="submit" class="btn btn-danger" id="submit">Delete</button>
	</div>
	  </form>
	  
    </div>
</div>
<?php include('footer.php');?>
</body>
</html>