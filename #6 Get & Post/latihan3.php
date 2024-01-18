<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan Metod POST</title>
</head>

<body>
  <p>Selamat datang <?php echo $_POST["nama"]; ?>, ini adalah data anda:</p>
  <p>Email : <?php echo $_POST["email"]; ?></p>
  <p>Tanggal lahir : <?php echo $_POST["tgl"]; ?></p>
  <p>Jenik kelamin : <?php echo $_POST['jk']; ?></p>
  <p>Agama : <?php echo $_POST["agama"]; ?></p>
  <p>Alamat : <?php echo $_POST["alamat"]; ?></p>
</body>

</html>