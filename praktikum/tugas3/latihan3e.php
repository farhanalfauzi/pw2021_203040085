<?php
/*
Farhan Alfauzi
203040085
Shift Kamis 8.00 - 9.00
*/
?>

<?php
$gelang = [
    [
        "gambar" => "1.jpg",
        "produk" => "Gelang Tenun Etnik",
        "deskripsi" => "Terbuat dari tali tenun, cocok digunakan sehari-hari",
        "harga" => "Rp 15.000,00",
        "kategori" => "Tenun Etnik"
    ],
    [
        "gambar" => "2.jpg",
        "produk" => "Gelang Tenun Etnik",
        "deskripsi" => "Terbuat dari tali tenun, cocok digunakan sehari-hari",
        "harga" => "Rp 15.000,00",
        "kategori" => "Tenun Etnik"
    ],
    [
        "gambar" => "3.jpg",
        "produk" => "Gelang Simple Paracord",
        "deskripsi" => "Terbuat dari tali paracord 4mm, cocok digunakan sehari-hari",
        "harga" => "Rp 7.000,00",
        "kategori" => "Simple Paracord"
    ],
    [
        "gambar" => "4.jpg",
        "produk" => "Gelang Simple Paracord",
        "deskripsi" => "Terbuat dari tali paracord 4mm, cocok digunakan sehari-hari",
        "harga" => "Rp 7.000,00",
        "kategori" => "Simple Paracord"
    ],
    [
        "gambar" => "5.jpg",
        "produk" => "Gelang Simple Paracord",
        "deskripsi" => "Terbuat dari tali paracord 4mm, cocok digunakan sehari-hari",
        "harga" => "Rp 7.000,00",
        "kategori" => "Simple Paracord"
    ],
    [
        "gambar" => "6.jpg",
        "produk" => "Gelang Simple Paracord",
        "deskripsi" => "Terbuat dari tali paracord 4mm, cocok digunakan sehari-hari",
        "harga" => "Rp 7.000,00",
        "kategori" => "Simple Paracord"
    ],
    [
        "gambar" => "7.jpg",
        "produk" => "Gelang Simple Paracord",
        "deskripsi" => "Terbuat dari tali paracord 4mm, cocok digunakan sehari-hari",
        "harga" => "Rp 7.000,00",
        "kategori" => "Simple Paracord"
    ],
    [
        "gambar" => "8.jpg",
        "produk" => "Gelang Simple Paracord",
        "deskripsi" => "Terbuat dari tali paracord 4mm, cocok digunakan sehari-hari",
        "harga" => "Rp 7.000,00",
        "kategori" => "Simple Paracord"
    ],
    [
        "gambar" => "9.jpg",
        "produk" => "Gelang Simple Prusik",
        "deskripsi" => "Terbuat dari tali prusik 2mm, cocok digunakan sehari-hari",
        "harga" => "Rp 4.000,00",
        "kategori" => "Simple Prusik"
    ],
    [
        "gambar" => "10.jpg",
        "produk" => "Gelang Simple Prusik",
        "deskripsi" => "Terbuat dari tali prusik 2mm, cocok digunakan sehari-hari",
        "harga" => "Rp 4.000,00",
        "kategori" => "Simple Prusik"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3e_203040085</title>
    <style>
        .table {
            width: 100%;
            padding: 10px;
            font-family: arial;
            text-align: left;
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
    <div class="table">
        <table border="1" cellspacing="0" cellpadding="5">
            <th>No</th>
            <th>Gambar</th>
            <th>Produk</th>
            <th>Deskripsi</th>
            <th>Harga</th>
            <th>Kategori</th>
            <tr></tr>
            <?php $i = 1;?>
            <?php foreach ($gelang as $g) : ?>
                <td><?= $i; ?></td> 
                <td><img src="img/<?= $g["gambar"]; ?>"></td>
                <td><?= $g["produk"] ?></td>
                <td><?= $g["deskripsi"] ?></td>
                <td><?= $g["harga"] ?></td>
                <td class = "kategori"><?= $g["kategori"] ?></td>
                <tr></tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>