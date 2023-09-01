<?php
for ($angka = 1; $angka <= 50; $angka++) {
    if ($angka % 3 == 0 && $angka % 5 == 0) {
        echo "FooBar\n";
    } elseif ($angka % 3 == 0) {
        echo "Foo\n";
    } elseif ($angka % 5 == 0) {
        echo "Bar\n";
    } else {
        echo $angka . "\n";
    }
}
