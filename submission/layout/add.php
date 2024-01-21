<?php
require "service/functions.php";

// cek apakah tombol btn-add sudah diklik apa belum?
if (isset($_POST["btn-add"])) {
  // cek apakah data berhasil ditambahkan atua tidak
  if (add($_POST) > 0) {
    echo
    "
    <script>
    alert('data berhasil ditambahkan';
    document.location.href = 'index.php';
    </script>
    ";
  } else {
    echo
    "
    <script>
    alert('data gagal ditambahkan';
    document.location.href = 'index.php';
    </script>
    ";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Book</title>
</head>

<body>
  <div class="kotak">
    <form action="" method="post">
      <table>
        <tr>
          <td><label for="title">Title</label></td>
          <td><input type="text" name="title" id="title"></td>
        </tr>
        <tr>
          <td><label for="author">Author</label></td>
          <td><input type="text" name="title" id="author"></td>
        </tr>
        <tr>
          <td><label for="publisher_year">Publisher Year</label></td>
          <td><input type="text" name="publisher_year" id="publisher_year"></td>
        </tr>
        <tr>
          <td><label for="price">Price </label></td>
          <td><input type="number" name="price" id="price"></td>
        </tr>
        <tr>
          <td><label for="cover">Cover</label></td>
          <td><input type="file" name="cover" id="cover"></td>
        </tr>
        <tr>
          <td></td>
          <td><button type="submit" name="btn-add">Kirim</button></td>
        </tr>
      </table>
    </form>
  </div>
</body>

</html>