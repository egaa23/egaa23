<?php
// Fungsi untuk menambahkan kelas CSS pada tulisan
function ganti_style($tulisan, $kelas) {
    
    return "<span class='$kelas'>$tulisan</span>";
}

// Variabel tulisan dan kelas
$tulisan = "Hello World! Here I come!";
$kelas = "ganti-style";

// Menampilkan hasil dengan style yang diubah
echo "<i>$tulisan</i>";
?>
