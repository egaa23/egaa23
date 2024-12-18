<?php
// Contoh variabel
$nama = "Budi";
$umur = 25;
$kota = ""; // String kosong
$nilai = 0;
$suka_coding = true;
$hobi = []; // Array kosong
$belum_dideklarasikan;

// Menggunakan isset()
if (isset($nama)) {
    echo "Variabel \$nama telah dideklarasikan dan memiliki nilai.<br>";
}

if (!isset($belum_dideklarasikan)) {
    echo "Variabel \$belum_dideklarasikan belum dideklarasikan.<br>";
}

// Menggunakan empty()
if (empty($kota)) {
    echo "Variabel \$kota kosong.<br>";
}

if (!empty($umur)) {
    echo "Variabel \$umur tidak kosong.<br>";
}
?>
