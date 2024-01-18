<?php
// belajar array associative 2 di PHP
$daftarYoutbeBelajar = [
  [
    "author"    => "Sandika Galih",
    "channel"   => "Web Programming UNPAS",
    "link"      => "https://www.youtube.com/@sandhikagalihWPU",
    "category"  => "Web Developer",
    "photo"     => "sandika.jpg"
  ],
  [
    "author"    => "Faqihza Muhklis",
    "channel"   => "Kelas Terbuka",
    "link"      => "https://www.youtube.com/@KelasTerbuka",
    "category"  => "Struktur Pemrograman",
    "photo"     => "faqihza.jpg"
  ]
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GET</title>
</head>

<body>
  <ul>
    <?php foreach ($daftarYoutbeBelajar as $youtube) : ?>
      <li>
        <a href="tampilDari4.php?author=<?php echo $youtube["author"]; ?>&channel=<?php echo $youtube["channel"]; ?>&link=<?php echo $youtube["link"]; ?>&category=<?php echo $youtube["category"]; ?>&photo=<?php echo $youtube["photo"]; ?>">
          <?php echo $youtube["author"]; ?></a>
      </li>

    <?php endforeach; ?>
  </ul>
</body>

</html>