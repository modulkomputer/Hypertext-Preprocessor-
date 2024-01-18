<?php
// belajar metod GET
$nama = $_GET["name"];
$umur = $_GET["umur"];
?>
<html>

<head>
  <title>Metode GET</title>
</head>

<body>
  <form action="" method="GET">
    <input type="text" name="name" placeholder="Masukan Nama"> <br>
    <input type="text" name="umur" placeholder="Masukan Umur"> <br>
    <button type="submit">Kirim</button> <br>

    <p>Nama Saya adalah <?php echo $nama; ?> </p>
    <p>Dan Umur saya adalah <?php echo $umur; ?></p>
  </form>
</body>

</html>