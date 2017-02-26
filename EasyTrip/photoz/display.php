<?php
include 'connect.php';
$sql_images="select * from image";
$result=mysql_query($connect,$sql_images);

while($row=mysql_fetch_array($result))
{
 echo '<img src="images/'.$row[1]. 'width="50px"/>';
echo '';
echo $row[2];
echo '<br>';
}

?>