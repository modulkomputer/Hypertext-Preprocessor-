<?php
// belajar menampilkan array PHP untuk user
$arrayHuruf = ["M", "U", "H", "A", "E", "M", "I", "N", "D", "E"];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Array</title>
  <style>
    .container {
      width: 600px;
      margin: 0 auto;
      font-family: Arial, Helvetica, sans-serif;
      border: 1px solid red;
      overflow: hidden;
    }

    .kotak {
      width: 50px;
      height: 50px;
      background-color: salmon;
      color: white;
      margin: 3px;
      float: left;
      line-height: 50px;
      text-align: center;
    }

    h3 {
      text-align: center;
    }
  </style>
</head>

<body>
  <div class="container">
    <!-- menggunakan for -->
    <?php for ($i = 0; $i < count($arrayHuruf); $i++) : ?>
      <div class="kotak"><?php echo $arrayHuruf[$i]; ?></div>
    <?php endfor; ?>

    <!-- mengunakan foreach -->
    <?php foreach ($arrayHuruf as $arrHuruf) : ?>
      <div class="kotak"><?php echo $arrHuruf; ?></div>
    <?php endforeach; ?>
  </div>
</body>

</html>