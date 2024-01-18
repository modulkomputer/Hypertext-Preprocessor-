<?php
// belajar metod POST

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan Metod POST </title>
</head>

<body>
  <form action="latihan3.php" method="post">
    <h3>Form Registrasi</h3>
    <table>
      <tr>
        <td><label for="nama">Nama </label></td>
        <td><input type="text" name="nama" id="nama"></td>
      </tr>
      <tr>
        <td><label for="email">Email </label></td>
        <td><input type="email" name="email" id="email"></td>
      </tr>
      <tr>
        <td><label for="tgl">Tanggal Lahir</label></td>
        <td><input type="date" name="tgl" id="tgl"></td>
      </tr>
      <tr>
        <td><label for="jk">Jenis Kelamin</label></td>
        <td><input type="radio" name="jk" id="jk">Pria</td>
        <td><input type="radio" name="jk" id="jk">Wanita</td>
      </tr>
      <tr>
        <td><label for="agama">agama</label></td>
        <td>
          <select name="agama" id="agama">
            <option value="islam">Islam</option>
            <option value="hindu">Hindu</option>
            <option value="kristen">Kristen</option>
            <option value="katolik">Katolik</option>

          </select>
        </td>
      </tr>
      <tr>
        <td><label for="alamat">Alamat</label></td>
        <td><textarea name="alamat" id="alamat" cols="21" rows="2"></textarea></td>
      </tr>
      <tr>
        <td></td>
        <td><button type="submit">Kirim!</button></td>
      </tr>
    </table>
  </form>
</body>

</html>