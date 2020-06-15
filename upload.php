<?php
if(isset($_POST['btn-upload']))
{    
     
 $file =$_FILES['file']['name'];
 $file_loc = $_FILES['file'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="upload/";
 
 move_uploaded_file($file_loc,$folder.$file);
 $con = mysqli_connect("localhost","root","","product1");
 $sql="INSERT INTO prod(file,type,size) VALUES('$file','$file_type','$file_size')";
 mysqli_query($con,$sql); 
}
?>