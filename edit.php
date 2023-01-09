<?php  
   
 include 'koneksi.php';  
   
 $no = $_POST['no'];  
 $nama = $_POST['nama'];  
 $alamat = $_POST['alamat'];
 $telepon = $_POST['telepon']; 
 $booking = $_POST['booking']; 
   
 $sql = "UPDATE booking SET nama = '$nama', alamat = '$alamat', telepon = '$telepon', booking = '$booking' 
 WHERE no = $no";  
 $data = mysqli_query($mysqli, $sql);  
 if (mysqli_affected_rows($mysqli) > 0) {  
     echo "<script> alert('Berhasil mengupdate data!');  
     document.location.href = 'halaman_admin.php';  
     </script>";  
 } else {  
     echo "Error: Gagal update data. " . mysqli_error($mysqli);  
     echo "<br><a href=halaman_admin.php>KEMBALI</a>";  
 }  
   
 ?>