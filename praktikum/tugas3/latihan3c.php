<?php
/*
Farhan Alfauzi
203040085
Shift Kamis 8.00 - 9.00
*/
?>

<?php
$pemain_bola = [
    "Christiano Ronaldo" => "Juventus",
    "Lionel Messi" => "Barcelona",
    "Luca Modric" => "Real Madrid",
    "Mohammad Salah" => "LiverPool",
    "Neymar Jr" => "Paris Saint German",
    "Sadio Mane" => "LiverPool",
    "Zlatan Ibrahimovic" => "Ac Milan"
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan3c_203040085</title>
    <style>
        .tabel {
            border: 2px solid black;
            padding: 10px;
            text-align: left;
            font-family: arial;
            width: 50%;
        }
    </style>
</head>
<body>
    <div class="tabel">
        <p><b>Daftar pemain bola terkenal dan clubnya</b></p>
        <table>
            <?php foreach ($pemain_bola as $pb => $club) : ?>
                <td><b><?= $pb;?></b></td>
                <td>:</td>
                <td><?= $club;?></td>
                <tr></tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>