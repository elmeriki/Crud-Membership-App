<?php
session_start();
$_SESSION = array();
session_destroy();
echo 'You have sucessfully logout';
header('Refresh: 1; URL = index.php');
exit;
?>

