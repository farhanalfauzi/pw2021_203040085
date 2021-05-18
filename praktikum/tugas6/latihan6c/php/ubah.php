<?php 
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

$id = $_GET['id'];
$g = query("SELECT * FROM gelang WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
            alert('Data Berhasil Diubah!');
            document.location.href = 'admin.php';
          </script>";
  } else {
    echo  "<script>
            alert('Data Gagal Diubah!');
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
  <h3>Form Ubah Data Gelang</h3>
  <form action="" method="post">
    <input type="hidden" name="id" id="id" value="<?= $g['id']; ?>">
    <ul>
      <li>
        <label for="gambar">Gambar :</label><br>
        <input type="text" name="gambar" id="gambar" required value="<?= $g['gambar']; ?>"><br><br>
      </li>
      <li>
        <label for="produk">Produk :</label><br>
        <input type="text" name="produk" id="produk" required value="<?= $g['produk']; ?>"><br><br>
      </li>
      <li>
        <label for="deskripsi">Deskripsi :</label><br>
        <input type="deskripsi" name="deskripsi" id="deskripsi" required value="<?= $g['deskripsi']; ?>"><br><br>
      </li>
      <li>
        <label for="harga">Harga :</label><br>
        <input type="harga" name="harga" id="harga" required value="<?= $g['harga']; ?>"><br><br>
      </li>
      <li>
        <label for="gambar">Kategori :</label><br>
        <input type="kategori" name="kategori" id="kategori" required value="<?= $g['kategori']; ?>"><br><br>
      </li>
      <br>
      <button type="submit" name="ubah">Ubah Data!</button>
      <button type="submit">
        <a href="../index.php" style="text-decoration: none; color: black;">Kembali</a>
      </button>
    </ul>
  </form>
</body>
</html>