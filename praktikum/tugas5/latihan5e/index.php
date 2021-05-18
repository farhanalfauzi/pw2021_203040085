<?php 
// menghubungkan dengan file php lainnya
require 'php/functions.php';

// melakukan query
$gelang = query("SELECT * FROM gelang")
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Document</title>
</head>
<body>
  <div class="container">
    <?php foreach ($gelang as $g) : ?>
      <p class="nama">
        <a href="php/detail.php?id=<?= $g['id']; ?>">
            <?= $g["produk"]; ?>
        </a>
      </p>
    <?php endforeach; ?>
  </div>
</body>
</html>