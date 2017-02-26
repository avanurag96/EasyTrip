<?php
session_start();
?>
<html>
<head>
</head>
<body>
<?php
session_destroy();
echo 'You have been Logged Out';
echo '<A href="index.php">Start Again</a>';
?>
</body>
</html>