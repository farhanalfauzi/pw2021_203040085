<?php
// $mahasiswa = [
//     ["Farhan Alfauzi", "203040085", "farhanalfauzii@gmail.com", "Teknik Informatika"],
//     ["Hamzah Hadi P.", "203040087", "hamzahhadi01@gmail.com", "Teknik Informatika"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat  sendiri
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
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
        <li><img src="img/<?= $mhs["gambar"]; ?>" alt=""></li>
        <li>Nama : <?= $mhs["nama"]; ?></li>
        <li>NRP : <?= $mhs["nrp"]; ?></li>
        <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
        <li>Email : <?= $mhs["email"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>
