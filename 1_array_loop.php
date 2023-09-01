<?php
//1. Melanjutkan skrip berikut dengan menggunakan perulangan while untuk menampilkan semua data pada array ke web browser

$aplikasi[1] = 'gtAkademik';
$aplikasi[2] = 'gtFinansi';
$aplikasi[3] = 'gtPerizinan';
$aplikasi[4] = 'eCampuz';
$aplikasi[5] = 'eQuiz';

$x = 1;

while ($x <= 5) {
    echo "Aplikasi ke-$x: " . $aplikasi[$x] . "<br>";
    $x++;
}

