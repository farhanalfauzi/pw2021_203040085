<?php 
// menghubungkan dengan file php lainnya
require 'php/functions.php';

// melakukan query
$gelang = query("SELECT * FROM gelang")
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style2.css">
  <title>Document</title>
</head>
<body>
  <a href="php/login.php">
    <button type="">Masuk ke halaman admin</button>
  </a>
  <br><br>
  
  <h1>Daftar Gelang</h1>
  <p>Klik untuk melihat detail produk.</p>
  <br>

  <div class="container">
    <?php foreach ($gelang as $g) : ?>
      <p>
        <a href="php/detail.php?id=<?= $g['id']; ?>">
            <?= $g["produk"]; ?>
        </a>
      </p>
    <?php endforeach; ?>
  </div>
</body>
</html> -->

<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <!-- My CSS -->
      <link rel="stylesheet" href="css/style2.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>Hanstore.krw | Gelang Murah Karawang</title>
    </head>

    <body>

    <!-- Navbar -->
    <div class="navbar-fixed">
      <nav class="black">
        <div class="container">
          <div class="nav-wrapper">
            <a href="#!" class="brand-logo">Hanstore.</a>
            <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
              <li><a href="index.php">Beranda</a></li>
              <li><a href="php/login.php">Login</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <!-- end Navbar -->

    <!-- sideNav -->
    <ul class="sidenav" id="mobile-nav">
            <li><a href="index.php">Beranda</a></li>
            <li><a href="php/login.php">Login</a></li>
    </ul>
    <!-- end sideNav -->

    <div class="section no-pad-bot" id="index-banner">
      <div class="container">
        <br><br>
        <h1 class="header center black-text">Selamat Datang</h1>
        <div class="row center">
          <h5 class="header col s12 light">Di Pusat Gelang Murah Karawang</h5>
        </div>
        <br><br>
      </div>
    </div>

    <!-- icon -->
    <div class="container">
      <div class="section">

        <!--   Icon Section   -->
        <div class="row">
          <div class="col s12 m6">
            <div class="icon-block">
              <h2 class="center black-text"><i class="material-icons medium">location_on</i></h2>
              <h5 class="center">Lokasi Toko</h5>

              <p class="center">Jalan Raya Kosambi Gg. Masijd Al-Falah No.60<br>Kab. Karawang, Prov. Jawa Barat</p>
            </div>
          </div>

          <div class="col s12 m6">
            <div class="icon-block">
              <h2 class="center black-text"><i class="material-icons medium">group</i></h2>
              <h5 class="center">Tim Kerja</h5>

              <p class="center">@cirengisi.montok<br>@vanyu.coffee</p>
            </div>
          </div>
        </div>

      </div>
      <br><br>
    </div>
    <!-- end icon-->

    <!-- Product -->
    <div class="container center">
    <h2>Daftar Produk</h2>
    <p>Klik untuk melihat detail produk.</p>
      <?php foreach ($gelang as $g) : ?>
        <p>
          <a href="php/detail.php?id=<?= $g['id']; ?>">
              <?= $g["produk"]; ?>
          </a>
        </p>
      <?php endforeach; ?>
    </div>
    <br><br>

    <!-- footer -->
    <footer class="page-footer black">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">Bio Toko</h5>
            <p class="grey-text text-lighten-4">Kami memproduksi berbagai jenis gelang yang terbuat dari 3 jenis tali seperti tali prusik, tali paracord, dan tali tenun. Gelang ini sangat cocok digunakan untuk kegiatan sehari-hari. Kami pun menjual dengan harga yang terjangkau.<br>Terima kasih telah mengunjungi website Kami.</p>


          </div>
          <div class="col l3 s12">
            <h5 class="white-text">Tim Support</h5>
            <ul>
              <li>@cirengisi.montok</li>
              <li>@vanyu.coffee</li>
            </ul>
          </div>
          <div class="col l3 s12">
            <h5 class="white-text">Media Sosial</h5>
            <ul>
              <li>Instagram: @hanstore.krw</li>
              <li>WA: +62 821 2218 3133</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container center">
        Dibuat oleh <a class="orange-text text-lighten-3" href="https://www.instagram.com/hanstore.krw/">hanstore.krw</a>
        </div>
      </div>
    </footer>
    <!-- endfooter -->


      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>

      <script>
        const sideNav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sideNav);
      </script>
    </body>
  </html>