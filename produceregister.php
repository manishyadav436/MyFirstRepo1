<?php include('header.php');?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Producer Register</title>
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
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
		<style>
		input[type="text"],input[type="email"],input[type="password"]{
			height:30px;
		}
		h4.title span.text {
    background-color:#FF9800;
    padding-right: 10px;
}
		</style>

	</head>
    <body>		
				
			<section class="main-content"style="background-image:url(themes/images/ap.jpg);background-size:cover;background-repeat:no-repeat;background-attachment:fixed;margin:0 auto;">			
            <div class="row">			
					<div class="span12">					
		<br>
						<form action="new.php" method="post" align="center">
						<div class="control-group">
									<label class="control-label"><b>Compnay Name</b></label>
									<div class="controls">
										<input type="text" name="username" placeholder="Enter your username" class="input-xlarge" style="text-align:center">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label"><b>User Name</b></label>
									<div class="controls">
										<input type="text" name="username" placeholder="Enter your username" class="input-xlarge" style="text-align:center">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label"><b>Email ID</b></label>
									<div class="controls">
										<input type="email" name="email" placeholder="Enter your email" class="input-xlarge" style="text-align:center">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label"><b>Password</b></label>
									<div class="controls">
										<input type="password" name="password" placeholder="Enter your password" class="input-xlarge" style="text-align:center">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label"><b>Secondary Username</b></label>
									<div class="controls">
										<input type="text" name="username" placeholder="Enter your username" class="input-xlarge" style="text-align:center">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label"><b>Address</b></label>
									<div class="controls">
										<textarea name="username" placeholder="Enter your Address" class="input-xlarge" style="text-align:center"></textarea>
									</div>
								</div>
								<div class="control-group">								
								<p><a href="#" class="btn btn-success btn-lg" style="width:150px;">
          <span class="glyphicon glyphicon-send"></span> Create</a></p>
</div>
						</form>					
					</div>	
             </div>					
			</section>	
    </body>
</html>
<?php include('footer.php');?>	