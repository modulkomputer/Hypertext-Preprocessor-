<?php
$connect = mysqli_connect("localhost", "root", "", "library");

function query($query)
{
  global $connect;
  $result = mysqli_query($connect, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

// fungsi add
function add($data)
{
  global $connect;
  $title = htmlspecialchars($data["title"]);
  $author = htmlspecialchars($data["author"]);
  $publisher_year = htmlspecialchars($data["publisher_year"]);
  $price = htmlspecialchars($data["price"]);
  $cover = htmlspecialchars($data["cover"]);


  // query insert data
  $query = "INSERT INTO books VALUES ('','$title', '$author','$publisher_year','$price','$cover')";
  mysqli_query($connect, $query);
  return mysqli_affected_rows($connect);
}
