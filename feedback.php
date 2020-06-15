<?php
include('header.php');
?>
    <!DOCTYPE HTML>
    <html lang="en">
    <head>
    <meta charset="utf-8">
    <title>Feedback</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This is a responsive Contact Form available in multiple colors">
    <meta name="author" content="">
    <link href="css/contact.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Patua+One' rel='stylesheet' type='text/css'>
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
		<style>
		@media (max-width: 767px){
	html{
	width:100%;
	height:100%;
	margin:0px;
	padding:0px;
	overflow-x:hidden;
	}
	body{
	width:100%;
	margin:0px;
	padding:0px;
	overflow-x:hidden;
	}
	div#a{
		zoom:0.5;
	}
	.cform-form{
	
		width:100%;
		margin:0 auto;
	}
		}
		input[type=search] {
    height: 30px;
   
}
		</style>
    </head>
    <body>
    <!--Contact form start-->
    <div id="a" align="center" style="background-image:url(themes/images/feedback.jpg);background-size:cover;background-repeat:no-repeat;background-attachment:fixed;">
    <section id="contact">
	<br>
	<br>
	<br>
	<br>
              <form action="contact.php" method="post" class="cform-form" style="padding:20px;">
                    <p><input type="text" name="name" placeholder="Your Name" style="text-align:center;font-size:14px;" class="cform-text" size="40" title="Your name"></p>
                    <p><input type="text" name="email" placeholder="Your Email" style="text-align:center;font-size:14px;" class="cform-text" size="40" title="Your email"></p>
                    <p><input type="text" name="phone" placeholder="Phone" style="text-align:center;font-size:14px;" class="cform-text" size="40" title="Your email"></p>
            
                    <p><textarea name="comments" cols="40" rows="5" title="Drop us a line." placeholder="Message" style="text-align:center;"></textarea></p>
                   <p style="margin-left:120px;"><a href="#" class="btn btn-success btn-lg" style="width:150px;align:center;">
          <span class="glyphicon glyphicon-send"></span> Send 
        </a></p>
              </form>
    </section>
	<br>
  </div>

  <!--Contact form end-->
</body>
<?php include('footer.php');?>
</html>