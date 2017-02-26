<?php
include 'connect.php';
$name =$_POST['name'];
$email =$_POST['email'];
$password =$_POST['password'];

$sql_users= "insert into users (name,email,password) values ('$name','$email','$password')";

if(mysqli_query($connect,$sql_users))
{
 echo "Values sucessfully inserted in database";
}
else
{
 echo"Registration unsuccessful,please try again";
}

echo $sql_users;
?>
