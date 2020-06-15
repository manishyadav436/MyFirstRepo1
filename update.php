<?php include('db1.php'); ?>
<?php
if(isset($_POST['upload']))
{    
     
 $file =$_FILES['file']['name'];
 $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $name=$_POST['prod'];
 $cat=$_POST['select'];
 $subcat=$_POST['subselect'];
 $folder="upload/";
 
 move_uploaded_file($file_loc,$folder.$file);
 $con = mysqli_connect("localhost","root","","product");
 $sql="INSERT INTO prod2(name,cat,subcat,file,type,size) VALUES('$name','$cat','$subcat','$file','$file_type','$file_size')";
 mysqli_query($con,$sql);
 header('Location: admin.php');
}
?>