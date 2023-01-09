<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style2.css">
	<title>Halaman admin - BABYBOO</title>
</head>
<body>
	<?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:masuk.php?pesan=gagal");
	}

	?>

    <ul>
        <li><a class="active" href="logout.php">Log Out</a></li>
    </ul>

    <div class="up">
        <center>
        <h2>HALAMAN ADMIN</h2>
        <p class="p1"><i>Daftar Booking BABYBOO</i></p>
        </center>
    </div>

    <br><br>

	<div class="don">
         <br />  
         <br />  
         <table>  
             <tr>  
                 <th>No</th> 
                 <th>Nama</th> 
                 <th>Alamat</th>  
                 <th>Telepon</th>  
                 <th>Booking Produk</th> 
                 <th>Aksi</th>  
             </tr>  
   
             <?php  
             include 'koneksi.php';  
             $query = "select * from booking";  
             $data = mysqli_query($mysqli, $query);  
             while ($d = mysqli_fetch_array($data)) {  
             ?>  
                 <tr>  
                     <td><?php echo $d['no']; ?></td>  
                     <td><?php echo $d['nama']; ?></td>
                     <td><?php echo $d['alamat']; ?></td>  
                     <td><?php echo $d['telepon']; ?></td>  
                     <td><?php echo $d['booking']; ?></td>  
                     <td>  
                         <a href="form_edit.php?no=<?php echo $d['no']; ?>">EDIT</a> 
                         <a href="hapus.php?no=<?php echo $d['no']; ?>" 
onclick="return confirm('Hapus data?')">HAPUS</a>  
                     </td>   
                 </tr>  
             <?php  
             }
             ?>  
         </table>  
    </div>
	<br/>
	<br/>

</body>
</html>