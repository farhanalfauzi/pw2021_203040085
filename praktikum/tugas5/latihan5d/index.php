<?php
/*
Farhan Alfauzi
203040085
Shift Kamis 8.00 - 9.00
*/
?>

<?php
require 'php/functions.php';
$pw_tubes_203040085 = query("SELECT * FROM gelang")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan4c_203040085</title>
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
    <div class="container">
            <?php foreach ($pw_tubes_203040085 as $glg) : ?>
                <p class="name">
                    <a href="php/detail.php?id=<?= $glg['id']?>">
                        <?= $glg["Product Name"] ?>
                    </a>
                </p>
            <?php endforeach; ?>
    </div>
</body>
</html>

<!-- index -->