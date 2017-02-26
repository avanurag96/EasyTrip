<?php
include 'connect.php';
?>

<html>
<head> 
<title>Photoz</title>
</head>
<body bgcolor='yellow'>
<center><h1>EasyTrip.com</h1></center>
<br>
<center><a href="easy.html">Main Page</a>
<br>
<a href="label.html">First time user?</a>
<br>

<br>
<center><img src='logo.jpg' width='40%' /></center>
<br><br><br>
<center><form method="post" action='authentication.php'>
<table>
<tr>
<td colspan='2'>Email</td>
<td> <input type='text' name='email' maxlength='50' /></td>
</tr>
<tr>
<td colspan='2'>Password</td>
<td> <input type='password' name='password' /></td>
</tr>
<tr>
<td colspan='2'> <input type='submit' name='login_submit'/></td>
</tr>
<tr>
<td colspan='2'>
 <a href='register.php '> Register now </a>
</td>
</tr>
</table>
</form></center>
</body>
</html>