<?php
// belajar fungsi (Funcstion Return) di php
function hitungUmur($thnLahir, $thnSekarang)
{
  $umur = $thnSekarang - $thnLahir;
  return $umur;
}
echo "umur saya adalah " . hitungUmur(1998, 2024) . " tahun";
