<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Book</title>
</head>

<body>
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
        <td><button type="submit" name="submit">Kirim</button></td>
      </tr>
    </table>
  </form>
</body>

</html>