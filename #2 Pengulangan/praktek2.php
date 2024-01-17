<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Table HTML dengan Pengulangan PHP</title>
  <style>
    table {
      border-collapse: collapse;
      width: 50%;
      margin: 20px;
    }

    table,
    th,
    td {
      border: 1px solid black;
    }

    th,
    td {
      padding: 10px;
      text-align: center;
    }
  </style>
</head>

<body>

  <?php
  // Jumlah baris dan kolom
  $jumlahBaris = 5;
  $jumlahKolom = 3;

  echo "<table>";

  // Header tabel
  echo "<tr>";
  for ($kolom = 1; $kolom <= $jumlahKolom; $kolom++) {
    echo "<th>Kolom $kolom</th>";
  }
  echo "</tr>";

  // Isi tabel dengan pengulangan
  for ($baris = 1; $baris <= $jumlahBaris; $baris++) {
    echo "<tr>";
    for ($kolom = 1; $kolom <= $jumlahKolom; $kolom++) {
      $nilai = ($baris - 1) * $jumlahKolom + $kolom;
      echo "<td>$nilai</td>";
    }
    echo "</tr>";
  }

  echo "</table>";
  ?>

</body>

</html>