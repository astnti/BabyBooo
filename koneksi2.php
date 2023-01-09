<?php 
$koneksi = mysqli_connect("localhost","tiumpcom_babyboo","babylucu12345","tiumpcom_babyboo");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>