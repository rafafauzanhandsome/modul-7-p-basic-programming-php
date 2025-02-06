<?php

$gaji = 12000000;
$status = "tetap"; //pegawai tetap atau tidak tetap;


if ($gaji >= 15000000) {
    $pajak = 0.20;
    $persen = 20;
} elseif ($gaji >= 10000000 && $gaji <= 15000000) {
    $pajak = 0.15;
    $persen = 15;
} elseif ($gaji >= 5000000 && $gaji <= 10000000) {
    $pajak = 0.10;
    $persen = 10;
} elseif ($gaji <= 5000000) {
    $pajak = 0.5;
    $persen = 5;
} else {
    $pajak = "";
}

if ($status == "tetap") {
    $pajak = $pajak + 0.05;
    $persen = $persen + 5;
}


$potongan = $gaji * $pajak;
$bersih = $gaji - $potongan;

echo "<br><br>====== data diri ======<br><br>";
echo "Gaji bulanan : " . $gaji . "<br>";
echo "Status pegawai : " . $status . "<br>";
echo "Tetap pajak  : " . $persen . "% <br>";
echo "Potongan pajak : " . $potongan . "<br>";
echo "Gaji bersih : " . $bersih . "<br>";
