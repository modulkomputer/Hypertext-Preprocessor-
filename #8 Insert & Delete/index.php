<?php
$database = mysqli_connect("localhost", "root", "", "library");
function query($query)
{
  global $database;
  $result = mysqli_query($database, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $row;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman admin</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container">
    <a href="layout/add.php"><button class="btn-add">Add Book </button></a>
    <form class="site-search" action="" method="post">
      <input type="search" id="site-search" name="site-search">
      <button>search</button>
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

    </table>
  </div>
</body>

</html>