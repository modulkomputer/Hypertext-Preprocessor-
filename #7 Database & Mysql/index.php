<?php
// koneksi ke database
$connect = mysqli_connect("localhost", "root", "", "library");

// mengambil database table / mengambil query 
$result = mysqli_query($connect, "SELECT * FROM books");
$book = mysqli_fetch_assoc($result);
// mengecek apakah ada error
if (!$result) {
  echo mysqli_error($connect);
}

var_dump($book["author"]);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman admin</title>
  <style>
    .container {
      width: 700px;
      margin: 100px auto;
      font-family: Arial, Helvetica, sans-serif;
    }


    .tbbooks {
      width: 100%;
    }

    .tbbooks #td-img {
      text-align: center;
    }

    img {
      width: 20px;
      height: 20px;
      border-radius: 50%;
    }
  </style>
</head>

<body>
  <div class="container">
    <table class="tbbooks" border="1" cellspacing='0' cellpadding='5'>
      <tr>
        <th>#</th>
        <th>Title</th>
        <th>Author</th>
        <th>Publisher Year</th>
        <th>Price</th>
        <th>Cover</th>
        <th>Action</th>
      </tr>
      <tr>
        <td>1</td>
        <td>Web Developer</td>
        <td>Sandika</td>
        <td>2019</td>
        <td>160.700</td>
        <td id="td-img">
          <img src="img/sandika.jpg" alt="">
        </td>
        <td>
          <a href="#">Edit</a> |
          <a href="#">Delete</a>
        </td>
      </tr>
    </table>
  </div>
</body>

</html>