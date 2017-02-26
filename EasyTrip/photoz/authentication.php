<?php
include 'connect.php';

$email= $_POST['email'];
$password= $_POST['password'];

$sql_users= "select * from users where email='$email'
And password='$password'";

$result_users=mysqli_query($connect, $sql_users);
if(mysqli_num_rows($result_users)<=0)
{
 echo "No user  found with such email id and password";
}
else
{
 echo "user login successful";
 $row_users= mysqli_fetch_array($result_users);

session_start();
$_session['email']= $email;
$_name['name']= $row_users['name'];
$_session['userno']=$row_users['userno'];
}
?>
