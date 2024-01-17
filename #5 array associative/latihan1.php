<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Array Associative</title>
  <style>
    .kotak {
      width: 50px;
      height: 50px;
      line-height: 50px;
      text-align: center;
      background-color: greenyellow;
      color: black;
      transition: .1s;
      margin: 5px;
    }

    .kotak:hover {
      transform: rotate(180deg);
      border-radius: 50%;
    }
  </style>
</head>

<body>
  <?php
  // belarjar array associative di PHP
  $kumpulanText = [
    ["A", "K", "T"],
    ["O", "R", "Y"],
    ["Q", "C", "B"]
  ]
  ?>

  <!-- menampilkan array untuk user -->
  <!-- foreach pertama untuk memanggil array luar(pertama) -->
  <?php foreach ($kumpulanText as $pecahText) : ?>
    <!-- foreach kedua untuk menampilkan array didalam (kedua) -->
    <?php foreach ($pecahText as $text) : ?>
      <div class="kotak"><?php echo $text; ?></div>
    <?php endforeach; ?>
  <?php endforeach; ?>

</body>

</html>