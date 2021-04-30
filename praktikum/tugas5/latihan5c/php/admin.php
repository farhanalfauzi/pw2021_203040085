<?php
require 'functions.php';
$gelang = query("SELECT * FROM gelang");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <style>
        .table {
            width: 100%;
            padding: 10px;
            font-family: arial;
            text-align: center;
        }
        th {
            background-color: black;
            color: white;
        }
        img {
            max-width: 150px;
        }
    </style>
</head>
<body>
    <div class="add">
        <a href="tambah.php"><button style="background-color: red; color: white;">Tambah Data</button></a>
    </div>
    <div class="table">
        <table border="1" cellspacing="0" cellpadding="5">
            <tr>
                <th>No</th>
                <th>opsi</th>
                <th>Picture</th>
                <th>Product Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Category</th>
            </tr>
            <?php $i = 1;?>
            <?php foreach($gelang as $gl) : ?>
                <tr>
                    <td><?= $i; ?></td> 
                    <td>
                        <a href=""><button style="background-color: black; color: white;">Ubah</button></a>
                        <a href="hapus.php?id=<?= $gl['id'] ?>" onclick="return confirm('Hapus Data??')"><button style="background-color: black; color: white;">Hapus</button></a>
                    </td>
                    <td><img src="../assets/img/<?= $gl["Picture"]; ?>"></td>
                    <td><?= $gl["Product Name"] ?></td>
                    <td><?= $gl["Description"] ?></td>
                    <td><?= $gl["Price"] ?></td>
                    <td><?= $gl["Category"] ?></td>
                </tr>
                <?php $i++ ?>
            <?php endforeach; ?>

            
        </table>
    </div>
</body>
</html>