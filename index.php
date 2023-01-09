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
      <h2>Kualitas Produk</h2>
      <dan>Babyboo berkomitmen untuk selalu menjaga kebersihan barang-barang kami 
        dan memastikan semua barang masih dalam keadaan BERSIH dan STERIL
        ketika Mommies terima.</p>
      <br>
      <center><h2 class="gal-j">PROMO</h2></center>
      <div class="gal">
        <br></br>
        <div class="responsive">
        <div class="gallery1">
            <center>
            <a target="_blank" href="gambar/stroller.jpg">
                <img src="gambar/stroller.jpg"  width="150" height="150">
            </a>
            </center>
            <div class="desc">
              <p>STROLLER</p>
              <p><del>Rp.250.000,00</del>  Rp.200.000,00</p>
            </div>
        </div>
      </div>
      <div class="responsive">
        <div class="gallery2">
            <center>
            <a target="_blank" href="gambar/babybox.jpg">
                <img src="gambar/babybox.jpg"  width="150" height="150">
            </a>
            </center>
            <div class="desc">
              <p>BABY BOX</p>
              <p><del>Rp.300.000,00</del>  Rp.200.000,00</p>
            </div>
        </div>
      </div>
      <div class="responsive">
        <div class="gallery3">
            <center>
            <a target="_blank" href="gambar/ayunanbayi.jpg">
                <img src="gambar/ayunanbayi.jpg"  width="150" height="150">
            </a>
            </center>
            <div class="desc">
              <p>AYUNAN BAYI</p>
              <p><del>Rp.200.000,00</del>  Rp.150.000,00</p>
            </div>
        </div>
      </div>
      <div class="responsive">
        <div class="gallery4">
            <center>
            <a target="_blank" href="gambar/hipseat.jpg">
                <img src="gambar/hipseat.jpg"  width="150" height="150">
            </a>
            </center>
            <div class="desc">
              <p>BABY CARRIER</p>
              <p><del>Rp.220.000,00</del>  Rp.130.000,00</p>
            </div>
        </div>
      </div>
      <div class="clearfix"></div>
      </div>
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