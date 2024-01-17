<?php
// belajar fungsi (Function di dalam Function) di php 
function hitungUmur($thnLahir, $thnSekarang)
{
  $umur = $thnSekarang - $thnLahir;
  return $umur;
}
function perkenalan($nama, $salam)
{
  echo $salam . ",";
  echo "pernkenalkan, saya " . $nama . "<br>";
  echo "umur saya " . hitungUmur(1998, 2024) . "tahun <br>";
  echo "saya " . $nama . " senang bertemu dengan anda <br>";
}
perkenalan("muhaemin", "assalamuallikum");
