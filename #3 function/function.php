<?php
// belajar fungsi (Function) di php
function perkenalan($nama, $salam)
{
  echo $salam . ",";
  echo "perkenalkan, nama saya " . $nama . "<br>";
  echo "senang berkenalan dengan anda <br>";
}
perkenalan("muhaemin", "hai");
echo "<hr>";

$saya = "muhaemin";
$ucapan = "assalamuallaikum";
perkenalan($saya, $ucapan);
