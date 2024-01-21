<?php
// cek apakah tombol submit sudah di tekan atau belum
if (isset($_POST["submit"])) {
  // cek name dan password
  if ($_POST["name"] == "admin" && $_POST["password"] == "123") {
    // jika bener, ridirect kehalaman home
    header("Location: index.php");
    exit();
  } else {
    // kalau salah, tampilkan kesalahan
    $error = true;
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KDYOU | Login</title>
</head>

<body>
  <h2>Halaman Login</h2>
  <?php if (isset($error)) : ?>
    <p style="color:red;">username & password salah</p>
  <?php endif; ?>
  <form action="" method="post">
    <table>
      <tr>
        <td><label for="name">Username</label></td>
        <td><input type="text" name="name" id="name"></td>
      </tr>
      <tr>
        <td><label for="password">Password</label></td>
        <td><input type="password" name="password" id="password"></td>
      </tr>
      <tr>
        <td></td>
        <td><button type="submit" name="submit">Kirim</button></td>
      </tr>
    </table>
  </form>
</body>

</html>