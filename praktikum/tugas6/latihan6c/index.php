<?php
/*
Farhan Alfauzi
203040085
Shift Kamis 8.00 - 9.00
*/
?>

<?php
require 'php/functions.php';
$gelang = query("SELECT * FROM gelang")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        .container {
            width: 350px;
            padding: 10px;
            font-family: arial;
            border: 2px solid black;
        }
    </style>
</head>
<body>
    <a href="php/login.php">
        <button type="">Masuk ke halaman admin</button>
    </a>
    <div class="container">
            <?php foreach ($gelang as $gl) : ?>
                <p class="name">
                    <a href="php/detail.php?id=<?= $gl['id']?>">
                        <?= $gl["Product Name"] ?>
                    </a>
                </p>
            <?php endforeach; ?>
    </div>
</body>
</html>