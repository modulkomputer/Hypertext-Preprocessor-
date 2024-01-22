<?php
$database = mysqli_connect("localhost", "root", "", "library");


function query($query)
{
  global $database;
  // ambil data dari table books / query data books
  $result = mysqli_query($database, "SELECT * FROM books"); //result adalah lemari
  // membuat kotak kosong
  $rows = []; //isinya array kosong
  // ambil datanya menggunakan looping
  while ($row = mysqli_fetch_assoc($result)) { //baju yang dimabil dari setiap looping
    $rows[] = $row;
  }
  return $rows;
}

function add($data)
{
  global $database;
  // ambil data dari tiap elemen dalam form
  $title = ($data["title"]);
  $author = ($data["author"]);
  $publisher_year = ($data["publisher_year"]);
  $price = ($data["price"]);
  $cover = ($data["cover"]);

  // query insert data
  $query = "INSERT INTO books(title, author, publisher_year, price, cover) VALUES ('$title','$author','$publisher_year','$price','$cover')";
  mysqli_query($database, $query);
  return mysqli_affected_rows($database);
}
