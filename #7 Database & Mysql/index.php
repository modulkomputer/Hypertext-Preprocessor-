<?php
// koneksi ke database
$connect = mysqli_connect("localhost", "root", "", "library");

// mengambil database table / mengambil query 
$result = mysqli_query($connect, "SELECT * FROM books");
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
      margin: 50px auto;
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
      <!-- untuk mengulang urutan id -->
      <?php $i = 1; ?>
      <?php while ($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
          <td><?php echo $i; ?></td>
          <td><?php echo $row["title"]; ?></td>
          <td><?php echo $row["author"]; ?></td>
          <td><?php echo $row["publisher_year"]; ?></td>
          <td><?php echo $row["price"]; ?></td>
          <td id="td-img">
            <img src="img/<?php echo $row["cover"]; ?>" alt="">
          </td>
          <td>
            <a href="#">Edit</a> |
            <a href="#">Delete</a>
          </td>
        </tr>
        <?php $i++; ?>
      <?php endwhile; ?>
    </table>
  </div>
</body>

</html>