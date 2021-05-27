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

<!-- <!DOCTYPE html>
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
        <a href="admin.php" style="text-decoration: none; color: black;">Kembali</a>
      </button>
    </ul>
  </form>
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

    <!-- My CSS -->
    <link rel="stylesheet" href="css/style2.css">
    <title>Halaman Ubah Data</title>
  </head>
  <body>

    <!-- Login -->
    <div class="auth">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-7 col-lg-5">
            <div class="card">
              <div class="card-body">
                <h3 class="mb-5">Formulir Ubah Data</h3>
                <form action="" method="post">
                <input type="hidden" name="id" id="id" value="<?= $g['id']; ?>">

                  <div class="form-group">
                    <label for="gambar">Gambar :</label><br>
                    <input type="text" name="gambar" id="gambar" size="45" required value="<?= $g['gambar']; ?>">
                  </div>
                  
                  <div class="form-group">
                    <label for="produk">Produk :</label><br>
                    <input type="text" name="produk" id="produk" size="45" required value="<?= $g['produk']; ?>">
                  </div>

                  <div class="form-group">
                    <label for="deskripsi">Deskripsi :</label><br>
                    <input type="deskripsi" name="deskripsi" id="deskripsi" size="45" required value="<?= $g['deskripsi']; ?>">
                  </div>

                  <div class="form-group">
                    <label for="harga">Harga :</label><br>
                    <input type="harga" name="harga" id="harga" size="45" required value="<?= $g['harga']; ?>">
                  </div>

                  <div class="form-group">
                    <label for="gambar">Kategori :</label><br>
                    <input type="kategori" name="kategori" id="kategori" size="45" required value="<?= $g['kategori']; ?>">
                  </div>

                  <div class="form-group my-4">
                    <button type="submit" name="ubah" class="btn btn-dark form-control">Ubah</button>
                  </div>
                  <div class="container">
                    <p><a href="admin.php">Kembali</a></p>
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Login -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>