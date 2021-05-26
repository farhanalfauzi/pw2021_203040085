<?php 

  // mengecek apakah ada id yang dikirimkan
  // jika tidak maka akan dikembalikan ke halaman index.php
  if (!isset($_GET['id'])) {
      header("location: ../index.php");
      exit;
  }

  require 'functions.php';

  // mengambil id dari url
  $id = $_GET['id'];

  // melakukan query dengan parameter id yang diambil dari url
  $g = query("SELECT * FROM gelang WHERE id = $id")[0];
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    img {
      width: 100px;
      border: 2px solid black;
      box-shadow: 5px 5px black;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="gambar">
      <img src="../assets/img/<?= $g["gambar"]; ?>" alt="">
    </div>
    <div class="keterangan">
      <p><?= $g["produk"]; ?></p>
      <p><?= $g["deskripsi"]; ?></p>
      <p><?= $g["harga"]; ?></p>
      <p><?= $g["kategori"]; ?></p>
    </div>

    <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
  </div>
</body>
</html> -->

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- MyCSS -->
    <link rel="stylesheet" href="css/style3.css">

    <title>Halaman Detail</title>
  </head>
  <body>

    <div class="auth">
      <div class="container">
        <div class="row justify-content-center">
          
            <div class="card" style="width: 20rem;">
              <img src="../assets/img/<?= $g["gambar"]; ?>" alt="">
              <div class="card-body">
                  <h3><?= $g["produk"]; ?></h3>
                  <p><?= $g["deskripsi"]; ?></p>
                  <p>Harga: Rp. <?= $g["harga"]; ?></p>
                  <p><?= $g["kategori"]; ?></p>
                <a href="../index.php" class="btn btn-dark">Kembali</a>
              </div>
            </div>
          
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>