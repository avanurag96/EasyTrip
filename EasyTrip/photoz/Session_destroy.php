<?php
session_start();
session_destroy();
echo 'You have been Logged Out';
echo '<A href="index.php">Start Again</a>';
?>