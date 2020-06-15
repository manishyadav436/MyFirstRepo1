<!DOCTYPE html>
<html lang="en">
<head>
  <title>Submit</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<style>
fieldset{
	width:auto;
	padding:0 10px;
	border:1px groove;
}
legend.scheduler-border{
	width:auto;
	padding-top:10px;
	border:none;
	
}
input[type=number]::inner-spin-button,
input[type=number]::outer-spin-button{
	appearance: none;
	margin:0;
}
@media 
</style>
<div class="container">
  <form class="form-horizontal">
 <fieldset class="scheduler-border">
<legend class="scheduler-border"> 
   <h2 style="text-align:center;">Apply For Credit</h2><br>
  </legend>
    <div class="form-group">
	
      <label class="control-label col-sm-2" for="email">Name</label>
      <div class="col-sm-6">
        <input style="width:100%; height:50%;" type="name" class="form-control" id="name" placeholder="Name" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Email</label>
      <div class="col-sm-6">          
        <input type="email" class="form-control" id="pwd" placeholder="Email" required>
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Phone No.</label>
      <div class="col-sm-6">          
        <input type="text" class="form-control" id="pwd" placeholder="Phone No" required>
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Message</label>
      <div class="col-sm-6">          
        <input style="height:120px;padding-bottom:85px;"type="text" class="form-control" id="pwd" placeholder="Message" required>
      </div>
    </div>
   
    <div class="form-group">        
      <div class="col-sm-offset-4 col-sm-6">
	  <button  type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
	</fieldset>
  </form>
</div>

</body>
</html>
