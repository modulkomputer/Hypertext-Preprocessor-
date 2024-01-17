<?php
// belajar pengkondisian Else If di php
$usia = 25;
if($usia < 18){
    echo "Anda masih di bawah umur";
}elseif($usia >= 18 && $usia <= 30){
    echo "Selamat, anda sudah masa dewasa muda";
}else{
    echo "dewasa";
}

?>