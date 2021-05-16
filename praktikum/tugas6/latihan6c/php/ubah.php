<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
}

require 'functions.php';

$id = $_GET['id'];
$gl = query("SELECT * FROM gelang WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                alert('Data berhasil diubah!');
                document.location.href = 'admin.php';
            </script>";
    } else {
        echo "<script>
                alert('Data Gagal diubah!');
                document.location.href = 'admin.php';
            </script>";
    }
}
?>

<h3>Form Ubah Data Gelang</h3>
<form action="" method="post">
    <input type="hidden" name="id" id="id" value="<?= $gl['id']; ?>">
    <ul>
        <li>
            <label for="picture">Picture</label><br>
            <input type="text" name="picture" id="picture" required value="<?= $gl['Picture']; ?>"><br><br>
        </li>
        <li>
            <label for="productname">Product Name</label><br>
            <input type="text" name="productname" id="productname" required value="<?= $gl['Product Name']; ?>"><br><br>
        </li>
        <li>
            <label for="description">Description</label><br>
            <input type="description" name="description" id="description" required value="<?= $gl['Description']; ?>"><br><br>
        </li>
        <li>
            <label for="price">Price</label><br>
            <input type="price" name="price" id="price" required value="<?= $gl['Price']; ?>"><br><br>
        </li>
        <li>
            <label for="category">Category</label><br>
            <input type="category" name="category" id="category" required value="<?= $gl['Category']; ?>">
        </li>
        <br>
        <button type="submit" name="ubah">Ubah Data!</button>
        <button type="submit">
            <a href="index.php" style="text-decoration: none; color: black;">Kembali</a>
        </button>
    </ul>
</form>
