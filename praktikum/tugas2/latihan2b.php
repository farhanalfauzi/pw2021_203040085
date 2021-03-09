<?php
/*
Farhan Alfauzi
203040085
Shift Kamis 08.00 - 09.00
*/
?>

<?php
$jawabanIsset = "Isset adalah = Digunakan untuk memeriksa apakah suatu variabel sudah diatur atau belum. <br> <br>";
$jawabanEmpty = "Empty adalah = Digunakan untuk membuat sebuah validasi dengan php untuk melakukan pemeriksaan terhadap variabel-variabel yang berada di luar php.";

$GLOBALS["isset"] = $jawabanIsset;
$GLOBALS["empty"] = $jawabanEmpty;


function soal($style)
{
    echo "<div class = $style>
    <p>" . $GLOBALS['isset'] . "</p>
    <p>" . $GLOBALS['empty'] . "</p>
    </div>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Latihan2b_203040083</title>
    <style>
        .box {
            border: 1px solid black;
            padding-left: 10px;
            font-family: Arial, Helvetica, sans-serif;
            line-height: 10px;
        }
    </style>
</head>

<body>
    <?php
    echo soal("box");
    ?>
</body>

</html>