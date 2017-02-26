<?php
include 'connect.php';
$imagepath=$_POST['imagename'];
$description=$_POST['description'];

$sql_upload="insert into image (imagepath,description) values ('$imagepath','$description')";

mysqli_query($connect,$sql_upload);
?>