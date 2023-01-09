<!DOCTYPE html>
<html>
<head>
	<title>Halaman admin - BABYBOO</title>
    <link rel="stylesheet" href="style2.css">

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
        <li><a class="active" href="halaman_admin.php">Kembali</a></li>
    </ul>

	<div class="up">
        <center>
        <h2>HALAMAN ADMIN</h2>
        <p class="p1"><i>EDIT DATA BOOKING</i></p>
        </center>
    </div>

	<div class="don">
         <br />
         <br />  
         <?php  
         include 'koneksi.php';  
         $sql = "SELECT * FROM booking WHERE no = " . $_GET['no'];  
         $data = mysqli_query($mysqli, $sql);  
         $d = mysqli_fetch_assoc($data);  
         ?>  
         <form method="post" action="edit.php">  
             <table>  
                 <tr>  
                     <td>Nama</td>  
                     <td>  
                         <input type="hidden" name="no" value="<?php echo $d['no']; ?>">  
                         <input type="text" name="nama" value="<?php echo $d['nama']; ?>">  
                     </td>  
                 </tr>
                 <tr>  
                     <td>Alamat</td>  
                     <td>  
                         <input type="hidden" name="no" value="<?php echo $d['no']; ?>">  
                         <input type="text" name="alamat" value="<?php echo $d['alamat']; ?>">  
                     </td>  
                 </tr>  
                 <tr>  
                     <td>Telepon</td>  
                     <td>  
                         <input type="hidden" name="no" value="<?php echo $d['no']; ?>">  
                         <input type="text" name="telepon" value="<?php echo $d['telepon']; ?>">  
                     </td>  
                 </tr>
                 <tr>  
                     <td>Booking</td>  
                     <td>  
                         <input type="hidden" name="no" value="<?php echo $d['no']; ?>">  
                         <input type="radio" name="booking" value="ayunanbayi">Ayunan Bayi
                         <input type="radio" name="booking" value="babybathtub">Baby Bathtub
                         <input type="radio" name="booking" value="babybox">Baby Box
                         <input type="radio" name="booking" value="babyboxtwin">Baby Box Twin
                         <input type="radio" name="booking" value="babychair">Baby Chair
                         <br><br>
                         <input type="radio" name="booking" value="babyplaymat">Baby Playmat
                         <input type="radio" name="booking" value="bathtub">Bathtub
                         <input type="radio" name="booking" value="carseat">Carseat
                         <input type="radio" name="booking" value="hipseat">Hipseat
                         <input type="radio" name="booking" value="stroller">Stroller
                         <input type="radio" name="booking" value="stollertwin">Strollertwin
                         <input type="radio" name="booking" value="tasbayi">Tas Bayi
                         <br><br>  
                     </td>  
                 </tr>  
                 <tr>  
                     <td></td>  
                     <td><input type="submit" value="SIMPAN"></td>  
                 </tr>  
             </table>  
         </form>
     </div> 
	<br/>
	<br/>

</body>
</html>