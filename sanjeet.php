<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme Simply Me</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 20px Montserrat, sans-serif;
      line-height: 1.8;
      color: #f5f6f7;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
      background-color: #ffffff; /* Green */
      color: #ffffff;
	  background-image:url("img2.jpg");
	  background-repeat:no-repeat;
	  background-size:cover;
	  opacity:0.3;
	  
  }
  .bg-2 { 
      background-color: #474e5d; /* Dark Blue */
      color: #ffffff;
  }
  .bg-3 { 
      background-color: #ffffff; /* White */
      color: #555555;
  }
  .bg-4 { 
      background-color: #2f2f2f; /* Black Gray */
      color: #fff;
  }
  .container-fluid {
      padding-top: 70px;
      padding-bottom: 70px;
	  
  }
  .navbar {
      padding-top: 15px;
      padding-bottom: 15px;
      border: 0;
      border-radius: 0;
      margin-bottom: 0;
      font-size: 12px;
      letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
      color: #1abc9c !important;
  }
  </style>
</head>
<body>

<?php
include('header.php');
?>


<!-- First Container -->
<div class="container-fluid bg-1 text-center" >
  <h3 class="margin">Welcome to <span style="color:orange;">Industrybuying.com</span></h3>
  
  <h5>Through Industrybuying, we seek to bring a revolutionary<br/> change in the industrial supply operations on national<br/> and global scale. While our mission is to bridge the gap between <br/>consumers and B2B merchants, our vision bespeaks formation of an exclusive online-trade ecosystem,<br/> which caters to the diverse needs of buyers and sellers.</h5>
</div>

<!-- Second Container -->
<div class="container-fluid bg-2 text-center">
  <h2 class="margin" style="text-decoration:underline";>Our Vision</h2>
  <p>Through Industrybuying,<br/> we seek to bring a revolutionary change in the industrial supply operations on national and global scale.<br/> While our mission is to bridge the gap between consumers and B2B merchants, our vision bespeaks formation of an exclusive online-trade ecosystem,<br/> which caters to the diverse needs of buyers and sellers. </p>
  
</div>

<!-- Third Container (Grid) -->


<?php
include('footer.php');
?>

</body>
</html>

