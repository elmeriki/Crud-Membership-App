<?php
 $connect = mysqli_connect("localhost", "root", "", "lindo_api");  
 $query = "SELECT * FROM lindoapi ORDER BY id desc";  
 $result = mysqli_query($connect, $query);  
?>


