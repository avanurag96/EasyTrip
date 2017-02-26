<?php
include 'connect.php' ?>
<html>
<head>
<title>Registration page</title>
</head>
<body bgcolor='green'>
<center><h1>EasyTrip.com</h1></center>
<br>
<center><img src="logo2.jpg" width='40%'></center>
<br>
<br>
<br>

<form method='post' action='register_insert.php'>
<table align='center'>
<tr>
<td>Name</td>
<td><input type='text' name='name' maxlength='50'></td></tr>
<tr>
<td>Email</td>
<td><input type='email' name='email' maxlength='50'></td>
</tr>
<tr>
<td>Password</td>
<td><input type='password' name='password'></td>
</tr>
<tr>
<td colspan='2'><input type='submit' name='submit'></td>
</tr>
</table>
</form>
</body>
</html>
