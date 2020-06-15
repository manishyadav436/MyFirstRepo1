<?php include('header.php');?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Forget Password</title>
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
		<div id="applymsg" class=""></div>
		  <section class="main-content">				
				<div class="row">
							
						<h4 class="title"><span class="text"><strong>Forget Password</strong></span></h4>
					
						</div>
						<form action="" id="ip" method="post" enctype="multipart/form-data" class="form col-md-12 center-block" style="padding-top:35px;" align="center">
							<input type="hidden" name="next" value="/">
							<fieldset>
								<div class="control-group">
									<label class="control-label">Email</label>
									<div class="controls">
										<input type="text" name="username" placeholder="Enter your username" id="username" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<input tabindex="3" class="btn btn-success large" type="submit" value="Send Reset Link">
								
								</div>
							</fieldset>
						</form>				
					</div>			
				</div>
			</section>
			<br>
			<br><br>
			<script>
	$("#ip").on('submit',(function(e) {
				e.preventDefault();
				$("#applymsg").empty();
					$.ajax({
						url: "forgetmail.php", // Url to which the request is send
						type: "POST",             // Type of request to be send, called as method
						data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
						contentType: false,       // The content type used when sending data to the server.
						cache: false,             // To unable request pages to be cached
						processData:false,        // To send DOMDocument or non processed data file it is set to false
						success: function(data)   // A function to be called if request succeeds
						{
							$("#applymsg").html(data);
							$("#applymsg").addClass('success');
						}
					});
			}));
	</script>
		<?php include('footer.php');?>
			</body>
			</html>