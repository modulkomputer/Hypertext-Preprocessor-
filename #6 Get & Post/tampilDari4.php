<?php
// cek apakah tidak ada data di $_GET
if (!isset($_GET["author"]) || !isset($_GET["channel"]) || !isset($_GET["link"]) || !isset($_GET["category"]) || !isset($_GET["photo"])) {
  // ridirect atau kembalikan
  header("Location:latihan4.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tampil Data</title>
</head>

<body>
  <ul>
    <li><?php echo $_GET["author"]; ?></li>
    <li><?php echo $_GET["channel"]; ?></li>
    <li><?php echo $_GET["link"]; ?></li>
    <li><?php echo $_GET["category"]; ?></li>
    <li>
      <img src="img/<?php echo $_GET["photo"]; ?>" alt="">
    </li>
    <p><a href="latihan4.php">kembali ke halaman latihan4.php</a> </p>

  </ul>
</body>

</html>