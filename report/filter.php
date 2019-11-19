<?php
session_start();
if ( ! isset( $_SESSION['isLogged'] ) or "1" != $_SESSION['isLogged'] )
header('Location: ' . '../index.php');
?>

<?php  
include_once 'config.php';
 ?> 

<?php   


$query = "SELECT * FROM lindoapi ORDER BY id desc";  
$result = mysqli_query($connect, $query);  
 if(isset($_POST["from_date"], $_POST["to_date"]))  
 {   $output = '';  
      $query = "  
           SELECT * FROM lindoapi  
           WHERE created BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'  
      ";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
           <table class="table table-bordered">  
           <tr>  
           <th width="5%">ID</th>  
           <th width="30%">First Name</th>  
           <th width="30%">Last Name</th>  
           <th width="20%">Date Captured</th>  
           <th width="40%">Date and Time Modified</th>  
      </tr>  
      ';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
            $output .= '  
                 <tr>  
                      <td>'. $row["id"] .'</td>  
                      <td>'. $row["first_name"] .'</td>  
                      <td>'. $row["last_name"] .'</td>  
                      <td>'.$row["created"] .'</td>  
                      <td>'.  $row["modified"] .'</td>  
                 </tr>  
            ';  
       }  
  }
      else  
      {  
           $output .= '  
                <tr>  
                     <td colspan="5">No Lead Found</td>  
                </tr>  
           ';  
      }  
      $output .= '</table>';  
      echo $output;  
 }  
 ?>