<?php
/*
Farhan Alfauzi
203040085
Shift Kamis 08.00 - 09.00
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2a_203040085</title>
    <style>
        .tulisan {
            font-size: 28px;
            font-family: arial;
            color: #8c782d;
            font-style: italic;
            font-weight: bolder;
            padding-left: 10px;
        }

        .pembungkus {
            border: 2px solid black;
            box-shadow: 1px 1px 15px;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <?php
    function gantiStyle($tulisan, $style1, $style2)
    {
        echo "<div class = '$style1'> 
                <h3 class =  '$style2'>  $tulisan </h3>
            </div>";
    }
    ?>

    <?php
    echo gantiStyle("Selamat datang di praktikum PW", "pembungkus", "tulisan");
    ?>
</body>

</html>