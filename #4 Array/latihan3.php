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
      <li><b>ID</b> <?php echo $mhs[0]; ?></li>
      <li><b>Nama</b> <?php echo $mhs[1]; ?></li>
      <li><b>Email</b> <?php echo $mhs[2]; ?></li>
      <li><b>Jurusan</b> <?php echo $mhs[3]; ?></li>
      <li><b>Jenis Kelamin</b> <?php echo $mhs[4]; ?></li>
    </ul>
  <?php endforeach; ?>
</body>

</html>