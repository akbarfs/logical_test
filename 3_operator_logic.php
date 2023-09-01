<?php

function pembagian($bilangan1, $bilangan2) {
    if ($bilangan2 == 0) {
        throw new InvalidArgumentException("Pembagi tidak boleh nol");
    }

    $q = 0;
    while ($bilangan1 >= $bilangan2) {
        $bilangan1 -= $bilangan2;
        $q++;
    }

    return $q;
}

// Contoh penggunaan fungsi
$bilangan1 = 20;
$bilangan2 = 4;
$hasil = pembagian($bilangan1, $bilangan2);
echo "$bilangan1 : $bilangan2 menghasilkan output $hasil";