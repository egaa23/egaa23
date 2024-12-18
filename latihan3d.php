<?php
function faktorial($n) {
  // Cek jika bilangan kurang dari 0
  if ($n < 0) {
    return "Faktorial tidak terdefinisi untuk bilangan negatif";
  }

  // Kasus dasar: faktorial 0 adalah 1
  if ($n == 0) {
    return 1;
  }

  // Hitung faktorial secara rekursif
  return $n * faktorial($n - 1);
}

// Contoh penggunaan:
$bilangan = 5;
$hasil = faktorial($bilangan);
echo "Faktorial dari " . $bilangan . " = " . $hasil;
?>
