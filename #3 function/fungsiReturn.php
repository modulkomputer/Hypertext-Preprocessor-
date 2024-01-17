<?php
// belajar function di PHP
// untuk menghitung umur
function itungUmur($thnLahir, $thnSekarang)
{
  $umur = $thnSekarang - $thnLahir;
  return $umur;
}
echo " umur saya adalah " . itungUmur(1959, 2024) . " tahun";
