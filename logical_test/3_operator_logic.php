<?php
function divideIntegers($dividend, $divisor) {
    if ($divisor == 0) {
        // Penanganan jika pembagi adalah 0
        return "Pembagian oleh 0 tidak diperbolehkan.";
    }

    $quotient = 0;
    while ($dividend >= $divisor) {
        $dividend -= $divisor;
        $quotient++;
    }

    return $quotient;
}

$hasil = divideIntegers(7, 2); // Output: 3
echo "7 : 2 = " . $hasil . "<br>";

$hasil = divideIntegers(8, 4); // Output: 2
echo "8 : 4 = " . $hasil . "<br>";

