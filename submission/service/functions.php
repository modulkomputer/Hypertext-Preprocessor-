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
