<?php include('db1.php'); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>File Upload and view With PHP and MySql</title>
</head>
<body>
<form action="upload2.php" method="post" enctype="multipart/form-data">
<input type="file" name="file" />
<input list="categary" name="cat">
  <datalist id="categary">
    <option value="p1">
    <option value="p2">
	<option value="p3">
  </datalist>
  <input list="sub-categary" name="subcat">
  <datalist id="sub-categary">
    <option value="1">
    <option value="2">
	<option value="3">
	<option value="4">
	<option value="5">
  </datalist>
<button type="submit" name="upload">upload</button>
</form>
</body>
</html>
