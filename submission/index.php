<?php
require "service/functions.php";
// varibale book di isi dengan kotak tadi
$book = query("SELECT * FROM books");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman admin</title>
  <link rel="stylesheet" href="assets/style.css">
</head>

<body>
  <div class="container">
    <a href="layout/add.php"><button class="btn-add">Add Book <i class="fa-solid fa-plus"></i></button></a>
    <form class="site-search" action="" method="post">
      <input type="search" id="site-search" name="site-search">
      <button><i class="fa-solid fa-magnifying-glass"></i></button>
    </form>
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
      <?php foreach ($book as $row) : ?>
        <tr>
          <td><?php echo $i; ?></td>
          <td><?php echo $row["title"]; ?></td>
          <td><?php echo $row["author"]; ?></td>
          <td><?php echo $row["publisher_year"]; ?></td>
          <td><?php echo $row["price"]; ?></td>
          <td id="td-img">
            <img src="assets/img/<?php echo $row["cover"]; ?>" alt="">
          </td>
          <td>
            <a class="edit" href="#">Edit</a> |
            <a class="delete" href="layout/delete.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('Yakin!')">Delete</a>
          </td>
        </tr>
        <?php $i++; ?>
      <?php endforeach; ?>
    </table>
  </div>
  <script src="https://kit.fontawesome.com/3cd7c43e85.js" crossorigin="anonymous"></script>
</body>

</html>