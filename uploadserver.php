<?php
session_start();

$target_path = "files/";  
$target_path = $target_path.basename( $_FILES['file1']['name']);   
  
if (move_uploaded_file($_FILES['file1']['tmp_name'], $target_path)) {  
    header("location:AdminPannel.php");  
} else{  
    echo "ERROR, please go back and try again!";  
}  
?>  