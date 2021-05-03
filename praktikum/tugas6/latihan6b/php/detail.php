<?php
if (!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
}

require 'functions.php';

$id = $_GET['id'];
$pw_tubes_203040085 = query("SELECT * FROM gelang WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            border: 2px solid black;
            width: 350px;
            padding: 10px;
            font-family: Arial, Helvetica, sans-serif;
        }
        img {
            max-width: 200px;
            border: 5px solid black;
            box-shadow: 2px 2px 2px rgba(0,0,0,0.5);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="gambar">
            <img src="../assets/img/<?= $pw_tubes_203040085["Picture"]; ?>" alt="">
        </div>
        <div class="Description">
            <p><?= $pw_tubes_203040085["Product Name"]; ?></p>
            <p><?= $pw_tubes_203040085["Description"]; ?></p>
            <p><?= $pw_tubes_203040085["Price"]; ?></p>
            <p><?= $pw_tubes_203040085["Category"]; ?></p>
        </div>

        <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>
</body>
</html>