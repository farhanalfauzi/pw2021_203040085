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

<!DOCTYPE html>
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
</html>