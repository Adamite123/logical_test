<?php
$aplikasi[1] = 'gtAkademik';
$aplikasi[2] = 'gtFinansi';
$aplikasi[3] = 'gtPerizinan';
$aplikasi[4] = 'eCampuz';
$aplikasi[5] = 'eOviz';

$i = 1; 

while (isset($aplikasi[$i])) {
    echo $aplikasi[$i] . "<br>";
    $i++; 
}
