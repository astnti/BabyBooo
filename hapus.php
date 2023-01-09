<?php  
   
 include 'koneksi.php';  
   
 $no = $_GET['no'];  
   
 $sql = "DELETE FROM booking WHERE no = " . $no;  
   
 mysqli_query($mysqli, $sql);  
   
 if (mysqli_affected_rows($mysqli) > 0) {  
     echo "<script> alert('Berhasil menghapus data!');    
     document.location.href = 'halaman_admin.php';     
     </script>";   
 }  else  {
     echo "<script> alert('Gagal menghapus data!');    
     document.location.href = 'halaman_admin.php';
     </script>";  
 }
   
 ?>  