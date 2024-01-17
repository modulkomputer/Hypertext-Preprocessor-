<?php
$mahasiswa = [
  ["0903843849", "Muhaemin", "muhaemin.ugm.co.id", "Teknik Informatika", "Laki-laki"],
  ["0903843849", "Muhaemin", "muhaemin.ugm.co.id", "Teknik Informatika", "Laki-laki"],
  ["0903843849", "Muhaemin", "muhaemin.ugm.co.id", "Teknik Informatika", "Laki-laki"],
  ["0903843849", "Muhaemin", "muhaemin.ugm.co.id", "Teknik Informatika", "Laki-laki"],
  ["0903843849", "Muhaemin", "muhaemin.ugm.co.id", "Teknik Informatika", "Laki-laki"]
];

?>
<html>

<head>
  <title>Latihan Array</title>
</head>

<body>
  <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
      <li>ID <?php echo $mhs[0]; ?></li>
      <li>Nama <?php echo $mhs[1]; ?></li>
      <li>Email <?php echo $mhs[2]; ?></li>
      <li>Jurusan <?php echo $mhs[3]; ?></li>
      <li>Jenis Kelamin <?php echo $mhs[4]; ?></li>
    </ul>
  <?php endforeach; ?>
</body>

</html>