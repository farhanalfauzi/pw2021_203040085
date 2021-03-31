<?php
/*
Farhan Alfauzi
203040085
Shift Kamis 8.00 - 9.00
*/
?>

<?php
$conn = mysqli_connect("localhost", "root", "");
mysqli_select_db($conn, "pw_tubes_203040085");
$result = mysqli_query($conn, "SELECT * FROM gelang");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan4a_203040085</title>
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
            <?php $i = 1;?>
            <?php while($gl = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td><?= $i; ?></td> 
                    <td><img src="assets/img/<?= $gl["Picture"]; ?>"></td>
                    <td><?= $gl["Product Name"] ?></td>
                    <td><?= $gl["Description"] ?></td>
                    <td><?= $gl["Price"] ?></td>
                    <td><?= $gl["Category"] ?></td>
                </tr>
                <?php $i++ ?>
            <?php endwhile; ?>
        </table>
    </div>
</body>
</html>