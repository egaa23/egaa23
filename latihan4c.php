<?php
// Membuat associative array dengan negara sebagai key dan ibukota sebagai value
$negara_asean = array(
    "Indonesia" => "D.K.I. Jakarta",
    "Singapura" => "Singapura",
    "Malaysia" => "Kuala Lumpur",
    "Brunei" => "Bandar Seri Begawan",
    "Thailand" => "Bangkok",
    "Laos" => "Vientiane",
    "Filipina" => "Manila",
    "Myanmar" => "Naypyidaw"
);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Negara ASEAN dan Ibukota</title>
</head>
<body>

<h3>Daftar Negara ASEAN dan Ibukota :</h3>
<ul>
    <?php
    // Menggunakan foreach untuk menampilkan negara dan ibukota
    foreach ($negara_asean as $negara => $ibukota) {
        echo "<li>$negara : $ibukota</li>";
    }
    ?>
</ul>

</body>
</html>
