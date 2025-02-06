<?php
$total_belanja = 500;
echo "total belanja anda $total_belanja <br>";


if ($total_belanja > 1000) {
    echo "anda mendapatkan diskon 10%";
} else {
    echo
    "anda tidak mendapatkan diskon";
}


$hari = "senin";
if ($hari == "senin") {
    echo "mengenakan seragam putih abu";
} else if ($hari == "selasa") {
    echo "mengenakan seragam pramuka";
} else if ($hari == "rabu") {
    echo "mengenakan seragam produk";
} else if ($hari == "kamis") {
    echo "mengenakan seragam batik";
} else if ($hari == "jumat") {
    echo "mengenakan seragam gamis";
}
