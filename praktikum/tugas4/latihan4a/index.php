<?php 
// melakukan koneksi ke database
$conn = mysqli_connect("localhost", "root", "");

// memilih database
mysqli_select_db($conn, "pw_tubes2_203040085");

// melakukan query dari database
$result = mysqli_query($conn, "SELECT * FROM gelang");

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
      <?php while($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
          <td><?= $i ?></td>
          <td><img src="assets/img/<?= $row["gambar"]; ?>"></td>
          <td><?= $row["produk"]; ?></td>
          <td><?= $row["deskripsi"]; ?></td>
          <td><?= $row["harga"]; ?></td>
          <td><?= $row["kategori"]; ?></td>
        </tr>
      <?php $i++ ?>
      <?php endwhile; ?>
    </table>
  </div>
</body>
</html>