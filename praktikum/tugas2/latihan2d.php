<?php
/*
Farhan Alfauzi
203040085
Shift Kamis 08.00 - 09.00
*/
?>

<?php
function hitungDeterminan($a, $b, $c, $d)
{

    //baris code perhitung detertiminan
    //menampilkan matriks

    echo "<table style = 'border-left: 2px solid black; border-right: 2px solid black;' cellspacing= '5' cellpadding='5'>
        <tr>
            <td> $a </td>
            <td> $b </td>
        </tr>
        <tr>
            <td> $c </td>
            <td> $d </td>
        </tr>
        </table>";
    $determinan = (($a * $d) - ($c * $b));
    echo "<p style = padding-top: 3px;><b> Determinan dari matriks tersebut adalah $determinan </b></p>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>Latihan2d_203040085</title>
    <style>
        .code {
            border: 1px solid black;
            padding: 15px;
            color: black;
            width: 320px;
        }
    </style>
</head>

<body>
    <div class="code">
        <?php
        hitungDeterminan(1, 2, 3, 4)
        ?>
    </div>
</body>

</html>