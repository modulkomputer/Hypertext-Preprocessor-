<html>

<head>
  <title>Metode POST</title>
</head>

<body>
  <form action="" method="post">
    <input type="text" name="nama" placeholder="Masukan Nama"> <br>
    <input type="text" name="umur" placeholder="Masukan Umur"> <br>
    <button type="submit" name="submit">Kirim</button> <br>
  </form>
  <!-- jika tombol submit sudah di tekan tapilakan tag <p>, kalau belum kosong -->
  <?php if (isset($_POST["submit"])) : ?>
    <p>Hallo, selamat datang <?php echo $_POST["nama"]; ?> </p>
    <p>Umur saya adalah <?php echo $_POST["umur"]; ?></p>
  <?php endif; ?>
</body>

</html>