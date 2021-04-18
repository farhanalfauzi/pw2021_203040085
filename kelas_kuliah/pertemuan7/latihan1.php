<?php
// Variable Scope / lingkup variabel
// $x = 10;
// function tampilX() {
//     global $x;
//     echo $x;
// }
// tampilX();

// SUPERGLOBALS
// variable global milik PHP
// merupakan Array Associative

// $_GET
$mahasiswa = [
    [
        "nama" => "Farhan Alfauzi",
        "nrp" => "203040085",
        "email" => "farhanalfauzii@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "1.png"
    ],
    [
        "nama" => "Hamzah Hadi P.",
        "nrp" => "203040087",
        "email" => "hamzahhadipermana18@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "2.png"
    ],
    [
        "nama" => "Ray Gineung P.",
        "nrp" => "203040099",
        "email" => "raypz642@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "3.png"
    ],
    [
        "nama" => "M. Rafliansyah",
        "nrp" => "203040105",
        "email" => "rafliansyah21@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "4.png"
    ],
    [
        "nama" => "Paiz Abdul J.",
        "nrp" => "203040108",
        "email" => "takumisento34@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "5.png"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
    <?php foreach($mahasiswa as $mhs) : ?>
        <li>
            <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
        </li>
    <?php endforeach; ?>
    </ul>
</body>
</html>