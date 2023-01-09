<?php  
  
$mysqli = new mysqli("localhost","tiumpcom_babyboo","babylucu12345","tiumpcom_babyboo");  
   
// Check connection  
if ($mysqli -> connect_errno) {  
   echo "Failed to connect to MySQL: " . $mysqli -> connect_error;  
   exit();  
}
?>