<?php 
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}
// menghubungkan dengan file php lainnya
require 'functions.php';

// melakukan query
$gelang = query("SELECT * FROM gelang");

// ketika tombol cari diklik
if (isset($_POST['cari'])) {
  $gelang = cari($_POST['keyword']);
}
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/style1.css">
  <title>Halaman Admin</title>
</head>
<body>
  <div class="add">
    <a href="tambah.php"><button>Tambah Data</button></a>
  </div>

  <form action="" method="post">
    <input type="text" name="keyword" placeholder="masukan keyword pencarian" autocomplete="off" autofocus>
    <button type="submit" name="cari">Cari!</button>
  </form>

  <div class="logout">
    <a href="logout.php"><button>Logout</button></a>
  </div>

  <table border="1" cellpadding="13" cellspacing="0">
    <tr class="judul-kolom">
      <th>#</th>
      <th>opsi</th>
      <th>Gambar</th>
      <th>Produk</th>
      <th>Deskripsi</th>
      <th>Harga</th>
      <th>Kategori</th>
    </tr>

  <?php if(empty($gelang)) : ?>
  <tr>
    <td colspan="7"><h1 style="color: red;">Data tidak ditemukan</h1></td>
  </tr>
  <?php endif; ?>

    <?php $i = 1; ?>
    <?php foreach ($gelang as $g) : ?>
      <tr>
        <td><?= $i; ?></td>
        <td>
          <a href="ubah.php?id=<?= $g['id']; ?>"><button>Ubah</button></a>
          <a href="hapus.php?id=<?= $g['id']; ?>" onclick="return confirm('Hapus Data?')"><button>Hapus</button></a>
        </td>
        <td><img src="../assets/img/<?= $g['gambar']; ?>" alt=""></td>
        <td><?= $g['produk']; ?></td>
        <td><?= $g['deskripsi']; ?></td>
        <td><?= $g['harga']; ?></td>
        <td><?= $g['kategori']; ?></td>
      </tr>
      <?php $i++; ?>
    <?php endforeach; ?>
  </table>
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
      <link rel="stylesheet" href="css/style1.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>Halaman Admin</title>
    </head>

    <body>
        <!-- navbar -->
        <div class="navbar-fixed">
          <nav class="black">
            <div class="container">
              <div class="nav-wrapper">
                <a href="#!" class="brand-logo">Hanstore.</a>
                <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                  <li><a href="tambah.php">Tambah</a></li>
                  <li><a href="logout.php">Logout</a></li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
        <br><br>
        <!-- end navbar -->

        <!-- sidenav -->
        <ul class="sidenav" id="mobile-nav">
          <li><a href="tambah.php">Tambah</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
        <!-- end sidenav -->

        <!-- tombol cari -->
        <div class="container center">
          <h5>Cari Data</h5>
          <form action="" method="post">
            <input class="white" type="text" name="keyword" placeholder="Masukan keyword pencarian" autocomplete="off" autofocus>
            <button type="submit" name="cari">Cari!</button>
          </form>
          <br>
        </div>
        <!-- end tombol cari -->

        <!-- tabel -->
        <div class="container center">
          <table border="1" cellpadding="13" cellspacing="0">
            <tr class="judul-kolom">
              <th>#</th>
              <th>opsi</th>
              <th>Gambar</th>
              <th>Produk</th>
              <th>Deskripsi</th>
              <th>Harga</th>
              <th>Kategori</th>
            </tr>

            <?php if(empty($gelang)) : ?>
            <tr>
              <td colspan="7"><h1 style="color: red;">Data tidak ditemukan</h1></td>
            </tr>
            <?php endif; ?>

            <?php $i = 1; ?>
            <?php foreach ($gelang as $g) : ?>
              <tr>
                <td><?= $i; ?></td>
                <td>
                  <a href="ubah.php?id=<?= $g['id']; ?>"><button>Ubah</button></a>
                  <a href="hapus.php?id=<?= $g['id']; ?>" onclick="return confirm('Hapus Data?')"><button>Hapus</button></a>
                </td>
                <td><img src="../assets/img/<?= $g['gambar']; ?>" alt=""></td>
                <td><?= $g['produk']; ?></td>
                <td><?= $g['deskripsi']; ?></td>
                <td><?= $g['harga']; ?></td>
                <td><?= $g['kategori']; ?></td>
              </tr>
              <?php $i++; ?>
            <?php endforeach; ?>
          </div>
          <!-- end tabel -->
        
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>
        const sideNav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sideNav);
      </script>
    </body>
  </html>