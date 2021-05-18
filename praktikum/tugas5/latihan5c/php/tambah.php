<?php 
require 'functions.php';

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('Data Berhasil Ditambahkan!');
            document.location.href = 'admin.php';
          </script>";
  } else {
    echo  "<script>
            alert('Data Gagal Ditambahkan!');
            document.location.href = 'admin.php';
          </script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h3>Form Tambah Data Gelang</h3>
  <form action="" method="post">
    <ul>
      <li>
        <label for="gambar">Gambar :</label><br>
        <input type="file" name="gambar" id="gambar" required><br><br>
      </li>
      <li>
        <label for="produk">Produk :</label><br>
        <input type="text" name="produk" id="produk" required><br><br>
      </li>
      <li>
        <label for="deskripsi">Deskripsi :</label><br>
        <input type="deskripsi" name="deskripsi" id="deskripsi" required><br><br>
      </li>
      <li>
        <label for="harga">Harga :</label><br>
        <input type="harga" name="harga" id="harga" required><br><br>
      </li>
      <li>
        <label for="gambar">Kategori :</label><br>
        <input type="kategori" name="kategori" id="kategori" required><br><br>
      </li>
      <br>
      <button type="submit" name="tambah">Tambah Data!</button>
      <button type="submit">
        <a href="../index.php" style="text-decoration: none; color: black;">Kembali</a>
      </button>
    </ul>
  </form>
</body>
</html>