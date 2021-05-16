<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
}

require 'functions.php';

if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                alert('Data berhasil ditambahkan!');
                document.location.href = 'admin.php';
            </script>";
    } else {
        echo "<script>
                alert('Data Gagal ditambahkan!');
                document.location.href = 'admin.php';
            </script>";
    }
}
?>

<h3>Form Tambah Data Gelang</h3>
<form action="" method="post">
    <ul>
        <li>
            <label for="picture">Picture</label><br>
            <input type="file" name="picture" id="picture" required><br><br>
        </li>
        <li>
            <label for="productname">Product Name</label><br>
            <input type="text" name="productname" id="productname" required><br><br>
        </li>
        <li>
            <label for="description">Description</label><br>
            <input type="description" name="description" id="description" required><br><br>
        </li>
        <li>
            <label for="price">Price</label><br>
            <input type="price" name="price" id="price" required><br><br>
        </li>
        <li>
            <label for="category">Category</label><br>
            <select name="category" id="category"  required>
                <option value="">------- Select a Category -------</option>
                <option value="Gelang Tenun Etnik">Tenun Etnik</option>
                <option value="Gelang Simple Paracord">Simple Paracord</option>
                <option value="Gelang Simple Prusik">Simple Prusik</option>
            </select>
        </li>
        <br>
        <button type="submit" name="tambah">Tambah Data!</button>
        <button type="submit">
            <a href="index.php" style="text-decoration: none; color: black;">Kembali</a>
        </button>
    </ul>
</form>
