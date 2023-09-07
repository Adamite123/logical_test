<?php
for ($i = 1; $i <= 50; $i++) {
    // Cek apakah angka merupakan kelipatan tiga dan lima sekaligus
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FooBar "."<br>";
    }
    // Cek apakah angka merupakan kelipatan tiga
    elseif ($i % 3 == 0) {
        echo "Foo "."<br>";
    }
    // Cek apakah angka merupakan kelipatan lima
    elseif ($i % 5 == 0) {
        echo "Bar "."<br>";
    }
    // Jika bukan kelipatan tiga atau lima, cetak angka itu sendiri
    else {
        echo $i ."<br>";
    }
}
