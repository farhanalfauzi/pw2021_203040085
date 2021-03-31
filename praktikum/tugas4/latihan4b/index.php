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
    <title>Latihan4b_203040085</title>
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
    <div class="table">
        <table border="1" cellspacing="0" cellpadding="5">
            <tr>
                <th>No</th>
                <th>Picture</th>
                <th>Product Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Category</th>
            </tr>
            <?php $i = 1 ?>
            <?php foreach ($pw_tubes_203040085 as $glg) : ?>
                <tr>
                    <td><?= $i ?></td> 
                    <td><img src="assets/img/<?= $glg["Picture"]; ?>"></td>
                    <td><?= $glg["Product Name"] ?></td>
                    <td><?= $glg["Description"] ?></td>
                    <td><?= $glg["Price"] ?></td>
                    <td><?= $glg["Category"] ?></td>
                </tr>
                <?php $i++ ?>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>