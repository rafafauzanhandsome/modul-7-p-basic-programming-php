<?php

$uts = 75;
$uas = 80;
$tugas = 70;

$status = ""; //lulus atau perbaikan 
$grade = ""; //a,b,c

$rata = ($uts + $uas + $tugas) / 3;

if ($rata >= 70 && $rata <= 79) {
    $status = "perbaikan";
    $grade = "C";
} elseif ($rata >= 80 && $rata <= 89) {
    $status = "lulus";
    $grade = "B";
} elseif ($rata >= 90 && $rata <= 100) {
    $status = "lulus";
    $grade = "A";
} else {
    $status = "-";
    $grade = "-";
}

echo "nilai uts  = " . $uts . "<br>";

echo "nilai uas = " . $uas . "<br>";

echo "nilai tugas = " . $tugas . "<br>";

echo "status = " . $status . "<br>";

echo "grade = " . $grade . "<br>";
