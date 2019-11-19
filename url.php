<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
        <head>
        <title>LINDO  REST API CRUD</title>
        <script src="boostrap/jquery.min.js"></script>
        <link rel="stylesheet" href="boostrap/bootstrap.min.css" />
        <script src="boostrap/bootstrap.min.js"></script>
            </head>
<body>


http://localhost/lindo_api/api/test_api.php?action=fetch_all

<br><br><br>

http://localhost/lindo_api/api/test_api.php?action=insert 

<br><br><br>

http://localhost/lindo_api/api/test_api.php?action=fetch_single&id=".$id.""

<br><br><br>


http://localhost/lindo_api/api/test_api.php?action=update

<br><br><br>

http://localhost/lindo_api/api/test_api.php?action=delete&id=".$id.""

<br><br><br>


    
</body>
</html>