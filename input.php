<?php  
   
 include 'koneksi.php';  
   
 $nama = $_POST['nama'];  
 $alamat = $_POST['alamat'];  
 $telepon = $_POST['telepon'];  
 $booking = $_POST['booking'];
   
   
 $sql = "INSERT INTO booking (nama, alamat, telepon, booking) VALUES ('$nama', '$alamat', 
'$telepon', '$booking')";  
   
 if (mysqli_query($mysqli, $sql)) {  
    echo "<script>
		 alert('pesanan telah terkirim');
		 window.location = 'booking.php';
		 </script>";
 } else {  
     echo "Error: " . mysqli_error($mysqli);  
 }  
   
 ?>