<?php
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
    <ul>
        <input type="hidden" name="id" id="id" value="<?= $gl['id']; ?>">
        <li>
            <label for="picture">Picture</label><br>
            <input type="file" name="picture" id="picture" required value="<?= $gl['picture']; ?>"><br><br>
        </li>
        <li>
            <label for="product name">Product Name</label><br>
            <input type="text" name="product name" id="product name" required value="<?= $gl['product name']; ?>"><br><br>
        </li>
        <li>
            <label for="description">Description</label><br>
            <input type="description" name="description" id="description" required value="<?= $gl['description']; ?>"><br><br>
        </li>
        <li>
            <label for="price">Price</label><br>
            <input type="price" name="price" id="price" required value="<?= $gl['price']; ?>"><br><br>
        </li>
        <li>
            <label for="category">Category</label><br>
            <input type="category" name="category" id="category" required  value="<?= $gl['category']; ?>"><br><br>
        </li>
        <br>
        <button type="submit" name="ubah">Ubah Data!</button>
        <button type="submit">
            <a href="index.php" style="text-decoration: none; color: black;">Kembali</a>
        </button>
    </ul>
</form>
