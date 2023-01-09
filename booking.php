<!DOCTYPE html>
<html lang="en">

<?php
  //include 'connection.php';
?>

<head>
  <title>Website</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <header class="header">
    <img src="logo.png" class="image1" width="100px" height="100px">
    <h1>BABYBOO</h1>
    <p>Sewa Peralatan Bayi Berkualitas</p>
  </header>

  <nav class="navbar">
  <ul>
    <li class="utama"><a href="index.php">Beranda</a></li>
      <li class="utama"><a href="#">Informasi</a>
        <ul>
          <li><a href="informasi.php">Cara Booking</a></li>
          <li><a href="booking.php">Booking</a></li>
        </ul>
        </li>
      <li class="utama"><a href="produk.php">Produk</a></li>
      <li class="utama"><a href="masuk.php">Admin</a>
      </li>
    </ul>
  </nav>

  <main class="main">

    <div class="content">
      <br>
    <form method="post" action="input.php">  
             </br>
             Nama   : <input type="text" name="nama">
             <br><br>
             Alamat : <input type="text" name="alamat">
             <br><br>
             Telepon: <input type="text" name="telepon">
             <br><br>
             Booking:
             <br><br>
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
             <input type="submit" name="submit" value="Submit">  
   </form>
    </div>
    
    <aside class="sidebar">
      <h2>Tentang kami</h2>
      <p>Babyboo menyediakan berbagai macam perlengkapan bayi dan mainan anak.
        Semua barang melalui proses sterilisasi cermat, sehingga dijamin
        bersih dan steril.
      </p>
      <br>
      <h2>Kontak</h2>
      <p>Alamat : Jalan Ahmad Yani No.7</p>
      <p>Telepon : (+62)85629364179</p>
      <p>Email : babyboo@gmail.com</p>
      <h3>Jam Operasional</h3>
      <p>Senin-Sabtu / 09.00-16.00</p>
      <p>Minggu dan Hari Besar LIBUR</p>
    </aside>
  </main>

  <footer class="footer">
    <p>Copyright &copy 2022 Babyboo</p>
  </footer>

</body>

</html>