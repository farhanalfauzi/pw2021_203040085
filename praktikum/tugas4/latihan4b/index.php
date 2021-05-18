<?php 
// menghubungkan dengan file php lainnya
require 'php/functions.php';

// melakukan query
$gelang = query("SELECT * FROM gelang")
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Document</title>
</head>
<body>
  <div class="container">
    <table cellpadding="10" cellspacing="0" border="1">
      <th>No</th>
      <th>Gambar</th>
      <th>Produk</th>
      <th>Deskripsi</th>
      <th>Harga</th>
      <th>Kategori</th>
      <?php $i = 1 ?>
      <?php foreach ($gelang as $g) : ?>
        <tr>
          <td><?= $i ?></td>
          <td><img src="assets/img/<?= $g["gambar"]; ?>"></td>
          <td><?= $g["produk"]; ?></td>
          <td><?= $g["deskripsi"]; ?></td>
          <td><?= $g["harga"]; ?></td>
          <td><?= $g["kategori"]; ?></td>
        </tr>
      <?php $i++ ?>
      <?php endforeach; ?>
    </table>
  </div>
</body>
</html>