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
        "picture" => "1.jpg",
        "name" => "Gelang Tenun Etnik",
        "description" => "Terbuat dari tali tenun, cocok digunakan sehari-hari",
        "price" => "Rp 15.000,00",
        "category" => "Tenun Etnik",
    ],
    [
        "picture" => "2.jpg",
        "name" => "Gelang Tenun Etnik",
        "description" => "Terbuat dari tali tenun, cocok digunakan sehari-hari",
        "price" => "Rp 15.000,00",
        "category" => "Tenun Etnik",
    ],
    [
        "picture" => "3.jpg",
        "name" => "Gelang Simple Paracord",
        "description" => "Terbuat dari tali paracord 4mm, cocok digunakan sehari-hari",
        "price" => "Rp 7.000,00",
        "category" => "Simple Paracord",
    ],
    [
        "picture" => "4.jpg",
        "name" => "Gelang Simple Paracord",
        "description" => "Terbuat dari tali paracord 4mm, cocok digunakan sehari-hari",
        "price" => "Rp 7.000,00",
        "category" => "Simple Paracord",
    ],
    [
        "picture" => "5.jpg",
        "name" => "Gelang Simple Paracord",
        "description" => "Terbuat dari tali paracord 4mm, cocok digunakan sehari-hari",
        "price" => "Rp 7.000,00",
        "category" => "Simple Paracord",
    ],
    [
        "picture" => "6.jpg",
        "name" => "Gelang Simple Paracord",
        "description" => "Terbuat dari tali paracord 4mm, cocok digunakan sehari-hari",
        "price" => "Rp 7.000,00",
        "category" => "Simple Paracord",
    ],
    [
        "picture" => "7.jpg",
        "name" => "Gelang Simple Paracord",
        "description" => "Terbuat dari tali paracord 4mm, cocok digunakan sehari-hari",
        "price" => "Rp 7.000,00",
        "category" => "Simple Paracord",
    ],
    [
        "picture" => "8.jpg",
        "name" => "Gelang Simple Paracord",
        "description" => "Terbuat dari tali paracord 4mm, cocok digunakan sehari-hari",
        "price" => "Rp 7.000,00",
        "category" => "Simple Paracord",
    ],
    [
        "picture" => "9.jpg",
        "name" => "Gelang Simple Prusik",
        "description" => "Terbuat dari tali prusik 2mm, cocok digunakan sehari-hari",
        "price" => "Rp 4.000,00",
        "category" => "Simple Prusik",
    ],
    [
        "picture" => "10.jpg",
        "name" => "Gelang Simple Prusik",
        "description" => "Terbuat dari tali prusik 2mm, cocok digunakan sehari-hari",
        "price" => "Rp 4.000,00",
        "category" => "Simple Prusik",
    ],
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
            <th>Picture</th>
            <th>Product Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Category</th>
            <tr></tr>
            <?php $nomor = 1;?>
            <?php foreach ($gelang as $gl) : ?>
                <td><?= $nomor; ?></td> 
                <td><img src="img/<?= $gl["picture"]; ?>"></td>
                <td><?= $gl["name"] ?></td>
                <td><?= $gl["description"] ?></td>
                <td><?= $gl["price"] ?></td>
                <td class = "categori"><?= $gl["category"] ?></td>
                <tr></tr>
                <?php $nomor++; ?>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>