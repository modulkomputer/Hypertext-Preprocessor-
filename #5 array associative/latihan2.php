<?php
// belajar array associative 2 di PHP
$daftarYoutbeBelajar = [
  [
    "author"    => "Sandika Galih",
    "channel"   => "Web Programming UNPAS",
    "link"      => "https://www.youtube.com/@sandhikagalihWPU",
    "category"  => ["HTML", "CSS", "Javascript", "PHP", "Laravel", "Codingiter"],
    "photo"     => "sandika.jpg"
  ]
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Channel Programming ID</title>
</head>

<body>
  <h3>Daftar Channel Belajar Programming Indonesia</h3>
  <?php foreach ($daftarYoutbeBelajar as $youtubeBelajar) : ?>
    <ul>
      <li><b>Author </b><?= $youtubeBelajar["author"]; ?></li>
      <li><b>Channel </b><?= $youtubeBelajar["channel"]; ?></li>
      <li><b>Link </b><?= $youtubeBelajar["link"]; ?></li>
      <li><b>Category </b><?= $youtubeBelajar["category"]; ?></li>
      <li><img src="img/<?= $youtubeBelajar["photo"]; ?>" </li>

    </ul>
  <?php endforeach; ?>
</body>

</html>