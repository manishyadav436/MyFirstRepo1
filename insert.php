<?php
include ('connect.php');?>
<?php
if(isset($_POST['upload']))
{
	
	$name=$_POST['name'];
	
	$sql="INSERT INTO video(name)VALUES ('$name')";
	$result=mysql_query($sql,$con);
if(!$result)
  {
  die('Error: ' . mysql_error());
  }

}
mysql_close($con);
?>

