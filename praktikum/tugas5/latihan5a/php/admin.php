<?php 
// menghubungkan dengan file php lainnya
require 'functions.php';

// melakukan query
$gelang = query("SELECT * FROM gelang");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/style.css">
  <title>Document</title>
</head>
<body>
  <table border="1" cellpadding="13" cellspacing="0">
    <tr>
      <th>#</th>
      <th>opsi</th>
      <th>Gambar</th>
      <th>Produk</th>
      <th>Deskripsi</th>
      <th>Harga</th>
      <th>Kategori</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach ($gelang as $g) : ?>
      <tr>
        <td><?= $i; ?></td>
        <td>
          <a href=""><button>Ubah</button></a>
          <a href=""><button>Hapus</button></a>
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
</html>