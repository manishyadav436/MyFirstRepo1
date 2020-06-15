<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  if(!mysql_select_db("video"))
  {
	  die('Database not connected: ' . mysql_error());
  }
?>